<?php

/* /partials/footer.html.twig */
class __TwigTemplate_af52bc5185325790520888d3993e5a95b1a9e1c82d150813178ede9b9ec8b7af extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/partials/footer.html.twig"));

        // line 1
        echo "<footer class=\"mt-5 bg-light py-5 text-center\">
    <p>Copyright SymBNB</p>
</footer>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"mt-5 bg-light py-5 text-center\">
    <p>Copyright SymBNB</p>
</footer>", "/partials/footer.html.twig", "/var/www/html/symbnb/templates/partials/footer.html.twig");
    }
}
