<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_60ccab1ae98bc49f6dc172751e57766837a820c9da1545a7405627a9f96c589e extends Twig_Template
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
        $__internal_bf01508bf951e732fa2334270c0428d1b62c07a810a8a007607d98b32e96273b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf01508bf951e732fa2334270c0428d1b62c07a810a8a007607d98b32e96273b->enter($__internal_bf01508bf951e732fa2334270c0428d1b62c07a810a8a007607d98b32e96273b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_20f445f52b0205ecee6f3d5f75ee0a0a510dbb4a4ebb1af69825742da1f12227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f445f52b0205ecee6f3d5f75ee0a0a510dbb4a4ebb1af69825742da1f12227->enter($__internal_20f445f52b0205ecee6f3d5f75ee0a0a510dbb4a4ebb1af69825742da1f12227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bf01508bf951e732fa2334270c0428d1b62c07a810a8a007607d98b32e96273b->leave($__internal_bf01508bf951e732fa2334270c0428d1b62c07a810a8a007607d98b32e96273b_prof);

        
        $__internal_20f445f52b0205ecee6f3d5f75ee0a0a510dbb4a4ebb1af69825742da1f12227->leave($__internal_20f445f52b0205ecee6f3d5f75ee0a0a510dbb4a4ebb1af69825742da1f12227_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
