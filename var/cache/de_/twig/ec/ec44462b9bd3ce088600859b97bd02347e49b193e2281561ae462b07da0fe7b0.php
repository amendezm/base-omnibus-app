<?php

/* recaudacion/index.html.twig */
class __TwigTemplate_3b0b60b313a85ab745e6e73843bca1bdcfd4af907f9e61a7a3eda63c9ed7b4f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("index.html.twig", "recaudacion/index.html.twig", 2);
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
        $__internal_3e3e539f4f2f8c7ca668b8641d146249929f87f374c5350fc1af624cf1fc63b0 = $this->env->getExtension("native_profiler");
        $__internal_3e3e539f4f2f8c7ca668b8641d146249929f87f374c5350fc1af624cf1fc63b0->enter($__internal_3e3e539f4f2f8c7ca668b8641d146249929f87f374c5350fc1af624cf1fc63b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recaudacion/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e3e539f4f2f8c7ca668b8641d146249929f87f374c5350fc1af624cf1fc63b0->leave($__internal_3e3e539f4f2f8c7ca668b8641d146249929f87f374c5350fc1af624cf1fc63b0_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a456de83da69ad2dec5ad2053304741a66433d8b24cc30956bfe640d5a851e78 = $this->env->getExtension("native_profiler");
        $__internal_a456de83da69ad2dec5ad2053304741a66433d8b24cc30956bfe640d5a851e78->enter($__internal_a456de83da69ad2dec5ad2053304741a66433d8b24cc30956bfe640d5a851e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/js/deleteBase.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_a456de83da69ad2dec5ad2053304741a66433d8b24cc30956bfe640d5a851e78->leave($__internal_a456de83da69ad2dec5ad2053304741a66433d8b24cc30956bfe640d5a851e78_prof);

    }

    // line 10
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_cc9084eb6d84114f1ccc20a1d1bc9ffa87c61ba20656125967cdd0b0effdd738 = $this->env->getExtension("native_profiler");
        $__internal_cc9084eb6d84114f1ccc20a1d1bc9ffa87c61ba20656125967cdd0b0effdd738->enter($__internal_cc9084eb6d84114f1ccc20a1d1bc9ffa87c61ba20656125967cdd0b0effdd738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 11
        echo "        <!-- Default box -->
        <div class=\"box box-danger\">
            <div class=\"box-header with-border\">
                <div class=\"user-block\">
                    <h3 class=\"text-center \">Lista de Recaudaciones</h3>
                </div><!-- /.user-block -->
                <div class=\"box-tools\">

                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class=\"box-body\">
                ";
        // line 23
        echo "
                <table class=\"table table-hover\">
                    <thead>

                    <th>No.HojaRuta</th>
                    <th>No.sello</th>
                    <th>No.vale</th>
                    <th>Recaudación</th>
                    <th>Recaudador</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    ";
        // line 34
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<th><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones</th>";
        }
        // line 35
        echo "                    </thead>
                    <tbody>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recaudacions"]) ? $context["recaudacions"] : $this->getContext($context, "recaudacions")));
        foreach ($context['_seq'] as $context["_key"] => $context["recaudacion"]) {
            // line 38
            echo "                        <tr>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["recaudacion"], "hojaRuta", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["recaudacion"], "noSello", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["recaudacion"], "noVale", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["recaudacion"], "recaudacion", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["recaudacion"], "recaudador", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            if ($this->getAttribute($context["recaudacion"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["recaudacion"], "fecha", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 45
            if ($this->getAttribute($context["recaudacion"], "hora", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["recaudacion"], "hora", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>

                            <td>
                                <ul>
                                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recaudacion_edit", array("id" => $this->getAttribute($context["recaudacion"], "id", array()))), "html", null, true);
            echo "\"
                                       class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\"
                                       title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                                    </a>
                                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recaudacion_delete", array("id" => $this->getAttribute($context["recaudacion"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recaudacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "

                    </tbody>
                </table>

            </div><!-- /.box-body -->

            <div class=\"row\">

                <div class=\"col-sm-4\">
                    ";
        // line 73
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 74
            echo "                        <a class=\"btn btn-sm btn-default  pull-left\" href=\"";
            echo $this->env->getExtension('routing')->getPath("recaudacion_new");
            echo "\">
                            <img src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/add_database_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Nuevo
                        </a>
                        ";
            // line 78
            echo "                            ";
            // line 79
            echo "                        ";
            // line 80
            echo "                    ";
        }
        // line 81
        echo "                </div>
                <div class=\"col-sm-4\">
                    ";
        // line 84
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
        
        $__internal_cc9084eb6d84114f1ccc20a1d1bc9ffa87c61ba20656125967cdd0b0effdd738->leave($__internal_cc9084eb6d84114f1ccc20a1d1bc9ffa87c61ba20656125967cdd0b0effdd738_prof);

    }

    public function getTemplateName()
    {
        return "recaudacion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 84,  194 => 81,  191 => 80,  189 => 79,  187 => 78,  182 => 75,  177 => 74,  175 => 73,  163 => 63,  147 => 53,  140 => 49,  131 => 45,  125 => 44,  121 => 43,  117 => 42,  113 => 41,  109 => 40,  105 => 39,  102 => 38,  98 => 37,  94 => 35,  88 => 34,  75 => 23,  62 => 11,  56 => 10,  47 => 7,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
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
/*                     <h3 class="text-center ">Lista de Recaudaciones</h3>*/
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
/*                     <th>No.HojaRuta</th>*/
/*                     <th>No.sello</th>*/
/*                     <th>No.vale</th>*/
/*                     <th>Recaudación</th>*/
/*                     <th>Recaudador</th>*/
/*                     <th>Fecha</th>*/
/*                     <th>Hora</th>*/
/*                     {% if not is_granted('ROLE_USUARIO' ) %}<th><img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones</th>{% endif %}*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for recaudacion in recaudacions %}*/
/*                         <tr>*/
/*                             <td>{{ recaudacion.hojaRuta }}</td>*/
/*                             <td>{{ recaudacion.noSello }}</td>*/
/*                             <td>{{ recaudacion.noVale }}</td>*/
/*                             <td>{{ recaudacion.recaudacion }}</td>*/
/*                             <td>{{ recaudacion.recaudador }}</td>*/
/*                             <td>{% if recaudacion.fecha %}{{ recaudacion.fecha|date('Y-m-d') }}{% endif %}</td>*/
/*                             <td>{% if recaudacion.hora %}{{ recaudacion.hora|date('Y-m-d') }}{% endif %}</td>*/
/* */
/*                             <td>*/
/*                                 <ul>*/
/*                                     <a href="{{ path('recaudacion_edit',{ 'id': recaudacion.id }) }}"*/
/*                                        class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                        title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                                     </a>*/
/*                                     <a href="{{ path('recaudacion_delete',{'id': recaudacion.id}) }}"*/
/*                                        class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="right"*/
/*                                        title="Eliminar elemento"*/
/*                                        onclick="return confirm('Esta seguro que desea eliminar el elemento')">*/
/*                                         <i class="glyphicon glyphicon-remove"></i>*/
/*                                     </a>*/
/*                                 </ul>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/* */
/* */
/*                     </tbody>*/
/*                 </table>*/
/* */
/*             </div><!-- /.box-body -->*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-sm-4">*/
/*                     {% if not is_granted('ROLE_USUARIO' ) %}*/
/*                         <a class="btn btn-sm btn-default  pull-left" href="{{ path('recaudacion_new') }}">*/
/*                             <img src="{{ asset('assets/dist/img/add_database_26px.png') }}" alt="User Image"> Nuevo*/
/*                         </a>*/
/*                         {#<a class="btn btn-sm btn-default  pull-left" href="{{ path('recaudacion_reporte') }}">#}*/
/*                             {#<img src="{{ asset('assets/dist/img/torah_filled_25px.png') }}" alt="User Image"> Reporte#}*/
/*                         {#</a>#}*/
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
/* */
