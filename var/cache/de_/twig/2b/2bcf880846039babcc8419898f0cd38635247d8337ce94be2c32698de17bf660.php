<?php

/* :usuario:index.html.twig */
class __TwigTemplate_ff70f440daa12908b05e5fd0a57516ee8f8078e24cc91ea58bba219665dff744 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":usuario:index.html.twig", 1);
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
        $__internal_699fae3ec08d1084befcd74edf472a22ff58c1af20c9a13f942d9525251ce577 = $this->env->getExtension("native_profiler");
        $__internal_699fae3ec08d1084befcd74edf472a22ff58c1af20c9a13f942d9525251ce577->enter($__internal_699fae3ec08d1084befcd74edf472a22ff58c1af20c9a13f942d9525251ce577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_699fae3ec08d1084befcd74edf472a22ff58c1af20c9a13f942d9525251ce577->leave($__internal_699fae3ec08d1084befcd74edf472a22ff58c1af20c9a13f942d9525251ce577_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_35bfebc7af38e27e6759451de8a647ce27249b8fa01247d5626015cdc4543e75 = $this->env->getExtension("native_profiler");
        $__internal_35bfebc7af38e27e6759451de8a647ce27249b8fa01247d5626015cdc4543e75->enter($__internal_35bfebc7af38e27e6759451de8a647ce27249b8fa01247d5626015cdc4543e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <div class=\"modal-dialog text-center\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 6
            echo "        <div class=\"flash-notice\">
            <div class=\"alert alert-success\"><i class=\"glyphicon glyphicon-ok\"></i> ";
            // line 7
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 11
            echo "        <div class=\"flash-notice\">
            <div class=\"alert alert-danger\"><i class=\"glyphicon glyphicon-remove\"></i> ";
            // line 12
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var oTable1 = \$('#sample-table-2').dataTable({
                \"aoColumns\": [
                    {\"bSortable\": false},
                    null,null, null, null, null, null, null,null,
                    {\"bSortable\": false}
                ]});
            \$('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function() {
                \$(this).next().focus();
            });
        });
    </script>
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h1 class=\"panel-title\" ><i class=\"glyphicon glyphicon-list\" > Usuarios</i></h1>
    </div>
    <div class=\"panel-body\">
        <div style=\"width: 100%;height: 200px; overflow: auto\">
        <table id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">
            <thead>
            <tr>
                ";
        // line 38
        echo "                <th class=\"bg-primary\">Activo</th>
                <th class=\"bg-primary\">Usuario</th>
                <th class=\"bg-primary\">Fecha-registro</th>
                <th class=\"bg-primary\">Acciones</th>
            </tr>
            </thead>
            <tbody>
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 46
            echo "                <tr>
                    ";
            // line 48
            echo "                    <td>";
            if ($this->getAttribute($context["usuario"], "isActive", array())) {
                echo "Si";
            } else {
                echo "No";
            }
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "usuario", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            if ($this->getAttribute($context["usuario"], "fechaRegistro", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["usuario"], "fechaRegistro", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td><a onclick=\"return confirm('Esta seguro que deseas borrar el Usuario ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "usuario", array()), "html", null, true);
            echo "')\" class=\"glyphicon glyphicon-remove\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_delete", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\" datatype=\"tooltip\" title=\"Eliminar\"></a>-<a class=\"glyphicon glyphicon-edit\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\" title=\"Editar\"></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </tbody>
        </table>
    </div>
    <div class=\"row\">

        <div class=\"col-sm-4\">
            ";
        // line 60
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 61
            echo "                <a class=\"btn btn-sm btn-default  pull-left\" href=\"";
            echo $this->env->getExtension('routing')->getPath("usuario_new");
            echo "\">
                    <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/add_database_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Nuevo
                </a>
            ";
        }
        // line 65
        echo "        </div>
    </div>
        <div class=\"col-sm-4\">
            ";
        // line 69
        echo "        </div>
        <div class=\"col-sm-4\">
        </div>

        </div>
    </div>
</div>
";
        
        $__internal_35bfebc7af38e27e6759451de8a647ce27249b8fa01247d5626015cdc4543e75->leave($__internal_35bfebc7af38e27e6759451de8a647ce27249b8fa01247d5626015cdc4543e75_prof);

    }

    public function getTemplateName()
    {
        return ":usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 69,  169 => 65,  163 => 62,  158 => 61,  156 => 60,  148 => 54,  135 => 51,  129 => 50,  125 => 49,  116 => 48,  113 => 46,  109 => 45,  100 => 38,  76 => 15,  67 => 12,  64 => 11,  59 => 10,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido%}*/
/*     <div class="modal-dialog text-center">*/
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
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function() {*/
/*             var oTable1 = $('#sample-table-2').dataTable({*/
/*                 "aoColumns": [*/
/*                     {"bSortable": false},*/
/*                     null,null, null, null, null, null, null,null,*/
/*                     {"bSortable": false}*/
/*                 ]});*/
/*             $('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function() {*/
/*                 $(this).next().focus();*/
/*             });*/
/*         });*/
/*     </script>*/
/* <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*         <h1 class="panel-title" ><i class="glyphicon glyphicon-list" > Usuarios</i></h1>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         <div style="width: 100%;height: 200px; overflow: auto">*/
/*         <table id="sample-table-2" class="table table-striped table-bordered table-hover">*/
/*             <thead>*/
/*             <tr>*/
/*                 {#<th class="bg-primary">ID</th>#}*/
/*                 <th class="bg-primary">Activo</th>*/
/*                 <th class="bg-primary">Usuario</th>*/
/*                 <th class="bg-primary">Fecha-registro</th>*/
/*                 <th class="bg-primary">Acciones</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                     {% for usuario in usuarios %}*/
/*                 <tr>*/
/*                     {#<td>{{ usuario.id }}</a></td>#}*/
/*                     <td>{% if usuario.isActive %}Si{% else %}No{% endif %}</td>*/
/*                     <td>{{ usuario.usuario }}</td>*/
/*                     <td>{% if usuario.fechaRegistro %}{{ usuario.fechaRegistro|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td><a onclick="return confirm('Esta seguro que deseas borrar el Usuario {{ usuario.usuario }}')" class="glyphicon glyphicon-remove" href="{{ path('usuario_delete', { 'id': usuario.id }) }}" datatype="tooltip" title="Eliminar"></a>-<a class="glyphicon glyphicon-edit" href="{{ path('usuario_edit', { 'id': usuario.id }) }}" title="Editar"></a></td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/*     <div class="row">*/
/* */
/*         <div class="col-sm-4">*/
/*             {% if not is_granted('ROLE_USUARIO' ) %}*/
/*                 <a class="btn btn-sm btn-default  pull-left" href="{{ path('usuario_new') }}">*/
/*                     <img src="{{ asset('assets/dist/img/add_database_26px.png') }}" alt="User Image"> Nuevo*/
/*                 </a>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*         <div class="col-sm-4">*/
/*             {#{{ knp_pagination_render(pagination) }}#}*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/*         </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
