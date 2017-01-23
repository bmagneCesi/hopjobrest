<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b5fa16348afc5b8545b052f0bf678f4e5e9b262b5c2282a9c02546ca5f0965c2 extends Twig_Template
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
        $__internal_1cd07c9ec73f5476a515037e97b4678c23b3a8643d33d7c509686acf86dc8a19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd07c9ec73f5476a515037e97b4678c23b3a8643d33d7c509686acf86dc8a19->enter($__internal_1cd07c9ec73f5476a515037e97b4678c23b3a8643d33d7c509686acf86dc8a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_96a72fe60cb9cf9adc20f08f45255145079759def75b522f3b952988355c2298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a72fe60cb9cf9adc20f08f45255145079759def75b522f3b952988355c2298->enter($__internal_96a72fe60cb9cf9adc20f08f45255145079759def75b522f3b952988355c2298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1cd07c9ec73f5476a515037e97b4678c23b3a8643d33d7c509686acf86dc8a19->leave($__internal_1cd07c9ec73f5476a515037e97b4678c23b3a8643d33d7c509686acf86dc8a19_prof);

        
        $__internal_96a72fe60cb9cf9adc20f08f45255145079759def75b522f3b952988355c2298->leave($__internal_96a72fe60cb9cf9adc20f08f45255145079759def75b522f3b952988355c2298_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
