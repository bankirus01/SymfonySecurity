<?php

/* security/register.html.twig */
class __TwigTemplate_9fdc872bc98fda3ea7e18e0e73e5605904a1867fdd5c1de0144790f09a0ec38e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 1);
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
        $__internal_e79877222091070be4e83118cd4de55301db195c51ba55e988a448ccd21e78fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79877222091070be4e83118cd4de55301db195c51ba55e988a448ccd21e78fb->enter($__internal_e79877222091070be4e83118cd4de55301db195c51ba55e988a448ccd21e78fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_d4435e03e1f8bc433b2f2d9378d50be54ff4e6ac2e98e5d9f425f9764bd51954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4435e03e1f8bc433b2f2d9378d50be54ff4e6ac2e98e5d9f425f9764bd51954->enter($__internal_d4435e03e1f8bc433b2f2d9378d50be54ff4e6ac2e98e5d9f425f9764bd51954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e79877222091070be4e83118cd4de55301db195c51ba55e988a448ccd21e78fb->leave($__internal_e79877222091070be4e83118cd4de55301db195c51ba55e988a448ccd21e78fb_prof);

        
        $__internal_d4435e03e1f8bc433b2f2d9378d50be54ff4e6ac2e98e5d9f425f9764bd51954->leave($__internal_d4435e03e1f8bc433b2f2d9378d50be54ff4e6ac2e98e5d9f425f9764bd51954_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bccf50af530b855c635ae0081e52f27cddf0e23aac8e8b8997b589978116db69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bccf50af530b855c635ae0081e52f27cddf0e23aac8e8b8997b589978116db69->enter($__internal_bccf50af530b855c635ae0081e52f27cddf0e23aac8e8b8997b589978116db69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a65eb71e18bc4b8dbcefc84834622d6f7a2631dc22448ce167fabfa231c06895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65eb71e18bc4b8dbcefc84834622d6f7a2631dc22448ce167fabfa231c06895->enter($__internal_a65eb71e18bc4b8dbcefc84834622d6f7a2631dc22448ce167fabfa231c06895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "username", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "email", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'row');
        echo "

    <button type=\"submit\" name=\"register\">Register</button>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_a65eb71e18bc4b8dbcefc84834622d6f7a2631dc22448ce167fabfa231c06895->leave($__internal_a65eb71e18bc4b8dbcefc84834622d6f7a2631dc22448ce167fabfa231c06895_prof);

        
        $__internal_bccf50af530b855c635ae0081e52f27cddf0e23aac8e8b8997b589978116db69->leave($__internal_bccf50af530b855c635ae0081e52f27cddf0e23aac8e8b8997b589978116db69_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}

    <button type=\"submit\" name=\"register\">Register</button>
    {{ form_end(form) }}
{% endblock %}", "security/register.html.twig", "/home/andy/www/SymfonySecurity/app/Resources/views/security/register.html.twig");
    }
}
