<?php

/* :tipo_omnibus:show.html.twig */
class __TwigTemplate_22d8e64d0a8a2d29cfcc9a968ab26224746e32f4252f6b9fe4324fe493bca06e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tipo_omnibus:show.html.twig", 1);
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
        $__internal_81914db7da5c72329537c47686631b0dfd8b4d2fed02beb366b528ab25ad3a83 = $this->env->getExtension("native_profiler");
        $__internal_81914db7da5c72329537c47686631b0dfd8b4d2fed02beb366b528ab25ad3a83->enter($__internal_81914db7da5c72329537c47686631b0dfd8b4d2fed02beb366b528ab25ad3a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipo_omnibus:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81914db7da5c72329537c47686631b0dfd8b4d2fed02beb366b528ab25ad3a83->leave($__internal_81914db7da5c72329537c47686631b0dfd8b4d2fed02beb366b528ab25ad3a83_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f3e99bf2c22dcbcb70826c85c6d23626c72f9b7b37fa2a0fe19b0d136b2724a = $this->env->getExtension("native_profiler");
        $__internal_8f3e99bf2c22dcbcb70826c85c6d23626c72f9b7b37fa2a0fe19b0d136b2724a->enter($__internal_8f3e99bf2c22dcbcb70826c85c6d23626c72f9b7b37fa2a0fe19b0d136b2724a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tipo_omnibus</h1>
    <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipo_omnibus"]) ? $context["tipo_omnibus"] : $this->getContext($context, "tipo_omnibus")), "capacidad_sentados", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipo_omnibus"]) ? $context["tipo_omnibus"] : $this->getContext($context, "tipo_omnibus")), "capacidad_parados", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipo_omnibus"]) ? $context["tipo_omnibus"] : $this->getContext($context, "tipo_omnibus")), "capacidad_total", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipo_omnibus"]) ? $context["tipo_omnibus"] : $this->getContext($context, "tipo_omnibus")), "indiceConsumoNormado", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipo_omnibus"]) ? $context["tipo_omnibus"] : $this->getContext($context, "tipo_omnibus")), "desviacion", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipo_omnibus"]) ? $context["tipo_omnibus"] : $this->getContext($context, "tipo_omnibus")), "cantidadCombustiblelitros", array()), "html", null, true);
        echo "</td>
    <table>
        <tbody>
            <tr>
                <th>Tipo ómnibus</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipo_omnibus"]) ? $context["tipo_omnibus"] : $this->getContext($context, "tipo_omnibus")), "tipo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Capacidad sentad</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipo_omnibus"]) ? $context["tipo_omnibus"] : $this->getContext($context, "tipo_omnibus")), "capacidad_sentados", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Indiceconsumo</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipo_omnibus"]) ? $context["tipo_omnibus"] : $this->getContext($context, "tipo_omnibus")), "indiceConsumo", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("tipo_omnibus_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipo_omnibus_edit", array("id" => $this->getAttribute((isset($context["tipo_omnibus"]) ? $context["tipo_omnibus"] : $this->getContext($context, "tipo_omnibus")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8f3e99bf2c22dcbcb70826c85c6d23626c72f9b7b37fa2a0fe19b0d136b2724a->leave($__internal_8f3e99bf2c22dcbcb70826c85c6d23626c72f9b7b37fa2a0fe19b0d136b2724a_prof);

    }

    public function getTemplateName()
    {
        return ":tipo_omnibus:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  107 => 36,  101 => 33,  95 => 30,  85 => 23,  78 => 19,  71 => 15,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Tipo_omnibus</h1>*/
/*     <td>{{ tipo_omnibus.capacidad_sentados }}</td>*/
/*     <td>{{ tipo_omnibus.capacidad_parados }}</td>*/
/*     <td>{{ tipo_omnibus.capacidad_total }}</td>*/
/*     <td>{{ tipo_omnibus.indiceConsumoNormado }}</td>*/
/*     <td>{{ tipo_omnibus.desviacion }}</td>*/
/*     <td>{{ tipo_omnibus.cantidadCombustiblelitros }}</td>*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Tipo ómnibus</th>*/
/*                 <td>{{ tipo_omnibus.tipo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Capacidad sentad</th>*/
/*                 <td>{{ tipo_omnibus.capacidad_sentados }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Indiceconsumo</th>*/
/*                 <td>{{ tipo_omnibus.indiceConsumo }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tipo_omnibus_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('tipo_omnibus_edit', { 'id': tipo_omnibus.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
