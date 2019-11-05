<?php

/* :omnibus:index.html.twig */
class __TwigTemplate_48575372eed3654c73b2c15f8c7d04d70cbff93e60bd415b3b53e85be4a4146b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":omnibus:index.html.twig", 1);
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
        $__internal_507705d4c77618047603af626ad2b0cf479c7ecf41ea1465b3980ae3b6ab0a4a = $this->env->getExtension("native_profiler");
        $__internal_507705d4c77618047603af626ad2b0cf479c7ecf41ea1465b3980ae3b6ab0a4a->enter($__internal_507705d4c77618047603af626ad2b0cf479c7ecf41ea1465b3980ae3b6ab0a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":omnibus:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_507705d4c77618047603af626ad2b0cf479c7ecf41ea1465b3980ae3b6ab0a4a->leave($__internal_507705d4c77618047603af626ad2b0cf479c7ecf41ea1465b3980ae3b6ab0a4a_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_85b1e1a871d65bf2ef20231cb2c255c5076ecd86c7bde49be1f54508f4be23a5 = $this->env->getExtension("native_profiler");
        $__internal_85b1e1a871d65bf2ef20231cb2c255c5076ecd86c7bde49be1f54508f4be23a5->enter($__internal_85b1e1a871d65bf2ef20231cb2c255c5076ecd86c7bde49be1f54508f4be23a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <!-- Default box -->
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Lista de Ómnibus</h3>
            </div><!-- /.user-block -->
            <div class=\"box-tools\">

            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            ";
        // line 16
        echo "
            <table class=\"table table-hover\">
                <thead>
                <th>No.</th>
                <th>Chapa</th>
                <th>Tipo</th>
                <th>Base</th>
                ";
        // line 24
        echo "                <th>Tarjeta de Combustible</th>
                ";
        // line 26
        echo "                <th>Total de Kms Recorridos</th>
                ";
        // line 28
        echo "                <th>En Revisión</th>
                <th>Roto</th>
                <th>Por mantenim.</th>
                ";
        // line 32
        echo "                <th>Vence FICAV</th>
                ";
        // line 34
        echo "                <th>Lic. Operativa Vence</th>

                ";
        // line 37
        echo "                ";
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<th><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones</th>";
        }
        // line 38
        echo "                </thead>
                <tbody>
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["omnibuses"]) ? $context["omnibuses"] : $this->getContext($context, "omnibuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["omnibus"]) {
            // line 41
            echo "                    <tr>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["omnibus"], "noOmnibus", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["omnibus"], "chapa", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["omnibus"], "typeOmnibus", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["omnibus"], "base", array()), "html", null, true);
            echo "</td>
                        ";
            // line 47
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["omnibus"], "tarjetaCombustible", array()), "html", null, true);
            echo "</td>
                        ";
            // line 49
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["omnibus"], "kmRecorridosAcumulados", array()), "html", null, true);
            echo "</td>
                        ";
            // line 51
            echo "                        <td>";
            if ($this->getAttribute($context["omnibus"], "EnRevision", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                        ";
            // line 53
            echo "                        <td>";
            if ($this->getAttribute($context["omnibus"], "IsRoto", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                        <td>";
            // line 54
            if ($this->getAttribute($context["omnibus"], "isMantenimiento", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                        ";
            // line 56
            echo "                        <td>";
            if ($this->getAttribute($context["omnibus"], "FICAVVencimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["omnibus"], "FICAVVencimiento", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                        ";
            // line 58
            echo "                        <td>";
            if ($this->getAttribute($context["omnibus"], "licenciaOperativaVencimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["omnibus"], "licenciaOperativaVencimiento", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>

                        <td>
                            <ul>
                                <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("omnibus_edit", array("id" => $this->getAttribute($context["omnibus"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"left\"
                                   title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                                </a>
                                <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("omnibus_show", array("id" => $this->getAttribute($context["omnibus"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"left\"
                                   title=\"Visualizar elemento\"><i class=\"glyphicon glyphicon-eye-open\"></i>
                                </a>
                                <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("omnibus_delete", array("id" => $this->getAttribute($context["omnibus"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"left\"
                                   title=\"Eliminar elemento\"
                                   onclick=\"return confirm('Esta seguro que desea eliminar el elemento')\">
                                    <i class=\"glyphicon glyphicon-remove\"></i>
                                </a>
                            </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['omnibus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
                </tbody>
            </table>

        </div><!-- /.box-body -->

        <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 89
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 90
            echo "                    <a class=\"btn btn-sm btn-default  pull-left\" href=\"";
            echo $this->env->getExtension('routing')->getPath("omnibus_new");
            echo "\">
                        <img src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/add_database_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Nuevo
                    </a>
                ";
        }
        // line 94
        echo "            </div>
            <div class=\"col-sm-4\">
                ";
        // line 97
        echo "            </div>
            <div class=\"col-sm-4\">


            </div>
        </div>


    </div><!-- /.box -->
    <div id=\"mymodal\" class=\"modal  inmodal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-center\">
                    <button aria-label=\"Close\" data-dismiss=\"modal\" class=\"close\" type=\"button\">
                        <span aria-hidden=\"true\">×</span></button>
                    <i class=\"fa-3x fa fa-warning modal-icon text-red\"></i>
                    <h4 class=\"modal-title\">Acción Peligrosa</h4>
                </div>
                <div class=\"modal-body\">
                    <p>Está acción puede ocacionar, comprometer la integridad de los datos!</p>
                    <small>Si no es un usuario avanzado, recomendamos que cancele esta acción.</small>
                </div>
                <div class=\"modal-footer\">
                    <button data-dismiss=\"modal\" class=\"btn btn-primary\" type=\"button\">Cerrar</button>
                    <a class=\"btn btn-primary btn-danger btn-delete\" href=\"#\">Eliminar</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

";
        
        $__internal_85b1e1a871d65bf2ef20231cb2c255c5076ecd86c7bde49be1f54508f4be23a5->leave($__internal_85b1e1a871d65bf2ef20231cb2c255c5076ecd86c7bde49be1f54508f4be23a5_prof);

    }

    public function getTemplateName()
    {
        return ":omnibus:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 97,  221 => 94,  215 => 91,  210 => 90,  208 => 89,  197 => 80,  181 => 70,  174 => 66,  167 => 62,  157 => 58,  150 => 56,  142 => 54,  133 => 53,  124 => 51,  119 => 49,  114 => 47,  110 => 45,  106 => 44,  102 => 43,  98 => 42,  95 => 41,  91 => 40,  87 => 38,  80 => 37,  76 => 34,  73 => 32,  68 => 28,  65 => 26,  62 => 24,  53 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     <!-- Default box -->*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Lista de Ómnibus</h3>*/
/*             </div><!-- /.user-block -->*/
/*             <div class="box-tools">*/
/* */
/*             </div><!-- /.box-tools -->*/
/*         </div><!-- /.box-header -->*/
/*         <div class="box-body">*/
/*             {#<h5>Total de registros: {{ pagination.getTotalItemCount }}</h5>#}*/
/* */
/*             <table class="table table-hover">*/
/*                 <thead>*/
/*                 <th>No.</th>*/
/*                 <th>Chapa</th>*/
/*                 <th>Tipo</th>*/
/*                 <th>Base</th>*/
/*                 {#<th>Marca</th>#}*/
/*                 <th>Tarjeta de Combustible</th>*/
/*                 {#<th>Índice CR</th>#}*/
/*                 <th>Total de Kms Recorridos</th>*/
/*                 {#<th>Capacidad</th>#}*/
/*                 <th>En Revisión</th>*/
/*                 <th>Roto</th>*/
/*                 <th>Por mantenim.</th>*/
/*                 {#<th>Emisión FICAV</th>#}*/
/*                 <th>Vence FICAV</th>*/
/*                 {#<th>Licencia Operativa Emitida</th>#}*/
/*                 <th>Lic. Operativa Vence</th>*/
/* */
/*                 {#<th>CirculaciónV</th>#}*/
/*                 {% if not is_granted('ROLE_USUARIO' ) %}<th><img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones</th>{% endif %}*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for omnibus in omnibuses %}*/
/*                     <tr>*/
/*                         <td>{{ omnibus.noOmnibus }}</td>*/
/*                         <td>{{ omnibus.chapa }}</td>*/
/*                         <td>{{ omnibus.typeOmnibus }}</td>*/
/*                         <td>{{ omnibus.base }}</td>*/
/*                         {#<td>{{ omnibus.marca }}</td>#}*/
/*                         <td>{{ omnibus.tarjetaCombustible }}</td>*/
/*                         {#<td>{{ omnibus.indiceConsumoReal }}</td>#}*/
/*                         <td>{{ omnibus.kmRecorridosAcumulados }}</td>*/
/*                         {#<td>{{ omnibus.capacidad }}</td>#}*/
/*                         <td>{% if omnibus.EnRevision %}Yes{% else %}No{% endif %}</td>*/
/*                         {#<td>{% if entity.uno %}Yes{% else %}No{% endif %}</td>#}*/
/*                         <td>{% if omnibus.IsRoto %}Yes{% else %}No{% endif %}</td>*/
/*                         <td>{% if omnibus.isMantenimiento %}Yes{% else %}No{% endif %}</td>*/
/*                         {#<td>{% if omnibus.FICAVEmision %}{{ omnibus.FICAVEmision|date('Y-m-d') }}{% endif %}</td>#}*/
/*                         <td>{% if omnibus.FICAVVencimiento %}{{ omnibus.FICAVVencimiento|date('Y-m-d') }}{% endif %}</td>*/
/*                         {#<td>{% if omnibus.licenciaOperativaEmision %}{{ omnibus.licenciaOperativaEmision|date('Y-m-d') }}{% endif %}</td>#}*/
/*                         <td>{% if omnibus.licenciaOperativaVencimiento %}{{ omnibus.licenciaOperativaVencimiento|date('Y-m-d') }}{% endif %}</td>*/
/* */
/*                         <td>*/
/*                             <ul>*/
/*                                 <a href="{{ path('omnibus_edit',{ 'id': omnibus.id }) }}"*/
/*                                    class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="left"*/
/*                                    title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                                 </a>*/
/*                                 <a href="{{ path('omnibus_show',{ 'id': omnibus.id }) }}"*/
/*                                    class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="left"*/
/*                                    title="Visualizar elemento"><i class="glyphicon glyphicon-eye-open"></i>*/
/*                                 </a>*/
/*                                 <a href="{{ path('omnibus_delete',{'id': omnibus.id}) }}"*/
/*                                    class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="left"*/
/*                                    title="Eliminar elemento"*/
/*                                    onclick="return confirm('Esta seguro que desea eliminar el elemento')">*/
/*                                     <i class="glyphicon glyphicon-remove"></i>*/
/*                                 </a>*/
/*                             </ul>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/* */
/*                 </tbody>*/
/*             </table>*/
/* */
/*         </div><!-- /.box-body -->*/
/* */
/*         <div class="row">*/
/* */
/*             <div class="col-sm-4">*/
/*                 {% if not is_granted('ROLE_USUARIO' ) %}*/
/*                     <a class="btn btn-sm btn-default  pull-left" href="{{ path('omnibus_new') }}">*/
/*                         <img src="{{ asset('assets/dist/img/add_database_26px.png') }}" alt="User Image"> Nuevo*/
/*                     </a>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*                 {#{{ knp_pagination_render(pagination) }}#}*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/* */
/* */
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     </div><!-- /.box -->*/
/*     <div id="mymodal" class="modal  inmodal fade">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header text-center">*/
/*                     <button aria-label="Close" data-dismiss="modal" class="close" type="button">*/
/*                         <span aria-hidden="true">×</span></button>*/
/*                     <i class="fa-3x fa fa-warning modal-icon text-red"></i>*/
/*                     <h4 class="modal-title">Acción Peligrosa</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <p>Está acción puede ocacionar, comprometer la integridad de los datos!</p>*/
/*                     <small>Si no es un usuario avanzado, recomendamos que cancele esta acción.</small>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button data-dismiss="modal" class="btn btn-primary" type="button">Cerrar</button>*/
/*                     <a class="btn btn-primary btn-danger btn-delete" href="#">Eliminar</a>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.modal-content -->*/
/*         </div>*/
/*         <!-- /.modal-dialog -->*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* {#<h1>Omnibus list</h1>#}*/
/* */
/* {#<table>#}*/
/*     {#<thead>#}*/
/*     {#<tr>#}*/
/* */
/*         {#<th>Chapa</th>#}*/
/*         {#<th>No.omnibus</th>#}*/
/*         {#<th>Tipo</th>#}*/
/*         {#<th>Indice CN</th>#}*/
/*         {#<th>Indice CR</th>#}*/
/*         {#<th>Kms Recorridos A</th>#}*/
/*         {#<th>Capacidad</th>#}*/
/*         {#<th>Descripcion</th>#}*/
/*         {#<th>Revision</th>#}*/
/*         {#<th>Roto</th>#}*/
/*         {#<th>Emisionficav</th>#}*/
/*         {#<th>Vencimientoficav</th>#}*/
/*         {#<th>Circulacio E</th>#}*/
/*         {#<th>CirculacionV</th>#}*/
/*         {#<th>Actions</th>#}*/
/*     {#</tr>#}*/
/*     {#</thead>#}*/
/*     {#<tbody>#}*/
/*     {#{% for omnibus in omnibuses %}#}*/
/*         {#<tr>#}*/
/*             {#<td><a href="{{ path('omnibus_show', { 'id': omnibus.id }) }}">{{ omnibus.id }}</a></td>#}*/
/*             {#<td>{{ omnibus.chapa }}</td>#}*/
/*             {#<td>{{ omnibus.noOmnibus }}</td>#}*/
/*             {#<td>{{ omnibus.tipo }}</td>#}*/
/*             {#<td>{{ omnibus.indiceConsumoNormado }}</td>#}*/
/*             {#<td>{{ omnibus.indiceConsumoReal }}</td>#}*/
/*             {#<td>{{ omnibus.kmRecorridosAcumulados }}</td>#}*/
/*             {#<td>{{ omnibus.capacidad }}</td>#}*/
/*             {#<td>{{ omnibus.descripcion }}</td>#}*/
/*             {#<td>{% if entity.revision %}Yes{% else %}No{% endif %}</td>#}*/
/*             {#<td>{% if entity.roto %}Yes{% else %}No{% endif %}</td>#}*/
/*             {#<td>{% if omnibus.emisionFICAV %}{{ omnibus.emisionFICAV|date('Y-m-d') }}{% endif %}</td>#}*/
/*             {#<td>{% if omnibus.vencimientoFICAV %}{{ omnibus.vencimientoFICAV|date('Y-m-d') }}{% endif %}</td>#}*/
/*             {#<td>{% if omnibus.circulacionEmision %}{{ omnibus.circulacionEmision|date('Y-m-d') }}{% endif %}</td>#}*/
/*             {#<td>{% if omnibus.circulacionVencimiento %}{{ omnibus.circulacionVencimiento|date('Y-m-d') }}{% endif %}</td>#}*/
/*             {#<td>#}*/
/*                 {#<ul>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('omnibus_show', { 'id': omnibus.id }) }}">show</a>#}*/
/*                     {#</li>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('omnibus_edit', { 'id': omnibus.id }) }}">edit</a>#}*/
/*                     {#</li>#}*/
/*                 {#</ul>#}*/
/*             {#</td>#}*/
/*         {#</tr>#}*/
/*     {#{% endfor %}#}*/
/*     {#</tbody>#}*/
/* {#</table>#}*/
/* */
/* {#<ul>#}*/
/*     {#<li>#}*/
/*         {#<a href="{{ path('omnibus_new') }}">Create a new entry</a>#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
