<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_6db214484d72714b3a4a746cb9c2890f109eb8721a9a1f185feff89a5e69ca7d extends Twig_Template
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
        $__internal_9c81ac20e69e956beebd8102951a4d4590929b3a04db61bec3bc5a4415b602c1 = $this->env->getExtension("native_profiler");
        $__internal_9c81ac20e69e956beebd8102951a4d4590929b3a04db61bec3bc5a4415b602c1->enter($__internal_9c81ac20e69e956beebd8102951a4d4590929b3a04db61bec3bc5a4415b602c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9c81ac20e69e956beebd8102951a4d4590929b3a04db61bec3bc5a4415b602c1->leave($__internal_9c81ac20e69e956beebd8102951a4d4590929b3a04db61bec3bc5a4415b602c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
