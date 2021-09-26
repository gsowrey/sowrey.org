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

/* forms/fields/list/list.html.twig */
class __TwigTemplate_b5f9e20cc5a34764b9afa2ae3e577a488b9be38bbf16dd942b967542ccb7378c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'contents' => [$this, 'block_contents'],
            'global_attributes' => [$this, 'block_global_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 4
        $context["name"] = $this->getAttribute(($context["field"] ?? null), "name", []);
        // line 5
        $context["btnLabel"] = (($this->getAttribute(($context["field"] ?? null), "btnLabel", [], "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "btnLabel", [])) : ("PLUGIN_ADMIN.ADD_ITEM"));
        // line 6
        $context["btnSortLabel"] = (($this->getAttribute(($context["field"] ?? null), "btnSortLabel", [], "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "btnSortLabel", [])) : ("PLUGIN_ADMIN.SORT_BY"));
        // line 7
        $context["fieldControls"] = (($this->getAttribute(($context["field"] ?? null), "controls", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "controls", []), "bottom")) : ("bottom"));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/list/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_contents($context, array $blocks = [])
    {
        // line 10
        echo "    <div class=\"form-label";
        if ( !($context["vertical"] ?? null)) {
            echo " block size-1-3 pure-u-1-3";
        }
        echo "\">
        ";
        // line 11
        if ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) {
            // line 12
            echo "            <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\">
                <input type=\"checkbox\"
                       id=\"toggleable_";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
            echo "\"
                       ";
            // line 15
            if (($context["toggleableChecked"] ?? null)) {
                echo "value=\"1\"";
            }
            // line 16
            echo "                       name=\"toggleable_";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"
                       ";
            // line 17
            if (($context["toggleableChecked"] ?? null)) {
                echo "checked=\"checked\"";
            }
            // line 18
            echo "                >
                <label for=\"toggleable_";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
            echo "\"></label>
            </span>
        ";
        }
        // line 22
        echo "        <label";
        echo (($this->getAttribute(($context["field"] ?? null), "toggleable", [])) ? (((" class=\"toggleable\" for=\"toggleable_" . $this->getAttribute(($context["field"] ?? null), "name", [])) . "\"")) : (""));
        echo ">
            ";
        // line 23
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 24
            echo "            <span class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
            echo "
            ";
        }
        // line 28
        echo "            ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
    </div>
    <div class=\"form-data";
        // line 31
        if ( !($context["vertical"] ?? null)) {
            echo " block size-2-3 pure-u-2-3";
        }
        echo "\"
        ";
        // line 32
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 37
        echo "    >

        <div class=\"form-list-wrapper ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo "\" data-type=\"collection\"
             ";
        // line 40
        if ($this->getAttribute(($context["field"] ?? null), "selectunique", [])) {
            // line 41
            echo "                 data-select-unique=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "selectunique", [])), "html_attr");
            echo "\"
                 data-max=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["field"] ?? null), "selectunique", [])), "html", null, true);
            echo "\"
             ";
        }
        // line 44
        echo "            ";
        if ($this->getAttribute(($context["field"] ?? null), "min", [], "any", true, true)) {
            echo "data-min=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "min", []), "html", null, true);
            echo "\"";
        }
        // line 45
        echo "            ";
        if (($this->getAttribute(($context["field"] ?? null), "max", [], "any", true, true) &&  !$this->getAttribute(($context["field"] ?? null), "selectunique", []))) {
            echo "data-max=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "max", []), "html", null, true);
            echo "\"";
        }
        // line 46
        echo "        >
            ";
        // line 47
        if (twig_in_filter(($context["fieldControls"] ?? null), [0 => "top", 1 => "both"])) {
            // line 48
            echo "                <div class=\"collection-actions\">
                    ";
            // line 49
            if (($context["collapsible"] ?? null)) {
                // line 50
                echo "                        <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                                ";
                // line 51
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-down\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
                echo "</button>
                        <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                                ";
                // line 53
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-right\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
                echo "</button>
                    ";
            }
            // line 55
            echo "                    ";
            if ($this->getAttribute(($context["field"] ?? null), "sortby", [])) {
                // line 56
                echo "                        <button class=\"button";
                echo (( !twig_length_filter($this->env, ($context["value"] ?? null))) ? (" hidden") : (""));
                echo "\" type=\"button\" data-action=\"sort\" data-action-sort=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", []), "html", null, true);
                echo "\" data-action-sort-dir=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", []), "asc")) : ("asc")), "html", null, true);
                echo "\"
                                ";
                // line 57
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-sort-amount-";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", []), "asc")) : ("asc")), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ($context["btnSortLabel"] ?? null)), "html", null, true);
                echo " '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", []), "html", null, true);
                echo "'</button>
                    ";
            }
            // line 59
            echo "                    <button class=\"button\" type=\"button\" data-action=\"add\"
                            data-action-add=\"";
            // line 60
            ((($this->getAttribute(($context["field"] ?? null), "placement", []) === "position")) ? (print ("top")) : (print (twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "placement", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "placement", []), "bottom")) : ("bottom")), "html", null, true))));
            echo "\"
                            ";
            // line 61
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 62
            echo "                    ><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ($context["btnLabel"] ?? null)), "html", null, true);
            echo "</button>
                </div>
            ";
        }
        // line 65
        echo "            <ul  ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo "\"";
        }
        echo " data-collection-holder=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                ";
        // line 66
        if (($this->getAttribute(($context["field"] ?? null), "sort", []) === false)) {
            // line 67
            echo "                    data-collection-nosort
                ";
        }
        // line 68
        echo ">
                ";
        // line 69
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 70
            echo "                ";
            $context["collapsible"] = ((twig_length_filter($this->env, $this->getAttribute(($context["field"] ?? null), "fields", [])) > 1) && ( !$this->getAttribute(($context["field"] ?? null), "collapsible", [], "any", true, true) || $this->getAttribute(($context["field"] ?? null), "collapsible", [])));
            // line 71
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 72
                echo "                    ";
                $context["item_name"] = ((($context["name"] ?? null)) ? (((($context["name"] ?? null) . ".") . $context["key"])) : ($context["key"]));
                // line 73
                echo "                    <li data-collection-item=\"";
                echo twig_escape_filter($this->env, ($context["item_name"] ?? null), "html", null, true);
                echo "\"
                        data-collection-key=\"";
                // line 74
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                        class=\"";
                // line 75
                echo (((($context["collapsible"] ?? null) && $this->getAttribute(($context["field"] ?? null), "collapsed", []))) ? ("collection-collapsed") : (""));
                echo "\"
                        ";
                // line 76
                if ($this->getAttribute(($context["field"] ?? null), "min_height", [])) {
                    echo "style=\"min-height:";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "min_height", []), "html", null, true);
                    echo ";\"";
                }
                echo ">
                        <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["child_name"] => $context["child"]) {
                    // line 79
                    $context["child"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->prepareFormField($context["child"], $context["child_name"], ($context["item_name"] ?? null));
                    // line 80
                    echo "                                ";
                    if ($context["child"]) {
                        // line 81
                        echo "                                    ";
                        $context["child"] = twig_array_merge($context["child"], ["_list_index" => ($context["item_name"] ?? null)]);
                        // line 82
                        echo "                                    ";
                        $context["default_layout"] = "text";
                        // line 83
                        echo "                                    ";
                        if ((($this->getAttribute($context["child"], "type", []) == "key") || (($this->getAttribute($context["child"], "key", []) == true) && ($this->getAttribute($context["child"], "type", []) != "list")))) {
                            // line 84
                            echo "                                        ";
                            // line 85
                            echo "                                        ";
                            $context["default_layout"] = "key";
                            // line 86
                            echo "                                        ";
                            $context["child_value"] = $context["key"];
                            // line 87
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["child"], "name", []) == "value")) {
                            // line 88
                            echo "                                        ";
                            // line 89
                            echo "                                        ";
                            $context["child"] = twig_array_merge($context["child"], ["name" => ($context["item_name"] ?? null)]);
                            // line 90
                            echo "                                        ";
                            $context["child_value"] = ($context["value"] ?? null);
                            // line 91
                            echo "                                    ";
                        } else {
                            // line 92
                            echo "                                        ";
                            $context["child_value"] = ((($context["form"] ?? null)) ? ($this->getAttribute(($context["form"] ?? null), "value", [0 => $this->getAttribute($context["child"], "name", [])], "method")) : ($this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["child"], "name", [])], "method")));
                            // line 93
                            echo "                                    ";
                        }
                        // line 94
                        echo "
                                    ";
                        // line 95
                        $context["field_templates"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->includeFormField($this->getAttribute($context["child"], "type", []), ($context["field_layout"] ?? null), ($context["default_layout"] ?? null));
                        // line 96
                        echo "                                    ";
                        $context["template_data"] = ["field" => $context["child"], "value" => ($context["child_value"] ?? null)];
                        // line 97
                        echo "                                    ";
                        if ((($context["default_layout"] ?? null) != "key")) {
                            // line 98
                            echo "                                        ";
                            $context["originalValue"] = ($context["child_value"] ?? null);
                            // line 99
                            echo "                                        ";
                            if (($this->getAttribute($context["child"], "type", []) == "fieldset")) {
                                // line 100
                                echo "                                            ";
                                $context["template_data"] = twig_array_merge(($context["template_data"] ?? null), ["val" => ($context["child_value"] ?? null)]);
                                // line 101
                                echo "                                        ";
                            }
                            // line 102
                            echo "                                    ";
                        }
                        // line 104
                        $this->loadTemplate(($context["field_templates"] ?? null), "forms/fields/list/list.html.twig", 104)->display(twig_array_merge($context, ($context["template_data"] ?? null)));
                    }
                    // line 106
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['child_name'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "                            <div class=\"item-actions\">
                                ";
                // line 108
                if (($context["collapsible"] ?? null)) {
                    // line 109
                    echo "                                    <i class=\"fa fa-chevron-circle-";
                    echo (($this->getAttribute(($context["field"] ?? null), "collapsed", [])) ? ("right") : ("down"));
                    echo "\" data-action=\"";
                    echo (($this->getAttribute(($context["field"] ?? null), "collapsed", [])) ? ("expand") : ("collapse"));
                    echo "\"></i>
                                    <br />
                                ";
                }
                // line 112
                echo "                                <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                            </div>
                        </li>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                ";
        }
        // line 117
        echo "            </ul>
            ";
        // line 118
        if (twig_in_filter(($context["fieldControls"] ?? null), [0 => "bottom", 1 => "both"])) {
            // line 119
            echo "            <div class=\"collection-actions\">
                ";
            // line 120
            if (($context["collapsible"] ?? null)) {
                // line 121
                echo "                    <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                            ";
                // line 122
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-down\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
                echo "</button>
                    <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                            ";
                // line 124
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-right\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
                echo "</button>
                ";
            }
            // line 126
            echo "                ";
            if ($this->getAttribute(($context["field"] ?? null), "sortby", [])) {
                // line 127
                echo "                    <button class=\"button";
                echo (( !twig_length_filter($this->env, ($context["value"] ?? null))) ? (" hidden") : (""));
                echo "\" type=\"button\" data-action=\"sort\" data-action-sort=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", []), "html", null, true);
                echo "\" data-action-sort-dir=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", []), "asc")) : ("asc")), "html", null, true);
                echo "\"
                            ";
                // line 128
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-sort-amount-";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", []), "asc")) : ("asc")), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ($context["btnSortLabel"] ?? null)), "html", null, true);
                echo " '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", []), "html", null, true);
                echo "'</button>
                ";
            }
            // line 130
            echo "                <button class=\"button\" type=\"button\" data-action=\"add\"
                        data-action-add=\"";
            // line 131
            ((($this->getAttribute(($context["field"] ?? null), "placement", []) === "position")) ? (print ("bottom")) : (print (twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "placement", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "placement", []), "bottom")) : ("bottom")), "html", null, true))));
            echo "\"
                        ";
            // line 132
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 133
            echo "                ><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ($context["btnLabel"] ?? null)), "html", null, true);
            echo "</button>
            </div>
            ";
        }
        // line 136
        echo "
            ";
        // line 137
        ob_start(function () { return ''; });
        // line 138
        $context["item_name"] = ((($context["name"] ?? null)) ? ((($context["name"] ?? null) . ".*")) : ("*"));
        // line 139
        echo "<li data-collection-item=\"";
        echo twig_escape_filter($this->env, ($context["item_name"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 140
        if ( !($this->getAttribute(($context["field"] ?? null), "sort", []) === false)) {
            // line 141
            echo "                        <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                    ";
        }
        // line 143
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["child_name"] => $context["child"]) {
                // line 145
                $context["child"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->prepareFormField($context["child"], $context["child_name"], ($context["item_name"] ?? null));
                // line 146
                echo "                            ";
                if ($context["child"]) {
                    // line 147
                    echo "                                ";
                    $context["child"] = twig_array_merge($context["child"], ["_list_index" => ($context["item_name"] ?? null)]);
                    // line 148
                    echo "                                ";
                    $context["default_layout"] = "text";
                    // line 149
                    echo "                                ";
                    if ((($this->getAttribute($context["child"], "type", []) == "key") || ($this->getAttribute($context["child"], "key", []) == true))) {
                        // line 150
                        echo "                                    ";
                        // line 151
                        echo "                                    ";
                        $context["default_layout"] = "key";
                        // line 152
                        echo "                                ";
                    } elseif (($this->getAttribute($context["child"], "name", []) == "value")) {
                        // line 153
                        echo "                                    ";
                        // line 154
                        echo "                                    ";
                        $context["child"] = twig_array_merge($context["child"], ["name" => ($context["item_name"] ?? null)]);
                        // line 155
                        echo "                                ";
                    }
                    // line 156
                    echo "
                                ";
                    // line 157
                    $context["field_templates"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->includeFormField($this->getAttribute($context["child"], "type", []), ($context["field_layout"] ?? null), ($context["default_layout"] ?? null));
                    // line 158
                    echo "                                ";
                    $this->loadTemplate(($context["field_templates"] ?? null), "forms/fields/list/list.html.twig", 158)->display(twig_array_merge($context, ["field" => $context["child"], "value" => null]));
                    // line 159
                    echo "                            ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_name'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                        <div class=\"item-actions\">
                            ";
            // line 162
            if (($context["collapsible"] ?? null)) {
                // line 163
                echo "                                <i class=\"fa fa-chevron-circle-down\" data-action=\"collapse\"></i>
                                <br />
                            ";
            }
            // line 166
            echo "                            <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                        </div>";
        }
        // line 169
        echo "</li>
            ";
        $context["template"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 171
        echo "            <div style=\"display: none;\" data-collection-template=\"new\"
                 data-collection-template-html=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->regexReplace(($context["template"] ?? null), "/([ 
]+)/", " "), "html_attr");
        echo "\"></div>
            <div style=\"display: none;\" data-collection-config=\"";
        // line 173
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"></div>
        </div>
    </div>
";
    }

    // line 32
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 33
        echo "        data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", []), "html", null, true);
        echo "\"
        data-grav-disabled=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["toggleableChecked"] ?? null), "html", null, true);
        echo "\"
        data-grav-default=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
        ";
    }

    public function getTemplateName()
    {
        return "forms/fields/list/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  652 => 35,  648 => 34,  643 => 33,  640 => 32,  632 => 173,  627 => 172,  624 => 171,  620 => 169,  616 => 166,  611 => 163,  609 => 162,  606 => 161,  591 => 159,  588 => 158,  586 => 157,  583 => 156,  580 => 155,  577 => 154,  575 => 153,  572 => 152,  569 => 151,  567 => 150,  564 => 149,  561 => 148,  558 => 147,  555 => 146,  553 => 145,  536 => 144,  534 => 143,  530 => 141,  528 => 140,  523 => 139,  521 => 138,  519 => 137,  516 => 136,  509 => 133,  505 => 132,  501 => 131,  498 => 130,  485 => 128,  476 => 127,  473 => 126,  464 => 124,  455 => 122,  452 => 121,  450 => 120,  447 => 119,  445 => 118,  442 => 117,  439 => 116,  422 => 112,  413 => 109,  411 => 108,  408 => 107,  394 => 106,  391 => 104,  388 => 102,  385 => 101,  382 => 100,  379 => 99,  376 => 98,  373 => 97,  370 => 96,  368 => 95,  365 => 94,  362 => 93,  359 => 92,  356 => 91,  353 => 90,  350 => 89,  348 => 88,  345 => 87,  342 => 86,  339 => 85,  337 => 84,  334 => 83,  331 => 82,  328 => 81,  325 => 80,  323 => 79,  306 => 78,  298 => 76,  294 => 75,  290 => 74,  285 => 73,  282 => 72,  264 => 71,  261 => 70,  259 => 69,  256 => 68,  252 => 67,  250 => 66,  239 => 65,  232 => 62,  228 => 61,  224 => 60,  221 => 59,  208 => 57,  199 => 56,  196 => 55,  187 => 53,  178 => 51,  175 => 50,  173 => 49,  170 => 48,  168 => 47,  165 => 46,  158 => 45,  151 => 44,  146 => 42,  141 => 41,  139 => 40,  135 => 39,  131 => 37,  129 => 32,  123 => 31,  116 => 28,  110 => 26,  102 => 24,  100 => 23,  95 => 22,  89 => 19,  86 => 18,  82 => 17,  77 => 16,  73 => 15,  69 => 14,  63 => 12,  61 => 11,  54 => 10,  51 => 9,  46 => 1,  44 => 7,  42 => 6,  40 => 5,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/list/list.html.twig", "/Users/geoff/Sites/sowrey.grav/user/plugins/admin/themes/grav/templates/forms/fields/list/list.html.twig");
    }
}
