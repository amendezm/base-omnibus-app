<?php

/* @App/Default/error2.html.twig */
class __TwigTemplate_8bba3c95e861a8a3cc9751fc91bca74cf16cd8a3d7921788abc2a61a9966501f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "@App/Default/error2.html.twig", 1);
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
        $__internal_24173a6317c98bce6de26bdb57d3499905cb6748cd1b69480a8979fef455cfae = $this->env->getExtension("native_profiler");
        $__internal_24173a6317c98bce6de26bdb57d3499905cb6748cd1b69480a8979fef455cfae->enter($__internal_24173a6317c98bce6de26bdb57d3499905cb6748cd1b69480a8979fef455cfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/error2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24173a6317c98bce6de26bdb57d3499905cb6748cd1b69480a8979fef455cfae->leave($__internal_24173a6317c98bce6de26bdb57d3499905cb6748cd1b69480a8979fef455cfae_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_fe605edb89e4f5a48b50994c9365885b46c21fe8137cf792c455154545ecb48f = $this->env->getExtension("native_profiler");
        $__internal_fe605edb89e4f5a48b50994c9365885b46c21fe8137cf792c455154545ecb48f->enter($__internal_fe605edb89e4f5a48b50994c9365885b46c21fe8137cf792c455154545ecb48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<i class=\"letra2\">Usted no puede acceder a esta dirección, no es Especialista!</i>
    
";
        
        $__internal_fe605edb89e4f5a48b50994c9365885b46c21fe8137cf792c455154545ecb48f->leave($__internal_fe605edb89e4f5a48b50994c9365885b46c21fe8137cf792c455154545ecb48f_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/error2.html.twig";
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
