<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b9d171de1fc17f7d7a699aaf9f4dd5e018eac2e452701ac05e85df0aaceb2885 extends Twig_Template
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
        $__internal_5b241cf1a36b518a9aa3208f21f980c0d9dffcda84f2a437287a4c386e65c6c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b241cf1a36b518a9aa3208f21f980c0d9dffcda84f2a437287a4c386e65c6c0->enter($__internal_5b241cf1a36b518a9aa3208f21f980c0d9dffcda84f2a437287a4c386e65c6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_02231f89016cf77847a29bb3ffdd2621ef1876bda7f3b92bf0ccd9bee68b8fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02231f89016cf77847a29bb3ffdd2621ef1876bda7f3b92bf0ccd9bee68b8fdd->enter($__internal_02231f89016cf77847a29bb3ffdd2621ef1876bda7f3b92bf0ccd9bee68b8fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5b241cf1a36b518a9aa3208f21f980c0d9dffcda84f2a437287a4c386e65c6c0->leave($__internal_5b241cf1a36b518a9aa3208f21f980c0d9dffcda84f2a437287a4c386e65c6c0_prof);

        
        $__internal_02231f89016cf77847a29bb3ffdd2621ef1876bda7f3b92bf0ccd9bee68b8fdd->leave($__internal_02231f89016cf77847a29bb3ffdd2621ef1876bda7f3b92bf0ccd9bee68b8fdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
