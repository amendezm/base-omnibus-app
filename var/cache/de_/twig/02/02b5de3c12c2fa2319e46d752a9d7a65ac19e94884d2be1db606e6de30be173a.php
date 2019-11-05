<?php

/* :chofer:show.html.twig */
class __TwigTemplate_31de6c0166e9b7d90e4bfd33a4d1d5c944a1e66c9d71e46f860c39620bd15170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":chofer:show.html.twig", 1);
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
        $__internal_93ce91543a3979ef38674bc54efae509d021742f8e5103ad702f5cabb39c2a92 = $this->env->getExtension("native_profiler");
        $__internal_93ce91543a3979ef38674bc54efae509d021742f8e5103ad702f5cabb39c2a92->enter($__internal_93ce91543a3979ef38674bc54efae509d021742f8e5103ad702f5cabb39c2a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chofer:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93ce91543a3979ef38674bc54efae509d021742f8e5103ad702f5cabb39c2a92->leave($__internal_93ce91543a3979ef38674bc54efae509d021742f8e5103ad702f5cabb39c2a92_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_6b8721f0a9d56c50de1782c281a0728c02d6215e52db79674bc90ae83e37c1e7 = $this->env->getExtension("native_profiler");
        $__internal_6b8721f0a9d56c50de1782c281a0728c02d6215e52db79674bc90ae83e37c1e7->enter($__internal_6b8721f0a9d56c50de1782c281a0728c02d6215e52db79674bc90ae83e37c1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <h1>Chofer</h1>
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Lista de Choferes</h3>
            </div><!-- /.user-block -->
            <div class=\"box-tools\">
                <ul class=\"list-inline\">
                    <li>
                        <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("chofer_index");
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
                    <th>Nombre y Apellidos</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "nombre", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Ómnibus</th>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "omnibus", array()), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 31
        echo "                    ";
        // line 32
        echo "                    ";
        // line 33
        echo "                ";
        // line 34
        echo "                <tr>
                    <th>LC</th>
                    <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "noLicenciaOperativa", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Recalificación Emitida :<td>";
        // line 39
        if ($this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "recalificacionEmision", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "recalificacionEmision", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td></th>
                </tr>
                <tr>
                    <th>Recalificación Vence : <td>";
        // line 42
        if ($this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "recalificacionVencimiento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "recalificacionVencimiento", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td></th>
                </tr>
                <tr>
                    <th>Examen Médico Emitido:<td>";
        // line 45
        if ($this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "examenMedicoEmision", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "examenMedicoEmision", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td></th>
                </tr>
                <tr>
                    <th>Examen Médico Vence:  <td>";
        // line 48
        if ($this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "examenMedicoVencimiento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "examenMedicoVencimiento", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td></th>
                </tr>
                <tr>
                    <th>Examen Psicofisiológico Emitido :<td>";
        // line 51
        if ($this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "examenPsicofisiologicoEmision", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "examenPsicofisiologicoEmision", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td></th>
                </tr>
                <tr>
                    <th>Examen Psicofisiológico Vence:<td>";
        // line 54
        if ($this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "examenPsicofisiologicoVencimiento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "examenPsicofisiologicoVencimiento", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td></th>
                </tr>
                <tr>
                    <th>LC Emitida : <td>";
        // line 57
        if ($this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "licenciaEmision", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "licenciaEmision", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td></th>
                </tr>
                <tr>
                    <th>LC Vence : <td>";
        // line 60
        if ($this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "licenciaVencimiento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "licenciaVencimiento", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td></th>
                </tr>
                <tr>
                    <th>";
        // line 63
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones";
        }
        // line 64
        echo "                    <td>
                        ";
        // line 66
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("omnibus_edit", array("id" => $this->getAttribute((isset($context["chofer"]) ? $context["chofer"] : $this->getContext($context, "chofer")), "id", array()))), "html", null, true);
        echo "\"
                           class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"left\"
                           title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                        </a>
                        ";
        // line 71
        echo "                           ";
        // line 72
        echo "                           ";
        // line 73
        echo "                           ";
        // line 74
        echo "                            ";
        // line 75
        echo "                        ";
        // line 76
        echo "                        ";
        // line 77
        echo "                    </td>
                    </th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 83
        echo "                <tr>


                </tr>
                ";
        // line 88
        echo "
                </tbody>
            </table>
            ";
        // line 92
        echo "

            ";
        // line 95
        echo "        </div>
    </div>
";
        
        $__internal_6b8721f0a9d56c50de1782c281a0728c02d6215e52db79674bc90ae83e37c1e7->leave($__internal_6b8721f0a9d56c50de1782c281a0728c02d6215e52db79674bc90ae83e37c1e7_prof);

    }

    public function getTemplateName()
    {
        return ":chofer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 95,  204 => 92,  199 => 88,  193 => 83,  186 => 77,  184 => 76,  182 => 75,  180 => 74,  178 => 73,  176 => 72,  174 => 71,  166 => 66,  163 => 64,  157 => 63,  149 => 60,  141 => 57,  133 => 54,  125 => 51,  117 => 48,  109 => 45,  101 => 42,  93 => 39,  87 => 36,  83 => 34,  81 => 33,  79 => 32,  77 => 31,  72 => 28,  65 => 24,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido%}*/
/*     <h1>Chofer</h1>*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Lista de Choferes</h3>*/
/*             </div><!-- /.user-block -->*/
/*             <div class="box-tools">*/
/*                 <ul class="list-inline">*/
/*                     <li>*/
/*                         <a class="text-info" href="{{ path('chofer_index') }}">*/
/*                             <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div><!-- /.box-tools -->*/
/*         </div><!-- /.box-header -->*/
/*         <div class="box-body">*/
/*             <table class="table table-hover">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Nombre y Apellidos</th>*/
/*                     <td>{{ chofer.nombre }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Ómnibus</th>*/
/*                     <td>{{ chofer.omnibus }}</td>*/
/*                 </tr>*/
/*                 {#<tr>#}*/
/*                     {#<th>CI</th>#}*/
/*                     {#<td>{{ chofer.cI }}</td>#}*/
/*                 {#</tr>#}*/
/*                 <tr>*/
/*                     <th>LC</th>*/
/*                     <td>{{ chofer.noLicenciaOperativa }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Recalificación Emitida :<td>{% if chofer.recalificacionEmision %}{{ chofer.recalificacionEmision|date('Y-m-d') }}{% endif %}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Recalificación Vence : <td>{% if chofer.recalificacionVencimiento %}{{ chofer.recalificacionVencimiento|date('Y-m-d') }}{% endif %}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Examen Médico Emitido:<td>{% if chofer.examenMedicoEmision %}{{ chofer.examenMedicoEmision|date('Y-m-d') }}{% endif %}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Examen Médico Vence:  <td>{% if chofer.examenMedicoVencimiento %}{{ chofer.examenMedicoVencimiento|date('Y-m-d') }}{% endif %}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Examen Psicofisiológico Emitido :<td>{% if chofer.examenPsicofisiologicoEmision %}{{ chofer.examenPsicofisiologicoEmision|date('Y-m-d') }}{% endif %}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Examen Psicofisiológico Vence:<td>{% if chofer.examenPsicofisiologicoVencimiento %}{{ chofer.examenPsicofisiologicoVencimiento|date('Y-m-d') }}{% endif %}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>LC Emitida : <td>{% if chofer.licenciaEmision %}{{ chofer.licenciaEmision|date('Y-m-d') }}{% endif %}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>LC Vence : <td>{% if chofer.licenciaVencimiento %}{{ chofer.licenciaVencimiento|date('Y-m-d') }}{% endif %}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>{% if not is_granted('ROLE_USUARIO' ) %}<img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones{% endif %}*/
/*                     <td>*/
/*                         {#<ul>#}*/
/*                         <a href="{{ path('omnibus_edit',{ 'id': chofer.id }) }}"*/
/*                            class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="left"*/
/*                            title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                         </a>*/
/*                         {#<a href="{{ path('omnibus_delete',{'id': chofer.id}) }}"#}*/
/*                            {#class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="rigth"#}*/
/*                            {#title="Eliminar elemento"#}*/
/*                            {#onclick="return confirm('Esta seguro que desea eliminar el elemento')">#}*/
/*                             {#<i class="glyphicon glyphicon-remove"></i>#}*/
/*                         {#</a>#}*/
/*                         {#</ul>#}*/
/*                     </td>*/
/*                     </th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {#{% for omnibus in omnibuses %}#}*/
/*                 <tr>*/
/* */
/* */
/*                 </tr>*/
/*                 {#{% endfor %}#}*/
/* */
/*                 </tbody>*/
/*             </table>*/
/*             {#<div align="left">#}*/
/* */
/* */
/*             {#</div>#}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
