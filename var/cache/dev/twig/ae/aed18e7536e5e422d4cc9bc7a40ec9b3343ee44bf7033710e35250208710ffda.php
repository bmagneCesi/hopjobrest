<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_67c5fb8b402a0432c64400dc79f563138dbee8a9408c47ac39b373b5fc6a9cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_146bc36086279af00ba3f01f50ca81e707884c02fd1ecdafff907eed553a18bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146bc36086279af00ba3f01f50ca81e707884c02fd1ecdafff907eed553a18bc->enter($__internal_146bc36086279af00ba3f01f50ca81e707884c02fd1ecdafff907eed553a18bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3976e4b4cca97b735b198099f897794754bbad34db23d2dc0af81a4b556a0181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3976e4b4cca97b735b198099f897794754bbad34db23d2dc0af81a4b556a0181->enter($__internal_3976e4b4cca97b735b198099f897794754bbad34db23d2dc0af81a4b556a0181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_146bc36086279af00ba3f01f50ca81e707884c02fd1ecdafff907eed553a18bc->leave($__internal_146bc36086279af00ba3f01f50ca81e707884c02fd1ecdafff907eed553a18bc_prof);

        
        $__internal_3976e4b4cca97b735b198099f897794754bbad34db23d2dc0af81a4b556a0181->leave($__internal_3976e4b4cca97b735b198099f897794754bbad34db23d2dc0af81a4b556a0181_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b59ea1116deaa5444e496abfa6a8df20279309605f728a886d217a579108a049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59ea1116deaa5444e496abfa6a8df20279309605f728a886d217a579108a049->enter($__internal_b59ea1116deaa5444e496abfa6a8df20279309605f728a886d217a579108a049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_df065f9c0319d724b99ceb197efbc348ca56b5ab7473d29e708bae1a8d732145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df065f9c0319d724b99ceb197efbc348ca56b5ab7473d29e708bae1a8d732145->enter($__internal_df065f9c0319d724b99ceb197efbc348ca56b5ab7473d29e708bae1a8d732145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_df065f9c0319d724b99ceb197efbc348ca56b5ab7473d29e708bae1a8d732145->leave($__internal_df065f9c0319d724b99ceb197efbc348ca56b5ab7473d29e708bae1a8d732145_prof);

        
        $__internal_b59ea1116deaa5444e496abfa6a8df20279309605f728a886d217a579108a049->leave($__internal_b59ea1116deaa5444e496abfa6a8df20279309605f728a886d217a579108a049_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4411619dd4c406b7c6e174c76aec3f2c033db07fd63342820c698a8b9962908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4411619dd4c406b7c6e174c76aec3f2c033db07fd63342820c698a8b9962908->enter($__internal_e4411619dd4c406b7c6e174c76aec3f2c033db07fd63342820c698a8b9962908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6aac8eef541698dc12acd2a41eeebec93d9d86f0c517512ff4847340f0036748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aac8eef541698dc12acd2a41eeebec93d9d86f0c517512ff4847340f0036748->enter($__internal_6aac8eef541698dc12acd2a41eeebec93d9d86f0c517512ff4847340f0036748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6aac8eef541698dc12acd2a41eeebec93d9d86f0c517512ff4847340f0036748->leave($__internal_6aac8eef541698dc12acd2a41eeebec93d9d86f0c517512ff4847340f0036748_prof);

        
        $__internal_e4411619dd4c406b7c6e174c76aec3f2c033db07fd63342820c698a8b9962908->leave($__internal_e4411619dd4c406b7c6e174c76aec3f2c033db07fd63342820c698a8b9962908_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b65433760b98c0d447e518b4415ddabc25f14191255ad50f2066b5f78422de94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65433760b98c0d447e518b4415ddabc25f14191255ad50f2066b5f78422de94->enter($__internal_b65433760b98c0d447e518b4415ddabc25f14191255ad50f2066b5f78422de94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc8579071e308871e725c9870d96583fe708532a69c255b81678f7d64b9ba3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8579071e308871e725c9870d96583fe708532a69c255b81678f7d64b9ba3b4->enter($__internal_dc8579071e308871e725c9870d96583fe708532a69c255b81678f7d64b9ba3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_dc8579071e308871e725c9870d96583fe708532a69c255b81678f7d64b9ba3b4->leave($__internal_dc8579071e308871e725c9870d96583fe708532a69c255b81678f7d64b9ba3b4_prof);

        
        $__internal_b65433760b98c0d447e518b4415ddabc25f14191255ad50f2066b5f78422de94->leave($__internal_b65433760b98c0d447e518b4415ddabc25f14191255ad50f2066b5f78422de94_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
