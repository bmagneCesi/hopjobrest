<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b5dc5a4086d0bd5a883a791f2bb2c564c1c9a8ce99041ca6478472090a147fe9 extends Twig_Template
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
        $__internal_3a85a58c4a3e3090220ae54d23c45c56fd8b77548ce8cc6a805caff1716b2a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a85a58c4a3e3090220ae54d23c45c56fd8b77548ce8cc6a805caff1716b2a27->enter($__internal_3a85a58c4a3e3090220ae54d23c45c56fd8b77548ce8cc6a805caff1716b2a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_bb12557322a5942dfb57ae8b2016251bcc16dca50ff026442dd59c84ffaa81cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb12557322a5942dfb57ae8b2016251bcc16dca50ff026442dd59c84ffaa81cc->enter($__internal_bb12557322a5942dfb57ae8b2016251bcc16dca50ff026442dd59c84ffaa81cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3a85a58c4a3e3090220ae54d23c45c56fd8b77548ce8cc6a805caff1716b2a27->leave($__internal_3a85a58c4a3e3090220ae54d23c45c56fd8b77548ce8cc6a805caff1716b2a27_prof);

        
        $__internal_bb12557322a5942dfb57ae8b2016251bcc16dca50ff026442dd59c84ffaa81cc->leave($__internal_bb12557322a5942dfb57ae8b2016251bcc16dca50ff026442dd59c84ffaa81cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
