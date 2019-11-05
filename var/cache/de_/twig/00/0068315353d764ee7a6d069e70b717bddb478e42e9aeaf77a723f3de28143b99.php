<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2bd2167b96b5cca2ad9d13cb12e01d1f6b24b96c600d2cdb3e099d8147bfb1ff extends Twig_Template
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
        $__internal_93c725155c081d91335888a4231a82aba4e53eaa9a7a45080ae1451a86505bf7 = $this->env->getExtension("native_profiler");
        $__internal_93c725155c081d91335888a4231a82aba4e53eaa9a7a45080ae1451a86505bf7->enter($__internal_93c725155c081d91335888a4231a82aba4e53eaa9a7a45080ae1451a86505bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_93c725155c081d91335888a4231a82aba4e53eaa9a7a45080ae1451a86505bf7->leave($__internal_93c725155c081d91335888a4231a82aba4e53eaa9a7a45080ae1451a86505bf7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
