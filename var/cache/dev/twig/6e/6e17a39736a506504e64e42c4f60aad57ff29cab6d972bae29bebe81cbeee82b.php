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
        $__internal_001bb1f980f6a57da0904e49c30e67f101b6b3dc94cc34234b141aca46bbcb78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001bb1f980f6a57da0904e49c30e67f101b6b3dc94cc34234b141aca46bbcb78->enter($__internal_001bb1f980f6a57da0904e49c30e67f101b6b3dc94cc34234b141aca46bbcb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5682f60325093743fee3d73e0408d56eb9e9bd6518072992deb9a9f2abacc5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5682f60325093743fee3d73e0408d56eb9e9bd6518072992deb9a9f2abacc5e6->enter($__internal_5682f60325093743fee3d73e0408d56eb9e9bd6518072992deb9a9f2abacc5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_001bb1f980f6a57da0904e49c30e67f101b6b3dc94cc34234b141aca46bbcb78->leave($__internal_001bb1f980f6a57da0904e49c30e67f101b6b3dc94cc34234b141aca46bbcb78_prof);

        
        $__internal_5682f60325093743fee3d73e0408d56eb9e9bd6518072992deb9a9f2abacc5e6->leave($__internal_5682f60325093743fee3d73e0408d56eb9e9bd6518072992deb9a9f2abacc5e6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_12fc054eaa5ee33a3264deccdf3ef40bc520322e6e187cc5521acd0460b3719c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12fc054eaa5ee33a3264deccdf3ef40bc520322e6e187cc5521acd0460b3719c->enter($__internal_12fc054eaa5ee33a3264deccdf3ef40bc520322e6e187cc5521acd0460b3719c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_81d1b7219b4dd7b0ac86761596908806cdd908913dae45d60346432368b3e8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d1b7219b4dd7b0ac86761596908806cdd908913dae45d60346432368b3e8ac->enter($__internal_81d1b7219b4dd7b0ac86761596908806cdd908913dae45d60346432368b3e8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_81d1b7219b4dd7b0ac86761596908806cdd908913dae45d60346432368b3e8ac->leave($__internal_81d1b7219b4dd7b0ac86761596908806cdd908913dae45d60346432368b3e8ac_prof);

        
        $__internal_12fc054eaa5ee33a3264deccdf3ef40bc520322e6e187cc5521acd0460b3719c->leave($__internal_12fc054eaa5ee33a3264deccdf3ef40bc520322e6e187cc5521acd0460b3719c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1908db57b9752e96e448b318d1073e58a2b379c418d988183a47441d5f543ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1908db57b9752e96e448b318d1073e58a2b379c418d988183a47441d5f543ffe->enter($__internal_1908db57b9752e96e448b318d1073e58a2b379c418d988183a47441d5f543ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ecdeb1f6b3c4f00a9f3a969bb3ea5e285fdaf0be6f971caab626768495a92ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecdeb1f6b3c4f00a9f3a969bb3ea5e285fdaf0be6f971caab626768495a92ff8->enter($__internal_ecdeb1f6b3c4f00a9f3a969bb3ea5e285fdaf0be6f971caab626768495a92ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ecdeb1f6b3c4f00a9f3a969bb3ea5e285fdaf0be6f971caab626768495a92ff8->leave($__internal_ecdeb1f6b3c4f00a9f3a969bb3ea5e285fdaf0be6f971caab626768495a92ff8_prof);

        
        $__internal_1908db57b9752e96e448b318d1073e58a2b379c418d988183a47441d5f543ffe->leave($__internal_1908db57b9752e96e448b318d1073e58a2b379c418d988183a47441d5f543ffe_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba8b0f615cecece66365ca906e785a56eb6d24822acfaf065599fc05b926f4f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8b0f615cecece66365ca906e785a56eb6d24822acfaf065599fc05b926f4f3->enter($__internal_ba8b0f615cecece66365ca906e785a56eb6d24822acfaf065599fc05b926f4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8129c03ca579289559be1dfffe00f2379cd6a272c8a9a08ede64e62337e4163b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8129c03ca579289559be1dfffe00f2379cd6a272c8a9a08ede64e62337e4163b->enter($__internal_8129c03ca579289559be1dfffe00f2379cd6a272c8a9a08ede64e62337e4163b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8129c03ca579289559be1dfffe00f2379cd6a272c8a9a08ede64e62337e4163b->leave($__internal_8129c03ca579289559be1dfffe00f2379cd6a272c8a9a08ede64e62337e4163b_prof);

        
        $__internal_ba8b0f615cecece66365ca906e785a56eb6d24822acfaf065599fc05b926f4f3->leave($__internal_ba8b0f615cecece66365ca906e785a56eb6d24822acfaf065599fc05b926f4f3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2efe49008b6e97cc46ab9068abf6c74fff7e2cc5414795aa6d91760f09822030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efe49008b6e97cc46ab9068abf6c74fff7e2cc5414795aa6d91760f09822030->enter($__internal_2efe49008b6e97cc46ab9068abf6c74fff7e2cc5414795aa6d91760f09822030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_81c838043e7d5c28345f72991c9fac17418b3cc063d4bbdffa2603980c8998f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c838043e7d5c28345f72991c9fac17418b3cc063d4bbdffa2603980c8998f6->enter($__internal_81c838043e7d5c28345f72991c9fac17418b3cc063d4bbdffa2603980c8998f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_81c838043e7d5c28345f72991c9fac17418b3cc063d4bbdffa2603980c8998f6->leave($__internal_81c838043e7d5c28345f72991c9fac17418b3cc063d4bbdffa2603980c8998f6_prof);

        
        $__internal_2efe49008b6e97cc46ab9068abf6c74fff7e2cc5414795aa6d91760f09822030->leave($__internal_2efe49008b6e97cc46ab9068abf6c74fff7e2cc5414795aa6d91760f09822030_prof);

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
