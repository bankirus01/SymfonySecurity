<?php

/* base.html.twig */
class __TwigTemplate_05b954fa76435fede46d24dcaded0f73244a7e218e249aa130138b23a1fa032b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01520d604432637e3db1c1278690f4c700a92373e90d5b625ae4f278a60d35f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01520d604432637e3db1c1278690f4c700a92373e90d5b625ae4f278a60d35f0->enter($__internal_01520d604432637e3db1c1278690f4c700a92373e90d5b625ae4f278a60d35f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_03ba346650515c4a9aad470c70cec5ae39611903e7cf99ed85f87196214e8737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ba346650515c4a9aad470c70cec5ae39611903e7cf99ed85f87196214e8737->enter($__internal_03ba346650515c4a9aad470c70cec5ae39611903e7cf99ed85f87196214e8737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
</head>
<body>
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
</body>
</html>
";
        
        $__internal_01520d604432637e3db1c1278690f4c700a92373e90d5b625ae4f278a60d35f0->leave($__internal_01520d604432637e3db1c1278690f4c700a92373e90d5b625ae4f278a60d35f0_prof);

        
        $__internal_03ba346650515c4a9aad470c70cec5ae39611903e7cf99ed85f87196214e8737->leave($__internal_03ba346650515c4a9aad470c70cec5ae39611903e7cf99ed85f87196214e8737_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e6d75f8204ce49a2dd33b567d8d900da6361d328c4f9b74a49b18ff7d73a0d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e6d75f8204ce49a2dd33b567d8d900da6361d328c4f9b74a49b18ff7d73a0d0->enter($__internal_6e6d75f8204ce49a2dd33b567d8d900da6361d328c4f9b74a49b18ff7d73a0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_931a27b84b180cb00706fc81da1e5173682acbde8f358146e2de3177bd2e1f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931a27b84b180cb00706fc81da1e5173682acbde8f358146e2de3177bd2e1f40->enter($__internal_931a27b84b180cb00706fc81da1e5173682acbde8f358146e2de3177bd2e1f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_931a27b84b180cb00706fc81da1e5173682acbde8f358146e2de3177bd2e1f40->leave($__internal_931a27b84b180cb00706fc81da1e5173682acbde8f358146e2de3177bd2e1f40_prof);

        
        $__internal_6e6d75f8204ce49a2dd33b567d8d900da6361d328c4f9b74a49b18ff7d73a0d0->leave($__internal_6e6d75f8204ce49a2dd33b567d8d900da6361d328c4f9b74a49b18ff7d73a0d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed728aab2cfd57d21adaabf6a929752c7b710aff22aad6d33f1ebc91004205ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed728aab2cfd57d21adaabf6a929752c7b710aff22aad6d33f1ebc91004205ca->enter($__internal_ed728aab2cfd57d21adaabf6a929752c7b710aff22aad6d33f1ebc91004205ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_584b2121ed2ef0b7105b1891e5408da38f6069b20154120becc521822239038b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584b2121ed2ef0b7105b1891e5408da38f6069b20154120becc521822239038b->enter($__internal_584b2121ed2ef0b7105b1891e5408da38f6069b20154120becc521822239038b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_584b2121ed2ef0b7105b1891e5408da38f6069b20154120becc521822239038b->leave($__internal_584b2121ed2ef0b7105b1891e5408da38f6069b20154120becc521822239038b_prof);

        
        $__internal_ed728aab2cfd57d21adaabf6a929752c7b710aff22aad6d33f1ebc91004205ca->leave($__internal_ed728aab2cfd57d21adaabf6a929752c7b710aff22aad6d33f1ebc91004205ca_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_19ee43ab9089077e21a2d5b2664f6671d892ebf82db4ecf66152827d369919a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ee43ab9089077e21a2d5b2664f6671d892ebf82db4ecf66152827d369919a9->enter($__internal_19ee43ab9089077e21a2d5b2664f6671d892ebf82db4ecf66152827d369919a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e037f0b5b4bab26fe2d532e0e0659b8ea2d914a39fd4597947d294cf3423c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e037f0b5b4bab26fe2d532e0e0659b8ea2d914a39fd4597947d294cf3423c28->enter($__internal_5e037f0b5b4bab26fe2d532e0e0659b8ea2d914a39fd4597947d294cf3423c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5e037f0b5b4bab26fe2d532e0e0659b8ea2d914a39fd4597947d294cf3423c28->leave($__internal_5e037f0b5b4bab26fe2d532e0e0659b8ea2d914a39fd4597947d294cf3423c28_prof);

        
        $__internal_19ee43ab9089077e21a2d5b2664f6671d892ebf82db4ecf66152827d369919a9->leave($__internal_19ee43ab9089077e21a2d5b2664f6671d892ebf82db4ecf66152827d369919a9_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_069e1814479c54527b0b84980baf79aa5d74f7349fedccf8a9191182a7cecb91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069e1814479c54527b0b84980baf79aa5d74f7349fedccf8a9191182a7cecb91->enter($__internal_069e1814479c54527b0b84980baf79aa5d74f7349fedccf8a9191182a7cecb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2eeb79d5fe7998abf276907ce11ff4341767bf044cfb6930364918e4d5c46320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eeb79d5fe7998abf276907ce11ff4341767bf044cfb6930364918e4d5c46320->enter($__internal_2eeb79d5fe7998abf276907ce11ff4341767bf044cfb6930364918e4d5c46320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2eeb79d5fe7998abf276907ce11ff4341767bf044cfb6930364918e4d5c46320->leave($__internal_2eeb79d5fe7998abf276907ce11ff4341767bf044cfb6930364918e4d5c46320_prof);

        
        $__internal_069e1814479c54527b0b84980baf79aa5d74f7349fedccf8a9191182a7cecb91->leave($__internal_069e1814479c54527b0b84980baf79aa5d74f7349fedccf8a9191182a7cecb91_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 12,  103 => 11,  86 => 6,  68 => 5,  53 => 13,  51 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
</body>
</html>
", "base.html.twig", "/home/andy/www/SymfonySecurity/app/Resources/views/base.html.twig");
    }
}
