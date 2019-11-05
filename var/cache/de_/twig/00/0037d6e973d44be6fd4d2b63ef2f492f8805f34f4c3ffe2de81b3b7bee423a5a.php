<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_826e968f36ff8293e98ae1ebd875271147260152f5d8a2321e61c66bebd3e307 extends Twig_Template
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
        $__internal_7484cfe6ed333d280d2a4f6ad42d196859096b58596ceb6cab35bf1633d39983 = $this->env->getExtension("native_profiler");
        $__internal_7484cfe6ed333d280d2a4f6ad42d196859096b58596ceb6cab35bf1633d39983->enter($__internal_7484cfe6ed333d280d2a4f6ad42d196859096b58596ceb6cab35bf1633d39983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7484cfe6ed333d280d2a4f6ad42d196859096b58596ceb6cab35bf1633d39983->leave($__internal_7484cfe6ed333d280d2a4f6ad42d196859096b58596ceb6cab35bf1633d39983_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
