<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_a31e3a55a6d3637ab1b94d0892c4b99b490a21c13cf4b5049c7d9ba6de1cb926 extends Twig_Template
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
        $__internal_755cf9147dcd58938d6f4b1a5cdcd389135d72fdbb9f2c61ec3c83f8d0ee9c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755cf9147dcd58938d6f4b1a5cdcd389135d72fdbb9f2c61ec3c83f8d0ee9c06->enter($__internal_755cf9147dcd58938d6f4b1a5cdcd389135d72fdbb9f2c61ec3c83f8d0ee9c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_ee9d4213052efee50542e7cbd0072bdbe5ea56b7cf6eeb7975ef2bdbc267fe42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9d4213052efee50542e7cbd0072bdbe5ea56b7cf6eeb7975ef2bdbc267fe42->enter($__internal_ee9d4213052efee50542e7cbd0072bdbe5ea56b7cf6eeb7975ef2bdbc267fe42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_755cf9147dcd58938d6f4b1a5cdcd389135d72fdbb9f2c61ec3c83f8d0ee9c06->leave($__internal_755cf9147dcd58938d6f4b1a5cdcd389135d72fdbb9f2c61ec3c83f8d0ee9c06_prof);

        
        $__internal_ee9d4213052efee50542e7cbd0072bdbe5ea56b7cf6eeb7975ef2bdbc267fe42->leave($__internal_ee9d4213052efee50542e7cbd0072bdbe5ea56b7cf6eeb7975ef2bdbc267fe42_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "@Twig/Exception/logs.html.twig", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
