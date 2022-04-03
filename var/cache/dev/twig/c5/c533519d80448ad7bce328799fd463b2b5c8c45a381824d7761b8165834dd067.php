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

/* css/menu.css */
class __TwigTemplate_5fa126b582b945d7efb94a206eac4ce1cca2dde3f3ea82455b1fd942b7ac277e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/menu.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/menu.css"));

        // line 1
        echo "
/*CSS MENU NAVBAR*/

#idMenuNav {
\tpadding-top: 30px;
\tpadding-bottom: 30px;
\tbackground-color: #192B4E;
}

#idMenuNav nav {
\tmargin-top: 10px;
\tmargin-bottom: 10px;
\tmargin-right: 100px;
\tmargin-left: 100px;
}

#linkHome {
\tcolor: white;
\tfont-size: 14px;
\tmargin-right: 15px;
\tbackground-color: rgba(255,255,255,0.3);
\topacity: 0.8;
\tpadding: 23px;
}

.linkNav {
\tmargin-right: 17px;
\tmargin-left: 17px;
\tcolor: white;
\tfont-size: 23px;
}

#idMenuNav i {
\tmargin-right: 10px;
\tcolor: #A1A1A1;
}

#idMenuNav a {
\tcolor: white;
}

#idMenuNav a:hover {
\ttext-decoration: none;
\ttext-transform: none;
\tcolor: #D1D1D1;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "css/menu.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
/*CSS MENU NAVBAR*/

#idMenuNav {
\tpadding-top: 30px;
\tpadding-bottom: 30px;
\tbackground-color: #192B4E;
}

#idMenuNav nav {
\tmargin-top: 10px;
\tmargin-bottom: 10px;
\tmargin-right: 100px;
\tmargin-left: 100px;
}

#linkHome {
\tcolor: white;
\tfont-size: 14px;
\tmargin-right: 15px;
\tbackground-color: rgba(255,255,255,0.3);
\topacity: 0.8;
\tpadding: 23px;
}

.linkNav {
\tmargin-right: 17px;
\tmargin-left: 17px;
\tcolor: white;
\tfont-size: 23px;
}

#idMenuNav i {
\tmargin-right: 10px;
\tcolor: #A1A1A1;
}

#idMenuNav a {
\tcolor: white;
}

#idMenuNav a:hover {
\ttext-decoration: none;
\ttext-transform: none;
\tcolor: #D1D1D1;
}", "css/menu.css", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\css\\menu.css");
    }
}
