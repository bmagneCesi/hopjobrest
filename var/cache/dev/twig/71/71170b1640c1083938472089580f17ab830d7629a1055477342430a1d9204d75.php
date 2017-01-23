<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_d45ba71e1181cc56aa6d2216ff56684684e7152f60fc5ed878fe668c059e12c4 extends Twig_Template
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
        $__internal_b18b62735ef2f1d80efdd30277c3ec858ec42eee536f9d371b2d931ee1ea6f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18b62735ef2f1d80efdd30277c3ec858ec42eee536f9d371b2d931ee1ea6f7a->enter($__internal_b18b62735ef2f1d80efdd30277c3ec858ec42eee536f9d371b2d931ee1ea6f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_15adc8d41dfa740fd355e53d868cc96cc797f3546d54e0b47c8ae64f09364711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15adc8d41dfa740fd355e53d868cc96cc797f3546d54e0b47c8ae64f09364711->enter($__internal_15adc8d41dfa740fd355e53d868cc96cc797f3546d54e0b47c8ae64f09364711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b18b62735ef2f1d80efdd30277c3ec858ec42eee536f9d371b2d931ee1ea6f7a->leave($__internal_b18b62735ef2f1d80efdd30277c3ec858ec42eee536f9d371b2d931ee1ea6f7a_prof);

        
        $__internal_15adc8d41dfa740fd355e53d868cc96cc797f3546d54e0b47c8ae64f09364711->leave($__internal_15adc8d41dfa740fd355e53d868cc96cc797f3546d54e0b47c8ae64f09364711_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
