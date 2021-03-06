<?php

/* ad/show.html.twig */
class __TwigTemplate_1e1f6c441243842d205204c333ef57e60b51110ed48e50d5723372c46a9bb040 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ad/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 4, $this->source); })()), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<div class=\"ad-title\" style=\"background-image: url(";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 10, $this->source); })()), "coverImage", array()), "html", null, true);
        echo ")\">
    <div class=\"container\">
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 12, $this->source); })()), "title", array()), "html", null, true);
        echo "</h1>
    <p>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 13, $this->source); })()), "introduction", array()), "html", null, true);
        echo "</p>
    <p class=\"h2\">
    <strong>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 15, $this->source); })()), "rooms", array()), "html", null, true);
        echo " chambres</strong> pour <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 15, $this->source); })()), "price", array()), "html", null, true);
        echo "&euro;</strong> par nuit
    </p>
    <a href=\"#\" class=\"btn btn-primary\">Réserver</a>

    ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "user", array()) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "user", array()) == twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 19, $this->source); })()), "author", array())))) {
            // line 20
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 20, $this->source); })()), "slug", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier l'annonce</a>
    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_delete", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 21, $this->source); })()), "slug", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"
    onclick=\"return confirm(`Etes vous certains de vouloir supprimer l'annonce : ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 22, $this->source); })()), "title", array()), "html", null, true);
            echo " ?`)\">Supprimer l'annonce</a>
    ";
        }
        // line 24
        echo "

    </div>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8 mb-3\">
            ";
        // line 32
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 32, $this->source); })()), "content", array());
        echo "

            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 36, $this->source); })()), "images", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 37
            echo "                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
            echo "\" 
                    ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                echo "class=\"active\"";
            }
            echo "></li>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "               
                </ol>
                <div class=\"carousel-inner\">
                    
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 44, $this->source); })()), "images", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 45
            echo "
                    <div class=\"carousel-item ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                echo "active";
            }
            echo "\">
                    <img class=\"d-block w-100\" src=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "url", array()), "html", null, true);
            echo "\" alt=\"First slide\">
                        <div class=\"carousel-caption d-none d-md-block\">
                            <h5>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 49, $this->source); })()), "title", array()), "html", null, true);
            echo "</h5>
                            <p>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "caption", array()), "html", null, true);
            echo "</p>
                        </div>                 
                    </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
        </div>

        </div>
        <div class=\"col\">
            ";
        // line 67
        $context["a"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 67, $this->source); })()), "author", array());
        // line 68
        echo "            <div class=\"row\">
                <div class=\"col-3\">
                    <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 70, $this->source); })()), "slug", array()))), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 71, $this->source); })()), "picture", array()), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 71, $this->source); })()), "fullName", array()), "html", null, true);
        echo "\">
                    </a>
                </div>
                <div class=\"col\">

                <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 76, $this->source); })()), "slug", array()))), "html", null, true);
        echo "\">
                    <h3>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 77, $this->source); })()), "fullName", array()), "html", null, true);
        echo "</h3>
                </a>
                
                <span class=\"badge badge-primary\">";
        // line 80
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 80, $this->source); })()), "ads", array())), "html", null, true);
        echo " annonces</span> 
                </div>
            </div>
            ";
        // line 83
        echo twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 83, $this->source); })()), "description", array());
        echo "
        </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ad/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 83,  263 => 80,  257 => 77,  253 => 76,  243 => 71,  239 => 70,  235 => 68,  233 => 67,  218 => 54,  200 => 50,  196 => 49,  191 => 47,  185 => 46,  182 => 45,  165 => 44,  159 => 40,  141 => 38,  136 => 37,  119 => 36,  112 => 32,  102 => 24,  97 => 22,  93 => 21,  88 => 20,  86 => 19,  77 => 15,  72 => 13,  68 => 12,  63 => 10,  60 => 9,  54 => 8,  45 => 4,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
{{ad.title}}
{% endblock %}


{% block body %}

<div class=\"ad-title\" style=\"background-image: url({{ad.coverImage}})\">
    <div class=\"container\">
    <h1>{{ad.title}}</h1>
    <p>{{ad.introduction}}</p>
    <p class=\"h2\">
    <strong>{{ad.rooms}} chambres</strong> pour <strong>{{ad.price}}&euro;</strong> par nuit
    </p>
    <a href=\"#\" class=\"btn btn-primary\">Réserver</a>

    {% if app.user and app.user == ad.author %}
    <a href=\"{{ path('ads_edit',  {'slug': ad.slug}) }}\" class=\"btn btn-secondary\">Modifier l'annonce</a>
    <a href=\"{{ path('ads_delete',{'slug': ad.slug}) }}\" class=\"btn btn-danger\"
    onclick=\"return confirm(`Etes vous certains de vouloir supprimer l'annonce : {{ad.title}} ?`)\">Supprimer l'annonce</a>
    {% endif %}


    </div>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8 mb-3\">
            {{ad.content | raw}}

            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    {%for image in ad.images %}
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{loop.index0}}\" 
                    {% if loop.first %}class=\"active\"{% endif %}></li>
                    {% endfor %}
               
                </ol>
                <div class=\"carousel-inner\">
                    
                    {% for image in ad.images %}

                    <div class=\"carousel-item {% if loop.first%}active{% endif %}\">
                    <img class=\"d-block w-100\" src=\"{{image.url}}\" alt=\"First slide\">
                        <div class=\"carousel-caption d-none d-md-block\">
                            <h5>{{ad.title}}</h5>
                            <p>{{image.caption}}</p>
                        </div>                 
                    </div>
                    {% endfor %}
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
        </div>

        </div>
        <div class=\"col\">
            {% set a = ad.author %}
            <div class=\"row\">
                <div class=\"col-3\">
                    <a href=\"{{ path('user_show', {'slug': a.slug}) }}\">
                        <img src=\"{{a.picture}}\" class=\"avatar avatar-medium\" alt=\"Avatar de {{a.fullName}}\">
                    </a>
                </div>
                <div class=\"col\">

                <a href=\"{{ path('user_show', {'slug': a.slug}) }}\">
                    <h3>{{a.fullName}}</h3>
                </a>
                
                <span class=\"badge badge-primary\">{{a.ads | length}} annonces</span> 
                </div>
            </div>
            {{ a.description | raw }}
        </div>
    </div>
</div>


{% endblock %}

", "ad/show.html.twig", "/var/www/html/symbnb/templates/ad/show.html.twig");
    }
}
