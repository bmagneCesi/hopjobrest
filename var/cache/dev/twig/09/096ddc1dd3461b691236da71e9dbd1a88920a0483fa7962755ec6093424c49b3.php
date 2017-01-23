<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_35559e23a2a8137c2affca3a547cf70ac2fae06a66e9b4a770cf9caeeebaa7d9 extends Twig_Template
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
        $__internal_0232a183cd1c00a1ad7856842e1cabad8b6ae7a1979e15208b433806ccb54062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0232a183cd1c00a1ad7856842e1cabad8b6ae7a1979e15208b433806ccb54062->enter($__internal_0232a183cd1c00a1ad7856842e1cabad8b6ae7a1979e15208b433806ccb54062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_64b7e056516e88d3c39eb4d5eddb06be9a451605b20e1c0b767228832af928f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b7e056516e88d3c39eb4d5eddb06be9a451605b20e1c0b767228832af928f1->enter($__internal_64b7e056516e88d3c39eb4d5eddb06be9a451605b20e1c0b767228832af928f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0232a183cd1c00a1ad7856842e1cabad8b6ae7a1979e15208b433806ccb54062->leave($__internal_0232a183cd1c00a1ad7856842e1cabad8b6ae7a1979e15208b433806ccb54062_prof);

        
        $__internal_64b7e056516e88d3c39eb4d5eddb06be9a451605b20e1c0b767228832af928f1->leave($__internal_64b7e056516e88d3c39eb4d5eddb06be9a451605b20e1c0b767228832af928f1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
