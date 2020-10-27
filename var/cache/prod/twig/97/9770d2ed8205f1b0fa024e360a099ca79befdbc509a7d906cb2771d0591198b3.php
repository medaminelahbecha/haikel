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

/* @EasyAdmin/default/exception.html.twig */
class __TwigTemplate_4cf54822c3cdd7b21475000bed0bbd60206dbd9a0bc4b6a93b8956adee6ca6ac extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["layout_template_path"]) ? $context["layout_template_path"] : null), "@EasyAdmin/default/exception.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_class($context, array $blocks = [])
    {
        echo "error";
    }

    // line 4
    public function block_page_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, [], "EasyAdminBundle"), "html", null, true);
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        // line 7
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 9
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "publicMessage", []), $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "translationParameters", []), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  59 => 9,  55 => 7,  52 => 6,  46 => 4,  40 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/exception.html.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\exception.html.twig");
    }
}
