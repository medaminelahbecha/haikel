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

/* @EasyAdmin/default/includes/_actions.html.twig */
class __TwigTemplate_2eb15a9bdb50efb03494fc3acf5dcec5a7c6df0cbe5ac5b3d9fae643d5892b0f extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 2
            echo "    ";
            if (("list" == $this->getAttribute($context["action"], "name", []))) {
                // line 3
                echo "        ";
                $context["action_href"] = (((($this->getAttribute((isset($context["request_parameters"]) ? $context["request_parameters"] : null), "referer", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request_parameters"]) ? $context["request_parameters"] : null), "referer", []), "")) : (""))) ? (urldecode($this->getAttribute((isset($context["request_parameters"]) ? $context["request_parameters"] : null), "referer", []))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["request_parameters"]) ? $context["request_parameters"] : null), ["action" => "list"]))));
                // line 4
                echo "    ";
            } elseif (("method" == $this->getAttribute($context["action"], "type", []))) {
                // line 5
                echo "        ";
                $context["action_href"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["request_parameters"]) ? $context["request_parameters"] : null), ["action" => $this->getAttribute($context["action"], "name", []), "id" => (isset($context["item_id"]) ? $context["item_id"] : null)]));
                // line 6
                echo "    ";
            } elseif (("route" == $this->getAttribute($context["action"], "type", []))) {
                // line 7
                echo "        ";
                $context["action_href"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["action"], "name", []), twig_array_merge((isset($context["request_parameters"]) ? $context["request_parameters"] : null), ["action" => $this->getAttribute($context["action"], "name", []), "id" => (isset($context["item_id"]) ? $context["item_id"] : null)]));
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <a class=\"";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "css_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "css_class", []), "")) : ("")), "html", null, true);
            echo "\" title=\"";
            ((twig_test_empty((($this->getAttribute($context["action"], "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "title", []), "")) : ("")))) ? (print ("")) : (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["action"], "title", []), (isset($context["trans_parameters"]) ? $context["trans_parameters"] : null), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true))));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["action_href"]) ? $context["action_href"] : null), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "target", []), "html", null, true);
            echo "\">";
            // line 11
            if ($this->getAttribute($context["action"], "icon", [])) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", []), "html", null, true);
                echo "\"></i> ";
            }
            // line 12
            if (($this->getAttribute($context["action"], "label", [], "any", true, true) &&  !twig_test_empty($this->getAttribute($context["action"], "label", [])))) {
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["action"], "label", []), twig_array_merge((isset($context["trans_parameters"]) ? $context["trans_parameters"] : null), ["%entity_id%" => (isset($context["item_id"]) ? $context["item_id"] : null)]), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            }
            // line 15
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/includes/_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 15,  75 => 13,  73 => 12,  67 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  46 => 6,  43 => 5,  40 => 4,  37 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/includes/_actions.html.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\includes\\_actions.html.twig");
    }
}
