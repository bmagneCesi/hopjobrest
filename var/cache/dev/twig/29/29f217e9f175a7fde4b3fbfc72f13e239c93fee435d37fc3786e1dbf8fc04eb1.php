<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_f545595115687d7ed2aa66cb0ce4caa35974271ff400b6f173f5a4bbdacda6d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28d6e80089c6d299851f11a04b0ac825b7c84c24119dc30754ed06306e26fb90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28d6e80089c6d299851f11a04b0ac825b7c84c24119dc30754ed06306e26fb90->enter($__internal_28d6e80089c6d299851f11a04b0ac825b7c84c24119dc30754ed06306e26fb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_87186393cc75f4f53ba38b4caf9fe2bcf7e8fa63025604cdd5fb05c4d7ee8345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87186393cc75f4f53ba38b4caf9fe2bcf7e8fa63025604cdd5fb05c4d7ee8345->enter($__internal_87186393cc75f4f53ba38b4caf9fe2bcf7e8fa63025604cdd5fb05c4d7ee8345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_28d6e80089c6d299851f11a04b0ac825b7c84c24119dc30754ed06306e26fb90->leave($__internal_28d6e80089c6d299851f11a04b0ac825b7c84c24119dc30754ed06306e26fb90_prof);

        
        $__internal_87186393cc75f4f53ba38b4caf9fe2bcf7e8fa63025604cdd5fb05c4d7ee8345->leave($__internal_87186393cc75f4f53ba38b4caf9fe2bcf7e8fa63025604cdd5fb05c4d7ee8345_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2794fa5ff5ad0ae7a567648e5a9888c6070c87a8a542471444e73dac404a628f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2794fa5ff5ad0ae7a567648e5a9888c6070c87a8a542471444e73dac404a628f->enter($__internal_2794fa5ff5ad0ae7a567648e5a9888c6070c87a8a542471444e73dac404a628f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b8540417554c921cae6a13955558739f9109f71d7be4faddc2a221800d3c0f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8540417554c921cae6a13955558739f9109f71d7be4faddc2a221800d3c0f40->enter($__internal_b8540417554c921cae6a13955558739f9109f71d7be4faddc2a221800d3c0f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b8540417554c921cae6a13955558739f9109f71d7be4faddc2a221800d3c0f40->leave($__internal_b8540417554c921cae6a13955558739f9109f71d7be4faddc2a221800d3c0f40_prof);

        
        $__internal_2794fa5ff5ad0ae7a567648e5a9888c6070c87a8a542471444e73dac404a628f->leave($__internal_2794fa5ff5ad0ae7a567648e5a9888c6070c87a8a542471444e73dac404a628f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
