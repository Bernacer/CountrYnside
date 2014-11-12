<?php

/* CountrynsideSiteBundle:Default:voir.html.twig */
class __TwigTemplate_23640956a14c21094c2c31e6f17ad992d5b2eb7f295ac5c25e8cfd4247161f18 extends Twig_Template
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
    <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sitebundle/css/eventform.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        echo "    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sitebundle/js/eventmap.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 14
        $context["directory"] = "users/documents/";
        // line 15
        echo "    <div class=\"container\">
        <div class=\"text-center\">
            <div class=\"col-md-12\">
                <h2 class=\"headform\">Vos annonces</h2>
                <div class=\"col-md-3\" style=\"\">
                    <span style=\"position: fixed;\">
                        <div id=\"map-canvas\"></div>
                    </span>
                </div>
                <div class=\"col-md-9\">
                    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "events"));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 26
            echo "                        <fieldset>
                            <h3>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
            echo "</h3>
                            <div class=\"row\">
                                <div class=\"col-md-3\">
                                    <time>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "datepub", array()), "d M Y"), "html", null, true);
            echo "</time>
                                </div>
                            </div>
                            <div class=\"row\"> 
                                <div class=\"col-md-6\">
                                    <h6>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "region", array()), "html", null, true);
            echo "</h6>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "adresse", array()), "html", null, true);
            echo "</h6>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((($this->getContext($context, "directory") . $this->getContext($context, "id")) . "/photos/") . $this->getAttribute($context["event"], "path", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
            echo "\" class=\"image\"/>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <p>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "telephone", array()), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"col-md-4\">
                                    <p>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "capacite", array()), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"col-md-4\">
                                    <p>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "tarif", array()), "html", null, true);
            echo "</p>
                                </div>
                            </div>     
                            <div class=\"col-md-12\">     
                                <article>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "descriptif", array()), "html", null, true);
            echo "</article>
                            </div>
                            <input type=\"button\" value=\"Voir l'emplacement sur la carte\" onclick=\"reinitialize('";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "coord", array()), "html", null, true);
            echo "')\">
                        </fieldset>
                        <br>
                        <br>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CountrynsideSiteBundle:Default:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 65,  148 => 60,  143 => 58,  136 => 54,  130 => 51,  124 => 48,  114 => 43,  106 => 38,  100 => 35,  92 => 30,  86 => 27,  83 => 26,  79 => 25,  67 => 15,  65 => 14,  60 => 13,  57 => 12,  51 => 9,  48 => 8,  45 => 7,  39 => 5,  33 => 3,  30 => 2,);
    }
}
