<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_e8b275a39cd2850885f148f0c9bdaf1395d4f8cb3acc4a799d4d9504fb613776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdc3a72d8e57f80e79ec5938206b0d4f0ac1669f149242a76b13643ff542c6fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc3a72d8e57f80e79ec5938206b0d4f0ac1669f149242a76b13643ff542c6fb->enter($__internal_cdc3a72d8e57f80e79ec5938206b0d4f0ac1669f149242a76b13643ff542c6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_b747e43851762a880dad0eb5364f7da86e3930f0d8988b3abc4e148c31b09de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b747e43851762a880dad0eb5364f7da86e3930f0d8988b3abc4e148c31b09de4->enter($__internal_b747e43851762a880dad0eb5364f7da86e3930f0d8988b3abc4e148c31b09de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_label', $context, $blocks);
        // line 145
        echo "
";
        // line 146
        $this->displayBlock('choice_label', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 155
        echo "
";
        // line 156
        $this->displayBlock('radio_label', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 177
        echo "
";
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('form_row', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('button_row', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('choice_row', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('date_row', $context, $blocks);
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('time_row', $context, $blocks);
        // line 208
        echo "
";
        // line 209
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 213
        echo "
";
        // line 214
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 220
        echo "
";
        // line 221
        $this->displayBlock('radio_row', $context, $blocks);
        // line 227
        echo "
";
        // line 229
        echo "
";
        // line 230
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_cdc3a72d8e57f80e79ec5938206b0d4f0ac1669f149242a76b13643ff542c6fb->leave($__internal_cdc3a72d8e57f80e79ec5938206b0d4f0ac1669f149242a76b13643ff542c6fb_prof);

        
        $__internal_b747e43851762a880dad0eb5364f7da86e3930f0d8988b3abc4e148c31b09de4->leave($__internal_b747e43851762a880dad0eb5364f7da86e3930f0d8988b3abc4e148c31b09de4_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_35fe0ee04d4547af7e6723c13fc6b3b1013664b617b476ab5ffd0eff08f9b64c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35fe0ee04d4547af7e6723c13fc6b3b1013664b617b476ab5ffd0eff08f9b64c->enter($__internal_35fe0ee04d4547af7e6723c13fc6b3b1013664b617b476ab5ffd0eff08f9b64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_219b952219e357abcb51860e07339a64da2cd214c11c5e1c56e053d11f80f326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219b952219e357abcb51860e07339a64da2cd214c11c5e1c56e053d11f80f326->enter($__internal_219b952219e357abcb51860e07339a64da2cd214c11c5e1c56e053d11f80f326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || ("file" != (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })())))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_219b952219e357abcb51860e07339a64da2cd214c11c5e1c56e053d11f80f326->leave($__internal_219b952219e357abcb51860e07339a64da2cd214c11c5e1c56e053d11f80f326_prof);

        
        $__internal_35fe0ee04d4547af7e6723c13fc6b3b1013664b617b476ab5ffd0eff08f9b64c->leave($__internal_35fe0ee04d4547af7e6723c13fc6b3b1013664b617b476ab5ffd0eff08f9b64c_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_70c8b7197b320410382700c84ef40c2b5858e3c804c3ef652e7e08c1ced24a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c8b7197b320410382700c84ef40c2b5858e3c804c3ef652e7e08c1ced24a12->enter($__internal_70c8b7197b320410382700c84ef40c2b5858e3c804c3ef652e7e08c1ced24a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_4253928748dfcb30cec2507fe4e826aec61733da1f35c3f4ff119b2ce48df957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4253928748dfcb30cec2507fe4e826aec61733da1f35c3f4ff119b2ce48df957->enter($__internal_4253928748dfcb30cec2507fe4e826aec61733da1f35c3f4ff119b2ce48df957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_4253928748dfcb30cec2507fe4e826aec61733da1f35c3f4ff119b2ce48df957->leave($__internal_4253928748dfcb30cec2507fe4e826aec61733da1f35c3f4ff119b2ce48df957_prof);

        
        $__internal_70c8b7197b320410382700c84ef40c2b5858e3c804c3ef652e7e08c1ced24a12->leave($__internal_70c8b7197b320410382700c84ef40c2b5858e3c804c3ef652e7e08c1ced24a12_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d9227cb6760aae36e7560a1188395957a1e70a3d177b8ac624d426076fb1f8ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9227cb6760aae36e7560a1188395957a1e70a3d177b8ac624d426076fb1f8ae->enter($__internal_d9227cb6760aae36e7560a1188395957a1e70a3d177b8ac624d426076fb1f8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_1375edf82b2cf1c22806e65628ccdd83afe85eb3098b4f8ac2de442fb6157ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1375edf82b2cf1c22806e65628ccdd83afe85eb3098b4f8ac2de442fb6157ffb->enter($__internal_1375edf82b2cf1c22806e65628ccdd83afe85eb3098b4f8ac2de442fb6157ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 18, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_1375edf82b2cf1c22806e65628ccdd83afe85eb3098b4f8ac2de442fb6157ffb->leave($__internal_1375edf82b2cf1c22806e65628ccdd83afe85eb3098b4f8ac2de442fb6157ffb_prof);

        
        $__internal_d9227cb6760aae36e7560a1188395957a1e70a3d177b8ac624d426076fb1f8ae->leave($__internal_d9227cb6760aae36e7560a1188395957a1e70a3d177b8ac624d426076fb1f8ae_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d56a88ca84675922e71e49be853503721110da39a62b62c6b5aac3a245cd8ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56a88ca84675922e71e49be853503721110da39a62b62c6b5aac3a245cd8ba5->enter($__internal_d56a88ca84675922e71e49be853503721110da39a62b62c6b5aac3a245cd8ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_8fb1cc7a7b97aed0599eed894d2ac5f24f63cb7d076f803878206c4fe4090769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb1cc7a7b97aed0599eed894d2ac5f24f63cb7d076f803878206c4fe4090769->enter($__internal_8fb1cc7a7b97aed0599eed894d2ac5f24f63cb7d076f803878206c4fe4090769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 24, $this->getSourceContext()); })()), 0, 2));
        // line 25
        echo "        ";
        if ( !(isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 25, $this->getSourceContext()); })())) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 26, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 29, $this->getSourceContext()); })())) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 30, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_8fb1cc7a7b97aed0599eed894d2ac5f24f63cb7d076f803878206c4fe4090769->leave($__internal_8fb1cc7a7b97aed0599eed894d2ac5f24f63cb7d076f803878206c4fe4090769_prof);

        
        $__internal_d56a88ca84675922e71e49be853503721110da39a62b62c6b5aac3a245cd8ba5->leave($__internal_d56a88ca84675922e71e49be853503721110da39a62b62c6b5aac3a245cd8ba5_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_36def617d6a890089c7996bd4efa31c341a959aaba6fe019eb9b02926b337a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36def617d6a890089c7996bd4efa31c341a959aaba6fe019eb9b02926b337a17->enter($__internal_36def617d6a890089c7996bd4efa31c341a959aaba6fe019eb9b02926b337a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_5d4a4860ce3bdada9bea096f3f229a7f89941e6e8ea06637db6bfe7d44204e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4a4860ce3bdada9bea096f3f229a7f89941e6e8ea06637db6bfe7d44204e5c->enter($__internal_5d4a4860ce3bdada9bea096f3f229a7f89941e6e8ea06637db6bfe7d44204e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_5d4a4860ce3bdada9bea096f3f229a7f89941e6e8ea06637db6bfe7d44204e5c->leave($__internal_5d4a4860ce3bdada9bea096f3f229a7f89941e6e8ea06637db6bfe7d44204e5c_prof);

        
        $__internal_36def617d6a890089c7996bd4efa31c341a959aaba6fe019eb9b02926b337a17->leave($__internal_36def617d6a890089c7996bd4efa31c341a959aaba6fe019eb9b02926b337a17_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_6c2d97d75a7ba9213c99960b0e6a6830aae6bc790d8bdb0d5b87a0215ac17aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2d97d75a7ba9213c99960b0e6a6830aae6bc790d8bdb0d5b87a0215ac17aed->enter($__internal_6c2d97d75a7ba9213c99960b0e6a6830aae6bc790d8bdb0d5b87a0215ac17aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_c27d9069cff8839dce2a14b9c9cacccd5e7395434ac7f00acb51ef4331b08d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27d9069cff8839dce2a14b9c9cacccd5e7395434ac7f00acb51ef4331b08d7c->enter($__internal_c27d9069cff8839dce2a14b9c9cacccd5e7395434ac7f00acb51ef4331b08d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 43, $this->getSourceContext()); })()) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 46, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_c27d9069cff8839dce2a14b9c9cacccd5e7395434ac7f00acb51ef4331b08d7c->leave($__internal_c27d9069cff8839dce2a14b9c9cacccd5e7395434ac7f00acb51ef4331b08d7c_prof);

        
        $__internal_6c2d97d75a7ba9213c99960b0e6a6830aae6bc790d8bdb0d5b87a0215ac17aed->leave($__internal_6c2d97d75a7ba9213c99960b0e6a6830aae6bc790d8bdb0d5b87a0215ac17aed_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_00c75bb88b53c60db6b883e1a4f8084ab5d68dd6ef4e816790533eae5c73de1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c75bb88b53c60db6b883e1a4f8084ab5d68dd6ef4e816790533eae5c73de1e->enter($__internal_00c75bb88b53c60db6b883e1a4f8084ab5d68dd6ef4e816790533eae5c73de1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_a4f6b71747d0ac3eae67e901babb3c0f21c576bccf65980684ef07647a0ec8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f6b71747d0ac3eae67e901babb3c0f21c576bccf65980684ef07647a0ec8cb->enter($__internal_a4f6b71747d0ac3eae67e901babb3c0f21c576bccf65980684ef07647a0ec8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 57, $this->getSourceContext()); })()) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 60, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 61, $this->getSourceContext()); })()))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 64, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 69, $this->getSourceContext()); })()))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_a4f6b71747d0ac3eae67e901babb3c0f21c576bccf65980684ef07647a0ec8cb->leave($__internal_a4f6b71747d0ac3eae67e901babb3c0f21c576bccf65980684ef07647a0ec8cb_prof);

        
        $__internal_00c75bb88b53c60db6b883e1a4f8084ab5d68dd6ef4e816790533eae5c73de1e->leave($__internal_00c75bb88b53c60db6b883e1a4f8084ab5d68dd6ef4e816790533eae5c73de1e_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_6bbc2feaf7af97af19a12e32b1ebe80e152a349ea8084e154faba10f38aff2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bbc2feaf7af97af19a12e32b1ebe80e152a349ea8084e154faba10f38aff2fd->enter($__internal_6bbc2feaf7af97af19a12e32b1ebe80e152a349ea8084e154faba10f38aff2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_28856e46ac389eaa4373a6a5fdf5879ec55b69a2963db56d66101af1717888cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28856e46ac389eaa4373a6a5fdf5879ec55b69a2963db56d66101af1717888cb->enter($__internal_28856e46ac389eaa4373a6a5fdf5879ec55b69a2963db56d66101af1717888cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 76, $this->getSourceContext()); })()) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 79, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 80, $this->getSourceContext()); })())))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->getSourceContext()); })()), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 83, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->getSourceContext()); })()), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 83, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->getSourceContext()); })()), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 84, $this->getSourceContext()); })())))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_28856e46ac389eaa4373a6a5fdf5879ec55b69a2963db56d66101af1717888cb->leave($__internal_28856e46ac389eaa4373a6a5fdf5879ec55b69a2963db56d66101af1717888cb_prof);

        
        $__internal_6bbc2feaf7af97af19a12e32b1ebe80e152a349ea8084e154faba10f38aff2fd->leave($__internal_6bbc2feaf7af97af19a12e32b1ebe80e152a349ea8084e154faba10f38aff2fd_prof);

    }

    // line 90
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e3bbc06813b6ba965e1c9c137b20e590aca7ca752cb62468c726764033902934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3bbc06813b6ba965e1c9c137b20e590aca7ca752cb62468c726764033902934->enter($__internal_e3bbc06813b6ba965e1c9c137b20e590aca7ca752cb62468c726764033902934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_5f10d4eca5562a9ca3e468c9e7bb611c27d3d1c810f997b607535b6a0691dd3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f10d4eca5562a9ca3e468c9e7bb611c27d3d1c810f997b607535b6a0691dd3e->enter($__internal_5f10d4eca5562a9ca3e468c9e7bb611c27d3d1c810f997b607535b6a0691dd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 91
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 91, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 92
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_5f10d4eca5562a9ca3e468c9e7bb611c27d3d1c810f997b607535b6a0691dd3e->leave($__internal_5f10d4eca5562a9ca3e468c9e7bb611c27d3d1c810f997b607535b6a0691dd3e_prof);

        
        $__internal_e3bbc06813b6ba965e1c9c137b20e590aca7ca752cb62468c726764033902934->leave($__internal_e3bbc06813b6ba965e1c9c137b20e590aca7ca752cb62468c726764033902934_prof);

    }

    // line 95
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_05091319f1c9d2aa33f5ec5452ce2338f48008ce16979e81be6350a7670b4226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05091319f1c9d2aa33f5ec5452ce2338f48008ce16979e81be6350a7670b4226->enter($__internal_05091319f1c9d2aa33f5ec5452ce2338f48008ce16979e81be6350a7670b4226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_ef17d07c8b8a58318a5ce4056d3f022ee25b616d66b2d49110803cead38d8203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef17d07c8b8a58318a5ce4056d3f022ee25b616d66b2d49110803cead38d8203->enter($__internal_ef17d07c8b8a58318a5ce4056d3f022ee25b616d66b2d49110803cead38d8203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 96
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 97
            echo "<div class=\"control-group\">";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 100
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 101, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "</div>";
        } else {
            // line 106
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 108
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 109
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 110
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 110, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "</div>";
        }
        
        $__internal_ef17d07c8b8a58318a5ce4056d3f022ee25b616d66b2d49110803cead38d8203->leave($__internal_ef17d07c8b8a58318a5ce4056d3f022ee25b616d66b2d49110803cead38d8203_prof);

        
        $__internal_05091319f1c9d2aa33f5ec5452ce2338f48008ce16979e81be6350a7670b4226->leave($__internal_05091319f1c9d2aa33f5ec5452ce2338f48008ce16979e81be6350a7670b4226_prof);

    }

    // line 117
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a1dcdf98629d5668116ad38407ae891c1717f246bb5f9c7e60538052bc650cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1dcdf98629d5668116ad38407ae891c1717f246bb5f9c7e60538052bc650cad->enter($__internal_a1dcdf98629d5668116ad38407ae891c1717f246bb5f9c7e60538052bc650cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_e8af4aaf0e75db3c3a782f24700a82a71957e509e0452a3dd25828f9e75af9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8af4aaf0e75db3c3a782f24700a82a71957e509e0452a3dd25828f9e75af9bb->enter($__internal_e8af4aaf0e75db3c3a782f24700a82a71957e509e0452a3dd25828f9e75af9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 118
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 118, $this->getSourceContext()); })()), "")) : (""));
        // line 119
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 119, $this->getSourceContext()); })()))) {
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 120, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 122
            echo "<div class=\"checkbox\">";
            // line 123
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 124
            echo "</div>";
        }
        
        $__internal_e8af4aaf0e75db3c3a782f24700a82a71957e509e0452a3dd25828f9e75af9bb->leave($__internal_e8af4aaf0e75db3c3a782f24700a82a71957e509e0452a3dd25828f9e75af9bb_prof);

        
        $__internal_a1dcdf98629d5668116ad38407ae891c1717f246bb5f9c7e60538052bc650cad->leave($__internal_a1dcdf98629d5668116ad38407ae891c1717f246bb5f9c7e60538052bc650cad_prof);

    }

    // line 128
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_cf8f5d5500a7f89e30d595b7e5ef804209cd3e415a07cb5b44b8cc239d325747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf8f5d5500a7f89e30d595b7e5ef804209cd3e415a07cb5b44b8cc239d325747->enter($__internal_cf8f5d5500a7f89e30d595b7e5ef804209cd3e415a07cb5b44b8cc239d325747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_0152d03e4fb435bbf9c807fc8f10ec5ebc08bc0b0a0668b8d9d17ec8be3e1b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0152d03e4fb435bbf9c807fc8f10ec5ebc08bc0b0a0668b8d9d17ec8be3e1b0d->enter($__internal_0152d03e4fb435bbf9c807fc8f10ec5ebc08bc0b0a0668b8d9d17ec8be3e1b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 129
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 129, $this->getSourceContext()); })()), "")) : (""));
        // line 130
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 130, $this->getSourceContext()); })()))) {
            // line 131
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 131, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 133
            echo "<div class=\"radio\">";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 135
            echo "</div>";
        }
        
        $__internal_0152d03e4fb435bbf9c807fc8f10ec5ebc08bc0b0a0668b8d9d17ec8be3e1b0d->leave($__internal_0152d03e4fb435bbf9c807fc8f10ec5ebc08bc0b0a0668b8d9d17ec8be3e1b0d_prof);

        
        $__internal_cf8f5d5500a7f89e30d595b7e5ef804209cd3e415a07cb5b44b8cc239d325747->leave($__internal_cf8f5d5500a7f89e30d595b7e5ef804209cd3e415a07cb5b44b8cc239d325747_prof);

    }

    // line 141
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9c92f52f67b9e7288d017c4263554964f6ed6dd24a595a47b668a72f41c72865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c92f52f67b9e7288d017c4263554964f6ed6dd24a595a47b668a72f41c72865->enter($__internal_9c92f52f67b9e7288d017c4263554964f6ed6dd24a595a47b668a72f41c72865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e26298a2fc8f091403bf0661db7253c8b15f8ba393244c6289910e7b561be400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e26298a2fc8f091403bf0661db7253c8b15f8ba393244c6289910e7b561be400->enter($__internal_e26298a2fc8f091403bf0661db7253c8b15f8ba393244c6289910e7b561be400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 142
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 142, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        // line 143
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_e26298a2fc8f091403bf0661db7253c8b15f8ba393244c6289910e7b561be400->leave($__internal_e26298a2fc8f091403bf0661db7253c8b15f8ba393244c6289910e7b561be400_prof);

        
        $__internal_9c92f52f67b9e7288d017c4263554964f6ed6dd24a595a47b668a72f41c72865->leave($__internal_9c92f52f67b9e7288d017c4263554964f6ed6dd24a595a47b668a72f41c72865_prof);

    }

    // line 146
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_46c3f735608070a83ea642c327f2deebab7fcc3e20b9d11bb40f3eb12db33606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c3f735608070a83ea642c327f2deebab7fcc3e20b9d11bb40f3eb12db33606->enter($__internal_46c3f735608070a83ea642c327f2deebab7fcc3e20b9d11bb40f3eb12db33606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_eb56f8f6de36c09bc5754aa5e59215a371ff62971a8ca2e984c4d297ed5b7e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb56f8f6de36c09bc5754aa5e59215a371ff62971a8ca2e984c4d297ed5b7e52->enter($__internal_eb56f8f6de36c09bc5754aa5e59215a371ff62971a8ca2e984c4d297ed5b7e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 148
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 148, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 149
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_eb56f8f6de36c09bc5754aa5e59215a371ff62971a8ca2e984c4d297ed5b7e52->leave($__internal_eb56f8f6de36c09bc5754aa5e59215a371ff62971a8ca2e984c4d297ed5b7e52_prof);

        
        $__internal_46c3f735608070a83ea642c327f2deebab7fcc3e20b9d11bb40f3eb12db33606->leave($__internal_46c3f735608070a83ea642c327f2deebab7fcc3e20b9d11bb40f3eb12db33606_prof);

    }

    // line 152
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_bbf3bf388bbecd72945555706d417da465eda10c67be0fc4668541e8e8e01cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf3bf388bbecd72945555706d417da465eda10c67be0fc4668541e8e8e01cad->enter($__internal_bbf3bf388bbecd72945555706d417da465eda10c67be0fc4668541e8e8e01cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_bc31897e21f56467a91fde8296a48b12d4a602c23cc10ce5425678ac97c74cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc31897e21f56467a91fde8296a48b12d4a602c23cc10ce5425678ac97c74cc5->enter($__internal_bc31897e21f56467a91fde8296a48b12d4a602c23cc10ce5425678ac97c74cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 153
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_bc31897e21f56467a91fde8296a48b12d4a602c23cc10ce5425678ac97c74cc5->leave($__internal_bc31897e21f56467a91fde8296a48b12d4a602c23cc10ce5425678ac97c74cc5_prof);

        
        $__internal_bbf3bf388bbecd72945555706d417da465eda10c67be0fc4668541e8e8e01cad->leave($__internal_bbf3bf388bbecd72945555706d417da465eda10c67be0fc4668541e8e8e01cad_prof);

    }

    // line 156
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_bca1008f2653f912ee550c4399bdff149275a47cd9e7790c383c2049cf8d8cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca1008f2653f912ee550c4399bdff149275a47cd9e7790c383c2049cf8d8cf0->enter($__internal_bca1008f2653f912ee550c4399bdff149275a47cd9e7790c383c2049cf8d8cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_b2ef0646167cc44201e704e3950a07f83f02b775f778f5286e8ccf104fc42302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ef0646167cc44201e704e3950a07f83f02b775f778f5286e8ccf104fc42302->enter($__internal_b2ef0646167cc44201e704e3950a07f83f02b775f778f5286e8ccf104fc42302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 157
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b2ef0646167cc44201e704e3950a07f83f02b775f778f5286e8ccf104fc42302->leave($__internal_b2ef0646167cc44201e704e3950a07f83f02b775f778f5286e8ccf104fc42302_prof);

        
        $__internal_bca1008f2653f912ee550c4399bdff149275a47cd9e7790c383c2049cf8d8cf0->leave($__internal_bca1008f2653f912ee550c4399bdff149275a47cd9e7790c383c2049cf8d8cf0_prof);

    }

    // line 160
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_637fc8cdc3674b69f26ff4b82ed48a09cb261dcf0132424d027c5280d925e10c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_637fc8cdc3674b69f26ff4b82ed48a09cb261dcf0132424d027c5280d925e10c->enter($__internal_637fc8cdc3674b69f26ff4b82ed48a09cb261dcf0132424d027c5280d925e10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_e3f62119bac8eb10cf56894e854a93be1c1c8dda186332a9a3ce794c6717495b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f62119bac8eb10cf56894e854a93be1c1c8dda186332a9a3ce794c6717495b->enter($__internal_e3f62119bac8eb10cf56894e854a93be1c1c8dda186332a9a3ce794c6717495b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 161
        echo "    ";
        // line 162
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 163
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 163, $this->getSourceContext()); })())) {
                // line 164
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 164, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 165
                echo "        ";
            }
            // line 166
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 167
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 167, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 167, $this->getSourceContext()); })())))));
                // line 168
                echo "        ";
            }
            // line 169
            echo "        ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 169, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 169, $this->getSourceContext()); })())))) {
                // line 170
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 170, $this->getSourceContext()); })()));
                // line 171
                echo "        ";
            }
            // line 172
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 172, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 173
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 173, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 173, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 173, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 173, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 173, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 173, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 174
            echo "</label>
    ";
        }
        
        $__internal_e3f62119bac8eb10cf56894e854a93be1c1c8dda186332a9a3ce794c6717495b->leave($__internal_e3f62119bac8eb10cf56894e854a93be1c1c8dda186332a9a3ce794c6717495b_prof);

        
        $__internal_637fc8cdc3674b69f26ff4b82ed48a09cb261dcf0132424d027c5280d925e10c->leave($__internal_637fc8cdc3674b69f26ff4b82ed48a09cb261dcf0132424d027c5280d925e10c_prof);

    }

    // line 180
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7dc817f5836f05f204f3f095844ff511c7f191f143369031c33a779eadf5c410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc817f5836f05f204f3f095844ff511c7f191f143369031c33a779eadf5c410->enter($__internal_7dc817f5836f05f204f3f095844ff511c7f191f143369031c33a779eadf5c410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e8bae19fa0536125282282d422d8096fd5316b8c339b5ba7303dc405fabd92c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8bae19fa0536125282282d422d8096fd5316b8c339b5ba7303dc405fabd92c7->enter($__internal_e8bae19fa0536125282282d422d8096fd5316b8c339b5ba7303dc405fabd92c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 181
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 181, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 181, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 181, $this->getSourceContext()); })()))) {
            echo " has-danger";
        }
        echo "\">";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 182, $this->getSourceContext()); })()), 'label');
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 183, $this->getSourceContext()); })()), 'widget');
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 184, $this->getSourceContext()); })()), 'errors');
        // line 185
        echo "</div>";
        
        $__internal_e8bae19fa0536125282282d422d8096fd5316b8c339b5ba7303dc405fabd92c7->leave($__internal_e8bae19fa0536125282282d422d8096fd5316b8c339b5ba7303dc405fabd92c7_prof);

        
        $__internal_7dc817f5836f05f204f3f095844ff511c7f191f143369031c33a779eadf5c410->leave($__internal_7dc817f5836f05f204f3f095844ff511c7f191f143369031c33a779eadf5c410_prof);

    }

    // line 188
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_91c490f976a3724983be6a4cabeedcee4fb8c4f9356951f2e7a6816f2f42a905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c490f976a3724983be6a4cabeedcee4fb8c4f9356951f2e7a6816f2f42a905->enter($__internal_91c490f976a3724983be6a4cabeedcee4fb8c4f9356951f2e7a6816f2f42a905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_5f5e5da633d888501685b55591b3b0150a5e4f9386fdcf394e998a677056af20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5e5da633d888501685b55591b3b0150a5e4f9386fdcf394e998a677056af20->enter($__internal_5f5e5da633d888501685b55591b3b0150a5e4f9386fdcf394e998a677056af20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 189
        echo "<div class=\"form-group\">";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 190, $this->getSourceContext()); })()), 'widget');
        // line 191
        echo "</div>";
        
        $__internal_5f5e5da633d888501685b55591b3b0150a5e4f9386fdcf394e998a677056af20->leave($__internal_5f5e5da633d888501685b55591b3b0150a5e4f9386fdcf394e998a677056af20_prof);

        
        $__internal_91c490f976a3724983be6a4cabeedcee4fb8c4f9356951f2e7a6816f2f42a905->leave($__internal_91c490f976a3724983be6a4cabeedcee4fb8c4f9356951f2e7a6816f2f42a905_prof);

    }

    // line 194
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d34d94d0da5a139fddbbaae969c225c84b4a086068d9c57a0bd1251202584e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34d94d0da5a139fddbbaae969c225c84b4a086068d9c57a0bd1251202584e7c->enter($__internal_d34d94d0da5a139fddbbaae969c225c84b4a086068d9c57a0bd1251202584e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_26899d5df0a372f01ef3177a770946674536319a1de9d6ce8c3129600ed651ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26899d5df0a372f01ef3177a770946674536319a1de9d6ce8c3129600ed651ab->enter($__internal_26899d5df0a372f01ef3177a770946674536319a1de9d6ce8c3129600ed651ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 195
        $context["force_error"] = true;
        // line 196
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_26899d5df0a372f01ef3177a770946674536319a1de9d6ce8c3129600ed651ab->leave($__internal_26899d5df0a372f01ef3177a770946674536319a1de9d6ce8c3129600ed651ab_prof);

        
        $__internal_d34d94d0da5a139fddbbaae969c225c84b4a086068d9c57a0bd1251202584e7c->leave($__internal_d34d94d0da5a139fddbbaae969c225c84b4a086068d9c57a0bd1251202584e7c_prof);

    }

    // line 199
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_712000e4512544db24dff0516049c01fef53364490bce13183abac60e9d81e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712000e4512544db24dff0516049c01fef53364490bce13183abac60e9d81e73->enter($__internal_712000e4512544db24dff0516049c01fef53364490bce13183abac60e9d81e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_8463b308ac191b8e55334013306fdab5de6cfb98c882c2a81b442e7107711011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8463b308ac191b8e55334013306fdab5de6cfb98c882c2a81b442e7107711011->enter($__internal_8463b308ac191b8e55334013306fdab5de6cfb98c882c2a81b442e7107711011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 200
        $context["force_error"] = true;
        // line 201
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8463b308ac191b8e55334013306fdab5de6cfb98c882c2a81b442e7107711011->leave($__internal_8463b308ac191b8e55334013306fdab5de6cfb98c882c2a81b442e7107711011_prof);

        
        $__internal_712000e4512544db24dff0516049c01fef53364490bce13183abac60e9d81e73->leave($__internal_712000e4512544db24dff0516049c01fef53364490bce13183abac60e9d81e73_prof);

    }

    // line 204
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_d2ac42e211dce6721ae4ef06564d6131d593e5eb0fca47c06e08f1963d78b574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ac42e211dce6721ae4ef06564d6131d593e5eb0fca47c06e08f1963d78b574->enter($__internal_d2ac42e211dce6721ae4ef06564d6131d593e5eb0fca47c06e08f1963d78b574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_b40db10e37e0d56b2ed27347de60238ed61fefd1186ba9a6611d5f4730efa336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40db10e37e0d56b2ed27347de60238ed61fefd1186ba9a6611d5f4730efa336->enter($__internal_b40db10e37e0d56b2ed27347de60238ed61fefd1186ba9a6611d5f4730efa336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 205
        $context["force_error"] = true;
        // line 206
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b40db10e37e0d56b2ed27347de60238ed61fefd1186ba9a6611d5f4730efa336->leave($__internal_b40db10e37e0d56b2ed27347de60238ed61fefd1186ba9a6611d5f4730efa336_prof);

        
        $__internal_d2ac42e211dce6721ae4ef06564d6131d593e5eb0fca47c06e08f1963d78b574->leave($__internal_d2ac42e211dce6721ae4ef06564d6131d593e5eb0fca47c06e08f1963d78b574_prof);

    }

    // line 209
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_95b384edc3d5b7613e63964e5a6ed44694a4a0977f476e0e5ae346fdbb58dd4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b384edc3d5b7613e63964e5a6ed44694a4a0977f476e0e5ae346fdbb58dd4b->enter($__internal_95b384edc3d5b7613e63964e5a6ed44694a4a0977f476e0e5ae346fdbb58dd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_d201463ed917175f95e0910deb1d7be8fe64722fc39602237434fecd5c179ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d201463ed917175f95e0910deb1d7be8fe64722fc39602237434fecd5c179ec4->enter($__internal_d201463ed917175f95e0910deb1d7be8fe64722fc39602237434fecd5c179ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 210
        $context["force_error"] = true;
        // line 211
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d201463ed917175f95e0910deb1d7be8fe64722fc39602237434fecd5c179ec4->leave($__internal_d201463ed917175f95e0910deb1d7be8fe64722fc39602237434fecd5c179ec4_prof);

        
        $__internal_95b384edc3d5b7613e63964e5a6ed44694a4a0977f476e0e5ae346fdbb58dd4b->leave($__internal_95b384edc3d5b7613e63964e5a6ed44694a4a0977f476e0e5ae346fdbb58dd4b_prof);

    }

    // line 214
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_af49815eafd00964cef8baf847fa0869da8ae5b2888027956c5fde226babaffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af49815eafd00964cef8baf847fa0869da8ae5b2888027956c5fde226babaffb->enter($__internal_af49815eafd00964cef8baf847fa0869da8ae5b2888027956c5fde226babaffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f69ce2abb8117c17b212df53e592b0ffab5c2957cd2c2b51484fd736a40a5610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69ce2abb8117c17b212df53e592b0ffab5c2957cd2c2b51484fd736a40a5610->enter($__internal_f69ce2abb8117c17b212df53e592b0ffab5c2957cd2c2b51484fd736a40a5610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 215
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 215, $this->getSourceContext()); })())) {
            echo " has-danger";
        }
        echo "\">";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 216, $this->getSourceContext()); })()), 'widget');
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 217, $this->getSourceContext()); })()), 'errors');
        // line 218
        echo "</div>";
        
        $__internal_f69ce2abb8117c17b212df53e592b0ffab5c2957cd2c2b51484fd736a40a5610->leave($__internal_f69ce2abb8117c17b212df53e592b0ffab5c2957cd2c2b51484fd736a40a5610_prof);

        
        $__internal_af49815eafd00964cef8baf847fa0869da8ae5b2888027956c5fde226babaffb->leave($__internal_af49815eafd00964cef8baf847fa0869da8ae5b2888027956c5fde226babaffb_prof);

    }

    // line 221
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_51256ef2e11ea3b5e2f76e46a58921c142abf07ba7e19a1fc3d54da48dd3df59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51256ef2e11ea3b5e2f76e46a58921c142abf07ba7e19a1fc3d54da48dd3df59->enter($__internal_51256ef2e11ea3b5e2f76e46a58921c142abf07ba7e19a1fc3d54da48dd3df59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_f2130a659b031ed1f96c60ef9f615977b3b663e3e8aadc553039e0971ad80aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2130a659b031ed1f96c60ef9f615977b3b663e3e8aadc553039e0971ad80aac->enter($__internal_f2130a659b031ed1f96c60ef9f615977b3b663e3e8aadc553039e0971ad80aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 222
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 222, $this->getSourceContext()); })())) {
            echo " has-danger";
        }
        echo "\">";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 223, $this->getSourceContext()); })()), 'widget');
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 224, $this->getSourceContext()); })()), 'errors');
        // line 225
        echo "</div>";
        
        $__internal_f2130a659b031ed1f96c60ef9f615977b3b663e3e8aadc553039e0971ad80aac->leave($__internal_f2130a659b031ed1f96c60ef9f615977b3b663e3e8aadc553039e0971ad80aac_prof);

        
        $__internal_51256ef2e11ea3b5e2f76e46a58921c142abf07ba7e19a1fc3d54da48dd3df59->leave($__internal_51256ef2e11ea3b5e2f76e46a58921c142abf07ba7e19a1fc3d54da48dd3df59_prof);

    }

    // line 230
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_c2feb1a33aaa617296761b1c2bc10d60f8bb0d6c14c138bf1e65678e096f1df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2feb1a33aaa617296761b1c2bc10d60f8bb0d6c14c138bf1e65678e096f1df6->enter($__internal_c2feb1a33aaa617296761b1c2bc10d60f8bb0d6c14c138bf1e65678e096f1df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_a210ce418583ef78e164c0b4285216ffc7d2071f7a241cf40de7cf42f04b6dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a210ce418583ef78e164c0b4285216ffc7d2071f7a241cf40de7cf42f04b6dbd->enter($__internal_a210ce418583ef78e164c0b4285216ffc7d2071f7a241cf40de7cf42f04b6dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 231
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 231, $this->getSourceContext()); })())) > 0)) {
            // line 232
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 232, $this->getSourceContext()); })()), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 233
            echo "        <ul class=\"list-unstyled\">";
            // line 234
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 234, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 235
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "</ul>
        ";
            // line 238
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 238, $this->getSourceContext()); })()), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_a210ce418583ef78e164c0b4285216ffc7d2071f7a241cf40de7cf42f04b6dbd->leave($__internal_a210ce418583ef78e164c0b4285216ffc7d2071f7a241cf40de7cf42f04b6dbd_prof);

        
        $__internal_c2feb1a33aaa617296761b1c2bc10d60f8bb0d6c14c138bf1e65678e096f1df6->leave($__internal_c2feb1a33aaa617296761b1c2bc10d60f8bb0d6c14c138bf1e65678e096f1df6_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  995 => 238,  992 => 237,  984 => 235,  980 => 234,  978 => 233,  972 => 232,  970 => 231,  961 => 230,  951 => 225,  949 => 224,  947 => 223,  941 => 222,  932 => 221,  922 => 218,  920 => 217,  918 => 216,  912 => 215,  903 => 214,  893 => 211,  891 => 210,  882 => 209,  872 => 206,  870 => 205,  861 => 204,  851 => 201,  849 => 200,  840 => 199,  830 => 196,  828 => 195,  819 => 194,  809 => 191,  807 => 190,  805 => 189,  796 => 188,  786 => 185,  784 => 184,  782 => 183,  780 => 182,  774 => 181,  765 => 180,  753 => 174,  749 => 173,  734 => 172,  731 => 171,  728 => 170,  725 => 169,  722 => 168,  719 => 167,  716 => 166,  713 => 165,  710 => 164,  707 => 163,  704 => 162,  702 => 161,  693 => 160,  683 => 157,  674 => 156,  664 => 153,  655 => 152,  645 => 149,  643 => 148,  634 => 146,  624 => 143,  622 => 142,  613 => 141,  602 => 135,  600 => 134,  598 => 133,  595 => 131,  593 => 130,  591 => 129,  582 => 128,  571 => 124,  569 => 123,  567 => 122,  564 => 120,  562 => 119,  560 => 118,  551 => 117,  540 => 113,  534 => 110,  533 => 109,  532 => 108,  528 => 107,  524 => 106,  521 => 104,  515 => 101,  514 => 100,  513 => 99,  509 => 98,  507 => 97,  505 => 96,  496 => 95,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 230,  200 => 229,  197 => 227,  195 => 221,  192 => 220,  190 => 214,  187 => 213,  185 => 209,  182 => 208,  180 => 204,  177 => 203,  175 => 199,  172 => 198,  170 => 194,  167 => 193,  165 => 188,  162 => 187,  160 => 180,  157 => 179,  154 => 177,  152 => 160,  149 => 159,  147 => 156,  144 => 155,  142 => 152,  139 => 151,  137 => 146,  134 => 145,  132 => 141,  129 => 140,  126 => 138,  124 => 128,  121 => 127,  119 => 117,  116 => 116,  114 => 95,  111 => 94,  109 => 90,  106 => 89,  104 => 75,  101 => 74,  99 => 56,  96 => 55,  94 => 42,  91 => 41,  89 => 35,  86 => 34,  84 => 22,  81 => 21,  79 => 17,  76 => 16,  74 => 12,  71 => 11,  69 => 5,  66 => 4,  63 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or 'file' != type %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
        {{- date_pattern|replace({
            '{{ year }}': form_widget(form.year),
            '{{ month }}': form_widget(form.month),
            '{{ day }}': form_widget(form.day),
        })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default('') -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-danger{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-danger{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-danger{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
        <ul class=\"list-unstyled\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
        {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "/home/andy/www/SymfonySecurity/app/Resources/views/bootstrap_4_layout.html.twig");
    }
}
