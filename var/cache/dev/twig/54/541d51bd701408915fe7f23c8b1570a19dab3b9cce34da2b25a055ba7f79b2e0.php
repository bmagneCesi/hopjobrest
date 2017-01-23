<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_2f0abc36a76879b2101380feaff1e568534bca7fec586d3e6613e4bf840a4f59 extends Twig_Template
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
        $__internal_b55789a4fd27961a46edaa1635c9084523c644ecffdca92ebf891d55cab18078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55789a4fd27961a46edaa1635c9084523c644ecffdca92ebf891d55cab18078->enter($__internal_b55789a4fd27961a46edaa1635c9084523c644ecffdca92ebf891d55cab18078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_666163693fd5e2885aeb1c981f5858527b9fc914bbf43ed42407aa6d2179c715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666163693fd5e2885aeb1c981f5858527b9fc914bbf43ed42407aa6d2179c715->enter($__internal_666163693fd5e2885aeb1c981f5858527b9fc914bbf43ed42407aa6d2179c715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b55789a4fd27961a46edaa1635c9084523c644ecffdca92ebf891d55cab18078->leave($__internal_b55789a4fd27961a46edaa1635c9084523c644ecffdca92ebf891d55cab18078_prof);

        
        $__internal_666163693fd5e2885aeb1c981f5858527b9fc914bbf43ed42407aa6d2179c715->leave($__internal_666163693fd5e2885aeb1c981f5858527b9fc914bbf43ed42407aa6d2179c715_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
