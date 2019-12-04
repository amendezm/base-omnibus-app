<?php

/* header.html.twig */
class __TwigTemplate_ba46fecf730353e8311656b87a4bb229148131435c7ce8000cd48837e7c435bb extends Twig_Template
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
        $__internal_d241f139a9f95dd9378e02a1da7ce3f4f19d994b6c4632c0a98478e04b04c0df = $this->env->getExtension("native_profiler");
        $__internal_d241f139a9f95dd9378e02a1da7ce3f4f19d994b6c4632c0a98478e04b04c0df->enter($__internal_d241f139a9f95dd9378e02a1da7ce3f4f19d994b6c4632c0a98478e04b04c0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        $context["usuario"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array());
        // line 2
        $context["session"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array());
        // line 3
        echo "<!-- Logo -->

  <!-- Header Navbar -->
  <nav id=\"elemento1\" class=\"navbar navbar-static-top navbar-fixed-top\" role=\"navigation\">
    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\" class=\"navbar-brand logo\" style=\"background:#FFFFFF;\">
      <span class=\"logo-mini\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/r.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"></span>
      <span class=\"logo-lg \"><img height=\"50\" width=\"130\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/logo_thg_horizontal.png"), "html", null, true);
        echo "\"></span>
    </a>
    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
      <span class=\"sr-only\">Toggle navigation</span>
    </a>
    <ul class=\"nav navbar-nav justify-content-center\" style=\" width:72%; text-align:center;\">
      <li class=\"nav-item\" style=\" width:100%;\">
        <a class=\"nav-link\" href=\"\" style=\"cursor:initial; color:black; font-size:x-large;\">EMPRESA TRANSPORTE HOLGUÍN -- UEB ÓMNIBUS HOLGUÍN</a>
      </li>
    </ul>
    <!-- Navbar Right Menu -->
     <div class=\"navbar-toggler navbar-custom-menu\">
      <ul class=\"nav navbar-nav\">
        <!-- Messages: style can be found in dropdown.less-->

        ";
        // line 25
        echo "
        ";
        // line 27
        echo "

                ";
        // line 30
        echo "        <li class=\"dropdown user user-menu\">
          <!-- Menu Toggle Button -->
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            <!-- The user image in the navbar-->
            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/r.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            ";
        // line 37
        echo "          </a>
          <ul class=\"dropdown-menu\">
            <!-- The user image in the menu -->
            <li class=\"user-header\">
              <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/r.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

              <p>
                ";
        // line 45
        echo "              </p>
            </li>
            <!-- Menu Body -->

            <!-- /.row -->

            <!-- Menu Footer-->
            <li class=\"user-footer\">
              <div class=\"pull-left\">
                <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"btn btn-block btn-primary\">Autenticarse</a>
              </div>
              <div class=\"pull-right\">

                <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"btn btn-block btn-danger\">Salir</a>
                ";
        // line 60
        echo "
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>";
        
        $__internal_d241f139a9f95dd9378e02a1da7ce3f4f19d994b6c4632c0a98478e04b04c0df->leave($__internal_d241f139a9f95dd9378e02a1da7ce3f4f19d994b6c4632c0a98478e04b04c0df_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 60,  106 => 58,  99 => 54,  88 => 45,  82 => 41,  76 => 37,  71 => 34,  65 => 30,  61 => 27,  58 => 25,  40 => 9,  36 => 8,  32 => 7,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set usuario = app.user %}*/
/* {% set session = app.session %}*/
/* <!-- Logo -->*/
/* */
/*   <!-- Header Navbar -->*/
/*   <nav id="elemento1" class="navbar navbar-static-top navbar-fixed-top" role="navigation">*/
/*     <a href="{{ path('index') }}" class="navbar-brand logo" style="background:#FFFFFF;">*/
/*       <span class="logo-mini"><img src="{{ asset('assets/dist/img/r.jpg') }}" class="img-circle" alt="User Image"></span>*/
/*       <span class="logo-lg "><img height="50" width="130" src="{{ asset('assets/dist/img/logo_thg_horizontal.png') }}"></span>*/
/*     </a>*/
/*     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*       <span class="sr-only">Toggle navigation</span>*/
/*     </a>*/
/*     <ul class="nav navbar-nav justify-content-center" style=" width:72%; text-align:center;">*/
/*       <li class="nav-item" style=" width:100%;">*/
/*         <a class="nav-link" href="" style="cursor:initial; color:black; font-size:x-large;">EMPRESA TRANSPORTE HOLGUÍN -- UEB ÓMNIBUS HOLGUÍN</a>*/
/*       </li>*/
/*     </ul>*/
/*     <!-- Navbar Right Menu -->*/
/*      <div class="navbar-toggler navbar-custom-menu">*/
/*       <ul class="nav navbar-nav">*/
/*         <!-- Messages: style can be found in dropdown.less-->*/
/* */
/*         {#{% if session.isStarted == true %}#}*/
/* */
/*         {#<a href="{{ path('login') }}">entrar</a>#}*/
/* */
/* */
/*                 {#{% else %}#}*/
/*         <li class="dropdown user user-menu">*/
/*           <!-- Menu Toggle Button -->*/
/*           <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*             <!-- The user image in the navbar-->*/
/*             <img src="{{ asset('assets/dist/img/r.jpg') }}" class="user-image" alt="User Image">*/
/*             <!-- hidden-xs hides the username on small devices so only the image appears. -->*/
/*             {#<span class="hidden-xs">{{ app.user.username}}</span>#}*/
/*           </a>*/
/*           <ul class="dropdown-menu">*/
/*             <!-- The user image in the menu -->*/
/*             <li class="user-header">*/
/*               <img src="{{ asset('assets/dist/img/r.jpg') }}" class="img-circle" alt="User Image">*/
/* */
/*               <p>*/
/*                 {#Usuario: {{ app.user.usuario }}#}*/
/*               </p>*/
/*             </li>*/
/*             <!-- Menu Body -->*/
/* */
/*             <!-- /.row -->*/
/* */
/*             <!-- Menu Footer-->*/
/*             <li class="user-footer">*/
/*               <div class="pull-left">*/
/*                 <a href="{{ path('login') }}" class="btn btn-block btn-primary">Autenticarse</a>*/
/*               </div>*/
/*               <div class="pull-right">*/
/* */
/*                 <a href="{{ path('logout') }}" class="btn btn-block btn-danger">Salir</a>*/
/*                 {#{% endif %}#}*/
/* */
/*               </div>*/
/*             </li>*/
/*           </ul>*/
/*         </li>*/
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
