---
title: 'Eald Brocc'
published: true
process:
    markdown: true
    twig: true
---

During the pandemic of 2020/21, I discovered a British show called "Time Team", which its producer had started uploading to YouTube. While it might have a ring of something sci-fi, it's basically hour-long documentaries of three-day archeological digs around Britain. Though it might sound a bit dull, it's rather fascinating to watch (it helps that they found interesting people to be on screen) and I've been a fan ever since. One day, while listening to music, I was inspired by a cover of Deep Purple's "Smoke On the Water", and the story of Eald Brocc was born...

{% for p in page.find(page.route).children %}
{% if (count(page.find(p.route).children) == 0) %}
##[{{ p.title }}]({{p.url}})
{{ strip_tags(p.summary) }}
{% endif %}
{% endfor %}