<?php

/* tarjeta_combustible/edit.html.twig */
class __TwigTemplate_2296203f9060afe8e6f52ed70342fdad51c6aa4021798eb9881e32e5d1c3ab41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "tarjeta_combustible/edit.html.twig", 1);
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
        $__internal_dba0305fb113d0393d2671077d4e83fbe4f307e7a577b2e21e0323e7e5d899d0 = $this->env->getExtension("native_profiler");
        $__internal_dba0305fb113d0393d2671077d4e83fbe4f307e7a577b2e21e0323e7e5d899d0->enter($__internal_dba0305fb113d0393d2671077d4e83fbe4f307e7a577b2e21e0323e7e5d899d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tarjeta_combustible/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dba0305fb113d0393d2671077d4e83fbe4f307e7a577b2e21e0323e7e5d899d0->leave($__internal_dba0305fb113d0393d2671077d4e83fbe4f307e7a577b2e21e0323e7e5d899d0_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_3c1b1235662c7bc2f4d1baf8f05dd8656640564ebde7d2cd0f9f59c4333110a0 = $this->env->getExtension("native_profiler");
        $__internal_3c1b1235662c7bc2f4d1baf8f05dd8656640564ebde7d2cd0f9f59c4333110a0->enter($__internal_3c1b1235662c7bc2f4d1baf8f05dd8656640564ebde7d2cd0f9f59c4333110a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo " ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("method" => "POST"));
        echo "
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Editar Tarjeta de Combustible</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tarjeta_combustible_index");
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
                    <label class=\"col-sm-4 control-label\">No. tarjeta</label>
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "noTarjeta", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Tipo de Combustible</label>
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "combustibleTipo", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Asignacion</label>
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "asignacion", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Fecha de Asignacion</label>
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaAsignacion", array()), 'widget', array("attr" => array("class" => "")));
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
        echo "        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Saldo Actual</label>
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "saldoActual", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Fecha de Vencimiento</label>
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaVencimiento", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Ping</label>
                    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ping", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                </div>
            </div>
        </div>

        <table align=\"center\">
            <tr>
                <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff\" value=\"Editar\" /></td>
            </tr>
        </table>

    </div><!-- /.box widget-->
    ";
        // line 92
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
";
        
        $__internal_3c1b1235662c7bc2f4d1baf8f05dd8656640564ebde7d2cd0f9f59c4333110a0->leave($__internal_3c1b1235662c7bc2f4d1baf8f05dd8656640564ebde7d2cd0f9f59c4333110a0_prof);

    }

    public function getTemplateName()
    {
        return "tarjeta_combustible/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 92,  149 => 80,  138 => 72,  127 => 64,  121 => 60,  119 => 59,  117 => 58,  115 => 57,  113 => 56,  111 => 55,  109 => 54,  107 => 53,  100 => 48,  89 => 40,  78 => 32,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*  {{ form_start(edit_form, {'method' :'POST'}) }}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Editar Tarjeta de Combustible</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('tarjeta_combustible_index') }}">*/
/*                         <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.box-tools -->*/
/*     </div><!-- /.box-header -->*/
/*     <div class="box-body">*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">No. tarjeta</label>*/
/*                     {{ form_widget(edit_form.noTarjeta, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Tipo de Combustible</label>*/
/*                     {{ form_widget(edit_form.combustibleTipo, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Asignacion</label>*/
/*                     {{ form_widget(edit_form.asignacion, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Fecha de Asignacion</label>*/
/*                     {{ form_widget(edit_form.fechaAsignacion, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {#<div class="row">#}*/
/*             {#<div class="col-sm-6">#}*/
/*                 {#<div class="form-group">#}*/
/*                     {#<label class="col-sm-4 control-label">Gasto Real</label>#}*/
/*                     {#{{ form_widget(edit_form.gastoReal, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Saldo Actual</label>*/
/*                     {{ form_widget(edit_form.saldoActual, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Fecha de Vencimiento</label>*/
/*                     {{ form_widget(edit_form.fechaVencimiento, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Ping</label>*/
/*                     {{ form_widget(edit_form.ping, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <table align="center">*/
/*             <tr>*/
/*                 <td><input type="submit" class="btn btn-danger btn " style="background-color: #6290ff" value="Editar" /></td>*/
/*             </tr>*/
/*         </table>*/
/* */
/*     </div><!-- /.box widget-->*/
/*     {{ form_end(edit_form) }}*/
/* {% endblock %}*/
/* {#<h1>Tarjeta_combustible edit</h1>#}*/
/* */
/* {#{{ form_start(edit_form) }}#}*/
/*         {#{{ form_widget(edit_form) }}#}*/
/*         {#<input type="submit" value="Edit" />#}*/
/*     {#{{ form_end(edit_form) }}#}*/
/* */
/*     {#<ul>#}*/
/*         {#<li>#}*/
/*             {#<a href="{{ path('tarjeta_combustible_index') }}">Back to the list</a>#}*/
/*         {#</li>#}*/
/*         {#<li>#}*/
/*             {#{{ form_start(delete_form) }}#}*/
/*                 {#<input type="submit" value="Delete">#}*/
/*             {#{{ form_end(delete_form) }}#}*/
/*         {#</li>#}*/
/*     {#</ul>#}*/
