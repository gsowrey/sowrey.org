---
title: Stories
slug: stories
date: '12-01-2020 00:00'
published: true
publish_date: '12-01-2020 00:00'
visible: true
process:
    twig: true
author:
    name: Geoff Sowrey
metadata:
    author: Geoff Sowrey
taxonomy:
    migration-status: review
    category: [The Soundtrack of my Life]
    tag: []
---

# Stories

<ul>
{% for p in page.find(page.route).children %}
    {% if (count(page.find(p.route).children) == 0) %}
    <li>
        <a href="{{p.url}}">{{ p.title }}</a><br />
        {{ strip_tags(p.summary) }}
    </li>
    {% endif %}
{% endfor %}
</ul>

# More to See

<ul>
{% for p in page.find(page.route).children %}
    {% if (count(page.find(p.route).children) > 0) %}
    <li>
        <a href="{{p.url}}">{{ p.title }}</a><br />
    </li>
    {% endif %}
{% endfor %}
</ul>
