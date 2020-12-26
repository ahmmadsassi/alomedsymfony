<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pharmacie/index.html.twig */
class __TwigTemplate_a67437251294cc968a5960657d2902b6f8b00c1344b4a0a919ef8a9cb12a6b60 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pharmacie/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pharmacie/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>home page </title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css")), "html", null, true);
        echo "\" />
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #87CEEB;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #87CEFA;

        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #0000FF;
        }
        h3 {
            display: block;
            font-size: 3em;
            margin-top: 1em;
            margin-bottom: 1em;
            margin-left: 0;
            margin-right: 0;
            font-weight: bold;
            color: #111111;
        }


        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }
        .button {
            background-color: #4CAF50;
            border-radius: 8px;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px 1px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            margin: 30px 40px;
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
            padding: 6px 4px;
        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }

        .button2 {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
            padding: 6px 4px;
        }

        .button2:hover {
            background-color: #008CBA;
            color: white;

        }

        .button3 {
            background-color: white;
            color: black;
            border: 2px solid #f44336;
            padding: 6px 4px;
        }

        .button3:hover {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Pharmacies list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pharmacies"] ?? $this->getContext($context, "pharmacies")));
        foreach ($context['_seq'] as $context["_key"] => $context["pharmacie"]) {
            // line 129
            echo "            <tr>
                <td><a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pharmacie_show", ["id" => $this->getAttribute($context["pharmacie"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pharmacie"], "id", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["pharmacie"], "nom", []), "html", null, true);
            echo "</td>
                <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["pharmacie"], "prenom", []), "html", null, true);
            echo "</td>
                <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["pharmacie"], "adresse", []), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pharmacie_show", ["id" => $this->getAttribute($context["pharmacie"], "id", [])]), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pharmacie_edit", ["id" => $this->getAttribute($context["pharmacie"], "id", [])]), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pharmacie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pharmacie_new");
        echo "\">Create a new pharmacie</a>
        </li>
    </ul>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pharmacie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 151,  214 => 146,  202 => 140,  196 => 137,  189 => 133,  185 => 132,  181 => 131,  175 => 130,  172 => 129,  168 => 128,  43 => 6,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>home page </title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ absolute_url(asset('css/bootstrap.css')) }}\" />
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #87CEEB;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #87CEFA;

        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #0000FF;
        }
        h3 {
            display: block;
            font-size: 3em;
            margin-top: 1em;
            margin-bottom: 1em;
            margin-left: 0;
            margin-right: 0;
            font-weight: bold;
            color: #111111;
        }


        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }
        .button {
            background-color: #4CAF50;
            border-radius: 8px;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px 1px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            margin: 30px 40px;
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
            padding: 6px 4px;
        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }

        .button2 {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
            padding: 6px 4px;
        }

        .button2:hover {
            background-color: #008CBA;
            color: white;

        }

        .button3 {
            background-color: white;
            color: black;
            border: 2px solid #f44336;
            padding: 6px 4px;
        }

        .button3:hover {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Pharmacies list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for pharmacie in pharmacies %}
            <tr>
                <td><a href=\"{{ path('pharmacie_show', { 'id': pharmacie.id }) }}\">{{ pharmacie.id }}</a></td>
                <td>{{ pharmacie.nom }}</td>
                <td>{{ pharmacie.prenom }}</td>
                <td>{{ pharmacie.adresse }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('pharmacie_show', { 'id': pharmacie.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('pharmacie_edit', { 'id': pharmacie.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('pharmacie_new') }}\">Create a new pharmacie</a>
        </li>
    </ul>
</body>
</html>
", "pharmacie/index.html.twig", "/opt/lampp/htdocs/Alomed1/app/Resources/views/pharmacie/index.html.twig");
    }
}
