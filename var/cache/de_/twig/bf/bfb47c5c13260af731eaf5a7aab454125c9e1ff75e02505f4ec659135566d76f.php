<?php

/* omnibus/reporteKmsRecorridos.html.twig */
class __TwigTemplate_dcb307764455f5370f1a383f350c0a9cca9e64f5dbd83ba5d49cf185ae70beb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "omnibus/reporteKmsRecorridos.html.twig", 1);
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
        $__internal_193f9a68bac1b9627614c2413f4a95363980f14cc66ca4f019d2b234cf8e195b = $this->env->getExtension("native_profiler");
        $__internal_193f9a68bac1b9627614c2413f4a95363980f14cc66ca4f019d2b234cf8e195b->enter($__internal_193f9a68bac1b9627614c2413f4a95363980f14cc66ca4f019d2b234cf8e195b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "omnibus/reporteKmsRecorridos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_193f9a68bac1b9627614c2413f4a95363980f14cc66ca4f019d2b234cf8e195b->leave($__internal_193f9a68bac1b9627614c2413f4a95363980f14cc66ca4f019d2b234cf8e195b_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ac7f0bfd37028682556977ae2a67374ecfbd47911d6ea90e1256dc06eb901591 = $this->env->getExtension("native_profiler");
        $__internal_ac7f0bfd37028682556977ae2a67374ecfbd47911d6ea90e1256dc06eb901591->enter($__internal_ac7f0bfd37028682556977ae2a67374ecfbd47911d6ea90e1256dc06eb901591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_ac7f0bfd37028682556977ae2a67374ecfbd47911d6ea90e1256dc06eb901591->leave($__internal_ac7f0bfd37028682556977ae2a67374ecfbd47911d6ea90e1256dc06eb901591_prof);

    }

    public function getTemplateName()
    {
        return "omnibus/reporteKmsRecorridos.html.twig";
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
