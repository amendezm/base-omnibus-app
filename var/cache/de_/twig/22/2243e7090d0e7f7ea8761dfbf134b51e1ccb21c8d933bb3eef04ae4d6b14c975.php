<?php

/* tipoincidencia/show.html.twig */
class __TwigTemplate_81e0aa8291035db5adc3f2988faf076dfc4fb963e9dede5523a05f7fc6a74759 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tipoincidencia/show.html.twig", 1);
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
        $__internal_4438c5ef3ce78dd8fbc73f8c117d7e9c24cbf1a1b971e3a7422d7c27ff59de27 = $this->env->getExtension("native_profiler");
        $__internal_4438c5ef3ce78dd8fbc73f8c117d7e9c24cbf1a1b971e3a7422d7c27ff59de27->enter($__internal_4438c5ef3ce78dd8fbc73f8c117d7e9c24cbf1a1b971e3a7422d7c27ff59de27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipoincidencia/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4438c5ef3ce78dd8fbc73f8c117d7e9c24cbf1a1b971e3a7422d7c27ff59de27->leave($__internal_4438c5ef3ce78dd8fbc73f8c117d7e9c24cbf1a1b971e3a7422d7c27ff59de27_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ea2ab02388cb52ee8fee454943c1b3e9f1f60734e9046080adeea9eb97c776a = $this->env->getExtension("native_profiler");
        $__internal_7ea2ab02388cb52ee8fee454943c1b3e9f1f60734e9046080adeea9eb97c776a->enter($__internal_7ea2ab02388cb52ee8fee454943c1b3e9f1f60734e9046080adeea9eb97c776a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TipoIncidencia</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoIncidencium"]) ? $context["tipoIncidencium"] : $this->getContext($context, "tipoIncidencium")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoIncidencium"]) ? $context["tipoIncidencium"] : $this->getContext($context, "tipoIncidencium")), "tipoIncidencias", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("tipoincidencia_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoincidencia_edit", array("id" => $this->getAttribute((isset($context["tipoIncidencium"]) ? $context["tipoIncidencium"] : $this->getContext($context, "tipoIncidencium")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7ea2ab02388cb52ee8fee454943c1b3e9f1f60734e9046080adeea9eb97c776a->leave($__internal_7ea2ab02388cb52ee8fee454943c1b3e9f1f60734e9046080adeea9eb97c776a_prof);

    }

    public function getTemplateName()
    {
        return "tipoincidencia/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>TipoIncidencia</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ tipoIncidencium.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tipo</th>*/
/*                 <td>{{ tipoIncidencium.tipoIncidencias }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tipoincidencia_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('tipoincidencia_edit', { 'id': tipoIncidencium.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
