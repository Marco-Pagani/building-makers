<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms/default/form.html.twig */
class __TwigTemplate_85393faca171e0296ee2453bca70aafe96bfb641c942e791e975d051f10b8708 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form_classes' => [$this, 'block_form_classes'],
            'inner_markup_fields_start' => [$this, 'block_inner_markup_fields_start'],
            'inner_markup_fields_end' => [$this, 'block_inner_markup_fields_end'],
            'inner_markup_fields' => [$this, 'block_inner_markup_fields'],
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'field' => [$this, 'block_field'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
            'inner_markup_buttons_start' => [$this, 'block_inner_markup_buttons_start'],
            'inner_markup_buttons_end' => [$this, 'block_inner_markup_buttons_end'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ((null === ($context["form"] ?? null))) {
            // line 2
            echo "    ";
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", []), "getFlashObject", [0 => "form"], "method");
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("partials/form-messages.html.twig", "forms/default/form.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ((($this->getAttribute(($context["form"] ?? null), "scope", [], "any", true, true)) ? ($this->getAttribute(($context["form"] ?? null), "scope", [])) : ("data."))));
        // line 8
        $context["multipart"] = "";
        // line 9
        $context["blueprints"] = (($context["blueprints"]) ?? ($this->getAttribute(($context["form"] ?? null), "blueprint", [], "method")));
        // line 10
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute(($context["form"] ?? null), "method", [])), "POST");
        // line 11
        $context["client_side_validation"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "client_side_validation", []))) ? ($this->getAttribute(($context["form"] ?? null), "client_side_validation", [])) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "client_side_validation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "client_side_validation", []), true)) : (true))));
        // line 12
        $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", []))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "inline_errors", [0 => false], "method")));
        // line 13
        echo "
";
        // line 14
        $context["data"] = (($context["data"]) ?? ($this->getAttribute(($context["form"] ?? null), "data", [])));
        // line 15
        $context["context"] = (($context["context"]) ?? (($context["data"] ?? null)));
        // line 16
        echo "
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 18
            echo "    ";
            if (((($context["method"] ?? null) == "POST") && ($this->getAttribute($context["field"], "type", []) == "file"))) {
                // line 19
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 20
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
";
        // line 23
        $context["action"] = (($this->getAttribute(($context["form"] ?? null), "action", [])) ? ($this->getAttribute(($context["form"] ?? null), "action", [])) : (($this->getAttribute(($context["page"] ?? null), "route", []) . $this->getAttribute(($context["uri"] ?? null), "params", []))));
        // line 24
        echo "
";
        // line 25
        $context["action"] = ((((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["action"] ?? null)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "http") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))) || (is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["action"] ?? null)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "#") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))))) ? (($context["action"] ?? null)) : ((($context["base_url"] ?? null) . ($context["action"] ?? null))));
        // line 26
        echo "
";
        // line 27
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 28
            echo "    ";
            $context["action"] = ((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", []));
        }
        // line 30
        echo "
";
        // line 31
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", [])) {
            // line 32
            echo "    ";
            if ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "browser", []), "browser", []) == "msie") && ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "browser", []), "version", []) < 12))) {
                // line 33
                echo "        ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/object.assign.polyfill.js"], "method");
                // line 34
                echo "    ";
            }
            // line 35
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.vendor.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
            // line 36
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.min.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
        }
        // line 38
        echo "
";
        // line 39
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (((((((((("
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '" . $this->getAttribute(        // line 42
($context["uri"] ?? null), "route", [0 => true], "method")) . "',
        base_url_relative: '") .         // line 43
($context["base_url_relative"] ?? null)) . "',
        param_sep: '") . $this->getAttribute($this->getAttribute(        // line 44
($context["config"] ?? null), "system", []), "param_sep", [])) . "',
        form_nonce: '") . $this->getAttribute(        // line 45
($context["form"] ?? null), "getNonce", [], "method")) . "',
        session_timeout: ") . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 46
($context["config"] ?? null), "system", []), "session", []), "timeout", [])) . "
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
"), 1 => ["group" => "bottom", "position" => "before"]], "method");
        // line 50
        echo "
";
        // line 52
        ob_start();
        // line 53
        echo "  ";
        $this->displayBlock('form_classes', $context, $blocks);
        $context["override_form_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "
";
        // line 58
        ob_start();
        // line 59
        echo "  ";
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        $context["override_inner_markup_fields_start"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo "
";
        // line 62
        ob_start();
        // line 63
        echo "  ";
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        $context["override_inner_markup_fields_end"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        echo "
";
        // line 66
        ob_start();
        // line 67
        echo "  ";
        $this->displayBlock('inner_markup_fields', $context, $blocks);
        $context["override_inner_markup_fields"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        echo "
";
        // line 87
        ob_start();
        // line 88
        echo "  ";
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        $context["override_inner_markup_buttons_start"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "
";
        // line 93
        ob_start();
        // line 94
        echo "  ";
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        $context["override_inner_markup_buttons_end"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "
";
        // line 100
        $this->loadTemplate("forms/default/form.html.twig", "forms/default/form.html.twig", 100, "1538272228")->display($context);
        // line 173
        echo "

";
        // line 175
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "forms", []), "dropzone", []), "enabled", [])) {
            // line 176
            echo "<div id=\"dropzone-template\" style=\"display:none;\">
    ";
            // line 177
            $this->loadTemplate("forms/dropzone/template.html.twig", "forms/default/form.html.twig", 177)->display($context);
            // line 178
            echo "</div>
";
        }
    }

    // line 53
    public function block_form_classes($context, array $blocks = [])
    {
        // line 54
        echo ($context["form_outer_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["form"] ?? null), "classes", []);
    }

    // line 59
    public function block_inner_markup_fields_start($context, array $blocks = [])
    {
    }

    // line 63
    public function block_inner_markup_fields_end($context, array $blocks = [])
    {
    }

    // line 67
    public function block_inner_markup_fields($context, array $blocks = [])
    {
        // line 68
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
            // line 69
            echo "      ";
            $context["field_name"] = ((($this->getAttribute($context["field"], "name", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", [])))) ? ($this->getAttribute($context["field"], "name", [])) : ($context["field_name"]));
            // line 70
            echo "      ";
            if (($context["field_name"] &&  !$this->getAttribute($this->getAttribute($context["field"], "validate", []), "ignore", []))) {
                // line 71
                if ((is_string($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["field_name"]) && is_string($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ".") && ('' === $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 || 0 === strpos($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666)))) {
                    // line 72
                    $context["field_name"] = twig_slice($this->env, $context["field_name"], 1, null);
                    // line 73
                    echo "          ";
                    $context["field"] = twig_array_merge($context["field"], ["name" => $context["field_name"]]);
                    // line 74
                    echo "        ";
                }
                // line 75
                echo "
        ";
                // line 76
                $context["value"] = ((($context["form"] ?? null)) ? ($this->getAttribute(($context["form"] ?? null), "value", [0 => $context["field_name"]], "method")) : ($this->getAttribute(($context["data"] ?? null), "value", [0 => $context["field_name"]], "method")));
                // line 77
                echo "        ";
                $this->displayBlock('inner_markup_field_open', $context, $blocks);
                // line 78
                echo "        ";
                $this->displayBlock('field', $context, $blocks);
                // line 81
                echo "        ";
                $this->displayBlock('inner_markup_field_close', $context, $blocks);
                // line 82
                echo "      ";
            }
            // line 83
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "  ";
    }

    // line 77
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
    }

    // line 78
    public function block_field($context, array $blocks = [])
    {
        // line 79
        echo "          ";
        $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = null;
        try {
            $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e =             $this->loadTemplate((((("forms/fields/" . $this->getAttribute(($context["field"] ?? null), "type", [])) . "/") . $this->getAttribute(($context["field"] ?? null), "type", [])) . ".html.twig"), "forms/default/form.html.twig", 79);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) {
            $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e->display($context);
        }
        // line 80
        echo "        ";
    }

    // line 81
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
    }

    // line 88
    public function block_inner_markup_buttons_start($context, array $blocks = [])
    {
        // line 89
        echo "  <div class=\"";
        echo ((($context["form_button_outer_classes"] ?? null)) ? (($context["form_button_outer_classes"] ?? null)) : ("buttons"));
        echo "\">
  ";
    }

    // line 94
    public function block_inner_markup_buttons_end($context, array $blocks = [])
    {
        // line 95
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 95,  357 => 94,  350 => 89,  347 => 88,  342 => 81,  338 => 80,  327 => 79,  324 => 78,  319 => 77,  315 => 84,  301 => 83,  298 => 82,  295 => 81,  292 => 78,  289 => 77,  287 => 76,  284 => 75,  281 => 74,  278 => 73,  276 => 72,  274 => 71,  271 => 70,  268 => 69,  250 => 68,  247 => 67,  242 => 63,  237 => 59,  231 => 54,  228 => 53,  222 => 178,  220 => 177,  217 => 176,  215 => 175,  211 => 173,  209 => 100,  206 => 98,  202 => 94,  200 => 93,  197 => 92,  193 => 88,  191 => 87,  188 => 86,  184 => 67,  182 => 66,  179 => 65,  175 => 63,  173 => 62,  170 => 61,  166 => 59,  164 => 58,  161 => 57,  157 => 53,  155 => 52,  152 => 50,  147 => 46,  145 => 45,  143 => 44,  141 => 43,  139 => 42,  135 => 39,  132 => 38,  128 => 36,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  114 => 31,  111 => 30,  107 => 28,  105 => 27,  102 => 26,  100 => 25,  97 => 24,  95 => 23,  92 => 22,  85 => 20,  82 => 19,  79 => 18,  75 => 17,  72 => 16,  70 => 15,  68 => 14,  65 => 13,  63 => 12,  61 => 11,  59 => 10,  57 => 9,  55 => 8,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: form.scope is defined ? form.scope : 'data.' %}
{% set multipart = '' %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|default(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ?: page.route ~ uri.params %}

{% set action = (action starts with 'http') or (action starts with '#') ? action : base_url ~ action %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

{% if form.keep_alive %}
    {% if grav.browser.browser == 'msie' and grav.browser.version < 12 %}
        {% do assets.addJs('plugin://form/assets/object.assign.polyfill.js') %}
    {% endif %}
    {% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
    {% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '\" ~ uri.route(true) ~\"',
        base_url_relative: '\" ~ base_url_relative ~ \"',
        param_sep: '\"~ config.system.param_sep ~ \"',
        form_nonce: '\" ~ form.getNonce() ~ \"',
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {'group': 'bottom', 'position': 'before'}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field_name = field.name ?? field_name %}
      {% if field_name and not field.validate.ignore %}
        {%- if field_name starts with '.' -%}
          {% set field_name = field_name[1:] %}
          {% set field = field|merge({ name: field_name }) %}
        {% endif %}

        {% set value = form ? form.value(field_name) : data.value(field_name) %}
        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed 'forms/layouts/form.html.twig' %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action | trim('/', 'right') }}\"
    method=\"{{ method }}\"{{ multipart|raw }}
    {% if form.id %}id=\"{{ form.id }}\"{% endif %}
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% include \"forms/fields/formname/formname.html.twig\" %}
    {% include \"forms/fields/formtask/formtask.html.twig\" %}
    {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
    {{ nonce_field(form.getNonceAction() ?? 'form', form.getNonceName() ?? 'form-nonce')|raw }}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}

      {% if button.url %}
      {% set button_url = button.url starts with 'http' ? button.url : base_url ~ button.url %}
      {% endif %}

      {% embed 'forms/layouts/button.html.twig' %}
        {% block embed_button_core %}
          {% if button.id %}id=\"{{ button.id }}\"{% endif %}
          {% if button.disabled %}disabled=\"disabled\"{% endif %}
          {% if button.name %}
            name=\"{{ button.name }}\"
          {% else %}
            {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
          {% endif %}
          type=\"{{ button.type|default('submit') }}\"
        {% endblock %}

        {% block embed_button_classes %}
          {% block button_classes %}
            class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
          {% endblock %}
        {% endblock %}

        {% block embed_button_content -%}
          {%- set button_value = button.value|t|default('Submit') -%}
          {%- if button.html -%}
            {{- button_value|trim|raw -}}
          {%- else -%}
            {{- button_value|trim|e -}}
          {%- endif -%}
        {%- endblock %}

      {% endembed %}

      {% if button.outerclasses is defined %}</div>{% endif %}
    {% endfor %}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}


{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include 'forms/dropzone/template.html.twig' %}
</div>
{% endif %}
", "forms/default/form.html.twig", "D:\\xampp\\htdocs\\user\\plugins\\form\\templates\\forms\\default\\form.html.twig");
    }
}


/* forms/default/form.html.twig */
class __TwigTemplate_85393faca171e0296ee2453bca70aafe96bfb641c942e791e975d051f10b8708___1538272228 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'embed_form_core' => [$this, 'block_embed_form_core'],
            'embed_form_classes' => [$this, 'block_embed_form_classes'],
            'embed_fields' => [$this, 'block_embed_fields'],
            'embed_buttons' => [$this, 'block_embed_buttons'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 100
        return "forms/layouts/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/layouts/form.html.twig", "forms/default/form.html.twig", 100);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 102
    public function block_embed_form_core($context, array $blocks = [])
    {
        // line 103
        echo "    name=\"";
        echo $this->getAttribute(($context["form"] ?? null), "name", []);
        echo "\"
    action=\"";
        // line 104
        echo twig_trim_filter(($context["action"] ?? null), "/", "right");
        echo "\"
    method=\"";
        // line 105
        echo ($context["method"] ?? null);
        echo "\"";
        echo ($context["multipart"] ?? null);
        echo "
    ";
        // line 106
        if ($this->getAttribute(($context["form"] ?? null), "id", [])) {
            echo "id=\"";
            echo $this->getAttribute(($context["form"] ?? null), "id", []);
            echo "\"";
        }
        // line 107
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "novalidate", [])) {
            echo "novalidate";
        }
        // line 108
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", [])) {
            echo "data-grav-keepalive=\"true\"";
        }
        // line 109
        echo "  ";
    }

    // line 111
    public function block_embed_form_classes($context, array $blocks = [])
    {
        // line 112
        echo "class=\"";
        $this->displayParentBlock("embed_form_classes", $context, $blocks);
        echo " ";
        echo twig_trim_filter(($context["override_form_classes"] ?? null));
        echo "\"";
    }

    // line 115
    public function block_embed_fields($context, array $blocks = [])
    {
        // line 116
        echo "    ";
        echo ($context["override_inner_markup_fields_start"] ?? null);
        echo "
    ";
        // line 117
        echo ($context["override_inner_markup_fields"] ?? null);
        echo "

    ";
        // line 119
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "forms/default/form.html.twig", 119)->display($context);
        // line 120
        echo "    ";
        $this->loadTemplate("forms/fields/formtask/formtask.html.twig", "forms/default/form.html.twig", 120)->display($context);
        // line 121
        echo "    ";
        $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "forms/default/form.html.twig", 121)->display($context);
        // line 122
        echo "    ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc(((($this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method")) : ("form")), ((($this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method")) : ("form-nonce")));
        echo "

    ";
        // line 124
        echo ($context["override_inner_markup_fields_end"] ?? null);
        echo "
  ";
    }

    // line 127
    public function block_embed_buttons($context, array $blocks = [])
    {
        // line 128
        echo "    ";
        echo ($context["override_inner_markup_buttons_start"] ?? null);
        echo "

    ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "buttons", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 131
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                echo "<div class=\"";
                echo $this->getAttribute($context["button"], "outerclasses", []);
                echo "\">";
            }
            // line 132
            echo "
      ";
            // line 133
            if ($this->getAttribute($context["button"], "url", [])) {
                // line 134
                echo "      ";
                $context["button_url"] = (((is_string($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $this->getAttribute($context["button"], "url", [])) && is_string($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = "http") && ('' === $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 || 0 === strpos($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52, $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136)))) ? ($this->getAttribute($context["button"], "url", [])) : ((($context["base_url"] ?? null) . $this->getAttribute($context["button"], "url", []))));
                // line 135
                echo "      ";
            }
            // line 136
            echo "
      ";
            // line 137
            $this->loadTemplate("forms/default/form.html.twig", "forms/default/form.html.twig", 137, "980772959")->display($context);
            // line 165
            echo "
      ";
            // line 166
            if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                echo "</div>";
            }
            // line 167
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "
    ";
        // line 169
        echo ($context["override_inner_markup_buttons_end"] ?? null);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  756 => 169,  753 => 168,  739 => 167,  735 => 166,  732 => 165,  730 => 137,  727 => 136,  724 => 135,  721 => 134,  719 => 133,  716 => 132,  709 => 131,  692 => 130,  686 => 128,  683 => 127,  677 => 124,  671 => 122,  668 => 121,  665 => 120,  663 => 119,  658 => 117,  653 => 116,  650 => 115,  642 => 112,  639 => 111,  635 => 109,  630 => 108,  625 => 107,  619 => 106,  613 => 105,  609 => 104,  604 => 103,  601 => 102,  591 => 100,  360 => 95,  357 => 94,  350 => 89,  347 => 88,  342 => 81,  338 => 80,  327 => 79,  324 => 78,  319 => 77,  315 => 84,  301 => 83,  298 => 82,  295 => 81,  292 => 78,  289 => 77,  287 => 76,  284 => 75,  281 => 74,  278 => 73,  276 => 72,  274 => 71,  271 => 70,  268 => 69,  250 => 68,  247 => 67,  242 => 63,  237 => 59,  231 => 54,  228 => 53,  222 => 178,  220 => 177,  217 => 176,  215 => 175,  211 => 173,  209 => 100,  206 => 98,  202 => 94,  200 => 93,  197 => 92,  193 => 88,  191 => 87,  188 => 86,  184 => 67,  182 => 66,  179 => 65,  175 => 63,  173 => 62,  170 => 61,  166 => 59,  164 => 58,  161 => 57,  157 => 53,  155 => 52,  152 => 50,  147 => 46,  145 => 45,  143 => 44,  141 => 43,  139 => 42,  135 => 39,  132 => 38,  128 => 36,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  114 => 31,  111 => 30,  107 => 28,  105 => 27,  102 => 26,  100 => 25,  97 => 24,  95 => 23,  92 => 22,  85 => 20,  82 => 19,  79 => 18,  75 => 17,  72 => 16,  70 => 15,  68 => 14,  65 => 13,  63 => 12,  61 => 11,  59 => 10,  57 => 9,  55 => 8,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: form.scope is defined ? form.scope : 'data.' %}
{% set multipart = '' %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|default(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ?: page.route ~ uri.params %}

{% set action = (action starts with 'http') or (action starts with '#') ? action : base_url ~ action %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

{% if form.keep_alive %}
    {% if grav.browser.browser == 'msie' and grav.browser.version < 12 %}
        {% do assets.addJs('plugin://form/assets/object.assign.polyfill.js') %}
    {% endif %}
    {% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
    {% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '\" ~ uri.route(true) ~\"',
        base_url_relative: '\" ~ base_url_relative ~ \"',
        param_sep: '\"~ config.system.param_sep ~ \"',
        form_nonce: '\" ~ form.getNonce() ~ \"',
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {'group': 'bottom', 'position': 'before'}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field_name = field.name ?? field_name %}
      {% if field_name and not field.validate.ignore %}
        {%- if field_name starts with '.' -%}
          {% set field_name = field_name[1:] %}
          {% set field = field|merge({ name: field_name }) %}
        {% endif %}

        {% set value = form ? form.value(field_name) : data.value(field_name) %}
        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed 'forms/layouts/form.html.twig' %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action | trim('/', 'right') }}\"
    method=\"{{ method }}\"{{ multipart|raw }}
    {% if form.id %}id=\"{{ form.id }}\"{% endif %}
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% include \"forms/fields/formname/formname.html.twig\" %}
    {% include \"forms/fields/formtask/formtask.html.twig\" %}
    {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
    {{ nonce_field(form.getNonceAction() ?? 'form', form.getNonceName() ?? 'form-nonce')|raw }}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}

      {% if button.url %}
      {% set button_url = button.url starts with 'http' ? button.url : base_url ~ button.url %}
      {% endif %}

      {% embed 'forms/layouts/button.html.twig' %}
        {% block embed_button_core %}
          {% if button.id %}id=\"{{ button.id }}\"{% endif %}
          {% if button.disabled %}disabled=\"disabled\"{% endif %}
          {% if button.name %}
            name=\"{{ button.name }}\"
          {% else %}
            {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
          {% endif %}
          type=\"{{ button.type|default('submit') }}\"
        {% endblock %}

        {% block embed_button_classes %}
          {% block button_classes %}
            class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
          {% endblock %}
        {% endblock %}

        {% block embed_button_content -%}
          {%- set button_value = button.value|t|default('Submit') -%}
          {%- if button.html -%}
            {{- button_value|trim|raw -}}
          {%- else -%}
            {{- button_value|trim|e -}}
          {%- endif -%}
        {%- endblock %}

      {% endembed %}

      {% if button.outerclasses is defined %}</div>{% endif %}
    {% endfor %}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}


{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include 'forms/dropzone/template.html.twig' %}
</div>
{% endif %}
", "forms/default/form.html.twig", "D:\\xampp\\htdocs\\user\\plugins\\form\\templates\\forms\\default\\form.html.twig");
    }
}


/* forms/default/form.html.twig */
class __TwigTemplate_85393faca171e0296ee2453bca70aafe96bfb641c942e791e975d051f10b8708___980772959 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'embed_button_core' => [$this, 'block_embed_button_core'],
            'embed_button_classes' => [$this, 'block_embed_button_classes'],
            'button_classes' => [$this, 'block_button_classes'],
            'embed_button_content' => [$this, 'block_embed_button_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 137
        return "forms/layouts/button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/layouts/button.html.twig", "forms/default/form.html.twig", 137);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 138
    public function block_embed_button_core($context, array $blocks = [])
    {
        // line 139
        echo "          ";
        if ($this->getAttribute(($context["button"] ?? null), "id", [])) {
            echo "id=\"";
            echo $this->getAttribute(($context["button"] ?? null), "id", []);
            echo "\"";
        }
        // line 140
        echo "          ";
        if ($this->getAttribute(($context["button"] ?? null), "disabled", [])) {
            echo "disabled=\"disabled\"";
        }
        // line 141
        echo "          ";
        if ($this->getAttribute(($context["button"] ?? null), "name", [])) {
            // line 142
            echo "            name=\"";
            echo $this->getAttribute(($context["button"] ?? null), "name", []);
            echo "\"
          ";
        } else {
            // line 144
            echo "            ";
            if ($this->getAttribute(($context["button"] ?? null), "task", [])) {
                echo "name=\"task\" value=\"";
                echo $this->getAttribute(($context["button"] ?? null), "task", []);
                echo "\"";
            }
            // line 145
            echo "          ";
        }
        // line 146
        echo "          type=\"";
        echo (($this->getAttribute(($context["button"] ?? null), "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["button"] ?? null), "type", []), "submit")) : ("submit"));
        echo "\"
        ";
    }

    // line 149
    public function block_embed_button_classes($context, array $blocks = [])
    {
        // line 150
        echo "          ";
        $this->displayBlock('button_classes', $context, $blocks);
        // line 153
        echo "        ";
    }

    // line 150
    public function block_button_classes($context, array $blocks = [])
    {
        // line 151
        echo "            class=\"";
        echo ((($context["form_button_classes"] ?? null)) ? (($context["form_button_classes"] ?? null)) : ("button"));
        echo " ";
        echo $this->getAttribute(($context["button"] ?? null), "classes", []);
        echo "\"
          ";
    }

    // line 155
    public function block_embed_button_content($context, array $blocks = [])
    {
        // line 156
        $context["button_value"] = _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["button"] ?? null), "value", [])), "Submit");
        // line 157
        if ($this->getAttribute(($context["button"] ?? null), "html", [])) {
            // line 158
            echo twig_trim_filter(($context["button_value"] ?? null));
        } else {
            // line 160
            echo twig_escape_filter($this->env, twig_trim_filter(($context["button_value"] ?? null)));
        }
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1071 => 160,  1068 => 158,  1066 => 157,  1064 => 156,  1061 => 155,  1052 => 151,  1049 => 150,  1045 => 153,  1042 => 150,  1039 => 149,  1032 => 146,  1029 => 145,  1022 => 144,  1016 => 142,  1013 => 141,  1008 => 140,  1001 => 139,  998 => 138,  988 => 137,  756 => 169,  753 => 168,  739 => 167,  735 => 166,  732 => 165,  730 => 137,  727 => 136,  724 => 135,  721 => 134,  719 => 133,  716 => 132,  709 => 131,  692 => 130,  686 => 128,  683 => 127,  677 => 124,  671 => 122,  668 => 121,  665 => 120,  663 => 119,  658 => 117,  653 => 116,  650 => 115,  642 => 112,  639 => 111,  635 => 109,  630 => 108,  625 => 107,  619 => 106,  613 => 105,  609 => 104,  604 => 103,  601 => 102,  591 => 100,  360 => 95,  357 => 94,  350 => 89,  347 => 88,  342 => 81,  338 => 80,  327 => 79,  324 => 78,  319 => 77,  315 => 84,  301 => 83,  298 => 82,  295 => 81,  292 => 78,  289 => 77,  287 => 76,  284 => 75,  281 => 74,  278 => 73,  276 => 72,  274 => 71,  271 => 70,  268 => 69,  250 => 68,  247 => 67,  242 => 63,  237 => 59,  231 => 54,  228 => 53,  222 => 178,  220 => 177,  217 => 176,  215 => 175,  211 => 173,  209 => 100,  206 => 98,  202 => 94,  200 => 93,  197 => 92,  193 => 88,  191 => 87,  188 => 86,  184 => 67,  182 => 66,  179 => 65,  175 => 63,  173 => 62,  170 => 61,  166 => 59,  164 => 58,  161 => 57,  157 => 53,  155 => 52,  152 => 50,  147 => 46,  145 => 45,  143 => 44,  141 => 43,  139 => 42,  135 => 39,  132 => 38,  128 => 36,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  114 => 31,  111 => 30,  107 => 28,  105 => 27,  102 => 26,  100 => 25,  97 => 24,  95 => 23,  92 => 22,  85 => 20,  82 => 19,  79 => 18,  75 => 17,  72 => 16,  70 => 15,  68 => 14,  65 => 13,  63 => 12,  61 => 11,  59 => 10,  57 => 9,  55 => 8,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: form.scope is defined ? form.scope : 'data.' %}
{% set multipart = '' %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|default(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ?: page.route ~ uri.params %}

{% set action = (action starts with 'http') or (action starts with '#') ? action : base_url ~ action %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

{% if form.keep_alive %}
    {% if grav.browser.browser == 'msie' and grav.browser.version < 12 %}
        {% do assets.addJs('plugin://form/assets/object.assign.polyfill.js') %}
    {% endif %}
    {% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
    {% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '\" ~ uri.route(true) ~\"',
        base_url_relative: '\" ~ base_url_relative ~ \"',
        param_sep: '\"~ config.system.param_sep ~ \"',
        form_nonce: '\" ~ form.getNonce() ~ \"',
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {'group': 'bottom', 'position': 'before'}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field_name = field.name ?? field_name %}
      {% if field_name and not field.validate.ignore %}
        {%- if field_name starts with '.' -%}
          {% set field_name = field_name[1:] %}
          {% set field = field|merge({ name: field_name }) %}
        {% endif %}

        {% set value = form ? form.value(field_name) : data.value(field_name) %}
        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed 'forms/layouts/form.html.twig' %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action | trim('/', 'right') }}\"
    method=\"{{ method }}\"{{ multipart|raw }}
    {% if form.id %}id=\"{{ form.id }}\"{% endif %}
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% include \"forms/fields/formname/formname.html.twig\" %}
    {% include \"forms/fields/formtask/formtask.html.twig\" %}
    {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
    {{ nonce_field(form.getNonceAction() ?? 'form', form.getNonceName() ?? 'form-nonce')|raw }}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}

      {% if button.url %}
      {% set button_url = button.url starts with 'http' ? button.url : base_url ~ button.url %}
      {% endif %}

      {% embed 'forms/layouts/button.html.twig' %}
        {% block embed_button_core %}
          {% if button.id %}id=\"{{ button.id }}\"{% endif %}
          {% if button.disabled %}disabled=\"disabled\"{% endif %}
          {% if button.name %}
            name=\"{{ button.name }}\"
          {% else %}
            {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
          {% endif %}
          type=\"{{ button.type|default('submit') }}\"
        {% endblock %}

        {% block embed_button_classes %}
          {% block button_classes %}
            class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
          {% endblock %}
        {% endblock %}

        {% block embed_button_content -%}
          {%- set button_value = button.value|t|default('Submit') -%}
          {%- if button.html -%}
            {{- button_value|trim|raw -}}
          {%- else -%}
            {{- button_value|trim|e -}}
          {%- endif -%}
        {%- endblock %}

      {% endembed %}

      {% if button.outerclasses is defined %}</div>{% endif %}
    {% endfor %}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}


{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include 'forms/dropzone/template.html.twig' %}
</div>
{% endif %}
", "forms/default/form.html.twig", "D:\\xampp\\htdocs\\user\\plugins\\form\\templates\\forms\\default\\form.html.twig");
    }
}
