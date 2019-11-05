<?php

/* hojaruta/show.html.twig */
class __TwigTemplate_4efd9f9bbedccfe602a763f9f1220be441aac9c7e66aa5b86d747d2c83df8862 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "hojaruta/show.html.twig", 1);
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
        $__internal_93dbe18e0f5b96c429e111b9ca9420a6d1700618dd107cbd5194b10b95e7b5b2 = $this->env->getExtension("native_profiler");
        $__internal_93dbe18e0f5b96c429e111b9ca9420a6d1700618dd107cbd5194b10b95e7b5b2->enter($__internal_93dbe18e0f5b96c429e111b9ca9420a6d1700618dd107cbd5194b10b95e7b5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hojaruta/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93dbe18e0f5b96c429e111b9ca9420a6d1700618dd107cbd5194b10b95e7b5b2->leave($__internal_93dbe18e0f5b96c429e111b9ca9420a6d1700618dd107cbd5194b10b95e7b5b2_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_775a7fac69ad48e7ed70fc7a70c9225019948839c32fd10f60985ef7fafe6bc1 = $this->env->getExtension("native_profiler");
        $__internal_775a7fac69ad48e7ed70fc7a70c9225019948839c32fd10f60985ef7fafe6bc1->enter($__internal_775a7fac69ad48e7ed70fc7a70c9225019948839c32fd10f60985ef7fafe6bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <h1>HojaRuta</h1>
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Lista de Hojas de Rutas</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("hojaruta_index");
        echo "\">
                        <i class=\"glyphicon glyphicon glyphicon-hand-left\"></i> Atràs</a>
                </li>
            </ul>
        </div><!-- /.box-tools -->
    </div><!-
    <div class=\"box-body\">
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th>No. Hoja de Ruta</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "noHojaRuta", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Fecha</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "fecha", array()), "y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ruta</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "ruta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ómnibus</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "omnibus", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad de viajes</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "cantidadViajes", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad de salidas</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "cantidadSalidas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Horas de Trabajo Básico</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "basico", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Horas de Trabajo Turno Partido</th>
                <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "turnopartido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Horas de Trabajo Con Incremento</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "conIncremento", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Horas de Trabajo Confronta</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "confronta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Horas de Trabajo Voluntario</th>
                <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "voluntario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Total de Horas</th>
                <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "totalHoras", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Observaciones</th>
                <td>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "observaciones", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 77
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones";
        }
        // line 78
        echo "                <td>
                    ";
        // line 80
        echo "                    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hojaruta_edit", array("id" => $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "id", array()))), "html", null, true);
        echo "\"
                       class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"left\"
                       title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                    </a>
                    <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hojaruta_delete", array("id" => $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "id", array()))), "html", null, true);
        echo "\"
                       class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"rigth\"
                       title=\"Eliminar elemento\"
                       onclick=\"return confirm('Esta seguro que desea eliminar el elemento')\">
                        <i class=\"glyphicon glyphicon-remove\"></i>
                    </a>
                    ";
        // line 91
        echo "                </td>
                </th>
            </tr>
        </thead>
    </table>
</div>
    ";
        
        $__internal_775a7fac69ad48e7ed70fc7a70c9225019948839c32fd10f60985ef7fafe6bc1->leave($__internal_775a7fac69ad48e7ed70fc7a70c9225019948839c32fd10f60985ef7fafe6bc1_prof);

    }

    public function getTemplateName()
    {
        return "hojaruta/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 91,  174 => 84,  166 => 80,  163 => 78,  157 => 77,  150 => 73,  143 => 69,  136 => 65,  129 => 61,  122 => 57,  115 => 53,  108 => 49,  101 => 45,  94 => 41,  87 => 37,  80 => 33,  73 => 29,  65 => 24,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     <h1>HojaRuta</h1>*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Lista de Hojas de Rutas</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('hojaruta_index') }}">*/
/*                         <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.box-tools -->*/
/*     </div><!-*/
/*     <div class="box-body">*/
/*         <table class="table table-hover">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>No. Hoja de Ruta</th>*/
/*                 <td>{{ hojaRutum.noHojaRuta }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <td>{{ hojaRutum.fecha|date('y-m-d') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ruta</th>*/
/*                 <td>{{ hojaRutum.ruta }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ómnibus</th>*/
/*                 <td>{{ hojaRutum.omnibus }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cantidad de viajes</th>*/
/*                 <td>{{ hojaRutum.cantidadViajes }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cantidad de salidas</th>*/
/*                 <td>{{ hojaRutum.cantidadSalidas }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Horas de Trabajo Básico</th>*/
/*                 <td>{{ hojaRutum.basico }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Horas de Trabajo Turno Partido</th>*/
/*                 <td>{{ hojaRutum.turnopartido}}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Horas de Trabajo Con Incremento</th>*/
/*                 <td>{{ hojaRutum.conIncremento}}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Horas de Trabajo Confronta</th>*/
/*                 <td>{{ hojaRutum.confronta }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Horas de Trabajo Voluntario</th>*/
/*                 <td>{{ hojaRutum.voluntario }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Total de Horas</th>*/
/*                 <td>{{ hojaRutum.totalHoras }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Observaciones</th>*/
/*                 <td>{{ hojaRutum.observaciones }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{% if not is_granted('ROLE_USUARIO' ) %}<img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones{% endif %}*/
/*                 <td>*/
/*                     {#<ul>#}*/
/*                     <a href="{{ path('hojaruta_edit',{ 'id': hojaRutum.id }) }}"*/
/*                        class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="left"*/
/*                        title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                     </a>*/
/*                     <a href="{{ path('hojaruta_delete',{'id': hojaRutum.id}) }}"*/
/*                        class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="rigth"*/
/*                        title="Eliminar elemento"*/
/*                        onclick="return confirm('Esta seguro que desea eliminar el elemento')">*/
/*                         <i class="glyphicon glyphicon-remove"></i>*/
/*                     </a>*/
/*                     {#</ul>#}*/
/*                 </td>*/
/*                 </th>*/
/*             </tr>*/
/*         </thead>*/
/*     </table>*/
/* </div>*/
/*     {% endblock %}*/
/* */
