import {NextResponse} from 'next/server'

type ContactPayload = {
  name?: string
  email?: string
  organization?: string
  message?: string
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

  return null
}

export async function POST(request: Request) {
  const payload = (await request.json()) as ContactPayload
  const validationError = validate(payload)

  if (validationError) {
    return NextResponse.json({error: validationError}, {status: 400})
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
