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

/* backbase.html.twig */
class __TwigTemplate_52f66140a86c28016cecb589ef021873 extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backbase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backbase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 33
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
</head>

\t";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 1229
        echo "</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "        <title>AdminLTE 2 | Dashboard</title>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "        <!-- Bootstrap 3.3.2 -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- FontAwesome 4.3.0 -->
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- Ionicons 2.0.0 -->
        <link href=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- Theme style -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- iCheck -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- Morris chart -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- jvectormap -->
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- Date Picker -->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- Daterange picker -->
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- bootstrap wysihtml5 - text editor -->
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "\t\t<body class=\"skin-blue\">
\t\t\t<div class=\"wrapper\">
\t\t\t\t";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 284
        echo "\t\t\t\t<!-- Left side column. contains the logo and sidebar -->
\t\t\t\t<aside
\t\t\t\t\tclass=\"main-sidebar\">
\t\t\t\t\t<!-- sidebar: style can be found in sidebar.less -->
\t\t\t\t\t<section
\t\t\t\t\t\tclass=\"sidebar\">
\t\t\t\t\t\t<!-- Sidebar user panel -->
\t\t\t\t\t\t<div class=\"user-panel\">
\t\t\t\t\t\t\t<div class=\"pull-left image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"pull-left info\">
\t\t\t\t\t\t\t\t<p>Alexander Pierce</p>

\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle text-success\"></i>
\t\t\t\t\t\t\t\t\tOnline</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- search form -->
\t\t\t\t\t\t<form action=\"#\" method=\"get\" class=\"sidebar-form\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type='submit' name='search' id='search-btn' class=\"btn btn-flat\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<!-- /.search form -->
\t\t\t\t\t\t<!-- sidebar menu: : style can be found in sidebar.less -->
\t\t\t\t\t\t<ul class=\"sidebar-menu\">
\t\t\t\t\t\t\t<li class=\"header\">MAIN NAVIGATION</li>
\t\t\t\t\t\t\t<li class=\"active treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tDashboard v1</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"index2.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tDashboard v2</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-files-o\"></i>
\t\t\t\t\t\t\t\t\t<span>Layout Options</span>
\t\t\t\t\t\t\t\t\t<span class=\"label label-primary pull-right\">4</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/top-nav.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tTop Navigation</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/boxed.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tBoxed</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/fixed.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tFixed</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/collapsed-sidebar.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tCollapsed Sidebar</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 367
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cheque_list");
        echo "\">
                              <i class=\"fa fa-th\"></i>
                           <span>Cheques</span>
                             <small class=\"label pull-right bg-green\">new</small>
</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pie-chart\"></i>
\t\t\t\t\t\t\t\t\t<span>Charts</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/charts/morris.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tMorris</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/charts/flot.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tFlot</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/charts/inline.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tInline charts</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-laptop\"></i>
\t\t\t\t\t\t\t\t\t<span>UI Elements</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/general.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tGeneral</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/icons.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tIcons</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/buttons.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tButtons</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/sliders.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tSliders</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/timeline.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tTimeline</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/modals.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tModals</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t<span>Forms</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/forms/general.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tGeneral Elements</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/forms/advanced.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tAdvanced Elements</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/forms/editors.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tEditors</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-table\"></i>
\t\t\t\t\t\t\t\t\t<span>Tables</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/tables/simple.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tSimple tables</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/tables/data.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tData tables</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"pages/calendar.html\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t<span>Calendar</span>
\t\t\t\t\t\t\t\t\t<small class=\"label pull-right bg-red\">3</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"pages/mailbox/mailbox.html\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t<span>Mailbox</span>
\t\t\t\t\t\t\t\t\t<small class=\"label pull-right bg-yellow\">12</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Examples</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tInvoice</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/login.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tLogin</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/register.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tRegister</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/lockscreen.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tLockscreen</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/404.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t404 Error</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/500.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t500 Error</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/blank.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tBlank Page</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-share\"></i>
\t\t\t\t\t\t\t\t\t<span>Multilevel</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tLevel One</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tLevel One
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tLevel Two</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tLevel Two
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLevel Three</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLevel Three</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tLevel One</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"documentation/index.html\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-book\"></i>
\t\t\t\t\t\t\t\t\tDocumentation</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header\">LABELS</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o text-danger\"></i>
\t\t\t\t\t\t\t\t\tImportant</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o text-warning\"></i>
\t\t\t\t\t\t\t\t\tWarning</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o text-info\"></i>
\t\t\t\t\t\t\t\t\tInformation</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- /.sidebar -->
\t\t\t\t</aside>

\t\t\t\t<!-- Right side column. Contains the navbar and content of the page -->
\t\t\t\t<div
\t\t\t\t\tclass=\"content-wrapper\">
\t\t\t\t\t<!-- Content Header (Page header) -->
\t\t\t\t\t<section class=\"content-header\"></section>
\t\t\t\t\t";
        // line 620
        $this->displayBlock('content', $context, $blocks);
        // line 1180
        echo "
\t\t\t</div>
\t\t\t
\t\t\t<!-- ./wrapper -->
\t\t\t";
        // line 1184
        $this->displayBlock('js', $context, $blocks);
        // line 1226
        echo "
\t\t</body>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 45
        echo "\t\t\t\t\t<header
\t\t\t\t\t\tclass=\"main-header\">
\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t<a href=\"index2.html\" class=\"logo\">
\t\t\t\t\t\t\t<b>Admin</b>LTE</a>
\t\t\t\t\t\t<!-- Header Navbar: style can be found in header.less -->
\t\t\t\t\t\t<nav
\t\t\t\t\t\t\tclass=\"navbar navbar-static-top\" role=\"navigation\">
\t\t\t\t\t\t\t<!-- Sidebar toggle button-->
\t\t\t\t\t\t\t<a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"navbar-custom-menu\">
\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\tclass=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t\t<!-- Messages: style can be found in dropdown.less-->
\t\t\t\t\t\t\t\t\t<li class=\"dropdown messages-menu\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">4</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"header\">You have 4 messages</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- start message -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSupport Team
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t5 mins</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end message -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo " \"class=\"img-circle\" alt=\"user image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAdminLTE Design Team
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 hours</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDevelopers
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tToday</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">See All Messages</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!-- Notifications: style can be found in dropdown.less -->
\t\t\t\t\t\t\t\t\t";
        // line 129
        $context["REC1"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "session", [], "any", false, false, false, 129), "get", ["REC1"], "method", false, false, false, 129);
        // line 130
        echo "\t\t\t\t\t\t\t\t\t   ";
        $context["a"] = 0;
        // line 131
        echo "\t\t\t\t\t\t\t\t\t       ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["REC1"]) || array_key_exists("REC1", $context) ? $context["REC1"] : (function () { throw new RuntimeError('Variable "REC1" does not exist.', 131, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["REC"]) {
            // line 132
            echo "             
         ";
            // line 133
            $context["a"] = ((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 133, $this->source); })()) + 1);
            // line 134
            echo "                        
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['REC'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "\t\t\t\t\t\t\t\t\t<li class=\"dropdown notifications-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-bell-o\"></i>
        <span class=\"label label-warning\">";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">You have ";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 142, $this->source); })()), "html", null, true);
        echo " notifications</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["REC1"]) || array_key_exists("REC1", $context) ? $context["REC1"] : (function () { throw new RuntimeError('Variable "REC1" does not exist.', 146, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["REC"]) {
            // line 147
            echo "                    <li>
                        <a href=\"\">
                            <i class=\"fa fa-users text-aqua\"></i>
                            la reclamtion ";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["REC"], "id", [], "any", false, false, false, 150), "html", null, true);
            echo " du cheque  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["REC"], "getChequeID", [], "method", false, false, false, 150), "getId", [], "method", false, false, false, 150), "html", null, true);
            echo " est ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["REC"], "statutR", [], "any", false, false, false, 150), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['REC'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "            </ul>
        </li>
        <li class=\"footer\">
            <a href=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("a2");
        echo "\">clear</a>
        </li>
    </ul>
</li>

\t\t\t\t\t\t\t\t\t<!-- Tasks: style can be found in dropdown.less -->
\t\t\t\t\t\t\t\t\t<li class=\"dropdown tasks-menu\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-flag-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">9</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"header\">You have 9 tasks</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDesign some buttons
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">20%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">20% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCreate a nice theme
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">40%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">40% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSome task I need to do
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">60%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">60% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMake beautiful transitions
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">80%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">80% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">View all tasks</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!-- User Account: style can be found in dropdown.less -->
\t\t\t\t\t\t\t\t\t<li class=\"dropdown user user-menu\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\t\t\tclass=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<!-- User image -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"user-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tAlexander Pierce - Web Developer
\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Member since Nov. 2012</small>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- Menu Body -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"user-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Followers</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Sales</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Friends</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- Menu Footer-->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"user-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</header>
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 620
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 621
        echo "\t\t\t\t\t\t<!-- Main content -->
\t\t\t\t\t\t<section
\t\t\t\t\t\t\tclass=\"content\">
\t\t\t\t\t\t\t<!-- Small boxes (Stat box) -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-xs-6\">
\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-aqua\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<h3>150</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>New Orders</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-bag\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-xs-6\">
\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-green\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<h3>53<sup style=\"font-size: 20px\">%</sup>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>Bounce Rate</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-stats-bars\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-xs-6\">
\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-yellow\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<h3>44</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>User Registrations</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-person-add\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-xs-6\">
\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-red\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<h3>65</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>Unique Visitors</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-pie-graph\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t<!-- Main row -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t<!-- Left col -->
\t\t\t\t\t\t\t\t<section
\t\t\t\t\t\t\t\t\tclass=\"col-lg-7 connectedSortable\">
\t\t\t\t\t\t\t\t\t<!-- Custom tabs (Charts with tabs)-->
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"nav-tabs-custom\">
\t\t\t\t\t\t\t\t\t\t<!-- Tabs within a box -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#revenue-chart\" data-toggle=\"tab\">Area</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#sales-chart\" data-toggle=\"tab\">Donut</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"pull-left header\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-inbox\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSales</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-content no-padding\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Morris chart - Sales -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart tab-pane active\" id=\"revenue-chart\" style=\"position: relative; height: 300px;\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.nav-tabs-custom -->

\t\t\t\t\t\t\t\t\t<!-- Chat box -->
\t\t\t\t\t\t\t\t\t<div class=\"box box-success\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Chat</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-tools pull-right\" data-toggle=\"tooltip\" title=\"Status\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"btn-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square text-green\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square text-red\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"box-body chat\" id=\"chat-box\">
\t\t\t\t\t\t\t\t\t\t\t<!-- chat item -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user4-128x128.jpg\" alt=\"user image\" class=\"online\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2:15</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tMike Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\tI would like to meet you to discuss the latest news about
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                      the arrival of the new theme. They say it is going to be one the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                      best themes on the market
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"attachment\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Attachments:</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"filename\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tTheme-thumbnail-image.jpg
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm btn-flat\">Open</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.attachment -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.item -->
\t\t\t\t\t\t\t\t\t\t\t<!-- chat item -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user3-128x128.jpg\" alt=\"user image\" class=\"offline\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t5:15</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tAlexander Pierce
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\tI would like to meet you to discuss the latest news about
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                      the arrival of the new theme. They say it is going to be one the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                      best themes on the market
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.item -->
\t\t\t\t\t\t\t\t\t\t\t<!-- chat item -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user2-160x160.jpg\" alt=\"user image\" class=\"offline\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t5:30</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSusan Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\tI would like to meet you to discuss the latest news about
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                      the arrival of the new theme. They say it is going to be one the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                      best themes on the market
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.item -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.chat -->
\t\t\t\t\t\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Type message...\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.box (chat box) -->

\t\t\t\t\t\t\t\t\t<!-- TO DO List -->
\t\t\t\t\t\t\t\t\t<div class=\"box box-primary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-clipboard\"></i>
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">To Do List</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"pagination pagination-sm inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">&laquo;</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">3</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">&raquo;</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"todo-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- drag handle -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- checkbox -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\" value=\"\" name=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- todo text -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Design a nice theme</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Emphasis label -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 mins</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- General tools such as edit or delete-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Make the theme responsive</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t4 hours</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t1 day</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t3 days</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Check your messages and notifications</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t1 week</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t1 month</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t\t\t\t<div class=\"box-footer clearfix no-border\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tAdd item</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.box -->

\t\t\t\t\t\t\t\t\t<!-- quick email widget -->
\t\t\t\t\t\t\t\t\t<div class=\"box box-info\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Quick Email</h3>
\t\t\t\t\t\t\t\t\t\t\t<!-- tools box -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right box-tools\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-sm\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /. tools -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"emailto\" placeholder=\"Email to:\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"textarea\" placeholder=\"Message\" style=\"width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-footer clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"pull-right btn btn-default\" id=\"sendEmail\">Send
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<!-- /.Left col -->
\t\t\t\t\t\t\t\t<!-- right col (We are only adding the ID to make the widgets sortable)-->
\t\t\t\t\t\t\t\t<section
\t\t\t\t\t\t\t\t\tclass=\"col-lg-5 connectedSortable\">

\t\t\t\t\t\t\t\t\t<!-- Map box -->
\t\t\t\t\t\t\t\t\t<div class=\"box box-solid bg-light-blue-gradient\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"box-header\">
\t\t\t\t\t\t\t\t\t\t\t<!-- tools box -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right box-tools\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm daterange pull-right\" data-toggle=\"tooltip\" title=\"Date range\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm pull-right\" data-widget='collapse' data-toggle=\"tooltip\" title=\"Collapse\" style=\"margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /. tools -->

\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">
\t\t\t\t\t\t\t\t\t\t\t\tVisitors
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-body-->
\t\t\t\t\t\t\t\t\t\t<div class=\"box-footer no-border\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sparkline-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"knob-label\">Visitors</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sparkline-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"knob-label\">Online</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sparkline-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"knob-label\">Exists</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.box -->

\t\t\t\t\t\t\t\t\t<!-- solid sales graph -->
\t\t\t\t\t\t\t\t\t<div class=\"box box-solid bg-teal-gradient\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Sales Graph</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn bg-teal btn-sm\" data-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn bg-teal btn-sm\" data-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-body border-radius-none\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart\" id=\"line-chart\" style=\"height: 250px;\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t\t\t\t<div class=\"box-footer no-border\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"knob-label\">Mail-Orders</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"knob-label\">Online</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"knob-label\">In-Store</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-footer -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.box -->

\t\t\t\t\t\t\t\t\t<!-- Calendar -->
\t\t\t\t\t\t\t\t\t<div class=\"box box-solid bg-green-gradient\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Calendar</h3>
\t\t\t\t\t\t\t\t\t\t\t<!-- tools box -->
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"pull-right box-tools\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- button with a dropdown -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu pull-right\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add new event</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Clear events</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">View calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" data-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" data-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /. tools -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"box-body no-padding\">
\t\t\t\t\t\t\t\t\t\t\t<!--The calendar -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"calendar\" style=\"width: 100%\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t\t\t\t<div class=\"box-footer text-black\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Progress bars -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Task #1</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">90%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-green\" style=\"width: 90%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Task #2</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">70%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-green\" style=\"width: 70%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Task #3</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">60%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-green\" style=\"width: 60%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Task #4</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">40%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-green\" style=\"width: 40%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.box -->

\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<!-- right col -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.row (main row) -->

\t\t\t\t\t\t</section>

\t\t\t\t\t\t<!-- /.content -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.content-wrapper -->
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1184
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 1185
        echo "    <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 1186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src=\"https://code.jquery.com/ui/1.11.2/jquery-ui.min.js\" type=\"text/javascript\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 1194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Morris.js charts -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
    <script src=\"";
        // line 1197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 1199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 1201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 1204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 1206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 1208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 1210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 1212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 1214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 1216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 1218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 1221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/pages/dashboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 1224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backbase.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1547 => 1224,  1541 => 1221,  1535 => 1218,  1530 => 1216,  1525 => 1214,  1520 => 1212,  1515 => 1210,  1510 => 1208,  1505 => 1206,  1500 => 1204,  1495 => 1202,  1491 => 1201,  1486 => 1199,  1481 => 1197,  1475 => 1194,  1464 => 1186,  1461 => 1185,  1451 => 1184,  883 => 621,  873 => 620,  829 => 250,  819 => 243,  730 => 157,  725 => 154,  711 => 150,  706 => 147,  702 => 146,  695 => 142,  689 => 139,  684 => 136,  677 => 134,  675 => 133,  672 => 132,  667 => 131,  664 => 130,  662 => 129,  634 => 104,  617 => 90,  599 => 75,  567 => 45,  557 => 44,  545 => 1226,  543 => 1184,  537 => 1180,  535 => 620,  279 => 367,  202 => 293,  191 => 284,  189 => 44,  185 => 42,  175 => 41,  163 => 31,  158 => 29,  153 => 27,  148 => 25,  143 => 23,  138 => 21,  133 => 19,  128 => 17,  119 => 11,  116 => 10,  106 => 9,  95 => 6,  85 => 5,  74 => 1229,  72 => 41,  62 => 33,  60 => 9,  57 => 8,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    {% block title %}
        <title>AdminLTE 2 | Dashboard</title>
    {% endblock %}
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {% block css %}
        <!-- Bootstrap 3.3.2 -->
        <link href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- FontAwesome 4.3.0 -->
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- Ionicons 2.0.0 -->
        <link href=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- Theme style -->
        <link href=\"{{ asset('dist/css/AdminLTE.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link href=\"{{ asset('dist/css/skins/_all-skins.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- iCheck -->
        <link href=\"{{ asset('plugins/iCheck/flat/blue.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- Morris chart -->
        <link href=\"{{ asset('plugins/morris/morris.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- jvectormap -->
        <link href=\"{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- Date Picker -->
        <link href=\"{{ asset('plugins/datepicker/datepicker3.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- Daterange picker -->
        <link href=\"{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- bootstrap wysihtml5 - text editor -->
        <link href=\"{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    {% endblock %}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
</head>

\t{% block body %}
\t\t<body class=\"skin-blue\">
\t\t\t<div class=\"wrapper\">
\t\t\t\t{% block header %}
\t\t\t\t\t<header
\t\t\t\t\t\tclass=\"main-header\">
\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t<a href=\"index2.html\" class=\"logo\">
\t\t\t\t\t\t\t<b>Admin</b>LTE</a>
\t\t\t\t\t\t<!-- Header Navbar: style can be found in header.less -->
\t\t\t\t\t\t<nav
\t\t\t\t\t\t\tclass=\"navbar navbar-static-top\" role=\"navigation\">
\t\t\t\t\t\t\t<!-- Sidebar toggle button-->
\t\t\t\t\t\t\t<a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"navbar-custom-menu\">
\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\tclass=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t\t<!-- Messages: style can be found in dropdown.less-->
\t\t\t\t\t\t\t\t\t<li class=\"dropdown messages-menu\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">4</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"header\">You have 4 messages</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- start message -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"dist/img/user2-160x160.jpg\")}}\" class=\"img-circle\" alt=\"User Image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSupport Team
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t5 mins</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end message -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"dist/img/user3-128x128.jpg\")}} \"class=\"img-circle\" alt=\"user image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAdminLTE Design Team
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 hours</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"dist/img/user4-128x128.jpg\")}}\" class=\"img-circle\" alt=\"user image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDevelopers
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tToday</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">See All Messages</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!-- Notifications: style can be found in dropdown.less -->
\t\t\t\t\t\t\t\t\t{% set REC1 = app.session.get('REC1') %}
\t\t\t\t\t\t\t\t\t   {% set a = 0%}
\t\t\t\t\t\t\t\t\t       {% for REC in REC1 %}
             
         {% set a = a + 1 %}
                        
                     {% endfor %}
\t\t\t\t\t\t\t\t\t<li class=\"dropdown notifications-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-bell-o\"></i>
        <span class=\"label label-warning\">{{a}}</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">You have {{a}} notifications</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                {% for REC in REC1 %}
                    <li>
                        <a href=\"\">
                            <i class=\"fa fa-users text-aqua\"></i>
                            la reclamtion {{ REC.id }} du cheque  {{REC.getChequeID().getId()}} est {{ REC.statutR }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </li>
        <li class=\"footer\">
            <a href=\"{{ path('a2') }}\">clear</a>
        </li>
    </ul>
</li>

\t\t\t\t\t\t\t\t\t<!-- Tasks: style can be found in dropdown.less -->
\t\t\t\t\t\t\t\t\t<li class=\"dropdown tasks-menu\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-flag-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">9</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"header\">You have 9 tasks</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDesign some buttons
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">20%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">20% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCreate a nice theme
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">40%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">40% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSome task I need to do
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">60%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">60% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMake beautiful transitions
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">80%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">80% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">View all tasks</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!-- User Account: style can be found in dropdown.less -->
\t\t\t\t\t\t\t\t\t<li class=\"dropdown user user-menu\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"dist/img/user2-160x160.jpg\")}}\" class=\"user-image\" alt=\"User Image\"/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\t\t\tclass=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<!-- User image -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"user-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"dist/img/user2-160x160.jpg\")}}\" class=\"img-circle\" alt=\"User Image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tAlexander Pierce - Web Developer
\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Member since Nov. 2012</small>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- Menu Body -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"user-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Followers</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Sales</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Friends</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- Menu Footer-->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"user-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</header>
\t\t\t\t{% endblock %}
\t\t\t\t<!-- Left side column. contains the logo and sidebar -->
\t\t\t\t<aside
\t\t\t\t\tclass=\"main-sidebar\">
\t\t\t\t\t<!-- sidebar: style can be found in sidebar.less -->
\t\t\t\t\t<section
\t\t\t\t\t\tclass=\"sidebar\">
\t\t\t\t\t\t<!-- Sidebar user panel -->
\t\t\t\t\t\t<div class=\"user-panel\">
\t\t\t\t\t\t\t<div class=\"pull-left image\">
\t\t\t\t\t\t\t\t<img src=\"{{asset(\"dist/img/user2-160x160.jpg\")}}\" class=\"img-circle\" alt=\"User Image\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"pull-left info\">
\t\t\t\t\t\t\t\t<p>Alexander Pierce</p>

\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle text-success\"></i>
\t\t\t\t\t\t\t\t\tOnline</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- search form -->
\t\t\t\t\t\t<form action=\"#\" method=\"get\" class=\"sidebar-form\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type='submit' name='search' id='search-btn' class=\"btn btn-flat\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<!-- /.search form -->
\t\t\t\t\t\t<!-- sidebar menu: : style can be found in sidebar.less -->
\t\t\t\t\t\t<ul class=\"sidebar-menu\">
\t\t\t\t\t\t\t<li class=\"header\">MAIN NAVIGATION</li>
\t\t\t\t\t\t\t<li class=\"active treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-dashboard\"></i>
\t\t\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tDashboard v1</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"index2.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tDashboard v2</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-files-o\"></i>
\t\t\t\t\t\t\t\t\t<span>Layout Options</span>
\t\t\t\t\t\t\t\t\t<span class=\"label label-primary pull-right\">4</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/top-nav.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tTop Navigation</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/boxed.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tBoxed</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/fixed.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tFixed</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/collapsed-sidebar.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tCollapsed Sidebar</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('cheque_list') }}\">
                              <i class=\"fa fa-th\"></i>
                           <span>Cheques</span>
                             <small class=\"label pull-right bg-green\">new</small>
</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pie-chart\"></i>
\t\t\t\t\t\t\t\t\t<span>Charts</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/charts/morris.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tMorris</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/charts/flot.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tFlot</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/charts/inline.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tInline charts</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-laptop\"></i>
\t\t\t\t\t\t\t\t\t<span>UI Elements</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/general.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tGeneral</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/icons.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tIcons</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/buttons.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tButtons</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/sliders.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tSliders</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/timeline.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tTimeline</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/modals.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tModals</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t<span>Forms</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/forms/general.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tGeneral Elements</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/forms/advanced.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tAdvanced Elements</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/forms/editors.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tEditors</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-table\"></i>
\t\t\t\t\t\t\t\t\t<span>Tables</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/tables/simple.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tSimple tables</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/tables/data.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tData tables</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"pages/calendar.html\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t<span>Calendar</span>
\t\t\t\t\t\t\t\t\t<small class=\"label pull-right bg-red\">3</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"pages/mailbox/mailbox.html\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t<span>Mailbox</span>
\t\t\t\t\t\t\t\t\t<small class=\"label pull-right bg-yellow\">12</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Examples</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tInvoice</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/login.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tLogin</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/register.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tRegister</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/lockscreen.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tLockscreen</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/404.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t404 Error</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/500.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t500 Error</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/blank.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tBlank Page</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-share\"></i>
\t\t\t\t\t\t\t\t\t<span>Multilevel</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tLevel One</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tLevel One
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tLevel Two</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tLevel Two
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLevel Three</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLevel Three</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\tLevel One</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"documentation/index.html\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-book\"></i>
\t\t\t\t\t\t\t\t\tDocumentation</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"header\">LABELS</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o text-danger\"></i>
\t\t\t\t\t\t\t\t\tImportant</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o text-warning\"></i>
\t\t\t\t\t\t\t\t\tWarning</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o text-info\"></i>
\t\t\t\t\t\t\t\t\tInformation</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- /.sidebar -->
\t\t\t\t</aside>

\t\t\t\t<!-- Right side column. Contains the navbar and content of the page -->
\t\t\t\t<div
\t\t\t\t\tclass=\"content-wrapper\">
\t\t\t\t\t<!-- Content Header (Page header) -->
\t\t\t\t\t<section class=\"content-header\"></section>
\t\t\t\t\t{% block content %}
\t\t\t\t\t\t<!-- Main content -->
\t\t\t\t\t\t<section
\t\t\t\t\t\t\tclass=\"content\">
\t\t\t\t\t\t\t<!-- Small boxes (Stat box) -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-xs-6\">
\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-aqua\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<h3>150</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>New Orders</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-bag\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-xs-6\">
\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-green\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<h3>53<sup style=\"font-size: 20px\">%</sup>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>Bounce Rate</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-stats-bars\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-xs-6\">
\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-yellow\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<h3>44</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>User Registrations</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-person-add\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-xs-6\">
\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-red\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<h3>65</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>Unique Visitors</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-pie-graph\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t<!-- Main row -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t<!-- Left col -->
\t\t\t\t\t\t\t\t<section
\t\t\t\t\t\t\t\t\tclass=\"col-lg-7 connectedSortable\">
\t\t\t\t\t\t\t\t\t<!-- Custom tabs (Charts with tabs)-->
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"nav-tabs-custom\">
\t\t\t\t\t\t\t\t\t\t<!-- Tabs within a box -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#revenue-chart\" data-toggle=\"tab\">Area</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#sales-chart\" data-toggle=\"tab\">Donut</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"pull-left header\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-inbox\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSales</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-content no-padding\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Morris chart - Sales -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart tab-pane active\" id=\"revenue-chart\" style=\"position: relative; height: 300px;\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.nav-tabs-custom -->

\t\t\t\t\t\t\t\t\t<!-- Chat box -->
\t\t\t\t\t\t\t\t\t<div class=\"box box-success\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Chat</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-tools pull-right\" data-toggle=\"tooltip\" title=\"Status\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"btn-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square text-green\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square text-red\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"box-body chat\" id=\"chat-box\">
\t\t\t\t\t\t\t\t\t\t\t<!-- chat item -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user4-128x128.jpg\" alt=\"user image\" class=\"online\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2:15</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tMike Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\tI would like to meet you to discuss the latest news about
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                      the arrival of the new theme. They say it is going to be one the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                      best themes on the market
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"attachment\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Attachments:</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"filename\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tTheme-thumbnail-image.jpg
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm btn-flat\">Open</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.attachment -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.item -->
\t\t\t\t\t\t\t\t\t\t\t<!-- chat item -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user3-128x128.jpg\" alt=\"user image\" class=\"offline\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t5:15</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tAlexander Pierce
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\tI would like to meet you to discuss the latest news about
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                      the arrival of the new theme. They say it is going to be one the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                      best themes on the market
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.item -->
\t\t\t\t\t\t\t\t\t\t\t<!-- chat item -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user2-160x160.jpg\" alt=\"user image\" class=\"offline\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t5:30</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSusan Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\tI would like to meet you to discuss the latest news about
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                      the arrival of the new theme. They say it is going to be one the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                      best themes on the market
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.item -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.chat -->
\t\t\t\t\t\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Type message...\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.box (chat box) -->

\t\t\t\t\t\t\t\t\t<!-- TO DO List -->
\t\t\t\t\t\t\t\t\t<div class=\"box box-primary\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-clipboard\"></i>
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">To Do List</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"pagination pagination-sm inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">&laquo;</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">3</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">&raquo;</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"todo-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- drag handle -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- checkbox -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\" value=\"\" name=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- todo text -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Design a nice theme</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Emphasis label -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 mins</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- General tools such as edit or delete-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Make the theme responsive</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t4 hours</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t1 day</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t3 days</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Check your messages and notifications</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t1 week</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t1 month</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t\t\t\t<div class=\"box-footer clearfix no-border\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tAdd item</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.box -->

\t\t\t\t\t\t\t\t\t<!-- quick email widget -->
\t\t\t\t\t\t\t\t\t<div class=\"box box-info\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Quick Email</h3>
\t\t\t\t\t\t\t\t\t\t\t<!-- tools box -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right box-tools\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-sm\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /. tools -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"emailto\" placeholder=\"Email to:\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"textarea\" placeholder=\"Message\" style=\"width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-footer clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"pull-right btn btn-default\" id=\"sendEmail\">Send
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<!-- /.Left col -->
\t\t\t\t\t\t\t\t<!-- right col (We are only adding the ID to make the widgets sortable)-->
\t\t\t\t\t\t\t\t<section
\t\t\t\t\t\t\t\t\tclass=\"col-lg-5 connectedSortable\">

\t\t\t\t\t\t\t\t\t<!-- Map box -->
\t\t\t\t\t\t\t\t\t<div class=\"box box-solid bg-light-blue-gradient\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"box-header\">
\t\t\t\t\t\t\t\t\t\t\t<!-- tools box -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right box-tools\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm daterange pull-right\" data-toggle=\"tooltip\" title=\"Date range\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm pull-right\" data-widget='collapse' data-toggle=\"tooltip\" title=\"Collapse\" style=\"margin-right: 5px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /. tools -->

\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">
\t\t\t\t\t\t\t\t\t\t\t\tVisitors
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-body-->
\t\t\t\t\t\t\t\t\t\t<div class=\"box-footer no-border\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sparkline-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"knob-label\">Visitors</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sparkline-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"knob-label\">Online</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sparkline-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"knob-label\">Exists</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.box -->

\t\t\t\t\t\t\t\t\t<!-- solid sales graph -->
\t\t\t\t\t\t\t\t\t<div class=\"box box-solid bg-teal-gradient\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Sales Graph</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn bg-teal btn-sm\" data-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn bg-teal btn-sm\" data-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-body border-radius-none\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart\" id=\"line-chart\" style=\"height: 250px;\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t\t\t\t<div class=\"box-footer no-border\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"knob-label\">Mail-Orders</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"knob-label\">Online</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"knob-label\">In-Store</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-footer -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.box -->

\t\t\t\t\t\t\t\t\t<!-- Calendar -->
\t\t\t\t\t\t\t\t\t<div class=\"box box-solid bg-green-gradient\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Calendar</h3>
\t\t\t\t\t\t\t\t\t\t\t<!-- tools box -->
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"pull-right box-tools\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- button with a dropdown -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu pull-right\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add new event</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Clear events</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">View calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" data-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" data-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /. tools -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"box-body no-padding\">
\t\t\t\t\t\t\t\t\t\t\t<!--The calendar -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"calendar\" style=\"width: 100%\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t\t\t\t<div class=\"box-footer text-black\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Progress bars -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Task #1</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">90%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-green\" style=\"width: 90%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Task #2</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">70%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-green\" style=\"width: 70%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Task #3</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">60%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-green\" style=\"width: 60%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Task #4</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">40%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-green\" style=\"width: 40%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.box -->

\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<!-- right col -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.row (main row) -->

\t\t\t\t\t\t</section>

\t\t\t\t\t\t<!-- /.content -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.content-wrapper -->
\t\t\t\t{% endblock %}

\t\t\t</div>
\t\t\t
\t\t\t<!-- ./wrapper -->
\t\t\t{% block js %}
    <!-- jQuery 2.1.3 -->
    <script src=\"{{ asset('plugins/jQuery/jQuery-2.1.3.min.js') }}\"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src=\"https://code.jquery.com/ui/1.11.2/jquery-ui.min.js\" type=\"text/javascript\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
    <!-- Morris.js charts -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
    <script src=\"{{ asset('plugins/morris/morris.min.js') }}\" type=\"text/javascript\"></script>
    <!-- Sparkline -->
    <script src=\"{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}\" type=\"text/javascript\"></script>
    <!-- jvectormap -->
    <script src=\"{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}\" type=\"text/javascript\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"{{ asset('plugins/knob/jquery.knob.js') }}\" type=\"text/javascript\"></script>
    <!-- daterangepicker -->
    <script src=\"{{ asset('plugins/daterangepicker/daterangepicker.js') }}\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}\" type=\"text/javascript\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}\" type=\"text/javascript\"></script>
    <!-- iCheck -->
    <script src=\"{{ asset('plugins/iCheck/icheck.min.js') }}\" type=\"text/javascript\"></script>
    <!-- Slimscroll -->
    <script src=\"{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src=\"{{ asset('plugins/fastclick/fastclick.min.js') }}\"></script>
    <!-- AdminLTE App -->
    <script src=\"{{ asset('dist/js/app.min.js') }}\" type=\"text/javascript\"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"{{ asset('dist/js/pages/dashboard.js') }}\" type=\"text/javascript\"></script>

    <!-- AdminLTE for demo purposes -->
    <script src=\"{{ asset('dist/js/demo.js') }}\" type=\"text/javascript\"></script>
{% endblock %}

\t\t</body>
\t{% endblock %}
</html>
", "backbase.html.twig", "C:\\Users\\Yassin\\Downloads\\Bankify\\templates\\backbase.html.twig");
    }
}
