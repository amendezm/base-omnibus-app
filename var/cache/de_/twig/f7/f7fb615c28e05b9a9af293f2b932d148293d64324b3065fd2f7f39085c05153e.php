<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ec81561b20404c4cbd8d7faa81d93b6e80a7fb2e41c5460bd3a8aa2f47642917 extends Twig_Template
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
        $__internal_47117d959a3cda600ca426aef006460e89af6da87244aaa35a556bbb0fa3de14 = $this->env->getExtension("native_profiler");
        $__internal_47117d959a3cda600ca426aef006460e89af6da87244aaa35a556bbb0fa3de14->enter($__internal_47117d959a3cda600ca426aef006460e89af6da87244aaa35a556bbb0fa3de14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_47117d959a3cda600ca426aef006460e89af6da87244aaa35a556bbb0fa3de14->leave($__internal_47117d959a3cda600ca426aef006460e89af6da87244aaa35a556bbb0fa3de14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
