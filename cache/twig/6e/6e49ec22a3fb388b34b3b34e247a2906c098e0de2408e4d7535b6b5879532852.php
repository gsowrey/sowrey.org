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
class __TwigTemplate_e9d099a7559f54a6d7a3c3986dec2683ed446b752f9970597deaa21b35608697 extends \Twig\Template
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
<p>&lt;ul&gt;
&lt;/ul&gt;</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/children";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
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
<p>&lt;ul&gt;
&lt;/ul&gt;</p>", "@Page:/Users/geoff/Sites/sowrey.grav/user/pages/02.stories/children", "");
    }
}
