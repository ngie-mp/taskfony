<?php

/* todos/index.html.twig */
class __TwigTemplate_f12a4a60a397f89863b23a127b3a7544a2b3881b48ab312a71f7354bc4c70e54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todos/index.html.twig", 1);
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
        $__internal_496243278bbd0a8ae01374fdc499096743dd2fc8ae213e6b0d2263f31a7a89fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496243278bbd0a8ae01374fdc499096743dd2fc8ae213e6b0d2263f31a7a89fc->enter($__internal_496243278bbd0a8ae01374fdc499096743dd2fc8ae213e6b0d2263f31a7a89fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todos/index.html.twig"));

        $__internal_761ca2f269634417a3e8754ade70e251c58aa44f496d68ba2c713991805117ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761ca2f269634417a3e8754ade70e251c58aa44f496d68ba2c713991805117ed->enter($__internal_761ca2f269634417a3e8754ade70e251c58aa44f496d68ba2c713991805117ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_496243278bbd0a8ae01374fdc499096743dd2fc8ae213e6b0d2263f31a7a89fc->leave($__internal_496243278bbd0a8ae01374fdc499096743dd2fc8ae213e6b0d2263f31a7a89fc_prof);

        
        $__internal_761ca2f269634417a3e8754ade70e251c58aa44f496d68ba2c713991805117ed->leave($__internal_761ca2f269634417a3e8754ade70e251c58aa44f496d68ba2c713991805117ed_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4866ede20fe74a5629c5b94b945a4548d791fcbf2c141483c9a813b8db8d72ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4866ede20fe74a5629c5b94b945a4548d791fcbf2c141483c9a813b8db8d72ab->enter($__internal_4866ede20fe74a5629c5b94b945a4548d791fcbf2c141483c9a813b8db8d72ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd44440ba6f122b9b41231e4cb70ff1828656a040a022d4a30b8463697019028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd44440ba6f122b9b41231e4cb70ff1828656a040a022d4a30b8463697019028->enter($__internal_bd44440ba6f122b9b41231e4cb70ff1828656a040a022d4a30b8463697019028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <table class=table table-bordered>
        <thead>
        <tr>
            <th>#</th>
            <th>Todo</th>
            <th>Assigned Date</th>
            <th>Due Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) ? $context["todos"] : $this->getContext($context, "todos")));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 15
            echo "            <tr>
                <td scope=row>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "createDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "duedate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                <td>
                    <a href=todos/details/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo " class=btn btn-success>View</a>
                    <a href=todos/edit/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo " class=btn btn-default>Edit</a>
                    <a href=todos/delete/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo " class=btn btn-danger>Delete</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
";
        
        $__internal_bd44440ba6f122b9b41231e4cb70ff1828656a040a022d4a30b8463697019028->leave($__internal_bd44440ba6f122b9b41231e4cb70ff1828656a040a022d4a30b8463697019028_prof);

        
        $__internal_4866ede20fe74a5629c5b94b945a4548d791fcbf2c141483c9a813b8db8d72ab->leave($__internal_4866ede20fe74a5629c5b94b945a4548d791fcbf2c141483c9a813b8db8d72ab_prof);

    }

    public function getTemplateName()
    {
        return "todos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  94 => 23,  90 => 22,  86 => 21,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  66 => 15,  62 => 14,  49 => 3,  40 => 2,  11 => 1,);
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
    <table class=table table-bordered>
        <thead>
        <tr>
            <th>#</th>
            <th>Todo</th>
            <th>Assigned Date</th>
            <th>Due Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for todo in todos %}
            <tr>
                <td scope=row>{{todo.id}}</td>
                <td>{{todo.name}}</td>
                <td>{{todo.createDate | date('F j, Y, g:i a')}}</td>
                <td>{{todo.duedate | date('F j, Y, g:i a')}}</td>
                <td>
                    <a href=todos/details/{{todo.id}} class=btn btn-success>View</a>
                    <a href=todos/edit/{{todo.id}} class=btn btn-default>Edit</a>
                    <a href=todos/delete/{{todo.id}} class=btn btn-danger>Delete</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "todos/index.html.twig", "/home/apprenant/workspace/taskfony/app/Resources/views/todos/index.html.twig");
    }
}
