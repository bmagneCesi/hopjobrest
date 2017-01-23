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
        $__internal_3994d4ff26bccfda56debfad773aa30526b592f1f4ccf4648111ac6f9e328e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3994d4ff26bccfda56debfad773aa30526b592f1f4ccf4648111ac6f9e328e16->enter($__internal_3994d4ff26bccfda56debfad773aa30526b592f1f4ccf4648111ac6f9e328e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_81a1ccd1c272f2fd7388cf58b2a74a07241bb1a6b9ca488b01ab68cc1efca430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a1ccd1c272f2fd7388cf58b2a74a07241bb1a6b9ca488b01ab68cc1efca430->enter($__internal_81a1ccd1c272f2fd7388cf58b2a74a07241bb1a6b9ca488b01ab68cc1efca430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3994d4ff26bccfda56debfad773aa30526b592f1f4ccf4648111ac6f9e328e16->leave($__internal_3994d4ff26bccfda56debfad773aa30526b592f1f4ccf4648111ac6f9e328e16_prof);

        
        $__internal_81a1ccd1c272f2fd7388cf58b2a74a07241bb1a6b9ca488b01ab68cc1efca430->leave($__internal_81a1ccd1c272f2fd7388cf58b2a74a07241bb1a6b9ca488b01ab68cc1efca430_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9fe00481412857de51508fbc8c1aa7dc3c42b1b7502b70a68acc53a16517f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9fe00481412857de51508fbc8c1aa7dc3c42b1b7502b70a68acc53a16517f7d->enter($__internal_e9fe00481412857de51508fbc8c1aa7dc3c42b1b7502b70a68acc53a16517f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50e25de7c140b4178206af4654fdc4776b60cff173e93c61f5ac2dd16e14350e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e25de7c140b4178206af4654fdc4776b60cff173e93c61f5ac2dd16e14350e->enter($__internal_50e25de7c140b4178206af4654fdc4776b60cff173e93c61f5ac2dd16e14350e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_50e25de7c140b4178206af4654fdc4776b60cff173e93c61f5ac2dd16e14350e->leave($__internal_50e25de7c140b4178206af4654fdc4776b60cff173e93c61f5ac2dd16e14350e_prof);

        
        $__internal_e9fe00481412857de51508fbc8c1aa7dc3c42b1b7502b70a68acc53a16517f7d->leave($__internal_e9fe00481412857de51508fbc8c1aa7dc3c42b1b7502b70a68acc53a16517f7d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9829739f7804a7c0c2c91c5d72609251389627bae83ecc4cbf0ea8933c862c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9829739f7804a7c0c2c91c5d72609251389627bae83ecc4cbf0ea8933c862c34->enter($__internal_9829739f7804a7c0c2c91c5d72609251389627bae83ecc4cbf0ea8933c862c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66ec9ffa35e6209942ec675566c43a8682933c30fb13d47a9fa9e69815530b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ec9ffa35e6209942ec675566c43a8682933c30fb13d47a9fa9e69815530b70->enter($__internal_66ec9ffa35e6209942ec675566c43a8682933c30fb13d47a9fa9e69815530b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_66ec9ffa35e6209942ec675566c43a8682933c30fb13d47a9fa9e69815530b70->leave($__internal_66ec9ffa35e6209942ec675566c43a8682933c30fb13d47a9fa9e69815530b70_prof);

        
        $__internal_9829739f7804a7c0c2c91c5d72609251389627bae83ecc4cbf0ea8933c862c34->leave($__internal_9829739f7804a7c0c2c91c5d72609251389627bae83ecc4cbf0ea8933c862c34_prof);

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
