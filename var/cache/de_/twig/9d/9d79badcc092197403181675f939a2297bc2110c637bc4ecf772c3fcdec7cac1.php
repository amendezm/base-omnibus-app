<?php

/* :ruta:showIncidencias_xRuta_reporte.html.twig */
class __TwigTemplate_6f264aa2eacfcc2cc2febad18f63a6c9773b896be238aad06b9aa46f7cf8f7ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("../hojaruta/index.html.twig", ":ruta:showIncidencias_xRuta_reporte.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "../hojaruta/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8185576e1d0bcb536e3fef5689161a6f179e23d62eb7bff95bfbfca69215e0e = $this->env->getExtension("native_profiler");
        $__internal_e8185576e1d0bcb536e3fef5689161a6f179e23d62eb7bff95bfbfca69215e0e->enter($__internal_e8185576e1d0bcb536e3fef5689161a6f179e23d62eb7bff95bfbfca69215e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ruta:showIncidencias_xRuta_reporte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8185576e1d0bcb536e3fef5689161a6f179e23d62eb7bff95bfbfca69215e0e->leave($__internal_e8185576e1d0bcb536e3fef5689161a6f179e23d62eb7bff95bfbfca69215e0e_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_d975b4d756ef23454780442a64616ea3caf7ef02a697676cbb5da426c895d330 = $this->env->getExtension("native_profiler");
        $__internal_d975b4d756ef23454780442a64616ea3caf7ef02a697676cbb5da426c895d330->enter($__internal_d975b4d756ef23454780442a64616ea3caf7ef02a697676cbb5da426c895d330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <h1>Tipo de Incidencias por Ruta</h1>
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Lista de Incidencias por Rutas</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ruta_index");
        echo "\">
                        <i class=\"glyphicon glyphicon glyphicon-hand-left\"></i> Atràs</a>
                </li>
            </ul>
        </div><!-- /.box-tools -->
    </div><!-
    <div class=\"box-body\">
        <table class=\"table table-hover\">
            <thead>
        ";
        // line 23
        echo "            ";
        // line 24
        echo "                ";
        // line 25
        echo "                ";
        // line 26
        echo "            ";
        // line 27
        echo "            <tr>
                <th>Ruta</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ruta"]) ? $context["ruta"] : $this->getContext($context, "ruta")), "noRuta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ómnibus</th>
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
                <th>Fecha</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "fecha", array()), "y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Básico</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "basico", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Turno Partido</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "turnopartido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Con Incremento</th>
                <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "conIncremento", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Confronta</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "confronta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Voluntario</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "voluntario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Total de Horas</th>
                <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "totalHoras", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipo de Incidencias</th>
                <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "typeIncidencias", array()), "html", null, true);
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
                <th>Cantidadviajes</th>
                <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "cantidadViajes", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantidadsalidas</th>
                <td>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "cantidadSalidas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 84
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones";
        }
        // line 85
        echo "                <td>
                    ";
        // line 87
        echo "                    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hojaruta_edit", array("id" => $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "id", array()))), "html", null, true);
        echo "\"
                       class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"left\"
                       title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                    </a>
                    <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hojaruta_delete", array("id" => $this->getAttribute((isset($context["hojaRutum"]) ? $context["hojaRutum"] : $this->getContext($context, "hojaRutum")), "id", array()))), "html", null, true);
        echo "\"
                       class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"rigth\"
                       title=\"Eliminar elemento\"
                       onclick=\"return confirm('Esta seguro que desea eliminar el elemento')\">
                        <i class=\"glyphicon glyphicon-remove\"></i>
                    </a>
                    ";
        // line 98
        echo "                </td>
                </th>
            </tr>
        </thead>
    </table>
</div>
    ";
        
        $__internal_d975b4d756ef23454780442a64616ea3caf7ef02a697676cbb5da426c895d330->leave($__internal_d975b4d756ef23454780442a64616ea3caf7ef02a697676cbb5da426c895d330_prof);

    }

    public function getTemplateName()
    {
        return ":ruta:showIncidencias_xRuta_reporte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 98,  189 => 91,  181 => 87,  178 => 85,  172 => 84,  166 => 81,  159 => 77,  152 => 73,  145 => 69,  138 => 65,  131 => 61,  124 => 57,  117 => 53,  110 => 49,  103 => 45,  96 => 41,  89 => 37,  82 => 33,  75 => 29,  71 => 27,  69 => 26,  67 => 25,  65 => 24,  63 => 23,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '../hojaruta/index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     <h1>Tipo de Incidencias por Ruta</h1>*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Lista de Incidencias por Rutas</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('ruta_index') }}">*/
/*                         <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.box-tools -->*/
/*     </div><!-*/
/*     <div class="box-body">*/
/*         <table class="table table-hover">*/
/*             <thead>*/
/*         {#<tbody>#}*/
/*             {#<tr>#}*/
/*                 {#<th>Id</th>#}*/
/*                 {#<td>{{ hojaRutum.id }}</td>#}*/
/*             {#</tr>#}*/
/*             <tr>*/
/*                 <th>Ruta</th>*/
/*                 <td>{{ ruta.noRuta }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ómnibus</th>*/
/*                 <td>{{ hojaRutum.ruta }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ómnibus</th>*/
/*                 <td>{{ hojaRutum.omnibus }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <td>{{ hojaRutum.fecha|date('y-m-d') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Básico</th>*/
/*                 <td>{{ hojaRutum.basico }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Turno Partido</th>*/
/*                 <td>{{ hojaRutum.turnopartido}}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Con Incremento</th>*/
/*                 <td>{{ hojaRutum.conIncremento}}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Confronta</th>*/
/*                 <td>{{ hojaRutum.confronta }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Voluntario</th>*/
/*                 <td>{{ hojaRutum.voluntario }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Total de Horas</th>*/
/*                 <td>{{ hojaRutum.totalHoras }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tipo de Incidencias</th>*/
/*                 <td>{{ hojaRutum.typeIncidencias }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Observaciones</th>*/
/*                 <td>{{ hojaRutum.observaciones }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cantidadviajes</th>*/
/*                 <td>{{ hojaRutum.cantidadViajes }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cantidadsalidas</th>*/
/*                 <td>{{ hojaRutum.cantidadSalidas }}</td>*/
/*             </tr>*/
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
