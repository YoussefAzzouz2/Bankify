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

/* cheque/back/addRec.html.twig */
class __TwigTemplate_82877cb3b9b7267d8f77deee98c0901c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/back/addRec.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/back/addRec.html.twig"));

        $this->parent = $this->loadTemplate("backbase.html.twig", "cheque/back/addRec.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <h1 style=\"color: #333; text-align: center;\">Add a New reclamation</h1>
    <div style=\"max-width: 500px; margin: 0 auto;\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["class" => "my-form", "novalidate" => "novalidate"]]);
        echo "
        <div style=\"margin-bottom: 20px;\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 7, $this->source); })()), "categorie", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Enter categorie"]]);
        echo "
        </div>
         ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 9, $this->source); })()), "categorie", [], "any", false, false, false, 9), 'errors');
        echo " 
        <div style=\"margin-bottom: 20px;\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 11, $this->source); })()), "statutR", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Enter statutR"]]);
        echo "
        </div>
           ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 13, $this->source); })()), "statutR", [], "any", false, false, false, 13), 'errors');
        echo " 
        <div style=\"text-align: center;\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">Add</button>
        </div>
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cheque/back/addRec.html.twig";
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
        return array (  99 => 17,  92 => 13,  87 => 11,  82 => 9,  77 => 7,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backbase.html.twig' %}
{% block content %}
    <h1 style=\"color: #333; text-align: center;\">Add a New reclamation</h1>
    <div style=\"max-width: 500px; margin: 0 auto;\">
        {{ form_start(reclamation, {'attr': {'class': 'my-form' ,'novalidate': 'novalidate'}}) }}
        <div style=\"margin-bottom: 20px;\">
            {{ form_widget(reclamation.categorie, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Enter categorie'}}) }}
        </div>
         {{ form_errors(reclamation.categorie) }} 
        <div style=\"margin-bottom: 20px;\">
            {{ form_widget(reclamation.statutR, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Enter statutR'}}) }}
        </div>
           {{ form_errors(reclamation.statutR) }} 
        <div style=\"text-align: center;\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">Add</button>
        </div>
        {{ form_end(reclamation) }}
    </div>
{% endblock %}
", "cheque/back/addRec.html.twig", "C:\\Users\\Yassin\\Downloads\\Bankify\\templates\\cheque\\back\\addRec.html.twig");
    }
}
