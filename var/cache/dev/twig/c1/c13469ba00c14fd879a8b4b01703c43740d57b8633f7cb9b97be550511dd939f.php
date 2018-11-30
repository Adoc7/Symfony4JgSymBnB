<?php

/* account/bookings.html.twig */
class __TwigTemplate_c8b9b8aeafec3733ec2c31eb0670899afc4098724ea5e4f3095ed106528ab389 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/bookings.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/bookings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/bookings.html.twig"));

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

        echo "Vos réservations";
        
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
<div class=\"container\">
    <h1 class=\"my-5\">Mes réservations</h1>
    <div class=\"alert alert-info mt-3\">
        <p>Retrouvez ci-dessous toutes vos réservations passées et à venir</p>
    </div>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "user", array()), "bookings", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 13
            echo "        ";
            $context["ad"] = twig_get_attribute($this->env, $this->source, $context["booking"], "ad", array());
            // line 14
            echo "        <div class=\"row mt-5\">
            <div class=\"col-md-4\">
                <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 16, $this->source); })()), "coverImage", array()), "html", null, true);
            echo "\" alt=\"Photo de l'annonce : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 16, $this->source); })()), "title", array()), "html", null, true);
            echo "\" class=\"img-fluid\">

            <div class=\"mt-3\">
                ";
            // line 19
            $context["comment"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 19, $this->source); })()), "commentFromAuthor", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "user", array())), "method");
            // line 20
            echo "                ";
            if ( !(null === (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 20, $this->source); })()))) {
                // line 21
                echo "                    <strong>Note donnée : </strong> ";
                $this->loadTemplate("partials/rating.html.twig", "account/bookings.html.twig", 21)->display(array_merge($context, array("rating" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 21, $this->source); })()), "rating", array()))));
                // line 22
                echo "                ";
            } else {
                // line 23
                echo "                    Vous n'avez pas encore donné de note.
                    <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_show", array("id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", array()))), "html", null, true);
                echo "#comment\">
                    <br>
                    Je donne mon avis</a>                    
                ";
            }
            // line 28
            echo "            </div>
            </div>
            <div class=\"col-md-8\">
                <h4>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 31, $this->source); })()), "title", array()), "html", null, true);
            echo "</h4>
                    <p>
                        Réservation <strong>n° ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", array()), "html", null, true);
            echo "</strong>
                        <br>
                        Du ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "startDate", array()), "d/m/Y"), "html", null, true);
            echo "
                        au ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "endDate", array()), "d/m/Y"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "amount", array()), 2, ",", " "), "html", null, true);
            echo " &euro; )
                    </p>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_show", array("id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">Plus d'informations</a>                  
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/bookings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 42,  159 => 38,  152 => 36,  148 => 35,  143 => 33,  138 => 31,  133 => 28,  126 => 24,  123 => 23,  120 => 22,  117 => 21,  114 => 20,  112 => 19,  104 => 16,  100 => 14,  97 => 13,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Vos réservations{% endblock %}

{% block body %}

<div class=\"container\">
    <h1 class=\"my-5\">Mes réservations</h1>
    <div class=\"alert alert-info mt-3\">
        <p>Retrouvez ci-dessous toutes vos réservations passées et à venir</p>
    </div>
    {% for booking in app.user.bookings %}
        {% set ad = booking.ad %}
        <div class=\"row mt-5\">
            <div class=\"col-md-4\">
                <img src=\"{{ad.coverImage}}\" alt=\"Photo de l'annonce : {{ad.title}}\" class=\"img-fluid\">

            <div class=\"mt-3\">
                {% set comment = ad.commentFromAuthor(app.user) %}
                {% if comment is not null %}
                    <strong>Note donnée : </strong> {% include 'partials/rating.html.twig' with {'rating' : comment.rating} %}
                {% else %}
                    Vous n'avez pas encore donné de note.
                    <a href=\"{{ path('booking_show', {'id' : booking.id}) }}#comment\">
                    <br>
                    Je donne mon avis</a>                    
                {% endif %}
            </div>
            </div>
            <div class=\"col-md-8\">
                <h4>{{ad.title}}</h4>
                    <p>
                        Réservation <strong>n° {{booking.id}}</strong>
                        <br>
                        Du {{ booking.startDate|date('d/m/Y') }}
                        au {{ booking.endDate|date('d/m/Y') }} ({{booking.amount| number_format(2, ',', ' ')}} &euro; )
                    </p>
                    <a href=\"{{ path('booking_show', {'id': booking.id}) }}\" class=\"btn btn-info\">Plus d'informations</a>                  
            </div>
        </div>
    {% endfor %}
</div>

{% endblock %}", "account/bookings.html.twig", "/var/www/html/symbnb/templates/account/bookings.html.twig");
    }
}
