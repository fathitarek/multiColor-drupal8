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

/* themes/custom/multicolor/templates/partials/header.html.twig */
class __TwigTemplate_8df68d67a77a2e0d05d1f152aaa16d48612ca61f2ad080b99386352f828a5099 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 7];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<header id=\"header\">      
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 overflow\">
                   <div class=\"social-icons pull-right\">
                        <ul class=\"nav nav-pills\">
                            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "facebook", [], "array")), "html", null, true);
        echo "\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "twitter", [], "array")), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "google", [], "array")), "html", null, true);
        echo "\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "dribbble", [], "array")), "html", null, true);
        echo "\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "linked", [], "array")), "html", null, true);
        echo "\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class=\"navbar navbar-inverse\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>

                    <a class=\"navbar-brand\" href=\"#\">
                        <h1><img src=\"images/logo.png\" alt=\"logo\"></h1>
                    </a>
                    
                </div>
                <div class=\"collapse navbar-collapse\">
                ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
                </div>
                <div class=\"search\">
                    ";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
        echo "
                    <!--<form role=\"form\" action=\"/eve/search/node\" method=\"get\" id=\"search-block-form\" accept-charset=\"UTF-8\" class=\"search-form search-block-form\" data-drupal-form-fields=\"edit-keys\">
                        <i class=\"fa fa-search\"></i>
                        <div class=\"field-toggle\">
                            <input type=\"text\" class=\"search-form\" name=\"keys\" autocomplete=\"off\" placeholder=\"Search\"> -->

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->
";
    }

    public function getTemplateName()
    {
        return "themes/custom/multicolor/templates/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  104 => 33,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  63 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\">      
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 overflow\">
                   <div class=\"social-icons pull-right\">
                        <ul class=\"nav nav-pills\">
                            <li><a href=\"{{crmSettings['facebook']}}\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"{{crmSettings['twitter']}}\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"{{crmSettings['google']}}\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"{{crmSettings['dribbble']}}\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li><a href=\"{{crmSettings['linked']}}\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class=\"navbar navbar-inverse\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>

                    <a class=\"navbar-brand\" href=\"#\">
                        <h1><img src=\"images/logo.png\" alt=\"logo\"></h1>
                    </a>
                    
                </div>
                <div class=\"collapse navbar-collapse\">
                {{ page.header }}
                </div>
                <div class=\"search\">
                    {{ page.search }}
                    <!--<form role=\"form\" action=\"/eve/search/node\" method=\"get\" id=\"search-block-form\" accept-charset=\"UTF-8\" class=\"search-form search-block-form\" data-drupal-form-fields=\"edit-keys\">
                        <i class=\"fa fa-search\"></i>
                        <div class=\"field-toggle\">
                            <input type=\"text\" class=\"search-form\" name=\"keys\" autocomplete=\"off\" placeholder=\"Search\"> -->

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->
", "themes/custom/multicolor/templates/partials/header.html.twig", "C:\\xampp\\htdocs\\eve\\themes\\custom\\multicolor\\templates\\partials\\header.html.twig");
    }
}
