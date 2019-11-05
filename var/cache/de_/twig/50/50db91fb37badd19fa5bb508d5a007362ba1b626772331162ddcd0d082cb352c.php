<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_807901938b64c94b7746c7097848db9b62f9e1daef92ae88822dc28a90e2ffb3 extends Twig_Template
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
        $__internal_4d881909541d6ff696bee391f7fc5907e8cf140b5a420dcf00f361c27e10c6f7 = $this->env->getExtension("native_profiler");
        $__internal_4d881909541d6ff696bee391f7fc5907e8cf140b5a420dcf00f361c27e10c6f7->enter($__internal_4d881909541d6ff696bee391f7fc5907e8cf140b5a420dcf00f361c27e10c6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4d881909541d6ff696bee391f7fc5907e8cf140b5a420dcf00f361c27e10c6f7->leave($__internal_4d881909541d6ff696bee391f7fc5907e8cf140b5a420dcf00f361c27e10c6f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
