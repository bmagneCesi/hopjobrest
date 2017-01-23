<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b0928880b95e6e41bc8da2a66a3fe74aa0f108b47cfd43b1fd15bb63604602d7 extends Twig_Template
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
        $__internal_866f8a61ac5fda1cd5736dfedfa61eab91012a9ff6732351ed40f2e16acece14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866f8a61ac5fda1cd5736dfedfa61eab91012a9ff6732351ed40f2e16acece14->enter($__internal_866f8a61ac5fda1cd5736dfedfa61eab91012a9ff6732351ed40f2e16acece14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_94e3d6aa45aaa8250dd5987ac469204e5ca7b157939996709e2372c193b48828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e3d6aa45aaa8250dd5987ac469204e5ca7b157939996709e2372c193b48828->enter($__internal_94e3d6aa45aaa8250dd5987ac469204e5ca7b157939996709e2372c193b48828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_866f8a61ac5fda1cd5736dfedfa61eab91012a9ff6732351ed40f2e16acece14->leave($__internal_866f8a61ac5fda1cd5736dfedfa61eab91012a9ff6732351ed40f2e16acece14_prof);

        
        $__internal_94e3d6aa45aaa8250dd5987ac469204e5ca7b157939996709e2372c193b48828->leave($__internal_94e3d6aa45aaa8250dd5987ac469204e5ca7b157939996709e2372c193b48828_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
