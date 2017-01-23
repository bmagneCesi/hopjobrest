<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_fb119405b368fa8247cecef5b9b88ae299d02e96ae115f1fe7e136e453c08792 extends Twig_Template
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
        $__internal_e377971a8fd536cf78e6028ba747149cd9df602eea023b6c6a523e8bdcef04db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e377971a8fd536cf78e6028ba747149cd9df602eea023b6c6a523e8bdcef04db->enter($__internal_e377971a8fd536cf78e6028ba747149cd9df602eea023b6c6a523e8bdcef04db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e91f913d3084abc1481a4eca86ce1a752aa5e87b838fff4c95b6aaf0f5a64ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91f913d3084abc1481a4eca86ce1a752aa5e87b838fff4c95b6aaf0f5a64ab7->enter($__internal_e91f913d3084abc1481a4eca86ce1a752aa5e87b838fff4c95b6aaf0f5a64ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e377971a8fd536cf78e6028ba747149cd9df602eea023b6c6a523e8bdcef04db->leave($__internal_e377971a8fd536cf78e6028ba747149cd9df602eea023b6c6a523e8bdcef04db_prof);

        
        $__internal_e91f913d3084abc1481a4eca86ce1a752aa5e87b838fff4c95b6aaf0f5a64ab7->leave($__internal_e91f913d3084abc1481a4eca86ce1a752aa5e87b838fff4c95b6aaf0f5a64ab7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
