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

/* cheque/front/addCheque.html.twig */
class __TwigTemplate_082aba668e9064c414a2f6f5f7c52480 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/front/addCheque.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/front/addCheque.html.twig"));

        $this->parent = $this->loadTemplate("frontCheque.html.twig", "cheque/front/addCheque.html.twig", 1);
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
        <h1 class=\"text-center\">Add a New Cheque</h1>
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
        
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 9, $this->source); })()), "montantC", [], "any", false, false, false, 9), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Cheque Montant"]);
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 10, $this->source); })()), "montantC", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter cheque montant"]]);
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 11, $this->source); })()), "montantC", [], "any", false, false, false, 11), 'errors');
        echo "  
        </div>
        
        <!-- Add more form fields here as needed -->
        
        <div class=\"form-group\">
            <!-- Example: Select field for destinationC -->
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 18, $this->source); })()), "destinationC", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Destination Compte"]);
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 19, $this->source); })()), "destinationC", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 20, $this->source); })()), "destinationC", [], "any", false, false, false, 20), 'errors');
        echo "  
        </div>
        
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Add Cheque</button>
        </div>
        
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 27, $this->source); })()), 'form_end');
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
        return "cheque/front/addCheque.html.twig";
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
        return array (  114 => 27,  104 => 20,  100 => 19,  96 => 18,  86 => 11,  82 => 10,  78 => 9,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontCheque.html.twig' %}

{% block content %}
    <div class=\"container\">
        <h1 class=\"text-center\">Add a New Cheque</h1>
        {{ form_start(cheque, {'attr': {'novalidate': 'novalidate'}}) }}
        
        <div class=\"form-group\">
            {{ form_label(cheque.montantC, 'Cheque Montant', {'label_attr': {'class': 'col-form-label'}}) }}
            {{ form_widget(cheque.montantC, {'attr': {'class': 'form-control', 'placeholder': 'Enter cheque montant'}}) }}
            {{ form_errors(cheque.montantC) }}  
        </div>
        
        <!-- Add more form fields here as needed -->
        
        <div class=\"form-group\">
            <!-- Example: Select field for destinationC -->
            {{ form_label(cheque.destinationC, 'Destination Compte', {'label_attr': {'class': 'col-form-label'}}) }}
            {{ form_widget(cheque.destinationC, {'attr': {'class': 'form-control'}}) }}
            {{ form_errors(cheque.destinationC) }}  
        </div>
        
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Add Cheque</button>
        </div>
        
        {{ form_end(cheque) }}
    </div>
{% endblock %}
", "cheque/front/addCheque.html.twig", "C:\\Users\\Yassin\\Desktop\\Bankify-sal3am\\templates\\cheque\\front\\addCheque.html.twig");
    }
}
