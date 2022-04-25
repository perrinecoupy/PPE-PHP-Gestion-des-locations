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

/* locations/show.html.twig */
class __TwigTemplate_fc894ea59d45b0f94353e1fe2240986662334e8c0c8a472197818314d43598ed extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "locations/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "locations/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "locations/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"block_locataire\">
        <h1 class=\"title-location\">Gestion des locations</h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Date d'arrivée</th>
                <th scope=\"col\">Date de départ</th>
                <th scope=\"col\">Signature du locataire</th>
                <th scope=\"col\">Signature du mandataire</th>
                <th scope=\"col\" style=\"width: 71rem;\">Action</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["rent"]);
        foreach ($context['_seq'] as $context["_key"] => $context["rent"]) {
            // line 19
            echo "                <tr>
                    <th scope=\"row\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rent"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</th>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rent"], "arrivalDate", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rent"], "departureDate", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rent"], "tenantSignature", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rent"], "representativeSignature", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["residence"]);
            foreach ($context['_seq'] as $context["_key"] => $context["residence"]) {
                // line 26
                echo "                    <td><button class=\"btn btn-secondary\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showLocation", ["id" => twig_get_attribute($this->env, $this->source, $context["residence"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\" class=\"link-update\">Accéder à la location</a></button></td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['residence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "locations/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 30,  124 => 28,  115 => 26,  111 => 25,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  88 => 19,  84 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"block_locataire\">
        <h1 class=\"title-location\">Gestion des locations</h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Date d'arrivée</th>
                <th scope=\"col\">Date de départ</th>
                <th scope=\"col\">Signature du locataire</th>
                <th scope=\"col\">Signature du mandataire</th>
                <th scope=\"col\" style=\"width: 71rem;\">Action</th>
            </tr>
            </thead>
            <tbody>
            {% for rent in rent %}
                <tr>
                    <th scope=\"row\">{{ rent.id }}</th>
                    <td>{{ rent.arrivalDate | date(\"d/m/Y\") }}</td>
                    <td>{{ rent.departureDate | date(\"d/m/Y\") }}</td>
                    <td>{{ rent.tenantSignature }}</td>
                    <td>{{ rent.representativeSignature }}</td>
                    {% for residence in residence %}
                    <td><button class=\"btn btn-secondary\"><a href=\"{{ path('showLocation', {id: residence.id}) }}\" class=\"link-update\">Accéder à la location</a></button></td>
                    {% endfor %}
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "locations/show.html.twig", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\locations\\show.html.twig");
    }
}
