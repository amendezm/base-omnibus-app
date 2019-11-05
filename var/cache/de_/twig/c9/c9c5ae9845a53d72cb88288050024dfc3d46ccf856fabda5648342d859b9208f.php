<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2f03e33fd1299fdffbd8b17f396000622032aa6eb7cf89231d57446b58b60310 extends Twig_Template
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
        $__internal_dec6dfdb29a826d5e4cf3bd2259bd715f5d2ff30b8e73929405669e6e94b02e8 = $this->env->getExtension("native_profiler");
        $__internal_dec6dfdb29a826d5e4cf3bd2259bd715f5d2ff30b8e73929405669e6e94b02e8->enter($__internal_dec6dfdb29a826d5e4cf3bd2259bd715f5d2ff30b8e73929405669e6e94b02e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_dec6dfdb29a826d5e4cf3bd2259bd715f5d2ff30b8e73929405669e6e94b02e8->leave($__internal_dec6dfdb29a826d5e4cf3bd2259bd715f5d2ff30b8e73929405669e6e94b02e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
