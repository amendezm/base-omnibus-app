<?php

/* :incidencia:edit.html.twig */
class __TwigTemplate_b92d11f0900b9657942b1a531af548ef4c6317d2568694199523cedd17972aca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":incidencia:edit.html.twig", 1);
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
        $__internal_061386ea8e84176a8dc2a0f8475e60da1745af512f9dd8c98cfbd6962e74d2cd = $this->env->getExtension("native_profiler");
        $__internal_061386ea8e84176a8dc2a0f8475e60da1745af512f9dd8c98cfbd6962e74d2cd->enter($__internal_061386ea8e84176a8dc2a0f8475e60da1745af512f9dd8c98cfbd6962e74d2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":incidencia:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_061386ea8e84176a8dc2a0f8475e60da1745af512f9dd8c98cfbd6962e74d2cd->leave($__internal_061386ea8e84176a8dc2a0f8475e60da1745af512f9dd8c98cfbd6962e74d2cd_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_8fe5a30bedc63acea0aad532a0b6a1c2b5f8462d22d5f7d541a54c756c4473c7 = $this->env->getExtension("native_profiler");
        $__internal_8fe5a30bedc63acea0aad532a0b6a1c2b5f8462d22d5f7d541a54c756c4473c7->enter($__internal_8fe5a30bedc63acea0aad532a0b6a1c2b5f8462d22d5f7d541a54c756c4473c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("method" => "POST"));
        echo "
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Editar Incidencia</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("incidencia_index");
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
                    <label class=\"col-sm-4 control-label\">Incidencia</label>
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "detalles", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Tipo</label>
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Tipoincidencia", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 37
        echo "            ";
        // line 38
        echo "                ";
        // line 39
        echo "                    ";
        // line 40
        echo "                    ";
        // line 41
        echo "                ";
        // line 42
        echo "            ";
        // line 43
        echo "        ";
        // line 44
        echo "        ";
        // line 45
        echo "            ";
        // line 46
        echo "                ";
        // line 47
        echo "                    ";
        // line 48
        echo "                    ";
        // line 49
        echo "                ";
        // line 50
        echo "            ";
        // line 51
        echo "        ";
        // line 52
        echo "        ";
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
        echo "        ";
        // line 62
        echo "        ";
        // line 63
        echo "        ";
        // line 64
        echo "        ";
        // line 65
        echo "        ";
        // line 66
        echo "        ";
        // line 67
        echo "        <table align=\"center\">
            <tr>
                <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff\" value=\"Editar\" /></td>
            </tr>
        </table>
    </div>
    ";
        // line 74
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    ";
        
        $__internal_8fe5a30bedc63acea0aad532a0b6a1c2b5f8462d22d5f7d541a54c756c4473c7->leave($__internal_8fe5a30bedc63acea0aad532a0b6a1c2b5f8462d22d5f7d541a54c756c4473c7_prof);

    }

    public function getTemplateName()
    {
        return ":incidencia:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 74,  145 => 67,  143 => 66,  141 => 65,  139 => 64,  137 => 63,  135 => 62,  133 => 61,  131 => 60,  129 => 59,  127 => 58,  125 => 57,  123 => 56,  121 => 55,  119 => 54,  117 => 53,  115 => 52,  113 => 51,  111 => 50,  109 => 49,  107 => 48,  105 => 47,  103 => 46,  101 => 45,  99 => 44,  97 => 43,  95 => 42,  93 => 41,  91 => 40,  89 => 39,  87 => 38,  85 => 37,  78 => 32,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido%}*/
/*     {{ form_start(edit_form, {'method' :'POST'}) }}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Editar Incidencia</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('incidencia_index') }}">*/
/*                         <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.box-tools -->*/
/*     </div><!-- /.box-header -->*/
/*     <div class="box-body">*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Incidencia</label>*/
/*                     {{ form_widget(edit_form.detalles, {'attr' : {'class' : 'form-control','pattern':'([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Tipo</label>*/
/*                     {{ form_widget(edit_form.Tipoincidencia, {'attr' : {'class' : '' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {#<div class="row">#}*/
/*             {#<div class="col-sm-6">#}*/
/*                 {#<div class="form-group">#}*/
/*                     {#<label class="col-sm-4 control-label">No. Hoja de Ruta</label>#}*/
/*                     {#{{ form_widget(edit_form.hojaRuta, {'attr' : {'class' : '' }})}}#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/*         {#<div class="row">#}*/
/*             {#<div class="col-sm-6">#}*/
/*                 {#<div class="form-group">#}*/
/*                     {#<label class="col-sm-4 control-label">Chofer</label>#}*/
/*                     {#{{ form_widget(edit_form.fecha, {'attr' : {'class' : '' }})}}#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/*         {#<div class="row">#}*/
/*             {#<div class="col-sm-6">#}*/
/*                 {#<div class="form-group">#}*/
/*                     {#<label class="col-sm-4 control-label">Fecha</label>#}*/
/*                     {#{{ form_widget(edit_form.fecha, {'attr' : {'class' : '' }})}}#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
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
/* */
/*     {% endblock %}*/
/* */
