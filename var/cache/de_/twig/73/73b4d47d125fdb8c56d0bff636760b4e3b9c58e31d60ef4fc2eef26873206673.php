<?php

/* :tipoincidencia:edit.html.twig */
class __TwigTemplate_b2b05141d4763265d0ef842b6a5a072d3d60c2aab9e40d572f852c998c5e7b60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":tipoincidencia:edit.html.twig", 1);
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
        $__internal_ad8dc000830fcf58622cd4a168ee4781b04162fc0b7be445adb35ddbc82349dc = $this->env->getExtension("native_profiler");
        $__internal_ad8dc000830fcf58622cd4a168ee4781b04162fc0b7be445adb35ddbc82349dc->enter($__internal_ad8dc000830fcf58622cd4a168ee4781b04162fc0b7be445adb35ddbc82349dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipoincidencia:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad8dc000830fcf58622cd4a168ee4781b04162fc0b7be445adb35ddbc82349dc->leave($__internal_ad8dc000830fcf58622cd4a168ee4781b04162fc0b7be445adb35ddbc82349dc_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_8880e24154fea5a0f53622bfbcd77cac4147af94b010f529c5fca01f20919c5f = $this->env->getExtension("native_profiler");
        $__internal_8880e24154fea5a0f53622bfbcd77cac4147af94b010f529c5fca01f20919c5f->enter($__internal_8880e24154fea5a0f53622bfbcd77cac4147af94b010f529c5fca01f20919c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "   ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("method" => "POST"));
        echo "
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Editar Tipo de Incidencias</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tipoincidencia_index");
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipoIncidencias", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>

        ";
        // line 30
        echo "        ";
        // line 31
        echo "        ";
        // line 32
        echo "        ";
        // line 33
        echo "        ";
        // line 34
        echo "        ";
        // line 35
        echo "        ";
        // line 36
        echo "        <table align=\"center\">
            <tr>
                <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff\" value=\"Editar\" /></td>
            </tr>
        </table>
    </div>
    ";
        // line 43
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
";
        
        $__internal_8880e24154fea5a0f53622bfbcd77cac4147af94b010f529c5fca01f20919c5f->leave($__internal_8880e24154fea5a0f53622bfbcd77cac4147af94b010f529c5fca01f20919c5f_prof);

    }

    public function getTemplateName()
    {
        return ":tipoincidencia:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 43,  87 => 36,  85 => 35,  83 => 34,  81 => 33,  79 => 32,  77 => 31,  75 => 30,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*    {{ form_start(edit_form, {'method' :'POST'}) }}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Editar Tipo de Incidencias</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('tipoincidencia_index') }}">*/
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
/*                     {{ form_widget(edit_form.tipoIncidencias, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
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
/* {% endblock %}*/
/* {#<h1>TipoIncidencia edit</h1>#}*/
/* */
/* {#{{ form_start(edit_form) }}#}*/
/*         {#{{ form_widget(edit_form) }}#}*/
/* {#<input type="submit" value="Edit" />#}*/
/* {#{{ form_end(edit_form) }}#}*/
/* */
/* {#<ul>#}*/
/*     {#<li>#}*/
/*         {#<a href="{{ path('tipoincidencia_index') }}">Back to the list</a>#}*/
/*     {#</li>#}*/
/*     {#<li>#}*/
/*         {#{{ form_start(delete_form) }}#}*/
/*         {#<input type="submit" value="Delete">#}*/
/*         {#{{ form_end(delete_form) }}#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
