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

/* cheque/front/editCh.html.twig */
class __TwigTemplate_12e86087696ff06df32c63e6764a7e8d extends Template
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
        return "frontCheque.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/front/editCh.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/front/editCh.html.twig"));

        $this->parent = $this->loadTemplate("frontCheque.html.twig", "cheque/front/editCh.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <h1 class=\"text-center\">Update Cheque</h1>
       ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
        <div class=\"form-group\">
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 8, $this->source); })()), "montantC", [], "any", false, false, false, 8), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Cheque Montant"]);
        echo "
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 9, $this->source); })()), "montantC", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter cheque montant"]]);
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 10, $this->source); })()), "montantC", [], "any", false, false, false, 10), 'errors');
        echo "  
        </div>
        
        <!-- Add form field for destinationC -->
        <div class=\"form-group\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 15, $this->source); })()), "destinationC", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Destination Compte"]);
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 16, $this->source); })()), "destinationC", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 17, $this->source); })()), "destinationC", [], "any", false, false, false, 17), 'errors');
        echo "  
        </div>
        
        <!-- Add more form fields here as needed -->
        
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Update</button>
        </div>
        ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 25, $this->source); })()), 'form_end');
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
        return "cheque/front/editCh.html.twig";
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
        return array (  112 => 25,  101 => 17,  97 => 16,  93 => 15,  85 => 10,  81 => 9,  77 => 8,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontCheque.html.twig' %}

{% block content %}
    <div class=\"container\">
        <h1 class=\"text-center\">Update Cheque</h1>
       {{ form_start(cheque, {'attr': {'novalidate': 'novalidate'}}) }}
        <div class=\"form-group\">
            {{ form_label(cheque.montantC, 'Cheque Montant', {'label_attr': {'class': 'col-form-label'}}) }}
            {{ form_widget(cheque.montantC, {'attr': {'class': 'form-control', 'placeholder': 'Enter cheque montant'}}) }}
            {{ form_errors(cheque.montantC) }}  
        </div>
        
        <!-- Add form field for destinationC -->
        <div class=\"form-group\">
            {{ form_label(cheque.destinationC, 'Destination Compte', {'label_attr': {'class': 'col-form-label'}}) }}
            {{ form_widget(cheque.destinationC, {'attr': {'class': 'form-control'}}) }}
            {{ form_errors(cheque.destinationC) }}  
        </div>
        
        <!-- Add more form fields here as needed -->
        
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Update</button>
        </div>
        {{ form_end(cheque) }}
    </div>
{% endblock %}
", "cheque/front/editCh.html.twig", "C:\\Users\\Yassin\\Desktop\\Bankify-sal3am\\templates\\cheque\\front\\editCh.html.twig");
    }
}
