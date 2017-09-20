<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_339126da287ccec2e7e2691172203842a30b85eef50beda4de2d4fd63c1f1f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_b1a5f2f0bdf4a73ffb9914c5d8e6fec191bd357d7c87aa5b842e006e7efac559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a5f2f0bdf4a73ffb9914c5d8e6fec191bd357d7c87aa5b842e006e7efac559->enter($__internal_b1a5f2f0bdf4a73ffb9914c5d8e6fec191bd357d7c87aa5b842e006e7efac559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_f2fd8f025df5238a780772103fbaa31dd9623d03e42ed5eb021aee510ee3b906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2fd8f025df5238a780772103fbaa31dd9623d03e42ed5eb021aee510ee3b906->enter($__internal_f2fd8f025df5238a780772103fbaa31dd9623d03e42ed5eb021aee510ee3b906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a5f2f0bdf4a73ffb9914c5d8e6fec191bd357d7c87aa5b842e006e7efac559->leave($__internal_b1a5f2f0bdf4a73ffb9914c5d8e6fec191bd357d7c87aa5b842e006e7efac559_prof);

        
        $__internal_f2fd8f025df5238a780772103fbaa31dd9623d03e42ed5eb021aee510ee3b906->leave($__internal_f2fd8f025df5238a780772103fbaa31dd9623d03e42ed5eb021aee510ee3b906_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c872b3937608704c24884b51238beafedd8cf4c8d602be8106495604d7626cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c872b3937608704c24884b51238beafedd8cf4c8d602be8106495604d7626cd->enter($__internal_8c872b3937608704c24884b51238beafedd8cf4c8d602be8106495604d7626cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_86e52b9878f32af8398387e66dc0af9696e43caa2001ca1a45216e315e50412f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e52b9878f32af8398387e66dc0af9696e43caa2001ca1a45216e315e50412f->enter($__internal_86e52b9878f32af8398387e66dc0af9696e43caa2001ca1a45216e315e50412f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_86e52b9878f32af8398387e66dc0af9696e43caa2001ca1a45216e315e50412f->leave($__internal_86e52b9878f32af8398387e66dc0af9696e43caa2001ca1a45216e315e50412f_prof);

        
        $__internal_8c872b3937608704c24884b51238beafedd8cf4c8d602be8106495604d7626cd->leave($__internal_8c872b3937608704c24884b51238beafedd8cf4c8d602be8106495604d7626cd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/apprenant/workspace/taskfony/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
