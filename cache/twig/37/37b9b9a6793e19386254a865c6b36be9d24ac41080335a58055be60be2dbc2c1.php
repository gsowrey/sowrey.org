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

/* @Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/novels/banshee */
class __TwigTemplate_9731067b7f02edfa6aa966cd293f706718d8e51cf0bbcbf9a0c341c89b437e80 extends \Twig\Template
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
        echo "<h1>The Banshee</h1>
<p>Joanna Maria de Leon is one of the Engineers, a group of former engineering students who built the last known pocket of survivors of the Apocalypse. Ten years after the world collapsed around them, their shelter -- the ARCH -- is also falling apart, both the physical structure, and what remains of their civility. Jo clings to hope, willing it to last long enough for their escape, but can she save everyone, let alone herself? </p>
<p>";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute(($context["page"] ?? null), "route", [])], "method"), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 4
            if ((count($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute($context["p"], "route", [])], "method"), "children", [])) == 0)) {
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
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/novels/banshee";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  48 => 6,  42 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>The Banshee</h1>
<p>Joanna Maria de Leon is one of the Engineers, a group of former engineering students who built the last known pocket of survivors of the Apocalypse. Ten years after the world collapsed around them, their shelter -- the ARCH -- is also falling apart, both the physical structure, and what remains of their civility. Jo clings to hope, willing it to last long enough for their escape, but can she save everyone, let alone herself? </p>
<p>{% for p in page.find(page.route).children %}
{% if (count(page.find(p.route).children) == 0) %}</p>
<h2><a href=\"{{p.url}}\">{{ p.title }}</a></h2>
<p>{{ strip_tags(p.summary) }}
{% endif %}
{% endfor %}</p>", "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/novels/banshee", "");
    }
}
