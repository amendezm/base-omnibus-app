<?php

/* :usuario:new.html.twig */
class __TwigTemplate_ab5e8b0180b440532141f1ee019b26b036ac6b7d6ffcd640c8a74ba64b037681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":usuario:new.html.twig", 1);
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
        $__internal_2e05743b93917f0629aab55ee8323b9b7bc08e5fa2f1bbabe2a9cef862ba0699 = $this->env->getExtension("native_profiler");
        $__internal_2e05743b93917f0629aab55ee8323b9b7bc08e5fa2f1bbabe2a9cef862ba0699->enter($__internal_2e05743b93917f0629aab55ee8323b9b7bc08e5fa2f1bbabe2a9cef862ba0699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuario:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e05743b93917f0629aab55ee8323b9b7bc08e5fa2f1bbabe2a9cef862ba0699->leave($__internal_2e05743b93917f0629aab55ee8323b9b7bc08e5fa2f1bbabe2a9cef862ba0699_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_b51aa7bec6ad6004e7007ceaa645b015f2fd7de5e2333fed8dcc9ef20b40f59d = $this->env->getExtension("native_profiler");
        $__internal_b51aa7bec6ad6004e7007ceaa645b015f2fd7de5e2333fed8dcc9ef20b40f59d->enter($__internal_b51aa7bec6ad6004e7007ceaa645b015f2fd7de5e2333fed8dcc9ef20b40f59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
    <h1></h1>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 7
            echo "        <div class=\"flash-notice\">
            <div class=\"alert alert-success\"><i class=\"glyphicon glyphicon-ok\"></i> ";
            // line 8
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 12
            echo "        <div class=\"flash-notice\">
            <div class=\"alert alert-danger\"><i class=\"glyphicon glyphicon-remove\"></i> ";
            // line 13
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    <div class=\"col-md-6 col-lg-offset-3\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"> <i
                            class=\"glyphicon glyphicon-new-window\"></i> Nuevo Usuario</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("usuario_new");
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"\">
                        ";
        // line 25
        if (array_key_exists("error", $context)) {
            // line 26
            echo "                            <div class=\"alert_error\">
                                ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 30
        echo "                        ";
        if ( !twig_test_empty($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors'))) {
            // line 31
            echo "                            <div class=\"alert_error\">
                                ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 35
        echo "                        <div class=\"form-group\">
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'label', array("label" => "Usuario"));
        echo "
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'errors');
        echo "
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label" => "Contraseña"));
        echo "
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "

                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "true")));
        echo "
                        </div>
                        <div class=\"form-group\">

                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label" => "Repetir Contraseña"));
        echo "
                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "true")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'label', array("label" => "Rol"));
        echo "
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'errors');
        echo "
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">

                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'label', array("label" => "Activado"));
        echo "
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'errors');
        echo "
                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'widget');
        echo "
                        </div>

                        ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

                        <button class=\"btn btn-small btn-primary pull-right\" type=\"submit\"><i
                                    class=\"glyphicon glyphicon-save\"></i> Guardar
                        </button>

                        <a class=\"btn btn-small btn-danger\" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("usuario_index");
        echo "\"><i
                                    class=\"glyphicon glyphicon-remove\"></i> Cancelar</a>

                    </div>
                </form>

            </div>
        </div>
    </div>
    <ul>

    </ul>

";
        
        $__internal_b51aa7bec6ad6004e7007ceaa645b015f2fd7de5e2333fed8dcc9ef20b40f59d->leave($__internal_b51aa7bec6ad6004e7007ceaa645b015f2fd7de5e2333fed8dcc9ef20b40f59d_prof);

    }

    public function getTemplateName()
    {
        return ":usuario:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 70,  190 => 64,  184 => 61,  180 => 60,  176 => 59,  169 => 55,  165 => 54,  161 => 53,  155 => 50,  151 => 49,  147 => 48,  140 => 44,  135 => 42,  131 => 41,  125 => 38,  121 => 37,  117 => 36,  114 => 35,  108 => 32,  105 => 31,  102 => 30,  96 => 27,  93 => 26,  91 => 25,  86 => 23,  77 => 16,  68 => 13,  65 => 12,  60 => 11,  51 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* */
/*     <h1></h1>*/
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
/*                             class="glyphicon glyphicon-new-window"></i> Nuevo Usuario</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ path('usuario_new') }}" method="post" role="form">*/
/*                     <div class="">*/
/*                         {% if error is defined %}*/
/*                             <div class="alert_error">*/
/*                                 {{ error }}*/
/*                             </div>*/
/*                         {% endif %}*/
/*                         {% if form_errors(form) is not empty %}*/
/*                             <div class="alert_error">*/
/*                                 {{ form_errors(form) }}*/
/*                             </div>*/
/*                         {% endif %}*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.usuario,'Usuario') }}*/
/*                             {{ form_errors(form.usuario) }}*/
/*                             {{ form_widget(form.usuario, { 'attr': { 'class': 'form-control' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.password, 'Contraseña') }}*/
/*                             {{ form_errors(form.password) }}*/
/* */
/*                             {{ form_widget(form.password.first, { 'attr': { 'class': 'form-control','required': 'true' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/* */
/*                             {{ form_label(form.password, 'Repetir Contraseña') }}*/
/*                             {{ form_errors(form.password) }}*/
/*                             {{ form_widget(form.password.second, { 'attr': { 'class': 'form-control','required': 'true' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.roles,'Rol') }}*/
/*                             {{ form_errors(form.roles) }}*/
/*                             {{ form_widget(form.roles, { 'attr': { 'class': 'form-control' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/* */
/*                             {{ form_label(form.isActive, 'Activado') }}*/
/*                             {{ form_errors(form.isActive) }}*/
/*                             {{ form_widget(form.isActive) }}*/
/*                         </div>*/
/* */
/*                         {{ form(form) }}*/
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
/*     <ul>*/
/* */
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
