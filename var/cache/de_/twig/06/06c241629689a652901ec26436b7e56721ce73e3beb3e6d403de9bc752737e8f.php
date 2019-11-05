<?php

/* ruta/show.html.twig */
class __TwigTemplate_1f85e0116a2605877a29e7fa884761bc8be98ae760f9451dc9436a0426f7acf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ruta/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50fc00d46ccbb1b087e6f232b77d71297e8ed2314efff60710d346310f67d309 = $this->env->getExtension("native_profiler");
        $__internal_50fc00d46ccbb1b087e6f232b77d71297e8ed2314efff60710d346310f67d309->enter($__internal_50fc00d46ccbb1b087e6f232b77d71297e8ed2314efff60710d346310f67d309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ruta/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50fc00d46ccbb1b087e6f232b77d71297e8ed2314efff60710d346310f67d309->leave($__internal_50fc00d46ccbb1b087e6f232b77d71297e8ed2314efff60710d346310f67d309_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c9dda1b4fab28aa2fda66cbd8ea6beb29767197a076cd403400492a4471094a = $this->env->getExtension("native_profiler");
        $__internal_5c9dda1b4fab28aa2fda66cbd8ea6beb29767197a076cd403400492a4471094a->enter($__internal_5c9dda1b4fab28aa2fda66cbd8ea6beb29767197a076cd403400492a4471094a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ruta</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rutum"]) ? $context["rutum"] : $this->getContext($context, "rutum")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Servicio</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rutum"]) ? $context["rutum"] : $this->getContext($context, "rutum")), "servicio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Distancia en km</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rutum"]) ? $context["rutum"] : $this->getContext($context, "rutum")), "distanciaKm", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad de pasajeros promedio</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rutum"]) ? $context["rutum"] : $this->getContext($context, "rutum")), "cantPasajerosPromedio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Precio del Pasaje</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rutum"]) ? $context["rutum"] : $this->getContext($context, "rutum")), "precioPasaje", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Salida</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rutum"]) ? $context["rutum"] : $this->getContext($context, "rutum")), "salida", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Destino</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rutum"]) ? $context["rutum"] : $this->getContext($context, "rutum")), "destino", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Frecuencia</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rutum"]) ? $context["rutum"] : $this->getContext($context, "rutum")), "frecuencia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Recaudación x plan</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rutum"]) ? $context["rutum"] : $this->getContext($context, "rutum")), "recaudacion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad de Medios</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rutum"]) ? $context["rutum"] : $this->getContext($context, "rutum")), "cantidadMedios", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Punto de expedición</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rutum"]) ? $context["rutum"] : $this->getContext($context, "rutum")), "pto_expedicion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("ruta_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ruta_edit", array("id" => $this->getAttribute((isset($context["rutum"]) ? $context["rutum"] : $this->getContext($context, "rutum")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5c9dda1b4fab28aa2fda66cbd8ea6beb29767197a076cd403400492a4471094a->leave($__internal_5c9dda1b4fab28aa2fda66cbd8ea6beb29767197a076cd403400492a4471094a_prof);

    }

    public function getTemplateName()
    {
        return "ruta/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 65,  140 => 63,  134 => 60,  128 => 57,  118 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Ruta</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ rutum.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Servicio</th>*/
/*                 <td>{{ rutum.servicio }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Distancia en km</th>*/
/*                 <td>{{ rutum.distanciaKm }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cantidad de pasajeros promedio</th>*/
/*                 <td>{{ rutum.cantPasajerosPromedio }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Precio del Pasaje</th>*/
/*                 <td>{{ rutum.precioPasaje }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Salida</th>*/
/*                 <td>{{ rutum.salida }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Destino</th>*/
/*                 <td>{{ rutum.destino }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Frecuencia</th>*/
/*                 <td>{{ rutum.frecuencia }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Recaudación x plan</th>*/
/*                 <td>{{ rutum.recaudacion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cantidad de Medios</th>*/
/*                 <td>{{ rutum.cantidadMedios }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Punto de expedición</th>*/
/*                 <td>{{ rutum.pto_expedicion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ruta_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('ruta_edit', { 'id': rutum.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
