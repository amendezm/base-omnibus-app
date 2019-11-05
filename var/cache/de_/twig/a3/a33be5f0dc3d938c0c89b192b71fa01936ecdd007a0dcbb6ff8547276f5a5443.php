<?php

/* base/edit.html.twig */
class __TwigTemplate_ba934ac3b55d5ea862ef2a8164aa759b3f7485fbc4d653bead1c94c4427d7571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "base/edit.html.twig", 1);
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
        $__internal_b166ba3592e8fe3098df2378275b42fb2b8a54c638bf1fb0114a6b5965ce265e = $this->env->getExtension("native_profiler");
        $__internal_b166ba3592e8fe3098df2378275b42fb2b8a54c638bf1fb0114a6b5965ce265e->enter($__internal_b166ba3592e8fe3098df2378275b42fb2b8a54c638bf1fb0114a6b5965ce265e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b166ba3592e8fe3098df2378275b42fb2b8a54c638bf1fb0114a6b5965ce265e->leave($__internal_b166ba3592e8fe3098df2378275b42fb2b8a54c638bf1fb0114a6b5965ce265e_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_4cd8e97baca0681d9c2c158be1b3d23405c4833c26066acd9d85212f6be5ccae = $this->env->getExtension("native_profiler");
        $__internal_4cd8e97baca0681d9c2c158be1b3d23405c4833c26066acd9d85212f6be5ccae->enter($__internal_4cd8e97baca0681d9c2c158be1b3d23405c4833c26066acd9d85212f6be5ccae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("method" => "POST"));
        echo "
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Editar Base</h3>
            </div><!-- /.user-block -->
            <div class=\"box-tools\">
                <ul class=\"list-inline\">
                    <li>
                        <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("base_index");
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
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Descripción</label>
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Dirección</label>
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([A-Za-z0-9ÑñáéíóúÁÉÍÓÚ ]+)\$")));
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 45
        echo "                ";
        // line 46
        echo "                    ";
        // line 47
        echo "                    ";
        // line 48
        echo "                ";
        // line 49
        echo "            ";
        // line 50
        echo "        ";
        // line 51
        echo "            <table align=\"center\">
                <tr>
                    <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff\" value=\"Editar\" /></td>
                </tr>
            </table>
    </div>
        ";
        // line 58
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    ";
        // line 60
        echo "    ";
        // line 61
        echo "        ";
        // line 62
        echo "        ";
        // line 63
        echo "    ";
        // line 64
        echo "        ";
        // line 65
        echo "    ";
        // line 66
        echo "    ";
        // line 67
        echo "
    ";
        // line 69
        echo "        ";
        // line 70
        echo "
        ";
        // line 72
        echo "        ";
        // line 73
        echo "
        ";
        // line 75
        echo "
        ";
        // line 77
        echo "            ";
        // line 78
        echo "                ";
        // line 79
        echo "            ";
        // line 80
        echo "        ";
        // line 81
        echo "    ";
        // line 82
        echo "    </div>
";
        
        $__internal_4cd8e97baca0681d9c2c158be1b3d23405c4833c26066acd9d85212f6be5ccae->leave($__internal_4cd8e97baca0681d9c2c158be1b3d23405c4833c26066acd9d85212f6be5ccae_prof);

    }

    public function getTemplateName()
    {
        return "base/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 82,  159 => 81,  157 => 80,  155 => 79,  153 => 78,  151 => 77,  148 => 75,  145 => 73,  143 => 72,  140 => 70,  138 => 69,  135 => 67,  133 => 66,  131 => 65,  129 => 64,  127 => 63,  125 => 62,  123 => 61,  121 => 60,  116 => 58,  108 => 51,  106 => 50,  104 => 49,  102 => 48,  100 => 47,  98 => 46,  96 => 45,  89 => 40,  78 => 32,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido%}*/
/*     {{ form_start(edit_form, {'method' :'POST'}) }}*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Editar Base</h3>*/
/*             </div><!-- /.user-block -->*/
/*             <div class="box-tools">*/
/*                 <ul class="list-inline">*/
/*                     <li>*/
/*                         <a class="text-info" href="{{ path('base_index') }}">*/
/*                             <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div><!-- /.box-tools -->*/
/*         </div><!-- /.box-header -->*/
/*         <div class="box-body">*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Nombre</label>*/
/*                         {{ form_widget(edit_form.nombre, {'attr' : {'class' : 'form-control','pattern':'([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Descripción</label>*/
/*                         {{ form_widget(edit_form.descripcion, {'attr' : {'class' : 'form-control','pattern':'([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Dirección</label>*/
/*                         {{ form_widget(edit_form.direccion, {'attr' : {'class' : 'form-control','pattern':'([A-Za-z0-9ÑñáéíóúÁÉÍÓÚ ]+)$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {#<div class="row">#}*/
/*                 {#<div class="col-sm-6">#}*/
/*                     {#<label class="col-sm-4 control-label"></label>#}*/
/*                     {#{{ form_widget(edit_form.Submit) }}#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div><!-- /.box-body -->#}*/
/*             <table align="center">*/
/*                 <tr>*/
/*                     <td><input type="submit" class="btn btn-danger btn " style="background-color: #6290ff" value="Editar" /></td>*/
/*                 </tr>*/
/*             </table>*/
/*     </div>*/
/*         {#<!-- /.box widget-->#}*/
/*     {{ form_end(edit_form) }}*/
/*     {#<h1>Editar Empresa</h1>#}*/
/*     {#{{ form_start(edit_form) }}#}*/
/*         {#{{ form_widget(edit_form) }}#}*/
/*         {#<input type="submit" value="Edit" />#}*/
/*     {#<a class="text-info" href="{{ path('base_index') }}">#}*/
/*         {#<i class="glyphicon glyphicon glyphicon-hand-left"></i> Atras</a>#}*/
/*     {#<a class="btn btn-sm btn-default" href="{{ path('base_index') }}">Cancelar</a>#}*/
/*     {#{{ form_end(edit_form) }}#}*/
/* */
/*     {#<ul>#}*/
/*         {#<li>#}*/
/* */
/*         {#</li>#}*/
/*         {#<li>#}*/
/* */
/*         {#</li>#}*/
/* */
/*         {#<li>#}*/
/*             {#{{ form_start(delete_form) }}#}*/
/*                 {#<input type="submit" value="Delete">#}*/
/*             {#{{ form_end(delete_form) }}#}*/
/*         {#</li>#}*/
/*     {#</ul>#}*/
/*     </div>*/
/* {% endblock %}*/
/* */
