<?php

/* menuAuthenticated.html.twig */
class __TwigTemplate_4273dbffab1e1367bfee45373358ecc43eefe2d94d6606e19ffe31202be50cbe extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menuAuthenticated.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menuAuthenticated.html.twig"));

        // line 1
        echo "
<ul class=\"nav nav-pills\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("auction_index");
        echo "\">Aukcje</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("my_auction_index");
        echo "\">Moje aukcje</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("my_auction_add");
        echo "\">Dodaj aukcje</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_user_security_logout");
        echo "\">Wyloguj się</a>
  </li>
</ul>




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menuAuthenticated.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  46 => 10,  40 => 7,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<ul class=\"nav nav-pills\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"{{ url(\"auction_index\") }}\">Aukcje</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ url(\"my_auction_index\") }}\">Moje aukcje</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ url(\"my_auction_add\") }}\">Dodaj aukcje</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ url(\"fos_user_security_logout\") }}\">Wyloguj się</a>
  </li>
</ul>




", "menuAuthenticated.html.twig", "/var/www/apps/symfony3/app/Resources/views/menuAuthenticated.html.twig");
    }
}
