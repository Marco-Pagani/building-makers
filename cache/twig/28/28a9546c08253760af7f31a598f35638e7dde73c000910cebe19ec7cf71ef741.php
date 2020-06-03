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

/* forms/layouts/form.html.twig */
class __TwigTemplate_c7d5ba7b754bc56cf962f86e0b7cc72d689d9c8d7a94b66836a8ecab541ae65e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'embed_form_core' => [$this, 'block_embed_form_core'],
            'embed_form_classes' => [$this, 'block_embed_form_classes'],
            'embed_fields' => [$this, 'block_embed_fields'],
            'embed_buttons' => [$this, 'block_embed_buttons'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<form
    ";
        // line 2
        $this->displayBlock('embed_form_core', $context, $blocks);
        // line 3
        echo "    ";
        $this->displayBlock('embed_form_classes', $context, $blocks);
        // line 4
        echo ">
  ";
        // line 5
        $this->displayBlock('embed_fields', $context, $blocks);
        // line 6
        echo "  ";
        $this->displayBlock('embed_buttons', $context, $blocks);
        // line 7
        echo "</form>";
    }

    // line 2
    public function block_embed_form_core($context, array $blocks = [])
    {
    }

    // line 3
    public function block_embed_form_classes($context, array $blocks = [])
    {
    }

    // line 5
    public function block_embed_fields($context, array $blocks = [])
    {
    }

    // line 6
    public function block_embed_buttons($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "forms/layouts/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 6,  64 => 5,  59 => 3,  54 => 2,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  39 => 3,  37 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<form
    {% block embed_form_core %}{% endblock %}
    {% block embed_form_classes %}{% endblock %}
>
  {% block embed_fields %}{% endblock %}
  {% block embed_buttons %}{% endblock %}
</form>", "forms/layouts/form.html.twig", "D:\\xampp\\htdocs\\user\\plugins\\form\\templates\\forms\\layouts\\form.html.twig");
    }
}
