<?php

/* :recaudacion:show.html.twig */
class __TwigTemplate_dadfcd4ebf391725db77a6518dde5c76ca2c061df0d99b3b00ba6b08807609bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":recaudacion:show.html.twig", 1);
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
        $__internal_b2c119ec9c2bb2f601d27fc442f85631a760c44951e841c83d64f8aaec00b0db = $this->env->getExtension("native_profiler");
        $__internal_b2c119ec9c2bb2f601d27fc442f85631a760c44951e841c83d64f8aaec00b0db->enter($__internal_b2c119ec9c2bb2f601d27fc442f85631a760c44951e841c83d64f8aaec00b0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":recaudacion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2c119ec9c2bb2f601d27fc442f85631a760c44951e841c83d64f8aaec00b0db->leave($__internal_b2c119ec9c2bb2f601d27fc442f85631a760c44951e841c83d64f8aaec00b0db_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_5755ec3bc6c378aaa325f2928ddfcd44491e07ffe6e1dd212c6ff76c9d1992da = $this->env->getExtension("native_profiler");
        $__internal_5755ec3bc6c378aaa325f2928ddfcd44491e07ffe6e1dd212c6ff76c9d1992da->enter($__internal_5755ec3bc6c378aaa325f2928ddfcd44491e07ffe6e1dd212c6ff76c9d1992da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <h1>Recaudacion</h1>



";
        
        $__internal_5755ec3bc6c378aaa325f2928ddfcd44491e07ffe6e1dd212c6ff76c9d1992da->leave($__internal_5755ec3bc6c378aaa325f2928ddfcd44491e07ffe6e1dd212c6ff76c9d1992da_prof);

    }

    public function getTemplateName()
    {
        return ":recaudacion:show.html.twig";
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
