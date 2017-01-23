<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3d83cc7f4a67640cf4366d51d8c47dccbb3ab825c9be740072656ff100b56b62 extends Twig_Template
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
        $__internal_8526723de58f034681d035b4b28678e6caf7398a91fd659a3c7c86f61d8b04ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8526723de58f034681d035b4b28678e6caf7398a91fd659a3c7c86f61d8b04ca->enter($__internal_8526723de58f034681d035b4b28678e6caf7398a91fd659a3c7c86f61d8b04ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_dc7b705a8d7f4d3d759c1ab08f865e3d401b168dc785b46f6b15df8b40cac9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7b705a8d7f4d3d759c1ab08f865e3d401b168dc785b46f6b15df8b40cac9fb->enter($__internal_dc7b705a8d7f4d3d759c1ab08f865e3d401b168dc785b46f6b15df8b40cac9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8526723de58f034681d035b4b28678e6caf7398a91fd659a3c7c86f61d8b04ca->leave($__internal_8526723de58f034681d035b4b28678e6caf7398a91fd659a3c7c86f61d8b04ca_prof);

        
        $__internal_dc7b705a8d7f4d3d759c1ab08f865e3d401b168dc785b46f6b15df8b40cac9fb->leave($__internal_dc7b705a8d7f4d3d759c1ab08f865e3d401b168dc785b46f6b15df8b40cac9fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
