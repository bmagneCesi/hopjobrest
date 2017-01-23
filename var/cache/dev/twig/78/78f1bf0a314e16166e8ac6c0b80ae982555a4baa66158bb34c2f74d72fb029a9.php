<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_25c65161d004ec50794a849170338c34132a0bb32e472a9a6fdca51f023bbad2 extends Twig_Template
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
        $__internal_1de9c576cdd970ec354493388b5cda5f5d8cca4157ef9bf19402a0911384f24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de9c576cdd970ec354493388b5cda5f5d8cca4157ef9bf19402a0911384f24f->enter($__internal_1de9c576cdd970ec354493388b5cda5f5d8cca4157ef9bf19402a0911384f24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_5b1587209a1212524f0f9a69a58d19b077ecdba89e71649ad9043a45b5ff7db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1587209a1212524f0f9a69a58d19b077ecdba89e71649ad9043a45b5ff7db0->enter($__internal_5b1587209a1212524f0f9a69a58d19b077ecdba89e71649ad9043a45b5ff7db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1de9c576cdd970ec354493388b5cda5f5d8cca4157ef9bf19402a0911384f24f->leave($__internal_1de9c576cdd970ec354493388b5cda5f5d8cca4157ef9bf19402a0911384f24f_prof);

        
        $__internal_5b1587209a1212524f0f9a69a58d19b077ecdba89e71649ad9043a45b5ff7db0->leave($__internal_5b1587209a1212524f0f9a69a58d19b077ecdba89e71649ad9043a45b5ff7db0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
