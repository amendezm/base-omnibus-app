<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5da42d211bf018575c7f8a62737346b3e8757939e0d06baae37d4c893b2b3a05 extends Twig_Template
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
        $__internal_ab9f8ac6218c071a0cd64ce6dab83b87a2c137ce053df91180ed26d2b2b55303 = $this->env->getExtension("native_profiler");
        $__internal_ab9f8ac6218c071a0cd64ce6dab83b87a2c137ce053df91180ed26d2b2b55303->enter($__internal_ab9f8ac6218c071a0cd64ce6dab83b87a2c137ce053df91180ed26d2b2b55303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ab9f8ac6218c071a0cd64ce6dab83b87a2c137ce053df91180ed26d2b2b55303->leave($__internal_ab9f8ac6218c071a0cd64ce6dab83b87a2c137ce053df91180ed26d2b2b55303_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
