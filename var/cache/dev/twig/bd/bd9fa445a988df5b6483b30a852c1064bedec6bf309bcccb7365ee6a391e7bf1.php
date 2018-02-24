<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7767adf0a68388aba5f6676076106d0493510004eb155c65841eb169eee3f7a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ee59cb1f1dc92132a5b475aa3d0240c6d4db502a0a52b72513e6a51698deac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee59cb1f1dc92132a5b475aa3d0240c6d4db502a0a52b72513e6a51698deac2->enter($__internal_3ee59cb1f1dc92132a5b475aa3d0240c6d4db502a0a52b72513e6a51698deac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_97416c50fbe3daefacc800a9c9465080fa0e6a796d0ca3924e26f4c6d33a0362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97416c50fbe3daefacc800a9c9465080fa0e6a796d0ca3924e26f4c6d33a0362->enter($__internal_97416c50fbe3daefacc800a9c9465080fa0e6a796d0ca3924e26f4c6d33a0362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee59cb1f1dc92132a5b475aa3d0240c6d4db502a0a52b72513e6a51698deac2->leave($__internal_3ee59cb1f1dc92132a5b475aa3d0240c6d4db502a0a52b72513e6a51698deac2_prof);

        
        $__internal_97416c50fbe3daefacc800a9c9465080fa0e6a796d0ca3924e26f4c6d33a0362->leave($__internal_97416c50fbe3daefacc800a9c9465080fa0e6a796d0ca3924e26f4c6d33a0362_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_393e7e5ea0f3ea51a787993aa5311d2fb496c0043c50f8a388fe7ab9f876b5f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393e7e5ea0f3ea51a787993aa5311d2fb496c0043c50f8a388fe7ab9f876b5f9->enter($__internal_393e7e5ea0f3ea51a787993aa5311d2fb496c0043c50f8a388fe7ab9f876b5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c90e27451ac3b3f4b6d030d91f0021557f60d96fe34697d066fcbcd2591c4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c90e27451ac3b3f4b6d030d91f0021557f60d96fe34697d066fcbcd2591c4d8->enter($__internal_7c90e27451ac3b3f4b6d030d91f0021557f60d96fe34697d066fcbcd2591c4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7c90e27451ac3b3f4b6d030d91f0021557f60d96fe34697d066fcbcd2591c4d8->leave($__internal_7c90e27451ac3b3f4b6d030d91f0021557f60d96fe34697d066fcbcd2591c4d8_prof);

        
        $__internal_393e7e5ea0f3ea51a787993aa5311d2fb496c0043c50f8a388fe7ab9f876b5f9->leave($__internal_393e7e5ea0f3ea51a787993aa5311d2fb496c0043c50f8a388fe7ab9f876b5f9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_55f0d31c4529319a9fc5d3a0a17fbc19b713265c0058d03c27d826441e88f001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f0d31c4529319a9fc5d3a0a17fbc19b713265c0058d03c27d826441e88f001->enter($__internal_55f0d31c4529319a9fc5d3a0a17fbc19b713265c0058d03c27d826441e88f001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0700b8d7f56244d46832efa16bae67e52f28856aa6351fb5a38fe78eb2f02e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0700b8d7f56244d46832efa16bae67e52f28856aa6351fb5a38fe78eb2f02e72->enter($__internal_0700b8d7f56244d46832efa16bae67e52f28856aa6351fb5a38fe78eb2f02e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0700b8d7f56244d46832efa16bae67e52f28856aa6351fb5a38fe78eb2f02e72->leave($__internal_0700b8d7f56244d46832efa16bae67e52f28856aa6351fb5a38fe78eb2f02e72_prof);

        
        $__internal_55f0d31c4529319a9fc5d3a0a17fbc19b713265c0058d03c27d826441e88f001->leave($__internal_55f0d31c4529319a9fc5d3a0a17fbc19b713265c0058d03c27d826441e88f001_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec8488c91717117ccf668938dbc1567e1326a7e565b046bdfeb99f19267b4d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8488c91717117ccf668938dbc1567e1326a7e565b046bdfeb99f19267b4d1b->enter($__internal_ec8488c91717117ccf668938dbc1567e1326a7e565b046bdfeb99f19267b4d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_82ce2b764f0c06bde8380b5667c3b6f7d3c18af805bfcaca1382485f7292d2a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ce2b764f0c06bde8380b5667c3b6f7d3c18af805bfcaca1382485f7292d2a5->enter($__internal_82ce2b764f0c06bde8380b5667c3b6f7d3c18af805bfcaca1382485f7292d2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_82ce2b764f0c06bde8380b5667c3b6f7d3c18af805bfcaca1382485f7292d2a5->leave($__internal_82ce2b764f0c06bde8380b5667c3b6f7d3c18af805bfcaca1382485f7292d2a5_prof);

        
        $__internal_ec8488c91717117ccf668938dbc1567e1326a7e565b046bdfeb99f19267b4d1b->leave($__internal_ec8488c91717117ccf668938dbc1567e1326a7e565b046bdfeb99f19267b4d1b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/andy/www/SymfonySecurity/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
