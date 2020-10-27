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

/* @EasyAdmin/default/field_percent.html.twig */
class __TwigTemplate_0f18b279e85062ed4c758570d095a1b5e7d890bd6f47cdd9402a336c068572b6 extends \Twig\Template
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
        $context["type"] = (($this->getAttribute($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : null), "type_options", [], "any", false, true), "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : null), "type_options", [], "any", false, true), "type", []), "fractional")) : ("fractional"));
        // line 2
        $context["scale"] = (($this->getAttribute($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : null), "type_options", [], "any", false, true), "scale", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : null), "type_options", [], "any", false, true), "scale", []), 0)) : (0));
        // line 3
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((((isset($context["type"]) ? $context["type"] : null) == "fractional")) ? (((isset($context["value"]) ? $context["value"] : null) * 100)) : ((isset($context["value"]) ? $context["value"] : null))), (isset($context["scale"]) ? $context["scale"] : null)), "html", null, true);
        echo "%
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/field_percent.html.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_percent.html.twig");
    }
}
