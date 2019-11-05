<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_805220917535971b27663b009e7aae59ebc6459b0fe12138fbc05568dbe32e67 extends Twig_Template
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
        $__internal_1b12c3aa0a0fa5e7a0ed01bd8d759698dc6bff85f8b5f939b7930f1c620fa527 = $this->env->getExtension("native_profiler");
        $__internal_1b12c3aa0a0fa5e7a0ed01bd8d759698dc6bff85f8b5f939b7930f1c620fa527->enter($__internal_1b12c3aa0a0fa5e7a0ed01bd8d759698dc6bff85f8b5f939b7930f1c620fa527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1b12c3aa0a0fa5e7a0ed01bd8d759698dc6bff85f8b5f939b7930f1c620fa527->leave($__internal_1b12c3aa0a0fa5e7a0ed01bd8d759698dc6bff85f8b5f939b7930f1c620fa527_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
