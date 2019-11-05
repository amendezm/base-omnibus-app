<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7e2ef76597377f18f00d990e72e33f6609a46aeb84cc7170088ad30680979a17 extends Twig_Template
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
        $__internal_f2bca72d33380e3ad9f7390787c82e8539793b2a0a9271b5aa3a366102eb6c4a = $this->env->getExtension("native_profiler");
        $__internal_f2bca72d33380e3ad9f7390787c82e8539793b2a0a9271b5aa3a366102eb6c4a->enter($__internal_f2bca72d33380e3ad9f7390787c82e8539793b2a0a9271b5aa3a366102eb6c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_f2bca72d33380e3ad9f7390787c82e8539793b2a0a9271b5aa3a366102eb6c4a->leave($__internal_f2bca72d33380e3ad9f7390787c82e8539793b2a0a9271b5aa3a366102eb6c4a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
