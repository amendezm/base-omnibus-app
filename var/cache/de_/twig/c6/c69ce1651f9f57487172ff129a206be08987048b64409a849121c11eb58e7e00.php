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
        $__internal_9fc897a9fdb99bbad217fb837c18c1b8c448db2de663217ffea5997ab9e440ce = $this->env->getExtension("native_profiler");
        $__internal_9fc897a9fdb99bbad217fb837c18c1b8c448db2de663217ffea5997ab9e440ce->enter($__internal_9fc897a9fdb99bbad217fb837c18c1b8c448db2de663217ffea5997ab9e440ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fc897a9fdb99bbad217fb837c18c1b8c448db2de663217ffea5997ab9e440ce->leave($__internal_9fc897a9fdb99bbad217fb837c18c1b8c448db2de663217ffea5997ab9e440ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_44e8a9dc4598c67852ae2b236a71577bcc8504e9153f6d7eccf24da86ceba951 = $this->env->getExtension("native_profiler");
        $__internal_44e8a9dc4598c67852ae2b236a71577bcc8504e9153f6d7eccf24da86ceba951->enter($__internal_44e8a9dc4598c67852ae2b236a71577bcc8504e9153f6d7eccf24da86ceba951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_44e8a9dc4598c67852ae2b236a71577bcc8504e9153f6d7eccf24da86ceba951->leave($__internal_44e8a9dc4598c67852ae2b236a71577bcc8504e9153f6d7eccf24da86ceba951_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49724171a90ba1069aec328feae9a9659d23b82740a18f3ff16f039c0f38f9c9 = $this->env->getExtension("native_profiler");
        $__internal_49724171a90ba1069aec328feae9a9659d23b82740a18f3ff16f039c0f38f9c9->enter($__internal_49724171a90ba1069aec328feae9a9659d23b82740a18f3ff16f039c0f38f9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_49724171a90ba1069aec328feae9a9659d23b82740a18f3ff16f039c0f38f9c9->leave($__internal_49724171a90ba1069aec328feae9a9659d23b82740a18f3ff16f039c0f38f9c9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6c57d324013d830988ab22d8797eea018a4e1862def320da5796772e233ee3f = $this->env->getExtension("native_profiler");
        $__internal_c6c57d324013d830988ab22d8797eea018a4e1862def320da5796772e233ee3f->enter($__internal_c6c57d324013d830988ab22d8797eea018a4e1862def320da5796772e233ee3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c6c57d324013d830988ab22d8797eea018a4e1862def320da5796772e233ee3f->leave($__internal_c6c57d324013d830988ab22d8797eea018a4e1862def320da5796772e233ee3f_prof);

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
