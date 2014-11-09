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
";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">
  \$(document).ready(function(){
      \$('.carousel').carousel({
        interval : 5000
      })
  });
 </script>       
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"container\">
    <div class=\"text-center\">
        <h3>Découvre la France de l'intérieur</h3>
        <p> <i>Laisse nous te surprendre </i></p>
        <!--<span id=\"fond\">
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond4.png"), "html", null, true);
        echo "\" />
        </span>-->
        <div id=\"my_carousel\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <!-- Page 1 -->
                <div class=\"item active\">  
                    <div class=\"carousel-page\">
                        <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond4.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"margin:0px auto;\" />
                    </div> 
                    <div class=\"carousel-caption\">
                        <h3>Des paysages surprenants</h3>
                    </div>
                </div>   
                <!-- Page 2 -->
                <div class=\"item\"> 
                    <div class=\"carousel-page\">
                        <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond3.png"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\" 
                                                    style=\"margin:0px auto;\"  />
                    </div> 
                      <div class=\"carousel-caption\">
                          <h3>Des rencontres privilégiées</h3>
                      </div>
                </div>  
                <!-- Page 3 -->
                <div class=\"item\">  
                    <div class=\"carousel-page\">
                        <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/image_fond6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\" 
                             style=\"margin:0px auto;max-height:100%;\"  />
                    </div>  
                    <div class=\"carousel-caption\">
                        <h3>Des découvertes gastronomiques</h3>
                    </div>
                </div>     
            </div>
        </div>
    </div>
</div>
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
        return array (  108 => 49,  95 => 39,  83 => 30,  73 => 23,  63 => 17,  60 => 16,  47 => 7,  44 => 6,  38 => 4,  33 => 3,  30 => 2,);
    }
}
