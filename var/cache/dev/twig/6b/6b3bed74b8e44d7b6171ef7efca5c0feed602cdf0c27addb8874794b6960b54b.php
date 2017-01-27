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
        $__internal_32a71a2f61e4ce1b330f16a2304130325b40b44ff6774ee1a0f645b13e260d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a71a2f61e4ce1b330f16a2304130325b40b44ff6774ee1a0f645b13e260d04->enter($__internal_32a71a2f61e4ce1b330f16a2304130325b40b44ff6774ee1a0f645b13e260d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_46a8cea87eb5cac59a2581930a12041dae4cde18f6e4f7676487e52c079f43a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a8cea87eb5cac59a2581930a12041dae4cde18f6e4f7676487e52c079f43a2->enter($__internal_46a8cea87eb5cac59a2581930a12041dae4cde18f6e4f7676487e52c079f43a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_32a71a2f61e4ce1b330f16a2304130325b40b44ff6774ee1a0f645b13e260d04->leave($__internal_32a71a2f61e4ce1b330f16a2304130325b40b44ff6774ee1a0f645b13e260d04_prof);

        
        $__internal_46a8cea87eb5cac59a2581930a12041dae4cde18f6e4f7676487e52c079f43a2->leave($__internal_46a8cea87eb5cac59a2581930a12041dae4cde18f6e4f7676487e52c079f43a2_prof);

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
