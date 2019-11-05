<?php

/* :omnibus:show.html.twig */
class __TwigTemplate_5908adac6ecea257ff415b5c50249852613a39f313cfcc9558113e1584d6e441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("index.html.twig", ":omnibus:show.html.twig", 2);
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
        $__internal_cd4b5ac18469637f2512160951d8a557414efce33a44cbb9e0c56a5e7e05b495 = $this->env->getExtension("native_profiler");
        $__internal_cd4b5ac18469637f2512160951d8a557414efce33a44cbb9e0c56a5e7e05b495->enter($__internal_cd4b5ac18469637f2512160951d8a557414efce33a44cbb9e0c56a5e7e05b495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":omnibus:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd4b5ac18469637f2512160951d8a557414efce33a44cbb9e0c56a5e7e05b495->leave($__internal_cd4b5ac18469637f2512160951d8a557414efce33a44cbb9e0c56a5e7e05b495_prof);

    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_aca78b6191473ddfcc959eedf99adc7f976f589c7d1166c93f4df6a7e814e4f6 = $this->env->getExtension("native_profiler");
        $__internal_aca78b6191473ddfcc959eedf99adc7f976f589c7d1166c93f4df6a7e814e4f6->enter($__internal_aca78b6191473ddfcc959eedf99adc7f976f589c7d1166c93f4df6a7e814e4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 5
        echo "    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Lista de Ómnibus</h3>
            </div><!-- /.user-block -->
            <div class=\"box-tools\">
                <ul class=\"list-inline\">
                    <li>
                        <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("omnibus_index");
        echo "\">
                            <i class=\"glyphicon glyphicon glyphicon-hand-left\"></i> Atràs</a>
                    </li>
                </ul>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class=\"box-body\">
    <table class=\"table table-hover\">
        <thead>
        <tr>
        <th>Chapa :<td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "chapa", array()), "html", null, true);
        echo "</td></th>
        </tr>
        <tr>
            <th>No.Ómnibus/Control : <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "noOmnibus", array()), "html", null, true);
        echo "</td></th>
        </tr>
        <tr>
            <th>Tipo :   <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "typeOmnibus", array()), "html", null, true);
        echo "</td></th>
        </tr>
        <tr>
            <th>Base :<td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "base", array()), "html", null, true);
        echo "</td></th>
        </tr>
        <tr>
            <th>Tarjeta de Combustible : <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "tarjetaCombustible", array()), "html", null, true);
        echo "</td></th>
        </tr>
        <tr>
            <th>Índice CR :<td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "indiceConsumoReal", array()), "html", null, true);
        echo "</td></th>
        </tr>
        <tr>
            <th>Kms Recorridos A : <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "kmRecorridosAcumulados", array()), "html", null, true);
        echo "</td></th>
        </tr>
        <tr>
            <th>Revisión :  <td>";
        // line 44
        if ($this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "EnRevision", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td></th>
        </tr>
        <tr>
            <th>Roto :<td>";
        // line 47
        if ($this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "IsRoto", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td></th>
        </tr>
        <tr>
            <th>Por mantenimiento :  <td>";
        // line 50
        if ($this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "isMantenimiento", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td></th>
        </tr>
        <tr>
            <th>Emisión FICAV :<td>";
        // line 53
        if ($this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "FICAVEmision", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "FICAVEmision", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td></th>
        </tr>
        <tr>
            <th>Vencimiento FICAV : <td>";
        // line 56
        if ($this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "FICAVVencimiento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "FICAVVencimiento", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td></th>
        </tr>
        <tr>
            <th>Licencia Operativa E : <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "licenciaOperativaEmision", array()), "Y-m-d"), "html", null, true);
        echo "</td></th>
        </tr>
        <tr>
            <th>Licencia Operativa V : <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "licenciaOperativaVencimiento", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </th>
        </tr>
        <tr>
            <th>";
        // line 66
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones";
        }
        // line 67
        echo "            <td>
                ";
        // line 69
        echo "                    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("omnibus_edit", array("id" => $this->getAttribute((isset($context["omnibus"]) ? $context["omnibus"] : $this->getContext($context, "omnibus")), "id", array()))), "html", null, true);
        echo "\"
                       class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"left\"
                       title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                    </a>
                    ";
        // line 74
        echo "                       ";
        // line 75
        echo "                       ";
        // line 76
        echo "                       ";
        // line 77
        echo "                        ";
        // line 78
        echo "                    ";
        // line 79
        echo "                ";
        // line 80
        echo "            </td>
            </th>
        </tr>
      </thead>
        <tbody>
        ";
        // line 86
        echo "            <tr>


            </tr>
        ";
        // line 91
        echo "
        </tbody>
    </table>
            ";
        // line 95
        echo "

            ";
        // line 98
        echo "        </div>
    </div>
    ";
        // line 101
        echo "        ";
        // line 102
        echo "            ";
        // line 103
        echo "        ";
        // line 104
        echo "        ";
        // line 105
        echo "            ";
        // line 106
        echo "        ";
        // line 107
        echo "
    ";
        
        $__internal_aca78b6191473ddfcc959eedf99adc7f976f589c7d1166c93f4df6a7e814e4f6->leave($__internal_aca78b6191473ddfcc959eedf99adc7f976f589c7d1166c93f4df6a7e814e4f6_prof);

    }

    public function getTemplateName()
    {
        return ":omnibus:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 107,  229 => 106,  227 => 105,  225 => 104,  223 => 103,  221 => 102,  219 => 101,  215 => 98,  211 => 95,  206 => 91,  200 => 86,  193 => 80,  191 => 79,  189 => 78,  187 => 77,  185 => 76,  183 => 75,  181 => 74,  173 => 69,  170 => 67,  164 => 66,  157 => 62,  151 => 59,  143 => 56,  135 => 53,  125 => 50,  115 => 47,  105 => 44,  99 => 41,  93 => 38,  87 => 35,  81 => 32,  75 => 29,  69 => 26,  63 => 23,  50 => 13,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/*     {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Lista de Ómnibus</h3>*/
/*             </div><!-- /.user-block -->*/
/*             <div class="box-tools">*/
/*                 <ul class="list-inline">*/
/*                     <li>*/
/*                         <a class="text-info" href="{{ path('omnibus_index') }}">*/
/*                             <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div><!-- /.box-tools -->*/
/*         </div><!-- /.box-header -->*/
/*         <div class="box-body">*/
/*     <table class="table table-hover">*/
/*         <thead>*/
/*         <tr>*/
/*         <th>Chapa :<td>{{ omnibus.chapa }}</td></th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>No.Ómnibus/Control : <td>{{ omnibus.noOmnibus }}</td></th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Tipo :   <td>{{ omnibus.typeOmnibus}}</td></th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Base :<td>{{ omnibus.base }}</td></th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Tarjeta de Combustible : <td>{{ omnibus.tarjetaCombustible }}</td></th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Índice CR :<td>{{ omnibus.indiceConsumoReal }}</td></th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Kms Recorridos A : <td>{{ omnibus.kmRecorridosAcumulados }}</td></th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Revisión :  <td>{% if omnibus.EnRevision %}Yes{% else %}No{% endif %}</td></th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Roto :<td>{% if omnibus.IsRoto %}Yes{% else %}No{% endif %}</td></th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Por mantenimiento :  <td>{% if omnibus.isMantenimiento %}Yes{% else %}No{% endif %}</td></th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Emisión FICAV :<td>{% if omnibus.FICAVEmision %}{{ omnibus.FICAVEmision|date('Y-m-d') }}{% endif %}</td></th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Vencimiento FICAV : <td>{% if omnibus.FICAVVencimiento %}{{ omnibus.FICAVVencimiento|date('Y-m-d') }}{% endif %}</td></th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Licencia Operativa E : <td>{{ omnibus.licenciaOperativaEmision|date('Y-m-d') }}</td></th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Licencia Operativa V : <td>{{ omnibus.licenciaOperativaVencimiento|date('Y-m-d') }}</td>*/
/*             </th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>{% if not is_granted('ROLE_USUARIO' ) %}<img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones{% endif %}*/
/*             <td>*/
/*                 {#<ul>#}*/
/*                     <a href="{{ path('omnibus_edit',{ 'id': omnibus.id }) }}"*/
/*                        class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="left"*/
/*                        title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                     </a>*/
/*                     {#<a href="{{ path('omnibus_delete',{'id': omnibus.id}) }}"#}*/
/*                        {#class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="rigth"#}*/
/*                        {#title="Eliminar elemento"#}*/
/*                        {#onclick="return confirm('Esta seguro que desea eliminar el elemento')">#}*/
/*                         {#<i class="glyphicon glyphicon-remove"></i>#}*/
/*                     {#</a>#}*/
/*                 {#</ul>#}*/
/*             </td>*/
/*             </th>*/
/*         </tr>*/
/*       </thead>*/
/*         <tbody>*/
/*         {#{% for omnibus in omnibuses %}#}*/
/*             <tr>*/
/* */
/* */
/*             </tr>*/
/*         {#{% endfor %}#}*/
/* */
/*         </tbody>*/
/*     </table>*/
/*             {#<div align="left">#}*/
/* */
/* */
/*             {#</div>#}*/
/*         </div>*/
/*     </div>*/
/*     {#<ul>#}*/
/*         {#<li>#}*/
/*             {#<a href="{{ path('omnibus_index') }}">Back to the list</a>#}*/
/*         {#</li>#}*/
/*         {#<li>#}*/
/*             {#<a href="{{ path('omnibus_edit', { 'id': omnibus.id }) }}">Edit</a>#}*/
/*         {#</li>#}*/
/* */
/*     {#</ul>#}*/
/* {% endblock %}*/
/* */
