<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e3ea392d42577463c4b096431f84226cdb287f4ed41caa1664952fb9f86ce687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ba87b468f032a8bf22a9bc2164bc4c7728a94d997482ac93e51ee805a50a3f8 = $this->env->getExtension("native_profiler");
        $__internal_7ba87b468f032a8bf22a9bc2164bc4c7728a94d997482ac93e51ee805a50a3f8->enter($__internal_7ba87b468f032a8bf22a9bc2164bc4c7728a94d997482ac93e51ee805a50a3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ba87b468f032a8bf22a9bc2164bc4c7728a94d997482ac93e51ee805a50a3f8->leave($__internal_7ba87b468f032a8bf22a9bc2164bc4c7728a94d997482ac93e51ee805a50a3f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2be96cf644e871293b237e5234e803bb26a9d2b91d152007e7206360479b91e = $this->env->getExtension("native_profiler");
        $__internal_f2be96cf644e871293b237e5234e803bb26a9d2b91d152007e7206360479b91e->enter($__internal_f2be96cf644e871293b237e5234e803bb26a9d2b91d152007e7206360479b91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f2be96cf644e871293b237e5234e803bb26a9d2b91d152007e7206360479b91e->leave($__internal_f2be96cf644e871293b237e5234e803bb26a9d2b91d152007e7206360479b91e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e8dec04c035dafc688081c85c2ae31b0963215b699a4311325f5a55771401a7 = $this->env->getExtension("native_profiler");
        $__internal_9e8dec04c035dafc688081c85c2ae31b0963215b699a4311325f5a55771401a7->enter($__internal_9e8dec04c035dafc688081c85c2ae31b0963215b699a4311325f5a55771401a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9e8dec04c035dafc688081c85c2ae31b0963215b699a4311325f5a55771401a7->leave($__internal_9e8dec04c035dafc688081c85c2ae31b0963215b699a4311325f5a55771401a7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bc62d1a57d5fb11e9087f39ff465c2d9ce7ca93d5107871e54d637ceed7d83e = $this->env->getExtension("native_profiler");
        $__internal_2bc62d1a57d5fb11e9087f39ff465c2d9ce7ca93d5107871e54d637ceed7d83e->enter($__internal_2bc62d1a57d5fb11e9087f39ff465c2d9ce7ca93d5107871e54d637ceed7d83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2bc62d1a57d5fb11e9087f39ff465c2d9ce7ca93d5107871e54d637ceed7d83e->leave($__internal_2bc62d1a57d5fb11e9087f39ff465c2d9ce7ca93d5107871e54d637ceed7d83e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
