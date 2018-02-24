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
        $__internal_2cc07415cf060df066b2b0a303440174713d64ad391d2f0cdb61da957dd48c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc07415cf060df066b2b0a303440174713d64ad391d2f0cdb61da957dd48c2a->enter($__internal_2cc07415cf060df066b2b0a303440174713d64ad391d2f0cdb61da957dd48c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6ff9fdd6ef805d2747accfa5223e49137caab2e6dd1928fd08ba0f1699c9d5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff9fdd6ef805d2747accfa5223e49137caab2e6dd1928fd08ba0f1699c9d5d5->enter($__internal_6ff9fdd6ef805d2747accfa5223e49137caab2e6dd1928fd08ba0f1699c9d5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cc07415cf060df066b2b0a303440174713d64ad391d2f0cdb61da957dd48c2a->leave($__internal_2cc07415cf060df066b2b0a303440174713d64ad391d2f0cdb61da957dd48c2a_prof);

        
        $__internal_6ff9fdd6ef805d2747accfa5223e49137caab2e6dd1928fd08ba0f1699c9d5d5->leave($__internal_6ff9fdd6ef805d2747accfa5223e49137caab2e6dd1928fd08ba0f1699c9d5d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c56018af0bb2d966a194437fc824f35a5296a916e7f6e3f906a6fb8fa5fe652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c56018af0bb2d966a194437fc824f35a5296a916e7f6e3f906a6fb8fa5fe652->enter($__internal_4c56018af0bb2d966a194437fc824f35a5296a916e7f6e3f906a6fb8fa5fe652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b1449edb1e06c76c7e71199a27206bb7378b9105a42bc8cfedda1d92f424931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1449edb1e06c76c7e71199a27206bb7378b9105a42bc8cfedda1d92f424931->enter($__internal_8b1449edb1e06c76c7e71199a27206bb7378b9105a42bc8cfedda1d92f424931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b1449edb1e06c76c7e71199a27206bb7378b9105a42bc8cfedda1d92f424931->leave($__internal_8b1449edb1e06c76c7e71199a27206bb7378b9105a42bc8cfedda1d92f424931_prof);

        
        $__internal_4c56018af0bb2d966a194437fc824f35a5296a916e7f6e3f906a6fb8fa5fe652->leave($__internal_4c56018af0bb2d966a194437fc824f35a5296a916e7f6e3f906a6fb8fa5fe652_prof);

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
