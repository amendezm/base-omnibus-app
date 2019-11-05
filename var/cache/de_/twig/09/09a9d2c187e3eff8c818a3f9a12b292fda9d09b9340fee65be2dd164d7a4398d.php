<?php

/* @App/Default/salvabd.html.twig */
class __TwigTemplate_f0455f000e4f780af199fc857cd6f7dc87d1e4111426a481c0ef127f9984f911 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "@App/Default/salvabd.html.twig", 1);
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
        $__internal_f7fb9dffc85b10021282bf63b992750aa569320d6320fa345d5790acdbb3c5f2 = $this->env->getExtension("native_profiler");
        $__internal_f7fb9dffc85b10021282bf63b992750aa569320d6320fa345d5790acdbb3c5f2->enter($__internal_f7fb9dffc85b10021282bf63b992750aa569320d6320fa345d5790acdbb3c5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/salvabd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7fb9dffc85b10021282bf63b992750aa569320d6320fa345d5790acdbb3c5f2->leave($__internal_f7fb9dffc85b10021282bf63b992750aa569320d6320fa345d5790acdbb3c5f2_prof);

    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ed2e020ad7a2e3ded889e2dde980555d8c0d92337206f9aa50849e0cf4056837 = $this->env->getExtension("native_profiler");
        $__internal_ed2e020ad7a2e3ded889e2dde980555d8c0d92337206f9aa50849e0cf4056837->enter($__internal_ed2e020ad7a2e3ded889e2dde980555d8c0d92337206f9aa50849e0cf4056837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 8
        echo "

";
        // line 10
        echo "Salva ok";
        echo "


";
        
        $__internal_ed2e020ad7a2e3ded889e2dde980555d8c0d92337206f9aa50849e0cf4056837->leave($__internal_ed2e020ad7a2e3ded889e2dde980555d8c0d92337206f9aa50849e0cf4056837_prof);

    }

    // line 14
    public function block_script($context, array $blocks = array())
    {
        $__internal_fa7490db8ae59e819651f96669b1d870fb0a35328848649dfa86c9cfe4859660 = $this->env->getExtension("native_profiler");
        $__internal_fa7490db8ae59e819651f96669b1d870fb0a35328848649dfa86c9cfe4859660->enter($__internal_fa7490db8ae59e819651f96669b1d870fb0a35328848649dfa86c9cfe4859660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 15
        echo "
";
        
        $__internal_fa7490db8ae59e819651f96669b1d870fb0a35328848649dfa86c9cfe4859660->leave($__internal_fa7490db8ae59e819651f96669b1d870fb0a35328848649dfa86c9cfe4859660_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/salvabd.html.twig";
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
