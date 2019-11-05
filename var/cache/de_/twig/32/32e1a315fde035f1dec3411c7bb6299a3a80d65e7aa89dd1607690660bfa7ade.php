<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4d0279b33ae838c1925d6c43f99946dc12e10ad0ce732843e8f66f2faa02eb38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3a37011ba705f0577282cf842ce0016e30faf11fbc636f912de6941bf4482ff = $this->env->getExtension("native_profiler");
        $__internal_b3a37011ba705f0577282cf842ce0016e30faf11fbc636f912de6941bf4482ff->enter($__internal_b3a37011ba705f0577282cf842ce0016e30faf11fbc636f912de6941bf4482ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b3a37011ba705f0577282cf842ce0016e30faf11fbc636f912de6941bf4482ff->leave($__internal_b3a37011ba705f0577282cf842ce0016e30faf11fbc636f912de6941bf4482ff_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c20ef87b6c8563297bfa1eaa713be75ab68a08aa18ed3520557b758b544b3d6 = $this->env->getExtension("native_profiler");
        $__internal_5c20ef87b6c8563297bfa1eaa713be75ab68a08aa18ed3520557b758b544b3d6->enter($__internal_5c20ef87b6c8563297bfa1eaa713be75ab68a08aa18ed3520557b758b544b3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5c20ef87b6c8563297bfa1eaa713be75ab68a08aa18ed3520557b758b544b3d6->leave($__internal_5c20ef87b6c8563297bfa1eaa713be75ab68a08aa18ed3520557b758b544b3d6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
