<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_9b0aaa6aa3ae07761fb540bdb67360aabf0d5f936ef2e64847ccd55c50ec2b69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/userbundle/register.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-5\">
                <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
                    <div class=\"row\">
                        <div class=\"form-group col-md-9\">
                            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom", array()), 'label');
        echo "
                            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>    
                    </div>
                    <div class=\"row\">
                        <div class=\"form-group col-md-9\">
                            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom", array()), 'label');
        echo "
                            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>    
                    </div>
                    <div class=\"row\">
                        <div class=\"form-group col-md-9\">
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username", array()), 'label');
        echo "
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>    
                    </div>
                    <div class=\"row\">
                        <div class=\"form-group col-md-9\">
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email", array()), 'label');
        echo "
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>    
                    </div>
                    <div class=\"row\">
                        <div class=\"form-group col-md-9\">
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword", array()), "first", array()), 'label');
        echo "
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>    
                    </div>
                    <div class=\"row\">
                        <div class=\"form-group col-md-9\">
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword", array()), "second", array()), 'label');
        echo "
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>    
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">S'enregistrer</button>
                   ";
        // line 49
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars", array()), "valid", array()))) {
            // line 50
            echo "                        <div id=\"erreurs\">
                            ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo " 
                            ";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword", array()), "first", array()), 'errors');
            echo "
                            ";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword", array()), "second", array()), 'errors');
            echo "
                            ";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email", array()), 'errors');
            echo "
                            ";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 58
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token", array()), 'widget');
        echo "
                </form>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 58,  154 => 55,  150 => 54,  146 => 53,  142 => 52,  138 => 51,  135 => 50,  133 => 49,  126 => 45,  122 => 44,  114 => 39,  110 => 38,  102 => 33,  98 => 32,  90 => 27,  86 => 26,  78 => 21,  74 => 20,  66 => 15,  62 => 14,  54 => 11,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,);
    }
}
