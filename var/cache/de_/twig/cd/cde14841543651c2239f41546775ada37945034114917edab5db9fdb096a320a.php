<?php

/* :tipocombustible:new.html.twig */
class __TwigTemplate_e239e1e0587c45c597e172a98ec7d133a072752cc57123fd8b861c09e655c807 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":tipocombustible:new.html.twig", 1);
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
        $__internal_7fe8112d2a21a58f55b80b1942a0680474b305f5dfb47f47efcb1c37e67840d3 = $this->env->getExtension("native_profiler");
        $__internal_7fe8112d2a21a58f55b80b1942a0680474b305f5dfb47f47efcb1c37e67840d3->enter($__internal_7fe8112d2a21a58f55b80b1942a0680474b305f5dfb47f47efcb1c37e67840d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipocombustible:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fe8112d2a21a58f55b80b1942a0680474b305f5dfb47f47efcb1c37e67840d3->leave($__internal_7fe8112d2a21a58f55b80b1942a0680474b305f5dfb47f47efcb1c37e67840d3_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_447885d62d90b23352815a1a55f99cab8642998116462d6095361217e0c86e38 = $this->env->getExtension("native_profiler");
        $__internal_447885d62d90b23352815a1a55f99cab8642998116462d6095361217e0c86e38->enter($__internal_447885d62d90b23352815a1a55f99cab8642998116462d6095361217e0c86e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Nuevo Tipo de Combustible</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tipocombustible_index");
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'widget', array("attr" => array("class" => "form-control")));
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
";
        
        $__internal_447885d62d90b23352815a1a55f99cab8642998116462d6095361217e0c86e38->leave($__internal_447885d62d90b23352815a1a55f99cab8642998116462d6095361217e0c86e38_prof);

    }

    public function getTemplateName()
    {
        return ":tipocombustible:new.html.twig";
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
/*         {{ form_start(form, {'method' :'POST'}) }}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Nuevo Tipo de Combustible</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('tipocombustible_index') }}">*/
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
/*                     {{ form_widget(form.tipo, {'attr' : {'class' : 'form-control' }})}}*/
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
/* {#<h1>TipoCombustible creation</h1>#}*/
/* */
/* {#{{ form_start(form) }}#}*/
/*         {#{{ form_widget(form) }}#}*/
/* {#<input type="submit" value="Create" />#}*/
/* {#{{ form_end(form) }}#}*/
/* */
/* {#<ul>#}*/
/*     {#<li>#}*/
/*         {#<a href="{{ path('tipocombustible_index') }}">Back to the list</a>#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
