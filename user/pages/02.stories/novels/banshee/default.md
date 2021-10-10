---
title: The Banshee
slug: stories-novels-banshee
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

# The Banshee

Joanna Maria de Leon is one of the Engineers, a group of former engineering students who built the last known pocket of survivors of the Apocalypse. Ten years after the world collapsed around them, their shelter -- the ARCH -- is also falling apart, both the physical structure, and what remains of their civility. Jo clings to hope, willing it to last long enough for their escape, but can she save everyone, let alone herself? 

{% for p in page.find(page.route).children %}
{% if (count(page.find(p.route).children) == 0) %}
##[{{ p.title }}]({{p.url}})
{{ strip_tags(p.summary) }}
{% endif %}
{% endfor %}