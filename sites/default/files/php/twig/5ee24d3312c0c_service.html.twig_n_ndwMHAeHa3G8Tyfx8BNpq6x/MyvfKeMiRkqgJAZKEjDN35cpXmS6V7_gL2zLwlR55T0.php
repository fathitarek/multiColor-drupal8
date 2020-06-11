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

/* modules/custom/integration/templates/service.html.twig */
class __TwigTemplate_f4ee99a3b735ae504a1e7c686552a0d8dbc0c7cff7c8b0ae3e8944ff3f362ab2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 33];
        $filters = ["escape" => 7, "raw" => 23];
        $functions = ["drupal_view" => 116];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'raw'],
                ['drupal_view']
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
        echo "<section id=\"page-breadcrumb\">
        <div class=\"vertical-center sun\">
             <div class=\"container\">
                <div class=\"row\">
                    <div class=\"action\">
                        <div class=\"col-sm-12\">
                            <h1 class=\"title\">";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["service_config"] ?? null), "title", [], "array")), "html", null, true);
        echo "</h1>
                            <p>";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["service_config"] ?? null), "slogan", [], "array")), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id=\"company-information\" class=\"choose\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"0ms\">
                    <img src=\"";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["service_image"] ?? null)), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                </div>
               ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["service_config"] ?? null), "desc", [], "array")));
        echo "
                </div>
            </div>
        </div>
    </section>
    <!--/#company-information-->

    <section id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
             ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "                <div class=\"col-sm-4 text-center padding wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                   
                    <div class=\"single-service\">
                        <div class=\"wow scaleIn\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                            <img src=\"";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "img", [])), "html", null, true);
            echo "\" alt=\"\">
                        </div>
                        <h2>";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
            echo "</h2>
                        <p>";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "field_service_description_value", [])), "html", null, true);
            echo "</p>
                    </div>
                </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                
           
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id=\"action\" class=\"responsive\">
        <div class=\"vertical-center\">
             <div class=\"container\">
                <div class=\"row\">
                    <div class=\"action take-tour\">
                        <div class=\"col-sm-7 wow fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                            <h1 class=\"title\">";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tour"] ?? null), "title", [], "array")), "html", null, true);
        echo "</h1>
                            <p>";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tour"] ?? null), "desc", [], "array")), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-sm-5 text-center wow fadeInRight\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                            <div class=\"tour-button\">
                                <a href=\"";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tour"] ?? null), "btn_link", [], "array")), "html", null, true);
        echo "\" class=\"btn btn-common\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tour"] ?? null), "btn", [], "array")), "html", null, true);
        echo "</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

    <section id=\"recent-projects\" class=\"recent-projects\">
        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"title text-center wow fadeInDown\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">Recent Projects</h1>
                <p class=\"text-center padding-bottom wow fadeInDown\" data-wow-duration=\"400ms\" data-wow-delay=\"400ms\">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                Ut enim ad minim veniam, quis nostrud </p>
              ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 80
            echo "                <div class=\"col-sm-3 col-xs-6 wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                    <div class=\"portfolio-wrapper\">   
                        <div class=\"portfolio-single\">
                            <div class=\"portfolio-thumb\">
                                <img src=\"";
            // line 84
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "img", [])), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\">
                            </div>
                            <div class=\"portfolio-view\">
                                <ul class=\"nav nav-pills\">
                                    <li><a href=\"";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "img", [])), "html", null, true);
            echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-eye\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"portfolio-info\">
                            <h2>";
            // line 93
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
            echo "</h2>
                        </div>
                    </div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "            </div>
        </div>
    </section>
    <!--/#recent-projects-->

    <section id=\"clients\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"clients text-center wow fadeInUp\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <p><img src=\"images/home/clients.png\" class=\"img-responsive\" alt=\"\"></p>
                        <h1 class=\"title\">Happy Clients</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class=\"clients-logo wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        
                        
                         
    ";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("happy_clients", "block_1"), "html", null, true);
        echo "
 

                    </div>
                </div>
            </div>
        </div>
     </section>
   ";
    }

    public function getTemplateName()
    {
        return "modules/custom/integration/templates/service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 116,  213 => 98,  202 => 93,  194 => 88,  187 => 84,  181 => 80,  177 => 79,  156 => 63,  149 => 59,  145 => 58,  130 => 45,  120 => 41,  116 => 40,  111 => 38,  105 => 34,  101 => 33,  88 => 23,  83 => 21,  67 => 8,  63 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"page-breadcrumb\">
        <div class=\"vertical-center sun\">
             <div class=\"container\">
                <div class=\"row\">
                    <div class=\"action\">
                        <div class=\"col-sm-12\">
                            <h1 class=\"title\">{{service_config['title']}}</h1>
                            <p>{{service_config['slogan']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id=\"company-information\" class=\"choose\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"0ms\">
                    <img src=\"{{service_image}}\" class=\"img-responsive\" alt=\"\">
                </div>
               {{service_config['desc'] |raw }}
                </div>
            </div>
        </div>
    </section>
    <!--/#company-information-->

    <section id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
             {% for  item in services %}
                <div class=\"col-sm-4 text-center padding wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                   
                    <div class=\"single-service\">
                        <div class=\"wow scaleIn\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                            <img src=\"{{item.img}}\" alt=\"\">
                        </div>
                        <h2>{{item.title}}</h2>
                        <p>{{item.field_service_description_value}}</p>
                    </div>
                </div>
                    {% endfor %}
                
           
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id=\"action\" class=\"responsive\">
        <div class=\"vertical-center\">
             <div class=\"container\">
                <div class=\"row\">
                    <div class=\"action take-tour\">
                        <div class=\"col-sm-7 wow fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                            <h1 class=\"title\">{{tour['title']}}</h1>
                            <p>{{tour['desc']}}</p>
                        </div>
                        <div class=\"col-sm-5 text-center wow fadeInRight\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                            <div class=\"tour-button\">
                                <a href=\"{{tour['btn_link']}}\" class=\"btn btn-common\">{{tour['btn']}}</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

    <section id=\"recent-projects\" class=\"recent-projects\">
        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"title text-center wow fadeInDown\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">Recent Projects</h1>
                <p class=\"text-center padding-bottom wow fadeInDown\" data-wow-duration=\"400ms\" data-wow-delay=\"400ms\">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                Ut enim ad minim veniam, quis nostrud </p>
              {% for  item in projects %}
                <div class=\"col-sm-3 col-xs-6 wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                    <div class=\"portfolio-wrapper\">   
                        <div class=\"portfolio-single\">
                            <div class=\"portfolio-thumb\">
                                <img src=\"{{item.img}}\" class=\"img-responsive\" alt=\"\">
                            </div>
                            <div class=\"portfolio-view\">
                                <ul class=\"nav nav-pills\">
                                    <li><a href=\"{{item.img}}\" data-lightbox=\"example-set\"><i class=\"fa fa-eye\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"portfolio-info\">
                            <h2>{{item.title}}</h2>
                        </div>
                    </div>
                </div>
              {% endfor %}
            </div>
        </div>
    </section>
    <!--/#recent-projects-->

    <section id=\"clients\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"clients text-center wow fadeInUp\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <p><img src=\"images/home/clients.png\" class=\"img-responsive\" alt=\"\"></p>
                        <h1 class=\"title\">Happy Clients</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class=\"clients-logo wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        
                        
                         
    {{ drupal_view('happy_clients', 'block_1') }}
 

                    </div>
                </div>
            </div>
        </div>
     </section>
   ", "modules/custom/integration/templates/service.html.twig", "C:\\xampp\\htdocs\\multiColor-drupal8\\modules\\custom\\integration\\templates\\service.html.twig");
    }
}
