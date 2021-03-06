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

/* locataires/create.html.twig */
class __TwigTemplate_20c54930ca68f0889066b037ae8316a9381ca41a98e4be56ff285b868582fd02 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "locataires/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "locataires/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "locataires/create.html.twig", 1);
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
                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "firstname", [], "any", false, false, false, 10), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "email", [], "any", false, false, false, 11), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "address", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "complementAddress", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "zipCode", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "city", [], "any", false, false, false, 15), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "phone", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "password", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Confirmation du mot de passe</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                    </div>
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "submit", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "btn btn-success btn-update-infos"]]);
        echo "
                </div>
                <div class=\"form-row locations\">
                    <h2 class=\"title-location\">Liste des locations</h2>
                    ";
        // line 26
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 27
            echo "                        <button class=\"btn btn-success btn-location\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutLocation");
            echo "\" class=\"link-update\">Ajouter une location</a></button>
                    ";
        }
        // line 29
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["residence"]);
        foreach ($context['_seq'] as $context["_key"] => $context["residence"]) {
            // line 30
            echo "                    <div class=\"detail-serie2\">
                        <a href=\"#\" class=\"link-view-serie\"><div>
                                <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/image.jpg"), "html", null, true);
            echo "\" alt=\"Image de la s??rie\" class=\"img-serie\">
                            </div>
                            <div class=\"title-series2\">
                                <h4>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["residence"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</h4>
                                <p class=\"info-serie2\">Disponible le 1er d??cembre 2020</p>
                                <p class=\"description-serie3\">G??r?? par ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "firstname", [], "any", false, false, false, 37), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
                                <p class=\"description-serie4\">0 locations au total</p>
                                <a href=\"#\"><button class=\"btn btn-acceder\">Acc??der ?? la location</button></a>
                            </div></a>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['residence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </div>
            </div>
        </div>

    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "locataires/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 47,  172 => 43,  158 => 37,  153 => 35,  147 => 32,  143 => 30,  138 => 29,  132 => 27,  130 => 26,  123 => 22,  115 => 17,  111 => 16,  107 => 15,  103 => 14,  99 => 13,  95 => 12,  91 => 11,  87 => 10,  83 => 9,  77 => 8,  68 => 3,  58 => 2,  35 => 1,);
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
                    {{ form_row(form.name, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.firstname, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.email, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.address, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.complementAddress, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.zipCode, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.city, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.phone, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.password, { 'attr': {'class': 'form-control'} }) }}
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Confirmation du mot de passe</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                    </div>
                    {{ form_row(form.submit, { 'attr': {'class': 'btn btn-success btn-update-infos'} }) }}
                </div>
                <div class=\"form-row locations\">
                    <h2 class=\"title-location\">Liste des locations</h2>
                    {% if is_granted('ROLE_ADMIN') %}
                        <button class=\"btn btn-success btn-location\"><a href=\"{{ path('ajoutLocation') }}\" class=\"link-update\">Ajouter une location</a></button>
                    {% endif %}
                    {% for residence in residence %}
                    <div class=\"detail-serie2\">
                        <a href=\"#\" class=\"link-view-serie\"><div>
                                <img src=\"{{ asset('img/image.jpg') }}\" alt=\"Image de la s??rie\" class=\"img-serie\">
                            </div>
                            <div class=\"title-series2\">
                                <h4>{{ residence.name }}</h4>
                                <p class=\"info-serie2\">Disponible le 1er d??cembre 2020</p>
                                <p class=\"description-serie3\">G??r?? par {{ app.user.firstname }} {{ app.user.name }}</p>
                                <p class=\"description-serie4\">0 locations au total</p>
                                <a href=\"#\"><button class=\"btn btn-acceder\">Acc??der ?? la location</button></a>
                            </div></a>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>

    {{ form_end(form) }}
{% endblock %}
", "locataires/create.html.twig", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\locataires\\create.html.twig");
    }
}
