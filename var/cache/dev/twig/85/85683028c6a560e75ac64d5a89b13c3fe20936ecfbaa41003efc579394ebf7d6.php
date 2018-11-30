<?php

/* admin/partials/header.html.twig */
class __TwigTemplate_297da24e583185847bcd25e4f1654c22ed3553ee4a1927beccb36e2ba9bb1665 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partials/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
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
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-chart-line\"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ads_index");
        echo "\">
                            <i class=\"fas fa-hotel\"></i>
                            Annonces
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-folder\"></i>
                            Réservations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_index");
        echo "\">
                            <i class=\"fas fa-comments\"></i>
                            Commentaires
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">           
                            <i class=\"fas fa-users\"></i>
                            Utilisateurs
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav ml-auto \">
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" target=\"_blank\" class=\"nav-link\">
                            <i class=\"fas fa-eye\"></i>
                            Voir le site
                        </a>
                    </li>
                    ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->source); })()), "user", array())) {
            // line 47
            echo "                    <li class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                            <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->source); })()), "user", array()), "picture", array()), "html", null, true);
            echo "\" class=\"avatar avatar-mini\" 
                            alt=\"Avatar de ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 50, $this->source); })()), "user", array()), "fullName", array()), "html", null, true);
            echo "\">
                            ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 51, $this->source); })()), "user", array()), "fullName", array()), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
                            <a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_logout");
            echo "\" class=\"dropdown-item\">Deconnexion</a>

                      
                        </div>
                    </li>

                    ";
        }
        // line 61
        echo "                </ul>
            </div>
</nav>

";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 65, $this->source); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 66
            echo "    <div class=\"container\">
        <div class=\"alert alert-";
            // line 67
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
            ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 69
                echo "                <p>";
                echo $context["message"];
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
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
        return "admin/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 71,  139 => 69,  135 => 68,  131 => 67,  128 => 66,  124 => 65,  118 => 61,  108 => 54,  102 => 51,  98 => 50,  94 => 49,  90 => 47,  88 => 46,  80 => 41,  63 => 27,  48 => 15,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand\" href=\"{{ path('homepage')}}\">SymBNB</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-chart-line\"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('admin_ads_index')}}\">
                            <i class=\"fas fa-hotel\"></i>
                            Annonces
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-folder\"></i>
                            Réservations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('admin_comment_index') }}\">
                            <i class=\"fas fa-comments\"></i>
                            Commentaires
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">           
                            <i class=\"fas fa-users\"></i>
                            Utilisateurs
                        </a>
                    </li>
                </ul>
                <ul class=\"navbar-nav ml-auto \">
                    <li class=\"nav-item\">
                        <a href=\"{{ path(\"homepage\") }}\" target=\"_blank\" class=\"nav-link\">
                            <i class=\"fas fa-eye\"></i>
                            Voir le site
                        </a>
                    </li>
                    {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                            <img src=\"{{app.user.picture}}\" class=\"avatar avatar-mini\" 
                            alt=\"Avatar de {{app.user.fullName}}\">
                            {{app.user.fullName}}
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
                            <a href=\"{{ path('admin_account_logout') }}\" class=\"dropdown-item\">Deconnexion</a>

                      
                        </div>
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
{% endfor %}", "admin/partials/header.html.twig", "/var/www/html/symbnb/templates/admin/partials/header.html.twig");
    }
}
