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

/* themes/custom/multicolor/templates/content/features/block/views-view-fields--features--block-1.html.twig */
class __TwigTemplate_f690f534bff235a51b17a58041634500bed653b80beb86d50b26651b0cae7f57 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 6];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "   <div class=\"single-features\">
                    <div class=\"col-sm-5 wow fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_features_image", []), "content", [])), "html", null, true);
        echo "
                       
                    </div>
                    ";
        // line 6
        if ((($context["key"] ?? null) == 1)) {
            // line 7
            echo "                    <div class=\"col-sm-6 wow  fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
";
        } else {
            // line 9
            echo "                     <div class=\"col-sm-6 wow fadeInRight\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                     ";
        }
        // line 11
        echo "                        <h2>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", []), "content", [])), "html", null, true);
        echo "</h2>
                        <P>";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_features_description", []), "content", [])), "html", null, true);
        echo "</P>
                    </div>
                </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/multicolor/templates/content/features/block/views-view-fields--features--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 12,  75 => 11,  71 => 9,  67 => 7,  65 => 6,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("   <div class=\"single-features\">
                    <div class=\"col-sm-5 wow fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        {{fields.field_features_image.content}}
                       
                    </div>
                    {% if key == 1 %}
                    <div class=\"col-sm-6 wow  fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
{%else %}
                     <div class=\"col-sm-6 wow fadeInRight\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                     {%endif %}
                        <h2>{{fields.title.content}}</h2>
                        <P>{{fields.field_features_description.content}}</P>
                    </div>
                </div>
", "themes/custom/multicolor/templates/content/features/block/views-view-fields--features--block-1.html.twig", "C:\\xampp\\htdocs\\multiColor-drupal8\\themes\\custom\\multicolor\\templates\\content\\features\\block\\views-view-fields--features--block-1.html.twig");
    }
}
