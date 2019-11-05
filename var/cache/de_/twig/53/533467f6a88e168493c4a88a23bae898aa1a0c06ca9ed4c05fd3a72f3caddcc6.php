<?php

/* default/header.html.twig */
class __TwigTemplate_9e5d65f4b38859eaec8c9494a34288f62135c5d5592d6cafb8a08f104f0aa529 extends Twig_Template
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
        $__internal_d24482900371840ee58972c1b5b4a3e92059a916e77fcf2fa9087f7d8ba579da = $this->env->getExtension("native_profiler");
        $__internal_d24482900371840ee58972c1b5b4a3e92059a916e77fcf2fa9087f7d8ba579da->enter($__internal_d24482900371840ee58972c1b5b4a3e92059a916e77fcf2fa9087f7d8ba579da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        // line 1
        echo "  <!-- Logo -->
  <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\" class=\"logo\" style=\"background:#FFFFFF;\">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class=\"logo-mini\"><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/garboAvatar.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"></span>
    <!-- logo for regular state and mobile devices -->
    <span class=\"logo-lg \"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/logo.png"), "html", null, true);
        echo "\" alt=\"User Image\"></span>
  </a>

  <!-- Header Navbar -->
  <nav id=\"elemento1\" class=\"navbar navbar-static-top\" role=\"navigation\">
    <!-- Sidebar toggle button-->
    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
      <span class=\"sr-only\">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class=\"navbar-custom-menu\">
      <ul class=\"nav navbar-nav\">
        <!-- Messages: style can be found in dropdown.less-->
        <li class=\"dropdown user user-menu\">
          <!-- Menu Toggle Button -->
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            <!-- The user image in the navbar-->
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/garboAvatar.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class=\"hidden-xs\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
          </a>
          <ul class=\"dropdown-menu\">
            <!-- The user image in the menu -->
            <li class=\"user-header\">
              <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/garboAvatar.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

              <p>
               Usuario: ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
              </p>
            </li>
            <!-- Menu Body -->

              <!-- /.row -->

            <!-- Menu Footer-->
            <li class=\"user-footer\">
              <div class=\"pull-left\">
                <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" class=\"btn btn-block btn-primary\">Ver Perfil</a>
              </div>
              <div class=\"pull-right\">
                <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-block btn-danger\">Salir</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>";
        
        $__internal_d24482900371840ee58972c1b5b4a3e92059a916e77fcf2fa9087f7d8ba579da->leave($__internal_d24482900371840ee58972c1b5b4a3e92059a916e77fcf2fa9087f7d8ba579da_prof);

    }

    public function getTemplateName()
    {
        return "default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 46,  87 => 43,  74 => 33,  68 => 30,  60 => 25,  55 => 23,  35 => 6,  30 => 4,  25 => 2,  22 => 1,);
    }
}
/*   <!-- Logo -->*/
/*   <a href="{{ path('inicio') }}" class="logo" style="background:#FFFFFF;">*/
/*     <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*     <span class="logo-mini"><img src="{{ asset('assets/dist/img/garboAvatar.jpg') }}" class="img-circle" alt="User Image"></span>*/
/*     <!-- logo for regular state and mobile devices -->*/
/*     <span class="logo-lg "><img src="{{ asset('assets/dist/img/logo.png') }}" alt="User Image"></span>*/
/*   </a>*/
/* */
/*   <!-- Header Navbar -->*/
/*   <nav id="elemento1" class="navbar navbar-static-top" role="navigation">*/
/*     <!-- Sidebar toggle button-->*/
/*     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*       <span class="sr-only">Toggle navigation</span>*/
/*     </a>*/
/*     <!-- Navbar Right Menu -->*/
/*     <div class="navbar-custom-menu">*/
/*       <ul class="nav navbar-nav">*/
/*         <!-- Messages: style can be found in dropdown.less-->*/
/*         <li class="dropdown user user-menu">*/
/*           <!-- Menu Toggle Button -->*/
/*           <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*             <!-- The user image in the navbar-->*/
/*             <img src="{{ asset('assets/dist/img/garboAvatar.jpg') }}" class="user-image" alt="User Image">*/
/*             <!-- hidden-xs hides the username on small devices so only the image appears. -->*/
/*             <span class="hidden-xs">{{ app.user.username}}</span>*/
/*           </a>*/
/*           <ul class="dropdown-menu">*/
/*             <!-- The user image in the menu -->*/
/*             <li class="user-header">*/
/*               <img src="{{ asset('assets/dist/img/garboAvatar.jpg') }}" class="img-circle" alt="User Image">*/
/* */
/*               <p>*/
/*                Usuario: {{ app.user.username }}*/
/*               </p>*/
/*             </li>*/
/*             <!-- Menu Body -->*/
/* */
/*               <!-- /.row -->*/
/* */
/*             <!-- Menu Footer-->*/
/*             <li class="user-footer">*/
/*               <div class="pull-left">*/
/*                 <a href="{{ path('fos_user_profile_show') }}" class="btn btn-block btn-primary">Ver Perfil</a>*/
/*               </div>*/
/*               <div class="pull-right">*/
/*                 <a href="{{ path('fos_user_security_logout') }}" class="btn btn-block btn-danger">Salir</a>*/
/*               </div>*/
/*             </li>*/
/*           </ul>*/
/*         </li>*/
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
