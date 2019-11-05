<?php

/* frontend.html.twig */
class __TwigTemplate_69f705ffa44f2e296ead1c4acac7b65ce5b8fe88b634dffd6ef0afb21155e090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::index.html.twig", "frontend.html.twig", 1);
        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'content_header' => array($this, 'block_content_header'),
            'content_main' => array($this, 'block_content_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7ab0af59d79cb0f538b5a5aa27884355a99502a5e6f9093f3b754dbb61f8629 = $this->env->getExtension("native_profiler");
        $__internal_b7ab0af59d79cb0f538b5a5aa27884355a99502a5e6f9093f3b754dbb61f8629->enter($__internal_b7ab0af59d79cb0f538b5a5aa27884355a99502a5e6f9093f3b754dbb61f8629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7ab0af59d79cb0f538b5a5aa27884355a99502a5e6f9093f3b754dbb61f8629->leave($__internal_b7ab0af59d79cb0f538b5a5aa27884355a99502a5e6f9093f3b754dbb61f8629_prof);

    }

    // line 3
    public function block_id($context, array $blocks = array())
    {
        $__internal_5d6405e297244f04a90c56c7f394793a4b99137e17134641ef12515f37b39da1 = $this->env->getExtension("native_profiler");
        $__internal_5d6405e297244f04a90c56c7f394793a4b99137e17134641ef12515f37b39da1->enter($__internal_5d6405e297244f04a90c56c7f394793a4b99137e17134641ef12515f37b39da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "sidebar-mini skin-blue";
        
        $__internal_5d6405e297244f04a90c56c7f394793a4b99137e17134641ef12515f37b39da1->leave($__internal_5d6405e297244f04a90c56c7f394793a4b99137e17134641ef12515f37b39da1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d32aa43d4f5925a1b2d0d6af5ecc1b362d9664f7aad673ac13d90d62affe3f1a = $this->env->getExtension("native_profiler");
        $__internal_d32aa43d4f5925a1b2d0d6af5ecc1b362d9664f7aad673ac13d90d62affe3f1a->enter($__internal_d32aa43d4f5925a1b2d0d6af5ecc1b362d9664f7aad673ac13d90d62affe3f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"wrapper\">

      <!-- Main Header -->
      <header class=\"main-header\">
          ";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 13
        echo "      </header>

      <!-- Left side column. contains the logo and sidebar -->
      <aside class=\"main-sidebar\">
          ";
        // line 17
        $this->displayBlock('sidebar', $context, $blocks);
        // line 20
        echo "      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
          ";
        // line 25
        $this->displayBlock('content_header', $context, $blocks);
        // line 47
        echo "          <section class=\"content\">
              <!-- Your Page Content Here -->
              <!-- Main content -->
              ";
        // line 50
        $this->displayBlock('content_main', $context, $blocks);
        // line 53
        echo "              <!-- /.content -->
          </section>
      </div>
      <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer id=\"elemento4\" style=\"text-align: center\" class=\"main-footer\">
            <!-- To the right -->
            <div class=\"pull-right hidden-xs\">

            </div>
            <!-- Default to the left -->
            <strong>Sistema para el cálculo y distribución de recursos  </strong>
            ";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "  &copy; Empresa Garbo
            <br>

        </footer>
    </div>
<!-- ./wrapper -->

";
        
        $__internal_d32aa43d4f5925a1b2d0d6af5ecc1b362d9664f7aad673ac13d90d62affe3f1a->leave($__internal_d32aa43d4f5925a1b2d0d6af5ecc1b362d9664f7aad673ac13d90d62affe3f1a_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_ef9ae84b946e813c8db28d13afddc59c39591c4d18bb805377737eb869479570 = $this->env->getExtension("native_profiler");
        $__internal_ef9ae84b946e813c8db28d13afddc59c39591c4d18bb805377737eb869479570->enter($__internal_ef9ae84b946e813c8db28d13afddc59c39591c4d18bb805377737eb869479570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "              ";
        $this->loadTemplate(":default:header.html.twig", "frontend.html.twig", 11)->display($context);
        // line 12
        echo "          ";
        
        $__internal_ef9ae84b946e813c8db28d13afddc59c39591c4d18bb805377737eb869479570->leave($__internal_ef9ae84b946e813c8db28d13afddc59c39591c4d18bb805377737eb869479570_prof);

    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_040b141df5b0671d4f97fed5051344c7cca7222090ec503dc2fb5c2ad9334643 = $this->env->getExtension("native_profiler");
        $__internal_040b141df5b0671d4f97fed5051344c7cca7222090ec503dc2fb5c2ad9334643->enter($__internal_040b141df5b0671d4f97fed5051344c7cca7222090ec503dc2fb5c2ad9334643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 18
        echo "              ";
        $this->loadTemplate(":default:sidebar.html.twig", "frontend.html.twig", 18)->display($context);
        // line 19
        echo "          ";
        
        $__internal_040b141df5b0671d4f97fed5051344c7cca7222090ec503dc2fb5c2ad9334643->leave($__internal_040b141df5b0671d4f97fed5051344c7cca7222090ec503dc2fb5c2ad9334643_prof);

    }

    // line 25
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_cac9c1727bdd36ec2d30e38f7d2f4eaf6c5c206e0fb1ad9af5c19cb9fd9693dd = $this->env->getExtension("native_profiler");
        $__internal_cac9c1727bdd36ec2d30e38f7d2f4eaf6c5c206e0fb1ad9af5c19cb9fd9693dd->enter($__internal_cac9c1727bdd36ec2d30e38f7d2f4eaf6c5c206e0fb1ad9af5c19cb9fd9693dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 26
        echo "                <div class=\"row\">
                    <div class=\"col-md-1\"></div>
                    <div class=\"col-md-10\">
                        <br>
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["flashMessage"]) {
            // line 31
            echo "                            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo " fade in \">
                                <button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                ";
            // line 33
            if ($this->getAttribute($context["flashMessage"], "title", array(), "any", true, true)) {
                // line 34
                echo "                                    <h4>";
                if ($this->getAttribute($context["flashMessage"], "icon", array(), "any", true, true)) {
                    echo "<i class=\"icon ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["flashMessage"], "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                echo " <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["flashMessage"], "title", array()), "html", null, true);
                echo "</strong></h4>
                                    ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["flashMessage"], "message", array()), "html", null, true);
                echo "
                                ";
            } else {
                // line 37
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "
                                ";
            }
            // line 39
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    </div>
                    <div class=\"col-md-1\"></div>
                </div>
              ";
        // line 45
        echo "
          ";
        
        $__internal_cac9c1727bdd36ec2d30e38f7d2f4eaf6c5c206e0fb1ad9af5c19cb9fd9693dd->leave($__internal_cac9c1727bdd36ec2d30e38f7d2f4eaf6c5c206e0fb1ad9af5c19cb9fd9693dd_prof);

    }

    // line 50
    public function block_content_main($context, array $blocks = array())
    {
        $__internal_92d3fef6b7ba6ba0ea7a24464ccbc8afa2d5dd146ce2b7fb8cc92f7a4f63ac2f = $this->env->getExtension("native_profiler");
        $__internal_92d3fef6b7ba6ba0ea7a24464ccbc8afa2d5dd146ce2b7fb8cc92f7a4f63ac2f->enter($__internal_92d3fef6b7ba6ba0ea7a24464ccbc8afa2d5dd146ce2b7fb8cc92f7a4f63ac2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_main"));

        // line 51
        echo "
              ";
        
        $__internal_92d3fef6b7ba6ba0ea7a24464ccbc8afa2d5dd146ce2b7fb8cc92f7a4f63ac2f->leave($__internal_92d3fef6b7ba6ba0ea7a24464ccbc8afa2d5dd146ce2b7fb8cc92f7a4f63ac2f_prof);

    }

    public function getTemplateName()
    {
        return "frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 51,  217 => 50,  209 => 45,  204 => 41,  197 => 39,  191 => 37,  186 => 35,  175 => 34,  173 => 33,  167 => 31,  163 => 30,  157 => 26,  151 => 25,  144 => 19,  141 => 18,  135 => 17,  128 => 12,  125 => 11,  119 => 10,  104 => 66,  89 => 53,  87 => 50,  82 => 47,  80 => 25,  73 => 20,  71 => 17,  65 => 13,  63 => 10,  57 => 6,  51 => 5,  39 => 3,  11 => 1,);
    }
}
/* {% extends '::index.html.twig' %}*/
/* */
/* {% block id 'sidebar-mini skin-blue' %}*/
/* */
/* {% block body %}*/
/*     <div class="wrapper">*/
/* */
/*       <!-- Main Header -->*/
/*       <header class="main-header">*/
/*           {% block header %}*/
/*               {% include ':default:header.html.twig' %}*/
/*           {% endblock %}*/
/*       </header>*/
/* */
/*       <!-- Left side column. contains the logo and sidebar -->*/
/*       <aside class="main-sidebar">*/
/*           {% block sidebar %}*/
/*               {% include ':default:sidebar.html.twig' %}*/
/*           {% endblock %}*/
/*       </aside>*/
/* */
/*       <!-- Content Wrapper. Contains page content -->*/
/*       <div class="content-wrapper">*/
/*         <!-- Content Header (Page header) -->*/
/*           {% block content_header %}*/
/*                 <div class="row">*/
/*                     <div class="col-md-1"></div>*/
/*                     <div class="col-md-10">*/
/*                         <br>*/
/*                         {% for type, flashMessage in app.session.flashbag.all() %}*/
/*                             <div class="alert alert-{{ type }} fade in ">*/
/*                                 <button aria-hidden="true" class="close" data-dismiss="alert" type="button">×</button>*/
/*                                 {% if flashMessage.title is defined %}*/
/*                                     <h4>{% if flashMessage.icon is defined %}<i class="icon {{ flashMessage.icon }}"></i>{% endif %} <strong>{{ flashMessage.title }}</strong></h4>*/
/*                                     {{ flashMessage.message }}*/
/*                                 {% else %}*/
/*                                     {{ type }}*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="col-md-1"></div>*/
/*                 </div>*/
/*               {# include ':default:content-header.html.twig' #}*/
/* */
/*           {% endblock %}*/
/*           <section class="content">*/
/*               <!-- Your Page Content Here -->*/
/*               <!-- Main content -->*/
/*               {% block content_main %}*/
/* */
/*               {% endblock %}*/
/*               <!-- /.content -->*/
/*           </section>*/
/*       </div>*/
/*       <!-- /.content-wrapper -->*/
/* */
/*         <!-- Main Footer -->*/
/*         <footer id="elemento4" style="text-align: center" class="main-footer">*/
/*             <!-- To the right -->*/
/*             <div class="pull-right hidden-xs">*/
/* */
/*             </div>*/
/*             <!-- Default to the left -->*/
/*             <strong>Sistema para el cálculo y distribución de recursos  </strong>*/
/*             {{'now' | date('d-m-Y')}}  &copy; Empresa Garbo*/
/*             <br>*/
/* */
/*         </footer>*/
/*     </div>*/
/* <!-- ./wrapper -->*/
/* */
/* {% endblock %}*/
