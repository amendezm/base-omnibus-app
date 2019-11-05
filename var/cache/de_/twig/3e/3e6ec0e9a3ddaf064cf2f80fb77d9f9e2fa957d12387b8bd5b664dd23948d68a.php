<?php

/* ::frontend.html.twig */
class __TwigTemplate_deba71eaeda7bb03bfa218ed4b730bc2a41701fe506eb1780421b50b3a9cdc89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::index.html.twig", "::frontend.html.twig", 1);
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
        $__internal_bf2d77eb6dab7a4905cb6c2c2e68a70ce0160bdc7216d70c42ed6a8a908b22cc = $this->env->getExtension("native_profiler");
        $__internal_bf2d77eb6dab7a4905cb6c2c2e68a70ce0160bdc7216d70c42ed6a8a908b22cc->enter($__internal_bf2d77eb6dab7a4905cb6c2c2e68a70ce0160bdc7216d70c42ed6a8a908b22cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::frontend.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf2d77eb6dab7a4905cb6c2c2e68a70ce0160bdc7216d70c42ed6a8a908b22cc->leave($__internal_bf2d77eb6dab7a4905cb6c2c2e68a70ce0160bdc7216d70c42ed6a8a908b22cc_prof);

    }

    // line 3
    public function block_id($context, array $blocks = array())
    {
        $__internal_d9372b84d11d86e9f4ba79ab8a5f03aba1f7603611ecf3afee731e32313280a3 = $this->env->getExtension("native_profiler");
        $__internal_d9372b84d11d86e9f4ba79ab8a5f03aba1f7603611ecf3afee731e32313280a3->enter($__internal_d9372b84d11d86e9f4ba79ab8a5f03aba1f7603611ecf3afee731e32313280a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "sidebar-mini skin-blue";
        
        $__internal_d9372b84d11d86e9f4ba79ab8a5f03aba1f7603611ecf3afee731e32313280a3->leave($__internal_d9372b84d11d86e9f4ba79ab8a5f03aba1f7603611ecf3afee731e32313280a3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_acb33f6072d2217b615e24e546bf1fadbf9b44af5ece9c2271a5181983c72c79 = $this->env->getExtension("native_profiler");
        $__internal_acb33f6072d2217b615e24e546bf1fadbf9b44af5ece9c2271a5181983c72c79->enter($__internal_acb33f6072d2217b615e24e546bf1fadbf9b44af5ece9c2271a5181983c72c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_acb33f6072d2217b615e24e546bf1fadbf9b44af5ece9c2271a5181983c72c79->leave($__internal_acb33f6072d2217b615e24e546bf1fadbf9b44af5ece9c2271a5181983c72c79_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_715fdb8f0ce930ced535d6efcf1164769072a94e6463a71542b239f78771beae = $this->env->getExtension("native_profiler");
        $__internal_715fdb8f0ce930ced535d6efcf1164769072a94e6463a71542b239f78771beae->enter($__internal_715fdb8f0ce930ced535d6efcf1164769072a94e6463a71542b239f78771beae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "              ";
        $this->loadTemplate(":default:header.html.twig", "::frontend.html.twig", 11)->display($context);
        // line 12
        echo "          ";
        
        $__internal_715fdb8f0ce930ced535d6efcf1164769072a94e6463a71542b239f78771beae->leave($__internal_715fdb8f0ce930ced535d6efcf1164769072a94e6463a71542b239f78771beae_prof);

    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_eb88464e3ac53001fb9ec1a6a4d2e48fc9f546734f1ad8a6f29ba1436e496524 = $this->env->getExtension("native_profiler");
        $__internal_eb88464e3ac53001fb9ec1a6a4d2e48fc9f546734f1ad8a6f29ba1436e496524->enter($__internal_eb88464e3ac53001fb9ec1a6a4d2e48fc9f546734f1ad8a6f29ba1436e496524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 18
        echo "              ";
        $this->loadTemplate(":default:sidebar.html.twig", "::frontend.html.twig", 18)->display($context);
        // line 19
        echo "          ";
        
        $__internal_eb88464e3ac53001fb9ec1a6a4d2e48fc9f546734f1ad8a6f29ba1436e496524->leave($__internal_eb88464e3ac53001fb9ec1a6a4d2e48fc9f546734f1ad8a6f29ba1436e496524_prof);

    }

    // line 25
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_35cd8b1ad409e49c3966c7211a0674a2a367dcc4402761eb2733ceea3a57172e = $this->env->getExtension("native_profiler");
        $__internal_35cd8b1ad409e49c3966c7211a0674a2a367dcc4402761eb2733ceea3a57172e->enter($__internal_35cd8b1ad409e49c3966c7211a0674a2a367dcc4402761eb2733ceea3a57172e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

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
        
        $__internal_35cd8b1ad409e49c3966c7211a0674a2a367dcc4402761eb2733ceea3a57172e->leave($__internal_35cd8b1ad409e49c3966c7211a0674a2a367dcc4402761eb2733ceea3a57172e_prof);

    }

    // line 50
    public function block_content_main($context, array $blocks = array())
    {
        $__internal_2f164a6794814305447f680c7448b536254ceb773cb47615606389b36ff29767 = $this->env->getExtension("native_profiler");
        $__internal_2f164a6794814305447f680c7448b536254ceb773cb47615606389b36ff29767->enter($__internal_2f164a6794814305447f680c7448b536254ceb773cb47615606389b36ff29767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_main"));

        // line 51
        echo "
              ";
        
        $__internal_2f164a6794814305447f680c7448b536254ceb773cb47615606389b36ff29767->leave($__internal_2f164a6794814305447f680c7448b536254ceb773cb47615606389b36ff29767_prof);

    }

    public function getTemplateName()
    {
        return "::frontend.html.twig";
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
