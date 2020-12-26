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

/* @alomed/pages/patientindex.html.twig */
class __TwigTemplate_1c7ecd5ba5b5b0bb67aee2186b23a1b76596807f49eb80ca1b8ce062b94279a2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@alomed/pages/patientindex.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@alomed/pages/patientindex.html.twig"));

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
        echo "\" style=\"width: 120px\">
    </div>
    <label for=\"btn\" class=\"icon\">
        <span class=\"fa fa-bars\"></span>
    </label>
    <input type=\"checkbox\" id=\"btn\">
    <ul>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/indexmedecin\">MÉDECIN</a>
        </li>
        <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/indexpatient\">Patient</a></li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/index\">LIVREUR</a>
        </li>
        <li><a href=\"index.html\">|  SE DÉCONNECTER</a></li>
    </ul>
</nav>
<body class=\"back\" >

<h1 id=\"Liste\">LISTE DES Patient</h1>
<div class=\"container\">

    <table class=\"table \">
        <thead>
        <tr id=\"champs\">
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>DATE DE NAISSANCE</th>
            <th>E-MAIL</th>
            <th>MOT DE PASSE</th>
            <th>TELEPHONE</th>
            <th>ADDRESSE </th>
            <th>ACTION</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["patient"] ?? $this->getContext($context, "patient")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["liv"]) {
            // line 71
            echo "            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "id", []), "html", null, true);
            echo "</td>
            <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "nom", []), "html", null, true);
            echo "</td>
            <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "prenom", []), "html", null, true);
            echo "</td>
            <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["liv"], "getDateDeNaissance", [], "method"), "d-m-Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "email", []), "html", null, true);
            echo "</td>
            <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "password", []), "html", null, true);
            echo "</td>
            <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "telephone", []), "html", null, true);
            echo "</td>
            <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "addresse", []), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
            echo "app_dev.php/patient/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "id", []), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-eye-open \" id=\"a\" aria-hidden=\"true\" ></a>&nbsp;&nbsp
                <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
            echo "app_dev.php/updatepatient/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "id", []), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-pencil\" id=\"a\" aria-hidden=\"true\"></a>&nbsp;&nbsp
                <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
            echo "app_dev.php/deletepatient/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "id", []), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-trash\" id=\"a\" aria-hidden=\"true\"></a>&nbsp;&nbsp
            </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 85
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
        // line 92
        echo "        </tbody>
    </table>
    <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/patient\" id=\"a1\">
        <button class=\"btn btn-primary\">
            <span id=\"plus\" class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\">
                <span class=\"p\"> Créer un Patient</span>
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
        return "@alomed/pages/patientindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 94,  201 => 92,  189 => 85,  178 => 81,  172 => 80,  166 => 79,  162 => 78,  158 => 77,  154 => 76,  150 => 75,  146 => 74,  142 => 73,  138 => 72,  133 => 71,  128 => 70,  99 => 44,  94 => 42,  89 => 40,  78 => 32,  60 => 17,  56 => 16,  52 => 15,  36 => 1,);
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
        <img src=\"{{ asset('css/logo.jpg') }}\" style=\"width: 120px\">
    </div>
    <label for=\"btn\" class=\"icon\">
        <span class=\"fa fa-bars\"></span>
    </label>
    <input type=\"checkbox\" id=\"btn\">
    <ul>
        <li>
            <a href=\"{{ absolute_url(asset('')) }}app_dev.php/indexmedecin\">MÉDECIN</a>
        </li>
        <li><a href=\"{{ absolute_url(asset('')) }}app_dev.php/indexpatient\">Patient</a></li>
        <li>
            <a href=\"{{ absolute_url(asset('')) }}app_dev.php/index\">LIVREUR</a>
        </li>
        <li><a href=\"index.html\">|  SE DÉCONNECTER</a></li>
    </ul>
</nav>
<body class=\"back\" >

<h1 id=\"Liste\">LISTE DES Patient</h1>
<div class=\"container\">

    <table class=\"table \">
        <thead>
        <tr id=\"champs\">
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>DATE DE NAISSANCE</th>
            <th>E-MAIL</th>
            <th>MOT DE PASSE</th>
            <th>TELEPHONE</th>
            <th>ADDRESSE </th>
            <th>ACTION</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            {% for liv in patient %}
            <td>{{ liv.id }}</td>
            <td>{{ liv.nom }}</td>
            <td>{{ liv.prenom }}</td>
            <td>{{ liv.getDateDeNaissance()|date('d-m-Y')}}</td>
            <td>{{ liv.email}}</td>
            <td>{{ liv.password}}</td>
            <td>{{ liv.telephone}}</td>
            <td>{{ liv.addresse}}</td>
            <td><a href=\"{{ absolute_url(asset('')) }}app_dev.php/patient/{{ liv.id }}\" class=\"glyphicon glyphicon-eye-open \" id=\"a\" aria-hidden=\"true\" ></a>&nbsp;&nbsp
                <a href=\"{{ absolute_url(asset('')) }}app_dev.php/updatepatient/{{ liv.id }}\" class=\"glyphicon glyphicon-pencil\" id=\"a\" aria-hidden=\"true\"></a>&nbsp;&nbsp
                <a href=\"{{ absolute_url(asset('')) }}app_dev.php/deletepatient/{{ liv.id }}\" class=\"glyphicon glyphicon-trash\" id=\"a\" aria-hidden=\"true\"></a>&nbsp;&nbsp
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
    <a href=\"{{ absolute_url(asset(''))}}app_dev.php/patient\" id=\"a1\">
        <button class=\"btn btn-primary\">
            <span id=\"plus\" class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\">
                <span class=\"p\"> Créer un Patient</span>
            </span>
        </button>
    </a>
</div>

</body>
</html>", "@alomed/pages/patientindex.html.twig", "/opt/lampp/htdocs/Alomed1/src/alomedBundle/Resources/views/pages/patientindex.html.twig");
    }
}
