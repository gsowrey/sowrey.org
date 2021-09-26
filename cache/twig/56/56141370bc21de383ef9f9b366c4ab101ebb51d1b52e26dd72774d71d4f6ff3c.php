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
class __TwigTemplate_44487e63c3c1ee510625fd60e72f1b58042885939732d3e1ab8925368b7dacf1 extends \Twig\Template
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
<pre>
";
        // line 5
        echo twig_escape_filter($this->env, var_dump(($context["options"] ?? null)), "html", null, true);
        echo "
";
        // line 6
        $context["new_pages"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ($context["options"] ?? null)], "method");
        // line 7
        echo twig_escape_filter($this->env, sizeof(($context["new_pages"] ?? null)), "html", null, true);
        echo "

- [The Venerable Santas](http://sowrey.wp/christmas/the-venerable-santas/) Posted in: [Christmas](http://sowrey.wp/category/christmas/) - I've had a fascination with alternate-view Santa stories for a good chunk of my life. This one came after I realized that it would be impossible to cover the globe in a single night. So what if a single Santa could only do one Christmas? This is dedicated to my friend Scott, who is the model for the generosity and…
- [Africa by Toto](http://sowrey.wp/soundtrack/africa-by-toto/) Posted in: [The Soundtrack of my Life](http://sowrey.wp/category/soundtrack/) - Yes, I know the version in the playlist is by Weezer, not Toto. I like Weezer's version better. Many of the songs in my soundtrack remind me of specific events, some are for periods of time. This song, like a few in this cluster, are from high school, notably my final year. Africa holds a particular place in my memory…
- [Paradise City by Guns N’ Roses](http://sowrey.wp/soundtrack/paradise-city-by-guns-n-roses/) Posted in: [The Soundtrack of my Life](http://sowrey.wp/category/soundtrack/) - Let's deal with one thing first: Appetite for Destruction came out three years before I went into my final year of high school. I knew several of the tracks from the album, because radio was very much a thing when I was a teenager, but I didn't yet own the album. It didn't really hold anything more for me than…
- [Tweeter and the Monkey Man by the Traveling Wilburys](http://sowrey.wp/soundtrack/tweeter-and-the-monkey-man-by-the-traveling-wilburys/) Posted in: [The Soundtrack of my Life](http://sowrey.wp/category/soundtrack/) - When I was in high school in Ontario, we still had \"Grade 13\", which was our final year, composed almost entirely of Ontario Academic Credits (OACs), which were effectively prerequisites for attending university. This was something that friends I would later meet from other provinces (notably those to the west) would snigger at, as they left high school after Grade…
- [The Banshee: Chapter 39](http://sowrey.wp/novels/the-banshee-chapter-39/) Posted in: [Novels](http://sowrey.wp/category/novels/), [Science Fiction](http://sowrey.wp/category/science-fiction/), [The Banshee](http://sowrey.wp/category/novels/the-banshee/) - The ARCH has collapsed, the survivors are trapped in the tunnels. Jo and Robert go looking for salvation.
- [The Banshee: Chapter 38](http://sowrey.wp/novels/the-banshee-chapter-38/) Posted in: [Novels](http://sowrey.wp/category/novels/), [Science Fiction](http://sowrey.wp/category/science-fiction/), [The Banshee](http://sowrey.wp/category/novels/the-banshee/) - The ARCH gets the last laugh on Carl
- [The Banshee: Chapter 37](http://sowrey.wp/novels/the-banshee-chapter-37/) Posted in: [Novels](http://sowrey.wp/category/novels/), [Science Fiction](http://sowrey.wp/category/science-fiction/), [The Banshee](http://sowrey.wp/category/novels/the-banshee/) - The plan is set in motion to save the ARCH from Carl.
- [The Banshee: Chapter 36](http://sowrey.wp/novels/the-banshee-chapter-36/) Posted in: [Novels](http://sowrey.wp/category/novels/), [Science Fiction](http://sowrey.wp/category/science-fiction/), [The Banshee](http://sowrey.wp/category/novels/the-banshee/) - Jo and Robert steal a meal, find Donner, and make a plan.
- [The Banshee: Chapter 35](http://sowrey.wp/novels/the-banshee-chapter-35/) Posted in: [Novels](http://sowrey.wp/category/novels/), [Science Fiction](http://sowrey.wp/category/science-fiction/), [The Banshee](http://sowrey.wp/category/novels/the-banshee/) - The road home isn't a walk in the park.
- [The Banshee: Chapter 34](http://sowrey.wp/novels/the-banshee-chapter-34/) Posted in: [Novels](http://sowrey.wp/category/novels/), [Science Fiction](http://sowrey.wp/category/science-fiction/), [The Banshee](http://sowrey.wp/category/novels/the-banshee/) - Jo and Robert sew together a wolf out of sheep's clothing.";
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
        return array (  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
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
<pre>
{{ var_dump(options) }}
{% set new_pages = page.collection(options) %}
{{sizeof(new_pages)}}

- [The Venerable Santas](http://sowrey.wp/christmas/the-venerable-santas/) Posted in: [Christmas](http://sowrey.wp/category/christmas/) - I've had a fascination with alternate-view Santa stories for a good chunk of my life. This one came after I realized that it would be impossible to cover the globe in a single night. So what if a single Santa could only do one Christmas? This is dedicated to my friend Scott, who is the model for the generosity and…
- [Africa by Toto](http://sowrey.wp/soundtrack/africa-by-toto/) Posted in: [The Soundtrack of my Life](http://sowrey.wp/category/soundtrack/) - Yes, I know the version in the playlist is by Weezer, not Toto. I like Weezer's version better. Many of the songs in my soundtrack remind me of specific events, some are for periods of time. This song, like a few in this cluster, are from high school, notably my final year. Africa holds a particular place in my memory…
- [Paradise City by Guns N’ Roses](http://sowrey.wp/soundtrack/paradise-city-by-guns-n-roses/) Posted in: [The Soundtrack of my Life](http://sowrey.wp/category/soundtrack/) - Let's deal with one thing first: Appetite for Destruction came out three years before I went into my final year of high school. I knew several of the tracks from the album, because radio was very much a thing when I was a teenager, but I didn't yet own the album. It didn't really hold anything more for me than…
- [Tweeter and the Monkey Man by the Traveling Wilburys](http://sowrey.wp/soundtrack/tweeter-and-the-monkey-man-by-the-traveling-wilburys/) Posted in: [The Soundtrack of my Life](http://sowrey.wp/category/soundtrack/) - When I was in high school in Ontario, we still had \"Grade 13\", which was our final year, composed almost entirely of Ontario Academic Credits (OACs), which were effectively prerequisites for attending university. This was something that friends I would later meet from other provinces (notably those to the west) would snigger at, as they left high school after Grade…
- [The Banshee: Chapter 39](http://sowrey.wp/novels/the-banshee-chapter-39/) Posted in: [Novels](http://sowrey.wp/category/novels/), [Science Fiction](http://sowrey.wp/category/science-fiction/), [The Banshee](http://sowrey.wp/category/novels/the-banshee/) - The ARCH has collapsed, the survivors are trapped in the tunnels. Jo and Robert go looking for salvation.
- [The Banshee: Chapter 38](http://sowrey.wp/novels/the-banshee-chapter-38/) Posted in: [Novels](http://sowrey.wp/category/novels/), [Science Fiction](http://sowrey.wp/category/science-fiction/), [The Banshee](http://sowrey.wp/category/novels/the-banshee/) - The ARCH gets the last laugh on Carl
- [The Banshee: Chapter 37](http://sowrey.wp/novels/the-banshee-chapter-37/) Posted in: [Novels](http://sowrey.wp/category/novels/), [Science Fiction](http://sowrey.wp/category/science-fiction/), [The Banshee](http://sowrey.wp/category/novels/the-banshee/) - The plan is set in motion to save the ARCH from Carl.
- [The Banshee: Chapter 36](http://sowrey.wp/novels/the-banshee-chapter-36/) Posted in: [Novels](http://sowrey.wp/category/novels/), [Science Fiction](http://sowrey.wp/category/science-fiction/), [The Banshee](http://sowrey.wp/category/novels/the-banshee/) - Jo and Robert steal a meal, find Donner, and make a plan.
- [The Banshee: Chapter 35](http://sowrey.wp/novels/the-banshee-chapter-35/) Posted in: [Novels](http://sowrey.wp/category/novels/), [Science Fiction](http://sowrey.wp/category/science-fiction/), [The Banshee](http://sowrey.wp/category/novels/the-banshee/) - The road home isn't a walk in the park.
- [The Banshee: Chapter 34](http://sowrey.wp/novels/the-banshee-chapter-34/) Posted in: [Novels](http://sowrey.wp/category/novels/), [Science Fiction](http://sowrey.wp/category/science-fiction/), [The Banshee](http://sowrey.wp/category/novels/the-banshee/) - Jo and Robert sew together a wolf out of sheep's clothing.", "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/01.home", "");
    }
}
