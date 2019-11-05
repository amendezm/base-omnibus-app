<?php

/* TwigBundle:Exception:error403.html.twig */
class __TwigTemplate_4954635f2bfebfd8208aaa49ff50f8c792ec3b597a85a93a36914b6f5ed7e42a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error403.html.twig", 2);
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
        $__internal_c464b3cedece69b73dae81fd5cf9f8eb0b145b50efcb85bee1f4b1f721ed3cc7 = $this->env->getExtension("native_profiler");
        $__internal_c464b3cedece69b73dae81fd5cf9f8eb0b145b50efcb85bee1f4b1f721ed3cc7->enter($__internal_c464b3cedece69b73dae81fd5cf9f8eb0b145b50efcb85bee1f4b1f721ed3cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c464b3cedece69b73dae81fd5cf9f8eb0b145b50efcb85bee1f4b1f721ed3cc7->leave($__internal_c464b3cedece69b73dae81fd5cf9f8eb0b145b50efcb85bee1f4b1f721ed3cc7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b52daa8aa942c0affa1a1b31c41d3ed33962209ce74ead50c313c2e830f95718 = $this->env->getExtension("native_profiler");
        $__internal_b52daa8aa942c0affa1a1b31c41d3ed33962209ce74ead50c313c2e830f95718->enter($__internal_b52daa8aa942c0affa1a1b31c41d3ed33962209ce74ead50c313c2e830f95718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b52daa8aa942c0affa1a1b31c41d3ed33962209ce74ead50c313c2e830f95718->leave($__internal_b52daa8aa942c0affa1a1b31c41d3ed33962209ce74ead50c313c2e830f95718_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error403.html.twig";
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
