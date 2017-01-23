<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_928b65361d976b567f694af5f7337a0c3a855e3669ed393679b0f7fb05e6f7d3 extends Twig_Template
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
        $__internal_ee142949e4c39d6cd45e63075f01bad7fe6fc0384534fa78528b653c96c50eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee142949e4c39d6cd45e63075f01bad7fe6fc0384534fa78528b653c96c50eca->enter($__internal_ee142949e4c39d6cd45e63075f01bad7fe6fc0384534fa78528b653c96c50eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ee91c4541c70598aa051d9dad48b9dc02f8e9cb695b962c129c42a141f770b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee91c4541c70598aa051d9dad48b9dc02f8e9cb695b962c129c42a141f770b30->enter($__internal_ee91c4541c70598aa051d9dad48b9dc02f8e9cb695b962c129c42a141f770b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ee142949e4c39d6cd45e63075f01bad7fe6fc0384534fa78528b653c96c50eca->leave($__internal_ee142949e4c39d6cd45e63075f01bad7fe6fc0384534fa78528b653c96c50eca_prof);

        
        $__internal_ee91c4541c70598aa051d9dad48b9dc02f8e9cb695b962c129c42a141f770b30->leave($__internal_ee91c4541c70598aa051d9dad48b9dc02f8e9cb695b962c129c42a141f770b30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
