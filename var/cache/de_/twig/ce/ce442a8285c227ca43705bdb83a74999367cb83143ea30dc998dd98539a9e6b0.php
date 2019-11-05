<?php

/* :tipo_omnibus:edit.html.twig */
class __TwigTemplate_aa39942caa5a1a4ddbae162cf0ceb8bc12bc0daee7f5449679dd5a4e3c9db55b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":tipo_omnibus:edit.html.twig", 1);
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
        $__internal_b079d0ae77eead727dc21f338c4fcb82f1fbf21fc08010426d5cdde0e6aa9a46 = $this->env->getExtension("native_profiler");
        $__internal_b079d0ae77eead727dc21f338c4fcb82f1fbf21fc08010426d5cdde0e6aa9a46->enter($__internal_b079d0ae77eead727dc21f338c4fcb82f1fbf21fc08010426d5cdde0e6aa9a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipo_omnibus:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b079d0ae77eead727dc21f338c4fcb82f1fbf21fc08010426d5cdde0e6aa9a46->leave($__internal_b079d0ae77eead727dc21f338c4fcb82f1fbf21fc08010426d5cdde0e6aa9a46_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_e70c829247461c08ae2974b67ec5979150eb5bbda164421b39f2b300567f73b5 = $this->env->getExtension("native_profiler");
        $__internal_e70c829247461c08ae2974b67ec5979150eb5bbda164421b39f2b300567f73b5->enter($__internal_e70c829247461c08ae2974b67ec5979150eb5bbda164421b39f2b300567f73b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "   ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("method" => "POST"));
        echo "
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Editar Tipo de Ómnibus</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tipo_omnibus_index");
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
                    <label class=\"col-sm-4 control-label\">Tipo</label>
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipo", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[A-Za-z]+\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Capacidad pasajeros sentados</label>
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "capacidad_sentados", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]{2,3}")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Capacidad pasajeros parados</label>
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "capacidad_parados", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]{2,3}")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Índice de Consumo Normado por Kms</label>
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "indiceConsumoNormado", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([0-9,]+)\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">% de Desviación</label>
                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "desviacion", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([0-9%]){2,3}")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Cant de Kmts X Litro Combust. - norma</label>
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cantidadkmtsxlitro", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([0-9,]+)\$")));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 69
        echo "        <table align=\"center\">
            <tr>
                <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff\" value=\"Editar\" /></td>
            </tr>
        </table>
    </div>
    ";
        // line 76
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
";
        
        $__internal_e70c829247461c08ae2974b67ec5979150eb5bbda164421b39f2b300567f73b5->leave($__internal_e70c829247461c08ae2974b67ec5979150eb5bbda164421b39f2b300567f73b5_prof);

    }

    public function getTemplateName()
    {
        return ":tipo_omnibus:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 76,  129 => 69,  122 => 64,  111 => 56,  100 => 48,  89 => 40,  78 => 32,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*    {{ form_start(edit_form, {'method' :'POST'}) }}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Editar Tipo de Ómnibus</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('tipo_omnibus_index') }}">*/
/*                         <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.box-tools -->*/
/*     </div><!-- /.box-header -->*/
/*     <div class="box-body">*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Tipo</label>*/
/*                     {{ form_widget(edit_form.tipo, {'attr' : {'class' : 'form-control','pattern':'[A-Za-z]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Capacidad pasajeros sentados</label>*/
/*                     {{ form_widget(edit_form.capacidad_sentados, {'attr' : {'class' : 'form-control','pattern':'[0-9]{2,3}' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Capacidad pasajeros parados</label>*/
/*                     {{ form_widget(edit_form.capacidad_parados, {'attr' : {'class' : 'form-control','pattern':'[0-9]{2,3}' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Índice de Consumo Normado por Kms</label>*/
/*                     {{ form_widget(edit_form.indiceConsumoNormado, {'attr' : {'class' : 'form-control','pattern':'([0-9,]+)$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">% de Desviación</label>*/
/*                     {{ form_widget(edit_form.desviacion, {'attr' : {'class' : 'form-control','pattern':'([0-9%]){2,3}' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Cant de Kmts X Litro Combust. - norma</label>*/
/*                     {{ form_widget(edit_form.cantidadkmtsxlitro, {'attr' : {'class' : 'form-control','pattern':'([0-9,]+)$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {#</div><!-- /.box-body -->#}*/
/*         <table align="center">*/
/*             <tr>*/
/*                 <td><input type="submit" class="btn btn-danger btn " style="background-color: #6290ff" value="Editar" /></td>*/
/*             </tr>*/
/*         </table>*/
/*     </div>*/
/*     {#<!-- /.box widget-->#}*/
/*     {{ form_end(edit_form) }}*/
/* {% endblock %}*/
/* {#<h1>Tipo_omnibus edit</h1>#}*/
/* */
/* {#{{ form_start(edit_form) }}#}*/
/*         {#{{ form_widget(edit_form) }}#}*/
/* {#<input type="submit" value="Edit" />#}*/
/* {#{{ form_end(edit_form) }}#}*/
/* */
/* {#<ul>#}*/
/*     {#<li>#}*/
/*         {#<a href="{{ path('tipo_omnibus_index') }}">Back to the list</a>#}*/
/*     {#</li>#}*/
/*     {#<li>#}*/
/*         {#{{ form_start(delete_form) }}#}*/
/*         {#<input type="submit" value="Delete">#}*/
/*         {#{{ form_end(delete_form) }}#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
