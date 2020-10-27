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

/* index1.html.twig */
class __TwigTemplate_1f2f53fe58bcd8a66b72dc185227b9338a52ceaf5db92392418aef9f8aad5069 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>Login V1</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!--===============================================================================================-->\t
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/favicon.ico"), "html", null, true);
        echo "\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/animate/animate.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/util.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
<!--===============================================================================================-->
</head>
<body>
\t
\t<div class=\"limiter\">
\t\t<div class=\"container-login100\">
\t\t\t<div class=\"wrap-login100\">
\t\t\t\t<div class=\"login100-pic js-tilt\" data-tilt>
\t\t\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/kk.png"), "html", null, true);
        echo "\" alt=\"IMG\">
\t\t\t\t</div>

\t\t\t\t<form class=\"login100-form validate-form\">
\t\t\t\t\t<span class=\"login100-form-title\">
\t\t\t\t\t\tMember Login
\t\t\t\t\t</span>
\t\t\t\t\t
\t\t\t\t\t

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
\t\t\t\t\t\t<input class=\"input100\" type=\"text\" name=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Password is required\">
\t\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"pass\" placeholder=\"Password\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"container-login100-form-btn\">
\t\t\t\t\t
\t\t\t\t\t\t<button class=\"login100-form-btn\">
\t\t\t\t\t\t
\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t

\t\t\t\t\t<div class=\"text-center p-t-136\">
\t\t\t\t\t\t<a class=\"txt2\" href=\"\">
\t\t\t\t\t\t\tCreate your Account
\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right m-l-5\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t

\t
<!--===============================================================================================-->\t
\t<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/tilt/tilt.jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script >
\t\t\$('.js-tilt').tilt({
\t\t\tscale: 1.1
\t\t})
\t</script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 95,  158 => 88,  153 => 86,  148 => 84,  144 => 83,  139 => 81,  85 => 30,  73 => 21,  69 => 20,  64 => 18,  59 => 16,  54 => 14,  49 => 12,  44 => 10,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index1.html.twig", "C:\\wamp64\\www\\piDevEvents\\app\\Resources\\views\\index1.html.twig");
    }
}
