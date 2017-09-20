<?php

/* default/index.html.twig */
class __TwigTemplate_dceb56a59c18c48718e8d29e4a25e98e5177db0f33ab183da65e3deae3ceaade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8feddc64903598f730c3efdae0713d82ae70750c6b8b26781116c832b2fbfaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8feddc64903598f730c3efdae0713d82ae70750c6b8b26781116c832b2fbfaa->enter($__internal_f8feddc64903598f730c3efdae0713d82ae70750c6b8b26781116c832b2fbfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_99973a0d767d1a7db0f1f3e64a32cc1641d215b7d522d859fcd6df562e76c639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99973a0d767d1a7db0f1f3e64a32cc1641d215b7d522d859fcd6df562e76c639->enter($__internal_99973a0d767d1a7db0f1f3e64a32cc1641d215b7d522d859fcd6df562e76c639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8feddc64903598f730c3efdae0713d82ae70750c6b8b26781116c832b2fbfaa->leave($__internal_f8feddc64903598f730c3efdae0713d82ae70750c6b8b26781116c832b2fbfaa_prof);

        
        $__internal_99973a0d767d1a7db0f1f3e64a32cc1641d215b7d522d859fcd6df562e76c639->leave($__internal_99973a0d767d1a7db0f1f3e64a32cc1641d215b7d522d859fcd6df562e76c639_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_759230b205c72eac9feb2b88e9364b1fc6cc005f11710480be37ddec5354e0a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759230b205c72eac9feb2b88e9364b1fc6cc005f11710480be37ddec5354e0a2->enter($__internal_759230b205c72eac9feb2b88e9364b1fc6cc005f11710480be37ddec5354e0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2570c6a99516b0cab1adefce926a545ddb12cba80e0c8bfd9dfe5329fe7e775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2570c6a99516b0cab1adefce926a545ddb12cba80e0c8bfd9dfe5329fe7e775->enter($__internal_e2570c6a99516b0cab1adefce926a545ddb12cba80e0c8bfd9dfe5329fe7e775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row justify-content-md-center\">
        <div class=\"col\">
            <h1><span>Welcome to</span> Taskfony</h1>
            PWD: <code>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")), "html", null, true);
        echo "</code>
            <p class=\"lead\">
                <a  href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"
                    class=\"btn btn-lg btn-secondary\">Sign up</a>
            </p>
        </div>
    </div>

";
        
        $__internal_e2570c6a99516b0cab1adefce926a545ddb12cba80e0c8bfd9dfe5329fe7e775->leave($__internal_e2570c6a99516b0cab1adefce926a545ddb12cba80e0c8bfd9dfe5329fe7e775_prof);

        
        $__internal_759230b205c72eac9feb2b88e9364b1fc6cc005f11710480be37ddec5354e0a2->leave($__internal_759230b205c72eac9feb2b88e9364b1fc6cc005f11710480be37ddec5354e0a2_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"row justify-content-md-center\">
        <div class=\"col\">
            <h1><span>Welcome to</span> Taskfony</h1>
            PWD: <code>{{ base_dir }}</code>
            <p class=\"lead\">
                <a  href=\"{{ path('fos_user_registration_register') }}\"
                    class=\"btn btn-lg btn-secondary\">Sign up</a>
            </p>
        </div>
    </div>

{% endblock %}", "default/index.html.twig", "/home/apprenant/workspace/taskfony/app/Resources/views/default/index.html.twig");
    }
}
