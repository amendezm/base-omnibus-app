<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a9e38096c873b034ee7366d3de0ef19be4955feb7b2b3df809c85d2778c0f9b9 extends Twig_Template
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
        $__internal_c096283baaff8616c292cfb113d6e5a9c5762118d04ccb4ced4a5ea82f4e2133 = $this->env->getExtension("native_profiler");
        $__internal_c096283baaff8616c292cfb113d6e5a9c5762118d04ccb4ced4a5ea82f4e2133->enter($__internal_c096283baaff8616c292cfb113d6e5a9c5762118d04ccb4ced4a5ea82f4e2133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c096283baaff8616c292cfb113d6e5a9c5762118d04ccb4ced4a5ea82f4e2133->leave($__internal_c096283baaff8616c292cfb113d6e5a9c5762118d04ccb4ced4a5ea82f4e2133_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
