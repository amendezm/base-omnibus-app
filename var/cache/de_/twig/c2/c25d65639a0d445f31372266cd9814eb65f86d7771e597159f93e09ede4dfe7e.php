<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_513a779f4d48867bc9c1c258bc1c52e10ae90bac88c48d0e975ac9e16e478142 extends Twig_Template
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
        $__internal_38278839db74789e4fd09fc2fbeb1fc46b5849a6a527d0c573506865f5f739a6 = $this->env->getExtension("native_profiler");
        $__internal_38278839db74789e4fd09fc2fbeb1fc46b5849a6a527d0c573506865f5f739a6->enter($__internal_38278839db74789e4fd09fc2fbeb1fc46b5849a6a527d0c573506865f5f739a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_38278839db74789e4fd09fc2fbeb1fc46b5849a6a527d0c573506865f5f739a6->leave($__internal_38278839db74789e4fd09fc2fbeb1fc46b5849a6a527d0c573506865f5f739a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
