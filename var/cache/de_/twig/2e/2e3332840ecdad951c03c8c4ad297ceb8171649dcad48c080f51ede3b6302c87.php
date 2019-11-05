<?php

/* recaudacion/show.html.twig */
class __TwigTemplate_77a45163b2fbef3090f1374cc12656e10998fed1cb28378e8ffbf9d82073560b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "recaudacion/show.html.twig", 1);
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
        $__internal_f7ed75dbb1b8e0bd581c10cfea23b3dda2a1cca73adda81b0575483513d78a6c = $this->env->getExtension("native_profiler");
        $__internal_f7ed75dbb1b8e0bd581c10cfea23b3dda2a1cca73adda81b0575483513d78a6c->enter($__internal_f7ed75dbb1b8e0bd581c10cfea23b3dda2a1cca73adda81b0575483513d78a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recaudacion/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7ed75dbb1b8e0bd581c10cfea23b3dda2a1cca73adda81b0575483513d78a6c->leave($__internal_f7ed75dbb1b8e0bd581c10cfea23b3dda2a1cca73adda81b0575483513d78a6c_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1513805d225e9b54c5244f304d91f6dd164980782efcb6a6b0c016c2d58f91a0 = $this->env->getExtension("native_profiler");
        $__internal_1513805d225e9b54c5244f304d91f6dd164980782efcb6a6b0c016c2d58f91a0->enter($__internal_1513805d225e9b54c5244f304d91f6dd164980782efcb6a6b0c016c2d58f91a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <h1>Recaudacion</h1>



";
        
        $__internal_1513805d225e9b54c5244f304d91f6dd164980782efcb6a6b0c016c2d58f91a0->leave($__internal_1513805d225e9b54c5244f304d91f6dd164980782efcb6a6b0c016c2d58f91a0_prof);

    }

    public function getTemplateName()
    {
        return "recaudacion/show.html.twig";
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
/*     <h1>Recaudacion</h1>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
