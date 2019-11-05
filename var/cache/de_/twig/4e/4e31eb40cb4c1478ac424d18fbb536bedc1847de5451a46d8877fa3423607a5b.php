<?php

/* :chofer:index.html.twig */
class __TwigTemplate_ee4c7d8f36886ccd4125610480e518e011428d198e60df8fbcd5bde7a5469b75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":chofer:index.html.twig", 1);
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
        $__internal_cfec7bb1e7255e917d7b68e879e0307e5d7de3d6757548c2265240b986dbf4a4 = $this->env->getExtension("native_profiler");
        $__internal_cfec7bb1e7255e917d7b68e879e0307e5d7de3d6757548c2265240b986dbf4a4->enter($__internal_cfec7bb1e7255e917d7b68e879e0307e5d7de3d6757548c2265240b986dbf4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chofer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfec7bb1e7255e917d7b68e879e0307e5d7de3d6757548c2265240b986dbf4a4->leave($__internal_cfec7bb1e7255e917d7b68e879e0307e5d7de3d6757548c2265240b986dbf4a4_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_e52b3d5016733e07aafb00709455adaf11c7f5abbf2cbdb62379855df542b4ab = $this->env->getExtension("native_profiler");
        $__internal_e52b3d5016733e07aafb00709455adaf11c7f5abbf2cbdb62379855df542b4ab->enter($__internal_e52b3d5016733e07aafb00709455adaf11c7f5abbf2cbdb62379855df542b4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <!-- Default box -->
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Lista de Choferes</h3>
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
                ";
        // line 20
        echo "                <th>Nombre y Apellidos</th>
                <th>CI</th>
                <th>Código Trabajador</th>
                <th>No. Licencia Operativa</th>
                ";
        // line 25
        echo "                ";
        // line 26
        echo "                ";
        // line 27
        echo "                ";
        // line 28
        echo "                ";
        // line 29
        echo "                ";
        // line 30
        echo "                ";
        // line 31
        echo "                ";
        // line 32
        echo "
                ";
        // line 33
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<th><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones</th>";
        }
        // line 34
        echo "                </thead>
                <tbody>
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportes"]) ? $context["reportes"] : $this->getContext($context, "reportes")));
        foreach ($context['_seq'] as $context["_key"] => $context["reporte"]) {
            // line 37
            echo "                    <tr>
                        ";
            // line 39
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "nombre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "ci", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "codigo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "nolicenciaoperativa", array()), "html", null, true);
            echo "</td>
                        ";
            // line 44
            echo "                        ";
            // line 45
            echo "
                        ";
            // line 47
            echo "
                        ";
            // line 49
            echo "
                        ";
            // line 51
            echo "
                        ";
            // line 53
            echo "
                        ";
            // line 55
            echo "
                        ";
            // line 57
            echo "

                        <td>
                            <ul>
                                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chofer_edit", array("id" => $this->getAttribute($context["reporte"], "trabajador_id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"left\"
                                   title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                                </a>
                                <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chofer_show", array("id" => $this->getAttribute($context["reporte"], "trabajador_id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"left\"
                                   title=\"Visualizar elemento\"><i class=\"glyphicon glyphicon-eye-open\"></i>
                                </a>
                                ";
            // line 70
            echo "                                   ";
            // line 71
            echo "                                   ";
            // line 72
            echo "                                   ";
            // line 73
            echo "                                    ";
            // line 74
            echo "                                ";
            // line 75
            echo "                            </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reporte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
                </tbody>
            </table>

        </div><!-- /.box-body -->

        ";
        // line 86
        echo "
            ";
        // line 88
        echo "                ";
        // line 89
        echo "                    ";
        // line 90
        echo "                        ";
        // line 91
        echo "                    ";
        // line 92
        echo "                ";
        // line 93
        echo "            ";
        // line 94
        echo "            ";
        // line 95
        echo "                ";
        // line 96
        echo "            ";
        // line 97
        echo "            ";
        // line 98
        echo "

            ";
        // line 101
        echo "        ";
        // line 102
        echo "

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
        
        $__internal_e52b3d5016733e07aafb00709455adaf11c7f5abbf2cbdb62379855df542b4ab->leave($__internal_e52b3d5016733e07aafb00709455adaf11c7f5abbf2cbdb62379855df542b4ab_prof);

    }

    public function getTemplateName()
    {
        return ":chofer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 102,  209 => 101,  205 => 98,  203 => 97,  201 => 96,  199 => 95,  197 => 94,  195 => 93,  193 => 92,  191 => 91,  189 => 90,  187 => 89,  185 => 88,  182 => 86,  174 => 79,  165 => 75,  163 => 74,  161 => 73,  159 => 72,  157 => 71,  155 => 70,  148 => 65,  141 => 61,  135 => 57,  132 => 55,  129 => 53,  126 => 51,  123 => 49,  120 => 47,  117 => 45,  115 => 44,  111 => 42,  107 => 41,  103 => 40,  98 => 39,  95 => 37,  91 => 36,  87 => 34,  81 => 33,  78 => 32,  76 => 31,  74 => 30,  72 => 29,  70 => 28,  68 => 27,  66 => 26,  64 => 25,  58 => 20,  53 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     <!-- Default box -->*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Lista de Choferes</h3>*/
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
/*                 {#<th>Id</th>#}*/
/*                 <th>Nombre y Apellidos</th>*/
/*                 <th>CI</th>*/
/*                 <th>Código Trabajador</th>*/
/*                 <th>No. Licencia Operativa</th>*/
/*                 {#<th>LC Emitida</th>#}*/
/*                 {#<th>LC Vence</th>#}*/
/*                 {#<th>Recalificación Emitida</th>#}*/
/*                 {#<th>Recalificación Vence</th>#}*/
/*                 {#<th>Exámen Médico Emitido</th>#}*/
/*                 {#<th>Exámen Médico Vence</th>#}*/
/*                 {#<th>Exámen Psicofisiológico Emitido</th>#}*/
/*                 {#<th>Exámen Psicofisiológico Vence</th>#}*/
/* */
/*                 {% if not is_granted('ROLE_USUARIO' ) %}<th><img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones</th>{% endif %}*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for reporte in reportes %}*/
/*                     <tr>*/
/*                         {#<td>{{ chofer.id }}</td>#}*/
/*                         <td>{{ reporte.nombre }}</td>*/
/*                         <td>{{ reporte.ci }}</td>*/
/*                         <td>{{ reporte.codigo }}</td>*/
/*                         <td>{{ reporte.nolicenciaoperativa }}</td>*/
/*                         {#<td>{% if chofer.recalificacionEmision %}{{ chofer.recalificacionEmision|date('Y-m-d') }}{% endif %}</td>#}*/
/*                         {#<td>{% if chofer.recalificacionVencimiento %}{{ chofer.recalificacionVencimiento|date('Y-m-d') }}{% endif %}</td>#}*/
/* */
/*                         {#<td>{% if chofer.examenMedicoEmision %}{{ chofer.examenMedicoEmision|date('Y-m-d') }}{% endif %}</td>#}*/
/* */
/*                         {#<td>{% if chofer.examenMedicoVencimiento %}{{ chofer.examenMedicoVencimiento|date('Y-m-d') }}{% endif %}</td>#}*/
/* */
/*                         {#<td>{% if chofer.examenPsicofisiologicoEmision %}{{ chofer.examenPsicofisiologicoEmision|date('Y-m-d') }}{% endif %}</td>#}*/
/* */
/*                         {#<td>{% if chofer.examenPsicofisiologicoVencimiento %}{{ chofer.examenPsicofisiologicoVencimiento|date('Y-m-d') }}{% endif %}</td>#}*/
/* */
/*                         {#<td>{% if chofer.licenciaEmision %}{{ chofer.licenciaEmision|date('Y-m-d') }}{% endif %}</td>#}*/
/* */
/*                         {#<td>{% if chofer.licenciaVencimiento %}{{ chofer.licenciaVencimiento|date('Y-m-d') }}{% endif %}</td>#}*/
/* */
/* */
/*                         <td>*/
/*                             <ul>*/
/*                                 <a href="{{ path('chofer_edit',{ 'id': reporte.trabajador_id }) }}"*/
/*                                    class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="left"*/
/*                                    title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                                 </a>*/
/*                                 <a href="{{ path('chofer_show',{ 'id': reporte.trabajador_id }) }}"*/
/*                                    class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="left"*/
/*                                    title="Visualizar elemento"><i class="glyphicon glyphicon-eye-open"></i>*/
/*                                 </a>*/
/*                                 {#<a href="{{ path('chofer_delete',{'id': reporte.trabajador_id}) }}"#}*/
/*                                    {#class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="left"#}*/
/*                                    {#title="Eliminar elemento"#}*/
/*                                    {#onclick="return confirm('Esta seguro que desea eliminar el elemento')">#}*/
/*                                     {#<i class="glyphicon glyphicon-remove"></i>#}*/
/*                                 {#</a>#}*/
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
/*         {#<div class="row">#}*/
/* */
/*             {#<div class="col-sm-4">#}*/
/*                 {#{% if not is_granted('ROLE_USUARIO' ) %}#}*/
/*                     {#<a class="btn btn-sm btn-default  pull-left" href="{{ path('chofer_new') }}">#}*/
/*                         {#<img src="{{ asset('assets/dist/img/add_database_26px.png') }}" alt="User Image"> Nuevo#}*/
/*                     {#</a>#}*/
/*                 {#{% endif %}#}*/
/*             {#</div>#}*/
/*             {#<div class="col-sm-4">#}*/
/*                 {#&#123;&#35;{{ knp_pagination_render(pagination) }}&#35;&#125;#}*/
/*             {#</div>#}*/
/*             {#<div class="col-sm-4">#}*/
/* */
/* */
/*             {#</div>#}*/
/*         {#</div>#}*/
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
/* {#<h1>Chofer list</h1>#}*/
/* */
/* {#<table>#}*/
/*     {#<thead>#}*/
/*     {#<tr>#}*/
/*         {#<th>Id</th>#}*/
/*         {#<th>Nombre</th>#}*/
/*         {#<th>Ci</th>#}*/
/*         {#<th>Direccion</th>#}*/
/*         {#<th>Nolicenciaoperativa</th>#}*/
/*         {#<th>Tiemposervicio</th>#}*/
/*         {#<th>Recalificacion</th>#}*/
/*         {#<th>Examenmedico</th>#}*/
/*         {#<th>Examenpsicofisiologico</th>#}*/
/*         {#<th>Actions</th>#}*/
/*     {#</tr>#}*/
/*     {#</thead>#}*/
/*     {#<tbody>#}*/
/*     {#{% for chofer in chofers %}#}*/
/*         {#<tr>#}*/
/*             {#<td><a href="{{ path('chofer_show', { 'id': chofer.id }) }}">{{ chofer.id }}</a></td>#}*/
/*             {#<td>{{ chofer.nombre }}</td>#}*/
/*             {#<td>{{ chofer.cI }}</td>#}*/
/*             {#<td>{{ chofer.direccion }}</td>#}*/
/*             {#<td>{{ chofer.noLicenciaOperativa }}</td>#}*/
/*             {#<td>{{ chofer.tiempoServicio }}</td>#}*/
/*             {#<td>{% if entity.recalificacion %}Yes{% else %}No{% endif %}</td>#}*/
/*             {#<td>{% if entity.examenMedico %}Yes{% else %}No{% endif %}</td>#}*/
/*             {#<td>{% if entity.examenPsicofisiologico %}Yes{% else %}No{% endif %}</td>#}*/
/*             {#<td>#}*/
/*                 {#<ul>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('chofer_show', { 'id': chofer.id }) }}">show</a>#}*/
/*                     {#</li>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('chofer_edit', { 'id': chofer.id }) }}">edit</a>#}*/
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
/*         {#<a href="{{ path('chofer_new') }}">Create a new entry</a>#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
