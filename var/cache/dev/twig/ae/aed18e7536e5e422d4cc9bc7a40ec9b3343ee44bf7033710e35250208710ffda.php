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
        $__internal_017e7f03f37a48f0c31c915ed6fe6d32906ddfa0dc1801af045603bd8ce06fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017e7f03f37a48f0c31c915ed6fe6d32906ddfa0dc1801af045603bd8ce06fc0->enter($__internal_017e7f03f37a48f0c31c915ed6fe6d32906ddfa0dc1801af045603bd8ce06fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_80aaa067acd74dbbd3c4cccbe052c6371c1e372001e3b9df4097f952d1e5e8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80aaa067acd74dbbd3c4cccbe052c6371c1e372001e3b9df4097f952d1e5e8e6->enter($__internal_80aaa067acd74dbbd3c4cccbe052c6371c1e372001e3b9df4097f952d1e5e8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_017e7f03f37a48f0c31c915ed6fe6d32906ddfa0dc1801af045603bd8ce06fc0->leave($__internal_017e7f03f37a48f0c31c915ed6fe6d32906ddfa0dc1801af045603bd8ce06fc0_prof);

        
        $__internal_80aaa067acd74dbbd3c4cccbe052c6371c1e372001e3b9df4097f952d1e5e8e6->leave($__internal_80aaa067acd74dbbd3c4cccbe052c6371c1e372001e3b9df4097f952d1e5e8e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49bd221544b6ab80490d1ebd2b21355ea3eaad986f610e61653bc73ca2a9d902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49bd221544b6ab80490d1ebd2b21355ea3eaad986f610e61653bc73ca2a9d902->enter($__internal_49bd221544b6ab80490d1ebd2b21355ea3eaad986f610e61653bc73ca2a9d902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5064fac7d189cc482db5d66c1b98b6a5c3b7945ed2f187c5475c9b3b85a561bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5064fac7d189cc482db5d66c1b98b6a5c3b7945ed2f187c5475c9b3b85a561bf->enter($__internal_5064fac7d189cc482db5d66c1b98b6a5c3b7945ed2f187c5475c9b3b85a561bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5064fac7d189cc482db5d66c1b98b6a5c3b7945ed2f187c5475c9b3b85a561bf->leave($__internal_5064fac7d189cc482db5d66c1b98b6a5c3b7945ed2f187c5475c9b3b85a561bf_prof);

        
        $__internal_49bd221544b6ab80490d1ebd2b21355ea3eaad986f610e61653bc73ca2a9d902->leave($__internal_49bd221544b6ab80490d1ebd2b21355ea3eaad986f610e61653bc73ca2a9d902_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5015b9a4431994068ecf05ecb5a66e85e55d984218b5c90a4498cb591fa3956f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5015b9a4431994068ecf05ecb5a66e85e55d984218b5c90a4498cb591fa3956f->enter($__internal_5015b9a4431994068ecf05ecb5a66e85e55d984218b5c90a4498cb591fa3956f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cbe64082ca45a03d56f6ffe55e0ca6b1541647c6dc289eb38505df85efd6f726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe64082ca45a03d56f6ffe55e0ca6b1541647c6dc289eb38505df85efd6f726->enter($__internal_cbe64082ca45a03d56f6ffe55e0ca6b1541647c6dc289eb38505df85efd6f726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cbe64082ca45a03d56f6ffe55e0ca6b1541647c6dc289eb38505df85efd6f726->leave($__internal_cbe64082ca45a03d56f6ffe55e0ca6b1541647c6dc289eb38505df85efd6f726_prof);

        
        $__internal_5015b9a4431994068ecf05ecb5a66e85e55d984218b5c90a4498cb591fa3956f->leave($__internal_5015b9a4431994068ecf05ecb5a66e85e55d984218b5c90a4498cb591fa3956f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_906bc9c3c18731e814ebaacf9b6f7831f0a7d127db03faebe2472b5d0bf3e4c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906bc9c3c18731e814ebaacf9b6f7831f0a7d127db03faebe2472b5d0bf3e4c4->enter($__internal_906bc9c3c18731e814ebaacf9b6f7831f0a7d127db03faebe2472b5d0bf3e4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6570ef4bc27c99b16f26823ab756b4e9ae2f1a9d3f8cc0c8b90b85e4a420b219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6570ef4bc27c99b16f26823ab756b4e9ae2f1a9d3f8cc0c8b90b85e4a420b219->enter($__internal_6570ef4bc27c99b16f26823ab756b4e9ae2f1a9d3f8cc0c8b90b85e4a420b219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6570ef4bc27c99b16f26823ab756b4e9ae2f1a9d3f8cc0c8b90b85e4a420b219->leave($__internal_6570ef4bc27c99b16f26823ab756b4e9ae2f1a9d3f8cc0c8b90b85e4a420b219_prof);

        
        $__internal_906bc9c3c18731e814ebaacf9b6f7831f0a7d127db03faebe2472b5d0bf3e4c4->leave($__internal_906bc9c3c18731e814ebaacf9b6f7831f0a7d127db03faebe2472b5d0bf3e4c4_prof);

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
