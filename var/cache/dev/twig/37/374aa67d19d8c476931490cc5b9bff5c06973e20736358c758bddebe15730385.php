<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eeaffbd25ce18710f447a069c137b66f1de02fe83f60a2cd66da36e4ec3a8703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeaffbd25ce18710f447a069c137b66f1de02fe83f60a2cd66da36e4ec3a8703->enter($__internal_eeaffbd25ce18710f447a069c137b66f1de02fe83f60a2cd66da36e4ec3a8703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_03ca78621110b9f345664e3800e1af30c5b0188c478664954a07736e11d3ae84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ca78621110b9f345664e3800e1af30c5b0188c478664954a07736e11d3ae84->enter($__internal_03ca78621110b9f345664e3800e1af30c5b0188c478664954a07736e11d3ae84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeaffbd25ce18710f447a069c137b66f1de02fe83f60a2cd66da36e4ec3a8703->leave($__internal_eeaffbd25ce18710f447a069c137b66f1de02fe83f60a2cd66da36e4ec3a8703_prof);

        
        $__internal_03ca78621110b9f345664e3800e1af30c5b0188c478664954a07736e11d3ae84->leave($__internal_03ca78621110b9f345664e3800e1af30c5b0188c478664954a07736e11d3ae84_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a84563f9a05bb7160d471ca70985f8487403f31f8fd4cd3152cf4c8e5c591cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84563f9a05bb7160d471ca70985f8487403f31f8fd4cd3152cf4c8e5c591cd5->enter($__internal_a84563f9a05bb7160d471ca70985f8487403f31f8fd4cd3152cf4c8e5c591cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e7763582dfd1a590fcd580ab44850b0cbf96666870eddd87a56ec79c95d9b47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7763582dfd1a590fcd580ab44850b0cbf96666870eddd87a56ec79c95d9b47e->enter($__internal_e7763582dfd1a590fcd580ab44850b0cbf96666870eddd87a56ec79c95d9b47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e7763582dfd1a590fcd580ab44850b0cbf96666870eddd87a56ec79c95d9b47e->leave($__internal_e7763582dfd1a590fcd580ab44850b0cbf96666870eddd87a56ec79c95d9b47e_prof);

        
        $__internal_a84563f9a05bb7160d471ca70985f8487403f31f8fd4cd3152cf4c8e5c591cd5->leave($__internal_a84563f9a05bb7160d471ca70985f8487403f31f8fd4cd3152cf4c8e5c591cd5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a780a44ff09f0c7f7194b6794a339711e8474656a20ab9be395aba871bcec58f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a780a44ff09f0c7f7194b6794a339711e8474656a20ab9be395aba871bcec58f->enter($__internal_a780a44ff09f0c7f7194b6794a339711e8474656a20ab9be395aba871bcec58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a7fe472e3e93c17ddbc1f5aa97593742c28b32c3e0674d57251df2691b44ad08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fe472e3e93c17ddbc1f5aa97593742c28b32c3e0674d57251df2691b44ad08->enter($__internal_a7fe472e3e93c17ddbc1f5aa97593742c28b32c3e0674d57251df2691b44ad08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a7fe472e3e93c17ddbc1f5aa97593742c28b32c3e0674d57251df2691b44ad08->leave($__internal_a7fe472e3e93c17ddbc1f5aa97593742c28b32c3e0674d57251df2691b44ad08_prof);

        
        $__internal_a780a44ff09f0c7f7194b6794a339711e8474656a20ab9be395aba871bcec58f->leave($__internal_a780a44ff09f0c7f7194b6794a339711e8474656a20ab9be395aba871bcec58f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_192523c1da8a83dfdd0b549cff5e4d13693549f7a616ccd617c40f76056b3fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192523c1da8a83dfdd0b549cff5e4d13693549f7a616ccd617c40f76056b3fd6->enter($__internal_192523c1da8a83dfdd0b549cff5e4d13693549f7a616ccd617c40f76056b3fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_59cb154f441560f0f0e67df01f5efe17d460044819a6a71a5a9aa201e304cb82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cb154f441560f0f0e67df01f5efe17d460044819a6a71a5a9aa201e304cb82->enter($__internal_59cb154f441560f0f0e67df01f5efe17d460044819a6a71a5a9aa201e304cb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_59cb154f441560f0f0e67df01f5efe17d460044819a6a71a5a9aa201e304cb82->leave($__internal_59cb154f441560f0f0e67df01f5efe17d460044819a6a71a5a9aa201e304cb82_prof);

        
        $__internal_192523c1da8a83dfdd0b549cff5e4d13693549f7a616ccd617c40f76056b3fd6->leave($__internal_192523c1da8a83dfdd0b549cff5e4d13693549f7a616ccd617c40f76056b3fd6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/apprenant/workspace/taskfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
