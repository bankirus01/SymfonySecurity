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
        $__internal_b5f3c04872426ec42ab9ab57043b0fbb597137c1c82fdcb7ee8ad9e085e7e3e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f3c04872426ec42ab9ab57043b0fbb597137c1c82fdcb7ee8ad9e085e7e3e7->enter($__internal_b5f3c04872426ec42ab9ab57043b0fbb597137c1c82fdcb7ee8ad9e085e7e3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_0b4642eb938b7e8893b3ae8fddace5a381921dae850ed8e68667c8a167d63ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4642eb938b7e8893b3ae8fddace5a381921dae850ed8e68667c8a167d63ad6->enter($__internal_0b4642eb938b7e8893b3ae8fddace5a381921dae850ed8e68667c8a167d63ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f3c04872426ec42ab9ab57043b0fbb597137c1c82fdcb7ee8ad9e085e7e3e7->leave($__internal_b5f3c04872426ec42ab9ab57043b0fbb597137c1c82fdcb7ee8ad9e085e7e3e7_prof);

        
        $__internal_0b4642eb938b7e8893b3ae8fddace5a381921dae850ed8e68667c8a167d63ad6->leave($__internal_0b4642eb938b7e8893b3ae8fddace5a381921dae850ed8e68667c8a167d63ad6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dec94e1b536d59d00d3579bc7f65354ddad8e42c1b06feeb20e7ff6e0a66371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dec94e1b536d59d00d3579bc7f65354ddad8e42c1b06feeb20e7ff6e0a66371->enter($__internal_2dec94e1b536d59d00d3579bc7f65354ddad8e42c1b06feeb20e7ff6e0a66371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2ab774988dbd73adb5d6fadb07476ed680d7487cb238de68246e915dc9660aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ab774988dbd73adb5d6fadb07476ed680d7487cb238de68246e915dc9660aa->enter($__internal_e2ab774988dbd73adb5d6fadb07476ed680d7487cb238de68246e915dc9660aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e2ab774988dbd73adb5d6fadb07476ed680d7487cb238de68246e915dc9660aa->leave($__internal_e2ab774988dbd73adb5d6fadb07476ed680d7487cb238de68246e915dc9660aa_prof);

        
        $__internal_2dec94e1b536d59d00d3579bc7f65354ddad8e42c1b06feeb20e7ff6e0a66371->leave($__internal_2dec94e1b536d59d00d3579bc7f65354ddad8e42c1b06feeb20e7ff6e0a66371_prof);

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
