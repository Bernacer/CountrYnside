<?php

/* CountrynsideSiteBundle:Default:annonce.html.twig */
class __TwigTemplate_3f1f29e3ff1f996c664e4d161d8fefcaa3bf80069f9df42a8e56245b2ce22d0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'prebody' => array($this, 'block_prebody'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sitebundle/css/eventform.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500\">
    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sitebundle/js/eventform.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 12
    public function block_prebody($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("prebody", $context, $blocks);
        echo "
    <body onload=\"initialize()\">
        <div class=\"container\">
            <div class=\"text-center\">
                <div class=\"col-md-12\">
                    <fieldset class>
                        <h3 class=\"headtitle\">Publiez votre évènement</h3>
                        ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
                        <div class=\"row\">
                            <div class=\"form-group col-md-12\">
                                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Entrez le titre de votre annonce")));
        echo "
                            </div>    
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group col-md-12\">
                                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                            </div>    
                        </div>
                        <div class=\"row\">

                        </div>
                        <div class=\"row\">
                            <div id=\"locationField\" class=\"form-group col-md-12\">
                                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresse", array()), 'row', array("attr" => array("id" => "autocomplete", "class" => "form-control", "placeholder" => "Entrez votre addresse", "onFocus" => "geolocate()")));
        // line 37
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group col-md-6\">
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "region", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Veuillez saisir votre addresse")));
        echo "
                            </div>

                            <div class=\"form-group col-md-6\">
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "telephone", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Entrez votre numéro de téléphone")));
        echo "
                            </div>        
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group col-md-9\">
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-3\">
                                <input type=\"button\" class=\"btn btn-default\" onclick=\"visualiser\" value=\"Visualiser\"/>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group col-md-6\">
                                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "capacite", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                            </div>    
                            <div class=\"form-group col-md-6\">
                                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tarif", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                            </div>    
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group col-md-12\">
                                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descriptif", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                            </div>    
                        </div>
                        <input type=\"submit\" class=\"btn btn-success\"/>
                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
                        ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
                    </fieldset>
                </div>    
            </div>
        </div>
    </div>
</body>
";
    }

    public function getTemplateName()
    {
        return "CountrynsideSiteBundle:Default:annonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 72,  152 => 71,  145 => 67,  137 => 62,  131 => 59,  120 => 51,  112 => 46,  105 => 42,  98 => 37,  96 => 36,  85 => 28,  77 => 23,  71 => 20,  60 => 13,  57 => 12,  51 => 9,  47 => 7,  44 => 6,  38 => 4,  33 => 3,  30 => 2,);
    }
}
