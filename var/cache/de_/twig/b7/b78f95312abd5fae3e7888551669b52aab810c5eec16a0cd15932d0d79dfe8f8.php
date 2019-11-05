<?php

/* :recaudacion:edit.html.twig */
class __TwigTemplate_81a797e64c5b3d80660d644cd4ae9621a73eba0b45ab4c07f76d84dcf30317f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":recaudacion:edit.html.twig", 1);
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
        $__internal_2203513d23713458c50068e5bee3435f8b0d69b3e0e528eabdfa4a95a73c5ce7 = $this->env->getExtension("native_profiler");
        $__internal_2203513d23713458c50068e5bee3435f8b0d69b3e0e528eabdfa4a95a73c5ce7->enter($__internal_2203513d23713458c50068e5bee3435f8b0d69b3e0e528eabdfa4a95a73c5ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":recaudacion:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2203513d23713458c50068e5bee3435f8b0d69b3e0e528eabdfa4a95a73c5ce7->leave($__internal_2203513d23713458c50068e5bee3435f8b0d69b3e0e528eabdfa4a95a73c5ce7_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_7f8ea7c7c0baef9a5f6a8afda108be34ddc325027485920ca5717247586f50b3 = $this->env->getExtension("native_profiler");
        $__internal_7f8ea7c7c0baef9a5f6a8afda108be34ddc325027485920ca5717247586f50b3->enter($__internal_7f8ea7c7c0baef9a5f6a8afda108be34ddc325027485920ca5717247586f50b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("method" => "POST"));
        echo "
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Editar Recaudación</h3>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "hojaRuta", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "noSello", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "noVale", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]+\$")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "recaudacion", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([0-9,]+)\$")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "recaudador", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)\$")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fecha", array()), 'widget', array("attr" => array("class" => "")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "hora", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                    </div>
                </div>
            </div>
            <table align=\"center\">
                <tr>
                    <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff\" value=\"Editar\" /></td>
                </tr>
            </table>

        </div><!-- /.box widget-->
        ";
        // line 83
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_7f8ea7c7c0baef9a5f6a8afda108be34ddc325027485920ca5717247586f50b3->leave($__internal_7f8ea7c7c0baef9a5f6a8afda108be34ddc325027485920ca5717247586f50b3_prof);

    }

    public function getTemplateName()
    {
        return ":recaudacion:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 83,  133 => 72,  122 => 64,  111 => 56,  100 => 48,  89 => 40,  78 => 32,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido%}*/
/*     {{ form_start(edit_form, {'method' :'POST'}) }}*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Editar Recaudación</h3>*/
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
/*                         {{ form_widget(edit_form.hojaRuta, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">No.sello</label>*/
/*                         {{ form_widget(edit_form.noSello, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">No.vale</label>*/
/*                         {{ form_widget(edit_form.noVale, {'attr' : {'class' : 'form-control','pattern':'[0-9]+$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Recaudación</label>*/
/*                         {{ form_widget(edit_form.recaudacion, {'attr' : {'class' : 'form-control','pattern':'([0-9,]+)$'}})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Recaudador</label>*/
/*                         {{ form_widget(edit_form.recaudador, {'attr' : {'class' : 'form-control','pattern':'([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)$'}})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Fecha</label>*/
/*                         {{ form_widget(edit_form.fecha, {'attr' : {'class' : ''}})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Hora</label>*/
/*                         {{ form_widget(edit_form.hora, {'attr' : {'class' : ''}})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <table align="center">*/
/*                 <tr>*/
/*                     <td><input type="submit" class="btn btn-danger btn " style="background-color: #6290ff" value="Editar" /></td>*/
/*                 </tr>*/
/*             </table>*/
/* */
/*         </div><!-- /.box widget-->*/
/*         {{ form_end(edit_form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
