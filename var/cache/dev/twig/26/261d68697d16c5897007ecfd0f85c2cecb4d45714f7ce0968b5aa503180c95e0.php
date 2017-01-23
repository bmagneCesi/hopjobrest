<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_13a3449839b4e59e6298c974931b227c9d2a20a2f6341779f65e4356f3111860 extends Twig_Template
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
        $__internal_2deed1a002f7edecba2286f46736e0fb7c989e553cfcb4cabfe0e2ce7ba2c722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2deed1a002f7edecba2286f46736e0fb7c989e553cfcb4cabfe0e2ce7ba2c722->enter($__internal_2deed1a002f7edecba2286f46736e0fb7c989e553cfcb4cabfe0e2ce7ba2c722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_5510291d2e32c8aebdcfd2bfb4b7509299ea46dbfa88476f42ef6d77abf71cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5510291d2e32c8aebdcfd2bfb4b7509299ea46dbfa88476f42ef6d77abf71cc6->enter($__internal_5510291d2e32c8aebdcfd2bfb4b7509299ea46dbfa88476f42ef6d77abf71cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_2deed1a002f7edecba2286f46736e0fb7c989e553cfcb4cabfe0e2ce7ba2c722->leave($__internal_2deed1a002f7edecba2286f46736e0fb7c989e553cfcb4cabfe0e2ce7ba2c722_prof);

        
        $__internal_5510291d2e32c8aebdcfd2bfb4b7509299ea46dbfa88476f42ef6d77abf71cc6->leave($__internal_5510291d2e32c8aebdcfd2bfb4b7509299ea46dbfa88476f42ef6d77abf71cc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
