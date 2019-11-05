<?php

/* AppBundle:Default:ayuda.html.twig */
class __TwigTemplate_203a17ee16e460e823a07cd9ce88ce107c547cbdb89a38a318c5be19e9e25457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Default:ayuda.html.twig", 1);
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
        $__internal_61fe0b08e487491ef5e945d3a37f1310b016cb1da8e74a6a803391ad69027726 = $this->env->getExtension("native_profiler");
        $__internal_61fe0b08e487491ef5e945d3a37f1310b016cb1da8e74a6a803391ad69027726->enter($__internal_61fe0b08e487491ef5e945d3a37f1310b016cb1da8e74a6a803391ad69027726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:ayuda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61fe0b08e487491ef5e945d3a37f1310b016cb1da8e74a6a803391ad69027726->leave($__internal_61fe0b08e487491ef5e945d3a37f1310b016cb1da8e74a6a803391ad69027726_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4bce872fbe0b7831cc8d953d273b09f2728bea73a311bfe7493dcaab4620c5d = $this->env->getExtension("native_profiler");
        $__internal_c4bce872fbe0b7831cc8d953d273b09f2728bea73a311bfe7493dcaab4620c5d->enter($__internal_c4bce872fbe0b7831cc8d953d273b09f2728bea73a311bfe7493dcaab4620c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4bce872fbe0b7831cc8d953d273b09f2728bea73a311bfe7493dcaab4620c5d->leave($__internal_c4bce872fbe0b7831cc8d953d273b09f2728bea73a311bfe7493dcaab4620c5d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:ayuda.html.twig";
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
