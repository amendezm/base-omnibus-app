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
        $__internal_47bfddeb92d6e896819490556a0dc5b696c1be553f403f139f59fd3b2a283c0d = $this->env->getExtension("native_profiler");
        $__internal_47bfddeb92d6e896819490556a0dc5b696c1be553f403f139f59fd3b2a283c0d->enter($__internal_47bfddeb92d6e896819490556a0dc5b696c1be553f403f139f59fd3b2a283c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47bfddeb92d6e896819490556a0dc5b696c1be553f403f139f59fd3b2a283c0d->leave($__internal_47bfddeb92d6e896819490556a0dc5b696c1be553f403f139f59fd3b2a283c0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d55a3926fd80edf5147372d60e52eca366bfcc7dd5296d898d771b58a136cb4e = $this->env->getExtension("native_profiler");
        $__internal_d55a3926fd80edf5147372d60e52eca366bfcc7dd5296d898d771b58a136cb4e->enter($__internal_d55a3926fd80edf5147372d60e52eca366bfcc7dd5296d898d771b58a136cb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d55a3926fd80edf5147372d60e52eca366bfcc7dd5296d898d771b58a136cb4e->leave($__internal_d55a3926fd80edf5147372d60e52eca366bfcc7dd5296d898d771b58a136cb4e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fee13ad701d1e7018fc4c8c274d13da198004dfb89b03cbee93c0984fa602eb1 = $this->env->getExtension("native_profiler");
        $__internal_fee13ad701d1e7018fc4c8c274d13da198004dfb89b03cbee93c0984fa602eb1->enter($__internal_fee13ad701d1e7018fc4c8c274d13da198004dfb89b03cbee93c0984fa602eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fee13ad701d1e7018fc4c8c274d13da198004dfb89b03cbee93c0984fa602eb1->leave($__internal_fee13ad701d1e7018fc4c8c274d13da198004dfb89b03cbee93c0984fa602eb1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_48d86903b644eb0b9a8e7a53339e460f3883d2cc24c8d67d55e78c2cb7e29eea = $this->env->getExtension("native_profiler");
        $__internal_48d86903b644eb0b9a8e7a53339e460f3883d2cc24c8d67d55e78c2cb7e29eea->enter($__internal_48d86903b644eb0b9a8e7a53339e460f3883d2cc24c8d67d55e78c2cb7e29eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_48d86903b644eb0b9a8e7a53339e460f3883d2cc24c8d67d55e78c2cb7e29eea->leave($__internal_48d86903b644eb0b9a8e7a53339e460f3883d2cc24c8d67d55e78c2cb7e29eea_prof);

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
