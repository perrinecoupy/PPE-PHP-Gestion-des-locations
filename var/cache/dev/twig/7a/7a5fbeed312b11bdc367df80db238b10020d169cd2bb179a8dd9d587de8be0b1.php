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

/* biens/index.html.twig */
class __TwigTemplate_6ff1f8145f805486058ebc332b2e9ec397dfbea4423662595b6131daba6b793a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biens/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biens/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "biens/index.html.twig", 1);
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
        echo "<!-- Details of each series -->
<div class=\"detail-serie\">
    <h2 class=\"title-detail-serie\">";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["residence"]) || array_key_exists("residence", $context) ? $context["residence"] : (function () { throw new RuntimeError('Variable "residence" does not exist.', 6, $this->source); })())), "html", null, true);
        echo " biens</h2>
    <p class=\"city\">Ville :</p>
    <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\">
        <option selected>Toutes</option>
        <option value=\"1\">Senlis</option>
    </select>
    <button class=\"btn btn-primary\">Afficher</button>
    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutBien");
        echo "\"><button class=\"btn btn-success\">Ajouter un bien</button></a>
</div>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["residence"]);
        foreach ($context['_seq'] as $context["_key"] => $context["residence"]) {
            // line 16
            echo "        <!-- Details of each series -->
        <div class=\"detail-serie\">
            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificationBien", ["id" => twig_get_attribute($this->env, $this->source, $context["residence"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"link-view-serie\"><div>
                    <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/image.jpg"), "html", null, true);
            echo "\" alt=\"Image de la série\" class=\"img-serie\">
                </div>
                <div class=\"title-series\">
                    <h4>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["residence"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</h4>
                    <p class=\"info-serie\">Disponible le 1er décembre 2020</p>
                    <p class=\"description-serie\">Non occupé&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Géré par Arthur VALENTIM</p>
                    <p class=\"description-serie2\">0 locations au total</p>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificationBien", ["id" => twig_get_attribute($this->env, $this->source, $context["residence"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\"><button class=\"btn btn-acceder\">Accéder</button></a>
                </div></a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['residence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "biens/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 26,  105 => 22,  99 => 19,  95 => 18,  91 => 16,  87 => 15,  82 => 13,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
<!-- Details of each series -->
<div class=\"detail-serie\">
    <h2 class=\"title-detail-serie\">{{ residence | length }} biens</h2>
    <p class=\"city\">Ville :</p>
    <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\">
        <option selected>Toutes</option>
        <option value=\"1\">Senlis</option>
    </select>
    <button class=\"btn btn-primary\">Afficher</button>
    <a href=\"{{ path(\"ajoutBien\") }}\"><button class=\"btn btn-success\">Ajouter un bien</button></a>
</div>
    {% for residence in residence %}
        <!-- Details of each series -->
        <div class=\"detail-serie\">
            <a href=\"{{ path('modificationBien', {id: residence.id}) }}\" class=\"link-view-serie\"><div>
                    <img src=\"{{ asset('img/image.jpg') }}\" alt=\"Image de la série\" class=\"img-serie\">
                </div>
                <div class=\"title-series\">
                    <h4>{{ residence.name }}</h4>
                    <p class=\"info-serie\">Disponible le 1er décembre 2020</p>
                    <p class=\"description-serie\">Non occupé&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Géré par Arthur VALENTIM</p>
                    <p class=\"description-serie2\">0 locations au total</p>
                    <a href=\"{{ path('modificationBien', {id: residence.id}) }}\"><button class=\"btn btn-acceder\">Accéder</button></a>
                </div></a>
        </div>
    {% endfor %}
{% endblock %}", "biens/index.html.twig", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\biens\\index.html.twig");
    }
}
