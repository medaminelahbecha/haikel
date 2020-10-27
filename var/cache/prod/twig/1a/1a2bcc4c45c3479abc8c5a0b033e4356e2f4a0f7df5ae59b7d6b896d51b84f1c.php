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

/* @Bibliotheque/Default/index.html.twig */
class __TwigTemplate_6c234235dbb1cd37f348062799e19a37ac96c803609e002fde9e03577273f8a3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'events' => [$this, 'block_events'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("index3.html.twig", "@Bibliotheque/Default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_events($context, array $blocks = [])
    {
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Bibliotheque/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Bibliotheque/Default/index.html.twig", "C:\\wamp64\\www\\piDevEvents\\src\\BibliothequeBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
