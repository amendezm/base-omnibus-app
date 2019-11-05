<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_604fc348c595e85a8a79addd26b601255230427092168fbbe27788c9729eefca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_5513ce7202f7cef7d97d1459ae829ae3dbc0650855f03e4bcca604bf028fa2ae = $this->env->getExtension("native_profiler");
        $__internal_5513ce7202f7cef7d97d1459ae829ae3dbc0650855f03e4bcca604bf028fa2ae->enter($__internal_5513ce7202f7cef7d97d1459ae829ae3dbc0650855f03e4bcca604bf028fa2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5513ce7202f7cef7d97d1459ae829ae3dbc0650855f03e4bcca604bf028fa2ae->leave($__internal_5513ce7202f7cef7d97d1459ae829ae3dbc0650855f03e4bcca604bf028fa2ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1854ee454b4d5d70db66a2fd62b041f447a9d6ebdd63e54be15006df0a07b911 = $this->env->getExtension("native_profiler");
        $__internal_1854ee454b4d5d70db66a2fd62b041f447a9d6ebdd63e54be15006df0a07b911->enter($__internal_1854ee454b4d5d70db66a2fd62b041f447a9d6ebdd63e54be15006df0a07b911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1854ee454b4d5d70db66a2fd62b041f447a9d6ebdd63e54be15006df0a07b911->leave($__internal_1854ee454b4d5d70db66a2fd62b041f447a9d6ebdd63e54be15006df0a07b911_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fc2d58a0bad8c5cb689ac9afedde82bc9b0d2bc4400e38ee80123934b775f8e = $this->env->getExtension("native_profiler");
        $__internal_2fc2d58a0bad8c5cb689ac9afedde82bc9b0d2bc4400e38ee80123934b775f8e->enter($__internal_2fc2d58a0bad8c5cb689ac9afedde82bc9b0d2bc4400e38ee80123934b775f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2fc2d58a0bad8c5cb689ac9afedde82bc9b0d2bc4400e38ee80123934b775f8e->leave($__internal_2fc2d58a0bad8c5cb689ac9afedde82bc9b0d2bc4400e38ee80123934b775f8e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_740aea9f017bb4be617091dc710423f4e03b78bbfd2797545a751be72b589e45 = $this->env->getExtension("native_profiler");
        $__internal_740aea9f017bb4be617091dc710423f4e03b78bbfd2797545a751be72b589e45->enter($__internal_740aea9f017bb4be617091dc710423f4e03b78bbfd2797545a751be72b589e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_740aea9f017bb4be617091dc710423f4e03b78bbfd2797545a751be72b589e45->leave($__internal_740aea9f017bb4be617091dc710423f4e03b78bbfd2797545a751be72b589e45_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
