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

/* item.html.twig */
class __TwigTemplate_88081000ade6fea97963803786de01b8dc04b18077bb8bb6110c01995cfa763e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "blog_url"), $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "blog-page"))], "method");
        // line 3
        $context["show_breadcrumbs"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_breadcrumbs", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 4
        $context["show_sidebar"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_sidebar", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 5
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_pagination", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 6
        $context["hero_image_name"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_hero($context, array $blocks = [])
    {
        // line 9
        echo "    ";
        if (($context["hero_image_name"] ?? null)) {
            // line 10
            echo "        ";
            $context["hero_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["hero_image_name"] ?? null), [], "array");
            // line 11
            echo "        ";
            ob_start(function () { return ''; });
            // line 12
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</h1>
            <h2>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
            echo "</h2>
            ";
            // line 14
            $this->loadTemplate("partials/blog/date.html.twig", "item.html.twig", 14)->display($context);
            // line 15
            echo "            ";
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "item.html.twig", 15)->display($context);
            // line 16
            echo "        ";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            $this->loadTemplate("partials/hero.html.twig", "item.html.twig", 17)->display(twig_array_merge($context, ["id" => "blog-hero"]));
            // line 18
            echo "
    ";
        }
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        // line 23
        echo "<section id=\"body-wrapper\" class=\"section blog-listing\">
    <section class=\"container ";
        // line 24
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">

        ";
        // line 26
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 27
            echo "            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 27)->display($context);
            // line 28
            echo "        ";
        }
        // line 29
        echo "
        ";
        // line 30
        $this->loadTemplate("item.html.twig", "item.html.twig", 30, "2110666163")->display($context);
        // line 38
        echo "
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  111 => 30,  108 => 29,  105 => 28,  102 => 27,  100 => 26,  95 => 24,  92 => 23,  89 => 22,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  68 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "item.html.twig", "/Users/geoff/Sites/sowrey.grav/user/themes/quark/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_88081000ade6fea97963803786de01b8dc04b18077bb8bb6110c01995cfa763e___2110666163 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'item' => [$this, 'block_item'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 30
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "item.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_item($context, array $blocks = [])
    {
        // line 32
        echo "                ";
        $this->loadTemplate("partials/blog-item.html.twig", "item.html.twig", 32)->display($context);
        // line 33
        echo "            ";
    }

    // line 34
    public function block_sidebar($context, array $blocks = [])
    {
        // line 35
        echo "                ";
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 35)->display($context);
        // line 36
        echo "            ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 36,  188 => 35,  185 => 34,  181 => 33,  178 => 32,  175 => 31,  165 => 30,  113 => 38,  111 => 30,  108 => 29,  105 => 28,  102 => 27,  100 => 26,  95 => 24,  92 => 23,  89 => 22,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  68 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "item.html.twig", "/Users/geoff/Sites/sowrey.grav/user/themes/quark/templates/item.html.twig");
    }
}
