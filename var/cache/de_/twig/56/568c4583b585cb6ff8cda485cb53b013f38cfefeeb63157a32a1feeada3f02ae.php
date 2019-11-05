<?php

/* tarjeta_combustible/reporte_tarjeta_mensual.html.twig */
class __TwigTemplate_57e004c6acbc42792293bcbe81344bdcd8c006d3bcbfaae27407f9b9d86cf964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "tarjeta_combustible/reporte_tarjeta_mensual.html.twig", 1);
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
        $__internal_fd178dfd06f3c6f6bfbe01c2d3289d782c630952c63d6b04c1a92c5f2bbd0e76 = $this->env->getExtension("native_profiler");
        $__internal_fd178dfd06f3c6f6bfbe01c2d3289d782c630952c63d6b04c1a92c5f2bbd0e76->enter($__internal_fd178dfd06f3c6f6bfbe01c2d3289d782c630952c63d6b04c1a92c5f2bbd0e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tarjeta_combustible/reporte_tarjeta_mensual.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd178dfd06f3c6f6bfbe01c2d3289d782c630952c63d6b04c1a92c5f2bbd0e76->leave($__internal_fd178dfd06f3c6f6bfbe01c2d3289d782c630952c63d6b04c1a92c5f2bbd0e76_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_3cd6dd93af6e3d5d14cfaa19474e8bb52ae52ef77814446068c2b2e4174299db = $this->env->getExtension("native_profiler");
        $__internal_3cd6dd93af6e3d5d14cfaa19474e8bb52ae52ef77814446068c2b2e4174299db->enter($__internal_3cd6dd93af6e3d5d14cfaa19474e8bb52ae52ef77814446068c2b2e4174299db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Visualizar Recaudación</h3>
        </div><!-- /.user-block -->
        <div class=\"box-tools\">
            <ul class=\"list-inline\">
                <li>
                    <a class=\"text-info\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("recaudacion_index");
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
        echo "                <th class=\"bg-primary\">Ruta</th>
                <th class=\"bg-primary\">Ómnibus</th>
                <th class=\"bg-primary\">Hoja de Ruta</th>
                <th class=\"bg-primary\">Chofer</th>
                <th class=\"bg-primary\">No.sello</th>
                <th class=\"bg-primary\">No.vale</th>
                <th class=\"bg-primary\">Recaudación</th>
                <th class=\"bg-primary\">Recaudador</th>
                ";
        // line 34
        echo "            </tr>
            </thead>
            <tbody>

            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportes"]) ? $context["reportes"] : $this->getContext($context, "reportes")));
        foreach ($context['_seq'] as $context["_key"] => $context["reporte"]) {
            // line 39
            echo "                <tr>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "noruta", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "noomnibus", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "nohojaruta", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "nosello", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "novale", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "recaudacion", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "recaudador", array()), "html", null, true);
            echo "</td>
                    ";
            // line 49
            echo "                    ";
            // line 50
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reporte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_3cd6dd93af6e3d5d14cfaa19474e8bb52ae52ef77814446068c2b2e4174299db->leave($__internal_3cd6dd93af6e3d5d14cfaa19474e8bb52ae52ef77814446068c2b2e4174299db_prof);

    }

    public function getTemplateName()
    {
        return "tarjeta_combustible/reporte_tarjeta_mensual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 52,  122 => 50,  120 => 49,  116 => 47,  112 => 46,  108 => 45,  104 => 44,  100 => 43,  96 => 42,  92 => 41,  88 => 40,  85 => 39,  81 => 38,  75 => 34,  65 => 25,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Visualizar Recaudación</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/*             <ul class="list-inline">*/
/*                 <li>*/
/*                     <a class="text-info" href="{{ path('recaudacion_index') }}">*/
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
/*                 <th class="bg-primary">Ruta</th>*/
/*                 <th class="bg-primary">Ómnibus</th>*/
/*                 <th class="bg-primary">Hoja de Ruta</th>*/
/*                 <th class="bg-primary">Chofer</th>*/
/*                 <th class="bg-primary">No.sello</th>*/
/*                 <th class="bg-primary">No.vale</th>*/
/*                 <th class="bg-primary">Recaudación</th>*/
/*                 <th class="bg-primary">Recaudador</th>*/
/*                 {#<th class="bg-primary">Demanda Total</th>#}*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% for reporte in reportes %}*/
/*                 <tr>*/
/*                     <td>{{ reporte.noruta }}</td>*/
/*                     <td>{{ reporte.noomnibus }}</td>*/
/*                     <td>{{ reporte.nohojaruta }}</td>*/
/*                     <td>{{ reporte.nombre }}</td>*/
/*                     <td>{{ reporte.nosello }}</td>*/
/*                     <td>{{ reporte.novale }}</td>*/
/*                     <td>{{ reporte.recaudacion }}</td>*/
/*                     <td>{{ reporte.recaudador }}</td>*/
/*                     {#<td>{{ reporte.pre_min }}</td>#}*/
/*                     {#<td>{{ reporte.demandatotal }}</td>#}*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
