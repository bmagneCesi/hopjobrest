<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_6531444ead0163edc5b0ce7b67b2b7164e092a598d5885e2092e2e990aa6f808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad8d308ed7cd22f3d42549d048a7ec86a22f0dce4ad8ce4f529b1584d234e582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8d308ed7cd22f3d42549d048a7ec86a22f0dce4ad8ce4f529b1584d234e582->enter($__internal_ad8d308ed7cd22f3d42549d048a7ec86a22f0dce4ad8ce4f529b1584d234e582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_8e7d1809c81a524c20b575616403190cfa86c0538c48d4549acb248871fe7a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7d1809c81a524c20b575616403190cfa86c0538c48d4549acb248871fe7a9a->enter($__internal_8e7d1809c81a524c20b575616403190cfa86c0538c48d4549acb248871fe7a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad8d308ed7cd22f3d42549d048a7ec86a22f0dce4ad8ce4f529b1584d234e582->leave($__internal_ad8d308ed7cd22f3d42549d048a7ec86a22f0dce4ad8ce4f529b1584d234e582_prof);

        
        $__internal_8e7d1809c81a524c20b575616403190cfa86c0538c48d4549acb248871fe7a9a->leave($__internal_8e7d1809c81a524c20b575616403190cfa86c0538c48d4549acb248871fe7a9a_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2e4c68e0d662d67ff73d73783d533ff65251bb60190fec4777f2cf3f90924a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4c68e0d662d67ff73d73783d533ff65251bb60190fec4777f2cf3f90924a41->enter($__internal_2e4c68e0d662d67ff73d73783d533ff65251bb60190fec4777f2cf3f90924a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_516940ba523fd2cc2ad7bfa342af7b96ec4a393f956c0e98088975ee3484e867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516940ba523fd2cc2ad7bfa342af7b96ec4a393f956c0e98088975ee3484e867->enter($__internal_516940ba523fd2cc2ad7bfa342af7b96ec4a393f956c0e98088975ee3484e867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_516940ba523fd2cc2ad7bfa342af7b96ec4a393f956c0e98088975ee3484e867->leave($__internal_516940ba523fd2cc2ad7bfa342af7b96ec4a393f956c0e98088975ee3484e867_prof);

        
        $__internal_2e4c68e0d662d67ff73d73783d533ff65251bb60190fec4777f2cf3f90924a41->leave($__internal_2e4c68e0d662d67ff73d73783d533ff65251bb60190fec4777f2cf3f90924a41_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a6a776d26d392910772eca8f10aed39d46d0a96c2ff542de987337b80db7d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a6a776d26d392910772eca8f10aed39d46d0a96c2ff542de987337b80db7d41->enter($__internal_6a6a776d26d392910772eca8f10aed39d46d0a96c2ff542de987337b80db7d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_300a461076809ef4bdf62ee17061602b58adc28897014c358becb7cbd095bd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300a461076809ef4bdf62ee17061602b58adc28897014c358becb7cbd095bd6a->enter($__internal_300a461076809ef4bdf62ee17061602b58adc28897014c358becb7cbd095bd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_300a461076809ef4bdf62ee17061602b58adc28897014c358becb7cbd095bd6a->leave($__internal_300a461076809ef4bdf62ee17061602b58adc28897014c358becb7cbd095bd6a_prof);

        
        $__internal_6a6a776d26d392910772eca8f10aed39d46d0a96c2ff542de987337b80db7d41->leave($__internal_6a6a776d26d392910772eca8f10aed39d46d0a96c2ff542de987337b80db7d41_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
