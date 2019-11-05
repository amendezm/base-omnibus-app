<?php

/* hojaruta/reporte_hoja_ruta_fecha.html.twig */
class __TwigTemplate_ec04ff17181a1da1b3f3036127538943ccb2c740099ed81de50a608ebd71e251 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "hojaruta/reporte_hoja_ruta_fecha.html.twig", 1);
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
        $__internal_2c29d79aa4223a727e5a0967f01ae636fb655f4b59214453d6d0fe6283c87dbd = $this->env->getExtension("native_profiler");
        $__internal_2c29d79aa4223a727e5a0967f01ae636fb655f4b59214453d6d0fe6283c87dbd->enter($__internal_2c29d79aa4223a727e5a0967f01ae636fb655f4b59214453d6d0fe6283c87dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hojaruta/reporte_hoja_ruta_fecha.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c29d79aa4223a727e5a0967f01ae636fb655f4b59214453d6d0fe6283c87dbd->leave($__internal_2c29d79aa4223a727e5a0967f01ae636fb655f4b59214453d6d0fe6283c87dbd_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_8cea162ef8af8e22d1ff0a8b25c2d6f54058397f6759d7a35bb797e0dee3933e = $this->env->getExtension("native_profiler");
        $__internal_8cea162ef8af8e22d1ff0a8b25c2d6f54058397f6759d7a35bb797e0dee3933e->enter($__internal_8cea162ef8af8e22d1ff0a8b25c2d6f54058397f6759d7a35bb797e0dee3933e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Reporte Hoja Ruta por Fecha</h3>
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
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"form-group has-feedback\">
                <h6 class=\" \">Desde</h6>
                <input type=\"date\" id=\"desde\" name=\"desde\" required=\"required\"  class=\"\" formtarget=\"\"/>
                ";
        // line 25
        echo "            </div>
        </div>
    </div>
    <div class=\"panel-body\">
        <table id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">

            <thead>
            <tr>
                ";
        // line 34
        echo "                <th class=\"bg-primary\">Hoja Ruta</th>
                <th class=\"bg-primary\">Ómnibus</th>
                <th class=\"bg-primary\">Ruta</th>
                <th class=\"bg-primary\">Servicio</th>
                <th class=\"bg-primary\">Chofer</th>
                <th class=\"bg-primary\">Cantidad de Viajes</th>
                <th class=\"bg-primary\">Kms Recorridos</th>
                <th class=\"bg-primary\">Recaudación</th>
                <th class=\"bg-primary\">Incidencias</th>

                ";
        // line 45
        echo "            </tr>
            </thead>
            <tbody>

            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportes"]) ? $context["reportes"] : $this->getContext($context, "reportes")));
        foreach ($context['_seq'] as $context["_key"] => $context["reporte"]) {
            // line 50
            echo "                <tr>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "nohojaruta", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "noomnibus", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "noruta", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "servicio", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "cantidadviajes", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "kmrecorridos", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "recaudacion", array()), "html", null, true);
            echo "</td>
                    ";
            // line 60
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reporte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </tbody>
        </table>
    </div>



";
        
        $__internal_8cea162ef8af8e22d1ff0a8b25c2d6f54058397f6759d7a35bb797e0dee3933e->leave($__internal_8cea162ef8af8e22d1ff0a8b25c2d6f54058397f6759d7a35bb797e0dee3933e_prof);

    }

    public function getTemplateName()
    {
        return "hojaruta/reporte_hoja_ruta_fecha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 62,  131 => 60,  127 => 58,  123 => 57,  119 => 56,  115 => 55,  111 => 54,  107 => 53,  103 => 52,  99 => 51,  96 => 50,  92 => 49,  86 => 45,  74 => 34,  64 => 25,  52 => 14,  50 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Reporte Hoja Ruta por Fecha</h3>*/
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
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <div class="form-group has-feedback">*/
/*                 <h6 class=" ">Desde</h6>*/
/*                 <input type="date" id="desde" name="desde" required="required"  class="" formtarget=""/>*/
/*                 {#<span class="glyphicon glyphicon-user form-control-feedback"></span>#}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         <table id="sample-table-2" class="table table-striped table-bordered table-hover">*/
/* */
/*             <thead>*/
/*             <tr>*/
/*                 {#<th class="bg-primary">ID</th>#}*/
/*                 <th class="bg-primary">Hoja Ruta</th>*/
/*                 <th class="bg-primary">Ómnibus</th>*/
/*                 <th class="bg-primary">Ruta</th>*/
/*                 <th class="bg-primary">Servicio</th>*/
/*                 <th class="bg-primary">Chofer</th>*/
/*                 <th class="bg-primary">Cantidad de Viajes</th>*/
/*                 <th class="bg-primary">Kms Recorridos</th>*/
/*                 <th class="bg-primary">Recaudación</th>*/
/*                 <th class="bg-primary">Incidencias</th>*/
/* */
/*                 {#<th class="bg-primary">Demanda Total</th>#}*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% for reporte in reportes %}*/
/*                 <tr>*/
/*                     <td>{{ reporte.nohojaruta }}</td>*/
/*                     <td>{{ reporte.noomnibus }}</td>*/
/*                     <td>{{ reporte.noruta }}</td>*/
/*                     <td>{{ reporte.servicio }}</td>*/
/*                     <td>{{ reporte.nombre }}</td>*/
/*                     <td>{{ reporte.cantidadviajes }}</td>*/
/*                     <td>{{ reporte.kmrecorridos }}</td>*/
/*                     <td>{{ reporte.recaudacion }}</td>*/
/*                     {#<td>{{ reporte.incidencias }}</td>#}*/
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
