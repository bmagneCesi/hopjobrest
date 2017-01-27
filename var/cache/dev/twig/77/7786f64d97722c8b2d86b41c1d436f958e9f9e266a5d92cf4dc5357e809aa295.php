<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b37901052a51eebf86b6073601e0f05b0ba965f0f494cce4b6813f29b630c489 extends Twig_Template
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
        $__internal_5d31566fd06e6a18ef87a4e3645c37fa236b47db962fc7efbb3df6f8b05be009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d31566fd06e6a18ef87a4e3645c37fa236b47db962fc7efbb3df6f8b05be009->enter($__internal_5d31566fd06e6a18ef87a4e3645c37fa236b47db962fc7efbb3df6f8b05be009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_def686d078255eddc8594a7fa3e79ac275c5257ec8c7fd108d66e5f5595418d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def686d078255eddc8594a7fa3e79ac275c5257ec8c7fd108d66e5f5595418d4->enter($__internal_def686d078255eddc8594a7fa3e79ac275c5257ec8c7fd108d66e5f5595418d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5d31566fd06e6a18ef87a4e3645c37fa236b47db962fc7efbb3df6f8b05be009->leave($__internal_5d31566fd06e6a18ef87a4e3645c37fa236b47db962fc7efbb3df6f8b05be009_prof);

        
        $__internal_def686d078255eddc8594a7fa3e79ac275c5257ec8c7fd108d66e5f5595418d4->leave($__internal_def686d078255eddc8594a7fa3e79ac275c5257ec8c7fd108d66e5f5595418d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
