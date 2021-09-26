---
title: Novels
slug: stories-novels
date: '12-01-2020 00:00'
published: true
publish_date: '12-01-2020 00:00'
visible: true
process:
    twig: true
summary:
    enabled: true
    format: short
    size: 250
author:
    name: Geoff Sowrey
metadata:
    author: Geoff Sowrey
---

# Novels

Writing any story is difficult, coming up with characters and themes and plot, trying to make it cohesive and even (heavens, forbid!) _interesting_. 

And then I thought it would be a great idea to write a novel. Or a few. 

{% for p in page.find(page.route).children %}
##[{{ p.title }}]({{p.url}})
{{ strip_tags(p.summary) }}
{% endfor %}