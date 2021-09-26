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

/* @Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/novels */
class __TwigTemplate_9b9bc7fac84201ef710c42273ea7b4911e98d3f78e75221a9446dc39008fa7c6 extends \Twig\Template
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
        echo "<h1>Novels</h1>
<p>Writing any story is difficult, coming up with characters and themes and plot, trying to make it cohesive and even (heavens, forbid!) <em>interesting</em>. </p>
<p>And then I thought it would be a great idea to write a novel. Or a few. </p>
<p>";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute(($context["page"] ?? null), "route", [])], "method"), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo "</p>
<h2><a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", []), "html", null, true);
            echo "</a></h2>
<p>";
            // line 6
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["p"], "summary", [])), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/novels";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  47 => 6,  41 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>Novels</h1>
<p>Writing any story is difficult, coming up with characters and themes and plot, trying to make it cohesive and even (heavens, forbid!) <em>interesting</em>. </p>
<p>And then I thought it would be a great idea to write a novel. Or a few. </p>
<p>{% for p in page.find(page.route).children %}</p>
<h2><a href=\"{{p.url}}\">{{ p.title }}</a></h2>
<p>{{ strip_tags(p.summary) }}
{% endfor %}</p>", "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/novels", "");
    }
}
