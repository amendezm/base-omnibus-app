<?php

/* :omnibus:reporteKmsRecorridos.html.twig */
class __TwigTemplate_8a3c88456365e46b164313f73c1670b89694a006865a4d2f5bec5e1b1a1706fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":omnibus:reporteKmsRecorridos.html.twig", 1);
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
        $__internal_3e0504d664ec3c8f093300875cabcbf115e21f1f9451186ca4944b06ff65b048 = $this->env->getExtension("native_profiler");
        $__internal_3e0504d664ec3c8f093300875cabcbf115e21f1f9451186ca4944b06ff65b048->enter($__internal_3e0504d664ec3c8f093300875cabcbf115e21f1f9451186ca4944b06ff65b048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":omnibus:reporteKmsRecorridos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e0504d664ec3c8f093300875cabcbf115e21f1f9451186ca4944b06ff65b048->leave($__internal_3e0504d664ec3c8f093300875cabcbf115e21f1f9451186ca4944b06ff65b048_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_46b8b1f5de788485696f500d6dffbf02d463e7d48eccc2811ce66bfa12382e79 = $this->env->getExtension("native_profiler");
        $__internal_46b8b1f5de788485696f500d6dffbf02d463e7d48eccc2811ce66bfa12382e79->enter($__internal_46b8b1f5de788485696f500d6dffbf02d463e7d48eccc2811ce66bfa12382e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Kilómetros recorridos por Ómnibus</h3>
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
                <th class=\"bg-primary\">Ómnibus</th>
                <th class=\"bg-primary\">Kms Recorridos Acumulados</th>
                <th class=\"bg-primary\">Mantenimiento</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportes"]) ? $context["reportes"] : $this->getContext($context, "reportes")));
        foreach ($context['_seq'] as $context["_key"] => $context["reporte"]) {
            // line 32
            echo "                <tr>

                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "noomnibus", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "kmrecorridosacumulados", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "mantenimiento", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reporte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>
    </div>



";
        
        $__internal_46b8b1f5de788485696f500d6dffbf02d463e7d48eccc2811ce66bfa12382e79->leave($__internal_46b8b1f5de788485696f500d6dffbf02d463e7d48eccc2811ce66bfa12382e79_prof);

    }

    public function getTemplateName()
    {
        return ":omnibus:reporteKmsRecorridos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 39,  88 => 36,  84 => 35,  80 => 34,  76 => 32,  72 => 31,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Kilómetros recorridos por Ómnibus</h3>*/
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
/*                 <th class="bg-primary">Ómnibus</th>*/
/*                 <th class="bg-primary">Kms Recorridos Acumulados</th>*/
/*                 <th class="bg-primary">Mantenimiento</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% for reporte in reportes %}*/
/*                 <tr>*/
/* */
/*                     <td>{{ reporte.noomnibus }}</td>*/
/*                     <td>{{ reporte.kmrecorridosacumulados }}</td>*/
/*                     <td>{{ reporte.mantenimiento }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
