<?php

/* recaudacion/plan_recaudacion.html.twig */
class __TwigTemplate_504328be983907f303aff84e0f7b25ccfc510a83b71b90a7431164bff737db36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "recaudacion/plan_recaudacion.html.twig", 1);
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
        $__internal_04edae2bc11a938e412d453489443e75261c148f069d4234382657a1988e2476 = $this->env->getExtension("native_profiler");
        $__internal_04edae2bc11a938e412d453489443e75261c148f069d4234382657a1988e2476->enter($__internal_04edae2bc11a938e412d453489443e75261c148f069d4234382657a1988e2476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recaudacion/plan_recaudacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04edae2bc11a938e412d453489443e75261c148f069d4234382657a1988e2476->leave($__internal_04edae2bc11a938e412d453489443e75261c148f069d4234382657a1988e2476_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_56d82cfb62edcdef6488aea1a4f0ef82640dba897c84a3778898ceb5ab458d55 = $this->env->getExtension("native_profiler");
        $__internal_56d82cfb62edcdef6488aea1a4f0ef82640dba897c84a3778898ceb5ab458d55->enter($__internal_56d82cfb62edcdef6488aea1a4f0ef82640dba897c84a3778898ceb5ab458d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Plan de Recaudación</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                ";
        // line 12
        echo "                    ";
        // line 13
        echo "                        ";
        // line 14
        echo "                ";
        // line 15
        echo "            </ul>
        </div>

    </div>
    <div class=\"panel-body\">
        <table id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">

            <thead>
            <tr>
                <th class=\"bg-primary\">Ruta</th>
                <th class=\"bg-primary\">Fecuencia</th>
                <th class=\"bg-primary\">Cantidad Viajes Promedio</th>
                <th class=\"bg-primary\">Cantidad Pasajeros Promedio</th>
                <th class=\"bg-primary\">Precio Pasaje(- 10% evación)</th>
                <th class=\"bg-primary\">Recaudación por Pasajeros</th>
                <th class=\"bg-primary\">Combustible Asignado</th>
                <th class=\"bg-primary\">Recaudación por Litros de Combustible</th>
                <th class=\"bg-primary\">Recaudación Total</th>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "noruta", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "frecuencia_cantdias", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "cantidadviajes_promedio", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "cantpasajerospromedio", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "preciopasaj_evasion", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "recaudacion_xpasajero", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "asignacion", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "recaudacion_xltrcombustible", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "recaudacion_total", array()), "html", null, true);
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

</div>

";
        
        $__internal_56d82cfb62edcdef6488aea1a4f0ef82640dba897c84a3778898ceb5ab458d55->leave($__internal_56d82cfb62edcdef6488aea1a4f0ef82640dba897c84a3778898ceb5ab458d55_prof);

    }

    public function getTemplateName()
    {
        return "recaudacion/plan_recaudacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 50,  118 => 47,  114 => 46,  110 => 45,  106 => 44,  102 => 43,  98 => 42,  94 => 41,  90 => 40,  86 => 39,  83 => 38,  79 => 37,  55 => 15,  53 => 14,  51 => 13,  49 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Plan de Recaudación</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 {#<li>#}*/
/*                     {#<a class="text-info" href="{{ path('omnibus_index') }}">#}*/
/*                         {#<i class="glyphicon glyphicon glyphicon-hand-left"></i> Atras</a>#}*/
/*                 {#</li>#}*/
/*             </ul>*/
/*         </div>*/
/* */
/*     </div>*/
/*     <div class="panel-body">*/
/*         <table id="sample-table-2" class="table table-striped table-bordered table-hover">*/
/* */
/*             <thead>*/
/*             <tr>*/
/*                 <th class="bg-primary">Ruta</th>*/
/*                 <th class="bg-primary">Fecuencia</th>*/
/*                 <th class="bg-primary">Cantidad Viajes Promedio</th>*/
/*                 <th class="bg-primary">Cantidad Pasajeros Promedio</th>*/
/*                 <th class="bg-primary">Precio Pasaje(- 10% evación)</th>*/
/*                 <th class="bg-primary">Recaudación por Pasajeros</th>*/
/*                 <th class="bg-primary">Combustible Asignado</th>*/
/*                 <th class="bg-primary">Recaudación por Litros de Combustible</th>*/
/*                 <th class="bg-primary">Recaudación Total</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% for reporte in reportes %}*/
/*                 <tr>*/
/*                     <td>{{ reporte.noruta }}</td>*/
/*                     <td>{{ reporte.frecuencia_cantdias }}</td>*/
/*                     <td>{{ reporte.cantidadviajes_promedio }}</td>*/
/*                     <td>{{ reporte.cantpasajerospromedio }}</td>*/
/*                     <td>{{ reporte.preciopasaj_evasion }}</td>*/
/*                     <td>{{ reporte.recaudacion_xpasajero }}</td>*/
/*                     <td>{{ reporte.asignacion }}</td>*/
/*                     <td>{{ reporte.recaudacion_xltrcombustible }}</td>*/
/*                     <td>{{ reporte.recaudacion_total }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
