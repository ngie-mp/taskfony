<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_904f72b347b2e0b6567378e3d2660436a066a12f97bb8927c5077708092dc48b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7671ac40ea72305bbeceba44cafc0ef8540c62e7a51f24a6b8ea67b871e4b30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7671ac40ea72305bbeceba44cafc0ef8540c62e7a51f24a6b8ea67b871e4b30e->enter($__internal_7671ac40ea72305bbeceba44cafc0ef8540c62e7a51f24a6b8ea67b871e4b30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_8410622db65e0694aaff51200687c6567feb14225106f319ae3a174b2c8ff484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8410622db65e0694aaff51200687c6567feb14225106f319ae3a174b2c8ff484->enter($__internal_8410622db65e0694aaff51200687c6567feb14225106f319ae3a174b2c8ff484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7671ac40ea72305bbeceba44cafc0ef8540c62e7a51f24a6b8ea67b871e4b30e->leave($__internal_7671ac40ea72305bbeceba44cafc0ef8540c62e7a51f24a6b8ea67b871e4b30e_prof);

        
        $__internal_8410622db65e0694aaff51200687c6567feb14225106f319ae3a174b2c8ff484->leave($__internal_8410622db65e0694aaff51200687c6567feb14225106f319ae3a174b2c8ff484_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eff21006225ea30ffa935e99b933fc8627438f1582489d56ac6c934c92601c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff21006225ea30ffa935e99b933fc8627438f1582489d56ac6c934c92601c36->enter($__internal_eff21006225ea30ffa935e99b933fc8627438f1582489d56ac6c934c92601c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_283c420437c4ea4ccd771fad37ed535af358cd33c50158a26e4051604a31a5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283c420437c4ea4ccd771fad37ed535af358cd33c50158a26e4051604a31a5ad->enter($__internal_283c420437c4ea4ccd771fad37ed535af358cd33c50158a26e4051604a31a5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_283c420437c4ea4ccd771fad37ed535af358cd33c50158a26e4051604a31a5ad->leave($__internal_283c420437c4ea4ccd771fad37ed535af358cd33c50158a26e4051604a31a5ad_prof);

        
        $__internal_eff21006225ea30ffa935e99b933fc8627438f1582489d56ac6c934c92601c36->leave($__internal_eff21006225ea30ffa935e99b933fc8627438f1582489d56ac6c934c92601c36_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_49786aea6b2f8a169d903516d1f925359857f7152486d74e8e151d6b8f3144cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49786aea6b2f8a169d903516d1f925359857f7152486d74e8e151d6b8f3144cc->enter($__internal_49786aea6b2f8a169d903516d1f925359857f7152486d74e8e151d6b8f3144cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_225a5c907ddfc8bee085915296dc9cb7998310694de37dd8a4ae609a11c3f1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225a5c907ddfc8bee085915296dc9cb7998310694de37dd8a4ae609a11c3f1cb->enter($__internal_225a5c907ddfc8bee085915296dc9cb7998310694de37dd8a4ae609a11c3f1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_225a5c907ddfc8bee085915296dc9cb7998310694de37dd8a4ae609a11c3f1cb->leave($__internal_225a5c907ddfc8bee085915296dc9cb7998310694de37dd8a4ae609a11c3f1cb_prof);

        
        $__internal_49786aea6b2f8a169d903516d1f925359857f7152486d74e8e151d6b8f3144cc->leave($__internal_49786aea6b2f8a169d903516d1f925359857f7152486d74e8e151d6b8f3144cc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/apprenant/workspace/taskfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
