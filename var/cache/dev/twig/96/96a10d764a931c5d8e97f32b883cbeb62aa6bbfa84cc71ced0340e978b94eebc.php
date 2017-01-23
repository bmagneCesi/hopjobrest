<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a203b291527326c7fbf58d4af097aa24c14f5dc0e684414584f92be6c4abc691 extends Twig_Template
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
        $__internal_58484c2333389c0a1c0bcd63ca14fb5719847d44332a3f78ac0155549b8837f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58484c2333389c0a1c0bcd63ca14fb5719847d44332a3f78ac0155549b8837f5->enter($__internal_58484c2333389c0a1c0bcd63ca14fb5719847d44332a3f78ac0155549b8837f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_44eff6d6e3a44c763d63edd0628e02e71349498936aba9a125e9045c62c1cab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44eff6d6e3a44c763d63edd0628e02e71349498936aba9a125e9045c62c1cab5->enter($__internal_44eff6d6e3a44c763d63edd0628e02e71349498936aba9a125e9045c62c1cab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_58484c2333389c0a1c0bcd63ca14fb5719847d44332a3f78ac0155549b8837f5->leave($__internal_58484c2333389c0a1c0bcd63ca14fb5719847d44332a3f78ac0155549b8837f5_prof);

        
        $__internal_44eff6d6e3a44c763d63edd0628e02e71349498936aba9a125e9045c62c1cab5->leave($__internal_44eff6d6e3a44c763d63edd0628e02e71349498936aba9a125e9045c62c1cab5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
