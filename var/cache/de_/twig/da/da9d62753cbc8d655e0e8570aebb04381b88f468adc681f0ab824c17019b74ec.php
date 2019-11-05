<?php

/* trabajador/show.html.twig */
class __TwigTemplate_24a800b5530dffab8081798f7cc2a4acc283cd0a2e41f786741681fa4ce5a290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "trabajador/show.html.twig", 1);
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
        $__internal_eb6680d93086af1179d8c8dd87ee334a01a7fb6f2a4166242c63847a4da636be = $this->env->getExtension("native_profiler");
        $__internal_eb6680d93086af1179d8c8dd87ee334a01a7fb6f2a4166242c63847a4da636be->enter($__internal_eb6680d93086af1179d8c8dd87ee334a01a7fb6f2a4166242c63847a4da636be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "trabajador/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb6680d93086af1179d8c8dd87ee334a01a7fb6f2a4166242c63847a4da636be->leave($__internal_eb6680d93086af1179d8c8dd87ee334a01a7fb6f2a4166242c63847a4da636be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_164237c5e0d1a524d7a5dad320e317ec6bea5b5bcd74ee75a3787889119ec964 = $this->env->getExtension("native_profiler");
        $__internal_164237c5e0d1a524d7a5dad320e317ec6bea5b5bcd74ee75a3787889119ec964->enter($__internal_164237c5e0d1a524d7a5dad320e317ec6bea5b5bcd74ee75a3787889119ec964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Trabajador</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trabajador"]) ? $context["trabajador"] : $this->getContext($context, "trabajador")), "codigo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trabajador"]) ? $context["trabajador"] : $this->getContext($context, "trabajador")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ci</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trabajador"]) ? $context["trabajador"] : $this->getContext($context, "trabajador")), "ci", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trabajador"]) ? $context["trabajador"] : $this->getContext($context, "trabajador")), "direccion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cargo</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trabajador"]) ? $context["trabajador"] : $this->getContext($context, "trabajador")), "cargo", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("trabajador_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajador_edit", array("id" => $this->getAttribute((isset($context["trabajador"]) ? $context["trabajador"] : $this->getContext($context, "trabajador")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_164237c5e0d1a524d7a5dad320e317ec6bea5b5bcd74ee75a3787889119ec964->leave($__internal_164237c5e0d1a524d7a5dad320e317ec6bea5b5bcd74ee75a3787889119ec964_prof);

    }

    public function getTemplateName()
    {
        return "trabajador/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  98 => 39,  92 => 36,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Trabajador</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ trabajador.codigo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ trabajador.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ci</th>*/
/*                 <td>{{ trabajador.ci }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Direccion</th>*/
/*                 <td>{{ trabajador.direccion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cargo</th>*/
/*                 <td>{{ trabajador.cargo }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('trabajador_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('trabajador_edit', { 'id': trabajador.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
