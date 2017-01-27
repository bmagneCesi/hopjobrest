<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_76e61b315397e6bbaa5a08fe26fbd4b0f52c5d35e281c2cec8ce42034285cc22 extends Twig_Template
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
        $__internal_54cb518b2cf757ac9300b6b7f280fa0f3690b306897fa3c820066ffd1e33bb7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54cb518b2cf757ac9300b6b7f280fa0f3690b306897fa3c820066ffd1e33bb7d->enter($__internal_54cb518b2cf757ac9300b6b7f280fa0f3690b306897fa3c820066ffd1e33bb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c534932ae17dba7425e1380912936f64181bb1a6c7950434b360b9c021b16977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c534932ae17dba7425e1380912936f64181bb1a6c7950434b360b9c021b16977->enter($__internal_c534932ae17dba7425e1380912936f64181bb1a6c7950434b360b9c021b16977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_54cb518b2cf757ac9300b6b7f280fa0f3690b306897fa3c820066ffd1e33bb7d->leave($__internal_54cb518b2cf757ac9300b6b7f280fa0f3690b306897fa3c820066ffd1e33bb7d_prof);

        
        $__internal_c534932ae17dba7425e1380912936f64181bb1a6c7950434b360b9c021b16977->leave($__internal_c534932ae17dba7425e1380912936f64181bb1a6c7950434b360b9c021b16977_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
