<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_389c0c5423eb1ae179613d548e90f003da21c770254ff9b9e1cadeb25ed09e43 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"main container\">
";
        // line 7
        echo "
    <div class=\"fos_user_user_show\">
        <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
        ";
        // line 11
        if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "premium", array())) {
            // line 12
            echo "        <p> Vous n'avez pas de compte premium </p>
        <p><a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("countrynside_site_abonnement");
            echo "\"> Obtenir un compte premium </a> </p>
        ";
        } else {
            // line 15
            echo "        <p>Votre compte premium est valable jusqu'au ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateExpiration", array()), "d/m/y"), "html", null, true);
            echo "</p>
        <p><a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("countrynside_site_abonnement");
            echo "\"> Renouveler votre compte premium </a> </p>
        ";
        }
        // line 18
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  70 => 15,  65 => 13,  62 => 12,  60 => 11,  54 => 10,  48 => 9,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
