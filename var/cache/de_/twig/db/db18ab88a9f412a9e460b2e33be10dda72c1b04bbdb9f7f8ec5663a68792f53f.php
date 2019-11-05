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
        $__internal_601400072295bacd6943680f37126d0c5781da9e3304576c9dbdfe8d1ea6952e = $this->env->getExtension("native_profiler");
        $__internal_601400072295bacd6943680f37126d0c5781da9e3304576c9dbdfe8d1ea6952e->enter($__internal_601400072295bacd6943680f37126d0c5781da9e3304576c9dbdfe8d1ea6952e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />

    <title id=\"elemento6\">
        ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\" />
</head>
<header class=\"main-header\">
    ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 46
        echo "</header>
<aside class=\"main-sidebar\">
    ";
        // line 48
        $this->displayBlock('sidebar', $context, $blocks);
        // line 51
        echo "</aside>
<body>

";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "<footer id=\"elemento4\" style=\"text-align: center\" class=\"main-footer\">
    <!-- To the right -->
    <div class=\"pull-right hidden-xs\">

    </div>
    <!-- Default to the left -->
    <a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><strong>Sistema de gestión de información de la UEB Ómnibus Holguín</strong></a>
    &copy;";
        // line 121
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "
    <br>

</footer>
</body>
";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 188
        echo "
</html>
";
        
        $__internal_601400072295bacd6943680f37126d0c5781da9e3304576c9dbdfe8d1ea6952e->leave($__internal_601400072295bacd6943680f37126d0c5781da9e3304576c9dbdfe8d1ea6952e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_671c2368e945d6737c8bcd66d2fe19f4c93789daaad4e47b4d1f85d04336f362 = $this->env->getExtension("native_profiler");
        $__internal_671c2368e945d6737c8bcd66d2fe19f4c93789daaad4e47b4d1f85d04336f362->enter($__internal_671c2368e945d6737c8bcd66d2fe19f4c93789daaad4e47b4d1f85d04336f362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " |Bienvenido!";
        
        $__internal_671c2368e945d6737c8bcd66d2fe19f4c93789daaad4e47b4d1f85d04336f362->leave($__internal_671c2368e945d6737c8bcd66d2fe19f4c93789daaad4e47b4d1f85d04336f362_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_42cfaa295a46ab6e09a4c6782c29f59780e904a8036f44d92d5a171e25b48c95 = $this->env->getExtension("native_profiler");
        $__internal_42cfaa295a46ab6e09a4c6782c29f59780e904a8036f44d92d5a171e25b48c95->enter($__internal_42cfaa295a46ab6e09a4c6782c29f59780e904a8036f44d92d5a171e25b48c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <!-- Bootstrap 3.3.5 -->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/css/AdminLTE.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/css/fonts.googleapis.SourceSansPro.css"), "html", null, true);
        echo "\">


        ";
        // line 22
        echo "        ";
        // line 23
        echo "        ";
        // line 24
        echo "        ";
        // line 25
        echo "        ";
        // line 26
        echo "
        ";
        // line 28
        echo "        ";
        // line 29
        echo "        ";
        // line 30
        echo "        ";
        // line 31
        echo "        ";
        // line 32
        echo "        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/css/skins/_all-skins.css"), "html", null, true);
        echo "\">

    ";
        
        $__internal_42cfaa295a46ab6e09a4c6782c29f59780e904a8036f44d92d5a171e25b48c95->leave($__internal_42cfaa295a46ab6e09a4c6782c29f59780e904a8036f44d92d5a171e25b48c95_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_576e743580318731908aa7720195a756771c7ae5762de76de72d83f4277586e3 = $this->env->getExtension("native_profiler");
        $__internal_576e743580318731908aa7720195a756771c7ae5762de76de72d83f4277586e3->enter($__internal_576e743580318731908aa7720195a756771c7ae5762de76de72d83f4277586e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "        ";
        $this->loadTemplate("header.html.twig", "index.html.twig", 44)->display($context);
        // line 45
        echo "    ";
        
        $__internal_576e743580318731908aa7720195a756771c7ae5762de76de72d83f4277586e3->leave($__internal_576e743580318731908aa7720195a756771c7ae5762de76de72d83f4277586e3_prof);

    }

    // line 48
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6638cfdfb2008b159815ffd4e2e2e452e95a285da5a05045f38d0179064e212d = $this->env->getExtension("native_profiler");
        $__internal_6638cfdfb2008b159815ffd4e2e2e452e95a285da5a05045f38d0179064e212d->enter($__internal_6638cfdfb2008b159815ffd4e2e2e452e95a285da5a05045f38d0179064e212d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 49
        echo "        ";
        $this->loadTemplate("sidebar.html.twig", "index.html.twig", 49)->display($context);
        // line 50
        echo "    ";
        
        $__internal_6638cfdfb2008b159815ffd4e2e2e452e95a285da5a05045f38d0179064e212d->leave($__internal_6638cfdfb2008b159815ffd4e2e2e452e95a285da5a05045f38d0179064e212d_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6bec19225432378631d1d615c03777b4082376a36c31ac29d99d40f27cbebc5 = $this->env->getExtension("native_profiler");
        $__internal_d6bec19225432378631d1d615c03777b4082376a36c31ac29d99d40f27cbebc5->enter($__internal_d6bec19225432378631d1d615c03777b4082376a36c31ac29d99d40f27cbebc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "    <div class=\"wrapper\">

        <!-- Main Header -->


        <!-- Left side column. contains the logo and sidebar -->


        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            ";
        // line 66
        $this->displayBlock('content_header', $context, $blocks);
        // line 78
        echo "            <section class=\"content\">
                <!-- Your Page Content Here -->
                <!-- Main content -->
                ";
        // line 81
        $this->displayBlock('contenido', $context, $blocks);
        // line 103
        echo "                <!-- /.content -->
            </section>
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->

    </div>
    <!-- ./wrapper -->

";
        
        $__internal_d6bec19225432378631d1d615c03777b4082376a36c31ac29d99d40f27cbebc5->leave($__internal_d6bec19225432378631d1d615c03777b4082376a36c31ac29d99d40f27cbebc5_prof);

    }

    // line 66
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_4784063a44775dbbee918de7123ade21d7b6d8429a58b3becb7735aec132f7e5 = $this->env->getExtension("native_profiler");
        $__internal_4784063a44775dbbee918de7123ade21d7b6d8429a58b3becb7735aec132f7e5->enter($__internal_4784063a44775dbbee918de7123ade21d7b6d8429a58b3becb7735aec132f7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 67
        echo "                <div class=\"row\">
                    <div class=\"col-md-1\"></div>
                    <div class=\"col-md-10\">
                        <br>

                    </div>
                    <div class=\"col-md-1\"></div>
                </div>
            ";
        // line 76
        echo "
            ";
        
        $__internal_4784063a44775dbbee918de7123ade21d7b6d8429a58b3becb7735aec132f7e5->leave($__internal_4784063a44775dbbee918de7123ade21d7b6d8429a58b3becb7735aec132f7e5_prof);

    }

    // line 81
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_34d6ccb419d105fcf4b3ebaf2d8a54af7790f29c94bf00ab7513d5c3d094f2bc = $this->env->getExtension("native_profiler");
        $__internal_34d6ccb419d105fcf4b3ebaf2d8a54af7790f29c94bf00ab7513d5c3d094f2bc->enter($__internal_34d6ccb419d105fcf4b3ebaf2d8a54af7790f29c94bf00ab7513d5c3d094f2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 82
        echo "                    <div>
                        <div align=\"center\" style=\"padding: 40px\">
                            <div style=\"font-style: italic; text-decoration-style: double\">
                                <h3>MISIÓN</h3></div>
                                <h4>Satisfacemos las expectativas de los clientes con servicios de transportación de pasajeros,
                                    conexos  y cargas en general con trabajadores de un  alto sentido de pertenencia  y
                                    un parque de equipos  en constante revitalización.
                                </h4>
                                <div style=\"font-style: italic; text-decoration-style: double\">
                                    <h3>VISIÓN</h3></div>
                               <h4>Somos líderes en la prestación de servicios a nuestros clientes, con calidad,
                                   oportunidad y seguridad.</h4>

                    <div style=\"font-style: italic; text-decoration-style: double\">
                        <h3>ORGANIGRAMA</h3></div>
                                <img height=\"609\" width=\"1119\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/Organigrama Empresa.png"), "html", null, true);
        echo "\">
                            </div>
                            <!-- /.tab-pane -->
                         </div>
                        <!-- /.tab-content -->
                 ";
        
        $__internal_34d6ccb419d105fcf4b3ebaf2d8a54af7790f29c94bf00ab7513d5c3d094f2bc->leave($__internal_34d6ccb419d105fcf4b3ebaf2d8a54af7790f29c94bf00ab7513d5c3d094f2bc_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4cae7de0c56bfc6d5cd65b9fa3d4fa727acc3306d77349f9c430c6395b128f6f = $this->env->getExtension("native_profiler");
        $__internal_4cae7de0c56bfc6d5cd65b9fa3d4fa727acc3306d77349f9c430c6395b128f6f->enter($__internal_4cae7de0c56bfc6d5cd65b9fa3d4fa727acc3306d77349f9c430c6395b128f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.2.0 -->
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 137
        echo "    ";
        // line 138
        echo "    ";
        // line 139
        echo "    ";
        // line 140
        echo "    ";
        // line 141
        echo "    ";
        // line 142
        echo "    ";
        // line 143
        echo "    ";
        // line 144
        echo "    ";
        // line 145
        echo "    ";
        // line 146
        echo "    ";
        // line 147
        echo "    ";
        // line 148
        echo "    ";
        // line 149
        echo "
    ";
        // line 151
        echo "    ";
        // line 152
        echo "    ";
        // line 153
        echo "    ";
        // line 154
        echo "    ";
        // line 155
        echo "    ";
        // line 156
        echo "    ";
        // line 157
        echo "    ";
        // line 158
        echo "    ";
        // line 159
        echo "    ";
        // line 160
        echo "


    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout.
    -->

    ";
        // line 170
        echo "    ";
        // line 171
        echo "    ";
        // line 172
        echo "    ";
        // line 173
        echo "    ";
        // line 174
        echo "    ";
        // line 175
        echo "    ";
        // line 176
        echo "    ";
        // line 177
        echo "    ";
        // line 178
        echo "    ";
        // line 179
        echo "    ";
        // line 180
        echo "    ";
        // line 181
        echo "    ";
        // line 182
        echo "    ";
        // line 183
        echo "    ";
        // line 184
        echo "    ";
        // line 185
        echo "    <!-- page script -->

";
        
        $__internal_4cae7de0c56bfc6d5cd65b9fa3d4fa727acc3306d77349f9c430c6395b128f6f->leave($__internal_4cae7de0c56bfc6d5cd65b9fa3d4fa727acc3306d77349f9c430c6395b128f6f_prof);

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
        return array (  427 => 185,  425 => 184,  423 => 183,  421 => 182,  419 => 181,  417 => 180,  415 => 179,  413 => 178,  411 => 177,  409 => 176,  407 => 175,  405 => 174,  403 => 173,  401 => 172,  399 => 171,  397 => 170,  386 => 160,  384 => 159,  382 => 158,  380 => 157,  378 => 156,  376 => 155,  374 => 154,  372 => 153,  370 => 152,  368 => 151,  365 => 149,  363 => 148,  361 => 147,  359 => 146,  357 => 145,  355 => 144,  353 => 143,  351 => 142,  349 => 141,  347 => 140,  345 => 139,  343 => 138,  341 => 137,  336 => 134,  331 => 132,  326 => 130,  321 => 127,  315 => 126,  302 => 97,  285 => 82,  279 => 81,  271 => 76,  261 => 67,  255 => 66,  238 => 103,  236 => 81,  231 => 78,  229 => 66,  216 => 55,  210 => 54,  203 => 50,  200 => 49,  194 => 48,  187 => 45,  184 => 44,  178 => 43,  168 => 36,  162 => 32,  160 => 31,  158 => 30,  156 => 29,  154 => 28,  151 => 26,  149 => 25,  147 => 24,  145 => 23,  143 => 22,  137 => 18,  133 => 17,  128 => 15,  123 => 13,  120 => 12,  114 => 11,  102 => 7,  93 => 188,  91 => 126,  83 => 121,  79 => 120,  71 => 114,  69 => 54,  64 => 51,  62 => 48,  58 => 46,  56 => 43,  50 => 40,  47 => 39,  45 => 11,  40 => 8,  38 => 7,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/* */
/*     <title id="elemento6">*/
/*         {% block title %} |Bienvenido!{% endblock %}*/
/*     </title>*/
/* */
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     {% block stylesheets %}*/
/*         <!-- Bootstrap 3.3.5 -->*/
/*         <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">*/
/*         <!-- Font Awesome -->*/
/*         <link rel="stylesheet" href="{{ asset('assets/dist/font-awesome/css/font-awesome.min.css') }}">*/
/*         <!-- Theme style -->*/
/*         <link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('assets/dist/css/fonts.googleapis.SourceSansPro.css') }}">*/
/* */
/* */
/*         {#<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">#}*/
/*         {#<link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">#}*/
/*         {#<link rel="stylesheet" href="{{ asset('css/style.min.css') }}" rel="stylesheet">#}*/
/*         {#<link rel="stylesheet" href="{{ asset('css/style-responsive.min.css') }}" rel="stylesheet">#}*/
/*         {#<link rel="stylesheet" href="{{ asset('css/retina.css') }}" rel="stylesheet">#}*/
/* */
/*         {#<link href="css/bootstrap.min.css" rel="stylesheet" />#}*/
/*         {#<link href="css/bootstrap-responsive.min.css" rel="stylesheet" />#}*/
/*         {#<link href="css/style.min.css" rel="stylesheet" />#}*/
/*         {#<link href="css/style-responsive.min.css" rel="stylesheet" />#}*/
/*         {#<link href="css/retina.css" rel="stylesheet" />#}*/
/*         <!-- AdminLTE Skins. We have chosen the skin-blue for this starter*/
/*               page. However, you can choose any other skin. Make sure you*/
/*               apply the skin class to the body tag so the changes take effect.*/
/*         -->*/
/*         <link rel="stylesheet" href="{{ asset('assets/dist/css/skins/_all-skins.css') }}">*/
/* */
/*     {% endblock %}*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('apple-touch-icon.png') }}" />*/
/* </head>*/
/* <header class="main-header">*/
/*     {% block header %}*/
/*         {% include 'header.html.twig' %}*/
/*     {% endblock %}*/
/* </header>*/
/* <aside class="main-sidebar">*/
/*     {% block sidebar %}*/
/*         {% include 'sidebar.html.twig' %}*/
/*     {% endblock %}*/
/* </aside>*/
/* <body>*/
/* */
/* {% block body %}*/
/*     <div class="wrapper">*/
/* */
/*         <!-- Main Header -->*/
/* */
/* */
/*         <!-- Left side column. contains the logo and sidebar -->*/
/* */
/* */
/*         <!-- Content Wrapper. Contains page content -->*/
/*         <div class="content-wrapper">*/
/*             <!-- Content Header (Page header) -->*/
/*             {% block content_header %}*/
/*                 <div class="row">*/
/*                     <div class="col-md-1"></div>*/
/*                     <div class="col-md-10">*/
/*                         <br>*/
/* */
/*                     </div>*/
/*                     <div class="col-md-1"></div>*/
/*                 </div>*/
/*             {#{%include ':default:content-header.html.twig'%}#}*/
/* */
/*             {% endblock %}*/
/*             <section class="content">*/
/*                 <!-- Your Page Content Here -->*/
/*                 <!-- Main content -->*/
/*                 {% block contenido %}*/
/*                     <div>*/
/*                         <div align="center" style="padding: 40px">*/
/*                             <div style="font-style: italic; text-decoration-style: double">*/
/*                                 <h3>MISIÓN</h3></div>*/
/*                                 <h4>Satisfacemos las expectativas de los clientes con servicios de transportación de pasajeros,*/
/*                                     conexos  y cargas en general con trabajadores de un  alto sentido de pertenencia  y*/
/*                                     un parque de equipos  en constante revitalización.*/
/*                                 </h4>*/
/*                                 <div style="font-style: italic; text-decoration-style: double">*/
/*                                     <h3>VISIÓN</h3></div>*/
/*                                <h4>Somos líderes en la prestación de servicios a nuestros clientes, con calidad,*/
/*                                    oportunidad y seguridad.</h4>*/
/* */
/*                     <div style="font-style: italic; text-decoration-style: double">*/
/*                         <h3>ORGANIGRAMA</h3></div>*/
/*                                 <img height="609" width="1119" src="{{ asset('assets/dist/img/Organigrama Empresa.png') }}">*/
/*                             </div>*/
/*                             <!-- /.tab-pane -->*/
/*                          </div>*/
/*                         <!-- /.tab-content -->*/
/*                  {% endblock %}*/
/*                 <!-- /.content -->*/
/*             </section>*/
/*         </div>*/
/*         <!-- /.content-wrapper -->*/
/* */
/*         <!-- Main Footer -->*/
/* */
/*     </div>*/
/*     <!-- ./wrapper -->*/
/* */
/* {% endblock %}*/
/* <footer id="elemento4" style="text-align: center" class="main-footer">*/
/*     <!-- To the right -->*/
/*     <div class="pull-right hidden-xs">*/
/* */
/*     </div>*/
/*     <!-- Default to the left -->*/
/*     <a href="{{ path('index') }}"><strong>Sistema de gestión de información de la UEB Ómnibus Holguín</strong></a>*/
/*     &copy;{{'now' | date('d-m-Y')}}*/
/*     <br>*/
/* */
/* </footer>*/
/* </body>*/
/* {% block javascripts %}*/
/*     <!-- REQUIRED JS SCRIPTS -->*/
/* */
/*     <!-- jQuery 2.2.0 -->*/
/*     <script src="{{ asset('assets/plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*     <!-- AdminLTE App -->*/
/*     <script src="{{ asset('assets/dist/js/app.min.js') }}"></script>*/
/* */
/*     {#<script src="{{ asset('Script/jquery-ui-1.10.3.custom.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/jquery.ui.touch-punch.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/jquery.cleditor.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/jquery.noty.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/jquery.elfinder.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/jquery.raty.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/jquery.iphone.toggle.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/jquery.uploadify-3.1.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/jquery.gritter.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/jquery.imagesloaded.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/jquery.masonry.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/jquery.knob.modified.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/jquery.sparkline.min.js') }}"></script>#}*/
/* */
/*     {#<script src="{{ asset('Script/counter.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/raphael.2.1.0.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/justgage.1.0.1.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/jquery.autosize.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/retina.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/wizard.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/wizard.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/core.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/charts.min.js') }}"></script>#}*/
/*     {#<script src="{{ asset('Script/custom.min.js') }}"></script>#}*/
/* */
/* */
/* */
/*     <!-- Optionally, you can add Slimscroll and FastClick plugins.*/
/*          Both of these plugins are recommended to enhance the*/
/*          user experience. Slimscroll is required when using the*/
/*          fixed layout.*/
/*     -->*/
/* */
/*     {#<script src="js/jquery.uploadify-3.1.min.js"></script>#}*/
/*     {#<script src="js/jquery.gritter.min.js"></script>#}*/
/*     {#<script src="js/jquery.imagesloaded.js"></script>#}*/
/*     {#<script src="js/jquery.masonry.min.js"></script>#}*/
/*     {#<script src="js/jquery.knob.modified.js"></script>#}*/
/*     {#<script src="js/jquery.sparkline.min.js"></script>#}*/
/*     {#<script src="js/counter.min.js"></script>#}*/
/*     {#<script src="js/raphael.2.1.0.min.js"></script>#}*/
/*     {#<script src="js/justgage.1.0.1.min.js"></script>#}*/
/*     {#<script src="js/jquery.autosize.min.js"></script>#}*/
/*     {#<script src="js/retina.js"></script>#}*/
/*     {#<script src="js/jquery.placeholder.min.js"></script>#}*/
/*     {#<script src="js/wizard.min.js"></script>#}*/
/*     {#<script src="js/core.min.js"></script>#}*/
/*     {#<script src="js/charts.min.js"></script>#}*/
/*     {#<script src="js/custom.min.js"></script>#}*/
/*     <!-- page script -->*/
/* */
/* {% endblock javascripts %}*/
/* */
/* </html>*/
/* */
