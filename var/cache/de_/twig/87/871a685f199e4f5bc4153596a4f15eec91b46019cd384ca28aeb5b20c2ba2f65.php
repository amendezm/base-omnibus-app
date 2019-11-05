<?php

/* escogidaturno/show.html.twig */
class __TwigTemplate_75e275846dc58388a04077df68d2411463628bf02c08b5a25fa84075e86f5067 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("index.html.twig", "escogidaturno/show.html.twig", 2);
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
        $__internal_1bbd6f322bf0cf7e854c50c8b8157fc7dbd4b07805a0d1e27874f24893ad2a66 = $this->env->getExtension("native_profiler");
        $__internal_1bbd6f322bf0cf7e854c50c8b8157fc7dbd4b07805a0d1e27874f24893ad2a66->enter($__internal_1bbd6f322bf0cf7e854c50c8b8157fc7dbd4b07805a0d1e27874f24893ad2a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "escogidaturno/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bbd6f322bf0cf7e854c50c8b8157fc7dbd4b07805a0d1e27874f24893ad2a66->leave($__internal_1bbd6f322bf0cf7e854c50c8b8157fc7dbd4b07805a0d1e27874f24893ad2a66_prof);

    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_b3606b5583f8372acf2ecf09e349b8854b71eaaa01a014c041b0b8317c2359bc = $this->env->getExtension("native_profiler");
        $__internal_b3606b5583f8372acf2ecf09e349b8854b71eaaa01a014c041b0b8317c2359bc->enter($__internal_b3606b5583f8372acf2ecf09e349b8854b71eaaa01a014c041b0b8317c2359bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 5
        echo "    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <div class=\"user-block\">
                <h3 class=\"text-center \">Lista de Escogidas de Turnos </h3>
            </div><!-- /.user-block -->
            <div class=\"box-tools\">
                <ul class=\"list-inline\">
                    <li>
                        <a class=\"text-info\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("escogidaturno_index");
        echo "\">
                            <i class=\"glyphicon glyphicon glyphicon-hand-left\"></i> Atràs</a>
                    </li>
                </ul>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th>Ruta :<td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "ruta", array()), "html", null, true);
        echo "</td></th>
                </tr>
                <tr>
                    <th>Ómnibus :<td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "omnibus", array()), "html", null, true);
        echo "</td></th>
                </tr>
                <tr>
                    <th>Turno : <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "turno", array()), "html", null, true);
        echo "</td></th>
                </tr>
                <tr>
                    <th>Empieza :   <td>";
        // line 32
        if ($this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "empieza", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "empieza", array()), "H:i"), "html", null, true);
        }
        echo "</td></th>
                </tr>
                <tr>
                    <th>Sale :<td>";
        // line 35
        if ($this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "sale", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "sale", array()), "H:i"), "html", null, true);
        }
        echo "</td></th>
                </tr>
                <tr>
                    <th>Termina : <td>";
        // line 38
        if ($this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "termina", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "termina", array()), "H:i"), "html", null, true);
        }
        echo "</td></th>
                </tr>
                <tr>
                    <th>Cantidad de viajes :<td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "cantidadViajes", array()), "html", null, true);
        echo "</td></th>
                </tr>
                <tr>
                    <th>Chofer :  <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "chofer", array()), "html", null, true);
        echo "</td></th>
                </tr>
                <tr>
                    <th>Cantidad de días de descanso :  <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "descansoDias", array()), "html", null, true);
        echo "</td></th>
                </tr>
                <tr>
                    <th>Comienzo del descanso :  <td>";
        // line 50
        if ($this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "descansoComienza", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "descansoComienza", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td></th>
                </tr>
                <tr>
                    <th>Término del descanso :  <td>";
        // line 53
        if ($this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "descansoTermina", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "descansoTermina", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td></th>
                </tr>
                <tr>
                    <th>Horas de trabajo :<td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "trabajaHoras", array()), "html", null, true);
        echo "</td></th>
                </tr>
                <tr>
                    <th>Período de la escogida :<td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "periodoEscogida", array()), "html", null, true);
        echo "</td></th>
                </tr>
                <tr>
                    <th>";
        // line 62
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/data_configuration_26px.png"), "html", null, true);
            echo "\" alt=\"User Image\"> Acciones";
        }
        // line 63
        echo "                    <td>
                        ";
        // line 65
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("escogidaturno_edit", array("id" => $this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "id", array()))), "html", null, true);
        echo "\"
                           class=\"btn btn-warning btn-xs\" data-toggle=\"tooltip\" data-placement=\"left\"
                           title=\"Editar elemento\"><i class=\"glyphicon glyphicon-pencil\"></i>
                        </a>
                        <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("escogidaturno_delete", array("id" => $this->getAttribute((isset($context["escogidaTurno"]) ? $context["escogidaTurno"] : $this->getContext($context, "escogidaTurno")), "id", array()))), "html", null, true);
        echo "\"
                           class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"rigth\"
                           title=\"Eliminar elemento\"
                           onclick=\"return confirm('Esta seguro que desea eliminar el elemento')\">
                            <i class=\"glyphicon glyphicon-remove\"></i>
                        </a>
                        ";
        // line 76
        echo "                    </td>
                    </th>
                </tr>
                </thead>
                <tbody>


                </tbody>
            </table>

        </div>
    </div>
  ";
        
        $__internal_b3606b5583f8372acf2ecf09e349b8854b71eaaa01a014c041b0b8317c2359bc->leave($__internal_b3606b5583f8372acf2ecf09e349b8854b71eaaa01a014c041b0b8317c2359bc_prof);

    }

    public function getTemplateName()
    {
        return "escogidaturno/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 76,  168 => 69,  160 => 65,  157 => 63,  151 => 62,  145 => 59,  139 => 56,  131 => 53,  123 => 50,  117 => 47,  111 => 44,  105 => 41,  97 => 38,  89 => 35,  81 => 32,  75 => 29,  69 => 26,  63 => 23,  50 => 13,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     <div class="box box-danger">*/
/*         <div class="box-header with-border">*/
/*             <div class="user-block">*/
/*                 <h3 class="text-center ">Lista de Escogidas de Turnos </h3>*/
/*             </div><!-- /.user-block -->*/
/*             <div class="box-tools">*/
/*                 <ul class="list-inline">*/
/*                     <li>*/
/*                         <a class="text-info" href="{{ path('escogidaturno_index') }}">*/
/*                             <i class="glyphicon glyphicon glyphicon-hand-left"></i> Atràs</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div><!-- /.box-tools -->*/
/*         </div><!-- /.box-header -->*/
/*         <div class="box-body">*/
/*             <table class="table table-hover">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Ruta :<td>{{ escogidaTurno.ruta }}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Ómnibus :<td>{{ escogidaTurno.omnibus }}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Turno : <td>{{ escogidaTurno.turno }}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Empieza :   <td>{% if escogidaTurno.empieza %}{{ escogidaTurno.empieza|date('H:i') }}{% endif %}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Sale :<td>{% if escogidaTurno.sale %}{{ escogidaTurno.sale|date('H:i') }}{% endif %}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Termina : <td>{% if escogidaTurno.termina %}{{ escogidaTurno.termina|date('H:i') }}{% endif %}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Cantidad de viajes :<td>{{ escogidaTurno.cantidadViajes }}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Chofer :  <td>{{ escogidaTurno.chofer }}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Cantidad de días de descanso :  <td>{{ escogidaTurno.descansoDias }}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Comienzo del descanso :  <td>{% if escogidaTurno.descansoComienza %}{{ escogidaTurno.descansoComienza|date('Y-m-d') }}{% endif %}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Término del descanso :  <td>{% if escogidaTurno.descansoTermina %}{{ escogidaTurno.descansoTermina|date('Y-m-d') }}{% endif %}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Horas de trabajo :<td>{{ escogidaTurno.trabajaHoras }}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Período de la escogida :<td>{{ escogidaTurno.periodoEscogida }}</td></th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>{% if not is_granted('ROLE_USUARIO' ) %}<img src="{{ asset('assets/dist/img/data_configuration_26px.png') }}" alt="User Image"> Acciones{% endif %}*/
/*                     <td>*/
/*                         {#<ul>#}*/
/*                         <a href="{{ path('escogidaturno_edit',{ 'id': escogidaTurno.id }) }}"*/
/*                            class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="left"*/
/*                            title="Editar elemento"><i class="glyphicon glyphicon-pencil"></i>*/
/*                         </a>*/
/*                         <a href="{{ path('escogidaturno_delete',{'id': escogidaTurno.id}) }}"*/
/*                            class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="rigth"*/
/*                            title="Eliminar elemento"*/
/*                            onclick="return confirm('Esta seguro que desea eliminar el elemento')">*/
/*                             <i class="glyphicon glyphicon-remove"></i>*/
/*                         </a>*/
/*                         {#</ul>#}*/
/*                     </td>*/
/*                     </th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/* */
/*                 </tbody>*/
/*             </table>*/
/* */
/*         </div>*/
/*     </div>*/
/*   {% endblock %}*/
/* */
