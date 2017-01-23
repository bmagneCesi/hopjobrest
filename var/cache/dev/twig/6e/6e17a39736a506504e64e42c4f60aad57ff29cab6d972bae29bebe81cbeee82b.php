<?php

/* base.html.twig */
class __TwigTemplate_c6b56aef91f99a389e1a6f47f71cf0ca91dfaf9399112057d815c56c69b075fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dda329590bfb30d11c341ebb4263af5a27ed7467d9eacabe826de12c2f0252a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dda329590bfb30d11c341ebb4263af5a27ed7467d9eacabe826de12c2f0252a->enter($__internal_3dda329590bfb30d11c341ebb4263af5a27ed7467d9eacabe826de12c2f0252a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2ac4465ee720b9be222f489ddd5e5176b6929d1a5d66956fd39aef757875879a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac4465ee720b9be222f489ddd5e5176b6929d1a5d66956fd39aef757875879a->enter($__internal_2ac4465ee720b9be222f489ddd5e5176b6929d1a5d66956fd39aef757875879a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3dda329590bfb30d11c341ebb4263af5a27ed7467d9eacabe826de12c2f0252a->leave($__internal_3dda329590bfb30d11c341ebb4263af5a27ed7467d9eacabe826de12c2f0252a_prof);

        
        $__internal_2ac4465ee720b9be222f489ddd5e5176b6929d1a5d66956fd39aef757875879a->leave($__internal_2ac4465ee720b9be222f489ddd5e5176b6929d1a5d66956fd39aef757875879a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_13c51becaa0cba4060edca34d6f777214140dc32f9ab9c17e3ab7ada80db0c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c51becaa0cba4060edca34d6f777214140dc32f9ab9c17e3ab7ada80db0c85->enter($__internal_13c51becaa0cba4060edca34d6f777214140dc32f9ab9c17e3ab7ada80db0c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_304d390e40365c8cc62a85d82902e1b54641385878dd9eea9f3ee5bda4810f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304d390e40365c8cc62a85d82902e1b54641385878dd9eea9f3ee5bda4810f3c->enter($__internal_304d390e40365c8cc62a85d82902e1b54641385878dd9eea9f3ee5bda4810f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_304d390e40365c8cc62a85d82902e1b54641385878dd9eea9f3ee5bda4810f3c->leave($__internal_304d390e40365c8cc62a85d82902e1b54641385878dd9eea9f3ee5bda4810f3c_prof);

        
        $__internal_13c51becaa0cba4060edca34d6f777214140dc32f9ab9c17e3ab7ada80db0c85->leave($__internal_13c51becaa0cba4060edca34d6f777214140dc32f9ab9c17e3ab7ada80db0c85_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5728204ea13159d0c16dc7c43dd1b4a817c70cb2275757f8b5a1d1d349e75833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5728204ea13159d0c16dc7c43dd1b4a817c70cb2275757f8b5a1d1d349e75833->enter($__internal_5728204ea13159d0c16dc7c43dd1b4a817c70cb2275757f8b5a1d1d349e75833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e0592fbb2538da30acf3bade965ae7d5d1dbdf118b9cc105e90f4a416cff2355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0592fbb2538da30acf3bade965ae7d5d1dbdf118b9cc105e90f4a416cff2355->enter($__internal_e0592fbb2538da30acf3bade965ae7d5d1dbdf118b9cc105e90f4a416cff2355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e0592fbb2538da30acf3bade965ae7d5d1dbdf118b9cc105e90f4a416cff2355->leave($__internal_e0592fbb2538da30acf3bade965ae7d5d1dbdf118b9cc105e90f4a416cff2355_prof);

        
        $__internal_5728204ea13159d0c16dc7c43dd1b4a817c70cb2275757f8b5a1d1d349e75833->leave($__internal_5728204ea13159d0c16dc7c43dd1b4a817c70cb2275757f8b5a1d1d349e75833_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9065bd0907e49fcf02baeec4057e82345f551b2313b49c3f3f20268543999416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9065bd0907e49fcf02baeec4057e82345f551b2313b49c3f3f20268543999416->enter($__internal_9065bd0907e49fcf02baeec4057e82345f551b2313b49c3f3f20268543999416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e7e350cea64ccf5d5d4002b9935cc9b2e531cfde7dd2a0819383284fd37f162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7e350cea64ccf5d5d4002b9935cc9b2e531cfde7dd2a0819383284fd37f162->enter($__internal_7e7e350cea64ccf5d5d4002b9935cc9b2e531cfde7dd2a0819383284fd37f162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7e7e350cea64ccf5d5d4002b9935cc9b2e531cfde7dd2a0819383284fd37f162->leave($__internal_7e7e350cea64ccf5d5d4002b9935cc9b2e531cfde7dd2a0819383284fd37f162_prof);

        
        $__internal_9065bd0907e49fcf02baeec4057e82345f551b2313b49c3f3f20268543999416->leave($__internal_9065bd0907e49fcf02baeec4057e82345f551b2313b49c3f3f20268543999416_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5123e6b16bc8a8d2f133d00790469dded55d6647009f564659c951a7b196cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5123e6b16bc8a8d2f133d00790469dded55d6647009f564659c951a7b196cec->enter($__internal_e5123e6b16bc8a8d2f133d00790469dded55d6647009f564659c951a7b196cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5a4035670f91b5f7b0bb25cef3e9d9b697e82e14ed36b5ae85f6b075a9843ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4035670f91b5f7b0bb25cef3e9d9b697e82e14ed36b5ae85f6b075a9843ee6->enter($__internal_5a4035670f91b5f7b0bb25cef3e9d9b697e82e14ed36b5ae85f6b075a9843ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5a4035670f91b5f7b0bb25cef3e9d9b697e82e14ed36b5ae85f6b075a9843ee6->leave($__internal_5a4035670f91b5f7b0bb25cef3e9d9b697e82e14ed36b5ae85f6b075a9843ee6_prof);

        
        $__internal_e5123e6b16bc8a8d2f133d00790469dded55d6647009f564659c951a7b196cec->leave($__internal_e5123e6b16bc8a8d2f133d00790469dded55d6647009f564659c951a7b196cec_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/Hopjob/app/Resources/views/base.html.twig");
    }
}
