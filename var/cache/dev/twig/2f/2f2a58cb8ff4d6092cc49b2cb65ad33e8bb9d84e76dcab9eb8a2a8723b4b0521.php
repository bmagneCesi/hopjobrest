<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_9bec2cb366f3c3c697d0661247e618e3b9cae099356c3bf454e5436a1a4b84a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da11a44b5ad598a61a9069eac71b4f307a3166933162eb11b4f11fa6dcebfe82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da11a44b5ad598a61a9069eac71b4f307a3166933162eb11b4f11fa6dcebfe82->enter($__internal_da11a44b5ad598a61a9069eac71b4f307a3166933162eb11b4f11fa6dcebfe82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_22440f96e0d6cf68958156da693a9368eb95672cd9bc809bfe57c60c1ad35d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22440f96e0d6cf68958156da693a9368eb95672cd9bc809bfe57c60c1ad35d26->enter($__internal_22440f96e0d6cf68958156da693a9368eb95672cd9bc809bfe57c60c1ad35d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da11a44b5ad598a61a9069eac71b4f307a3166933162eb11b4f11fa6dcebfe82->leave($__internal_da11a44b5ad598a61a9069eac71b4f307a3166933162eb11b4f11fa6dcebfe82_prof);

        
        $__internal_22440f96e0d6cf68958156da693a9368eb95672cd9bc809bfe57c60c1ad35d26->leave($__internal_22440f96e0d6cf68958156da693a9368eb95672cd9bc809bfe57c60c1ad35d26_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a81b97be2063034b019d645421e0a9cf9af917f43a04661da1cbd3c4d28d05e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81b97be2063034b019d645421e0a9cf9af917f43a04661da1cbd3c4d28d05e7->enter($__internal_a81b97be2063034b019d645421e0a9cf9af917f43a04661da1cbd3c4d28d05e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6d9653eb79f0e84ba9eabb94e5178d66dbbb2004bd1bee3179b225cfd4823bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d9653eb79f0e84ba9eabb94e5178d66dbbb2004bd1bee3179b225cfd4823bd->enter($__internal_d6d9653eb79f0e84ba9eabb94e5178d66dbbb2004bd1bee3179b225cfd4823bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d6d9653eb79f0e84ba9eabb94e5178d66dbbb2004bd1bee3179b225cfd4823bd->leave($__internal_d6d9653eb79f0e84ba9eabb94e5178d66dbbb2004bd1bee3179b225cfd4823bd_prof);

        
        $__internal_a81b97be2063034b019d645421e0a9cf9af917f43a04661da1cbd3c4d28d05e7->leave($__internal_a81b97be2063034b019d645421e0a9cf9af917f43a04661da1cbd3c4d28d05e7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f53b1f2be3cf309089f3579417cae38e19972bf765d58e358e7e65e84ef9bc99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53b1f2be3cf309089f3579417cae38e19972bf765d58e358e7e65e84ef9bc99->enter($__internal_f53b1f2be3cf309089f3579417cae38e19972bf765d58e358e7e65e84ef9bc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc18b9a9cf0425cff5322ed23814fae9a617a9bd04d18f06b0d8ee7498f70387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc18b9a9cf0425cff5322ed23814fae9a617a9bd04d18f06b0d8ee7498f70387->enter($__internal_fc18b9a9cf0425cff5322ed23814fae9a617a9bd04d18f06b0d8ee7498f70387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_fc18b9a9cf0425cff5322ed23814fae9a617a9bd04d18f06b0d8ee7498f70387->leave($__internal_fc18b9a9cf0425cff5322ed23814fae9a617a9bd04d18f06b0d8ee7498f70387_prof);

        
        $__internal_f53b1f2be3cf309089f3579417cae38e19972bf765d58e358e7e65e84ef9bc99->leave($__internal_f53b1f2be3cf309089f3579417cae38e19972bf765d58e358e7e65e84ef9bc99_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  82 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>{{ file }} <small>line {{ line }}</small></h1>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
