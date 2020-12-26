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

/* @alomed/pages/Rechercher.html.twig */
class __TwigTemplate_25c7cca48bd229019ad17a911af1b6b37b55cc522d68cab9facb8f2a6bda88c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@alomed/pages/Rechercher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@alomed/pages/Rechercher.html.twig"));

        // line 1
        echo "<h1>Rechercher d'un livreur</h1>
<form  action=\"\" method=\"POST\">
      Recherche :<input type=\"text\" name=\"input_recherche\"/>
    <input type=\"Submit\" name=\"rechercher\" value=\"Rechercher\"/>
</form>
";
        // line 6
        if (twig_test_empty(($context["livreur"] ?? $this->getContext($context, "livreur")))) {
            // line 7
            echo "Aucun livreur trouver
";
        } else {
            // line 9
            echo "<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Adresse</th>
    </tr>
    </thead>
    <tbody>
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["livreur"] ?? $this->getContext($context, "livreur")));
            foreach ($context['_seq'] as $context["_key"] => $context["liv"]) {
                // line 19
                echo "        <tr>
            <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "nom", []), "html", null, true);
                echo "</td>
            <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "prenom", []), "html", null, true);
                echo "</td>
            <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["liv"], "adresse", []), "html", null, true);
                echo "</td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        }
        // line 26
        echo "    </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@alomed/pages/Rechercher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  84 => 25,  75 => 22,  71 => 21,  67 => 20,  64 => 19,  60 => 18,  49 => 9,  45 => 7,  43 => 6,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>Rechercher d'un livreur</h1>
<form  action=\"\" method=\"POST\">
      Recherche :<input type=\"text\" name=\"input_recherche\"/>
    <input type=\"Submit\" name=\"rechercher\" value=\"Rechercher\"/>
</form>
{% if livreur is empty %}
Aucun livreur trouver
{% else %}
<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Adresse</th>
    </tr>
    </thead>
    <tbody>
    {% for liv in livreur %}
        <tr>
            <td>{{ liv.nom }}</td>
            <td>{{ liv.prenom }}</td>
            <td>{{ liv.adresse }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
</table>", "@alomed/pages/Rechercher.html.twig", "/opt/lampp/htdocs/Alomed1/src/alomedBundle/Resources/views/pages/Rechercher.html.twig");
    }
}
