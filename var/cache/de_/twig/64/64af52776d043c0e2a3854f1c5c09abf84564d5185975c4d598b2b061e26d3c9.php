<?php

/* :usuario:reportes.html.twig */
class __TwigTemplate_8b5b9da696881bd55c75521469feeedc8ffdfe181b42be6422da11bc494f20f3 extends Twig_Template
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
        $__internal_a990cff1c0469665ae74124e9c6be03fd0895dd3637726498514503fac430582 = $this->env->getExtension("native_profiler");
        $__internal_a990cff1c0469665ae74124e9c6be03fd0895dd3637726498514503fac430582->enter($__internal_a990cff1c0469665ae74124e9c6be03fd0895dd3637726498514503fac430582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuario:reportes.html.twig"));

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
        
        $__internal_a990cff1c0469665ae74124e9c6be03fd0895dd3637726498514503fac430582->leave($__internal_a990cff1c0469665ae74124e9c6be03fd0895dd3637726498514503fac430582_prof);

    }

    public function getTemplateName()
    {
        return ":usuario:reportes.html.twig";
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
