<?php

/* :trabajador:edit.html.twig */
class __TwigTemplate_e80f58bb20e18887a5844d014fcd37cf7b6cd9de8e42ad9531a7773d6a3d309e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":trabajador:edit.html.twig", 1);
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
        $__internal_74542b618691f43db77a1ec5232d33bcf5cddb64d9940a9da58cddd3213d4e8f = $this->env->getExtension("native_profiler");
        $__internal_74542b618691f43db77a1ec5232d33bcf5cddb64d9940a9da58cddd3213d4e8f->enter($__internal_74542b618691f43db77a1ec5232d33bcf5cddb64d9940a9da58cddd3213d4e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":trabajador:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74542b618691f43db77a1ec5232d33bcf5cddb64d9940a9da58cddd3213d4e8f->leave($__internal_74542b618691f43db77a1ec5232d33bcf5cddb64d9940a9da58cddd3213d4e8f_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_56256799b9b4537314b56e5d0ad8dc73f28e85601d6400e3806cc87aa8067c99 = $this->env->getExtension("native_profiler");
        $__internal_56256799b9b4537314b56e5d0ad8dc73f28e85601d6400e3806cc87aa8067c99->enter($__internal_56256799b9b4537314b56e5d0ad8dc73f28e85601d6400e3806cc87aa8067c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("method" => "POST"));
        echo "
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Editar Trabjador</h3>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "codigo", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)\$")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ci", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "[0-9]{11}")));
        echo "
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Dirección</label>
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([A-Za-z0-9ÑñáéíóúÁÉÍÓÚ ]+)\$")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\">Cargo</label>
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cargo", array()), 'widget', array("attr" => array("class" => "form-control", "pattern" => "([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)\$")));
        echo "
                    </div>
                </div>
            </div>
            <table align=\"center\">
                <tr>
                    <td><input type=\"submit\" class=\"btn btn-danger btn \" style=\"background-color: #6290ff\" value=\"Editar\" /></td>
                </tr>
            </table>
        </div>
        ";
        // line 68
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_56256799b9b4537314b56e5d0ad8dc73f28e85601d6400e3806cc87aa8067c99->leave($__internal_56256799b9b4537314b56e5d0ad8dc73f28e85601d6400e3806cc87aa8067c99_prof);

    }

    public function getTemplateName()
    {
        return ":trabajador:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 68,  112 => 57,  101 => 49,  89 => 40,  78 => 32,  67 => 24,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido%}*/
/*     {{ form_start(edit_form, {'method' :'POST'}) }}*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Editar Trabjador</h3>*/
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
/*                         {{ form_widget(edit_form.codigo, {'attr' : {'class' : 'form-control' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Nombre</label>*/
/*                         {{ form_widget(edit_form.nombre, {'attr' : {'class' : 'form-control','pattern':'([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">CI</label>*/
/*                         {{ form_widget(edit_form.ci, {'attr' : {'class' : 'form-control','pattern':'[0-9]{11}'}})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Dirección</label>*/
/*                         {{ form_widget(edit_form.direccion, {'attr' : {'class' : 'form-control','pattern':'([A-Za-z0-9ÑñáéíóúÁÉÍÓÚ ]+)$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label">Cargo</label>*/
/*                         {{ form_widget(edit_form.cargo, {'attr' : {'class' : 'form-control','pattern':'([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)$' }})}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <table align="center">*/
/*                 <tr>*/
/*                     <td><input type="submit" class="btn btn-danger btn " style="background-color: #6290ff" value="Editar" /></td>*/
/*                 </tr>*/
/*             </table>*/
/*         </div>*/
/*         {#<!-- /.box widget-->#}*/
/*         {{ form_end(edit_form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
