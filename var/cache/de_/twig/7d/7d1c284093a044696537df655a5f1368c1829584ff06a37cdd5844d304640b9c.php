<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_74192f67a54266000cb23606fb4a4cece67aff578393b1339a4ca432e6951755 extends Twig_Template
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
        $__internal_912cb3e74f549201a152fd0910958ca1d3fd4bfaee51bd2e191b613508e02436 = $this->env->getExtension("native_profiler");
        $__internal_912cb3e74f549201a152fd0910958ca1d3fd4bfaee51bd2e191b613508e02436->enter($__internal_912cb3e74f549201a152fd0910958ca1d3fd4bfaee51bd2e191b613508e02436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_912cb3e74f549201a152fd0910958ca1d3fd4bfaee51bd2e191b613508e02436->leave($__internal_912cb3e74f549201a152fd0910958ca1d3fd4bfaee51bd2e191b613508e02436_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
