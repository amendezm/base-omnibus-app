<?php

/* usuario/edit.html.twig */
class __TwigTemplate_8c88e1ba9c4ef1b098e8ed4a6143ad004352dcf4377097a41ebcf9ae78d39c59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "usuario/edit.html.twig", 1);
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
        $__internal_c354b7bf93679ef4fc81d09b85dcbc2223799d041c77c905bb164bed390ae828 = $this->env->getExtension("native_profiler");
        $__internal_c354b7bf93679ef4fc81d09b85dcbc2223799d041c77c905bb164bed390ae828->enter($__internal_c354b7bf93679ef4fc81d09b85dcbc2223799d041c77c905bb164bed390ae828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c354b7bf93679ef4fc81d09b85dcbc2223799d041c77c905bb164bed390ae828->leave($__internal_c354b7bf93679ef4fc81d09b85dcbc2223799d041c77c905bb164bed390ae828_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_be99f0eebf806adea9a4f46edccc7e23a9e87270565cac7693a0923ba5a6a968 = $this->env->getExtension("native_profiler");
        $__internal_be99f0eebf806adea9a4f46edccc7e23a9e87270565cac7693a0923ba5a6a968->enter($__internal_be99f0eebf806adea9a4f46edccc7e23a9e87270565cac7693a0923ba5a6a968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 5
            echo "        <div class=\"flash-notice\">
            <div class=\"alert alert-success\"><i class=\"glyphicon glyphicon-ok\"></i> ";
            // line 6
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 10
            echo "        <div class=\"flash-notice\">
            <div class=\"alert alert-danger\"><i class=\"glyphicon glyphicon-remove\"></i> ";
            // line 11
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <div class=\"col-md-6 col-lg-offset-3\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"> <i
                            class=\"glyphicon glyphicon-edit\"></i> Editar Usuario ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuario", array()), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"\">
                        ";
        // line 23
        if (array_key_exists("error", $context)) {
            // line 24
            echo "                            <div class=\"alert_error\">
                                ";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 28
        echo "                        ";
        if ( !twig_test_empty($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "usuario", array()), 'errors'))) {
            // line 29
            echo "                            <div class=\"alert_error\">
                                ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "usuario", array()), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 33
        echo "                        <div class=\"form-group\">
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "usuario", array()), 'label', array("label" => "Usuario"));
        echo "
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "usuario", array()), 'errors');
        echo "
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "usuario", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), 'label', array("label" => "Contraseña"));
        echo "
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), 'errors');
        echo "

                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "true")));
        echo "
                        </div>
                        <div class=\"form-group\">

                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), 'label', array("label" => "Repetir Contraseña"));
        echo "
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), 'errors');
        echo "
                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "true")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "roles", array()), 'label', array("label" => "Rol"));
        echo "
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "roles", array()), 'errors');
        echo "
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "roles", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">

                            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isActive", array()), 'label', array("label" => "Activado"));
        echo "
                            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isActive", array()), 'errors');
        echo "
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isActive", array()), 'widget');
        echo "
                        </div>

                        ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

                        <button class=\"btn btn-small btn-primary pull-right\" type=\"submit\"><i
                                    class=\"glyphicon glyphicon-save\"></i> Guardar
                        </button>

                        <a class=\"btn btn-small btn-danger\" href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("usuario_index");
        echo "\"><i
                                    class=\"glyphicon glyphicon-remove\"></i> Cancelar</a>

                    </div>
                </form>

            </div>
        </div>
    </div>


";
        
        $__internal_be99f0eebf806adea9a4f46edccc7e23a9e87270565cac7693a0923ba5a6a968->leave($__internal_be99f0eebf806adea9a4f46edccc7e23a9e87270565cac7693a0923ba5a6a968_prof);

    }

    public function getTemplateName()
    {
        return "usuario/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 68,  190 => 62,  184 => 59,  180 => 58,  176 => 57,  169 => 53,  165 => 52,  161 => 51,  155 => 48,  151 => 47,  147 => 46,  140 => 42,  135 => 40,  131 => 39,  125 => 36,  121 => 35,  117 => 34,  114 => 33,  108 => 30,  105 => 29,  102 => 28,  96 => 25,  93 => 24,  91 => 23,  86 => 21,  80 => 18,  74 => 14,  65 => 11,  62 => 10,  57 => 9,  48 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido%}*/
/*     {% for flash_message in app.session.flashbag.get('notice') %}*/
/*         <div class="flash-notice">*/
/*             <div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> {{ flash_message }}</div>*/
/*         </div>*/
/*     {% endfor %}*/
/*     {% for flash_message in app.session.flashbag.get('error') %}*/
/*         <div class="flash-notice">*/
/*             <div class="alert alert-danger"><i class="glyphicon glyphicon-remove"></i> {{ flash_message }}</div>*/
/*         </div>*/
/*     {% endfor %}*/
/*     <div class="col-md-6 col-lg-offset-3">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"> <i*/
/*                             class="glyphicon glyphicon-edit"></i> Editar Usuario {{ usuario.usuario }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ path('usuario_edit', {'id': usuario.id}) }}" method="post" role="form">*/
/*                     <div class="">*/
/*                         {% if error is defined %}*/
/*                             <div class="alert_error">*/
/*                                 {{ error }}*/
/*                             </div>*/
/*                         {% endif %}*/
/*                         {% if form_errors(edit_form.usuario) is not empty %}*/
/*                             <div class="alert_error">*/
/*                                 {{ form_errors(edit_form.usuario) }}*/
/*                             </div>*/
/*                         {% endif %}*/
/*                         <div class="form-group">*/
/*                             {{ form_label(edit_form.usuario,'Usuario') }}*/
/*                             {{ form_errors(edit_form.usuario) }}*/
/*                             {{ form_widget(edit_form.usuario, { 'attr': { 'class': 'form-control' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             {{ form_label(edit_form.password, 'Contraseña') }}*/
/*                             {{ form_errors(edit_form.password) }}*/
/* */
/*                             {{ form_widget(edit_form.password.first, { 'attr': { 'class': 'form-control','required': 'true' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/* */
/*                             {{ form_label(edit_form.password, 'Repetir Contraseña') }}*/
/*                             {{ form_errors(edit_form.password) }}*/
/*                             {{ form_widget(edit_form.password.second, { 'attr': { 'class': 'form-control','required': 'true' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             {{ form_label(edit_form.roles,'Rol') }}*/
/*                             {{ form_errors(edit_form.roles) }}*/
/*                             {{ form_widget(edit_form.roles, { 'attr': { 'class': 'form-control' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/* */
/*                             {{ form_label(edit_form.isActive, 'Activado') }}*/
/*                             {{ form_errors(edit_form.isActive) }}*/
/*                             {{ form_widget(edit_form.isActive) }}*/
/*                         </div>*/
/* */
/*                         {{ form(edit_form) }}*/
/* */
/*                         <button class="btn btn-small btn-primary pull-right" type="submit"><i*/
/*                                     class="glyphicon glyphicon-save"></i> Guardar*/
/*                         </button>*/
/* */
/*                         <a class="btn btn-small btn-danger" href="{{ path('usuario_index') }}"><i*/
/*                                     class="glyphicon glyphicon-remove"></i> Cancelar</a>*/
/* */
/*                     </div>*/
/*                 </form>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
