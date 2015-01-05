<?php

/* CountrynsidePaymentBundle:Default:devenirPremium.html.twig */
class __TwigTemplate_46f1e9d429dcc6a6c519f818342830a032086e613a2072b4e7a478187764e9bf extends Twig_Template
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

    <h1> Choisissez votre formule d'abonnement</h1>
    <form class=\"col-md-3\" method=\"POST\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("countrynside_payment_abonnement");
        echo "\">
        <div class=\"form-group\">
            <select class=\"form-control\" name=\"abonnement\">
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 11
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
        // line 13
        echo "            </select>
        </div>
        <button class=\"btn btn-primary\" type=\"submit\"> Valider </button>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "CountrynsidePaymentBundle:Default:devenirPremium.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  56 => 11,  52 => 10,  46 => 7,  39 => 3,  36 => 2,  11 => 1,);
    }
}
