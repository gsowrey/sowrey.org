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
class __TwigTemplate_6fe3ddafe9204f7f4bb8c8a3781011dac0adc3baf15ef9b276adf7c886049d37 extends \Twig\Template
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
        echo "<h1>Stories</h1>
<p>&lt;ul&gt;
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/stories/children"], "method"), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 4
            echo "&lt;li&gt;&lt;a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
            echo "\"&gt;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", []), "html", null, true);
            echo "&lt;/a&gt;&lt;/li&gt;
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
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
        return array (  49 => 6,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>Stories</h1>
<p>&lt;ul&gt;
{% for p in page.find('/stories/children').children %}
&lt;li&gt;&lt;a href=\"{{p.url}}\"&gt;{{ p.title }}&lt;/a&gt;&lt;/li&gt;
{% endfor %}
&lt;/ul&gt;</p>", "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/children", "");
    }
}
