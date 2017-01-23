<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_28e6cd10f34d057a0beab98497d9511feeb7d5b8677a85ca60a7dd8f273a21fc extends Twig_Template
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
        $__internal_42d29c15f28afd4ae8b909ad338cb07dc76ea3eb17d412107fea95680cccee31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d29c15f28afd4ae8b909ad338cb07dc76ea3eb17d412107fea95680cccee31->enter($__internal_42d29c15f28afd4ae8b909ad338cb07dc76ea3eb17d412107fea95680cccee31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2063eee804bec111a1771973caeae428a221119dea1e8f198be0c43070872bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2063eee804bec111a1771973caeae428a221119dea1e8f198be0c43070872bbe->enter($__internal_2063eee804bec111a1771973caeae428a221119dea1e8f198be0c43070872bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_42d29c15f28afd4ae8b909ad338cb07dc76ea3eb17d412107fea95680cccee31->leave($__internal_42d29c15f28afd4ae8b909ad338cb07dc76ea3eb17d412107fea95680cccee31_prof);

        
        $__internal_2063eee804bec111a1771973caeae428a221119dea1e8f198be0c43070872bbe->leave($__internal_2063eee804bec111a1771973caeae428a221119dea1e8f198be0c43070872bbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
