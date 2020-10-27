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

/* @Bibliotheque/mytable/show.html.twig */
class __TwigTemplate_375c0c837e10217d717177a5dbe1e4d62f5d6158d27eacddd48e10500d1c4cbf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base.html.twig", "@Bibliotheque/mytable/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "    <h1>Mytable</h1>

    <table>
        <tbody>
            <tr>
                <th>Idface</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "idface", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reseau</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "reseau", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Zone</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "zone", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Region</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "region", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Regie</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "regie", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Support</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "support", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Format</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "format", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "type", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codeface</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "codeFace", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Departement</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "departement", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Xpanneau</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "xPanneau", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ypanneau</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "yPanneau", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "adresse", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Emplacement</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "emplacement", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Trafficroutier2017</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "trafficRoutier2017", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Map</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "map", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "photo", []), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mytable_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mytable_edit", ["idface" => $this->getAttribute((isset($context["mytable"]) ? $context["mytable"] : null), "idface", [])]), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "@Bibliotheque/mytable/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 89,  184 => 87,  178 => 84,  172 => 81,  162 => 74,  155 => 70,  148 => 66,  141 => 62,  134 => 58,  127 => 54,  120 => 50,  113 => 46,  106 => 42,  99 => 38,  92 => 34,  85 => 30,  78 => 26,  71 => 22,  64 => 18,  57 => 14,  50 => 10,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Bibliotheque/mytable/show.html.twig", "C:\\wamp64\\www\\piDevEvents\\src\\BibliothequeBundle\\Resources\\views\\mytable\\show.html.twig");
    }
}
