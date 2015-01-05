<?php

/* CountrynsideSiteBundle:Default:infosEvennementComplet.html.twig */
class __TwigTemplate_8ffcfe7e3e56713226ce42ad442d9cda6819e21321259e0519a8143d6f069c48 extends Twig_Template
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
        // line 5
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "premium", array())) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "descriptif", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 8
            echo "    <p> L'accès à ces informations est restreint, vous devez vous procurer un compte premium <p>
    <p> <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("blog_home");
            echo "\"> </a> Devenir premium </p>
    ";
        }
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "CountrynsideSiteBundle:Default:infosEvennementComplet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  55 => 9,  52 => 8,  46 => 6,  44 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}
