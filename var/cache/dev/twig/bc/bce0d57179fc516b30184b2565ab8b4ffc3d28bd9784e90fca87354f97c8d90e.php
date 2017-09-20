<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_520d2edee525c3a95165d6ed96ddc238a904b01b470b6a5abc48624d8cf55778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_4d605147f6061188d3517d8a7f3d7bd9beebbda0101b37ee20a0f6634fa295dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d605147f6061188d3517d8a7f3d7bd9beebbda0101b37ee20a0f6634fa295dc->enter($__internal_4d605147f6061188d3517d8a7f3d7bd9beebbda0101b37ee20a0f6634fa295dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_db99bb14e7f881a3af09ab66b09b54cab096d4f8a4bffbe13d8ad19b31f8362b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db99bb14e7f881a3af09ab66b09b54cab096d4f8a4bffbe13d8ad19b31f8362b->enter($__internal_db99bb14e7f881a3af09ab66b09b54cab096d4f8a4bffbe13d8ad19b31f8362b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d605147f6061188d3517d8a7f3d7bd9beebbda0101b37ee20a0f6634fa295dc->leave($__internal_4d605147f6061188d3517d8a7f3d7bd9beebbda0101b37ee20a0f6634fa295dc_prof);

        
        $__internal_db99bb14e7f881a3af09ab66b09b54cab096d4f8a4bffbe13d8ad19b31f8362b->leave($__internal_db99bb14e7f881a3af09ab66b09b54cab096d4f8a4bffbe13d8ad19b31f8362b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97a91898e8d6f5e528d04605139286e03991c0bfa0dd4c96c1e5633634235039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a91898e8d6f5e528d04605139286e03991c0bfa0dd4c96c1e5633634235039->enter($__internal_97a91898e8d6f5e528d04605139286e03991c0bfa0dd4c96c1e5633634235039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_313a5c837c630cfdb6c313d641ef50f9ff4bc6de27a405d0b72b7a1a056460ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313a5c837c630cfdb6c313d641ef50f9ff4bc6de27a405d0b72b7a1a056460ab->enter($__internal_313a5c837c630cfdb6c313d641ef50f9ff4bc6de27a405d0b72b7a1a056460ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_313a5c837c630cfdb6c313d641ef50f9ff4bc6de27a405d0b72b7a1a056460ab->leave($__internal_313a5c837c630cfdb6c313d641ef50f9ff4bc6de27a405d0b72b7a1a056460ab_prof);

        
        $__internal_97a91898e8d6f5e528d04605139286e03991c0bfa0dd4c96c1e5633634235039->leave($__internal_97a91898e8d6f5e528d04605139286e03991c0bfa0dd4c96c1e5633634235039_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/apprenant/workspace/taskfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
