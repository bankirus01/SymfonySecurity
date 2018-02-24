<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ca533d8751051de08ff276fd661af519e235c7bb49431edff54c21f6e3520fb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_eaf21057d9e71b269d78df278558841c6ee4a4e864818f6fbe0be854dfdfc10e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf21057d9e71b269d78df278558841c6ee4a4e864818f6fbe0be854dfdfc10e->enter($__internal_eaf21057d9e71b269d78df278558841c6ee4a4e864818f6fbe0be854dfdfc10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d3871f7dfaab6a87f68d2688d6adea7b9e88f2caa38402a29759b73e268d8005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3871f7dfaab6a87f68d2688d6adea7b9e88f2caa38402a29759b73e268d8005->enter($__internal_d3871f7dfaab6a87f68d2688d6adea7b9e88f2caa38402a29759b73e268d8005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaf21057d9e71b269d78df278558841c6ee4a4e864818f6fbe0be854dfdfc10e->leave($__internal_eaf21057d9e71b269d78df278558841c6ee4a4e864818f6fbe0be854dfdfc10e_prof);

        
        $__internal_d3871f7dfaab6a87f68d2688d6adea7b9e88f2caa38402a29759b73e268d8005->leave($__internal_d3871f7dfaab6a87f68d2688d6adea7b9e88f2caa38402a29759b73e268d8005_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4115bbf855fb9ac8399f3b03544963330a53bfef2d0163535303fc402d2397ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4115bbf855fb9ac8399f3b03544963330a53bfef2d0163535303fc402d2397ba->enter($__internal_4115bbf855fb9ac8399f3b03544963330a53bfef2d0163535303fc402d2397ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6707df62a2a5ee2fac63c7f5080aa5df64e17521b6338eebab2c8dc0f40ad30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6707df62a2a5ee2fac63c7f5080aa5df64e17521b6338eebab2c8dc0f40ad30b->enter($__internal_6707df62a2a5ee2fac63c7f5080aa5df64e17521b6338eebab2c8dc0f40ad30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6707df62a2a5ee2fac63c7f5080aa5df64e17521b6338eebab2c8dc0f40ad30b->leave($__internal_6707df62a2a5ee2fac63c7f5080aa5df64e17521b6338eebab2c8dc0f40ad30b_prof);

        
        $__internal_4115bbf855fb9ac8399f3b03544963330a53bfef2d0163535303fc402d2397ba->leave($__internal_4115bbf855fb9ac8399f3b03544963330a53bfef2d0163535303fc402d2397ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c36ad46d73500ec4cd484d7245995409b60c594afdee0155ca194b1a80d24471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c36ad46d73500ec4cd484d7245995409b60c594afdee0155ca194b1a80d24471->enter($__internal_c36ad46d73500ec4cd484d7245995409b60c594afdee0155ca194b1a80d24471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b914c819ad4b5ef95b1169c1b5a88ff9e8216022239491df33c614271c442c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b914c819ad4b5ef95b1169c1b5a88ff9e8216022239491df33c614271c442c5f->enter($__internal_b914c819ad4b5ef95b1169c1b5a88ff9e8216022239491df33c614271c442c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b914c819ad4b5ef95b1169c1b5a88ff9e8216022239491df33c614271c442c5f->leave($__internal_b914c819ad4b5ef95b1169c1b5a88ff9e8216022239491df33c614271c442c5f_prof);

        
        $__internal_c36ad46d73500ec4cd484d7245995409b60c594afdee0155ca194b1a80d24471->leave($__internal_c36ad46d73500ec4cd484d7245995409b60c594afdee0155ca194b1a80d24471_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f75528fa5b3f3f804339e2fc1776fbe3638f963577f62ef98c9ed9e105fb134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f75528fa5b3f3f804339e2fc1776fbe3638f963577f62ef98c9ed9e105fb134->enter($__internal_3f75528fa5b3f3f804339e2fc1776fbe3638f963577f62ef98c9ed9e105fb134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2969258f2672eb7273d3db50ba0262de560ceb9289dabd1dcae4dc209f5795ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2969258f2672eb7273d3db50ba0262de560ceb9289dabd1dcae4dc209f5795ed->enter($__internal_2969258f2672eb7273d3db50ba0262de560ceb9289dabd1dcae4dc209f5795ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2969258f2672eb7273d3db50ba0262de560ceb9289dabd1dcae4dc209f5795ed->leave($__internal_2969258f2672eb7273d3db50ba0262de560ceb9289dabd1dcae4dc209f5795ed_prof);

        
        $__internal_3f75528fa5b3f3f804339e2fc1776fbe3638f963577f62ef98c9ed9e105fb134->leave($__internal_3f75528fa5b3f3f804339e2fc1776fbe3638f963577f62ef98c9ed9e105fb134_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/andy/www/SymfonySecurity/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
