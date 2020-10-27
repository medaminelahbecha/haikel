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

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_a0dc67461d6585d1df9a7815a95fcdb186ca52226b43bcf01b6f764d081cb1d6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.', 1, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'checkbox_radio_row' => [$this, 'block_checkbox_radio_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'reset_row' => [$this, 'block_reset_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('radio_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('submit_row', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('reset_row', $context, $blocks);
        // line 97
        echo "
";
        // line 98
        $this->displayBlock('form_group_class', $context, $blocks);
    }

    // line 3
    public function block_form_start($context, array $blocks = [])
    {
        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 10
    public function block_form_label($context, array $blocks = [])
    {
        // line 11
        ob_start(function () { return ''; });
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))]);
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_form_label_class($context, array $blocks = [])
    {
        echo "col-sm-2";
    }

    // line 25
    public function block_form_row($context, array $blocks = [])
    {
        // line 26
        ob_start(function () { return ''; });
        // line 27
        echo "    ";
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "fieldType", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "fieldType", []), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : null), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : null))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
        <div class=\"";
        // line 30
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

            ";
        // line 33
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : null), [0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "dateinterval", 5 => "time", 6 => "time_immutable", 7 => "birthday"]) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "nullable", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "nullable", []), false)) : (false)))) {
            // line 34
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 36
            if ((null === (isset($context["data"]) ? $context["data"] : null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", [], "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

            ";
        // line 44
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "help", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "help", []), "")) : ("")) != "")) {
            // line 45
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", []), "help", []), [], $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "translation_domain", []));
            echo "</span>
            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 52
    public function block_checkbox_row($context, array $blocks = [])
    {
        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
    }

    // line 56
    public function block_radio_row($context, array $blocks = [])
    {
        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = [])
    {
        // line 61
        ob_start(function () { return ''; });
        // line 62
        echo "    <div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : null)) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 63
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 64
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            
            ";
        // line 68
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "help", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "help", []), "")) : ("")) != "")) {
            // line 69
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", []), "help", []), [], $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "translation_domain", []));
            echo "</span>
            ";
        }
        // line 71
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 76
    public function block_submit_row($context, array $blocks = [])
    {
        // line 77
        ob_start(function () { return ''; });
        // line 78
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 79
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 80
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 87
    public function block_reset_row($context, array $blocks = [])
    {
        // line 88
        ob_start(function () { return ''; });
        // line 89
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 90
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 91
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 98
    public function block_form_group_class($context, array $blocks = [])
    {
        echo "col-sm-10";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  332 => 98,  323 => 92,  319 => 91,  315 => 90,  312 => 89,  310 => 88,  307 => 87,  298 => 81,  294 => 80,  290 => 79,  285 => 78,  283 => 77,  280 => 76,  273 => 71,  267 => 69,  265 => 68,  260 => 66,  256 => 65,  252 => 64,  248 => 63,  239 => 62,  237 => 61,  234 => 60,  230 => 57,  227 => 56,  223 => 53,  220 => 52,  213 => 47,  207 => 45,  205 => 44,  200 => 42,  197 => 41,  190 => 37,  184 => 36,  180 => 34,  178 => 33,  173 => 31,  169 => 30,  165 => 29,  156 => 28,  153 => 27,  151 => 26,  148 => 25,  142 => 21,  136 => 16,  133 => 15,  127 => 13,  124 => 12,  122 => 11,  119 => 10,  115 => 5,  113 => 4,  110 => 3,  106 => 98,  103 => 97,  101 => 87,  98 => 86,  96 => 76,  93 => 75,  91 => 60,  88 => 59,  86 => 56,  83 => 55,  81 => 52,  78 => 51,  76 => 25,  73 => 24,  70 => 22,  68 => 21,  65 => 20,  63 => 10,  60 => 9,  57 => 7,  55 => 3,  52 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
