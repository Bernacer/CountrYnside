<?php

/* CountrynsideSiteBundle:Default:rechercherEvennement.html.twig */
class __TwigTemplate_773c9c8b555525ae698d911c3d584783adcdc50fd92db9864f37d6620e9713f3 extends Twig_Template
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
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"search-pannel\">
                <div class=\"row col-xs-12\">
                    <form class=\"form-inline col-xs-12\" role=\"form\" method=\"GET\" action=\"";
        // line 7
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
        ";
        // line 21
        if (twig_test_empty((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")))) {
            // line 22
            echo "            <p style=\"margin-top: 75px\"> Aucun évennement trouvé </p>
        ";
        } else {
            // line 24
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 25
                echo "                <div>
                    <h3>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
                echo "</h3>
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <time>";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "datepub", array()), "d M Y"), "html", null, true);
                echo "</time>
                            </div>
                        </div>
                        <div class=\"row\"> 
                            <div class=\"col-md-6\">
                                <h6>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "region", array()), "html", null, true);
                echo "</h6>
                            </div>
                        </div>
                    <p> <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("countrynside_site_infosEventComplet", array("event" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\"> En savoir plus </a> </p>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        ";
        }
        // line 41
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "CountrynsideSiteBundle:Default:rechercherEvennement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  107 => 40,  98 => 37,  92 => 34,  84 => 29,  78 => 26,  75 => 25,  70 => 24,  66 => 22,  64 => 21,  47 => 7,  39 => 3,  36 => 2,  11 => 1,);
    }
}
