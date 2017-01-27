<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_05df047184e4785d4cd18dc0cd190470ac7181e2abe31e0e8bb84410d5831618 extends Twig_Template
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
        $__internal_9ec992c54100160036546cd39009b46dcb8b2cf65983f3b43e8fb16e838a8d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec992c54100160036546cd39009b46dcb8b2cf65983f3b43e8fb16e838a8d75->enter($__internal_9ec992c54100160036546cd39009b46dcb8b2cf65983f3b43e8fb16e838a8d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_97a759abbf69fc70f8d5e56fbffe3847d579a1351724ba9a0aa9237c04f5ca98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a759abbf69fc70f8d5e56fbffe3847d579a1351724ba9a0aa9237c04f5ca98->enter($__internal_97a759abbf69fc70f8d5e56fbffe3847d579a1351724ba9a0aa9237c04f5ca98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9ec992c54100160036546cd39009b46dcb8b2cf65983f3b43e8fb16e838a8d75->leave($__internal_9ec992c54100160036546cd39009b46dcb8b2cf65983f3b43e8fb16e838a8d75_prof);

        
        $__internal_97a759abbf69fc70f8d5e56fbffe3847d579a1351724ba9a0aa9237c04f5ca98->leave($__internal_97a759abbf69fc70f8d5e56fbffe3847d579a1351724ba9a0aa9237c04f5ca98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
