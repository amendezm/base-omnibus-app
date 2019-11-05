<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_52be0215dc4174ad389284f6aab705994a4f32b8234726f8d66ec5c32f871120 extends Twig_Template
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
        $__internal_4ca3079c86fef2198aa0a1a216da7bcb87d8f8b8b4f6c104c981c041f7d6f10a = $this->env->getExtension("native_profiler");
        $__internal_4ca3079c86fef2198aa0a1a216da7bcb87d8f8b8b4f6c104c981c041f7d6f10a->enter($__internal_4ca3079c86fef2198aa0a1a216da7bcb87d8f8b8b4f6c104c981c041f7d6f10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4ca3079c86fef2198aa0a1a216da7bcb87d8f8b8b4f6c104c981c041f7d6f10a->leave($__internal_4ca3079c86fef2198aa0a1a216da7bcb87d8f8b8b4f6c104c981c041f7d6f10a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
