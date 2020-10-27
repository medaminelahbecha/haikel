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

/* @EasyAdmin/default/show.html.twig */
class __TwigTemplate_256c0f7b6801bff94d310723eb048df0888918e01dbcb4ac1fefb015a20c164c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'main' => [$this, 'block_main'],
            'show_fields' => [$this, 'block_show_fields'],
            'show_field' => [$this, 'block_show_field'],
            'item_actions' => [$this, 'block_item_actions'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", []), "layout", []), "@EasyAdmin/default/show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "entity"], "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "primary_key_field_name", [])));
        // line 4
        $context["__internal_002daef5b9af51278551ece8103c3fcd48eed0361c933da3d08a44be188cd115"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", []);
        // line 5
        $context["_trans_parameters"] = ["%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []), [],         // line 4
(isset($context["__internal_002daef5b9af51278551ece8103c3fcd48eed0361c933da3d08a44be188cd115"]) ? $context["__internal_002daef5b9af51278551ece8103c3fcd48eed0361c933da3d08a44be188cd115"] : null)), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "label", []), [],         // line 4
(isset($context["__internal_002daef5b9af51278551ece8103c3fcd48eed0361c933da3d08a44be188cd115"]) ? $context["__internal_002daef5b9af51278551ece8103c3fcd48eed0361c933da3d08a44be188cd115"] : null)), "%entity_id%" =>         // line 5
(isset($context["_entity_id"]) ? $context["_entity_id"] : null)];
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body_id($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", [])) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : null)), "html", null, true);
    }

    // line 10
    public function block_body_class($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []))), "html", null, true);
    }

    // line 12
    public function block_content_title($context, array $blocks = [])
    {
        // line 13
        ob_start(function () { return ''; });
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "show", [], "any", false, true), "title", [], "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "show", []), "title", []), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null),         // line 4
(isset($context["__internal_002daef5b9af51278551ece8103c3fcd48eed0361c933da3d08a44be188cd115"]) ? $context["__internal_002daef5b9af51278551ece8103c3fcd48eed0361c933da3d08a44be188cd115"] : null))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : null))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $this->displayBlock('show_fields', $context, $blocks);
        // line 41
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 44
        $this->displayBlock('item_actions', $context, $blocks);
        // line 56
        echo "            </div>
        </div>
    </div>

    ";
        // line 60
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 21
    public function block_show_fields($context, array $blocks = [])
    {
        // line 22
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
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
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 23
            echo "                ";
            $this->displayBlock('show_field', $context, $blocks);
            // line 39
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
    }

    // line 23
    public function block_show_field($context, array $blocks = [])
    {
        // line 24
        echo "                    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "type", []), "default")) : ("default"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "css_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "css_class", []), "")) : ("")), "html", null, true);
        echo "\">
                        <label class=\"col-sm-2 control-label\">
                            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "label", [])) ? ($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "label", [])) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["field"]) ? $context["field"] : null)))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null),         // line 4
(isset($context["__internal_002daef5b9af51278551ece8103c3fcd48eed0361c933da3d08a44be188cd115"]) ? $context["__internal_002daef5b9af51278551ece8103c3fcd48eed0361c933da3d08a44be188cd115"] : null));
        // line 26
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                ";
        // line 30
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []), (isset($context["entity"]) ? $context["entity"] : null), (isset($context["metadata"]) ? $context["metadata"] : null));
        echo "
                            </div>

                            ";
        // line 33
        if (((($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "help", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "help", []), "")) : ("")) != "")) {
            // line 34
            echo "                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "help", []), [],             // line 4
(isset($context["__internal_002daef5b9af51278551ece8103c3fcd48eed0361c933da3d08a44be188cd115"]) ? $context["__internal_002daef5b9af51278551ece8103c3fcd48eed0361c933da3d08a44be188cd115"] : null));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
    }

    // line 44
    public function block_item_actions($context, array $blocks = [])
    {
        // line 45
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []));
        // line 46
        echo "                ";
        $context["_request_parameters"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "all", []);
        // line 47
        echo "
                ";
        // line 48
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", ["actions" =>         // line 49
(isset($context["_show_actions"]) ? $context["_show_actions"] : null), "request_parameters" =>         // line 50
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), "translation_domain" => $this->getAttribute(        // line 51
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", []), "trans_parameters" =>         // line 52
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "item_id" =>         // line 53
(isset($context["_entity_id"]) ? $context["_entity_id"] : null)], false);
        // line 54
        echo "
            ";
    }

    // line 60
    public function block_delete_form($context, array $blocks = [])
    {
        // line 61
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", ["view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 63
(isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "referer", 1 => ""], "method"), "delete_form" =>         // line 64
(isset($context["delete_form"]) ? $context["delete_form"] : null), "_translation_domain" => $this->getAttribute(        // line 65
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", []), "_trans_parameters" =>         // line 66
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "_entity_config" =>         // line 67
(isset($context["_entity_config"]) ? $context["_entity_config"] : null)], false);
        // line 68
        echo "
    ";
    }

    // line 72
    public function block_body_javascript($context, array $blocks = [])
    {
        // line 73
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 73,  238 => 72,  233 => 68,  231 => 67,  230 => 66,  229 => 65,  228 => 64,  227 => 63,  225 => 61,  222 => 60,  217 => 54,  215 => 53,  214 => 52,  213 => 51,  212 => 50,  211 => 49,  210 => 48,  207 => 47,  204 => 46,  201 => 45,  198 => 44,  192 => 36,  188 => 34,  186 => 4,  184 => 34,  182 => 33,  176 => 30,  170 => 26,  168 => 4,  167 => 26,  159 => 24,  156 => 23,  152 => 40,  138 => 39,  135 => 23,  117 => 22,  114 => 21,  110 => 60,  104 => 56,  102 => 44,  97 => 41,  95 => 21,  92 => 20,  89 => 19,  82 => 15,  81 => 4,  79 => 15,  76 => 14,  74 => 13,  71 => 12,  65 => 10,  59 => 9,  55 => 7,  53 => 5,  52 => 4,  51 => 5,  50 => 4,  49 => 5,  47 => 4,  45 => 3,  43 => 1,  37 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/show.html.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\show.html.twig");
    }
}
