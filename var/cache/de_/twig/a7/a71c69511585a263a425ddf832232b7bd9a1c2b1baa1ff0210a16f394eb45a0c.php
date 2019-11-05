<?php

/* :form:fields2.html.twig */
class __TwigTemplate_c2a5c089695074694ffedf9eacbd6cd80583f6b78e8edd22119e6dd99e12f715 extends Twig_Template
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
        $__internal_138220e525ec14427e1923b224d848855ec5a7cc85b90496863104200813d7ce = $this->env->getExtension("native_profiler");
        $__internal_138220e525ec14427e1923b224d848855ec5a7cc85b90496863104200813d7ce->enter($__internal_138220e525ec14427e1923b224d848855ec5a7cc85b90496863104200813d7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:fields2.html.twig"));

        // line 2
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_138220e525ec14427e1923b224d848855ec5a7cc85b90496863104200813d7ce->leave($__internal_138220e525ec14427e1923b224d848855ec5a7cc85b90496863104200813d7ce_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1c63b09c17b5f56049d5a78269dfa8996431b6f0077b2dc81c3c0a3d2c2c0a72 = $this->env->getExtension("native_profiler");
        $__internal_1c63b09c17b5f56049d5a78269dfa8996431b6f0077b2dc81c3c0a3d2c2c0a72->enter($__internal_1c63b09c17b5f56049d5a78269dfa8996431b6f0077b2dc81c3c0a3d2c2c0a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_1c63b09c17b5f56049d5a78269dfa8996431b6f0077b2dc81c3c0a3d2c2c0a72->leave($__internal_1c63b09c17b5f56049d5a78269dfa8996431b6f0077b2dc81c3c0a3d2c2c0a72_prof);

    }

    public function getTemplateName()
    {
        return ":form:fields2.html.twig";
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
