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

/* css/series.css */
class __TwigTemplate_bd31e669a45d71f2c0ff0753bb6c1a27a6c9774fda868e5b24fce9ecfff3d371 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/series.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/series.css"));

        // line 1
        echo "#btnSerie img {
\twidth: 100%;
}

#btnSerie div {
\twidth: 200%;
\tmargin-right: 10px;
}

#btnSerie{
\twidth: 70%;
\tdisplay: flex;
\tmargin-left: 100px;
\tmargin-top: 30px;
\tmargin-bottom: 60px;
}

#serieInfo {
\tdisplay: flex;
}

#serieInfo p {
\tmargin-right: 5px;
}

h1 {
\tmargin-left: 150px;
\tmargin-top: 50px;
}

#duree {
\tbackground-color: rgba(0, 0, 0, 0.05);
\tmargin-left: 3px;
\tmargin-left: 3px;
\tborder-radius: 10px;
}

#cat {
\tbackground-color: rgba(60, 104, 236, 0.15);
\tmargin-left: 3px;
\tmargin-left: 3px;
\tborder-radius: 10px;
}

a h1 {
\tfont-size: 100px;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "css/series.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#btnSerie img {
\twidth: 100%;
}

#btnSerie div {
\twidth: 200%;
\tmargin-right: 10px;
}

#btnSerie{
\twidth: 70%;
\tdisplay: flex;
\tmargin-left: 100px;
\tmargin-top: 30px;
\tmargin-bottom: 60px;
}

#serieInfo {
\tdisplay: flex;
}

#serieInfo p {
\tmargin-right: 5px;
}

h1 {
\tmargin-left: 150px;
\tmargin-top: 50px;
}

#duree {
\tbackground-color: rgba(0, 0, 0, 0.05);
\tmargin-left: 3px;
\tmargin-left: 3px;
\tborder-radius: 10px;
}

#cat {
\tbackground-color: rgba(60, 104, 236, 0.15);
\tmargin-left: 3px;
\tmargin-left: 3px;
\tborder-radius: 10px;
}

a h1 {
\tfont-size: 100px;
}", "css/series.css", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\css\\series.css");
    }
}
