<?php

/* CountrynsidePaymentBundle:Default:success.html.twig */
class __TwigTemplate_d6079fe44a1becc6116bda9a1158a34b1b5b681e5b5b1c2ac1124cb8ee4b987e extends Twig_Template
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

    <h2> Félicitations </h2>
    <p> Vous disposés maintenant d'un compte prémium valable jusqu'au : ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateExpiration", array()), "d/m/y"), "html", null, true);
        echo " </p>
</div>

";
    }

    public function getTemplateName()
    {
        return "CountrynsidePaymentBundle:Default:success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  39 => 3,  36 => 2,  11 => 1,);
    }
}
