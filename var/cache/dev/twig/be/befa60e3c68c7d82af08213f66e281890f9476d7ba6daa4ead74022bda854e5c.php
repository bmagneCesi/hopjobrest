<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e98ecef0f5459f92258f7e10e9f1ce9976b373c113d13dac66deb3f655cdc29b extends Twig_Template
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
        $__internal_b1df14d220d2334c8d5445ec29a92a5324a0ef6af94dc951a6d979f1d4d85ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1df14d220d2334c8d5445ec29a92a5324a0ef6af94dc951a6d979f1d4d85ed2->enter($__internal_b1df14d220d2334c8d5445ec29a92a5324a0ef6af94dc951a6d979f1d4d85ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_7afb5efac40dc144d21130ebc5b9aab63a1913312abffcf0bed2feb3ce459c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afb5efac40dc144d21130ebc5b9aab63a1913312abffcf0bed2feb3ce459c73->enter($__internal_7afb5efac40dc144d21130ebc5b9aab63a1913312abffcf0bed2feb3ce459c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b1df14d220d2334c8d5445ec29a92a5324a0ef6af94dc951a6d979f1d4d85ed2->leave($__internal_b1df14d220d2334c8d5445ec29a92a5324a0ef6af94dc951a6d979f1d4d85ed2_prof);

        
        $__internal_7afb5efac40dc144d21130ebc5b9aab63a1913312abffcf0bed2feb3ce459c73->leave($__internal_7afb5efac40dc144d21130ebc5b9aab63a1913312abffcf0bed2feb3ce459c73_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
