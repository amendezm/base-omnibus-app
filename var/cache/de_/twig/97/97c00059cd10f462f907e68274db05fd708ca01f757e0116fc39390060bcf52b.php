<?php

/* gps/show.html.twig */
class __TwigTemplate_ae71fb8afdf3381000730de130fccb0397a7e69fb7be68c97b224ad963eec118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "gps/show.html.twig", 1);
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
        $__internal_d833003452691052359320b13891b8a20fbb89fe599f6ff12466fd20a735917f = $this->env->getExtension("native_profiler");
        $__internal_d833003452691052359320b13891b8a20fbb89fe599f6ff12466fd20a735917f->enter($__internal_d833003452691052359320b13891b8a20fbb89fe599f6ff12466fd20a735917f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gps/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d833003452691052359320b13891b8a20fbb89fe599f6ff12466fd20a735917f->leave($__internal_d833003452691052359320b13891b8a20fbb89fe599f6ff12466fd20a735917f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24bd47f159af664dd3ee2e70cfce4e71b3f5d47f0972aa33e76e5ebc3009993a = $this->env->getExtension("native_profiler");
        $__internal_24bd47f159af664dd3ee2e70cfce4e71b3f5d47f0972aa33e76e5ebc3009993a->enter($__internal_24bd47f159af664dd3ee2e70cfce4e71b3f5d47f0972aa33e76e5ebc3009993a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>GPS</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gP"]) ? $context["gP"] : $this->getContext($context, "gP")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Combustible</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gP"]) ? $context["gP"] : $this->getContext($context, "gP")), "combustible", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kmrecorridos</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gP"]) ? $context["gP"] : $this->getContext($context, "gP")), "kmRecorridos", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["gP"]) ? $context["gP"] : $this->getContext($context, "gP")), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["gP"]) ? $context["gP"] : $this->getContext($context, "gP")), "fecha", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("gps_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gps_edit", array("id" => $this->getAttribute((isset($context["gP"]) ? $context["gP"] : $this->getContext($context, "gP")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_24bd47f159af664dd3ee2e70cfce4e71b3f5d47f0972aa33e76e5ebc3009993a->leave($__internal_24bd47f159af664dd3ee2e70cfce4e71b3f5d47f0972aa33e76e5ebc3009993a_prof);

    }

    public function getTemplateName()
    {
        return "gps/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  87 => 32,  81 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>GPS</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ gP.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Combustible</th>*/
/*                 <td>{{ gP.combustible }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Kmrecorridos</th>*/
/*                 <td>{{ gP.kmRecorridos }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <td>{% if gP.fecha %}{{ gP.fecha|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('gps_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('gps_edit', { 'id': gP.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
