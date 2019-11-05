<?php

/* @App/Default/error.html.twig */
class __TwigTemplate_79d217fa2216a3dc383887f367b9fbbe49611b81a787270755f349fc348a07a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "@App/Default/error.html.twig", 1);
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
        $__internal_b06edcfcb0f1a92c2f9688467df792ef322f076ac0cf622f56ab0b969234b106 = $this->env->getExtension("native_profiler");
        $__internal_b06edcfcb0f1a92c2f9688467df792ef322f076ac0cf622f56ab0b969234b106->enter($__internal_b06edcfcb0f1a92c2f9688467df792ef322f076ac0cf622f56ab0b969234b106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b06edcfcb0f1a92c2f9688467df792ef322f076ac0cf622f56ab0b969234b106->leave($__internal_b06edcfcb0f1a92c2f9688467df792ef322f076ac0cf622f56ab0b969234b106_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_05bff01723f27ab61f84800fc402771df397571ee2a6047fd13edeffb7cf3983 = $this->env->getExtension("native_profiler");
        $__internal_05bff01723f27ab61f84800fc402771df397571ee2a6047fd13edeffb7cf3983->enter($__internal_05bff01723f27ab61f84800fc402771df397571ee2a6047fd13edeffb7cf3983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<i class=\"letra2\">Usted no puede acceder a esta dirección, no es Administrador!</i>
    
";
        
        $__internal_05bff01723f27ab61f84800fc402771df397571ee2a6047fd13edeffb7cf3983->leave($__internal_05bff01723f27ab61f84800fc402771df397571ee2a6047fd13edeffb7cf3983_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/error.html.twig";
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
/* <i class="letra2">Usted no puede acceder a esta dirección, no es Administrador!</i>*/
/*     */
/* {% endblock %}*/
/* */
