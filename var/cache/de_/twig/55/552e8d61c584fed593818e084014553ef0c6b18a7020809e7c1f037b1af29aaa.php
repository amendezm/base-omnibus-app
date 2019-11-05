<?php

/* :escogidaturno:index.html.twig */
class __TwigTemplate_1ad9a85d503a61711614a260c178bd389aac3a805e45295b8f72e7410ffa0aad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":escogidaturno:index.html.twig", 1);
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
        $__internal_77d69e4976bf29d4be8fa9fafad1cff99adbf72ab1cda5956cd1d6125a3f118f = $this->env->getExtension("native_profiler");
        $__internal_77d69e4976bf29d4be8fa9fafad1cff99adbf72ab1cda5956cd1d6125a3f118f->enter($__internal_77d69e4976bf29d4be8fa9fafad1cff99adbf72ab1cda5956cd1d6125a3f118f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":escogidaturno:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77d69e4976bf29d4be8fa9fafad1cff99adbf72ab1cda5956cd1d6125a3f118f->leave($__internal_77d69e4976bf29d4be8fa9fafad1cff99adbf72ab1cda5956cd1d6125a3f118f_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_73580e2b4769e1c7b8eff29a84145514be9fce604b607268097980acf167c7d1 = $this->env->getExtension("native_profiler");
        $__internal_73580e2b4769e1c7b8eff29a84145514be9fce604b607268097980acf167c7d1->enter($__internal_73580e2b4769e1c7b8eff29a84145514be9fce604b607268097980acf167c7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <!-- Default box -->
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Lista de Escogidas de Turnos</h3>
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
                <th>Ruta</th>
                <th>Ómnibus</th>
                <th>Turno</th>
                <th>Empieza</th>
                <th>Sale</th>
                <th>Termina</th>
                <th>Cant de viajes</th>
                <th>Chofer</th>
                <th>Período de escogida</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["escogidaTurnos"]) ? $context["escogidaTurnos"] : $this->getContext($context, "escogidaTurnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["escogidaTurno"]) {
            // line 32
            echo "                    <tr>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["escogidaTurno"], "ruta", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["escogidaTurno"], "omnibus", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["escogidaTurno"], "turno", array()), "html", null, true);
            echo "</td>
                        ";
            // line 37
            echo "                        <td>";
            if ($this->getAttribute($context["escogidaTurno"], "empieza", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["escogidaTurno"], "empieza", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 38
            if ($this->getAttribute($context["escogidaTurno"], "sale", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["escogidaTurno"], "sale", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 39
            if ($this->getAttribute($context["escogidaTurno"], "termina", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["escogidaTurno"], "termina", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["escogidaTurno"], "cantidadViajes", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["escogidaTurno"], "chofer", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["escogidaTurno"], "periodoEscogida", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("escogidaturno_edit", array("id" => $this->getAttribute($context["escogidaTurno"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                                   title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                                </a>
                                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("escogidaturno_show", array("id" => $this->getAttribute($context["escogidaTurno"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                                   title=\"Visualizar elemento\"><i class=\"glyphicon glyphicon-eye-open\"></i>
                                </a>
                                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("escogidaturno_delete", array("id" => $this->getAttribute($context["escogidaTurno"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['escogidaTurno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </tbody>
            </table>

        </div><!-- /.box-body -->

        <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 71
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 72
            echo "                    <a class=\"btn btn-sm btn-default  pull-left\" href=\"";
            echo $this->env->getExtension('routing')->getPath("escogidaturno_new");
            echo "\">
                        <img src=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/add_database_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Nuevo
                    </a>
                ";
        }
        // line 76
        echo "            </div>
            <div class=\"col-sm-4\">
                ";
        // line 79
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
        
        $__internal_73580e2b4769e1c7b8eff29a84145514be9fce604b607268097980acf167c7d1->leave($__internal_73580e2b4769e1c7b8eff29a84145514be9fce604b607268097980acf167c7d1_prof);

    }

    public function getTemplateName()
    {
        return ":escogidaturno:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 79,  175 => 76,  169 => 73,  164 => 72,  162 => 71,  152 => 63,  136 => 53,  129 => 49,  122 => 45,  116 => 42,  112 => 41,  108 => 40,  102 => 39,  96 => 38,  89 => 37,  85 => 35,  81 => 34,  77 => 33,  74 => 32,  70 => 31,  53 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     <!-- Default box -->*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Lista de Escogidas de Turnos</h3>*/
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
/*                 <th>Ruta</th>*/
/*                 <th>Ómnibus</th>*/
/*                 <th>Turno</th>*/
/*                 <th>Empieza</th>*/
/*                 <th>Sale</th>*/
/*                 <th>Termina</th>*/
/*                 <th>Cant de viajes</th>*/
/*                 <th>Chofer</th>*/
/*                 <th>Período de escogida</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for escogidaTurno in escogidaTurnos %}*/
/*                     <tr>*/
/*                         <td>{{ escogidaTurno.ruta}}</td>*/
/*                         <td>{{ escogidaTurno.omnibus}}</td>*/
/*                         <td>{{ escogidaTurno.turno }}</td>*/
/*                         {#<td><a href="{{ path('escogidaturno_show', { 'id': escogidaTurno.id }) }}">{{ escogidaTurno.id }}</a></td>#}*/
/*                         <td>{% if escogidaTurno.empieza %}{{ escogidaTurno.empieza|date('H:i') }}{% endif %}</td>*/
/*                         <td>{% if escogidaTurno.sale %}{{ escogidaTurno.sale|date('H:i') }}{% endif %}</td>*/
/*                         <td>{% if escogidaTurno.termina %}{{ escogidaTurno.termina|date('H:i') }}{% endif %}</td>*/
/*                         <td>{{ escogidaTurno.cantidadViajes }}</td>*/
/*                         <td>{{ escogidaTurno.chofer }}</td>*/
/*                         <td>{{ escogidaTurno.periodoEscogida }}</td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <a href="{{ path('escogidaturno_edit',{ 'id': escogidaTurno.id }) }}"*/
/*                                    class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                    title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                                 </a>*/
/*                                 <a href="{{ path('escogidaturno_show',{ 'id': escogidaTurno.id }) }}"*/
/*                                    class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                    title="Visualizar elemento"><i class="glyphicon glyphicon-eye-open"></i>*/
/*                                 </a>*/
/*                                 <a href="{{ path('escogidaturno_delete',{'id': escogidaTurno.id}) }}"*/
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
/*                     <a class="btn btn-sm btn-default  pull-left" href="{{ path('escogidaturno_new') }}">*/
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
