<?php

/* todos/create.html.twig */
class __TwigTemplate_93356d795bae1260d0ca81e4446e0de3c135cbe141b6367296af7caba5e4c8ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todos/create.html.twig", 1);
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
        $__internal_9812782d287b1aa14de0ae21dddd260735be2ce1020cb570857c37f419dd250d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9812782d287b1aa14de0ae21dddd260735be2ce1020cb570857c37f419dd250d->enter($__internal_9812782d287b1aa14de0ae21dddd260735be2ce1020cb570857c37f419dd250d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todos/create.html.twig"));

        $__internal_844339ebc911017fa633a51e9074de86a6da59ef962c1f1b157883be6190bc2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844339ebc911017fa633a51e9074de86a6da59ef962c1f1b157883be6190bc2a->enter($__internal_844339ebc911017fa633a51e9074de86a6da59ef962c1f1b157883be6190bc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todos/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9812782d287b1aa14de0ae21dddd260735be2ce1020cb570857c37f419dd250d->leave($__internal_9812782d287b1aa14de0ae21dddd260735be2ce1020cb570857c37f419dd250d_prof);

        
        $__internal_844339ebc911017fa633a51e9074de86a6da59ef962c1f1b157883be6190bc2a->leave($__internal_844339ebc911017fa633a51e9074de86a6da59ef962c1f1b157883be6190bc2a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_89ccc136cab6ec3b6c7d6172775ad4ee486777a0eac5bec302841532efeb2507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ccc136cab6ec3b6c7d6172775ad4ee486777a0eac5bec302841532efeb2507->enter($__internal_89ccc136cab6ec3b6c7d6172775ad4ee486777a0eac5bec302841532efeb2507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5346280c019279ab83e3bb107ddf16c5fe58c160e0da2a9f20d59b253a3d5a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5346280c019279ab83e3bb107ddf16c5fe58c160e0da2a9f20d59b253a3d5a95->enter($__internal_5346280c019279ab83e3bb107ddf16c5fe58c160e0da2a9f20d59b253a3d5a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"form-group\">
                <h2 class=page-header>Contact Form in Symfony</h2>

                ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>
    </div>

";
        
        $__internal_5346280c019279ab83e3bb107ddf16c5fe58c160e0da2a9f20d59b253a3d5a95->leave($__internal_5346280c019279ab83e3bb107ddf16c5fe58c160e0da2a9f20d59b253a3d5a95_prof);

        
        $__internal_89ccc136cab6ec3b6c7d6172775ad4ee486777a0eac5bec302841532efeb2507->leave($__internal_89ccc136cab6ec3b6c7d6172775ad4ee486777a0eac5bec302841532efeb2507_prof);

    }

    public function getTemplateName()
    {
        return "todos/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  61 => 10,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
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

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"form-group\">
                <h2 class=page-header>Contact Form in Symfony</h2>

                {{form_start(form)}}
                {{form_widget(form)}}
                {{form_end(form)}}

            </div>
        </div>
    </div>

{% endblock %}", "todos/create.html.twig", "/home/apprenant/workspace/taskfony/app/Resources/views/todos/create.html.twig");
    }
}
