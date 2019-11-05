<?php

/* :hojaruta:index.html.twig */
class __TwigTemplate_1057745d082f2c4d846aa65a92e4bf10600c2c95b35b341a30f7e8dd742f2cd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":hojaruta:index.html.twig", 1);
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
        $__internal_9debe87053279bf1839f1b9f9e8c565057857b85cb41ba161104a398894d0b12 = $this->env->getExtension("native_profiler");
        $__internal_9debe87053279bf1839f1b9f9e8c565057857b85cb41ba161104a398894d0b12->enter($__internal_9debe87053279bf1839f1b9f9e8c565057857b85cb41ba161104a398894d0b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":hojaruta:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9debe87053279bf1839f1b9f9e8c565057857b85cb41ba161104a398894d0b12->leave($__internal_9debe87053279bf1839f1b9f9e8c565057857b85cb41ba161104a398894d0b12_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ee8a7940fbb71785b5656aba0d99670dabb3c1987b6ca9028c0894359c3bb716 = $this->env->getExtension("native_profiler");
        $__internal_ee8a7940fbb71785b5656aba0d99670dabb3c1987b6ca9028c0894359c3bb716->enter($__internal_ee8a7940fbb71785b5656aba0d99670dabb3c1987b6ca9028c0894359c3bb716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <!-- Default box -->
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Lista de Hojas de Rutas</h3>
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
                <th>No. </th>
                <th>Fecha</th>
                <th>Ruta</th>
                <th>Ómnibus</th>
                <th>Cantidad de Viajes</th>
                <th>Cantidad de Salidas</th>
                <th>Total de Horas</th>
                <th>Incidencias</th>
                <th>Observaciones</th>
                ";
        // line 28
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<th><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones</th>";
        }
        // line 29
        echo "                </thead>
                <tbody>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hojaRutas"]) ? $context["hojaRutas"] : $this->getContext($context, "hojaRutas")));
        foreach ($context['_seq'] as $context["_key"] => $context["hojaRuta"]) {
            // line 32
            echo "                    <tr>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["hojaRuta"], "noHojaRuta", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["hojaRuta"], "fecha", array()), "y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["hojaRuta"], "ruta", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["hojaRuta"], "omnibus", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["hojaRuta"], "cantidadViajes", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["hojaRuta"], "cantidadSalidas", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["hojaRuta"], "totalHoras", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("incidencia_new", array("id_hojaruta" => $this->getAttribute($context["hojaRuta"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-success btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                                   title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                                </a>
                                </ul>
                        </td>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["hojaRuta"], "observaciones", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hojaruta_edit", array("id" => $this->getAttribute($context["hojaRuta"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                                   title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                                </a>
                                <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hojaruta_show", array("id" => $this->getAttribute($context["hojaRuta"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                                   title=\"Editar elemento\"><i class=\"glyphicon glyphicon-eye-open\"></i>
                                </a>
                                <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hojaruta_delete", array("id" => $this->getAttribute($context["hojaRuta"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hojaRuta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
                </tbody>
            </table>

        </div><!-- /.box-body -->

        <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 78
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 79
            echo "                    <a class=\"btn btn-sm btn-default  pull-left\" href=\"";
            echo $this->env->getExtension('routing')->getPath("hojaruta_new");
            echo "\">
                        <img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/add_database_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Nuevo
                    </a>
                ";
        }
        // line 83
        echo "            </div>
            <div class=\"col-sm-4\">
                ";
        // line 86
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
        
        $__internal_ee8a7940fbb71785b5656aba0d99670dabb3c1987b6ca9028c0894359c3bb716->leave($__internal_ee8a7940fbb71785b5656aba0d99670dabb3c1987b6ca9028c0894359c3bb716_prof);

    }

    public function getTemplateName()
    {
        return ":hojaruta:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 86,  183 => 83,  177 => 80,  172 => 79,  170 => 78,  159 => 69,  143 => 59,  136 => 55,  129 => 51,  123 => 48,  114 => 42,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  92 => 35,  88 => 34,  84 => 33,  81 => 32,  77 => 31,  73 => 29,  67 => 28,  53 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     <!-- Default box -->*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Lista de Hojas de Rutas</h3>*/
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
/*                 <th>No. </th>*/
/*                 <th>Fecha</th>*/
/*                 <th>Ruta</th>*/
/*                 <th>Ómnibus</th>*/
/*                 <th>Cantidad de Viajes</th>*/
/*                 <th>Cantidad de Salidas</th>*/
/*                 <th>Total de Horas</th>*/
/*                 <th>Incidencias</th>*/
/*                 <th>Observaciones</th>*/
/*                 {% if not is_granted('ROLE_USUARIO' ) %}<th><img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones</th>{% endif %}*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for hojaRuta in hojaRutas %}*/
/*                     <tr>*/
/*                         <td>{{ hojaRuta.noHojaRuta}}</td>*/
/*                         <td>{{ hojaRuta.fecha|date('y-m-d')}}</td>*/
/*                         <td>{{ hojaRuta.ruta}}</td>*/
/*                         <td>{{ hojaRuta.omnibus}}</td>*/
/*                         <td>{{ hojaRuta.cantidadViajes }}</td>*/
/*                         <td>{{ hojaRuta.cantidadSalidas }}</td>*/
/*                         <td>{{ hojaRuta.totalHoras }}</td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <a href="{{ path('incidencia_new',{ 'id_hojaruta': hojaRuta.id }) }}"*/
/*                                    class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                    title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                                 </a>*/
/*                                 </ul>*/
/*                         </td>*/
/*                         <td>{{ hojaRuta.observaciones}}</td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <a href="{{ path('hojaruta_edit',{ 'id': hojaRuta.id }) }}"*/
/*                                    class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                    title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                                 </a>*/
/*                                 <a href="{{ path('hojaruta_show',{ 'id': hojaRuta.id }) }}"*/
/*                                    class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                    title="Editar elemento"><i class="glyphicon glyphicon-eye-open"></i>*/
/*                                 </a>*/
/*                                 <a href="{{ path('hojaruta_delete',{'id': hojaRuta.id}) }}"*/
/*                                    class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="right"*/
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
/*                     <a class="btn btn-sm btn-default  pull-left" href="{{ path('hojaruta_new') }}">*/
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
/* {#<h1>HojaRuta list</h1>#}*/
/* */
/* {#<table>#}*/
/*     {#<thead>#}*/
/*     {#<tr>#}*/
/*         {#<th>Id</th>#}*/
/*         {#<th>Cantidadtipohoras</th>#}*/
/*         {#<th>Tipohoras</th>#}*/
/*         {#<th>Totalhoras</th>#}*/
/*         {#<th>Incidencias</th>#}*/
/*         {#<th>Observaciones</th>#}*/
/*         {#<th>Cantidadviajes</th>#}*/
/*         {#<th>Cantidadsalidas</th>#}*/
/*         {#<th>Actions</th>#}*/
/*     {#</tr>#}*/
/*     {#</thead>#}*/
/*     {#<tbody>#}*/
/*     {#{% for hojaRutum in hojaRutas %}#}*/
/*         {#<tr>#}*/
/*             {#<td><a href="{{ path('hojaruta_show', { 'id': hojaRutum.id }) }}">{{ hojaRutum.id }}</a></td>#}*/
/*             {#<td>{{ hojaRutum.cantidadTipoHoras }}</td>#}*/
/*             {#<td>{{ hojaRutum.tipoHoras }}</td>#}*/
/*             {#<td>{{ hojaRutum.totalHoras }}</td>#}*/
/*             {#<td>{{ hojaRutum.incidencias }}</td>#}*/
/*             {#<td>{{ hojaRutum.observaciones }}</td>#}*/
/*             {#<td>{{ hojaRutum.cantidadViajes }}</td>#}*/
/*             {#<td>{{ hojaRutum.cantidadSalidas }}</td>#}*/
/*             {#<td>#}*/
/*                 {#<ul>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('hojaruta_show', { 'id': hojaRutum.id }) }}">show</a>#}*/
/*                     {#</li>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('hojaruta_edit', { 'id': hojaRutum.id }) }}">edit</a>#}*/
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
/*         {#<a href="{{ path('hojaruta_new') }}">Create a new entry</a>#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
