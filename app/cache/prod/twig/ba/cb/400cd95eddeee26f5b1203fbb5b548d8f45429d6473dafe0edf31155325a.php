<?php

/* CountrynsideSiteBundle:Default:index.html.twig */
class __TwigTemplate_bacb400cd95eddeee26f5b1203fbb5b548d8f45429d6473dafe0edf31155325a extends Twig_Template
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

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"text-center\">
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
        // line 39
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
        // line 48
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
        // line 58
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
                    <form class=\"form-inline col-xs-12\" role=\"form\" method=\"GET\" action=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("countrynside_site_chercherEvent");
        echo "\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control input-search col-xs-3\" name=\"infos_recherche\" placeholder=\"Que cherchez vous ?\">
                        </div>
                        <div class=\"form-group\">
                                <input class=\"form-control input-search col-xs-3 datepicker\" type=\"text\" name=\"dateD\" placeholder=\"Quand... ?\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control input-search col-xs-3 datepicker\" name=\"dateF\" placeholder=\"Jusqu'à... ?\">
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
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond6.jpg"), "html", null, true);
        echo "'); background-size: cover;\">
                           <p>Fromage artisanal</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"img-small\" style=\"background: url('";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond5.png"), "html", null, true);
        echo "');background-size: cover;\">
                            <p>Vignes de la région</p>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"img-small\" style=\"background: url('";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond4.png"), "html", null, true);
        echo "');background-size: cover;\">
                            <p>Cultures locales</p>
                        </div>
                    </div>
            </div>

            <div class=\"row text-center\">
                <h2>Catégories...</h2>
                <p>
                    Choisissez ce qui vous interesse.
                </p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"img-small\" style=\"background: url('";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond6.jpg"), "html", null, true);
        echo "'); background-size: cover;\">
                        <p>Fromage artisanal</p>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"img-small\" style=\"background: url('";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond5.png"), "html", null, true);
        echo "');background-size: cover;\">
                        <p>Vignes de la région</p>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"img-small\" style=\"background: url('";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond4.png"), "html", null, true);
        echo "');background-size: cover;\">
                        <p>Cultures locales</p>
                    </div>
                </div>
            </div>

            <div class=\"row text-center\">
                <h2>Dernières annonces...</h2>
                <p>
                    Suivez les dernières publications.
                </p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <div class=\"img-small\" style=\"background: url('";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond6.jpg"), "html", null, true);
        echo "'); background-size: cover;\">
                        <p>Fromage artisanal</p>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"img-small\" style=\"background: url('";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond5.png"), "html", null, true);
        echo "');background-size: cover;\">
                        <p>Vignes de la région</p>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"img-small\" style=\"background: url('";
        // line 163
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
        return array (  255 => 163,  247 => 158,  239 => 153,  221 => 138,  213 => 133,  205 => 128,  187 => 113,  179 => 108,  171 => 103,  141 => 76,  120 => 58,  107 => 48,  95 => 39,  77 => 25,  74 => 24,  55 => 9,  51 => 8,  48 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }
}
