<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8f4edfd7c699a67ca1a7ebdecae963e1b29b917bee72d01b01dfe291ad6477c1 extends Twig_Template
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
        $__internal_f7068c823a7b9cd11cbbe04f7a817a4167766eb37551020d01ce08d5b194308b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7068c823a7b9cd11cbbe04f7a817a4167766eb37551020d01ce08d5b194308b->enter($__internal_f7068c823a7b9cd11cbbe04f7a817a4167766eb37551020d01ce08d5b194308b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_de73a2b5bfd751f1c33e1f756279c9a5de46bcd243229b1afdb3c3c54960884a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de73a2b5bfd751f1c33e1f756279c9a5de46bcd243229b1afdb3c3c54960884a->enter($__internal_de73a2b5bfd751f1c33e1f756279c9a5de46bcd243229b1afdb3c3c54960884a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f7068c823a7b9cd11cbbe04f7a817a4167766eb37551020d01ce08d5b194308b->leave($__internal_f7068c823a7b9cd11cbbe04f7a817a4167766eb37551020d01ce08d5b194308b_prof);

        
        $__internal_de73a2b5bfd751f1c33e1f756279c9a5de46bcd243229b1afdb3c3c54960884a->leave($__internal_de73a2b5bfd751f1c33e1f756279c9a5de46bcd243229b1afdb3c3c54960884a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
