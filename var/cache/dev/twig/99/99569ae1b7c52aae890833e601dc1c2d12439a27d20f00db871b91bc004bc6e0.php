<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f9d0643677e54094d23d82b3ea78f8acc0aeccb706212c05826a7854cf29aff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_52aa389cea0dd4b45a6988b1ee5e922bfe118c9d25880c00fad4a6125a98a7ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52aa389cea0dd4b45a6988b1ee5e922bfe118c9d25880c00fad4a6125a98a7ab->enter($__internal_52aa389cea0dd4b45a6988b1ee5e922bfe118c9d25880c00fad4a6125a98a7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_996c9c13d446ba65d99c96d6c58d08038bf28974c6c2df51f82a7024a70855da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996c9c13d446ba65d99c96d6c58d08038bf28974c6c2df51f82a7024a70855da->enter($__internal_996c9c13d446ba65d99c96d6c58d08038bf28974c6c2df51f82a7024a70855da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52aa389cea0dd4b45a6988b1ee5e922bfe118c9d25880c00fad4a6125a98a7ab->leave($__internal_52aa389cea0dd4b45a6988b1ee5e922bfe118c9d25880c00fad4a6125a98a7ab_prof);

        
        $__internal_996c9c13d446ba65d99c96d6c58d08038bf28974c6c2df51f82a7024a70855da->leave($__internal_996c9c13d446ba65d99c96d6c58d08038bf28974c6c2df51f82a7024a70855da_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15b668947d3c21c421def369b90db336228bfc2027f2bb34623e6133fe99aea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b668947d3c21c421def369b90db336228bfc2027f2bb34623e6133fe99aea9->enter($__internal_15b668947d3c21c421def369b90db336228bfc2027f2bb34623e6133fe99aea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_681acf43714aa24605a646a87b7281f13d4e24cda8bf75fd0e5a510f59ce0d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681acf43714aa24605a646a87b7281f13d4e24cda8bf75fd0e5a510f59ce0d33->enter($__internal_681acf43714aa24605a646a87b7281f13d4e24cda8bf75fd0e5a510f59ce0d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_681acf43714aa24605a646a87b7281f13d4e24cda8bf75fd0e5a510f59ce0d33->leave($__internal_681acf43714aa24605a646a87b7281f13d4e24cda8bf75fd0e5a510f59ce0d33_prof);

        
        $__internal_15b668947d3c21c421def369b90db336228bfc2027f2bb34623e6133fe99aea9->leave($__internal_15b668947d3c21c421def369b90db336228bfc2027f2bb34623e6133fe99aea9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_617ddcb6be3def2d80a886d704a744067fc5976ebf6e75493fe614200436bc30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617ddcb6be3def2d80a886d704a744067fc5976ebf6e75493fe614200436bc30->enter($__internal_617ddcb6be3def2d80a886d704a744067fc5976ebf6e75493fe614200436bc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd619243fac22f79e091d1d02ed8906a4b3cb385d3bd43a8ab83315cf394c5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd619243fac22f79e091d1d02ed8906a4b3cb385d3bd43a8ab83315cf394c5f8->enter($__internal_dd619243fac22f79e091d1d02ed8906a4b3cb385d3bd43a8ab83315cf394c5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_dd619243fac22f79e091d1d02ed8906a4b3cb385d3bd43a8ab83315cf394c5f8->leave($__internal_dd619243fac22f79e091d1d02ed8906a4b3cb385d3bd43a8ab83315cf394c5f8_prof);

        
        $__internal_617ddcb6be3def2d80a886d704a744067fc5976ebf6e75493fe614200436bc30->leave($__internal_617ddcb6be3def2d80a886d704a744067fc5976ebf6e75493fe614200436bc30_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
