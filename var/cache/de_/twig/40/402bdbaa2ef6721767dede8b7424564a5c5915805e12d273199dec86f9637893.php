<?php

/* form/fields2.html.twig */
class __TwigTemplate_4e792e7da2a960e1e2cfa516a766b72a994de548f09d17bb2034dcf3bce50f5b extends Twig_Template
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
        $__internal_e9129fb66943e9f1debcaf4800693e15b2f370204b6d84620ebd3c4bfbfe2345 = $this->env->getExtension("native_profiler");
        $__internal_e9129fb66943e9f1debcaf4800693e15b2f370204b6d84620ebd3c4bfbfe2345->enter($__internal_e9129fb66943e9f1debcaf4800693e15b2f370204b6d84620ebd3c4bfbfe2345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields2.html.twig"));

        // line 2
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_e9129fb66943e9f1debcaf4800693e15b2f370204b6d84620ebd3c4bfbfe2345->leave($__internal_e9129fb66943e9f1debcaf4800693e15b2f370204b6d84620ebd3c4bfbfe2345_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6098210240544359a8268ef1b4b95d50114ac62570352388b1fa913dd74fbe3a = $this->env->getExtension("native_profiler");
        $__internal_6098210240544359a8268ef1b4b95d50114ac62570352388b1fa913dd74fbe3a->enter($__internal_6098210240544359a8268ef1b4b95d50114ac62570352388b1fa913dd74fbe3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "        <div class=\"col-sm-2\">
            <div class=\"form-group\">
                ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
                ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6098210240544359a8268ef1b4b95d50114ac62570352388b1fa913dd74fbe3a->leave($__internal_6098210240544359a8268ef1b4b95d50114ac62570352388b1fa913dd74fbe3a_prof);

    }

    public function getTemplateName()
    {
        return "form/fields2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  46 => 7,  42 => 6,  38 => 4,  35 => 3,  23 => 2,);
    }
}
/* {# app/Resources/views/form/fields.html.twig #}*/
/* {% block form_row %}*/
/*     {% spaceless %}*/
/*         <div class="col-sm-2">*/
/*             <div class="form-group">*/
/*                 {{ form_label(form) }}*/
/*                 {{ form_widget(form) }}*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock form_row %}*/
