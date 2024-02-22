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

/* cheque/back/editRec.html.twig */
class __TwigTemplate_eeedbfa5cac553c977996f59330f53f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/back/editRec.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/back/editRec.html.twig"));

        $this->parent = $this->loadTemplate("backbase.html.twig", "cheque/back/editRec.html.twig", 1);
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
        echo "<style>
    .response-input {
        height: 50px; /* Adjust the height as needed */
        font-size: 18px; /* Adjust the font size as needed */
    }
</style>
    <h1 style=\"color: #333; text-align: center;\">Modify Reclamation</h1>
    <div style=\"max-width: 500px; margin: 0 auto;\">
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "my-form", "novalidate" => "novalidate"]]);
        echo "
        <div style=\"margin-bottom: 20px;\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 14, $this->source); })()), "categorie", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Enter categorie"]]);
        echo "
        </div>
        <div style=\"margin-bottom: 20px;\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 17, $this->source); })()), "statutR", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Enter statut"]]);
        echo "
        </div>
        <!-- Additional input field for response type text grande -->
       <div style=\"margin-bottom: 20px;\">
    <textarea id=\"response\" name=\"response\" class=\"form-control form-control-lg response-input\" placeholder=\"Enter response\" rows=\"6\"></textarea>
        </div>
        <div style=\"text-align: center;\">
            <button type=\"submit\"  onclick=\"validateResponse()\" class=\"btn btn-primary btn-lg\">Modify</button>
        </div>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 26, $this->source); })()), 'form_end');
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
        return "cheque/back/editRec.html.twig";
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
        return array (  101 => 26,  89 => 17,  83 => 14,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backbase.html.twig' %}

{% block content %}
<style>
    .response-input {
        height: 50px; /* Adjust the height as needed */
        font-size: 18px; /* Adjust the font size as needed */
    }
</style>
    <h1 style=\"color: #333; text-align: center;\">Modify Reclamation</h1>
    <div style=\"max-width: 500px; margin: 0 auto;\">
        {{ form_start(rec, {'attr': {'class': 'my-form','novalidate': 'novalidate'}}) }}
        <div style=\"margin-bottom: 20px;\">
            {{ form_widget(rec.categorie, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Enter categorie'}}) }}
        </div>
        <div style=\"margin-bottom: 20px;\">
            {{ form_widget(rec.statutR, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Enter statut'}}) }}
        </div>
        <!-- Additional input field for response type text grande -->
       <div style=\"margin-bottom: 20px;\">
    <textarea id=\"response\" name=\"response\" class=\"form-control form-control-lg response-input\" placeholder=\"Enter response\" rows=\"6\"></textarea>
        </div>
        <div style=\"text-align: center;\">
            <button type=\"submit\"  onclick=\"validateResponse()\" class=\"btn btn-primary btn-lg\">Modify</button>
        </div>
        {{ form_end(rec) }}
    </div>
 


{% endblock %}
", "cheque/back/editRec.html.twig", "C:\\Users\\Yassin\\Desktop\\Bankify-sal3am\\templates\\cheque\\back\\editRec.html.twig");
    }
}
