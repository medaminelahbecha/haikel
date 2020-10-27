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
class __TwigTemplate_618fd7f11daac34062e49f36aae955db7b111cca2182a7322fe333f1210eb324 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bibliotheque/mytable/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bibliotheque/mytable/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Bibliotheque/mytable/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <style type=\"text/css\" >
        .Formulairadmin {
            background-color: #00a65a;
            font-family: verdana;
            font-size: 11px;
            color: #ffffff;
            height: 1cm;
        }
        .Bouton {
            border: 1pt solid #00a65a;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            color: #00a65a;
            text-decoration: none;
            font-size: 14px;
           width: 50%;
            height: 1cm;
            align: center;

        }
        .reservations{
            background-color: #BF3E26;
            font-size: 13pt;
            margin-bottom: 50px;
           align-items: center;
            align-self: center;
        }

        .reservations a{
            color:#98fb98;
        }
        .reservations a:hover ,.reservations a:focus , .reservations a:visited{
            color:#98fb98;
        }
        .pagination > li > a,
        .pagination > li > span{
            color: #BF3E26;

        }

        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus{
            background-color: #98fb98;
            color:#BF3E26;
        }
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus{
            background-color: #1C8C42;
            color: #ffffff;
            border: 1px solid #dddddd;
        }
    </style>
    <!-- Just an image -->
    <nav class=\"navbar navbar-dark bg-dark\" style=\"height: 3cm ; background-image:url(\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/omegaplus.png"), "html", null, true);
        echo "\") \">
        <a class=\"navbar-brand\" href=\"#\">

        </a>

    </nav>

    <br>
    <br>
    <br>
<div class=\"container-fluid\" align=\"center\">
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js2/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://code.jquery.com/jquery-2.2.4.js\"></script>
    <script src=\"script.js\"></script>
    <script>
        \$(document).ready(function(){

            \$('#search').keyup(function(){
                search_table(\$(this).val());
            });
            \$('#search1').keyup(function(){
                search_table(\$(this).val());
            });
            \$('#search2').keyup(function(){
                search_table(\$(this).val());
            });
            \$('#search3').keyup(function(){
                search_table(\$(this).val());
            });
            function search_table(value){
                \$('#tableac tbody tr').each(function(){
                    var found = 'false';
                    \$(this).each(function(){
                        if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                        {
                            found = 'true';
                        }
                    });
                    if(found == 'true')
                    {
                        \$(this).show();

                    }
                    else
                    {
                        \$(this).hide();



                    }
                });
            }
        });
    </script>

    <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/kk.png"), "html", null, true);
        echo "\" alt=\"IMG\">
    <img src=\"C:/wamp64/www/piDevEvents/web/templatePi/login_v1/images/omegaplus.PNG\" width=\"30\" height=\"30\" alt=\"\" />
    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">


            <div  style=\"alignment: center\">

                <form  autocomplete=\"off\"
                      class=\"form-horizontal ls_form\" style=\"width: 600px  \">

                    <div class=\"row\">
                        <table style=\"background-color:#00a65a;width: 600px ; align-self: center ;border : 2px\"  border=\"2px\">
                            <tbody>
                            <tr align=\"center\" class=\"Formulairadmin\">
                                <td colspan=\"4\"><strong>Critéres de recherche</strong></td>
                            </tr>
                            <tr class=\"Formulairadmin\">
                                <td colspan=\"2\" style=\"width:50%\">
                                    <label for=\"PanneauZoneId\">Région</label>
                                    <input name=\"code\" class=\"Bouton\" type=\"text\" value=\"\"
                                           id=\"search\">

                                </td>
                                <td colspan=\"2\" style=\"width:50%\">
                                    <label for=\"PanneauZoneId\">Format</label>
                                    <input name=\"code\" class=\"Bouton\" type=\"text\" value=\"\"
                                           id=\"search1\">
                                </td>
                            </tr>
                            <tr  class=\"Formulairadmin\">
                                <td colspan=\"2\" style=\"width:50%\">
                                    <label for=\"PanneauCode\">Code</label>

                                        <input name=\"code\" class=\"Bouton\" type=\"text\" value=\"\"
                                               id=\"search2\">

                                </td>
                                <td colspan=\"2\" style=\"width:50%\">
                                    <label for=\"PanneauEmplacementId\">Emplacement</label>

                                    <input name=\"code\" class=\"Bouton\" type=\"text\" value=\"\"
                                           id=\"search3\">
                                </td>

                            </tr>
                            <tr align=\"center\" class=\"Formulairadmin\">
                                <td colspan=\"4\">



                                            <button type=\"submit\" class=\"btn btn-primary\"  action=\"";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mytable_recherche");
        echo "\">Afficher</button>

                                            <br>



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


                <table class=\"table table-bordered table-striped\" cellspacing=\"0\" id=\"tableac\" border=\"2\" width=\"100%\">
                    <thead style=\"color: #00a65a\">
                    <tr>

                <th>Reseau</th>
                <th>Zone</th>
                <th>Region</th>
                <th>Regie</th>
                <th>Support</th>
                <th>Format</th>
                <th>Type</th>
                <th>Codeface</th>
                <th>Departement</th>

                <th>Adresse</th>
                <th>Emplacement</th>
                <th>Trafficroutier2017</th>
                <th>Map</th>
                <th>Photo</th>

            </tr>
        </thead>
        <tbody>
        ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mytables"]) ? $context["mytables"] : $this->getContext($context, "mytables")));
        foreach ($context['_seq'] as $context["_key"] => $context["mytable"]) {
            // line 224
            echo "            <tr class=\"Formulairadmin\" style=\"background-color: white ; color: black\">

                <td>";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "reseau", []), "html", null, true);
            echo "</td>
                <td>";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "zone", []), "html", null, true);
            echo "</td>
                <td>";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "region", []), "html", null, true);
            echo "</td>
                <td>";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "regie", []), "html", null, true);
            echo "</td>
                <td>";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "support", []), "html", null, true);
            echo "</td>
                <td>";
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "format", []), "html", null, true);
            echo "</td>
                <td>";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "type", []), "html", null, true);
            echo "</td>
                <td>";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "codeFace", []), "html", null, true);
            echo "</td>
                <td>";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "departement", []), "html", null, true);
            echo "</td>

                <td>";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "adresse", []), "html", null, true);
            echo "</td>
                <td>";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "emplacement", []), "html", null, true);
            echo "</td>
                <td>";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "trafficRoutier2017", []), "html", null, true);
            echo "</td>
                <td>";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "map", []), "html", null, true);
            echo "</td>
                <td>";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute($context["mytable"], "photo", []), "html", null, true);
            echo "</td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mytable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "        </tbody>
    </table>


            </div>
        </div>
    </div>

</div>
<nav aria-label=\"Page navigation example\">
    <div class=\"pagination justify-content-center\">";
        // line 254
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["mytables"]) ? $context["mytables"] : $this->getContext($context, "mytables")));
        echo "</div>
</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  375 => 254,  363 => 244,  353 => 240,  349 => 239,  345 => 238,  341 => 237,  337 => 236,  332 => 234,  328 => 233,  324 => 232,  320 => 231,  316 => 230,  312 => 229,  308 => 228,  304 => 227,  300 => 226,  296 => 224,  292 => 223,  235 => 169,  181 => 118,  134 => 74,  120 => 63,  60 => 5,  51 => 4,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block body %}
    <style type=\"text/css\" >
        .Formulairadmin {
            background-color: #00a65a;
            font-family: verdana;
            font-size: 11px;
            color: #ffffff;
            height: 1cm;
        }
        .Bouton {
            border: 1pt solid #00a65a;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            color: #00a65a;
            text-decoration: none;
            font-size: 14px;
           width: 50%;
            height: 1cm;
            align: center;

        }
        .reservations{
            background-color: #BF3E26;
            font-size: 13pt;
            margin-bottom: 50px;
           align-items: center;
            align-self: center;
        }

        .reservations a{
            color:#98fb98;
        }
        .reservations a:hover ,.reservations a:focus , .reservations a:visited{
            color:#98fb98;
        }
        .pagination > li > a,
        .pagination > li > span{
            color: #BF3E26;

        }

        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus{
            background-color: #98fb98;
            color:#BF3E26;
        }
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus{
            background-color: #1C8C42;
            color: #ffffff;
            border: 1px solid #dddddd;
        }
    </style>
    <!-- Just an image -->
    <nav class=\"navbar navbar-dark bg-dark\" style=\"height: 3cm ; background-image:url(\"{{ asset('images/omegaplus.png')}}\") \">
        <a class=\"navbar-brand\" href=\"#\">

        </a>

    </nav>

    <br>
    <br>
    <br>
<div class=\"container-fluid\" align=\"center\">
    <script src=\"{{ asset('js2/jquery.min.js') }}\"></script>
    <script src=\"https://code.jquery.com/jquery-2.2.4.js\"></script>
    <script src=\"script.js\"></script>
    <script>
        \$(document).ready(function(){

            \$('#search').keyup(function(){
                search_table(\$(this).val());
            });
            \$('#search1').keyup(function(){
                search_table(\$(this).val());
            });
            \$('#search2').keyup(function(){
                search_table(\$(this).val());
            });
            \$('#search3').keyup(function(){
                search_table(\$(this).val());
            });
            function search_table(value){
                \$('#tableac tbody tr').each(function(){
                    var found = 'false';
                    \$(this).each(function(){
                        if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                        {
                            found = 'true';
                        }
                    });
                    if(found == 'true')
                    {
                        \$(this).show();

                    }
                    else
                    {
                        \$(this).hide();



                    }
                });
            }
        });
    </script>

    <img src=\"{{ asset('images/kk.png') }}\" alt=\"IMG\">
    <img src=\"C:/wamp64/www/piDevEvents/web/templatePi/login_v1/images/omegaplus.PNG\" width=\"30\" height=\"30\" alt=\"\" />
    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">


            <div  style=\"alignment: center\">

                <form  autocomplete=\"off\"
                      class=\"form-horizontal ls_form\" style=\"width: 600px  \">

                    <div class=\"row\">
                        <table style=\"background-color:#00a65a;width: 600px ; align-self: center ;border : 2px\"  border=\"2px\">
                            <tbody>
                            <tr align=\"center\" class=\"Formulairadmin\">
                                <td colspan=\"4\"><strong>Critéres de recherche</strong></td>
                            </tr>
                            <tr class=\"Formulairadmin\">
                                <td colspan=\"2\" style=\"width:50%\">
                                    <label for=\"PanneauZoneId\">Région</label>
                                    <input name=\"code\" class=\"Bouton\" type=\"text\" value=\"\"
                                           id=\"search\">

                                </td>
                                <td colspan=\"2\" style=\"width:50%\">
                                    <label for=\"PanneauZoneId\">Format</label>
                                    <input name=\"code\" class=\"Bouton\" type=\"text\" value=\"\"
                                           id=\"search1\">
                                </td>
                            </tr>
                            <tr  class=\"Formulairadmin\">
                                <td colspan=\"2\" style=\"width:50%\">
                                    <label for=\"PanneauCode\">Code</label>

                                        <input name=\"code\" class=\"Bouton\" type=\"text\" value=\"\"
                                               id=\"search2\">

                                </td>
                                <td colspan=\"2\" style=\"width:50%\">
                                    <label for=\"PanneauEmplacementId\">Emplacement</label>

                                    <input name=\"code\" class=\"Bouton\" type=\"text\" value=\"\"
                                           id=\"search3\">
                                </td>

                            </tr>
                            <tr align=\"center\" class=\"Formulairadmin\">
                                <td colspan=\"4\">



                                            <button type=\"submit\" class=\"btn btn-primary\"  action=\"{{ path('mytable_recherche') }}\">Afficher</button>

                                            <br>



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


                <table class=\"table table-bordered table-striped\" cellspacing=\"0\" id=\"tableac\" border=\"2\" width=\"100%\">
                    <thead style=\"color: #00a65a\">
                    <tr>

                <th>Reseau</th>
                <th>Zone</th>
                <th>Region</th>
                <th>Regie</th>
                <th>Support</th>
                <th>Format</th>
                <th>Type</th>
                <th>Codeface</th>
                <th>Departement</th>

                <th>Adresse</th>
                <th>Emplacement</th>
                <th>Trafficroutier2017</th>
                <th>Map</th>
                <th>Photo</th>

            </tr>
        </thead>
        <tbody>
        {% for mytable in mytables %}
            <tr class=\"Formulairadmin\" style=\"background-color: white ; color: black\">

                <td>{{ mytable.reseau }}</td>
                <td>{{ mytable.zone }}</td>
                <td>{{ mytable.region }}</td>
                <td>{{ mytable.regie }}</td>
                <td>{{ mytable.support }}</td>
                <td>{{ mytable.format }}</td>
                <td>{{ mytable.type }}</td>
                <td>{{ mytable.codeFace }}</td>
                <td>{{ mytable.departement }}</td>

                <td>{{ mytable.adresse }}</td>
                <td>{{ mytable.emplacement }}</td>
                <td>{{ mytable.trafficRoutier2017 }}</td>
                <td>{{ mytable.map }}</td>
                <td>{{ mytable.photo }}</td>

            </tr>
        {% endfor %}
        </tbody>
    </table>


            </div>
        </div>
    </div>

</div>
<nav aria-label=\"Page navigation example\">
    <div class=\"pagination justify-content-center\">{{ knp_pagination_render(mytables) }}</div>
</nav>
{% endblock %}
", "@Bibliotheque/mytable/index.html.twig", "C:\\wamp64\\www\\piDevEvents\\src\\BibliothequeBundle\\Resources\\views\\mytable\\index.html.twig");
    }
}
