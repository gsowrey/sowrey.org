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
class __TwigTemplate_8b5deee2b5e5e543fd6f46d4625e78b73029aae349e1c351d1f959d75d66b9dc extends \Twig\Template
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
        echo "<h1>Stories for Children</h1>
<p>For years my kids asked me to tell them a bedtime story. One night, I was caught without a book, so I had to make it up on the spot. Apparently the newness of the story was more appealing than a pre-written one, so I kept telling them...</p>
<p>&lt;div&gt;
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute(($context["page"] ?? null), "route", [])], "method"), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 5
            if ((count($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute($context["p"], "route", [])], "method"), "children", [])) == 0)) {
                // line 6
                echo "&lt;li&gt;
&lt;a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                echo "\"&gt;";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", []), "html", null, true);
                echo "&lt;/a&gt;&lt;br /&gt;
";
                // line 8
                echo twig_escape_filter($this->env, strip_tags(Grav\Common\Utils::safeTruncate($this->getAttribute($context["p"], "summary", []))), "html", null, true);
                echo "
&lt;/li&gt;
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "&lt;/div&gt;</p>";
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
        return array (  60 => 12,  50 => 8,  44 => 7,  41 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>Stories for Children</h1>
<p>For years my kids asked me to tell them a bedtime story. One night, I was caught without a book, so I had to make it up on the spot. Apparently the newness of the story was more appealing than a pre-written one, so I kept telling them...</p>
<p>&lt;div&gt;
{% for p in page.find(page.route).children %}
{% if (count(page.find(p.route).children) == 0) %}
&lt;li&gt;
&lt;a href=\"{{p.url}}\"&gt;{{ p.title }}&lt;/a&gt;&lt;br /&gt;
{{ strip_tags(p.summary|safe_truncate) }}
&lt;/li&gt;
{% endif %}
{% endfor %}
&lt;/div&gt;</p>", "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/children", "");
    }
}
