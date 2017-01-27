<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_59ad285c96328f8c24e063c3e3a9c14e02f3bac9cfe79e2ee508a0e6cc50f161 extends Twig_Template
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
        $__internal_5fd8fdde3ccce0a9390f0b7a653f0313e3bac2e5807be3075bd89dc8e55d6e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd8fdde3ccce0a9390f0b7a653f0313e3bac2e5807be3075bd89dc8e55d6e2d->enter($__internal_5fd8fdde3ccce0a9390f0b7a653f0313e3bac2e5807be3075bd89dc8e55d6e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_0062394ebf0266d7290b5cf292892d4811d8da8c28eb222eb74cf8d303cfca19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0062394ebf0266d7290b5cf292892d4811d8da8c28eb222eb74cf8d303cfca19->enter($__internal_0062394ebf0266d7290b5cf292892d4811d8da8c28eb222eb74cf8d303cfca19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5fd8fdde3ccce0a9390f0b7a653f0313e3bac2e5807be3075bd89dc8e55d6e2d->leave($__internal_5fd8fdde3ccce0a9390f0b7a653f0313e3bac2e5807be3075bd89dc8e55d6e2d_prof);

        
        $__internal_0062394ebf0266d7290b5cf292892d4811d8da8c28eb222eb74cf8d303cfca19->leave($__internal_0062394ebf0266d7290b5cf292892d4811d8da8c28eb222eb74cf8d303cfca19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
