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

/* cheque/front/AddRe.html.twig */
class __TwigTemplate_36796d1cca751ad48940dc1548b46fa2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/front/AddRe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/front/AddRe.html.twig"));

        $this->parent = $this->loadTemplate("frontCheque.html.twig", "cheque/front/AddRe.html.twig", 1);
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
        echo "    <h1>Add Reclamation</h1>
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reclamtion"]) || array_key_exists("reclamtion", $context) ? $context["reclamtion"] : (function () { throw new RuntimeError('Variable "reclamtion" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "reclamtion-form"]]);
        echo "
    <div class=\"form-group\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reclamtion"]) || array_key_exists("reclamtion", $context) ? $context["reclamtion"] : (function () { throw new RuntimeError('Variable "reclamtion" does not exist.', 7, $this->source); })()), "categorie", [], "any", false, false, false, 7), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Categorie"]);
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reclamtion"]) || array_key_exists("reclamtion", $context) ? $context["reclamtion"] : (function () { throw new RuntimeError('Variable "reclamtion" does not exist.', 8, $this->source); })()), "categorie", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter montant"]]);
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reclamtion"]) || array_key_exists("reclamtion", $context) ? $context["reclamtion"] : (function () { throw new RuntimeError('Variable "reclamtion" does not exist.', 9, $this->source); })()), "categorie", [], "any", false, false, false, 9), 'errors');
        echo "  
    </div>
   
    
    <div class=\"form-group\">
        <button type=\"submit\" class=\"btn btn-primary\" id=\"submit-btn\">Add</button>
    </div>
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reclamtion"]) || array_key_exists("reclamtion", $context) ? $context["reclamtion"] : (function () { throw new RuntimeError('Variable "reclamtion" does not exist.', 16, $this->source); })()), 'form_end');
        echo "

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cheque/front/AddRe.html.twig";
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
        return array (  94 => 16,  84 => 9,  80 => 8,  76 => 7,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontCheque.html.twig' %}

{% block content %}
    <h1>Add Reclamation</h1>
    {{ form_start(reclamtion, {'attr': {'novalidate': 'novalidate', 'id': 'reclamtion-form'}}) }}
    <div class=\"form-group\">
        {{ form_label(reclamtion.categorie, 'Categorie', {'label_attr': {'class': 'col-form-label'}}) }}
        {{ form_widget(reclamtion.categorie, {'attr': {'class': 'form-control', 'placeholder': 'Enter montant'}}) }}
        {{ form_errors(reclamtion.categorie) }}  
    </div>
   
    
    <div class=\"form-group\">
        <button type=\"submit\" class=\"btn btn-primary\" id=\"submit-btn\">Add</button>
    </div>
    {{ form_end(reclamtion) }}

    
{% endblock %}
", "cheque/front/AddRe.html.twig", "C:\\Users\\Yassin\\Downloads\\Bankify\\templates\\cheque\\front\\AddRe.html.twig");
    }
}
