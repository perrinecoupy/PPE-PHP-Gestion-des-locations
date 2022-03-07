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

/* css/footer.css */
class __TwigTemplate_4270475e94a76acab165b7377bd55b90d8cca1214a987d7c2e26a634844ecb46 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/footer.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/footer.css"));

        // line 1
        echo "#footerText {
\tdisplay: flex;
\tbackground-color: rgba(0, 0, 0, 0.9);
\tpadding: 50px;
\tcolor: white;
}

li {
\tmargin-left: 60px;
\tmargin-right: 190px;
}

.footerText {
\tcolor: white;
\tlist-style:\tnone;
\tmargin-bottom: 15px;
}

.contact {
\tcolor: grey;
\tlist-style: none;
}

.footerDiv {
\twidth: 50%;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "css/footer.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#footerText {
\tdisplay: flex;
\tbackground-color: rgba(0, 0, 0, 0.9);
\tpadding: 50px;
\tcolor: white;
}

li {
\tmargin-left: 60px;
\tmargin-right: 190px;
}

.footerText {
\tcolor: white;
\tlist-style:\tnone;
\tmargin-bottom: 15px;
}

.contact {
\tcolor: grey;
\tlist-style: none;
}

.footerDiv {
\twidth: 50%;
}", "css/footer.css", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\css\\footer.css");
    }
}
