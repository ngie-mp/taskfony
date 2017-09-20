<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_b1cee4bc8b5c0942487186f3c65ad3fe4ad7637b767389ac123d14af27d86e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_185e566d671fb3eef6aea1e7666735435b5c50c3cb33533b50d1a0a6379a003f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_185e566d671fb3eef6aea1e7666735435b5c50c3cb33533b50d1a0a6379a003f->enter($__internal_185e566d671fb3eef6aea1e7666735435b5c50c3cb33533b50d1a0a6379a003f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_524409565502871b5b4fae9b845430af96263062960bf337d75cc3a336b6ef48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524409565502871b5b4fae9b845430af96263062960bf337d75cc3a336b6ef48->enter($__internal_524409565502871b5b4fae9b845430af96263062960bf337d75cc3a336b6ef48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_185e566d671fb3eef6aea1e7666735435b5c50c3cb33533b50d1a0a6379a003f->leave($__internal_185e566d671fb3eef6aea1e7666735435b5c50c3cb33533b50d1a0a6379a003f_prof);

        
        $__internal_524409565502871b5b4fae9b845430af96263062960bf337d75cc3a336b6ef48->leave($__internal_524409565502871b5b4fae9b845430af96263062960bf337d75cc3a336b6ef48_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e60d0959b2c7eb57b0801dd64347668f57cff40b176075794ef8cf8be0ea4252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60d0959b2c7eb57b0801dd64347668f57cff40b176075794ef8cf8be0ea4252->enter($__internal_e60d0959b2c7eb57b0801dd64347668f57cff40b176075794ef8cf8be0ea4252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_92af47f856e717362a4a5eb3e8f7288059a46f53bbb0d609b7c5fe86b9befbe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92af47f856e717362a4a5eb3e8f7288059a46f53bbb0d609b7c5fe86b9befbe5->enter($__internal_92af47f856e717362a4a5eb3e8f7288059a46f53bbb0d609b7c5fe86b9befbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_92af47f856e717362a4a5eb3e8f7288059a46f53bbb0d609b7c5fe86b9befbe5->leave($__internal_92af47f856e717362a4a5eb3e8f7288059a46f53bbb0d609b7c5fe86b9befbe5_prof);

        
        $__internal_e60d0959b2c7eb57b0801dd64347668f57cff40b176075794ef8cf8be0ea4252->leave($__internal_e60d0959b2c7eb57b0801dd64347668f57cff40b176075794ef8cf8be0ea4252_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/apprenant/workspace/taskfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
