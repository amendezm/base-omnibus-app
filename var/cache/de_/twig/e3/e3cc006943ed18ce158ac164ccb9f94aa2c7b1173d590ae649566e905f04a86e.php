<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_062057b5bac6e2454faa080e6932cd64c4e954998d91cb217f6bed59c76cf425 extends Twig_Template
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
        $__internal_109b3479b809185c971cef04ad6b5cb117306d73b3036fed422d9963b939dfd7 = $this->env->getExtension("native_profiler");
        $__internal_109b3479b809185c971cef04ad6b5cb117306d73b3036fed422d9963b939dfd7->enter($__internal_109b3479b809185c971cef04ad6b5cb117306d73b3036fed422d9963b939dfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_109b3479b809185c971cef04ad6b5cb117306d73b3036fed422d9963b939dfd7->leave($__internal_109b3479b809185c971cef04ad6b5cb117306d73b3036fed422d9963b939dfd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
