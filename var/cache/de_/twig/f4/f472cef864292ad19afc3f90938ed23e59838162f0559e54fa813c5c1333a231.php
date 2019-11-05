<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7aa9f578023d3e40ef818ff064a21237e73fc933dafbd9c070697661105677ed extends Twig_Template
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
        $__internal_b5ae2360b5086d069cdf4528f278321aff5145756e24e771e8c6c51dbb6ae38a = $this->env->getExtension("native_profiler");
        $__internal_b5ae2360b5086d069cdf4528f278321aff5145756e24e771e8c6c51dbb6ae38a->enter($__internal_b5ae2360b5086d069cdf4528f278321aff5145756e24e771e8c6c51dbb6ae38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b5ae2360b5086d069cdf4528f278321aff5145756e24e771e8c6c51dbb6ae38a->leave($__internal_b5ae2360b5086d069cdf4528f278321aff5145756e24e771e8c6c51dbb6ae38a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
