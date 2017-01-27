<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3d83cc7f4a67640cf4366d51d8c47dccbb3ab825c9be740072656ff100b56b62 extends Twig_Template
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
        $__internal_1cec4d164e11de210b97f1cba13c60f25f6d9007d05a69feb40e2f324a5a07b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cec4d164e11de210b97f1cba13c60f25f6d9007d05a69feb40e2f324a5a07b0->enter($__internal_1cec4d164e11de210b97f1cba13c60f25f6d9007d05a69feb40e2f324a5a07b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6d2f1bff36b4093a643fa1d68b97364e015cb104ffeafbc9ebf4f701e79e9f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2f1bff36b4093a643fa1d68b97364e015cb104ffeafbc9ebf4f701e79e9f15->enter($__internal_6d2f1bff36b4093a643fa1d68b97364e015cb104ffeafbc9ebf4f701e79e9f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1cec4d164e11de210b97f1cba13c60f25f6d9007d05a69feb40e2f324a5a07b0->leave($__internal_1cec4d164e11de210b97f1cba13c60f25f6d9007d05a69feb40e2f324a5a07b0_prof);

        
        $__internal_6d2f1bff36b4093a643fa1d68b97364e015cb104ffeafbc9ebf4f701e79e9f15->leave($__internal_6d2f1bff36b4093a643fa1d68b97364e015cb104ffeafbc9ebf4f701e79e9f15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
