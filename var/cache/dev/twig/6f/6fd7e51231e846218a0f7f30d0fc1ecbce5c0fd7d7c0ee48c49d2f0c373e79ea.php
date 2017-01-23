<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e71d51fc44277dcd08ec3b48cc56d59e0557e681eb126acb8cbe472937f3ed9d extends Twig_Template
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
        $__internal_78cdaf87d249f091e69a54d43bde3cff8b251346c3ee720d6d2c67dbc5df7406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78cdaf87d249f091e69a54d43bde3cff8b251346c3ee720d6d2c67dbc5df7406->enter($__internal_78cdaf87d249f091e69a54d43bde3cff8b251346c3ee720d6d2c67dbc5df7406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_fa8c8c4a589625315d4138a2ca2ce1a0479775608525920a48336e7a504df5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8c8c4a589625315d4138a2ca2ce1a0479775608525920a48336e7a504df5e1->enter($__internal_fa8c8c4a589625315d4138a2ca2ce1a0479775608525920a48336e7a504df5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_78cdaf87d249f091e69a54d43bde3cff8b251346c3ee720d6d2c67dbc5df7406->leave($__internal_78cdaf87d249f091e69a54d43bde3cff8b251346c3ee720d6d2c67dbc5df7406_prof);

        
        $__internal_fa8c8c4a589625315d4138a2ca2ce1a0479775608525920a48336e7a504df5e1->leave($__internal_fa8c8c4a589625315d4138a2ca2ce1a0479775608525920a48336e7a504df5e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
