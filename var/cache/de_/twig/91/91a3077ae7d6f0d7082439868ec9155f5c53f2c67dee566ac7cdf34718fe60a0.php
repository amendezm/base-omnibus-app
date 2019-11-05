<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5a3d66a3976a2a49240cf2df5cde03d3454cbfaed8c495fda0f66832dfdadf94 extends Twig_Template
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
        $__internal_c2dbb19da107d913b5572e72409d0d757d80580fe5a70c1a8821c90db727df30 = $this->env->getExtension("native_profiler");
        $__internal_c2dbb19da107d913b5572e72409d0d757d80580fe5a70c1a8821c90db727df30->enter($__internal_c2dbb19da107d913b5572e72409d0d757d80580fe5a70c1a8821c90db727df30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c2dbb19da107d913b5572e72409d0d757d80580fe5a70c1a8821c90db727df30->leave($__internal_c2dbb19da107d913b5572e72409d0d757d80580fe5a70c1a8821c90db727df30_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
