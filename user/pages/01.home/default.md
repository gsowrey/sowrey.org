---
# http://learn.getgrav.org/content/headers
title: Let Me Tell You A Story
slug: Home
# menu: Let me tell you a story
date: 12-01-2018
published: true
publish_date: 12-01-2018
# unpublish_date: 12-01-2018
# template: false
# theme: false
visible: true
process:
    twig: true
summary:
    enabled: true
    format: short
    size: 250
taxonomy:
    migration-status: review
    category: []
    tag: []
# added collection selector

author:
    name: Geoff Sowrey
metadata:
    author: Geoff Sowrey
#      description: Your page description goes here
#      keywords: HTML, CSS, XML, JavaScript
#      robots: noindex, nofollow
#      og:
#          title: The Rock
#          type: video.movie
#          url: http://www.imdb.com/title/tt0117500/
#          image: http://ia.media-imdb.com/images/rock.jpg
#  cache_enable: false
#  last_modified: true
---

I have a blog called [The Observer’s Log](https://geoff.sowrey.org). It was a place for me to write my stories, tell everyone a little about what I was doing when I was living so far from home. I don’t write much in it anymore, largely because I became disinterested in the soapbox preachiness that I had somehow waded into. I struggled with relevancy and purposefulness, especially where time was involved: I didn’t want to waste time by not telling a story.

That’s what this place is all about: I want to tell new stories. And I hope you’ll join me on this journey.

## Recent Stories

{% set my_collection = page.collection({ items: {'@root.descendants':''}, 'limit': 10, 'order': {'by': 'folder', 'dir': 'desc'}}) %}
{% for c in my_collection %}
##[{{ c.title }}]({{c.url}})
{{ strip_tags(c.summary) }}
{% endfor %}
