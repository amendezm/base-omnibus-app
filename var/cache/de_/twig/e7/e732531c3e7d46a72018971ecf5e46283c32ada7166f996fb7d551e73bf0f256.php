<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_db15fa72ce0a42c34fdb9f3fbf8867ee616e4ca4fafa55ced4ee20e6ace85bfa extends Twig_Template
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
        $__internal_fc0619bcd3beca4dfff6c7490c85f24bee0fc4eceaca3622308c46d68ba66d89 = $this->env->getExtension("native_profiler");
        $__internal_fc0619bcd3beca4dfff6c7490c85f24bee0fc4eceaca3622308c46d68ba66d89->enter($__internal_fc0619bcd3beca4dfff6c7490c85f24bee0fc4eceaca3622308c46d68ba66d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_fc0619bcd3beca4dfff6c7490c85f24bee0fc4eceaca3622308c46d68ba66d89->leave($__internal_fc0619bcd3beca4dfff6c7490c85f24bee0fc4eceaca3622308c46d68ba66d89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
