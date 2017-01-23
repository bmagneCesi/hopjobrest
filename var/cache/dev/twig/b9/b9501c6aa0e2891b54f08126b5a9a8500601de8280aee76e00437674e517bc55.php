<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_16c52b50b7916eb2d6e6527435409844fb45f2e5f63db876607671bacf573010 extends Twig_Template
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
        $__internal_6210c269784ddb9d86bf3cca5db86b41ec45af325424278a7f6e5599f4b56053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6210c269784ddb9d86bf3cca5db86b41ec45af325424278a7f6e5599f4b56053->enter($__internal_6210c269784ddb9d86bf3cca5db86b41ec45af325424278a7f6e5599f4b56053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_feb54505a0ede6c7a37959bd8842b14ab78c33e96e03b0f81ce4b7f0f8beaa13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb54505a0ede6c7a37959bd8842b14ab78c33e96e03b0f81ce4b7f0f8beaa13->enter($__internal_feb54505a0ede6c7a37959bd8842b14ab78c33e96e03b0f81ce4b7f0f8beaa13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6210c269784ddb9d86bf3cca5db86b41ec45af325424278a7f6e5599f4b56053->leave($__internal_6210c269784ddb9d86bf3cca5db86b41ec45af325424278a7f6e5599f4b56053_prof);

        
        $__internal_feb54505a0ede6c7a37959bd8842b14ab78c33e96e03b0f81ce4b7f0f8beaa13->leave($__internal_feb54505a0ede6c7a37959bd8842b14ab78c33e96e03b0f81ce4b7f0f8beaa13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
