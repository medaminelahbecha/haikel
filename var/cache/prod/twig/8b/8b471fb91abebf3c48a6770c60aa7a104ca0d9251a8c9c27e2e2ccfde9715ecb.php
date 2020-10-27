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

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_535333b8b107b66275ef3e2108f0ddd9f29367135dd4c3ccad143d8c21863c44 extends \Twig\Template
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
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", []), "layout", []), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) ? $context["form"] : null), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "entity"], "method"));
        // line 4
        $context["__internal_fc23d78939f196977e3d4fbf8da0f53b4a0a2bfb9b198292c0700a6cbce32cbe"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", []);
        // line 5
        $context["_trans_parameters"] = ["%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []), [],         // line 4
(isset($context["__internal_fc23d78939f196977e3d4fbf8da0f53b4a0a2bfb9b198292c0700a6cbce32cbe"]) ? $context["__internal_fc23d78939f196977e3d4fbf8da0f53b4a0a2bfb9b198292c0700a6cbce32cbe"] : null)), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "label", []), [],         // line 4
(isset($context["__internal_fc23d78939f196977e3d4fbf8da0f53b4a0a2bfb9b198292c0700a6cbce32cbe"]) ? $context["__internal_fc23d78939f196977e3d4fbf8da0f53b4a0a2bfb9b198292c0700a6cbce32cbe"] : null))];
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body_id($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", [])), "html", null, true);
    }

    // line 10
    public function block_body_class($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", []))), "html", null, true);
    }

    // line 12
    public function block_content_title($context, array $blocks = [])
    {
        // line 13
        ob_start(function () { return ''; });
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", [], "any", false, true), "title", [], "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", []), "title", []), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null),         // line 4
(isset($context["__internal_fc23d78939f196977e3d4fbf8da0f53b4a0a2bfb9b198292c0700a6cbce32cbe"]) ? $context["__internal_fc23d78939f196977e3d4fbf8da0f53b4a0a2bfb9b198292c0700a6cbce32cbe"] : null))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : null))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
    }

    public function block_entity_form($context, array $blocks = [])
    {
        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
    ";
    }

    // line 25
    public function block_body_javascript($context, array $blocks = [])
    {
        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", [], "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            // prevent multiple form submissions to avoid creating duplicated entities
            var form = document.querySelector('form.new-form');
            form.addEventListener('submit', function() {
                // this timeout is needed to include the disabled button into the submitted form
                setTimeout(function() {
                    var submitButtons = form.querySelectorAll('[type=\"submit\"]');
                    submitButtons.forEach(function(button) {
                        button.setAttribute('disabled', 'disabled');
                    });
                }, 1);
            }, false);
        });
    </script>

    ";
        // line 48
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 48,  113 => 30,  105 => 26,  102 => 25,  95 => 21,  88 => 20,  85 => 19,  78 => 15,  77 => 4,  75 => 15,  72 => 14,  70 => 13,  67 => 12,  61 => 10,  55 => 9,  51 => 7,  49 => 4,  48 => 5,  47 => 4,  46 => 5,  44 => 4,  42 => 3,  40 => 1,  34 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/new.html.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\new.html.twig");
    }
}
