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

/* coin_cap/index.html.twig */
class __TwigTemplate_bc50b91fba29c594f7a23bdce8463d94d38610af001ad711c275aaabb7c7a285 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coin_cap/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coin_cap/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title></title>
</head>
<body>
<h1>Liste des cryptos avec leur prix</h1>

<canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>

<footer>
    <p>Copyright, monsite.com</p>
</footer>

<script
        src=\"https://code.jquery.com/jquery-3.6.0.min.js\"
        integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\"
        crossorigin=\"anonymous\"></script>


<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js\"></script>

<script>
    const data = {
        labels: ";
        // line 26
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["cryptos"]) || array_key_exists("cryptos", $context) ? $context["cryptos"] : (function () { throw new RuntimeError('Variable "cryptos" does not exist.', 26, $this->source); })()), "labels", [], "any", false, false, false, 26));
        echo ",
        datasets: [{
            label: 'My First Dataset',
            data: ";
        // line 29
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["cryptos"]) || array_key_exists("cryptos", $context) ? $context["cryptos"] : (function () { throw new RuntimeError('Variable "cryptos" does not exist.', 29, $this->source); })()), "values", [], "any", false, false, false, 29));
        echo ",
            borderWidth: 200
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    };

    const ctx = \$('#myChart');
    const chart = new Chart(ctx, config);
</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "coin_cap/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 29,  70 => 26,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title></title>
</head>
<body>
<h1>Liste des cryptos avec leur prix</h1>

<canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>

<footer>
    <p>Copyright, monsite.com</p>
</footer>

<script
        src=\"https://code.jquery.com/jquery-3.6.0.min.js\"
        integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\"
        crossorigin=\"anonymous\"></script>


<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js\"></script>

<script>
    const data = {
        labels: {{ cryptos.labels|json_encode|raw }},
        datasets: [{
            label: 'My First Dataset',
            data: {{ cryptos.values|json_encode|raw }},
            borderWidth: 200
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    };

    const ctx = \$('#myChart');
    const chart = new Chart(ctx, config);
</script>
</body>
</html>
", "coin_cap/index.html.twig", "C:\\Users\\valen\\perrinecoupy\\PPE-PHP-Gestion-des-locations\\templates\\coin_cap\\index.html.twig");
    }
}
