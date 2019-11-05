<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3397d0061360b353045c06139174bc6cc776aad806d9786535efcfc3221654cf extends Twig_Template
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
        $__internal_3fe6a85f887d3a0de3094e193c87d0c73e745188a629be4a7ecd1c80f3810172 = $this->env->getExtension("native_profiler");
        $__internal_3fe6a85f887d3a0de3094e193c87d0c73e745188a629be4a7ecd1c80f3810172->enter($__internal_3fe6a85f887d3a0de3094e193c87d0c73e745188a629be4a7ecd1c80f3810172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3fe6a85f887d3a0de3094e193c87d0c73e745188a629be4a7ecd1c80f3810172->leave($__internal_3fe6a85f887d3a0de3094e193c87d0c73e745188a629be4a7ecd1c80f3810172_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
