<?php

/* omnibus/reporteporOmnibus.html.twig */
class __TwigTemplate_129ec0f3bbf9fbbc248221c4ebb1633fbb51d69d09fe400e5b91a812326478e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "omnibus/reporteporOmnibus.html.twig", 1);
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
        $__internal_14439a9f5d7583e6af921198c127b1de9ee55177c3ed82e9a912ec82b1058ab0 = $this->env->getExtension("native_profiler");
        $__internal_14439a9f5d7583e6af921198c127b1de9ee55177c3ed82e9a912ec82b1058ab0->enter($__internal_14439a9f5d7583e6af921198c127b1de9ee55177c3ed82e9a912ec82b1058ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "omnibus/reporteporOmnibus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14439a9f5d7583e6af921198c127b1de9ee55177c3ed82e9a912ec82b1058ab0->leave($__internal_14439a9f5d7583e6af921198c127b1de9ee55177c3ed82e9a912ec82b1058ab0_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_6976d798ec659a2f58c1a62252b71e60d48dc89a2de4da881d4c9f241fb230c4 = $this->env->getExtension("native_profiler");
        $__internal_6976d798ec659a2f58c1a62252b71e60d48dc89a2de4da881d4c9f241fb230c4->enter($__internal_6976d798ec659a2f58c1a62252b71e60d48dc89a2de4da881d4c9f241fb230c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Reporte General por Ómnibus</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    ";
        // line 13
        echo "                        ";
        // line 14
        echo "                </li>
            </ul>
        </div>

    </div>
        <div class=\"panel-body\">
        <table id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">

            <thead>
            <tr>
                <th class=\"bg-primary\">No. Ómnibus</th>
                <th class=\"bg-primary\">Chapa</th>
                <th class=\"bg-primary\">No. Tarjeta Combustible</th>
                <th class=\"bg-primary\">Combustible Asignado</th>
                <th class=\"bg-primary\">Combustible consumido GPS</th>
                <th class=\"bg-primary\">Chofer</th>
                <th class=\"bg-primary\">CI Chofer</th>
                <th class=\"bg-primary\">No ruta</th>
                <th class=\"bg-primary\">Fecha asignación comb</th>
                <th class=\"bg-primary\">Km recorridos GPS</th>


            </tr>
            </thead>
            <tbody>

            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportes"]) ? $context["reportes"] : $this->getContext($context, "reportes")));
        foreach ($context['_seq'] as $context["_key"] => $context["reporte"]) {
            // line 41
            echo "                <tr>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "noomnibus", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "chapa", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "notarjeta", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "combustible_asignado", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "combustible_consumido_gps", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "ci", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "noruta", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "fecha_asignacion", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "kmrecorridos", array()), "html", null, true);
            echo "</td>


                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reporte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </tbody>
        </table>
    </div>



";
        
        $__internal_6976d798ec659a2f58c1a62252b71e60d48dc89a2de4da881d4c9f241fb230c4->leave($__internal_6976d798ec659a2f58c1a62252b71e60d48dc89a2de4da881d4c9f241fb230c4_prof);

    }

    public function getTemplateName()
    {
        return "omnibus/reporteporOmnibus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 56,  123 => 51,  119 => 50,  115 => 49,  111 => 48,  107 => 47,  103 => 46,  99 => 45,  95 => 44,  91 => 43,  87 => 42,  84 => 41,  80 => 40,  52 => 14,  50 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Reporte General por Ómnibus</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     {#<a class="text-info" href="{{ path('recaudacion_index') }}">#}*/
/*                         {#<i class="glyphicon glyphicon glyphicon-hand-left"></i> Atras</a>#}*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/* */
/*     </div>*/
/*         <div class="panel-body">*/
/*         <table id="sample-table-2" class="table table-striped table-bordered table-hover">*/
/* */
/*             <thead>*/
/*             <tr>*/
/*                 <th class="bg-primary">No. Ómnibus</th>*/
/*                 <th class="bg-primary">Chapa</th>*/
/*                 <th class="bg-primary">No. Tarjeta Combustible</th>*/
/*                 <th class="bg-primary">Combustible Asignado</th>*/
/*                 <th class="bg-primary">Combustible consumido GPS</th>*/
/*                 <th class="bg-primary">Chofer</th>*/
/*                 <th class="bg-primary">CI Chofer</th>*/
/*                 <th class="bg-primary">No ruta</th>*/
/*                 <th class="bg-primary">Fecha asignación comb</th>*/
/*                 <th class="bg-primary">Km recorridos GPS</th>*/
/* */
/* */
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% for reporte in reportes %}*/
/*                 <tr>*/
/*                     <td>{{ reporte.noomnibus }}</td>*/
/*                     <td>{{ reporte.chapa }}</td>*/
/*                     <td>{{ reporte.notarjeta }}</td>*/
/*                     <td>{{ reporte.combustible_asignado }}</td>*/
/*                     <td>{{ reporte.combustible_consumido_gps }}</td>*/
/*                     <td>{{ reporte.nombre }}</td>*/
/*                     <td>{{ reporte.ci }}</td>*/
/*                     <td>{{ reporte.noruta }}</td>*/
/*                     <td>{{ reporte.fecha_asignacion }}</td>*/
/*                     <td>{{ reporte.kmrecorridos }}</td>*/
/* */
/* */
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
