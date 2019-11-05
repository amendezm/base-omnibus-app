<?php

/* ruta/edit.html.twig */
class __TwigTemplate_30bb2a2a9a234c52e0e7425852ab2534c93023a85b326c6779fa78a17de241cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "ruta/edit.html.twig", 1);
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
        $__internal_66f56b120ff1c7360d2fe0335865c1ed9dfdebb2de63cccacbaeeff248ba3366 = $this->env->getExtension("native_profiler");
        $__internal_66f56b120ff1c7360d2fe0335865c1ed9dfdebb2de63cccacbaeeff248ba3366->enter($__internal_66f56b120ff1c7360d2fe0335865c1ed9dfdebb2de63cccacbaeeff248ba3366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ruta/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66f56b120ff1c7360d2fe0335865c1ed9dfdebb2de63cccacbaeeff248ba3366->leave($__internal_66f56b120ff1c7360d2fe0335865c1ed9dfdebb2de63cccacbaeeff248ba3366_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_40ae537105b69385d710b5d8b2631550aa82883c3385dd0ab55080e14f44d04b = $this->env->getExtension("native_profiler");
        $__internal_40ae537105b69385d710b5d8b2631550aa82883c3385dd0ab55080e14f44d04b->enter($__internal_40ae537105b69385d710b5d8b2631550aa82883c3385dd0ab55080e14f44d04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("method" => "POST"));
        echo "
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Editar Ruta</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ruta_index");
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
                    <label class=\"col-sm-4 control-label\">Ruta</label>
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "noRuta", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Tipo de Servicio</label>
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "servicio", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Distancia en kms</label>
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "distanciaKm", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Cantidad de Pasajeros Promedio</label>
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cantPasajerosPromedio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Precio Pasaje</label>
                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "precioPasaje", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Salida</label>
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "salida", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Destino</label>
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "destino", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Frecuencia</label>
                    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dias", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 85
        echo "            ";
        // line 86
        echo "                ";
        // line 87
        echo "                    ";
        // line 88
        echo "                    ";
        // line 89
        echo "                ";
        // line 90
        echo "            ";
        // line 91
        echo "        ";
        // line 92
        echo "        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Cantidad de Medios</label>
                    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cantidadMedios", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Punto de Expedición</label>
                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "expedicion", array()), 'widget', array("attr" => array("class" => "form-control")));
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
    ";
        // line 115
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
";
        
        $__internal_40ae537105b69385d710b5d8b2631550aa82883c3385dd0ab55080e14f44d04b->leave($__internal_40ae537105b69385d710b5d8b2631550aa82883c3385dd0ab55080e14f44d04b_prof);

    }

    public function getTemplateName()
    {
        return "ruta/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 115,  182 => 104,  171 => 96,  165 => 92,  163 => 91,  161 => 90,  159 => 89,  157 => 88,  155 => 87,  153 => 86,  151 => 85,  144 => 80,  133 => 72,  122 => 64,  111 => 56,  100 => 48,  89 => 40,  78 => 32,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     {{ form_start(edit_form, {'method' :'POST'}) }}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Editar Ruta</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('ruta_index') }}">*/
/*                         <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.box-tools -->*/
/*     </div><!-- /.box-header -->*/
/*     <div class="box-body">*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Ruta</label>*/
/*                     {{ form_widget(edit_form.noRuta, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Tipo de Servicio</label>*/
/*                     {{ form_widget(edit_form.servicio, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Distancia en kms</label>*/
/*                     {{ form_widget(edit_form.distanciaKm, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Cantidad de Pasajeros Promedio</label>*/
/*                     {{ form_widget(edit_form.cantPasajerosPromedio, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Precio Pasaje</label>*/
/*                     {{ form_widget(edit_form.precioPasaje, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Salida</label>*/
/*                     {{ form_widget(edit_form.salida, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Destino</label>*/
/*                     {{ form_widget(edit_form.destino, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Frecuencia</label>*/
/*                     {{ form_widget(edit_form.dias, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {#<div class="row">#}*/
/*             {#<div class="col-sm-6">#}*/
/*                 {#<div class="form-group">#}*/
/*                     {#<label class="col-sm-4 control-label">Recaudación</label>#}*/
/*                     {#{{ form_widget(edit_form.recaudacion, {'attr' : {'class' : 'form-control' }})}}#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Cantidad de Medios</label>*/
/*                     {{ form_widget(edit_form.cantidadMedios, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Punto de Expedición</label>*/
/*                     {{ form_widget(edit_form.expedicion, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <table align="center">*/
/*             <tr>*/
/*                 <td><input type="submit" class="btn btn-danger btn " style="background-color: #6290ff" value="Editar" /></td>*/
/*             </tr>*/
/*         </table>*/
/*     </div>*/
/*     {#<!-- /.box widget-->#}*/
/*     {{ form_end(edit_form) }}*/
/* {% endblock %}*/
/* {#<h1>Ruta edit</h1>#}*/
/* */
/* {#{{ form_start(edit_form) }}#}*/
/*         {#{{ form_widget(edit_form) }}#}*/
/*         {#<input type="submit" value="Edit" />#}*/
/*     {#{{ form_end(edit_form) }}#}*/
/* */
/*     {#<ul>#}*/
/*         {#<li>#}*/
/*             {#<a href="{{ path('ruta_index') }}">Back to the list</a>#}*/
/*         {#</li>#}*/
/*         {#<li>#}*/
/*             {#{{ form_start(delete_form) }}#}*/
/*                 {#<input type="submit" value="Delete">#}*/
/*             {#{{ form_end(delete_form) }}#}*/
/*         {#</li>#}*/
/*     {#</ul>#}*/
