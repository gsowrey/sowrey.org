<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/soundtrack-of-my-life/item.md',
    'modified' => 1632682626,
    'data' => [
        'header' => [
            'title' => 'The Soundtrack of my Life',
            'slug' => 'the-soundtrack-of-my-life',
            'date' => '21-02-2020',
            'published' => true,
            'publish_date' => '21-02-2020',
            'process' => [
                'twig' => true
            ],
            'visible' => true,
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 250
            ],
            'taxonomy' => [
                'migration-status' => 'review',
                'category' => [
                    0 => 'The Soundtrack of my Life'
                ],
                'tag' => [
                    0 => 'work in progress',
                    1 => 'work in progress'
                ]
            ],
            'author' => 'sonworf',
            'metadata' => [
                'author' => 'sonworf'
            ]
        ],
        'frontmatter' => '# http://learn.getgrav.org/content/headers
title: The Soundtrack of my Life
slug: the-soundtrack-of-my-life
# menu: The Soundtrack of my Life
date: 21-02-2020
published: true
publish_date: 21-02-2020
# unpublish_date: 21-02-2020
# template: false
# theme: false
process:
    twig: true
visible: true
summary:
    enabled: true
    format: short
    size: 250
taxonomy:
    migration-status: review
    category: [The Soundtrack of my Life]
    tag: [work in progress,work in progress]
author: sonworf
metadata:
    author: sonworf
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
',
        'markdown' => 'From the moment we are born, we hear music. It comes in a plethora of forms, natural and human-made, and all of it adds to the tapestry of our individual lives. No two people share exactly the same taste in music, though we can all appreciate music for what it is: feeling beyond what we are in any given moment.

There is no way to name every piece of music I have heard throughout my life and I would be supremely doubtful of anyone who said they could. Maybe if you lived in a small village where all music is played by those villagers and taught amongst them without outside influence. Idyllic, maybe, but woefully limiting to me.

If my life were to be translated to film, what songs would you hear as the various scenes played out? These are the ones that have stuck with me and what they mean to me.

 I keep track of my soundtrack via Apple Music (don’t @ me) as I have Apple devices and I’ve been there too damn long and am too lazy to think about moving to anything else.

 <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="450" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/ca/playlist/soundtrack-of-my-life/pl.u-6Agd4i7aWKq"></iframe>

 Yes, you will see some strange stuff in there. Yes, you may question your friendship with me, even my sanity. I honestly don’t choose the songs — somehow, *they’ve chosen me*. They’ve set something in my head that I can’t unset, and they remain. This doesn’t happen overnight, either (with a few exceptions, which I’ll note), some took years to finally set into place. Which, incidentally, is why you won’t see much *recent* material yet. While I do listen to current music, they haven’t taken hold to a part of my life or hold significant enough meaning to sit here. One day, some will, and when they do, they’ll appear here.

<ul>
{% for p in page.find(\'/stories/soundtrack-of-my-life\').children %}
    <li>
        <a href="{{p.url}}">{{ p.title }}</a><br />
    </li>
{% endfor %}
</ul>

Not all songs have descriptions yet! Check back frequently … I’ve got quite a few more to write about.'
    ]
];
