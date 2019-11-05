<?php

/* base.html.twig */
class __TwigTemplate_21766c85437f147d0e29255041a915325d10fa7ecf4e29af7ad21fab1f419988 extends Twig_Template
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
        // line 27
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\" />
</head>
";
        // line 31
        echo "    ";
        // line 32
        echo "        ";
        // line 33
        echo "    ";
        // line 36
        echo "    ";
        // line 37
        echo "        ";
        // line 38
        echo "    ";
        // line 40
        echo "<body>

";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 111
        echo "<footer id=\"elemento4\" style=\"text-align: center\" class=\"main-footer\">
    <!-- To the right -->
    <!-- Default to the left -->
    <a><strong>Sistema de gestión de información en la UEB Transporte</strong></a>
    ";
        // line 115
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "  &copy; Ómnibus Holguín

</footer>
</body>
";
        // line 119
        $this->displayBlock('javascripts', $context, $blocks);
        // line 181
        echo "
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " |Bienvenido!";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
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

        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/css/skins/_all-skins.css"), "html", null, true);
        echo "\">

    ";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        // line 44
        echo "
        <!-- Main Header -->


        <!-- Left side column. contains the logo and sidebar -->


        <!-- Content Wrapper. Contains page content -->
        ";
        // line 53
        echo "            <!-- Content Header (Page header) -->
            ";
        // line 55
        echo "                ";
        // line 56
        echo "                    ";
        // line 57
        echo "                    ";
        // line 58
        echo "                        ";
        // line 59
        echo "
                    ";
        // line 61
        echo "                    ";
        // line 62
        echo "                ";
        // line 63
        echo "                ";
        // line 64
        echo "
            ";
        // line 66
        echo "            <section class=\"content\">
                <!-- Your Page Content Here -->
                <!-- Main content -->
                ";
        // line 69
        $this->displayBlock('contenido', $context, $blocks);
        // line 100
        echo "
                <!-- /.content -->
            </section>
        ";
        // line 104
        echo "        <!-- /.content-wrapper -->
        <!-- Main Footer -->

    </div>
    <!-- ./wrapper -->

";
    }

    // line 69
    public function block_contenido($context, array $blocks = array())
    {
        // line 70
        echo "                    <div class=\"nav-tabs-custom\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a href=\"#tab_1\" data-toggle=\"tab\">Misión</a></li>
                            <li><a href=\"#tab_2\" data-toggle=\"tab\">Visión</a></li>
                            <li><a href=\"#tab_3\" data-toggle=\"tab\">Organigrama</a></li>
                            <li class=\"pull-right\"><a href=\"#\" class=\"text-muted\"><i class=\"\"></i></a></li>
                        </ul>
                        <div class=\"tab-content\">
                            <div align=\"justify\" class=\"tab-pane active\" id=\"tab_1\">
                                <b></b>
                                <h3>Satisfacemos las expectativas de los clientes con servicios de transportación de pasajeros,
                                    conexos  y cargas en general con trabajadores de un  alto sentido de pertenencia  y
                                    un parque de equipos  en constante revitalización.
                                </h3>
                            </div>
                            <!-- /.tab-pane -->
                            <div align=\"justify\" class=\"tab-pane\" id=\"tab_2\">
                                <h3>Somos líderes en la prestación de servicios a nuestros clientes, con calidad,
                                    oportunidad y seguridad.</h3>
                            </div>
                            <!-- /.tab-pane -->
                            <div class=\"tab-pane\" id=\"tab_3\">
                                <img height=\"400\" width=\"735\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/Organigrama Empresa.png"), "html", null, true);
        echo "\">
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>

                ";
    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        // line 120
        echo "    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.2.0 -->
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 130
        echo "    ";
        // line 131
        echo "    ";
        // line 132
        echo "    ";
        // line 133
        echo "    ";
        // line 134
        echo "    ";
        // line 135
        echo "    ";
        // line 136
        echo "    ";
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
        echo "
    ";
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
        echo "    ";
        // line 150
        echo "    ";
        // line 151
        echo "    ";
        // line 152
        echo "    ";
        // line 153
        echo "


    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout.
    -->

    ";
        // line 163
        echo "    ";
        // line 164
        echo "    ";
        // line 165
        echo "    ";
        // line 166
        echo "    ";
        // line 167
        echo "    ";
        // line 168
        echo "    ";
        // line 169
        echo "    ";
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
        echo "    <!-- page script -->

";
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
        return array (  338 => 178,  336 => 177,  334 => 176,  332 => 175,  330 => 174,  328 => 173,  326 => 172,  324 => 171,  322 => 170,  320 => 169,  318 => 168,  316 => 167,  314 => 166,  312 => 165,  310 => 164,  308 => 163,  297 => 153,  295 => 152,  293 => 151,  291 => 150,  289 => 149,  287 => 148,  285 => 147,  283 => 146,  281 => 145,  279 => 144,  276 => 142,  274 => 141,  272 => 140,  270 => 139,  268 => 138,  266 => 137,  264 => 136,  262 => 135,  260 => 134,  258 => 133,  256 => 132,  254 => 131,  252 => 130,  247 => 127,  242 => 125,  237 => 123,  232 => 120,  229 => 119,  217 => 92,  193 => 70,  190 => 69,  180 => 104,  175 => 100,  173 => 69,  168 => 66,  165 => 64,  163 => 63,  161 => 62,  159 => 61,  156 => 59,  154 => 58,  152 => 57,  150 => 56,  148 => 55,  145 => 53,  135 => 44,  133 => 43,  130 => 42,  123 => 24,  114 => 18,  110 => 17,  105 => 15,  100 => 13,  97 => 12,  94 => 11,  88 => 7,  82 => 181,  80 => 119,  73 => 115,  67 => 111,  65 => 42,  61 => 40,  59 => 38,  57 => 37,  55 => 36,  53 => 33,  51 => 32,  49 => 31,  44 => 28,  41 => 27,  39 => 11,  34 => 8,  32 => 7,  24 => 1,);
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
/* {#<header class="main-header">#}*/
/*     {#{% block header %}#}*/
/*         {#{% include 'header.html.twig' %}#}*/
/*     {#{% endblock %}#}*/
/* {#</header>#}*/
/* {#<aside class="main-sidebar">#}*/
/*     {#{% block sidebar %}#}*/
/*         {#{% include 'sidebar.html.twig' %}#}*/
/*     {#{% endblock %}#}*/
/* {#</aside>#}*/
/* <body>*/
/* */
/* {% block body %}*/
/*     {#<div class="wrapper">#}*/
/* */
/*         <!-- Main Header -->*/
/* */
/* */
/*         <!-- Left side column. contains the logo and sidebar -->*/
/* */
/* */
/*         <!-- Content Wrapper. Contains page content -->*/
/*         {#<div class="content-wrapper">#}*/
/*             <!-- Content Header (Page header) -->*/
/*             {#{% block content_header %}#}*/
/*                 {#<div class="row">#}*/
/*                     {#<div class="col-md-1"></div>#}*/
/*                     {#<div class="col-md-10">#}*/
/*                         {#<br>#}*/
/* */
/*                     {#</div>#}*/
/*                     {#<div class="col-md-1"></div>#}*/
/*                 {#</div>#}*/
/*                 {#{%include ':default:content-header.html.twig'%}#}*/
/* */
/*             {#{% endblock %}#}*/
/*             <section class="content">*/
/*                 <!-- Your Page Content Here -->*/
/*                 <!-- Main content -->*/
/*                 {% block contenido %}*/
/*                     <div class="nav-tabs-custom">*/
/*                         <ul class="nav nav-tabs">*/
/*                             <li class="active"><a href="#tab_1" data-toggle="tab">Misión</a></li>*/
/*                             <li><a href="#tab_2" data-toggle="tab">Visión</a></li>*/
/*                             <li><a href="#tab_3" data-toggle="tab">Organigrama</a></li>*/
/*                             <li class="pull-right"><a href="#" class="text-muted"><i class=""></i></a></li>*/
/*                         </ul>*/
/*                         <div class="tab-content">*/
/*                             <div align="justify" class="tab-pane active" id="tab_1">*/
/*                                 <b></b>*/
/*                                 <h3>Satisfacemos las expectativas de los clientes con servicios de transportación de pasajeros,*/
/*                                     conexos  y cargas en general con trabajadores de un  alto sentido de pertenencia  y*/
/*                                     un parque de equipos  en constante revitalización.*/
/*                                 </h3>*/
/*                             </div>*/
/*                             <!-- /.tab-pane -->*/
/*                             <div align="justify" class="tab-pane" id="tab_2">*/
/*                                 <h3>Somos líderes en la prestación de servicios a nuestros clientes, con calidad,*/
/*                                     oportunidad y seguridad.</h3>*/
/*                             </div>*/
/*                             <!-- /.tab-pane -->*/
/*                             <div class="tab-pane" id="tab_3">*/
/*                                 <img height="400" width="735" src="{{ asset('assets/dist/img/Organigrama Empresa.png') }}">*/
/*                             </div>*/
/*                             <!-- /.tab-pane -->*/
/*                         </div>*/
/*                         <!-- /.tab-content -->*/
/*                     </div>*/
/* */
/*                 {% endblock %}*/
/* */
/*                 <!-- /.content -->*/
/*             </section>*/
/*         {#</div>#}*/
/*         <!-- /.content-wrapper -->*/
/*         <!-- Main Footer -->*/
/* */
/*     </div>*/
/*     <!-- ./wrapper -->*/
/* */
/* {% endblock %}*/
/* <footer id="elemento4" style="text-align: center" class="main-footer">*/
/*     <!-- To the right -->*/
/*     <!-- Default to the left -->*/
/*     <a><strong>Sistema de gestión de información en la UEB Transporte</strong></a>*/
/*     {{'now' | date('d-m-Y')}}  &copy; Ómnibus Holguín*/
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
