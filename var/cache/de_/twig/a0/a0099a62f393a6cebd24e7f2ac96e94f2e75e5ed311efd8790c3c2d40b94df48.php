<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_8e08b12173ca075510be503864132673390754f59379f56e0f34655ab3c82018 extends Twig_Template
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
        $__internal_a4ee5a316fa00424cf9fb52677fc8c4be88660559c2a043d6e5d0e918b3fa21a = $this->env->getExtension("native_profiler");
        $__internal_a4ee5a316fa00424cf9fb52677fc8c4be88660559c2a043d6e5d0e918b3fa21a->enter($__internal_a4ee5a316fa00424cf9fb52677fc8c4be88660559c2a043d6e5d0e918b3fa21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_a4ee5a316fa00424cf9fb52677fc8c4be88660559c2a043d6e5d0e918b3fa21a->leave($__internal_a4ee5a316fa00424cf9fb52677fc8c4be88660559c2a043d6e5d0e918b3fa21a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
