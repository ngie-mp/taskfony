<?php

/* base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea07f325f6bfb9a2ea46f2234a16b7cd3a82b6f4f81822f3df5dddd7361ffd46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea07f325f6bfb9a2ea46f2234a16b7cd3a82b6f4f81822f3df5dddd7361ffd46->enter($__internal_ea07f325f6bfb9a2ea46f2234a16b7cd3a82b6f4f81822f3df5dddd7361ffd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d90eb5a06dedd427890e209b9c8d23cf94d6010a15a465f8abc26b661af482ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90eb5a06dedd427890e209b9c8d23cf94d6010a15a465f8abc26b661af482ca->enter($__internal_d90eb5a06dedd427890e209b9c8d23cf94d6010a15a465f8abc26b661af482ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\"  href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\"
          integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\"/>
</head>
<body>
<div class=\"site-wrapper\">
    <div class=\"site-wrapper-inner\">
        <div class=\"cover-container\">
            <div class=\"masthead clearfix\">
                <div class=\"inner\">
                    <h1 class=\"masthead-brand\">Taskfony</h1>
                    <nav class=\"nav nav-masthead\">
                        ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 22
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"
                               class=\"nav-link active\" >Logout</a>
                        ";
        } else {
            // line 25
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"
                               class=\"nav-link\" >Login</a>
                            <a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"
                               class=\"nav-link\" >Sign up</a>
                        ";
        }
        // line 30
        echo "                    </nav>
                </div>
            </div>
            <div class=\"inner cover\">
                ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "            </div>
            <div class=\"mastfoot\">
                <div class=\"inner\">
                    <p> Made with <i class=\"fa fa-heart heart\"></i> by: <a href=\"#\">@ngie-mp</a></p>
                </div>
            </div>
        </div>
    </div>
";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "</body>
</html>";
        
        $__internal_ea07f325f6bfb9a2ea46f2234a16b7cd3a82b6f4f81822f3df5dddd7361ffd46->leave($__internal_ea07f325f6bfb9a2ea46f2234a16b7cd3a82b6f4f81822f3df5dddd7361ffd46_prof);

        
        $__internal_d90eb5a06dedd427890e209b9c8d23cf94d6010a15a465f8abc26b661af482ca->leave($__internal_d90eb5a06dedd427890e209b9c8d23cf94d6010a15a465f8abc26b661af482ca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6b9606560860cd3e291059423e1576c9c558246ba487bd1e8b75b857bfdc6d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b9606560860cd3e291059423e1576c9c558246ba487bd1e8b75b857bfdc6d7->enter($__internal_f6b9606560860cd3e291059423e1576c9c558246ba487bd1e8b75b857bfdc6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39489345f230b81901c543aa736c79d4f2c1c5b4c0c075d7d3948ca0a38b75fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39489345f230b81901c543aa736c79d4f2c1c5b4c0c075d7d3948ca0a38b75fc->enter($__internal_39489345f230b81901c543aa736c79d4f2c1c5b4c0c075d7d3948ca0a38b75fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TaskFony";
        
        $__internal_39489345f230b81901c543aa736c79d4f2c1c5b4c0c075d7d3948ca0a38b75fc->leave($__internal_39489345f230b81901c543aa736c79d4f2c1c5b4c0c075d7d3948ca0a38b75fc_prof);

        
        $__internal_f6b9606560860cd3e291059423e1576c9c558246ba487bd1e8b75b857bfdc6d7->leave($__internal_f6b9606560860cd3e291059423e1576c9c558246ba487bd1e8b75b857bfdc6d7_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2a65a54f95565159a7963a1eee7fa4ab034f4838365f97adf01e1f97be16ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a65a54f95565159a7963a1eee7fa4ab034f4838365f97adf01e1f97be16ad4->enter($__internal_f2a65a54f95565159a7963a1eee7fa4ab034f4838365f97adf01e1f97be16ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6e072bc7b511abc649b213038c516871db9d5b8153409e8c434e3e3701ff2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e072bc7b511abc649b213038c516871db9d5b8153409e8c434e3e3701ff2e2->enter($__internal_e6e072bc7b511abc649b213038c516871db9d5b8153409e8c434e3e3701ff2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "                ";
        
        $__internal_e6e072bc7b511abc649b213038c516871db9d5b8153409e8c434e3e3701ff2e2->leave($__internal_e6e072bc7b511abc649b213038c516871db9d5b8153409e8c434e3e3701ff2e2_prof);

        
        $__internal_f2a65a54f95565159a7963a1eee7fa4ab034f4838365f97adf01e1f97be16ad4->leave($__internal_f2a65a54f95565159a7963a1eee7fa4ab034f4838365f97adf01e1f97be16ad4_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6172c834c5e4df905c960b15b24ab9a8698791478097ea4168cdcf8d1f478768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6172c834c5e4df905c960b15b24ab9a8698791478097ea4168cdcf8d1f478768->enter($__internal_6172c834c5e4df905c960b15b24ab9a8698791478097ea4168cdcf8d1f478768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_641e8c4f133e6ded20b9a86840e08198473be0dbd6950112c9159e7ee5254c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641e8c4f133e6ded20b9a86840e08198473be0dbd6950112c9159e7ee5254c77->enter($__internal_641e8c4f133e6ded20b9a86840e08198473be0dbd6950112c9159e7ee5254c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
";
        
        $__internal_641e8c4f133e6ded20b9a86840e08198473be0dbd6950112c9159e7ee5254c77->leave($__internal_641e8c4f133e6ded20b9a86840e08198473be0dbd6950112c9159e7ee5254c77_prof);

        
        $__internal_6172c834c5e4df905c960b15b24ab9a8698791478097ea4168cdcf8d1f478768->leave($__internal_6172c834c5e4df905c960b15b24ab9a8698791478097ea4168cdcf8d1f478768_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 45,  148 => 44,  138 => 35,  129 => 34,  111 => 5,  100 => 47,  98 => 44,  88 => 36,  86 => 34,  80 => 30,  74 => 27,  68 => 25,  61 => 22,  59 => 21,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}TaskFony{% endblock %}</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\"  href=\"{{ asset('css/app.css') }}\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\"
          integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\"/>
</head>
<body>
<div class=\"site-wrapper\">
    <div class=\"site-wrapper-inner\">
        <div class=\"cover-container\">
            <div class=\"masthead clearfix\">
                <div class=\"inner\">
                    <h1 class=\"masthead-brand\">Taskfony</h1>
                    <nav class=\"nav nav-masthead\">
                        {% if is_granted('ROLE_USER') %}
                            <a href=\"{{ path('fos_user_security_logout') }}\"
                               class=\"nav-link active\" >Logout</a>
                        {% else %}
                            <a href=\"{{ path('fos_user_security_login') }}\"
                               class=\"nav-link\" >Login</a>
                            <a href=\"{{ path('fos_user_registration_register') }}\"
                               class=\"nav-link\" >Sign up</a>
                        {% endif %}
                    </nav>
                </div>
            </div>
            <div class=\"inner cover\">
                {% block body %}
                {% endblock %}
            </div>
            <div class=\"mastfoot\">
                <div class=\"inner\">
                    <p> Made with <i class=\"fa fa-heart heart\"></i> by: <a href=\"#\">@ngie-mp</a></p>
                </div>
            </div>
        </div>
    </div>
{% block javascripts %}
    <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
{% endblock %}
</body>
</html>", "base.html.twig", "/home/apprenant/workspace/taskfony/app/Resources/views/base.html.twig");
    }
}
