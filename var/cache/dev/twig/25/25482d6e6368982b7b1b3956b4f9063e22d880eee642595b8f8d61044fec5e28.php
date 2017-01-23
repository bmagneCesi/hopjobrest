<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_853970894709f4efb6a2dccdc14ee7b6c2ac01b45ae1cd916547413d4fecd609 extends Twig_Template
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
        $__internal_d28eb28490dcde41b25f1e39eeb5e8ee16a2c4c63ed61363e3f4fbb4829bb6c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28eb28490dcde41b25f1e39eeb5e8ee16a2c4c63ed61363e3f4fbb4829bb6c3->enter($__internal_d28eb28490dcde41b25f1e39eeb5e8ee16a2c4c63ed61363e3f4fbb4829bb6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7c58dd24f12acd542b9f9f14bd8a7e43d5e30afffbc7c605b96f8baf3e13aa37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c58dd24f12acd542b9f9f14bd8a7e43d5e30afffbc7c605b96f8baf3e13aa37->enter($__internal_7c58dd24f12acd542b9f9f14bd8a7e43d5e30afffbc7c605b96f8baf3e13aa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d28eb28490dcde41b25f1e39eeb5e8ee16a2c4c63ed61363e3f4fbb4829bb6c3->leave($__internal_d28eb28490dcde41b25f1e39eeb5e8ee16a2c4c63ed61363e3f4fbb4829bb6c3_prof);

        
        $__internal_7c58dd24f12acd542b9f9f14bd8a7e43d5e30afffbc7c605b96f8baf3e13aa37->leave($__internal_7c58dd24f12acd542b9f9f14bd8a7e43d5e30afffbc7c605b96f8baf3e13aa37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/Hopjob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
