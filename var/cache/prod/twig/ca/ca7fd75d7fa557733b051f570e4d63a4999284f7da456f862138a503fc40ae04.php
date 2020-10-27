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

/* @EasyAdmin/default/field_image.html.twig */
class __TwigTemplate_6a7e82d8ab1ba60b1f662775341fb84572a211bf6e9488cca09cdddef8ca54af extends \Twig\Template
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
        if ((twig_test_empty((isset($context["value"]) ? $context["value"] : null)) || ((isset($context["value"]) ? $context["value"] : null) == (twig_trim_filter((($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : null), "base_path", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : null), "base_path", []), "")) : ("")), "/", "right") . "/")))) {
            // line 3
            echo "    ";
            echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "templates", []), "label_empty", []));
            echo "
";
        } else {
            // line 5
            echo "    <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
            echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : null), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
        <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) ? $context["value"] : null)), "html", null, true);
            echo "\">
    </a>

    <div id=\"easyadmin-lightbox-";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : null), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
        <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) ? $context["value"] : null)), "html", null, true);
            echo "\">
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  49 => 9,  43 => 6,  38 => 5,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/field_image.html.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_image.html.twig");
    }
}
