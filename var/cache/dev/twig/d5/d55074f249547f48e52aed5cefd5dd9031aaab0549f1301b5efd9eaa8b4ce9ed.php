<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4c7b4289cb995b3ff6737044ed96bea61bb61f1d03ffc7d47b94b73dc8002b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64dc3928b50faef5dc1e742687d8e27e9889aa770f3747e64ba29069d114c203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64dc3928b50faef5dc1e742687d8e27e9889aa770f3747e64ba29069d114c203->enter($__internal_64dc3928b50faef5dc1e742687d8e27e9889aa770f3747e64ba29069d114c203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_cb798fc7b31f2f890825e492ba635f677720aca938faab3c4964bc6b2943e2b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb798fc7b31f2f890825e492ba635f677720aca938faab3c4964bc6b2943e2b7->enter($__internal_cb798fc7b31f2f890825e492ba635f677720aca938faab3c4964bc6b2943e2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64dc3928b50faef5dc1e742687d8e27e9889aa770f3747e64ba29069d114c203->leave($__internal_64dc3928b50faef5dc1e742687d8e27e9889aa770f3747e64ba29069d114c203_prof);

        
        $__internal_cb798fc7b31f2f890825e492ba635f677720aca938faab3c4964bc6b2943e2b7->leave($__internal_cb798fc7b31f2f890825e492ba635f677720aca938faab3c4964bc6b2943e2b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c18c1468540b70719ad67702e0b24d3fcd18a011b0632a0b3b06bcc67b860a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c18c1468540b70719ad67702e0b24d3fcd18a011b0632a0b3b06bcc67b860a1b->enter($__internal_c18c1468540b70719ad67702e0b24d3fcd18a011b0632a0b3b06bcc67b860a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f05edc7af3da69192a7921ef554190ed194773e80e006ca000dd4f4d59f18e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05edc7af3da69192a7921ef554190ed194773e80e006ca000dd4f4d59f18e23->enter($__internal_f05edc7af3da69192a7921ef554190ed194773e80e006ca000dd4f4d59f18e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f05edc7af3da69192a7921ef554190ed194773e80e006ca000dd4f4d59f18e23->leave($__internal_f05edc7af3da69192a7921ef554190ed194773e80e006ca000dd4f4d59f18e23_prof);

        
        $__internal_c18c1468540b70719ad67702e0b24d3fcd18a011b0632a0b3b06bcc67b860a1b->leave($__internal_c18c1468540b70719ad67702e0b24d3fcd18a011b0632a0b3b06bcc67b860a1b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6325961e219f9069afa3a3a78c1abfc524eff500cea13c09742369e68a8829c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6325961e219f9069afa3a3a78c1abfc524eff500cea13c09742369e68a8829c1->enter($__internal_6325961e219f9069afa3a3a78c1abfc524eff500cea13c09742369e68a8829c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e367c743ec1ca56277d1443595ad8f14fa6d36c9307fd9868d56d4dce67a00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e367c743ec1ca56277d1443595ad8f14fa6d36c9307fd9868d56d4dce67a00e->enter($__internal_7e367c743ec1ca56277d1443595ad8f14fa6d36c9307fd9868d56d4dce67a00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7e367c743ec1ca56277d1443595ad8f14fa6d36c9307fd9868d56d4dce67a00e->leave($__internal_7e367c743ec1ca56277d1443595ad8f14fa6d36c9307fd9868d56d4dce67a00e_prof);

        
        $__internal_6325961e219f9069afa3a3a78c1abfc524eff500cea13c09742369e68a8829c1->leave($__internal_6325961e219f9069afa3a3a78c1abfc524eff500cea13c09742369e68a8829c1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d68f3c257993f27e9e88f1ad18bc84ea148234718f1ddabbd5a0820125a764b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d68f3c257993f27e9e88f1ad18bc84ea148234718f1ddabbd5a0820125a764b3->enter($__internal_d68f3c257993f27e9e88f1ad18bc84ea148234718f1ddabbd5a0820125a764b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3633aea065b8863a34fa8d11e983093becabbf36c92474e740322856a8adf13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3633aea065b8863a34fa8d11e983093becabbf36c92474e740322856a8adf13->enter($__internal_d3633aea065b8863a34fa8d11e983093becabbf36c92474e740322856a8adf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d3633aea065b8863a34fa8d11e983093becabbf36c92474e740322856a8adf13->leave($__internal_d3633aea065b8863a34fa8d11e983093becabbf36c92474e740322856a8adf13_prof);

        
        $__internal_d68f3c257993f27e9e88f1ad18bc84ea148234718f1ddabbd5a0820125a764b3->leave($__internal_d68f3c257993f27e9e88f1ad18bc84ea148234718f1ddabbd5a0820125a764b3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/apprenant/workspace/taskfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
