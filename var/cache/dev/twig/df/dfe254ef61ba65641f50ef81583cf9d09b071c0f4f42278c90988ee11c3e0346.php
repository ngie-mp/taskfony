<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_8e0013d2a4051ad83f3d147841a24787daeca6c7fd47c8dc9023eb077fec0bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1ef45ac9459521d95e4bc486c17d1bce47cf8b6fa2205e557868e4ea52fafaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ef45ac9459521d95e4bc486c17d1bce47cf8b6fa2205e557868e4ea52fafaa->enter($__internal_b1ef45ac9459521d95e4bc486c17d1bce47cf8b6fa2205e557868e4ea52fafaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_fd233a407f2a001540cf3284dd8f640e81d1d9bc6520fe1c911d107c14f94489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd233a407f2a001540cf3284dd8f640e81d1d9bc6520fe1c911d107c14f94489->enter($__internal_fd233a407f2a001540cf3284dd8f640e81d1d9bc6520fe1c911d107c14f94489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ef45ac9459521d95e4bc486c17d1bce47cf8b6fa2205e557868e4ea52fafaa->leave($__internal_b1ef45ac9459521d95e4bc486c17d1bce47cf8b6fa2205e557868e4ea52fafaa_prof);

        
        $__internal_fd233a407f2a001540cf3284dd8f640e81d1d9bc6520fe1c911d107c14f94489->leave($__internal_fd233a407f2a001540cf3284dd8f640e81d1d9bc6520fe1c911d107c14f94489_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b11385fda1cfbb2772f8496277ffb1d8fc8ca9ba3ee9ad0512707edb8ceb385e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11385fda1cfbb2772f8496277ffb1d8fc8ca9ba3ee9ad0512707edb8ceb385e->enter($__internal_b11385fda1cfbb2772f8496277ffb1d8fc8ca9ba3ee9ad0512707edb8ceb385e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_690831dc2b04825e087bbc30ebebd1f303bc61f77f3fbaca7665a9af695bca6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690831dc2b04825e087bbc30ebebd1f303bc61f77f3fbaca7665a9af695bca6a->enter($__internal_690831dc2b04825e087bbc30ebebd1f303bc61f77f3fbaca7665a9af695bca6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_690831dc2b04825e087bbc30ebebd1f303bc61f77f3fbaca7665a9af695bca6a->leave($__internal_690831dc2b04825e087bbc30ebebd1f303bc61f77f3fbaca7665a9af695bca6a_prof);

        
        $__internal_b11385fda1cfbb2772f8496277ffb1d8fc8ca9ba3ee9ad0512707edb8ceb385e->leave($__internal_b11385fda1cfbb2772f8496277ffb1d8fc8ca9ba3ee9ad0512707edb8ceb385e_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8fbe1fb7697b26c3f68b6de6c28a6c8e15040f9ae99da6b2544a214f4c55457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8fbe1fb7697b26c3f68b6de6c28a6c8e15040f9ae99da6b2544a214f4c55457->enter($__internal_d8fbe1fb7697b26c3f68b6de6c28a6c8e15040f9ae99da6b2544a214f4c55457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b8e33dae5077f99d7c7ae9ce6c6799fa28c9b56a98766cd6d2a113c553f5519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8e33dae5077f99d7c7ae9ce6c6799fa28c9b56a98766cd6d2a113c553f5519->enter($__internal_9b8e33dae5077f99d7c7ae9ce6c6799fa28c9b56a98766cd6d2a113c553f5519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_9b8e33dae5077f99d7c7ae9ce6c6799fa28c9b56a98766cd6d2a113c553f5519->leave($__internal_9b8e33dae5077f99d7c7ae9ce6c6799fa28c9b56a98766cd6d2a113c553f5519_prof);

        
        $__internal_d8fbe1fb7697b26c3f68b6de6c28a6c8e15040f9ae99da6b2544a214f4c55457->leave($__internal_d8fbe1fb7697b26c3f68b6de6c28a6c8e15040f9ae99da6b2544a214f4c55457_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% block fos_user_content %}{% endblock %}
{% endblock %}", "@FOSUser/layout.html.twig", "/home/apprenant/workspace/taskfony/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
