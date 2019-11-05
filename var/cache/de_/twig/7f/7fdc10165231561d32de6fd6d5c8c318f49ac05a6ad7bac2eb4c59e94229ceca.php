<?php

/* :base:show.html.twig */
class __TwigTemplate_5364323bac99fa67141e3c68da3507036caf5e730d87e2f2f11600bada3126e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":base:show.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e99f91d16df4da6126d9c913697f55981a73d47f4fff59c48371c3867a70d4a = $this->env->getExtension("native_profiler");
        $__internal_5e99f91d16df4da6126d9c913697f55981a73d47f4fff59c48371c3867a70d4a->enter($__internal_5e99f91d16df4da6126d9c913697f55981a73d47f4fff59c48371c3867a70d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":base:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e99f91d16df4da6126d9c913697f55981a73d47f4fff59c48371c3867a70d4a->leave($__internal_5e99f91d16df4da6126d9c913697f55981a73d47f4fff59c48371c3867a70d4a_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2f94f63db9d406f62a9ebc3594d720193ddee854c4ab8bed3446b36e4aabd5f1 = $this->env->getExtension("native_profiler");
        $__internal_2f94f63db9d406f62a9ebc3594d720193ddee854c4ab8bed3446b36e4aabd5f1->enter($__internal_2f94f63db9d406f62a9ebc3594d720193ddee854c4ab8bed3446b36e4aabd5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <h1>Base</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["base"]) ? $context["base"] : $this->getContext($context, "base")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["base"]) ? $context["base"] : $this->getContext($context, "base")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["base"]) ? $context["base"] : $this->getContext($context, "base")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["base"]) ? $context["base"] : $this->getContext($context, "base")), "direccion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("base_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("base_edit", array("id" => $this->getAttribute((isset($context["base"]) ? $context["base"] : $this->getContext($context, "base")), "id", array()))), "html", null, true);
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
        
        $__internal_2f94f63db9d406f62a9ebc3594d720193ddee854c4ab8bed3446b36e4aabd5f1->leave($__internal_2f94f63db9d406f62a9ebc3594d720193ddee854c4ab8bed3446b36e4aabd5f1_prof);

    }

    public function getTemplateName()
    {
        return ":base:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     <h1>Base</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ base.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ base.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Descripción</th>*/
/*                 <td>{{ base.descripcion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dirección</th>*/
/*                 <td>{{ base.direccion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('base_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('base_edit', { 'id': base.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
