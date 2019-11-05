<?php

/* :ruta:index.html.twig */
class __TwigTemplate_378e88e533a6b767345150fcb57ea541b285dd484f64c3545d856f00e1491b7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":ruta:index.html.twig", 1);
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
        $__internal_495fe6480e8f4a24a6d4d41722dce66a56eaaa0453590badf0f79c39dadda34c = $this->env->getExtension("native_profiler");
        $__internal_495fe6480e8f4a24a6d4d41722dce66a56eaaa0453590badf0f79c39dadda34c->enter($__internal_495fe6480e8f4a24a6d4d41722dce66a56eaaa0453590badf0f79c39dadda34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ruta:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_495fe6480e8f4a24a6d4d41722dce66a56eaaa0453590badf0f79c39dadda34c->leave($__internal_495fe6480e8f4a24a6d4d41722dce66a56eaaa0453590badf0f79c39dadda34c_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_636123b6e3cb33fa7920cf091f9b8f2d43d15f63f14261b3c7f81f6adcf2e0b4 = $this->env->getExtension("native_profiler");
        $__internal_636123b6e3cb33fa7920cf091f9b8f2d43d15f63f14261b3c7f81f6adcf2e0b4->enter($__internal_636123b6e3cb33fa7920cf091f9b8f2d43d15f63f14261b3c7f81f6adcf2e0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <!-- Default box -->
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Lista de Rutas</h3>
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
                <th>Servicio</th>
                <th>Distancia en kms</th>
                <th>Cant. Pasajeros Promedio</th>
                <th>Precio Pasaje</th>
                <th>Salida</th>
                <th>Destino</th>
                <th>Frecuencia</th>
                ";
        // line 29
        echo "                <th>Cantidad de Ómnibus</th>
                ";
        // line 30
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<th><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones</th>";
        }
        // line 31
        echo "                </thead>
                <tbody>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rutas"]) ? $context["rutas"] : $this->getContext($context, "rutas")));
        foreach ($context['_seq'] as $context["_key"] => $context["ruta"]) {
            // line 34
            echo "                    <tr>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruta"], "noRuta", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruta"], "servicio", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruta"], "distanciaKm", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruta"], "cantPasajerosPromedio", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruta"], "precioPasaje", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruta"], "salida", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruta"], "destino", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruta"], "frecuencia", array()), "html", null, true);
            echo "</td>
                        ";
            // line 44
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ruta"], "cantidadMedios", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ruta_edit", array("id" => $this->getAttribute($context["ruta"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                                   title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                                </a>
                                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ruta_delete", array("id" => $this->getAttribute($context["ruta"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ruta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </tbody>
            </table>

        </div><!-- /.box-body -->
        <td style=\"width: 10px\"> </td>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                ";
        // line 68
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 69
            echo "
                    <a class=\"btn btn-sm btn-default  pull-left\" href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("ruta_new");
            echo "\">
                        <img src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/add_database_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Nuevo
                    </a>
                    ";
            // line 74
            echo "                        ";
            // line 75
            echo "                    ";
            // line 76
            echo "                ";
        }
        // line 77
        echo "            </div>
            <div class=\"col-sm-4\">
                ";
        // line 80
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
        
        $__internal_636123b6e3cb33fa7920cf091f9b8f2d43d15f63f14261b3c7f81f6adcf2e0b4->leave($__internal_636123b6e3cb33fa7920cf091f9b8f2d43d15f63f14261b3c7f81f6adcf2e0b4_prof);

    }

    public function getTemplateName()
    {
        return ":ruta:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 80,  179 => 77,  176 => 76,  174 => 75,  172 => 74,  167 => 71,  163 => 70,  160 => 69,  158 => 68,  149 => 61,  133 => 51,  126 => 47,  119 => 44,  115 => 42,  111 => 41,  107 => 40,  103 => 39,  99 => 38,  95 => 37,  91 => 36,  87 => 35,  84 => 34,  80 => 33,  76 => 31,  70 => 30,  67 => 29,  53 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     <!-- Default box -->*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Lista de Rutas</h3>*/
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
/*                 <th>Ruta</th>*/
/*                 <th>Servicio</th>*/
/*                 <th>Distancia en kms</th>*/
/*                 <th>Cant. Pasajeros Promedio</th>*/
/*                 <th>Precio Pasaje</th>*/
/*                 <th>Salida</th>*/
/*                 <th>Destino</th>*/
/*                 <th>Frecuencia</th>*/
/*                 {#<th>Recaudación</th>#}*/
/*                 <th>Cantidad de Ómnibus</th>*/
/*                 {% if not is_granted('ROLE_USUARIO' ) %}<th><img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones</th>{% endif %}*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for ruta in rutas %}*/
/*                     <tr>*/
/*                         <td>{{ ruta.noRuta }}</td>*/
/*                         <td>{{ ruta.servicio}}</td>*/
/*                         <td>{{ ruta.distanciaKm }}</td>*/
/*                         <td>{{ ruta.cantPasajerosPromedio }}</td>*/
/*                         <td>{{ ruta.precioPasaje }}</td>*/
/*                         <td>{{ ruta.salida }}</td>*/
/*                         <td>{{ ruta.destino }}</td>*/
/*                         <td>{{ ruta.frecuencia }}</td>*/
/*                         {#<td>{{ ruta.recaudacion }}</td>#}*/
/*                         <td>{{ ruta.cantidadMedios}}</td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <a href="{{ path('ruta_edit',{ 'id': ruta.id }) }}"*/
/*                                    class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                    title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                                 </a>*/
/*                                 <a href="{{ path('ruta_delete',{'id': ruta.id}) }}"*/
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
/*         <td style="width: 10px"> </td>*/
/*         <div class="row">*/
/*             <div class="col-sm-4">*/
/*                 {% if not is_granted('ROLE_USUARIO' ) %}*/
/* */
/*                     <a class="btn btn-sm btn-default  pull-left" href="{{ path('ruta_new') }}">*/
/*                         <img src="{{ asset('assets/dist/img/add_database_26px.png') }}" alt="User Image"> Nuevo*/
/*                     </a>*/
/*                     {#<a class="btn btn-sm btn-default  pull-left" href="{{ path('ruta_reporte') }}">#}*/
/*                         {#<img src="{{ asset('assets/dist/img/torah_filled_25px.png') }}" alt="User Image"> Reporte#}*/
/*                     {#</a>#}*/
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
/* {#<h1>Ruta list</h1>#}*/
/* */
/* {#<table>#}*/
/*     {#<thead>#}*/
/*     {#<tr>#}*/
/*         {#<th>Id</th>#}*/
/*         {#<th>Distanciakm</th>#}*/
/*         {#<th>Cantpasajerospromedio</th>#}*/
/*         {#<th>Salida</th>#}*/
/*         {#<th>Destino</th>#}*/
/*         {#<th>Frecuencia</th>#}*/
/*         {#<th>Recaudación</th>#}*/
/*         {#<th>Planrecaudación</th>#}*/
/*         {#<th>Actions</th>#}*/
/*     {#</tr>#}*/
/*     {#</thead>#}*/
/*     {#<tbody>#}*/
/*     {#{% for rutum in rutas %}#}*/
/*         {#<tr>#}*/
/*             {#<td><a href="{{ path('ruta_show', { 'id': rutum.id }) }}">{{ rutum.id }}</a></td>#}*/
/*             {#<td>{{ rutum.distanciaKm }}</td>#}*/
/*             {#<td>{{ rutum.cantPasajerosPromedio }}</td>#}*/
/*             {#<td>{{ rutum.salida }}</td>#}*/
/*             {#<td>{{ rutum.destino }}</td>#}*/
/*             {#<td>{{ rutum.frecuencia }}</td>#}*/
/*             {#<td>{{ rutum.recaudación }}</td>#}*/
/*             {#<td>{{ rutum.planRecaudación }}</td>#}*/
/*             {#<td>#}*/
/*                 {#<ul>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('ruta_show', { 'id': rutum.id }) }}">show</a>#}*/
/*                     {#</li>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('ruta_edit', { 'id': rutum.id }) }}">edit</a>#}*/
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
/*         {#<a href="{{ path('ruta_new') }}">Create a new entry</a>#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
