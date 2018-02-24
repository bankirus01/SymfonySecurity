<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b0172e9e017916de2f859a3637517271941523a2ba91ec10427b8ee2784a978f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36e6fe28a66e0c5d87e6e8fb46ab76f34454b6e070c39bcabb707dac9cac9395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e6fe28a66e0c5d87e6e8fb46ab76f34454b6e070c39bcabb707dac9cac9395->enter($__internal_36e6fe28a66e0c5d87e6e8fb46ab76f34454b6e070c39bcabb707dac9cac9395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_12ea54bca3638b0d1f63dde758e8dc4b9075b34466ab4d0e5284fd1fb2d41241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ea54bca3638b0d1f63dde758e8dc4b9075b34466ab4d0e5284fd1fb2d41241->enter($__internal_12ea54bca3638b0d1f63dde758e8dc4b9075b34466ab4d0e5284fd1fb2d41241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36e6fe28a66e0c5d87e6e8fb46ab76f34454b6e070c39bcabb707dac9cac9395->leave($__internal_36e6fe28a66e0c5d87e6e8fb46ab76f34454b6e070c39bcabb707dac9cac9395_prof);

        
        $__internal_12ea54bca3638b0d1f63dde758e8dc4b9075b34466ab4d0e5284fd1fb2d41241->leave($__internal_12ea54bca3638b0d1f63dde758e8dc4b9075b34466ab4d0e5284fd1fb2d41241_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3cdc960e3c75dfce3c6c78219d928c62c109a38e1aa6e401bbb2a10ce9b71266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdc960e3c75dfce3c6c78219d928c62c109a38e1aa6e401bbb2a10ce9b71266->enter($__internal_3cdc960e3c75dfce3c6c78219d928c62c109a38e1aa6e401bbb2a10ce9b71266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_70eb9e270ebf119dcdad159d24a996029303e5400642b91129cd845df8fae556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70eb9e270ebf119dcdad159d24a996029303e5400642b91129cd845df8fae556->enter($__internal_70eb9e270ebf119dcdad159d24a996029303e5400642b91129cd845df8fae556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_70eb9e270ebf119dcdad159d24a996029303e5400642b91129cd845df8fae556->leave($__internal_70eb9e270ebf119dcdad159d24a996029303e5400642b91129cd845df8fae556_prof);

        
        $__internal_3cdc960e3c75dfce3c6c78219d928c62c109a38e1aa6e401bbb2a10ce9b71266->leave($__internal_3cdc960e3c75dfce3c6c78219d928c62c109a38e1aa6e401bbb2a10ce9b71266_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/andy/www/SymfonySecurity/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
