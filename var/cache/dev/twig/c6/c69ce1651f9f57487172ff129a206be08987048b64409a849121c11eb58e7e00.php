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
        $__internal_13a7ec46288008f5d01a955adbddf1736ec729317be5db83df411eabfce4b08d = $this->env->getExtension("native_profiler");
        $__internal_13a7ec46288008f5d01a955adbddf1736ec729317be5db83df411eabfce4b08d->enter($__internal_13a7ec46288008f5d01a955adbddf1736ec729317be5db83df411eabfce4b08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a7ec46288008f5d01a955adbddf1736ec729317be5db83df411eabfce4b08d->leave($__internal_13a7ec46288008f5d01a955adbddf1736ec729317be5db83df411eabfce4b08d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57fda648e708e6b0785fa26632b9783dcb076fcb28e8970f4b6f9578b0b94d40 = $this->env->getExtension("native_profiler");
        $__internal_57fda648e708e6b0785fa26632b9783dcb076fcb28e8970f4b6f9578b0b94d40->enter($__internal_57fda648e708e6b0785fa26632b9783dcb076fcb28e8970f4b6f9578b0b94d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_57fda648e708e6b0785fa26632b9783dcb076fcb28e8970f4b6f9578b0b94d40->leave($__internal_57fda648e708e6b0785fa26632b9783dcb076fcb28e8970f4b6f9578b0b94d40_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f34cdf1adf3756b4eeb14c50c52bbed29260c3b317365615e66ef3d8da58415b = $this->env->getExtension("native_profiler");
        $__internal_f34cdf1adf3756b4eeb14c50c52bbed29260c3b317365615e66ef3d8da58415b->enter($__internal_f34cdf1adf3756b4eeb14c50c52bbed29260c3b317365615e66ef3d8da58415b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f34cdf1adf3756b4eeb14c50c52bbed29260c3b317365615e66ef3d8da58415b->leave($__internal_f34cdf1adf3756b4eeb14c50c52bbed29260c3b317365615e66ef3d8da58415b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_55679d961237a879d376c7163dd64627b7b8275c43ce306b22b559ac04a04768 = $this->env->getExtension("native_profiler");
        $__internal_55679d961237a879d376c7163dd64627b7b8275c43ce306b22b559ac04a04768->enter($__internal_55679d961237a879d376c7163dd64627b7b8275c43ce306b22b559ac04a04768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_55679d961237a879d376c7163dd64627b7b8275c43ce306b22b559ac04a04768->leave($__internal_55679d961237a879d376c7163dd64627b7b8275c43ce306b22b559ac04a04768_prof);

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
