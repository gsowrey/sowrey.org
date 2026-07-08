'use client'

import Script from 'next/script'
import {FormEvent, useState} from 'react'

declare global {
  interface Window {
    grecaptcha?: {
      ready: (callback: () => void) => void
      execute: (siteKey: string, options: {action: string}) => Promise<string>
    }
  }
}

type FormState = {
  name: string
  email: string
  organization: string
  message: string
}

const initialState: FormState = {
  name: '',
  email: '',
  organization: '',
  message: '',
}

export function ContactForm() {
  const siteKey = process.env.NEXT_PUBLIC_RECAPTCHA_SITE_KEY
  const [form, setForm] = useState<FormState>(initialState)
  const [status, setStatus] = useState('')
  const [isSending, setIsSending] = useState(false)

  async function getRecaptchaToken() {
    if (!siteKey) {
      throw new Error('reCAPTCHA site key is missing')
    }

    if (!window.grecaptcha) {
      throw new Error('reCAPTCHA is not available')
    }

    return new Promise<string>((resolve, reject) => {
      window.grecaptcha?.ready(() => {
        window.grecaptcha
          ?.execute(siteKey, {action: 'contact_form_submit'})
          .then(resolve)
          .catch(reject)
      })
    })
  }

  async function handleSubmit(event: FormEvent<HTMLFormElement>) {
    event.preventDefault()
    setStatus('')
    setIsSending(true)

    try {
      const recaptchaToken = await getRecaptchaToken()

      const response = await fetch('/api/contact', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({...form, recaptchaToken}),
      })

      if (!response.ok) {
        throw new Error('Could not send request')
      }

      setForm(initialState)
      setStatus('Message sent. I will reply shortly.')
    } catch (error) {
      if (error instanceof Error && error.message) {
        setStatus(error.message)
      } else {
        setStatus('Message failed to send. Please try again in a moment.')
      }
    } finally {
      setIsSending(false)
    }
  }

  return (
    <form onSubmit={handleSubmit}>
      {siteKey ? (
        <Script src={`https://www.google.com/recaptcha/api.js?render=${siteKey}`} strategy="afterInteractive" />
      ) : null}
      <input
        value={form.name}
        onChange={(event) => setForm((current) => ({...current, name: event.target.value}))}
        placeholder="Name"
        required
      />
      <input
        type="email"
        value={form.email}
        onChange={(event) => setForm((current) => ({...current, email: event.target.value}))}
        placeholder="Email"
        required
      />
      <input
        value={form.organization}
        onChange={(event) => setForm((current) => ({...current, organization: event.target.value}))}
        placeholder="Organization"
        required
      />
      <textarea
        value={form.message}
        onChange={(event) => setForm((current) => ({...current, message: event.target.value}))}
        placeholder="What transformation problem are you solving?"
        rows={5}
        required
      />
      <button type="submit" disabled={isSending}>
        {isSending ? 'Sending...' : 'Start the Conversation'}
      </button>
      {status ? <p className="status">{status}</p> : null}
      <p className="status muted">
        This site is protected by reCAPTCHA and the Google{' '}
        <a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">
          Privacy Policy
        </a>{' '}
        and{' '}
        <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">
          Terms of Service
        </a>{' '}
        apply.
      </p>
    </form>
  )
}
