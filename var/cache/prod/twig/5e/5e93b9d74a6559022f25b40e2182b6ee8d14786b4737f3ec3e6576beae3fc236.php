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

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_88acae66b4fc605e8876c6f162ac172be1bab2f5db37626851aa871a4879f5ec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'subject' => [$this, 'block_subject'],
            'body_text' => [$this, 'block_body_text'],
            'body_html' => [$this, 'block_body_html'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = [])
    {
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", ["%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", []), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null)], "FOSUserBundle");
    }

    // line 8
    public function block_body_text($context, array $blocks = [])
    {
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", ["%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", []), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null)], "FOSUserBundle");
        echo "
";
    }

    // line 13
    public function block_body_html($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  54 => 10,  51 => 8,  47 => 4,  44 => 2,  40 => 13,  38 => 8,  35 => 7,  33 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
