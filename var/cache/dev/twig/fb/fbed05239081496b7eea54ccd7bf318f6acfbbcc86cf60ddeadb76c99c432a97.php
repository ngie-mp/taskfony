<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_72b5c0496cef93f83e4457239af06c8c3cea5c1c85bab53f652334986c2f437c extends Twig_Template
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
        $__internal_3e23251c2053d1acf850c68e16928dd8d24df11e2d9833832f15833f2e083576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e23251c2053d1acf850c68e16928dd8d24df11e2d9833832f15833f2e083576->enter($__internal_3e23251c2053d1acf850c68e16928dd8d24df11e2d9833832f15833f2e083576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_7d875e56500016313e2d8b86fcf14e93c0ec17a35d421ea8bb86f95ade8b4949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d875e56500016313e2d8b86fcf14e93c0ec17a35d421ea8bb86f95ade8b4949->enter($__internal_7d875e56500016313e2d8b86fcf14e93c0ec17a35d421ea8bb86f95ade8b4949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\"
          method=\"post\"
          class=\"form-group\">
        ";
        // line 9
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 10
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
        ";
        }
        // line 12
        echo "        <div class=\"form-group\">
            <label for=\"username\" class=\"form-control-label\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                   required=\"required\"
                   class=\"form-control\"/>
        </div>
        <div class=\"form-group\">
            <label for=\"password\" class=\"form-control-label\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\"
                   required=\"required\"
                   class=\"form-control\" />
        </div>
        <div class=\"form-check\">
            <label for=\"remember_me\" class=\"form-check-label\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"
                       value=\"on\"
                       class=\"form-check-input\" />
                Remember me
            </label>
        </div>
        <button type=\"submit\"
                id=\"_submit\"
                name=\"_submit\"
                value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"
                class=\"btn btn-primary\">Log in</button>
    </form>
";
        
        $__internal_3e23251c2053d1acf850c68e16928dd8d24df11e2d9833832f15833f2e083576->leave($__internal_3e23251c2053d1acf850c68e16928dd8d24df11e2d9833832f15833f2e083576_prof);

        
        $__internal_7d875e56500016313e2d8b86fcf14e93c0ec17a35d421ea8bb86f95ade8b4949->leave($__internal_7d875e56500016313e2d8b86fcf14e93c0ec17a35d421ea8bb86f95ade8b4949_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 35,  55 => 14,  51 => 12,  45 => 10,  43 => 9,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
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

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
    <form action=\"{{ path(\"fos_user_security_check\") }}\"
          method=\"post\"
          class=\"form-group\">
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}
        <div class=\"form-group\">
            <label for=\"username\" class=\"form-control-label\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"
                   required=\"required\"
                   class=\"form-control\"/>
        </div>
        <div class=\"form-group\">
            <label for=\"password\" class=\"form-control-label\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\"
                   required=\"required\"
                   class=\"form-control\" />
        </div>
        <div class=\"form-check\">
            <label for=\"remember_me\" class=\"form-check-label\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"
                       value=\"on\"
                       class=\"form-check-input\" />
                Remember me
            </label>
        </div>
        <button type=\"submit\"
                id=\"_submit\"
                name=\"_submit\"
                value=\"{{ 'security.login.submit'|trans }}\"
                class=\"btn btn-primary\">Log in</button>
    </form>
", "@FOSUser/Security/login_content.html.twig", "/home/apprenant/workspace/taskfony/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
