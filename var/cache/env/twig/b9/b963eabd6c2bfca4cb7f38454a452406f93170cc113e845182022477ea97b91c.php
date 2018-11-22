<?php

/* account/login.html.twig */
class __TwigTemplate_6bb3f2cbbf87a6d7c8adce6804edddab6fbceedfc32fea54133535a79fa4ef87 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/login.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion au site";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">
        ";
        // line 9
        echo "        <div class=\"col-md-3\">&nbsp</div>
            <div class=\"col-md-6\">
                <div class=\"bg-secondary py-3 px-3\">
                <h1>Se connecter</h1>

                ";
        // line 14
        if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new Twig_Error_Runtime('Variable "hasError" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "                    <div class=\"alert alert-danger\">Une erreur est survenue, le nom d'utilisateur ou le mot de passe est invalide</div>

                ";
        }
        // line 18
        echo "

                    <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
        echo "\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email</label>
                            <input type=\"text\" name=\"_username\" id=\"email\" class=\"form-control\" placeholder=\"Adresse email\" required value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\"> 
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Mot de passe</label>
                            <input type=\"password\" name=\"_password\" id=\"_password\" class=\"form-control\" placeholder=\"Mot de passe\" required\">
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-success\">Connexion</button>
                        </div>
                    </form>
                </div>    
             </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  79 => 20,  75 => 18,  70 => 15,  68 => 14,  61 => 9,  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Connexion au site{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        {# &nbsp est un espace insecable #}
        <div class=\"col-md-3\">&nbsp</div>
            <div class=\"col-md-6\">
                <div class=\"bg-secondary py-3 px-3\">
                <h1>Se connecter</h1>

                {% if hasError %}
                    <div class=\"alert alert-danger\">Une erreur est survenue, le nom d'utilisateur ou le mot de passe est invalide</div>

                {% endif %}


                    <form action=\"{{path('account_login')}}\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email</label>
                            <input type=\"text\" name=\"_username\" id=\"email\" class=\"form-control\" placeholder=\"Adresse email\" required value=\"{{username}}\"> 
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Mot de passe</label>
                            <input type=\"password\" name=\"_password\" id=\"_password\" class=\"form-control\" placeholder=\"Mot de passe\" required\">
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-success\">Connexion</button>
                        </div>
                    </form>
                </div>    
             </div>
        </div>
    </div>
</div>
{% endblock %}
", "account/login.html.twig", "/var/www/html/symbnb/templates/account/login.html.twig");
    }
}
