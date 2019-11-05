<?php

/* AppBundle:Default:error2.html.twig */
class __TwigTemplate_b143436ef636123011e9a8a631fb4c22f5d36cd6669010099b70ad4c45600a0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "AppBundle:Default:error2.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7cde384dc917006f4f08f8575ace24b77b385e65adfd1aea66156fa13706e3d = $this->env->getExtension("native_profiler");
        $__internal_e7cde384dc917006f4f08f8575ace24b77b385e65adfd1aea66156fa13706e3d->enter($__internal_e7cde384dc917006f4f08f8575ace24b77b385e65adfd1aea66156fa13706e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:error2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7cde384dc917006f4f08f8575ace24b77b385e65adfd1aea66156fa13706e3d->leave($__internal_e7cde384dc917006f4f08f8575ace24b77b385e65adfd1aea66156fa13706e3d_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_8353b123722e0fc52c4c5b08f7c41abb28e6ed380251d930092ea85c04aba2e5 = $this->env->getExtension("native_profiler");
        $__internal_8353b123722e0fc52c4c5b08f7c41abb28e6ed380251d930092ea85c04aba2e5->enter($__internal_8353b123722e0fc52c4c5b08f7c41abb28e6ed380251d930092ea85c04aba2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<i class=\"letra2\">Usted no puede acceder a esta dirección, no es Especialista!</i>
    
";
        
        $__internal_8353b123722e0fc52c4c5b08f7c41abb28e6ed380251d930092ea85c04aba2e5->leave($__internal_8353b123722e0fc52c4c5b08f7c41abb28e6ed380251d930092ea85c04aba2e5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:error2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <i class="letra2">Usted no puede acceder a esta dirección, no es Especialista!</i>*/
/*     */
/* {% endblock %}*/
/* */
