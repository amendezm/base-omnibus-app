<?php

/* omnibus/new.html.twig */
class __TwigTemplate_d9ea8d0f3aabacf0c3d31f6f5147bd5a2fc34cbdd495d798bed3b0132834050d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "omnibus/new.html.twig", 1);
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
        $__internal_d54f1884af504640868008c5f84e758ff0fca51bdef3237dd6d5ed9ba59c09f0 = $this->env->getExtension("native_profiler");
        $__internal_d54f1884af504640868008c5f84e758ff0fca51bdef3237dd6d5ed9ba59c09f0->enter($__internal_d54f1884af504640868008c5f84e758ff0fca51bdef3237dd6d5ed9ba59c09f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "omnibus/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d54f1884af504640868008c5f84e758ff0fca51bdef3237dd6d5ed9ba59c09f0->leave($__internal_d54f1884af504640868008c5f84e758ff0fca51bdef3237dd6d5ed9ba59c09f0_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_68b5b9095ea39dd225e831c470c559f0a856dc2abe34fa570117ae33e10c7a36 = $this->env->getExtension("native_profiler");
        $__internal_68b5b9095ea39dd225e831c470c559f0a856dc2abe34fa570117ae33e10c7a36->enter($__internal_68b5b9095ea39dd225e831c470c559f0a856dc2abe34fa570117ae33e10c7a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Nuevo Ómnibus</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("omnibus_index");
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
                    <label class=\"col-sm-4 control-label\">NoControl</label>
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "noOmnibus", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Chapa</label>
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chapa", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Tipo</label>
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeOmnibus", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Marca</label>
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marca", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 53
        echo "            ";
        // line 54
        echo "                ";
        // line 55
        echo "                    ";
        // line 56
        echo "                    ";
        // line 57
        echo "                ";
        // line 58
        echo "            ";
        // line 59
        echo "        ";
        // line 60
        echo "        ";
        // line 61
        echo "            ";
        // line 62
        echo "                ";
        // line 63
        echo "                    ";
        // line 64
        echo "                    ";
        // line 65
        echo "                ";
        // line 66
        echo "            ";
        // line 67
        echo "        ";
        // line 68
        echo "        ";
        // line 69
        echo "            ";
        // line 70
        echo "                ";
        // line 71
        echo "                    ";
        // line 72
        echo "                    ";
        // line 73
        echo "                ";
        // line 74
        echo "            ";
        // line 75
        echo "        ";
        // line 76
        echo "        ";
        // line 77
        echo "            ";
        // line 78
        echo "                ";
        // line 79
        echo "                    ";
        // line 80
        echo "                    ";
        // line 81
        echo "                ";
        // line 82
        echo "            ";
        // line 83
        echo "        ";
        // line 84
        echo "        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Base</label>
                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "base", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Revisión</label>
                    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "en_revision", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Roto</label>
                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_roto", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Emisión FICAV</label>
                    ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "FICAV_emision", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Vencimiento FICAV</label>
                    ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "FICAV_vencimiento", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Licencia Operativa Emitida</label>
                    ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "licenciaOperativaEmision", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Licencia Operativa Vence</label>
                    ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "licenciaOperativaVencimiento", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Tarjeta de Combustible</label>
                    ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tarjetaCombustible", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>

        <table align=\"center\">
            <tr align=\"\">
                ";
        // line 152
        echo "                ";
        // line 153
        echo "                <td style=\"width: 10px\"> </td>
                <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff;margin-right: 5%\" value=\"Crear\" /></td>
                <td><a class= \"btn btn-danger btn \" onclick=\"window.history.back();\" href=\"\"><span class=\"\"> </span>Cancelar</a></td>
            </tr>
            <tr align=\"\">
                ";
        // line 159
        echo "
            </tr>
        </table>

    </div><!-- /.box widget-->
    ";
        // line 164
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        // line 166
        echo "</div><!
    ";
        // line 168
        echo "    ";
        // line 169
        echo "    ";
        // line 170
        echo "    ";
        // line 171
        echo "
    ";
        // line 173
        echo "    ";
        // line 174
        echo "    ";
        // line 175
        echo "    ";
        // line 176
        echo "    ";
        // line 177
        echo "    ";
        
        $__internal_68b5b9095ea39dd225e831c470c559f0a856dc2abe34fa570117ae33e10c7a36->leave($__internal_68b5b9095ea39dd225e831c470c559f0a856dc2abe34fa570117ae33e10c7a36_prof);

    }

    public function getTemplateName()
    {
        return "omnibus/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 177,  300 => 176,  298 => 175,  296 => 174,  294 => 173,  291 => 171,  289 => 170,  287 => 169,  285 => 168,  282 => 166,  278 => 164,  271 => 159,  264 => 153,  262 => 152,  252 => 144,  241 => 136,  230 => 128,  219 => 120,  208 => 112,  197 => 104,  186 => 96,  175 => 88,  169 => 84,  167 => 83,  165 => 82,  163 => 81,  161 => 80,  159 => 79,  157 => 78,  155 => 77,  153 => 76,  151 => 75,  149 => 74,  147 => 73,  145 => 72,  143 => 71,  141 => 70,  139 => 69,  137 => 68,  135 => 67,  133 => 66,  131 => 65,  129 => 64,  127 => 63,  125 => 62,  123 => 61,  121 => 60,  119 => 59,  117 => 58,  115 => 57,  113 => 56,  111 => 55,  109 => 54,  107 => 53,  100 => 48,  89 => 40,  78 => 32,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido%}*/
/*     {{ form_start(form, {'method' :'POST'}) }}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Nuevo Ómnibus</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('omnibus_index') }}">*/
/*                         <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.box-tools -->*/
/*     </div><!-- /.box-header -->*/
/*     <div class="box-body">*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">NoControl</label>*/
/*                     {{ form_widget(form.noOmnibus, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Chapa</label>*/
/*                     {{ form_widget(form.chapa, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Tipo</label>*/
/*                     {{ form_widget(form.typeOmnibus, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Marca</label>*/
/*                     {{ form_widget(form.marca, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {#<div class="row">#}*/
/*             {#<div class="col-sm-6">#}*/
/*                 {#<div class="form-group">#}*/
/*                     {#<label class="col-sm-4 control-label">Índice CR</label>#}*/
/*                     {#{{ form_widget(form.indiceConsumoReal, {'attr' : {'class' : 'form-control','pattern':'([0-9,]+)$' }})}}#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/*         {#<div class="row">#}*/
/*             {#<div class="col-sm-6">#}*/
/*                 {#<div class="form-group">#}*/
/*                     {#<label class="col-sm-4 control-label">Kms Recorridos A</label>#}*/
/*                     {#{{ form_widget(form.kmRecorridosAcumulados, {'attr' : {'class' : 'form-control','pattern':'([0-9,]+)$' }})}}#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/*         {#<div class="row">#}*/
/*             {#<div class="col-sm-6">#}*/
/*                 {#<div class="form-group">#}*/
/*                     {#<label class="col-sm-4 control-label">Capacidad</label>#}*/
/*                     {#{{ form_widget(form.capacidad, {'attr' : {'class' : 'form-control' }})}}#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/*         {#<div class="row">#}*/
/*             {#<div class="col-sm-6">#}*/
/*                 {#<div class="form-group">#}*/
/*                     {#<label class="col-sm-4 control-label">Descripción</label>#}*/
/*                     {#{{ form_widget(form.descripcion, {'attr' : {'class' : 'form-control' }})}}#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Base</label>*/
/*                     {{ form_widget(form.base, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Revisión</label>*/
/*                     {{ form_widget(form.en_revision, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Roto</label>*/
/*                     {{ form_widget(form.is_roto, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Emisión FICAV</label>*/
/*                     {{ form_widget(form.FICAV_emision, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Vencimiento FICAV</label>*/
/*                     {{ form_widget(form.FICAV_vencimiento, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Licencia Operativa Emitida</label>*/
/*                     {{ form_widget(form.licenciaOperativaEmision, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Licencia Operativa Vence</label>*/
/*                     {{ form_widget(form.licenciaOperativaVencimiento, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Tarjeta de Combustible</label>*/
/*                     {{ form_widget(form.tarjetaCombustible, {'attr' : {'class' : 'form-control' }})}}*/
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
/*     {#<h1>Base creation</h1>#}*/
/* </div><!*/
/*     {#{{ form_start(form) }}#}*/
/*     {#{{ form_widget(form) }}#}*/
/*     {#<input type="submit" value="Create" />#}*/
/*     {#{{ form_end(form) }}#}*/
/* */
/*     {#<ul>#}*/
/*     {#<li>#}*/
/*     {#<a href="{{ path('base_index') }}">Back to the list</a>#}*/
/*     {#</li>#}*/
/*     {#</ul>#}*/
/*     {% endblock %}*/
/* */
