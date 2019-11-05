<?php

/* @App/Default/ayuda.html.twig */
class __TwigTemplate_46f01c4db460cddc5b61cd4d2991d9bb0870ce7b755da035957342c7828efed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Default/ayuda.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b20e754b3563d563d03b1e3cdf8942516dcb5c49ab4017d99975c32491d573b = $this->env->getExtension("native_profiler");
        $__internal_5b20e754b3563d563d03b1e3cdf8942516dcb5c49ab4017d99975c32491d573b->enter($__internal_5b20e754b3563d563d03b1e3cdf8942516dcb5c49ab4017d99975c32491d573b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/ayuda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b20e754b3563d563d03b1e3cdf8942516dcb5c49ab4017d99975c32491d573b->leave($__internal_5b20e754b3563d563d03b1e3cdf8942516dcb5c49ab4017d99975c32491d573b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1a6fd6f4644258c8cc72616602cce66025ea595e2bb6e644a1deb934f51a8e8 = $this->env->getExtension("native_profiler");
        $__internal_e1a6fd6f4644258c8cc72616602cce66025ea595e2bb6e644a1deb934f51a8e8->enter($__internal_e1a6fd6f4644258c8cc72616602cce66025ea595e2bb6e644a1deb934f51a8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"panel row\">
    <table id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">
        <div >
            <h3 class=\"letra2\"> Cómo insertar una nueva demanda?</h3>
            <p class=\"text-justify\">
                <img class=\"nav\" src='";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Nueva Demanda.jpg"), "html", null, true);
        echo "'  />
            </p>
        </div>
    </table>

</div>
<div>
        <div >
            <h3 class=\"letra2\">  Cómo insertar una nueva entidad? </h3>
            <p class=\"text-justify\">
                <img class=\"nav\" src='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Nueva Entidad.jpg"), "html", null, true);
        echo "'  />
            </p>
        </div>
    <div>
        <div >
            <h3 class=\"letra2\">  Cómo insertar un nuevo producto? </h3>
            <p class=\"text-justify\">
                <img class=\"nav\" src='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Nuevo Producto.jpg"), "html", null, true);
        echo "'  />
            </p>
        </div>

";
        
        $__internal_e1a6fd6f4644258c8cc72616602cce66025ea595e2bb6e644a1deb934f51a8e8->leave($__internal_e1a6fd6f4644258c8cc72616602cce66025ea595e2bb6e644a1deb934f51a8e8_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/ayuda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  60 => 19,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="panel row">*/
/*     <table id="sample-table-2" class="table table-striped table-bordered table-hover">*/
/*         <div >*/
/*             <h3 class="letra2"> Cómo insertar una nueva demanda?</h3>*/
/*             <p class="text-justify">*/
/*                 <img class="nav" src='{{ asset('Nueva Demanda.jpg') }}'  />*/
/*             </p>*/
/*         </div>*/
/*     </table>*/
/* */
/* </div>*/
/* <div>*/
/*         <div >*/
/*             <h3 class="letra2">  Cómo insertar una nueva entidad? </h3>*/
/*             <p class="text-justify">*/
/*                 <img class="nav" src='{{ asset('Nueva Entidad.jpg') }}'  />*/
/*             </p>*/
/*         </div>*/
/*     <div>*/
/*         <div >*/
/*             <h3 class="letra2">  Cómo insertar un nuevo producto? </h3>*/
/*             <p class="text-justify">*/
/*                 <img class="nav" src='{{ asset('Nuevo Producto.jpg') }}'  />*/
/*             </p>*/
/*         </div>*/
/* */
/* {% endblock %}*/
/* */
