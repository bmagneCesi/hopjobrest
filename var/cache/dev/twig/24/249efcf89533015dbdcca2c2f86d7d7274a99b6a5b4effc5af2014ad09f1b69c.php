<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b9bc5e6949cf687e112dc306ab9355c199d7cd7d89ea38462bc9381124e8050e extends Twig_Template
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
        $__internal_edaacb37d251c74e196d75e189e37bab514c79e3eebb435f55575748cdcfa583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edaacb37d251c74e196d75e189e37bab514c79e3eebb435f55575748cdcfa583->enter($__internal_edaacb37d251c74e196d75e189e37bab514c79e3eebb435f55575748cdcfa583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_70d5f9d78fea7d134ee047e7d21341d9e4a0c3f9eecd13f3f79ee0c1a60a4c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d5f9d78fea7d134ee047e7d21341d9e4a0c3f9eecd13f3f79ee0c1a60a4c5b->enter($__internal_70d5f9d78fea7d134ee047e7d21341d9e4a0c3f9eecd13f3f79ee0c1a60a4c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_edaacb37d251c74e196d75e189e37bab514c79e3eebb435f55575748cdcfa583->leave($__internal_edaacb37d251c74e196d75e189e37bab514c79e3eebb435f55575748cdcfa583_prof);

        
        $__internal_70d5f9d78fea7d134ee047e7d21341d9e4a0c3f9eecd13f3f79ee0c1a60a4c5b->leave($__internal_70d5f9d78fea7d134ee047e7d21341d9e4a0c3f9eecd13f3f79ee0c1a60a4c5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
