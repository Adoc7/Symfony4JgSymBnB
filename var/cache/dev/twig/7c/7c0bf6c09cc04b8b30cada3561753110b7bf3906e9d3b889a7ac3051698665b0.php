<?php

/* home.html.twig */
class __TwigTemplate_a0e4111eb45dd62beda14df1736c7525e0c673ae0b47118cffd39a2cb5eae1de extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Bienvenue sur le meilleur réseau d'appartements";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "    <h2>Voici le header</h2>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
  <div class=\"container mt-3\">
    <div class=\"jumbotron\">
      <h1 class=\"display-3\">Bienvenue sur SymBNB !</h1>
        <p class=\"lead\">Nous mettons en relation les voyageurs et les propriétaires qui veulent profiter d'opportunités et gagner de l'argent en proposant leur bien à la location</p>
          <hr class=\"my-4\">
        <p>Vous êtes voyageur ? Et vous voulez voir où vous pourrez loger pour votre prochain déplacement ?</p>
        <p class=\"lead\">
          <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Voir nos annonces</a>
        </p>
  </div>
  <h2 class=\"h1 mt-3 mb-4\">Nos appartements stars</h2>
 
 <div class=\"row\">
    
    <div class=\"col-md-4\">
      <div class=\"card bg-light mb-3\">
      <div class=\"card-header text-center\">
        3 chambres, <strong>49&euro; / nuit</strong><br>
        <small>Pas encore noté</small>
      </div>
      <img src=\"https://via.placeholder.com/1000x400\" alt=\"Image de l'appartement\" style=\"height:200px; width: 100%; display: block\">
      <div class=\"card-body\"></div>
      <h4 class=\"card-title\">
        Appartement de ouf
      </h4>
      <p class=\"card-text\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id tenetur nobis exercitationem ipsum minima, sed omnis blanditiis debitis eveniet repellendus.</p>
      <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"card bg-light mb-3\">
      <div class=\"card-header text-center\">
        3 chambres, <strong>49&euro; / nuit</strong><br>
        <small>Pas encore noté</small>
      </div>
      <img src=\"https://via.placeholder.com/1000x400\" alt=\"Image de l'appartement\" style=\"height:200px; width: 100%; display: block\">
      <div class=\"card-body\"></div>
      <h4 class=\"card-title\">
        Appartement de ouf
      </h4>
      <p class=\"card-text\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id tenetur nobis exercitationem ipsum minima, sed omnis blanditiis debitis eveniet repellendus.</p>
      <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"card bg-light mb-3\">
      <div class=\"card-header text-center\">
        3 chambres, <strong>49&euro; / nuit</strong><br>
        <small>Pas encore noté</small>
      </div>
      <img src=\"https://via.placeholder.com/1000x400\" alt=\"Image de l'appartement\" style=\"height:200px; width: 100%; display: block\">
      <div class=\"card-body\"></div>
      <h4 class=\"card-title\">
        Appartement de ouf
      </h4>
      <p class=\"card-text\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id tenetur nobis exercitationem ipsum minima, sed omnis blanditiis debitis eveniet repellendus.</p>
      <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
      </div>
    </div>

  </div>



<h2 class=\"h1 mt-3 mb-4\">Nos propriétaires stars</h2>
  <div class=\"row\">

    <div class=\"col\">
      <div class=\"card border secondary mb-3\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Julien Goscicki</h4>
          <hr>
          <div class=\"card-text\">
          <img src=\"https://via.placeholder.com/64x64\" alt=\"Avatar de Julien\" class=\"float-left mr-3\">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, voluptas?</p>
          <a href=\"#\" class=\"btn btn-success float-right\">En  savor plus</a>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col\">
      <div class=\"card border secondary mb-3\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Julien Goscicki</h4>
          <hr>
          <div class=\"card-text\">
          <img src=\"https://via.placeholder.com/64x64\" alt=\"Avatar de Julien\" class=\"float-left mr-3\">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, voluptas?</p>
          <a href=\"#\" class=\"btn btn-success float-right\">En  savor plus</a>
          </div>
        </div>
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
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 12,  85 => 11,  74 => 7,  65 => 6,  55 => 5,  46 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("   {% extends 'base.html.twig' %}


  {% block title %}
    Bienvenue sur le meilleur réseau d'appartements{% endblock %}  
  {% block header %}
    <h2>Voici le header</h2>
  {% endblock %}
  
  
  {% block body %}

  <div class=\"container mt-3\">
    <div class=\"jumbotron\">
      <h1 class=\"display-3\">Bienvenue sur SymBNB !</h1>
        <p class=\"lead\">Nous mettons en relation les voyageurs et les propriétaires qui veulent profiter d'opportunités et gagner de l'argent en proposant leur bien à la location</p>
          <hr class=\"my-4\">
        <p>Vous êtes voyageur ? Et vous voulez voir où vous pourrez loger pour votre prochain déplacement ?</p>
        <p class=\"lead\">
          <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Voir nos annonces</a>
        </p>
  </div>
  <h2 class=\"h1 mt-3 mb-4\">Nos appartements stars</h2>
 
 <div class=\"row\">
    
    <div class=\"col-md-4\">
      <div class=\"card bg-light mb-3\">
      <div class=\"card-header text-center\">
        3 chambres, <strong>49&euro; / nuit</strong><br>
        <small>Pas encore noté</small>
      </div>
      <img src=\"https://via.placeholder.com/1000x400\" alt=\"Image de l'appartement\" style=\"height:200px; width: 100%; display: block\">
      <div class=\"card-body\"></div>
      <h4 class=\"card-title\">
        Appartement de ouf
      </h4>
      <p class=\"card-text\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id tenetur nobis exercitationem ipsum minima, sed omnis blanditiis debitis eveniet repellendus.</p>
      <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"card bg-light mb-3\">
      <div class=\"card-header text-center\">
        3 chambres, <strong>49&euro; / nuit</strong><br>
        <small>Pas encore noté</small>
      </div>
      <img src=\"https://via.placeholder.com/1000x400\" alt=\"Image de l'appartement\" style=\"height:200px; width: 100%; display: block\">
      <div class=\"card-body\"></div>
      <h4 class=\"card-title\">
        Appartement de ouf
      </h4>
      <p class=\"card-text\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id tenetur nobis exercitationem ipsum minima, sed omnis blanditiis debitis eveniet repellendus.</p>
      <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"card bg-light mb-3\">
      <div class=\"card-header text-center\">
        3 chambres, <strong>49&euro; / nuit</strong><br>
        <small>Pas encore noté</small>
      </div>
      <img src=\"https://via.placeholder.com/1000x400\" alt=\"Image de l'appartement\" style=\"height:200px; width: 100%; display: block\">
      <div class=\"card-body\"></div>
      <h4 class=\"card-title\">
        Appartement de ouf
      </h4>
      <p class=\"card-text\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id tenetur nobis exercitationem ipsum minima, sed omnis blanditiis debitis eveniet repellendus.</p>
      <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
      </div>
    </div>

  </div>



<h2 class=\"h1 mt-3 mb-4\">Nos propriétaires stars</h2>
  <div class=\"row\">

    <div class=\"col\">
      <div class=\"card border secondary mb-3\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Julien Goscicki</h4>
          <hr>
          <div class=\"card-text\">
          <img src=\"https://via.placeholder.com/64x64\" alt=\"Avatar de Julien\" class=\"float-left mr-3\">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, voluptas?</p>
          <a href=\"#\" class=\"btn btn-success float-right\">En  savor plus</a>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col\">
      <div class=\"card border secondary mb-3\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Julien Goscicki</h4>
          <hr>
          <div class=\"card-text\">
          <img src=\"https://via.placeholder.com/64x64\" alt=\"Avatar de Julien\" class=\"float-left mr-3\">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, voluptas?</p>
          <a href=\"#\" class=\"btn btn-success float-right\">En  savor plus</a>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

  {% endblock %}", "home.html.twig", "/var/www/html/symbnb/templates/home.html.twig");
    }
}
