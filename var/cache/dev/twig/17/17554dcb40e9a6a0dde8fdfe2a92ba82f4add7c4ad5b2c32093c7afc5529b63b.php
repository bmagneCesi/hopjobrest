<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_99d32c8bc8dabb7ef17730fbafe84a0dc5e1ffc15ed455185271c7f201eb9d29 extends Twig_Template
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
        $__internal_7c774beeed4ad0923058e77c8f80fa82bfec4698159ea531e9f7cb67f5b4cfa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c774beeed4ad0923058e77c8f80fa82bfec4698159ea531e9f7cb67f5b4cfa1->enter($__internal_7c774beeed4ad0923058e77c8f80fa82bfec4698159ea531e9f7cb67f5b4cfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ae789bec16fab9e1616e9244234e878b502dacee489bb5086c9c7367fb28ef0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae789bec16fab9e1616e9244234e878b502dacee489bb5086c9c7367fb28ef0a->enter($__internal_ae789bec16fab9e1616e9244234e878b502dacee489bb5086c9c7367fb28ef0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7c774beeed4ad0923058e77c8f80fa82bfec4698159ea531e9f7cb67f5b4cfa1->leave($__internal_7c774beeed4ad0923058e77c8f80fa82bfec4698159ea531e9f7cb67f5b4cfa1_prof);

        
        $__internal_ae789bec16fab9e1616e9244234e878b502dacee489bb5086c9c7367fb28ef0a->leave($__internal_ae789bec16fab9e1616e9244234e878b502dacee489bb5086c9c7367fb28ef0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
