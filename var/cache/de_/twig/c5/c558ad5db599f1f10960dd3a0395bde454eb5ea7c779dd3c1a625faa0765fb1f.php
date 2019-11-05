<?php

/* :trabajador:index.html.twig */
class __TwigTemplate_57271f975d27dab6a5e1e457e42f0c33455e3410282cfb0387ae166873def8f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":trabajador:index.html.twig", 1);
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
        $__internal_d79c5c60dff36a5b96a7f3f6d71dfe525170bb048c59dc0ca3797a62dc92f258 = $this->env->getExtension("native_profiler");
        $__internal_d79c5c60dff36a5b96a7f3f6d71dfe525170bb048c59dc0ca3797a62dc92f258->enter($__internal_d79c5c60dff36a5b96a7f3f6d71dfe525170bb048c59dc0ca3797a62dc92f258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":trabajador:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d79c5c60dff36a5b96a7f3f6d71dfe525170bb048c59dc0ca3797a62dc92f258->leave($__internal_d79c5c60dff36a5b96a7f3f6d71dfe525170bb048c59dc0ca3797a62dc92f258_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1bac4ceffd53ad7e143d23492676e91c132a59293cd49896db5d2bcd5dbd977f = $this->env->getExtension("native_profiler");
        $__internal_1bac4ceffd53ad7e143d23492676e91c132a59293cd49896db5d2bcd5dbd977f->enter($__internal_1bac4ceffd53ad7e143d23492676e91c132a59293cd49896db5d2bcd5dbd977f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <!-- Default box -->
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Lista de Trabajadores</h3>
            </div><!-- /.user-block -->
            <div class=\"box-tools\">

            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class=\"box-body\">

            <table class=\"table table-hover\">
                <thead>
                <th>ID/Código</th>
                <th>Nombre</th>
                <th>CI</th>
                <th>Dirección</th>
                <th>Cargo</th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trabajadors"]) ? $context["trabajadors"] : $this->getContext($context, "trabajadors")));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
            // line 28
            echo "                <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajador"], "codigo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajador"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajador"], "ci", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajador"], "direccion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajador"], "cargo", array()), "html", null, true);
            echo "</td>
                <td>
                        <td>
                            <ul>
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajador_edit", array("id" => $this->getAttribute($context["trabajador"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                                   title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                                </a>
                                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajador_delete", array("id" => $this->getAttribute($context["trabajador"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </tbody>
            </table>

        </div><!-- /.box-body -->

        <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 59
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 60
            echo "                    <a class=\"btn btn-sm btn-default  pull-left\" href=\"";
            echo $this->env->getExtension('routing')->getPath("trabajador_new");
            echo "\">
                        <img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/add_database_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Nuevo
                    </a>
                ";
        }
        // line 64
        echo "            </div>
            <div class=\"col-sm-4\">
                ";
        // line 67
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
        
        $__internal_1bac4ceffd53ad7e143d23492676e91c132a59293cd49896db5d2bcd5dbd977f->leave($__internal_1bac4ceffd53ad7e143d23492676e91c132a59293cd49896db5d2bcd5dbd977f_prof);

    }

    public function getTemplateName()
    {
        return ":trabajador:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 67,  141 => 64,  135 => 61,  130 => 60,  128 => 59,  118 => 51,  102 => 41,  95 => 37,  88 => 33,  84 => 32,  80 => 31,  76 => 30,  72 => 29,  69 => 28,  65 => 27,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     <!-- Default box -->*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Lista de Trabajadores</h3>*/
/*             </div><!-- /.user-block -->*/
/*             <div class="box-tools">*/
/* */
/*             </div><!-- /.box-tools -->*/
/*         </div><!-- /.box-header -->*/
/*         <div class="box-body">*/
/* */
/*             <table class="table table-hover">*/
/*                 <thead>*/
/*                 <th>ID/Código</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>CI</th>*/
/*                 <th>Dirección</th>*/
/*                 <th>Cargo</th>*/
/* */
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for trabajador in trabajadors %}*/
/*                 <tr>*/
/*                 <td>{{ trabajador.codigo }}</td>*/
/*                 <td>{{ trabajador.nombre }}</td>*/
/*                 <td>{{ trabajador.ci }}</td>*/
/*                 <td>{{ trabajador.direccion }}</td>*/
/*                 <td>{{ trabajador.cargo }}</td>*/
/*                 <td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <a href="{{ path('trabajador_edit',{ 'id': trabajador.id }) }}"*/
/*                                    class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                    title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                                 </a>*/
/*                                 <a href="{{ path('trabajador_delete',{'id': trabajador.id}) }}"*/
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
/*                     <a class="btn btn-sm btn-default  pull-left" href="{{ path('trabajador_new') }}">*/
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
/* {#<h1>EscogidaTurno list</h1>#}*/
/* */
/* {#<table>#}*/
/*     {#<thead>#}*/
/*     {#<tr>#}*/
/*         {#<th>Id</th>#}*/
/*         {#<th>Cantidadviajes</th>#}*/
/*         {#<th>Turno</th>#}*/
/*         {#<th>Horaempieza</th>#}*/
/*         {#<th>Horatermina</th>#}*/
/*         {#<th>Horasalida</th>#}*/
/*         {#<th>Trabaja</th>#}*/
/*         {#<th>Descanso</th>#}*/
/*         {#<th>Fechas</th>#}*/
/*         {#<th>Combustibleasignado</th>#}*/
/*         {#<th>Actions</th>#}*/
/*     {#</tr>#}*/
/*     {#</thead>#}*/
/*     {#<tbody>#}*/
/*     {#{% for escogidaTurno in escogidaTurnos %}#}*/
/*         {#<tr>#}*/
/*             {#<td><a href="{{ path('escogidaturno_show', { 'id': escogidaTurno.id }) }}">{{ escogidaTurno.id }}</a></td>#}*/
/*             {#<td>{{ escogidaTurno.cantidadViajes }}</td>#}*/
/*             {#<td>{{ escogidaTurno.turno }}</td>#}*/
/*             {#<td>{% if escogidaTurno.horaEmpieza %}{{ escogidaTurno.horaEmpieza|date('Y-m-d') }}{% endif %}</td>#}*/
/*             {#<td>{% if escogidaTurno.horaTermina %}{{ escogidaTurno.horaTermina|date('Y-m-d') }}{% endif %}</td>#}*/
/*             {#<td>{% if escogidaTurno.horaSalida %}{{ escogidaTurno.horaSalida|date('Y-m-d') }}{% endif %}</td>#}*/
/*             {#<td>{{ escogidaTurno.trabaja }}</td>#}*/
/*             {#<td>{{ escogidaTurno.descanso }}</td>#}*/
/*             {#<td>{{ escogidaTurno.fechas }}</td>#}*/
/*             {#<td>{{ escogidaTurno.combustibleAsignado }}</td>#}*/
/*             {#<td>#}*/
/*                 {#<ul>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('escogidaturno_show', { 'id': escogidaTurno.id }) }}">show</a>#}*/
/*                     {#</li>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('escogidaturno_edit', { 'id': escogidaTurno.id }) }}">edit</a>#}*/
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
/*         {#<a href="{{ path('escogidaturno_new') }}">Create a new entry</a>#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
/* {#{% extends 'index.html.twig' %}#}*/
/* */
/* {#{% block contenido %}#}*/
/*     {#<h1>Trabajador list</h1>#}*/
/* */
/*     {#<table>#}*/
/*         {#<thead>#}*/
/*             {#<tr>#}*/
/*                 {#<th>Id</th>#}*/
/*                 {#<th>Nombre</th>#}*/
/*                 {#<th>Ci</th>#}*/
/*                 {#<th>Direccion</th>#}*/
/*                 {#<th>Cargo</th>#}*/
/*                 {#<th>Actions</th>#}*/
/*             {#</tr>#}*/
/*         {#</thead>#}*/
/*         {#<tbody>#}*/
/*         {#{% for trabajador in trabajadors %}#}*/
/*             {#<tr>#}*/
/*                 {#<td><a href="{{ path('trabajador_show', { 'id': trabajador.id }) }}">{{ trabajador.id }}</a></td>#}*/
/*                 {#<td>{{ trabajador.nombre }}</td>#}*/
/*                 {#<td>{{ trabajador.ci }}</td>#}*/
/*                 {#<td>{{ trabajador.direccion }}</td>#}*/
/*                 {#<td>{{ trabajador.cargo }}</td>#}*/
/*                 {#<td>#}*/
/*                     {#<ul>#}*/
/*                         {#<li>#}*/
/*                             {#<a href="{{ path('trabajador_show', { 'id': trabajador.id }) }}">show</a>#}*/
/*                         {#</li>#}*/
/*                         {#<li>#}*/
/*                             {#<a href="{{ path('trabajador_edit', { 'id': trabajador.id }) }}">edit</a>#}*/
/*                         {#</li>#}*/
/*                     {#</ul>#}*/
/*                 {#</td>#}*/
/*             {#</tr>#}*/
/*         {#{% endfor %}#}*/
/*         {#</tbody>#}*/
/*     {#</table>#}*/
/* */
/*     {#<ul>#}*/
/*         {#<li>#}*/
/*             {#<a href="{{ path('trabajador_new') }}">Create a new entry</a>#}*/
/*         {#</li>#}*/
/*     {#</ul>#}*/
/* {#{% endblock %}#}*/
/* */
