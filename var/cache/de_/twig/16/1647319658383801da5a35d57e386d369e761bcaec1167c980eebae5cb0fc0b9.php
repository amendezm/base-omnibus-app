<?php

/* chofer/edit.html.twig */
class __TwigTemplate_66daabbb98be4aa2d0ee30347d14b85445a2932e72d5b049669adf4cae759057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "chofer/edit.html.twig", 1);
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
        $__internal_2281c6a8afe3f96e9e15689e108f6e49dac6f78b7ac18599408aeb0dac7d2bd2 = $this->env->getExtension("native_profiler");
        $__internal_2281c6a8afe3f96e9e15689e108f6e49dac6f78b7ac18599408aeb0dac7d2bd2->enter($__internal_2281c6a8afe3f96e9e15689e108f6e49dac6f78b7ac18599408aeb0dac7d2bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chofer/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2281c6a8afe3f96e9e15689e108f6e49dac6f78b7ac18599408aeb0dac7d2bd2->leave($__internal_2281c6a8afe3f96e9e15689e108f6e49dac6f78b7ac18599408aeb0dac7d2bd2_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_cdc78fdeecee500ce632940dc35af44629efce6e7330b57372f8a913d884c3b8 = $this->env->getExtension("native_profiler");
        $__internal_cdc78fdeecee500ce632940dc35af44629efce6e7330b57372f8a913d884c3b8->enter($__internal_cdc78fdeecee500ce632940dc35af44629efce6e7330b57372f8a913d884c3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("method" => "POST"));
        echo "
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Editar Chofer</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a class=\"text-info\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("chofer_index");
        echo "\">
                        <i class=\"glyphicon glyphicon glyphicon-hand-left\"></i> Atràs</a>
                </li>
            </ul>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class=\"box-body\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">Nombre</label>
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget', array("attr" => array("class" => "")));
        echo "
        </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">LC</label>
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "noLicenciaOperativa", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Ómibus</label>
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "omnibus", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">LC Emitida</label>
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "licencia_emision", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">LC Vence</label>
                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "licencia_vencimiento", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Recalificación Emitida</label>
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "recalificacion_emision", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Recalificación Vence</label>
                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "recalificacionVencimiento", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Examen Médico Emitido</label>
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "examenMedicoEmision", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Examen Médico Vence</label>
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "examenMedicoVencimiento", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Examen Psicofisiológico Emitido</label>
                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "examenPsicofisiologicoEmision", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Examen Psicofisiológico Vence</label>
                    ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "examenPsicofisiologicoVencimiento", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 108
        echo "        ";
        // line 109
        echo "        ";
        // line 110
        echo "        ";
        // line 111
        echo "        ";
        // line 112
        echo "        ";
        // line 113
        echo "        ";
        // line 114
        echo "        <table align=\"center\">
            <tr>
                <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff\" value=\"Editar\" /></td>
            </tr>
        </table>
    </div>
    ";
        // line 121
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    ";
        
        $__internal_cdc78fdeecee500ce632940dc35af44629efce6e7330b57372f8a913d884c3b8->leave($__internal_cdc78fdeecee500ce632940dc35af44629efce6e7330b57372f8a913d884c3b8_prof);

    }

    public function getTemplateName()
    {
        return "chofer/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 121,  196 => 114,  194 => 113,  192 => 112,  190 => 111,  188 => 110,  186 => 109,  184 => 108,  177 => 103,  166 => 95,  155 => 87,  144 => 79,  133 => 71,  122 => 63,  111 => 55,  100 => 47,  89 => 39,  78 => 31,  67 => 23,  53 => 12,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* {% block contenido%}*/
/*     {{ form_start(edit_form, {'method' :'POST'}) }}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Editar Chofer</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('chofer_index') }}">*/
/*                         <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.box-tools -->*/
/*     </div><!-- /.box-header -->*/
/*     <div class="box-body">*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label">Nombre</label>*/
/*             {{ form_widget(edit_form.nombre, {'attr' : {'class' : '' }})}}*/
/*         </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">LC</label>*/
/*                     {{ form_widget(edit_form.noLicenciaOperativa, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Ómibus</label>*/
/*                     {{ form_widget(edit_form.omnibus, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">LC Emitida</label>*/
/*                     {{ form_widget(edit_form.licencia_emision, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">LC Vence</label>*/
/*                     {{ form_widget(edit_form.licencia_vencimiento, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Recalificación Emitida</label>*/
/*                     {{ form_widget(edit_form.recalificacion_emision, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Recalificación Vence</label>*/
/*                     {{ form_widget(edit_form.recalificacionVencimiento, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Examen Médico Emitido</label>*/
/*                     {{ form_widget(edit_form.examenMedicoEmision, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Examen Médico Vence</label>*/
/*                     {{ form_widget(edit_form.examenMedicoVencimiento, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Examen Psicofisiológico Emitido</label>*/
/*                     {{ form_widget(edit_form.examenPsicofisiologicoEmision, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Examen Psicofisiológico Vence</label>*/
/*                     {{ form_widget(edit_form.examenPsicofisiologicoVencimiento, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {#<div class="row">#}*/
/*         {#<div class="col-sm-6">#}*/
/*         {#<label class="col-sm-4 control-label"></label>#}*/
/*         {#{{ form_widget(edit_form.Submit) }}#}*/
/*         {#</div>#}*/
/*         {#</div>#}*/
/*         {#</div><!-- /.box-body -->#}*/
/*         <table align="center">*/
/*             <tr>*/
/*                 <td><input type="submit" class="btn btn-danger btn " style="background-color: #6290ff" value="Editar" /></td>*/
/*             </tr>*/
/*         </table>*/
/*     </div>*/
/*     {#<!-- /.box widget-->#}*/
/*     {{ form_end(edit_form) }}*/
/*     {% endblock %}*/
/* {#<h1>Chofer edit</h1>#}*/
/* */
/* {#{{ form_start(edit_form) }}#}*/
/*         {#{{ form_widget(edit_form) }}#}*/
/* {#<input type="submit" value="Edit" />#}*/
/* {#{{ form_end(edit_form) }}#}*/
/* */
/* {#<ul>#}*/
/*     {#<li>#}*/
/*         {#<a href="{{ path('chofer_index') }}">Back to the list</a>#}*/
/*     {#</li>#}*/
/*     {#<li>#}*/
/*         {#{{ form_start(delete_form) }}#}*/
/*         {#<input type="submit" value="Delete">#}*/
/*         {#{{ form_end(delete_form) }}#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
