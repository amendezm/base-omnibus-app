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
        $__internal_666f9da2ddc3cec7c4c131cd4e1b36431b02815e440db9d627381258d63fa986 = $this->env->getExtension("native_profiler");
        $__internal_666f9da2ddc3cec7c4c131cd4e1b36431b02815e440db9d627381258d63fa986->enter($__internal_666f9da2ddc3cec7c4c131cd4e1b36431b02815e440db9d627381258d63fa986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_666f9da2ddc3cec7c4c131cd4e1b36431b02815e440db9d627381258d63fa986->leave($__internal_666f9da2ddc3cec7c4c131cd4e1b36431b02815e440db9d627381258d63fa986_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_669188ce9c7fe780f4806adb1ea79f92cb6f4d62606845a951afd969ba8bfb0e = $this->env->getExtension("native_profiler");
        $__internal_669188ce9c7fe780f4806adb1ea79f92cb6f4d62606845a951afd969ba8bfb0e->enter($__internal_669188ce9c7fe780f4806adb1ea79f92cb6f4d62606845a951afd969ba8bfb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_669188ce9c7fe780f4806adb1ea79f92cb6f4d62606845a951afd969ba8bfb0e->leave($__internal_669188ce9c7fe780f4806adb1ea79f92cb6f4d62606845a951afd969ba8bfb0e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_53cd30c2af57d0b2a5b51df00f9e5f0ab75228f1bc8ec4938d4602137ea3e6f0 = $this->env->getExtension("native_profiler");
        $__internal_53cd30c2af57d0b2a5b51df00f9e5f0ab75228f1bc8ec4938d4602137ea3e6f0->enter($__internal_53cd30c2af57d0b2a5b51df00f9e5f0ab75228f1bc8ec4938d4602137ea3e6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_53cd30c2af57d0b2a5b51df00f9e5f0ab75228f1bc8ec4938d4602137ea3e6f0->leave($__internal_53cd30c2af57d0b2a5b51df00f9e5f0ab75228f1bc8ec4938d4602137ea3e6f0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddd58f9e94e4f69597700d0b07092fd93809e9315209e6df5b8128443cab8271 = $this->env->getExtension("native_profiler");
        $__internal_ddd58f9e94e4f69597700d0b07092fd93809e9315209e6df5b8128443cab8271->enter($__internal_ddd58f9e94e4f69597700d0b07092fd93809e9315209e6df5b8128443cab8271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ddd58f9e94e4f69597700d0b07092fd93809e9315209e6df5b8128443cab8271->leave($__internal_ddd58f9e94e4f69597700d0b07092fd93809e9315209e6df5b8128443cab8271_prof);

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
