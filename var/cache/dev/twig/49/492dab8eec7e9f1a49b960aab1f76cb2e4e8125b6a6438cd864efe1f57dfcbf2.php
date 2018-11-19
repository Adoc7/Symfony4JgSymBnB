<?php

/* ad/_ad.html.twig */
class __TwigTemplate_6b884d75043a06866bbcfbb93d8735bc71503fbc3d4881260014b05bff71fcf0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ad/_ad.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ad/_ad.html.twig"));

        // line 1
        $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 1, $this->source); })()), "slug", array())));
        // line 2
        echo "<div class=\"col-md-4\">
    <div class=\"card bg-light mb-3\">
        <div class=\"card-header text-center\">
                ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 5, $this->source); })()), "rooms", array()), "html", null, true);
        echo " chambres, <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 5, $this->source); })()), "price", array()), "html", null, true);
        echo "&euro; / nuit</strong><br>
                    <small>Pas encore noté</small>
        </div>
            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\">
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 9, $this->source); })()), "coverImage", array()), "html", null, true);
        echo "\" alt=\"Image de l'appartement\" style=\"height:200px; width: 100%; display: block\">
            </a>
        <div class=\"card-body\"></div>
            <h4 class=\"card-title\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 12, $this->source); })()), "title", array()), "html", null, true);
        echo "</a</h4>
            <p class=\"card-text\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 13, $this->source); })()), "introduction", array()), "html", null, true);
        echo "</p>
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-secondary\">En savoir plus</a>
            ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "user", array()) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "user", array()) == twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 15, $this->source); })()), "author", array())))) {
            // line 16
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 16, $this->source); })()), "slug", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            ";
        }
        // line 18
        echo "    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ad/_ad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  70 => 16,  68 => 15,  64 => 14,  60 => 13,  54 => 12,  48 => 9,  44 => 8,  36 => 5,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set url = path('ads_show', {'slug':ad.slug}) %}
<div class=\"col-md-4\">
    <div class=\"card bg-light mb-3\">
        <div class=\"card-header text-center\">
                {{ad.rooms}} chambres, <strong>{{ad.price}}&euro; / nuit</strong><br>
                    <small>Pas encore noté</small>
        </div>
            <a href=\"{{ url }}\">
                <img src=\"{{ad.coverImage}}\" alt=\"Image de l'appartement\" style=\"height:200px; width: 100%; display: block\">
            </a>
        <div class=\"card-body\"></div>
            <h4 class=\"card-title\"><a href=\"{{ url }}\">{{ad.title}}</a</h4>
            <p class=\"card-text\">{{ad.introduction}}</p>
                <a href=\"{{ url }}\" class=\"btn btn-secondary\">En savoir plus</a>
            {% if app.user and app.user == ad.author %}
                <a href=\"{{ path('ads_edit',{'slug': ad.slug}) }}\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            {% endif %}
    </div>
</div>", "ad/_ad.html.twig", "/var/www/html/symbnb/templates/ad/_ad.html.twig");
    }
}
