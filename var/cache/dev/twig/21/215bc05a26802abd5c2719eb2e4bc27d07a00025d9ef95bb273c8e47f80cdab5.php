<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b0928880b95e6e41bc8da2a66a3fe74aa0f108b47cfd43b1fd15bb63604602d7 extends Twig_Template
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
        $__internal_e9e5397315c96954155ce9cc7e69e23217c2166936d8c58f631d6defbff5c78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e5397315c96954155ce9cc7e69e23217c2166936d8c58f631d6defbff5c78d->enter($__internal_e9e5397315c96954155ce9cc7e69e23217c2166936d8c58f631d6defbff5c78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_af709997b4912001521702b5f74c54250d3ba8b9c0e6ee18fa6124a8769bd917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af709997b4912001521702b5f74c54250d3ba8b9c0e6ee18fa6124a8769bd917->enter($__internal_af709997b4912001521702b5f74c54250d3ba8b9c0e6ee18fa6124a8769bd917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e9e5397315c96954155ce9cc7e69e23217c2166936d8c58f631d6defbff5c78d->leave($__internal_e9e5397315c96954155ce9cc7e69e23217c2166936d8c58f631d6defbff5c78d_prof);

        
        $__internal_af709997b4912001521702b5f74c54250d3ba8b9c0e6ee18fa6124a8769bd917->leave($__internal_af709997b4912001521702b5f74c54250d3ba8b9c0e6ee18fa6124a8769bd917_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
