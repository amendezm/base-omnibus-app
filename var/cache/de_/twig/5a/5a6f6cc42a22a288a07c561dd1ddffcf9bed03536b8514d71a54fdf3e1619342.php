<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_df1982991e9dfdbf6e8a0f8aa5132b4b6bfdcc2679df535a8ee4f9a8651e6ed5 extends Twig_Template
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
        $__internal_630a8fd2785189d46e6107c781ca71cc69628b998b954f84ea4a7f2fc5f5d3b9 = $this->env->getExtension("native_profiler");
        $__internal_630a8fd2785189d46e6107c781ca71cc69628b998b954f84ea4a7f2fc5f5d3b9->enter($__internal_630a8fd2785189d46e6107c781ca71cc69628b998b954f84ea4a7f2fc5f5d3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_630a8fd2785189d46e6107c781ca71cc69628b998b954f84ea4a7f2fc5f5d3b9->leave($__internal_630a8fd2785189d46e6107c781ca71cc69628b998b954f84ea4a7f2fc5f5d3b9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
