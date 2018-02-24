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
        $__internal_681b6c499e2bff5a130b1d8d72f82ec742ed0aad02c6075aa8b2de3ed3039f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681b6c499e2bff5a130b1d8d72f82ec742ed0aad02c6075aa8b2de3ed3039f02->enter($__internal_681b6c499e2bff5a130b1d8d72f82ec742ed0aad02c6075aa8b2de3ed3039f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ca6ea3bd2b64c8b082dbdc7d073e9a3970303885a521f53e325f5a2e2ccb075f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6ea3bd2b64c8b082dbdc7d073e9a3970303885a521f53e325f5a2e2ccb075f->enter($__internal_ca6ea3bd2b64c8b082dbdc7d073e9a3970303885a521f53e325f5a2e2ccb075f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_681b6c499e2bff5a130b1d8d72f82ec742ed0aad02c6075aa8b2de3ed3039f02->leave($__internal_681b6c499e2bff5a130b1d8d72f82ec742ed0aad02c6075aa8b2de3ed3039f02_prof);

        
        $__internal_ca6ea3bd2b64c8b082dbdc7d073e9a3970303885a521f53e325f5a2e2ccb075f->leave($__internal_ca6ea3bd2b64c8b082dbdc7d073e9a3970303885a521f53e325f5a2e2ccb075f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_059bd54314a6ccf85c461ccae22c5ae5d0ed8bb21d4a669709a5ad238790cd30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_059bd54314a6ccf85c461ccae22c5ae5d0ed8bb21d4a669709a5ad238790cd30->enter($__internal_059bd54314a6ccf85c461ccae22c5ae5d0ed8bb21d4a669709a5ad238790cd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e5008bcc63e5bac4a9c23de9a1dd05fe3a0cd26029f39c74ab822dd86ea58e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5008bcc63e5bac4a9c23de9a1dd05fe3a0cd26029f39c74ab822dd86ea58e7->enter($__internal_4e5008bcc63e5bac4a9c23de9a1dd05fe3a0cd26029f39c74ab822dd86ea58e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4e5008bcc63e5bac4a9c23de9a1dd05fe3a0cd26029f39c74ab822dd86ea58e7->leave($__internal_4e5008bcc63e5bac4a9c23de9a1dd05fe3a0cd26029f39c74ab822dd86ea58e7_prof);

        
        $__internal_059bd54314a6ccf85c461ccae22c5ae5d0ed8bb21d4a669709a5ad238790cd30->leave($__internal_059bd54314a6ccf85c461ccae22c5ae5d0ed8bb21d4a669709a5ad238790cd30_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c655b727515b94fbc3052131d44973ee42e8b39d387b7258661f348897f5a175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c655b727515b94fbc3052131d44973ee42e8b39d387b7258661f348897f5a175->enter($__internal_c655b727515b94fbc3052131d44973ee42e8b39d387b7258661f348897f5a175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4b339f5636abeaac767f2efe5d9a6bc39b0d0baef51006bea69197adb92bf1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b339f5636abeaac767f2efe5d9a6bc39b0d0baef51006bea69197adb92bf1fa->enter($__internal_4b339f5636abeaac767f2efe5d9a6bc39b0d0baef51006bea69197adb92bf1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4b339f5636abeaac767f2efe5d9a6bc39b0d0baef51006bea69197adb92bf1fa->leave($__internal_4b339f5636abeaac767f2efe5d9a6bc39b0d0baef51006bea69197adb92bf1fa_prof);

        
        $__internal_c655b727515b94fbc3052131d44973ee42e8b39d387b7258661f348897f5a175->leave($__internal_c655b727515b94fbc3052131d44973ee42e8b39d387b7258661f348897f5a175_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a298762b76de5814a92129c189001539e8905c99caa6f49557c9335469a9fd82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a298762b76de5814a92129c189001539e8905c99caa6f49557c9335469a9fd82->enter($__internal_a298762b76de5814a92129c189001539e8905c99caa6f49557c9335469a9fd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9db7df827cda4514726977178e3ebece9cac7e21ad95e27fa06e1d52921a36e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9db7df827cda4514726977178e3ebece9cac7e21ad95e27fa06e1d52921a36e->enter($__internal_c9db7df827cda4514726977178e3ebece9cac7e21ad95e27fa06e1d52921a36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c9db7df827cda4514726977178e3ebece9cac7e21ad95e27fa06e1d52921a36e->leave($__internal_c9db7df827cda4514726977178e3ebece9cac7e21ad95e27fa06e1d52921a36e_prof);

        
        $__internal_a298762b76de5814a92129c189001539e8905c99caa6f49557c9335469a9fd82->leave($__internal_a298762b76de5814a92129c189001539e8905c99caa6f49557c9335469a9fd82_prof);

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
