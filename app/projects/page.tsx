import {ContactSection} from '../../components/contact-section'
import {ProjectCard} from '../../components/project-card'
import {client} from '../../lib/sanity/client'
import {allProjectsQuery} from '../../lib/sanity/queries'
import type {Project} from '../../lib/sanity/types'

export const metadata = {
  title: 'Projects | Sowrey Digital',
}

export default async function ProjectsPage() {
  const projects = await client.fetch<Project[]>(allProjectsQuery)

  return (
    <main>
      <section className="section">
        <p className="eyebrow">Project Portfolio</p>
        <h1>Transformation work across SMB and higher education organizations</h1>
        <p className="muted">
          Case examples focused on process modernization, service redesign, and delivery maturity.
        </p>
      </section>

      <section className="section">
        {projects.length ? (
          <div className="project-list">
            {projects.map((project) => (
              <ProjectCard key={project._id} project={project} />
            ))}
          </div>
        ) : (
          <article className="card">
            <h3>No projects available</h3>
            <p className="muted">Create and publish a Project in Sanity Studio.</p>
          </article>
        )}
      </section>

      <ContactSection />
    </main>
  )
}
