<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_cf9581aa86eec52dba10373b1433911c1560c0ccbd1e257c7d27183edb822756 extends Twig_Template
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
        $__internal_a86d460064946f603a0473c3236debec47b74b1a3c76a399a055c95f5a45a0d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a86d460064946f603a0473c3236debec47b74b1a3c76a399a055c95f5a45a0d0->enter($__internal_a86d460064946f603a0473c3236debec47b74b1a3c76a399a055c95f5a45a0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_5e7b159815424e426a70c162a6fd8935263220cffe9ee66d74d676e7067a00ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7b159815424e426a70c162a6fd8935263220cffe9ee66d74d676e7067a00ab->enter($__internal_5e7b159815424e426a70c162a6fd8935263220cffe9ee66d74d676e7067a00ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_a86d460064946f603a0473c3236debec47b74b1a3c76a399a055c95f5a45a0d0->leave($__internal_a86d460064946f603a0473c3236debec47b74b1a3c76a399a055c95f5a45a0d0_prof);

        
        $__internal_5e7b159815424e426a70c162a6fd8935263220cffe9ee66d74d676e7067a00ab->leave($__internal_5e7b159815424e426a70c162a6fd8935263220cffe9ee66d74d676e7067a00ab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
