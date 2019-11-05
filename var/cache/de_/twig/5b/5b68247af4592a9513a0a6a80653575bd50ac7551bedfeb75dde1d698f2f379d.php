<?php

/* :recaudacion:new.html.twig */
class __TwigTemplate_08a3a49f04e99f396acfc23893f585ef1c78fb32f46998340cb6964c6b3a83f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":recaudacion:new.html.twig", 1);
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
        $__internal_8a18efd41b542c14390a5e4ec52b51fba9b3db15ee225ac361acf0bfab3c3711 = $this->env->getExtension("native_profiler");
        $__internal_8a18efd41b542c14390a5e4ec52b51fba9b3db15ee225ac361acf0bfab3c3711->enter($__internal_8a18efd41b542c14390a5e4ec52b51fba9b3db15ee225ac361acf0bfab3c3711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":recaudacion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a18efd41b542c14390a5e4ec52b51fba9b3db15ee225ac361acf0bfab3c3711->leave($__internal_8a18efd41b542c14390a5e4ec52b51fba9b3db15ee225ac361acf0bfab3c3711_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_b1f58ab71d8110069b7b8ffdbcb59c4b5ac44fc21c2145c2e65fac8b77e01a7b = $this->env->getExtension("native_profiler");
        $__internal_b1f58ab71d8110069b7b8ffdbcb59c4b5ac44fc21c2145c2e65fac8b77e01a7b->enter($__internal_b1f58ab71d8110069b7b8ffdbcb59c4b5ac44fc21c2145c2e65fac8b77e01a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Nueva Recaudación</h3>
            </div><!-- /.user-block -->
            <div class=\"box-tools\">
                <ul class=\"list-inline\">
                    <li>
                        <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("recaudacion_index");
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
                        <label class=\"col-sm-4 control-label\">No.HojaRuta</label>
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hojaRuta", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">No.sello</label>
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "noSello", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">No.vale</label>
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "noVale", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Recaudación</label>
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recaudacion", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([0-9,]+)\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Recaudador</label>
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recaudador", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Fecha</label>
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Hora</label>
                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hora", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                    </div>
                </div>
            </div>
            <table align=\"center\">
                <tr align=\"\">
                    ";
        // line 79
        echo "                    ";
        // line 80
        echo "                    <td style=\"width: 10px\"> </td>
                    <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff;margin-right: 5%\" value=\"Crear\" /></td>
                    <td><a class= \"btn btn-danger btn \" onclick=\"window.history.back();\" href=\"\"><span class=\"\"> </span>Cancelar</a></td>            </tr>
                <tr align=\"\">
                    ";
        // line 85
        echo "
                </tr>
            </table>

        </div><!-- /.box widget-->
        ";
        // line 90
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_b1f58ab71d8110069b7b8ffdbcb59c4b5ac44fc21c2145c2e65fac8b77e01a7b->leave($__internal_b1f58ab71d8110069b7b8ffdbcb59c4b5ac44fc21c2145c2e65fac8b77e01a7b_prof);

    }

    public function getTemplateName()
    {
        return ":recaudacion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 90,  150 => 85,  144 => 80,  142 => 79,  133 => 72,  122 => 64,  111 => 56,  100 => 48,  89 => 40,  78 => 32,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido%}*/
/*     {{ form_start(form, {'method' :'POST'}) }}*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Nueva Recaudación</h3>*/
/*             </div><!-- /.user-block -->*/
/*             <div class="box-tools">*/
/*                 <ul class="list-inline">*/
/*                     <li>*/
/*                         <a class="text-info" href="{{ path('recaudacion_index') }}">*/
/*                             <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div><!-- /.box-tools -->*/
/*         </div><!-- /.box-header -->*/
/*         <div class="box-body">*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">No.HojaRuta</label>*/
/*                         {{ form_widget(form.hojaRuta, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">No.sello</label>*/
/*                         {{ form_widget(form.noSello, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">No.vale</label>*/
/*                         {{ form_widget(form.noVale, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Recaudación</label>*/
/*                         {{ form_widget(form.recaudacion, {'attr' : {'class' : 'form-control','pattern':'([0-9,]+)$'}})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Recaudador</label>*/
/*                         {{ form_widget(form.recaudador, {'attr' : {'class' : 'form-control','pattern':'([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)$'}})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Fecha</label>*/
/*                         {{ form_widget(form.fecha, {'attr' : {'class' : ''}})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Hora</label>*/
/*                         {{ form_widget(form.hora, {'attr' : {'class' : ''}})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <table align="center">*/
/*                 <tr align="">*/
/*                     {#<td></td>#}*/
/*                     {#<td  >   {{ form_widget(form.Submit) }}</td>#}*/
/*                     <td style="width: 10px"> </td>*/
/*                     <td><input type="submit" class="btn btn-danger btn " style="background-color: #6290ff;margin-right: 5%" value="Crear" /></td>*/
/*                     <td><a class= "btn btn-danger btn " onclick="window.history.back();" href=""><span class=""> </span>Cancelar</a></td>            </tr>*/
/*                 <tr align="">*/
/*                     {#<td style="width: 0px"> </td>#}*/
/* */
/*                 </tr>*/
/*             </table>*/
/* */
/*         </div><!-- /.box widget-->*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
