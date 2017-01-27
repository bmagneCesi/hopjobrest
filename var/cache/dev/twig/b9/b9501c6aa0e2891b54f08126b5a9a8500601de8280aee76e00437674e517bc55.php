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
        $__internal_8f08cf47ba2e433967d65ee5fe2f5b376d609faf471cfbfb0a4135d82032d64f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f08cf47ba2e433967d65ee5fe2f5b376d609faf471cfbfb0a4135d82032d64f->enter($__internal_8f08cf47ba2e433967d65ee5fe2f5b376d609faf471cfbfb0a4135d82032d64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_13b8b65c46119cc8751d7cb57b7b76c6b5e88a0279a43c134ce95b3a9418aa2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b8b65c46119cc8751d7cb57b7b76c6b5e88a0279a43c134ce95b3a9418aa2c->enter($__internal_13b8b65c46119cc8751d7cb57b7b76c6b5e88a0279a43c134ce95b3a9418aa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8f08cf47ba2e433967d65ee5fe2f5b376d609faf471cfbfb0a4135d82032d64f->leave($__internal_8f08cf47ba2e433967d65ee5fe2f5b376d609faf471cfbfb0a4135d82032d64f_prof);

        
        $__internal_13b8b65c46119cc8751d7cb57b7b76c6b5e88a0279a43c134ce95b3a9418aa2c->leave($__internal_13b8b65c46119cc8751d7cb57b7b76c6b5e88a0279a43c134ce95b3a9418aa2c_prof);

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
