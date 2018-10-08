<?php

/* menuAnonymous.html.twig */
class __TwigTemplate_baa904f7556af6fc210b2e27c4fc6454b5185a3e80bc873636a758d26ceb74dc extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menuAnonymous.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menuAnonymous.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("auction_index");
        echo "\">Aukcje</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_user_security_login");
        echo "\">Zaloguj się</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_user_registration_register");
        echo "\">Zarejestruj się</a>
  </li>
</ul>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menuAnonymous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  39 => 6,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-pills\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"{{ url(\"auction_index\") }}\">Aukcje</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ url(\"fos_user_security_login\") }}\">Zaloguj się</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ url(\"fos_user_registration_register\") }}\">Zarejestruj się</a>
  </li>
</ul>


", "menuAnonymous.html.twig", "/var/www/apps/symfony3/app/Resources/views/menuAnonymous.html.twig");
    }
}
