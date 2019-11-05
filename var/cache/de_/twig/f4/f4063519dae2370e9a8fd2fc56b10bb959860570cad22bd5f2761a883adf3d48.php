<?php

/* AppBundle:Default:login.html.twig */
class __TwigTemplate_be62ebdd5f000aecf31b21564d5fffc60f23d903fa022029d1e6f0cbcc1a3924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bd04a8051e39172c161baeef4f0038d869bf9c0e6918969e64e2671f1b312af = $this->env->getExtension("native_profiler");
        $__internal_6bd04a8051e39172c161baeef4f0038d869bf9c0e6918969e64e2671f1b312af->enter($__internal_6bd04a8051e39172c161baeef4f0038d869bf9c0e6918969e64e2671f1b312af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bd04a8051e39172c161baeef4f0038d869bf9c0e6918969e64e2671f1b312af->leave($__internal_6bd04a8051e39172c161baeef4f0038d869bf9c0e6918969e64e2671f1b312af_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_0fb69cfc4e2a480ecdd1a5cb72ef2ca785141243072bba8a7d6abfe4c4ea641d = $this->env->getExtension("native_profiler");
        $__internal_0fb69cfc4e2a480ecdd1a5cb72ef2ca785141243072bba8a7d6abfe4c4ea641d->enter($__internal_0fb69cfc4e2a480ecdd1a5cb72ef2ca785141243072bba8a7d6abfe4c4ea641d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"login-box \">
    <div>

        <div class=\"middle-box text-center loginscreen  animated fadeInDown\">
            <div>
                <div>
                    <div class=\"m-b-md\">
                        <img height=\"120\" width=\"150\" alt=\"image\" class=\"img-circle circle-border\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/img/logo_thg_circular.png"), "html", null, true);
        echo "\">
                    </div>

                </div>
            </div>

            <b><h1>Bienvenido</h1 ></b>
            <b><p style=\"font-size: 18px\">Un sistema especialmente diseñado y desarrollado para la Empresa Transporte Holguín.</b>
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <b> <p style=\"font-family: Arial\">Introduzca sus credenciales para poder entrar al sistema.</p>   </b>     <!-- /.login-logo -->
            <div class=\"login-box-body bg-gray\">
                ";
        // line 23
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 24
            echo "                    <div class=\"alert alert-danger alert-dismissible\">
                        <button aria-hidden=\"true\" data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button>
                        <i class=\"icon fa fa-shield\"></i>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 29
        echo "
                <form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                    ";
        // line 32
        echo "
                    <div class=\"form-group has-feedback\">

                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"  class=\"form-control\" placeholder=\"Usuario\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>


                    <div class=\"form-group has-feedback\">

                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Contraseña\" />
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block btn-flat\">Entrar</button>
                        </div>
                        <!-- /.col -->
                    </div>

                </form>
            </div>
            <!-- /.login-box-body -->
        </div>
        ";
        
        $__internal_0fb69cfc4e2a480ecdd1a5cb72ef2ca785141243072bba8a7d6abfe4c4ea641d->leave($__internal_0fb69cfc4e2a480ecdd1a5cb72ef2ca785141243072bba8a7d6abfe4c4ea641d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 49,  103 => 47,  88 => 35,  83 => 32,  79 => 30,  76 => 29,  70 => 26,  66 => 24,  64 => 23,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block contenido %}*/
/* <div class="login-box ">*/
/*     <div>*/
/* */
/*         <div class="middle-box text-center loginscreen  animated fadeInDown">*/
/*             <div>*/
/*                 <div>*/
/*                     <div class="m-b-md">*/
/*                         <img height="120" width="150" alt="image" class="img-circle circle-border" src="{{ asset('assets/dist/img/logo_thg_circular.png') }}">*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*             <b><h1>Bienvenido</h1 ></b>*/
/*             <b><p style="font-size: 18px">Un sistema especialmente diseñado y desarrollado para la Empresa Transporte Holguín.</b>*/
/*             <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->*/
/*             </p>*/
/*             <b> <p style="font-family: Arial">Introduzca sus credenciales para poder entrar al sistema.</p>   </b>     <!-- /.login-logo -->*/
/*             <div class="login-box-body bg-gray">*/
/*                 {% if error %}*/
/*                     <div class="alert alert-danger alert-dismissible">*/
/*                         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>*/
/*                         <i class="icon fa fa-shield"></i>{{ error.messageKey| trans(error.messageData, 'security' ) }}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 <form action="{{ path("login_check") }}" method="post">*/
/*                     {#<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />#}*/
/* */
/*                     <div class="form-group has-feedback">*/
/* */
/*                         <input type="text" id="username" name="_username" value="{{ last_username }}" required="required"  class="form-control" placeholder="Usuario"/>*/
/*                         <span class="glyphicon glyphicon-user form-control-feedback"></span>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="form-group has-feedback">*/
/* */
/*                         <input type="password" id="password" name="_password" required="required" class="form-control" placeholder="Contraseña" />*/
/*                         <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/*                         <div class="col-xs-12">*/
/*                             <button type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="btn btn-primary btn-block btn-flat">Entrar</button>*/
/*                         </div>*/
/*                         <!-- /.col -->*/
/*                     </div>*/
/* */
/*                 </form>*/
/*             </div>*/
/*             <!-- /.login-box-body -->*/
/*         </div>*/
/*         {% endblock %}*/
/*         {#<div class="login" >#}*/
/*         {#<form id="formLogin" name="formLogin" method="post" action="{{ path('login_check') }}" style="background-color: #CC7832" >#}*/
/*         {#<div class="row" style="background-color: #CC7832;">#}*/
/* */
/*         {#<div class="user">#}*/
/*         {#<input name="_username" placeholder="usuario" value="{{ last_username }}"#}*/
/*         {#style="border:0px; background:#FFF0C5"#}*/
/*         {#size="18" type="text" >#}*/
/*         {#</div>#}*/
/*         {#<div class="passw">#}*/
/*         {#<input id="password" placeholder="password" name="_password"#}*/
/*         {#style=" border:0px; background:#FFF0C5"#}*/
/*         {#size="18" type="PASSWORD">#}*/
/*         {#</div>#}*/
/*         {#<div id="button">#}*/
/* */
/*         {#<center> <button style="width: 100%;" type="submit" class="btn waves-effect waves-light" name="action" id="button1">#}*/
/*         {#<i class="material-icons right"></i>Aceptar#}*/
/*         {#</button></center>#}*/
/*         {#</div>#}*/
/* */
/*         {#</div>#}*/
/*         {#</form>#}*/
/*         {#</div>#}*/
/* */
/*         {#{% if error %}#}*/
/*         {#{% if error.message  == 'Bad credentials.' %}#}*/
/*         {#<div style="margin-top: 0px;padding-left: 0px;align-items: center"><h1#}*/
/*         {#style="color: white; background-color: red">Usuario o contraseña#}*/
/*         {#incorrectos</h1>#}*/
/*         {#</div>#}*/
/*         {#{% endif %}#}*/
/* {#{% endif %}#}*/
