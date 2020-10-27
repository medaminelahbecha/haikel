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

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_f57c83c699ae11884cc1ff5d06bfda5b50146ed2281e2acbb253e0c6f5b75291 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'content_header' => [$this, 'block_content_header'],
            'content_title_wrapper' => [$this, 'block_content_title_wrapper'],
            'global_actions' => [$this, 'block_global_actions'],
            'search_action' => [$this, 'block_search_action'],
            'search_form' => [$this, 'block_search_form'],
            'new_action' => [$this, 'block_new_action'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'item_actions' => [$this, 'block_item_actions'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", []), "layout", []), "@EasyAdmin/default/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "entity"], "method"));
        // line 2
        $context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", []);
        // line 3
        $context["_trans_parameters"] = ["%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []), [],         // line 2
(isset($context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"]) ? $context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"] : null)), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 3
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "label", []), [],         // line 2
(isset($context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"]) ? $context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"] : null))];
        // line 7
        $context["_request_parameters"] = twig_array_merge(twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "all", []), (((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context))) ? (_twig_default_filter((isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), [])) : ([]))), ["action" => $this->getAttribute($this->getAttribute(        // line 8
(isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "action"], "method"), "entity" => $this->getAttribute(        // line 9
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []), "menuIndex" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "menuIndex"], "method"), "submenuIndex" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "submenuIndex"], "method"), "sortField" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "sortField", 1 => ""], "method"), "sortDirection" => $this->getAttribute($this->getAttribute(        // line 13
(isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "sortDirection", 1 => "DESC"], "method"), "page" => $this->getAttribute($this->getAttribute(        // line 14
(isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "page", 1 => 1], "method"), "referer" => null]);
        // line 18
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "action"], "method"))) {
            // line 19
            $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), ["query" => (($this->getAttribute($this->getAttribute(            // line 20
(isset($context["app"]) ? $context["app"] : null), "request", [], "any", false, true), "get", [0 => "query"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", [], "any", false, true), "get", [0 => "query"], "method"), "")) : ("")), "sortField" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 21
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", [], "any", false, true), "sort", [], "any", false, true), "field", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", [], "any", false, true), "sort", [], "any", false, true), "field", []), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "sortField", 1 => ""], "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "sortField", 1 => ""], "method"))), "sortDirection" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 22
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", [], "any", false, true), "sort", [], "any", false, true), "direction", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", [], "any", false, true), "sort", [], "any", false, true), "direction", []), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "sortDirection", 1 => "DESC"], "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "sortDirection", 1 => "DESC"], "method")))]);
        }
        // line 26
        $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), ["referer" => twig_urlencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", (isset($context["_request_parameters"]) ? $context["_request_parameters"] : null)))]);
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_body_id($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ("easyadmin-list-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", [])), "html", null, true);
    }

    // line 29
    public function block_body_class($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []))), "html", null, true);
    }

    // line 31
    public function block_content_title($context, array $blocks = [])
    {
        // line 32
        ob_start(function () { return ''; });
        // line 33
        echo "    ";
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "action"], "method"))) {
            // line 34
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("search.page_title", $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nbResults", []), [], "EasyAdminBundle");
            // line 35
            echo "        ";
            echo (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", [], "any", false, true), "title", [], "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", []), "title", []), $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nbResults", []), [],             // line 2
(isset($context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"]) ? $context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"] : null))) : (            // line 35
(isset($context["_default_title"]) ? $context["_default_title"] : null)));
            echo "
    ";
        } else {
            // line 37
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "EasyAdminBundle");
            // line 38
            echo "        ";
            echo (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "list", [], "any", false, true), "title", [], "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "list", []), "title", []), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null),             // line 2
(isset($context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"]) ? $context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"] : null))) : (            // line 38
(isset($context["_default_title"]) ? $context["_default_title"] : null)));
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 43
    public function block_content_header($context, array $blocks = [])
    {
        // line 44
        echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            ";
        // line 46
        $this->displayBlock('content_title_wrapper', $context, $blocks);
        // line 49
        echo "        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                ";
        // line 53
        $this->displayBlock('global_actions', $context, $blocks);
        // line 94
        echo "            </div>
        </div>
    </div>
";
    }

    // line 46
    public function block_content_title_wrapper($context, array $blocks = [])
    {
        // line 47
        echo "                <h1 class=\"title\">";
        $this->displayBlock("content_title", $context, $blocks);
        echo "</h1>
            ";
    }

    // line 53
    public function block_global_actions($context, array $blocks = [])
    {
        // line 54
        echo "                    ";
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []))) {
            // line 55
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []));
            // line 56
            echo "
                        ";
            // line 57
            $this->displayBlock('search_action', $context, $blocks);
            // line 80
            echo "                    ";
        }
        // line 81
        echo "
                    ";
        // line 82
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []))) {
            // line 83
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []));
            // line 84
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 92
            echo "                    ";
        }
        // line 93
        echo "                ";
    }

    // line 57
    public function block_search_action($context, array $blocks = [])
    {
        // line 58
        echo "                            <div class=\"form-action ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", []), "")) : ("")), "html", null, true);
        echo "\">
                                <form method=\"get\" action=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                    ";
        // line 60
        $this->displayBlock('search_form', $context, $blocks);
        // line 77
        echo "                                </form>
                            </div>
                        ";
    }

    // line 60
    public function block_search_form($context, array $blocks = [])
    {
        // line 61
        echo "                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), "entity", []), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", [], "any", false, true), "sort", [], "any", false, true), "field", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", [], "any", false, true), "sort", [], "any", false, true), "field", []), $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), "sortField", []))) : ($this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), "sortField", []))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", [], "any", false, true), "sort", [], "any", false, true), "direction", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", [], "any", false, true), "sort", [], "any", false, true), "direction", []), $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), "sortDirection", []))) : ($this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), "sortDirection", []))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), "menuIndex", []), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), "submenuIndex", []), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", [], "any", false, true), "get", [0 => "query"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", [], "any", false, true), "get", [0 => "query"], "method"), "")) : ("")), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "target", []), "html", null, true);
        echo "\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", []), "action.search")) : ("action.search")), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null),         // line 2
(isset($context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"]) ? $context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"] : null)), "html", null, true);
        // line 72
        echo "</span>
                                                </button>
                                            </span>
                                        </div>
                                    ";
    }

    // line 84
    public function block_new_action($context, array $blocks = [])
    {
        // line 85
        echo "                            <div class=\"button-action\">
                                <a class=\"";
        // line 86
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", []), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), ["action" => $this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "name", [])])), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "target", []), "html", null, true);
        echo "\">
                                    ";
        // line 87
        if ($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "icon", [])) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "icon", []), "html", null, true);
            echo "\"></i>";
        }
        // line 88
        echo "                                    ";
        ((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", [], "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", [])))) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", []), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null),         // line 2
(isset($context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"]) ? $context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"] : null)), "html", null, true))) : (print ("")));
        // line 88
        echo "
                                </a>
                            </div>
                        ";
    }

    // line 99
    public function block_main($context, array $blocks = [])
    {
        // line 100
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []));
        // line 101
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 105
        $this->displayBlock('table_head', $context, $blocks);
        // line 132
        echo "        </thead>

        <tbody>
        ";
        // line 135
        $this->displayBlock('table_body', $context, $blocks);
        // line 172
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 176
        $this->displayBlock('paginator', $context, $blocks);
        // line 179
        echo "
    ";
        // line 180
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 105
    public function block_table_head($context, array $blocks = [])
    {
        // line 106
        echo "            <tr>
                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 108
            echo "                    ";
            $context["isSortingField"] = (($this->getAttribute($context["metadata"], "property", []) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "sortField"], "method")) || (("association" == $this->getAttribute($context["metadata"], "type", [])) && (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "sortField"], "method")) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($this->getAttribute($context["metadata"], "property", []) . ".")) && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))));
            // line 109
            echo "                    ";
            $context["nextSortDirection"] = (((isset($context["isSortingField"]) ? $context["isSortingField"] : null)) ? (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "sortDirection"], "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 110
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", [])) ? ($this->getAttribute($context["metadata"], "label", [])) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null),             // line 2
(isset($context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"]) ? $context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"] : null));
            // line 111
            echo "                    ";
            $context["_column_icon"] = (((isset($context["isSortingField"]) ? $context["isSortingField"] : null)) ? (((((isset($context["nextSortDirection"]) ? $context["nextSortDirection"] : null) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 112
            echo "
                    <th data-property-name=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "property", []), "html", null, true);
            echo "\" class=\"";
            echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : null)) ? ("sorted") : (""));
            echo " ";
            echo (($this->getAttribute($context["metadata"], "virtual", [])) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", [])), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", []), "html", null, true);
            echo "\" ";
            echo (($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        ";
            // line 114
            if ($this->getAttribute($context["metadata"], "sortable", [])) {
                // line 115
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), ["page" => 1, "sortField" => $this->getAttribute($context["metadata"], "property", []), "sortDirection" => (isset($context["nextSortDirection"]) ? $context["nextSortDirection"] : null)])), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 116
                echo twig_escape_filter($this->env, (isset($context["_column_icon"]) ? $context["_column_icon"] : null), "html", null, true);
                echo "\"></i>
                                ";
                // line 117
                echo (isset($context["_column_label"]) ? $context["_column_label"] : null);
                echo "
                            </a>
                        ";
            } else {
                // line 120
                echo "                            <span>";
                echo (isset($context["_column_label"]) ? $context["_column_label"] : null);
                echo "</span>
                        ";
            }
            // line 122
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "
                ";
        // line 125
        if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : null)) > 0)) {
            // line 126
            echo "                    <th  ";
            echo (($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        <span>";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 130
        echo "            </tr>
        ";
    }

    // line 135
    public function block_table_body($context, array $blocks = [])
    {
        // line 136
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPageResults", []));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 137
            echo "                ";
            // line 138
            echo "                ";
            $context["_item_id"] = ("" . $this->getAttribute($context["item"], $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "primary_key_field_name", [])));
            // line 139
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["_item_id"]) ? $context["_item_id"] : null), "html", null, true);
            echo "\">
                    ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 141
                echo "                        ";
                $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", []) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "sortField"], "method"));
                // line 142
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", [])) ? ($this->getAttribute($context["metadata"], "label", [])) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null),                 // line 2
(isset($context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"]) ? $context["__internal_fbcdc66585842d55ce6eb883364ad2b74fa4c213bfdf18fc3ddf771d96daf71d"] : null));
                // line 143
                echo "
                        <td data-label=\"";
                // line 144
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : null), "html", null, true);
                echo "\" class=\"";
                echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : null)) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", [])), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", []), "html", null, true);
                echo "\" ";
                echo (($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
                echo ">
                            ";
                // line 145
                echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "
                    ";
            // line 149
            if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : null)) > 0)) {
                // line 150
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "EasyAdminBundle");
                // line 151
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : null), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 152
                $this->displayBlock('item_actions', $context, $blocks);
                // line 161
                echo "                        </td>
                    ";
            }
            // line 163
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 165
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 166
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : null)) > 0)) ? ((twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : null)) + 1)) : (twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : null)))), "html", null, true);
            echo "\">
                        ";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search.no_results", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "        ";
    }

    // line 152
    public function block_item_actions($context, array $blocks = [])
    {
        // line 153
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", ["actions" =>         // line 154
(isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : null), "request_parameters" =>         // line 155
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), "translation_domain" => $this->getAttribute(        // line 156
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", []), "trans_parameters" =>         // line 157
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "item_id" =>         // line 158
(isset($context["_item_id"]) ? $context["_item_id"] : null)], false);
        // line 159
        echo "
                        ";
    }

    // line 176
    public function block_paginator($context, array $blocks = [])
    {
        // line 177
        echo "        ";
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", []), "paginator", []));
        echo "
    ";
    }

    // line 180
    public function block_delete_form($context, array $blocks = [])
    {
        // line 181
        echo "        ";
        $context["referer"] = ((((($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", []) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nbPages", [])) && (1 != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", []))) && (1 == twig_length_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPageResults", []))))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge($this->getAttribute($this->getAttribute(        // line 182
(isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), ["page" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "page"], "method") - 1)]))) : ($this->getAttribute($this->getAttribute(        // line 183
(isset($context["app"]) ? $context["app"] : null), "request", []), "requestUri", [])));
        // line 185
        echo "
        ";
        // line 186
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", ["view" => "list", "referer" => twig_urlencode_filter(        // line 188
(isset($context["referer"]) ? $context["referer"] : null)), "delete_form" =>         // line 189
(isset($context["delete_form_template"]) ? $context["delete_form_template"] : null), "_translation_domain" => $this->getAttribute(        // line 190
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", []), "_trans_parameters" =>         // line 191
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "_entity_config" =>         // line 192
(isset($context["_entity_config"]) ? $context["_entity_config"] : null)], false);
        // line 193
        echo "
    ";
    }

    // line 197
    public function block_body_javascript($context, array $blocks = [])
    {
        // line 198
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", ["action" => "edit", "entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []), "view" => "list"]);
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 241
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "action"], "method"))) {
            // line 242
            echo "        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 243
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", [], "any", false, true), "get", [0 => "query"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", [], "any", false, true), "get", [0 => "query"], "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 243,  647 => 242,  645 => 241,  611 => 210,  595 => 198,  592 => 197,  587 => 193,  585 => 192,  584 => 191,  583 => 190,  582 => 189,  581 => 188,  580 => 186,  577 => 185,  575 => 183,  574 => 182,  572 => 181,  569 => 180,  562 => 177,  559 => 176,  554 => 159,  552 => 158,  551 => 157,  550 => 156,  549 => 155,  548 => 154,  546 => 153,  543 => 152,  539 => 171,  529 => 167,  525 => 166,  522 => 165,  508 => 163,  504 => 161,  502 => 152,  497 => 151,  494 => 150,  492 => 149,  489 => 148,  480 => 145,  468 => 144,  465 => 143,  463 => 2,  461 => 142,  458 => 141,  454 => 140,  449 => 139,  446 => 138,  444 => 137,  425 => 136,  422 => 135,  417 => 130,  411 => 127,  406 => 126,  404 => 125,  401 => 124,  394 => 122,  388 => 120,  382 => 117,  378 => 116,  373 => 115,  371 => 114,  357 => 113,  354 => 112,  351 => 111,  349 => 2,  347 => 110,  344 => 109,  341 => 108,  337 => 107,  334 => 106,  331 => 105,  327 => 180,  324 => 179,  322 => 176,  316 => 172,  314 => 135,  309 => 132,  307 => 105,  301 => 101,  298 => 100,  295 => 99,  288 => 88,  286 => 2,  284 => 88,  278 => 87,  270 => 86,  267 => 85,  264 => 84,  256 => 72,  254 => 2,  253 => 72,  248 => 70,  243 => 68,  238 => 66,  234 => 65,  230 => 64,  226 => 63,  222 => 62,  219 => 61,  216 => 60,  210 => 77,  208 => 60,  204 => 59,  199 => 58,  196 => 57,  192 => 93,  189 => 92,  186 => 84,  183 => 83,  181 => 82,  178 => 81,  175 => 80,  173 => 57,  170 => 56,  167 => 55,  164 => 54,  161 => 53,  154 => 47,  151 => 46,  144 => 94,  142 => 53,  136 => 49,  134 => 46,  130 => 44,  127 => 43,  119 => 38,  118 => 2,  116 => 38,  113 => 37,  108 => 35,  107 => 2,  105 => 35,  102 => 34,  99 => 33,  97 => 32,  94 => 31,  88 => 29,  82 => 28,  78 => 5,  76 => 26,  73 => 22,  72 => 21,  71 => 20,  70 => 19,  68 => 18,  66 => 14,  65 => 13,  64 => 12,  63 => 11,  62 => 10,  61 => 9,  60 => 8,  59 => 7,  57 => 2,  56 => 3,  55 => 2,  54 => 3,  52 => 2,  50 => 1,  44 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/list.html.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\list.html.twig");
    }
}
