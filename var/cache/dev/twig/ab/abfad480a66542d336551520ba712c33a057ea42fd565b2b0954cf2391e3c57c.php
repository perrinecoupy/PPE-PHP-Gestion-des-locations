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

/* author/showAuthor.html.twig */
class __TwigTemplate_4c436349568e1d8b1c25f8295cb3516e3620aeb1bf146699fe6117ec00f9f915 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/showAuthor.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/showAuthor.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "author/showAuthor.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h3>Auteur n°";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "</h3>
<h3>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 6, $this->source); })()), "firstname", [], "any", false, false, false, 6), "html", null, true);
        echo "</h3>
<h3>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 7, $this->source); })()), "lastname", [], "any", false, false, false, 7), "html", null, true);
        echo "</h3>
<br>
<h4>Liste des articles de l'auteur:

\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["articleAuthor"]);
        foreach ($context['_seq'] as $context["_key"] => $context["articleAuthor"]) {
            // line 12
            echo "        <li>Article n°";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articleAuthor"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "</li>
        <li>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articleAuthor"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo "</li>
        <li>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articleAuthor"], "content", [], "any", false, false, false, 14), "html", null, true);
            echo "</li>
        <li>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articleAuthor"], "resume", [], "any", false, false, false, 15), "html", null, true);
            echo "</li>
        <li>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articleAuthor"], "date", [], "any", false, false, false, 16), "d/m/Y à H\\hi"), "html", null, true);
            echo "</li>
        <li><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => twig_get_attribute($this->env, $this->source, $context["articleAuthor"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">Lien vers l'article</a></li>
        <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articleAuthor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "author/showAuthor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 20,  111 => 17,  107 => 16,  103 => 15,  99 => 14,  95 => 13,  90 => 12,  86 => 11,  79 => 7,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<h3>Auteur n°{{ author.id }}</h3>
<h3>{{ author.firstname }}</h3>
<h3>{{ author.lastname }}</h3>
<br>
<h4>Liste des articles de l'auteur:

\t{% for articleAuthor in articleAuthor %}
        <li>Article n°{{ articleAuthor.id }}</li>
        <li>{{ articleAuthor.title }}</li>
        <li>{{ articleAuthor.content }}</li>
        <li>{{ articleAuthor.resume }}</li>
        <li>{{ articleAuthor.date|date('d/m/Y à H\\\\hi') }}</li>
        <li><a href=\"{{ path('article', {id: articleAuthor.id})}}\">Lien vers l'article</a></li>
        <br>
    {% endfor %}

{% endblock %}

{# {% include 'common/_article_item.html.twig' with { article : article } only %} On précise le with {} pour spécifier les variables à passer à la vue. Si on ne le fait pas : toutes les variables seront par défaut inclus dans la vue .#}", "author/showAuthor.html.twig", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\author\\showAuthor.html.twig");
    }
}
