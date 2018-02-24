<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a672c87b4dc8ae42d1849cb8a47aa1ac8be35aecbef289aeaca8788e65f26fd9 extends Twig_Template
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
        $__internal_e87a30345fb49128886493f4d90efa134d6f0c37a42d16c99e0aa4c863d0bb15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e87a30345fb49128886493f4d90efa134d6f0c37a42d16c99e0aa4c863d0bb15->enter($__internal_e87a30345fb49128886493f4d90efa134d6f0c37a42d16c99e0aa4c863d0bb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5a4827978fcef7516f1c0612159a81ef40c6255224351764c1fc26772cf368a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4827978fcef7516f1c0612159a81ef40c6255224351764c1fc26772cf368a8->enter($__internal_5a4827978fcef7516f1c0612159a81ef40c6255224351764c1fc26772cf368a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_e87a30345fb49128886493f4d90efa134d6f0c37a42d16c99e0aa4c863d0bb15->leave($__internal_e87a30345fb49128886493f4d90efa134d6f0c37a42d16c99e0aa4c863d0bb15_prof);

        
        $__internal_5a4827978fcef7516f1c0612159a81ef40c6255224351764c1fc26772cf368a8->leave($__internal_5a4827978fcef7516f1c0612159a81ef40c6255224351764c1fc26772cf368a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1aad7b9d3d3fd33bcb053b2c1c28d9dd24adf1f19d294690cc892eb35fa5bd7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aad7b9d3d3fd33bcb053b2c1c28d9dd24adf1f19d294690cc892eb35fa5bd7a->enter($__internal_1aad7b9d3d3fd33bcb053b2c1c28d9dd24adf1f19d294690cc892eb35fa5bd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_449c111d48b724968ad4743bb587f67e8421d52adc4e1d3f06a13c58a214134c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449c111d48b724968ad4743bb587f67e8421d52adc4e1d3f06a13c58a214134c->enter($__internal_449c111d48b724968ad4743bb587f67e8421d52adc4e1d3f06a13c58a214134c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_449c111d48b724968ad4743bb587f67e8421d52adc4e1d3f06a13c58a214134c->leave($__internal_449c111d48b724968ad4743bb587f67e8421d52adc4e1d3f06a13c58a214134c_prof);

        
        $__internal_1aad7b9d3d3fd33bcb053b2c1c28d9dd24adf1f19d294690cc892eb35fa5bd7a->leave($__internal_1aad7b9d3d3fd33bcb053b2c1c28d9dd24adf1f19d294690cc892eb35fa5bd7a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b9b59e0fc9de63a9ea92534cdc4aad8ac1c5847045634007e2ecd8cbbbba09c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b59e0fc9de63a9ea92534cdc4aad8ac1c5847045634007e2ecd8cbbbba09c5->enter($__internal_b9b59e0fc9de63a9ea92534cdc4aad8ac1c5847045634007e2ecd8cbbbba09c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9f423cd2e8623463c91fd021dd4936c4b512fe0fff168cfb8d95db5516db92ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f423cd2e8623463c91fd021dd4936c4b512fe0fff168cfb8d95db5516db92ea->enter($__internal_9f423cd2e8623463c91fd021dd4936c4b512fe0fff168cfb8d95db5516db92ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9f423cd2e8623463c91fd021dd4936c4b512fe0fff168cfb8d95db5516db92ea->leave($__internal_9f423cd2e8623463c91fd021dd4936c4b512fe0fff168cfb8d95db5516db92ea_prof);

        
        $__internal_b9b59e0fc9de63a9ea92534cdc4aad8ac1c5847045634007e2ecd8cbbbba09c5->leave($__internal_b9b59e0fc9de63a9ea92534cdc4aad8ac1c5847045634007e2ecd8cbbbba09c5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8b647aae5deb27e01c57739ecca36250d49722eab32a1c943e8261920c7d4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b647aae5deb27e01c57739ecca36250d49722eab32a1c943e8261920c7d4a0->enter($__internal_f8b647aae5deb27e01c57739ecca36250d49722eab32a1c943e8261920c7d4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0561539ef037371d410ed9dabe09f09835833fa24e9f06d0130e96fdc0dc71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0561539ef037371d410ed9dabe09f09835833fa24e9f06d0130e96fdc0dc71f->enter($__internal_c0561539ef037371d410ed9dabe09f09835833fa24e9f06d0130e96fdc0dc71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c0561539ef037371d410ed9dabe09f09835833fa24e9f06d0130e96fdc0dc71f->leave($__internal_c0561539ef037371d410ed9dabe09f09835833fa24e9f06d0130e96fdc0dc71f_prof);

        
        $__internal_f8b647aae5deb27e01c57739ecca36250d49722eab32a1c943e8261920c7d4a0->leave($__internal_f8b647aae5deb27e01c57739ecca36250d49722eab32a1c943e8261920c7d4a0_prof);

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
", "@Twig/layout.html.twig", "/home/andy/www/SymfonySecurity/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
