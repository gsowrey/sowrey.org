import {NextResponse} from 'next/server'

type ContactPayload = {
  name?: string
  email?: string
  organization?: string
  message?: string
  recaptchaToken?: string
}

type RecaptchaVerifyResponse = {
  success: boolean
  score?: number
  action?: string
  challenge_ts?: string
  hostname?: string
  'error-codes'?: string[]
}

function escapeHtml(value: string) {
  return value
    .replaceAll('&', '&amp;')
    .replaceAll('<', '&lt;')
    .replaceAll('>', '&gt;')
    .replaceAll('"', '&quot;')
    .replaceAll("'", '&#39;')
}

function validate(payload: ContactPayload) {
  if (!payload.name?.trim()) {
    return 'Name is required.'
  }

  if (!payload.email?.trim() || !/^\S+@\S+\.\S+$/.test(payload.email)) {
    return 'A valid email is required.'
  }

  if (!payload.organization?.trim()) {
    return 'Organization is required.'
  }

  if (!payload.message?.trim() || payload.message.trim().length < 10) {
    return 'Message must be at least 10 characters.'
  }

  if (!payload.recaptchaToken?.trim()) {
    return 'reCAPTCHA verification failed.'
  }

  return null
}

async function verifyRecaptcha(token: string, ipAddress: string | null) {
  const secret = process.env.RECAPTCHA_SECRET_KEY

  if (!secret) {
    return {
      ok: false,
      status: 500,
      message: 'Contact form is not configured. Missing reCAPTCHA secret key.',
    }
  }

  const params = new URLSearchParams({
    secret,
    response: token,
  })

  if (ipAddress) {
    params.append('remoteip', ipAddress)
  }

  const response = await fetch('https://www.google.com/recaptcha/api/siteverify', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: params,
  })

  if (!response.ok) {
    return {
      ok: false,
      status: 502,
      message: 'Unable to verify reCAPTCHA. Please try again.',
    }
  }

  const verification = (await response.json()) as RecaptchaVerifyResponse
  const minScore = Number(process.env.RECAPTCHA_MIN_SCORE ?? 0.5)

  if (!verification.success) {
    return {
      ok: false,
      status: 400,
      message: 'reCAPTCHA verification failed. Please try again.',
    }
  }

  if (verification.action !== 'contact_form_submit') {
    return {
      ok: false,
      status: 400,
      message: 'reCAPTCHA action mismatch.',
    }
  }

  if ((verification.score ?? 0) < minScore) {
    return {
      ok: false,
      status: 400,
      message: 'reCAPTCHA score is too low. Please try again.',
    }
  }

  return {ok: true, status: 200, message: 'ok'}
}

export async function POST(request: Request) {
  const payload = (await request.json()) as ContactPayload
  const validationError = validate(payload)

  if (validationError) {
    return NextResponse.json({error: validationError}, {status: 400})
  }

  const ipAddress =
    request.headers.get('x-forwarded-for')?.split(',')[0]?.trim() ??
    request.headers.get('x-real-ip')

  const recaptcha = await verifyRecaptcha(payload.recaptchaToken!, ipAddress)

  if (!recaptcha.ok) {
    return NextResponse.json({error: recaptcha.message}, {status: recaptcha.status})
  }

  const apiKey = process.env.BREVO_API_KEY
  const toEmail = process.env.CONTACT_TO_EMAIL
  const fromEmail = process.env.CONTACT_FROM_EMAIL

  if (!apiKey || !toEmail || !fromEmail) {
    return NextResponse.json(
      {error: 'Contact form is not configured. Missing Brevo environment variables.'},
      {status: 500}
    )
  }

  const safeName = escapeHtml(payload.name!.trim())
  const safeEmail = escapeHtml(payload.email!.trim())
  const safeOrganization = escapeHtml(payload.organization!.trim())
  const safeMessage = escapeHtml(payload.message!.trim())

  const response = await fetch('https://api.brevo.com/v3/smtp/email', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'api-key': apiKey,
    },
    body: JSON.stringify({
      sender: {
        email: fromEmail,
        name: 'Sowrey Website',
      },
      to: [{email: toEmail}],
      replyTo: {
        email: payload.email,
        name: payload.name,
      },
      subject: `Website inquiry from ${payload.name}`,
      htmlContent: `
        <h2>New website contact form submission</h2>
        <p><strong>Name:</strong> ${safeName}</p>
        <p><strong>Email:</strong> ${safeEmail}</p>
        <p><strong>Organization:</strong> ${safeOrganization}</p>
        <p><strong>Message:</strong></p>
        <p>${safeMessage.replaceAll('\n', '<br/>')}</p>
      `,
    }),
  })

  if (!response.ok) {
    const details = await response.text()
    return NextResponse.json(
      {error: 'Failed to deliver email through Brevo.', details},
      {status: 502}
    )
  }

  return NextResponse.json({success: true})
}
