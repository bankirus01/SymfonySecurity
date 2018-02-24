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
        $__internal_d14f024b3a31af880c6289c80cb10461eb9c287e2548a6a10fdc38cb2d0e3fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14f024b3a31af880c6289c80cb10461eb9c287e2548a6a10fdc38cb2d0e3fd8->enter($__internal_d14f024b3a31af880c6289c80cb10461eb9c287e2548a6a10fdc38cb2d0e3fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b0ef7a59e0c8fffea15ef553b41523411bd45079b9834026929ee4ed6e787f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ef7a59e0c8fffea15ef553b41523411bd45079b9834026929ee4ed6e787f6a->enter($__internal_b0ef7a59e0c8fffea15ef553b41523411bd45079b9834026929ee4ed6e787f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d14f024b3a31af880c6289c80cb10461eb9c287e2548a6a10fdc38cb2d0e3fd8->leave($__internal_d14f024b3a31af880c6289c80cb10461eb9c287e2548a6a10fdc38cb2d0e3fd8_prof);

        
        $__internal_b0ef7a59e0c8fffea15ef553b41523411bd45079b9834026929ee4ed6e787f6a->leave($__internal_b0ef7a59e0c8fffea15ef553b41523411bd45079b9834026929ee4ed6e787f6a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_01a45a98ce01991334d42a2ce9f5cf8c9c83a8ce4280449809974c7dfaa99cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a45a98ce01991334d42a2ce9f5cf8c9c83a8ce4280449809974c7dfaa99cd1->enter($__internal_01a45a98ce01991334d42a2ce9f5cf8c9c83a8ce4280449809974c7dfaa99cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e914c680b2d81f3acb9122d9d1404d3c1c4c85922e5e919cea6aa97344aa3e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e914c680b2d81f3acb9122d9d1404d3c1c4c85922e5e919cea6aa97344aa3e3d->enter($__internal_e914c680b2d81f3acb9122d9d1404d3c1c4c85922e5e919cea6aa97344aa3e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e914c680b2d81f3acb9122d9d1404d3c1c4c85922e5e919cea6aa97344aa3e3d->leave($__internal_e914c680b2d81f3acb9122d9d1404d3c1c4c85922e5e919cea6aa97344aa3e3d_prof);

        
        $__internal_01a45a98ce01991334d42a2ce9f5cf8c9c83a8ce4280449809974c7dfaa99cd1->leave($__internal_01a45a98ce01991334d42a2ce9f5cf8c9c83a8ce4280449809974c7dfaa99cd1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43c37240200e7759ff98acc225ee1f27871e263497b6ff7287f0c9295155ea87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c37240200e7759ff98acc225ee1f27871e263497b6ff7287f0c9295155ea87->enter($__internal_43c37240200e7759ff98acc225ee1f27871e263497b6ff7287f0c9295155ea87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6759c996aaffb5fa1a94a57f8fa65053cbad1f293a8624223bf37be974b0fe9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6759c996aaffb5fa1a94a57f8fa65053cbad1f293a8624223bf37be974b0fe9e->enter($__internal_6759c996aaffb5fa1a94a57f8fa65053cbad1f293a8624223bf37be974b0fe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6759c996aaffb5fa1a94a57f8fa65053cbad1f293a8624223bf37be974b0fe9e->leave($__internal_6759c996aaffb5fa1a94a57f8fa65053cbad1f293a8624223bf37be974b0fe9e_prof);

        
        $__internal_43c37240200e7759ff98acc225ee1f27871e263497b6ff7287f0c9295155ea87->leave($__internal_43c37240200e7759ff98acc225ee1f27871e263497b6ff7287f0c9295155ea87_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a600fbe3ef9db232d79eb4bd62d79f50ef8c49a16d7234d5334e3737483613fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a600fbe3ef9db232d79eb4bd62d79f50ef8c49a16d7234d5334e3737483613fd->enter($__internal_a600fbe3ef9db232d79eb4bd62d79f50ef8c49a16d7234d5334e3737483613fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af2b58f45c0aebf34a1de2b537c5e73c3b7209cc4f1cf84360beb1e5377ca1f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2b58f45c0aebf34a1de2b537c5e73c3b7209cc4f1cf84360beb1e5377ca1f0->enter($__internal_af2b58f45c0aebf34a1de2b537c5e73c3b7209cc4f1cf84360beb1e5377ca1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_af2b58f45c0aebf34a1de2b537c5e73c3b7209cc4f1cf84360beb1e5377ca1f0->leave($__internal_af2b58f45c0aebf34a1de2b537c5e73c3b7209cc4f1cf84360beb1e5377ca1f0_prof);

        
        $__internal_a600fbe3ef9db232d79eb4bd62d79f50ef8c49a16d7234d5334e3737483613fd->leave($__internal_a600fbe3ef9db232d79eb4bd62d79f50ef8c49a16d7234d5334e3737483613fd_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_baf7d1072647a29be354cc727849655517f964d00fbbaabb3546ce0d78b596b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baf7d1072647a29be354cc727849655517f964d00fbbaabb3546ce0d78b596b7->enter($__internal_baf7d1072647a29be354cc727849655517f964d00fbbaabb3546ce0d78b596b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_626e161097bcfeba67706129a8d93ea9425c5346f0522d8325b695d442e9365e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626e161097bcfeba67706129a8d93ea9425c5346f0522d8325b695d442e9365e->enter($__internal_626e161097bcfeba67706129a8d93ea9425c5346f0522d8325b695d442e9365e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_626e161097bcfeba67706129a8d93ea9425c5346f0522d8325b695d442e9365e->leave($__internal_626e161097bcfeba67706129a8d93ea9425c5346f0522d8325b695d442e9365e_prof);

        
        $__internal_baf7d1072647a29be354cc727849655517f964d00fbbaabb3546ce0d78b596b7->leave($__internal_baf7d1072647a29be354cc727849655517f964d00fbbaabb3546ce0d78b596b7_prof);

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
