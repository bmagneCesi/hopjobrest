<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_48d41f524b5e1d5f24d03e1a3afe7423b6a4b18e52500c710cad310e5b28992b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36242370db3cf17cc06feae53ebba40dbe1ac03d7c0a6fedf8280c7b3edeae7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36242370db3cf17cc06feae53ebba40dbe1ac03d7c0a6fedf8280c7b3edeae7e->enter($__internal_36242370db3cf17cc06feae53ebba40dbe1ac03d7c0a6fedf8280c7b3edeae7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_26cddb3b4ac7270c27f814d162fdd481b6e24b83f31a7d2c15b2f41de1a041fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26cddb3b4ac7270c27f814d162fdd481b6e24b83f31a7d2c15b2f41de1a041fc->enter($__internal_26cddb3b4ac7270c27f814d162fdd481b6e24b83f31a7d2c15b2f41de1a041fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36242370db3cf17cc06feae53ebba40dbe1ac03d7c0a6fedf8280c7b3edeae7e->leave($__internal_36242370db3cf17cc06feae53ebba40dbe1ac03d7c0a6fedf8280c7b3edeae7e_prof);

        
        $__internal_26cddb3b4ac7270c27f814d162fdd481b6e24b83f31a7d2c15b2f41de1a041fc->leave($__internal_26cddb3b4ac7270c27f814d162fdd481b6e24b83f31a7d2c15b2f41de1a041fc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_43561e3af173846f3f4f9127e99cda4320b3d6312098b03a52e98236a999a05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43561e3af173846f3f4f9127e99cda4320b3d6312098b03a52e98236a999a05a->enter($__internal_43561e3af173846f3f4f9127e99cda4320b3d6312098b03a52e98236a999a05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2cd7b666dbf58863542c958f26ab7e9a3ae5f9d0959d9723a1e8b67d7ac6273d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd7b666dbf58863542c958f26ab7e9a3ae5f9d0959d9723a1e8b67d7ac6273d->enter($__internal_2cd7b666dbf58863542c958f26ab7e9a3ae5f9d0959d9723a1e8b67d7ac6273d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2cd7b666dbf58863542c958f26ab7e9a3ae5f9d0959d9723a1e8b67d7ac6273d->leave($__internal_2cd7b666dbf58863542c958f26ab7e9a3ae5f9d0959d9723a1e8b67d7ac6273d_prof);

        
        $__internal_43561e3af173846f3f4f9127e99cda4320b3d6312098b03a52e98236a999a05a->leave($__internal_43561e3af173846f3f4f9127e99cda4320b3d6312098b03a52e98236a999a05a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
