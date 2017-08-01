<?php

/* modules/color_field/templates/color-field-widget-box.html.twig */
class __TwigTemplate_34c109651a6c058b7aa4114df69cdcf0939132feba28cbc0418ebc577ca10206 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 20, "if" => 26);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 20
        $context["title_classes"] = array(0 => ((        // line 21
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 1 => ((        // line 22
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 25
        echo "
";
        // line 26
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 27
            echo "  <h4";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h4>
";
        }
        // line 29
        echo "
<div class=\"container-inline\">
  ";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color"]) ? $context["color"] : null), "html", null, true));
        echo "
  ";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["opacity"]) ? $context["opacity"] : null), "html", null, true));
        echo "
</div>

";
        // line 35
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 36
            echo "  <div>
    ";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true));
            echo "
  </div>
";
        }
        // line 40
        echo "
";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/color_field/templates/color-field-widget-box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 41,  85 => 40,  79 => 37,  76 => 36,  74 => 35,  68 => 32,  64 => 31,  60 => 29,  52 => 27,  50 => 26,  47 => 25,  45 => 22,  44 => 21,  43 => 20,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation of a color box form wrapper.
 *
 * Available variables:
 * - content: The form element to be output, usually a datelist, or datetime.
 * - title: The title of the form element.
 * - title_attributes: HTML attributes for the title wrapper.
 * - description: Description text for the form element.
 * - required: An indicator for whether the associated form element is required.
 *
 * @see template_preprocess()
 * @see template_preprocess_color_field_widget_box()
 *
 * @ingroup themeable
 */
#}
{%
set title_classes = [
required ? 'js-form-required',
required ? 'form-required',
]
%}

{% if title %}
  <h4{{ title_attributes.addClass(title_classes) }}>{{ title }}</h4>
{% endif %}

<div class=\"container-inline\">
  {{ color }}
  {{ opacity }}
</div>

{% if errors %}
  <div>
    {{ errors }}
  </div>
{% endif %}

{{ description }}
";
    }
}
