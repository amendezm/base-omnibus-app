<?php

/* ::header.html.twig */
class __TwigTemplate_7ee4c5271cdbb87bd62744e4a69990330ff0e9f6ceafdd71b90197cf9e86f223 extends Twig_Template
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
        $__internal_19b3507bab2d9e27322c8233e69411b666a5444fe8c3684e3ffcf4214e1e3fe5 = $this->env->getExtension("native_profiler");
        $__internal_19b3507bab2d9e27322c8233e69411b666a5444fe8c3684e3ffcf4214e1e3fe5->enter($__internal_19b3507bab2d9e27322c8233e69411b666a5444fe8c3684e3ffcf4214e1e3fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        // line 1
        $context["usuario"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array());
        // line 2
        $context["session"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array());
        // line 3
        echo "<!-- Logo -->
    <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\" class=\"logo\" style=\"background:#FFFFFF;\">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class=\"logo-mini\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/r.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"></span>
    <!-- logo for regular state and mobile devices -->
    <span class=\"logo-lg \"><img height=\"50\" width=\"130\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/logo_thg_horizontal.png"), "html", null, true);
        echo "\"></span>
  </a>

  <!-- Header Navbar -->
  <nav id=\"elemento1\" class=\"navbar navbar-static-top\" role=\"navigation\">
    <!-- Sidebar toggle button-->
    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
      <span class=\"sr-only\">Toggle navigation</span>
    </a>
      <div class=\"\">
          <ul class=\"\">
      <h3 style=\"text-align: center\">EMPRESA TRANSPORTE HOLGUÍN -- UEB ÓMNIBUS HOLGUÍN</h3>
      </ul>
          </div>
    <!-- Navbar Right Menu -->
     <div class=\"navbar-custom-menu\">
      <ul class=\"nav navbar-nav\">
        <!-- Messages: style can be found in dropdown.less-->

        ";
        // line 28
        echo "
        ";
        // line 30
        echo "

                ";
        // line 33
        echo "        <li class=\"dropdown user user-menu\">
          <!-- Menu Toggle Button -->
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            <!-- The user image in the navbar-->
            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/r.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            ";
        // line 40
        echo "          </a>
          <ul class=\"dropdown-menu\">
            <!-- The user image in the menu -->
            <li class=\"user-header\">
              <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/r.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

              <p>
                ";
        // line 48
        echo "              </p>
            </li>
            <!-- Menu Body -->

            <!-- /.row -->

            <!-- Menu Footer-->
            <li class=\"user-footer\">
              <div class=\"pull-left\">
                <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"btn btn-block btn-primary\">Autenticarse</a>
              </div>
              <div class=\"pull-right\">

                <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"btn btn-block btn-danger\">Salir</a>
                ";
        // line 63
        echo "
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>";
        
        $__internal_19b3507bab2d9e27322c8233e69411b666a5444fe8c3684e3ffcf4214e1e3fe5->leave($__internal_19b3507bab2d9e27322c8233e69411b666a5444fe8c3684e3ffcf4214e1e3fe5_prof);

    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 63,  109 => 61,  102 => 57,  91 => 48,  85 => 44,  79 => 40,  74 => 37,  68 => 33,  64 => 30,  61 => 28,  39 => 8,  34 => 6,  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set usuario = app.user %}*/
/* {% set session = app.session %}*/
/* <!-- Logo -->*/
/*     <a href="{{ path('index') }}" class="logo" style="background:#FFFFFF;">*/
/*     <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*     <span class="logo-mini"><img src="{{ asset('assets/dist/img/r.jpg') }}" class="img-circle" alt="User Image"></span>*/
/*     <!-- logo for regular state and mobile devices -->*/
/*     <span class="logo-lg "><img height="50" width="130" src="{{ asset('assets/dist/img/logo_thg_horizontal.png') }}"></span>*/
/*   </a>*/
/* */
/*   <!-- Header Navbar -->*/
/*   <nav id="elemento1" class="navbar navbar-static-top" role="navigation">*/
/*     <!-- Sidebar toggle button-->*/
/*     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*       <span class="sr-only">Toggle navigation</span>*/
/*     </a>*/
/*       <div class="">*/
/*           <ul class="">*/
/*       <h3 style="text-align: center">EMPRESA TRANSPORTE HOLGUÍN -- UEB ÓMNIBUS HOLGUÍN</h3>*/
/*       </ul>*/
/*           </div>*/
/*     <!-- Navbar Right Menu -->*/
/*      <div class="navbar-custom-menu">*/
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
