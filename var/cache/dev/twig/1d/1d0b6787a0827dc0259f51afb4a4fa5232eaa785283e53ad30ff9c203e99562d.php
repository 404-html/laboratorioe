<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_33157085a5305614af58c8373b0c2041b94099eb927554125295a19f6320c8dc extends Twig_Template
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
        $__internal_52f916707f0404229632dfbfbcd0259b54a0446ca77d6ed1be520ce357b3e3a1 = $this->env->getExtension("native_profiler");
        $__internal_52f916707f0404229632dfbfbcd0259b54a0446ca77d6ed1be520ce357b3e3a1->enter($__internal_52f916707f0404229632dfbfbcd0259b54a0446ca77d6ed1be520ce357b3e3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_52f916707f0404229632dfbfbcd0259b54a0446ca77d6ed1be520ce357b3e3a1->leave($__internal_52f916707f0404229632dfbfbcd0259b54a0446ca77d6ed1be520ce357b3e3a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
