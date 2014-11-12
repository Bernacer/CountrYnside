<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3661ef1da94add5872bd0cad0a83c74c18b59d2f243228a680468d05db57e086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
        ";
        // line 9
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "app"), "session", array())))) {
            // line 10
            echo "            ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 11
            echo "            ";
            if ((!twig_test_empty($this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "targetUrl"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 12
            echo "        ";
        }
        // line 13
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  55 => 12,  46 => 11,  43 => 10,  41 => 9,  37 => 8,  31 => 6,  28 => 5,);
    }
}
