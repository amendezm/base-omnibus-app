<?php

/* :incidencia:incidencia_index.html.twig */
class __TwigTemplate_9292c685284a95088fbfa4f0d48f8edf264db6e7973b1639b94e962991f27ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":incidencia:incidencia_index.html.twig", 1);
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
        $__internal_0fa97e6f32d561d752b2563705cfd315707c04f7ee8b681932848c3db2f3d024 = $this->env->getExtension("native_profiler");
        $__internal_0fa97e6f32d561d752b2563705cfd315707c04f7ee8b681932848c3db2f3d024->enter($__internal_0fa97e6f32d561d752b2563705cfd315707c04f7ee8b681932848c3db2f3d024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":incidencia:incidencia_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fa97e6f32d561d752b2563705cfd315707c04f7ee8b681932848c3db2f3d024->leave($__internal_0fa97e6f32d561d752b2563705cfd315707c04f7ee8b681932848c3db2f3d024_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_f1997b4e6ceb9feecf2992a11676e49fdadf63ed55f7c5fa56b16751300e053c = $this->env->getExtension("native_profiler");
        $__internal_f1997b4e6ceb9feecf2992a11676e49fdadf63ed55f7c5fa56b16751300e053c->enter($__internal_f1997b4e6ceb9feecf2992a11676e49fdadf63ed55f7c5fa56b16751300e053c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<!-- Default box -->
<div class=\"box box-danger\">
    <div class=\"box-header with-border\">
        <div class=\"user-block\">
            <h3 class=\"text-center \">Incidencias</h3>
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

            <th>No. incidencia</th>
            <th>Tipo</th>
            <th>Incidencia</th>
            <th>No. Hoja de Ruta</th>
            ";
        // line 25
        echo "            <th>Fecha</th>
            ";
        // line 26
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<th><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones</th>";
        }
        // line 27
        echo "            </thead>
            <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportes"]) ? $context["reportes"] : $this->getContext($context, "reportes")));
        foreach ($context['_seq'] as $context["_key"] => $context["reporte"]) {
            // line 30
            echo "                <tr>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "idincidencia", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "tipoincidencias", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "detalles", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["reporte"], "nohojaruta", array()), "html", null, true);
            echo "</td>
                    ";
            // line 36
            echo "                    <td>";
            if ($this->getAttribute($context["reporte"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reporte"], "fecha", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                    <td>
                        <ul>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("incidencia_edit", array("id" => $this->getAttribute($context["reporte"], "idincidencia", array()))), "html", null, true);
            echo "\"
                               class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                               title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                            </a>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("incidencia_delete", array("id" => $this->getAttribute($context["reporte"], "idincidencia", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reporte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
            </tbody>
        </table>

    </div><!-- /.box-body -->

    ";
        // line 60
        echo "
        ";
        // line 62
        echo "            ";
        // line 63
        echo "                ";
        // line 64
        echo "                    ";
        // line 65
        echo "                ";
        // line 66
        echo "            ";
        // line 67
        echo "        ";
        // line 68
        echo "        ";
        // line 69
        echo "            ";
        // line 70
        echo "        ";
        // line 71
        echo "        ";
        // line 72
        echo "

        ";
        // line 75
        echo "    ";
        // line 76
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
        
        $__internal_f1997b4e6ceb9feecf2992a11676e49fdadf63ed55f7c5fa56b16751300e053c->leave($__internal_f1997b4e6ceb9feecf2992a11676e49fdadf63ed55f7c5fa56b16751300e053c_prof);

    }

    public function getTemplateName()
    {
        return ":incidencia:incidencia_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 76,  166 => 75,  162 => 72,  160 => 71,  158 => 70,  156 => 69,  154 => 68,  152 => 67,  150 => 66,  148 => 65,  146 => 64,  144 => 63,  142 => 62,  139 => 60,  131 => 53,  115 => 43,  108 => 39,  99 => 36,  95 => 34,  91 => 33,  87 => 32,  83 => 31,  80 => 30,  76 => 29,  72 => 27,  66 => 26,  63 => 25,  53 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <!-- Default box -->*/
/* <div class="box box-danger">*/
/*     <div class="box-header with-border">*/
/*         <div class="user-block">*/
/*             <h3 class="text-center ">Incidencias</h3>*/
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
/*             <th>No. incidencia</th>*/
/*             <th>Tipo</th>*/
/*             <th>Incidencia</th>*/
/*             <th>No. Hoja de Ruta</th>*/
/*             {#<th>Chofer</th>#}*/
/*             <th>Fecha</th>*/
/*             {% if not is_granted('ROLE_USUARIO' ) %}<th><img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones</th>{% endif %}*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for reporte in reportes %}*/
/*                 <tr>*/
/*                     <td>{{ reporte.idincidencia }}</td>*/
/*                     <td>{{ reporte.tipoincidencias }}</td>*/
/*                     <td>{{ reporte.detalles }}</td>*/
/*                     <td>{{ reporte.nohojaruta }}</td>*/
/*                     {#<td>{{ reporte.chofer }}</td>#}*/
/*                     <td>{% if reporte.fecha %}{{ reporte.fecha|date('Y-m-d') }}{% endif %}</td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             <a href="{{ path('incidencia_edit',{ 'id': reporte.idincidencia }) }}"*/
/*                                class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                             </a>*/
/*                             <a href="{{ path('incidencia_delete',{'id': reporte.idincidencia}) }}"*/
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
/*     {#<div class="row">#}*/
/* */
/*         {#<div class="col-sm-4">#}*/
/*             {#{% if not is_granted('ROLE_USUARIO' ) %}#}*/
/*                 {#<a class="btn btn-sm btn-default  pull-left" href="{{ path('gps_new') }}">#}*/
/*                     {#<img src="{{ asset('assets/dist/img/add_database_26px.png') }}" alt="User Image"> Nuevo#}*/
/*                 {#</a>#}*/
/*             {#{% endif %}#}*/
/*         {#</div>#}*/
/*         {#<div class="col-sm-4">#}*/
/*             {#{#{{ knp_pagination_render(pagination) }}#}*/
/*         {#</div>#}*/
/*         {#<div class="col-sm-4">#}*/
/* */
/* */
/*         {#</div>#}*/
/*     {#</div>#}*/
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
