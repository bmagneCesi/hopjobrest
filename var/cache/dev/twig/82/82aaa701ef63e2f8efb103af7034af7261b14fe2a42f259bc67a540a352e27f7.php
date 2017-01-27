<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b60d08dddd832a0898df67b4d9182f85cfefeb4cf3e198e74da1e9467d5bd4f3 extends Twig_Template
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
        $__internal_ba5ad6ffde672d99fdfbc63ad6ed915c56e7cc5b1dd5a6adf287179fbc7cd795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba5ad6ffde672d99fdfbc63ad6ed915c56e7cc5b1dd5a6adf287179fbc7cd795->enter($__internal_ba5ad6ffde672d99fdfbc63ad6ed915c56e7cc5b1dd5a6adf287179fbc7cd795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_cc3387b9ccc01310e7d3974c3466a61e829585cfa6a703be252a47bb61c02edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3387b9ccc01310e7d3974c3466a61e829585cfa6a703be252a47bb61c02edf->enter($__internal_cc3387b9ccc01310e7d3974c3466a61e829585cfa6a703be252a47bb61c02edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ba5ad6ffde672d99fdfbc63ad6ed915c56e7cc5b1dd5a6adf287179fbc7cd795->leave($__internal_ba5ad6ffde672d99fdfbc63ad6ed915c56e7cc5b1dd5a6adf287179fbc7cd795_prof);

        
        $__internal_cc3387b9ccc01310e7d3974c3466a61e829585cfa6a703be252a47bb61c02edf->leave($__internal_cc3387b9ccc01310e7d3974c3466a61e829585cfa6a703be252a47bb61c02edf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
