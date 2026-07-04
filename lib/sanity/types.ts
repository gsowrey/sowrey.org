export type Project = {
  _id: string
  _createdAt: string
  projectName: string
  clientName: string
  slug: {
    current: string
  }
  industry: string
  challenge: string
  teamSize: string
  role: string
  deliveryDescription: string
}
