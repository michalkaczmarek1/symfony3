<?php

/* MyAuctions/index.html.twig */
class __TwigTemplate_4550017e00b2ba0890d56d9feff9c3e20cf1bd8b78088359b584faeafdf83f92 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MyAuctions/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAuctions/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAuctions/index.html.twig"));

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
        echo "<h1>Moje aukcje</h1>

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auctions"]) || array_key_exists("auctions", $context) ? $context["auctions"] : (function () { throw new Twig_Error_Runtime('Variable "auctions" does not exist.', 6, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
            // line 7
            echo "
   <div class=\"card\">
      <div class=\"card-header\">
        <h4><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("my_auction_details", array("id" => twig_get_attribute($this->env, $this->source, $context["auction"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "title", array()), "html", null, true);
            echo "</a></h4>
      </div>
      <div class=\"card-body\">
     \t<p>
        \t";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "description", array()), "html", null, true);
            echo "
        </p>
        <p>Cena(w PLN): 
        \t";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "price", array()), "html", null, true);
            echo " 
        </p>
        <p>Cena wywoławcza(w PLN): 
        \t";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "startingPrice", array()), "html", null, true);
            echo " 
        </p>
        <p>Data zakończenia aukcji: 
        \t";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "expiresAt", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " 
        </p>
      </div>
\t</div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "\t<div class=\"card\">
\t\t<div class=\"card-header\">
\t\t<h4>Komunikat</h4>
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p>Niestety brak aktywnej aukcji</p>
\t\t</div>\t
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "MyAuctions/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  94 => 23,  88 => 20,  82 => 17,  76 => 14,  67 => 10,  62 => 7,  57 => 6,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<h1>Moje aukcje</h1>

{% for auction in auctions %}

   <div class=\"card\">
      <div class=\"card-header\">
        <h4><a href=\"{{ url(\"my_auction_details\", {\"id\": auction.id}) }}\">{{ auction.title }}</a></h4>
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
{% else %}
\t<div class=\"card\">
\t\t<div class=\"card-header\">
\t\t<h4>Komunikat</h4>
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p>Niestety brak aktywnej aukcji</p>
\t\t</div>\t
\t</div>
{% endfor %}
{% endblock %}", "MyAuctions/index.html.twig", "/var/www/apps/symfony3/app/Resources/views/MyAuctions/index.html.twig");
    }
}
