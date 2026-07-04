import {defineQuery} from 'next-sanity'

export const allProjectsQuery = defineQuery(`
  *[_type == "project"] | order(_createdAt desc) {
    _id,
    _createdAt,
    projectName,
    clientName,
    slug,
    industry,
    challenge,
    teamSize,
    role,
    deliveryDescription
  }
`)

export const featuredProjectsQuery = defineQuery(`
  *[_type == "project"] | order(_createdAt desc)[0...3] {
    _id,
    _createdAt,
    projectName,
    clientName,
    slug,
    industry,
    challenge,
    teamSize,
    role,
    deliveryDescription
  }
`)

export const projectBySlugQuery = defineQuery(`
  *[_type == "project" && slug.current == $slug][0] {
    _id,
    _createdAt,
    projectName,
    clientName,
    slug,
    industry,
    challenge,
    teamSize,
    role,
    deliveryDescription
  }
`)
