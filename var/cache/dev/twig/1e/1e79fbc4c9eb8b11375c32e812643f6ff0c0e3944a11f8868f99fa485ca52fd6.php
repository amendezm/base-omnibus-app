<?php

/* base/index.html.twig */
class __TwigTemplate_15ed552e53d230ec5eadd4768b3f1b0227a77f2e0da616ab17df56e19c4e42ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "base/index.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f00c74cbb6ac2f915eafd6842e70d8df04c6609d6ae27ab3e05cf024b0fd2b4 = $this->env->getExtension("native_profiler");
        $__internal_2f00c74cbb6ac2f915eafd6842e70d8df04c6609d6ae27ab3e05cf024b0fd2b4->enter($__internal_2f00c74cbb6ac2f915eafd6842e70d8df04c6609d6ae27ab3e05cf024b0fd2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f00c74cbb6ac2f915eafd6842e70d8df04c6609d6ae27ab3e05cf024b0fd2b4->leave($__internal_2f00c74cbb6ac2f915eafd6842e70d8df04c6609d6ae27ab3e05cf024b0fd2b4_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d58320d4a70881594352e7e2cc2671a3a0fa3232f76d64585022106fd5e7708 = $this->env->getExtension("native_profiler");
        $__internal_6d58320d4a70881594352e7e2cc2671a3a0fa3232f76d64585022106fd5e7708->enter($__internal_6d58320d4a70881594352e7e2cc2671a3a0fa3232f76d64585022106fd5e7708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

        <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/js/deleteBase.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6d58320d4a70881594352e7e2cc2671a3a0fa3232f76d64585022106fd5e7708->leave($__internal_6d58320d4a70881594352e7e2cc2671a3a0fa3232f76d64585022106fd5e7708_prof);

    }

    // line 9
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_57ead93b320e65b7bddcd9eaa684e18338413522991aca4ff74452101ea93f80 = $this->env->getExtension("native_profiler");
        $__internal_57ead93b320e65b7bddcd9eaa684e18338413522991aca4ff74452101ea93f80->enter($__internal_57ead93b320e65b7bddcd9eaa684e18338413522991aca4ff74452101ea93f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 10
        echo "        <!-- Default box -->
        <div class=\"box box-danger\">
            <div class=\"box-header with-border\">
                <div class=\"user-block\">
                    <h3 class=\"text-center \">Lista de Bases</h3>
                </div><!-- /.user-block -->
                <div class=\"box-tools\">

                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class=\"box-body\">
                ";
        // line 22
        echo "
                <table class=\"table table-hover\">
                    <thead>

                    ";
        // line 27
        echo "                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Dirección</th>
                    ";
        // line 30
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<th><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones</th>";
        }
        // line 31
        echo "                    </thead>
                    <tbody>
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bases"]) ? $context["bases"] : $this->getContext($context, "bases")));
        foreach ($context['_seq'] as $context["_key"] => $context["base"]) {
            // line 34
            echo "                        <tr>
                            ";
            // line 36
            echo "                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["base"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["base"], "descripcion", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["base"], "direccion", array()), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("base_edit", array("id" => $this->getAttribute($context["base"], "id", array()))), "html", null, true);
            echo "\"
                                       class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                                       title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                                    </a>
                                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("base_delete", array("id" => $this->getAttribute($context["base"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['base'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    ";
        // line 56
        echo "                        ";
        // line 57
        echo "                        ";
        // line 58
        echo "                        ";
        // line 59
        echo "                            ";
        // line 60
        echo "                               ";
        // line 61
        echo "                               ";
        // line 62
        echo "                            ";
        // line 63
        echo "                            ";
        // line 64
        echo "                               ";
        // line 65
        echo "                               ";
        // line 66
        echo "                               ";
        // line 67
        echo "                                ";
        // line 68
        echo "                            ";
        // line 69
        echo "                        ";
        // line 70
        echo "                    ";
        // line 71
        echo "                                       ";
        // line 72
        echo "                    ";
        // line 73
        echo "                        ";
        // line 74
        echo "

                            ";
        // line 77
        echo "                                ";
        // line 78
        echo "                                ";
        // line 79
        echo "                            ";
        // line 80
        echo "                        ";
        // line 81
        echo "                    ";
        // line 82
        echo "                    </tbody>
                </table>

            </div><!-- /.box-body -->

            <div class=\"row\">

                <div class=\"col-sm-4\">
                    ";
        // line 90
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 91
            echo "                        <a class=\"btn btn-sm btn-default  pull-left\" href=\"";
            echo $this->env->getExtension('routing')->getPath("base_new");
            echo "\">
                            <img src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/add_database_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Nuevo
                        </a>
                    ";
        }
        // line 95
        echo "                </div>
                <div class=\"col-sm-4\">
                    ";
        // line 98
        echo "                </div>
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
        <!-- /.modal -->
    ";
        
        $__internal_57ead93b320e65b7bddcd9eaa684e18338413522991aca4ff74452101ea93f80->leave($__internal_57ead93b320e65b7bddcd9eaa684e18338413522991aca4ff74452101ea93f80_prof);

    }

    public function getTemplateName()
    {
        return "base/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 98,  216 => 95,  210 => 92,  205 => 91,  203 => 90,  193 => 82,  191 => 81,  189 => 80,  187 => 79,  185 => 78,  183 => 77,  179 => 74,  177 => 73,  175 => 72,  173 => 71,  171 => 70,  169 => 69,  167 => 68,  165 => 67,  163 => 66,  161 => 65,  159 => 64,  157 => 63,  155 => 62,  153 => 61,  151 => 60,  149 => 59,  147 => 58,  145 => 57,  143 => 56,  141 => 55,  125 => 45,  118 => 41,  112 => 38,  108 => 37,  103 => 36,  100 => 34,  96 => 33,  92 => 31,  86 => 30,  81 => 27,  75 => 22,  62 => 10,  56 => 9,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/*     {% block javascripts %}*/
/*         {{ parent() }}*/
/* */
/*         <script src="{{ asset('assets/dist/js/deleteBase.js') }}"></script>*/
/*     {% endblock javascripts %}*/
/* */
/*     {% block contenido%}*/
/*         <!-- Default box -->*/
/*         <div class="box box-danger">*/
/*             <div class="box-header with-border">*/
/*                 <div class="user-block">*/
/*                     <h3 class="text-center ">Lista de Bases</h3>*/
/*                 </div><!-- /.user-block -->*/
/*                 <div class="box-tools">*/
/* */
/*                 </div><!-- /.box-tools -->*/
/*             </div><!-- /.box-header -->*/
/*             <div class="box-body">*/
/*                 {#<h5>Total de registros: {{ pagination.getTotalItemCount }}</h5>#}*/
/* */
/*                 <table class="table table-hover">*/
/*                     <thead>*/
/* */
/*                     {#<th>Id</th>#}*/
/*                     <th>Nombre</th>*/
/*                     <th>Descripción</th>*/
/*                     <th>Dirección</th>*/
/*                     {% if not is_granted('ROLE_USUARIO' ) %}<th><img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones</th>{% endif %}*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for base in bases %}*/
/*                         <tr>*/
/*                             {#<td>{{ base.id }}</td>#}*/
/*                             <td>{{ base.nombre }}</td>*/
/*                             <td>{{ base.descripcion }}</td>*/
/*                             <td>{{ base.direccion }}</td>*/
/*                             <td>*/
/*                                 <ul>*/
/*                                     <a href="{{ path('base_edit',{ 'id': base.id }) }}"*/
/*                                        class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                        title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                                     </a>*/
/*                                     <a href="{{ path('base_delete',{'id': base.id}) }}"*/
/*                                        class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                        title="Eliminar elemento"*/
/*                                        onclick="return confirm('Esta seguro que desea eliminar el elemento')">*/
/*                                         <i class="glyphicon glyphicon-remove"></i>*/
/*                                     </a>*/
/*                                 </ul>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     {#<td>#}*/
/*                         {#{% for base in bases %}#}*/
/*                         {#<tr>#}*/
/*                         {#<ul>#}*/
/*                             {#<a href="{{ path('base_edit',{ 'id': base.id }) }}"#}*/
/*                                {#class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"#}*/
/*                                {#title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>#}*/
/*                             {#</a>#}*/
/*                             {#<a href="{{ path('base_delete',{'id': base.id}) }}"#}*/
/*                                {#class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="right"#}*/
/*                                {#title="Eliminar elemento"#}*/
/*                                {#onclick="return confirm('Esta seguro que desea eliminar el elemento')">#}*/
/*                                 {#<i class="glyphicon glyphicon-remove"></i>#}*/
/*                             {#</a>#}*/
/*                         {#</ul>#}*/
/*                     {#</td>#}*/
/*                                        {#</tr>#}*/
/*                     {#{% for empresa in pagination %}#}*/
/*                         {#<tr>#}*/
/* */
/* */
/*                             {#<td class="project-actions pull-right">#}*/
/*                                 {#{% if not is_granted('ROLE_USUARIO' ) %}<a class="btn btn-primary btn-sm" href="{{ path('empresa_edit', { 'id': empresa.id }) }}"><i class="glyphicon glyphicon glyphicon-edit"></i> Editar</a>{% endif %}#}*/
/*                                 {#{% if not is_granted('ROLE_USUARIO' ) %}<a class="btn btn-danger btn-sm " href="#mymodal" data-toggle ="modal" data-url="{{ path('empresa_delete', {'id':empresa.id}) }}"><i class="glyphicon glyphicon-floppy-remove"></i> Eliminar</a>{% endif %}#}*/
/*                             {#</td>#}*/
/*                         {#</tr>#}*/
/*                     {#{% endfor %}#}*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/*             </div><!-- /.box-body -->*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-sm-4">*/
/*                     {% if not is_granted('ROLE_USUARIO' ) %}*/
/*                         <a class="btn btn-sm btn-default  pull-left" href="{{ path('base_new') }}">*/
/*                             <img src="{{ asset('assets/dist/img/add_database_26px.png') }}" alt="User Image"> Nuevo*/
/*                         </a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-4">*/
/*                     {#{{ knp_pagination_render(pagination) }}#}*/
/*                 </div>*/
/*                 <div class="col-sm-4">*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div><!-- /.box -->*/
/*         <div id="mymodal" class="modal  inmodal fade">*/
/*             <div class="modal-dialog">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header text-center">*/
/*                         <button aria-label="Close" data-dismiss="modal" class="close" type="button">*/
/*                             <span aria-hidden="true">×</span></button>*/
/*                         <i class="fa-3x fa fa-warning modal-icon text-red"></i>*/
/*                         <h4 class="modal-title">Acción Peligrosa</h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         <p>Está acción puede ocacionar, comprometer la integridad de los datos!</p>*/
/*                         <small>Si no es un usuario avanzado, recomendamos que cancele esta acción.</small>*/
/*                     </div>*/
/*                     <div class="modal-footer">*/
/*                         <button data-dismiss="modal" class="btn btn-primary" type="button">Cerrar</button>*/
/*                         <a class="btn btn-primary btn-danger btn-delete" href="#">Eliminar</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.modal-content -->*/
/*             </div>*/
/*             <!-- /.modal-dialog -->*/
/*         </div>*/
/*         <!-- /.modal -->*/
/*     {% endblock %}*/
/* */
