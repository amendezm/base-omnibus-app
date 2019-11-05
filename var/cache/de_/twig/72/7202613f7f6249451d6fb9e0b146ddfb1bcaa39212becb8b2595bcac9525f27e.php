<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_5cb7a9676e89dffb72b531a57f5dcadc2f8ef44d676afed6f5da9657fbabbaae extends Twig_Template
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
        $__internal_f3b8c65ce4361d7adf9ae1c33c6cb76cab9ab5e7c4bc5ddcc5befd74e203e7b4 = $this->env->getExtension("native_profiler");
        $__internal_f3b8c65ce4361d7adf9ae1c33c6cb76cab9ab5e7c4bc5ddcc5befd74e203e7b4->enter($__internal_f3b8c65ce4361d7adf9ae1c33c6cb76cab9ab5e7c4bc5ddcc5befd74e203e7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f3b8c65ce4361d7adf9ae1c33c6cb76cab9ab5e7c4bc5ddcc5befd74e203e7b4->leave($__internal_f3b8c65ce4361d7adf9ae1c33c6cb76cab9ab5e7c4bc5ddcc5befd74e203e7b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
