<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_66b7a01db36000f52045c9b95f39027d0808dbddf2a34f94744b37e0f51f220f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error404.html.twig", 2);
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
        $__internal_6f5d43fc59c37992aea0ea3e6fade64d59c6c6f1272d4a0f7db6876b0fcf4153 = $this->env->getExtension("native_profiler");
        $__internal_6f5d43fc59c37992aea0ea3e6fade64d59c6c6f1272d4a0f7db6876b0fcf4153->enter($__internal_6f5d43fc59c37992aea0ea3e6fade64d59c6c6f1272d4a0f7db6876b0fcf4153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f5d43fc59c37992aea0ea3e6fade64d59c6c6f1272d4a0f7db6876b0fcf4153->leave($__internal_6f5d43fc59c37992aea0ea3e6fade64d59c6c6f1272d4a0f7db6876b0fcf4153_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c05df924ff27dc0c7b91f0b97822dbc0f01e70f7fe2890d3c473073235dd3c85 = $this->env->getExtension("native_profiler");
        $__internal_c05df924ff27dc0c7b91f0b97822dbc0f01e70f7fe2890d3c473073235dd3c85->enter($__internal_c05df924ff27dc0c7b91f0b97822dbc0f01e70f7fe2890d3c473073235dd3c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c05df924ff27dc0c7b91f0b97822dbc0f01e70f7fe2890d3c473073235dd3c85->leave($__internal_c05df924ff27dc0c7b91f0b97822dbc0f01e70f7fe2890d3c473073235dd3c85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
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
