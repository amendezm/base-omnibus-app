<?php

/* :trabajador:new.html.twig */
class __TwigTemplate_05ca25b99c464f6f6f9ed427becbda3c6f1be9feea8573d16cd36d56e6d9d867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":trabajador:new.html.twig", 1);
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
        $__internal_c6d75351693fbf3cb23b7211f959cabcc8b7c526bfecb15aff97ea440569b7a8 = $this->env->getExtension("native_profiler");
        $__internal_c6d75351693fbf3cb23b7211f959cabcc8b7c526bfecb15aff97ea440569b7a8->enter($__internal_c6d75351693fbf3cb23b7211f959cabcc8b7c526bfecb15aff97ea440569b7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":trabajador:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6d75351693fbf3cb23b7211f959cabcc8b7c526bfecb15aff97ea440569b7a8->leave($__internal_c6d75351693fbf3cb23b7211f959cabcc8b7c526bfecb15aff97ea440569b7a8_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_99f4d400396af8e3951c9fd203ee5c559f2b8f373b8eccdce0a1cdb09ca5672b = $this->env->getExtension("native_profiler");
        $__internal_99f4d400396af8e3951c9fd203ee5c559f2b8f373b8eccdce0a1cdb09ca5672b->enter($__internal_99f4d400396af8e3951c9fd203ee5c559f2b8f373b8eccdce0a1cdb09ca5672b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Nuevo Trabajador</h3>
            </div><!-- /.user-block -->
            <div class=\"box-tools\">
                <ul class=\"list-inline\">
                    <li>
                        <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("trabajador_index");
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
                        <label class=\"col-sm-4 control-label\">ID/Código</label>
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Nombre</label>
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">CI</label>
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ci", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]{11}")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Dirección</label>
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([A-Za-z0-9ÑñáéíóúÁÉÍÓÚ ]+)\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Cargo</label>
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cargo", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([A-Za-z0-9ÑñáéíóúÁÉÍÓÚ ]+)\$")));
        echo "
                    </div>
                </div>
            </div>
            <table align=\"center\">
                <tr align=\"\">
                    ";
        // line 63
        echo "                    ";
        // line 64
        echo "                    <td style=\"width: 10px\"> </td>
                    <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff;margin-right: 5%\" value=\"Crear\" /></td>
                    <td><a class= \"btn btn-danger btn \" onclick=\"window.history.back();\" href=\"\"><span class=\"\"> </span>Cancelar</a></td>            </tr>
                <tr align=\"\">
                    ";
        // line 69
        echo "
                </tr>
            </table>

        </div><!-- /.box widget-->
        ";
        // line 74
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        ";
        // line 76
        echo "
        ";
        // line 78
        echo "        ";
        // line 79
        echo "        ";
        // line 80
        echo "        ";
        // line 81
        echo "
        ";
        // line 83
        echo "        ";
        // line 84
        echo "        ";
        // line 85
        echo "        ";
        // line 86
        echo "        ";
        // line 87
        echo "    </div>
";
        
        $__internal_99f4d400396af8e3951c9fd203ee5c559f2b8f373b8eccdce0a1cdb09ca5672b->leave($__internal_99f4d400396af8e3951c9fd203ee5c559f2b8f373b8eccdce0a1cdb09ca5672b_prof);

    }

    public function getTemplateName()
    {
        return ":trabajador:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 87,  157 => 86,  155 => 85,  153 => 84,  151 => 83,  148 => 81,  146 => 80,  144 => 79,  142 => 78,  139 => 76,  135 => 74,  128 => 69,  122 => 64,  120 => 63,  111 => 56,  100 => 48,  89 => 40,  78 => 32,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido%}*/
/*     {{ form_start(form, {'method' :'POST'}) }}*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Nuevo Trabajador</h3>*/
/*             </div><!-- /.user-block -->*/
/*             <div class="box-tools">*/
/*                 <ul class="list-inline">*/
/*                     <li>*/
/*                         <a class="text-info" href="{{ path('trabajador_index') }}">*/
/*                             <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div><!-- /.box-tools -->*/
/*         </div><!-- /.box-header -->*/
/*         <div class="box-body">*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">ID/Código</label>*/
/*                         {{ form_widget(form.codigo, {'attr' : {'class' : '' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Nombre</label>*/
/*                         {{ form_widget(form.nombre, {'attr' : {'class' : 'form-control','pattern':'([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">CI</label>*/
/*                         {{ form_widget(form.ci, {'attr' : {'class' : 'form-control','pattern':'[0-9]{11}' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Dirección</label>*/
/*                         {{ form_widget(form.direccion, {'attr' : {'class' : 'form-control','pattern':'([A-Za-z0-9ÑñáéíóúÁÉÍÓÚ ]+)$'}})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Cargo</label>*/
/*                         {{ form_widget(form.cargo, {'attr' : {'class' : 'form-control','pattern':'([A-Za-z0-9ÑñáéíóúÁÉÍÓÚ ]+)$'}})}}*/
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
/*         {#<h1>Base creation</h1>#}*/
/* */
/*         {#{{ form_start(form) }}#}*/
/*         {#{{ form_widget(form) }}#}*/
/*         {#<input type="submit" value="Create" />#}*/
/*         {#{{ form_end(form) }}#}*/
/* */
/*         {#<ul>#}*/
/*         {#<li>#}*/
/*         {#<a href="{{ path('base_index') }}">Back to the list</a>#}*/
/*         {#</li>#}*/
/*         {#</ul>#}*/
/*     </div>*/
/* {% endblock %}*/
/* */
