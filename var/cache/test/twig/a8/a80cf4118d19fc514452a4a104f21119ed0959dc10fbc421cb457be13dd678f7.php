<?php

/* default/index.html.twig */
class __TwigTemplate_50a5065433bc7940c99c19ab21f30f8510f654c66f3abd6cfc89da1f23c574cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_94f3d52bff613c7672418054aa3938b2331feff615586c7ffc930b588fadae8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f3d52bff613c7672418054aa3938b2331feff615586c7ffc930b588fadae8d->enter($__internal_94f3d52bff613c7672418054aa3938b2331feff615586c7ffc930b588fadae8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_1a7eb9129c58f8f9cbbe03f1aa2c08b5573d5196a66b8a0bb88913dccdd3c28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7eb9129c58f8f9cbbe03f1aa2c08b5573d5196a66b8a0bb88913dccdd3c28d->enter($__internal_1a7eb9129c58f8f9cbbe03f1aa2c08b5573d5196a66b8a0bb88913dccdd3c28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94f3d52bff613c7672418054aa3938b2331feff615586c7ffc930b588fadae8d->leave($__internal_94f3d52bff613c7672418054aa3938b2331feff615586c7ffc930b588fadae8d_prof);

        
        $__internal_1a7eb9129c58f8f9cbbe03f1aa2c08b5573d5196a66b8a0bb88913dccdd3c28d->leave($__internal_1a7eb9129c58f8f9cbbe03f1aa2c08b5573d5196a66b8a0bb88913dccdd3c28d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8188db8414ff8c941f003cf9d0971dee27cbb1a9da555cd7c918cdb76e487bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8188db8414ff8c941f003cf9d0971dee27cbb1a9da555cd7c918cdb76e487bcc->enter($__internal_8188db8414ff8c941f003cf9d0971dee27cbb1a9da555cd7c918cdb76e487bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee7e0090a75d172e819f00a89b948d99e48370741e6a918041be59b0e77ef582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7e0090a75d172e819f00a89b948d99e48370741e6a918041be59b0e77ef582->enter($__internal_ee7e0090a75d172e819f00a89b948d99e48370741e6a918041be59b0e77ef582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Back to main page</a>
    <br>
    <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create");
        echo "\">Create new record</a>
    <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\">
        <input type=\"search\" name=\"q\" placeholder=\"Найти статью по имени\">
        <input type=\"submit\" value=\"Найти\">
    </form>

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "        <table style=\"border-color: #222222\" border=\"1\">
            <td width=\"100\">
                ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "name", array()), "html", null, true);
            echo "
            </td>
            <td width=\"100\">
                ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "description", array()), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "createdAt", array()), "Y-m-d H:i"), "html", null, true);
            echo "
            </td>
            <td align=\"center\" width=\"50\">
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
            </td>
            <td align=\"center\" width=\"50\">
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">Edit</a><br>
            </td>

        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
";
        
        $__internal_ee7e0090a75d172e819f00a89b948d99e48370741e6a918041be59b0e77ef582->leave($__internal_ee7e0090a75d172e819f00a89b948d99e48370741e6a918041be59b0e77ef582_prof);

        
        $__internal_8188db8414ff8c941f003cf9d0971dee27cbb1a9da555cd7c918cdb76e487bcc->leave($__internal_8188db8414ff8c941f003cf9d0971dee27cbb1a9da555cd7c918cdb76e487bcc_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 32,  99 => 27,  93 => 24,  87 => 21,  81 => 18,  75 => 15,  71 => 13,  67 => 12,  59 => 7,  55 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <a href=\"{{ path(\"homepage\") }}\">Back to main page</a>
    <br>
    <a href=\"{{ path(\"create\") }}\">Create new record</a>
    <form action=\"{{ path(\"search\") }}\">
        <input type=\"search\" name=\"q\" placeholder=\"Найти статью по имени\">
        <input type=\"submit\" value=\"Найти\">
    </form>

    {% for article in articles %}
        <table style=\"border-color: #222222\" border=\"1\">
            <td width=\"100\">
                {{ article.name }}
            </td>
            <td width=\"100\">
                {{ article.description }}
            </td>
            <td>
                {{ article.createdAt|date('Y-m-d H:i') }}
            </td>
            <td align=\"center\" width=\"50\">
                <a href=\"{{ path(\"delete\", {\"id\": article.id}) }}\">Delete</a>
            </td>
            <td align=\"center\" width=\"50\">
                <a href=\"{{ path (\"edit\", {\"id\": article.id}) }}\">Edit</a><br>
            </td>

        </table>
    {% endfor %}

{% endblock%}

", "default/index.html.twig", "/home/andy/www/SymfonySecurity/app/Resources/views/default/index.html.twig");
    }
}
