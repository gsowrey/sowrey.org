'use client'

import {FormEvent, useState} from 'react'

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
  const [form, setForm] = useState<FormState>(initialState)
  const [status, setStatus] = useState('')
  const [isSending, setIsSending] = useState(false)

  async function handleSubmit(event: FormEvent<HTMLFormElement>) {
    event.preventDefault()
    setStatus('')
    setIsSending(true)

    try {
      const response = await fetch('/api/contact', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(form),
      })

      if (!response.ok) {
        throw new Error('Could not send request')
      }

      setForm(initialState)
      setStatus('Message sent. I will reply shortly.')
    } catch {
      setStatus('Message failed to send. Please try again in a moment.')
    } finally {
      setIsSending(false)
    }
  }

  return (
    <form onSubmit={handleSubmit}>
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
    </form>
  )
}
