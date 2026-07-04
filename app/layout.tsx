import type {Metadata} from 'next'
import {IBM_Plex_Sans, Sora} from 'next/font/google'
import Link from 'next/link'

import './globals.css'

const heading = Sora({
  subsets: ['latin'],
  weight: ['600', '700'],
  variable: '--font-heading',
})

const body = IBM_Plex_Sans({
  subsets: ['latin'],
  weight: ['400', '500', '600'],
  variable: '--font-body',
})

export const metadata: Metadata = {
  title: 'Sowrey Digital Transformation Consulting',
  description:
    'Digital transformation consulting for SMBs and higher education organizations.',
}

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode
}>) {
  return (
    <html lang="en" className={`${heading.variable} ${body.variable}`}>
      <body>
        <div className="site-shell">
          <div className="container">
            <header className="nav">
              <Link href="/" className="brand">
                Sowrey
                <span className="brand-chip">Digital</span>
              </Link>
              <nav className="nav-links" aria-label="Main">
                <Link href="/">Home</Link>
                <Link href="/projects">Projects</Link>
                <a href="#contact">Contact</a>
              </nav>
            </header>
            {children}
          </div>
        </div>
      </body>
    </html>
  )
}
