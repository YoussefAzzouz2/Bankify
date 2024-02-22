<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* cheque/front/list.html.twig */
class __TwigTemplate_bdd7637fd550ecae6713c1345a7714d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/front/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/front/list.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

\t<head>
    <!-- Basic -->
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
    <!-- Site Metas -->
    <meta name=\"keywords\" content=\"\"/>
    <meta name=\"description\" content=\"\"/>
    <meta name=\"author\" content=\"\"/>
    <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicon.png"), "html", null, true);
        echo "\" type=\"\">

    ";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        // line 19
        echo "
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.css"), "html", null, true);
        echo "\"/>

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap\" rel=\"stylesheet\">

    <!-- Owl Carousel -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\"/>

    <!-- Font Awesome -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!-- Responsive styles -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

         <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <!-- Font Awesome CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
    <style>
        /* Style for badge */
        .badge-warning {
            position: absolute;
            top: 0;
            right: 0;
        }
    </style>

    
    
</head>

\t";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 518
        echo "    
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 17
        echo "        <title>Bankify</title>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "\t\t<body>

    <div class=\"hero_area\">

        <div class=\"hero_bg_box\">
            <div class=\"bg_img_box\">
                <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/hero-bg.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div>

        <!-- header section starts -->
        <header class=\"header_section\">
            <div class=\"container-fluid\">
                <nav class=\"navbar navbar-expand-lg custom_nav-container \">
                    <a class=\"navbar-brand\" \">
                        <span>
                            Bankify
                        </span>
                    </a>

                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" >Home</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" >About</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\">Services</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" >Why Us</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" >Team</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\">
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    Login
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" >
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    Register
                                </a>
                            </li>
                        </ul>
                        <form class=\"form-inline\">
                            <button class=\"btn my-2 my-sm-0 nav_search-btn\" type=\"submit\">
                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
        </header>

\t\t\t\t<!-- end header section -->
\t\t\t\t
\t\t\t<!-- slider section -->
<section class=\"slider_section\">
    <div id=\"customCarousel1\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"detail-box\">
                                <h1>Vivez l’expérience de la banque en ligne!</h1>
                                <p>Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.</p>
                                <div class=\"btn-box\">
                                    <a href=\"\" class=\"btn1\">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"img-box\">
                                <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/slider-img.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"detail-box\">
                                <h1>Crypto<br>Currency</h1>
                                <p>Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.</p>
                                <div class=\"btn-box\">
                                    <a href=\"\" class=\"btn1\">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"img-box\">
                                <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/slider-img.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"detail-box\">
                                <h1>Crypto<br>Currency</h1>
                                <p>Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.</p>
                                <div class=\"btn-box\">
                                    <a href=\"\" class=\"btn1\">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"img-box\">
                                <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/slider-img.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ol class=\"carousel-indicators\">
            <li data-target=\"#customCarousel1\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#customCarousel1\" data-slide-to=\"1\"></li>
            <li data-target=\"#customCarousel1\" data-slide-to=\"2\"></li>
        </ol>
    </div>
</section>
<!-- end slider section -->

\t\t\t</div>


\t\t\t<!-- service section -->
            ";
        // line 199
        $context["RECTraitée"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 199, $this->source); })()), "session", [], "any", false, false, false, 199), "get", ["RECTraitée"], "method", false, false, false, 199);
        // line 200
        echo "
<section class=\"service_section layout_padding\">
    <div class=\"service_container\">
        <div class=\"container\">
            <div class=\"heading_container heading_center\">
                <h2>
                    Our
                    <span>Cheques</span>
                </h2>
                <p>
                    Here you can view and manipulate your cheques.
                </p>
            </div>
            ";
        // line 213
        $context["x"] = 1;
        // line 214
        echo "              <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["random"]) || array_key_exists("random", $context) ? $context["random"] : (function () { throw new RuntimeError('Variable "random" does not exist.', 215, $this->source); })()), "html", null, true);
        echo "\">
        <ul class=\"navbar-nav mr-auto\">
            <!-- Add your notification dropdown menu here -->
            <li class=\"nav-item dropdown\">
                <!-- Your dropdown trigger button -->
                 ";
        // line 220
        $context["a"] = 0;
        // line 221
        echo "                 ";
        $context["tabchequeIds"] = [];
        // line 222
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabcheque"]) || array_key_exists("tabcheque", $context) ? $context["tabcheque"] : (function () { throw new RuntimeError('Variable "tabcheque" does not exist.', 222, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 223
            echo "                     ";
            $context["tabchequeIds"] = twig_array_merge((isset($context["tabchequeIds"]) || array_key_exists("tabchequeIds", $context) ? $context["tabchequeIds"] : (function () { throw new RuntimeError('Variable "tabchequeIds" does not exist.', 223, $this->source); })()), [twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 223)]);
            // line 224
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["RECTraitée"]) || array_key_exists("RECTraitée", $context) ? $context["RECTraitée"] : (function () { throw new RuntimeError('Variable "RECTraitée" does not exist.', 225, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["REC"]) {
            // line 226
            echo "             ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["REC"], "getChequeID", [], "method", false, false, false, 226), "getId", [], "method", false, false, false, 226), (isset($context["tabchequeIds"]) || array_key_exists("tabchequeIds", $context) ? $context["tabchequeIds"] : (function () { throw new RuntimeError('Variable "tabchequeIds" does not exist.', 226, $this->source); })()))) {
                echo "    
         ";
                // line 227
                $context["a"] = ((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 227, $this->source); })()) + 1);
                // line 228
                echo "                          ";
            }
            // line 229
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['REC'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "                <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown";
        echo twig_escape_filter($this->env, (isset($context["random"]) || array_key_exists("random", $context) ? $context["random"] : (function () { throw new RuntimeError('Variable "random" does not exist.', 230, $this->source); })()), "html", null, true);
        echo "\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-bell\"></i> <span class=\"badge badge-warning\">";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 231, $this->source); })()), "html", null, true);
        echo "</span>
                </a>
                
                <!-- Your dropdown menu -->
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdown";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["random"]) || array_key_exists("random", $context) ? $context["random"] : (function () { throw new RuntimeError('Variable "random" does not exist.', 235, $this->source); })()), "html", null, true);
        echo "\">
                    <div class=\"dropdown-header\">You have ";
        // line 236
        echo twig_escape_filter($this->env, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 236, $this->source); })()), "html", null, true);
        echo " notifications</div>
                  
                     ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["RECTraitée"]) || array_key_exists("RECTraitée", $context) ? $context["RECTraitée"] : (function () { throw new RuntimeError('Variable "RECTraitée" does not exist.', 238, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["REC"]) {
            // line 239
            echo "             ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["REC"], "getChequeID", [], "method", false, false, false, 239), "getId", [], "method", false, false, false, 239), (isset($context["tabchequeIds"]) || array_key_exists("tabchequeIds", $context) ? $context["tabchequeIds"] : (function () { throw new RuntimeError('Variable "tabchequeIds" does not exist.', 239, $this->source); })()))) {
                echo "    
                        
                       <a class=\"dropdown-item\">
                      
                        <i class=\"fa fa-users mr-2 text-aqua\">  
                        la reclamtion ";
                // line 244
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["REC"], "id", [], "any", false, false, false, 244), "html", null, true);
                echo " a été ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["REC"], "statutR", [], "any", false, false, false, 244), "html", null, true);
                echo "  </i>
    ";
            }
            // line 246
            echo "
   </a>
  
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['REC'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "                    <!-- Add more notification items here as needed -->
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("a1", ["ref" => (isset($context["ref"]) || array_key_exists("ref", $context) ? $context["ref"] : (function () { throw new RuntimeError('Variable "ref" does not exist.', 252, $this->source); })())]), "html", null, true);
        echo "\">clear</a>

                </div>
            </li>
        </ul>
    </div>
</nav> 

            ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabcheque"]) || array_key_exists("tabcheque", $context) ? $context["tabcheque"] : (function () { throw new RuntimeError('Variable "tabcheque" does not exist.', 260, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cheque"]) {
            // line 261
            echo "           
            


            <div class=\"row\">
                <div class=\"col-md-10 mx-auto\">
                    <div class=\"box\">
                        <div class=\"detail-box\">
                            <h5>cheque";
            // line 269
            echo twig_escape_filter($this->env, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 269, $this->source); })()), "html", null, true);
            echo "</h5>
                            ";
            // line 270
            $context["x"] = ((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 270, $this->source); })()) + 1);
            // line 271
            echo "                            <table border=\"1\">
                                <tr>
                                    <td>montantC</td>
                                    <td>dateEmission</td>
                                    <td>Destination</td>
                                    <td>Reclamation   


<!-- Bootstrap JavaScript and jQuery -->
<!-- Bootstrap JavaScript and jQuery -->

</td>
                                </tr>
                                
                                <tr>
                                    <td>";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cheque"], "montantC", [], "any", false, false, false, 286), "html", null, true);
            echo "</td>
                                    <td>";
            // line 287
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cheque"], "dateEmission", [], "any", false, false, false, 287)), "html", null, true);
            echo "</td>
                                    <td>";
            // line 288
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cheque"], "destinationC", [], "any", false, false, false, 288), "getFullName", [], "method", false, false, false, 288), "html", null, true);
            echo "</td>
                                    <td>
                                        <table border=\"1\">
                                            <tr>
                                                <td>categorie</td>
                                                <td>statut</td>
                                                <td> <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent";
            // line 295
            echo twig_escape_filter($this->env, (isset($context["random"]) || array_key_exists("random", $context) ? $context["random"] : (function () { throw new RuntimeError('Variable "random" does not exist.', 295, $this->source); })()), "html", null, true);
            echo "\">
        <ul class=\"navbar-nav mr-auto\">
            <!-- Add your notification dropdown menu here -->
            <li class=\"nav-item dropdown\">
                <!-- Your dropdown trigger button -->
                 ";
            // line 300
            $context["a"] = 0;
            // line 301
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["RECTraitée"]) || array_key_exists("RECTraitée", $context) ? $context["RECTraitée"] : (function () { throw new RuntimeError('Variable "RECTraitée" does not exist.', 301, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["REC"]) {
                // line 302
                echo "                     ";
                if ((twig_get_attribute($this->env, $this->source, $context["cheque"], "getId", [], "method", false, false, false, 302) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["REC"], "chequeID", [], "any", false, false, false, 302), "getId", [], "method", false, false, false, 302))) {
                    // line 303
                    echo "                       ";
                    $context["a"] = ((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 303, $this->source); })()) + 1);
                    // line 304
                    echo "                     ";
                }
                // line 305
                echo "                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['REC'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            echo "                <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown";
            echo twig_escape_filter($this->env, (isset($context["random"]) || array_key_exists("random", $context) ? $context["random"] : (function () { throw new RuntimeError('Variable "random" does not exist.', 306, $this->source); })()), "html", null, true);
            echo "\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-bell\"></i> <span class=\"badge badge-warning\">";
            // line 307
            echo twig_escape_filter($this->env, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 307, $this->source); })()), "html", null, true);
            echo "</span>
                </a>
                
                <!-- Your dropdown menu -->
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdown";
            // line 311
            echo twig_escape_filter($this->env, (isset($context["random"]) || array_key_exists("random", $context) ? $context["random"] : (function () { throw new RuntimeError('Variable "random" does not exist.', 311, $this->source); })()), "html", null, true);
            echo "\">
                    <div class=\"dropdown-header\">You have ";
            // line 312
            echo twig_escape_filter($this->env, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 312, $this->source); })()), "html", null, true);
            echo " notifications</div>
                  
                     ";
            // line 314
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["RECTraitée"]) || array_key_exists("RECTraitée", $context) ? $context["RECTraitée"] : (function () { throw new RuntimeError('Variable "RECTraitée" does not exist.', 314, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["REC"]) {
                // line 315
                echo "                         ";
                if ((twig_get_attribute($this->env, $this->source, $context["cheque"], "getId", [], "method", false, false, false, 315) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["REC"], "chequeID", [], "any", false, false, false, 315), "getId", [], "method", false, false, false, 315))) {
                    // line 316
                    echo "                        
                       <a class=\"dropdown-item\">
                      
                        <i class=\"fa fa-users mr-2 text-aqua\">  
                        la reclamtion ";
                    // line 320
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["REC"], "id", [], "any", false, false, false, 320), "html", null, true);
                    echo " a été ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["REC"], "statutR", [], "any", false, false, false, 320), "html", null, true);
                    echo "  </i>


   </a> ";
                }
                // line 324
                echo "  
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['REC'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            echo "                    <!-- Add more notification items here as needed -->
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"";
            // line 328
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("a11", ["ref" => twig_get_attribute($this->env, $this->source, $context["cheque"], "id", [], "any", false, false, false, 328)]), "html", null, true);
            echo "\">clear</a>

                </div>
            </li>
        </ul>
    </div>
</nav>   </td>
                                            </tr>
                                            ";
            // line 336
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 336, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 337
                echo "                                                ";
                if (($context["cheque"] == twig_get_attribute($this->env, $this->source, $context["i"], "chequeID", [], "any", false, false, false, 337))) {
                    // line 338
                    echo "                                                    <tr>
                                                        <td>";
                    // line 339
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "categorie", [], "any", false, false, false, 339), "html", null, true);
                    echo "</td>
                                                        <td>";
                    // line 340
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "statutR", [], "any", false, false, false, 340), "html", null, true);
                    echo "</td>
                                                        <td>
                                                            <a href=\"";
                    // line 342
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Reclamtion_remove1", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 342)]), "html", null, true);
                    echo "\" class=\"class=\"btn-box\"\">delete</a>
                                                       
                                                            <a href=\"";
                    // line 344
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rec_edit1", ["ref" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 344)]), "html", null, true);
                    echo "\" class=\"class=\"btn-box\"\">update</a>
                                                        </td>
                                                    </tr>
                                                ";
                }
                // line 348
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 349
            echo "                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href=\"";
            // line 354
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cheque_remove1", ["id" => twig_get_attribute($this->env, $this->source, $context["cheque"], "id", [], "any", false, false, false, 354)]), "html", null, true);
            echo "\" class=\"class=\"btn-box\"\">delete cheque</a>
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 357
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ch1_edit", ["ref" => twig_get_attribute($this->env, $this->source, $context["cheque"], "id", [], "any", false, false, false, 357)]), "html", null, true);
            echo "\" class=\"class=\"btn-box\"\">update cheque</a>
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 360
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterreclamtion2", ["ref" => twig_get_attribute($this->env, $this->source, $context["cheque"], "id", [], "any", false, false, false, 360)]), "html", null, true);
            echo "\" class=\"class=\"btn-box\"\">Add Reclamation</a>
                                    </td>
                                </tr>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cheque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 370
        echo "            <div class=\"btn-box\">
                <a href=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_pdf", ["ref" => (isset($context["ref"]) || array_key_exists("ref", $context) ? $context["ref"] : (function () { throw new RuntimeError('Variable "ref" does not exist.', 371, $this->source); })())]), "html", null, true);
        echo "\">PDF</a>
            </div>
            <div class=\"btn-box\">
                <a href=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutercheque1", ["ref" => (isset($context["ref"]) || array_key_exists("ref", $context) ? $context["ref"] : (function () { throw new RuntimeError('Variable "ref" does not exist.', 374, $this->source); })())]), "html", null, true);
        echo "\">Add New cheque</a>
            </div>
        </div>
    </div>
</section>
<!-- end service section -->


\t\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js\"></script>
<script>
    // Function to toggle dropdown menu
 
    

    // Toggle dropdown menu when clicking on notification icon
  \$(document).ready(function() {
    \$('.dropdown-toggle').click(function() {
        // Find the dropdown menu associated with the clicked toggle button
        var dropdownMenu = \$(this).closest('.dropdown').find('.dropdown-menu');
        // Toggle the visibility of the dropdown menu
        dropdownMenu.toggleClass('show');
    });
});

</script>

\t\t\t

\t\t\t<!-- info section -->

\t\t\t<section class=\"info_section layout_padding2\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-3 info_col\">
\t\t\t\t\t\t\t<div class=\"info_contact\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\tAddress
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<div class=\"contact_link_box\">
\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tLocation
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tCall +01 1234567890
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tdemo@gmail.com
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"info_social\">
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-3 info_col\">
\t\t\t\t\t\t\t<div class=\"info_detail\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\tInfo
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tnecessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-2 mx-auto info_col\">
\t\t\t\t\t\t\t<div class=\"info_link_box\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\tLinks
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<div class=\"info_links\">
\t\t\t\t\t\t\t\t\t<a class=\"active\" href=\"index.html\">
\t\t\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"about.html\">
\t\t\t\t\t\t\t\t\t\tAbout
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"service.html\">
\t\t\t\t\t\t\t\t\t\tServices
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"why.html\">
\t\t\t\t\t\t\t\t\t\tWhy Us
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"team.html\">
\t\t\t\t\t\t\t\t\t\tTeam
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-3 info_col \">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Enter email\"/>
\t\t\t\t\t\t\t\t<button type=\"submit\">
\t\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<!-- end info section -->

\t\t

\t\t\t<!-- jQery -->
\t\t\t<script type=\"text/javascript\" src=\"front/js/jquery-3.4.1.min.js\"></script>
\t\t\t<!-- popper js -->
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
\t\t\t<!-- bootstrap js -->
\t\t\t<script type=\"text/javascript\" src=\"front/js/bootstrap.js\"></script>
\t\t\t<!-- owl slider -->
\t\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
\t\t\t<!-- custom js -->
\t\t\t<script type=\"text/javascript\" src=\"front/js/custom.js\"></script>
\t\t\t<!-- Google Map -->
\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap\"></script>
\t\t\t<!-- End Google Map -->

\t\t</body>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cheque/front/list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  685 => 374,  679 => 371,  676 => 370,  660 => 360,  654 => 357,  648 => 354,  641 => 349,  635 => 348,  628 => 344,  623 => 342,  618 => 340,  614 => 339,  611 => 338,  608 => 337,  604 => 336,  593 => 328,  589 => 326,  582 => 324,  573 => 320,  567 => 316,  564 => 315,  560 => 314,  555 => 312,  551 => 311,  544 => 307,  539 => 306,  533 => 305,  530 => 304,  527 => 303,  524 => 302,  519 => 301,  517 => 300,  509 => 295,  499 => 288,  495 => 287,  491 => 286,  474 => 271,  472 => 270,  468 => 269,  458 => 261,  454 => 260,  443 => 252,  439 => 250,  430 => 246,  423 => 244,  414 => 239,  410 => 238,  405 => 236,  401 => 235,  394 => 231,  389 => 230,  383 => 229,  380 => 228,  378 => 227,  373 => 226,  368 => 225,  362 => 224,  359 => 223,  354 => 222,  351 => 221,  349 => 220,  341 => 215,  338 => 214,  336 => 213,  321 => 200,  319 => 199,  296 => 179,  273 => 159,  250 => 139,  169 => 61,  161 => 55,  151 => 54,  140 => 17,  130 => 16,  118 => 518,  116 => 54,  95 => 36,  89 => 33,  83 => 30,  71 => 21,  67 => 19,  65 => 16,  60 => 14,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

\t<head>
    <!-- Basic -->
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
    <!-- Site Metas -->
    <meta name=\"keywords\" content=\"\"/>
    <meta name=\"description\" content=\"\"/>
    <meta name=\"author\" content=\"\"/>
    <link rel=\"shortcut icon\" href=\"{{ asset('front/images/favicon.png') }}\" type=\"\">

    {% block title %}
        <title>Bankify</title>
    {% endblock %}

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/css/bootstrap.css') }}\"/>

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap\" rel=\"stylesheet\">

    <!-- Owl Carousel -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\"/>

    <!-- Font Awesome -->
    <link href=\"{{ asset('front/css/font-awesome.min.css') }}\" rel=\"stylesheet\"/>

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('front/css/style.css') }}\" rel=\"stylesheet\"/>

    <!-- Responsive styles -->
    <link href=\"{{ asset('front/css/responsive.css') }}\" rel=\"stylesheet\"/>

         <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <!-- Font Awesome CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
    <style>
        /* Style for badge */
        .badge-warning {
            position: absolute;
            top: 0;
            right: 0;
        }
    </style>

    
    
</head>

\t{% block body %}
\t\t<body>

    <div class=\"hero_area\">

        <div class=\"hero_bg_box\">
            <div class=\"bg_img_box\">
                <img src=\"{{ asset('front/images/hero-bg.png') }}\" alt=\"\">
            </div>
        </div>

        <!-- header section starts -->
        <header class=\"header_section\">
            <div class=\"container-fluid\">
                <nav class=\"navbar navbar-expand-lg custom_nav-container \">
                    <a class=\"navbar-brand\" \">
                        <span>
                            Bankify
                        </span>
                    </a>

                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" >Home</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" >About</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\">Services</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" >Why Us</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" >Team</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\">
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    Login
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" >
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    Register
                                </a>
                            </li>
                        </ul>
                        <form class=\"form-inline\">
                            <button class=\"btn my-2 my-sm-0 nav_search-btn\" type=\"submit\">
                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
        </header>

\t\t\t\t<!-- end header section -->
\t\t\t\t
\t\t\t<!-- slider section -->
<section class=\"slider_section\">
    <div id=\"customCarousel1\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"detail-box\">
                                <h1>Vivez l’expérience de la banque en ligne!</h1>
                                <p>Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.</p>
                                <div class=\"btn-box\">
                                    <a href=\"\" class=\"btn1\">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"img-box\">
                                <img src=\"{{ asset('front/images/slider-img.png') }}\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"detail-box\">
                                <h1>Crypto<br>Currency</h1>
                                <p>Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.</p>
                                <div class=\"btn-box\">
                                    <a href=\"\" class=\"btn1\">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"img-box\">
                                <img src=\"{{ asset('front/images/slider-img.png') }}\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"detail-box\">
                                <h1>Crypto<br>Currency</h1>
                                <p>Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.</p>
                                <div class=\"btn-box\">
                                    <a href=\"\" class=\"btn1\">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"img-box\">
                                <img src=\"{{ asset('front/images/slider-img.png') }}\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ol class=\"carousel-indicators\">
            <li data-target=\"#customCarousel1\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#customCarousel1\" data-slide-to=\"1\"></li>
            <li data-target=\"#customCarousel1\" data-slide-to=\"2\"></li>
        </ol>
    </div>
</section>
<!-- end slider section -->

\t\t\t</div>


\t\t\t<!-- service section -->
            {% set RECTraitée = app.session.get('RECTraitée') %}

<section class=\"service_section layout_padding\">
    <div class=\"service_container\">
        <div class=\"container\">
            <div class=\"heading_container heading_center\">
                <h2>
                    Our
                    <span>Cheques</span>
                </h2>
                <p>
                    Here you can view and manipulate your cheques.
                </p>
            </div>
            {% set x = 1 %}
              <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent{{ random }}\">
        <ul class=\"navbar-nav mr-auto\">
            <!-- Add your notification dropdown menu here -->
            <li class=\"nav-item dropdown\">
                <!-- Your dropdown trigger button -->
                 {% set a = 0%}
                 {% set tabchequeIds = [] %}
                    {% for item in tabcheque %}
                     {% set tabchequeIds = tabchequeIds|merge([item.id]) %}
                      {% endfor %}
                     {% for REC in RECTraitée %}
             {% if REC.getChequeID().getId() in  tabchequeIds %}    
         {% set a = a + 1 %}
                          {% endif %}
                     {% endfor %}
                <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown{{ random }}\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-bell\"></i> <span class=\"badge badge-warning\">{{a}}</span>
                </a>
                
                <!-- Your dropdown menu -->
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdown{{ random }}\">
                    <div class=\"dropdown-header\">You have {{a}} notifications</div>
                  
                     {% for REC in RECTraitée %}
             {% if REC.getChequeID().getId() in  tabchequeIds %}    
                        
                       <a class=\"dropdown-item\">
                      
                        <i class=\"fa fa-users mr-2 text-aqua\">  
                        la reclamtion {{REC.id}} a été {{REC.statutR}}  </i>
    {% endif %}

   </a>
  
                  {% endfor %}
                    <!-- Add more notification items here as needed -->
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"{{ path('a1', {'ref': ref}) }}\">clear</a>

                </div>
            </li>
        </ul>
    </div>
</nav> 

            {% for cheque in tabcheque %}
           
            


            <div class=\"row\">
                <div class=\"col-md-10 mx-auto\">
                    <div class=\"box\">
                        <div class=\"detail-box\">
                            <h5>cheque{{ x }}</h5>
                            {% set x = x + 1 %}
                            <table border=\"1\">
                                <tr>
                                    <td>montantC</td>
                                    <td>dateEmission</td>
                                    <td>Destination</td>
                                    <td>Reclamation   


<!-- Bootstrap JavaScript and jQuery -->
<!-- Bootstrap JavaScript and jQuery -->

</td>
                                </tr>
                                
                                <tr>
                                    <td>{{ cheque.montantC }}</td>
                                    <td>{{ cheque.dateEmission|date }}</td>
                                    <td>{{ cheque.destinationC.getFullName() }}</td>
                                    <td>
                                        <table border=\"1\">
                                            <tr>
                                                <td>categorie</td>
                                                <td>statut</td>
                                                <td> <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent{{ random }}\">
        <ul class=\"navbar-nav mr-auto\">
            <!-- Add your notification dropdown menu here -->
            <li class=\"nav-item dropdown\">
                <!-- Your dropdown trigger button -->
                 {% set a = 0%}
                     {% for REC in RECTraitée %}
                     {% if cheque.getId() == REC.chequeID.getId() %}
                       {% set a = a + 1 %}
                     {% endif %}
                     {% endfor %}
                <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown{{ random }}\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-bell\"></i> <span class=\"badge badge-warning\">{{a}}</span>
                </a>
                
                <!-- Your dropdown menu -->
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdown{{ random }}\">
                    <div class=\"dropdown-header\">You have {{a}} notifications</div>
                  
                     {% for REC in RECTraitée %}
                         {% if cheque.getId() == REC.chequeID.getId() %}
                        
                       <a class=\"dropdown-item\">
                      
                        <i class=\"fa fa-users mr-2 text-aqua\">  
                        la reclamtion {{REC.id}} a été {{REC.statutR}}  </i>


   </a> {% endif %}
  
                  {% endfor %}
                    <!-- Add more notification items here as needed -->
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"{{ path('a11', {'ref': cheque.id}) }}\">clear</a>

                </div>
            </li>
        </ul>
    </div>
</nav>   </td>
                                            </tr>
                                            {% for i in tab %}
                                                {% if cheque == i.chequeID %}
                                                    <tr>
                                                        <td>{{ i.categorie }}</td>
                                                        <td>{{ i.statutR }}</td>
                                                        <td>
                                                            <a href=\"{{ path('Reclamtion_remove1', {'id': i.id}) }}\" class=\"class=\"btn-box\"\">delete</a>
                                                       
                                                            <a href=\"{{ path('rec_edit1', {'ref': i.id}) }}\" class=\"class=\"btn-box\"\">update</a>
                                                        </td>
                                                    </tr>
                                                {% endif %}
                                            {% endfor %}
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href=\"{{ path('cheque_remove1', {'id': cheque.id}) }}\" class=\"class=\"btn-box\"\">delete cheque</a>
                                    </td>
                                    <td>
                                        <a href=\"{{ path('ch1_edit', {'ref': cheque.id}) }}\" class=\"class=\"btn-box\"\">update cheque</a>
                                    </td>
                                    <td>
                                        <a href=\"{{ path('ajouterreclamtion2', {'ref': cheque.id}) }}\" class=\"class=\"btn-box\"\">Add Reclamation</a>
                                    </td>
                                </tr>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
            <div class=\"btn-box\">
                <a href=\"{{ path('generate_pdf', {'ref': ref}) }}\">PDF</a>
            </div>
            <div class=\"btn-box\">
                <a href=\"{{ path('ajoutercheque1', {'ref': ref}) }}\">Add New cheque</a>
            </div>
        </div>
    </div>
</section>
<!-- end service section -->


\t\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js\"></script>
<script>
    // Function to toggle dropdown menu
 
    

    // Toggle dropdown menu when clicking on notification icon
  \$(document).ready(function() {
    \$('.dropdown-toggle').click(function() {
        // Find the dropdown menu associated with the clicked toggle button
        var dropdownMenu = \$(this).closest('.dropdown').find('.dropdown-menu');
        // Toggle the visibility of the dropdown menu
        dropdownMenu.toggleClass('show');
    });
});

</script>

\t\t\t

\t\t\t<!-- info section -->

\t\t\t<section class=\"info_section layout_padding2\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-3 info_col\">
\t\t\t\t\t\t\t<div class=\"info_contact\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\tAddress
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<div class=\"contact_link_box\">
\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tLocation
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tCall +01 1234567890
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tdemo@gmail.com
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"info_social\">
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-3 info_col\">
\t\t\t\t\t\t\t<div class=\"info_detail\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\tInfo
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tnecessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-2 mx-auto info_col\">
\t\t\t\t\t\t\t<div class=\"info_link_box\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\tLinks
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<div class=\"info_links\">
\t\t\t\t\t\t\t\t\t<a class=\"active\" href=\"index.html\">
\t\t\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"about.html\">
\t\t\t\t\t\t\t\t\t\tAbout
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"service.html\">
\t\t\t\t\t\t\t\t\t\tServices
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"why.html\">
\t\t\t\t\t\t\t\t\t\tWhy Us
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"team.html\">
\t\t\t\t\t\t\t\t\t\tTeam
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-3 info_col \">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Enter email\"/>
\t\t\t\t\t\t\t\t<button type=\"submit\">
\t\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<!-- end info section -->

\t\t

\t\t\t<!-- jQery -->
\t\t\t<script type=\"text/javascript\" src=\"front/js/jquery-3.4.1.min.js\"></script>
\t\t\t<!-- popper js -->
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
\t\t\t<!-- bootstrap js -->
\t\t\t<script type=\"text/javascript\" src=\"front/js/bootstrap.js\"></script>
\t\t\t<!-- owl slider -->
\t\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
\t\t\t<!-- custom js -->
\t\t\t<script type=\"text/javascript\" src=\"front/js/custom.js\"></script>
\t\t\t<!-- Google Map -->
\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap\"></script>
\t\t\t<!-- End Google Map -->

\t\t</body>
\t{% endblock %}
    
</html>
", "cheque/front/list.html.twig", "C:\\Users\\Yassin\\Desktop\\Bankify-sal3am\\templates\\cheque\\front\\list.html.twig");
    }
}
