<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_a344a18b93f69f220583fd03a6e2d7784ed1e0cf5e43450e6d0b8ee08df71d51 extends Twig_Template
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
        $__internal_67cd2faec133551e9fbdabdc16d3b96f087d138bf95f0709cb9b8063c3b36f74 = $this->env->getExtension("native_profiler");
        $__internal_67cd2faec133551e9fbdabdc16d3b96f087d138bf95f0709cb9b8063c3b36f74->enter($__internal_67cd2faec133551e9fbdabdc16d3b96f087d138bf95f0709cb9b8063c3b36f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_67cd2faec133551e9fbdabdc16d3b96f087d138bf95f0709cb9b8063c3b36f74->leave($__internal_67cd2faec133551e9fbdabdc16d3b96f087d138bf95f0709cb9b8063c3b36f74_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
