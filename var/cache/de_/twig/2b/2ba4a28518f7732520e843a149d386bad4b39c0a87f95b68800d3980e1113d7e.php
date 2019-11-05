<?php

/* :tipo_omnibus:index.html.twig */
class __TwigTemplate_682975f11261aadcf6eeade28d6c9304b996aa263084b1d60774e24312fbc00a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":tipo_omnibus:index.html.twig", 1);
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
        $__internal_9930df7821c8cd4100bf6d211b309b5983ce513c3305a608120dae6b2734f05e = $this->env->getExtension("native_profiler");
        $__internal_9930df7821c8cd4100bf6d211b309b5983ce513c3305a608120dae6b2734f05e->enter($__internal_9930df7821c8cd4100bf6d211b309b5983ce513c3305a608120dae6b2734f05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipo_omnibus:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9930df7821c8cd4100bf6d211b309b5983ce513c3305a608120dae6b2734f05e->leave($__internal_9930df7821c8cd4100bf6d211b309b5983ce513c3305a608120dae6b2734f05e_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_8e8adf98a381d871f17b9b0f2c487511a5033e1b5f6f2e604bf523543c8a16b7 = $this->env->getExtension("native_profiler");
        $__internal_8e8adf98a381d871f17b9b0f2c487511a5033e1b5f6f2e604bf523543c8a16b7->enter($__internal_8e8adf98a381d871f17b9b0f2c487511a5033e1b5f6f2e604bf523543c8a16b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <!-- Default box -->
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Lista de Tipos de Ómnibus</h3>
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
                <th>Capacidad sentados</th>
                <th>Capacidad parados</th>
                <th>Capacidad total</th>
                <th>Índice Consumo Normado por Kms</th>
                <th>% de Desviación</th>
                <th>Cant de Kmts X Litro Combust. - norma</th>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["tipo_omnibuses"]) ? $context["tipo_omnibuses"] : $this->getContext($context, "tipo_omnibuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo_omnibus"]) {
            // line 32
            echo "                    <tr>
                        ";
            // line 34
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo_omnibus"], "tipo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo_omnibus"], "capacidadSentados", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo_omnibus"], "capacidadParados", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo_omnibus"], "capacidadTotal", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo_omnibus"], "indiceConsumoNormado", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo_omnibus"], "desviacion", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo_omnibus"], "cantidadKmtsXlitro", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipo_omnibus_edit", array("id" => $this->getAttribute($context["tipo_omnibus"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                                   title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                                </a>
                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipo_omnibus_delete", array("id" => $this->getAttribute($context["tipo_omnibus"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo_omnibus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                </tbody>
            </table>

        </div><!-- /.box-body -->

        <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 65
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 66
            echo "                    <a class=\"btn btn-sm btn-default  pull-left\" href=\"";
            echo $this->env->getExtension('routing')->getPath("tipo_omnibus_new");
            echo "\">
                        <img src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/add_database_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Nuevo
                    </a>
                ";
        }
        // line 70
        echo "            </div>
            <div class=\"col-sm-4\">
                ";
        // line 73
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
        
        $__internal_8e8adf98a381d871f17b9b0f2c487511a5033e1b5f6f2e604bf523543c8a16b7->leave($__internal_8e8adf98a381d871f17b9b0f2c487511a5033e1b5f6f2e604bf523543c8a16b7_prof);

    }

    public function getTemplateName()
    {
        return ":tipo_omnibus:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 73,  162 => 70,  156 => 67,  151 => 66,  149 => 65,  139 => 57,  123 => 47,  116 => 43,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  85 => 34,  82 => 32,  78 => 31,  74 => 29,  68 => 28,  59 => 21,  53 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     <!-- Default box -->*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Lista de Tipos de Ómnibus</h3>*/
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
/*                 <th>Capacidad sentados</th>*/
/*                 <th>Capacidad parados</th>*/
/*                 <th>Capacidad total</th>*/
/*                 <th>Índice Consumo Normado por Kms</th>*/
/*                 <th>% de Desviación</th>*/
/*                 <th>Cant de Kmts X Litro Combust. - norma</th>*/
/*                 {% if not is_granted('ROLE_USUARIO' ) %}<th><img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones</th>{% endif %}*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for tipo_omnibus in tipo_omnibuses %}*/
/*                     <tr>*/
/*                         {#<td>{{ tipo_omnibus.id }}</td>#}*/
/*                         <td>{{ tipo_omnibus.tipo }}</td>*/
/*                         <td>{{ tipo_omnibus.capacidadSentados }}</td>*/
/*                         <td>{{ tipo_omnibus.capacidadParados }}</td>*/
/*                         <td>{{ tipo_omnibus.capacidadTotal }}</td>*/
/*                         <td>{{ tipo_omnibus.indiceConsumoNormado }}</td>*/
/*                         <td>{{ tipo_omnibus.desviacion }}</td>*/
/*                         <td>{{ tipo_omnibus.cantidadKmtsXlitro }}</td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <a href="{{ path('tipo_omnibus_edit',{ 'id': tipo_omnibus.id }) }}"*/
/*                                    class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                    title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                                 </a>*/
/*                                 <a href="{{ path('tipo_omnibus_delete',{'id': tipo_omnibus.id}) }}"*/
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
/*                     <a class="btn btn-sm btn-default  pull-left" href="{{ path('tipo_omnibus_new') }}">*/
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
/* {#<h1>Tipo_omnibus list</h1>#}*/
/* */
/* {#<table>#}*/
/*     {#<thead>#}*/
/*     {#<tr>#}*/
/*         {#<th>Id</th>#}*/
/*         {#<th>Tipo</th>#}*/
/*         {#<th>Indiceconsumo</th>#}*/
/*         {#<th>Actions</th>#}*/
/*     {#</tr>#}*/
/*     {#</thead>#}*/
/*     {#<tbody>#}*/
/*     {#{% for tipo_omnibus in tipo_omnibuses %}#}*/
/*         {#<tr>#}*/
/*             {#<td><a href="{{ path('tipo_omnibus_show', { 'id': tipo_omnibus.id }) }}">{{ tipo_omnibus.id }}</a></td>#}*/
/*             {#<td>{{ tipo_omnibus.tipo }}</td>#}*/
/*             {#<td>{{ tipo_omnibus.indiceConsumo }}</td>#}*/
/*             {#<td>#}*/
/*                 {#<ul>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('tipo_omnibus_show', { 'id': tipo_omnibus.id }) }}">show</a>#}*/
/*                     {#</li>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('tipo_omnibus_edit', { 'id': tipo_omnibus.id }) }}">edit</a>#}*/
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
/*         {#<a href="{{ path('tipo_omnibus_new') }}">Create a new entry</a>#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
