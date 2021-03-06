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

/* alomedBundle:Default:about.html.twig */
class __TwigTemplate_91019f2d9c636df6d34237b0e9a32cc3c69bc57f66b2a8af0484f8867765f695 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "alomedBundle:Default:about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "alomedBundle:Default:about.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"utf-8\">
    <title>Nous somme</title>
    <style type=\"text/css\">
        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }
    </style>

    <script src=\"https://code.jquery.com/jquery-3.5.0.js\"></script>
    <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\"  href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style2.css"), "html", null, true);
        echo "\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<video autoplay muted loop id=\"myVideo\">
    <source src=\"allomed.mp4\" type=\"video/avi\">
    Your browser does not support HTML5 video.
</video>
<nav >

    <div class=\"logo\">
        <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/logo.jpg"), "html", null, true);
        echo "\" style=\"width: 120px\">
    </div>
    <label for=\"btn\" class=\"icon\">
        <span class=\"fa fa-bars\"></span>
    </label>
    <input type=\"checkbox\" id=\"btn\">
    <ul>

        <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/about\">NOUS SOMMES QUI?</a></li>
        <li>
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/contact\">CONTACTER NOUS</a>
        </li>
        <li><a href=\"";
        // line 47
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
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/\">
            <i class=\"fas fa-qrcode\"></i>
            <span>Acceuil</span>
        </a>


        <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/about\">
            <i class=\"far fa-question-circle\"></i>
            <span>?? propos</span>
        </a>
        <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "app_dev.php/contact\">
            <i class=\"far fa-envelope\"></i>
            <span>Contacter</span>
        </a>
    </div>
</div>
<div class=\"h1\">
    <h1> QUI NOUS SOMMES?</h1>
</div>
<div class=\"content\">

    <link rel=\"stylesheet\"  href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" />


    <h6>AlloMed</h6><p>  Est une application m??dical sp??cialis??e dans l'organisation de s??jours m??dicaux en Tunisie. Nous sommes leaders dans l'??laboration de packages all inclusive organis??s autour des interventions de chirurgie esth??tique, de m??decine morphologique, de chirurgie de l'ob??sit??, de chirurgie g??n??rale et de f??condation in vitro.
        Vous pouvez s??curiser votre choix de SantePro en confirmant notre adresse et nos coordonn??es sur notre page mentions l??gales.</p>
        <ul>Les services m??dicaux repr??sentent 4% des exportations tunisiennes. Cela montre ?? la fois l'essor et le succ??s d'un secteur qui s'appuie sur plus de 120 cliniques priv??es. Mais quantit?? ne vaut pas qualit??. Pour r??pondre aux exigences d'une patient??le de plus en plus soucieuse de qualit??, l'agence Sant??Pro a d??velopp?? une infrastructure de prise en charge fond??e sur un principe de management qualit?? fort :
            <br>
            <li>Dire ce que l'on fait.</li>
            <li>Faire ce que l'on dit.</li>
            <li>V??rifier si ce qu'on a fait correspond ?? ce qui a ??t?? dit.</li>
        </ul>
        <ul>Toutes nos ??quipes sont form??es ?? ce principe. Des conseill??res qui soumettent vos demandes de devis aux chirurgiens qui vont vous op??rer quand vous serez sur place. Pour respecter ce principe recommand?? par les offices qualit??, Sant??Pro vous adresse un devis complet qui d??taille le tarif propos?? et les ??tapes de votre prise en charge en Tunisie. Une fois sur place, nous validons avec vous le bon d??roulement de chacune des ??tapes et des services indiqu??s. C'est notre engagement de satisfaction.</ul>
        <ul>Pendant le s??jour, un assistant s'occupe de vous ?? votre arriv??e, ?? la clinique et ?? l'h??tel. Apr??s votre d??part, une conseill??re vous appelle pour vous questionner et s'assurer que vous ??tes satisfait de la prestation m??dicale et de la prestation touristique. Un Blog est ??galement ?? votre service, pour r??pondre ?? vos questions sur les interventions chirurgicales. Il permet ??galement ?? nos ??quipes d'aborder de mani??re enrichie les r??flexions autour de la beaut??, de l'image dans leurs rapports avec la chirurgie et plus globalement dans notre vie de tous les jours.</ul>
</div>

<script>
    \$('.icon').click(function(){
        \$('span').toggleClass(\"cancel\");
    });
</script>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "alomedBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 81,  128 => 70,  121 => 66,  112 => 60,  96 => 47,  91 => 45,  86 => 43,  75 => 35,  61 => 24,  36 => 1,);
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
    <title>Nous somme</title>
    <style type=\"text/css\">
        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }
    </style>

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
<video autoplay muted loop id=\"myVideo\">
    <source src=\"allomed.mp4\" type=\"video/avi\">
    Your browser does not support HTML5 video.
</video>
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
            <span>?? propos</span>
        </a>
        <a href=\"{{ absolute_url(asset('')) }}app_dev.php/contact\">
            <i class=\"far fa-envelope\"></i>
            <span>Contacter</span>
        </a>
    </div>
</div>
<div class=\"h1\">
    <h1> QUI NOUS SOMMES?</h1>
</div>
<div class=\"content\">

    <link rel=\"stylesheet\"  href=\"{{ asset('css/styles.css') }}\" />


    <h6>AlloMed</h6><p>  Est une application m??dical sp??cialis??e dans l'organisation de s??jours m??dicaux en Tunisie. Nous sommes leaders dans l'??laboration de packages all inclusive organis??s autour des interventions de chirurgie esth??tique, de m??decine morphologique, de chirurgie de l'ob??sit??, de chirurgie g??n??rale et de f??condation in vitro.
        Vous pouvez s??curiser votre choix de SantePro en confirmant notre adresse et nos coordonn??es sur notre page mentions l??gales.</p>
        <ul>Les services m??dicaux repr??sentent 4% des exportations tunisiennes. Cela montre ?? la fois l'essor et le succ??s d'un secteur qui s'appuie sur plus de 120 cliniques priv??es. Mais quantit?? ne vaut pas qualit??. Pour r??pondre aux exigences d'une patient??le de plus en plus soucieuse de qualit??, l'agence Sant??Pro a d??velopp?? une infrastructure de prise en charge fond??e sur un principe de management qualit?? fort :
            <br>
            <li>Dire ce que l'on fait.</li>
            <li>Faire ce que l'on dit.</li>
            <li>V??rifier si ce qu'on a fait correspond ?? ce qui a ??t?? dit.</li>
        </ul>
        <ul>Toutes nos ??quipes sont form??es ?? ce principe. Des conseill??res qui soumettent vos demandes de devis aux chirurgiens qui vont vous op??rer quand vous serez sur place. Pour respecter ce principe recommand?? par les offices qualit??, Sant??Pro vous adresse un devis complet qui d??taille le tarif propos?? et les ??tapes de votre prise en charge en Tunisie. Une fois sur place, nous validons avec vous le bon d??roulement de chacune des ??tapes et des services indiqu??s. C'est notre engagement de satisfaction.</ul>
        <ul>Pendant le s??jour, un assistant s'occupe de vous ?? votre arriv??e, ?? la clinique et ?? l'h??tel. Apr??s votre d??part, une conseill??re vous appelle pour vous questionner et s'assurer que vous ??tes satisfait de la prestation m??dicale et de la prestation touristique. Un Blog est ??galement ?? votre service, pour r??pondre ?? vos questions sur les interventions chirurgicales. Il permet ??galement ?? nos ??quipes d'aborder de mani??re enrichie les r??flexions autour de la beaut??, de l'image dans leurs rapports avec la chirurgie et plus globalement dans notre vie de tous les jours.</ul>
</div>

<script>
    \$('.icon').click(function(){
        \$('span').toggleClass(\"cancel\");
    });
</script>

</body>
</html>
", "alomedBundle:Default:about.html.twig", "/opt/lampp/htdocs/Alomed1/src/alomedBundle/Resources/views/Default/about.html.twig");
    }
}
