<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dd909c747434b4b23bb77dfa24ae8c39cb2a68f375fbcbb52d5977072b82312d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a32ada143b80ec258d163aab5bc9d4d1cc0cc2a40d2a447356095c049d335587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a32ada143b80ec258d163aab5bc9d4d1cc0cc2a40d2a447356095c049d335587->enter($__internal_a32ada143b80ec258d163aab5bc9d4d1cc0cc2a40d2a447356095c049d335587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f9b72ffcdf9bef1dfb96a6201f54b6fd2ec581a67da0903578edbb1744df2578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b72ffcdf9bef1dfb96a6201f54b6fd2ec581a67da0903578edbb1744df2578->enter($__internal_f9b72ffcdf9bef1dfb96a6201f54b6fd2ec581a67da0903578edbb1744df2578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a32ada143b80ec258d163aab5bc9d4d1cc0cc2a40d2a447356095c049d335587->leave($__internal_a32ada143b80ec258d163aab5bc9d4d1cc0cc2a40d2a447356095c049d335587_prof);

        
        $__internal_f9b72ffcdf9bef1dfb96a6201f54b6fd2ec581a67da0903578edbb1744df2578->leave($__internal_f9b72ffcdf9bef1dfb96a6201f54b6fd2ec581a67da0903578edbb1744df2578_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8dec11b7c73fdf295d14e2eb41bc4cf5a629ff46a537431147621e6a30dfd54e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dec11b7c73fdf295d14e2eb41bc4cf5a629ff46a537431147621e6a30dfd54e->enter($__internal_8dec11b7c73fdf295d14e2eb41bc4cf5a629ff46a537431147621e6a30dfd54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_de411acb90e26ae094087daf7a210773529918bd8719a9a107aaaf66c08e33ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de411acb90e26ae094087daf7a210773529918bd8719a9a107aaaf66c08e33ac->enter($__internal_de411acb90e26ae094087daf7a210773529918bd8719a9a107aaaf66c08e33ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_de411acb90e26ae094087daf7a210773529918bd8719a9a107aaaf66c08e33ac->leave($__internal_de411acb90e26ae094087daf7a210773529918bd8719a9a107aaaf66c08e33ac_prof);

        
        $__internal_8dec11b7c73fdf295d14e2eb41bc4cf5a629ff46a537431147621e6a30dfd54e->leave($__internal_8dec11b7c73fdf295d14e2eb41bc4cf5a629ff46a537431147621e6a30dfd54e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c2089c62bebf18199b8621b943f010ace941464dbd28a21afad36b734f85b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2089c62bebf18199b8621b943f010ace941464dbd28a21afad36b734f85b91->enter($__internal_6c2089c62bebf18199b8621b943f010ace941464dbd28a21afad36b734f85b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4cb763370d23162eb69d737e0a6db9743d5ad990a7c9cda1eabfe5e7bdd04b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb763370d23162eb69d737e0a6db9743d5ad990a7c9cda1eabfe5e7bdd04b35->enter($__internal_4cb763370d23162eb69d737e0a6db9743d5ad990a7c9cda1eabfe5e7bdd04b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4cb763370d23162eb69d737e0a6db9743d5ad990a7c9cda1eabfe5e7bdd04b35->leave($__internal_4cb763370d23162eb69d737e0a6db9743d5ad990a7c9cda1eabfe5e7bdd04b35_prof);

        
        $__internal_6c2089c62bebf18199b8621b943f010ace941464dbd28a21afad36b734f85b91->leave($__internal_6c2089c62bebf18199b8621b943f010ace941464dbd28a21afad36b734f85b91_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_95f852087606e207264c8469443518366512f6359a3b2e521ab4661a1ee88aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f852087606e207264c8469443518366512f6359a3b2e521ab4661a1ee88aa6->enter($__internal_95f852087606e207264c8469443518366512f6359a3b2e521ab4661a1ee88aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7340d1f0ebe138f7912b53129bbae8b1ba5058459e44df5409f60c343b5b765a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7340d1f0ebe138f7912b53129bbae8b1ba5058459e44df5409f60c343b5b765a->enter($__internal_7340d1f0ebe138f7912b53129bbae8b1ba5058459e44df5409f60c343b5b765a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7340d1f0ebe138f7912b53129bbae8b1ba5058459e44df5409f60c343b5b765a->leave($__internal_7340d1f0ebe138f7912b53129bbae8b1ba5058459e44df5409f60c343b5b765a_prof);

        
        $__internal_95f852087606e207264c8469443518366512f6359a3b2e521ab4661a1ee88aa6->leave($__internal_95f852087606e207264c8469443518366512f6359a3b2e521ab4661a1ee88aa6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
