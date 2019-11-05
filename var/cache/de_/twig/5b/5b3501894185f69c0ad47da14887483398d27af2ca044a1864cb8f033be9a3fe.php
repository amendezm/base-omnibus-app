<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_bf125e88d506642187c24e218f2db6ce01a66e0ec0b4ef78e95653813fccd8a6 extends Twig_Template
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
        $__internal_4fb57cd692b361d44f9073e3d73c35c4de81a0af43d3d2d4f4904fffbe1bd6d3 = $this->env->getExtension("native_profiler");
        $__internal_4fb57cd692b361d44f9073e3d73c35c4de81a0af43d3d2d4f4904fffbe1bd6d3->enter($__internal_4fb57cd692b361d44f9073e3d73c35c4de81a0af43d3d2d4f4904fffbe1bd6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4fb57cd692b361d44f9073e3d73c35c4de81a0af43d3d2d4f4904fffbe1bd6d3->leave($__internal_4fb57cd692b361d44f9073e3d73c35c4de81a0af43d3d2d4f4904fffbe1bd6d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
