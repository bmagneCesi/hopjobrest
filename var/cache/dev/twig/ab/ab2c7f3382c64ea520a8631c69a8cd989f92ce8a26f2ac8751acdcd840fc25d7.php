<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d8a5f79ca1204afe21050cd49d1e5b4c552b7664b24aaa5da84e1944e5a5e515 extends Twig_Template
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
        $__internal_acfee17b895911484832f39ba2a5dbede444ca477ac8ee590ed688f676cf86c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acfee17b895911484832f39ba2a5dbede444ca477ac8ee590ed688f676cf86c9->enter($__internal_acfee17b895911484832f39ba2a5dbede444ca477ac8ee590ed688f676cf86c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_5999f9f066d0c2be79854db2f368f8d6036fe874ef1805386b44f6dae6e9c2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5999f9f066d0c2be79854db2f368f8d6036fe874ef1805386b44f6dae6e9c2f2->enter($__internal_5999f9f066d0c2be79854db2f368f8d6036fe874ef1805386b44f6dae6e9c2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_acfee17b895911484832f39ba2a5dbede444ca477ac8ee590ed688f676cf86c9->leave($__internal_acfee17b895911484832f39ba2a5dbede444ca477ac8ee590ed688f676cf86c9_prof);

        
        $__internal_5999f9f066d0c2be79854db2f368f8d6036fe874ef1805386b44f6dae6e9c2f2->leave($__internal_5999f9f066d0c2be79854db2f368f8d6036fe874ef1805386b44f6dae6e9c2f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
