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
        $__internal_f75ad4e5b4c2dbed7cc0a28a9442611f55b1669c7b4e73a5ab2cc867e82546d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75ad4e5b4c2dbed7cc0a28a9442611f55b1669c7b4e73a5ab2cc867e82546d6->enter($__internal_f75ad4e5b4c2dbed7cc0a28a9442611f55b1669c7b4e73a5ab2cc867e82546d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_9445c275a0c5f55fdc6a46cee1e806e9160c0fe217733cf5023148455560fa3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9445c275a0c5f55fdc6a46cee1e806e9160c0fe217733cf5023148455560fa3b->enter($__internal_9445c275a0c5f55fdc6a46cee1e806e9160c0fe217733cf5023148455560fa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f75ad4e5b4c2dbed7cc0a28a9442611f55b1669c7b4e73a5ab2cc867e82546d6->leave($__internal_f75ad4e5b4c2dbed7cc0a28a9442611f55b1669c7b4e73a5ab2cc867e82546d6_prof);

        
        $__internal_9445c275a0c5f55fdc6a46cee1e806e9160c0fe217733cf5023148455560fa3b->leave($__internal_9445c275a0c5f55fdc6a46cee1e806e9160c0fe217733cf5023148455560fa3b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48f4689a6558148f394c0b008468f17c6c82aa55f79d2f9d387a675794a89a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f4689a6558148f394c0b008468f17c6c82aa55f79d2f9d387a675794a89a84->enter($__internal_48f4689a6558148f394c0b008468f17c6c82aa55f79d2f9d387a675794a89a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8c147afc022663f6a7ed3db34e57e7dc4fe9aa779d93e30b471b6714032bfb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c147afc022663f6a7ed3db34e57e7dc4fe9aa779d93e30b471b6714032bfb36->enter($__internal_8c147afc022663f6a7ed3db34e57e7dc4fe9aa779d93e30b471b6714032bfb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8c147afc022663f6a7ed3db34e57e7dc4fe9aa779d93e30b471b6714032bfb36->leave($__internal_8c147afc022663f6a7ed3db34e57e7dc4fe9aa779d93e30b471b6714032bfb36_prof);

        
        $__internal_48f4689a6558148f394c0b008468f17c6c82aa55f79d2f9d387a675794a89a84->leave($__internal_48f4689a6558148f394c0b008468f17c6c82aa55f79d2f9d387a675794a89a84_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_708012280e62deeb4a42b208a2475873d4d855f9dd19e21e13d2471686467439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708012280e62deeb4a42b208a2475873d4d855f9dd19e21e13d2471686467439->enter($__internal_708012280e62deeb4a42b208a2475873d4d855f9dd19e21e13d2471686467439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b181b5531d0eda9fb3579ad1c7c37b9deb79154596e3a1751451da7f6934b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b181b5531d0eda9fb3579ad1c7c37b9deb79154596e3a1751451da7f6934b21->enter($__internal_4b181b5531d0eda9fb3579ad1c7c37b9deb79154596e3a1751451da7f6934b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4b181b5531d0eda9fb3579ad1c7c37b9deb79154596e3a1751451da7f6934b21->leave($__internal_4b181b5531d0eda9fb3579ad1c7c37b9deb79154596e3a1751451da7f6934b21_prof);

        
        $__internal_708012280e62deeb4a42b208a2475873d4d855f9dd19e21e13d2471686467439->leave($__internal_708012280e62deeb4a42b208a2475873d4d855f9dd19e21e13d2471686467439_prof);

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
