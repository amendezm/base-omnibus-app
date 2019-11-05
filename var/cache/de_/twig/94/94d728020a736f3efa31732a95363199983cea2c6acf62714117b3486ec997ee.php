<?php

/* tarjeta_combustible/index.html.twig */
class __TwigTemplate_ebcbd11cdcacd7631a8822700b33ab88b8176902b74879c59bf26edb3774a86a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "tarjeta_combustible/index.html.twig", 1);
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
        $__internal_ee34e85db666ab2238ac497171246c241e6425e4ea4c31d0e54c1ba7ec18b3f6 = $this->env->getExtension("native_profiler");
        $__internal_ee34e85db666ab2238ac497171246c241e6425e4ea4c31d0e54c1ba7ec18b3f6->enter($__internal_ee34e85db666ab2238ac497171246c241e6425e4ea4c31d0e54c1ba7ec18b3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tarjeta_combustible/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee34e85db666ab2238ac497171246c241e6425e4ea4c31d0e54c1ba7ec18b3f6->leave($__internal_ee34e85db666ab2238ac497171246c241e6425e4ea4c31d0e54c1ba7ec18b3f6_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_a80cf3c7e7294c5b6f8e4952b6f9e7dcabd6f41e6ad1a9051eec3c49d60cc9d8 = $this->env->getExtension("native_profiler");
        $__internal_a80cf3c7e7294c5b6f8e4952b6f9e7dcabd6f41e6ad1a9051eec3c49d60cc9d8->enter($__internal_a80cf3c7e7294c5b6f8e4952b6f9e7dcabd6f41e6ad1a9051eec3c49d60cc9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    <!-- Default box -->
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Lista de Tarjetas de Combustible</h3>
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
        echo "                <th>No. tarjeta</th>
                <th>Tipo de Combustible</th>
                <th>Asignacion</th>
                <th>Fecha de Asignacion</th>
                <th>Gasto Real</th>
                <th>Saldo Acutal</th>
                <th>Fecha de Vencimiento</th>
                <th>Ping</th>
                ";
        // line 29
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<th><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones</th>";
        }
        // line 30
        echo "                </thead>
                <tbody>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tarjeta_combustibles"]) ? $context["tarjeta_combustibles"] : $this->getContext($context, "tarjeta_combustibles")));
        foreach ($context['_seq'] as $context["_key"] => $context["tarjeta_combustible"]) {
            // line 33
            echo "                    <tr>
                        ";
            // line 35
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarjeta_combustible"], "noTarjeta", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarjeta_combustible"], "combustibleTipo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarjeta_combustible"], "asignacion", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            if ($this->getAttribute($context["tarjeta_combustible"], "fechaAsignacion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarjeta_combustible"], "fechaAsignacion", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarjeta_combustible"], "gastoReal", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarjeta_combustible"], "saldoActual", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            if ($this->getAttribute($context["tarjeta_combustible"], "fechaVencimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarjeta_combustible"], "fechaVencimiento", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarjeta_combustible"], "ping", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tarjeta_combustible_edit", array("id" => $this->getAttribute($context["tarjeta_combustible"], "id", array()))), "html", null, true);
            echo "\"
                                   class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                                   title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                                </a>
                                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tarjeta_combustible_delete", array("id" => $this->getAttribute($context["tarjeta_combustible"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarjeta_combustible'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </tbody>
            </table>

        </div><!-- /.box-body -->

        <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 67
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 68
            echo "                    <a class=\"btn btn-sm btn-default  pull-left\" href=\"";
            echo $this->env->getExtension('routing')->getPath("tarjeta_combustible_new");
            echo "\">
                        <img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/add_database_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Nuevo
                    </a>
                ";
        }
        // line 72
        echo "            </div>
            <div class=\"col-sm-4\">
                ";
        // line 74
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 75
            echo "                    ";
            // line 76
            echo "                        ";
            // line 77
            echo "                    ";
            // line 78
            echo "                ";
        }
        // line 79
        echo "            </div>
            <div class=\"col-sm-4\">
                ";
        // line 82
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
        
        $__internal_a80cf3c7e7294c5b6f8e4952b6f9e7dcabd6f41e6ad1a9051eec3c49d60cc9d8->leave($__internal_a80cf3c7e7294c5b6f8e4952b6f9e7dcabd6f41e6ad1a9051eec3c49d60cc9d8_prof);

    }

    public function getTemplateName()
    {
        return "tarjeta_combustible/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 82,  186 => 79,  183 => 78,  181 => 77,  179 => 76,  177 => 75,  175 => 74,  171 => 72,  165 => 69,  160 => 68,  158 => 67,  148 => 59,  132 => 49,  125 => 45,  119 => 42,  113 => 41,  109 => 40,  105 => 39,  99 => 38,  95 => 37,  91 => 36,  86 => 35,  83 => 33,  79 => 32,  75 => 30,  69 => 29,  59 => 21,  53 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     <!-- Default box -->*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Lista de Tarjetas de Combustible</h3>*/
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
/*                 <th>No. tarjeta</th>*/
/*                 <th>Tipo de Combustible</th>*/
/*                 <th>Asignacion</th>*/
/*                 <th>Fecha de Asignacion</th>*/
/*                 <th>Gasto Real</th>*/
/*                 <th>Saldo Acutal</th>*/
/*                 <th>Fecha de Vencimiento</th>*/
/*                 <th>Ping</th>*/
/*                 {% if not is_granted('ROLE_USUARIO' ) %}<th><img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones</th>{% endif %}*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for tarjeta_combustible in tarjeta_combustibles %}*/
/*                     <tr>*/
/*                         {#<td>{{ tarjeta_combustible.id }}</td>#}*/
/*                         <td>{{ tarjeta_combustible.noTarjeta }}</td>*/
/*                         <td>{{ tarjeta_combustible.combustibleTipo }}</td>*/
/*                         <td>{{ tarjeta_combustible.asignacion }}</td>*/
/*                         <td>{% if tarjeta_combustible.fechaAsignacion %}{{ tarjeta_combustible.fechaAsignacion|date('Y-m-d') }}{% endif %}</td>*/
/*                         <td>{{ tarjeta_combustible.gastoReal }}</td>*/
/*                         <td>{{ tarjeta_combustible.saldoActual }}</td>*/
/*                         <td>{% if tarjeta_combustible.fechaVencimiento %}{{ tarjeta_combustible.fechaVencimiento|date('Y-m-d') }}{% endif %}</td>*/
/*                         <td>{{ tarjeta_combustible.ping }}</td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <a href="{{ path('tarjeta_combustible_edit',{ 'id': tarjeta_combustible.id }) }}"*/
/*                                    class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                    title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                                 </a>*/
/*                                 <a href="{{ path('tarjeta_combustible_delete',{'id': tarjeta_combustible.id}) }}"*/
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
/*                     <a class="btn btn-sm btn-default  pull-left" href="{{ path('tarjeta_combustible_new') }}">*/
/*                         <img src="{{ asset('assets/dist/img/add_database_26px.png') }}" alt="User Image"> Nuevo*/
/*                     </a>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*                 {% if not is_granted('ROLE_USUARIO' ) %}*/
/*                     {#<a class="btn btn-sm btn-default  pull-left" href="{{ path('tarjeta_Reporte_mensual') }}">#}*/
/*                         {#<img src="{{ asset('assets/dist/img/add_database_26px.png') }}" alt="User Image"> Reporte#}*/
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
/*     {#{% for tarjeta_combustible in tarjeta_combustibles %}#}*/
/*         {#<tr>#}*/
/*             {#<td><a href="{{ path('tarjeta_combustible_show', { 'id': tarjeta_combustible.asignacion }) }}">{{ tarjeta_combustible.asignacion }}</a></td>#}*/
/*             {#<td>{{ tarjeta_combustible.gastoReal }}</td>#}*/
/*             {#<td>{% if tarjeta_combustible.fechaVencimiento %}{{ tarjeta_combustible.fechaVencimiento|date('Y-m-d') }}{% endif %}</td>#}*/
/*             {#<td>{{ tarjeta_combustible.tipoCombustible }}</td>#}*/
/*             {#<td>{{ tarjeta_combustible.noTarjeta }}</td>#}*/
/*             {#<td>{{ tarjeta_combustible.ping }}</td>#}*/
/*             {#<td>#}*/
/*                 {#<ul>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('tarjeta_combustible_show', { 'id': tarjeta_combustible.asignacion }) }}">show</a>#}*/
/*                     {#</li>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('tarjeta_combustible_edit', { 'id': tarjeta_combustible.asignacion }) }}">edit</a>#}*/
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
/*         {#<a href="{{ path('tarjeta_combustible_new') }}">Create a new entry</a>#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
