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

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_7e2170fc4b81648ead39d3fffcdae4d4caf307c0759844cb31e439888a36889a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'main' => [$this, 'block_main'],
            'entity_form' => [$this, 'block_entity_form'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", []), "layout", []), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) ? $context["form"] : null), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "entity"], "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "primary_key_field_name", []));
        // line 5
        $context["__internal_f75680a96f86fe6106c095f924941d94ef20f6bc117cef1212aa77abc4a2bae9"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", []);
        // line 6
        $context["_trans_parameters"] = ["%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []), [],         // line 5
(isset($context["__internal_f75680a96f86fe6106c095f924941d94ef20f6bc117cef1212aa77abc4a2bae9"]) ? $context["__internal_f75680a96f86fe6106c095f924941d94ef20f6bc117cef1212aa77abc4a2bae9"] : null)), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "label", []), [],         // line 5
(isset($context["__internal_f75680a96f86fe6106c095f924941d94ef20f6bc117cef1212aa77abc4a2bae9"]) ? $context["__internal_f75680a96f86fe6106c095f924941d94ef20f6bc117cef1212aa77abc4a2bae9"] : null)), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) ? $context["_entity_id"] : null)];
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body_id($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", [])) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : null)), "html", null, true);
    }

    // line 11
    public function block_body_class($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []))), "html", null, true);
    }

    // line 13
    public function block_content_title($context, array $blocks = [])
    {
        // line 14
        ob_start(function () { return ''; });
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", [], "any", false, true), "title", [], "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", []), "title", []), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null),         // line 5
(isset($context["__internal_f75680a96f86fe6106c095f924941d94ef20f6bc117cef1212aa77abc4a2bae9"]) ? $context["__internal_f75680a96f86fe6106c095f924941d94ef20f6bc117cef1212aa77abc4a2bae9"] : null))) : (        // line 16
(isset($context["_default_title"]) ? $context["_default_title"] : null))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 20
    public function block_main($context, array $blocks = [])
    {
        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 21
    public function block_entity_form($context, array $blocks = [])
    {
        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
    ";
    }

    // line 25
    public function block_delete_form($context, array $blocks = [])
    {
        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", ["view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "referer", 1 => ""], "method"), "delete_form" =>         // line 29
(isset($context["delete_form"]) ? $context["delete_form"] : null), "_translation_domain" => $this->getAttribute(        // line 30
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", []), "_trans_parameters" =>         // line 31
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "_entity_config" =>         // line 32
(isset($context["_entity_config"]) ? $context["_entity_config"] : null)], false);
        // line 33
        echo "
    ";
    }

    // line 37
    public function block_body_javascript($context, array $blocks = [])
    {
        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", [], "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

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
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 58,  139 => 42,  131 => 38,  128 => 37,  123 => 33,  121 => 32,  120 => 31,  119 => 30,  118 => 29,  117 => 28,  115 => 26,  112 => 25,  105 => 22,  102 => 21,  98 => 25,  95 => 24,  92 => 21,  89 => 20,  82 => 16,  81 => 5,  79 => 16,  76 => 15,  74 => 14,  71 => 13,  65 => 11,  59 => 10,  55 => 8,  53 => 6,  52 => 5,  51 => 6,  50 => 5,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 1,  35 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/edit.html.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\edit.html.twig");
    }
}
