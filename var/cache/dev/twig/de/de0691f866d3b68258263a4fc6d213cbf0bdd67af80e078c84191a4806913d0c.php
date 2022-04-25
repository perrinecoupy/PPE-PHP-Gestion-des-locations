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

/* biens/create.html.twig */
class __TwigTemplate_267f2055282145893de564edece4b08d55ee137405b6d468d13177cff9c54d0c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biens/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biens/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "biens/create.html.twig", 1);
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
        echo "
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-xs-12\">

            </div>
        </div>
    </div>


    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-12\">
                <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/image.jpg"), "html", null, true);
        echo "\" alt=\"Image de la série\" class=\"img-serie2\">
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "address", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                <div class=\"form-row\">
                    <div class=\"form-group col-md-6\" style=\"margin-bottom: 0\">
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "zip_code", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group col-md-6\" style=\"margin-bottom: 0\">
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "city", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "country", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                <label>Gabarit inventaire</label>
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                    </div>
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile01\"
                               aria-describedby=\"inputGroupFileAddon01\">
                        <label class=\"custom-file-label\" for=\"inputGroupFile01\">Sélectionner un fichier</label>
                    </div>
                </div>
                <label>Photo</label>
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                    </div>
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile01\"
                               aria-describedby=\"inputGroupFileAddon01\">
                        <label class=\"custom-file-label\" for=\"inputGroupFile01\">Sélectionner un fichier</label>
                    </div>
                </div>
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "submit", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "btn btn-success btn-update-infos"]]);
        echo "
            </div>
            <div class=\"form-row locations\">
                <h2 class=\"title-location\">";
        // line 54
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["rent"]) || array_key_exists("rent", $context) ? $context["rent"] : (function () { throw new RuntimeError('Variable "rent" does not exist.', 54, $this->source); })())), "html", null, true);
        echo " Locations</h2>
                <a href=\"\"><button class=\"btn disponible\">Disponible à la location</button></a>
                <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutLocation");
        echo "\"><button class=\"btn btn-success\">Ajouter une location</button></a>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Date entrée</th>
                        <th scope=\"col\">Date sortie</th>
                        <th scope=\"col\">Locataire</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["rent"]);
        foreach ($context['_seq'] as $context["_key"] => $context["rent"]) {
            // line 69
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rent"], "id", [], "any", false, false, false, 70), "html", null, true);
            echo "</th>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rent"], "arrivalDate", [], "any", false, false, false, 71), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rent"], "departureDate", [], "any", false, false, false, 72), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "firstname", [], "any", false, false, false, 73), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                        ";
            // line 77
            echo "                        <td><a href=\"#\"><button class=\"btn btn-acceder\">Accéder</button></a></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "biens/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 86,  197 => 80,  189 => 77,  183 => 73,  179 => 72,  175 => 71,  171 => 70,  168 => 69,  164 => 68,  149 => 56,  144 => 54,  138 => 51,  114 => 30,  108 => 27,  102 => 24,  96 => 21,  92 => 20,  88 => 19,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

    {{ form_start(form) }}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-xs-12\">

            </div>
        </div>
    </div>


    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-12\">
                <img src=\"{{ asset('img/image.jpg') }}\" alt=\"Image de la série\" class=\"img-serie2\">
                {{ form_row(form.name, { 'attr': {'class': 'form-control'} }) }}
                {{ form_row(form.address, { 'attr': {'class': 'form-control'} }) }}
                <div class=\"form-row\">
                    <div class=\"form-group col-md-6\" style=\"margin-bottom: 0\">
                        {{ form_row(form.zip_code, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group col-md-6\" style=\"margin-bottom: 0\">
                        {{ form_row(form.city, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                </div>
                {{ form_row(form.country, { 'attr': {'class': 'form-control'} }) }}
                <label>Gabarit inventaire</label>
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                    </div>
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile01\"
                               aria-describedby=\"inputGroupFileAddon01\">
                        <label class=\"custom-file-label\" for=\"inputGroupFile01\">Sélectionner un fichier</label>
                    </div>
                </div>
                <label>Photo</label>
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                    </div>
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile01\"
                               aria-describedby=\"inputGroupFileAddon01\">
                        <label class=\"custom-file-label\" for=\"inputGroupFile01\">Sélectionner un fichier</label>
                    </div>
                </div>
                {{ form_row(form.submit, { 'attr': {'class': 'btn btn-success btn-update-infos'} }) }}
            </div>
            <div class=\"form-row locations\">
                <h2 class=\"title-location\">{{ rent | length }} Locations</h2>
                <a href=\"\"><button class=\"btn disponible\">Disponible à la location</button></a>
                <a href=\"{{ path(\"ajoutLocation\") }}\"><button class=\"btn btn-success\">Ajouter une location</button></a>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Date entrée</th>
                        <th scope=\"col\">Date sortie</th>
                        <th scope=\"col\">Locataire</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for rent in rent %}
                    <tr>
                        <th scope=\"row\">{{ rent.id }}</th>
                        <td>{{ rent.arrivalDate | date(\"d/m/Y\") }}</td>
                        <td>{{ rent.departureDate | date(\"d/m/Y\") }}</td>
                        <td>{{ app.user.firstname }} {{ app.user.name }}</td>
                        {# {% for residence in residence %}
                        <td><a href=\"{{ path('showLocation', {id: residence.id}) }}\"><button class=\"btn btn-acceder\">Accéder</button></a></td>
                        {% endfor %} #}
                        <td><a href=\"#\"><button class=\"btn btn-acceder\">Accéder</button></a></td>
                    </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{ form_end(form) }}

{% endblock %}
", "biens/create.html.twig", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\biens\\create.html.twig");
    }
}
