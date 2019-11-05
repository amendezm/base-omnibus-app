<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_f60a1926a38af9b8ffc36e135851531c7a29de50ce76e9f5f06fa0711e891e3f extends Twig_Template
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
        $__internal_feb7a793377e6d8d4bfbb450dcdf0a9a012fbbadad69e709c29eaacd5d9c310b = $this->env->getExtension("native_profiler");
        $__internal_feb7a793377e6d8d4bfbb450dcdf0a9a012fbbadad69e709c29eaacd5d9c310b->enter($__internal_feb7a793377e6d8d4bfbb450dcdf0a9a012fbbadad69e709c29eaacd5d9c310b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_feb7a793377e6d8d4bfbb450dcdf0a9a012fbbadad69e709c29eaacd5d9c310b->leave($__internal_feb7a793377e6d8d4bfbb450dcdf0a9a012fbbadad69e709c29eaacd5d9c310b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_04d437db7532126b8aef904a1e060fecfde3b22f5eeddac61026704db800eeb0 = $this->env->getExtension("native_profiler");
        $__internal_04d437db7532126b8aef904a1e060fecfde3b22f5eeddac61026704db800eeb0->enter($__internal_04d437db7532126b8aef904a1e060fecfde3b22f5eeddac61026704db800eeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_04d437db7532126b8aef904a1e060fecfde3b22f5eeddac61026704db800eeb0->leave($__internal_04d437db7532126b8aef904a1e060fecfde3b22f5eeddac61026704db800eeb0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
