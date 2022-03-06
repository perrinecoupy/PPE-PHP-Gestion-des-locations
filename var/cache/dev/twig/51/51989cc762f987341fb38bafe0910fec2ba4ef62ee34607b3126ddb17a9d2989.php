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

/* css/head.css */
class __TwigTemplate_3c37e189820a24004d06059c073500167486c70c7991373568886cea9d49cf3d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/head.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/head.css"));

        // line 1
        echo "/* Button connexion */
.btn{
    padding-left: 30px;
    padding-right: 30px;
}

/* Button to go to the register page */
.button-form-register{
    background-color: #003304;
    color: #FFFFFF;
}

/* Button to go to the register page when you hover */
.button-form-register:hover{
    color: #FFFFFF;
}

/* Profil icon */
.fa-user-circle{
    color: #FFFFFF;
    position: absolute;
    margin-left: -20px;
}

/* Width of the inputs in the form connexion */
.form-control2{
    width: 30%;
}

/* Form connexion */
.form-connexion{
    padding: 20px 150px;
}

/* Footer of connexion page */
.footer-connexion{
    background-color: #000000;
    display: flex;
    margin-top: 100px;
}

/* General infos of contact */
.footer-contact{
    color: #808080;
}

/* General infos of contact when you hover */
.footer-contact:hover{
    text-decoration: none;
    color: #808080;
}

/* Informations de contact */
.infos-footer{
    float: left;
    padding-left: 150px;
    padding-top: 50px;
    padding-bottom: 50px;
    color: #FFFFFF;
}

/* Div with the links for the series */
.infos-series{
    float: left;
    padding: 20px 150px;
}

/* Div with the links for the user */
.infos-user{
    text-align: right;
    padding: 20px 80px;
}

/* Link forget password */
.link-forget-password{
    text-decoration: none;
    color: #000000;
    padding-left: 20px;
}

/* Link forget password when you hover */
.link-forget-password:hover{
    text-decoration: none;
    color: #000000;
}

/* Link My Series Companion */
.link-home{
    background-color: #808080;
    padding: 15px 15px 15px 15px;
    text-transform: uppercase;
    font-size: 11px;
}

/* Links of the navbar */
.links-navbar{
    color: #FFFFFF;
    padding-left: 20px;
    font-family: 'Roboto', sans-serif;
}

/* Links of the navbar when you hover */
.links-navbar:hover{
    text-decoration: none;
    color: #FFFFFF;
}

/* Background and adjustments of the navbar */
.navbar-background{
    background-color: #002453;
    padding-top: 30px;
    padding-bottom: 30px;
}

/* Question to go to register an account */
.question-register{
    font-family: 'Roboto', sans-serif;
}

/* Responsive of the login and register page */
@media only screen and (max-width: 1024px){
    .form-connexion{
        padding: 20px 0px;
    }

    .infos-footer{
        padding-left: 30px;
    }
    .infos-series{
        padding: 20px 0px;
    }

    .infos-user{
        padding: 20px 0px;
    }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "css/head.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* Button connexion */
.btn{
    padding-left: 30px;
    padding-right: 30px;
}

/* Button to go to the register page */
.button-form-register{
    background-color: #003304;
    color: #FFFFFF;
}

/* Button to go to the register page when you hover */
.button-form-register:hover{
    color: #FFFFFF;
}

/* Profil icon */
.fa-user-circle{
    color: #FFFFFF;
    position: absolute;
    margin-left: -20px;
}

/* Width of the inputs in the form connexion */
.form-control2{
    width: 30%;
}

/* Form connexion */
.form-connexion{
    padding: 20px 150px;
}

/* Footer of connexion page */
.footer-connexion{
    background-color: #000000;
    display: flex;
    margin-top: 100px;
}

/* General infos of contact */
.footer-contact{
    color: #808080;
}

/* General infos of contact when you hover */
.footer-contact:hover{
    text-decoration: none;
    color: #808080;
}

/* Informations de contact */
.infos-footer{
    float: left;
    padding-left: 150px;
    padding-top: 50px;
    padding-bottom: 50px;
    color: #FFFFFF;
}

/* Div with the links for the series */
.infos-series{
    float: left;
    padding: 20px 150px;
}

/* Div with the links for the user */
.infos-user{
    text-align: right;
    padding: 20px 80px;
}

/* Link forget password */
.link-forget-password{
    text-decoration: none;
    color: #000000;
    padding-left: 20px;
}

/* Link forget password when you hover */
.link-forget-password:hover{
    text-decoration: none;
    color: #000000;
}

/* Link My Series Companion */
.link-home{
    background-color: #808080;
    padding: 15px 15px 15px 15px;
    text-transform: uppercase;
    font-size: 11px;
}

/* Links of the navbar */
.links-navbar{
    color: #FFFFFF;
    padding-left: 20px;
    font-family: 'Roboto', sans-serif;
}

/* Links of the navbar when you hover */
.links-navbar:hover{
    text-decoration: none;
    color: #FFFFFF;
}

/* Background and adjustments of the navbar */
.navbar-background{
    background-color: #002453;
    padding-top: 30px;
    padding-bottom: 30px;
}

/* Question to go to register an account */
.question-register{
    font-family: 'Roboto', sans-serif;
}

/* Responsive of the login and register page */
@media only screen and (max-width: 1024px){
    .form-connexion{
        padding: 20px 0px;
    }

    .infos-footer{
        padding-left: 30px;
    }
    .infos-series{
        padding: 20px 0px;
    }

    .infos-user{
        padding: 20px 0px;
    }
}", "css/head.css", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\css\\head.css");
    }
}
