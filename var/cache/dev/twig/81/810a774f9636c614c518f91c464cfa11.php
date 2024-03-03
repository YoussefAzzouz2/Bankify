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

/* cheque/back/edit.html.twig */
class __TwigTemplate_f5f66261ccc243faa34b22a541b7b71d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/back/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/back/edit.html.twig"));

        $this->parent = $this->loadTemplate("backbase.html.twig", "cheque/back/edit.html.twig", 1);
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
        echo "    <h1 style=\"color: #333; text-align: center;\">Modify the cheque</h1>
    <div style=\"max-width: 500px; margin: 0 auto;\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["class" => "my-form", "novalidate" => "novalidate"]]);
        echo "
        <div style=\"margin-bottom: 20px;\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 7, $this->source); })()), "montantC", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Enter montantC"]]);
        echo "
        </div>
          ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 9, $this->source); })()), "montantC", [], "any", false, false, false, 9), 'errors');
        echo " 
        <div style=\"margin-bottom: 20px;\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 11, $this->source); })()), "destinationC", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Enter destinationC"]]);
        echo "
        </div>

         <div style=\"margin-bottom: 20px;\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 15, $this->source); })()), "compteID", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Enter destinationC"]]);
        echo "
        </div>

        <div style=\"text-align: center;\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">Modify</button>
        </div>
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cheque"]) || array_key_exists("cheque", $context) ? $context["cheque"] : (function () { throw new RuntimeError('Variable "cheque" does not exist.', 21, $this->source); })()), 'form_end');
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
        return "cheque/back/edit.html.twig";
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
        return array (  103 => 21,  94 => 15,  87 => 11,  82 => 9,  77 => 7,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backbase.html.twig' %}
{% block content %}
    <h1 style=\"color: #333; text-align: center;\">Modify the cheque</h1>
    <div style=\"max-width: 500px; margin: 0 auto;\">
        {{ form_start(cheque, {'attr': {'class': 'my-form','novalidate': 'novalidate'}}) }}
        <div style=\"margin-bottom: 20px;\">
            {{ form_widget(cheque.montantC, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Enter montantC'}}) }}
        </div>
          {{ form_errors(cheque.montantC) }} 
        <div style=\"margin-bottom: 20px;\">
            {{ form_widget(cheque.destinationC , {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Enter destinationC'}}) }}
        </div>

         <div style=\"margin-bottom: 20px;\">
            {{ form_widget(cheque.compteID, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Enter destinationC'}}) }}
        </div>

        <div style=\"text-align: center;\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">Modify</button>
        </div>
        {{ form_end(cheque) }}
    </div>
{% endblock %}
", "cheque/back/edit.html.twig", "C:\\Users\\Yassin\\Downloads\\Bankify\\templates\\cheque\\back\\edit.html.twig");
    }
}
