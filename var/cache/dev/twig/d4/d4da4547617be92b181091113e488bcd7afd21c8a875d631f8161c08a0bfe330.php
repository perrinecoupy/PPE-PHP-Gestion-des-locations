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

/* base.html.twig */
class __TwigTemplate_2fc2d92998f78732018e7b0d5549d041b357354f4b010cba8f2ad4b2c228742e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Page d'accueil</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx\" crossorigin=\"anonymous\"></script>
    <script src=\"script.js\"></script>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
<body>
";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 96
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/head.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    ";
        $this->loadTemplate("includes/_head.html.twig", "base.html.twig", 15)->display($context);
        // line 16
        echo "        <!--<img src=\"<br />
        <b>Warning</b>:  Undefined variable \$donnees in <b>C:\\xampp\\htdocs\\My Series Companion\\serie.php</b> on line <b>21</b><br />
        <br />
        <b>Warning</b>:  Trying to access array offset on value of type null in <b>C:\\xampp\\htdocs\\My Series Companion\\serie.php</b> on line <b>21</b><br />
        images/\" alt=\"...\">-->

        <h1>Mes Séries</h1>

        <div class=\"btnSerie\">
            <div>
                <img src=\"img/marsu.jpg\" alt=\"...\"></div>
                <div>
                    <div>
                        <h3>Marsupilami</h3>
                    </div>
                    <div class=\"serieInfo\">
                        <p><i class=\"fas fa-calendar\"></i> 2021-10-09</p>
                        <p><i class=\"fas fa-exclamation-circle\"></i> Saison 4</p>
                        <p>Episode 1</p>
                        <p class=\"duree\">Terminer</p>
                        <p class=\"cat\">Aventure</p>
                    </div>
                    <div>
                        <p>Le marsupilami</p>
                    </div>
                </div>
                <div>
                    <a class=\"btn\" href=\"\"><h1>></h1></a>
                </div>
            </div>
        </div>
        <div class=\"btnSerie\">
            <div>
                <img src=\"img/f2r.jpg\" alt=\"...\"></div>
                <div>
                    <div>
                        <h3>Foot 2 Rue</h3>
                    </div>
                    <div class=\"serieInfo\">
                        <p><i class=\"fas fa-calendar\"></i> 2021-10-09</p>
                        <p><i class=\"fas fa-exclamation-circle\"></i> Saison 2</p>
                        <p>Episode 6</p>
                        <p class=\"duree\">Terminer</p>
                        <p class=\"cat\">Sport</p>
                    </div>
                    <div>
                        <p>Tag l'orphelin joue au foot avec des clodos.</p>
                    </div>
                </div>
                <div>
                    <a class=\"btn\" href=\"\"><h1>></h1></a>
                </div>
            </div>
        </div>
        <div class=\"btnSerie\">
            <div>
                <img src=\"img/tortues.jpg\" alt=\"...\"></div>
                <div>
                    <div>
                        <h3>Tortues Ninja</h3>
                    </div>
                    <div class=\"serieInfo\">
                        <p><i class=\"fas fa-calendar\"></i> 2012-10-09</p>
                        <p><i class=\"fas fa-exclamation-circle\"></i> Saison 1</p>
                        <p>Episode 11</p>
                        <p class=\"duree\">Terminer</p>
                        <p class=\"cat\">Action</p>
                    </div>
                    <div>
                        <p>Tortues mutans contre un méchant</p>
                    </div>
                </div>
                <div>
                    <a class=\"btn\" href=\"\"><h1>></h1></a>
                </div>
            </div>
        </div>

        ";
        // line 94
        $this->loadTemplate("footer.html.twig", "base.html.twig", 94)->display($context);
        // line 95
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  195 => 95,  193 => 94,  113 => 16,  110 => 15,  100 => 14,  88 => 10,  83 => 9,  73 => 8,  62 => 96,  60 => 14,  56 => 12,  54 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Page d'accueil</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx\" crossorigin=\"anonymous\"></script>
    <script src=\"script.js\"></script>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/head.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/footer.css') }}\">
    {% endblock %}
</head>
<body>
{% block body %}
    {% include 'includes/_head.html.twig' %}
        <!--<img src=\"<br />
        <b>Warning</b>:  Undefined variable \$donnees in <b>C:\\xampp\\htdocs\\My Series Companion\\serie.php</b> on line <b>21</b><br />
        <br />
        <b>Warning</b>:  Trying to access array offset on value of type null in <b>C:\\xampp\\htdocs\\My Series Companion\\serie.php</b> on line <b>21</b><br />
        images/\" alt=\"...\">-->

        <h1>Mes Séries</h1>

        <div class=\"btnSerie\">
            <div>
                <img src=\"img/marsu.jpg\" alt=\"...\"></div>
                <div>
                    <div>
                        <h3>Marsupilami</h3>
                    </div>
                    <div class=\"serieInfo\">
                        <p><i class=\"fas fa-calendar\"></i> 2021-10-09</p>
                        <p><i class=\"fas fa-exclamation-circle\"></i> Saison 4</p>
                        <p>Episode 1</p>
                        <p class=\"duree\">Terminer</p>
                        <p class=\"cat\">Aventure</p>
                    </div>
                    <div>
                        <p>Le marsupilami</p>
                    </div>
                </div>
                <div>
                    <a class=\"btn\" href=\"\"><h1>></h1></a>
                </div>
            </div>
        </div>
        <div class=\"btnSerie\">
            <div>
                <img src=\"img/f2r.jpg\" alt=\"...\"></div>
                <div>
                    <div>
                        <h3>Foot 2 Rue</h3>
                    </div>
                    <div class=\"serieInfo\">
                        <p><i class=\"fas fa-calendar\"></i> 2021-10-09</p>
                        <p><i class=\"fas fa-exclamation-circle\"></i> Saison 2</p>
                        <p>Episode 6</p>
                        <p class=\"duree\">Terminer</p>
                        <p class=\"cat\">Sport</p>
                    </div>
                    <div>
                        <p>Tag l'orphelin joue au foot avec des clodos.</p>
                    </div>
                </div>
                <div>
                    <a class=\"btn\" href=\"\"><h1>></h1></a>
                </div>
            </div>
        </div>
        <div class=\"btnSerie\">
            <div>
                <img src=\"img/tortues.jpg\" alt=\"...\"></div>
                <div>
                    <div>
                        <h3>Tortues Ninja</h3>
                    </div>
                    <div class=\"serieInfo\">
                        <p><i class=\"fas fa-calendar\"></i> 2012-10-09</p>
                        <p><i class=\"fas fa-exclamation-circle\"></i> Saison 1</p>
                        <p>Episode 11</p>
                        <p class=\"duree\">Terminer</p>
                        <p class=\"cat\">Action</p>
                    </div>
                    <div>
                        <p>Tortues mutans contre un méchant</p>
                    </div>
                </div>
                <div>
                    <a class=\"btn\" href=\"\"><h1>></h1></a>
                </div>
            </div>
        </div>

        {% include 'footer.html.twig' %}
        {% endblock %}
    </body>
</html>", "base.html.twig", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\base.html.twig");
    }
}
