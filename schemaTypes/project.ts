import {defineField, defineType} from 'sanity'

export const projectType = defineType({
  name: 'project',
  title: 'Project',
  type: 'document',
  fields: [
    defineField({
      name: 'projectName',
      title: 'Project Name',
      type: 'string',
      validation: (rule) => rule.required().min(2),
    }),
    defineField({
      name: 'clientName',
      title: 'Client Name',
      type: 'string',
      validation: (rule) => rule.required().min(2),
    }),
    defineField({
      name: 'slug',
      title: 'Slug',
      type: 'slug',
      options: {
        source: 'projectName',
        maxLength: 96,
      },
      validation: (rule) => rule.required(),
    }),
    defineField({
      name: 'industry',
      title: 'Industry',
      type: 'string',
      validation: (rule) => rule.required(),
    }),
    defineField({
      name: 'challenge',
      title: 'Challenge',
      type: 'text',
      rows: 4,
      validation: (rule) => rule.required().min(20),
    }),
    defineField({
      name: 'teamSize',
      title: 'Team Size',
      type: 'string',
      description: 'Example: 6 people, 2 squads, or 12 stakeholders',
      validation: (rule) => rule.required(),
    }),
    defineField({
      name: 'role',
      title: 'Role',
      type: 'string',
      validation: (rule) => rule.required(),
    }),
    defineField({
      name: 'deliveryDescription',
      title: 'Delivery Description',
      type: 'text',
      rows: 6,
      validation: (rule) => rule.required().min(40),
    }),
  ],
  preview: {
    select: {
      title: 'projectName',
      subtitle: 'industry',
    },
  },
})
