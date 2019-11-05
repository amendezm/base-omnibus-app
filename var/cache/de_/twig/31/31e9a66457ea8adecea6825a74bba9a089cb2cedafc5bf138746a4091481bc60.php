<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c8f93ad4593ceb96fa126840dabc718d133a2b652edc81acf1a5289a5ee5a669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_e0ca2be7e0698f76828ac4d4ad529432732308519efa57e9faf8295500018037 = $this->env->getExtension("native_profiler");
        $__internal_e0ca2be7e0698f76828ac4d4ad529432732308519efa57e9faf8295500018037->enter($__internal_e0ca2be7e0698f76828ac4d4ad529432732308519efa57e9faf8295500018037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ca2be7e0698f76828ac4d4ad529432732308519efa57e9faf8295500018037->leave($__internal_e0ca2be7e0698f76828ac4d4ad529432732308519efa57e9faf8295500018037_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7379310ef48226049bbea80f7079bcd64c9cafcefa9aa14966460010288b1c69 = $this->env->getExtension("native_profiler");
        $__internal_7379310ef48226049bbea80f7079bcd64c9cafcefa9aa14966460010288b1c69->enter($__internal_7379310ef48226049bbea80f7079bcd64c9cafcefa9aa14966460010288b1c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7379310ef48226049bbea80f7079bcd64c9cafcefa9aa14966460010288b1c69->leave($__internal_7379310ef48226049bbea80f7079bcd64c9cafcefa9aa14966460010288b1c69_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_63bdde2eafba77ddcc10eae9aa81ee10981f8d5269c2d185026295f1550db9b5 = $this->env->getExtension("native_profiler");
        $__internal_63bdde2eafba77ddcc10eae9aa81ee10981f8d5269c2d185026295f1550db9b5->enter($__internal_63bdde2eafba77ddcc10eae9aa81ee10981f8d5269c2d185026295f1550db9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_63bdde2eafba77ddcc10eae9aa81ee10981f8d5269c2d185026295f1550db9b5->leave($__internal_63bdde2eafba77ddcc10eae9aa81ee10981f8d5269c2d185026295f1550db9b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
