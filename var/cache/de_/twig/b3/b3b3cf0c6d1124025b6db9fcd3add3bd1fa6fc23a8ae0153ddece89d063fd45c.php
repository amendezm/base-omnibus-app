<?php

/* :model:index.html.twig */
class __TwigTemplate_7e3f8bab2549f236e9c32d1c59d1e122948d44a8367a352871f37c11892157cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd75cf57849f63ed9dd17d0a5cd5fa0207e3d2f0656fd0d009a6308ac9739a20 = $this->env->getExtension("native_profiler");
        $__internal_cd75cf57849f63ed9dd17d0a5cd5fa0207e3d2f0656fd0d009a6308ac9739a20->enter($__internal_cd75cf57849f63ed9dd17d0a5cd5fa0207e3d2f0656fd0d009a6308ac9739a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":model:index.html.twig"));

        // line 1
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["tablet"]) ? $context["tablet"] : $this->getContext($context, "tablet")));
        echo "
";
        
        $__internal_cd75cf57849f63ed9dd17d0a5cd5fa0207e3d2f0656fd0d009a6308ac9739a20->leave($__internal_cd75cf57849f63ed9dd17d0a5cd5fa0207e3d2f0656fd0d009a6308ac9739a20_prof);

    }

    public function getTemplateName()
    {
        return ":model:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ dump(tablet) }}*/
/* */
