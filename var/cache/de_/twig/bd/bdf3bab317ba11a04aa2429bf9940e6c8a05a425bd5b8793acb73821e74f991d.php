<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ead9d38f3b4946db1ccca2f88d57142c8f45fd579a96301721bb3fb43c68df08 extends Twig_Template
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
        $__internal_2f1b66fd7e0df9399856ddf9b3b971edfd96ab11015461bd474481a06e3431f0 = $this->env->getExtension("native_profiler");
        $__internal_2f1b66fd7e0df9399856ddf9b3b971edfd96ab11015461bd474481a06e3431f0->enter($__internal_2f1b66fd7e0df9399856ddf9b3b971edfd96ab11015461bd474481a06e3431f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2f1b66fd7e0df9399856ddf9b3b971edfd96ab11015461bd474481a06e3431f0->leave($__internal_2f1b66fd7e0df9399856ddf9b3b971edfd96ab11015461bd474481a06e3431f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
