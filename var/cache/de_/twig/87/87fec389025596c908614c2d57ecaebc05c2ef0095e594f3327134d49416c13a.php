<?php

/* pto_expedicion/index.html.twig */
class __TwigTemplate_3abe44ea2088aaf4ba88a017c77252fe08ed99976981d97a26d33a5fa319e8d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "pto_expedicion/index.html.twig", 1);
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
        $__internal_e50b51da6afe2c9529600d2810802e1bba306ad0623b6fe328b5a863e9614e43 = $this->env->getExtension("native_profiler");
        $__internal_e50b51da6afe2c9529600d2810802e1bba306ad0623b6fe328b5a863e9614e43->enter($__internal_e50b51da6afe2c9529600d2810802e1bba306ad0623b6fe328b5a863e9614e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pto_expedicion/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e50b51da6afe2c9529600d2810802e1bba306ad0623b6fe328b5a863e9614e43->leave($__internal_e50b51da6afe2c9529600d2810802e1bba306ad0623b6fe328b5a863e9614e43_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_87ac952d6e280a0b3dc128547fa9c0114d048053c6952fcaedd540427b38e337 = $this->env->getExtension("native_profiler");
        $__internal_87ac952d6e280a0b3dc128547fa9c0114d048053c6952fcaedd540427b38e337->enter($__internal_87ac952d6e280a0b3dc128547fa9c0114d048053c6952fcaedd540427b38e337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <!-- Default box -->
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Lista de Puntos de Expedición</h3>
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
        // line 21
        echo "                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Descripción</th>
               ";
        // line 24
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<th><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones</th>";
        }
        // line 25
        echo "                </thead>
                <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["pto_expedicion"]);
        foreach ($context['_seq'] as $context["_key"] => $context["pto_expedicion"]) {
            // line 28
            echo "                    <tr>
                        ";
            // line 30
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pto_expedicion"], "nombre", array()), "html", null, true);
            echo "</td>
                       <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["pto_expedicion"], "ubicacion", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["pto_expedicion"], "descripcion", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pto_expedicion_edit", array("id" => $this->getAttribute($context["pto_expedicion"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                                   title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                                </a>
                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pto_expedicion_delete", array("id" => $this->getAttribute($context["pto_expedicion"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pto_expedicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </tbody>
            </table>

        </div><!-- /.box-body -->

        <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 57
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 58
            echo "                    <a class=\"btn btn-sm btn-default  pull-left\" href=\"";
            echo $this->env->getExtension('routing')->getPath("pto_expedicion_new");
            echo "\">
                        <img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/add_database_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Nuevo
                    </a>
                ";
        }
        // line 62
        echo "            </div>

            <div class=\"col-sm-4\">
                ";
        // line 66
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
        
        $__internal_87ac952d6e280a0b3dc128547fa9c0114d048053c6952fcaedd540427b38e337->leave($__internal_87ac952d6e280a0b3dc128547fa9c0114d048053c6952fcaedd540427b38e337_prof);

    }

    public function getTemplateName()
    {
        return "pto_expedicion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 66,  142 => 62,  136 => 59,  131 => 58,  129 => 57,  119 => 49,  103 => 39,  96 => 35,  90 => 32,  86 => 31,  81 => 30,  78 => 28,  74 => 27,  70 => 25,  64 => 24,  59 => 21,  53 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     <!-- Default box -->*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Lista de Puntos de Expedición</h3>*/
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
/* */
/*                 {#<th>Id</th>#}*/
/*                 <th>Nombre</th>*/
/*                 <th>Ubicación</th>*/
/*                 <th>Descripción</th>*/
/*                {% if not is_granted('ROLE_USUARIO' ) %}<th><img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones</th>{% endif %}*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for pto_expedicion in pto_expedicion %}*/
/*                     <tr>*/
/*                         {#<td>{{ pto_expedicion.id }}</td>#}*/
/*                         <td>{{ pto_expedicion.nombre }}</td>*/
/*                        <td>{{ pto_expedicion.ubicacion }}</td>*/
/*                         <td>{{ pto_expedicion.descripcion }}</td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <a href="{{ path('pto_expedicion_edit',{ 'id': pto_expedicion.id }) }}"*/
/*                                    class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                    title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                                 </a>*/
/*                                 <a href="{{ path('pto_expedicion_delete',{'id': pto_expedicion.id}) }}"*/
/*                                    class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                    title="Eliminar elemento"*/
/*                                    onclick="return confirm('Esta seguro que desea eliminar el elemento')">*/
/*                                     <i class="glyphicon glyphicon-remove"></i>*/
/*                                 </a>*/
/*                             </ul>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/* */
/*         </div><!-- /.box-body -->*/
/* */
/*         <div class="row">*/
/* */
/*             <div class="col-sm-4">*/
/*                 {% if not is_granted('ROLE_USUARIO' ) %}*/
/*                     <a class="btn btn-sm btn-default  pull-left" href="{{ path('pto_expedicion_new') }}">*/
/*                         <img src="{{ asset('assets/dist/img/add_database_26px.png') }}" alt="User Image"> Nuevo*/
/*                     </a>*/
/*                 {% endif %}*/
/*             </div>*/
/* */
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
/* {% endblock %}*/
/* {#<h1>Tarjeta_combustible list</h1>#}*/
/* */
/* {#<table>#}*/
/*     {#<thead>#}*/
/*     {#<tr>#}*/
/*         {#<th>Asignacion</th>#}*/
/*         {#<th>Gastoreal</th>#}*/
/*         {#<th>Fechavencimiento</th>#}*/
/*         {#<th>Tipocombustible</th>#}*/
/*         {#<th>Notarjeta</th>#}*/
/*         {#<th>Ping</th>#}*/
/*         {#<th>Actions</th>#}*/
/*     {#</tr>#}*/
/*     {#</thead>#}*/
/*     {#<tbody>#}*/
/*     {#{% for pto_expedicion in pto_expedicions %}#}*/
/*         {#<tr>#}*/
/*             {#<td><a href="{{ path('pto_expedicion_show', { 'id': pto_expedicion.asignacion }) }}">{{ pto_expedicion.asignacion }}</a></td>#}*/
/*             {#<td>{{ pto_expedicion.gastoReal }}</td>#}*/
/*             {#<td>{% if pto_expedicion.fechaVencimiento %}{{ pto_expedicion.fechaVencimiento|date('Y-m-d') }}{% endif %}</td>#}*/
/*             {#<td>{{ pto_expedicion.tipoCombustible }}</td>#}*/
/*             {#<td>{{ pto_expedicion.noTarjeta }}</td>#}*/
/*             {#<td>{{ pto_expedicion.ping }}</td>#}*/
/*             {#<td>#}*/
/*                 {#<ul>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('pto_expedicion_show', { 'id': pto_expedicion.asignacion }) }}">show</a>#}*/
/*                     {#</li>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('pto_expedicion_edit', { 'id': pto_expedicion.asignacion }) }}">edit</a>#}*/
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
/*         {#<a href="{{ path('pto_expedicion_new') }}">Create a new entry</a>#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
