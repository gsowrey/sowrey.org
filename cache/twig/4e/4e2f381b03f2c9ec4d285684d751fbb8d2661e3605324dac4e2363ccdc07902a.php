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

/* @Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/soundtrack-of-my-life */
class __TwigTemplate_8dc794e0ad761a59a2d152e9d2330b5c502e98d7d2d9ce342c523839050d6b47 extends \Twig\Template
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
        echo "<p>From the moment we are born, we hear music. It comes in a plethora of forms, natural and human-made, and all of it adds to the tapestry of our individual lives. No two people share exactly the same taste in music, though we can all appreciate music for what it is: feeling beyond what we are in any given moment.</p>
<p>There is no way to name every piece of music I have heard throughout my life and I would be supremely doubtful of anyone who said they could. Maybe if you lived in a small village where all music is played by those villagers and taught amongst them without outside influence. Idyllic, maybe, but woefully limiting to me.</p>
<p>If my life were to be translated to film, what songs would you hear as the various scenes played out? These are the ones that have stuck with me and what they mean to me.</p>
<p>I keep track of my soundtrack via Apple Music (don’t @ me) as I have Apple devices and I’ve been there too damn long and am too lazy to think about moving to anything else.</p>
<iframe allow=\"autoplay *; encrypted-media *;\" frameborder=\"0\" height=\"450\" style=\"width:100%;max-width:660px;overflow:hidden;background:transparent;\" sandbox=\"allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation\" src=\"https://embed.music.apple.com/ca/playlist/soundtrack-of-my-life/pl.u-6Agd4i7aWKq\"></iframe>
<p>Yes, you will see some strange stuff in there. Yes, you may question your friendship with me, even my sanity. I honestly don’t choose the songs — somehow, <em>they’ve chosen me</em>. They’ve set something in my head that I can’t unset, and they remain. This doesn’t happen overnight, either (with a few exceptions, which I’ll note), some took years to finally set into place. Which, incidentally, is why you won’t see much <em>recent</em> material yet. While I do listen to current music, they haven’t taken hold to a part of my life or hold significant enough meaning to sit here. One day, some will, and when they do, they’ll appear here.</p>
<ul>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/stories/soundtrack-of-my-life"], "method"), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 9
            echo "    <li>
        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", []), "html", null, true);
            echo "</a><br />
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
<p>Not all songs have descriptions yet! Check back frequently … I’ve got quite a few more to write about.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/soundtrack-of-my-life";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  46 => 10,  43 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p>From the moment we are born, we hear music. It comes in a plethora of forms, natural and human-made, and all of it adds to the tapestry of our individual lives. No two people share exactly the same taste in music, though we can all appreciate music for what it is: feeling beyond what we are in any given moment.</p>
<p>There is no way to name every piece of music I have heard throughout my life and I would be supremely doubtful of anyone who said they could. Maybe if you lived in a small village where all music is played by those villagers and taught amongst them without outside influence. Idyllic, maybe, but woefully limiting to me.</p>
<p>If my life were to be translated to film, what songs would you hear as the various scenes played out? These are the ones that have stuck with me and what they mean to me.</p>
<p>I keep track of my soundtrack via Apple Music (don’t @ me) as I have Apple devices and I’ve been there too damn long and am too lazy to think about moving to anything else.</p>
<iframe allow=\"autoplay *; encrypted-media *;\" frameborder=\"0\" height=\"450\" style=\"width:100%;max-width:660px;overflow:hidden;background:transparent;\" sandbox=\"allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation\" src=\"https://embed.music.apple.com/ca/playlist/soundtrack-of-my-life/pl.u-6Agd4i7aWKq\"></iframe>
<p>Yes, you will see some strange stuff in there. Yes, you may question your friendship with me, even my sanity. I honestly don’t choose the songs — somehow, <em>they’ve chosen me</em>. They’ve set something in my head that I can’t unset, and they remain. This doesn’t happen overnight, either (with a few exceptions, which I’ll note), some took years to finally set into place. Which, incidentally, is why you won’t see much <em>recent</em> material yet. While I do listen to current music, they haven’t taken hold to a part of my life or hold significant enough meaning to sit here. One day, some will, and when they do, they’ll appear here.</p>
<ul>
{% for p in page.find('/stories/soundtrack-of-my-life').children %}
    <li>
        <a href=\"{{p.url}}\">{{ p.title }}</a><br />
    </li>
{% endfor %}
</ul>
<p>Not all songs have descriptions yet! Check back frequently … I’ve got quite a few more to write about.</p>", "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/soundtrack-of-my-life", "");
    }
}
