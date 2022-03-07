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
        echo "/* Message d'erreur si l'utilisateur n'existe pas dans la base de données */
p.errorMessage {
    padding: 25px 10px;
    color: #ff0000;
    border-radius: 3px;
}

/* Bouton de connexion */
.btn {
    padding-left: 30px;
    padding-right: 30px;
}

/* Icone de profil */
.fa-user-circle {
    color: #FFFFFF;
    position: absolute;
    margin-left: -20px;
}

/* Taille des input dans le formulaire de connexion */
.form-control2 {
    width: 30%;
}

/* Formulaire de connexion */
.form-connexion {
    padding: 20px 150px;
}

/* Div avec les liens pour accéder aux séries */
.infos-accueil {
    float: left;
    padding: 20px 150px;
}

/* Div avec les liens pour l'utilisateur */
.infos-user {
    text-align: right;
    padding: 20px 80px;
}

/* Lien mot de passe oublié */
.lien-mot-de-passe-oublie {
    text-decoration: none;
    color: #000000;
    padding-left: 20px;
}

/* Lien mot de passe oublié quand il y a le survol de la souris */
.lien-mot-de-passe-oublie:hover {
    text-decoration: none;
    color: #000000;
}

/* Lien Home */
.link-home {
    background-color: #FFFFFF;
    padding: 15px 15px 15px 15px;
    text-transform: uppercase;
    font-size: 11px;
}

/* Liens de la barre de navigation */
.links-navbar {
    color: #9D4907;
    padding-left: 70px;
    padding-right: 70px;
    padding-top: 25px;
    padding-bottom: 20px;
    font-family: 'Roboto', sans-serif;
}

.links-navbar-accueil {
    color: #FFFFFF;
    padding-left: 30px;
    font-family: 'Roboto', sans-serif;
    text-decoration: underline;
    font-size: 20px;
    font-weight: 100;
}

/* Liens de la barre de navigation quand il y a le survol de la souris */
.links-navbar:hover {
    text-decoration: none;
    color: #9D4907;
}

.links-navbar-accueil:hover {
    text-decoration: none;
    color: #FFFFFF;
}

/* Fond et ajustements de la barre de navigation */
.navbar-background {
    background-color: #B16847;
    padding-top: 30px;
    padding-bottom: 60px;
}

/* Formulaire de connexion */
.titre-form {
    padding-top: 40px;
    padding-left: 5px;
    font-weight: 500;
    font-family: inherit;
    letter-spacing: -3px;
    font-size: 40px;
}

.row {
    padding-top: 40px;
    letter-spacing: -1px;
}

/* Responsive de la page de connexion et d'inscription */
@media only screen and (max-width: 1024px) {
    .form-connexion {
        padding: 20px 0px;
    }

    .infos-accueil {
        padding: 20px 0px;
    }

    .infos-user {
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
        return new Source("/* Message d'erreur si l'utilisateur n'existe pas dans la base de données */
p.errorMessage {
    padding: 25px 10px;
    color: #ff0000;
    border-radius: 3px;
}

/* Bouton de connexion */
.btn {
    padding-left: 30px;
    padding-right: 30px;
}

/* Icone de profil */
.fa-user-circle {
    color: #FFFFFF;
    position: absolute;
    margin-left: -20px;
}

/* Taille des input dans le formulaire de connexion */
.form-control2 {
    width: 30%;
}

/* Formulaire de connexion */
.form-connexion {
    padding: 20px 150px;
}

/* Div avec les liens pour accéder aux séries */
.infos-accueil {
    float: left;
    padding: 20px 150px;
}

/* Div avec les liens pour l'utilisateur */
.infos-user {
    text-align: right;
    padding: 20px 80px;
}

/* Lien mot de passe oublié */
.lien-mot-de-passe-oublie {
    text-decoration: none;
    color: #000000;
    padding-left: 20px;
}

/* Lien mot de passe oublié quand il y a le survol de la souris */
.lien-mot-de-passe-oublie:hover {
    text-decoration: none;
    color: #000000;
}

/* Lien Home */
.link-home {
    background-color: #FFFFFF;
    padding: 15px 15px 15px 15px;
    text-transform: uppercase;
    font-size: 11px;
}

/* Liens de la barre de navigation */
.links-navbar {
    color: #9D4907;
    padding-left: 70px;
    padding-right: 70px;
    padding-top: 25px;
    padding-bottom: 20px;
    font-family: 'Roboto', sans-serif;
}

.links-navbar-accueil {
    color: #FFFFFF;
    padding-left: 30px;
    font-family: 'Roboto', sans-serif;
    text-decoration: underline;
    font-size: 20px;
    font-weight: 100;
}

/* Liens de la barre de navigation quand il y a le survol de la souris */
.links-navbar:hover {
    text-decoration: none;
    color: #9D4907;
}

.links-navbar-accueil:hover {
    text-decoration: none;
    color: #FFFFFF;
}

/* Fond et ajustements de la barre de navigation */
.navbar-background {
    background-color: #B16847;
    padding-top: 30px;
    padding-bottom: 60px;
}

/* Formulaire de connexion */
.titre-form {
    padding-top: 40px;
    padding-left: 5px;
    font-weight: 500;
    font-family: inherit;
    letter-spacing: -3px;
    font-size: 40px;
}

.row {
    padding-top: 40px;
    letter-spacing: -1px;
}

/* Responsive de la page de connexion et d'inscription */
@media only screen and (max-width: 1024px) {
    .form-connexion {
        padding: 20px 0px;
    }

    .infos-accueil {
        padding: 20px 0px;
    }

    .infos-user {
        padding: 20px 0px;
    }
}", "css/head.css", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\css\\head.css");
    }
}
