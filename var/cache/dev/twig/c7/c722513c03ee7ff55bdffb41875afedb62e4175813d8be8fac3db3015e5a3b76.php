<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_68ebc69af17fafc222e1ebcdb5b4fe0708c669ee2451e16ffc1a2b15c2dc9dee extends Twig_Template
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
        $__internal_fd0c721217bbd68734e278351f1935eacc01165aa9c4b06b42494b1cadeeaeb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd0c721217bbd68734e278351f1935eacc01165aa9c4b06b42494b1cadeeaeb3->enter($__internal_fd0c721217bbd68734e278351f1935eacc01165aa9c4b06b42494b1cadeeaeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_6e9d446744e87b08689d4266dca9d352f8a03f071e8e3841c9b7dbf9ed00ea9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9d446744e87b08689d4266dca9d352f8a03f071e8e3841c9b7dbf9ed00ea9a->enter($__internal_6e9d446744e87b08689d4266dca9d352f8a03f071e8e3841c9b7dbf9ed00ea9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_fd0c721217bbd68734e278351f1935eacc01165aa9c4b06b42494b1cadeeaeb3->leave($__internal_fd0c721217bbd68734e278351f1935eacc01165aa9c4b06b42494b1cadeeaeb3_prof);

        
        $__internal_6e9d446744e87b08689d4266dca9d352f8a03f071e8e3841c9b7dbf9ed00ea9a->leave($__internal_6e9d446744e87b08689d4266dca9d352f8a03f071e8e3841c9b7dbf9ed00ea9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
