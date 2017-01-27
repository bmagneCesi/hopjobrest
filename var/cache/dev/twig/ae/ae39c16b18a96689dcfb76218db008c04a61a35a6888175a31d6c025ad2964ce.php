<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_1ef9711d5812e446bdf8ddc16ec977eb826d3ab3cb26507456c9b09b7c4aa358 extends Twig_Template
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
        $__internal_4a3f802a4a4ec81cd0370360aed97b4a1fec3dfaec92a239619cb63998fb3bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3f802a4a4ec81cd0370360aed97b4a1fec3dfaec92a239619cb63998fb3bfc->enter($__internal_4a3f802a4a4ec81cd0370360aed97b4a1fec3dfaec92a239619cb63998fb3bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c3bdd0b300a0c9d02e2f572d7539e32a8104c5e5dc04ae9be8955414a74992c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3bdd0b300a0c9d02e2f572d7539e32a8104c5e5dc04ae9be8955414a74992c6->enter($__internal_c3bdd0b300a0c9d02e2f572d7539e32a8104c5e5dc04ae9be8955414a74992c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_4a3f802a4a4ec81cd0370360aed97b4a1fec3dfaec92a239619cb63998fb3bfc->leave($__internal_4a3f802a4a4ec81cd0370360aed97b4a1fec3dfaec92a239619cb63998fb3bfc_prof);

        
        $__internal_c3bdd0b300a0c9d02e2f572d7539e32a8104c5e5dc04ae9be8955414a74992c6->leave($__internal_c3bdd0b300a0c9d02e2f572d7539e32a8104c5e5dc04ae9be8955414a74992c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
