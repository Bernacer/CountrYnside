<?php

/* ::base.html.twig */
class __TwigTemplate_30bec06de3b1fa45bf989919e094d95373e77c220c6295565c44556b853d58a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'prebody' => array($this, 'block_prebody'),
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
    ";
        // line 17
        $this->displayBlock('prebody', $context, $blocks);
        // line 59
        echo "    </body>

    <footer>
        <div class=\"content-info\">
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
                <p class=\"copyright\"><a href=\"\">Privacy</a> - © 2014-2015 Miage Paris-Ouest Nanterre la Défense</p>
            </div>
        </div>
    </footer>
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
        echo "            <link rel=\"stylesheet\" href=\"";
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

    // line 17
    public function block_prebody($context, array $blocks = array())
    {
        // line 18
        echo "        <body>
            ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "        ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "                ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 57
        echo "            ";
    }

    // line 20
    public function block_navbar($context, array $blocks = array())
    {
        // line 21
        echo "                    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
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
        // line 33
        echo $this->env->getExtension('routing')->getPath("countrynside_site_homepage");
        echo "\" style=\"color: #009974\"> CountrYnside </a> </li>
                                </ul>
                                <ul class=\"nav navbar-nav navbar-right\">
                                    <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("countrynside_site_homepage");
        echo "\">Accueil</a></li>
                                    <li><a href=\"\">Nos offres</a></li>
                                    <li><a href=\"\">Trouver un séjour</a></li>
                                    <li> <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("countrynside_site_annonce");
        echo "\">Publiez votre évènement</a> </li>
                                    <li><a href=\"\">Contact</a></li>
                                        ";
        // line 41
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
            echo "                                        <li class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 43
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                <li><a href=\"#\">Profil</a></li>
                                                <li><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                                            </ul>
                                        </li>
                                    ";
        } else {
            // line 50
            echo "                                        <li> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connectez-vous</a> </li>
                                        ";
        }
        // line 52
        echo "                                </ul>
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
        return array (  208 => 52,  202 => 50,  195 => 46,  188 => 43,  185 => 42,  183 => 41,  178 => 39,  172 => 36,  166 => 33,  152 => 21,  149 => 20,  145 => 57,  142 => 20,  139 => 19,  135 => 58,  133 => 19,  130 => 18,  127 => 17,  121 => 12,  118 => 11,  115 => 10,  109 => 8,  104 => 7,  101 => 6,  95 => 5,  50 => 59,  48 => 17,  43 => 15,  40 => 14,  37 => 10,  35 => 6,  31 => 5,  25 => 1,);
    }
}
