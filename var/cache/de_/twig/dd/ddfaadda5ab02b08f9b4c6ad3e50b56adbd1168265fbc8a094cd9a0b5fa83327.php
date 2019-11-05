<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2d01df56969f92186ee47bff07731ee27e992d5388f8bc9704d71e4ea557343b extends Twig_Template
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
        $__internal_6aa31ae1db6ae534a1b5f01d71683d876d25ed32bc232b2abc3dbc3a18754bc5 = $this->env->getExtension("native_profiler");
        $__internal_6aa31ae1db6ae534a1b5f01d71683d876d25ed32bc232b2abc3dbc3a18754bc5->enter($__internal_6aa31ae1db6ae534a1b5f01d71683d876d25ed32bc232b2abc3dbc3a18754bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6aa31ae1db6ae534a1b5f01d71683d876d25ed32bc232b2abc3dbc3a18754bc5->leave($__internal_6aa31ae1db6ae534a1b5f01d71683d876d25ed32bc232b2abc3dbc3a18754bc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
