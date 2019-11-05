<?php

/* @App/Default/login.html.twig */
class __TwigTemplate_abd259bd1f410eba9fa01ec49a10fa896bf9337f13344dea368bb46b2b1e47f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Default/login.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 24
            echo "                    <div class=\"alert alert-danger alert-dismissible\">
                        <button aria-hidden=\"true\" data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button>
                        <i class=\"icon fa fa-shield\"></i>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "@App/Default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 49,  94 => 47,  79 => 35,  74 => 32,  70 => 30,  67 => 29,  61 => 26,  57 => 24,  55 => 23,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
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
