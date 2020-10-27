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

/* @EasyAdmin/default/includes/_select2_widget.html.twig */
class __TwigTemplate_2eee0a85b04541220098858ee89147fb0cf11e24c0e3f0d4824137fc9f3e8fb9 extends \Twig\Template
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
        $context["_select2_locales"] = [0 => "ar", 1 => "az", 2 => "bg", 3 => "ca", 4 => "cs", 5 => "da", 6 => "de", 7 => "el", 8 => "en", 9 => "es", 10 => "et", 11 => "eu", 12 => "fa", 13 => "fi", 14 => "fr", 15 => "gl", 16 => "he", 17 => "hi", 18 => "hr", 19 => "hu", 20 => "id", 21 => "is", 22 => "it", 23 => "ja", 24 => "km", 25 => "ko", 26 => "lt", 27 => "lv", 28 => "mk", 29 => "ms", 30 => "nb", 31 => "nl", 32 => "pl", 33 => "pt-BR", 34 => "pt", 35 => "ro", 36 => "ru", 37 => "sk", 38 => "sr-Cyrl", 39 => "sr", 40 => "sv", 41 => "th", 42 => "tr", 43 => "uk", 44 => "vi", 45 => "zh-CN", 46 => "zh-TW"];
        // line 2
        $context["_app_language"] = twig_first($this->env, twig_split_filter($this->env, twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "locale", []), "-")), "_"));
        // line 3
        $context["_select2_locale"] = ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "locale", []), (isset($context["_select2_locales"]) ? $context["_select2_locales"] : null))) ? ($this->getAttribute($this->getAttribute(        // line 4
(isset($context["app"]) ? $context["app"] : null), "request", []), "locale", [])) : (((twig_in_filter(        // line 5
(isset($context["_app_language"]) ? $context["_app_language"] : null), (isset($context["_select2_locales"]) ? $context["_select2_locales"] : null))) ? ((isset($context["_app_language"]) ? $context["_app_language"] : null)) : ("en"))));
        // line 7
        echo "
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/easyadmin/javascript/select2/i18n/" . (isset($context["_select2_locale"]) ? $context["_select2_locale"] : null)) . ".js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\$(function() {
    // Select2 widget is only enabled for the <select> elements which
    // explicitly ask for it
    \$('#main').find('form select[data-widget=\"select2\"]').select2({
        theme: 'bootstrap',
        language: '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["_select2_locale"]) ? $context["_select2_locale"] : null), "html", null, true);
        echo "'
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/includes/_select2_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  41 => 8,  38 => 7,  36 => 5,  35 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/includes/_select2_widget.html.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\includes\\_select2_widget.html.twig");
    }
}
