<?php

/* :form:fields.html.twig */
class __TwigTemplate_ff4fcf1a0af3b1f368d01c3247c9f6d944cbbdef97c08cda0d2e23ca819897cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f778c6df5de37ae36122cfd604c973351c4d72d41aaa1b1ec50766968efea2a = $this->env->getExtension("native_profiler");
        $__internal_6f778c6df5de37ae36122cfd604c973351c4d72d41aaa1b1ec50766968efea2a->enter($__internal_6f778c6df5de37ae36122cfd604c973351c4d72d41aaa1b1ec50766968efea2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:fields.html.twig"));

        // line 2
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_6f778c6df5de37ae36122cfd604c973351c4d72d41aaa1b1ec50766968efea2a->leave($__internal_6f778c6df5de37ae36122cfd604c973351c4d72d41aaa1b1ec50766968efea2a_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cc154aeeb95e75e4976410ff6265dd756f2f834e457090b5a3d6e29f286a8001 = $this->env->getExtension("native_profiler");
        $__internal_cc154aeeb95e75e4976410ff6265dd756f2f834e457090b5a3d6e29f286a8001->enter($__internal_cc154aeeb95e75e4976410ff6265dd756f2f834e457090b5a3d6e29f286a8001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\"> ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "</label>
            <div class=\"col-sm-8\">

                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            </div>

            <label class=\"control-label text-red\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</label>

        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cc154aeeb95e75e4976410ff6265dd756f2f834e457090b5a3d6e29f286a8001->leave($__internal_cc154aeeb95e75e4976410ff6265dd756f2f834e457090b5a3d6e29f286a8001_prof);

    }

    public function getTemplateName()
    {
        return ":form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  47 => 8,  41 => 5,  38 => 4,  35 => 3,  23 => 2,);
    }
}
/* {# app/Resources/views/form/fields.html.twig #}*/
/* {% block form_row %}*/
/*     {% spaceless %}*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label"> {{ form_label(form) }}</label>*/
/*             <div class="col-sm-8">*/
/* */
/*                 {{ form_widget(form) }}*/
/*             </div>*/
/* */
/*             <label class="control-label text-red">{{ form_errors(form) }}</label>*/
/* */
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock form_row %}*/
