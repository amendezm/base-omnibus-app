<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8afe9633b10a03c0d82ad9936cff6bb919663614befa022ede6bd803b22eaa6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_fb2d9cf09b2e47277632b9a9a23304c7ff4f2ab00303bd7807dac31aa420092a = $this->env->getExtension("native_profiler");
        $__internal_fb2d9cf09b2e47277632b9a9a23304c7ff4f2ab00303bd7807dac31aa420092a->enter($__internal_fb2d9cf09b2e47277632b9a9a23304c7ff4f2ab00303bd7807dac31aa420092a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb2d9cf09b2e47277632b9a9a23304c7ff4f2ab00303bd7807dac31aa420092a->leave($__internal_fb2d9cf09b2e47277632b9a9a23304c7ff4f2ab00303bd7807dac31aa420092a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d9fb6c0645fd4968ad062edc70e06e4a8840a90eb5b9329d77ef0019a838a95 = $this->env->getExtension("native_profiler");
        $__internal_3d9fb6c0645fd4968ad062edc70e06e4a8840a90eb5b9329d77ef0019a838a95->enter($__internal_3d9fb6c0645fd4968ad062edc70e06e4a8840a90eb5b9329d77ef0019a838a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3d9fb6c0645fd4968ad062edc70e06e4a8840a90eb5b9329d77ef0019a838a95->leave($__internal_3d9fb6c0645fd4968ad062edc70e06e4a8840a90eb5b9329d77ef0019a838a95_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_456c2696d922d95be5ba780fe0076e2cc4897473e0bfdee619fc95b466301668 = $this->env->getExtension("native_profiler");
        $__internal_456c2696d922d95be5ba780fe0076e2cc4897473e0bfdee619fc95b466301668->enter($__internal_456c2696d922d95be5ba780fe0076e2cc4897473e0bfdee619fc95b466301668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_456c2696d922d95be5ba780fe0076e2cc4897473e0bfdee619fc95b466301668->leave($__internal_456c2696d922d95be5ba780fe0076e2cc4897473e0bfdee619fc95b466301668_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
