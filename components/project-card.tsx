import Link from 'next/link'

import type {Project} from '../lib/sanity/types'

type ProjectCardProps = {
  project: Project
}

export function ProjectCard({project}: ProjectCardProps) {
  return (
    <article className="card">
      <span className="pill">{project.industry}</span>
      <h3>{project.projectName}</h3>
      <p className="muted">{project.challenge}</p>
      <p>
        <span className="pill">Client: {project.clientName}</span>
        <span className="pill">Team: {project.teamSize}</span>
        <span className="pill">Role: {project.role}</span>
      </p>
      <p>
        <Link href={`/projects/${project.slug.current}`}>Read project story</Link>
      </p>
    </article>
  )
}
