<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_53cffb39e2741b475995220b9752f0b648b1f897c6060d4f8f11efcb8503422e extends Twig_Template
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
        $__internal_0ef33b0eea63f1486914556c8e1e9d05452fd7b09477ab54320ec91f35366020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef33b0eea63f1486914556c8e1e9d05452fd7b09477ab54320ec91f35366020->enter($__internal_0ef33b0eea63f1486914556c8e1e9d05452fd7b09477ab54320ec91f35366020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_27e397bd9d5f96603f1d2a355b21d5506e0461c5246450d12ba1ea9c6e77420e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e397bd9d5f96603f1d2a355b21d5506e0461c5246450d12ba1ea9c6e77420e->enter($__internal_27e397bd9d5f96603f1d2a355b21d5506e0461c5246450d12ba1ea9c6e77420e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0ef33b0eea63f1486914556c8e1e9d05452fd7b09477ab54320ec91f35366020->leave($__internal_0ef33b0eea63f1486914556c8e1e9d05452fd7b09477ab54320ec91f35366020_prof);

        
        $__internal_27e397bd9d5f96603f1d2a355b21d5506e0461c5246450d12ba1ea9c6e77420e->leave($__internal_27e397bd9d5f96603f1d2a355b21d5506e0461c5246450d12ba1ea9c6e77420e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
