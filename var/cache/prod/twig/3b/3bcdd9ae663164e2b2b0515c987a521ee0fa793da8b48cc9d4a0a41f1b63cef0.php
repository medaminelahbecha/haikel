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

/* @Twig/images/icon-support.svg */
class __TwigTemplate_c1d0b65ae1f4aeb42b7cb8e9326628e208f55dfd196007c3ac94856a7d5d6121 extends \Twig\Template
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
        echo "<svg width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path fill=\"#FFF\" d=\"M896 0q182 0 348 71t286 191 191 286 71 348-71 348-191 286-286 191-348 71-348-71-286-191-191-286T0 896t71-348 191-286T548 71 896 0zm0 128q-190 0-361 90l194 194q82-28 167-28t167 28l194-194q-171-90-361-90zM218 1257l194-194q-28-82-28-167t28-167L218 535q-90 171-90 361t90 361zm678 407q190 0 361-90l-194-194q-82 28-167 28t-167-28l-194 194q171 90 361 90zm0-384q159 0 271.5-112.5T1280 896t-112.5-271.5T896 512 624.5 624.5 512 896t112.5 271.5T896 1280zm484-217l194 194q90-171 90-361t-90-361l-194 194q28 82 28 167t-28 167z\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "@Twig/images/icon-support.svg";
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
        return new Source("", "@Twig/images/icon-support.svg", "C:\\wamp64\\www\\piDevEvents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\images\\icon-support.svg");
    }
}
