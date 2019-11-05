<?php

/* :tipoincidencia:new.html.twig */
class __TwigTemplate_21e046bab044e0fc0f71d14ab97b1815afcc9b688fe9bd39bb9b25b80b7bec81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":tipoincidencia:new.html.twig", 1);
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
        $__internal_01228e588549ae1fe4196b104d6669ec452bcb7f8e2eb867dd2280d9dfcfc52a = $this->env->getExtension("native_profiler");
        $__internal_01228e588549ae1fe4196b104d6669ec452bcb7f8e2eb867dd2280d9dfcfc52a->enter($__internal_01228e588549ae1fe4196b104d6669ec452bcb7f8e2eb867dd2280d9dfcfc52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipoincidencia:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01228e588549ae1fe4196b104d6669ec452bcb7f8e2eb867dd2280d9dfcfc52a->leave($__internal_01228e588549ae1fe4196b104d6669ec452bcb7f8e2eb867dd2280d9dfcfc52a_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_3c248e1fcbaf4da79df2e17d01a05ce89641a90d15458646bdcd9318481256a4 = $this->env->getExtension("native_profiler");
        $__internal_3c248e1fcbaf4da79df2e17d01a05ce89641a90d15458646bdcd9318481256a4->enter($__internal_3c248e1fcbaf4da79df2e17d01a05ce89641a90d15458646bdcd9318481256a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Nuevo Tipo de Incidencia</h3>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoIncidencias", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
        <table align=\"center\">
            <tr align=\"\">
                ";
        // line 31
        echo "                ";
        // line 32
        echo "                <td style=\"width: 10px\"> </td>
                <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff;margin-right: 5%\" value=\"Crear\" /></td>
                <td><a class= \"btn btn-danger btn \" onclick=\"window.history.back();\" href=\"\"><span class=\"\"> </span>Cancelar</a></td>
            </tr>
            <tr align=\"\">
                ";
        // line 38
        echo "
            </tr>
        </table>

    </div><!-- /.box widget-->
    ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_3c248e1fcbaf4da79df2e17d01a05ce89641a90d15458646bdcd9318481256a4->leave($__internal_3c248e1fcbaf4da79df2e17d01a05ce89641a90d15458646bdcd9318481256a4_prof);

    }

    public function getTemplateName()
    {
        return ":tipoincidencia:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 43,  85 => 38,  78 => 32,  76 => 31,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     {{ form_start(form, {'method' :'POST'}) }}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Nuevo Tipo de Incidencia</h3>*/
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
/*                     {{ form_widget(form.tipoIncidencias, {'attr' : {'class' : 'form-control' }})}}*/
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
/* </div>*/
/* {% endblock %}*/
/* {#<h1>TipoIncidencia creation</h1>#}*/
/* */
/* {#{{ form_start(form) }}#}*/
/*         {#{{ form_widget(form) }}#}*/
/* {#<input type="submit" value="Create" />#}*/
/* {#{{ form_end(form) }}#}*/
/* */
/* {#<ul>#}*/
/*     {#<li>#}*/
/*         {#<a href="{{ path('tipoincidencia_index') }}">Back to the list</a>#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
