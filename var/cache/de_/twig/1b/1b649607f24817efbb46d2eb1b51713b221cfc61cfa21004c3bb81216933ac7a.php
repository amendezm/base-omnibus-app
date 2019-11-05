<?php

/* :default:sidebar.html.twig */
class __TwigTemplate_580b418f8e9c46e770804266a78f179f9a7da6f72337a94bbe3ba89a8d0572a5 extends Twig_Template
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
        $__internal_3da3ca62bc5e028e0e43e491f4c9db0e084d30da8b5eda9453a43e0d02302802 = $this->env->getExtension("native_profiler");
        $__internal_3da3ca62bc5e028e0e43e491f4c9db0e084d30da8b5eda9453a43e0d02302802->enter($__internal_3da3ca62bc5e028e0e43e491f4c9db0e084d30da8b5eda9453a43e0d02302802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:sidebar.html.twig"));

        // line 1
        echo "<section id=\"elemento2\" class=\"sidebar\">

    <!-- Sidebar Menu -->
    <ul class=\"sidebar-menu\">
        <li class=\"header\">Panel de Navegación</li>
        <!-- Optionally, you can add icons to the links -->

        ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "            <li>
                <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("usuario_index");
            echo "\">
                    <i class=\"fa fa-circle-o text-aqua\"></i>Administración
                </a>
            </li>
            <li><a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("salvar_db");
            echo "\"> <i class=\"fa fa-circle-o text-aqua\"></i>Salvar Base de Datos</a></li>
            <li>
                <a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">
                    <i class=\"fa fa-circle-o text-orange\"></i> Mi Perfil
                </a>
            </li>
            <li>
                <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">
                    <i class=\"fa fa-circle-o text-orange\"></i> Editar
                </a>
            </li>
            <li>
                <a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">
                    <i class=\"fa fa-circle-o text-orange\"></i> Cambiar contraseña
                </a>
            </li>
        ";
        } elseif (($this->env->getExtension('security')->isGranted("ROLE_ESPECIALISTA") || $this->env->getExtension('security')->isGranted("ROLE_USUARIO"))) {
            // line 31
            echo "            <li class=\"treeview\">
                <a href=\"#\"><i class=\"glyphicon glyphicon-user\"></i> <span>Mi Perfil</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                <ul class=\"treeview-menu\">
                    <li>
                        <a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">
                            <i class=\"fa fa-circle-o text-orange\"></i> Mi  Perfil
                        </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">
                            <i class=\"fa fa-circle-o text-orange\"></i> Editar
                        </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">
                            <i class=\"fa fa-circle-o text-orange\"></i> Cambiar contraseña
                        </a>
                    </li>
                </ul>
            </li>


            <li class=\"treeview\">
                <a href=\"#\"><i class=\"glyphicon glyphicon-list\"></i> <span>Gestión de Servicios</span><i class=\"fa fa-angle-left pull-right\"></i></a>
                <ul class=\"treeview-menu\">
                    <li >
                        <a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("empresa_index");
            echo "\"><i class=\"fa fa-industry\"></i> <span>Empresa</span> </a>
                    </li>

                    <li >
                        <a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("establecimiento_index");
            echo "\"><i class=\"glyphicon glyphicon-home\"></i> <span>Establecimiento</span> </a>
                    </li>

                    <li>
                        <a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("declaracionjurada_index");
            echo "\"><i class=\"glyphicon glyphicon-calendar\"></i> <span>Declaración Jurada</span> </a>
                    </li>

                    <li>
                        <a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("servicio_index");
            echo "\"><i class=\"fa fa-fw fa-pencil-square-o\"></i> <span>Servicios</span> </a>
                    </li>

                </ul>
            </li>


        <li class=\"treeview\">
            <a href=\"#\"><i class=\"glyphicon glyphicon-list\"></i> <span>Gestión de Recursos</span><i class=\"fa fa-angle-left pull-right\"></i></a>
            <ul class=\"treeview-menu\">
                <li>
                    <a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("celaboracion_index");
            echo "\">
                        <i class=\"fa fa-fw fa-bank\"></i> <span>Centro de Elaboración</span></i>
                    </a>
                </li>

                <li >
                    <a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("unidadmedida_index");
            echo "\"><i class=\"glyphicon glyphicon-asterisk\"></i> Unidad de Medidas </a>
                </li>

                <li >
                    <a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("producto_index");
            echo "\"><i class=\"glyphicon glyphicon-star-empty\"></i> <span>Productos</span> </a>
                </li>

                <li >
                    <a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("plato_index");
            echo "\"><i class=\"glyphicon glyphicon-cutlery\"></i> <span>Plato</span> </a>
                </li>
                <li >
                    <a href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("tablet_index");
            echo "\"><i class=\"fa fa-fw fa-tag\"></i> <span>Menú</span> </a>
                </li>
            </ul>
        </li>





<li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-fw fa-filter\"></i> <span>Reportes</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"";
            // line 109
            echo $this->env->getExtension('routing')->getPath("board_asociados");
            echo "\"><i class=\"fa fa-circle-o text-aqua\"></i>Empresas X C.Elaboración</a></li>
                    <li><a href=\"";
            // line 110
            echo $this->env->getExtension('routing')->getPath("celaboracion_reporte");
            echo "\"><i class=\"fa fa-circle-o text-aqua\"></i>Recursos X C.Elaboración</a></li>
                </ul>
            </li>
        ";
        }
        // line 114
        echo "
    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->";
        
        $__internal_3da3ca62bc5e028e0e43e491f4c9db0e084d30da8b5eda9453a43e0d02302802->leave($__internal_3da3ca62bc5e028e0e43e491f4c9db0e084d30da8b5eda9453a43e0d02302802_prof);

    }

    public function getTemplateName()
    {
        return ":default:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 114,  192 => 110,  188 => 109,  173 => 97,  167 => 94,  160 => 90,  153 => 86,  144 => 80,  130 => 69,  123 => 65,  116 => 61,  109 => 57,  94 => 45,  86 => 40,  78 => 35,  72 => 31,  64 => 26,  56 => 21,  48 => 16,  43 => 14,  36 => 10,  33 => 9,  31 => 8,  22 => 1,);
    }
}
/* <section id="elemento2" class="sidebar">*/
/* */
/*     <!-- Sidebar Menu -->*/
/*     <ul class="sidebar-menu">*/
/*         <li class="header">Panel de Navegación</li>*/
/*         <!-- Optionally, you can add icons to the links -->*/
/* */
/*         {% if is_granted('ROLE_ADMIN' ) %}*/
/*             <li>*/
/*                 <a href="{{ path('usuario_index') }}">*/
/*                     <i class="fa fa-circle-o text-aqua"></i>Administración*/
/*                 </a>*/
/*             </li>*/
/*             <li><a href="{{ path('salvar_db')}}"> <i class="fa fa-circle-o text-aqua"></i>Salvar Base de Datos</a></li>*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_profile_show') }}">*/
/*                     <i class="fa fa-circle-o text-orange"></i> Mi Perfil*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_profile_edit') }}">*/
/*                     <i class="fa fa-circle-o text-orange"></i> Editar*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_change_password') }}">*/
/*                     <i class="fa fa-circle-o text-orange"></i> Cambiar contraseña*/
/*                 </a>*/
/*             </li>*/
/*         {% elseif is_granted('ROLE_ESPECIALISTA') or is_granted('ROLE_USUARIO') %}*/
/*             <li class="treeview">*/
/*                 <a href="#"><i class="glyphicon glyphicon-user"></i> <span>Mi Perfil</span> <i class="fa fa-angle-left pull-right"></i></a>*/
/*                 <ul class="treeview-menu">*/
/*                     <li>*/
/*                         <a href="{{ path('fos_user_profile_show') }}">*/
/*                             <i class="fa fa-circle-o text-orange"></i> Mi  Perfil*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('fos_user_profile_edit') }}">*/
/*                             <i class="fa fa-circle-o text-orange"></i> Editar*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('fos_user_change_password') }}">*/
/*                             <i class="fa fa-circle-o text-orange"></i> Cambiar contraseña*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/* */
/* */
/*             <li class="treeview">*/
/*                 <a href="#"><i class="glyphicon glyphicon-list"></i> <span>Gestión de Servicios</span><i class="fa fa-angle-left pull-right"></i></a>*/
/*                 <ul class="treeview-menu">*/
/*                     <li >*/
/*                         <a href="{{ path('empresa_index') }}"><i class="fa fa-industry"></i> <span>Empresa</span> </a>*/
/*                     </li>*/
/* */
/*                     <li >*/
/*                         <a href="{{ path('establecimiento_index') }}"><i class="glyphicon glyphicon-home"></i> <span>Establecimiento</span> </a>*/
/*                     </li>*/
/* */
/*                     <li>*/
/*                         <a href="{{ path('declaracionjurada_index') }}"><i class="glyphicon glyphicon-calendar"></i> <span>Declaración Jurada</span> </a>*/
/*                     </li>*/
/* */
/*                     <li>*/
/*                         <a href="{{ path('servicio_index') }}"><i class="fa fa-fw fa-pencil-square-o"></i> <span>Servicios</span> </a>*/
/*                     </li>*/
/* */
/*                 </ul>*/
/*             </li>*/
/* */
/* */
/*         <li class="treeview">*/
/*             <a href="#"><i class="glyphicon glyphicon-list"></i> <span>Gestión de Recursos</span><i class="fa fa-angle-left pull-right"></i></a>*/
/*             <ul class="treeview-menu">*/
/*                 <li>*/
/*                     <a href="{{ path('celaboracion_index') }}">*/
/*                         <i class="fa fa-fw fa-bank"></i> <span>Centro de Elaboración</span></i>*/
/*                     </a>*/
/*                 </li>*/
/* */
/*                 <li >*/
/*                     <a href="{{ path('unidadmedida_index') }}"><i class="glyphicon glyphicon-asterisk"></i> Unidad de Medidas </a>*/
/*                 </li>*/
/* */
/*                 <li >*/
/*                     <a href="{{ path('producto_index') }}"><i class="glyphicon glyphicon-star-empty"></i> <span>Productos</span> </a>*/
/*                 </li>*/
/* */
/*                 <li >*/
/*                     <a href="{{ path('plato_index') }}"><i class="glyphicon glyphicon-cutlery"></i> <span>Plato</span> </a>*/
/*                 </li>*/
/*                 <li >*/
/*                     <a href="{{ path('tablet_index') }}"><i class="fa fa-fw fa-tag"></i> <span>Menú</span> </a>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/* */
/* */
/* */
/* */
/* */
/* <li class="treeview">*/
/*                 <a href="#"><i class="fa fa-fw fa-filter"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i></a>*/
/*                 <ul class="treeview-menu">*/
/*                     <li><a href="{{ path('board_asociados') }}"><i class="fa fa-circle-o text-aqua"></i>Empresas X C.Elaboración</a></li>*/
/*                     <li><a href="{{ path('celaboracion_reporte') }}"><i class="fa fa-circle-o text-aqua"></i>Recursos X C.Elaboración</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*     </ul>*/
/*     <!-- /.sidebar-menu -->*/
/* </section>*/
/* <!-- /.sidebar -->*/
