<?php

/* partials/header.html.twig */
class __TwigTemplate_45c4b0955e1187b2e0a0a837de0f0b14c835b02678bc7a90e730484f0216e5b6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">SymBNB</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\">Annonces</a>
                    </li>
                </ul>
                <ul class=\"navbar-nav ml-auto \">
                    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "user", array())) {
            // line 17
            echo "                    <li class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                            <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "user", array()), "picture", array()), "html", null, true);
            echo "\" class=\"avatar avatar-mini\" 
                            alt=\"Avatar de ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "user", array()), "fullName", array()), "html", null, true);
            echo "\">
                            ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->source); })()), "user", array()), "fullName", array()), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
                            <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_create");
            echo "\" class=\"dropdown-item\">Créer une annonce</a>
                            <div class=\"dropdown-divider\"></div>


                            <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_index");
            echo "\" class=\"dropdown-item\">Mon compte</a>

                            <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_bookings");
            echo "\" class=\"dropdown-item\">Mes réservations</a>


                            <a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_profile");
            echo "\" class=\"dropdown-item\">Modifier mon profil</a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_logout");
            echo "\" class=\"dropdown-item\">Deconnexion</a>

                      
                        </div>
                    </li>

                    ";
        } else {
            // line 42
            echo "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_register");
            echo "\" class=\"nav-link\">Inscription</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
            echo "\" class=\"nav-link\">Connexion</a>
                    </li>
                    ";
        }
        // line 49
        echo "                </ul>
            </div>
</nav>

";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->source); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 54
            echo "    <div class=\"container\">
        <div class=\"alert alert-";
            // line 55
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 57
                echo "                <p>";
                echo $context["message"];
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "
        </div>
   </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 59,  144 => 57,  140 => 56,  136 => 55,  133 => 54,  129 => 53,  123 => 49,  117 => 46,  111 => 43,  108 => 42,  98 => 35,  93 => 33,  87 => 30,  82 => 28,  75 => 24,  69 => 21,  65 => 20,  61 => 19,  57 => 17,  55 => 16,  48 => 12,  42 => 9,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"{{ path('homepage')}}\">SymBNB</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('homepage')}}\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('ads_index')}}\">Annonces</a>
                    </li>
                </ul>
                <ul class=\"navbar-nav ml-auto \">
                    {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                            <img src=\"{{app.user.picture}}\" class=\"avatar avatar-mini\" 
                            alt=\"Avatar de {{app.user.fullName}}\">
                            {{app.user.fullName}}
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
                            <a href=\"{{ path('ads_create') }}\" class=\"dropdown-item\">Créer une annonce</a>
                            <div class=\"dropdown-divider\"></div>


                            <a href=\"{{ path('account_index') }}\" class=\"dropdown-item\">Mon compte</a>

                            <a href=\"{{ path('account_bookings') }}\" class=\"dropdown-item\">Mes réservations</a>


                            <a href=\"{{ path('account_profile') }}\" class=\"dropdown-item\">Modifier mon profil</a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"{{ path('admin_account_logout') }}\" class=\"dropdown-item\">Deconnexion</a>

                      
                        </div>
                    </li>

                    {% else %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path('account_register') }}\" class=\"nav-link\">Inscription</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('account_login') }}\" class=\"nav-link\">Connexion</a>
                    </li>
                    {% endif %}
                </ul>
            </div>
</nav>

{% for label, messages in app.flashes %}
    <div class=\"container\">
        <div class=\"alert alert-{{ label }}\">
            {% for message in messages %}
                <p>{{message | raw}}</p>
            {% endfor %}

        </div>
   </div>
{% endfor %}", "partials/header.html.twig", "/var/www/html/symbnb/templates/partials/header.html.twig");
    }
}
