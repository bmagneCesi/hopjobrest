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
        $__internal_14399907d5fcc0e7ce337375206c73ed8d63202fdbda36daf29fc9cb1127a91c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14399907d5fcc0e7ce337375206c73ed8d63202fdbda36daf29fc9cb1127a91c->enter($__internal_14399907d5fcc0e7ce337375206c73ed8d63202fdbda36daf29fc9cb1127a91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_3435e5a7efe42018414931210df9c2f7cc8892c6bafc5bec2e29419d0da07639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3435e5a7efe42018414931210df9c2f7cc8892c6bafc5bec2e29419d0da07639->enter($__internal_3435e5a7efe42018414931210df9c2f7cc8892c6bafc5bec2e29419d0da07639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_14399907d5fcc0e7ce337375206c73ed8d63202fdbda36daf29fc9cb1127a91c->leave($__internal_14399907d5fcc0e7ce337375206c73ed8d63202fdbda36daf29fc9cb1127a91c_prof);

        
        $__internal_3435e5a7efe42018414931210df9c2f7cc8892c6bafc5bec2e29419d0da07639->leave($__internal_3435e5a7efe42018414931210df9c2f7cc8892c6bafc5bec2e29419d0da07639_prof);

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
