<?php

/* AppBundle:Default:error.html.twig */
class __TwigTemplate_86fb5953ad103c3f17e4e58740f5a95d4473fe744a580842dc650881aafa63dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "AppBundle:Default:error.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0195c2c8e99b7ec2019a48e4251e7905b1b2819d8bafff841ce53f7ab2f7df93 = $this->env->getExtension("native_profiler");
        $__internal_0195c2c8e99b7ec2019a48e4251e7905b1b2819d8bafff841ce53f7ab2f7df93->enter($__internal_0195c2c8e99b7ec2019a48e4251e7905b1b2819d8bafff841ce53f7ab2f7df93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0195c2c8e99b7ec2019a48e4251e7905b1b2819d8bafff841ce53f7ab2f7df93->leave($__internal_0195c2c8e99b7ec2019a48e4251e7905b1b2819d8bafff841ce53f7ab2f7df93_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_f6b737a4491c496f1bfecb061003827032d9482bd44fbbbdd1fd57d503775710 = $this->env->getExtension("native_profiler");
        $__internal_f6b737a4491c496f1bfecb061003827032d9482bd44fbbbdd1fd57d503775710->enter($__internal_f6b737a4491c496f1bfecb061003827032d9482bd44fbbbdd1fd57d503775710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<i class=\"letra2\">Usted no puede acceder a esta dirección, no es Administrador!</i>
    
";
        
        $__internal_f6b737a4491c496f1bfecb061003827032d9482bd44fbbbdd1fd57d503775710->leave($__internal_f6b737a4491c496f1bfecb061003827032d9482bd44fbbbdd1fd57d503775710_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <i class="letra2">Usted no puede acceder a esta dirección, no es Administrador!</i>*/
/*     */
/* {% endblock %}*/
/* */
