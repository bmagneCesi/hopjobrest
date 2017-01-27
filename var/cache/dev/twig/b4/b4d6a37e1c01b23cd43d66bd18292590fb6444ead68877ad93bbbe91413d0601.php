<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f2aa716c7c5f78d18a10af468fe600236bcbe59dafe84dc54d04f2cbbb09188e extends Twig_Template
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
        $__internal_79ef918934ec59e3661454cd55999d6343260e8b8293c37989e1dafe1a66b119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ef918934ec59e3661454cd55999d6343260e8b8293c37989e1dafe1a66b119->enter($__internal_79ef918934ec59e3661454cd55999d6343260e8b8293c37989e1dafe1a66b119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_35735fc320f77f16cc292077e7dbbc34d4c0b9cf4e768bd4c5e38b8fd26952ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35735fc320f77f16cc292077e7dbbc34d4c0b9cf4e768bd4c5e38b8fd26952ce->enter($__internal_35735fc320f77f16cc292077e7dbbc34d4c0b9cf4e768bd4c5e38b8fd26952ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_79ef918934ec59e3661454cd55999d6343260e8b8293c37989e1dafe1a66b119->leave($__internal_79ef918934ec59e3661454cd55999d6343260e8b8293c37989e1dafe1a66b119_prof);

        
        $__internal_35735fc320f77f16cc292077e7dbbc34d4c0b9cf4e768bd4c5e38b8fd26952ce->leave($__internal_35735fc320f77f16cc292077e7dbbc34d4c0b9cf4e768bd4c5e38b8fd26952ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
