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

/* mandataires/index.html.twig */
class __TwigTemplate_692917cb78343516ef5a5c50db202247f013903115a5761153a3a3d333fc420e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mandataires/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mandataires/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mandataires/index.html.twig", 1);
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
        echo "    <div class=\"block_mandataire\">
        <h1 class=\"title-mandataire\">Gestion des mandataires</h1>
        <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutMandataire");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-ajout\">Nouveau mandataire</button></a>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prénom</th>
                <th scope=\"col\">Nombre de locations</th>
                <th scope=\"col\" style=\"width: 71rem;\">Action</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["users"]);
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 19
            echo "                <tr>
                    <th scope=\"row\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</th>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "firstname", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                    <td>0</td>
                    <td><button class=\"btn btn-secondary\"><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificationMandataire", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"link-update\">Mettre à jour les données</a></button></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mandataires/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  107 => 24,  102 => 22,  98 => 21,  94 => 20,  91 => 19,  87 => 18,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"block_mandataire\">
        <h1 class=\"title-mandataire\">Gestion des mandataires</h1>
        <a href=\"{{ path('ajoutMandataire') }}\"><button type=\"button\" class=\"btn btn-success btn-ajout\">Nouveau mandataire</button></a>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prénom</th>
                <th scope=\"col\">Nombre de locations</th>
                <th scope=\"col\" style=\"width: 71rem;\">Action</th>
            </tr>
            </thead>
            <tbody>
            {% for users in users %}
                <tr>
                    <th scope=\"row\">{{ users.id }}</th>
                    <td>{{ users.name }}</td>
                    <td>{{ users.firstname }}</td>
                    <td>0</td>
                    <td><button class=\"btn btn-secondary\"><a href=\"{{ path('modificationMandataire', {id: users.id}) }}\" class=\"link-update\">Mettre à jour les données</a></button></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "mandataires/index.html.twig", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\mandataires\\index.html.twig");
    }
}
