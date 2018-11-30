<?php

/* ad/show.html.twig */
class __TwigTemplate_e5e712b25a9358fe635848803daa6a1f446b18f6512da27c8bd713eb8ee69d02 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

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

        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 4, $this->source); })()), "title", array()), "html", null, true);
        echo "
";
        
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 15, $this->source); })()), "price", array()), 2, ",", " "), "html", null, true);
        echo "&euro;</strong> par nuit
    </p>
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_create", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 17, $this->source); })()), "slug", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Réserver</a>

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
        <hr> 
        ";
        // line 65
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 65, $this->source); })()), "comments", array())) > 0)) {
            // line 66
            echo "            <h2 class=\"mb-3\">Commentaires de nos voyageurs</h2>

            <div class=\"alert alert-info\">
                <h4 class=\"alert-heading text-center\">
                    <div class=\"row align-items-center\">
                        <div class=\"col\">
                            Note globale donnée par nos voyageurs
                        </div>
                        <div class=\"col\">
                            ";
            // line 75
            $this->loadTemplate("partials/rating.html.twig", "ad/show.html.twig", 75)->display(array_merge($context, array("rating" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 75, $this->source); })()), "avgRatings", array()))));
            echo " 
                            <br>
                            <small>(Calculée sur ";
            // line 77
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 77, $this->source); })()), "comments", array())), "html", null, true);
            echo " avis)</small>                       
                        </div>
                    </div>
                </h4>
            </div>

            ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 83, $this->source); })()), "comments", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 84
                echo "                <div class=\"bg-light rounded mb-3 py-3 px-3\">
                    <strong>";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", array()), "firstname", array()), "html", null, true);
                echo "</strong> a dit :
                    <blockquote>
                        ";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", array()), "html", null, true);
                echo "
                    </blockquote>
                    <strong>Note attribuée : </strong>
                     <span class=\"rating\">

                     ";
                // line 93
                echo "                     ";
                $this->loadTemplate("partials/rating.html.twig", "ad/show.html.twig", 93)->display(array_merge($context, array("rating" => twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()))));
                // line 94
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "        ";
        } else {
            // line 98
            echo "            <h2>Cette annonce n'a pas encore reçu de commentaire</h2>
        ";
        }
        // line 100
        echo "        </div>
        <div class=\"col\">
            ";
        // line 102
        $context["a"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 102, $this->source); })()), "author", array());
        // line 103
        echo "            <div class=\"row\">
                <div class=\"col-3\">
                    <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 105, $this->source); })()), "slug", array()))), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 106, $this->source); })()), "picture", array()), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 106, $this->source); })()), "fullName", array()), "html", null, true);
        echo "\">
                    </a>
                </div>
                <div class=\"col\">

                <a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 111, $this->source); })()), "slug", array()))), "html", null, true);
        echo "\">
                    <h3>";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 112, $this->source); })()), "fullName", array()), "html", null, true);
        echo "</h3>
                </a>          
                <span class=\"badge badge-primary\">";
        // line 114
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 114, $this->source); })()), "ads", array())), "html", null, true);
        echo " annonces</span> 
                </div>
            </div>
            ";
        // line 117
        echo twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 117, $this->source); })()), "description", array());
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  374 => 117,  368 => 114,  363 => 112,  359 => 111,  349 => 106,  345 => 105,  341 => 103,  339 => 102,  335 => 100,  331 => 98,  328 => 97,  312 => 94,  309 => 93,  301 => 87,  296 => 85,  293 => 84,  276 => 83,  267 => 77,  262 => 75,  251 => 66,  249 => 65,  236 => 54,  218 => 50,  214 => 49,  209 => 47,  203 => 46,  200 => 45,  183 => 44,  177 => 40,  159 => 38,  154 => 37,  137 => 36,  130 => 32,  120 => 24,  115 => 22,  111 => 21,  106 => 20,  104 => 19,  99 => 17,  92 => 15,  87 => 13,  83 => 12,  78 => 10,  75 => 9,  66 => 8,  54 => 4,  45 => 3,  15 => 1,);
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
    <strong>{{ad.rooms}} chambres</strong> pour <strong>{{ad.price | number_format(2, ',', ' ')}}&euro;</strong> par nuit
    </p>
    <a href=\"{{ path(\"booking_create\", {'slug': ad.slug}) }}\" class=\"btn btn-primary\">Réserver</a>

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
        <hr> 
        {% if ad.comments|length > 0 %}
            <h2 class=\"mb-3\">Commentaires de nos voyageurs</h2>

            <div class=\"alert alert-info\">
                <h4 class=\"alert-heading text-center\">
                    <div class=\"row align-items-center\">
                        <div class=\"col\">
                            Note globale donnée par nos voyageurs
                        </div>
                        <div class=\"col\">
                            {% include 'partials/rating.html.twig' with {'rating': ad.avgRatings} %} 
                            <br>
                            <small>(Calculée sur {{ad.comments|length}} avis)</small>                       
                        </div>
                    </div>
                </h4>
            </div>

            {% for comment in ad.comments %}
                <div class=\"bg-light rounded mb-3 py-3 px-3\">
                    <strong>{{ comment.author.firstname }}</strong> a dit :
                    <blockquote>
                        {{ comment.content }}
                    </blockquote>
                    <strong>Note attribuée : </strong>
                     <span class=\"rating\">

                     {# On inclut le code qui affiche les étoiles #}
                     {% include 'partials/rating.html.twig' with {'rating' : comment.rating } %}

                </div>              
            {% endfor %}
        {% else %}
            <h2>Cette annonce n'a pas encore reçu de commentaire</h2>
        {% endif %}
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
{% endblock %}", "ad/show.html.twig", "/var/www/html/symbnb/templates/ad/show.html.twig");
    }
}
