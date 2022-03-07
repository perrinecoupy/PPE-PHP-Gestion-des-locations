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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mandataires/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mandataires/index.html.twig"));

        // line 1
        $this->loadTemplate("includes/admin_head.html.twig", "mandataires/index.html.twig", 1)->display($context);
        // line 2
        echo "<h1 style=\"float: left\">Gestion des mandataires</h1>
<a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutMandataire");
        echo "\"><button type=\"button\" class=\"btn btn-success\">Nouveau mandataire</button></a>
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
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["users"]);
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 16
            echo "        <tr>
            <th scope=\"row\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "</th>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "firstname", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
            <td>0</td>
            <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificationMandataire", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">Mettre à jour</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </tbody>
</table>
";
        // line 26
        $this->loadTemplate("includes/_footer.html.twig", "mandataires/index.html.twig", 26)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  96 => 26,  92 => 24,  83 => 21,  78 => 19,  74 => 18,  70 => 17,  67 => 16,  63 => 15,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'includes/admin_head.html.twig' %}
<h1 style=\"float: left\">Gestion des mandataires</h1>
<a href=\"{{ path('ajoutMandataire') }}\"><button type=\"button\" class=\"btn btn-success\">Nouveau mandataire</button></a>
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
            <td><a href=\"{{ path('modificationMandataire', {id: users.id}) }}\">Mettre à jour</a></td>
        </tr>
    {% endfor %}
    </tbody>
</table>
{% include 'includes/_footer.html.twig' %}", "mandataires/index.html.twig", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\mandataires\\index.html.twig");
    }
}
