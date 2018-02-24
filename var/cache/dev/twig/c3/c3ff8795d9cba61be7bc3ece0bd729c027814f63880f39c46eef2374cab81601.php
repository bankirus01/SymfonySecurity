<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c491814a8cb65fe241495579c5bf31045beec8428d0402f72832565fac36b13b extends Twig_Template
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
        $__internal_20234f459c595cecd1af01419d4ce7b18c678a006d6485d55bcdf4e5217eeafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20234f459c595cecd1af01419d4ce7b18c678a006d6485d55bcdf4e5217eeafb->enter($__internal_20234f459c595cecd1af01419d4ce7b18c678a006d6485d55bcdf4e5217eeafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_eb449766d3d35cf2f7b1d9ac63a14ad18c2faf92f7eadb117d707a7cc97f5a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb449766d3d35cf2f7b1d9ac63a14ad18c2faf92f7eadb117d707a7cc97f5a6d->enter($__internal_eb449766d3d35cf2f7b1d9ac63a14ad18c2faf92f7eadb117d707a7cc97f5a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20234f459c595cecd1af01419d4ce7b18c678a006d6485d55bcdf4e5217eeafb->leave($__internal_20234f459c595cecd1af01419d4ce7b18c678a006d6485d55bcdf4e5217eeafb_prof);

        
        $__internal_eb449766d3d35cf2f7b1d9ac63a14ad18c2faf92f7eadb117d707a7cc97f5a6d->leave($__internal_eb449766d3d35cf2f7b1d9ac63a14ad18c2faf92f7eadb117d707a7cc97f5a6d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eddec5147d376b31ad71ea37d2857018886bafc2519df5aaf4816c12e56616a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eddec5147d376b31ad71ea37d2857018886bafc2519df5aaf4816c12e56616a5->enter($__internal_eddec5147d376b31ad71ea37d2857018886bafc2519df5aaf4816c12e56616a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c9157550d6a54a9e11e6605a158351e2bd4cc7dbc898d7126a52054145c97cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9157550d6a54a9e11e6605a158351e2bd4cc7dbc898d7126a52054145c97cbe->enter($__internal_c9157550d6a54a9e11e6605a158351e2bd4cc7dbc898d7126a52054145c97cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c9157550d6a54a9e11e6605a158351e2bd4cc7dbc898d7126a52054145c97cbe->leave($__internal_c9157550d6a54a9e11e6605a158351e2bd4cc7dbc898d7126a52054145c97cbe_prof);

        
        $__internal_eddec5147d376b31ad71ea37d2857018886bafc2519df5aaf4816c12e56616a5->leave($__internal_eddec5147d376b31ad71ea37d2857018886bafc2519df5aaf4816c12e56616a5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_04ab6ee2139ded4d03c582b9f088338f90b1226a495c1beb64420de8cfa93c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ab6ee2139ded4d03c582b9f088338f90b1226a495c1beb64420de8cfa93c55->enter($__internal_04ab6ee2139ded4d03c582b9f088338f90b1226a495c1beb64420de8cfa93c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_747e5bf55a95443391c57f0ce714e2764647e1e5d8248df08f1f76190d7df51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747e5bf55a95443391c57f0ce714e2764647e1e5d8248df08f1f76190d7df51c->enter($__internal_747e5bf55a95443391c57f0ce714e2764647e1e5d8248df08f1f76190d7df51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_747e5bf55a95443391c57f0ce714e2764647e1e5d8248df08f1f76190d7df51c->leave($__internal_747e5bf55a95443391c57f0ce714e2764647e1e5d8248df08f1f76190d7df51c_prof);

        
        $__internal_04ab6ee2139ded4d03c582b9f088338f90b1226a495c1beb64420de8cfa93c55->leave($__internal_04ab6ee2139ded4d03c582b9f088338f90b1226a495c1beb64420de8cfa93c55_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_98c3e4fe809ef1930ce66d428999044428672a1519291ca2054d0e8ee2e0677c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c3e4fe809ef1930ce66d428999044428672a1519291ca2054d0e8ee2e0677c->enter($__internal_98c3e4fe809ef1930ce66d428999044428672a1519291ca2054d0e8ee2e0677c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93ea974e9aa99a26e0e088d4b236abc3dfe275a8f1565e439d434bd244fd92b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ea974e9aa99a26e0e088d4b236abc3dfe275a8f1565e439d434bd244fd92b4->enter($__internal_93ea974e9aa99a26e0e088d4b236abc3dfe275a8f1565e439d434bd244fd92b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_93ea974e9aa99a26e0e088d4b236abc3dfe275a8f1565e439d434bd244fd92b4->leave($__internal_93ea974e9aa99a26e0e088d4b236abc3dfe275a8f1565e439d434bd244fd92b4_prof);

        
        $__internal_98c3e4fe809ef1930ce66d428999044428672a1519291ca2054d0e8ee2e0677c->leave($__internal_98c3e4fe809ef1930ce66d428999044428672a1519291ca2054d0e8ee2e0677c_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/andy/www/SymfonySecurity/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
