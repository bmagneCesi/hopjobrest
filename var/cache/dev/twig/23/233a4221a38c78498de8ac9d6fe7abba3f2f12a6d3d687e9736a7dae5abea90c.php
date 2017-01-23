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
        $__internal_df9f67ceed2513fe60d16611500ca6d09c5fe8c752a413abc55d593d01bb6528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df9f67ceed2513fe60d16611500ca6d09c5fe8c752a413abc55d593d01bb6528->enter($__internal_df9f67ceed2513fe60d16611500ca6d09c5fe8c752a413abc55d593d01bb6528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_d5b76ed0dbd5d673707e4c4908ccdea82deccb03659be6da063a0ff6a05a8e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b76ed0dbd5d673707e4c4908ccdea82deccb03659be6da063a0ff6a05a8e9e->enter($__internal_d5b76ed0dbd5d673707e4c4908ccdea82deccb03659be6da063a0ff6a05a8e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_df9f67ceed2513fe60d16611500ca6d09c5fe8c752a413abc55d593d01bb6528->leave($__internal_df9f67ceed2513fe60d16611500ca6d09c5fe8c752a413abc55d593d01bb6528_prof);

        
        $__internal_d5b76ed0dbd5d673707e4c4908ccdea82deccb03659be6da063a0ff6a05a8e9e->leave($__internal_d5b76ed0dbd5d673707e4c4908ccdea82deccb03659be6da063a0ff6a05a8e9e_prof);

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
