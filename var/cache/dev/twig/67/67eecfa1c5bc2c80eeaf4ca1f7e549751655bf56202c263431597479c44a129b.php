<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_a8199e8493584f73a53a10dd7d7d620de0097389f1a7b6c57f546dd0f385ffe0 extends Twig_Template
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
        $__internal_85712dbf10c540ecabf6d5d5dda071ddc1a8392d7af1aa96f1062f8485a96c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85712dbf10c540ecabf6d5d5dda071ddc1a8392d7af1aa96f1062f8485a96c91->enter($__internal_85712dbf10c540ecabf6d5d5dda071ddc1a8392d7af1aa96f1062f8485a96c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_6d8e02dd4619d4a3a77feb272939f9aa4a21099be7af29913a05853bd37b0748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8e02dd4619d4a3a77feb272939f9aa4a21099be7af29913a05853bd37b0748->enter($__internal_6d8e02dd4619d4a3a77feb272939f9aa4a21099be7af29913a05853bd37b0748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "<h1>Register to TaskFony!</h1>
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<div>
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_85712dbf10c540ecabf6d5d5dda071ddc1a8392d7af1aa96f1062f8485a96c91->leave($__internal_85712dbf10c540ecabf6d5d5dda071ddc1a8392d7af1aa96f1062f8485a96c91_prof);

        
        $__internal_6d8e02dd4619d4a3a77feb272939f9aa4a21099be7af29913a05853bd37b0748->leave($__internal_6d8e02dd4619d4a3a77feb272939f9aa4a21099be7af29913a05853bd37b0748_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<h1>Register to TaskFony!</h1>
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
<div>
    <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
</div>
{{ form_end(form) }}", "@FOSUser/Registration/register_content.html.twig", "/home/apprenant/workspace/taskfony/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
