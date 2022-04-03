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
            <div class=\"col-lg-6 col-xs-12\">
                <h2>Ajout d'un bien</h2>
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "address", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "zip_code", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "city", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "country", [], "any", false, false, false, 15), 'row', ["attr" => ["class" => "form-control"]]);
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
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "submit", [], "any", false, false, false, 36), 'row', ["attr" => ["class" => "btn btn-success btn-update-infos"]]);
        echo "
            </div>
        </div>
    </div>

    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
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
        return array (  128 => 41,  120 => 36,  96 => 15,  92 => 14,  88 => 13,  84 => 12,  80 => 11,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

    {{ form_start(form) }}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-xs-12\">
                <h2>Ajout d'un bien</h2>
                {{ form_row(form.name, { 'attr': {'class': 'form-control'} }) }}
                {{ form_row(form.address, { 'attr': {'class': 'form-control'} }) }}
                {{ form_row(form.zip_code, { 'attr': {'class': 'form-control'} }) }}
                {{ form_row(form.city, { 'attr': {'class': 'form-control'} }) }}
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
        </div>
    </div>

    {{ form_end(form) }}

{% endblock %}", "biens/create.html.twig", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\biens\\create.html.twig");
    }
}
