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
        $__internal_b7d53c20f0f039845ec5a05a722451a1142bf54095205234fdb789a7d1888c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d53c20f0f039845ec5a05a722451a1142bf54095205234fdb789a7d1888c1f->enter($__internal_b7d53c20f0f039845ec5a05a722451a1142bf54095205234fdb789a7d1888c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_fff8d8c2225c4e536895b0666f050cfbef1303b8b5c9c73f1d59aea646d29bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff8d8c2225c4e536895b0666f050cfbef1303b8b5c9c73f1d59aea646d29bbc->enter($__internal_fff8d8c2225c4e536895b0666f050cfbef1303b8b5c9c73f1d59aea646d29bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7d53c20f0f039845ec5a05a722451a1142bf54095205234fdb789a7d1888c1f->leave($__internal_b7d53c20f0f039845ec5a05a722451a1142bf54095205234fdb789a7d1888c1f_prof);

        
        $__internal_fff8d8c2225c4e536895b0666f050cfbef1303b8b5c9c73f1d59aea646d29bbc->leave($__internal_fff8d8c2225c4e536895b0666f050cfbef1303b8b5c9c73f1d59aea646d29bbc_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ea03680eff60662f6104130b7b2594a056dc93ecf5e6ea82cedc66cbe0ff5f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea03680eff60662f6104130b7b2594a056dc93ecf5e6ea82cedc66cbe0ff5f8c->enter($__internal_ea03680eff60662f6104130b7b2594a056dc93ecf5e6ea82cedc66cbe0ff5f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b635b6ff412f749703fee27878c89e2a7812bbce46c6e65ab96c90007e1de643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b635b6ff412f749703fee27878c89e2a7812bbce46c6e65ab96c90007e1de643->enter($__internal_b635b6ff412f749703fee27878c89e2a7812bbce46c6e65ab96c90007e1de643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b635b6ff412f749703fee27878c89e2a7812bbce46c6e65ab96c90007e1de643->leave($__internal_b635b6ff412f749703fee27878c89e2a7812bbce46c6e65ab96c90007e1de643_prof);

        
        $__internal_ea03680eff60662f6104130b7b2594a056dc93ecf5e6ea82cedc66cbe0ff5f8c->leave($__internal_ea03680eff60662f6104130b7b2594a056dc93ecf5e6ea82cedc66cbe0ff5f8c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fdaa9cc5adcf3fb6969d8c5a3fbff8f8d63fdf518140b84e66775f8bf6e7bffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdaa9cc5adcf3fb6969d8c5a3fbff8f8d63fdf518140b84e66775f8bf6e7bffc->enter($__internal_fdaa9cc5adcf3fb6969d8c5a3fbff8f8d63fdf518140b84e66775f8bf6e7bffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_20d7bcfdf4d0014402ba57001c08f217231f392fe76b9df03fbf5299caf90cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d7bcfdf4d0014402ba57001c08f217231f392fe76b9df03fbf5299caf90cda->enter($__internal_20d7bcfdf4d0014402ba57001c08f217231f392fe76b9df03fbf5299caf90cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_20d7bcfdf4d0014402ba57001c08f217231f392fe76b9df03fbf5299caf90cda->leave($__internal_20d7bcfdf4d0014402ba57001c08f217231f392fe76b9df03fbf5299caf90cda_prof);

        
        $__internal_fdaa9cc5adcf3fb6969d8c5a3fbff8f8d63fdf518140b84e66775f8bf6e7bffc->leave($__internal_fdaa9cc5adcf3fb6969d8c5a3fbff8f8d63fdf518140b84e66775f8bf6e7bffc_prof);

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
