<?php

/* modules/color_field/templates/color-field-formatter-swatch.html.twig */
class __TwigTemplate_33ed3c7ed4a429274daa0a095e81e20495bbca968ea58eb5a311689e0dac23ea extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 18
        echo "
<div class='color_field__swatch--";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["shape"]) ? $context["shape"] : null), "html", null, true));
        echo "' style=\"background-color: ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color"]) ? $context["color"] : null), "html", null, true));
        echo "; width: ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true));
        echo "px; height: ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true));
        echo "px;\"></div>
";
    }

    public function getTemplateName()
    {
        return "modules/color_field/templates/color-field-formatter-swatch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 19,  43 => 18,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation of a color swatch formatter.
 *
 * Available variables:
 * - color: The color background.
 * - width: The width of the color swatch.
 * - height: The height of the color swatch.
 * - shape: The shape of the color swatch.
 *
 * @see template_preprocess()
 * @see template_preprocess_color_field_formatter_swatch()
 *
 * @ingroup themeable
 */
#}

<div class='color_field__swatch--{{ shape }}' style=\"background-color: {{ color }}; width: {{ width }}px; height: {{ height }}px;\"></div>
";
    }
}
