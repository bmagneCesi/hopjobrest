<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_a6acca79c3251dcf08945d2a6cd705dd46f3c9e92e501058b08e6b3541c56684 extends Twig_Template
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
        $__internal_a0b5c0296df7e9306244de6ab078f1c137edabf28c158a7787d292792c2fee55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b5c0296df7e9306244de6ab078f1c137edabf28c158a7787d292792c2fee55->enter($__internal_a0b5c0296df7e9306244de6ab078f1c137edabf28c158a7787d292792c2fee55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_060587a97469d8b4699a801ece0c6bdebfdde1410e229547835cd77248f6f630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060587a97469d8b4699a801ece0c6bdebfdde1410e229547835cd77248f6f630->enter($__internal_060587a97469d8b4699a801ece0c6bdebfdde1410e229547835cd77248f6f630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a0b5c0296df7e9306244de6ab078f1c137edabf28c158a7787d292792c2fee55->leave($__internal_a0b5c0296df7e9306244de6ab078f1c137edabf28c158a7787d292792c2fee55_prof);

        
        $__internal_060587a97469d8b4699a801ece0c6bdebfdde1410e229547835cd77248f6f630->leave($__internal_060587a97469d8b4699a801ece0c6bdebfdde1410e229547835cd77248f6f630_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Applications/MAMP/htdocs/hopjob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
