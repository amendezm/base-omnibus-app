<?php

/* hojaruta/edit.html.twig */
class __TwigTemplate_fce63adcbc9d2c68ec23bece37c70b225f043670654eaeda2152b24d7fb699a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "hojaruta/edit.html.twig", 1);
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
        $__internal_6fbe90caf565c2654d64b929dc16bdfad28a77a6abd9c02f64e4de8bb3dd3f19 = $this->env->getExtension("native_profiler");
        $__internal_6fbe90caf565c2654d64b929dc16bdfad28a77a6abd9c02f64e4de8bb3dd3f19->enter($__internal_6fbe90caf565c2654d64b929dc16bdfad28a77a6abd9c02f64e4de8bb3dd3f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hojaruta/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fbe90caf565c2654d64b929dc16bdfad28a77a6abd9c02f64e4de8bb3dd3f19->leave($__internal_6fbe90caf565c2654d64b929dc16bdfad28a77a6abd9c02f64e4de8bb3dd3f19_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_8f761aca3238578b2ce2adf5ac24d33273da346208b5f35ce5266b9a67743ef4 = $this->env->getExtension("native_profiler");
        $__internal_8f761aca3238578b2ce2adf5ac24d33273da346208b5f35ce5266b9a67743ef4->enter($__internal_8f761aca3238578b2ce2adf5ac24d33273da346208b5f35ce5266b9a67743ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("method" => "POST"));
        echo "
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Editar Hoja de Ruta</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("hojaruta_index");
        echo "\">
                        <i class=\"glyphicon glyphicon glyphicon-hand-left\"></i> Atràs</a>
                </li>
            </ul>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class=\"box-body\">
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">No Hoja de ruta</label>
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "NoHojaRuta", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Fecha</label>
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fecha", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Ruta</label>
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ruta", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Ómnubis</label>
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "omnibus", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Cantidad de Viajes</label>
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cantidadViajes", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Cantidad de Salidas</label>
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cantidadSalidas", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Horas de Trabajo Básico</label>
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "basico", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Horas de Trabajo con Incremento</label>
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "conIncremento", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Horas de Trabajo Confronta</label>
                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "confronta", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Horas de Trabajo en Turno Partido</label>
                        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "turnopartido", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Horas de Trabajo Voluntario</label>
                        ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "voluntario", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Observaciones</label>
                        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "observaciones", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)\$")));
        echo "
                    </div>
                </div>
            </div>

            <table align=\"center\">
                <tr>
                    <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff\" value=\"Editar\" /></td>
                </tr>
            </table>
    </div>
    </div>
    ";
        // line 127
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
</div>
    ";
        
        $__internal_8f761aca3238578b2ce2adf5ac24d33273da346208b5f35ce5266b9a67743ef4->leave($__internal_8f761aca3238578b2ce2adf5ac24d33273da346208b5f35ce5266b9a67743ef4_prof);

    }

    public function getTemplateName()
    {
        return "hojaruta/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 127,  190 => 114,  178 => 105,  167 => 97,  156 => 89,  145 => 81,  134 => 73,  123 => 65,  112 => 57,  101 => 49,  90 => 41,  79 => 33,  68 => 25,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido%}*/
/*     {{ form_start(edit_form, {'method' :'POST'}) }}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Editar Hoja de Ruta</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('hojaruta_index') }}">*/
/*                         <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.box-tools -->*/
/*     </div><!-- /.box-header -->*/
/*     <div class="box-body">*/
/*         <div class="box-body">*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">No Hoja de ruta</label>*/
/*                         {{ form_widget(edit_form.NoHojaRuta, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Fecha</label>*/
/*                         {{ form_widget(edit_form.fecha, {'attr' : {'class' : ''}})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Ruta</label>*/
/*                         {{ form_widget(edit_form.ruta, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Ómnubis</label>*/
/*                         {{ form_widget(edit_form.omnibus, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Cantidad de Viajes</label>*/
/*                         {{ form_widget(edit_form.cantidadViajes, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Cantidad de Salidas</label>*/
/*                         {{ form_widget(edit_form.cantidadSalidas, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Horas de Trabajo Básico</label>*/
/*                         {{ form_widget(edit_form.basico, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Horas de Trabajo con Incremento</label>*/
/*                         {{ form_widget(edit_form.conIncremento, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Horas de Trabajo Confronta</label>*/
/*                         {{ form_widget(edit_form.confronta, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Horas de Trabajo en Turno Partido</label>*/
/*                         {{ form_widget(edit_form.turnopartido, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Horas de Trabajo Voluntario</label>*/
/*                         {{ form_widget(edit_form.voluntario, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Observaciones</label>*/
/*                         {{ form_widget(edit_form.observaciones, {'attr' : {'class' : 'form-control','pattern':'([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <table align="center">*/
/*                 <tr>*/
/*                     <td><input type="submit" class="btn btn-danger btn " style="background-color: #6290ff" value="Editar" /></td>*/
/*                 </tr>*/
/*             </table>*/
/*     </div>*/
/*     </div>*/
/*     {#<!-- /.box widget-->#}*/
/*     {{ form_end(edit_form) }}*/
/* </div>*/
/*     {% endblock %}*/
/* */
