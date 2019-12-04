<?php

/* index.html.twig */
class __TwigTemplate_9a0d374b41b2f604a6da3c44da62fe2eda02ad42a61b25ab9a3ba9f77e170af1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a19ab801459ca36eb712411101c5de959a56a58a7f8dcb6f2edb38d130191a24 = $this->env->getExtension("native_profiler");
        $__internal_a19ab801459ca36eb712411101c5de959a56a58a7f8dcb6f2edb38d130191a24->enter($__internal_a19ab801459ca36eb712411101c5de959a56a58a7f8dcb6f2edb38d130191a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

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
        // line 41
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\"/>
    </head>
    <header class=\"main-header\">
        ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 48
        echo "    </header>
    <aside class=\"main-sidebar\">
        ";
        // line 50
        $this->displayBlock('sidebar', $context, $blocks);
        // line 53
        echo "    </aside>
    <body>

        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 118
        echo "        <footer
            id=\"elemento4\" style=\"text-align: center\" class=\"main-footer\">
            <!-- To the right -->
            <div class=\"pull-right hidden-xs\"></div>
            <!-- Default to the left -->
            <a href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">
                <strong>Sistema de gestión de información de la UEB Ómnibus Holguín</strong>
            </a>
            &copy;";
        // line 126
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "
            <br>

        </footer>
    </body>
    ";
        // line 131
        $this->displayBlock('javascripts', $context, $blocks);
        // line 191
        echo "
</html>
";
        
        $__internal_a19ab801459ca36eb712411101c5de959a56a58a7f8dcb6f2edb38d130191a24->leave($__internal_a19ab801459ca36eb712411101c5de959a56a58a7f8dcb6f2edb38d130191a24_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b699ea2cfe479b1ed7ad6341672a0539fe5bfa1e31465240ce76a481addbb0c0 = $this->env->getExtension("native_profiler");
        $__internal_b699ea2cfe479b1ed7ad6341672a0539fe5bfa1e31465240ce76a481addbb0c0->enter($__internal_b699ea2cfe479b1ed7ad6341672a0539fe5bfa1e31465240ce76a481addbb0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "                |Bienvenido!
            ";
        
        $__internal_b699ea2cfe479b1ed7ad6341672a0539fe5bfa1e31465240ce76a481addbb0c0->leave($__internal_b699ea2cfe479b1ed7ad6341672a0539fe5bfa1e31465240ce76a481addbb0c0_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b01631475807dbd8f221b4ff060dc3d2cbdd8ab3da3296553b0d71982dd546a1 = $this->env->getExtension("native_profiler");
        $__internal_b01631475807dbd8f221b4ff060dc3d2cbdd8ab3da3296553b0d71982dd546a1->enter($__internal_b01631475807dbd8f221b4ff060dc3d2cbdd8ab3da3296553b0d71982dd546a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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


            ";
        // line 26
        echo "            ";
        // line 27
        echo "            ";
        // line 28
        echo "            ";
        // line 29
        echo "            ";
        // line 30
        echo "
            ";
        // line 32
        echo "            ";
        // line 33
        echo "            ";
        // line 34
        echo "            ";
        // line 35
        echo "            ";
        // line 36
        echo "            <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
                          page. However, you can choose any other skin. Make sure you
                          apply the skin class to the body tag so the changes take effect.
                    -->
        <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/css/skins/_all-skins.css"), "html", null, true);
        echo "\"> ";
        
        $__internal_b01631475807dbd8f221b4ff060dc3d2cbdd8ab3da3296553b0d71982dd546a1->leave($__internal_b01631475807dbd8f221b4ff060dc3d2cbdd8ab3da3296553b0d71982dd546a1_prof);

    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        $__internal_405d793e8bce87f531b74aa1fb513221c79b51ca2843e1dba09411e1bb53927a = $this->env->getExtension("native_profiler");
        $__internal_405d793e8bce87f531b74aa1fb513221c79b51ca2843e1dba09411e1bb53927a->enter($__internal_405d793e8bce87f531b74aa1fb513221c79b51ca2843e1dba09411e1bb53927a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "            ";
        $this->loadTemplate("header.html.twig", "index.html.twig", 46)->display($context);
        // line 47
        echo "        ";
        
        $__internal_405d793e8bce87f531b74aa1fb513221c79b51ca2843e1dba09411e1bb53927a->leave($__internal_405d793e8bce87f531b74aa1fb513221c79b51ca2843e1dba09411e1bb53927a_prof);

    }

    // line 50
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9eef895c1fdbdf35e7a8d0f04b3c9340cbd05a8280c0c346a26667a1dbc8f85a = $this->env->getExtension("native_profiler");
        $__internal_9eef895c1fdbdf35e7a8d0f04b3c9340cbd05a8280c0c346a26667a1dbc8f85a->enter($__internal_9eef895c1fdbdf35e7a8d0f04b3c9340cbd05a8280c0c346a26667a1dbc8f85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 51
        echo "            ";
        $this->loadTemplate("sidebar.html.twig", "index.html.twig", 51)->display($context);
        // line 52
        echo "        ";
        
        $__internal_9eef895c1fdbdf35e7a8d0f04b3c9340cbd05a8280c0c346a26667a1dbc8f85a->leave($__internal_9eef895c1fdbdf35e7a8d0f04b3c9340cbd05a8280c0c346a26667a1dbc8f85a_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_0351f69c07cab6d61e81a426a93fd6f839f0f51ef30575c761f94f50896b0f01 = $this->env->getExtension("native_profiler");
        $__internal_0351f69c07cab6d61e81a426a93fd6f839f0f51ef30575c761f94f50896b0f01->enter($__internal_0351f69c07cab6d61e81a426a93fd6f839f0f51ef30575c761f94f50896b0f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "            <div class=\"wrapper\">

                <!-- Main Header -->


                <!-- Left side column. contains the logo and sidebar -->


                <!-- Content Wrapper. Contains page content -->
                    <div
                    class=\"content-wrapper\"> <!-- Content Header (Page header) -->
                    ";
        // line 68
        $this->displayBlock('content_header', $context, $blocks);
        // line 80
        echo "                    <section class=\"content\">
                        <!-- Your Page Content Here -->
                        <!-- Main content -->
                            ";
        // line 83
        $this->displayBlock('contenido', $context, $blocks);
        // line 107
        echo "                        <!-- /.content -->
                    </section>
                </div>
                <!-- /.content-wrapper -->

                <!-- Main Footer -->

            </div>
            <!-- ./wrapper -->

        ";
        
        $__internal_0351f69c07cab6d61e81a426a93fd6f839f0f51ef30575c761f94f50896b0f01->leave($__internal_0351f69c07cab6d61e81a426a93fd6f839f0f51ef30575c761f94f50896b0f01_prof);

    }

    // line 68
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_84c80b3941f034e5325142a78ea700d017a36da73c4f1b72a7ea7c20c9e4c9e8 = $this->env->getExtension("native_profiler");
        $__internal_84c80b3941f034e5325142a78ea700d017a36da73c4f1b72a7ea7c20c9e4c9e8->enter($__internal_84c80b3941f034e5325142a78ea700d017a36da73c4f1b72a7ea7c20c9e4c9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 69
        echo "                        <div class=\"row\">
                            <div class=\"col-md-1\"></div>
                            <div class=\"col-md-10\">
                                <br>

                            </div>
                            <div class=\"col-md-1\"></div>
                        </div>
                        ";
        // line 78
        echo "
                    ";
        
        $__internal_84c80b3941f034e5325142a78ea700d017a36da73c4f1b72a7ea7c20c9e4c9e8->leave($__internal_84c80b3941f034e5325142a78ea700d017a36da73c4f1b72a7ea7c20c9e4c9e8_prof);

    }

    // line 83
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2f86bc518b6afcd8755a14d6184686a172a003abae6b17e45ef70fe2d14c757f = $this->env->getExtension("native_profiler");
        $__internal_2f86bc518b6afcd8755a14d6184686a172a003abae6b17e45ef70fe2d14c757f->enter($__internal_2f86bc518b6afcd8755a14d6184686a172a003abae6b17e45ef70fe2d14c757f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 84
        echo "                                <div>
                                    <div align=\"center\" style=\"padding: 40px\"> <div style=\"font-style: italic; text-decoration-style: double\">
                                        <h3>MISIÓN</h3>
                                    </div>
                                    <h4>Satisfacemos las expectativas de los clientes con servicios de transportación de pasajeros,
                                                                            conexos  y cargas en general con trabajadores de un  alto sentido de pertenencia  y
                                                                            un parque de equipos  en constante revitalización.
                                    </h4>
                                    <div style=\"font-style: italic; text-decoration-style: double\">
                                        <h3>VISIÓN</h3>
                                    </div>
                                    <h4>Somos líderes en la prestación de servicios a nuestros clientes, con calidad,
                                                                           oportunidad y seguridad.</h4>

                                    <div style=\"font-style: italic; text-decoration-style: double\">
                                        <h3>ORGANIGRAMA</h3>
                                    </div>
                                    <img height=\"609\" width=\"1119\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/Organigrama Empresa.png"), "html", null, true);
        echo "\">
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        ";
        
        $__internal_2f86bc518b6afcd8755a14d6184686a172a003abae6b17e45ef70fe2d14c757f->leave($__internal_2f86bc518b6afcd8755a14d6184686a172a003abae6b17e45ef70fe2d14c757f_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5382a042dda75abe7fc068e32a322d322ac363e017518ac713ea2944b2d9344a = $this->env->getExtension("native_profiler");
        $__internal_5382a042dda75abe7fc068e32a322d322ac363e017518ac713ea2944b2d9344a->enter($__internal_5382a042dda75abe7fc068e32a322d322ac363e017518ac713ea2944b2d9344a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 132
        echo "        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.2.0 --><script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"> </script>
        <!-- Bootstrap 3.3.5 -->
        <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 141
        echo "    ";
        // line 142
        echo "        ";
        // line 143
        echo "        ";
        // line 144
        echo "        ";
        // line 145
        echo "        ";
        // line 146
        echo "        ";
        // line 147
        echo "        ";
        // line 148
        echo "        ";
        // line 149
        echo "        ";
        // line 150
        echo "        ";
        // line 151
        echo "        ";
        // line 152
        echo "        ";
        // line 153
        echo "
        ";
        // line 155
        echo "        ";
        // line 156
        echo "        ";
        // line 157
        echo "        ";
        // line 158
        echo "        ";
        // line 159
        echo "        ";
        // line 160
        echo "        ";
        // line 161
        echo "        ";
        // line 162
        echo "        ";
        // line 163
        echo "        ";
        // line 164
        echo "

        <!-- Optionally, you can add Slimscroll and FastClick plugins.
                 Both of these plugins are recommended to enhance the
                 user experience. Slimscroll is required when using the
                 fixed layout.
            -->

        ";
        // line 173
        echo "        ";
        // line 174
        echo "        ";
        // line 175
        echo "        ";
        // line 176
        echo "        ";
        // line 177
        echo "        ";
        // line 178
        echo "        ";
        // line 179
        echo "        ";
        // line 180
        echo "        ";
        // line 181
        echo "        ";
        // line 182
        echo "        ";
        // line 183
        echo "        ";
        // line 184
        echo "        ";
        // line 185
        echo "        ";
        // line 186
        echo "        ";
        // line 187
        echo "        ";
        // line 188
        echo "        <!-- page script -->

    ";
        
        $__internal_5382a042dda75abe7fc068e32a322d322ac363e017518ac713ea2944b2d9344a->leave($__internal_5382a042dda75abe7fc068e32a322d322ac363e017518ac713ea2944b2d9344a_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 188,  428 => 187,  426 => 186,  424 => 185,  422 => 184,  420 => 183,  418 => 182,  416 => 181,  414 => 180,  412 => 179,  410 => 178,  408 => 177,  406 => 176,  404 => 175,  402 => 174,  400 => 173,  390 => 164,  388 => 163,  386 => 162,  384 => 161,  382 => 160,  380 => 159,  378 => 158,  376 => 157,  374 => 156,  372 => 155,  369 => 153,  367 => 152,  365 => 151,  363 => 150,  361 => 149,  359 => 148,  357 => 147,  355 => 146,  353 => 145,  351 => 144,  349 => 143,  347 => 142,  345 => 141,  340 => 138,  335 => 136,  330 => 134,  326 => 132,  320 => 131,  307 => 101,  288 => 84,  282 => 83,  274 => 78,  264 => 69,  258 => 68,  241 => 107,  239 => 83,  234 => 80,  232 => 68,  219 => 57,  213 => 56,  206 => 52,  203 => 51,  197 => 50,  190 => 47,  187 => 46,  181 => 45,  173 => 40,  167 => 36,  165 => 35,  163 => 34,  161 => 33,  159 => 32,  156 => 30,  154 => 29,  152 => 28,  150 => 27,  148 => 26,  142 => 22,  138 => 21,  133 => 19,  127 => 16,  123 => 14,  117 => 13,  109 => 8,  103 => 7,  94 => 191,  92 => 131,  84 => 126,  78 => 123,  71 => 118,  69 => 56,  64 => 53,  62 => 50,  58 => 48,  56 => 45,  50 => 42,  47 => 41,  45 => 13,  40 => 10,  38 => 7,  30 => 1,);
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
/* */
/* */
/*             {#<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">#}*/
/*             {#<link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">#}*/
/*             {#<link rel="stylesheet" href="{{ asset('css/style.min.css') }}" rel="stylesheet">#}*/
/*             {#<link rel="stylesheet" href="{{ asset('css/style-responsive.min.css') }}" rel="stylesheet">#}*/
/*             {#<link rel="stylesheet" href="{{ asset('css/retina.css') }}" rel="stylesheet">#}*/
/* */
/*             {#<link href="css/bootstrap.min.css" rel="stylesheet" />#}*/
/*             {#<link href="css/bootstrap-responsive.min.css" rel="stylesheet" />#}*/
/*             {#<link href="css/style.min.css" rel="stylesheet" />#}*/
/*             {#<link href="css/style-responsive.min.css" rel="stylesheet" />#}*/
/*             {#<link href="css/retina.css" rel="stylesheet" />#}*/
/*             <!-- AdminLTE Skins. We have chosen the skin-blue for this starter*/
/*                           page. However, you can choose any other skin. Make sure you*/
/*                           apply the skin class to the body tag so the changes take effect.*/
/*                     -->*/
/*         <link rel="stylesheet" href="{{ asset('assets/dist/css/skins/_all-skins.css') }}"> {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('apple-touch-icon.png') }}"/>*/
/*     </head>*/
/*     <header class="main-header">*/
/*         {% block header %}*/
/*             {% include 'header.html.twig' %}*/
/*         {% endblock %}*/
/*     </header>*/
/*     <aside class="main-sidebar">*/
/*         {% block sidebar %}*/
/*             {% include 'sidebar.html.twig' %}*/
/*         {% endblock %}*/
/*     </aside>*/
/*     <body>*/
/* */
/*         {% block body %}*/
/*             <div class="wrapper">*/
/* */
/*                 <!-- Main Header -->*/
/* */
/* */
/*                 <!-- Left side column. contains the logo and sidebar -->*/
/* */
/* */
/*                 <!-- Content Wrapper. Contains page content -->*/
/*                     <div*/
/*                     class="content-wrapper"> <!-- Content Header (Page header) -->*/
/*                     {% block content_header %}*/
/*                         <div class="row">*/
/*                             <div class="col-md-1"></div>*/
/*                             <div class="col-md-10">*/
/*                                 <br>*/
/* */
/*                             </div>*/
/*                             <div class="col-md-1"></div>*/
/*                         </div>*/
/*                         {#{%include ':default:content-header.html.twig'%}#}*/
/* */
/*                     {% endblock %}*/
/*                     <section class="content">*/
/*                         <!-- Your Page Content Here -->*/
/*                         <!-- Main content -->*/
/*                             {% block contenido %}*/
/*                                 <div>*/
/*                                     <div align="center" style="padding: 40px"> <div style="font-style: italic; text-decoration-style: double">*/
/*                                         <h3>MISIÓN</h3>*/
/*                                     </div>*/
/*                                     <h4>Satisfacemos las expectativas de los clientes con servicios de transportación de pasajeros,*/
/*                                                                             conexos  y cargas en general con trabajadores de un  alto sentido de pertenencia  y*/
/*                                                                             un parque de equipos  en constante revitalización.*/
/*                                     </h4>*/
/*                                     <div style="font-style: italic; text-decoration-style: double">*/
/*                                         <h3>VISIÓN</h3>*/
/*                                     </div>*/
/*                                     <h4>Somos líderes en la prestación de servicios a nuestros clientes, con calidad,*/
/*                                                                            oportunidad y seguridad.</h4>*/
/* */
/*                                     <div style="font-style: italic; text-decoration-style: double">*/
/*                                         <h3>ORGANIGRAMA</h3>*/
/*                                     </div>*/
/*                                     <img height="609" width="1119" src="{{ asset('assets/dist/img/Organigrama Empresa.png') }}">*/
/*                                 </div>*/
/*                                 <!-- /.tab-pane -->*/
/*                             </div>*/
/*                             <!-- /.tab-content -->*/
/*                         {% endblock %}*/
/*                         <!-- /.content -->*/
/*                     </section>*/
/*                 </div>*/
/*                 <!-- /.content-wrapper -->*/
/* */
/*                 <!-- Main Footer -->*/
/* */
/*             </div>*/
/*             <!-- ./wrapper -->*/
/* */
/*         {% endblock %}*/
/*         <footer*/
/*             id="elemento4" style="text-align: center" class="main-footer">*/
/*             <!-- To the right -->*/
/*             <div class="pull-right hidden-xs"></div>*/
/*             <!-- Default to the left -->*/
/*             <a href="{{ path('index') }}">*/
/*                 <strong>Sistema de gestión de información de la UEB Ómnibus Holguín</strong>*/
/*             </a>*/
/*             &copy;{{'now' | date('d-m-Y')}}*/
/*             <br>*/
/* */
/*         </footer>*/
/*     </body>*/
/*     {% block javascripts %}*/
/*         <!-- REQUIRED JS SCRIPTS -->*/
/* */
/*         <!-- jQuery 2.2.0 --><script src="{{ asset('assets/plugins/jQuery/jQuery-2.2.0.min.js') }}"> </script>*/
/*         <!-- Bootstrap 3.3.5 -->*/
/*         <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*         <!-- AdminLTE App -->*/
/*         <script src="{{ asset('assets/dist/js/app.min.js') }}"></script>*/
/* */
/*         {#<script src="{{ asset('Script/jquery-ui-1.10.3.custom.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/jquery.ui.touch-punch.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/jquery.cleditor.min.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/jquery.noty.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/jquery.elfinder.min.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/jquery.raty.min.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/jquery.iphone.toggle.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/jquery.uploadify-3.1.min.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/jquery.gritter.min.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/jquery.imagesloaded.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/jquery.masonry.min.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/jquery.knob.modified.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/jquery.sparkline.min.js') }}"></script>#}*/
/* */
/*         {#<script src="{{ asset('Script/counter.min.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/raphael.2.1.0.min.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/justgage.1.0.1.min.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/jquery.autosize.min.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/retina.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/wizard.min.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/wizard.min.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/core.min.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/charts.min.js') }}"></script>#}*/
/*         {#<script src="{{ asset('Script/custom.min.js') }}"></script>#}*/
/* */
/* */
/*         <!-- Optionally, you can add Slimscroll and FastClick plugins.*/
/*                  Both of these plugins are recommended to enhance the*/
/*                  user experience. Slimscroll is required when using the*/
/*                  fixed layout.*/
/*             -->*/
/* */
/*         {#<script src="js/jquery.uploadify-3.1.min.js"></script>#}*/
/*         {#<script src="js/jquery.gritter.min.js"></script>#}*/
/*         {#<script src="js/jquery.imagesloaded.js"></script>#}*/
/*         {#<script src="js/jquery.masonry.min.js"></script>#}*/
/*         {#<script src="js/jquery.knob.modified.js"></script>#}*/
/*         {#<script src="js/jquery.sparkline.min.js"></script>#}*/
/*         {#<script src="js/counter.min.js"></script>#}*/
/*         {#<script src="js/raphael.2.1.0.min.js"></script>#}*/
/*         {#<script src="js/justgage.1.0.1.min.js"></script>#}*/
/*         {#<script src="js/jquery.autosize.min.js"></script>#}*/
/*         {#<script src="js/retina.js"></script>#}*/
/*         {#<script src="js/jquery.placeholder.min.js"></script>#}*/
/*         {#<script src="js/wizard.min.js"></script>#}*/
/*         {#<script src="js/core.min.js"></script>#}*/
/*         {#<script src="js/charts.min.js"></script>#}*/
/*         {#<script src="js/custom.min.js"></script>#}*/
/*         <!-- page script -->*/
/* */
/*     {% endblock javascripts %}*/
/* */
/* </html>*/
/* */
