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
class __TwigTemplate_1bfb1a23815dac9fa45227e5d35a6e513dbc6bf3bec4a558cea5a994755cb285 extends \Twig\Template
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
        echo "</p>";
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
        return new Source("", "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/01.home", "");
    }
}
