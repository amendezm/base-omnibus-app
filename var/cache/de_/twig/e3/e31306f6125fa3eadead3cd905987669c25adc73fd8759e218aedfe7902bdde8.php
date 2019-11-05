<?php

/* sidebar.html.twig */
class __TwigTemplate_1afc526368be262a123b80c066e492fd4ba5146abecf90542b5dd4d6c8d77c0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1091cb39bfd9c5d2ae46ae13948c15dc9d3a29a509fa5f5f7c5879b48e75e9fb = $this->env->getExtension("native_profiler");
        $__internal_1091cb39bfd9c5d2ae46ae13948c15dc9d3a29a509fa5f5f7c5879b48e75e9fb->enter($__internal_1091cb39bfd9c5d2ae46ae13948c15dc9d3a29a509fa5f5f7c5879b48e75e9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        // line 1
        echo "<section id=\"elemento2\" class=\"sidebar\">

    <!-- Sidebar Menu -->
    <ul class=\"sidebar-menu\">
        ";
        // line 6
        echo "        <!-- Optionally, you can add icons to the links -->
        <br>
        <br>

        ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 11
            echo "        <li class=\"treeview\">
            <a href=\"#\"><i class=\"glyphicon glyphicon-tag\"></i> <span>Administración</span><i class=\"fa fa-angle-left pull-right\"></i></a>
            <ul class=\"treeview-menu\">
                <li>
                    <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("usuario_index");
            echo "\">
                        <i class=\"fa fa-users\"></i> <span>Usuarios</span></i>
                    </a>
                </li>

                ";
            // line 21
            echo "                    ";
            // line 22
            echo "                ";
            // line 23
            echo "
                <li >
                    <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("base_index");
            echo "\"><i class=\"glyphicon glyphicon-star-empty\"></i> <span>Base</span> </a>
                </li>
            </ul>
        </li>
        ";
        }
        // line 30
        echo "            ";
        // line 31
        echo "                ";
        // line 32
        echo "                ";
        // line 33
        echo "                    ";
        // line 34
        echo "                        ";
        // line 35
        echo "                            ";
        // line 36
        echo "                        ";
        // line 37
        echo "                    ";
        // line 38
        echo "                    ";
        // line 39
        echo "                        ";
        // line 40
        echo "                            ";
        // line 41
        echo "                        ";
        // line 42
        echo "                    ";
        // line 43
        echo "                    ";
        // line 44
        echo "                        ";
        // line 45
        echo "                            ";
        // line 46
        echo "                        ";
        // line 47
        echo "                    ";
        // line 48
        echo "                ";
        // line 49
        echo "            ";
        // line 50
        echo "

            <li class=\"treeview\">
                <a href=\"#\"><i class=\"glyphicon glyphicon-list\"></i> <span>Dpto de Operaciones</span><i class=\"fa fa-angle-left pull-right\"></i></a>
                <ul class=\"treeview-menu\">
                    <li >
                        <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("chofer_index");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> <span>Choferes</span> </a>
                    </li>

                    <li >
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("omnibus_index");
        echo "\"><i class=\"glyphicon glyphicon-calendar\"></i> <span>Ómnibus</span> </a>
                        ";
        // line 62
        echo "                    </li>

                    <li>
                        <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("tipo_omnibus_index");
        echo "\"><i class=\"glyphicon glyphicon-calendar\"></i> <span>Tipo de Ómnibus</span> </a>
                    </li>

                    <li>
                        <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("ruta_index");
        echo "\"><i class=\"fa fa-fw fa-pencil-square-o\"></i> <span>Rutas</span> </a>
                    </li>
                    <li >
                        <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("pto_expedicion_index");
        echo "\"><i class=\"glyphicon glyphicon-calendar\"></i> <span>Ptos de expedición</span> </a>
                        ";
        // line 74
        echo "                    </li>
                    <li>
                        <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("escogidaturno_index");
        echo "\"><i class=\"fa fa-fw fa-pencil-square-o\"></i> <span>Escogida de Turno </span> </a>
                    </li>

                    <li>
                        <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("hojaruta_index");
        echo "\"><i class=\"fa fa-fw fa-pencil-square-o\"></i> <span>Hoja de Ruta</span> </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("tipoincidencia_index");
        echo "\"><i class=\"fa fa-fw fa-pencil-square-o\"></i> <span>Tipo de Incidencias</span> </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("incidencia_index");
        echo "\"><i class=\"fa fa-fw fa-pencil-square-o\"></i> <span>Incidencias</span> </a>
                    </li>
                    ";
        // line 89
        echo "                        ";
        // line 90
        echo "                    ";
        // line 91
        echo "                    <li>
                        ";
        // line 93
        echo "                    </li>
                </ul>
            </li>


        <li class=\"treeview\">
            <a href=\"#\"><i class=\"glyphicon glyphicon-list\"></i> <span>Dpto de Energía</span><i class=\"fa fa-angle-left pull-right\"></i></a>
            <ul class=\"treeview-menu\">
                <li>
                    <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("tarjeta_combustible_index");
        echo "\">
                        <i class=\"fa fa-credit-card\"></i> <span>Tarjeta de Combustible</span></i>
                    </a>
                </li>

                ";
        // line 108
        echo "                    ";
        // line 109
        echo "                ";
        // line 110
        echo "            </ul>
        </li>

        <li class=\"treeview\">
            <a href=\"#\"><i class=\"glyphicon glyphicon-list\"></i> <span>Dpto de RRHH</span><i class=\"fa fa-angle-left pull-right\"></i></a>
            <ul class=\"treeview-menu\">
                <li>
                    <a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("trabajador_index");
        echo "\">
                        <i class=\"glyphicon glyphicon-user\"></i> <span>Trabajador</span></i>
                    </a>
                </li>
                ";
        // line 122
        echo "                    ";
        // line 123
        echo "                        ";
        // line 124
        echo "                    ";
        // line 125
        echo "                ";
        // line 126
        echo "            </ul>
                </li>
        <li class=\"treeview\">
            <a href=\"#\"><i class=\"glyphicon glyphicon-list\"></i> <span>Dpto de Control de Flotas</span><i class=\"fa fa-angle-left pull-right\"></i></a>
            <ul class=\"treeview-menu\">
                <li>
                    <a href=\"\">
                <li><a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("gps_index");
        echo "\"><i class=\"fa fa-circle-o text-aqua\"></i>Control de Flotas</a></li>
                    </a>
                </li>
            </ul>
        </li>

        <li class=\"treeview\">
            <a href=\"#\"><i class=\"glyphicon glyphicon-list\"></i> <span>Dpto de Recaudación</span><i class=\"fa fa-angle-left pull-right\"></i></a>
            <ul class=\"treeview-menu\">
                <li>
                    <a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("recaudacion_index");
        echo "\">
                        <i class=\"fa fa-money\"></i> <span>Recaudaciones</span></i>
                    </a>
                </li>
                <li>
                <li><a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("recaudacion_recaudacionXfecha");
        echo "\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Recaudación Total por Fecha</span></i>
                    </a>
                </li>

                ";
        // line 153
        echo "                ";
        // line 154
        echo "                ";
        // line 155
        echo "            </ul>
        </li>

<li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-fw fa-filter\"></i> <span>Reportes</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("ruta_reporte");
        echo "\"><i class=\"fa fa-circle-o text-aqua\"></i>Incidencias por Ruta y Ómnibus</a></li>
                    <li><a href=\"";
        // line 162
        echo $this->env->getExtension('routing')->getPath("chofer_reporte");
        echo "\"><i class=\"fa fa-circle-o text-aqua\"></i>Horas Trabajadas por Chofer</a></li>
                    ";
        // line 164
        echo "                    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("plan_combustible");
        echo "\"><i class=\"fa fa-circle-o text-aqua\"></i>Plan de Combustible</a></li>
                    <li><a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("plan_recaudacion");
        echo "\"><i class=\"fa fa-circle-o text-aqua\"></i>Plan de Recaudación</a></li>
                    <li><a href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("omnibus_reporteKms");
        echo "\"><i class=\"fa fa-circle-o text-aqua\"></i>Kilómetros Recorridos Ómnibus</a></li>
                    <li><a href=\"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("combustibleHabilitado");
        echo "\"><i class=\"fa fa-circle-o text-aqua\"></i>Datos de Tarjeta de Combustible y Gps</a></li>
                    <li><a href=\"";
        // line 168
        echo $this->env->getExtension('routing')->getPath("reporteporOmnibus");
        echo "\"><i class=\"fa fa-circle-o text-aqua\"></i>Reporte General por Ómnibus</a></li>
                    ";
        // line 170
        echo "                </ul>
            </li>

    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->";
        
        $__internal_1091cb39bfd9c5d2ae46ae13948c15dc9d3a29a509fa5f5f7c5879b48e75e9fb->leave($__internal_1091cb39bfd9c5d2ae46ae13948c15dc9d3a29a509fa5f5f7c5879b48e75e9fb_prof);

    }

    public function getTemplateName()
    {
        return "sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 170,  303 => 168,  299 => 167,  295 => 166,  291 => 165,  286 => 164,  282 => 162,  278 => 161,  270 => 155,  268 => 154,  266 => 153,  259 => 148,  251 => 143,  238 => 133,  229 => 126,  227 => 125,  225 => 124,  223 => 123,  221 => 122,  214 => 117,  205 => 110,  203 => 109,  201 => 108,  193 => 102,  182 => 93,  179 => 91,  177 => 90,  175 => 89,  170 => 86,  164 => 83,  158 => 80,  151 => 76,  147 => 74,  143 => 72,  137 => 69,  130 => 65,  125 => 62,  121 => 60,  114 => 56,  106 => 50,  104 => 49,  102 => 48,  100 => 47,  98 => 46,  96 => 45,  94 => 44,  92 => 43,  90 => 42,  88 => 41,  86 => 40,  84 => 39,  82 => 38,  80 => 37,  78 => 36,  76 => 35,  74 => 34,  72 => 33,  70 => 32,  68 => 31,  66 => 30,  58 => 25,  54 => 23,  52 => 22,  50 => 21,  42 => 15,  36 => 11,  34 => 10,  28 => 6,  22 => 1,);
    }
}
/* <section id="elemento2" class="sidebar">*/
/* */
/*     <!-- Sidebar Menu -->*/
/*     <ul class="sidebar-menu">*/
/*         {#<li class="sidebar-menu"><span><h4>Panel de Navegación</h4></span></li>#}*/
/*         <!-- Optionally, you can add icons to the links -->*/
/*         <br>*/
/*         <br>*/
/* */
/*         {% if is_granted('ROLE_ADMIN') %}*/
/*         <li class="treeview">*/
/*             <a href="#"><i class="glyphicon glyphicon-tag"></i> <span>Administración</span><i class="fa fa-angle-left pull-right"></i></a>*/
/*             <ul class="treeview-menu">*/
/*                 <li>*/
/*                     <a href="{{ path('usuario_index') }}">*/
/*                         <i class="fa fa-users"></i> <span>Usuarios</span></i>*/
/*                     </a>*/
/*                 </li>*/
/* */
/*                 {#<li >#}*/
/*                     {#<a href=""><i class="glyphicon glyphicon-asterisk"></i> Salvar Base de Datos</a>#}*/
/*                 {#</li>#}*/
/* */
/*                 <li >*/
/*                     <a href="{{ path('base_index')}}"><i class="glyphicon glyphicon-star-empty"></i> <span>Base</span> </a>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*         {% endif %}*/
/*             {#<li class="treeview">#}*/
/*                 {#<a href="#"><i class="glyphicon glyphicon-user"></i> <span>Mi Perfil</span> <i class="fa fa-angle-left pull-right"></i></a>#}*/
/*                 {#<ul class="treeview-menu">#}*/
/*                     {#<li>#}*/
/*                         {#<a href="">#}*/
/*                             {#<i class="fa fa-circle-o text-orange"></i> Mi  Perfil#}*/
/*                         {#</a>#}*/
/*                     {#</li>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="{{ path('usuario_index') }}">#}*/
/*                             {#<i class="fa fa-circle-o text-orange"></i> Editar#}*/
/*                         {#</a>#}*/
/*                     {#</li>#}*/
/*                     {#<li>#}*/
/*                         {#<a href="">#}*/
/*                             {#<i class="fa fa-circle-o text-orange"></i> Cambiar contraseña#}*/
/*                         {#</a>#}*/
/*                     {#</li>#}*/
/*                 {#</ul>#}*/
/*             {#</li>#}*/
/* */
/* */
/*             <li class="treeview">*/
/*                 <a href="#"><i class="glyphicon glyphicon-list"></i> <span>Dpto de Operaciones</span><i class="fa fa-angle-left pull-right"></i></a>*/
/*                 <ul class="treeview-menu">*/
/*                     <li >*/
/*                         <a href="{{ path('chofer_index') }}"><i class="glyphicon glyphicon-user"></i> <span>Choferes</span> </a>*/
/*                     </li>*/
/* */
/*                     <li >*/
/*                         <a href="{{ path('omnibus_index') }}"><i class="glyphicon glyphicon-calendar"></i> <span>Ómnibus</span> </a>*/
/*                         {#<i class="glyphicon glyphicon-"></i>#}*/
/*                     </li>*/
/* */
/*                     <li>*/
/*                         <a href="{{ path('tipo_omnibus_index')}}"><i class="glyphicon glyphicon-calendar"></i> <span>Tipo de Ómnibus</span> </a>*/
/*                     </li>*/
/* */
/*                     <li>*/
/*                         <a href="{{ path('ruta_index') }}"><i class="fa fa-fw fa-pencil-square-o"></i> <span>Rutas</span> </a>*/
/*                     </li>*/
/*                     <li >*/
/*                         <a href="{{ path('pto_expedicion_index') }}"><i class="glyphicon glyphicon-calendar"></i> <span>Ptos de expedición</span> </a>*/
/*                         {#<i class="glyphicon glyphicon-"></i>#}*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('escogidaturno_index') }}"><i class="fa fa-fw fa-pencil-square-o"></i> <span>Escogida de Turno </span> </a>*/
/*                     </li>*/
/* */
/*                     <li>*/
/*                         <a href="{{ path('hojaruta_index') }}"><i class="fa fa-fw fa-pencil-square-o"></i> <span>Hoja de Ruta</span> </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('tipoincidencia_index') }}"><i class="fa fa-fw fa-pencil-square-o"></i> <span>Tipo de Incidencias</span> </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('incidencia_index') }}"><i class="fa fa-fw fa-pencil-square-o"></i> <span>Incidencias</span> </a>*/
/*                     </li>*/
/*                     {#<li>#}*/
/*                         {#<a href=""><i class="fa fa-fw fa-pencil-square-o"></i> <span>Plan de Combustible</span> </a>#}*/
/*                     {#</li>#}*/
/*                     <li>*/
/*                         {#<a href="{{ path('tipo_horas_trabajo_index') }}"><i class="fa fa-fw fa-pencil-square-o"></i> <span>Horas de Trabajo</span> </a>#}*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/* */
/* */
/*         <li class="treeview">*/
/*             <a href="#"><i class="glyphicon glyphicon-list"></i> <span>Dpto de Energía</span><i class="fa fa-angle-left pull-right"></i></a>*/
/*             <ul class="treeview-menu">*/
/*                 <li>*/
/*                     <a href="{{ path('tarjeta_combustible_index') }}">*/
/*                         <i class="fa fa-credit-card"></i> <span>Tarjeta de Combustible</span></i>*/
/*                     </a>*/
/*                 </li>*/
/* */
/*                 {#<li >#}*/
/*                     {#<a href="{{ path('tipocombustible_index') }}"><i class="glyphicon glyphicon-star"></i> Tipo de Combustible</a>#}*/
/*                 {#</li>#}*/
/*             </ul>*/
/*         </li>*/
/* */
/*         <li class="treeview">*/
/*             <a href="#"><i class="glyphicon glyphicon-list"></i> <span>Dpto de RRHH</span><i class="fa fa-angle-left pull-right"></i></a>*/
/*             <ul class="treeview-menu">*/
/*                 <li>*/
/*                     <a href="{{ path('trabajador_index') }}">*/
/*                         <i class="glyphicon glyphicon-user"></i> <span>Trabajador</span></i>*/
/*                     </a>*/
/*                 </li>*/
/*                 {#<li>#}*/
/*                     {#<a href="">#}*/
/*                         {#<i class="fa fa-money"></i> <span>Salarios</span></i>#}*/
/*                     {#</a>#}*/
/*                 {#</li>#}*/
/*             </ul>*/
/*                 </li>*/
/*         <li class="treeview">*/
/*             <a href="#"><i class="glyphicon glyphicon-list"></i> <span>Dpto de Control de Flotas</span><i class="fa fa-angle-left pull-right"></i></a>*/
/*             <ul class="treeview-menu">*/
/*                 <li>*/
/*                     <a href="">*/
/*                 <li><a href="{{ path('gps_index') }}"><i class="fa fa-circle-o text-aqua"></i>Control de Flotas</a></li>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/* */
/*         <li class="treeview">*/
/*             <a href="#"><i class="glyphicon glyphicon-list"></i> <span>Dpto de Recaudación</span><i class="fa fa-angle-left pull-right"></i></a>*/
/*             <ul class="treeview-menu">*/
/*                 <li>*/
/*                     <a href="{{ path('recaudacion_index') }}">*/
/*                         <i class="fa fa-money"></i> <span>Recaudaciones</span></i>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                 <li><a href="{{ path('recaudacion_recaudacionXfecha') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Recaudación Total por Fecha</span></i>*/
/*                     </a>*/
/*                 </li>*/
/* */
/*                 {#<li >#}*/
/*                 {#<a href="{{ path('tipocombustible_index') }}"><i class="glyphicon glyphicon-star"></i> Tipo de Combustible</a>#}*/
/*                 {#</li>#}*/
/*             </ul>*/
/*         </li>*/
/* */
/* <li class="treeview">*/
/*                 <a href="#"><i class="fa fa-fw fa-filter"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i></a>*/
/*                 <ul class="treeview-menu">*/
/*                     <li><a href="{{ path('ruta_reporte') }}"><i class="fa fa-circle-o text-aqua"></i>Incidencias por Ruta y Ómnibus</a></li>*/
/*                     <li><a href="{{ path('chofer_reporte') }}"><i class="fa fa-circle-o text-aqua"></i>Horas Trabajadas por Chofer</a></li>*/
/*                     {#<li><a href="{{ path('reporte_hoja_ruta_fecha') }}"><i class="fa fa-circle-o text-aqua"></i>Hojas de Ruta</a></li>#}*/
/*                     <li><a href="{{ path('plan_combustible') }}"><i class="fa fa-circle-o text-aqua"></i>Plan de Combustible</a></li>*/
/*                     <li><a href="{{ path('plan_recaudacion') }}"><i class="fa fa-circle-o text-aqua"></i>Plan de Recaudación</a></li>*/
/*                     <li><a href="{{ path('omnibus_reporteKms') }}"><i class="fa fa-circle-o text-aqua"></i>Kilómetros Recorridos Ómnibus</a></li>*/
/*                     <li><a href="{{ path('combustibleHabilitado') }}"><i class="fa fa-circle-o text-aqua"></i>Datos de Tarjeta de Combustible y Gps</a></li>*/
/*                     <li><a href="{{ path('reporteporOmnibus') }}"><i class="fa fa-circle-o text-aqua"></i>Reporte General por Ómnibus</a></li>*/
/*                     {# <li><a href=""><i class="fa fa-circle-o text-aqua"></i>Taller 2</a></li> #}*/
/*                 </ul>*/
/*             </li>*/
/* */
/*     </ul>*/
/*     <!-- /.sidebar-menu -->*/
/* </section>*/
/* <!-- /.sidebar -->*/
