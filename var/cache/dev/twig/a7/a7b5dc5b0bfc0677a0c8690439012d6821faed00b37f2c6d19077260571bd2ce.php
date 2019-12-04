<?php

/* base.html.twig */
class __TwigTemplate_e2bae68d1021ea658beb8609a515d1a48baa45281102c287935a1b2970aef2d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6d0cc9e04ee4702939a3323aff9ba176212dbffcdd3ff8d70b9d228bb8eacbe = $this->env->getExtension("native_profiler");
        $__internal_e6d0cc9e04ee4702939a3323aff9ba176212dbffcdd3ff8d70b9d228bb8eacbe->enter($__internal_e6d0cc9e04ee4702939a3323aff9ba176212dbffcdd3ff8d70b9d228bb8eacbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"/>

        <title id=\"elemento6\">
            ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "        </title>

        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\"/>
    </head>
    <body>
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "<footer id=\"elemento4\" style=\"text-align: center\" class=\"main-footer\">
<a>
    <strong>
        Sistema de gestión de información en la UEB Transporte
    </strong>
</a>
";
        // line 78
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "
&copy;  Ómnibus Holguín</footer></body>";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        echo "</html>
";
        
        $__internal_e6d0cc9e04ee4702939a3323aff9ba176212dbffcdd3ff8d70b9d228bb8eacbe->leave($__internal_e6d0cc9e04ee4702939a3323aff9ba176212dbffcdd3ff8d70b9d228bb8eacbe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c076e39de0dae6aa4c7963000f3e7d46350f6f48c3231fe1aef079c2420d4e13 = $this->env->getExtension("native_profiler");
        $__internal_c076e39de0dae6aa4c7963000f3e7d46350f6f48c3231fe1aef079c2420d4e13->enter($__internal_c076e39de0dae6aa4c7963000f3e7d46350f6f48c3231fe1aef079c2420d4e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "                |Bienvenido!
            ";
        
        $__internal_c076e39de0dae6aa4c7963000f3e7d46350f6f48c3231fe1aef079c2420d4e13->leave($__internal_c076e39de0dae6aa4c7963000f3e7d46350f6f48c3231fe1aef079c2420d4e13_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_440a24631874c9d1884d8ddcfe6f3f88c18f00e783cad40a376de5f05f5ee2d4 = $this->env->getExtension("native_profiler");
        $__internal_440a24631874c9d1884d8ddcfe6f3f88c18f00e783cad40a376de5f05f5ee2d4->enter($__internal_440a24631874c9d1884d8ddcfe6f3f88c18f00e783cad40a376de5f05f5ee2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            <!-- Bootstrap 3.3.5 -->
            <link
            rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <!-- Font Awesome -->
            <link
            rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <!-- Theme style -->
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/css/AdminLTE.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/css/fonts.googleapis.SourceSansPro.css"), "html", null, true);
        echo "\">
            <link
            rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/css/skins/_all-skins.css"), "html", null, true);
        echo "\">
            <!-- Custom style -->
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom/base.css"), "html", null, true);
        echo "\">


        ";
        
        $__internal_440a24631874c9d1884d8ddcfe6f3f88c18f00e783cad40a376de5f05f5ee2d4->leave($__internal_440a24631874c9d1884d8ddcfe6f3f88c18f00e783cad40a376de5f05f5ee2d4_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f93046b549d75de9398d3d8538da26938bb06ebd14bd023cd40848a6de9ef18 = $this->env->getExtension("native_profiler");
        $__internal_5f93046b549d75de9398d3d8538da26938bb06ebd14bd023cd40848a6de9ef18->enter($__internal_5f93046b549d75de9398d3d8538da26938bb06ebd14bd023cd40848a6de9ef18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "            <section class=\"content\">
                ";
        // line 36
        $this->displayBlock('contenido', $context, $blocks);
        // line 69
        echo "            </section>
        </body>
    </html>
</div>";
        
        $__internal_5f93046b549d75de9398d3d8538da26938bb06ebd14bd023cd40848a6de9ef18->leave($__internal_5f93046b549d75de9398d3d8538da26938bb06ebd14bd023cd40848a6de9ef18_prof);

    }

    // line 36
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_d859188a2535105fef52f84fb081f3bed0c4903cd3cc85fae958db6059cafe66 = $this->env->getExtension("native_profiler");
        $__internal_d859188a2535105fef52f84fb081f3bed0c4903cd3cc85fae958db6059cafe66->enter($__internal_d859188a2535105fef52f84fb081f3bed0c4903cd3cc85fae958db6059cafe66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 37
        echo "                    <div class=\"nav-tabs-custom\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\">
                                <a href=\"#tab_1\" data-toggle=\"tab\">Misión</a>
                            </li>
                            <li>
                                <a href=\"#tab_2\" data-toggle=\"tab\">Visión</a>
                            </li>
                            <li>
                                <a href=\"#tab_3\" data-toggle=\"tab\">Organigrama</a>
                            </li>
                            <li class=\"pull-right\">
                                <a href=\"#\" class=\"text-muted\">
                                    <i class=\"\"></i>
                                </a>
                            </li>
                        </ul>
                        <div class=\"tab-content\">
                            <div align=\"justify\" class=\"tab-pane active\" id=\"tab_1\">
                                <b></b>
                                <h3>Satisfacemos las expectativas de los clientes con servicios de transportación de pasajeros, conexos  y cargas en general con trabajadores de un  alto sentido de pertenencia  y un parque de equipos  en constante revitalización.
                                </h3>
                            </div>
                            <div align=\"justify\" class=\"tab-pane\" id=\"tab_2\">
                                <h3>Somos líderes en la prestación de servicios a nuestros clientes, con calidad, oportunidad y seguridad.</h3>
                            </div>
                            <div class=\"tab-pane\" id=\"tab_3\">
                                <img height=\"400\" width=\"735\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/Organigrama Empresa.png"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                    </div>
                ";
        
        $__internal_d859188a2535105fef52f84fb081f3bed0c4903cd3cc85fae958db6059cafe66->leave($__internal_d859188a2535105fef52f84fb081f3bed0c4903cd3cc85fae958db6059cafe66_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a7cd83fe4dd8d9e2d7af075f021e7bc96582c8f2c7c4d330427a3c75ce8e3bc9 = $this->env->getExtension("native_profiler");
        $__internal_a7cd83fe4dd8d9e2d7af075f021e7bc96582c8f2c7c4d330427a3c75ce8e3bc9->enter($__internal_a7cd83fe4dd8d9e2d7af075f021e7bc96582c8f2c7c4d330427a3c75ce8e3bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_a7cd83fe4dd8d9e2d7af075f021e7bc96582c8f2c7c4d330427a3c75ce8e3bc9->leave($__internal_a7cd83fe4dd8d9e2d7af075f021e7bc96582c8f2c7c4d330427a3c75ce8e3bc9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 79,  192 => 64,  163 => 37,  157 => 36,  147 => 69,  145 => 36,  142 => 35,  136 => 34,  125 => 26,  120 => 24,  115 => 22,  111 => 21,  106 => 19,  100 => 16,  96 => 14,  90 => 13,  82 => 8,  76 => 7,  67 => 79,  63 => 78,  55 => 72,  53 => 34,  47 => 31,  44 => 30,  42 => 13,  37 => 10,  35 => 7,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8"/>*/
/* */
/*         <title id="elemento6">*/
/*             {% block title %}*/
/*                 |Bienvenido!*/
/*             {% endblock %}*/
/*         </title>*/
/* */
/*         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*         {% block stylesheets %}*/
/*             <!-- Bootstrap 3.3.5 -->*/
/*             <link*/
/*             rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">*/
/*             <!-- Font Awesome -->*/
/*             <link*/
/*             rel="stylesheet" href="{{ asset('assets/dist/font-awesome/css/font-awesome.min.css') }}">*/
/*             <!-- Theme style -->*/
/*             <link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('assets/dist/css/fonts.googleapis.SourceSansPro.css') }}">*/
/*             <link*/
/*             rel="stylesheet" href="{{ asset('assets/dist/css/skins/_all-skins.css') }}">*/
/*             <!-- Custom style -->*/
/*             <link rel="stylesheet" href="{{ asset('css/custom/base.css') }}">*/
/* */
/* */
/*         {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('apple-touch-icon.png') }}"/>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             <section class="content">*/
/*                 {% block contenido %}*/
/*                     <div class="nav-tabs-custom">*/
/*                         <ul class="nav nav-tabs">*/
/*                             <li class="active">*/
/*                                 <a href="#tab_1" data-toggle="tab">Misión</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#tab_2" data-toggle="tab">Visión</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#tab_3" data-toggle="tab">Organigrama</a>*/
/*                             </li>*/
/*                             <li class="pull-right">*/
/*                                 <a href="#" class="text-muted">*/
/*                                     <i class=""></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <div class="tab-content">*/
/*                             <div align="justify" class="tab-pane active" id="tab_1">*/
/*                                 <b></b>*/
/*                                 <h3>Satisfacemos las expectativas de los clientes con servicios de transportación de pasajeros, conexos  y cargas en general con trabajadores de un  alto sentido de pertenencia  y un parque de equipos  en constante revitalización.*/
/*                                 </h3>*/
/*                             </div>*/
/*                             <div align="justify" class="tab-pane" id="tab_2">*/
/*                                 <h3>Somos líderes en la prestación de servicios a nuestros clientes, con calidad, oportunidad y seguridad.</h3>*/
/*                             </div>*/
/*                             <div class="tab-pane" id="tab_3">*/
/*                                 <img height="400" width="735" src="{{ asset('assets/dist/img/Organigrama Empresa.png') }}">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endblock %}*/
/*             </section>*/
/*         </body>*/
/*     </html>*/
/* </div>{% endblock %}<footer id="elemento4" style="text-align: center" class="main-footer">*/
/* <a>*/
/*     <strong>*/
/*         Sistema de gestión de información en la UEB Transporte*/
/*     </strong>*/
/* </a>*/
/* {{'now' | date('d-m-Y')}}*/
/* &copy;  Ómnibus Holguín</footer></body>{% block javascripts %}<script src="{{ asset('assets/plugins/jQuery/jQuery-2.2.0.min.js') }}"></script><script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script><script src="{{ asset('assets/dist/js/app.min.js') }}"></script>{% endblock javascripts %}</html>*/
/* */
