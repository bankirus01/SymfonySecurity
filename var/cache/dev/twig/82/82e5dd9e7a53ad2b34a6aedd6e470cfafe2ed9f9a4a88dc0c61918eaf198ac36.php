<?php

/* default/create.html.twig */
class __TwigTemplate_c4814617e2b457640cc99b6bf1bb853a89bad521076c9fff6584db5e1ccb627e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/create.html.twig", 1);
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
        $__internal_a375961b0dfab3442402663b75a4f9cc19fd3f06215dde0c6cfe5d48f11bb7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a375961b0dfab3442402663b75a4f9cc19fd3f06215dde0c6cfe5d48f11bb7d8->enter($__internal_a375961b0dfab3442402663b75a4f9cc19fd3f06215dde0c6cfe5d48f11bb7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/create.html.twig"));

        $__internal_ce2560167ed88ecf09adf9cb0edca416c7828b9f389bb9d1a08516d5d06c3e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2560167ed88ecf09adf9cb0edca416c7828b9f389bb9d1a08516d5d06c3e57->enter($__internal_ce2560167ed88ecf09adf9cb0edca416c7828b9f389bb9d1a08516d5d06c3e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a375961b0dfab3442402663b75a4f9cc19fd3f06215dde0c6cfe5d48f11bb7d8->leave($__internal_a375961b0dfab3442402663b75a4f9cc19fd3f06215dde0c6cfe5d48f11bb7d8_prof);

        
        $__internal_ce2560167ed88ecf09adf9cb0edca416c7828b9f389bb9d1a08516d5d06c3e57->leave($__internal_ce2560167ed88ecf09adf9cb0edca416c7828b9f389bb9d1a08516d5d06c3e57_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb35e7a8083e0a573e142bbd56653b8b19845974efe3d884b30bb6c74031d689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb35e7a8083e0a573e142bbd56653b8b19845974efe3d884b30bb6c74031d689->enter($__internal_cb35e7a8083e0a573e142bbd56653b8b19845974efe3d884b30bb6c74031d689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa1e969eb07ca2b99f3ecf994df233152cc3bfa80df75d064460ff0353f2c1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1e969eb07ca2b99f3ecf994df233152cc3bfa80df75d064460ff0353f2c1c1->enter($__internal_aa1e969eb07ca2b99f3ecf994df233152cc3bfa80df75d064460ff0353f2c1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Back to main page</a>
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form');
        echo "
";
        
        $__internal_aa1e969eb07ca2b99f3ecf994df233152cc3bfa80df75d064460ff0353f2c1c1->leave($__internal_aa1e969eb07ca2b99f3ecf994df233152cc3bfa80df75d064460ff0353f2c1c1_prof);

        
        $__internal_cb35e7a8083e0a573e142bbd56653b8b19845974efe3d884b30bb6c74031d689->leave($__internal_cb35e7a8083e0a573e142bbd56653b8b19845974efe3d884b30bb6c74031d689_prof);

    }

    public function getTemplateName()
    {
        return "default/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <a href=\"{{ path(\"homepage\") }}\">Back to main page</a>
    {{ form(form) }}
{% endblock %}", "default/create.html.twig", "/home/andy/www/SymfonySecurity/app/Resources/views/default/create.html.twig");
    }
}
