<?php

/* ruta/reporte.html.twig */
class __TwigTemplate_ef85f706a18089746d841dd76b925494b9e65d80cc1aefb1148205a12920d904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "ruta/reporte.html.twig", 1);
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
        $__internal_a9e14da0bf562323c89ace425bba82bf3aeb8b2fba3e87307af7130fcc596b08 = $this->env->getExtension("native_profiler");
        $__internal_a9e14da0bf562323c89ace425bba82bf3aeb8b2fba3e87307af7130fcc596b08->enter($__internal_a9e14da0bf562323c89ace425bba82bf3aeb8b2fba3e87307af7130fcc596b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ruta/reporte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9e14da0bf562323c89ace425bba82bf3aeb8b2fba3e87307af7130fcc596b08->leave($__internal_a9e14da0bf562323c89ace425bba82bf3aeb8b2fba3e87307af7130fcc596b08_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_a394d4762151ba820d90f290cb9df9772c1079c0589d46670bbd3598fe0d0e6a = $this->env->getExtension("native_profiler");
        $__internal_a394d4762151ba820d90f290cb9df9772c1079c0589d46670bbd3598fe0d0e6a->enter($__internal_a394d4762151ba820d90f290cb9df9772c1079c0589d46670bbd3598fe0d0e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Reporte de Incidencias por Ruta y Ómnibus</h3>
        </div><!-- /.user-block -->
        ";
        // line 10
        echo "            ";
        // line 11
        echo "                ";
        // line 12
        echo "                    ";
        // line 13
        echo "                        ";
        // line 14
        echo "                ";
        // line 15
        echo "            ";
        // line 16
        echo "        ";
        // line 17
        echo "
    </div>
    <div class=\"panel-body\">
        <table id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">

            <thead>
            <tr>
                ";
        // line 25
        echo "                <th class=\"bg-primary\">Ruta</th>
                <th class=\"bg-primary\">Ómnibus</th>
                <th class=\"bg-primary\">Servicio</th>
                <th class=\"bg-primary\">Chofer</th>
                <th class=\"bg-primary\">Total Incidencias</th>
                ";
        // line 31
        echo "                ";
        // line 32
        echo "                ";
        // line 33
        echo "                ";
        // line 34
        echo "                <th><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
        echo "\" alt=\"User Image\"> Acciones</th>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "noruta", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "noomnibus", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "tipo", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "count", array()), "html", null, true);
            echo "</td>
                    ";
            // line 47
            echo "                    ";
            // line 48
            echo "                    ";
            // line 49
            echo "                    ";
            // line 50
            echo "                    ";
            // line 51
            echo "                    <td>
                        <ul>
                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ruta_reporte_show", array("id" => $this->getAttribute($context["reporte"], "noruta", array()))), "html", null, true);
            echo "\"
                               class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                               title=\"Visualizar elemento\"><i class=\"glyphicon glyphicon-eye-open\"></i>
                            </a>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reporte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </tbody>
        </table>
    </div>



";
        
        $__internal_a394d4762151ba820d90f290cb9df9772c1079c0589d46670bbd3598fe0d0e6a->leave($__internal_a394d4762151ba820d90f290cb9df9772c1079c0589d46670bbd3598fe0d0e6a_prof);

    }

    public function getTemplateName()
    {
        return "ruta/reporte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 61,  131 => 53,  127 => 51,  125 => 50,  123 => 49,  121 => 48,  119 => 47,  115 => 45,  111 => 44,  107 => 43,  103 => 42,  99 => 41,  96 => 40,  92 => 39,  83 => 34,  81 => 33,  79 => 32,  77 => 31,  70 => 25,  61 => 17,  59 => 16,  57 => 15,  55 => 14,  53 => 13,  51 => 12,  49 => 11,  47 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Reporte de Incidencias por Ruta y Ómnibus</h3>*/
/*         </div><!-- /.user-block -->*/
/*         {#<div class="box-tools">#}*/
/*             {#<ul class="list-inline">#}*/
/*                 {#<li>#}*/
/*                     {#<a class="text-info" href="{{ path('ruta_index') }}">#}*/
/*                         {#<i class="glyphicon glyphicon glyphicon-hand-left"></i> Atras</a>#}*/
/*                 {#</li>#}*/
/*             {#</ul>#}*/
/*         {#</div>#}*/
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
/*                 <th class="bg-primary">Servicio</th>*/
/*                 <th class="bg-primary">Chofer</th>*/
/*                 <th class="bg-primary">Total Incidencias</th>*/
/*                 {#<th class="bg-primary">No.vale</th>#}*/
/*                 {#<th class="bg-primary">Recaudación</th>#}*/
/*                 {#<th class="bg-primary">Recaudador</th>#}*/
/*                 {#<th class="bg-primary">Demanda Total</th>#}*/
/*                 <th><img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones</th>*/
/*             </tr>*/
/*            </thead>*/
/*             <tbody>*/
/* */
/*             {% for reporte in reportes %}*/
/*                 <tr>*/
/*                     <td>{{ reporte.noruta }}</td>*/
/*                     <td>{{ reporte.noomnibus }}</td>*/
/*                     <td>{{ reporte.tipo}}</td>*/
/*                     <td>{{ reporte.nombre }}</td>*/
/*                     <td>{{ reporte.count }}</td>*/
/*                     {#<td>{{ reporte.novale }}</td>#}*/
/*                     {#<td>{{ reporte.recaudacion }}</td>#}*/
/*                     {#<td>{{ reporte.recaudador }}</td>#}*/
/*                     {#<td>{{ reporte.pre_min }}</td>#}*/
/*                     {#<td>{{ reporte.demandatotal }}</td>#}*/
/*                     <td>*/
/*                         <ul>*/
/*                             <a href="{{ path('ruta_reporte_show',{ 'id': reporte.noruta }) }}"*/
/*                                class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                title="Visualizar elemento"><i class="glyphicon glyphicon-eye-open"></i>*/
/*                             </a>*/
/*                         </ul>*/
/*                     </td>*/
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
