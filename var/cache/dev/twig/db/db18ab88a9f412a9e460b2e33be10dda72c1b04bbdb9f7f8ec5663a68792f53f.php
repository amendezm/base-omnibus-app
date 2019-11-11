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
        $__internal_5dda786e35015222ca72b82fe01a5f7a7c72da43012f13030ce45b999b83957b = $this->env->getExtension("native_profiler");
        $__internal_5dda786e35015222ca72b82fe01a5f7a7c72da43012f13030ce45b999b83957b->enter($__internal_5dda786e35015222ca72b82fe01a5f7a7c72da43012f13030ce45b999b83957b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

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
        // line 44
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\"/>
    </head>
    <header class=\"main-header\">
        ";
        // line 48
        $this->displayBlock('header', $context, $blocks);
        // line 51
        echo "    </header>
    <aside class=\"main-sidebar\">
        ";
        // line 53
        $this->displayBlock('sidebar', $context, $blocks);
        // line 56
        echo "    </aside>
    <body>

        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 121
        echo "        <footer
            id=\"elemento4\" style=\"text-align: center\" class=\"main-footer\">
            <!-- To the right -->
            <div class=\"pull-right hidden-xs\"></div>
            <!-- Default to the left -->
            <a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">
                <strong>Sistema de gestión de información de la UEB Ómnibus Holguín</strong>
            </a>
            &copy;";
        // line 129
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "
            <br>

        </footer>
    </body>
    ";
        // line 134
        $this->displayBlock('javascripts', $context, $blocks);
        // line 194
        echo "
</html>
";
        
        $__internal_5dda786e35015222ca72b82fe01a5f7a7c72da43012f13030ce45b999b83957b->leave($__internal_5dda786e35015222ca72b82fe01a5f7a7c72da43012f13030ce45b999b83957b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1b4b8dc4c2abea32948b2c8c32114ead8364c1b13e1eecf1d495f51d86a4955 = $this->env->getExtension("native_profiler");
        $__internal_d1b4b8dc4c2abea32948b2c8c32114ead8364c1b13e1eecf1d495f51d86a4955->enter($__internal_d1b4b8dc4c2abea32948b2c8c32114ead8364c1b13e1eecf1d495f51d86a4955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "                |Bienvenido!
            ";
        
        $__internal_d1b4b8dc4c2abea32948b2c8c32114ead8364c1b13e1eecf1d495f51d86a4955->leave($__internal_d1b4b8dc4c2abea32948b2c8c32114ead8364c1b13e1eecf1d495f51d86a4955_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e39ef581a512f75c583885cf42e0416601894aba05e849a52992e988a84a1a1d = $this->env->getExtension("native_profiler");
        $__internal_e39ef581a512f75c583885cf42e0416601894aba05e849a52992e988a84a1a1d->enter($__internal_e39ef581a512f75c583885cf42e0416601894aba05e849a52992e988a84a1a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            <link
            rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/css/fonts.googleapis.SourceSansPro.css"), "html", null, true);
        echo "\">

            <!-- Custom style -->
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom/base.css"), "html", null, true);
        echo "\">

            ";
        // line 29
        echo "            ";
        // line 30
        echo "            ";
        // line 31
        echo "            ";
        // line 32
        echo "            ";
        // line 33
        echo "
            ";
        // line 35
        echo "            ";
        // line 36
        echo "            ";
        // line 37
        echo "            ";
        // line 38
        echo "            ";
        // line 39
        echo "            <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
                                      page. However, you can choose any other skin. Make sure you
                                      apply the skin class to the body tag so the changes take effect.
                                -->
        <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/css/skins/_all-skins.css"), "html", null, true);
        echo "\"> ";
        
        $__internal_e39ef581a512f75c583885cf42e0416601894aba05e849a52992e988a84a1a1d->leave($__internal_e39ef581a512f75c583885cf42e0416601894aba05e849a52992e988a84a1a1d_prof);

    }

    // line 48
    public function block_header($context, array $blocks = array())
    {
        $__internal_7259dad883eed27357cc50b57da3ea1fe89bb326aa8e977bb94dce086869ac74 = $this->env->getExtension("native_profiler");
        $__internal_7259dad883eed27357cc50b57da3ea1fe89bb326aa8e977bb94dce086869ac74->enter($__internal_7259dad883eed27357cc50b57da3ea1fe89bb326aa8e977bb94dce086869ac74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 49
        echo "            ";
        $this->loadTemplate("header.html.twig", "index.html.twig", 49)->display($context);
        // line 50
        echo "        ";
        
        $__internal_7259dad883eed27357cc50b57da3ea1fe89bb326aa8e977bb94dce086869ac74->leave($__internal_7259dad883eed27357cc50b57da3ea1fe89bb326aa8e977bb94dce086869ac74_prof);

    }

    // line 53
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e4909e59d8a04b89539e8eb3a800812cd86233ad7aeda72652ce2db32f3ab786 = $this->env->getExtension("native_profiler");
        $__internal_e4909e59d8a04b89539e8eb3a800812cd86233ad7aeda72652ce2db32f3ab786->enter($__internal_e4909e59d8a04b89539e8eb3a800812cd86233ad7aeda72652ce2db32f3ab786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 54
        echo "            ";
        $this->loadTemplate("sidebar.html.twig", "index.html.twig", 54)->display($context);
        // line 55
        echo "        ";
        
        $__internal_e4909e59d8a04b89539e8eb3a800812cd86233ad7aeda72652ce2db32f3ab786->leave($__internal_e4909e59d8a04b89539e8eb3a800812cd86233ad7aeda72652ce2db32f3ab786_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad6c2eccdf03abe1a594ea01c7f1373c5987f54adfeaa947e5f83f52daf4fe52 = $this->env->getExtension("native_profiler");
        $__internal_ad6c2eccdf03abe1a594ea01c7f1373c5987f54adfeaa947e5f83f52daf4fe52->enter($__internal_ad6c2eccdf03abe1a594ea01c7f1373c5987f54adfeaa947e5f83f52daf4fe52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "            <div class=\"wrapper\">

                <!-- Main Header -->


                <!-- Left side column. contains the logo and sidebar -->


                <!-- Content Wrapper. Contains page content -->
                    <div
                    class=\"content-wrapper\"> <!-- Content Header (Page header) -->
                    ";
        // line 71
        $this->displayBlock('content_header', $context, $blocks);
        // line 83
        echo "                    <section class=\"content\">
                        <!-- Your Page Content Here -->
                        <!-- Main content -->
                            ";
        // line 86
        $this->displayBlock('contenido', $context, $blocks);
        // line 110
        echo "                        <!-- /.content -->
                    </section>
                </div>
                <!-- /.content-wrapper -->

                <!-- Main Footer -->

            </div>
            <!-- ./wrapper -->

        ";
        
        $__internal_ad6c2eccdf03abe1a594ea01c7f1373c5987f54adfeaa947e5f83f52daf4fe52->leave($__internal_ad6c2eccdf03abe1a594ea01c7f1373c5987f54adfeaa947e5f83f52daf4fe52_prof);

    }

    // line 71
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_2aa9bb8e5b1b6b7b056e9ccd5a9b54dc2170aae9800fd82d169a17cdaf92a951 = $this->env->getExtension("native_profiler");
        $__internal_2aa9bb8e5b1b6b7b056e9ccd5a9b54dc2170aae9800fd82d169a17cdaf92a951->enter($__internal_2aa9bb8e5b1b6b7b056e9ccd5a9b54dc2170aae9800fd82d169a17cdaf92a951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 72
        echo "                        <div class=\"row\">
                            <div class=\"col-md-1\"></div>
                            <div class=\"col-md-10\">
                                <br>

                            </div>
                            <div class=\"col-md-1\"></div>
                        </div>
                        ";
        // line 81
        echo "
                    ";
        
        $__internal_2aa9bb8e5b1b6b7b056e9ccd5a9b54dc2170aae9800fd82d169a17cdaf92a951->leave($__internal_2aa9bb8e5b1b6b7b056e9ccd5a9b54dc2170aae9800fd82d169a17cdaf92a951_prof);

    }

    // line 86
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_f7942acf32a0ad3026e7a9584385bc428ac286c6d2577819a3541b329016e9b8 = $this->env->getExtension("native_profiler");
        $__internal_f7942acf32a0ad3026e7a9584385bc428ac286c6d2577819a3541b329016e9b8->enter($__internal_f7942acf32a0ad3026e7a9584385bc428ac286c6d2577819a3541b329016e9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 87
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
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/Organigrama Empresa.png"), "html", null, true);
        echo "\">
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        ";
        
        $__internal_f7942acf32a0ad3026e7a9584385bc428ac286c6d2577819a3541b329016e9b8->leave($__internal_f7942acf32a0ad3026e7a9584385bc428ac286c6d2577819a3541b329016e9b8_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1e53c4d31895eff531f37180b82b9dd20cf0d903731f1f0d4e373aae60c785c = $this->env->getExtension("native_profiler");
        $__internal_d1e53c4d31895eff531f37180b82b9dd20cf0d903731f1f0d4e373aae60c785c->enter($__internal_d1e53c4d31895eff531f37180b82b9dd20cf0d903731f1f0d4e373aae60c785c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.2.0 --><script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"> </script>
        <!-- Bootstrap 3.3.5 -->
        <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 144
        echo "    ";
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
        echo "        ";
        // line 154
        echo "        ";
        // line 155
        echo "        ";
        // line 156
        echo "
        ";
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
        echo "        ";
        // line 165
        echo "        ";
        // line 166
        echo "        ";
        // line 167
        echo "

        <!-- Optionally, you can add Slimscroll and FastClick plugins.
                         Both of these plugins are recommended to enhance the
                         user experience. Slimscroll is required when using the
                         fixed layout.
                    -->

        ";
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
        echo "        ";
        // line 189
        echo "        ";
        // line 190
        echo "        ";
        // line 191
        echo "        <!-- page script -->

    ";
        
        $__internal_d1e53c4d31895eff531f37180b82b9dd20cf0d903731f1f0d4e373aae60c785c->leave($__internal_d1e53c4d31895eff531f37180b82b9dd20cf0d903731f1f0d4e373aae60c785c_prof);

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
        return array (  436 => 191,  434 => 190,  432 => 189,  430 => 188,  428 => 187,  426 => 186,  424 => 185,  422 => 184,  420 => 183,  418 => 182,  416 => 181,  414 => 180,  412 => 179,  410 => 178,  408 => 177,  406 => 176,  396 => 167,  394 => 166,  392 => 165,  390 => 164,  388 => 163,  386 => 162,  384 => 161,  382 => 160,  380 => 159,  378 => 158,  375 => 156,  373 => 155,  371 => 154,  369 => 153,  367 => 152,  365 => 151,  363 => 150,  361 => 149,  359 => 148,  357 => 147,  355 => 146,  353 => 145,  351 => 144,  346 => 141,  341 => 139,  336 => 137,  332 => 135,  326 => 134,  313 => 104,  294 => 87,  288 => 86,  280 => 81,  270 => 72,  264 => 71,  247 => 110,  245 => 86,  240 => 83,  238 => 71,  225 => 60,  219 => 59,  212 => 55,  209 => 54,  203 => 53,  196 => 50,  193 => 49,  187 => 48,  179 => 43,  173 => 39,  171 => 38,  169 => 37,  167 => 36,  165 => 35,  162 => 33,  160 => 32,  158 => 31,  156 => 30,  154 => 29,  149 => 26,  143 => 23,  138 => 21,  133 => 19,  127 => 16,  123 => 14,  117 => 13,  109 => 8,  103 => 7,  94 => 194,  92 => 134,  84 => 129,  78 => 126,  71 => 121,  69 => 59,  64 => 56,  62 => 53,  58 => 51,  56 => 48,  50 => 45,  47 => 44,  45 => 13,  40 => 10,  38 => 7,  30 => 1,);
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
/*             <link*/
/*             rel="stylesheet" href="{{ asset('assets/dist/css/fonts.googleapis.SourceSansPro.css') }}">*/
/* */
/*             <!-- Custom style -->*/
/*             <link rel="stylesheet" href="{{ asset('css/custom/base.css') }}">*/
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
/*                                       page. However, you can choose any other skin. Make sure you*/
/*                                       apply the skin class to the body tag so the changes take effect.*/
/*                                 -->*/
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
/*                                                                                                                     conexos  y cargas en general con trabajadores de un  alto sentido de pertenencia  y*/
/*                                                                                                                     un parque de equipos  en constante revitalización.*/
/*                                     </h4>*/
/*                                     <div style="font-style: italic; text-decoration-style: double">*/
/*                                         <h3>VISIÓN</h3>*/
/*                                     </div>*/
/*                                     <h4>Somos líderes en la prestación de servicios a nuestros clientes, con calidad,*/
/*                                                                                                                    oportunidad y seguridad.</h4>*/
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
/*                          Both of these plugins are recommended to enhance the*/
/*                          user experience. Slimscroll is required when using the*/
/*                          fixed layout.*/
/*                     -->*/
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
