<?php

/* :gps:index.html.twig */
class __TwigTemplate_f315dff4d4ae5bf1a897991e2b2aecb35d53c284eed096e5cad6729dc1951e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":gps:index.html.twig", 1);
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
        $__internal_445e65e95e66553ae1222dbae7c8927e9d87167b4f71e52bee7526da31f8b328 = $this->env->getExtension("native_profiler");
        $__internal_445e65e95e66553ae1222dbae7c8927e9d87167b4f71e52bee7526da31f8b328->enter($__internal_445e65e95e66553ae1222dbae7c8927e9d87167b4f71e52bee7526da31f8b328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gps:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_445e65e95e66553ae1222dbae7c8927e9d87167b4f71e52bee7526da31f8b328->leave($__internal_445e65e95e66553ae1222dbae7c8927e9d87167b4f71e52bee7526da31f8b328_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_4863e78ddedfafbfdbf8e150c2f2d8b7172d252d311de3363e017a65ccac8be7 = $this->env->getExtension("native_profiler");
        $__internal_4863e78ddedfafbfdbf8e150c2f2d8b7172d252d311de3363e017a65ccac8be7->enter($__internal_4863e78ddedfafbfdbf8e150c2f2d8b7172d252d311de3363e017a65ccac8be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<!-- Default box -->
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Control de Flotas</h3>
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

            <th>Ómnibus</th>
            <th>Combustible</th>
            <th>Kms Recorridos</th>
            <th>Fecha</th>
            ";
        // line 24
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<th><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones</th>";
        }
        // line 25
        echo "            </thead>
            <tbody>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["GPS"]) ? $context["GPS"] : $this->getContext($context, "GPS")));
        foreach ($context['_seq'] as $context["_key"] => $context["gps"]) {
            // line 28
            echo "                <tr>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["gps"], "omnibus", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["gps"], "combustible", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["gps"], "kmRecorridos", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            if ($this->getAttribute($context["gps"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["gps"], "fecha", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                    <td>
                        <ul>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gps_edit", array("id" => $this->getAttribute($context["gps"], "id", array()))), "html", null, true);
            echo "\"
                               class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                               title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                            </a>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gps_delete", array("id" => $this->getAttribute($context["gps"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gps'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
            </tbody>
        </table>

    </div><!-- /.box-body -->

    <div class=\"row\">

        <div class=\"col-sm-4\">
            ";
        // line 58
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 59
            echo "                <a class=\"btn btn-sm btn-default  pull-left\" href=\"";
            echo $this->env->getExtension('routing')->getPath("gps_new");
            echo "\">
                    <img src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/add_database_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Nuevo
                </a>
            ";
        }
        // line 63
        echo "        </div>
        <div class=\"col-sm-4\">
            ";
        // line 66
        echo "        </div>
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
        
        $__internal_4863e78ddedfafbfdbf8e150c2f2d8b7172d252d311de3363e017a65ccac8be7->leave($__internal_4863e78ddedfafbfdbf8e150c2f2d8b7172d252d311de3363e017a65ccac8be7_prof);

    }

    public function getTemplateName()
    {
        return ":gps:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 66,  147 => 63,  141 => 60,  136 => 59,  134 => 58,  123 => 49,  107 => 39,  100 => 35,  92 => 32,  88 => 31,  84 => 30,  80 => 29,  77 => 28,  73 => 27,  69 => 25,  63 => 24,  53 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <!-- Default box -->*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Control de Flotas</h3>*/
/*         </div><!-- /.user-block -->*/
/*         <div class="box-tools">*/
/* */
/*         </div><!-- /.box-tools -->*/
/*     </div><!-- /.box-header -->*/
/*     <div class="box-body">*/
/*         {#<h5>Total de registros: {{ pagination.getTotalItemCount }}</h5>#}*/
/* */
/*         <table class="table table-hover">*/
/*             <thead>*/
/* */
/*             <th>Ómnibus</th>*/
/*             <th>Combustible</th>*/
/*             <th>Kms Recorridos</th>*/
/*             <th>Fecha</th>*/
/*             {% if not is_granted('ROLE_USUARIO' ) %}<th><img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones</th>{% endif %}*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for gps in GPS %}*/
/*                 <tr>*/
/*                     <td>{{ gps.omnibus }}</td>*/
/*                     <td>{{ gps.combustible }}</td>*/
/*                     <td>{{ gps.kmRecorridos }}</td>*/
/*                     <td>{% if gps.fecha %}{{ gps.fecha|date('Y-m-d') }}{% endif %}</td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             <a href="{{ path('gps_edit',{ 'id': gps.id }) }}"*/
/*                                class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                             </a>*/
/*                             <a href="{{ path('gps_delete',{'id': gps.id}) }}"*/
/*                                class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                title="Eliminar elemento"*/
/*                                onclick="return confirm('Esta seguro que desea eliminar el elemento')">*/
/*                                 <i class="glyphicon glyphicon-remove"></i>*/
/*                             </a>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/* */
/*             </tbody>*/
/*         </table>*/
/* */
/*     </div><!-- /.box-body -->*/
/* */
/*     <div class="row">*/
/* */
/*         <div class="col-sm-4">*/
/*             {% if not is_granted('ROLE_USUARIO' ) %}*/
/*                 <a class="btn btn-sm btn-default  pull-left" href="{{ path('gps_new') }}">*/
/*                     <img src="{{ asset('assets/dist/img/add_database_26px.png') }}" alt="User Image"> Nuevo*/
/*                 </a>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/*             {#{{ knp_pagination_render(pagination) }}#}*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* </div><!-- /.box -->*/
/* <div id="mymodal" class="modal  inmodal fade">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header text-center">*/
/*                 <button aria-label="Close" data-dismiss="modal" class="close" type="button">*/
/*                     <span aria-hidden="true">×</span></button>*/
/*                 <i class="fa-3x fa fa-warning modal-icon text-red"></i>*/
/*                 <h4 class="modal-title">Acción Peligrosa</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*                 <p>Está acción puede ocacionar, comprometer la integridad de los datos!</p>*/
/*                 <small>Si no es un usuario avanzado, recomendamos que cancele esta acción.</small>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button data-dismiss="modal" class="btn btn-primary" type="button">Cerrar</button>*/
/*                 <a class="btn btn-primary btn-danger btn-delete" href="#">Eliminar</a>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.modal-content -->*/
/*     </div>*/
/*     <!-- /.modal-dialog -->*/
/* </div>*/
/*     {% endblock %}*/
/* {#<h1>GPS list</h1>#}*/
/* */
/* {#<table>#}*/
/*     {#<thead>#}*/
/*     {#<tr>#}*/
/*         {#<th>Id</th>#}*/
/*         {#<th>Combustible</th>#}*/
/*         {#<th>Kmrecorridos</th>#}*/
/*         {#<th>Fecha</th>#}*/
/*         {#<th>Actions</th>#}*/
/*     {#</tr>#}*/
/*     {#</thead>#}*/
/*     {#<tbody>#}*/
/*     {#{% for gP in gPSs %}#}*/
/*         {#<tr>#}*/
/*             {#<td><a href="{{ path('gps_show', { 'id': gP.id }) }}">{{ gP.id }}</a></td>#}*/
/*             {#<td>{{ gP.combustible }}</td>#}*/
/*             {#<td>{{ gP.kmRecorridos }}</td>#}*/
/*             {#<td>{% if gP.fecha %}{{ gP.fecha|date('Y-m-d') }}{% endif %}</td>#}*/
/*             {#<td>#}*/
/*                 {#<ul>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('gps_show', { 'id': gP.id }) }}">show</a>#}*/
/*                     {#</li>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('gps_edit', { 'id': gP.id }) }}">edit</a>#}*/
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
/*         {#<a href="{{ path('gps_new') }}">Create a new entry</a>#}*/
/*     {#</li>#}*/
/* {#</ul>#}*/
/* */
