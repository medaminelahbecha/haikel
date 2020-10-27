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

/* @EasyAdmin/default/paginator.html.twig */
class __TwigTemplate_99fcd903f3a9aae27690d70054e69d22b2cabff7cc59cb1b113f05125c8e9ec6 extends \Twig\Template
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
        // line 2
        echo "
";
        // line 3
        $context["_paginator_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), ["referer" => null]);
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "haveToPaginate", [])) {
            // line 6
            echo "    <div class=\"list-pagination\">
        <div class=\"row\">
            <div class=\"col-sm-3 hidden-xs list-pagination-counter\">
                ";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.counter", ["%start%" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPageOffsetStart", []), "%end%" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPageOffsetEnd", []), "%results%" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nbResults", [])], "EasyAdminBundle");
            echo "
            </div>

            <div class=\"col-xs-12 col-sm-9\">
                <ul class=\"pagination list-pagination-paginator ";
            // line 13
            echo (((1 == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", []))) ? ("first-page") : (""));
            echo " ";
            echo (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "hasNextPage", [])) ? ("") : ("last-page"));
            echo "\">
                    ";
            // line 14
            if ((1 == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", []))) {
                // line 15
                echo "                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-double-left\"></i> ";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.first", [], "EasyAdminBundle"), "html", null, true);
                echo "
                            </span>
                        </li>
                    ";
            } else {
                // line 21
                echo "                        <li>
                            <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) ? $context["_paginator_request_parameters"] : null), ["page" => 1])), "html", null, true);
                echo "\">
                                <i class=\"fa fa-angle-double-left\"></i> ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.first", [], "EasyAdminBundle"), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
            // line 27
            echo "
                    ";
            // line 28
            if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "hasPreviousPage", [])) {
                // line 29
                echo "                        <li>
                            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) ? $context["_paginator_request_parameters"] : null), ["page" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "previousPage", [])])), "html", null, true);
                echo "\">
                                <i class=\"fa fa-angle-left\"></i> ";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            } else {
                // line 35
                echo "                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-left\"></i> ";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
                echo "
                            </span>
                        </li>
                    ";
            }
            // line 41
            echo "
                    ";
            // line 42
            if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "hasNextPage", [])) {
                // line 43
                echo "                        <li>
                            <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) ? $context["_paginator_request_parameters"] : null), ["page" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nextPage", [])])), "html", null, true);
                echo "\">
                                ";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 49
                echo "                        <li class=\"disabled\">
                            <span>
                                ";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-right\"></i>
                            </span>
                        </li>
                    ";
            }
            // line 55
            echo "
                    ";
            // line 56
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", []) < $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nbPages", []))) {
                // line 57
                echo "                        <li>
                            <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) ? $context["_paginator_request_parameters"] : null), ["page" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nbPages", [])])), "html", null, true);
                echo "\">
                                ";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.last", [], "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-double-right\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 63
                echo "                        <li class=\"disabled\">
                            <span>
                                ";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.last", [], "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-double-right\"></i>
                            </span>
                        </li>
                    ";
            }
            // line 69
            echo "                </ul>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 69,  168 => 65,  164 => 63,  157 => 59,  153 => 58,  150 => 57,  148 => 56,  145 => 55,  138 => 51,  134 => 49,  127 => 45,  123 => 44,  120 => 43,  118 => 42,  115 => 41,  108 => 37,  104 => 35,  97 => 31,  93 => 30,  90 => 29,  88 => 28,  85 => 27,  78 => 23,  74 => 22,  71 => 21,  64 => 17,  60 => 15,  58 => 14,  52 => 13,  45 => 9,  40 => 6,  38 => 5,  35 => 4,  33 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/paginator.html.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\paginator.html.twig");
    }
}
