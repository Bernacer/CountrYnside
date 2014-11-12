<?php

/* CountrynsideSiteBundle:Default:index.html.twig */
class __TwigTemplate_ca1988a4974d5c320b78ba27424954642e272537ae4d997411831b4183562ade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/datepicker/css/datepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
  \$(document).ready(function(){
      \$('.carousel').carousel({
        interval : 5000
      })
  });
 </script>
    <script>
        \$(function(){
            \$('.datepicker').datepicker();
        })
    </script>
";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"text-center\">
        ";
        // line 28
        echo "        <!--<span id=\"fond\">
            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond4.png"), "html", null, true);
        echo "\" />
        </span>-->
        <div id=\"my_carousel\" class=\"carousel slide\" data-ride=\"carousel\" style=\"z-index: 0\">
            <div class=\"carousel-header col-xs-12\">
                <h3>Découvre la France de l'intérieur</h3>
                <p>
                    <i>Laisse nous te surprendre </i>
                </p>
            </div>

            <div class=\"carousel-inner\">
                <!-- Page 1 -->
                <div class=\"item active\">
                    <div class=\"carousel-page\">
                        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond4.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"margin:0px auto;\" />
                    </div>
                    <div class=\"carousel-caption caption-center\">
                        <h3>Des paysages surprenants</h3>
                    </div>
                </div>
                <!-- Page 2 -->
                <div class=\"item\">
                    <div class=\"carousel-page\">
                        <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"
                                                    style=\"margin:0px auto;\"  />
                    </div>
                      <div class=\"carousel-caption caption-center\">
                          <h3>Des rencontres privilégiées</h3>
                      </div>
                </div>
                <!-- Page 3 -->
                <div class=\"item\">
                    <div class=\"carousel-page\">
                        <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"
                             style=\"margin:0px auto;max-height:100%;\"  />
                    </div>
                    <div class=\"carousel-caption caption-center\">
                        <h3>Des découvertes gastronomiques</h3>
                    </div>
                </div>
            </div>
            <a class=\"left carousel-control\" href=\"#my_carousel\" role=\"button\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"right carousel-control\" href=\"#my_carousel\" role=\"button\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
            <div class=\"search-pannel\">
                <div class=\"row col-xs-12\">
                    <form class=\"form-inline col-xs-12\" role=\"form\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control col-xs-3\" id=\"adresse-search\" placeholder=\"Que cherchez vous ?\">
                        </div>
                        <div class=\"form-group\">
                                <input class=\"form-control col-xs-3 datepicker\" type=\"text\" id=\"dateD\" placeholder=\"Quand... ?\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control col-xs-3 datepicker\" id=\"dateF\" placeholder=\"Jusqu'à... ?\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Chercher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section class=\"news\">
        <div class=\"container\">
            <div class=\"row text-center\">
                <h2>A découvrir...</h2>
                <p>
                    Nos destinations les plus populaires.
                </p>
            </div>

            <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"img-small\" style=\"background: url('";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond6.jpg"), "html", null, true);
        echo "'); background-size: cover;\">
                           <p>Fromage artisanal</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"img-small\" style=\"background: url('";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond5.png"), "html", null, true);
        echo "');background-size: cover;\">
                            <p>Vignes de la région</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"img-small\" style=\"background: url('";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond4.png"), "html", null, true);
        echo "');background-size: cover;\">
                            <p>Cultures locales</p>
                        </div>
                    </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "CountrynsideSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 117,  183 => 112,  175 => 107,  127 => 62,  114 => 52,  102 => 43,  85 => 29,  82 => 28,  76 => 24,  73 => 23,  55 => 9,  51 => 8,  48 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }
}
