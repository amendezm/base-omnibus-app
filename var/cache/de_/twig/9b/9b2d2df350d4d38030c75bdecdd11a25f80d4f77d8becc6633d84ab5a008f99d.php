<?php

/* gps/edit.html.twig */
class __TwigTemplate_94457eb090a81da08d5df81f6f557aa809544230cc380dbc1e13359e779387f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "gps/edit.html.twig", 1);
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
        $__internal_255e02c61c78dd86555beff3280e34ee0d86060c246cc50aec0078417f53ed02 = $this->env->getExtension("native_profiler");
        $__internal_255e02c61c78dd86555beff3280e34ee0d86060c246cc50aec0078417f53ed02->enter($__internal_255e02c61c78dd86555beff3280e34ee0d86060c246cc50aec0078417f53ed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gps/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_255e02c61c78dd86555beff3280e34ee0d86060c246cc50aec0078417f53ed02->leave($__internal_255e02c61c78dd86555beff3280e34ee0d86060c246cc50aec0078417f53ed02_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_539bb2bfba8c73c44f755735fc117237296c67869ff119505c4257cc57de0401 = $this->env->getExtension("native_profiler");
        $__internal_539bb2bfba8c73c44f755735fc117237296c67869ff119505c4257cc57de0401->enter($__internal_539bb2bfba8c73c44f755735fc117237296c67869ff119505c4257cc57de0401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("method" => "POST"));
        echo "
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Editar Reporte del GPS</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("gps_index");
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
                    <label class=\"col-sm-4 control-label\">Ómnibus</label>
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "omnibus", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Combustible</label>
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "combustible", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([0-9,]+)\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Kms Recorridos</label>
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "kmRecorridos", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([0-9,]+)\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Fecha</label>
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fecha", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 53
        echo "        ";
        // line 54
        echo "        ";
        // line 55
        echo "        ";
        // line 56
        echo "        ";
        // line 57
        echo "        ";
        // line 58
        echo "        ";
        // line 59
        echo "        <table align=\"center\">
            <tr>
                <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff\" value=\"Editar\" /></td>
            </tr>
        </table>
    </div>
    ";
        // line 66
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    ";
        
        $__internal_539bb2bfba8c73c44f755735fc117237296c67869ff119505c4257cc57de0401->leave($__internal_539bb2bfba8c73c44f755735fc117237296c67869ff119505c4257cc57de0401_prof);

    }

    public function getTemplateName()
    {
        return "gps/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 66,  119 => 59,  117 => 58,  115 => 57,  113 => 56,  111 => 55,  109 => 54,  107 => 53,  100 => 48,  89 => 40,  78 => 32,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido%}*/
/*     {{ form_start(edit_form, {'method' :'POST'}) }}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Editar Reporte del GPS</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('gps_index') }}">*/
/*                         <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.box-tools -->*/
/*     </div><!-- /.box-header -->*/
/*     <div class="box-body">*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Ómnibus</label>*/
/*                     {{ form_widget(edit_form.omnibus, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Combustible</label>*/
/*                     {{ form_widget(edit_form.combustible, {'attr' : {'class' : 'form-control','pattern':'([0-9,]+)$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Kms Recorridos</label>*/
/*                     {{ form_widget(edit_form.kmRecorridos, {'attr' : {'class' : 'form-control','pattern':'([0-9,]+)$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Fecha</label>*/
/*                     {{ form_widget(edit_form.fecha, {'attr' : {'class' : '' }})}}*/
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
/* */
/*     {% endblock %}*/
/* */
