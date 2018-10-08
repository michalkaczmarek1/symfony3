<?php

/* Auctions/details.html.twig */
class __TwigTemplate_882dc0aadac14b5f5b9870c2dfcfc691cb3e8d936ce3aef4313699e79e70179d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Auctions/details.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Auctions/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Auctions/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t <div class=\"card\">
      <div class=\"card-header\">
        <h4>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auction"]) || array_key_exists("auction", $context) ? $context["auction"] : (function () { throw new Twig_Error_Runtime('Variable "auction" does not exist.', 7, $this->source); })()), "title", array()), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"card-body\">
     \t<p>
        \t";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auction"]) || array_key_exists("auction", $context) ? $context["auction"] : (function () { throw new Twig_Error_Runtime('Variable "auction" does not exist.', 11, $this->source); })()), "description", array()), "html", null, true);
        echo "
        </p>
        <p>Cena(w PLN): 
        \t";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auction"]) || array_key_exists("auction", $context) ? $context["auction"] : (function () { throw new Twig_Error_Runtime('Variable "auction" does not exist.', 14, $this->source); })()), "price", array()), "html", null, true);
        echo " 
        </p>
         <p>Cena wywoławcza(w PLN): 
        \t";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auction"]) || array_key_exists("auction", $context) ? $context["auction"] : (function () { throw new Twig_Error_Runtime('Variable "auction" does not exist.', 17, $this->source); })()), "startingPrice", array()), "html", null, true);
        echo " 
        </p>
        <p>Data zakończenia aukcji: 
        \t";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auction"]) || array_key_exists("auction", $context) ? $context["auction"] : (function () { throw new Twig_Error_Runtime('Variable "auction" does not exist.', 20, $this->source); })()), "expiresAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo " 
        </p>
      </div>
\t</div>
\t<div class=\"card\">
    \t  <div class=\"card-header\">
 \t\t\tOferty
          </div>
          <div class=\"card-body\">
         \t<ul>
         \t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["auction"]) || array_key_exists("auction", $context) ? $context["auction"] : (function () { throw new Twig_Error_Runtime('Variable "auction" does not exist.', 30, $this->source); })()), "offers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 31
            echo "         \t\t<li>Oferta ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "price", array()), "html", null, true);
            echo " zł, złożona ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " </li>
         \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "         \t</ul>
          </div>
\t</div>
\t";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 37
            echo "\t    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["bidForm"]) || array_key_exists("bidForm", $context) ? $context["bidForm"] : (function () { throw new Twig_Error_Runtime('Variable "bidForm" does not exist.', 37, $this->source); })()), 'form', array("attr" => array("novalidate" => "novalidate")));
            echo "
\t    ";
            // line 38
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["buyForm"]) || array_key_exists("buyForm", $context) ? $context["buyForm"] : (function () { throw new Twig_Error_Runtime('Variable "buyForm" does not exist.', 38, $this->source); })()), 'form_start', array("attr" => array("style" => "float: left;")));
            echo "
        \t";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["buyForm"]) || array_key_exists("buyForm", $context) ? $context["buyForm"] : (function () { throw new Twig_Error_Runtime('Variable "buyForm" does not exist.', 39, $this->source); })()), "submit", array()), 'widget', array("attr" => array("class" => "btn-success")));
            echo "
        \t";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["buyForm"]) || array_key_exists("buyForm", $context) ? $context["buyForm"] : (function () { throw new Twig_Error_Runtime('Variable "buyForm" does not exist.', 40, $this->source); })()), 'rest');
            echo "
    \t";
            // line 41
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["buyForm"]) || array_key_exists("buyForm", $context) ? $context["buyForm"] : (function () { throw new Twig_Error_Runtime('Variable "buyForm" does not exist.', 41, $this->source); })()), 'form_end');
            echo "
\t";
        }
        // line 43
        echo "\t
\t<a class=\"btn btn-primary\" style=\"float: left;\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("auction_index");
        echo "\">Cofnij</a>
\t\t
\t<div class=\"clearfix\"></div>
\t
\t
\t
\t";
        // line 50
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 51
            echo "\t\t<p>żeby kupować musisz się zalogować</p>
\t";
        }
        // line 53
        echo "\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Auctions/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 53,  154 => 51,  152 => 50,  143 => 44,  140 => 43,  135 => 41,  131 => 40,  127 => 39,  123 => 38,  118 => 37,  116 => 36,  111 => 33,  100 => 31,  96 => 30,  83 => 20,  77 => 17,  71 => 14,  65 => 11,  58 => 7,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

\t <div class=\"card\">
      <div class=\"card-header\">
        <h4>{{ auction.title }}</h4>
      </div>
      <div class=\"card-body\">
     \t<p>
        \t{{ auction.description }}
        </p>
        <p>Cena(w PLN): 
        \t{{ auction.price }} 
        </p>
         <p>Cena wywoławcza(w PLN): 
        \t{{ auction.startingPrice }} 
        </p>
        <p>Data zakończenia aukcji: 
        \t{{ auction.expiresAt| date(\"Y-m-d H:i:s\") }} 
        </p>
      </div>
\t</div>
\t<div class=\"card\">
    \t  <div class=\"card-header\">
 \t\t\tOferty
          </div>
          <div class=\"card-body\">
         \t<ul>
         \t{% for offer in auction.offers %}
         \t\t<li>Oferta {{ offer.price }} zł, złożona {{ offer.createdAt | date(\"Y-m-d H:i:s\") }} </li>
         \t{% endfor %}
         \t</ul>
          </div>
\t</div>
\t{% if is_granted(\"ROLE_USER\") %}
\t    {{ form(bidForm, {\"attr\": {\"novalidate\": \"novalidate\"}}) }}
\t    {{ form_start(buyForm, {\"attr\": {\"style\": \"float: left;\"}}) }}
        \t{{ form_widget(buyForm.submit, {\"attr\": {\"class\": \"btn-success\"}}) }}
        \t{{ form_rest(buyForm) }}
    \t{{ form_end(buyForm) }}
\t{% endif %}
\t
\t<a class=\"btn btn-primary\" style=\"float: left;\" href=\"{{ url(\"auction_index\") }}\">Cofnij</a>
\t\t
\t<div class=\"clearfix\"></div>
\t
\t
\t
\t{% if not is_granted(\"ROLE_USER\") %}
\t\t<p>żeby kupować musisz się zalogować</p>
\t{% endif %}
\t
{% endblock %}", "Auctions/details.html.twig", "/var/www/apps/symfony3/app/Resources/views/Auctions/details.html.twig");
    }
}
