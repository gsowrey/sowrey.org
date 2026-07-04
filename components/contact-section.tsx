import {ContactForm} from './contact-form'

export function ContactSection() {
  return (
    <section className="contact" id="contact">
      <div className="contact-grid">
        <div>
          <p className="eyebrow">Contact</p>
          <h2>Make your next digital shift predictable</h2>
          <p>
            I partner with SMB and higher education leadership teams to prioritize roadmaps,
            modernize workflows, and reduce delivery risk.
          </p>
          <p className="muted">
            Typical projects include operating model redesign, stakeholder alignment, and execution
            support from strategy through implementation.
          </p>
        </div>
        <ContactForm />
      </div>
    </section>
  )
}
