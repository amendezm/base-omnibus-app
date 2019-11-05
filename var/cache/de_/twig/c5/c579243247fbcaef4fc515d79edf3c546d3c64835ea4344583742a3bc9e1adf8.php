<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_fa66cd0121be173c044cb6c5f2afaadc35c289b0d6bc6473531ddbbf15b837b4 extends Twig_Template
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
        $__internal_66922dad2ef14c43c3922d2912d147b2c8aca8ac5b467d65c06bdee027a31bb4 = $this->env->getExtension("native_profiler");
        $__internal_66922dad2ef14c43c3922d2912d147b2c8aca8ac5b467d65c06bdee027a31bb4->enter($__internal_66922dad2ef14c43c3922d2912d147b2c8aca8ac5b467d65c06bdee027a31bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_66922dad2ef14c43c3922d2912d147b2c8aca8ac5b467d65c06bdee027a31bb4->leave($__internal_66922dad2ef14c43c3922d2912d147b2c8aca8ac5b467d65c06bdee027a31bb4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
