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
        $__internal_d8edbb8f967c80dffde0d87871667d61b8502a1d5bcba815f97f7f90b86be1b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8edbb8f967c80dffde0d87871667d61b8502a1d5bcba815f97f7f90b86be1b1->enter($__internal_d8edbb8f967c80dffde0d87871667d61b8502a1d5bcba815f97f7f90b86be1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_08b0d8791510519679c5b087460751e5645bf0738311a2f0f814a7aa9883ce30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b0d8791510519679c5b087460751e5645bf0738311a2f0f814a7aa9883ce30->enter($__internal_08b0d8791510519679c5b087460751e5645bf0738311a2f0f814a7aa9883ce30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d8edbb8f967c80dffde0d87871667d61b8502a1d5bcba815f97f7f90b86be1b1->leave($__internal_d8edbb8f967c80dffde0d87871667d61b8502a1d5bcba815f97f7f90b86be1b1_prof);

        
        $__internal_08b0d8791510519679c5b087460751e5645bf0738311a2f0f814a7aa9883ce30->leave($__internal_08b0d8791510519679c5b087460751e5645bf0738311a2f0f814a7aa9883ce30_prof);

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
