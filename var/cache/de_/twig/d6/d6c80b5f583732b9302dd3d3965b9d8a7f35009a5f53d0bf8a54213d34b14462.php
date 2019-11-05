<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6a91458037ee60c992bd203e2c798d7851085fc036b715db0d3c60ce61169881 extends Twig_Template
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
        $__internal_1a5dd1ca3b2369009d8759f8a1ca3387694355706f2ef3c9f76be2c72900c30a = $this->env->getExtension("native_profiler");
        $__internal_1a5dd1ca3b2369009d8759f8a1ca3387694355706f2ef3c9f76be2c72900c30a->enter($__internal_1a5dd1ca3b2369009d8759f8a1ca3387694355706f2ef3c9f76be2c72900c30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1a5dd1ca3b2369009d8759f8a1ca3387694355706f2ef3c9f76be2c72900c30a->leave($__internal_1a5dd1ca3b2369009d8759f8a1ca3387694355706f2ef3c9f76be2c72900c30a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
