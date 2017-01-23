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
        $__internal_6526466bf7666bb0748be2ac02b3395977f1f3d3416a6b7d3f350daacc785678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6526466bf7666bb0748be2ac02b3395977f1f3d3416a6b7d3f350daacc785678->enter($__internal_6526466bf7666bb0748be2ac02b3395977f1f3d3416a6b7d3f350daacc785678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_76ff6c17b4e4c804134aac7b92a4f473b29af11ffe5a0b899760733cb30fe217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ff6c17b4e4c804134aac7b92a4f473b29af11ffe5a0b899760733cb30fe217->enter($__internal_76ff6c17b4e4c804134aac7b92a4f473b29af11ffe5a0b899760733cb30fe217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6526466bf7666bb0748be2ac02b3395977f1f3d3416a6b7d3f350daacc785678->leave($__internal_6526466bf7666bb0748be2ac02b3395977f1f3d3416a6b7d3f350daacc785678_prof);

        
        $__internal_76ff6c17b4e4c804134aac7b92a4f473b29af11ffe5a0b899760733cb30fe217->leave($__internal_76ff6c17b4e4c804134aac7b92a4f473b29af11ffe5a0b899760733cb30fe217_prof);

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
