<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_71bebd6b020a05f151cf140392e2b64f00c0c93947f29cc03338ff170739e2b4 extends Twig_Template
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
        $__internal_456683f2ccc11bb837b3f386a051267e2dee0b2a7efb2274f8ae54c2b56a3e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_456683f2ccc11bb837b3f386a051267e2dee0b2a7efb2274f8ae54c2b56a3e8b->enter($__internal_456683f2ccc11bb837b3f386a051267e2dee0b2a7efb2274f8ae54c2b56a3e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9d9b9708704b1899b007de828e2beb0ccaa360eb712f71177f11a2a3f1287f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9b9708704b1899b007de828e2beb0ccaa360eb712f71177f11a2a3f1287f71->enter($__internal_9d9b9708704b1899b007de828e2beb0ccaa360eb712f71177f11a2a3f1287f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_456683f2ccc11bb837b3f386a051267e2dee0b2a7efb2274f8ae54c2b56a3e8b->leave($__internal_456683f2ccc11bb837b3f386a051267e2dee0b2a7efb2274f8ae54c2b56a3e8b_prof);

        
        $__internal_9d9b9708704b1899b007de828e2beb0ccaa360eb712f71177f11a2a3f1287f71->leave($__internal_9d9b9708704b1899b007de828e2beb0ccaa360eb712f71177f11a2a3f1287f71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
