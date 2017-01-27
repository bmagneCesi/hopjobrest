<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_fb119405b368fa8247cecef5b9b88ae299d02e96ae115f1fe7e136e453c08792 extends Twig_Template
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
        $__internal_e744c9ddbb4e21179cb870902e75248acb23370c19847a4a7b6b2968c9327e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e744c9ddbb4e21179cb870902e75248acb23370c19847a4a7b6b2968c9327e2f->enter($__internal_e744c9ddbb4e21179cb870902e75248acb23370c19847a4a7b6b2968c9327e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ea1f6f4f091314d92302257c6bacad8dcc34bbfbb62c60c2b25840bb8d240f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1f6f4f091314d92302257c6bacad8dcc34bbfbb62c60c2b25840bb8d240f4b->enter($__internal_ea1f6f4f091314d92302257c6bacad8dcc34bbfbb62c60c2b25840bb8d240f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e744c9ddbb4e21179cb870902e75248acb23370c19847a4a7b6b2968c9327e2f->leave($__internal_e744c9ddbb4e21179cb870902e75248acb23370c19847a4a7b6b2968c9327e2f_prof);

        
        $__internal_ea1f6f4f091314d92302257c6bacad8dcc34bbfbb62c60c2b25840bb8d240f4b->leave($__internal_ea1f6f4f091314d92302257c6bacad8dcc34bbfbb62c60c2b25840bb8d240f4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
