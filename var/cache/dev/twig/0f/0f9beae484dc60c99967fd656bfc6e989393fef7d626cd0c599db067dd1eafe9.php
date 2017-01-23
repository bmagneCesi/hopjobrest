<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8108f5d1ee36c3878b2175a55b3d302e34d4747217b0f55cddfb625da60cfabe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_051758dd5174c888edff21f624fcbe90ec6e862e4ed80ca3193a17a1b41e7720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051758dd5174c888edff21f624fcbe90ec6e862e4ed80ca3193a17a1b41e7720->enter($__internal_051758dd5174c888edff21f624fcbe90ec6e862e4ed80ca3193a17a1b41e7720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0039343ed1c4d15e56fc2656f353ce918843b810174d8ccfbb95a03937ae0c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0039343ed1c4d15e56fc2656f353ce918843b810174d8ccfbb95a03937ae0c32->enter($__internal_0039343ed1c4d15e56fc2656f353ce918843b810174d8ccfbb95a03937ae0c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_051758dd5174c888edff21f624fcbe90ec6e862e4ed80ca3193a17a1b41e7720->leave($__internal_051758dd5174c888edff21f624fcbe90ec6e862e4ed80ca3193a17a1b41e7720_prof);

        
        $__internal_0039343ed1c4d15e56fc2656f353ce918843b810174d8ccfbb95a03937ae0c32->leave($__internal_0039343ed1c4d15e56fc2656f353ce918843b810174d8ccfbb95a03937ae0c32_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e6f3f84721ec37a51b48421246cba303bdacb5f234144230a819fc248d50a6b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f3f84721ec37a51b48421246cba303bdacb5f234144230a819fc248d50a6b2->enter($__internal_e6f3f84721ec37a51b48421246cba303bdacb5f234144230a819fc248d50a6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e764f8ff929ffbc448c136cfda46d1b06325212187b945826a5b5c05f940dfad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e764f8ff929ffbc448c136cfda46d1b06325212187b945826a5b5c05f940dfad->enter($__internal_e764f8ff929ffbc448c136cfda46d1b06325212187b945826a5b5c05f940dfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e764f8ff929ffbc448c136cfda46d1b06325212187b945826a5b5c05f940dfad->leave($__internal_e764f8ff929ffbc448c136cfda46d1b06325212187b945826a5b5c05f940dfad_prof);

        
        $__internal_e6f3f84721ec37a51b48421246cba303bdacb5f234144230a819fc248d50a6b2->leave($__internal_e6f3f84721ec37a51b48421246cba303bdacb5f234144230a819fc248d50a6b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c920d6aa4a2b16dab60c9266a1789319e91817495c55c0b07148589cb99200c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c920d6aa4a2b16dab60c9266a1789319e91817495c55c0b07148589cb99200c1->enter($__internal_c920d6aa4a2b16dab60c9266a1789319e91817495c55c0b07148589cb99200c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef9ab5f9c751d5f6d79c1518a1601d02e9330afaa99898b32f6a24936bd127ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9ab5f9c751d5f6d79c1518a1601d02e9330afaa99898b32f6a24936bd127ab->enter($__internal_ef9ab5f9c751d5f6d79c1518a1601d02e9330afaa99898b32f6a24936bd127ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ef9ab5f9c751d5f6d79c1518a1601d02e9330afaa99898b32f6a24936bd127ab->leave($__internal_ef9ab5f9c751d5f6d79c1518a1601d02e9330afaa99898b32f6a24936bd127ab_prof);

        
        $__internal_c920d6aa4a2b16dab60c9266a1789319e91817495c55c0b07148589cb99200c1->leave($__internal_c920d6aa4a2b16dab60c9266a1789319e91817495c55c0b07148589cb99200c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d837daa95dab9529db0cef711aa3dddefd58f7f32eb2de8ace67d267dfdaf06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d837daa95dab9529db0cef711aa3dddefd58f7f32eb2de8ace67d267dfdaf06->enter($__internal_1d837daa95dab9529db0cef711aa3dddefd58f7f32eb2de8ace67d267dfdaf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_26d17d778ffbdabab5fdeba4c15cbe913f6881a75ebd85a9dc1dc2b6304ca320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d17d778ffbdabab5fdeba4c15cbe913f6881a75ebd85a9dc1dc2b6304ca320->enter($__internal_26d17d778ffbdabab5fdeba4c15cbe913f6881a75ebd85a9dc1dc2b6304ca320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_26d17d778ffbdabab5fdeba4c15cbe913f6881a75ebd85a9dc1dc2b6304ca320->leave($__internal_26d17d778ffbdabab5fdeba4c15cbe913f6881a75ebd85a9dc1dc2b6304ca320_prof);

        
        $__internal_1d837daa95dab9529db0cef711aa3dddefd58f7f32eb2de8ace67d267dfdaf06->leave($__internal_1d837daa95dab9529db0cef711aa3dddefd58f7f32eb2de8ace67d267dfdaf06_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
