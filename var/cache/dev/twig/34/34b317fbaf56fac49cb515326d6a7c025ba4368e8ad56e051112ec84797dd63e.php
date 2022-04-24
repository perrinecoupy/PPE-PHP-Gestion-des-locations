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

/* mandataires/createM.html.twig */
class __TwigTemplate_fdd78e7edd8550828b37d901ae3a5d8aa1f28a7ff843fd628c8b3163b30ded14 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mandataires/createM.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mandataires/createM.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mandataires/createM.html.twig", 1);
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
                <h2>Ajout d'un mandataire</h2>
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
                <label class=\"mr-sm-2\" for=\"inlineFormCustomSelect\">Locations gérées</label>
                <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\">
                    <option selected>Sélectionner des locations</option>
                    <option value=\"1\">Location 1</option>
                    <option value=\"2\">Location 2</option>
                    <option value=\"3\">Location 3</option>
                </select>
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "submit", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "btn btn-success btn-update-infos"]]);
        echo "
            </div>
            <div class=\"form\">
                <br><br>
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "password", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Confirmation du mot de passe</label>
                    <input type=\"password\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                </div>
            </div>
        </div>
    </div>

    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mandataires/createM.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 32,  104 => 23,  97 => 19,  86 => 11,  82 => 10,  78 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}
    {{ form_start(form) }}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-xs-12\">
                <h2>Ajout d'un mandataire</h2>
                {{ form_row(form.name, { 'attr': {'class': 'form-control'} }) }}
                {{ form_row(form.firstname, { 'attr': {'class': 'form-control'} }) }}
                {{ form_row(form.email, { 'attr': {'class': 'form-control'} }) }}
                <label class=\"mr-sm-2\" for=\"inlineFormCustomSelect\">Locations gérées</label>
                <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\">
                    <option selected>Sélectionner des locations</option>
                    <option value=\"1\">Location 1</option>
                    <option value=\"2\">Location 2</option>
                    <option value=\"3\">Location 3</option>
                </select>
                {{ form_row(form.submit, { 'attr': {'class': 'btn btn-success btn-update-infos'} }) }}
            </div>
            <div class=\"form\">
                <br><br>
                {{ form_row(form.password, { 'attr': {'class': 'form-control'} }) }}
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Confirmation du mot de passe</label>
                    <input type=\"password\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                </div>
            </div>
        </div>
    </div>

    {{ form_end(form) }}
{% endblock %}
", "mandataires/createM.html.twig", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\mandataires\\createM.html.twig");
    }
}
