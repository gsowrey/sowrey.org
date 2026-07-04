# Sowrey Digital Transformation Website

Next.js + TypeScript website connected to Sanity. The project includes:

- Sanity schema: `Project`
- Next.js pages: homepage, projects index, project detail
- Contact form API route using Brevo transactional email

## Project Structure

- `schemaTypes/project.ts`: Project schema definition
- `app/page.tsx`: Homepage template
- `app/projects/page.tsx`: Projects landing page
- `app/projects/[slug]/page.tsx`: Project detail template
- `app/api/contact/route.ts`: Brevo email integration

## Environment Variables

Copy `.env.example` to `.env.local` and update values:

```bash
cp .env.example .env.local
```

Required values:

- `NEXT_PUBLIC_SANITY_PROJECT_ID`
- `NEXT_PUBLIC_SANITY_DATASET`
- `NEXT_PUBLIC_SANITY_API_VERSION`
- `BREVO_API_KEY`
- `CONTACT_TO_EMAIL`
- `CONTACT_FROM_EMAIL`

## Development

Run the Next.js app:

```bash
npm run dev
```

Run Sanity Studio:

```bash
npm run studio:dev
```

## Build

Build the Next.js app:

```bash
npm run build
```

Build the Sanity Studio:

```bash
npm run studio:build
```
