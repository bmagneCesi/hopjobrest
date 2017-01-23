<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d7523740042894085c30d6fd3c3108f26c2220b12406f79b342f40bc78e4baad extends Twig_Template
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
        $__internal_7832629bac185fa22cf643a2e13b9b7a3e4b8d0b3271122aec700bd8fb92219c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7832629bac185fa22cf643a2e13b9b7a3e4b8d0b3271122aec700bd8fb92219c->enter($__internal_7832629bac185fa22cf643a2e13b9b7a3e4b8d0b3271122aec700bd8fb92219c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_78642f120b172fc6c066c0647f3fa988647d3f858ec9223e27fa983b14b1c3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78642f120b172fc6c066c0647f3fa988647d3f858ec9223e27fa983b14b1c3c0->enter($__internal_78642f120b172fc6c066c0647f3fa988647d3f858ec9223e27fa983b14b1c3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7832629bac185fa22cf643a2e13b9b7a3e4b8d0b3271122aec700bd8fb92219c->leave($__internal_7832629bac185fa22cf643a2e13b9b7a3e4b8d0b3271122aec700bd8fb92219c_prof);

        
        $__internal_78642f120b172fc6c066c0647f3fa988647d3f858ec9223e27fa983b14b1c3c0->leave($__internal_78642f120b172fc6c066c0647f3fa988647d3f858ec9223e27fa983b14b1c3c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
