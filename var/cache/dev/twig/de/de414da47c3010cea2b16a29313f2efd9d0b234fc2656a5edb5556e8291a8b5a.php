<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_59ad285c96328f8c24e063c3e3a9c14e02f3bac9cfe79e2ee508a0e6cc50f161 extends Twig_Template
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
        $__internal_36020125e8ceebfcdb780b26c3bab35250944c625551ab315750dcc39e118e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36020125e8ceebfcdb780b26c3bab35250944c625551ab315750dcc39e118e62->enter($__internal_36020125e8ceebfcdb780b26c3bab35250944c625551ab315750dcc39e118e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_dd794d3e2919284c0b9f35ba6d55189f3abc1cedd1784ec9a6d510467c298619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd794d3e2919284c0b9f35ba6d55189f3abc1cedd1784ec9a6d510467c298619->enter($__internal_dd794d3e2919284c0b9f35ba6d55189f3abc1cedd1784ec9a6d510467c298619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_36020125e8ceebfcdb780b26c3bab35250944c625551ab315750dcc39e118e62->leave($__internal_36020125e8ceebfcdb780b26c3bab35250944c625551ab315750dcc39e118e62_prof);

        
        $__internal_dd794d3e2919284c0b9f35ba6d55189f3abc1cedd1784ec9a6d510467c298619->leave($__internal_dd794d3e2919284c0b9f35ba6d55189f3abc1cedd1784ec9a6d510467c298619_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
