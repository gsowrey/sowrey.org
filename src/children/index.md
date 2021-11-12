---
layout: index.hbs
permalink: "children"
title: Stories for Children
author:
    name: Geoff Sowrey
metadata:
    author: Geoff Sowrey
---

# Stories for Children

For years my kids asked me to tell them a bedtime story. One night, I was caught without a book, so I had to make it up on the spot. Apparently the newness of the story was more appealing than a pre-written one, so I kept telling them...

{% for p in page.find(page.route).children %}
{% if (count(page.find(p.route).children) == 0) %}
##[{{ p.title }}]({{p.url}})
{{ strip_tags(p.summary) }}
{% endif %}
{% endfor %}
