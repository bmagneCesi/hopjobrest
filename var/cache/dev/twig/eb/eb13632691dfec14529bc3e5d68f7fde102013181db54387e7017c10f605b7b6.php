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
        $__internal_73232ae7badb58c5209e03f5accf724d8030e72ab72a9f0a987629fa967069ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73232ae7badb58c5209e03f5accf724d8030e72ab72a9f0a987629fa967069ef->enter($__internal_73232ae7badb58c5209e03f5accf724d8030e72ab72a9f0a987629fa967069ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d4ba3c4126eea8a60ae7a632e6e48766c73e87fdc35343f9e31f54565459fbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ba3c4126eea8a60ae7a632e6e48766c73e87fdc35343f9e31f54565459fbdc->enter($__internal_d4ba3c4126eea8a60ae7a632e6e48766c73e87fdc35343f9e31f54565459fbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_73232ae7badb58c5209e03f5accf724d8030e72ab72a9f0a987629fa967069ef->leave($__internal_73232ae7badb58c5209e03f5accf724d8030e72ab72a9f0a987629fa967069ef_prof);

        
        $__internal_d4ba3c4126eea8a60ae7a632e6e48766c73e87fdc35343f9e31f54565459fbdc->leave($__internal_d4ba3c4126eea8a60ae7a632e6e48766c73e87fdc35343f9e31f54565459fbdc_prof);

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
