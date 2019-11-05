<?php

/* :base:new.html.twig */
class __TwigTemplate_833555307ea7a0d9fa173f5b45c0598be13dc14c6e7b73e5c1a66b6785b1d283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":base:new.html.twig", 1);
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
        $__internal_b8ddea53e67bd6eb569c35eb3148f0ae7968a7a0686fd394c8221ed10e3a34a3 = $this->env->getExtension("native_profiler");
        $__internal_b8ddea53e67bd6eb569c35eb3148f0ae7968a7a0686fd394c8221ed10e3a34a3->enter($__internal_b8ddea53e67bd6eb569c35eb3148f0ae7968a7a0686fd394c8221ed10e3a34a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":base:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8ddea53e67bd6eb569c35eb3148f0ae7968a7a0686fd394c8221ed10e3a34a3->leave($__internal_b8ddea53e67bd6eb569c35eb3148f0ae7968a7a0686fd394c8221ed10e3a34a3_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_dade6186a49fd8d78cebef70b34640984011c81c9635f370ad25a7654634277a = $this->env->getExtension("native_profiler");
        $__internal_dade6186a49fd8d78cebef70b34640984011c81c9635f370ad25a7654634277a->enter($__internal_dade6186a49fd8d78cebef70b34640984011c81c9635f370ad25a7654634277a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Nueva Base</h3>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Direccion</label>
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>

        <table align=\"center\">
            <tr align=\"\">
                ";
        // line 48
        echo "                ";
        // line 49
        echo "                <td style=\"width: 10px\"> </td>
                <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff;margin-right: 5%\" value=\"Crear\" /></td>
                <td><a class= \"btn btn-danger btn \" onclick=\"window.history.back();\" href=\"\"><span class=\"\"> </span>Cancelar</a></td>            </tr>
            <tr align=\"\">
                ";
        // line 54
        echo "
            </tr>
        </table>

    </div><!-- /.box widget-->
    ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        // line 61
        echo "
    ";
        // line 63
        echo "        ";
        // line 64
        echo "        ";
        // line 65
        echo "    ";
        // line 66
        echo "
    ";
        // line 68
        echo "        ";
        // line 69
        echo "            ";
        // line 70
        echo "        ";
        // line 71
        echo "    ";
        // line 72
        echo "</div>
";
        
        $__internal_dade6186a49fd8d78cebef70b34640984011c81c9635f370ad25a7654634277a->leave($__internal_dade6186a49fd8d78cebef70b34640984011c81c9635f370ad25a7654634277a_prof);

    }

    public function getTemplateName()
    {
        return ":base:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 72,  136 => 71,  134 => 70,  132 => 69,  130 => 68,  127 => 66,  125 => 65,  123 => 64,  121 => 63,  118 => 61,  114 => 59,  107 => 54,  101 => 49,  99 => 48,  89 => 40,  78 => 32,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido%}*/
/*     {{ form_start(form, {'method' :'POST'}) }}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Nueva Base</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('base_index') }}">*/
/*                         <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.box-tools -->*/
/*     </div><!-- /.box-header -->*/
/*     <div class="box-body">*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Nombre</label>*/
/*                     {{ form_widget(form.nombre, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Descripción</label>*/
/*                     {{ form_widget(form.descripcion, {'attr' : {'class' : 'form-control' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Direccion</label>*/
/*                     {{ form_widget(form.direccion, {'attr' : {'class' : 'form-control'}})}}*/
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
/*                 <td><a class= "btn btn-danger btn " onclick="window.history.back();" href=""><span class=""> </span>Cancelar</a></td>            </tr>*/
/*             <tr align="">*/
/*                 {#<td style="width: 0px"> </td>#}*/
/* */
/*             </tr>*/
/*         </table>*/
/* */
/*     </div><!-- /.box widget-->*/
/*     {{ form_end(form) }}*/
/*     {#<h1>Base creation</h1>#}*/
/* */
/*     {#{{ form_start(form) }}#}*/
/*         {#{{ form_widget(form) }}#}*/
/*         {#<input type="submit" value="Create" />#}*/
/*     {#{{ form_end(form) }}#}*/
/* */
/*     {#<ul>#}*/
/*         {#<li>#}*/
/*             {#<a href="{{ path('base_index') }}">Back to the list</a>#}*/
/*         {#</li>#}*/
/*     {#</ul>#}*/
/* </div>*/
/* {% endblock %}*/
/* */
