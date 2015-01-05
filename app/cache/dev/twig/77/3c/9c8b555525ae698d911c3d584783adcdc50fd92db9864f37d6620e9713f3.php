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
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sitebundle/css/font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"http://maps.google.com/maps/api/js?v=3.exp\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sitebundle/js/eventmap.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 15
        $context["directory"] = "users/documents/";
        // line 16
        echo "    <div class=\"row text-center\" style=\"margin-bottom: 50px;\">
        <div class=\"search-pannel\">
            <div class=\"row col-xs-12\">
                <form class=\"form-inline col-xs-12\" role=\"form\" method=\"GET\" action=\"";
        // line 19
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
        ";
        // line 34
        if (twig_test_empty((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")))) {
            // line 35
            echo "            <p style=\"margin-top: 75px\"> Aucun évennement trouvé </p>
        ";
        } else {
            // line 37
            echo "                <div class=\"container main\">
                    ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 39
                echo "                        <div id=\"card\">
                            <div class=\"col-md-4 col-sm-6 card-item\" >
                                ";
                // line 41
                if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isPremium", array())) {
                    // line 42
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("countrynside_site_abonnement", array("event" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                    echo " \" class=\"card-link\" >
                                ";
                } else {
                    // line 44
                    echo "                                 <a href=\"#cardModal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                    echo "\" class=\"card-link\" data-toggle=\"modal\">
                                ";
                }
                // line 46
                echo "                                    <div class=\"card-hover\">
                                        <div class=\"card-hover-content\">
                                            <i class=\"fa fa-plus fa-3x\"></i>
                                        </div>
                                    </div>
                                    ";
                // line 51
                if ($this->getAttribute($context["event"], "path", array())) {
                    // line 52
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((((isset($context["directory"]) ? $context["directory"] : $this->getContext($context, "directory")) . $this->getAttribute($this->getAttribute($context["event"], "user", array()), "id", array())) . "/photos/") . $this->getAttribute($context["event"], "path", array()))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
                    echo "\"  class=\"image-card img-responsive\"/>
                                    ";
                } else {
                    // line 54
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/photo_default.png"), "html", null, true);
                    echo "\" class=\"image-card img-responsive\"/>
                                    ";
                }
                // line 56
                echo "                                </a>
                                <div class=\"card-caption\">
                                    <h4 class=\"card-title\">";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
                echo "</h4><br/>
                                    <p class=\"text-muted\">";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "descriptif", array()), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                        </div>

                        <!-- card Modal -->
                        <div class=\"card-modal modal fade\" id=\"cardModal";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                            <div class=\"modal-content\">
                                <div class=\"close-modal\" data-dismiss=\"modal\">
                                    <div class=\"lr\">
                                        <div class=\"rl\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"container\">
                                            <div class=\"modal-body\">
                                                <h4 class=\"card-title\">";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
                echo "</h4>
                                                <div class=\"row\">
                                                    <div class=\"col-md-12\">
                                                        ";
                // line 80
                if ($this->getAttribute($context["event"], "path", array())) {
                    // line 81
                    echo "                                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((((isset($context["directory"]) ? $context["directory"] : $this->getContext($context, "directory")) . $this->getAttribute($this->getAttribute($context["event"], "user", array()), "id", array())) . "/photos/") . $this->getAttribute($context["event"], "path", array()))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
                    echo "\"  class=\"img-responsive element-center\"/>
                                                        ";
                } else {
                    // line 83
                    echo "                                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/photo_default.png"), "html", null, true);
                    echo "\" class=\"img-responsive element-center\"/>
                                                        ";
                }
                // line 85
                echo "                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <p style=\"text-align: justify\">
                                                        ";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "descriptif", array()), "html", null, true);
                echo "
                                                    </p>
                                                </div>

                                                <div class=\"text-left\">
                                                    <i class=\"glyphicon glyphicon-calendar\"></i><span class=\"modal-label\"> Date de publication :</span>
                                                    <time>";
                // line 95
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "datepub", array()), "d M Y"), "html", null, true);
                echo "</time>
                                                </div>
                                                <div class=\"text-left\">
                                                    <i class=\"glyphicon glyphicon-globe\"></i><span class=\"modal-label\"> Région :</span>
                                                    ";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "region", array()), "html", null, true);
                echo "
                                                </div>
                                                <div class=\"text-left\">
                                                    <i class=\"glyphicon glyphicon-map-marker\"></i><span class=\"modal-label\"> Adresse :</span>
                                                    ";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "adresse", array()), "html", null, true);
                echo "
                                                </div>
                                                <div class=\"text-left\">
                                                    <i class=\"glyphicon glyphicon-phone\"></i><span class=\"modal-label\"> Téléphone :</span>
                                                    ";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "telephone", array()), "html", null, true);
                echo "
                                                </div>
                                                <div class=\"text-left\">
                                                    <i class=\"glyphicon glyphicon-inbox\"></i><span class=\"modal-label\"> Capacité :</span>
                                                    ";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "capacite", array()), "html", null, true);
                echo "
                                                </div>
                                                <div class=\"text-left\">
                                                    <i class=\"glyphicon glyphicon-euro\"></i><span class=\"modal-label\"> Tarif :</span>
                                                    ";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "tarif", array()), "html", null, true);
                echo "
                                                </div>
                                                <div class=\"text-left\">
                                                    <i class=\"glyphicon glyphicon-edit\"></i><span class=\"modal-label\"> <a href=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("countrynside_calendar_admin", array("event" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\">Gérer les disponibilités</a></span>
                                                </div>

                                                <a href=\"#mapModal\" data-toggle=\"modal\"><input type=\"button\" class=\"btn btn-primary\"  value=\"Voir l'emplacement sur la carte\"></a>
                                                <div class=\"col-xs-12\" style=\"margin-top: 50px\">
                                                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Fermer </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                </div>

                <div class=\"card-modal modal fade\" id=\"mapModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                    <div class=\"modal-content\">
                        <div class=\"close-modal\" data-dismiss=\"modal\">
                            <div class=\"lr\">
                                <div class=\"rl\">
                                </div>
                            </div>
                        </div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"container\">
                                    <div class=\"modal-body\">
                                        <div id=\"map-canvas\" style=\"width: 100%; height: 500px; padding: 0; margin: 0\" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
        ";
        }
        // line 158
        echo "        ";
        // line 159
        echo "        <div class=\"row navigation text-center\">
            ";
        // line 160
        echo $this->env->getExtension('knp_pagination')->render((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        echo "
        </div>
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
        return array (  322 => 160,  319 => 159,  317 => 158,  290 => 133,  269 => 118,  263 => 115,  256 => 111,  249 => 107,  242 => 103,  235 => 99,  228 => 95,  219 => 89,  213 => 85,  207 => 83,  199 => 81,  197 => 80,  191 => 77,  176 => 65,  167 => 59,  163 => 58,  159 => 56,  153 => 54,  145 => 52,  143 => 51,  136 => 46,  130 => 44,  124 => 42,  122 => 41,  118 => 39,  114 => 38,  111 => 37,  107 => 35,  105 => 34,  87 => 19,  82 => 16,  80 => 15,  75 => 14,  72 => 13,  66 => 11,  60 => 9,  57 => 8,  51 => 6,  47 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
