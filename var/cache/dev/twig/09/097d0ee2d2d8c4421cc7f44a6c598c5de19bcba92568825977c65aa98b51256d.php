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
        $__internal_c212383b62c2bc3fa2ae143d7d34b60dc35c38b66ad3299cdeea47ddd6d29c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c212383b62c2bc3fa2ae143d7d34b60dc35c38b66ad3299cdeea47ddd6d29c80->enter($__internal_c212383b62c2bc3fa2ae143d7d34b60dc35c38b66ad3299cdeea47ddd6d29c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3b17885dfe58f8fa27e27adff39a8f7f7ce4c88bfb49fca6b199fed3dc435240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b17885dfe58f8fa27e27adff39a8f7f7ce4c88bfb49fca6b199fed3dc435240->enter($__internal_3b17885dfe58f8fa27e27adff39a8f7f7ce4c88bfb49fca6b199fed3dc435240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c212383b62c2bc3fa2ae143d7d34b60dc35c38b66ad3299cdeea47ddd6d29c80->leave($__internal_c212383b62c2bc3fa2ae143d7d34b60dc35c38b66ad3299cdeea47ddd6d29c80_prof);

        
        $__internal_3b17885dfe58f8fa27e27adff39a8f7f7ce4c88bfb49fca6b199fed3dc435240->leave($__internal_3b17885dfe58f8fa27e27adff39a8f7f7ce4c88bfb49fca6b199fed3dc435240_prof);

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
