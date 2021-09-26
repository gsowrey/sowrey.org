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

/* @Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/children */
class __TwigTemplate_5cd249133c478889a0c167328e43fa58fa060e48ef88f2e434a6bba2df132c75 extends \Twig\Template
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
        echo "<p>&lt;ul&gt;
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute(($context["page"] ?? null), "route", [])], "method"), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 3
            if ((count($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute($context["p"], "route", [])], "method"), "children", [])) == 0)) {
                // line 4
                echo "&lt;li&gt;
&lt;a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                echo "\"&gt;";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", []), "html", null, true);
                echo "&lt;/a&gt;&lt;br /&gt;
";
                // line 6
                echo twig_escape_filter($this->env, strip_tags(Grav\Common\Utils::safeTruncate($this->getAttribute($context["p"], "summary", []))), "html", null, true);
                echo "
&lt;/li&gt;
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "&lt;/ul&gt;</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/children";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  48 => 6,  42 => 5,  39 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p>&lt;ul&gt;
{% for p in page.find(page.route).children %}
{% if (count(page.find(p.route).children) == 0) %}
&lt;li&gt;
&lt;a href=\"{{p.url}}\"&gt;{{ p.title }}&lt;/a&gt;&lt;br /&gt;
{{ strip_tags(p.summary|safe_truncate) }}
&lt;/li&gt;
{% endif %}
{% endfor %}
&lt;/ul&gt;</p>", "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/children", "");
    }
}
