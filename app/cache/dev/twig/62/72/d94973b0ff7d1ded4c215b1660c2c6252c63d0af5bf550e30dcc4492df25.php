<?php

/* ::base.html.twig */
class __TwigTemplate_6272d94973b0ff7d1ded4c215b1660c2c6252c63d0af5bf550e30dcc4492df25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "CountrYnside";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "            ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 51
        echo "        ";
    }

    // line 19
    public function block_navbar($context, array $blocks = array())
    {
        // line 20
        echo "            <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li> <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("countrynside_site_homepage");
        echo "\"> CountrYnside </a> </li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 36
            echo "                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        <li><a href=\"#\">Profil</a></li>
                                        <li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                                    </ul>
                                </li>
                            ";
        } else {
            // line 44
            echo "                                <li> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connectez-vous</a> </li>
                            ";
        }
        // line 46
        echo "                        </ul>
                    </div>
                </div>
            </div>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 46,  139 => 44,  132 => 40,  126 => 37,  123 => 36,  121 => 35,  115 => 32,  101 => 20,  98 => 19,  94 => 51,  91 => 19,  88 => 18,  82 => 12,  79 => 11,  76 => 10,  70 => 8,  65 => 7,  62 => 6,  56 => 5,  50 => 52,  48 => 18,  42 => 15,  39 => 14,  36 => 10,  34 => 6,  30 => 5,  24 => 1,);
    }
}
