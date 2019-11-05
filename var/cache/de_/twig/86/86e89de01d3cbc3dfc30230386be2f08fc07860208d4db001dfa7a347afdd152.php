<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_eb697b50b3152f70294c4db44a6a707267121f72afb2bbc738d8b60be228b281 extends Twig_Template
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
        $__internal_2276814621bbef7978c10fa932de29a4cc3362f3e6a0a2d1bd094ba1c3281c96 = $this->env->getExtension("native_profiler");
        $__internal_2276814621bbef7978c10fa932de29a4cc3362f3e6a0a2d1bd094ba1c3281c96->enter($__internal_2276814621bbef7978c10fa932de29a4cc3362f3e6a0a2d1bd094ba1c3281c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2276814621bbef7978c10fa932de29a4cc3362f3e6a0a2d1bd094ba1c3281c96->leave($__internal_2276814621bbef7978c10fa932de29a4cc3362f3e6a0a2d1bd094ba1c3281c96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
