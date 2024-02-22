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

/* cheque/front/pdf.html.twig */
class __TwigTemplate_be0b889b02133fe61dd2ba96838d9904 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/front/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/front/pdf.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <h2>Cheques List</h2>
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th style=\"border: 1px solid black;\">ID</th>
                        <th style=\"border: 1px solid black;\">Montant</th>
                        <th style=\"border: 1px solid black;\">Date Emission</th>
                        <th style=\"border: 1px solid black;\">Destination</th>
                         <th style=\"border: 1px solid black;\">CompteID</th>
                        <th style=\"border: 1px solid black;\">Reclamations</th>
                     
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabcheque"]) || array_key_exists("tabcheque", $context) ? $context["tabcheque"] : (function () { throw new RuntimeError('Variable "tabcheque" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cheque"]) {
            // line 21
            echo "                        <tr>
                            <td style=\"border: 1px solid black;\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cheque"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black;\" >";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cheque"], "montantC", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black;\">";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cheque"], "dateEmission", [], "any", false, false, false, 24)), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black;\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cheque"], "destinationC", [], "any", false, false, false, 25), "getFullName", [], "method", false, false, false, 25), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black;\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cheque"], "compteID", [], "any", false, false, false, 26), "getid", [], "method", false, false, false, 26), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black;\">
                                <table border=\"1\" style=\"border-color: black;\" class=\"table table-bordered\">
                                    <thead>
                                        <tr style=\"border: 1px solid black;\">
                                            <th style=\"border: 1px solid black;\">ID REC</th>
                                            <th style=\"border: 1px solid black;\">categorie</th>
                                            <th style=\"border: 1px solid black;\">Statut</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["enc"]) {
                // line 39
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["enc"], "chequeID", [], "any", false, false, false, 39) == $context["cheque"])) {
                    // line 40
                    echo "                                                <tr>
                                                    <td style=\"border: 1px solid black;\">";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["enc"], "id", [], "any", false, false, false, 41), "html", null, true);
                    echo "</td>
                                                    <td style=\"border: 1px solid black;\">";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["enc"], "categorie", [], "any", false, false, false, 42), "html", null, true);
                    echo "</td>
                                                    
                                                    <td style=\"border: 1px solid black;\">";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["enc"], "statutR", [], "any", false, false, false, 44), "html", null, true);
                    echo "</td>
                                                    
                                                </tr>
                                            ";
                }
                // line 48
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                                    </tbody>
                                </table>
                            </td>
                            
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cheque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </tbody>
            </table>
        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cheque/front/pdf.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  166 => 55,  155 => 49,  149 => 48,  142 => 44,  137 => 42,  133 => 41,  130 => 40,  127 => 39,  123 => 38,  108 => 26,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  89 => 21,  85 => 20,  67 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block content %}
    <div class=\"container\">
        <h2>Cheques List</h2>
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th style=\"border: 1px solid black;\">ID</th>
                        <th style=\"border: 1px solid black;\">Montant</th>
                        <th style=\"border: 1px solid black;\">Date Emission</th>
                        <th style=\"border: 1px solid black;\">Destination</th>
                         <th style=\"border: 1px solid black;\">CompteID</th>
                        <th style=\"border: 1px solid black;\">Reclamations</th>
                     
                    </tr>
                </thead>
                <tbody>
                    {% for cheque in tabcheque %}
                        <tr>
                            <td style=\"border: 1px solid black;\">{{ cheque.id}}</td>
                            <td style=\"border: 1px solid black;\" >{{ cheque.montantC }}</td>
                            <td style=\"border: 1px solid black;\">{{ cheque.dateEmission|date }}</td>
                            <td style=\"border: 1px solid black;\">{{ cheque.destinationC.getFullName() }}</td>
                            <td style=\"border: 1px solid black;\">{{ cheque.compteID.getid() }}</td>
                            <td style=\"border: 1px solid black;\">
                                <table border=\"1\" style=\"border-color: black;\" class=\"table table-bordered\">
                                    <thead>
                                        <tr style=\"border: 1px solid black;\">
                                            <th style=\"border: 1px solid black;\">ID REC</th>
                                            <th style=\"border: 1px solid black;\">categorie</th>
                                            <th style=\"border: 1px solid black;\">Statut</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for enc in tab %}
                                            {% if enc.chequeID == cheque %}
                                                <tr>
                                                    <td style=\"border: 1px solid black;\">{{ enc.id }}</td>
                                                    <td style=\"border: 1px solid black;\">{{ enc.categorie }}</td>
                                                    
                                                    <td style=\"border: 1px solid black;\">{{ enc.statutR }}</td>
                                                    
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </td>
                            
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        
{% endblock %}
", "cheque/front/pdf.html.twig", "C:\\Users\\Yassin\\Desktop\\Bankify-sal3am\\templates\\cheque\\front\\pdf.html.twig");
    }
}
