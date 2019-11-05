<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d9ec3365d5c05a8fdadc4d32b1f37cdf5bd314eed22db5320721367124272899 extends Twig_Template
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
        $__internal_f3f3d693b65b4e02f26af54b9047803e72fd04458fad1cf6f7a7778373607891 = $this->env->getExtension("native_profiler");
        $__internal_f3f3d693b65b4e02f26af54b9047803e72fd04458fad1cf6f7a7778373607891->enter($__internal_f3f3d693b65b4e02f26af54b9047803e72fd04458fad1cf6f7a7778373607891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f3f3d693b65b4e02f26af54b9047803e72fd04458fad1cf6f7a7778373607891->leave($__internal_f3f3d693b65b4e02f26af54b9047803e72fd04458fad1cf6f7a7778373607891_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
