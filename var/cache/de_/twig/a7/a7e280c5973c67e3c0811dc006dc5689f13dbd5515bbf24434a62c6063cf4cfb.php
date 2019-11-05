<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0495d7c278b8b26f14f06b5f40ef95d05a5562a75433e6a628a092b4704e6260 extends Twig_Template
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
        $__internal_b3b1197c558d49a03e0bd4eff57a185f3b7fdcf460612d4dffce82a44e2eed9c = $this->env->getExtension("native_profiler");
        $__internal_b3b1197c558d49a03e0bd4eff57a185f3b7fdcf460612d4dffce82a44e2eed9c->enter($__internal_b3b1197c558d49a03e0bd4eff57a185f3b7fdcf460612d4dffce82a44e2eed9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b3b1197c558d49a03e0bd4eff57a185f3b7fdcf460612d4dffce82a44e2eed9c->leave($__internal_b3b1197c558d49a03e0bd4eff57a185f3b7fdcf460612d4dffce82a44e2eed9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
