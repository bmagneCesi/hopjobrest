<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_df88de747dba6cf459198fd90e14285d4ee67df5ac1e8a890feff6bb205fa6a0 extends Twig_Template
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
        $__internal_39a50cc8f3a4f3754788fb75aaca4d8e5c4b01ebd67b89476a0dee9d6c1d8261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a50cc8f3a4f3754788fb75aaca4d8e5c4b01ebd67b89476a0dee9d6c1d8261->enter($__internal_39a50cc8f3a4f3754788fb75aaca4d8e5c4b01ebd67b89476a0dee9d6c1d8261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8093c039d0d5635c7395b2fb6a7dd0ebf6fbee5d2e6b091c0b2467a9f935710b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8093c039d0d5635c7395b2fb6a7dd0ebf6fbee5d2e6b091c0b2467a9f935710b->enter($__internal_8093c039d0d5635c7395b2fb6a7dd0ebf6fbee5d2e6b091c0b2467a9f935710b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_39a50cc8f3a4f3754788fb75aaca4d8e5c4b01ebd67b89476a0dee9d6c1d8261->leave($__internal_39a50cc8f3a4f3754788fb75aaca4d8e5c4b01ebd67b89476a0dee9d6c1d8261_prof);

        
        $__internal_8093c039d0d5635c7395b2fb6a7dd0ebf6fbee5d2e6b091c0b2467a9f935710b->leave($__internal_8093c039d0d5635c7395b2fb6a7dd0ebf6fbee5d2e6b091c0b2467a9f935710b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
