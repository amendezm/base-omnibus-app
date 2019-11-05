<?php

/* :tipo_omnibus:new.html.twig */
class __TwigTemplate_1274101864fe4c818190d53f92f17fbb8dd12d23f050f97d14920f34f28d9190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":tipo_omnibus:new.html.twig", 1);
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
        $__internal_db5ca5a1c5d8322c48a9b3de2db2ef5e1da3f15888aaa85a38dcafaaab406a24 = $this->env->getExtension("native_profiler");
        $__internal_db5ca5a1c5d8322c48a9b3de2db2ef5e1da3f15888aaa85a38dcafaaab406a24->enter($__internal_db5ca5a1c5d8322c48a9b3de2db2ef5e1da3f15888aaa85a38dcafaaab406a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipo_omnibus:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db5ca5a1c5d8322c48a9b3de2db2ef5e1da3f15888aaa85a38dcafaaab406a24->leave($__internal_db5ca5a1c5d8322c48a9b3de2db2ef5e1da3f15888aaa85a38dcafaaab406a24_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_757cae7afad7ae686a51fa52131719be09b43322c19a2c9d6529a51cc03d9aa1 = $this->env->getExtension("native_profiler");
        $__internal_757cae7afad7ae686a51fa52131719be09b43322c19a2c9d6529a51cc03d9aa1->enter($__internal_757cae7afad7ae686a51fa52131719be09b43322c19a2c9d6529a51cc03d9aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "     ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Nuevo Tipo de Ómnibus</h3>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[A-Za-z]+\$")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacidad_sentados", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]{2,3}")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacidad_parados", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]{2,3}")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "indiceConsumoNormado", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([0-9,]+)\$")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "desviacion", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([0-9%]){2,3}")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadkmtsxlitro", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([0-9,]+)\$")));
        echo "
                </div>
            </div>
        </div>
        <table align=\"center\">
            <tr align=\"\">
                ";
        // line 71
        echo "                ";
        // line 72
        echo "                <td style=\"width: 10px\"> </td>
                <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff;margin-right: 5%\" value=\"Crear\" /></td>
                <td><a class= \"btn btn-danger btn \" onclick=\"window.history.back();\" href=\"\"><span class=\"\"> </span>Cancelar</a></td>
            </tr>
            <tr align=\"\">
                ";
        // line 78
        echo "
            </tr>
        </table>

    </div><!-- /.box widget-->
    ";
        // line 83
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_757cae7afad7ae686a51fa52131719be09b43322c19a2c9d6529a51cc03d9aa1->leave($__internal_757cae7afad7ae686a51fa52131719be09b43322c19a2c9d6529a51cc03d9aa1_prof);

    }

    public function getTemplateName()
    {
        return ":tipo_omnibus:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 83,  140 => 78,  133 => 72,  131 => 71,  122 => 64,  111 => 56,  100 => 48,  89 => 40,  78 => 32,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*      {{ form_start(form, {'method' :'POST'}) }}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Nuevo Tipo de Ómnibus</h3>*/
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
/*                     {{ form_widget(form.tipo, {'attr' : {'class' : 'form-control','pattern':'[A-Za-z]+$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Capacidad pasajeros sentados</label>*/
/*                     {{ form_widget(form.capacidad_sentados, {'attr' : {'class' : 'form-control','pattern':'[0-9]{2,3}' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Capacidad pasajeros parados</label>*/
/*                     {{ form_widget(form.capacidad_parados, {'attr' : {'class' : 'form-control','pattern':'[0-9]{2,3}' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Índice de Consumo Normado por Kms</label>*/
/*                     {{ form_widget(form.indiceConsumoNormado, {'attr' : {'class' : 'form-control','pattern':'([0-9,]+)$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">% de Desviación</label>*/
/*                     {{ form_widget(form.desviacion, {'attr' : {'class' : 'form-control','pattern':'([0-9%]){2,3}'  }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Cant de Kmts X Litro Combust. - norma</label>*/
/*                     {{ form_widget(form.cantidadkmtsxlitro, {'attr' : {'class' : 'form-control','pattern':'([0-9,]+)$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
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
/* {% endblock %}*/
/* {#<h1>Tipo_omnibus creation</h1>#}*/
/* */
/* {#{{ form_start(form) }}#}*/
/*         {#{{ form_widget(form) }}#}*/
/* {#<input type="submit" value="Create" />#}*/
/* {#{{ form_end(form) }}#}*/
/* */
/* {#<ul>#}*/
/*     {#<li>#}*/
/*         {#<a href="{{ path('tipo_omnibus_index') }}">Back to the list</a>#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
