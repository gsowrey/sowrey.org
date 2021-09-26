<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Page:/Users/geoff/Sites/sowrey.grav/user/pages/01.home */
class __TwigTemplate_86c4e1b640b469aa9521e6e0e3ca2a139e64d652393c1fd19f78c285bf69340b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<p>I have a blog called <a href=\"https://geoff.sowrey.org\">The Observer’s Log</a>. It was a place for me to write my stories, tell everyone a little about what I was doing when I was living so far from home. I don’t write much in it anymore, largely because I became disinterested in the soapbox preachiness that I had somehow waded into. I struggled with relevancy and purposefulness, especially where time was involved: I didn’t want to waste time by not telling a story.</p>
<p>That’s what this place is all about: I want to tell new stories. And I hope you’ll join me on this journey.</p>
<h2>Recent Stories</h2>
<p>";
        // line 4
        $context["my_collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@root.descendants" => ""], "limit" => 10, "order" => ["by" => "folder", "dir" => "desc"]]], "method");
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["my_collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo "</p>
<h2><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "title", []), "html", null, true);
            echo "</a></h2>
<p>";
            // line 7
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["c"], "summary", [])), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</p>
<ul>
<li><a href=\"http://sowrey.wp/christmas/the-venerable-santas/\">The Venerable Santas</a> Posted in: <a href=\"http://sowrey.wp/category/christmas/\">Christmas</a> - I've had a fascination with alternate-view Santa stories for a good chunk of my life. This one came after I realized that it would be impossible to cover the globe in a single night. So what if a single Santa could only do one Christmas? This is dedicated to my friend Scott, who is the model for the generosity and…</li>
<li><a href=\"http://sowrey.wp/soundtrack/africa-by-toto/\">Africa by Toto</a> Posted in: <a href=\"http://sowrey.wp/category/soundtrack/\">The Soundtrack of my Life</a> - Yes, I know the version in the playlist is by Weezer, not Toto. I like Weezer's version better. Many of the songs in my soundtrack remind me of specific events, some are for periods of time. This song, like a few in this cluster, are from high school, notably my final year. Africa holds a particular place in my memory…</li>
<li><a href=\"http://sowrey.wp/soundtrack/paradise-city-by-guns-n-roses/\">Paradise City by Guns N’ Roses</a> Posted in: <a href=\"http://sowrey.wp/category/soundtrack/\">The Soundtrack of my Life</a> - Let's deal with one thing first: Appetite for Destruction came out three years before I went into my final year of high school. I knew several of the tracks from the album, because radio was very much a thing when I was a teenager, but I didn't yet own the album. It didn't really hold anything more for me than…</li>
<li><a href=\"http://sowrey.wp/soundtrack/tweeter-and-the-monkey-man-by-the-traveling-wilburys/\">Tweeter and the Monkey Man by the Traveling Wilburys</a> Posted in: <a href=\"http://sowrey.wp/category/soundtrack/\">The Soundtrack of my Life</a> - When I was in high school in Ontario, we still had \"Grade 13\", which was our final year, composed almost entirely of Ontario Academic Credits (OACs), which were effectively prerequisites for attending university. This was something that friends I would later meet from other provinces (notably those to the west) would snigger at, as they left high school after Grade…</li>
<li><a href=\"http://sowrey.wp/novels/the-banshee-chapter-39/\">The Banshee: Chapter 39</a> Posted in: <a href=\"http://sowrey.wp/category/novels/\">Novels</a>, <a href=\"http://sowrey.wp/category/science-fiction/\">Science Fiction</a>, <a href=\"http://sowrey.wp/category/novels/the-banshee/\">The Banshee</a> - The ARCH has collapsed, the survivors are trapped in the tunnels. Jo and Robert go looking for salvation.</li>
<li><a href=\"http://sowrey.wp/novels/the-banshee-chapter-38/\">The Banshee: Chapter 38</a> Posted in: <a href=\"http://sowrey.wp/category/novels/\">Novels</a>, <a href=\"http://sowrey.wp/category/science-fiction/\">Science Fiction</a>, <a href=\"http://sowrey.wp/category/novels/the-banshee/\">The Banshee</a> - The ARCH gets the last laugh on Carl</li>
<li><a href=\"http://sowrey.wp/novels/the-banshee-chapter-37/\">The Banshee: Chapter 37</a> Posted in: <a href=\"http://sowrey.wp/category/novels/\">Novels</a>, <a href=\"http://sowrey.wp/category/science-fiction/\">Science Fiction</a>, <a href=\"http://sowrey.wp/category/novels/the-banshee/\">The Banshee</a> - The plan is set in motion to save the ARCH from Carl.</li>
<li><a href=\"http://sowrey.wp/novels/the-banshee-chapter-36/\">The Banshee: Chapter 36</a> Posted in: <a href=\"http://sowrey.wp/category/novels/\">Novels</a>, <a href=\"http://sowrey.wp/category/science-fiction/\">Science Fiction</a>, <a href=\"http://sowrey.wp/category/novels/the-banshee/\">The Banshee</a> - Jo and Robert steal a meal, find Donner, and make a plan.</li>
<li><a href=\"http://sowrey.wp/novels/the-banshee-chapter-35/\">The Banshee: Chapter 35</a> Posted in: <a href=\"http://sowrey.wp/category/novels/\">Novels</a>, <a href=\"http://sowrey.wp/category/science-fiction/\">Science Fiction</a>, <a href=\"http://sowrey.wp/category/novels/the-banshee/\">The Banshee</a> - The road home isn't a walk in the park.</li>
<li><a href=\"http://sowrey.wp/novels/the-banshee-chapter-34/\">The Banshee: Chapter 34</a> Posted in: <a href=\"http://sowrey.wp/category/novels/\">Novels</a>, <a href=\"http://sowrey.wp/category/science-fiction/\">Science Fiction</a>, <a href=\"http://sowrey.wp/category/novels/the-banshee/\">The Banshee</a> - Jo and Robert sew together a wolf out of sheep's clothing.</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/01.home";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  49 => 7,  43 => 6,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p>I have a blog called <a href=\"https://geoff.sowrey.org\">The Observer’s Log</a>. It was a place for me to write my stories, tell everyone a little about what I was doing when I was living so far from home. I don’t write much in it anymore, largely because I became disinterested in the soapbox preachiness that I had somehow waded into. I struggled with relevancy and purposefulness, especially where time was involved: I didn’t want to waste time by not telling a story.</p>
<p>That’s what this place is all about: I want to tell new stories. And I hope you’ll join me on this journey.</p>
<h2>Recent Stories</h2>
<p>{% set my_collection = page.collection({ items: {'@root.descendants':''}, 'limit': 10, 'order': {'by': 'folder', 'dir': 'desc'}}) %}
{% for c in my_collection %}</p>
<h2><a href=\"{{c.url}}\">{{ c.title }}</a></h2>
<p>{{ strip_tags(c.summary) }}
{% endfor %}</p>
<ul>
<li><a href=\"http://sowrey.wp/christmas/the-venerable-santas/\">The Venerable Santas</a> Posted in: <a href=\"http://sowrey.wp/category/christmas/\">Christmas</a> - I've had a fascination with alternate-view Santa stories for a good chunk of my life. This one came after I realized that it would be impossible to cover the globe in a single night. So what if a single Santa could only do one Christmas? This is dedicated to my friend Scott, who is the model for the generosity and…</li>
<li><a href=\"http://sowrey.wp/soundtrack/africa-by-toto/\">Africa by Toto</a> Posted in: <a href=\"http://sowrey.wp/category/soundtrack/\">The Soundtrack of my Life</a> - Yes, I know the version in the playlist is by Weezer, not Toto. I like Weezer's version better. Many of the songs in my soundtrack remind me of specific events, some are for periods of time. This song, like a few in this cluster, are from high school, notably my final year. Africa holds a particular place in my memory…</li>
<li><a href=\"http://sowrey.wp/soundtrack/paradise-city-by-guns-n-roses/\">Paradise City by Guns N’ Roses</a> Posted in: <a href=\"http://sowrey.wp/category/soundtrack/\">The Soundtrack of my Life</a> - Let's deal with one thing first: Appetite for Destruction came out three years before I went into my final year of high school. I knew several of the tracks from the album, because radio was very much a thing when I was a teenager, but I didn't yet own the album. It didn't really hold anything more for me than…</li>
<li><a href=\"http://sowrey.wp/soundtrack/tweeter-and-the-monkey-man-by-the-traveling-wilburys/\">Tweeter and the Monkey Man by the Traveling Wilburys</a> Posted in: <a href=\"http://sowrey.wp/category/soundtrack/\">The Soundtrack of my Life</a> - When I was in high school in Ontario, we still had \"Grade 13\", which was our final year, composed almost entirely of Ontario Academic Credits (OACs), which were effectively prerequisites for attending university. This was something that friends I would later meet from other provinces (notably those to the west) would snigger at, as they left high school after Grade…</li>
<li><a href=\"http://sowrey.wp/novels/the-banshee-chapter-39/\">The Banshee: Chapter 39</a> Posted in: <a href=\"http://sowrey.wp/category/novels/\">Novels</a>, <a href=\"http://sowrey.wp/category/science-fiction/\">Science Fiction</a>, <a href=\"http://sowrey.wp/category/novels/the-banshee/\">The Banshee</a> - The ARCH has collapsed, the survivors are trapped in the tunnels. Jo and Robert go looking for salvation.</li>
<li><a href=\"http://sowrey.wp/novels/the-banshee-chapter-38/\">The Banshee: Chapter 38</a> Posted in: <a href=\"http://sowrey.wp/category/novels/\">Novels</a>, <a href=\"http://sowrey.wp/category/science-fiction/\">Science Fiction</a>, <a href=\"http://sowrey.wp/category/novels/the-banshee/\">The Banshee</a> - The ARCH gets the last laugh on Carl</li>
<li><a href=\"http://sowrey.wp/novels/the-banshee-chapter-37/\">The Banshee: Chapter 37</a> Posted in: <a href=\"http://sowrey.wp/category/novels/\">Novels</a>, <a href=\"http://sowrey.wp/category/science-fiction/\">Science Fiction</a>, <a href=\"http://sowrey.wp/category/novels/the-banshee/\">The Banshee</a> - The plan is set in motion to save the ARCH from Carl.</li>
<li><a href=\"http://sowrey.wp/novels/the-banshee-chapter-36/\">The Banshee: Chapter 36</a> Posted in: <a href=\"http://sowrey.wp/category/novels/\">Novels</a>, <a href=\"http://sowrey.wp/category/science-fiction/\">Science Fiction</a>, <a href=\"http://sowrey.wp/category/novels/the-banshee/\">The Banshee</a> - Jo and Robert steal a meal, find Donner, and make a plan.</li>
<li><a href=\"http://sowrey.wp/novels/the-banshee-chapter-35/\">The Banshee: Chapter 35</a> Posted in: <a href=\"http://sowrey.wp/category/novels/\">Novels</a>, <a href=\"http://sowrey.wp/category/science-fiction/\">Science Fiction</a>, <a href=\"http://sowrey.wp/category/novels/the-banshee/\">The Banshee</a> - The road home isn't a walk in the park.</li>
<li><a href=\"http://sowrey.wp/novels/the-banshee-chapter-34/\">The Banshee: Chapter 34</a> Posted in: <a href=\"http://sowrey.wp/category/novels/\">Novels</a>, <a href=\"http://sowrey.wp/category/science-fiction/\">Science Fiction</a>, <a href=\"http://sowrey.wp/category/novels/the-banshee/\">The Banshee</a> - Jo and Robert sew together a wolf out of sheep's clothing.</li>
</ul>", "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/01.home", "");
    }
}
