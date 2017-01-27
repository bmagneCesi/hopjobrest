<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d7523740042894085c30d6fd3c3108f26c2220b12406f79b342f40bc78e4baad extends Twig_Template
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
        $__internal_f42838ee5701aca6fb929cd1adc5ecd61bd408a620ef38336599a9a6dfd17e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f42838ee5701aca6fb929cd1adc5ecd61bd408a620ef38336599a9a6dfd17e4e->enter($__internal_f42838ee5701aca6fb929cd1adc5ecd61bd408a620ef38336599a9a6dfd17e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4fc7a88f3c7f87a1f39a94c55053ce7e967e9316b424106ce4d9a57dadacd7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc7a88f3c7f87a1f39a94c55053ce7e967e9316b424106ce4d9a57dadacd7a9->enter($__internal_4fc7a88f3c7f87a1f39a94c55053ce7e967e9316b424106ce4d9a57dadacd7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f42838ee5701aca6fb929cd1adc5ecd61bd408a620ef38336599a9a6dfd17e4e->leave($__internal_f42838ee5701aca6fb929cd1adc5ecd61bd408a620ef38336599a9a6dfd17e4e_prof);

        
        $__internal_4fc7a88f3c7f87a1f39a94c55053ce7e967e9316b424106ce4d9a57dadacd7a9->leave($__internal_4fc7a88f3c7f87a1f39a94c55053ce7e967e9316b424106ce4d9a57dadacd7a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
