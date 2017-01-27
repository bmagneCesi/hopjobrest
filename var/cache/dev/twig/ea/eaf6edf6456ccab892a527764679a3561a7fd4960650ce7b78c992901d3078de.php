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
        $__internal_1749264b4c832f9206e904244909ecc9e648492e3022e7f562de0f32d01846aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1749264b4c832f9206e904244909ecc9e648492e3022e7f562de0f32d01846aa->enter($__internal_1749264b4c832f9206e904244909ecc9e648492e3022e7f562de0f32d01846aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_72b81719c97613d817a8b24ed8380400d4b677a3bf61c71d51537e1fb2e8fcc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b81719c97613d817a8b24ed8380400d4b677a3bf61c71d51537e1fb2e8fcc5->enter($__internal_72b81719c97613d817a8b24ed8380400d4b677a3bf61c71d51537e1fb2e8fcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1749264b4c832f9206e904244909ecc9e648492e3022e7f562de0f32d01846aa->leave($__internal_1749264b4c832f9206e904244909ecc9e648492e3022e7f562de0f32d01846aa_prof);

        
        $__internal_72b81719c97613d817a8b24ed8380400d4b677a3bf61c71d51537e1fb2e8fcc5->leave($__internal_72b81719c97613d817a8b24ed8380400d4b677a3bf61c71d51537e1fb2e8fcc5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c52310cfedee7dc95c62d5e5687b7c039e7d2c368e3da40be7de06c6fd5c2f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52310cfedee7dc95c62d5e5687b7c039e7d2c368e3da40be7de06c6fd5c2f48->enter($__internal_c52310cfedee7dc95c62d5e5687b7c039e7d2c368e3da40be7de06c6fd5c2f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_92d0fbd199213c8d1813e8750d702ab9e1aa65d7105ee1bca612b1e61367b020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d0fbd199213c8d1813e8750d702ab9e1aa65d7105ee1bca612b1e61367b020->enter($__internal_92d0fbd199213c8d1813e8750d702ab9e1aa65d7105ee1bca612b1e61367b020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_92d0fbd199213c8d1813e8750d702ab9e1aa65d7105ee1bca612b1e61367b020->leave($__internal_92d0fbd199213c8d1813e8750d702ab9e1aa65d7105ee1bca612b1e61367b020_prof);

        
        $__internal_c52310cfedee7dc95c62d5e5687b7c039e7d2c368e3da40be7de06c6fd5c2f48->leave($__internal_c52310cfedee7dc95c62d5e5687b7c039e7d2c368e3da40be7de06c6fd5c2f48_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ab0a9e40a2fc7eb7cfa384b56d8a7c5d73dc1fa485867ec36e2f626f8472878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab0a9e40a2fc7eb7cfa384b56d8a7c5d73dc1fa485867ec36e2f626f8472878->enter($__internal_5ab0a9e40a2fc7eb7cfa384b56d8a7c5d73dc1fa485867ec36e2f626f8472878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98f16abdacf759de4ec8174a72c84f4b441e39ecf500863a908ba2a8178de7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f16abdacf759de4ec8174a72c84f4b441e39ecf500863a908ba2a8178de7f1->enter($__internal_98f16abdacf759de4ec8174a72c84f4b441e39ecf500863a908ba2a8178de7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_98f16abdacf759de4ec8174a72c84f4b441e39ecf500863a908ba2a8178de7f1->leave($__internal_98f16abdacf759de4ec8174a72c84f4b441e39ecf500863a908ba2a8178de7f1_prof);

        
        $__internal_5ab0a9e40a2fc7eb7cfa384b56d8a7c5d73dc1fa485867ec36e2f626f8472878->leave($__internal_5ab0a9e40a2fc7eb7cfa384b56d8a7c5d73dc1fa485867ec36e2f626f8472878_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0b044572becb3252401e7f0f2eab90285c154a77088263116ed719f2ab6c20f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b044572becb3252401e7f0f2eab90285c154a77088263116ed719f2ab6c20f->enter($__internal_a0b044572becb3252401e7f0f2eab90285c154a77088263116ed719f2ab6c20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2583bae0c615269d0f960531f9f8d3fe2ff0757810a6f34856abb3486cdf97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2583bae0c615269d0f960531f9f8d3fe2ff0757810a6f34856abb3486cdf97c->enter($__internal_c2583bae0c615269d0f960531f9f8d3fe2ff0757810a6f34856abb3486cdf97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c2583bae0c615269d0f960531f9f8d3fe2ff0757810a6f34856abb3486cdf97c->leave($__internal_c2583bae0c615269d0f960531f9f8d3fe2ff0757810a6f34856abb3486cdf97c_prof);

        
        $__internal_a0b044572becb3252401e7f0f2eab90285c154a77088263116ed719f2ab6c20f->leave($__internal_a0b044572becb3252401e7f0f2eab90285c154a77088263116ed719f2ab6c20f_prof);

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
