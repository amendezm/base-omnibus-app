<?php

/* :default:index.html.twig */
class __TwigTemplate_af133ce9736c48525510867b24bc5bda47f2cfa2bc2e3ab50a62d0a92223b5ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'id' => array($this, 'block_id'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c48a3157e9a6e9d8819a0f3978be0c2c33a206ff7d816759d61a98b8303b7412 = $this->env->getExtension("native_profiler");
        $__internal_c48a3157e9a6e9d8819a0f3978be0c2c33a206ff7d816759d61a98b8303b7412->enter($__internal_c48a3157e9a6e9d8819a0f3978be0c2c33a206ff7d816759d61a98b8303b7412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

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
        // line 26
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body class=\"";
        // line 29
        $this->displayBlock('id', $context, $blocks);
        echo "\">

";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "</body>
</html>
";
        
        $__internal_c48a3157e9a6e9d8819a0f3978be0c2c33a206ff7d816759d61a98b8303b7412->leave($__internal_c48a3157e9a6e9d8819a0f3978be0c2c33a206ff7d816759d61a98b8303b7412_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b013cefe48d949cf7fc2648f47c5d12b3fb87d06a0dd6f89df79237da85331e = $this->env->getExtension("native_profiler");
        $__internal_4b013cefe48d949cf7fc2648f47c5d12b3fb87d06a0dd6f89df79237da85331e->enter($__internal_4b013cefe48d949cf7fc2648f47c5d12b3fb87d06a0dd6f89df79237da85331e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " |Bienvenido!";
        
        $__internal_4b013cefe48d949cf7fc2648f47c5d12b3fb87d06a0dd6f89df79237da85331e->leave($__internal_4b013cefe48d949cf7fc2648f47c5d12b3fb87d06a0dd6f89df79237da85331e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b4cc2dc8e66a1586cac0d94e8db8478dc4f48c06d2841d7711b12fedffc0d0b = $this->env->getExtension("native_profiler");
        $__internal_9b4cc2dc8e66a1586cac0d94e8db8478dc4f48c06d2841d7711b12fedffc0d0b->enter($__internal_9b4cc2dc8e66a1586cac0d94e8db8478dc4f48c06d2841d7711b12fedffc0d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/css/skins/_all-skins.css"), "html", null, true);
        echo "\">

    ";
        
        $__internal_9b4cc2dc8e66a1586cac0d94e8db8478dc4f48c06d2841d7711b12fedffc0d0b->leave($__internal_9b4cc2dc8e66a1586cac0d94e8db8478dc4f48c06d2841d7711b12fedffc0d0b_prof);

    }

    // line 29
    public function block_id($context, array $blocks = array())
    {
        $__internal_a75d8eb3e266e1c52798ea0ad671640792fc9ac43c1f07f85655209ca753a76c = $this->env->getExtension("native_profiler");
        $__internal_a75d8eb3e266e1c52798ea0ad671640792fc9ac43c1f07f85655209ca753a76c->enter($__internal_a75d8eb3e266e1c52798ea0ad671640792fc9ac43c1f07f85655209ca753a76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "";
        
        $__internal_a75d8eb3e266e1c52798ea0ad671640792fc9ac43c1f07f85655209ca753a76c->leave($__internal_a75d8eb3e266e1c52798ea0ad671640792fc9ac43c1f07f85655209ca753a76c_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7321b33f1cf54c4a3dbe8e3dc5ed7dd52076d363aeb07f4f206ffe23dd6cc67 = $this->env->getExtension("native_profiler");
        $__internal_b7321b33f1cf54c4a3dbe8e3dc5ed7dd52076d363aeb07f4f206ffe23dd6cc67->enter($__internal_b7321b33f1cf54c4a3dbe8e3dc5ed7dd52076d363aeb07f4f206ffe23dd6cc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b7321b33f1cf54c4a3dbe8e3dc5ed7dd52076d363aeb07f4f206ffe23dd6cc67->leave($__internal_b7321b33f1cf54c4a3dbe8e3dc5ed7dd52076d363aeb07f4f206ffe23dd6cc67_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac19b9501a503a95a0c0d4a33689bceecf5bd0dcd3cfade0d715de4f3a4197e0 = $this->env->getExtension("native_profiler");
        $__internal_ac19b9501a503a95a0c0d4a33689bceecf5bd0dcd3cfade0d715de4f3a4197e0->enter($__internal_ac19b9501a503a95a0c0d4a33689bceecf5bd0dcd3cfade0d715de4f3a4197e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.2.0 -->
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout.
    -->
    <!-- page script -->

";
        
        $__internal_ac19b9501a503a95a0c0d4a33689bceecf5bd0dcd3cfade0d715de4f3a4197e0->leave($__internal_ac19b9501a503a95a0c0d4a33689bceecf5bd0dcd3cfade0d715de4f3a4197e0_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 42,  165 => 40,  160 => 38,  155 => 35,  149 => 34,  138 => 31,  126 => 29,  116 => 23,  108 => 18,  104 => 17,  99 => 15,  94 => 13,  91 => 12,  85 => 11,  73 => 7,  64 => 52,  62 => 34,  59 => 33,  57 => 31,  52 => 29,  47 => 27,  44 => 26,  42 => 11,  37 => 8,  35 => 7,  27 => 1,);
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
/*         <!-- AdminLTE Skins. We have chosen the skin-blue for this starter*/
/*               page. However, you can choose any other skin. Make sure you*/
/*               apply the skin class to the body tag so the changes take effect.*/
/*         -->*/
/*         <link rel="stylesheet" href="{{ asset('assets/dist/css/skins/_all-skins.css') }}">*/
/* */
/*     {% endblock %}*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body class="{% block id '' %}">*/
/* */
/* {% block body %}*/
/* {% endblock body %}*/
/* */
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
/*     <!-- Optionally, you can add Slimscroll and FastClick plugins.*/
/*          Both of these plugins are recommended to enhance the*/
/*          user experience. Slimscroll is required when using the*/
/*          fixed layout.*/
/*     -->*/
/*     <!-- page script -->*/
/* */
/* {% endblock javascripts %}*/
/* </body>*/
/* </html>*/
/* */
