<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_171717644e7a301d325108976286d53aebb33aec152d92a608afbffc7a177153 extends Twig_Template
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
        $__internal_9d3c84fa8bc08f8154d46d80250da9ca53483f37406c8a2c3764564ef4d48315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3c84fa8bc08f8154d46d80250da9ca53483f37406c8a2c3764564ef4d48315->enter($__internal_9d3c84fa8bc08f8154d46d80250da9ca53483f37406c8a2c3764564ef4d48315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f0ff5072f2f2258f4cfe2f019d5f17626e6225ba5981e206901255b8567b4404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ff5072f2f2258f4cfe2f019d5f17626e6225ba5981e206901255b8567b4404->enter($__internal_f0ff5072f2f2258f4cfe2f019d5f17626e6225ba5981e206901255b8567b4404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9d3c84fa8bc08f8154d46d80250da9ca53483f37406c8a2c3764564ef4d48315->leave($__internal_9d3c84fa8bc08f8154d46d80250da9ca53483f37406c8a2c3764564ef4d48315_prof);

        
        $__internal_f0ff5072f2f2258f4cfe2f019d5f17626e6225ba5981e206901255b8567b4404->leave($__internal_f0ff5072f2f2258f4cfe2f019d5f17626e6225ba5981e206901255b8567b4404_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
