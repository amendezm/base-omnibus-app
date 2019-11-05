<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_9b6fb781a52a0c645f58c42979a08a31c36e366fc728919bd9d710ca1e1e0f2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error.html.twig", 2);
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
        $__internal_60be5e19e1837d116a9694e07f0e29314847f9e89e6062d9e4dd9f54eaebd7af = $this->env->getExtension("native_profiler");
        $__internal_60be5e19e1837d116a9694e07f0e29314847f9e89e6062d9e4dd9f54eaebd7af->enter($__internal_60be5e19e1837d116a9694e07f0e29314847f9e89e6062d9e4dd9f54eaebd7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60be5e19e1837d116a9694e07f0e29314847f9e89e6062d9e4dd9f54eaebd7af->leave($__internal_60be5e19e1837d116a9694e07f0e29314847f9e89e6062d9e4dd9f54eaebd7af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_532f6512e34ba37eaeb6f003e2b139c7b4713db38e3f1240dd5ce539394804aa = $this->env->getExtension("native_profiler");
        $__internal_532f6512e34ba37eaeb6f003e2b139c7b4713db38e3f1240dd5ce539394804aa->enter($__internal_532f6512e34ba37eaeb6f003e2b139c7b4713db38e3f1240dd5ce539394804aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Page not found</h1>
    ";
        // line 6
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 7
            echo "        ";
            // line 8
            echo "    ";
        }
        // line 9
        echo "    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">return to the homepage</a>.
    </p>
";
        
        $__internal_532f6512e34ba37eaeb6f003e2b139c7b4713db38e3f1240dd5ce539394804aa->leave($__internal_532f6512e34ba37eaeb6f003e2b139c7b4713db38e3f1240dd5ce539394804aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  51 => 9,  48 => 8,  46 => 7,  43 => 6,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# app/Resources/TwigBundle/views/Exception/error404.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h1>Page not found</h1>*/
/*     {# example security usage, see below #}*/
/*     {% if is_granted('IS_AUTHENTICATED_FULLY' ) %}*/
/*         {# ... #}*/
/*     {% endif %}*/
/*     <p>*/
/*         The requested page couldn't be located. Checkout for any URL*/
/*         misspelling or <a href="{{ path('homepage' ) }}">return to the homepage</a>.*/
/*     </p>*/
/* {% endblock %}*/
