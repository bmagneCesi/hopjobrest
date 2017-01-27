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
        $__internal_b47841cd864c7d8edc83f7abc518613681cf1cf18750fc29554cbcb09aff6952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47841cd864c7d8edc83f7abc518613681cf1cf18750fc29554cbcb09aff6952->enter($__internal_b47841cd864c7d8edc83f7abc518613681cf1cf18750fc29554cbcb09aff6952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8354177b04c4d5ef14a5a3e3b3c3556a3cceb1f942e471e6fc9445693922bbe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8354177b04c4d5ef14a5a3e3b3c3556a3cceb1f942e471e6fc9445693922bbe7->enter($__internal_8354177b04c4d5ef14a5a3e3b3c3556a3cceb1f942e471e6fc9445693922bbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b47841cd864c7d8edc83f7abc518613681cf1cf18750fc29554cbcb09aff6952->leave($__internal_b47841cd864c7d8edc83f7abc518613681cf1cf18750fc29554cbcb09aff6952_prof);

        
        $__internal_8354177b04c4d5ef14a5a3e3b3c3556a3cceb1f942e471e6fc9445693922bbe7->leave($__internal_8354177b04c4d5ef14a5a3e3b3c3556a3cceb1f942e471e6fc9445693922bbe7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_420de811e47875b450fa4397f0433079c2985f6f24dc76fe813ceff2d5fa320c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420de811e47875b450fa4397f0433079c2985f6f24dc76fe813ceff2d5fa320c->enter($__internal_420de811e47875b450fa4397f0433079c2985f6f24dc76fe813ceff2d5fa320c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2b25058f228607d8c696da5bff5f5c6748378262864b3fe5ef2e1fb53202d08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b25058f228607d8c696da5bff5f5c6748378262864b3fe5ef2e1fb53202d08a->enter($__internal_2b25058f228607d8c696da5bff5f5c6748378262864b3fe5ef2e1fb53202d08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2b25058f228607d8c696da5bff5f5c6748378262864b3fe5ef2e1fb53202d08a->leave($__internal_2b25058f228607d8c696da5bff5f5c6748378262864b3fe5ef2e1fb53202d08a_prof);

        
        $__internal_420de811e47875b450fa4397f0433079c2985f6f24dc76fe813ceff2d5fa320c->leave($__internal_420de811e47875b450fa4397f0433079c2985f6f24dc76fe813ceff2d5fa320c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f51c425492d0f1ff351ac50c6e3735467713c8edbec41ab4ff49fa8e7e18da94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f51c425492d0f1ff351ac50c6e3735467713c8edbec41ab4ff49fa8e7e18da94->enter($__internal_f51c425492d0f1ff351ac50c6e3735467713c8edbec41ab4ff49fa8e7e18da94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dff92204de2c17b85b5b1bad1ba1d25b82ec2903d443ad17ff9a2b719f18146a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff92204de2c17b85b5b1bad1ba1d25b82ec2903d443ad17ff9a2b719f18146a->enter($__internal_dff92204de2c17b85b5b1bad1ba1d25b82ec2903d443ad17ff9a2b719f18146a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dff92204de2c17b85b5b1bad1ba1d25b82ec2903d443ad17ff9a2b719f18146a->leave($__internal_dff92204de2c17b85b5b1bad1ba1d25b82ec2903d443ad17ff9a2b719f18146a_prof);

        
        $__internal_f51c425492d0f1ff351ac50c6e3735467713c8edbec41ab4ff49fa8e7e18da94->leave($__internal_f51c425492d0f1ff351ac50c6e3735467713c8edbec41ab4ff49fa8e7e18da94_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4c143b8e0fe56011f38ae6dd80850df540fea0b81b860ca5f5cd5c0b663fb90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c143b8e0fe56011f38ae6dd80850df540fea0b81b860ca5f5cd5c0b663fb90->enter($__internal_b4c143b8e0fe56011f38ae6dd80850df540fea0b81b860ca5f5cd5c0b663fb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_27c1f22958dc1ab61d1bc9baf73baea85acf2114952f62211f4a965ea097871e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c1f22958dc1ab61d1bc9baf73baea85acf2114952f62211f4a965ea097871e->enter($__internal_27c1f22958dc1ab61d1bc9baf73baea85acf2114952f62211f4a965ea097871e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_27c1f22958dc1ab61d1bc9baf73baea85acf2114952f62211f4a965ea097871e->leave($__internal_27c1f22958dc1ab61d1bc9baf73baea85acf2114952f62211f4a965ea097871e_prof);

        
        $__internal_b4c143b8e0fe56011f38ae6dd80850df540fea0b81b860ca5f5cd5c0b663fb90->leave($__internal_b4c143b8e0fe56011f38ae6dd80850df540fea0b81b860ca5f5cd5c0b663fb90_prof);

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
