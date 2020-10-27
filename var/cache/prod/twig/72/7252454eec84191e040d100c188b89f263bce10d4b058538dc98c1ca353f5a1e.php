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

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_d266674aa690ae220f1a8641fef680ceb2383cb22f738d6610ffc8f2beed0bde extends \Twig\Template
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
        echo "<time datetime=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "c"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "r"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : null), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : null), "format", [])), "html", null, true);
        echo "</time>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Source("", "@EasyAdmin/default/field_date.html.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_date.html.twig");
    }
}
