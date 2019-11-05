<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_257030326188a09a851935f53918e43da688d25d6cdc2b43a0e348eef6ba5501 extends Twig_Template
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
        $__internal_d390229ad8ade43a5e482e3ec4d1fce9e3e67c8bc8904d9bd7a948a0491b1d7e = $this->env->getExtension("native_profiler");
        $__internal_d390229ad8ade43a5e482e3ec4d1fce9e3e67c8bc8904d9bd7a948a0491b1d7e->enter($__internal_d390229ad8ade43a5e482e3ec4d1fce9e3e67c8bc8904d9bd7a948a0491b1d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d390229ad8ade43a5e482e3ec4d1fce9e3e67c8bc8904d9bd7a948a0491b1d7e->leave($__internal_d390229ad8ade43a5e482e3ec4d1fce9e3e67c8bc8904d9bd7a948a0491b1d7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
