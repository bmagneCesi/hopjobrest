<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_cceb737a2ae9450e18628b7f29eebd0fa36ff449f807176e49cfde2bb18c301a extends Twig_Template
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
        $__internal_80363a4e532c97bdca33d0206e80aaf572c09aef16ea877adeb08ef6076adb35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80363a4e532c97bdca33d0206e80aaf572c09aef16ea877adeb08ef6076adb35->enter($__internal_80363a4e532c97bdca33d0206e80aaf572c09aef16ea877adeb08ef6076adb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_dafbf8b22e0999bc7b04946fc26110507fe03a7dc43dbb8be2b9a8b121fc50b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafbf8b22e0999bc7b04946fc26110507fe03a7dc43dbb8be2b9a8b121fc50b3->enter($__internal_dafbf8b22e0999bc7b04946fc26110507fe03a7dc43dbb8be2b9a8b121fc50b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_80363a4e532c97bdca33d0206e80aaf572c09aef16ea877adeb08ef6076adb35->leave($__internal_80363a4e532c97bdca33d0206e80aaf572c09aef16ea877adeb08ef6076adb35_prof);

        
        $__internal_dafbf8b22e0999bc7b04946fc26110507fe03a7dc43dbb8be2b9a8b121fc50b3->leave($__internal_dafbf8b22e0999bc7b04946fc26110507fe03a7dc43dbb8be2b9a8b121fc50b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
