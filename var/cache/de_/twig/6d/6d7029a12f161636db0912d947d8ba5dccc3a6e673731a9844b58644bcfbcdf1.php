<?php

/* omnibus/plan_combustible.html.twig */
class __TwigTemplate_1aac1c08dd0d33e56dc4abe4e2fc01e4c43f8883ad7364607c6a618a44357929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "omnibus/plan_combustible.html.twig", 1);
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
        $__internal_60006e460cd860f01c7f92dc44d7812d718f258936d999614b1fd11201c98edd = $this->env->getExtension("native_profiler");
        $__internal_60006e460cd860f01c7f92dc44d7812d718f258936d999614b1fd11201c98edd->enter($__internal_60006e460cd860f01c7f92dc44d7812d718f258936d999614b1fd11201c98edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "omnibus/plan_combustible.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60006e460cd860f01c7f92dc44d7812d718f258936d999614b1fd11201c98edd->leave($__internal_60006e460cd860f01c7f92dc44d7812d718f258936d999614b1fd11201c98edd_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_5f7df280043a053e9cf3cc3cf01284cef7e35f64885a86e666d449f3cf644447 = $this->env->getExtension("native_profiler");
        $__internal_5f7df280043a053e9cf3cc3cf01284cef7e35f64885a86e666d449f3cf644447->enter($__internal_5f7df280043a053e9cf3cc3cf01284cef7e35f64885a86e666d449f3cf644447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Plan de Combustible</h3>
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
                <th class=\"bg-primary\">Servicio</th>
                <th class=\"bg-primary\">Distancia Kms</th>
                <th class=\"bg-primary\">Cantidad viajes promedio</th>
                <th class=\"bg-primary\">Tipo ómnibus</th>
                <th class=\"bg-primary\">Índice de consumo</th>
                <th class=\"bg-primary\">Consumo por Viaje</th>
                <th class=\"bg-primary\">Consumo Total</th>

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "servicio", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "distanciakm", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "viajespromedio", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "tipo_omnibus", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "indiceconsumonormado", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "consumoxviaje", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "consumototal", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reporte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>
    </div>
    <div class=\"panel-body\">
        <table id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">

            ";
        // line 56
        echo "            ";
        // line 57
        echo "                ";
        // line 58
        echo "                ";
        // line 59
        echo "                ";
        // line 60
        echo "                ";
        // line 61
        echo "                ";
        // line 62
        echo "                ";
        // line 63
        echo "                ";
        // line 64
        echo "
            ";
        // line 66
        echo "            ";
        // line 67
        echo "            ";
        // line 68
        echo "
            ";
        // line 70
        echo "                ";
        // line 71
        echo "                    ";
        // line 72
        echo "                    ";
        // line 73
        echo "                    ";
        // line 74
        echo "                    ";
        // line 75
        echo "                    ";
        // line 76
        echo "                    ";
        // line 77
        echo "                    ";
        // line 78
        echo "                ";
        // line 79
        echo "            ";
        // line 80
        echo "            ";
        // line 81
        echo "        </table>
    </div>
</div>

";
        
        $__internal_5f7df280043a053e9cf3cc3cf01284cef7e35f64885a86e666d449f3cf644447->leave($__internal_5f7df280043a053e9cf3cc3cf01284cef7e35f64885a86e666d449f3cf644447_prof);

    }

    public function getTemplateName()
    {
        return "omnibus/plan_combustible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 81,  177 => 80,  175 => 79,  173 => 78,  171 => 77,  169 => 76,  167 => 75,  165 => 74,  163 => 73,  161 => 72,  159 => 71,  157 => 70,  154 => 68,  152 => 67,  150 => 66,  147 => 64,  145 => 63,  143 => 62,  141 => 61,  139 => 60,  137 => 59,  135 => 58,  133 => 57,  131 => 56,  123 => 49,  114 => 46,  110 => 45,  106 => 44,  102 => 43,  98 => 42,  94 => 41,  90 => 40,  86 => 39,  83 => 38,  79 => 37,  55 => 15,  53 => 14,  51 => 13,  49 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Plan de Combustible</h3>*/
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
/*                 <th class="bg-primary">Servicio</th>*/
/*                 <th class="bg-primary">Distancia Kms</th>*/
/*                 <th class="bg-primary">Cantidad viajes promedio</th>*/
/*                 <th class="bg-primary">Tipo ómnibus</th>*/
/*                 <th class="bg-primary">Índice de consumo</th>*/
/*                 <th class="bg-primary">Consumo por Viaje</th>*/
/*                 <th class="bg-primary">Consumo Total</th>*/
/* */
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% for reporte in reportes %}*/
/*                 <tr>*/
/*                     <td>{{ reporte.noruta }}</td>*/
/*                     <td>{{ reporte.servicio }}</td>*/
/*                     <td>{{ reporte.distanciakm }}</td>*/
/*                     <td>{{ reporte.viajespromedio }}</td>*/
/*                     <td>{{ reporte.tipo_omnibus }}</td>*/
/*                     <td>{{ reporte.indiceconsumonormado }}</td>*/
/*                     <td>{{ reporte.consumoxviaje }}</td>*/
/*                     <td>{{ reporte.consumototal }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         <table id="sample-table-2" class="table table-striped table-bordered table-hover">*/
/* */
/*             {#<thead>#}*/
/*             {#<tr>#}*/
/*                 {#<th class="bg-primary">Ruta</th>#}*/
/*                 {#<th class="bg-primary">Servicio</th>#}*/
/*                 {#<th class="bg-primary">Distancia Kms</th>#}*/
/*                 {#<th class="bg-primary">Cantidad viajes promedio</th>#}*/
/*                 {#<th class="bg-primary">Cantidad de medios(Ómnibus)</th>#}*/
/*                 {#<th class="bg-primary">Índice de consumo</th>#}*/
/*                 {#<th class="bg-primary">Consumo Total</th>#}*/
/* */
/*             {#</tr>#}*/
/*             {#</thead>#}*/
/*             {#<tbody>#}*/
/* */
/*             {#{% for otro in reportes %}#}*/
/*                 {#<tr>#}*/
/*                     {#<td>{{ otro.noruta }}</td>#}*/
/*                     {#<td>{{ otro.servicio }}</td>#}*/
/*                     {#<td>{{ otro.distanciakm }}</td>#}*/
/*                     {#<td>{{ otro.viajespromedio }}</td>#}*/
/*                     {#<td>{{ otro.cantidadmedios }}</td>#}*/
/*                     {#<td>{{ otro.indiceconsumonormado }}</td>#}*/
/*                     {#<td>{{ otro.consumototal }}</td>#}*/
/*                 {#</tr>#}*/
/*             {#{% endfor %}#}*/
/*             {#</tbody>#}*/
/*         </table>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
