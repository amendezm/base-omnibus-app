<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a6ed9ac04e7fa165c06aeebe7fcc6be4ed440fc20627324aa43cb0f61c0ce14f extends Twig_Template
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
        $__internal_72656f8a077d8f0316bee4f101f180377d3371525c5f9577cd53604288b7b7b5 = $this->env->getExtension("native_profiler");
        $__internal_72656f8a077d8f0316bee4f101f180377d3371525c5f9577cd53604288b7b7b5->enter($__internal_72656f8a077d8f0316bee4f101f180377d3371525c5f9577cd53604288b7b7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_72656f8a077d8f0316bee4f101f180377d3371525c5f9577cd53604288b7b7b5->leave($__internal_72656f8a077d8f0316bee4f101f180377d3371525c5f9577cd53604288b7b7b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
