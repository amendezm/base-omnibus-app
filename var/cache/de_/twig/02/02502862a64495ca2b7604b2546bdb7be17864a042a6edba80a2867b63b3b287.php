<?php

/* pto_expedicion/show.html.twig */
class __TwigTemplate_0acc23f6f31dc99bd4b7be67b5a2803a817eb772827161e9c3b7380a6f5a2a3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pto_expedicion/show.html.twig", 1);
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
        $__internal_750cef8085104a68e7dabaedd30ba9f37e4aec3e8cfd5264df74e84acc0ddcc7 = $this->env->getExtension("native_profiler");
        $__internal_750cef8085104a68e7dabaedd30ba9f37e4aec3e8cfd5264df74e84acc0ddcc7->enter($__internal_750cef8085104a68e7dabaedd30ba9f37e4aec3e8cfd5264df74e84acc0ddcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pto_expedicion/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_750cef8085104a68e7dabaedd30ba9f37e4aec3e8cfd5264df74e84acc0ddcc7->leave($__internal_750cef8085104a68e7dabaedd30ba9f37e4aec3e8cfd5264df74e84acc0ddcc7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8e4768e0a790daf6253e048d9a88dd0f47ffef4c1d8513b6c37b16438973373 = $this->env->getExtension("native_profiler");
        $__internal_a8e4768e0a790daf6253e048d9a88dd0f47ffef4c1d8513b6c37b16438973373->enter($__internal_a8e4768e0a790daf6253e048d9a88dd0f47ffef4c1d8513b6c37b16438973373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tarjeta_combustible</h1>

    <table>
        <tbody>
            <tr>
                <th>Asignacion</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarjeta_combustible"]) ? $context["tarjeta_combustible"] : $this->getContext($context, "tarjeta_combustible")), "asignacion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechaasignacion</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["tarjeta_combustible"]) ? $context["tarjeta_combustible"] : $this->getContext($context, "tarjeta_combustible")), "fechaAsignacion", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarjeta_combustible"]) ? $context["tarjeta_combustible"] : $this->getContext($context, "tarjeta_combustible")), "fechaAsignacion", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Gastoreal</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarjeta_combustible"]) ? $context["tarjeta_combustible"] : $this->getContext($context, "tarjeta_combustible")), "gastoReal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechavencimiento</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["tarjeta_combustible"]) ? $context["tarjeta_combustible"] : $this->getContext($context, "tarjeta_combustible")), "fechaVencimiento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tarjeta_combustible"]) ? $context["tarjeta_combustible"] : $this->getContext($context, "tarjeta_combustible")), "fechaVencimiento", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Tipocombustible</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarjeta_combustible"]) ? $context["tarjeta_combustible"] : $this->getContext($context, "tarjeta_combustible")), "tipoCombustible", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Notarjeta</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarjeta_combustible"]) ? $context["tarjeta_combustible"] : $this->getContext($context, "tarjeta_combustible")), "noTarjeta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ping</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tarjeta_combustible"]) ? $context["tarjeta_combustible"] : $this->getContext($context, "tarjeta_combustible")), "ping", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("tarjeta_combustible_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tarjeta_combustible_edit", array("id" => $this->getAttribute((isset($context["tarjeta_combustible"]) ? $context["tarjeta_combustible"] : $this->getContext($context, "tarjeta_combustible")), "asignacion", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a8e4768e0a790daf6253e048d9a88dd0f47ffef4c1d8513b6c37b16438973373->leave($__internal_a8e4768e0a790daf6253e048d9a88dd0f47ffef4c1d8513b6c37b16438973373_prof);

    }

    public function getTemplateName()
    {
        return "pto_expedicion/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 49,  116 => 47,  110 => 44,  104 => 41,  94 => 34,  87 => 30,  80 => 26,  71 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Tarjeta_combustible</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Asignacion</th>*/
/*                 <td>{{ tarjeta_combustible.asignacion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechaasignacion</th>*/
/*                 <td>{% if tarjeta_combustible.fechaAsignacion %}{{ tarjeta_combustible.fechaAsignacion|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Gastoreal</th>*/
/*                 <td>{{ tarjeta_combustible.gastoReal }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechavencimiento</th>*/
/*                 <td>{% if tarjeta_combustible.fechaVencimiento %}{{ tarjeta_combustible.fechaVencimiento|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tipocombustible</th>*/
/*                 <td>{{ tarjeta_combustible.tipoCombustible }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Notarjeta</th>*/
/*                 <td>{{ tarjeta_combustible.noTarjeta }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ping</th>*/
/*                 <td>{{ tarjeta_combustible.ping }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tarjeta_combustible_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('tarjeta_combustible_edit', { 'id': tarjeta_combustible.asignacion }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
