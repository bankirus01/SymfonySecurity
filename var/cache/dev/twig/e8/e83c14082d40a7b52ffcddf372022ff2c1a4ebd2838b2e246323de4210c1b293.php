<?php

/* security/login.html.twig */
class __TwigTemplate_1c3cd39b252984a1571b780a4120a90a4f39dedc3010495191ce3115383464e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_7e96ee739ecb748e273d6fbdf4a735afa83f38ebe776ff4819e98cbf8c181d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e96ee739ecb748e273d6fbdf4a735afa83f38ebe776ff4819e98cbf8c181d15->enter($__internal_7e96ee739ecb748e273d6fbdf4a735afa83f38ebe776ff4819e98cbf8c181d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_ff161222458f9270a5b35a6eeba0db4a6cafc3ace186dc3d079070eceeee3bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff161222458f9270a5b35a6eeba0db4a6cafc3ace186dc3d079070eceeee3bdb->enter($__internal_ff161222458f9270a5b35a6eeba0db4a6cafc3ace186dc3d079070eceeee3bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e96ee739ecb748e273d6fbdf4a735afa83f38ebe776ff4819e98cbf8c181d15->leave($__internal_7e96ee739ecb748e273d6fbdf4a735afa83f38ebe776ff4819e98cbf8c181d15_prof);

        
        $__internal_ff161222458f9270a5b35a6eeba0db4a6cafc3ace186dc3d079070eceeee3bdb->leave($__internal_ff161222458f9270a5b35a6eeba0db4a6cafc3ace186dc3d079070eceeee3bdb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b785ab3c36e05f9144c3c43bab86d6a4ec1645edb02f6769ff0c3ed2946f091a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b785ab3c36e05f9144c3c43bab86d6a4ec1645edb02f6769ff0c3ed2946f091a->enter($__internal_b785ab3c36e05f9144c3c43bab86d6a4ec1645edb02f6769ff0c3ed2946f091a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e36d28cc515ca0c11cab7785d2d88b388ba685081e7b10ea01512a969403c082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36d28cc515ca0c11cab7785d2d88b388ba685081e7b10ea01512a969403c082->enter($__internal_e36d28cc515ca0c11cab7785d2d88b388ba685081e7b10ea01512a969403c082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })())) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
    <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <button type=\"submit\" name=\"login\">Login</button>
    </form>
    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
        echo "\">Register</a>

";
        
        $__internal_e36d28cc515ca0c11cab7785d2d88b388ba685081e7b10ea01512a969403c082->leave($__internal_e36d28cc515ca0c11cab7785d2d88b388ba685081e7b10ea01512a969403c082_prof);

        
        $__internal_b785ab3c36e05f9144c3c43bab86d6a4ec1645edb02f6769ff0c3ed2946f091a->leave($__internal_b785ab3c36e05f9144c3c43bab86d6a4ec1645edb02f6769ff0c3ed2946f091a_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  68 => 11,  63 => 9,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <form action=\"{{ path('login_check') }}\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <button type=\"submit\" name=\"login\">Login</button>
    </form>
    <a href=\"{{ path(\"registration\") }}\">Register</a>

{% endblock %}", "security/login.html.twig", "/home/andy/www/SymfonySecurity/app/Resources/views/security/login.html.twig");
    }
}
