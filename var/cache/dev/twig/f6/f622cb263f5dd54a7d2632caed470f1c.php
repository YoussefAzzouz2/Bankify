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

/* cheque/back/listcheques.html.twig */
class __TwigTemplate_188a8b4dc35518b7ad5c02ba1cdbd76a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/back/listcheques.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cheque/back/listcheques.html.twig"));

        $this->parent = $this->loadTemplate("backbase.html.twig", "cheque/back/listcheques.html.twig", 1);
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
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", ["success"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "    <div class=\"alert alert-success\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
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
                        <th style=\"border: 1px solid black;\" >Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabcheque"]) || array_key_exists("tabcheque", $context) ? $context["tabcheque"] : (function () { throw new RuntimeError('Variable "tabcheque" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cheque"]) {
            // line 27
            echo "                        <tr>
                            <td style=\"border: 1px solid black;\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cheque"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black;\" >";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cheque"], "montantC", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black;\">";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cheque"], "dateEmission", [], "any", false, false, false, 30)), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black;\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cheque"], "destinationC", [], "any", false, false, false, 31), "getFullName", [], "method", false, false, false, 31), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black;\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cheque"], "compteID", [], "any", false, false, false, 32), "getid", [], "method", false, false, false, 32), "html", null, true);
            echo "</td>
                            <td style=\"border: 1px solid black;\">
                                <table border=\"1\" style=\"border-color: black;\" class=\"table table-bordered\">
                                    <thead>
                                        <tr style=\"border: 1px solid black;\">
                                            <th style=\"border: 1px solid black;\">ID REC</th>
                                            <th style=\"border: 1px solid black;\">categorie</th>
                                            <th style=\"border: 1px solid black;\">Statut</th>
                                            <th style=\"border: 1px solid black;\">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["enc"]) {
                // line 45
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["enc"], "chequeID", [], "any", false, false, false, 45) == $context["cheque"])) {
                    // line 46
                    echo "                                                <tr>
                                                    <td style=\"border: 1px solid black;\">";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["enc"], "id", [], "any", false, false, false, 47), "html", null, true);
                    echo "</td>
                                                    <td style=\"border: 1px solid black;\">";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["enc"], "categorie", [], "any", false, false, false, 48), "html", null, true);
                    echo "</td>
                                                    
                                                    <td style=\"border: 1px solid black;\">";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["enc"], "statutR", [], "any", false, false, false, 50), "html", null, true);
                    echo "</td>
                                                    <td style=\"border: 1px solid black;\">
                                                        <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamtion_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["enc"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                    echo "\" class=\"btn btn-danger\">Delete</a>
                                                        <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rec_edit", ["ref" => twig_get_attribute($this->env, $this->source, $context["enc"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                    echo "\" class=\"btn btn-primary\">Update</a>
                                                    </td>
                                                </tr>
                                            ";
                }
                // line 57
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                    </tbody>
                                </table>
                            </td>
                            <td style=\"border: 1px solid black;\">
                                <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cheque_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["cheque"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
                                <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ch_edit", ["ref" => twig_get_attribute($this->env, $this->source, $context["cheque"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Update</a>
                                <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterreclamtion1", ["ref" => twig_get_attribute($this->env, $this->source, $context["cheque"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Add Reclamation</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cheque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </tbody>
            </table>
        </div>
        <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutercheque");
        echo "\" class=\"btn btn-primary\">Add Cheque</a>
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
        return "cheque/back/listcheques.html.twig";
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
        return array (  213 => 71,  208 => 68,  198 => 64,  194 => 63,  190 => 62,  184 => 58,  178 => 57,  171 => 53,  167 => 52,  162 => 50,  157 => 48,  153 => 47,  150 => 46,  147 => 45,  143 => 44,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  109 => 27,  105 => 26,  87 => 10,  78 => 7,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backbase.html.twig' %}

{% block content %}

{% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{ message }}
    </div>
{% endfor %}
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
                        <th style=\"border: 1px solid black;\" >Actions</th>
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
                                            <th style=\"border: 1px solid black;\">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for enc in tab %}
                                            {% if enc.chequeID == cheque %}
                                                <tr>
                                                    <td style=\"border: 1px solid black;\">{{ enc.id }}</td>
                                                    <td style=\"border: 1px solid black;\">{{ enc.categorie }}</td>
                                                    
                                                    <td style=\"border: 1px solid black;\">{{ enc.statutR }}</td>
                                                    <td style=\"border: 1px solid black;\">
                                                        <a href=\"{{ path('reclamtion_remove', {'id': enc.id}) }}\" class=\"btn btn-danger\">Delete</a>
                                                        <a href=\"{{ path('rec_edit', {'ref': enc.id}) }}\" class=\"btn btn-primary\">Update</a>
                                                    </td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </td>
                            <td style=\"border: 1px solid black;\">
                                <a href=\"{{ path('cheque_remove', {'id': cheque.id}) }}\" class=\"btn btn-danger\">Delete</a>
                                <a href=\"{{ path('ch_edit', {'ref': cheque.id}) }}\" class=\"btn btn-primary\">Update</a>
                                <a href=\"{{ path('ajouterreclamtion1', {'ref': cheque.id}) }}\" class=\"btn btn-success\">Add Reclamation</a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        <a href=\"{{ path('ajoutercheque') }}\" class=\"btn btn-primary\">Add Cheque</a>
    </div>
{% endblock %}
", "cheque/back/listcheques.html.twig", "C:\\Users\\Yassin\\Downloads\\Bankify\\templates\\cheque\\back\\listcheques.html.twig");
    }
}
