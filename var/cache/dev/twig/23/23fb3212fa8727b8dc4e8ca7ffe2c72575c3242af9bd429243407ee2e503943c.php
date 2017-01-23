<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_73ea895c3f0bba9dae1b52918831cd597178155d55a8661f8ed01c595c64d34e extends Twig_Template
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
        $__internal_de02ea1f5ac119d65af6fe5aa2322bba2e6fcf85ee99d8006ff651c23e6b6afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de02ea1f5ac119d65af6fe5aa2322bba2e6fcf85ee99d8006ff651c23e6b6afd->enter($__internal_de02ea1f5ac119d65af6fe5aa2322bba2e6fcf85ee99d8006ff651c23e6b6afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d4bc2cdeefb5141b5929c65730d34077a5313508562001827d32b56039de1356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bc2cdeefb5141b5929c65730d34077a5313508562001827d32b56039de1356->enter($__internal_d4bc2cdeefb5141b5929c65730d34077a5313508562001827d32b56039de1356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_de02ea1f5ac119d65af6fe5aa2322bba2e6fcf85ee99d8006ff651c23e6b6afd->leave($__internal_de02ea1f5ac119d65af6fe5aa2322bba2e6fcf85ee99d8006ff651c23e6b6afd_prof);

        
        $__internal_d4bc2cdeefb5141b5929c65730d34077a5313508562001827d32b56039de1356->leave($__internal_d4bc2cdeefb5141b5929c65730d34077a5313508562001827d32b56039de1356_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
