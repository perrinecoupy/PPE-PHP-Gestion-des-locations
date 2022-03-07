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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biens/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biens/index.html.twig"));

        // line 1
        $this->loadTemplate("includes/admin_head.html.twig", "biens/index.html.twig", 1)->display($context);
        // line 2
        echo "<!-- Details of each series -->
<div class=\"detail-serie\">
    <h2 class=\"title-detail-serie\">3 biens</h2>
    <a href=\"view.php\" class=\"link-view-serie\"><div>
            <img src=\"ressources/img/test.png\" alt=\"Image de la série\" class=\"img-serie\">
        </div>
        <div class=\"title-series\">
            <h4>Grey's Anatomy</h4>
            <p class=\"info-serie\"><i class=\"fas fa-calendar-week\"></i>#</p>
            <p class=\"info-serie\"><i class=\"fas fa-exclamation-circle space-info\"></i>#</p>
            <p class=\"info-serie space-info bg-status-serie\">#</p>
            <p class=\"info-serie space-info bg-categorie-serie\">#</p>
            <p class=\"description-serie\">#</p>
            <a href=\"view.php\" class=\"arrow right\"></a>
        </div></a>
</div>
";
        // line 18
        $this->loadTemplate("includes/_footer.html.twig", "biens/index.html.twig", 18)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  63 => 18,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'includes/admin_head.html.twig' %}
<!-- Details of each series -->
<div class=\"detail-serie\">
    <h2 class=\"title-detail-serie\">3 biens</h2>
    <a href=\"view.php\" class=\"link-view-serie\"><div>
            <img src=\"ressources/img/test.png\" alt=\"Image de la série\" class=\"img-serie\">
        </div>
        <div class=\"title-series\">
            <h4>Grey's Anatomy</h4>
            <p class=\"info-serie\"><i class=\"fas fa-calendar-week\"></i>#</p>
            <p class=\"info-serie\"><i class=\"fas fa-exclamation-circle space-info\"></i>#</p>
            <p class=\"info-serie space-info bg-status-serie\">#</p>
            <p class=\"info-serie space-info bg-categorie-serie\">#</p>
            <p class=\"description-serie\">#</p>
            <a href=\"view.php\" class=\"arrow right\"></a>
        </div></a>
</div>
{% include 'includes/_footer.html.twig' %}", "biens/index.html.twig", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\biens\\index.html.twig");
    }
}
