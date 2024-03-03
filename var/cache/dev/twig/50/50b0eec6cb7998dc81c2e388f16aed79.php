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

/* frontCheque.html.twig */
class __TwigTemplate_db74242a1e14fb87ec823c0cb3cfb6fc extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontCheque.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontCheque.html.twig"));

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
</head>

\t";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 247
        echo "</html>
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

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "\t\t<body>

    <div class=\"hero_area\">

        <div class=\"hero_bg_box\">
            <div class=\"bg_img_box\">
                <img src=\"";
        // line 46
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
\t\t\t\t\t\t
                    </div>
                </nav>
\t\t\t\t
            </div>
\t\t\t<section class=\"service_section layout_padding\">
\t\t\t\t<div class=\"service_container\">
\t\t\t\t\t<div class=\"container \">

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-10 mx-auto\">
\t\t\t\t\t\t\t\t<div class=\"box \">
\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t

                                              ";
        // line 114
        $this->displayBlock('content', $context, $blocks);
        // line 116
        echo "

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
        </header>



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

    // line 114
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 115
        echo "                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "frontCheque.html.twig";
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
        return array (  377 => 115,  367 => 114,  227 => 116,  225 => 114,  154 => 46,  146 => 40,  136 => 39,  125 => 17,  115 => 16,  104 => 247,  102 => 39,  96 => 36,  90 => 33,  84 => 30,  72 => 21,  68 => 19,  66 => 16,  61 => 14,  46 => 1,);
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
\t\t\t\t\t\t
                    </div>
                </nav>
\t\t\t\t
            </div>
\t\t\t<section class=\"service_section layout_padding\">
\t\t\t\t<div class=\"service_container\">
\t\t\t\t\t<div class=\"container \">

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-10 mx-auto\">
\t\t\t\t\t\t\t\t<div class=\"box \">
\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t

                                              {% block content %}
                                            {% endblock %}


\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
        </header>



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
", "frontCheque.html.twig", "C:\\Users\\Yassin\\Downloads\\Bankify\\templates\\frontCheque.html.twig");
    }
}
