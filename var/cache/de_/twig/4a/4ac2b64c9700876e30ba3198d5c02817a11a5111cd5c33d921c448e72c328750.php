<?php

/* AppBundle:Default:salvabd.html.twig */
class __TwigTemplate_07214499d659f096a9ce00c0a5409c5f3f8732d97095c8e96bba0f9b9df639d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "AppBundle:Default:salvabd.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e746f5ee8e1bef74d32a7fde5d030c94867d8ada286c6b92d003bda92a64bec4 = $this->env->getExtension("native_profiler");
        $__internal_e746f5ee8e1bef74d32a7fde5d030c94867d8ada286c6b92d003bda92a64bec4->enter($__internal_e746f5ee8e1bef74d32a7fde5d030c94867d8ada286c6b92d003bda92a64bec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:salvabd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e746f5ee8e1bef74d32a7fde5d030c94867d8ada286c6b92d003bda92a64bec4->leave($__internal_e746f5ee8e1bef74d32a7fde5d030c94867d8ada286c6b92d003bda92a64bec4_prof);

    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_58631436445071c06311c3e01c0cd12d80df90c8168202e03cc9c0babcd1a2a9 = $this->env->getExtension("native_profiler");
        $__internal_58631436445071c06311c3e01c0cd12d80df90c8168202e03cc9c0babcd1a2a9->enter($__internal_58631436445071c06311c3e01c0cd12d80df90c8168202e03cc9c0babcd1a2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 8
        echo "

";
        // line 10
        echo "Salva ok";
        echo "


";
        
        $__internal_58631436445071c06311c3e01c0cd12d80df90c8168202e03cc9c0babcd1a2a9->leave($__internal_58631436445071c06311c3e01c0cd12d80df90c8168202e03cc9c0babcd1a2a9_prof);

    }

    // line 14
    public function block_script($context, array $blocks = array())
    {
        $__internal_a63f2d1a0564f2ffcca007c4b64360219f6bd8ba2002d5415285ce264cc844ce = $this->env->getExtension("native_profiler");
        $__internal_a63f2d1a0564f2ffcca007c4b64360219f6bd8ba2002d5415285ce264cc844ce->enter($__internal_a63f2d1a0564f2ffcca007c4b64360219f6bd8ba2002d5415285ce264cc844ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 15
        echo "
";
        
        $__internal_a63f2d1a0564f2ffcca007c4b64360219f6bd8ba2002d5415285ce264cc844ce->leave($__internal_a63f2d1a0564f2ffcca007c4b64360219f6bd8ba2002d5415285ce264cc844ce_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:salvabd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  56 => 14,  45 => 10,  41 => 8,  35 => 7,  11 => 1,);
    }
}
/* {% extends "index.html.twig" %}*/
/* {#{%block dos%}active{%endblock%}#}*/
/* {#{%block mapa_navegacion_sub%}#}*/
/* */
/* {#{%block sub%}#}*/
/* {#{%endblock%}{%endblock%}#}*/
/* {% block contenido%}*/
/* */
/* */
/* {{"Salva ok"}}*/
/* */
/* */
/* {% endblock %}*/
/* {%block script%}*/
/* */
/* {%endblock%}*/
