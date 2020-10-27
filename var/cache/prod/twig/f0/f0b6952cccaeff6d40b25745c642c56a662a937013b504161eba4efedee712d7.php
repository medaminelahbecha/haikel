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

/* @EasyAdmin/default/menu.html.twig */
class __TwigTemplate_66b722a8e7600a1c4ca49288f2224b457777ab8b043f495cd751f9aec667c637 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main_menu_before' => [$this, 'block_main_menu_before'],
            'main_menu' => [$this, 'block_main_menu'],
            'menu_item' => [$this, 'block_menu_item'],
            'menu_subitem' => [$this, 'block_menu_subitem'],
            'main_menu_after' => [$this, 'block_main_menu_after'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $context["_translation_domain"] = _twig_default_filter((($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", []), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("translation_domain"))) : ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("translation_domain"))), "messages");
        // line 34
        echo "<ul class=\"sidebar-menu\" data-widget=\"tree\" data-animation-speed=\"250\">
    ";
        // line 35
        $context["_menu_items"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.menu");
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('main_menu', $context, $blocks);
        // line 58
        echo "</ul>

";
        // line 60
        $this->displayBlock('main_menu_after', $context, $blocks);
    }

    // line 31
    public function block_main_menu_before($context, array $blocks = [])
    {
    }

    // line 37
    public function block_main_menu($context, array $blocks = [])
    {
        // line 38
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["_menu_items"]) ? $context["_menu_items"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "            ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 56
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    ";
    }

    // line 39
    public function block_menu_item($context, array $blocks = [])
    {
        // line 40
        echo "                <li class=\"";
        echo ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", []) == "divider")) ? ("header") : (""));
        echo " ";
        echo (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", []))) ? ("treeview") : (""));
        echo " ";
        echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "menuIndex"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "menuIndex"], "method"),  -1)) : ( -1)) == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0", []))) ? ("active") : (""));
        echo " ";
        echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
        echo "\">
                    ";
        // line 41
        echo $this->getAttribute((isset($context["helper"]) ? $context["helper"] : null), "render_menu_item", [0 => (isset($context["item"]) ? $context["item"] : null), 1 => (isset($context["_translation_domain"]) ? $context["_translation_domain"] : null)], "method");
        echo "

                    ";
        // line 43
        if ( !twig_test_empty((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", []), [])) : ([])))) {
            // line 44
            echo "                        <ul class=\"treeview-menu\">
                            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                // line 46
                echo "                                ";
                $this->displayBlock('menu_subitem', $context, $blocks);
                // line 51
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                        </ul>
                    ";
        }
        // line 54
        echo "                </li>
            ";
    }

    // line 46
    public function block_menu_subitem($context, array $blocks = [])
    {
        // line 47
        echo "                                    <li class=\"";
        echo ((($this->getAttribute((isset($context["subitem"]) ? $context["subitem"] : null), "type", []) == "divider")) ? ("header") : (""));
        echo " ";
        echo (((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "menuIndex"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "menuIndex"], "method"),  -1)) : ( -1)) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "parent", []), "loop", []), "index0", [])) && ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", [], "any", false, true), "query", [], "any", false, true), "get", [0 => "submenuIndex"], "method"),  -1)) : ( -1)) == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0", [])))) ? ("active") : (""));
        echo "\">
                                        ";
        // line 48
        echo $this->getAttribute((isset($context["helper"]) ? $context["helper"] : null), "render_menu_item", [0 => (isset($context["subitem"]) ? $context["subitem"] : null), 1 => (isset($context["_translation_domain"]) ? $context["_translation_domain"] : null)], "method");
        echo "
                                    </li>
                                ";
    }

    // line 60
    public function block_main_menu_after($context, array $blocks = [])
    {
    }

    // line 1
    public function getrender_menu_item($__item__ = null, $__translation_domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "translation_domain" => $__translation_domain__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", []) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", []), [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = ["menuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "menu_index", []), "submenuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu_index", [])];
                // line 6
                echo "        ";
                $context["path"] = ((($this->getAttribute(                // line 7
(isset($context["item"]) ? $context["item"] : null), "type", []) == "link")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url", [])) : (((($this->getAttribute(                // line 8
(isset($context["item"]) ? $context["item"] : null), "type", []) == "route")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "route", []), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "params", []))) : (((($this->getAttribute(                // line 9
(isset($context["item"]) ? $context["item"] : null), "type", []) == "entity")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_array_merge(["entity" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "entity", []), "action" => "list"], (isset($context["menu_params"]) ? $context["menu_params"] : null)), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "params", [])))) : (((($this->getAttribute(                // line 10
(isset($context["item"]) ? $context["item"] : null), "type", []) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", []) == "route") && (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (isset($context["path"]) ? $context["path"] : null)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin")) && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "route", []), twig_array_merge((isset($context["menu_params"]) ? $context["menu_params"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "params", [])));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo "\" ";
                if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", []), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", []), "html", null, true);
                    echo "\"";
                }
                echo " class=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "css_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "css_class", []), "")) : ("")), "html", null, true);
                echo "\">
            ";
                // line 22
                if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon", []))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon", []), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", []), [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", []), [])) : ([])))) {
                    echo "<span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span>";
                }
                // line 25
                echo "        </a>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 25,  274 => 24,  269 => 23,  263 => 22,  251 => 21,  248 => 20,  245 => 19,  242 => 18,  239 => 17,  236 => 12,  234 => 10,  233 => 9,  232 => 8,  231 => 7,  229 => 6,  226 => 5,  220 => 3,  217 => 2,  204 => 1,  199 => 60,  192 => 48,  185 => 47,  182 => 46,  177 => 54,  173 => 52,  159 => 51,  156 => 46,  139 => 45,  136 => 44,  134 => 43,  129 => 41,  118 => 40,  115 => 39,  111 => 57,  97 => 56,  94 => 39,  76 => 38,  73 => 37,  68 => 31,  64 => 60,  60 => 58,  58 => 37,  55 => 36,  53 => 35,  50 => 34,  48 => 33,  45 => 32,  43 => 31,  40 => 30,  38 => 29,  35 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/menu.html.twig", "C:\\wamp64\\www\\piDevEvents\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\menu.html.twig");
    }
}
