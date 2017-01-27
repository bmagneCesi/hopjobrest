<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_083c5e26d3c15ab56bdcedf83a767c6a394074d8726cb70eb68955acbfe30803 extends Twig_Template
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
        $__internal_dff25f0645ef3f8b2e97efc2df146cc1d1f7752d7853156f0a2868f15dbf14de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff25f0645ef3f8b2e97efc2df146cc1d1f7752d7853156f0a2868f15dbf14de->enter($__internal_dff25f0645ef3f8b2e97efc2df146cc1d1f7752d7853156f0a2868f15dbf14de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c2e1d9ae9c5b7d212d8f43617231e080e3035103c853b58cada1e6dde60c18c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e1d9ae9c5b7d212d8f43617231e080e3035103c853b58cada1e6dde60c18c6->enter($__internal_c2e1d9ae9c5b7d212d8f43617231e080e3035103c853b58cada1e6dde60c18c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_dff25f0645ef3f8b2e97efc2df146cc1d1f7752d7853156f0a2868f15dbf14de->leave($__internal_dff25f0645ef3f8b2e97efc2df146cc1d1f7752d7853156f0a2868f15dbf14de_prof);

        
        $__internal_c2e1d9ae9c5b7d212d8f43617231e080e3035103c853b58cada1e6dde60c18c6->leave($__internal_c2e1d9ae9c5b7d212d8f43617231e080e3035103c853b58cada1e6dde60c18c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
