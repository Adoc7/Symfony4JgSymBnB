<?php

/* booking/book.html.twig */
class __TwigTemplate_2236473361ef755a59839c0afeb67f2f43e2d1d84ec21cf9ec6ed4ff8add8ff1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "booking/book.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "booking/book.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "booking/book.html.twig"));

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

        echo "Reserver l'annonce : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 3, $this->source); })()), "title", array()), "html", null, true);
        echo "!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css\" /> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"container\">
        <h1>Réserver pour l'annonce : ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 11, $this->source); })()), "title", array()), "html", null, true);
        echo "</h1>
        <p>Vous êtes sur le point de réserver le bien de 
        <strong>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 13, $this->source); })()), "author", array()), "fullname", array()), "html", null, true);
        echo "</strong>,
        dites nous tout on s'occupe du reste</p>

        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
        <div class=\"alert alert-light\">
            <h2>Commencez par nous dire quelles sont les dates qui vous intéressent</h2>
            <div class=\"row\">
            <div class=\"col\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "startDate", array()), 'row');
        echo "
            </div>
            <div class=\"col\"></div>
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "endDate", array()), 'row');
        echo "
            </div>
        </div>
    <h4>Montant du séjour : <span id=\"amount\">...</span> &euro;</h4>
    <span id=\"days\">0</span> nuit(s) à ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 28, $this->source); })()), "price", array()), "html", null, true);
        echo " &euro;/ nuit

    <h4 class=\"mt-3\">Vous avez un commentaire ?</h4>
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "comment", array()), 'row');
        echo "
    </div>


    <h2>Vous avez terminé</h2>
    <p>Vacances de rêve ? Hebergement pour le boulot ?
        Peu importe, on est avec vous.
    </p>

    <button type=\"submit\" class=\"btn btn-success\">Je réserve !</button>

    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js\"></script>

<script>
\$(document).ready(function(){
    \$('#booking_startDate, #booking_endDate').datepicker({
        format: 'dd/mm/yyyy',
        datesDisabled: [
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 53, $this->source); })()), "notAvailableDays", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 54
            echo "                \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "format", array(0 => "d/m/Y"), "method"), "html", null, true);
            echo "\", 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        ],
        startDate: new Date()
    });
    \$('#booking_startDate, #booking_endDate').on('change', calculateAmount);
});

// Calculer le montant
function calculateAmount(){
    // on chope les dates
    const endDate   = new Date(\$('#booking_endDate').val().replace(/(\\d+)\\/(\\d+)\\/(\\d{4})/, '\$3-\$2-\$1'));
    // exemple pour les expressions regulieres
    // 18/09/2018
    // (\\d+)\\/(\\d+)\\/(\\d{4})
    // 2018-09-18
   
   const startDate = new Date(\$('#booking_startDate').val().replace(/(\\d+)\\/(\\d+)\\/(\\d{4})/, '\$3-\$2-\$1'));
    if (startDate && endDate && startDate < endDate){
        const DAY_TIME = 24 * 60 * 60 * 1000;
        const interval = endDate.getTime() - startDate.getTime();
        const days     = interval / DAY_TIME;
        const amount   = days * ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 76, $this->source); })()), "price", array()), "html", null, true);
        echo ";
        \$('#days').text(days);
        \$('#amount').text(amount.toLocaleString('fr-FR'));
    }
}
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "booking/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 76,  194 => 56,  185 => 54,  181 => 53,  172 => 46,  163 => 45,  151 => 42,  137 => 31,  131 => 28,  124 => 24,  118 => 21,  110 => 16,  104 => 13,  99 => 11,  96 => 10,  87 => 9,  76 => 6,  67 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Reserver l'annonce : {{ ad.title }}!{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css\" /> 
{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Réserver pour l'annonce : {{ ad.title }}</h1>
        <p>Vous êtes sur le point de réserver le bien de 
        <strong>{{ ad.author.fullname }}</strong>,
        dites nous tout on s'occupe du reste</p>

        {{ form_start(form) }}
        <div class=\"alert alert-light\">
            <h2>Commencez par nous dire quelles sont les dates qui vous intéressent</h2>
            <div class=\"row\">
            <div class=\"col\">
                {{form_row(form.startDate)}}
            </div>
            <div class=\"col\"></div>
                {{form_row(form.endDate)}}
            </div>
        </div>
    <h4>Montant du séjour : <span id=\"amount\">...</span> &euro;</h4>
    <span id=\"days\">0</span> nuit(s) à {{ad.price}} &euro;/ nuit

    <h4 class=\"mt-3\">Vous avez un commentaire ?</h4>
    {{ form_row(form.comment) }}
    </div>


    <h2>Vous avez terminé</h2>
    <p>Vacances de rêve ? Hebergement pour le boulot ?
        Peu importe, on est avec vous.
    </p>

    <button type=\"submit\" class=\"btn btn-success\">Je réserve !</button>

    {{form_end(form)}}
{% endblock %}

{% block javascripts %}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js\"></script>

<script>
\$(document).ready(function(){
    \$('#booking_startDate, #booking_endDate').datepicker({
        format: 'dd/mm/yyyy',
        datesDisabled: [
            {% for day in ad.notAvailableDays %}
                \"{{ day.format('d/m/Y') }}\", 
            {% endfor %}
        ],
        startDate: new Date()
    });
    \$('#booking_startDate, #booking_endDate').on('change', calculateAmount);
});

// Calculer le montant
function calculateAmount(){
    // on chope les dates
    const endDate   = new Date(\$('#booking_endDate').val().replace(/(\\d+)\\/(\\d+)\\/(\\d{4})/, '\$3-\$2-\$1'));
    // exemple pour les expressions regulieres
    // 18/09/2018
    // (\\d+)\\/(\\d+)\\/(\\d{4})
    // 2018-09-18
   
   const startDate = new Date(\$('#booking_startDate').val().replace(/(\\d+)\\/(\\d+)\\/(\\d{4})/, '\$3-\$2-\$1'));
    if (startDate && endDate && startDate < endDate){
        const DAY_TIME = 24 * 60 * 60 * 1000;
        const interval = endDate.getTime() - startDate.getTime();
        const days     = interval / DAY_TIME;
        const amount   = days * {{ad.price}};
        \$('#days').text(days);
        \$('#amount').text(amount.toLocaleString('fr-FR'));
    }
}
</script>
{% endblock %}

", "booking/book.html.twig", "/var/www/html/symbnb/templates/booking/book.html.twig");
    }
}
