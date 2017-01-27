<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_2f0abc36a76879b2101380feaff1e568534bca7fec586d3e6613e4bf840a4f59 extends Twig_Template
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
        $__internal_a6ec01f07abbf356a9b0c206af64a899abb502ee035a4823ef0ad513e1e4b17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6ec01f07abbf356a9b0c206af64a899abb502ee035a4823ef0ad513e1e4b17f->enter($__internal_a6ec01f07abbf356a9b0c206af64a899abb502ee035a4823ef0ad513e1e4b17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_69af3e7156e168a823f239ec49b6064ffc9ee3af8f78a58cdbeb1d38670f6541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69af3e7156e168a823f239ec49b6064ffc9ee3af8f78a58cdbeb1d38670f6541->enter($__internal_69af3e7156e168a823f239ec49b6064ffc9ee3af8f78a58cdbeb1d38670f6541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a6ec01f07abbf356a9b0c206af64a899abb502ee035a4823ef0ad513e1e4b17f->leave($__internal_a6ec01f07abbf356a9b0c206af64a899abb502ee035a4823ef0ad513e1e4b17f_prof);

        
        $__internal_69af3e7156e168a823f239ec49b6064ffc9ee3af8f78a58cdbeb1d38670f6541->leave($__internal_69af3e7156e168a823f239ec49b6064ffc9ee3af8f78a58cdbeb1d38670f6541_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
