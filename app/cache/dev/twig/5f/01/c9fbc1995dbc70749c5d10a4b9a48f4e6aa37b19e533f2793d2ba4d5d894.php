<?php

/* CountrynsidePaymentBundle:Default:abonnement.html.twig */
class __TwigTemplate_5f01c9fbc1995dbc70749c5d10a4b9a48f4e6aa37b19e533f2793d2ba4d5d894 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"container\">
    
    ";
        // line 6
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "premium", array())) {
            // line 7
            echo "        <h1> Votre abonnement expirera le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateExpiration", array()), "d/m/y"), "html", null, true);
            echo " </h1>
    ";
        }
        // line 9
        echo "        
    <h3> Choisissez votre formule d'abonnement</h3>
    <form class=\"col-md-3\" method=\"POST\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("countrynside_payment_abonnement_prepare");
        echo "\">
        <div class=\"form-group\">
            <select class=\"form-control\" name=\"abonnement\">
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 15
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "prix", array()), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "description", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["offre"], "prix", array()), 2, ",", ","), "html", null, true);
            echo "€ </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </select>
        </div>
        <button class=\"btn btn-primary\" type=\"submit\"> Valider </button>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "CountrynsidePaymentBundle:Default:abonnement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  67 => 15,  63 => 14,  57 => 11,  53 => 9,  47 => 7,  45 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
