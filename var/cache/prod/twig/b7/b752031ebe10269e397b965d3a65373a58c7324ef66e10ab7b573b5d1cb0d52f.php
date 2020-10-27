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

/* index3.html.twig */
class __TwigTemplate_c0d0e2ff792486951afb2dd165272a247771de5a7e94123f24a680b015a9d092 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'button' => [$this, 'block_button'],
            'events' => [$this, 'block_events'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <title>Cite De La Culture</title>
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"\" name=\"keywords\">
  <meta content=\"\" name=\"description\">

  <!-- Favicons -->
  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

  <!-- Bootstrap CSS File -->
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/lightbox/css/lightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id=\"page-top\">

  <!--/ Nav Star /-->
  <nav class=\"navbar navbar-b navbar-trans navbar-expand-md fixed-top\" id=\"mainNav\">
    <div class=\"container\">
      <a class=\"navbar-brand js-scroll\" href=\"#page-top\">EMPIRE</a>
      <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarDefault\"
        aria-controls=\"navbarDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class=\"navbar-collapse collapse justify-content-end\" id=\"navbarDefault\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll active\"  href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("events_homepage");
        echo "\" target=\"_blank\">Accueil</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll\"  href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("club.html.twig"), "html", null, true);
        echo "\" target=\"_blank\">Clubs</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll\"   href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("events");
        echo "\" target=\"_blank\">Evenements</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll\" href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bib");
        echo "\" target=\"_blank\">Bibliotheque</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("amir.html.twig"), "html", null, true);
        echo "\">Formation</a>
          </li>
\t\t  <li class=\"nav-item\">
            <a class=\"nav-link js-scroll\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("hamma.html.twig"), "html", null, true);
        echo "\">ROUNA</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll\" href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\" target=\"_blank\">espace admin</a>
          </li>
          ";
        // line 70
        $this->displayBlock('button', $context, $blocks);
        // line 85
        echo "        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id=\"home\" class=\"intro route bg-image\" style=\"background-image: url(";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/img/intro-bg.jpg"), "html", null, true);
        echo ")\">
    <div class=\"overlay-itro\"></div>
    <div class=\"intro-content display-table\">
      <div class=\"table-cell\">
        <div class=\"container\">
          <!--<p class=\"display-6 color-d\">Hello, world!</p>-->
          <h1 class=\"intro-title mb-4\">BIENVENUE</h1>
          <p class=\"intro-subtitle\"><span class=\"text-slider-items\">Cité De La Culture</span><strong class=\"text-slider\"></strong></p>
          <!-- <p class=\"pt-3\"><a class=\"btn btn-primary btn js-scroll px-4\" href=\"#about\" role=\"button\">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->


<!--/ your code begin /-->
  ";
        // line 109
        $this->displayBlock('events', $context, $blocks);
        // line 111
        echo "<!--/ your code End /-->


  <!--/ Section Contact-Footer Star /-->
  
  <section class=\"paralax-mf footer-paralax bg-image sect-mt4 route\" style=\"background-image: url(";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/img/overlay-bg.jpg"), "html", null, true);
        echo ")\">
    
\t<div class=\"overlay-mf\"></div>
\t
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <div class=\"contact-mf\">
            <div id=\"contact\" class=\"box-shadow-full\">
              <div class=\"row\">
                
                <div class=\"col-md-6\">
\t\t\t\t
                  <div class=\"title-box-2 pt-4 pt-md-0\">
                    <h5 class=\"title-left\">
                      Plus
                    </h5>
                  </div>
                  <div class=\"more-info\">
                    <p class=\"lead\">
                      La Cité de la Culture (arabe : مدينة الثقافة) est un complexe culturel tunisien de neuf hectares situé en plein centre de la ville de Tunis, 
\t\t\t\t\t  à l'emplacement de l'ancienne Foire internationale de Tunis sur l'avenue Mohammed V.
                    </p>
                    <ul class=\"list-ico\">
                      <li><span class=\"ion-ios-location\"></span> Avenue Mohamed 5, Tunis</li>
                      <li><span class=\"ion-ios-telephone\"></span> (216) 70 028 300</li>
                      <li><span class=\"ion-email\"></span> contact.citeculture@mac.gov.tn</li>
                    </ul>
                  </div>
                  <div class=\"socials\">
                    <ul>
                      <li><a href=\"\"><span class=\"ico-circle\"><i class=\"ion-social-facebook\"></i></span></a></li>
                      <li><a href=\"\"><span class=\"ico-circle\"><i class=\"ion-social-instagram\"></i></span></a></li>
                      <li><a href=\"\"><span class=\"ico-circle\"><i class=\"ion-social-twitter\"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div class=\"copyright-box\">
              <p class=\"copyright\">&copy; Copyright <strong>Empire</strong>. All Rights Reserved</p>
              <div class=\"credits\">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                Designed by Empire
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href=\"#\" class=\"back-to-top\"><i class=\"fa fa-chevron-up\"></i></a>
  <div id=\"preloader\"></div>

  <!-- JavaScript Libraries -->
  <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/counterup/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/counterup/jquery.counterup.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/lightbox/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/lib/typed/typed.min.js"), "html", null, true);
        echo "\"></script>
  <!-- Contact Form JavaScript File -->
  <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/contactform/contactform.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main Javascript File -->
  <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatePi/DevFolio/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
    }

    // line 70
    public function block_button($context, array $blocks = [])
    {
        // line 71
        echo "          <div class=\"button-box\">

            ";
        // line 73
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 74
            echo "
              <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"";
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"theme-btn btn-style-one\">LOGIN</a></li>
              <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"theme-btn btn-style-one\" title=\"\">REGISTER</a></li>

            ";
        } else {
            // line 79
            echo "              <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" title=\"\">LOGOUT</a></li>
            ";
        }
        // line 81
        echo "          </div>
        </ul>

        ";
    }

    // line 109
    public function block_events($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "index3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 109,  348 => 81,  342 => 79,  336 => 76,  332 => 75,  329 => 74,  327 => 73,  323 => 71,  320 => 70,  311 => 200,  305 => 197,  300 => 195,  296 => 194,  292 => 193,  288 => 192,  284 => 191,  280 => 190,  276 => 189,  272 => 188,  268 => 187,  264 => 186,  191 => 116,  184 => 111,  182 => 109,  162 => 92,  153 => 85,  151 => 70,  146 => 68,  140 => 65,  134 => 62,  128 => 59,  122 => 56,  116 => 53,  110 => 50,  82 => 25,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  54 => 15,  48 => 12,  44 => 11,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index3.html.twig", "C:\\wamp64\\www\\piDevEvents\\app\\Resources\\views\\index3.html.twig");
    }
}
