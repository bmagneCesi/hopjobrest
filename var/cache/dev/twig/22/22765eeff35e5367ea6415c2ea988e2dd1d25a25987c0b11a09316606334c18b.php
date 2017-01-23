<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5384edb8598d17273cbf36f28612cfe512bfe2a1a85dec4ef41b12ad37761e93 extends Twig_Template
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
        $__internal_664b0c102e896688c6a17469fac84041fe467f96aa05e36a6df42200db9201e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664b0c102e896688c6a17469fac84041fe467f96aa05e36a6df42200db9201e9->enter($__internal_664b0c102e896688c6a17469fac84041fe467f96aa05e36a6df42200db9201e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_308c869fd910b220ef09d3512ffac7970cb6da7f3b59984ffc7e96c31dde9af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308c869fd910b220ef09d3512ffac7970cb6da7f3b59984ffc7e96c31dde9af6->enter($__internal_308c869fd910b220ef09d3512ffac7970cb6da7f3b59984ffc7e96c31dde9af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_664b0c102e896688c6a17469fac84041fe467f96aa05e36a6df42200db9201e9->leave($__internal_664b0c102e896688c6a17469fac84041fe467f96aa05e36a6df42200db9201e9_prof);

        
        $__internal_308c869fd910b220ef09d3512ffac7970cb6da7f3b59984ffc7e96c31dde9af6->leave($__internal_308c869fd910b220ef09d3512ffac7970cb6da7f3b59984ffc7e96c31dde9af6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
