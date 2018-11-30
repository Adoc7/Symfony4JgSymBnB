<?php

/* admin/ad/edit.html.twig */
class __TwigTemplate_007efbf2c9217e7c84b21641e5c66b91725ca28255e62cb31cfe195d57cc2211 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/ad/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            '_an_images_widget' => array($this, 'block__an_images_widget'),
            '_an_images_entry_row' => array($this, 'block__an_images_entry_row'),
            '_an_images_entry_widget' => array($this, 'block__an_images_entry_widget'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/ad/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/ad/edit.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), array(0 => $this->getTemplateName()), true);
        // line 1
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

        echo "Modification de l'annonce numéro ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 3, $this->source); })()), "id", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<div class=\"container\">
    <h1 class=\"my-5\">Modification de l'annonce ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 11, $this->source); })()), "title", array()), "html", null, true);
        echo "</h1>

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card bg-light\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Corriger l'annonce ?</h4>
                </div>
                <div class=\"card-body\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), 'widget');
        echo "

                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-check\"></i>
                        Enregistrer les modifications
                    </button>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card bg-light\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Les réservations</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Voyageur</th>
                                <th>Date de réservation</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 47, $this->source); })()), "bookings", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 48
            echo "                            <tr>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "booker", array()), "fullName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "createdAt", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"#\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-pen\"></i>
                                    </a>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"card bg-light mt-5\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Les commentaires</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Voyageur</th>
                                <th>Note</th>
                                <th>Commentaire</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 79, $this->source); })()), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 80
            echo "                            <tr>
                                <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", array()), "fullName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"#\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-pen\"></i>
                                    </a>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block__an_images_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_an_images_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_an_images_widget"));

        // line 105
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->source); })()), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block__an_images_entry_row($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_an_images_entry_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_an_images_entry_row"));

        // line 109
        echo "    ";
        // line 110
        echo "    <div id=\"block_";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 110, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->source); })()), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block__an_images_entry_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_an_images_entry_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_an_images_entry_widget"));

        // line 118
        echo "    <div class=\"row align-items-center mb-3\">
        <div class=\"col-4\">
        ";
        // line 121
        echo "
            ";
        // line 122
        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 122, $this->source); })())) {
            // line 123
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 123, $this->source); })()), "url", array()), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"\">
              <span class=\"d-none\">";
            // line 124
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 124, $this->source); })()), "url", array()), 'row');
            echo "</span>
            ";
        }
        // line 126
        echo "        </div>
        <div class=\"col-6\">
            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->source); })()), "caption", array()), 'row');
        echo "
        </div>
        <div class=\"col\">
            <button type=\"button\" class=\"btn btn-danger\"
                    data-action=\"delete\" data-target=\"#block_";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 141
        echo "    <script>
        \$(document).ready(function() {
            \$('[data-action=\"delete\"]').on('click', function(){
                const target = this.dataset.target;
                \$(target).remove();                                
        });
    });    
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/ad/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 141,  341 => 140,  325 => 132,  318 => 128,  314 => 126,  309 => 124,  304 => 123,  302 => 122,  299 => 121,  295 => 118,  286 => 117,  273 => 111,  268 => 110,  266 => 109,  257 => 108,  244 => 105,  235 => 104,  222 => 99,  213 => 92,  199 => 84,  195 => 83,  191 => 82,  187 => 81,  184 => 80,  180 => 79,  158 => 59,  144 => 51,  140 => 50,  136 => 49,  133 => 48,  129 => 47,  101 => 22,  89 => 13,  84 => 11,  80 => 9,  71 => 8,  52 => 3,  42 => 1,  40 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/base.html.twig' %}

{% block title %}Modification de l'annonce numéro {{ad.id}}{% endblock %}

{% form_theme form _self %}


{% block body %}

<div class=\"container\">
    <h1 class=\"my-5\">Modification de l'annonce {{ad.title}}</h1>

    {{ form_start(form) }}

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card bg-light\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Corriger l'annonce ?</h4>
                </div>
                <div class=\"card-body\">
                    {{ form_widget(form) }}

                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-check\"></i>
                        Enregistrer les modifications
                    </button>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card bg-light\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Les réservations</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Voyageur</th>
                                <th>Date de réservation</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for booking in ad.bookings %}
                            <tr>
                                <td>{{booking.id}}</td>
                                <td>{{booking.booker.fullName}}</td>
                                <td>{{booking.createdAt | date('d/m/Y H:i')}}</td>
                                <td>
                                    <a href=\"#\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-pen\"></i>
                                    </a>
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"card bg-light mt-5\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Les commentaires</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Voyageur</th>
                                <th>Note</th>
                                <th>Commentaire</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for comment in ad.comments %}
                            <tr>
                                <td>{{comment.id}}</td>
                                <td>{{comment.author.fullName}}</td>
                                <td>{{comment.rating}}</td>
                                <td>{{comment.content}}</td>
                                <td>
                                    <a href=\"#\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-pen\"></i>
                                    </a>
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{ form_end(form) }}
</div>
{% endblock %}


{% block _an_images_widget %}
    {{ form_widget(form) }}
{% endblock %}

{% block _an_images_entry_row %}
    {# {{dump()}} #}
    <div id=\"block_{{id}}\">
        {{ form_widget(form) }}
    </div>
{% endblock %}



{% block _an_images_entry_widget %}
    <div class=\"row align-items-center mb-3\">
        <div class=\"col-4\">
        {# {{dump()}} #}

            {% if value %}
              <img src=\"{{value.url}}\" class=\"img-fluid\" alt=\"\">
              <span class=\"d-none\">{{ form_row(form.url) }}</span>
            {% endif %}
        </div>
        <div class=\"col-6\">
            {{ form_row(form.caption) }}
        </div>
        <div class=\"col\">
            <button type=\"button\" class=\"btn btn-danger\"
                    data-action=\"delete\" data-target=\"#block_{{id}}\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </div>
    </div>
{% endblock %}


{% block javascripts %}
    <script>
        \$(document).ready(function() {
            \$('[data-action=\"delete\"]').on('click', function(){
                const target = this.dataset.target;
                \$(target).remove();                                
        });
    });    
    </script>
{% endblock %}



", "admin/ad/edit.html.twig", "/var/www/html/symbnb/templates/admin/ad/edit.html.twig");
    }
}
