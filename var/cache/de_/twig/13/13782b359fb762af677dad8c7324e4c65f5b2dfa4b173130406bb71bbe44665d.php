<?php

/* form/fields.html.twig */
class __TwigTemplate_87375444b9e922f604f051b81a05e2ee67544bd06731471d8e41c14a148d3d81 extends Twig_Template
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
        $__internal_6b863a077b9ec85ba6409204f7034bd895551c9a27152b2a9826cc402de2b9fd = $this->env->getExtension("native_profiler");
        $__internal_6b863a077b9ec85ba6409204f7034bd895551c9a27152b2a9826cc402de2b9fd->enter($__internal_6b863a077b9ec85ba6409204f7034bd895551c9a27152b2a9826cc402de2b9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 2
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_6b863a077b9ec85ba6409204f7034bd895551c9a27152b2a9826cc402de2b9fd->leave($__internal_6b863a077b9ec85ba6409204f7034bd895551c9a27152b2a9826cc402de2b9fd_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e8cd97348ff18fffc27184d9e68882c393776cb5abcf2ef0b926437cf8ac2bd3 = $this->env->getExtension("native_profiler");
        $__internal_e8cd97348ff18fffc27184d9e68882c393776cb5abcf2ef0b926437cf8ac2bd3->enter($__internal_e8cd97348ff18fffc27184d9e68882c393776cb5abcf2ef0b926437cf8ac2bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_e8cd97348ff18fffc27184d9e68882c393776cb5abcf2ef0b926437cf8ac2bd3->leave($__internal_e8cd97348ff18fffc27184d9e68882c393776cb5abcf2ef0b926437cf8ac2bd3_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
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
