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
        $__internal_339c9594431b3099f21e0b7c458aef38d4237e8b2a9f36f374daa6220841736b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_339c9594431b3099f21e0b7c458aef38d4237e8b2a9f36f374daa6220841736b->enter($__internal_339c9594431b3099f21e0b7c458aef38d4237e8b2a9f36f374daa6220841736b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_260aa1abaf054e7a72e52500f92621fcc192dd66584e0169594d79874e6324be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260aa1abaf054e7a72e52500f92621fcc192dd66584e0169594d79874e6324be->enter($__internal_260aa1abaf054e7a72e52500f92621fcc192dd66584e0169594d79874e6324be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_339c9594431b3099f21e0b7c458aef38d4237e8b2a9f36f374daa6220841736b->leave($__internal_339c9594431b3099f21e0b7c458aef38d4237e8b2a9f36f374daa6220841736b_prof);

        
        $__internal_260aa1abaf054e7a72e52500f92621fcc192dd66584e0169594d79874e6324be->leave($__internal_260aa1abaf054e7a72e52500f92621fcc192dd66584e0169594d79874e6324be_prof);

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
