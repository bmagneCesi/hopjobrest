<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_25c65161d004ec50794a849170338c34132a0bb32e472a9a6fdca51f023bbad2 extends Twig_Template
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
        $__internal_95a27a30bb27f0eee04efe3ff99a5933202cf54602442b7e5847c87bd1d0dd63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a27a30bb27f0eee04efe3ff99a5933202cf54602442b7e5847c87bd1d0dd63->enter($__internal_95a27a30bb27f0eee04efe3ff99a5933202cf54602442b7e5847c87bd1d0dd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_3d0a58ae2cbf83d8762201d9e63a5025fededa5e564e6024a807ef5be036dfa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0a58ae2cbf83d8762201d9e63a5025fededa5e564e6024a807ef5be036dfa9->enter($__internal_3d0a58ae2cbf83d8762201d9e63a5025fededa5e564e6024a807ef5be036dfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_95a27a30bb27f0eee04efe3ff99a5933202cf54602442b7e5847c87bd1d0dd63->leave($__internal_95a27a30bb27f0eee04efe3ff99a5933202cf54602442b7e5847c87bd1d0dd63_prof);

        
        $__internal_3d0a58ae2cbf83d8762201d9e63a5025fededa5e564e6024a807ef5be036dfa9->leave($__internal_3d0a58ae2cbf83d8762201d9e63a5025fededa5e564e6024a807ef5be036dfa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
