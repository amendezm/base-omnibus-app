<?php

/* usuario/reportes.html.twig */
class __TwigTemplate_0cb76ab48cbb2e3fbb46c8b28a401d1d78ada0d9e4287b2fe427d7eff3935eb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f4ac1ab0e603cc3d821c7f44860f2edd1e0894e316b159aa64b4467d85b9210 = $this->env->getExtension("native_profiler");
        $__internal_2f4ac1ab0e603cc3d821c7f44860f2edd1e0894e316b159aa64b4467d85b9210->enter($__internal_2f4ac1ab0e603cc3d821c7f44860f2edd1e0894e316b159aa64b4467d85b9210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/reportes.html.twig"));

        // line 1
        echo "

<h1>Reporte de Usuario</h1>
<table >
        <thead>
            <tr>
                <th>Nombre del Usuario</th>           
                <th>Cargo</th>                      
            <th style=\"width: 130px; text-align: center\">Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entitys"]) ? $context["entitys"] : $this->getContext($context, "entitys")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 14
            echo "         
            <tr>
                <td class=\"bigger-130\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td class=\"bigger-130\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cargo", array()), "html", null, true);
            echo "</td>                
                <td style=\"text-align: center\">
                              
                </td>
            </tr>
      
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
        <tfoot>
            <tr>
                        


            </tr>
        </tfoot>             
    </table>";
        
        $__internal_2f4ac1ab0e603cc3d821c7f44860f2edd1e0894e316b159aa64b4467d85b9210->leave($__internal_2f4ac1ab0e603cc3d821c7f44860f2edd1e0894e316b159aa64b4467d85b9210_prof);

    }

    public function getTemplateName()
    {
        return "usuario/reportes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  48 => 17,  44 => 16,  40 => 14,  36 => 13,  22 => 1,);
    }
}
/* */
/* */
/* <h1>Reporte de Usuario</h1>*/
/* <table >*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nombre del Usuario</th>           */
/*                 <th>Cargo</th>                      */
/*             <th style="width: 130px; text-align: center">Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entitys %}*/
/*          */
/*             <tr>*/
/*                 <td class="bigger-130">{{ entity.nombre }}</td>*/
/*                 <td class="bigger-130">{{ entity.cargo }}</td>                */
/*                 <td style="text-align: center">*/
/*                               */
/*                 </td>*/
/*             </tr>*/
/*       */
/*         {% endfor %}*/
/*         </tbody>*/
/*         <tfoot>*/
/*             <tr>*/
/*                         */
/* */
/* */
/*             </tr>*/
/*         </tfoot>             */
/*     </table>*/
