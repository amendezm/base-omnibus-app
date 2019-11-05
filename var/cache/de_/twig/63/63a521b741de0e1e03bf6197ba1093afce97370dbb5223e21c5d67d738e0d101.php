<?php

/* :incidencia:new.html.twig */
class __TwigTemplate_9803d302f6c87b3eb9eb2039d989a8e8777ee33f2611d9c82f0669274dad3202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":incidencia:new.html.twig", 1);
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
        $__internal_78d036897a5a337dd9707b55cb065b90ee5e1406a1cd86259910be9f92bc50a6 = $this->env->getExtension("native_profiler");
        $__internal_78d036897a5a337dd9707b55cb065b90ee5e1406a1cd86259910be9f92bc50a6->enter($__internal_78d036897a5a337dd9707b55cb065b90ee5e1406a1cd86259910be9f92bc50a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":incidencia:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78d036897a5a337dd9707b55cb065b90ee5e1406a1cd86259910be9f92bc50a6->leave($__internal_78d036897a5a337dd9707b55cb065b90ee5e1406a1cd86259910be9f92bc50a6_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_4bce8923bc63cdfb14d6bf2e46bd79a37f774bcbd21b56c8c641742145df28d1 = $this->env->getExtension("native_profiler");
        $__internal_4bce8923bc63cdfb14d6bf2e46bd79a37f774bcbd21b56c8c641742145df28d1->enter($__internal_4bce8923bc63cdfb14d6bf2e46bd79a37f774bcbd21b56c8c641742145df28d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "   ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Nueva Incidencia</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("hojaruta_index");
        echo "\">
                        <i class=\"glyphicon glyphicon glyphicon-hand-left\"></i> Atràs</a>
                </li>
            </ul>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
\t<form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("incidencia_new", array("id_hojaruta" => $this->getAttribute((isset($context["hojaRuta"]) ? $context["hojaRuta"] : $this->getContext($context, "hojaRuta")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" >
    <div class=\"box-body\">
        ";
        // line 22
        echo "            ";
        // line 23
        echo "                ";
        // line 24
        echo "                    ";
        // line 25
        echo "                    ";
        // line 26
        echo "                ";
        // line 27
        echo "            ";
        // line 28
        echo "        ";
        // line 29
        echo "        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Incidencia</label>
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "detalles", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)\$")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">Tipo</label>
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Tipoincidencia", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                </div>
            </div>
        </div>

        <table align=\"center\">
            <tr align=\"\">
                ";
        // line 49
        echo "                ";
        // line 50
        echo "                <td style=\"width: 10px\"> </td>
                <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff;margin-right: 5%\" value=\"Crear\" /></td>
                <td><a class= \"btn btn-danger btn \" onclick=\"window.history.back();\" href=\"\"><span class=\"\"> </span>Cancelar</a></td>
            </tr>
            <tr align=\"\">
                ";
        // line 56
        echo "
            </tr>
        </table>

    </div><!-- /.box widget-->
    ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</form>
</div>
    ";
        
        $__internal_4bce8923bc63cdfb14d6bf2e46bd79a37f774bcbd21b56c8c641742145df28d1->leave($__internal_4bce8923bc63cdfb14d6bf2e46bd79a37f774bcbd21b56c8c641742145df28d1_prof);

    }

    public function getTemplateName()
    {
        return ":incidencia:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 61,  117 => 56,  110 => 50,  108 => 49,  98 => 41,  87 => 33,  81 => 29,  79 => 28,  77 => 27,  75 => 26,  73 => 25,  71 => 24,  69 => 23,  67 => 22,  62 => 19,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*    {{ form_start(form, {'method' :'POST'}) }}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Nueva Incidencia</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a href="{{ path('hojaruta_index') }}">*/
/*                         <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.box-tools -->*/
/*     </div><!-- /.box-header -->*/
/* 	<form action="{{ path('incidencia_new',{ 'id_hojaruta': hojaRuta.id }) }}" method="post" >*/
/*     <div class="box-body">*/
/*         {#<div class="row">#}*/
/*             {#<div class="col-sm-6">#}*/
/*                 {#<div class="form-group">#}*/
/*                     {#<label class="col-sm-4 control-label">No. Hoja de ruta</label>#}*/
/*                     {#{{ form_widget(form.NoHojaRuta, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Incidencia</label>*/
/*                     {{ form_widget(form.detalles, {'attr' : {'class' : 'form-control','pattern':'([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)$' }})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-4 control-label">Tipo</label>*/
/*                     {{ form_widget(form.Tipoincidencia, {'attr' : {'class' : ''}})}}*/
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
/* 	</form>*/
/* </div>*/
/*     {% endblock %}*/
/* */
