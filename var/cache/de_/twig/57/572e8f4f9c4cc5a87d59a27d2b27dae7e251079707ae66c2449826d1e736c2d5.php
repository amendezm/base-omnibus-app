<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_22f214c5a98991f4ab530bf51412bf7964b347a30c2791375ec4e69f26b21c3e extends Twig_Template
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
        $__internal_4bb7d159cb48e066f45b6affe021d8e1b6265ed9f4777af47e0f121549636062 = $this->env->getExtension("native_profiler");
        $__internal_4bb7d159cb48e066f45b6affe021d8e1b6265ed9f4777af47e0f121549636062->enter($__internal_4bb7d159cb48e066f45b6affe021d8e1b6265ed9f4777af47e0f121549636062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4bb7d159cb48e066f45b6affe021d8e1b6265ed9f4777af47e0f121549636062->leave($__internal_4bb7d159cb48e066f45b6affe021d8e1b6265ed9f4777af47e0f121549636062_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
