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

/* @alomed/pages/view.html.twig */
class __TwigTemplate_0e0e4d3d255264e3ae825baf64d5c20f30f391036de7825d957d31ddf3fbccc5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@alomed/pages/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@alomed/pages/view.html.twig"));

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
<body>
<ul>
    <li><a href=\"#\">Alomed plateforme</a></li>
</ul>
<div class=\"container\">
    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/index\" class=\"btn btn-danger btn-xs\">Back</a>
    <div class=\"list-group\">
        <table>
            <tr>livreur</tr>
            <tr>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livreur"] ?? $this->getContext($context, "livreur")), "id", []), "html", null, true);
        echo "</td>
                <td><p class=\"list-group-item\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livreur"] ?? $this->getContext($context, "livreur")), "nom", []), "html", null, true);
        echo " </p></td>
                <p class=\"list-group-item\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livreur"] ?? $this->getContext($context, "livreur")), "prenom", []), "html", null, true);
        echo " </p>
                <p class=\"list-group-item\">";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["livreur"] ?? $this->getContext($context, "livreur")), "getDateDeNaissance", [], "method"), "d-m-Y"), "html", null, true);
        echo " </p>
                <p class=\"list-group-item\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livreur"] ?? $this->getContext($context, "livreur")), "email", []), "html", null, true);
        echo " </p>
                <p class=\"list-group-item\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livreur"] ?? $this->getContext($context, "livreur")), "password", []), "html", null, true);
        echo " </p>
                <p class=\"list-group-item\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livreur"] ?? $this->getContext($context, "livreur")), "telephone", []), "html", null, true);
        echo " </p>
                <p class=\"list-group-item\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livreur"] ?? $this->getContext($context, "livreur")), "addresse", []), "html", null, true);
        echo " </p>
                <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/index\" class=\"btn btn-danger btn-xs\">Back</a></tr>
        </table>
    </div>


</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@alomed/pages/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 48,  117 => 47,  113 => 46,  109 => 45,  105 => 44,  101 => 43,  97 => 42,  93 => 41,  89 => 40,  81 => 35,  60 => 17,  56 => 16,  52 => 15,  36 => 1,);
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
<body>
<ul>
    <li><a href=\"#\">Alomed plateforme</a></li>
</ul>
<div class=\"container\">
    <a href=\"{{ absolute_url(asset('')) }}app_dev.php/index\" class=\"btn btn-danger btn-xs\">Back</a>
    <div class=\"list-group\">
        <table>
            <tr>livreur</tr>
            <tr>
                <td>{{ livreur.id}}</td>
                <td><p class=\"list-group-item\">{{ livreur.nom}} </p></td>
                <p class=\"list-group-item\">{{ livreur.prenom}} </p>
                <p class=\"list-group-item\">{{ livreur.getDateDeNaissance()|date('d-m-Y')}} </p>
                <p class=\"list-group-item\">{{ livreur.email}} </p>
                <p class=\"list-group-item\">{{ livreur.password}} </p>
                <p class=\"list-group-item\">{{ livreur.telephone}} </p>
                <p class=\"list-group-item\">{{ livreur.addresse}} </p>
                <a href=\"{{ absolute_url(asset('')) }}app_dev.php/index\" class=\"btn btn-danger btn-xs\">Back</a></tr>
        </table>
    </div>


</div>
</body>
</html>", "@alomed/pages/view.html.twig", "/opt/lampp/htdocs/Alomed1/src/alomedBundle/Resources/views/pages/view.html.twig");
    }
}
