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

/* partials/blog-item.html.twig */
class __TwigTemplate_6418d2dcb44a26aaa256275ceea7e8f50698ebb77fdceefea5c2ed2ebe3d89b2 extends \Twig\Template
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
        echo "<div class=\"content-item h-entry\">

";
        // line 3
        if ( !($context["hero_image_name"] ?? null)) {
            // line 4
            echo "    <div class=\"content-title text-center\">
        ";
            // line 5
            $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-item.html.twig", 5)->display(twig_array_merge($context, ["title_level" => "h2"]));
            // line 6
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", [])) {
                // line 7
                echo "        <h3 >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
                echo "</h3>
        ";
            }
            // line 9
            echo "        ";
            $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-item.html.twig", 9)->display($context);
            // line 10
            echo "        ";
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-item.html.twig", 10)->display($context);
            // line 11
            echo "    </div>
";
        }
        // line 13
        echo "    <div class=\"e-content\">
        ";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>

    ";
        // line 17
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "comments", []), "enabled", []))) {
            // line 18
            echo "        ";
            $this->loadTemplate("partials/comments.html.twig", "partials/blog-item.html.twig", 18)->display($context);
            // line 19
            echo "    ";
        }
        // line 20
        echo "</div>

";
        // line 22
        $context["siblings"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@taxonomy" => ["category" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "taxonomy", []), "category", [], "array"), 0, [], "array")]], "order" => ["by" => "default", "dir" => "desc"]]], "method");
        // line 23
        echo "<p class=\"prev-next text-center\">
    ";
        // line 24
        if ( !$this->getAttribute(($context["siblings"] ?? null), "isLast", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method")) {
            // line 25
            echo "            <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []));
            echo "\"><i class=\"fa fa-angle-left\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.PREV_POST"), "html", null, true);
            echo "</a>
    ";
        }
        // line 27
        echo "
    ";
        // line 28
        if ( !$this->getAttribute(($context["siblings"] ?? null), "isFirst", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method")) {
            // line 29
            echo "        <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.NEXT_POST"), "html", null, true);
            echo " <i class=\"fa fa-angle-right\"></i></a>
    ";
        }
        // line 31
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "partials/blog-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  101 => 29,  99 => 28,  96 => 27,  88 => 25,  86 => 24,  83 => 23,  81 => 22,  77 => 20,  74 => 19,  71 => 18,  69 => 17,  63 => 14,  60 => 13,  56 => 11,  53 => 10,  50 => 9,  44 => 7,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-item h-entry\">

{% if not hero_image_name %}
    <div class=\"content-title text-center\">
        {% include 'partials/blog/title.html.twig' with {title_level: 'h2'} %}
        {% if page.header.subtitle %}
        <h3 >{{ page.header.subtitle }}</h3>
        {% endif %}
        {% include 'partials/blog/date.html.twig' %}
        {% include 'partials/blog/taxonomy.html.twig' %}
    </div>
{% endif %}
    <div class=\"e-content\">
        {{ page.content|raw }}
    </div>

    {% if page.header.continue_link is same as(true) and config.plugins.comments.enabled %}
        {% include 'partials/comments.html.twig' %}
    {% endif %}
</div>

{% set siblings = page.collection({'items':{'@taxonomy':{'category': page.header.taxonomy[\"category\"][0]}},'order': {'by': 'default', 'dir': 'desc'}}) %}
<p class=\"prev-next text-center\">
    {% if not siblings.isLast(page.path) %}
            <a class=\"btn\" href=\"{{ siblings.prevSibling(page.path).url|e }}\"><i class=\"fa fa-angle-left\"></i> {{ 'THEME_QUARK.BLOG.ITEM.PREV_POST'|t }}</a>
    {% endif %}

    {% if not siblings.isFirst(page.path) %}
        <a class=\"btn\" href=\"{{ siblings.nextSibling(page.path).url|e }}\">{{ 'THEME_QUARK.BLOG.ITEM.NEXT_POST'|t }} <i class=\"fa fa-angle-right\"></i></a>
    {% endif %}
</p>
", "partials/blog-item.html.twig", "/Users/geoff/Sites/sowrey.grav/user/themes/quark/templates/partials/blog-item.html.twig");
    }
}
