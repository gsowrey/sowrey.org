import {createClient} from 'next-sanity'

export const apiVersion = process.env.NEXT_PUBLIC_SANITY_API_VERSION || '2026-07-03'

export const dataset = process.env.NEXT_PUBLIC_SANITY_DATASET || 'production'

export const projectId = process.env.NEXT_PUBLIC_SANITY_PROJECT_ID || 'vax4d7qu'

export const client = createClient({
  projectId,
  dataset,
  apiVersion,
  useCdn: false,
})
