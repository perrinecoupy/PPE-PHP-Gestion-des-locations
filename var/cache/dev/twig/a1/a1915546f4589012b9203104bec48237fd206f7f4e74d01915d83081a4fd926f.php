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

/* locations/create.html.twig */
class __TwigTemplate_c83a6665759cff4b5075eb00cf3c48aaac534b595263ee4946beb48d997091c1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "locations/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "locations/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "locations/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-xs-12\">
                <h2>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "firstname", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2>
                <div class=\"form-group\">
                    <label class=\"mr-sm-2\" for=\"inlineFormCustomSelect\">Location</label>
                    <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\">
                        <option selected>Sélectionner une location</option>
                        <option value=\"1\">Location 1</option>
                        <option value=\"2\">Location 2</option>
                        <option value=\"3\">Location 3</option>
                    </select>
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "arrival_date", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "departure_date", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), 'row');
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "submit", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "btn btn-success btn-update-infos"]]);
        echo "
                </div>
            </div>
            <div class=\"form-row locations\">
                <h2 class=\"title-location\">Mes locations</h2>
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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["rent"]);
        foreach ($context['_seq'] as $context["_key"] => $context["rent"]) {
            // line 37
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rent"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</th>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rent"], "arrivalDate", [], "any", false, false, false, 39), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rent"], "departureDate", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "firstname", [], "any", false, false, false, 41), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                        <td><a href=\"#\"><button class=\"btn btn-acceder\">Accéder</button></a></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "locations/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 51,  153 => 45,  141 => 41,  137 => 40,  133 => 39,  129 => 38,  126 => 37,  122 => 36,  103 => 20,  99 => 19,  95 => 18,  91 => 17,  77 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}
    {{ form_start(form) }}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-xs-12\">
                <h2>{{ app.user.firstname }} {{ app.user.name }}</h2>
                <div class=\"form-group\">
                    <label class=\"mr-sm-2\" for=\"inlineFormCustomSelect\">Location</label>
                    <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\">
                        <option selected>Sélectionner une location</option>
                        <option value=\"1\">Location 1</option>
                        <option value=\"2\">Location 2</option>
                        <option value=\"3\">Location 3</option>
                    </select>
                    {{ form_row(form.arrival_date, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.departure_date, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.id) }}
                    {{ form_row(form.submit, { 'attr': {'class': 'btn btn-success btn-update-infos'} }) }}
                </div>
            </div>
            <div class=\"form-row locations\">
                <h2 class=\"title-location\">Mes locations</h2>
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
                        <td><a href=\"#\"><button class=\"btn btn-acceder\">Accéder</button></a></td>
                    </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{ form_end(form) }}
{% endblock %}", "locations/create.html.twig", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\locations\\create.html.twig");
    }
}
