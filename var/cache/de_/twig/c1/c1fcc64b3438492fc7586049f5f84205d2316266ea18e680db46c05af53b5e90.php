<?php

/* :chofer:reporteHorasTrabajo.html.twig */
class __TwigTemplate_5d711e1dbe5299376dd55c4cfbbe825b009d51e466fa4f2b0e1a8c25e6efb777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":chofer:reporteHorasTrabajo.html.twig", 1);
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
        $__internal_919c5c1b7da542846722f11494424ba1dc4983aef20d5d2d521070d39b864dab = $this->env->getExtension("native_profiler");
        $__internal_919c5c1b7da542846722f11494424ba1dc4983aef20d5d2d521070d39b864dab->enter($__internal_919c5c1b7da542846722f11494424ba1dc4983aef20d5d2d521070d39b864dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chofer:reporteHorasTrabajo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_919c5c1b7da542846722f11494424ba1dc4983aef20d5d2d521070d39b864dab->leave($__internal_919c5c1b7da542846722f11494424ba1dc4983aef20d5d2d521070d39b864dab_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_243f042dfcdb1abe4c083a645f38fb688d4e240a1b11e2c6bb184493cbc7cd9d = $this->env->getExtension("native_profiler");
        $__internal_243f042dfcdb1abe4c083a645f38fb688d4e240a1b11e2c6bb184493cbc7cd9d->enter($__internal_243f042dfcdb1abe4c083a645f38fb688d4e240a1b11e2c6bb184493cbc7cd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Resumen de horas trabajadas por Chofer</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a class=\"text-info\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("index");
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
                ";
        // line 25
        echo "                ";
        // line 26
        echo "                ";
        // line 27
        echo "                ";
        // line 28
        echo "                <th class=\"bg-primary\">Chofer</th>
                <th class=\"bg-primary\">Básico</th>
                <th class=\"bg-primary\">Con incremento</th>
                <th class=\"bg-primary\">Confronta</th>
                <th class=\"bg-primary\">Turno Partido</th>
                <th class=\"bg-primary\">Voluntario</th>
                <th class=\"bg-primary\">Total de Horas</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportes"]) ? $context["reportes"] : $this->getContext($context, "reportes")));
        foreach ($context['_seq'] as $context["_key"] => $context["reporte"]) {
            // line 40
            echo "                <tr>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "horas_basico", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "horas_conincremento", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "horas_turnopartido", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "horas_confronta", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "horas_voluntario", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "totalhorastrabajadas", array()), "html", null, true);
            echo "</td>
                    ";
            // line 49
            echo "                    ";
            // line 50
            echo "                    ";
            // line 51
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reporte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>
        </table>
    </div>

</div>

";
        
        $__internal_243f042dfcdb1abe4c083a645f38fb688d4e240a1b11e2c6bb184493cbc7cd9d->leave($__internal_243f042dfcdb1abe4c083a645f38fb688d4e240a1b11e2c6bb184493cbc7cd9d_prof);

    }

    public function getTemplateName()
    {
        return ":chofer:reporteHorasTrabajo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 53,  123 => 51,  121 => 50,  119 => 49,  115 => 47,  111 => 46,  107 => 45,  103 => 44,  99 => 43,  95 => 42,  91 => 41,  88 => 40,  84 => 39,  71 => 28,  69 => 27,  67 => 26,  65 => 25,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Resumen de horas trabajadas por Chofer</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('index') }}">*/
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
/*                 {#<th class="bg-primary">ID</th>#}*/
/*                 {#<th class="bg-primary">Ruta</th>#}*/
/*                 {#<th class="bg-primary">Ómnibus</th>#}*/
/*                 {#<th class="bg-primary">Hoja de Ruta</th>#}*/
/*                 <th class="bg-primary">Chofer</th>*/
/*                 <th class="bg-primary">Básico</th>*/
/*                 <th class="bg-primary">Con incremento</th>*/
/*                 <th class="bg-primary">Confronta</th>*/
/*                 <th class="bg-primary">Turno Partido</th>*/
/*                 <th class="bg-primary">Voluntario</th>*/
/*                 <th class="bg-primary">Total de Horas</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% for reporte in reportes %}*/
/*                 <tr>*/
/*                     <td>{{ reporte.nombre }}</td>*/
/*                     <td>{{ reporte.horas_basico }}</td>*/
/*                     <td>{{ reporte.horas_conincremento }}</td>*/
/*                     <td>{{ reporte.horas_turnopartido }}</td>*/
/*                     <td>{{ reporte.horas_confronta }}</td>*/
/*                     <td>{{ reporte.horas_voluntario }}</td>*/
/*                     <td>{{ reporte.totalhorastrabajadas }}</td>*/
/*                     {#<td>{{ reporte.recaudador }}</td>#}*/
/*                     {#<td>{{ reporte.pre_min }}</td>#}*/
/*                     {#<td>{{ reporte.demandatotal }}</td>#}*/
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
