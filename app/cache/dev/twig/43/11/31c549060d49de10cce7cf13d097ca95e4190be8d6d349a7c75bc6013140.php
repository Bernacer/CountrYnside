<?php

/* CountrynsideSiteBundle:Default:voir.html.twig */
class __TwigTemplate_431131c549060d49de10cce7cf13d097ca95e4190be8d6d349a7c75bc6013140 extends Twig_Template
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

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 16
        $context["directory"] = "users/documents/";
        // line 17
        echo "    <div class=\"row\">
        <div class=\"row text-center\">
            <h2 class=\"headform\">Vos annonces</h2>
        </div>
        ";
        // line 22
        echo "            ";
        // line 23
        echo "        ";
        // line 24
        echo "        <div class=\"container main\">
            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 26
            echo "                <div id=\"card\">
                    <div class=\"col-md-4 col-sm-6 card-item\" >
                        <a href=\"#cardModal";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" class=\"card-link\" data-toggle=\"modal\">
                            <div class=\"card-hover\">
                                <div class=\"card-hover-content\">
                                    <i class=\"fa fa-plus fa-3x\"></i>
                                </div>
                            </div>
                            ";
            // line 34
            if ($this->getAttribute($context["event"], "path", array())) {
                // line 35
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((((isset($context["directory"]) ? $context["directory"] : $this->getContext($context, "directory")) . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "/photos/") . $this->getAttribute($context["event"], "path", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
                echo "\"  class=\"image-card img-responsive\"/>
                            ";
            } else {
                // line 37
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/photo_default.png"), "html", null, true);
                echo "\" class=\"image-card img-responsive\"/>
                            ";
            }
            // line 39
            echo "                        </a>
                        <div class=\"card-caption\">
                            <h4 class=\"card-title\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
            echo "</h4><br/>
                            <p class=\"text-muted\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "descriptif", array()), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>

                <!-- card Modal -->
                <div class=\"card-modal modal fade\" id=\"cardModal";
            // line 48
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
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
            echo "</h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                ";
            // line 63
            if ($this->getAttribute($context["event"], "path", array())) {
                // line 64
                echo "                                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((((isset($context["directory"]) ? $context["directory"] : $this->getContext($context, "directory")) . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "/photos/") . $this->getAttribute($context["event"], "path", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
                echo "\"  class=\"img-responsive element-center\"/>
                                                ";
            } else {
                // line 66
                echo "                                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/countrynside/images/photo_default.png"), "html", null, true);
                echo "\" class=\"img-responsive element-center\"/>
                                                ";
            }
            // line 68
            echo "                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <p style=\"text-align: justify\">
                                                ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "descriptif", array()), "html", null, true);
            echo "
                                            </p>
                                        </div>

                                            <div class=\"text-left\">
                                                <i class=\"glyphicon glyphicon-calendar\"></i><span class=\"modal-label\"> Date de publication :</span>
                                                <time>";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "datepub", array()), "d M Y"), "html", null, true);
            echo "</time>
                                            </div>
                                            <div class=\"text-left\">
                                                <i class=\"glyphicon glyphicon-globe\"></i><span class=\"modal-label\"> Région :</span>
                                                ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "region", array()), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"text-left\">
                                                <i class=\"glyphicon glyphicon-map-marker\"></i><span class=\"modal-label\"> Adresse :</span>
                                                ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "adresse", array()), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"text-left\">
                                                <i class=\"glyphicon glyphicon-phone\"></i><span class=\"modal-label\"> Téléphone :</span>
                                                ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "telephone", array()), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"text-left\">
                                                <i class=\"glyphicon glyphicon-inbox\"></i><span class=\"modal-label\"> Capacité :</span>
                                                ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "capacite", array()), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"text-left\">
                                                <i class=\"glyphicon glyphicon-euro\"></i><span class=\"modal-label\"> Tarif :</span>
                                                ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "tarif", array()), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"text-left\">
                                                <i class=\"glyphicon glyphicon-edit\"></i><span class=\"modal-label\"> <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("countrynside_calendar_admin", array("event" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">Gérer les disponibilités</a></span>
                                            </div>

                                        <a href=\"#mapModal\" data-toggle=\"modal\" onclick=\"reinitialize('";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "coord", array()), "html", null, true);
            echo "')\"><input type=\"button\" class=\"btn btn-primary\"  value=\"Voir l'emplacement sur la carte\"></a>
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
        // line 117
        echo "        </div>
       </div>
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
    <script type=\"text/javascript\">
        var map;
        var myCenter=new google.maps.LatLng(46.6302142, 2.5680160);
        var marker=new google.maps.Marker({
            position:myCenter
        });

        function initialize() {
            var mapProp = {
                center:myCenter,
                draggable: false,
                scrollwheel: true,
                mapTypeId:google.maps.MapTypeId.ROADMAP,
                zoom: 6,
                disableDefaultUI: true
            };

            map=new google.maps.Map(document.getElementById(\"map-canvas\"),mapProp);
            marker.setMap(map);

            google.maps.event.addListener(marker, 'click', function() {

                infowindow.setContent(contentString);
                infowindow.open(map, marker);

            });
        };
        google.maps.event.addDomListener(window, 'load', initialize);

        google.maps.event.addDomListener(window, \"resize\", resizingMap());

        \$('#mapModal').on('show.bs.modal', function() {
            //Must wait until the render of the modal appear, thats why we use the resizeMap and NOT resizingMap!! ;-)
            resizeMap();
        })

        function resizeMap() {
            if(typeof map ==\"undefined\") return;
            setTimeout( function(){resizingMap();} , 400);
        }

        function resizingMap() {
            if(typeof map ==\"undefined\") return;
            var center = map.getCenter();
            google.maps.event.trigger(map, \"resize\");
            map.setCenter(center);
        }
    </script>
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
        return array (  263 => 117,  244 => 104,  238 => 101,  232 => 98,  225 => 94,  218 => 90,  211 => 86,  204 => 82,  197 => 78,  188 => 72,  182 => 68,  176 => 66,  168 => 64,  166 => 63,  160 => 60,  145 => 48,  136 => 42,  132 => 41,  128 => 39,  122 => 37,  114 => 35,  112 => 34,  103 => 28,  99 => 26,  95 => 25,  92 => 24,  90 => 23,  88 => 22,  82 => 17,  80 => 16,  75 => 15,  72 => 14,  66 => 11,  60 => 9,  57 => 8,  51 => 6,  47 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
