<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_9c0cf6bdd7000e3acefc95aa38752eb3c7a7d4449238e35ac4e312c0be5e8e8f extends Twig_Template
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
        $__internal_1722f2afbcbd4ed1f0d0984bfbef734d405ce51e6c7b58d97a391d94044ba2b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1722f2afbcbd4ed1f0d0984bfbef734d405ce51e6c7b58d97a391d94044ba2b2->enter($__internal_1722f2afbcbd4ed1f0d0984bfbef734d405ce51e6c7b58d97a391d94044ba2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_69f6528c08b9937b09cef9188c8b52f242377b95e451921f4771e1f9559f99f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f6528c08b9937b09cef9188c8b52f242377b95e451921f4771e1f9559f99f5->enter($__internal_69f6528c08b9937b09cef9188c8b52f242377b95e451921f4771e1f9559f99f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1722f2afbcbd4ed1f0d0984bfbef734d405ce51e6c7b58d97a391d94044ba2b2->leave($__internal_1722f2afbcbd4ed1f0d0984bfbef734d405ce51e6c7b58d97a391d94044ba2b2_prof);

        
        $__internal_69f6528c08b9937b09cef9188c8b52f242377b95e451921f4771e1f9559f99f5->leave($__internal_69f6528c08b9937b09cef9188c8b52f242377b95e451921f4771e1f9559f99f5_prof);

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
", "@Twig/Exception/exception.json.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
