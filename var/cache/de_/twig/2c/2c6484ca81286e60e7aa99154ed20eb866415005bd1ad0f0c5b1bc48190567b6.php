<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_35eea2771d54c752697de35281a7d6fb3a1c9e3be58ef948b86c838274d3beab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error.html.twig", 2);
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
        $__internal_df4a3bbb51235727db322b9895c4bb1b23175ed62de7d6de7875ae490c1df1af = $this->env->getExtension("native_profiler");
        $__internal_df4a3bbb51235727db322b9895c4bb1b23175ed62de7d6de7875ae490c1df1af->enter($__internal_df4a3bbb51235727db322b9895c4bb1b23175ed62de7d6de7875ae490c1df1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df4a3bbb51235727db322b9895c4bb1b23175ed62de7d6de7875ae490c1df1af->leave($__internal_df4a3bbb51235727db322b9895c4bb1b23175ed62de7d6de7875ae490c1df1af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c2a4dbd805d2a499d880a272a151dbf01c86b631b571cea8155a789c272e936 = $this->env->getExtension("native_profiler");
        $__internal_0c2a4dbd805d2a499d880a272a151dbf01c86b631b571cea8155a789c272e936->enter($__internal_0c2a4dbd805d2a499d880a272a151dbf01c86b631b571cea8155a789c272e936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0c2a4dbd805d2a499d880a272a151dbf01c86b631b571cea8155a789c272e936->leave($__internal_0c2a4dbd805d2a499d880a272a151dbf01c86b631b571cea8155a789c272e936_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
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
