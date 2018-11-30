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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 5, $this->source); })()), "price", array()), 2, ",", " "), "html", null, true);
        echo "&euro; / nuit</strong><br>
                    ";
        // line 6
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 6, $this->source); })()), "comments", array())) > 0)) {
            // line 7
            echo "                        ";
            $this->loadTemplate("partials/rating.html.twig", "ad/_ad.html.twig", 7)->display(array_merge($context, array("rating" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 7, $this->source); })()), "avgRatings", array()))));
            // line 8
            echo "                    ";
        } else {
            // line 9
            echo "                         <small>Pas encore noté</small>
                    ";
        }
        // line 10
        echo "     
        </div>
            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 13, $this->source); })()), "coverImage", array()), "html", null, true);
        echo "\" alt=\"Image de l'appartement\" style=\"height:200px; width: 100%; display: block\">
            </a>
        <div class=\"card-body\"></div>
            <h4 class=\"card-title\"><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 16, $this->source); })()), "title", array()), "html", null, true);
        echo "</a</h4>
            <p class=\"card-text\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 17, $this->source); })()), "introduction", array()), "html", null, true);
        echo "</p>
                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary float-right\">En savoir plus</a>
            ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "user", array()) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "user", array()) == twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 19, $this->source); })()), "author", array())))) {
            // line 20
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 20, $this->source); })()), "slug", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            ";
        }
        // line 22
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
        return array (  90 => 22,  84 => 20,  82 => 19,  78 => 18,  74 => 17,  68 => 16,  62 => 13,  58 => 12,  54 => 10,  50 => 9,  47 => 8,  44 => 7,  42 => 6,  36 => 5,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set url = path('ads_show', {'slug':ad.slug}) %}
<div class=\"col-md-4\">
    <div class=\"card bg-light mb-3\">
        <div class=\"card-header text-center\">
                {{ad.rooms}} chambres, <strong>{{ad.price | number_format(2, ',', ' ') }}&euro; / nuit</strong><br>
                    {% if ad.comments|length > 0 %}
                        {% include 'partials/rating.html.twig' with {'rating':ad.avgRatings} %}
                    {% else %}
                         <small>Pas encore noté</small>
                    {% endif %}     
        </div>
            <a href=\"{{ url }}\">
                <img src=\"{{ad.coverImage}}\" alt=\"Image de l'appartement\" style=\"height:200px; width: 100%; display: block\">
            </a>
        <div class=\"card-body\"></div>
            <h4 class=\"card-title\"><a href=\"{{ url }}\">{{ad.title}}</a</h4>
            <p class=\"card-text\">{{ad.introduction}}</p>
                <a href=\"{{ url }}\" class=\"btn btn-primary float-right\">En savoir plus</a>
            {% if app.user and app.user == ad.author %}
                <a href=\"{{ path('ads_edit',{'slug': ad.slug}) }}\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            {% endif %}
    </div>
</div>", "ad/_ad.html.twig", "/var/www/html/symbnb/templates/ad/_ad.html.twig");
    }
}
