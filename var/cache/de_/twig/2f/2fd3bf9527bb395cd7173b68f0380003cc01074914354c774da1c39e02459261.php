<?php

/* tarjeta_combustible/show.html.twig */
class __TwigTemplate_4187cf501f72ddf34317f3ccb0b8f18311b9ee430fb3716f23f2b3c2abd10cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tarjeta_combustible/show.html.twig", 1);
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
        $__internal_66fd7d0b82648accb085d676b535b6bee0e972272c367ae0062dfb4bfb8a7e59 = $this->env->getExtension("native_profiler");
        $__internal_66fd7d0b82648accb085d676b535b6bee0e972272c367ae0062dfb4bfb8a7e59->enter($__internal_66fd7d0b82648accb085d676b535b6bee0e972272c367ae0062dfb4bfb8a7e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tarjeta_combustible/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66fd7d0b82648accb085d676b535b6bee0e972272c367ae0062dfb4bfb8a7e59->leave($__internal_66fd7d0b82648accb085d676b535b6bee0e972272c367ae0062dfb4bfb8a7e59_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba91607633420e6f3152469c62baf3741c54edb5075dc370f31f49189a846bd0 = $this->env->getExtension("native_profiler");
        $__internal_ba91607633420e6f3152469c62baf3741c54edb5075dc370f31f49189a846bd0->enter($__internal_ba91607633420e6f3152469c62baf3741c54edb5075dc370f31f49189a846bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ba91607633420e6f3152469c62baf3741c54edb5075dc370f31f49189a846bd0->leave($__internal_ba91607633420e6f3152469c62baf3741c54edb5075dc370f31f49189a846bd0_prof);

    }

    public function getTemplateName()
    {
        return "tarjeta_combustible/show.html.twig";
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
