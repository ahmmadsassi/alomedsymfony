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

/* alomedBundle:Default:contact.html.twig */
class __TwigTemplate_e46cb69d54dc6276f202cb502c4f3cbbc949b8c881ede028e1e590fd663ef19d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "alomedBundle:Default:contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "alomedBundle:Default:contact.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"utf-8\">
    <title> Contacter nous</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <script src=\"https://code.jquery.com/jquery-3.5.0.js\"></script>
    <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\"  href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style2.css"), "html", null, true);
        echo "\" />


    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<nav >

    <div class=\"logo\">
        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/logo.jpg"), "html", null, true);
        echo "\" style=\"width: 120px\">
    </div>
    <label for=\"btn\" class=\"icon\">
        <span class=\"fa fa-bars\"></span>
    </label>
    <input type=\"checkbox\" id=\"btn\">
    <ul>

        <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/about\">NOUS SOMMES QUI?</a></li>
        <li>
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/contact\">CONTACTER NOUS</a>
        </li>
        <li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/role\">|  SE CONNECTER</a> </li>
    </ul>
</nav>

<!----------- Side Menu ----------->
<div class=\"SideBarContainer\">
    <input type=\"checkbox\" id=\"check\">
    <label for=\"check\" id=\"btnSlider\">
        <i class=\"fas fa-bars\" id=\"btn\"></i>
        <i class=\"fas fa-times\" id=\"cancel\"></i>
    </label>
    <div class=\"sidebar\">
        <header></header>

        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/\">
            <i class=\"fas fa-qrcode\"></i>
            <span>Acceuil</span>
        </a>

        <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/about\">
            <i class=\"far fa-question-circle\"></i>
            <span>à propos</span>
        </a>
        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/contact\">
            <i class=\"far fa-envelope\"></i>
            <span>Contacter</span>
        </a>
    </div>
</div>

<div class=\"contact-section\">
    <link rel=\"stylesheet\"  href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style3.css"), "html", null, true);
        echo "\" />
    <form class=\"contact-form\" action=\"index.html\" method=\"post\">
        <div class=\"box\">
            <h1>Contact Us</h1>
            <input type=\"text\" class=\"contact-form-text\" placeholder=\"Votre nom\">
            <input type=\"email\" class=\"contact-form-text\" placeholder=\"Votre email\">
            <input type=\"text\" class=\"contact-form-text\" placeholder=\"Votre télephone\">
            <textarea class=\"contact-form-text\" placeholder=\"Votre message\"></textarea>
            <input type=\"submit\" value=\"Envoyer\">
        </div>
    </form>
    <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bgg.png"), "html", null, true);
        echo "\" style=\"width: 1220px ;height:700px\">

</div>

<script>
    \$('.icon').click(function(){
        \$('span').toggleClass(\"cancel\");
    });
</script>

</body>
</html>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "alomedBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 78,  128 => 67,  117 => 59,  110 => 55,  102 => 50,  85 => 36,  80 => 34,  75 => 32,  64 => 24,  52 => 15,  36 => 1,);
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
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"utf-8\">
    <title> Contacter nous</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <script src=\"https://code.jquery.com/jquery-3.5.0.js\"></script>
    <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\"  href=\"{{ asset('css/style2.css') }}\" />


    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<nav >

    <div class=\"logo\">
        <img src=\"{{ asset('css/logo.jpg') }}\" style=\"width: 120px\">
    </div>
    <label for=\"btn\" class=\"icon\">
        <span class=\"fa fa-bars\"></span>
    </label>
    <input type=\"checkbox\" id=\"btn\">
    <ul>

        <li><a href=\"{{ absolute_url(asset('')) }}app_dev.php/about\">NOUS SOMMES QUI?</a></li>
        <li>
            <a href=\"{{ absolute_url(asset('')) }}app_dev.php/contact\">CONTACTER NOUS</a>
        </li>
        <li><a href=\"{{ absolute_url(asset('')) }}app_dev.php/role\">|  SE CONNECTER</a> </li>
    </ul>
</nav>

<!----------- Side Menu ----------->
<div class=\"SideBarContainer\">
    <input type=\"checkbox\" id=\"check\">
    <label for=\"check\" id=\"btnSlider\">
        <i class=\"fas fa-bars\" id=\"btn\"></i>
        <i class=\"fas fa-times\" id=\"cancel\"></i>
    </label>
    <div class=\"sidebar\">
        <header></header>

        <a href=\"{{ absolute_url(asset('')) }}app_dev.php/\">
            <i class=\"fas fa-qrcode\"></i>
            <span>Acceuil</span>
        </a>

        <a href=\"{{ absolute_url(asset('')) }}app_dev.php/about\">
            <i class=\"far fa-question-circle\"></i>
            <span>à propos</span>
        </a>
        <a href=\"{{ absolute_url(asset('')) }}app_dev.php/contact\">
            <i class=\"far fa-envelope\"></i>
            <span>Contacter</span>
        </a>
    </div>
</div>

<div class=\"contact-section\">
    <link rel=\"stylesheet\"  href=\"{{ asset('css/style3.css') }}\" />
    <form class=\"contact-form\" action=\"index.html\" method=\"post\">
        <div class=\"box\">
            <h1>Contact Us</h1>
            <input type=\"text\" class=\"contact-form-text\" placeholder=\"Votre nom\">
            <input type=\"email\" class=\"contact-form-text\" placeholder=\"Votre email\">
            <input type=\"text\" class=\"contact-form-text\" placeholder=\"Votre télephone\">
            <textarea class=\"contact-form-text\" placeholder=\"Votre message\"></textarea>
            <input type=\"submit\" value=\"Envoyer\">
        </div>
    </form>
    <img src=\"{{ asset('css/bgg.png') }}\" style=\"width: 1220px ;height:700px\">

</div>

<script>
    \$('.icon').click(function(){
        \$('span').toggleClass(\"cancel\");
    });
</script>

</body>
</html>
</body>
</html>
", "alomedBundle:Default:contact.html.twig", "/opt/lampp/htdocs/Alomed1/src/alomedBundle/Resources/views/Default/contact.html.twig");
    }
}
