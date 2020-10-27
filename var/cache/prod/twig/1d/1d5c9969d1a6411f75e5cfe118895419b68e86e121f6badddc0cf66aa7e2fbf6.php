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

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_45597bede25833353c4fb959d156da17fa27f7c2949705b6c1385114c378055a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'collection_row' => [$this, 'block_collection_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'easyadmin_rest' => [$this, 'block_easyadmin_rest'],
                'item_actions' => [$this, 'block_item_actions'],
                'easyadmin_widget' => [$this, 'block_easyadmin_widget'],
                'easyadmin_widget_groups' => [$this, 'block_easyadmin_widget_groups'],
                'easyadmin_autocomplete_widget' => [$this, 'block_easyadmin_autocomplete_widget'],
                'easyadmin_autocomplete_inner_label' => [$this, 'block_easyadmin_autocomplete_inner_label'],
                'easyadmin_divider_row' => [$this, 'block_easyadmin_divider_row'],
                'easyadmin_section_row' => [$this, 'block_easyadmin_section_row'],
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
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('button_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('money_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('date_widget', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('time_widget', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 175
        echo "
";
        // line 176
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 208
        echo "
";
        // line 209
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 219
        echo "
";
        // line 221
        echo "
";
        // line 222
        $this->displayBlock('form_label', $context, $blocks);
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('choice_label', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('radio_label', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 259
        echo "
";
        // line 261
        echo "
";
        // line 262
        $this->displayBlock('form_row', $context, $blocks);
        // line 284
        echo "
";
        // line 285
        $this->displayBlock('collection_row', $context, $blocks);
        // line 320
        echo "
";
        // line 321
        $this->displayBlock('button_row', $context, $blocks);
        // line 326
        echo "
";
        // line 327
        $this->displayBlock('choice_row', $context, $blocks);
        // line 331
        echo "
";
        // line 332
        $this->displayBlock('date_row', $context, $blocks);
        // line 336
        echo "
";
        // line 337
        $this->displayBlock('time_row', $context, $blocks);
        // line 341
        echo "
";
        // line 342
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 353
        echo "
";
        // line 354
        $this->displayBlock('radio_row', $context, $blocks);
        // line 360
        echo "
";
        // line 362
        $this->displayBlock('form_errors', $context, $blocks);
        // line 380
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 393
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 398
        echo "
";
        // line 399
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 403
        echo "
";
        // line 404
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 425
        echo "
";
        // line 426
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 430
        echo "
";
        // line 431
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 459
        echo "
";
        // line 460
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 472
        echo "
";
        // line 473
        $this->displayBlock('item_actions', $context, $blocks);
        // line 500
        echo "
";
        // line 502
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 541
        echo "
";
        // line 542
        $this->displayBlock('easyadmin_widget_groups', $context, $blocks);
        // line 588
        echo "
";
        // line 590
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 600
        echo "
";
        // line 601
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 605
        echo "
";
        // line 607
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 612
        echo "
";
        // line 614
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
    }

    // line 3
    public function block_form_start($context, array $blocks = [])
    {
        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_join_filter([0 => (((((            // line 7
(isset($context["_easyadmin_form_type"]) || array_key_exists("_easyadmin_form_type", $context))) ? (_twig_default_filter((isset($context["_easyadmin_form_type"]) ? $context["_easyadmin_form_type"] : null), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
(isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")), 2 => ($this->getAttribute(            // line 9
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "view", []) . "-form")], " "), "data-view" => $this->getAttribute(            // line 11
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "view", []), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "name", []), "data-entity-id" => $this->getAttribute(            // line 13
(isset($context["value"]) ? $context["value"] : null), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "primary_key_field_name", []))]);
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", []), "errors", [])) > 0)) {
            // line 18
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
    ";
        }
        // line 21
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 23
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "referer", 1 => ""], "method"), "html", null, true);
        echo "\"/>";
    }

    // line 28
    public function block_form_widget($context, array $blocks = [])
    {
        // line 29
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 31
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", [], "any", false, true), "vars", [], "any", false, true), "allow_delete", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", [], "any", false, true), "vars", [], "any", false, true), "allow_delete", []), false)) : (false))) {
            // line 32
            echo "        ";
            ob_start(function () { return ''; });
            // line 33
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            var hasCountAttr = parentDiv.data('count');

            if (hasCountAttr === undefined) {
                var numItems = parentDiv.children('div.form-group').length;
                parentDiv.data('count', ++numItems)
            }

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 53
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 55
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : null);
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 63
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 64
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter((isset($context["type"]) ? $context["type"] : null), [0 => "file", 1 => "hidden"]))) {
            // line 65
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control"))]);
        }
        // line 67
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 70
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 71
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control"))]);
        // line 72
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 75
    public function block_button_widget($context, array $blocks = [])
    {
        // line 76
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 77
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 80
    public function block_money_widget($context, array $blocks = [])
    {
        // line 81
        echo "<div class=\"input-group\">
        ";
        // line 82
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : null), 0, 2));
        // line 83
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : null)) {
            // line 84
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
        ";
        }
        // line 86
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 87
        if ((isset($context["prepend"]) ? $context["prepend"] : null)) {
            // line 88
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
        ";
        }
        // line 90
        echo "    </div>";
    }

    // line 93
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 94
        echo "<div class=\"input-group\">";
        // line 95
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 96
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
    }

    // line 100
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 101
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 102
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 104
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 105
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", []), 'errors');
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", []), 'errors');
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", []), 'widget', ["datetime" => true]);
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", []), 'widget', ["datetime" => true]);
            // line 110
            echo "</div>";
        }
    }

    // line 114
    public function block_date_widget($context, array $blocks = [])
    {
        // line 115
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 116
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 118
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 119
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !(isset($context["datetime"]) ? $context["datetime"] : null))) {
                // line 120
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 122
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : null), ["{{ year }}" =>             // line 123
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", []), 'widget'), "{{ month }}" =>             // line 124
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", []), 'widget'), "{{ day }}" =>             // line 125
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", []), 'widget')]);
            // line 127
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !(isset($context["datetime"]) ? $context["datetime"] : null))) {
                // line 128
                echo "</div>";
            }
        }
    }

    // line 133
    public function block_time_widget($context, array $blocks = [])
    {
        // line 134
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 138
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == (isset($context["datetime"]) ? $context["datetime"] : null)))) {
                // line 139
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 141
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", []), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", []), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", []), 'widget');
            }
            // line 142
            echo "        ";
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == (isset($context["datetime"]) ? $context["datetime"] : null)))) {
                // line 143
                echo "</div>";
            }
        }
    }

    // line 148
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 149
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control"))]);
        // line 150
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 151
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", [], "any", false, true), "vars", [], "any", false, true), "allow_delete", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", [], "any", false, true), "vars", [], "any", false, true), "allow_delete", []), false)) : (false))) {
            // line 152
            echo "        ";
            ob_start(function () { return ''; });
            // line 153
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 156
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 166
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 168
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : null);
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 176
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 177
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")))) {
            // line 178
            echo "<div class=\"control-group\">";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 180
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 181
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")), "translation_domain" =>                 // line 182
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "</div>";
        } else {
            // line 187
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 189
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 190
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")), "translation_domain" =>                 // line 191
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "</div>";
        }
    }

    // line 198
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 199
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : null), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : (""))));
        // line 200
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) {
            // line 201
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 203
            echo "<div class=\"checkbox\">";
            // line 204
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 205
            echo "</div>";
        }
    }

    // line 209
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 210
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : null), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : (""))));
        // line 211
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) {
            // line 212
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 214
            echo "<div class=\"radio\">";
            // line 215
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 216
            echo "</div>";
        }
    }

    // line 222
    public function block_form_label($context, array $blocks = [])
    {
        // line 223
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " control-label"))]);
        // line 224
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 227
    public function block_choice_label($context, array $blocks = [])
    {
        // line 229
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 233
    public function block_checkbox_label($context, array $blocks = [])
    {
        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 237
    public function block_radio_label($context, array $blocks = [])
    {
        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        // line 242
        echo "    ";
        // line 243
        echo "    ";
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 244
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 245
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " required"))]);
                // line 246
                echo "        ";
            }
            // line 247
            echo "        ";
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 248
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null)))]);
                // line 249
                echo "        ";
            }
            // line 250
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : null) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : null)))) {
                // line 251
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 252
                echo "        ";
            }
            // line 253
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 254
            echo (isset($context["widget"]) ? $context["widget"] : null);
            // line 255
            (( !((isset($context["label"]) ? $context["label"] : null) === false)) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), [], (((isset($context["translation_domain"]) ? $context["translation_domain"] : null)) ? ((isset($context["translation_domain"]) ? $context["translation_domain"] : null)) : ($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "translation_domain", [])))), "html", null, true))) : (print ("")));
            // line 256
            echo "</label>
    ";
        }
    }

    // line 262
    public function block_form_row($context, array $blocks = [])
    {
        // line 263
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "fieldType", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "fieldType", []), "default")) : ("default"));
        // line 264
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : null), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : null))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)), "html", null, true);
        echo "\">";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 268
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : null), [0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "dateinterval", 5 => "time", 6 => "time_immutable", 7 => "birthday"]) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "nullable", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "nullable", []), false)) : (false)))) {
            // line 269
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 271
            if ((null === (isset($context["data"]) ? $context["data"] : null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 272
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", [], "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 277
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 279
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "help", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "help", []), "")) : ("")) != "")) {
            // line 280
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", []), "help", []), [], $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "translation_domain", []));
            echo "</span>
        ";
        }
        // line 282
        echo "    </div>";
    }

    // line 285
    public function block_collection_row($context, array $blocks = [])
    {
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 288
        if ((((isset($context["allow_add"]) || array_key_exists("allow_add", $context))) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : null), false)) : (false))) {
            // line 289
            echo "        ";
            ob_start(function () { return ''; });
            // line 290
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 293
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>";
            // line 300
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : null), "vars", []), "name", []), "html", null, true);
            echo "label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : null), "vars", []), "name", []), "html", null, true);
            echo "/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 302
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\\]\\[";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : null), "vars", []), "name", []), "html", null, true);
            echo "\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 311
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 313
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : null);
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 315
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : null)) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), [], "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 321
    public function block_button_row($context, array $blocks = [])
    {
        // line 322
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "css_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "css_class", []), "")) : ("")), "html", null, true);
        echo "\">";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 324
        echo "</div>";
    }

    // line 327
    public function block_choice_row($context, array $blocks = [])
    {
        // line 328
        $context["force_error"] = true;
        // line 329
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 332
    public function block_date_row($context, array $blocks = [])
    {
        // line 333
        $context["force_error"] = true;
        // line 334
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 337
    public function block_time_row($context, array $blocks = [])
    {
        // line 338
        $context["force_error"] = true;
        // line 339
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 342
    public function block_datetime_row($context, array $blocks = [])
    {
        // line 343
        $context["force_error"] = true;
        // line 344
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 347
    public function block_checkbox_row($context, array $blocks = [])
    {
        // line 348
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : null)) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)), "html", null, true);
        echo "\">";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 350
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 351
        echo "</div>";
    }

    // line 354
    public function block_radio_row($context, array $blocks = [])
    {
        // line 355
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : null)) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)), "html", null, true);
        echo "\">";
        // line 356
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 357
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 358
        echo "</div>";
    }

    // line 362
    public function block_form_errors($context, array $blocks = [])
    {
        // line 363
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null));
        // line 364
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : null) >= 1)) {
            // line 365
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 366
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : null), [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 367
            if (((isset($context["error_count"]) ? $context["error_count"] : null) == 1)) {
                // line 368
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : null)), "message", []), "html", null, true);
                echo "
            ";
            } else {
                // line 370
                echo "                <ul>
                    ";
                // line 371
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 372
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 374
                echo "                </ul>
            ";
            }
            // line 376
            echo "        </div>
    ";
        }
    }

    // line 380
    public function block_form_widget_compound($context, array $blocks = [])
    {
        // line 383
        echo "    ";
        if ((twig_test_iterable((isset($context["value"]) ? $context["value"] : null)) && twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            // line 384
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 386
        echo "    ";
        if (((twig_test_iterable((isset($context["value"]) ? $context["value"] : null)) && twig_test_empty((isset($context["value"]) ? $context["value"] : null))) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", [], "any", false, true), "prototype", [], "any", true, true))) {
            // line 387
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)]);
            // line 388
            echo "    ";
        }
        // line 389
        echo "
    ";
        // line 390
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
    }

    // line 393
    public function block_empty_collection($context, array $blocks = [])
    {
        // line 394
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 395
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "templates", []), "label_empty", []));
        echo "
    </div>
";
    }

    // line 399
    public function block_vich_file_row($context, array $blocks = [])
    {
        // line 400
        echo "    ";
        $context["force_error"] = true;
        // line 401
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 404
    public function block_vich_file_widget($context, array $blocks = [])
    {
        // line 405
        ob_start(function () { return ''; });
        // line 406
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 407
        if ( !twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : null), "")) : ("")))) {
            // line 408
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : null), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", [], "VichUploaderBundle")));
            // line 409
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) ? $context["download_title"] : null), "html", null, true);
            echo "</a>
        ";
        }
        // line 411
        echo "
        <div class=\"row\">
            ";
        // line 413
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", [], "any", true, true)) {
            // line 414
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 415
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", []), 'row', ["label" => "form.label.delete"]);
            echo "
            </div>
            ";
        }
        // line 418
        echo "            <div class=\"";
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", [], "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 419
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", []), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 426
    public function block_vich_image_row($context, array $blocks = [])
    {
        // line 427
        echo "    ";
        $context["force_error"] = true;
        // line 428
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 431
    public function block_vich_image_widget($context, array $blocks = [])
    {
        // line 432
        ob_start(function () { return ''; });
        // line 433
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 434
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", []), 'widget');
        echo "
        ";
        // line 435
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", [], "any", true, true)) {
            // line 436
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", []), 'row', ["label" => "form.label.delete"]);
            echo "
        ";
        }
        // line 438
        echo "
        ";
        // line 439
        if ( !twig_test_empty((((isset($context["image_uri"]) || array_key_exists("image_uri", $context))) ? (_twig_default_filter((isset($context["image_uri"]) ? $context["image_uri"] : null), "")) : ("")))) {
            // line 440
            echo "            ";
            if (twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : null), "")) : ("")))) {
                // line 441
                echo "                <div class=\"easyadmin-thumbnail\">
                    <img style=\"cursor: initial\" src=\"";
                // line 442
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["image_uri"]) ? $context["image_uri"] : null)), "html", null, true);
                echo "\">
                </div>
            ";
            } else {
                // line 445
                echo "                ";
                $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) ? $context["id"] : null));
                // line 446
                echo "
                <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
                // line 447
                echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : null), "html", null, true);
                echo "\" data-featherlight-close-on-click=\"anywhere\">
                    <img src=\"";
                // line 448
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : null)), "html", null, true);
                echo "\">
                </a>

                <div id=\"";
                // line 451
                echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : null), "html", null, true);
                echo "\" class=\"easyadmin-lightbox\">
                    <img src=\"";
                // line 452
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : null)), "html", null, true);
                echo "\">
                </div>
            ";
            }
            // line 455
            echo "        ";
        }
        // line 456
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 460
    public function block_easyadmin_rest($context, array $blocks = [])
    {
        // line 461
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        // line 462
        echo "<div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">";
        // line 466
        $this->displayBlock("item_actions", $context, $blocks);
        // line 467
        echo "</div>
            </div>
        </div>
    </div>
";
    }

    // line 473
    public function block_item_actions($context, array $blocks = [])
    {
        // line 474
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "translation_domain", []);
        // line 475
        echo "    ";
        $context["_trans_parameters"] = ["%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "name", [])), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "label", []))];
        // line 476
        echo "
    ";
        // line 478
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> ";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : null)), "html", null, true);
        echo "
    </button>

    ";
        // line 482
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "view", []) == "new")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 483
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "name", []))) : ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 484
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "name", []))));
        // line 485
        echo "
    ";
        // line 486
        $context["_entity_id"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "view", []) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 488
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "item", []), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "primary_key_field_name", []))));
        // line 489
        echo "
    ";
        // line 490
        $context["_request_parameters"] = ["entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "name", []), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "referer"], "method")];
        // line 491
        echo "
    ";
        // line 492
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", ["actions" =>         // line 493
(isset($context["_entity_actions"]) ? $context["_entity_actions"] : null), "request_parameters" =>         // line 494
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), "translation_domain" =>         // line 495
(isset($context["_translation_domain"]) ? $context["_translation_domain"] : null), "trans_parameters" =>         // line 496
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "item_id" =>         // line 497
(isset($context["_entity_id"]) ? $context["_entity_id"] : null)], false);
        // line 498
        echo "
";
    }

    // line 502
    public function block_easyadmin_widget($context, array $blocks = [])
    {
        // line 503
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "translation_domain", []);
        // line 504
        echo "    <div class=\"row\">
        ";
        // line 505
        if ((twig_length_filter($this->env, (isset($context["easyadmin_form_tabs"]) ? $context["easyadmin_form_tabs"] : null)) > 0)) {
            // line 506
            echo "            <div class=\"col-xs-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs\">
                        ";
            // line 509
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_tabs"]) ? $context["easyadmin_form_tabs"] : null));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 510
                echo "                            <li class=\"";
                if ($this->getAttribute($context["tab_config"], "active", [])) {
                    echo "active";
                }
                echo "\">
                                <a href=\"#";
                // line 511
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", [], "array"), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", [], "array"), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">
                                    ";
                // line 512
                if ((($this->getAttribute($context["tab_config"], "icon", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab_config"], "icon", []), false)) : (false))) {
                    // line 513
                    echo "                                        <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "icon", []), "html", null, true);
                    echo "\"></i>
                                    ";
                }
                // line 515
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tab_config"], "label", [], "array"), [], (isset($context["_translation_domain"]) ? $context["_translation_domain"] : null)), "html", null, true);
                echo "
                                    ";
                // line 516
                if (($this->getAttribute($context["tab_config"], "errors", []) > 0)) {
                    // line 517
                    echo "                                        <span class=\"label label-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("form.tab.error_badge_title", $this->getAttribute($context["tab_config"], "errors", []), [], "EasyAdminBundle"), "html", null, true);
                    echo "\">
                                            ";
                    // line 518
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "errors", []), "html", null, true);
                    echo "
                                        </span>
                                    ";
                }
                // line 521
                echo "                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 524
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 526
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_tabs"]) ? $context["easyadmin_form_tabs"] : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 527
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", [], "array"), "html", null, true);
                echo "\" class=\"tab-pane ";
                if ($this->getAttribute($context["tab_config"], "active", [])) {
                    echo "active";
                }
                echo "\">
                                <div class=\"row\">
                                    ";
                // line 529
                $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 533
            echo "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 537
            echo "            ";
            $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
            echo "
        ";
        }
        // line 539
        echo "    </div>
";
    }

    // line 542
    public function block_easyadmin_widget_groups($context, array $blocks = [])
    {
        // line 543
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_groups"]) ? $context["easyadmin_form_groups"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            if (( !$this->getAttribute($context["group_config"], "form_tab", []) || ($this->getAttribute($context["group_config"], "form_tab", []) == (isset($context["tab_name"]) ? $context["tab_name"] : null)))) {
                // line 544
                echo "        <div class=\"field-group col-xs-12 ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", []), "")) : ("")), "html", null, true);
                echo "\">
            <div class=\"box box-default\">
                ";
                // line 546
                if ((((($this->getAttribute($context["group_config"], "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", []), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", []), false)) : (false))) || (($this->getAttribute($context["group_config"], "collapsible", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "collapsible", []), false)) : (false)))) {
                    // line 547
                    echo "                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            ";
                    // line 549
                    if ((($this->getAttribute($context["group_config"], "icon", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", []), false)) : (false))) {
                        // line 550
                        echo "                                <i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", []), "html", null, true);
                        echo "\"></i>
                            ";
                    }
                    // line 552
                    echo "                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", []), [], (isset($context["_translation_domain"]) ? $context["_translation_domain"] : null));
                    echo "
                        </h3>
                        ";
                    // line 554
                    if ((($this->getAttribute($context["group_config"], "collapsible", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "collapsible", []), false)) : (false))) {
                        // line 555
                        echo "                            <a class=\"pull-right\" role=\"button\" data-toggle=\"collapse\" aria-expanded=\"";
                        echo (((($this->getAttribute($context["group_config"], "expanded", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "expanded", []), false)) : (false))) ? ("true") : ("false"));
                        echo "\" href=\"#box-body-";
                        echo twig_escape_filter($this->env, $context["group_name"], "html", null, true);
                        echo "\">
                                <i class=\"fa fa-plus-square-o\"></i>
                                <i class=\"fa fa-minus-square-o\"></i>
                            </a>
                        ";
                    }
                    // line 560
                    echo "                    </div>
                ";
                }
                // line 562
                echo "
                <div class=\"box-body ";
                // line 563
                if ((($this->getAttribute($context["group_config"], "collapsible", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "collapsible", []), false)) : (false))) {
                    echo "collapse ";
                    if ((($this->getAttribute($context["group_config"], "expanded", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "expanded", []), false)) : (false))) {
                        echo "in";
                    }
                }
                echo "\" id=\"box-body-";
                echo twig_escape_filter($this->env, $context["group_name"], "html", null, true);
                echo "\">
                    ";
                // line 564
                if ((($this->getAttribute($context["group_config"], "help", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", []), false)) : (false))) {
                    // line 565
                    echo "                        <p class=\"help-block\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", []), [], (isset($context["_translation_domain"]) ? $context["_translation_domain"] : null));
                    echo "</p>
                    ";
                }
                // line 567
                echo "
                    <div class=\"row\">
                        ";
                // line 569
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", []), "block_prefixes", [])) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", []), "easyadmin", []), "form_group", []) == $context["group_name"]))) {
                        // line 570
                        echo "                            ";
                        if (( !$this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", []), "easyadmin", []), "form_tab", []) || ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", []), "easyadmin", []), "form_tab", []) == (isset($context["tab_name"]) ? $context["tab_name"] : null)))) {
                            // line 571
                            echo "                                <div class=\"col-xs-12 ";
                            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", [], "any", false, true), "easyadmin", [], "any", false, true), "field", [], "any", false, true), "css_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", [], "any", false, true), "easyadmin", [], "any", false, true), "field", [], "any", false, true), "css_class", []), "")) : ("")), "html", null, true);
                            echo "\">
                                    ";
                            // line 572
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                            echo "
                                </div>
                            ";
                        }
                        // line 575
                        echo "                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 576
                echo "                    </div>
                </div>
            </div>
        </div>
    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 581
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", []), "block_prefixes", [])) && ( !$this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", []), "easyadmin", []), "form_tab", []) || ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", []), "easyadmin", []), "form_tab", []) == (isset($context["tab_name"]) ? $context["tab_name"] : null))))) {
                    // line 582
                    echo "            <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", [], "any", false, true), "easyadmin", [], "any", false, true), "field", [], "any", false, true), "css_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", [], "any", false, true), "easyadmin", [], "any", false, true), "field", [], "any", false, true), "css_class", []), "")) : ("")), "html", null, true);
                    echo "\">
                ";
                    // line 583
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 586
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 590
    public function block_easyadmin_autocomplete_widget($context, array $blocks = [])
    {
        // line 591
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "autocomplete", []), 'widget', ["attr" => twig_array_merge(        // line 592
(isset($context["attr"]) ? $context["attr"] : null), ["data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", ["action" => "autocomplete", "entity" =>         // line 595
(isset($context["autocomplete_entity_name"]) ? $context["autocomplete_entity_name"] : null)])])]);
        // line 598
        echo "
";
    }

    // line 601
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = [])
    {
        // line 602
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", []), "vars", []), "name", []);
        // line 603
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 607
    public function block_easyadmin_divider_row($context, array $blocks = [])
    {
        // line 608
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
    }

    // line 614
    public function block_easyadmin_section_row($context, array $blocks = [])
    {
        // line 615
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", []), "translation_domain", []);
        // line 616
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "css_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "css_class", []), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 617
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "label", []), false)) : (false)) || (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "icon", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "icon", []), false)) : (false)))) {
            // line 618
            echo "            <h2>
                ";
            // line 619
            if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "icon", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "icon", []), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", []), "icon", []), "html", null, true);
                echo "\"></i>";
            }
            // line 620
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "label", []), "")) : ("")), [], (isset($context["_translation_domain"]) ? $context["_translation_domain"] : null));
            echo "
            </h2>
        ";
        }
        // line 623
        echo "
        ";
        // line 624
        if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "help", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", [], "any", false, true), "help", []), false)) : (false))) {
            // line 625
            echo "            <p class=\"help-block\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", []), "help", []), [], (isset($context["_translation_domain"]) ? $context["_translation_domain"] : null));
            echo "</p>
        ";
        }
        // line 627
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1654 => 627,  1648 => 625,  1646 => 624,  1643 => 623,  1636 => 620,  1630 => 619,  1627 => 618,  1625 => 617,  1620 => 616,  1617 => 615,  1614 => 614,  1607 => 608,  1604 => 607,  1600 => 603,  1597 => 602,  1594 => 601,  1589 => 598,  1587 => 595,  1586 => 592,  1584 => 591,  1581 => 590,  1573 => 586,  1563 => 583,  1558 => 582,  1552 => 581,  1542 => 576,  1535 => 575,  1529 => 572,  1524 => 571,  1521 => 570,  1516 => 569,  1512 => 567,  1506 => 565,  1504 => 564,  1493 => 563,  1490 => 562,  1486 => 560,  1475 => 555,  1473 => 554,  1467 => 552,  1461 => 550,  1459 => 549,  1455 => 547,  1453 => 546,  1447 => 544,  1440 => 543,  1437 => 542,  1432 => 539,  1426 => 537,  1420 => 533,  1402 => 529,  1392 => 527,  1375 => 526,  1371 => 524,  1363 => 521,  1357 => 518,  1352 => 517,  1350 => 516,  1345 => 515,  1339 => 513,  1337 => 512,  1331 => 511,  1324 => 510,  1320 => 509,  1315 => 506,  1313 => 505,  1310 => 504,  1307 => 503,  1304 => 502,  1299 => 498,  1297 => 497,  1296 => 496,  1295 => 495,  1294 => 494,  1293 => 493,  1292 => 492,  1289 => 491,  1287 => 490,  1284 => 489,  1282 => 488,  1281 => 486,  1278 => 485,  1276 => 484,  1275 => 483,  1274 => 482,  1268 => 479,  1265 => 478,  1262 => 476,  1259 => 475,  1256 => 474,  1253 => 473,  1245 => 467,  1243 => 466,  1238 => 462,  1236 => 461,  1233 => 460,  1227 => 456,  1224 => 455,  1218 => 452,  1214 => 451,  1208 => 448,  1204 => 447,  1201 => 446,  1198 => 445,  1192 => 442,  1189 => 441,  1186 => 440,  1184 => 439,  1181 => 438,  1175 => 436,  1173 => 435,  1169 => 434,  1166 => 433,  1164 => 432,  1161 => 431,  1154 => 428,  1151 => 427,  1148 => 426,  1138 => 419,  1133 => 418,  1127 => 415,  1124 => 414,  1122 => 413,  1118 => 411,  1110 => 409,  1107 => 408,  1105 => 407,  1102 => 406,  1100 => 405,  1097 => 404,  1090 => 401,  1087 => 400,  1084 => 399,  1077 => 395,  1074 => 394,  1071 => 393,  1067 => 390,  1064 => 389,  1061 => 388,  1058 => 387,  1055 => 386,  1049 => 384,  1046 => 383,  1043 => 380,  1037 => 376,  1033 => 374,  1024 => 372,  1020 => 371,  1017 => 370,  1011 => 368,  1009 => 367,  1005 => 366,  1002 => 365,  999 => 364,  996 => 363,  993 => 362,  989 => 358,  987 => 357,  985 => 356,  977 => 355,  974 => 354,  970 => 351,  968 => 350,  966 => 349,  958 => 348,  955 => 347,  951 => 344,  949 => 343,  946 => 342,  942 => 339,  940 => 338,  937 => 337,  933 => 334,  931 => 333,  928 => 332,  924 => 329,  922 => 328,  919 => 327,  915 => 324,  913 => 323,  907 => 322,  904 => 321,  895 => 315,  890 => 313,  886 => 311,  870 => 302,  862 => 301,  858 => 300,  848 => 293,  843 => 290,  840 => 289,  838 => 288,  832 => 286,  829 => 285,  825 => 282,  819 => 280,  817 => 279,  815 => 277,  808 => 272,  802 => 271,  798 => 269,  796 => 268,  794 => 266,  792 => 265,  784 => 264,  782 => 263,  779 => 262,  773 => 256,  771 => 255,  769 => 254,  754 => 253,  751 => 252,  748 => 251,  745 => 250,  742 => 249,  739 => 248,  736 => 247,  733 => 246,  730 => 245,  727 => 244,  724 => 243,  722 => 242,  719 => 241,  715 => 238,  712 => 237,  708 => 234,  705 => 233,  701 => 230,  699 => 229,  696 => 227,  692 => 224,  690 => 223,  687 => 222,  682 => 216,  680 => 215,  678 => 214,  675 => 212,  673 => 211,  671 => 210,  668 => 209,  663 => 205,  661 => 204,  659 => 203,  656 => 201,  654 => 200,  652 => 199,  649 => 198,  644 => 194,  638 => 191,  637 => 190,  636 => 189,  632 => 188,  628 => 187,  625 => 185,  619 => 182,  618 => 181,  617 => 180,  613 => 179,  611 => 178,  609 => 177,  606 => 176,  597 => 170,  592 => 168,  588 => 166,  575 => 156,  570 => 153,  567 => 152,  565 => 151,  563 => 150,  561 => 149,  558 => 148,  552 => 143,  549 => 142,  541 => 141,  536 => 139,  534 => 138,  532 => 137,  529 => 135,  527 => 134,  524 => 133,  518 => 128,  516 => 127,  514 => 125,  513 => 124,  512 => 123,  511 => 122,  506 => 120,  504 => 119,  502 => 118,  499 => 116,  497 => 115,  494 => 114,  489 => 110,  487 => 109,  485 => 108,  483 => 107,  481 => 106,  477 => 105,  475 => 104,  472 => 102,  470 => 101,  467 => 100,  462 => 96,  460 => 95,  458 => 94,  455 => 93,  451 => 90,  445 => 88,  443 => 87,  441 => 86,  435 => 84,  432 => 83,  430 => 82,  427 => 81,  424 => 80,  420 => 77,  418 => 76,  415 => 75,  411 => 72,  409 => 71,  406 => 70,  402 => 67,  399 => 65,  397 => 64,  394 => 63,  385 => 57,  380 => 55,  376 => 53,  356 => 36,  351 => 33,  348 => 32,  346 => 31,  344 => 29,  341 => 28,  335 => 23,  333 => 21,  327 => 18,  325 => 17,  322 => 16,  319 => 15,  317 => 13,  316 => 12,  315 => 11,  314 => 9,  313 => 8,  312 => 7,  310 => 5,  308 => 4,  305 => 3,  301 => 614,  298 => 612,  296 => 607,  293 => 605,  291 => 601,  288 => 600,  286 => 590,  283 => 588,  281 => 542,  278 => 541,  276 => 502,  273 => 500,  271 => 473,  268 => 472,  266 => 460,  263 => 459,  261 => 431,  258 => 430,  256 => 426,  253 => 425,  251 => 404,  248 => 403,  246 => 399,  243 => 398,  241 => 393,  239 => 380,  237 => 362,  234 => 360,  232 => 354,  229 => 353,  227 => 347,  224 => 346,  222 => 342,  219 => 341,  217 => 337,  214 => 336,  212 => 332,  209 => 331,  207 => 327,  204 => 326,  202 => 321,  199 => 320,  197 => 285,  194 => 284,  192 => 262,  189 => 261,  186 => 259,  184 => 241,  181 => 240,  179 => 237,  176 => 236,  174 => 233,  171 => 232,  169 => 227,  166 => 226,  164 => 222,  161 => 221,  158 => 219,  156 => 209,  153 => 208,  151 => 198,  148 => 197,  146 => 176,  143 => 175,  141 => 148,  138 => 147,  136 => 133,  133 => 132,  131 => 114,  128 => 113,  126 => 100,  123 => 99,  121 => 93,  118 => 92,  116 => 80,  113 => 79,  111 => 75,  108 => 74,  106 => 70,  103 => 69,  101 => 63,  98 => 62,  96 => 28,  93 => 27,  90 => 25,  88 => 3,  85 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\form\\bootstrap_3_layout.html.twig");
    }
}
