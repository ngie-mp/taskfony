<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35e8d12a8c77146da02a6ac1cf8a6c727710d67b93bf3d50752573e75ea65672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e8d12a8c77146da02a6ac1cf8a6c727710d67b93bf3d50752573e75ea65672->enter($__internal_35e8d12a8c77146da02a6ac1cf8a6c727710d67b93bf3d50752573e75ea65672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_00caee9c55dbae330d8f5db36978521e1ffe64a6ae9a93fc530f6c4b0b2a898b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00caee9c55dbae330d8f5db36978521e1ffe64a6ae9a93fc530f6c4b0b2a898b->enter($__internal_00caee9c55dbae330d8f5db36978521e1ffe64a6ae9a93fc530f6c4b0b2a898b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_35e8d12a8c77146da02a6ac1cf8a6c727710d67b93bf3d50752573e75ea65672->leave($__internal_35e8d12a8c77146da02a6ac1cf8a6c727710d67b93bf3d50752573e75ea65672_prof);

        
        $__internal_00caee9c55dbae330d8f5db36978521e1ffe64a6ae9a93fc530f6c4b0b2a898b->leave($__internal_00caee9c55dbae330d8f5db36978521e1ffe64a6ae9a93fc530f6c4b0b2a898b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0809e0e6848c1cdd13e8d94a916a6b84f1e6d0050b19c5b9d093659093640dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0809e0e6848c1cdd13e8d94a916a6b84f1e6d0050b19c5b9d093659093640dfe->enter($__internal_0809e0e6848c1cdd13e8d94a916a6b84f1e6d0050b19c5b9d093659093640dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_112a9bc58c94c7ae7c98c50375d41b9274f1d50f5e65cbc773927e5d3bd6633b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112a9bc58c94c7ae7c98c50375d41b9274f1d50f5e65cbc773927e5d3bd6633b->enter($__internal_112a9bc58c94c7ae7c98c50375d41b9274f1d50f5e65cbc773927e5d3bd6633b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_112a9bc58c94c7ae7c98c50375d41b9274f1d50f5e65cbc773927e5d3bd6633b->leave($__internal_112a9bc58c94c7ae7c98c50375d41b9274f1d50f5e65cbc773927e5d3bd6633b_prof);

        
        $__internal_0809e0e6848c1cdd13e8d94a916a6b84f1e6d0050b19c5b9d093659093640dfe->leave($__internal_0809e0e6848c1cdd13e8d94a916a6b84f1e6d0050b19c5b9d093659093640dfe_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_201c4a88a2d3e80228eafad894870e8d3a11cc9e84eb13d9fc73d69ae4b8132a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201c4a88a2d3e80228eafad894870e8d3a11cc9e84eb13d9fc73d69ae4b8132a->enter($__internal_201c4a88a2d3e80228eafad894870e8d3a11cc9e84eb13d9fc73d69ae4b8132a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_945ca17963d7607cbe3c4474b5bc08354756fee7b26e4383603c469fc7ea1c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945ca17963d7607cbe3c4474b5bc08354756fee7b26e4383603c469fc7ea1c4f->enter($__internal_945ca17963d7607cbe3c4474b5bc08354756fee7b26e4383603c469fc7ea1c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_945ca17963d7607cbe3c4474b5bc08354756fee7b26e4383603c469fc7ea1c4f->leave($__internal_945ca17963d7607cbe3c4474b5bc08354756fee7b26e4383603c469fc7ea1c4f_prof);

        
        $__internal_201c4a88a2d3e80228eafad894870e8d3a11cc9e84eb13d9fc73d69ae4b8132a->leave($__internal_201c4a88a2d3e80228eafad894870e8d3a11cc9e84eb13d9fc73d69ae4b8132a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd1760c4ce82df3538ad409a136d0793812520206d27ff8c0eacf50dc2512ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1760c4ce82df3538ad409a136d0793812520206d27ff8c0eacf50dc2512ba9->enter($__internal_cd1760c4ce82df3538ad409a136d0793812520206d27ff8c0eacf50dc2512ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0362f28c0c7d80c5f2e3278d34e3febaaf2c2c270ee1ea44ba2547b56a382be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0362f28c0c7d80c5f2e3278d34e3febaaf2c2c270ee1ea44ba2547b56a382be5->enter($__internal_0362f28c0c7d80c5f2e3278d34e3febaaf2c2c270ee1ea44ba2547b56a382be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0362f28c0c7d80c5f2e3278d34e3febaaf2c2c270ee1ea44ba2547b56a382be5->leave($__internal_0362f28c0c7d80c5f2e3278d34e3febaaf2c2c270ee1ea44ba2547b56a382be5_prof);

        
        $__internal_cd1760c4ce82df3538ad409a136d0793812520206d27ff8c0eacf50dc2512ba9->leave($__internal_cd1760c4ce82df3538ad409a136d0793812520206d27ff8c0eacf50dc2512ba9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/apprenant/workspace/taskfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
