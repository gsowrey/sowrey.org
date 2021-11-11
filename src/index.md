---
layout: index.hbs
priority: 0
title: 'Let Me Tell You A Story'
author:
    name: 'Geoff Sowrey'
metadata:
    author: 'Geoff Sowrey'
---

I have a blog called [The Observer’s Log](https://geoff.sowrey.org). It was a place for me to write my stories, tell everyone a little about what I was doing when I was living so far from home. I don’t write much in it anymore, largely because I became disinterested in the soapbox preachiness that I had somehow waded into. I struggled with relevancy and purposefulness, especially where time was involved: I didn’t want to waste time by not telling a story.

That’s what this place is all about: I want to tell new stories. And I hope you’ll join me on this journey.

## Recent Stories

{% set my_collection = page.collection({ items: {'@root.descendants':''}, 'limit': 10, 'order': {'by': 'folder', 'dir': 'desc'}}) %}
{% for c in my_collection %}
###[{{ c.title }}]({{c.url}})
{{ strip_tags(c.summary) }}
{% endfor %}
