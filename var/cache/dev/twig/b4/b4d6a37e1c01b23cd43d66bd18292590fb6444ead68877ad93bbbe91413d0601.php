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
        $__internal_94c9b60172abe574e5096924096253ba285652d558f5122debed0790a01ec009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c9b60172abe574e5096924096253ba285652d558f5122debed0790a01ec009->enter($__internal_94c9b60172abe574e5096924096253ba285652d558f5122debed0790a01ec009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_07c36555960273ff4b4f8f6bb498729359769ac3407b305d8d01e1924ab33ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c36555960273ff4b4f8f6bb498729359769ac3407b305d8d01e1924ab33ac3->enter($__internal_07c36555960273ff4b4f8f6bb498729359769ac3407b305d8d01e1924ab33ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_94c9b60172abe574e5096924096253ba285652d558f5122debed0790a01ec009->leave($__internal_94c9b60172abe574e5096924096253ba285652d558f5122debed0790a01ec009_prof);

        
        $__internal_07c36555960273ff4b4f8f6bb498729359769ac3407b305d8d01e1924ab33ac3->leave($__internal_07c36555960273ff4b4f8f6bb498729359769ac3407b305d8d01e1924ab33ac3_prof);

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
