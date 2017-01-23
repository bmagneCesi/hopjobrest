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
        $__internal_b3c14497640b89ec17654c2385df1a4b7b08ab092f0f1f8a548b57d9dad61b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c14497640b89ec17654c2385df1a4b7b08ab092f0f1f8a548b57d9dad61b60->enter($__internal_b3c14497640b89ec17654c2385df1a4b7b08ab092f0f1f8a548b57d9dad61b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_65880bff78c65f8bb57955826d926e3f4bea7f739c3855fbb659fd76ffa22b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65880bff78c65f8bb57955826d926e3f4bea7f739c3855fbb659fd76ffa22b2b->enter($__internal_65880bff78c65f8bb57955826d926e3f4bea7f739c3855fbb659fd76ffa22b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b3c14497640b89ec17654c2385df1a4b7b08ab092f0f1f8a548b57d9dad61b60->leave($__internal_b3c14497640b89ec17654c2385df1a4b7b08ab092f0f1f8a548b57d9dad61b60_prof);

        
        $__internal_65880bff78c65f8bb57955826d926e3f4bea7f739c3855fbb659fd76ffa22b2b->leave($__internal_65880bff78c65f8bb57955826d926e3f4bea7f739c3855fbb659fd76ffa22b2b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d0843988536bc1d0426b37cb125ec897db1338bbf54b368c2c9ae45228f25b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0843988536bc1d0426b37cb125ec897db1338bbf54b368c2c9ae45228f25b5->enter($__internal_9d0843988536bc1d0426b37cb125ec897db1338bbf54b368c2c9ae45228f25b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_39fe8cc3866269b810c9cbc054c987b20b7508afe80abe47197a7910c413c3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39fe8cc3866269b810c9cbc054c987b20b7508afe80abe47197a7910c413c3bc->enter($__internal_39fe8cc3866269b810c9cbc054c987b20b7508afe80abe47197a7910c413c3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_39fe8cc3866269b810c9cbc054c987b20b7508afe80abe47197a7910c413c3bc->leave($__internal_39fe8cc3866269b810c9cbc054c987b20b7508afe80abe47197a7910c413c3bc_prof);

        
        $__internal_9d0843988536bc1d0426b37cb125ec897db1338bbf54b368c2c9ae45228f25b5->leave($__internal_9d0843988536bc1d0426b37cb125ec897db1338bbf54b368c2c9ae45228f25b5_prof);

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
