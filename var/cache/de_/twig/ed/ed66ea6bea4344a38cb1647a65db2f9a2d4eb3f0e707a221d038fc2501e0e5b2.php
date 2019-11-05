<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6b249398280621d9848bdb542d9dd61b700b3cd07ae4d9c9bdf1a703735ba095 extends Twig_Template
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
        $__internal_8d4dabce5fa9c6bd9efe0b62d1ddc879610389db34ff36c3527afb95c2130aa6 = $this->env->getExtension("native_profiler");
        $__internal_8d4dabce5fa9c6bd9efe0b62d1ddc879610389db34ff36c3527afb95c2130aa6->enter($__internal_8d4dabce5fa9c6bd9efe0b62d1ddc879610389db34ff36c3527afb95c2130aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_8d4dabce5fa9c6bd9efe0b62d1ddc879610389db34ff36c3527afb95c2130aa6->leave($__internal_8d4dabce5fa9c6bd9efe0b62d1ddc879610389db34ff36c3527afb95c2130aa6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
