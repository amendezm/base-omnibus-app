<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3993258105908b15e24bd01a48617a96c9dbba4f94eb0200a88f8e1826282281 extends Twig_Template
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
        $__internal_feb3c84ac1bdde3731c2f780146a31d12c65e5e58ff837c2f84921dbe9dd6b8f = $this->env->getExtension("native_profiler");
        $__internal_feb3c84ac1bdde3731c2f780146a31d12c65e5e58ff837c2f84921dbe9dd6b8f->enter($__internal_feb3c84ac1bdde3731c2f780146a31d12c65e5e58ff837c2f84921dbe9dd6b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_feb3c84ac1bdde3731c2f780146a31d12c65e5e58ff837c2f84921dbe9dd6b8f->leave($__internal_feb3c84ac1bdde3731c2f780146a31d12c65e5e58ff837c2f84921dbe9dd6b8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
