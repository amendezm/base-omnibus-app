<?php

/* :tipocombustible:show.html.twig */
class __TwigTemplate_bcdde4fed58ec705cfe4c4017ce4dc1a726a8bac23b1dc038b29b7f8fadaab4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tipocombustible:show.html.twig", 1);
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
        $__internal_b5f2d81628a427e904a0da10c462749f2c58a9e0733692ed13e91d3f38b1894d = $this->env->getExtension("native_profiler");
        $__internal_b5f2d81628a427e904a0da10c462749f2c58a9e0733692ed13e91d3f38b1894d->enter($__internal_b5f2d81628a427e904a0da10c462749f2c58a9e0733692ed13e91d3f38b1894d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipocombustible:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f2d81628a427e904a0da10c462749f2c58a9e0733692ed13e91d3f38b1894d->leave($__internal_b5f2d81628a427e904a0da10c462749f2c58a9e0733692ed13e91d3f38b1894d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1f1b174bcbf124c74eb8f76bc457f342a93fe86c93fb2ec5ae148dc8c313f1b = $this->env->getExtension("native_profiler");
        $__internal_b1f1b174bcbf124c74eb8f76bc457f342a93fe86c93fb2ec5ae148dc8c313f1b->enter($__internal_b1f1b174bcbf124c74eb8f76bc457f342a93fe86c93fb2ec5ae148dc8c313f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TipoCombustible</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoCombustible"]) ? $context["tipoCombustible"] : $this->getContext($context, "tipoCombustible")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoCombustible"]) ? $context["tipoCombustible"] : $this->getContext($context, "tipoCombustible")), "tipo", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("tipocombustible_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocombustible_edit", array("id" => $this->getAttribute((isset($context["tipoCombustible"]) ? $context["tipoCombustible"] : $this->getContext($context, "tipoCombustible")), "id", array()))), "html", null, true);
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
        
        $__internal_b1f1b174bcbf124c74eb8f76bc457f342a93fe86c93fb2ec5ae148dc8c313f1b->leave($__internal_b1f1b174bcbf124c74eb8f76bc457f342a93fe86c93fb2ec5ae148dc8c313f1b_prof);

    }

    public function getTemplateName()
    {
        return ":tipocombustible:show.html.twig";
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
/*     <h1>TipoCombustible</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ tipoCombustible.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tipo</th>*/
/*                 <td>{{ tipoCombustible.tipo }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tipocombustible_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('tipocombustible_edit', { 'id': tipoCombustible.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
