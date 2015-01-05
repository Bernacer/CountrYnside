<?php

/* ::base.html.twig */
class __TwigTemplate_b26f29601b8e495051c08aa76ee2e9e89e28c2bf6a1b0336a993446f6dfd2445 extends Twig_Template
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
        // line 61
        echo "    </body>

    ";
        // line 63
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "countrynside_site_mes_annonces")) {
            // line 64
            echo "    <footer class=\"footer\" id=\"footer\">
        <div class=\"container \">
            <div class=\"row\">
                <div class=\"col-sm-3 col-sm-offset-3\">
                    <h3>Société</h3>
                    <ul class=\"unstyled-list\">
                        <li><a href=\"\">À propos</a></li>
                        <li><a href=\"\">Presse</a></li>
                        <li><a href=\"\">Blog</a></li>
                        <li><a href=\"\">Aide</a></li>
                        <li><a href=\"\">Règles</a></li>
                        <li><a href=\"\">Conditions générales et confidentialité</a></li>
                    </ul>
                </div>
                <div class=\"col-sm-3\">
                    <h3>Découvrir</h3>
                    <ul class=\"unstyled-list\">
                        <li><a href=\"\">Confiance et sécurité</a></li>
                        <li><a href=\"\">Inviter des amis</a></li>
                        <li><a href=\"\">La sélection CountrYnside</a></li>
                        <li><a href=\"\">Voyage d'affaires</a></li>
                        <li><a href=\"\">Plan du site</a></li>
                    </ul>
                </div>
                <div class=\"col-sm-3\">
                    <h3>Devenir partenaire</h3>
                    <ul class=\"unstyled-list\">
                        <li><a href=\"\">Avantages</a></li>
                        <li><a href=\"\">Nous contacter</a></li>
                    </ul>
                </div>
            </div>
            <hr/>
            <p class=\"copyright\"><a href=\"\">Privacy</a> - © 2014-2015 Miage Paris-Ouest</p>
        </div>
    </footer>
";
        }
        // line 101
        echo "</html>
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
        // line 60
        echo "        ";
    }

    // line 19
    public function block_navbar($context, array $blocks = array())
    {
        // line 20
        echo "            <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("countrynside_site_homepage");
        echo "\"
                           style=\"width:80px; background: url('";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/cy-vrac.png"), "html", null, true);
        echo "');
                                   background-repeat: no-repeat;background-position: center;background-size: contain; margin-left:5px; margin-top:-3px;\">
                        </a>
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>

                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("countrynside_site_homepage");
        echo "\">Accueil</a></li>
                            <li><a href=\"\">Nos offres</a></li>
                            <li><a href=\"\">Trouver un séjour</a></li>
                            <li><a href=\"\">Devenir partenaire</a></li>
                            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("countrynside_site_annonce");
        echo "\">Publier son évènement</a></li>
                            <li><a href=\"\">Contact</a></li>
                            ";
        // line 43
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 44
            echo "                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        <li><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></li>
                                        <li><a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("countrynside_site_mes_annonces");
            echo "\">Mes annonces</a></li>
                                        <li><a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                                    </ul>
                                </li>
                            ";
        } else {
            // line 53
            echo "                                <li> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connectez-vous</a> </li>
                            ";
        }
        // line 55
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
        return array (  213 => 55,  207 => 53,  200 => 49,  196 => 48,  192 => 47,  187 => 45,  184 => 44,  182 => 43,  177 => 41,  170 => 37,  154 => 24,  150 => 23,  145 => 20,  142 => 19,  138 => 60,  135 => 19,  132 => 18,  126 => 12,  123 => 11,  120 => 10,  114 => 8,  109 => 7,  106 => 6,  100 => 5,  95 => 101,  56 => 64,  54 => 63,  50 => 61,  48 => 18,  42 => 15,  39 => 14,  36 => 10,  34 => 6,  30 => 5,  24 => 1,);
    }
}
