<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_477cf821ea92e3bde2c816b978c9f7b496381aa5fcee3cc25cf2390b98a6a58c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477cf821ea92e3bde2c816b978c9f7b496381aa5fcee3cc25cf2390b98a6a58c->enter($__internal_477cf821ea92e3bde2c816b978c9f7b496381aa5fcee3cc25cf2390b98a6a58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8166c79074ed84b732dd2aa08eee5335bc57566230ec54f5eef769b84b7294cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8166c79074ed84b732dd2aa08eee5335bc57566230ec54f5eef769b84b7294cc->enter($__internal_8166c79074ed84b732dd2aa08eee5335bc57566230ec54f5eef769b84b7294cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_477cf821ea92e3bde2c816b978c9f7b496381aa5fcee3cc25cf2390b98a6a58c->leave($__internal_477cf821ea92e3bde2c816b978c9f7b496381aa5fcee3cc25cf2390b98a6a58c_prof);

        
        $__internal_8166c79074ed84b732dd2aa08eee5335bc57566230ec54f5eef769b84b7294cc->leave($__internal_8166c79074ed84b732dd2aa08eee5335bc57566230ec54f5eef769b84b7294cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa7d6fefb306a4c76566a8295e45ac987db8eb5905a6e3a19efc2b3a45bb44c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa7d6fefb306a4c76566a8295e45ac987db8eb5905a6e3a19efc2b3a45bb44c0->enter($__internal_aa7d6fefb306a4c76566a8295e45ac987db8eb5905a6e3a19efc2b3a45bb44c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2208c54f167aea49586aa905cfbb116274f5df9c36a3fdcd7a9935b2564d2601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2208c54f167aea49586aa905cfbb116274f5df9c36a3fdcd7a9935b2564d2601->enter($__internal_2208c54f167aea49586aa905cfbb116274f5df9c36a3fdcd7a9935b2564d2601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2208c54f167aea49586aa905cfbb116274f5df9c36a3fdcd7a9935b2564d2601->leave($__internal_2208c54f167aea49586aa905cfbb116274f5df9c36a3fdcd7a9935b2564d2601_prof);

        
        $__internal_aa7d6fefb306a4c76566a8295e45ac987db8eb5905a6e3a19efc2b3a45bb44c0->leave($__internal_aa7d6fefb306a4c76566a8295e45ac987db8eb5905a6e3a19efc2b3a45bb44c0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee80d22f05480a13ac2b214d38bc2cf884a69b8bed184e7ecd89f6a4968a4d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee80d22f05480a13ac2b214d38bc2cf884a69b8bed184e7ecd89f6a4968a4d11->enter($__internal_ee80d22f05480a13ac2b214d38bc2cf884a69b8bed184e7ecd89f6a4968a4d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_49c2cae2dc0f3b0f0dac632c491bafbd9b1526be65a78a16f319d97fa87e1311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c2cae2dc0f3b0f0dac632c491bafbd9b1526be65a78a16f319d97fa87e1311->enter($__internal_49c2cae2dc0f3b0f0dac632c491bafbd9b1526be65a78a16f319d97fa87e1311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_49c2cae2dc0f3b0f0dac632c491bafbd9b1526be65a78a16f319d97fa87e1311->leave($__internal_49c2cae2dc0f3b0f0dac632c491bafbd9b1526be65a78a16f319d97fa87e1311_prof);

        
        $__internal_ee80d22f05480a13ac2b214d38bc2cf884a69b8bed184e7ecd89f6a4968a4d11->leave($__internal_ee80d22f05480a13ac2b214d38bc2cf884a69b8bed184e7ecd89f6a4968a4d11_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28ce172cd20cf26ece7355e1fe2015ba9ab63174e43bf3ff9a7ed5c4c73b9a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28ce172cd20cf26ece7355e1fe2015ba9ab63174e43bf3ff9a7ed5c4c73b9a49->enter($__internal_28ce172cd20cf26ece7355e1fe2015ba9ab63174e43bf3ff9a7ed5c4c73b9a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e2dbdc91d4930cbabcc36824c9312a09c86fe0567e0f0ff37373bdd32ffb1c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2dbdc91d4930cbabcc36824c9312a09c86fe0567e0f0ff37373bdd32ffb1c74->enter($__internal_e2dbdc91d4930cbabcc36824c9312a09c86fe0567e0f0ff37373bdd32ffb1c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e2dbdc91d4930cbabcc36824c9312a09c86fe0567e0f0ff37373bdd32ffb1c74->leave($__internal_e2dbdc91d4930cbabcc36824c9312a09c86fe0567e0f0ff37373bdd32ffb1c74_prof);

        
        $__internal_28ce172cd20cf26ece7355e1fe2015ba9ab63174e43bf3ff9a7ed5c4c73b9a49->leave($__internal_28ce172cd20cf26ece7355e1fe2015ba9ab63174e43bf3ff9a7ed5c4c73b9a49_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/apprenant/workspace/taskfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
