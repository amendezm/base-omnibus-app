<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_465e579e40afea51ba31ae7214aaf8629bcead81bafd14499057cc410b241bc7 extends Twig_Template
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
        $__internal_a3b7358fb644642b7ae5705938f6962d79592184e2574a91feddc3bae137b0ee = $this->env->getExtension("native_profiler");
        $__internal_a3b7358fb644642b7ae5705938f6962d79592184e2574a91feddc3bae137b0ee->enter($__internal_a3b7358fb644642b7ae5705938f6962d79592184e2574a91feddc3bae137b0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a3b7358fb644642b7ae5705938f6962d79592184e2574a91feddc3bae137b0ee->leave($__internal_a3b7358fb644642b7ae5705938f6962d79592184e2574a91feddc3bae137b0ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
