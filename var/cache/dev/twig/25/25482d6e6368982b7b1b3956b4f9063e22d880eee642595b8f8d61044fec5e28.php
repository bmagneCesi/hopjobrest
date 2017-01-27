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
        $__internal_e8f218d714fdc49e0168d4dea4b5b39ca7ea8e1ab0dc93a239538066031a3a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f218d714fdc49e0168d4dea4b5b39ca7ea8e1ab0dc93a239538066031a3a7a->enter($__internal_e8f218d714fdc49e0168d4dea4b5b39ca7ea8e1ab0dc93a239538066031a3a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ebca3795572397c642a0fb9c012446008537f78e2b75254bed126c08d5785a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebca3795572397c642a0fb9c012446008537f78e2b75254bed126c08d5785a42->enter($__internal_ebca3795572397c642a0fb9c012446008537f78e2b75254bed126c08d5785a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e8f218d714fdc49e0168d4dea4b5b39ca7ea8e1ab0dc93a239538066031a3a7a->leave($__internal_e8f218d714fdc49e0168d4dea4b5b39ca7ea8e1ab0dc93a239538066031a3a7a_prof);

        
        $__internal_ebca3795572397c642a0fb9c012446008537f78e2b75254bed126c08d5785a42->leave($__internal_ebca3795572397c642a0fb9c012446008537f78e2b75254bed126c08d5785a42_prof);

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
