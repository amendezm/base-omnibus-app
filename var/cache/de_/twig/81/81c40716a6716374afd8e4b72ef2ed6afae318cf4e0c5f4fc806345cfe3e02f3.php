<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e0a606b97e282e3ce0f777028f112fab209525a12b997451fa775494f7da302f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56200789a7830dc73d0e21d1f5c1f102c1521e10aeb01660cdf0dfb2a7ae83c5 = $this->env->getExtension("native_profiler");
        $__internal_56200789a7830dc73d0e21d1f5c1f102c1521e10aeb01660cdf0dfb2a7ae83c5->enter($__internal_56200789a7830dc73d0e21d1f5c1f102c1521e10aeb01660cdf0dfb2a7ae83c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56200789a7830dc73d0e21d1f5c1f102c1521e10aeb01660cdf0dfb2a7ae83c5->leave($__internal_56200789a7830dc73d0e21d1f5c1f102c1521e10aeb01660cdf0dfb2a7ae83c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_67a8e757386432049a7f6031ceb95578c8686ea2c115843895ac628ec9c623d9 = $this->env->getExtension("native_profiler");
        $__internal_67a8e757386432049a7f6031ceb95578c8686ea2c115843895ac628ec9c623d9->enter($__internal_67a8e757386432049a7f6031ceb95578c8686ea2c115843895ac628ec9c623d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_67a8e757386432049a7f6031ceb95578c8686ea2c115843895ac628ec9c623d9->leave($__internal_67a8e757386432049a7f6031ceb95578c8686ea2c115843895ac628ec9c623d9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30326bb799708c2e2ca139bb2d64afa2321206cafa290eeccd62320b06664f8c = $this->env->getExtension("native_profiler");
        $__internal_30326bb799708c2e2ca139bb2d64afa2321206cafa290eeccd62320b06664f8c->enter($__internal_30326bb799708c2e2ca139bb2d64afa2321206cafa290eeccd62320b06664f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30326bb799708c2e2ca139bb2d64afa2321206cafa290eeccd62320b06664f8c->leave($__internal_30326bb799708c2e2ca139bb2d64afa2321206cafa290eeccd62320b06664f8c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_875571d6979f7d052f2d99b09a01b8045cfd85ccca1d55a8e818a820bab13b85 = $this->env->getExtension("native_profiler");
        $__internal_875571d6979f7d052f2d99b09a01b8045cfd85ccca1d55a8e818a820bab13b85->enter($__internal_875571d6979f7d052f2d99b09a01b8045cfd85ccca1d55a8e818a820bab13b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_875571d6979f7d052f2d99b09a01b8045cfd85ccca1d55a8e818a820bab13b85->leave($__internal_875571d6979f7d052f2d99b09a01b8045cfd85ccca1d55a8e818a820bab13b85_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
