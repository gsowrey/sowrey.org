import Link from 'next/link'

import {ContactSection} from '../components/contact-section'
import {ProjectCard} from '../components/project-card'
import {client} from '../lib/sanity/client'
import {featuredProjectsQuery} from '../lib/sanity/queries'
import type {Project} from '../lib/sanity/types'

export default async function HomePage() {
  const projects = await client.fetch<Project[]>(featuredProjectsQuery)

  return (
    <main>
      <section className="hero">
        <div className="hero-content">
          <div>
            <p className="eyebrow">Digital Transformation Consultant</p>
            <h1>From friction-heavy operations to practical digital momentum</h1>
            <p>
              I help SMBs and higher education teams untangle legacy process complexity, align
              decision-makers, and deliver high-value transformation outcomes with confidence.
            </p>
            <p>
              <Link href="/projects">Explore recent projects</Link>
            </p>
          </div>
          <aside className="hero-stats" aria-label="Consulting focus">
            <div className="stat">
              <strong>SMBs</strong>
              <span>Operational redesign and platform modernization</span>
            </div>
            <div className="stat">
              <strong>Higher Education</strong>
              <span>Cross-campus service delivery and stakeholder change management</span>
            </div>
            <div className="stat">
              <strong>End-to-End</strong>
              <span>Strategy, prioritization, and implementation support</span>
            </div>
          </aside>
        </div>
      </section>

      <section className="section">
        <div className="section-header">
          <h2>How I Work</h2>
        </div>
        <div className="grid columns-3">
          <article className="card">
            <h3>Diagnose</h3>
            <p>Map service pain points, constraints, and decision bottlenecks across teams.</p>
          </article>
          <article className="card">
            <h3>Design</h3>
            <p>Define operating models, delivery lanes, and implementation plans tied to outcomes.</p>
          </article>
          <article className="card">
            <h3>Deliver</h3>
            <p>Lead execution with transparent cadence, measurable progress, and risk controls.</p>
          </article>
        </div>
      </section>

      <section className="section">
        <div className="section-header">
          <h2>Featured Projects</h2>
          <Link href="/projects" className="muted">
            View all projects
          </Link>
        </div>
        {projects.length ? (
          <div className="project-list">
            {projects.map((project) => (
              <ProjectCard key={project._id} project={project} />
            ))}
          </div>
        ) : (
          <article className="card">
            <h3>No projects published yet</h3>
            <p className="muted">Add your first Project document in Sanity Studio.</p>
          </article>
        )}
      </section>

      <ContactSection />
    </main>
  )
}
