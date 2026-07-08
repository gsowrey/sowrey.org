import Link from 'next/link'
import {notFound} from 'next/navigation'

import {ContactSection} from '../../../components/contact-section'
import {client} from '../../../lib/sanity/client'
import {allProjectsQuery, projectBySlugQuery} from '../../../lib/sanity/queries'
import type {Project} from '../../../lib/sanity/types'

type ProjectPageProps = {
  params: Promise<{slug: string}>
}

export async function generateStaticParams() {
  let projects: Project[] = []

  try {
    projects = await client.fetch<Project[]>(allProjectsQuery)
  } catch (error) {
    console.error('Failed to fetch project slugs from Sanity', error)
  }

  return projects
    .filter((project) => project.slug?.current)
    .map((project) => ({slug: project.slug.current}))
}

export default async function ProjectPage({params}: ProjectPageProps) {
  const {slug} = await params
  let project: Project | null = null

  try {
    project = await client.fetch<Project | null>(projectBySlugQuery, {slug})
  } catch (error) {
    console.error(`Failed to fetch project ${slug} from Sanity`, error)
  }

  if (!project) {
    notFound()
  }

  return (
    <main>
      <section className="section">
        <p className="eyebrow">Project Detail</p>
        <h1>{project.projectName}</h1>
        <p>
          <span className="pill">Client: {project.clientName}</span>
          <span className="pill">Industry: {project.industry}</span>
          <span className="pill">Role: {project.role}</span>
          <span className="pill">Team Size: {project.teamSize}</span>
        </p>
      </section>

      <section className="section project-shell">
        <article className="card">
          <h2>Challenge</h2>
          <p>{project.challenge}</p>
          <h2>Delivery Description</h2>
          <p>{project.deliveryDescription}</p>
          <p>
            <Link href="/projects">Back to all projects</Link>
          </p>
        </article>
        <aside className="kpi-block">
          <h3>Engagement Summary</h3>
          <p>
            This delivery focused on aligning stakeholders, reducing operational friction, and
            creating a practical implementation path.
          </p>
        </aside>
      </section>

      <ContactSection />
    </main>
  )
}
