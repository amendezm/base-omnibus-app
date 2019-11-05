<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_bbc8b6b5a9f1fd316d1eeeb1fb878925fbc06eaf879aeb884bdf8ded0bcf3baf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_938c10f9a52851477d2e470f293946e9e188988ece56642d5991c98b1d445cdc = $this->env->getExtension("native_profiler");
        $__internal_938c10f9a52851477d2e470f293946e9e188988ece56642d5991c98b1d445cdc->enter($__internal_938c10f9a52851477d2e470f293946e9e188988ece56642d5991c98b1d445cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_938c10f9a52851477d2e470f293946e9e188988ece56642d5991c98b1d445cdc->leave($__internal_938c10f9a52851477d2e470f293946e9e188988ece56642d5991c98b1d445cdc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
