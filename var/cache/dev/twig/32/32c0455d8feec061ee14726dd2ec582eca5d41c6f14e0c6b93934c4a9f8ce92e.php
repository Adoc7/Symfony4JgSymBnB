<?php

/* booking/show.html.twig */
class __TwigTemplate_ccc333df5e10a69c972e895eeea65d77c5570643a7f57d6d8ef91f780ff7fc92 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "booking/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Reservation n° : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 3, $this->source); })()), "id", array()), "html", null, true);
        echo "!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context["ad"] = twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 7, $this->source); })()), "ad", array());
        // line 8
        echo "    ";
        $context["author"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 8, $this->source); })()), "author", array());
        // line 9
        echo "
<div class=\"container\">
    <h1 class=\"my-5\">Votre réservation (n°";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 11, $this->source); })()), "id", array()), "html", null, true);
        echo ")</h1>

    ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "withAlert"), "method")) {
            // line 14
            echo "        <div class=\"alert alert-success\">
            <h4 class=\"alert-heading\">Bravo</h4>
            <p>
                Votre réservation auprès de
                <strong>
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 19, $this->source); })()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 19, $this->source); })()), "fullName", array()), "html", null, true);
            echo "</a>
                </strong>
                pour l'annonce
                <strong>
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 23, $this->source); })()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 23, $this->source); })()), "title", array()), "html", null, true);
            echo "</a>
                </strong>
                a bien été prise en compte
            </p>
        </div>

    ";
        }
        // line 30
        echo "
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"alert alert-light\">
                <h2>Détails</h2>
                <dl class=\"row\">
                    <dt class=\"col-md-4\">Numéro</dt>
                    <dd class=\"col-md-8\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 37, $this->source); })()), "id", array()), "html", null, true);
        echo "</dd>
                    <dt class=\"col-md-4\">Date d'arrivée</dt>
                    <dd class=\"col-md-8\">";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 39, $this->source); })()), "startDate", array()), "d/m/Y"), "html", null, true);
        echo "</dd>
                    <dt class=\"col-md-4\">Date de départ</dt>
                    <dd class=\"col-md-8\">";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 41, $this->source); })()), "endDate", array()), "d/m/Y"), "html", null, true);
        echo "</dd>
                    <dt class=\"col-md-4\">Nombre de nuits</dt>
                    <dd class=\"col-md-8\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 43, $this->source); })()), "duration", array()), "html", null, true);
        echo "</dd>
                    <dt class=\"col-md-4\">Montant total</dt>
                    <dd class=\"col-md-8\">";
        // line 45
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 45, $this->source); })()), "amount", array()), 2, ",", " "), "html", null, true);
        echo " &euro;</dd>
                    <dt class=\"col-md-4\">Commentaire</dt>
                    <dd class=\"col-md-8\">";
        // line 47
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", array()), "Aucun commentaire")) : ("Aucun commentaire")), "html", null, true);
        echo "</dd>
                </dl>
                <hr>
                <h2 class=\"alert-heading\">Votre hôte</h2>
                    <div class=\"row mb-3\">
                        <div class=\"col-3\">
                            <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 53, $this->source); })()), "picture", array()), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 53, $this->source); })()), "fullName", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-9\">
                            <h4>
                                <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 57, $this->source); })()), "slug", array()))), "html", null, true);
        echo "\">
                                ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 58, $this->source); })()), "fullName", array()), "html", null, true);
        echo "</a>                 
                            </h4>
                            <span class=\"badge badge-primary\">";
        // line 60
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 60, $this->source); })()), "ads", array())), "html", null, true);
        echo " annonces</span>                      
                        </div>
                    </div>
                    ";
        // line 63
        echo twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 63, $this->source); })()), "description", array());
        echo "
                    <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 64, $this->source); })()), "slug", array()))), "html", null, true);
        echo "\" class=\"btn bt-primary\">
                    Plus d'infos sur ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 65, $this->source); })()), "firstName", array()), "html", null, true);
        echo "</a>                  
            </div>
            <div class=\"alert alert-light\" id=\"comment\">
                <h2 class=\"alert-heading\">Votre avis compte</h2>

                ";
        // line 70
        if ((twig_date_converter($this->env) > twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 70, $this->source); })()), "endDate", array())))) {
            // line 71
            echo "                    ";
            $context["comment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 71, $this->source); })()), "ad", array()), "commentFromAuthor", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 71, $this->source); })()), "user", array())), "method");
            // line 72
            echo "                    ";
            if ( !(null === (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 72, $this->source); })()))) {
                // line 73
                echo "                        <blockquote>
                            ";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 74, $this->source); })()), "content", array()), "html", null, true);
                echo "
                        </blockquote>
                        <strong>Note : </strong> ";
                // line 76
                $this->loadTemplate("partials/rating.html.twig", "booking/show.html.twig", 76)->display(array_merge($context, array("rating" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 76, $this->source); })()), "rating", array()))));
                // line 77
                echo "
                    ";
            } else {
                // line 79
                echo "                        ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), 'form_start');
                echo "
                        ";
                // line 80
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), 'widget');
                echo "
                        <button type=\"submit\" class=\"btn btn-success\">Confirmer</button>
                        ";
                // line 82
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), 'form_end');
                echo "
                    ";
            }
            // line 84
            echo "                ";
        } else {
            // line 85
            echo "                    <p>Vous ne pourrez pas noter cette annonce tant que votre voyage ne sera pas complet</p>
                ";
        }
        // line 87
        echo "
            </div>
        </div>
        <div class=\"col\">
            <div class=\"alert alert-light\">
                <h2 class=\"alert-heading\">Votre hébergement</h2>
                    <h4>
                        <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 94, $this->source); })()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 94, $this->source); })()), "title", array()), "html", null, true);
        echo "</a>
                    </h4>
                    <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 96, $this->source); })()), "coverImage", array()), "html", null, true);
        echo "\" alt=\"image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 96, $this->source); })()), "title", array()), "html", null, true);
        echo "\" class=\"img-fluid\">
                    ";
        // line 97
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 97, $this->source); })()), "content", array());
        echo "
                    <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 98, $this->source); })()), "slug", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Plus d'infos</a>
            </div>
            
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "booking/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 98,  270 => 97,  264 => 96,  257 => 94,  248 => 87,  244 => 85,  241 => 84,  236 => 82,  231 => 80,  226 => 79,  222 => 77,  220 => 76,  215 => 74,  212 => 73,  209 => 72,  206 => 71,  204 => 70,  196 => 65,  192 => 64,  188 => 63,  182 => 60,  177 => 58,  173 => 57,  164 => 53,  155 => 47,  150 => 45,  145 => 43,  140 => 41,  135 => 39,  130 => 37,  121 => 30,  109 => 23,  100 => 19,  93 => 14,  91 => 13,  86 => 11,  82 => 9,  79 => 8,  77 => 7,  74 => 6,  65 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Reservation n° : {{ booking.id }}!{% endblock %}

{% block body %}

    {% set ad = booking.ad %}
    {% set author = ad.author %}

<div class=\"container\">
    <h1 class=\"my-5\">Votre réservation (n°{{booking.id}})</h1>

    {% if app.request.query.get('withAlert') %}
        <div class=\"alert alert-success\">
            <h4 class=\"alert-heading\">Bravo</h4>
            <p>
                Votre réservation auprès de
                <strong>
                    <a href=\"{{ path(\"user_show\", {'slug': author.slug}) }}\">{{author.fullName}}</a>
                </strong>
                pour l'annonce
                <strong>
                    <a href=\"{{ path(\"ads_show\", {'slug': ad.slug}) }}\">{{ad.title}}</a>
                </strong>
                a bien été prise en compte
            </p>
        </div>

    {% endif %}

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"alert alert-light\">
                <h2>Détails</h2>
                <dl class=\"row\">
                    <dt class=\"col-md-4\">Numéro</dt>
                    <dd class=\"col-md-8\">{{booking.id}}</dd>
                    <dt class=\"col-md-4\">Date d'arrivée</dt>
                    <dd class=\"col-md-8\">{{booking.startDate | date('d/m/Y')}}</dd>
                    <dt class=\"col-md-4\">Date de départ</dt>
                    <dd class=\"col-md-8\">{{booking.endDate  | date('d/m/Y')}}</dd>
                    <dt class=\"col-md-4\">Nombre de nuits</dt>
                    <dd class=\"col-md-8\">{{booking.duration}}</dd>
                    <dt class=\"col-md-4\">Montant total</dt>
                    <dd class=\"col-md-8\">{{booking.amount | number_format(2, ',', ' ')}} &euro;</dd>
                    <dt class=\"col-md-4\">Commentaire</dt>
                    <dd class=\"col-md-8\">{{booking.comment|default('Aucun commentaire')}}</dd>
                </dl>
                <hr>
                <h2 class=\"alert-heading\">Votre hôte</h2>
                    <div class=\"row mb-3\">
                        <div class=\"col-3\">
                            <img src=\"{{author.picture}}\" class=\"avatar avatar-medium\" alt=\"Avatar de {{author.fullName}}\">
                        </div>
                        <div class=\"col-9\">
                            <h4>
                                <a href=\"{{ path('user_show', {'slug': author.slug}) }}\">
                                {{author.fullName}}</a>                 
                            </h4>
                            <span class=\"badge badge-primary\">{{author.ads|length}} annonces</span>                      
                        </div>
                    </div>
                    {{author.description|raw}}
                    <a href=\"{{ path(\"user_show\", {'slug': author.slug}) }}\" class=\"btn bt-primary\">
                    Plus d'infos sur {{author.firstName}}</a>                  
            </div>
            <div class=\"alert alert-light\" id=\"comment\">
                <h2 class=\"alert-heading\">Votre avis compte</h2>

                {% if date() > date(booking.endDate) %}
                    {% set comment = booking.ad.commentFromAuthor(app.user) %}
                    {% if comment is not null %}
                        <blockquote>
                            {{comment.content}}
                        </blockquote>
                        <strong>Note : </strong> {% include 'partials/rating.html.twig' with {'rating' : comment.rating} %}

                    {% else %}
                        {{form_start(form)}}
                        {{form_widget(form)}}
                        <button type=\"submit\" class=\"btn btn-success\">Confirmer</button>
                        {{form_end(form)}}
                    {% endif %}
                {% else %}
                    <p>Vous ne pourrez pas noter cette annonce tant que votre voyage ne sera pas complet</p>
                {% endif %}

            </div>
        </div>
        <div class=\"col\">
            <div class=\"alert alert-light\">
                <h2 class=\"alert-heading\">Votre hébergement</h2>
                    <h4>
                        <a href=\"{{ path(\"ads_show\", {'slug': ad.slug}) }}\">{{ad.title}}</a>
                    </h4>
                    <img src=\"{{ad.coverImage}}\" alt=\"image de {{ad.title}}\" class=\"img-fluid\">
                    {{ad.content|raw}}
                    <a href=\"{{ path(\"ads_show\", {'slug': ad.slug}) }}\" class=\"btn btn-primary\">Plus d'infos</a>
            </div>
            
        </div>
    </div>
</div>
{% endblock %}

", "booking/show.html.twig", "/var/www/html/symbnb/templates/booking/show.html.twig");
    }
}
