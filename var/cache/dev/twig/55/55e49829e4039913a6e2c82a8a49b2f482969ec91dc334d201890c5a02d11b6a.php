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

/* includes/_footer.html.twig */
class __TwigTemplate_6250085511ccc7b66792a7b421317f85add7a2038f36209851ab3ee6fe0029c8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/_footer.html.twig"));

        // line 1
        echo "
    <div id=\"footerText\">
        <div class=\"footerLeft\">
            <ul>
                <li class=\"infos\">Gestion locative</li>
                <li class=\"infos\">Contact telephone : 06 06 06 06 06</li>
                <li class=\"email-contact\">Contact email : contact@gestionlocative.fr</li>
            </ul>
        </div>
        <div class=\"footerRight\">
            <ul>
                <li class=\"infos-version\">Version 1.0</li>
            </ul>
        </div>
    </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    <div id=\"footerText\">
        <div class=\"footerLeft\">
            <ul>
                <li class=\"infos\">Gestion locative</li>
                <li class=\"infos\">Contact telephone : 06 06 06 06 06</li>
                <li class=\"email-contact\">Contact email : contact@gestionlocative.fr</li>
            </ul>
        </div>
        <div class=\"footerRight\">
            <ul>
                <li class=\"infos-version\">Version 1.0</li>
            </ul>
        </div>
    </div>", "includes/_footer.html.twig", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\includes\\_footer.html.twig");
    }
}
