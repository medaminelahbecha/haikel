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

/* @EasyAdmin/data_collector/easyadmin.html.twig */
class __TwigTemplate_90ea6168e771cfd0a6dc482800e69ccdc5b7d2c2f57bda79d810026c6a6bc9b8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@EasyAdmin/data_collector/easyadmin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "isEasyAdminAction", [])) {
            // line 5
            echo "        ";
            $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null), 1)) : (1));
            // line 6
            echo "
        ";
            // line 7
            ob_start(function () { return ''; });
            // line 8
            echo "            ";
            $context["icon_fill_color"] = ((((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null) == 1)) ? ("#222") : ("#AAA"));
            // line 9
            echo "            ";
            $context["icon_height"] = ((((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null) == 1)) ? ("28") : ("24"));
            // line 10
            echo "            <span class=\"icon\">";
            echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", ["fill_color" => (isset($context["icon_fill_color"]) ? $context["icon_fill_color"] : null), "height" => (isset($context["icon_height"]) ? $context["icon_height"] : null)]);
            echo "</span>
            <span class=\"sf-toolbar-value sf-toolbar-status\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "numEntities", []), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start(function () { return ''; });
            // line 15
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>EasyAdmin version</b>
            <span class=\"sf-toolbar-status\">";
            // line 17
            echo twig_escape_filter($this->env, twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Managed entities</b>
            <span class=\"sf-toolbar-status\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "numEntities", []), "html", null, true);
            echo "</span>
        </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 24
            echo "
        ";
            // line 25
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
            echo "
    ";
        }
    }

    // line 29
    public function block_menu($context, array $blocks = [])
    {
        // line 30
        echo "    <span class=\"label ";
        echo (( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "isEasyAdminAction", [])) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 31
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", ["height" => 32]);
        echo "</span>
        <strong>EasyAdmin</strong>
    </span>
";
    }

    // line 36
    public function block_panel($context, array $blocks = [])
    {
        // line 37
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null), 1)) : (1));
        // line 38
        echo "
    <h2>EasyAdmin <small>(";
        // line 39
        echo twig_escape_filter($this->env, twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo ")</small></h2>

    ";
        // line 41
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "isEasyAdminAction", [])) {
            // line 42
            echo "
        <div class=\"empty\">
            <p>No information available because this route is not related to EasyAdmin.</p>
        </div>

    ";
        } else {
            // line 48
            echo "
        ";
            // line 49
            if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null) == 1)) {
                // line 50
                echo "
            <h3>Request Parameters</h3>
            ";
                // line 52
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", [])]);
                echo "

        ";
            } else {
                // line 55
                echo "
            ";
                // line 56
                if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", [])) {
                    // line 57
                    echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 59
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", [], "any", false, true), "action", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", [], "any", false, true), "action", []), "-")) : ("-")), "html", null, true);
                    echo "</span>
                    <span class=\"label\">Action</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 64
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", [], "any", false, true), "entity", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", [], "any", false, true), "entity", []), "-")) : ("-")), "html", null, true);
                    echo "</span>
                    <span class=\"label\">Entity Name</span>
                </div>

                ";
                    // line 68
                    if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", []), "id", [])) {
                        // line 69
                        echo "                    <div class=\"metric\">
                        <span class=\"value\">";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", []), "id", []), "html", null, true);
                        echo "</span>
                        <span class=\"label\">ID</span>
                    </div>
                ";
                    } elseif ($this->getAttribute($this->getAttribute(                    // line 73
(isset($context["collector"]) ? $context["collector"] : null), "requestParameters", []), "sort_field", [])) {
                        // line 74
                        echo "                    <div class=\"metric\">
                        <span class=\"value\">";
                        // line 75
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", []), "sort_field", []), "html", null, true);
                        echo " <span class=\"unit\">(";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", []), "sort_direction", []), "html", null, true);
                        echo ")</span></span>
                        <span class=\"label\">Sorting</span>
                    </div>
                ";
                    }
                    // line 79
                    echo "            </div>
            ";
                }
                // line 81
                echo "
        ";
            }
            // line 83
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Current Entity Configuration</h3>
                <div class=\"tab-content\">
                    ";
            // line 88
            echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "dump", [0 => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "currentEntityConfig", [])], "method");
            echo "
                </div>

                <br>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Full Backend Configuration</h3>
                <div class=\"tab-content\">

                    <h4>Basic Configuration</h4>
                    ";
            // line 99
            echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "dump", [0 => ["site_name" => $this->getAttribute($this->getAttribute(            // line 100
(isset($context["collector"]) ? $context["collector"] : null), "backendConfig", []), "site_name", [], "array"), "formats" => $this->getAttribute($this->getAttribute(            // line 101
(isset($context["collector"]) ? $context["collector"] : null), "backendConfig", []), "formats", [], "array")]], "method");
            // line 102
            echo "

                    <h4>Design Configuration</h4>
                    ";
            // line 105
            echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "dump", [0 => ["design" => $this->getAttribute($this->getAttribute(            // line 106
(isset($context["collector"]) ? $context["collector"] : null), "backendConfig", []), "design", [], "array")]], "method");
            // line 107
            echo "

                    <h4>Actions Configuration</h4>
                    ";
            // line 110
            echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "dump", [0 => ["disabled_actions" => $this->getAttribute($this->getAttribute(            // line 111
(isset($context["collector"]) ? $context["collector"] : null), "backendConfig", []), "disabled_actions", [], "array"), "list" => $this->getAttribute($this->getAttribute(            // line 112
(isset($context["collector"]) ? $context["collector"] : null), "backendConfig", []), "list", [], "array"), "edit" => $this->getAttribute($this->getAttribute(            // line 113
(isset($context["collector"]) ? $context["collector"] : null), "backendConfig", []), "edit", [], "array"), "new" => $this->getAttribute($this->getAttribute(            // line 114
(isset($context["collector"]) ? $context["collector"] : null), "backendConfig", []), "new", [], "array"), "show" => $this->getAttribute($this->getAttribute(            // line 115
(isset($context["collector"]) ? $context["collector"] : null), "backendConfig", []), "show", [], "array")]], "method");
            // line 116
            echo "

                    <h4>Entities Configuration</h4>
                    ";
            // line 119
            echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "dump", [0 => ["entities" => $this->getAttribute($this->getAttribute(            // line 120
(isset($context["collector"]) ? $context["collector"] : null), "backendConfig", []), "entities", [], "array")]], "method");
            // line 121
            echo "

                    <h4>Full Backend Configuration</h4>
                    ";
            // line 124
            echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "dump", [0 => ["easy_admin" => $this->getAttribute(            // line 125
(isset($context["collector"]) ? $context["collector"] : null), "backendConfig", [])]], "method");
            // line 126
            echo "
                </div>
            </div>
        </div>

    ";
        }
        // line 132
        echo "
    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html\">Read documentation</a></li>
        <li><a href=\"https://github.com/EasyCorp/EasyAdminBundle\">Project homepage</a></li>
    </ul>

";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/data_collector/easyadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 132,  276 => 126,  274 => 125,  273 => 124,  268 => 121,  266 => 120,  265 => 119,  260 => 116,  258 => 115,  257 => 114,  256 => 113,  255 => 112,  254 => 111,  253 => 110,  248 => 107,  246 => 106,  245 => 105,  240 => 102,  238 => 101,  237 => 100,  236 => 99,  222 => 88,  215 => 83,  211 => 81,  207 => 79,  198 => 75,  195 => 74,  193 => 73,  187 => 70,  184 => 69,  182 => 68,  175 => 64,  167 => 59,  163 => 57,  161 => 56,  158 => 55,  152 => 52,  148 => 50,  146 => 49,  143 => 48,  135 => 42,  133 => 41,  128 => 39,  125 => 38,  122 => 37,  119 => 36,  111 => 31,  106 => 30,  103 => 29,  96 => 25,  93 => 24,  87 => 21,  80 => 17,  76 => 15,  74 => 14,  71 => 13,  66 => 11,  61 => 10,  58 => 9,  55 => 8,  53 => 7,  50 => 6,  47 => 5,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/data_collector/easyadmin.html.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\data_collector\\easyadmin.html.twig");
    }
}
