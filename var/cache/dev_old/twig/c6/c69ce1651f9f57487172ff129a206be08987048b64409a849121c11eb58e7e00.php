<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6a021ccadcaa3e7f0819c822bd3381921d23b9f432ac33c19975b399dd5928e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_ec8207fe66d3ffc93b31abf014694afa161abec7088566a53c60efd7191fe512 = $this->env->getExtension("native_profiler");
        $__internal_ec8207fe66d3ffc93b31abf014694afa161abec7088566a53c60efd7191fe512->enter($__internal_ec8207fe66d3ffc93b31abf014694afa161abec7088566a53c60efd7191fe512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec8207fe66d3ffc93b31abf014694afa161abec7088566a53c60efd7191fe512->leave($__internal_ec8207fe66d3ffc93b31abf014694afa161abec7088566a53c60efd7191fe512_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f564590379c99da7037f3239e5770e1d7cd0c73d30718b4a3046d3f1b1c202f3 = $this->env->getExtension("native_profiler");
        $__internal_f564590379c99da7037f3239e5770e1d7cd0c73d30718b4a3046d3f1b1c202f3->enter($__internal_f564590379c99da7037f3239e5770e1d7cd0c73d30718b4a3046d3f1b1c202f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f564590379c99da7037f3239e5770e1d7cd0c73d30718b4a3046d3f1b1c202f3->leave($__internal_f564590379c99da7037f3239e5770e1d7cd0c73d30718b4a3046d3f1b1c202f3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f4e77a05e42107726aa8f0caaae6085af81687b92a03eae8876a581508e9942 = $this->env->getExtension("native_profiler");
        $__internal_7f4e77a05e42107726aa8f0caaae6085af81687b92a03eae8876a581508e9942->enter($__internal_7f4e77a05e42107726aa8f0caaae6085af81687b92a03eae8876a581508e9942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f4e77a05e42107726aa8f0caaae6085af81687b92a03eae8876a581508e9942->leave($__internal_7f4e77a05e42107726aa8f0caaae6085af81687b92a03eae8876a581508e9942_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_86a6c000e1eb151cb9d78c870a229a5d49a97930a53f20015bd625c83595e3c7 = $this->env->getExtension("native_profiler");
        $__internal_86a6c000e1eb151cb9d78c870a229a5d49a97930a53f20015bd625c83595e3c7->enter($__internal_86a6c000e1eb151cb9d78c870a229a5d49a97930a53f20015bd625c83595e3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_86a6c000e1eb151cb9d78c870a229a5d49a97930a53f20015bd625c83595e3c7->leave($__internal_86a6c000e1eb151cb9d78c870a229a5d49a97930a53f20015bd625c83595e3c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
