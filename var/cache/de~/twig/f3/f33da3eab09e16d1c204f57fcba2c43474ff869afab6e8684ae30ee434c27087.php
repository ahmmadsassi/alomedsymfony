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

/* @alomed/pages/indexmedecin.html.twig */
class __TwigTemplate_fc0eddf2f83f10e25ab745b977519fac144bf582a6691531912ba9e204841f13 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@alomed/pages/indexmedecin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@alomed/pages/indexmedecin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>home page </title>
    <script src=\"https://code.jquery.com/jquery-3.5.0.js\"></script>
    <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\"  href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\"  href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style1.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\"  href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/2.css"), "html", null, true);
        echo "\" />


    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</head>
<nav >

<div class=\"logo\">
    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/logo.jpg"), "html", null, true);
        echo "\" style=\"width: 90px\">
</div>
<label for=\"btn\" class=\"icon\">
    <span class=\"fa fa-bars\"></span>
</label>
<input type=\"checkbox\" id=\"btn\">
<ul>
    <li><a href=\"#\">Home</a></li>
    <li>

        <a href=\"#\">Services</a>
        <input type=\"checkbox\" id=\"btn-1\">
        <ul>
            <li><a href=\"#\">Hospitals</a></li>
            <li><a href=\"#\">Clinics</a></li>
        </ul>
    </li>
    <li><a href=\"#\">News</a></li>
    <li>
        <a href=\"#\">Contact</a>
        <input type=\"checkbox\" id=\"btn-1\">
        <ul>
            <li><a href=\"#\">E-mail</a></li>
            <li><a href=\"#\">Facebook</a></li>
            <li><a href=\"#\">Instagram</a></li>
        </ul>
    </li>
    <li><a href=\"index.html\">|  Login</a></li>
</ul>
</nav>
<body class=\"back\" >

<h1 id=\"Liste\">LISTE DES MEDECINS</h1>
<div class=\"container\">

    <table class=\"table table-striped table-hover \">
        <thead>
        <tr id=\"champs\">
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date Naissance</th>
            <th>E-mail</th>
            <th>Mot de passe</th>
            <th>Télephone</th>
            <th>Addresse Cabinet</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["medecin"] ?? $this->getContext($context, "medecin")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["liv"]) {
            // line 83
            echo "            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "id", []), "html", null, true);
            echo "</td>
            <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "nom", []), "html", null, true);
            echo "</td>
            <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "prenom", []), "html", null, true);
            echo "</td>
            <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "datenaiss", []), "html", null, true);
            echo "</td>
            <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "email", []), "html", null, true);
            echo "</td>
            <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "password", []), "html", null, true);
            echo "</td>
            <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "telephone", []), "html", null, true);
            echo "</td>
            <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "addressecabinet", []), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
            echo "app_dev.php/medecin/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "id", []), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-eye-open \" id=\"a\" aria-hidden=\"true\" ></a>&nbsp;&nbsp
                <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
            echo "app_dev.php/updatemedecin/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "id", []), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-pencil\" id=\"a\" aria-hidden=\"true\"></a>&nbsp;&nbsp
                <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
            echo "app_dev.php/deletemedecin/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "id", []), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-trash\" id=\"a\" aria-hidden=\"true\"></a>&nbsp;&nbsp
            </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 97
            echo "            <tr>
                <td>
                    no data found
                </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "        </tbody>
    </table>
    <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/medecin\" id=\"a1\">
        <button class=\"btn btn-success\" id=\"btn22\">
            <span id=\"plus\" class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\">
              Créer un médecin
            </span>
        </button>
    </a>
</div>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@alomed/pages/indexmedecin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 106,  204 => 104,  192 => 97,  181 => 93,  175 => 92,  169 => 91,  165 => 90,  161 => 89,  157 => 88,  153 => 87,  149 => 86,  145 => 85,  141 => 84,  136 => 83,  131 => 82,  78 => 32,  60 => 17,  56 => 16,  52 => 15,  36 => 1,);
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
    <script src=\"https://code.jquery.com/jquery-3.5.0.js\"></script>
    <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\"  href=\"{{ asset('css/bootstrap.css') }}\" />
    <link rel=\"stylesheet\"  href=\"{{ asset('css/style1.css') }}\" />
    <link rel=\"stylesheet\"  href=\"{{ asset('css/2.css') }}\" />


    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</head>
<nav >

<div class=\"logo\">
    <img src=\"{{ asset('css/logo.jpg') }}\" style=\"width: 90px\">
</div>
<label for=\"btn\" class=\"icon\">
    <span class=\"fa fa-bars\"></span>
</label>
<input type=\"checkbox\" id=\"btn\">
<ul>
    <li><a href=\"#\">Home</a></li>
    <li>

        <a href=\"#\">Services</a>
        <input type=\"checkbox\" id=\"btn-1\">
        <ul>
            <li><a href=\"#\">Hospitals</a></li>
            <li><a href=\"#\">Clinics</a></li>
        </ul>
    </li>
    <li><a href=\"#\">News</a></li>
    <li>
        <a href=\"#\">Contact</a>
        <input type=\"checkbox\" id=\"btn-1\">
        <ul>
            <li><a href=\"#\">E-mail</a></li>
            <li><a href=\"#\">Facebook</a></li>
            <li><a href=\"#\">Instagram</a></li>
        </ul>
    </li>
    <li><a href=\"index.html\">|  Login</a></li>
</ul>
</nav>
<body class=\"back\" >

<h1 id=\"Liste\">LISTE DES MEDECINS</h1>
<div class=\"container\">

    <table class=\"table table-striped table-hover \">
        <thead>
        <tr id=\"champs\">
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date Naissance</th>
            <th>E-mail</th>
            <th>Mot de passe</th>
            <th>Télephone</th>
            <th>Addresse Cabinet</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            {% for liv in medecin %}
            <td>{{ liv.id }}</td>
            <td>{{ liv.nom }}</td>
            <td>{{ liv.prenom }}</td>
            <td>{{ liv.datenaiss}}</td>
            <td>{{ liv.email}}</td>
            <td>{{ liv.password}}</td>
            <td>{{ liv.telephone}}</td>
            <td>{{ liv.addressecabinet}}</td>
            <td><a href=\"{{ absolute_url(asset('')) }}app_dev.php/medecin/{{ liv.id }}\" class=\"glyphicon glyphicon-eye-open \" id=\"a\" aria-hidden=\"true\" ></a>&nbsp;&nbsp
                <a href=\"{{ absolute_url(asset('')) }}app_dev.php/updatemedecin/{{ liv.id }}\" class=\"glyphicon glyphicon-pencil\" id=\"a\" aria-hidden=\"true\"></a>&nbsp;&nbsp
                <a href=\"{{ absolute_url(asset('')) }}app_dev.php/deletemedecin/{{ liv.id }}\" class=\"glyphicon glyphicon-trash\" id=\"a\" aria-hidden=\"true\"></a>&nbsp;&nbsp
            </td>
        </tr>
        {% else %}
            <tr>
                <td>
                    no data found
                </td>

            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a href=\"{{ absolute_url(asset(''))}}app_dev.php/medecin\" id=\"a1\">
        <button class=\"btn btn-success\" id=\"btn22\">
            <span id=\"plus\" class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\">
              Créer un médecin
            </span>
        </button>
    </a>
</div>

</body>
</html>", "@alomed/pages/indexmedecin.html.twig", "/opt/lampp/htdocs/Alomed1/src/alomedBundle/Resources/views/pages/indexmedecin.html.twig");
    }
}
