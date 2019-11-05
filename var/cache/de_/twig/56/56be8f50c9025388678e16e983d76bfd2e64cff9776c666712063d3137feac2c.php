<?php

/* hojaruta/new.html.twig */
class __TwigTemplate_6b464d1c451c8324b61cb00be2412a8cb7233ba650abcd41dc8ca3c622e823a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "hojaruta/new.html.twig", 1);
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
        $__internal_09e699f8f218d826c3d672df87df5753850781281facb29628d2e6a83b60c5df = $this->env->getExtension("native_profiler");
        $__internal_09e699f8f218d826c3d672df87df5753850781281facb29628d2e6a83b60c5df->enter($__internal_09e699f8f218d826c3d672df87df5753850781281facb29628d2e6a83b60c5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hojaruta/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e699f8f218d826c3d672df87df5753850781281facb29628d2e6a83b60c5df->leave($__internal_09e699f8f218d826c3d672df87df5753850781281facb29628d2e6a83b60c5df_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_85182eab364fcf2447820bd42c1181ec3ca6be7a591e9e9eba59326cb6a7dd47 = $this->env->getExtension("native_profiler");
        $__internal_85182eab364fcf2447820bd42c1181ec3ca6be7a591e9e9eba59326cb6a7dd47->enter($__internal_85182eab364fcf2447820bd42c1181ec3ca6be7a591e9e9eba59326cb6a7dd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "   ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Nueva Hoja de Ruta</h3>
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
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">No. Hoja de ruta</label>
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "NoHojaRuta", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Fecha</label>
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Ruta</label>
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ruta", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Ómnubis</label>
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "omnibus", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Cantidad de Viajes</label>
                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadViajes", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Cantidad de Salidas</label>
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadSalidas", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Horas de Trabajo Básico</label>
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "basico", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Horas de Trabajo con Incremento</label>
                    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conIncremento", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Horas de Trabajo Confronta</label>
                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confronta", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Horas de Trabajo en Turno Partido</label>
                    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "turnopartido", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Horas de Trabajo Voluntario</label>
                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "voluntario", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 109
        echo "            ";
        // line 110
        echo "                ";
        // line 111
        echo "                    ";
        // line 112
        echo "                    ";
        // line 113
        echo "                ";
        // line 114
        echo "            ";
        // line 115
        echo "        ";
        // line 116
        echo "        ";
        // line 117
        echo "            ";
        // line 118
        echo "                ";
        // line 119
        echo "                    ";
        // line 120
        echo "                        ";
        // line 121
        echo "                            ";
        // line 122
        echo "                                ";
        // line 123
        echo "                            ";
        // line 124
        echo "                        ";
        // line 125
        echo "                ";
        // line 126
        echo "            ";
        // line 127
        echo "        ";
        // line 128
        echo "        ";
        // line 129
        echo "            ";
        // line 130
        echo "                ";
        // line 131
        echo "                ";
        // line 132
        echo "                    ";
        // line 133
        echo "                        ";
        // line 134
        echo "                            ";
        // line 135
        echo "                                ";
        // line 136
        echo "                                ";
        // line 137
        echo "                            ";
        // line 138
        echo "                        ";
        // line 139
        echo "                    ";
        // line 140
        echo "                ";
        // line 141
        echo "            ";
        // line 142
        echo "        ";
        // line 143
        echo "        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Observaciones</label>
                    ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)\$")));
        echo "
                </div>
            </div>
        </div>

        <table align=\"center\">
            <tr align=\"\">
                ";
        // line 155
        echo "                ";
        // line 156
        echo "                <td style=\"width: 10px\"> </td>
                <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff;margin-right: 5%\" value=\"Crear\" /></td>
                <td><a class= \"btn btn-danger btn \" onclick=\"window.history.back();\" href=\"\"><span class=\"\"> </span>Cancelar</a></td>
            </tr>
            <tr align=\"\">
                ";
        // line 162
        echo "
            </tr>
        </table>

    </div><!-- /.box widget-->
    ";
        // line 167
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
    ";
        
        $__internal_85182eab364fcf2447820bd42c1181ec3ca6be7a591e9e9eba59326cb6a7dd47->leave($__internal_85182eab364fcf2447820bd42c1181ec3ca6be7a591e9e9eba59326cb6a7dd47_prof);

    }

    public function getTemplateName()
    {
        return "hojaruta/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 167,  277 => 162,  270 => 156,  268 => 155,  258 => 147,  252 => 143,  250 => 142,  248 => 141,  246 => 140,  244 => 139,  242 => 138,  240 => 137,  238 => 136,  236 => 135,  234 => 134,  232 => 133,  230 => 132,  228 => 131,  226 => 130,  224 => 129,  222 => 128,  220 => 127,  218 => 126,  216 => 125,  214 => 124,  212 => 123,  210 => 122,  208 => 121,  206 => 120,  204 => 119,  202 => 118,  200 => 117,  198 => 116,  196 => 115,  194 => 114,  192 => 113,  190 => 112,  188 => 111,  186 => 110,  184 => 109,  177 => 104,  166 => 96,  155 => 88,  144 => 80,  133 => 72,  122 => 64,  111 => 56,  100 => 48,  89 => 40,  78 => 32,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*    {{ form_start(form, {'method' :'POST'}) }}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Nueva Hoja de Ruta</h3>*/
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
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">No. Hoja de ruta</label>*/
/*                     {{ form_widget(form.NoHojaRuta, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Fecha</label>*/
/*                     {{ form_widget(form.fecha, {'attr' : {'class' : ''}})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Ruta</label>*/
/*                     {{ form_widget(form.ruta, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Ómnubis</label>*/
/*                     {{ form_widget(form.omnibus, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Cantidad de Viajes</label>*/
/*                     {{ form_widget(form.cantidadViajes, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Cantidad de Salidas</label>*/
/*                     {{ form_widget(form.cantidadSalidas, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Horas de Trabajo Básico</label>*/
/*                     {{ form_widget(form.basico, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Horas de Trabajo con Incremento</label>*/
/*                     {{ form_widget(form.conIncremento, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Horas de Trabajo Confronta</label>*/
/*                     {{ form_widget(form.confronta, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Horas de Trabajo en Turno Partido</label>*/
/*                     {{ form_widget(form.turnopartido, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Horas de Trabajo Voluntario</label>*/
/*                     {{ form_widget(form.voluntario, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {#<div class="row">#}*/
/*             {#<div class="col-sm-6">#}*/
/*                 {#<div class="form-group">#}*/
/*                     {#<label class="col-sm-4 control-label">Total de Horas</label>#}*/
/*                     {#{{ form_widget(form.totalHoras, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/*         {#<div class="row">#}*/
/*             {#<div class="col-sm-6">#}*/
/*                 {#<div class="form-group">#}*/
/*                     {#<label class="col-sm-4 control-label">Incidencias</label>#}*/
/*                         {#{% if not is_granted('ROLE_USUARIO' ) %}#}*/
/*                             {#<a class="btn btn-sm btn-default  pull-left" href="{{ path('incidencia_new') }}">#}*/
/*                                 {#<img src="{{ asset('assets/dist/img/add_database_26px.png') }}" alt="User Image"> Nuevo#}*/
/*                             {#</a>#}*/
/*                         {#{% endif %}#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/*         {#<div class="row rejilla" data-prototype="{{ form_widget(form.deficiencia_add.vars.prototype)| e }}">#}*/
/*             {#<div class="col-sm-12">#}*/
/*                 {#&#123;&#35; iterate over each existing tag and render its only field: name &#35;&#125;#}*/
/*                 {#{% for detalle in form.deficiencia_add %}#}*/
/*                     {#<div class="row detalles">#}*/
/*                         {#<div class="col-sm-2">#}*/
/*                             {#<div class="form-group">#}*/
/*                                 {#<label class="control-label" for="product_name">Product</label>#}*/
/*                                 {#{{ form_widget(detalle.deficiencia, {'attr' : {'class' : 'form-control' }}) }}#}*/
/*                             {#</div>#}*/
/*                         {#</div>#}*/
/*                     {#</div>#}*/
/*                 {#{% endfor %}#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Observaciones</label>*/
/*                     {{ form_widget(form.observaciones, {'attr' : {'class' : 'form-control','pattern':'([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <table align="center">*/
/*             <tr align="">*/
/*                 {#<td></td>#}*/
/*                 {#<td  >   {{ form_widget(form.Submit) }}</td>#}*/
/*                 <td style="width: 10px"> </td>*/
/*                 <td><input type="submit" class="btn btn-danger btn " style="background-color: #6290ff;margin-right: 5%" value="Crear" /></td>*/
/*                 <td><a class= "btn btn-danger btn " onclick="window.history.back();" href=""><span class=""> </span>Cancelar</a></td>*/
/*             </tr>*/
/*             <tr align="">*/
/*                 {#<td style="width: 0px"> </td>#}*/
/* */
/*             </tr>*/
/*         </table>*/
/* */
/*     </div><!-- /.box widget-->*/
/*     {{ form_end(form) }}*/
/* </div>*/
/*     {% endblock %}*/
/* */
