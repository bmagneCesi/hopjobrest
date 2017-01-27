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
        $__internal_eac95d1c6024d3a5140302c8903c62114f1e3d711d25e99e451d34198388f9e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac95d1c6024d3a5140302c8903c62114f1e3d711d25e99e451d34198388f9e8->enter($__internal_eac95d1c6024d3a5140302c8903c62114f1e3d711d25e99e451d34198388f9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7db7bb00d8427cc9d890b29dee9c21b8e9ee22ceb5d0fe9f48132e6f254b477d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db7bb00d8427cc9d890b29dee9c21b8e9ee22ceb5d0fe9f48132e6f254b477d->enter($__internal_7db7bb00d8427cc9d890b29dee9c21b8e9ee22ceb5d0fe9f48132e6f254b477d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_eac95d1c6024d3a5140302c8903c62114f1e3d711d25e99e451d34198388f9e8->leave($__internal_eac95d1c6024d3a5140302c8903c62114f1e3d711d25e99e451d34198388f9e8_prof);

        
        $__internal_7db7bb00d8427cc9d890b29dee9c21b8e9ee22ceb5d0fe9f48132e6f254b477d->leave($__internal_7db7bb00d8427cc9d890b29dee9c21b8e9ee22ceb5d0fe9f48132e6f254b477d_prof);

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
