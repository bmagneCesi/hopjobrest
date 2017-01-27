<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_49aaf657b4e6121cc0f23b5f80df065fffb78a7157693ad836bbf18fdde96ba5 extends Twig_Template
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
        $__internal_f1f566fde95a6bb59530c77cbfa873e16b5549fde325c3d273fd54dedc09156e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f566fde95a6bb59530c77cbfa873e16b5549fde325c3d273fd54dedc09156e->enter($__internal_f1f566fde95a6bb59530c77cbfa873e16b5549fde325c3d273fd54dedc09156e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d66412f74167cb7faabd975bcccbf4185568d2866187dcdca8cfcc6a4b9c0609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66412f74167cb7faabd975bcccbf4185568d2866187dcdca8cfcc6a4b9c0609->enter($__internal_d66412f74167cb7faabd975bcccbf4185568d2866187dcdca8cfcc6a4b9c0609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f1f566fde95a6bb59530c77cbfa873e16b5549fde325c3d273fd54dedc09156e->leave($__internal_f1f566fde95a6bb59530c77cbfa873e16b5549fde325c3d273fd54dedc09156e_prof);

        
        $__internal_d66412f74167cb7faabd975bcccbf4185568d2866187dcdca8cfcc6a4b9c0609->leave($__internal_d66412f74167cb7faabd975bcccbf4185568d2866187dcdca8cfcc6a4b9c0609_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
