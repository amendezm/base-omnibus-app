<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_c3b56b4900f61bd91d8d07f87663419a4b80b2d3adc809feb108f0edbfc25fe6 extends Twig_Template
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
        $__internal_37e044f3ba590c0893acc4f2384c959464ae9218f6d15d00acb2c07879c81489 = $this->env->getExtension("native_profiler");
        $__internal_37e044f3ba590c0893acc4f2384c959464ae9218f6d15d00acb2c07879c81489->enter($__internal_37e044f3ba590c0893acc4f2384c959464ae9218f6d15d00acb2c07879c81489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_37e044f3ba590c0893acc4f2384c959464ae9218f6d15d00acb2c07879c81489->leave($__internal_37e044f3ba590c0893acc4f2384c959464ae9218f6d15d00acb2c07879c81489_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
