<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_1ef9711d5812e446bdf8ddc16ec977eb826d3ab3cb26507456c9b09b7c4aa358 extends Twig_Template
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
        $__internal_c2c071a2899fdbb63470c4495e5b899cd98c90de60f06a07f2b5f62eb0bee1d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c071a2899fdbb63470c4495e5b899cd98c90de60f06a07f2b5f62eb0bee1d0->enter($__internal_c2c071a2899fdbb63470c4495e5b899cd98c90de60f06a07f2b5f62eb0bee1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e581f9c023a872e9cf2230320a7798fef2b5f0f57f6f8824c10cc12e64b293dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e581f9c023a872e9cf2230320a7798fef2b5f0f57f6f8824c10cc12e64b293dc->enter($__internal_e581f9c023a872e9cf2230320a7798fef2b5f0f57f6f8824c10cc12e64b293dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c2c071a2899fdbb63470c4495e5b899cd98c90de60f06a07f2b5f62eb0bee1d0->leave($__internal_c2c071a2899fdbb63470c4495e5b899cd98c90de60f06a07f2b5f62eb0bee1d0_prof);

        
        $__internal_e581f9c023a872e9cf2230320a7798fef2b5f0f57f6f8824c10cc12e64b293dc->leave($__internal_e581f9c023a872e9cf2230320a7798fef2b5f0f57f6f8824c10cc12e64b293dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
