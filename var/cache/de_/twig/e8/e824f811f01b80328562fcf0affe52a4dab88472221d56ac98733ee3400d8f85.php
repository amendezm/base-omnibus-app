<?php

/* tipoincidencia/index.html.twig */
class __TwigTemplate_8bcea174baa6a60d4dfa366beb6dda09e291d9d75f877240ec85e10c9d37e429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "tipoincidencia/index.html.twig", 1);
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
        $__internal_d6622779d460f2ed6a1c8130c358a4a820a0ddd3c9573d4d454bb40a97f74e60 = $this->env->getExtension("native_profiler");
        $__internal_d6622779d460f2ed6a1c8130c358a4a820a0ddd3c9573d4d454bb40a97f74e60->enter($__internal_d6622779d460f2ed6a1c8130c358a4a820a0ddd3c9573d4d454bb40a97f74e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipoincidencia/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6622779d460f2ed6a1c8130c358a4a820a0ddd3c9573d4d454bb40a97f74e60->leave($__internal_d6622779d460f2ed6a1c8130c358a4a820a0ddd3c9573d4d454bb40a97f74e60_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_f2af485cc04d2df78f1f61d100438186abc09ed2a68cdbe648bc6732a5e40b5c = $this->env->getExtension("native_profiler");
        $__internal_f2af485cc04d2df78f1f61d100438186abc09ed2a68cdbe648bc6732a5e40b5c->enter($__internal_f2af485cc04d2df78f1f61d100438186abc09ed2a68cdbe648bc6732a5e40b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <!-- Default box -->
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Lista de Tipos de Incidencias</h3>
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
        echo "                <th>Tipo</th>
                ";
        // line 22
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<th><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones</th>";
        }
        // line 23
        echo "                </thead>
                <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipoIncidencias"]) ? $context["tipoIncidencias"] : $this->getContext($context, "tipoIncidencias")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipoIncidencia"]) {
            // line 26
            echo "                    <tr>
                        ";
            // line 28
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipoIncidencia"], "tipoIncidencias", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoincidencia_edit", array("id" => $this->getAttribute($context["tipoIncidencia"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                                   title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                                </a>
                                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoincidencia_delete", array("id" => $this->getAttribute($context["tipoIncidencia"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipoIncidencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </tbody>
            </table>

        </div><!-- /.box-body -->

        <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 53
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 54
            echo "                    <a class=\"btn btn-sm btn-default  pull-left\" href=\"";
            echo $this->env->getExtension('routing')->getPath("tipoincidencia_new");
            echo "\">
                        <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/add_database_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Nuevo
                    </a>
                ";
        }
        // line 58
        echo "            </div>
            <div class=\"col-sm-4\">
                ";
        // line 61
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
        
        $__internal_f2af485cc04d2df78f1f61d100438186abc09ed2a68cdbe648bc6732a5e40b5c->leave($__internal_f2af485cc04d2df78f1f61d100438186abc09ed2a68cdbe648bc6732a5e40b5c_prof);

    }

    public function getTemplateName()
    {
        return "tipoincidencia/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 61,  132 => 58,  126 => 55,  121 => 54,  119 => 53,  109 => 45,  93 => 35,  86 => 31,  79 => 28,  76 => 26,  72 => 25,  68 => 23,  62 => 22,  59 => 21,  53 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     <!-- Default box -->*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Lista de Tipos de Incidencias</h3>*/
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
/*                 <th>Tipo</th>*/
/*                 {% if not is_granted('ROLE_USUARIO' ) %}<th><img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones</th>{% endif %}*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for tipoIncidencia in tipoIncidencias %}*/
/*                     <tr>*/
/*                         {#<td>{{ tipoIncidencia.id }}</td>#}*/
/*                         <td>{{ tipoIncidencia.tipoIncidencias }}</td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <a href="{{ path('tipoincidencia_edit',{ 'id': tipoIncidencia.id }) }}"*/
/*                                    class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                    title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                                 </a>*/
/*                                 <a href="{{ path('tipoincidencia_delete',{'id': tipoIncidencia.id}) }}"*/
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
/*                     <a class="btn btn-sm btn-default  pull-left" href="{{ path('tipoincidencia_new') }}">*/
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
/* {#<h1>TipoIncidencia list</h1>#}*/
/* */
/* {#<table>#}*/
/*     {#<thead>#}*/
/*     {#<tr>#}*/
/*         {#<th>Id</th>#}*/
/*         {#<th>Tipo</th>#}*/
/*         {#<th>Actions</th>#}*/
/*     {#</tr>#}*/
/*     {#</thead>#}*/
/*     {#<tbody>#}*/
/*     {#{% for tipoIncidencium in tipoIncidencias %}#}*/
/*         {#<tr>#}*/
/*             {#<td><a href="{{ path('tipoincidencia_show', { 'id': tipoIncidencium.id }) }}">{{ tipoIncidencium.id }}</a></td>#}*/
/*             {#<td>{{ tipoIncidencium.tipo }}</td>#}*/
/*             {#<td>#}*/
/*                 {#<ul>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('tipoincidencia_show', { 'id': tipoIncidencium.id }) }}">show</a>#}*/
/*                     {#</li>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('tipoincidencia_edit', { 'id': tipoIncidencium.id }) }}">edit</a>#}*/
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
/*         {#<a href="{{ path('tipoincidencia_new') }}">Create a new entry</a>#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
