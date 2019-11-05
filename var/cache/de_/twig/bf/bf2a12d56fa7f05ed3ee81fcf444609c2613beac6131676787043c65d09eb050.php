<?php

/* :omnibus:combustibleHabilitado.html.twig */
class __TwigTemplate_05f555eaf610e39f9e0e727be15766c5fc326a71ad5a53fa8150002e08fb55b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":omnibus:combustibleHabilitado.html.twig", 1);
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
        $__internal_4c2d5dc1e3b6ea985f9d25b1dbc4d5b60207bee80c4e379aa670fa69387a7947 = $this->env->getExtension("native_profiler");
        $__internal_4c2d5dc1e3b6ea985f9d25b1dbc4d5b60207bee80c4e379aa670fa69387a7947->enter($__internal_4c2d5dc1e3b6ea985f9d25b1dbc4d5b60207bee80c4e379aa670fa69387a7947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":omnibus:combustibleHabilitado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c2d5dc1e3b6ea985f9d25b1dbc4d5b60207bee80c4e379aa670fa69387a7947->leave($__internal_4c2d5dc1e3b6ea985f9d25b1dbc4d5b60207bee80c4e379aa670fa69387a7947_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_e4fead26a0dad729338e459d36f49c56848b0ef9efa4abd8e32aba912fec36be = $this->env->getExtension("native_profiler");
        $__internal_e4fead26a0dad729338e459d36f49c56848b0ef9efa4abd8e32aba912fec36be->enter($__internal_e4fead26a0dad729338e459d36f49c56848b0ef9efa4abd8e32aba912fec36be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Datos de Tarjeta de Combustible y Gps por fechas</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a class=\"text-info\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("omnibus_index");
        echo "\">
                        <i class=\"glyphicon glyphicon glyphicon-hand-left\"></i> Atràs</a>
                </li>
            </ul>
        </div>

    </div>
    <div class=\"panel-body\">
        <table id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">

            <thead>
            <tr>
                <th class=\"bg-primary\">No. Ómnibus</th>
                <th class=\"bg-primary\">No. Tarjeta Combustible</th>
                ";
        // line 27
        echo "                <th class=\"bg-primary\">Combustible Asignado</th>
                <th class=\"bg-primary\">Fecha asignación comb</th>
                <th class=\"bg-primary\">Km recorridos GPS</th>
                <th class=\"bg-primary\">Combustible consumido GPS</th>
                ";
        // line 32
        echo "                <th class=\"bg-primary\">Diferencia Tarjeta/GPS</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportes"]) ? $context["reportes"] : $this->getContext($context, "reportes")));
        foreach ($context['_seq'] as $context["_key"] => $context["reporte"]) {
            // line 38
            echo "                <tr>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "noomnibus", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "notarjeta", array()), "html", null, true);
            echo "</td>
                    ";
            // line 42
            echo "                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "combustible_asignado", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "fecha_asignacion", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "kmrecorridos", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "combustible_consumido_gps", array()), "html", null, true);
            echo "</td>
                    ";
            // line 47
            echo "                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "diferencia_tarjeta_gps", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reporte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>
    </div>



";
        
        $__internal_e4fead26a0dad729338e459d36f49c56848b0ef9efa4abd8e32aba912fec36be->leave($__internal_e4fead26a0dad729338e459d36f49c56848b0ef9efa4abd8e32aba912fec36be_prof);

    }

    public function getTemplateName()
    {
        return ":omnibus:combustibleHabilitado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 50,  112 => 47,  108 => 45,  104 => 44,  100 => 43,  95 => 42,  91 => 40,  87 => 39,  84 => 38,  80 => 37,  73 => 32,  67 => 27,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Datos de Tarjeta de Combustible y Gps por fechas</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('omnibus_index') }}">*/
/*                         <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/* */
/*     </div>*/
/*     <div class="panel-body">*/
/*         <table id="sample-table-2" class="table table-striped table-bordered table-hover">*/
/* */
/*             <thead>*/
/*             <tr>*/
/*                 <th class="bg-primary">No. Ómnibus</th>*/
/*                 <th class="bg-primary">No. Tarjeta Combustible</th>*/
/*                 {#<th class="bg-primary">Tipo Combustible</th>#}*/
/*                 <th class="bg-primary">Combustible Asignado</th>*/
/*                 <th class="bg-primary">Fecha asignación comb</th>*/
/*                 <th class="bg-primary">Km recorridos GPS</th>*/
/*                 <th class="bg-primary">Combustible consumido GPS</th>*/
/*                 {#<th class="bg-primary">Gasto combustible tarjeta</th>#}*/
/*                 <th class="bg-primary">Diferencia Tarjeta/GPS</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% for reporte in reportes %}*/
/*                 <tr>*/
/*                     <td>{{ reporte.noomnibus }}</td>*/
/*                     <td>{{ reporte.notarjeta }}</td>*/
/*                     {#<td>{{ reporte.tipoCombustible }}</td>#}*/
/*                     <td>{{ reporte.combustible_asignado }}</td>*/
/*                     <td>{{ reporte.fecha_asignacion }}</td>*/
/*                     <td>{{ reporte.kmrecorridos }}</td>*/
/*                     <td>{{ reporte.combustible_consumido_gps }}</td>*/
/*                     {#<td>{{ reporte.gasto_combustibleXtarjeta }}</td>#}*/
/*                     <td>{{ reporte.diferencia_tarjeta_gps }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
