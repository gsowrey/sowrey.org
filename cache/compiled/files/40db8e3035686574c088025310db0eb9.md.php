<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/item.md',
    'modified' => 1632622476,
    'data' => [
        'header' => [
            'title' => 'Stories',
            'slug' => 'stories',
            'date' => '12-01-2020 00:00',
            'published' => true,
            'publish_date' => '12-01-2020 00:00',
            'visible' => true,
            'process' => [
                'twig' => true
            ],
            'author' => [
                'name' => 'sonworf'
            ],
            'metadata' => [
                'author' => 'sonworf'
            ]
        ],
        'frontmatter' => 'title: Stories
slug: stories
date: \'12-01-2020 00:00\'
published: true
publish_date: \'12-01-2020 00:00\'
visible: true
process:
    twig: true
author:
    name: sonworf
metadata:
    author: sonworf',
        'markdown' => '# Stories

<ul>
{% for p in page.find(page.route).children %}
    {% if (count(page.find(p.route).children) == 0) %}
    <li>
        <a href="{{p.url}}">{{ p.title }}</a><br />
        {{ strip_tags(p.summary|safe_truncate) }}
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
'
    ]
];
