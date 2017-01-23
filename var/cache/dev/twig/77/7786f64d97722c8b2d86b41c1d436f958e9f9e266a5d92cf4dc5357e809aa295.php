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
        $__internal_6c386a5647e2b9b311f72d20d8e2135659e09862658b1cf3dfc10f5be588dd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c386a5647e2b9b311f72d20d8e2135659e09862658b1cf3dfc10f5be588dd4e->enter($__internal_6c386a5647e2b9b311f72d20d8e2135659e09862658b1cf3dfc10f5be588dd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b3aa161f07e2e1f7e72a14f9b0afa704965c8fc3145325de2269f01e43dd0d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3aa161f07e2e1f7e72a14f9b0afa704965c8fc3145325de2269f01e43dd0d36->enter($__internal_b3aa161f07e2e1f7e72a14f9b0afa704965c8fc3145325de2269f01e43dd0d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6c386a5647e2b9b311f72d20d8e2135659e09862658b1cf3dfc10f5be588dd4e->leave($__internal_6c386a5647e2b9b311f72d20d8e2135659e09862658b1cf3dfc10f5be588dd4e_prof);

        
        $__internal_b3aa161f07e2e1f7e72a14f9b0afa704965c8fc3145325de2269f01e43dd0d36->leave($__internal_b3aa161f07e2e1f7e72a14f9b0afa704965c8fc3145325de2269f01e43dd0d36_prof);

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
