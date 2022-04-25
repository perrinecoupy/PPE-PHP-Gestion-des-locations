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

/* includes/admin_head.html.twig */
class __TwigTemplate_6675e19671da418f1e8030af96d14b552111908688d1219c9da879f26687198e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/admin_head.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/admin_head.html.twig"));

        // line 1
        echo "
    <!-- Menu de navigation -->
    <nav class=\"navbar-background\">
        <div class=\"infos-accueil\">
            <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"link-home links-navbar\">LOGO</a>
            <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"links-navbar-accueil\">ACCUEIL</a>
            ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("biens");
            echo "\" class=\"links-navbar-accueil\">BIENS</a>
                <a href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("locataires");
            echo "\" class=\"links-navbar-accueil\">LOCATAIRES</a>
                <a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mandataires");
            echo "\" class=\"links-navbar-accueil\">MANDATAIRES</a>
            ";
        }
        // line 12
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REPRESENTATIVE")) {
            // line 13
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("biens");
            echo "\" class=\"links-navbar-accueil\">BIENS</a>
            ";
        }
        // line 15
        echo "        </div>
        <div class=\"infos-user\">
            <a href=\"#\" class=\"links-navbar profil\"><i class=\"far fa-user-circle fa-2x\"></i>MON PROFIL</a>
        </div>
    </nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/admin_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 15,  76 => 13,  73 => 12,  68 => 10,  64 => 9,  59 => 8,  57 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    <!-- Menu de navigation -->
    <nav class=\"navbar-background\">
        <div class=\"infos-accueil\">
            <a href=\"{{ path('index')}}\" class=\"link-home links-navbar\">LOGO</a>
            <a href=\"{{ path('index') }}\" class=\"links-navbar-accueil\">ACCUEIL</a>
            {% if is_granted('ROLE_ADMIN') %}
                <a href=\"{{ path('biens') }}\" class=\"links-navbar-accueil\">BIENS</a>
                <a href=\"{{ path('locataires') }}\" class=\"links-navbar-accueil\">LOCATAIRES</a>
                <a href=\"{{ path('mandataires') }}\" class=\"links-navbar-accueil\">MANDATAIRES</a>
            {% endif %}
            {% if is_granted('ROLE_REPRESENTATIVE') %}
                <a href=\"{{ path('biens') }}\" class=\"links-navbar-accueil\">BIENS</a>
            {% endif %}
        </div>
        <div class=\"infos-user\">
            <a href=\"#\" class=\"links-navbar profil\"><i class=\"far fa-user-circle fa-2x\"></i>MON PROFIL</a>
        </div>
    </nav>", "includes/admin_head.html.twig", "C:\\Users\\perri\\PPE-PHP-Gestion-des-locations\\templates\\includes\\admin_head.html.twig");
    }
}
