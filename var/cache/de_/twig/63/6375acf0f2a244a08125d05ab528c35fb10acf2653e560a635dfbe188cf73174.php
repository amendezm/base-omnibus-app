<?php

/* :tipoincidencia:show.html.twig */
class __TwigTemplate_5f57401a06c1ceb850eca7e026dc6b0ab40f79c89a6ce2c53f5b6bebc7727172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tipoincidencia:show.html.twig", 1);
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
        $__internal_2f35372deac970b3ed62a941a4482b55b6c047a0a5dfa5dda1999ed30f5e50f8 = $this->env->getExtension("native_profiler");
        $__internal_2f35372deac970b3ed62a941a4482b55b6c047a0a5dfa5dda1999ed30f5e50f8->enter($__internal_2f35372deac970b3ed62a941a4482b55b6c047a0a5dfa5dda1999ed30f5e50f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipoincidencia:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f35372deac970b3ed62a941a4482b55b6c047a0a5dfa5dda1999ed30f5e50f8->leave($__internal_2f35372deac970b3ed62a941a4482b55b6c047a0a5dfa5dda1999ed30f5e50f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bf7afde1fa196704d927294e60af43f8dc139bae4d0c64c5c0b399e530eab32 = $this->env->getExtension("native_profiler");
        $__internal_6bf7afde1fa196704d927294e60af43f8dc139bae4d0c64c5c0b399e530eab32->enter($__internal_6bf7afde1fa196704d927294e60af43f8dc139bae4d0c64c5c0b399e530eab32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6bf7afde1fa196704d927294e60af43f8dc139bae4d0c64c5c0b399e530eab32->leave($__internal_6bf7afde1fa196704d927294e60af43f8dc139bae4d0c64c5c0b399e530eab32_prof);

    }

    public function getTemplateName()
    {
        return ":tipoincidencia:show.html.twig";
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
