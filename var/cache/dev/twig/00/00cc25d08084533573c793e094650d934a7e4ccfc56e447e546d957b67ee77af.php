<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_05df047184e4785d4cd18dc0cd190470ac7181e2abe31e0e8bb84410d5831618 extends Twig_Template
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
        $__internal_419213821be755f5cad3529919c5b2e7b5bc2e7b6a67894911079f762eb9ca5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_419213821be755f5cad3529919c5b2e7b5bc2e7b6a67894911079f762eb9ca5f->enter($__internal_419213821be755f5cad3529919c5b2e7b5bc2e7b6a67894911079f762eb9ca5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b58cc6fb8a72381beb386899da5f5a3247071ba467c11a7f110204c7b9ff33f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58cc6fb8a72381beb386899da5f5a3247071ba467c11a7f110204c7b9ff33f4->enter($__internal_b58cc6fb8a72381beb386899da5f5a3247071ba467c11a7f110204c7b9ff33f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_419213821be755f5cad3529919c5b2e7b5bc2e7b6a67894911079f762eb9ca5f->leave($__internal_419213821be755f5cad3529919c5b2e7b5bc2e7b6a67894911079f762eb9ca5f_prof);

        
        $__internal_b58cc6fb8a72381beb386899da5f5a3247071ba467c11a7f110204c7b9ff33f4->leave($__internal_b58cc6fb8a72381beb386899da5f5a3247071ba467c11a7f110204c7b9ff33f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
