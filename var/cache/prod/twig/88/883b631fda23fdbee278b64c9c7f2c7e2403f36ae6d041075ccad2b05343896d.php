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

/* @Bibliotheque/mytable/index.html.twig */
class __TwigTemplate_8d201cab8a0465c4afd6b69d69e1b660a65fbb2478e948ee2ec2720a58e480c6 extends \Twig\Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base.html.twig", "@Bibliotheque/mytable/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        // line 5
        echo "<div class=\"container-fluid\" align=\"center\">


    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">


            <div  style=\"alignment: center\">

                <form action=\"/afichette_espacecl/Panneaus/espace_cl\" autocomplete=\"off\"
                      class=\"form-horizontal ls_form\" style=\"width: 600px  \">

                    <div class=\"row\">
                        <table style=\"background-color:#00a65a;width: 600px ; align-self: center ;border : 2px\"  border=\"2px\">
                            <tbody>
                            <tr align=\"center\" class=\"SiteCelluleDecorFormulairadmin\">
                                <td colspan=\"4\"><strong>Critéres de recherche</strong></td>
                            </tr>
                            <tr>
                                <td colspan=\"2\">
                                    <label for=\"PanneauZoneId\">Région</label>
                                    <select class=\"form-control\" id=\"PanneauZoneId\" >

                                        <option value=\"\">Veuillez choisir</option>
                                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["applications"]) ? $context["applications"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 30
            echo "                                            <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "region", []), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                                    </select>
                                </td>
                                <td colspan=\"2\">
                                    <label for=\"PanneauZoneId\">Format</label>
                                    <select class=\"form-control\" id=\"PanneauFormatId\" >
                                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["applications"]) ? $context["applications"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 38
            echo "                                            <option value=\"\">Veuillez choisir</option>
                                            <option>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "format", []), "html", null, true);
            echo "</option>

                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=\"2\">
                                    <label for=\"PanneauCode\">Code</label>
                                    <div class=\"col-sm-10\">
                                        <input name=\"data[Panneau][code]\" class=\"form-control\" type=\"text\" value=\"\"
                                               id=\"PanneauCode\">
                                    </div>
                                </td>
                                <td colspan=\"2\">
                                    <label for=\"PanneauEmplacementId\">Emplacement</label>

                                    <select class=\"form-control\" id=\"PanneauEmplacementId\">

                                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["applications"]) ? $context["applications"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 59
            echo "                                            <option value=\"\">Veuillez choisir</option>
                                            <option>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "emplacement", []), "html", null, true);
            echo "</option>

                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "

                                    </select>
                                </td>

                            </tr>
                            <tr align=\"center\">
                                <td colspan=\"4\">

                                    <div class=\"form-group\">
                                        <div class=\"col-lg-9 col-lg-offset-3\">
                                            <button type=\"submit\" class=\"btn btn-primary\" style=\"background-color: #9d9d9d\">Afficher</button>

                                            <br>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">

            <div class=\"panel-heading\" style=\"background-color: #00a65a\">
                <h3 class=\"panel-title\">Liste des Panneaux</h3>
            </div>
            <div class=\"panel-body\">

                <table class=\"table table-bordered table-striped\" cellspacing=\"0\" id=\"tableac\" border=\"2\">
                    <thead style=\"color: #00a65a\">
                    <tr>
                <th>Idface</th>
                <th>Reseau</th>
                <th>Zone</th>
                <th>Region</th>
                <th>Regie</th>
                <th>Support</th>
                <th>Format</th>
                <th>Type</th>
                <th>Codeface</th>
                <th>Departement</th>
                <th>Xpanneau</th>
                <th>Ypanneau</th>
                <th>Adresse</th>
                <th>Emplacement</th>
                <th>Trafficroutier2017</th>
                <th>Map</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mytables"]) ? $context["mytables"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mytable"]) {
            // line 127
            echo "            <tr>
                <td><a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mytable_show", ["idface" => $this->getAttribute($context["mytable"], "idface", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "idface", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "reseau", []), "html", null, true);
            echo "</td>
                <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "zone", []), "html", null, true);
            echo "</td>
                <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "region", []), "html", null, true);
            echo "</td>
                <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "regie", []), "html", null, true);
            echo "</td>
                <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "support", []), "html", null, true);
            echo "</td>
                <td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "format", []), "html", null, true);
            echo "</td>
                <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "type", []), "html", null, true);
            echo "</td>
                <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "codeFace", []), "html", null, true);
            echo "</td>
                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "departement", []), "html", null, true);
            echo "</td>
                <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "xPanneau", []), "html", null, true);
            echo "</td>
                <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "yPanneau", []), "html", null, true);
            echo "</td>
                <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "adresse", []), "html", null, true);
            echo "</td>
                <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "emplacement", []), "html", null, true);
            echo "</td>
                <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "trafficRoutier2017", []), "html", null, true);
            echo "</td>
                <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "map", []), "html", null, true);
            echo "</td>
                <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "photo", []), "html", null, true);
            echo "</td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mytable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "        </tbody>
    </table>


            </div>
        </div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "@Bibliotheque/mytable/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 148,  276 => 144,  272 => 143,  268 => 142,  264 => 141,  260 => 140,  256 => 139,  252 => 138,  248 => 137,  244 => 136,  240 => 135,  236 => 134,  232 => 133,  228 => 132,  224 => 131,  220 => 130,  216 => 129,  210 => 128,  207 => 127,  203 => 126,  138 => 63,  129 => 60,  126 => 59,  122 => 58,  104 => 42,  95 => 39,  92 => 38,  88 => 37,  81 => 32,  72 => 30,  68 => 29,  42 => 5,  39 => 4,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Bibliotheque/mytable/index.html.twig", "C:\\wamp64\\www\\piDevEvents\\src\\BibliothequeBundle\\Resources\\views\\mytable\\index.html.twig");
    }
}
