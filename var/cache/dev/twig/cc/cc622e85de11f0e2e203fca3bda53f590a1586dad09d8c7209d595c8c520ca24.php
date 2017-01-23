<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b5dc5a4086d0bd5a883a791f2bb2c564c1c9a8ce99041ca6478472090a147fe9 extends Twig_Template
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
        $__internal_d5608496a8595b5b0a39f2a742de088812dbc9f1fc3c8a7a4c3ddfa15d363c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5608496a8595b5b0a39f2a742de088812dbc9f1fc3c8a7a4c3ddfa15d363c9f->enter($__internal_d5608496a8595b5b0a39f2a742de088812dbc9f1fc3c8a7a4c3ddfa15d363c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_fa2cf867bf3ac055562c999455f1eb2369f6955f00d1d4e5a00da0bbc75549d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2cf867bf3ac055562c999455f1eb2369f6955f00d1d4e5a00da0bbc75549d1->enter($__internal_fa2cf867bf3ac055562c999455f1eb2369f6955f00d1d4e5a00da0bbc75549d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_d5608496a8595b5b0a39f2a742de088812dbc9f1fc3c8a7a4c3ddfa15d363c9f->leave($__internal_d5608496a8595b5b0a39f2a742de088812dbc9f1fc3c8a7a4c3ddfa15d363c9f_prof);

        
        $__internal_fa2cf867bf3ac055562c999455f1eb2369f6955f00d1d4e5a00da0bbc75549d1->leave($__internal_fa2cf867bf3ac055562c999455f1eb2369f6955f00d1d4e5a00da0bbc75549d1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
