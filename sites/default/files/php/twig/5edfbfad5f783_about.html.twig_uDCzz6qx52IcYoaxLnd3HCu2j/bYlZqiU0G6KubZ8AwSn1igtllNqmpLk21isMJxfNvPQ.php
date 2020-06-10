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

/* modules/custom/integration/templates/about.html.twig */
class __TwigTemplate_6fdd8713ca37ac81a20f55dceee105ac08142eaf43c256d2b70c64a4ce0dfeaf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 69, "if" => 70];
        $filters = ["escape" => 7, "raw" => 24];
        $functions = ["drupal_view" => 30];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
        echo " <section id=\"page-breadcrumb\">
        <div class=\"vertical-center sun\">
             <div class=\"container\">
                <div class=\"row\">
                    <div class=\"action\">
                        <div class=\"col-sm-12\">
                          <h1 class=\"title\">";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["about_config"] ?? null), "title", [], "array")), "html", null, true);
        echo "</h1>
                            <p>";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["about_config"] ?? null), "slogan", [], "array")), "html", null, true);
        echo "</p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id=\"company-information\" class=\"padding wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <img src=\"";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["about_image"] ?? null)), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                </div>
                <div class=\"col-sm-6 padding-top\">
                    <p>";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["about_config"] ?? null), "desc", [], "array")));
        echo "</p>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("service_block_home", "block_1"), "html", null, true);
        echo "
  

    <section id=\"action\" class=\"responsive\">
        <div class=\"vertical-center\">
             <div class=\"container\">
                <div class=\"row\">
                    <div class=\"action take-tour\">
                        <div class=\"col-sm-7 wow fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                            <h1 class=\"title\">";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tour"] ?? null), "title", [], "array")), "html", null, true);
        echo "</h1>
                            <p>";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tour"] ?? null), "desc", [], "array")), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-sm-5 text-center wow fadeInRight\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                            <div class=\"tour-button\">
                                <a href=\"http://localhost/eve/";
        // line 44
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

    <section id=\"team\">
        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"title text-center wow fadeInDown\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">Meet the Team</h1>
                <p class=\"text-center wow fadeInDown\" data-wow-duration=\"400ms\" data-wow-delay=\"400ms\">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                Ut enim ad minim veniam, quis nostrud </p>
                <div id=\"team-carousel\" class=\"carousel slide wow fadeIn\" data-ride=\"carousel\" data-wow-duration=\"400ms\" data-wow-delay=\"400ms\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators visible-xs\">
                        <li data-target=\"#team-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#team-carousel\" data-slide-to=\"1\"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\">
                        <div class=\"item active\">
                        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teams"] ?? null));
        foreach ($context['_seq'] as $context["row"] => $context["item"]) {
            // line 70
            echo "                      ";
            if (($context["row"] <= 3)) {
                // line 71
                echo "                      
                            <div class=\"col-sm-3 col-xs-6\">
                                <div class=\"team-single-wrapper\">
                                    <div class=\"team-single\">
                                        <div class=\"person-thumb\">
                                            <img src=\"";
                // line 76
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "img", [])), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"\">
                                        </div>
                                        <div class=\"social-profile\">
                                            <ul class=\"nav nav-pills\">
                                                <li><a href=\"";
                // line 80
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "field_facebook_link_uri", [])), "html", null, true);
                echo "\"><i class=\"fa fa-facebook\"></i></a></li>
                                                <li><a href=\"";
                // line 81
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "field_twitter_link_uri", [])), "html", null, true);
                echo "\"><i class=\"fa fa-twitter\"></i></a></li>
                                                <li><a href=\"";
                // line 82
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "field_google_link_uri", [])), "html", null, true);
                echo "\"><i class=\"fa fa-google-plus\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"person-info\">
                                        <h2>";
                // line 87
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                echo "</h2>
                                        <p>";
                // line 88
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "field_job_title_value", [])), "html", null, true);
                echo "</p>
                                    </div>
                                </div>
                            </div>
                            
                            ";
            }
            // line 94
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['row'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                        </div>

                        <div class=\"item\">
                          ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teams"] ?? null));
        foreach ($context['_seq'] as $context["row"] => $context["item"]) {
            // line 99
            echo "                      ";
            if (($context["row"] > 3)) {
                // line 100
                echo "                            
                            <div class=\"col-sm-3 col-xs-6\">
                                <div class=\"team-single-wrapper\">
                                    <div class=\"team-single\">
                                        <div class=\"person-thumb\">
                                            <img src=\"";
                // line 105
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "img", [])), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"\">
                                        </div>
                                       <div class=\"social-profile\">
                                            <ul class=\"nav nav-pills\">
                                                <li><a href=\"";
                // line 109
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "field_facebook_link_uri", [])), "html", null, true);
                echo "\"><i class=\"fa fa-facebook\"></i></a></li>
                                                <li><a href=\"";
                // line 110
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "field_twitter_link_uri", [])), "html", null, true);
                echo "\"><i class=\"fa fa-twitter\"></i></a></li>
                                                <li><a href=\"";
                // line 111
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "field_google_link_uri", [])), "html", null, true);
                echo "\"><i class=\"fa fa-google-plus\"></i></a></li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                    <div class=\"person-info\">
                                        <h2>";
                // line 117
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                echo "</h2>
                                        <p>";
                // line 118
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "field_job_title_value", [])), "html", null, true);
                echo "</p>
                                    </div>
                                </div>
                            </div>
                           
                       
                            ";
            }
            // line 125
            echo "                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['row'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
                </div>
                    </div>

                    <!-- Controls -->
                    <a class=\"left team-carousel-control hidden-xs\" href=\"#team-carousel\" data-slide=\"prev\">left</a>
                    <a class=\"right team-carousel-control hidden-xs\" href=\"#team-carousel\" data-slide=\"next\">right</a>
                </div>
            </div>
        </div>
    </section>
    <!--/#team-->
";
    }

    public function getTemplateName()
    {
        return "modules/custom/integration/templates/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 126,  264 => 125,  254 => 118,  250 => 117,  241 => 111,  237 => 110,  233 => 109,  226 => 105,  219 => 100,  216 => 99,  212 => 98,  207 => 95,  201 => 94,  192 => 88,  188 => 87,  180 => 82,  176 => 81,  172 => 80,  165 => 76,  158 => 71,  155 => 70,  151 => 69,  121 => 44,  114 => 40,  110 => 39,  98 => 30,  89 => 24,  83 => 21,  67 => 8,  63 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source(" <section id=\"page-breadcrumb\">
        <div class=\"vertical-center sun\">
             <div class=\"container\">
                <div class=\"row\">
                    <div class=\"action\">
                        <div class=\"col-sm-12\">
                          <h1 class=\"title\">{{about_config['title']}}</h1>
                            <p>{{about_config['slogan']}}</p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id=\"company-information\" class=\"padding wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <img src=\"{{about_image}}\" class=\"img-responsive\" alt=\"\">
                </div>
                <div class=\"col-sm-6 padding-top\">
                    <p>{{about_config['desc'] |raw }}</p>
                </div>
            </div>
        </div>
    </section>

    {{ drupal_view('service_block_home', 'block_1') }}
  

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
                                <a href=\"http://localhost/eve/{{tour['btn_link']}}\" class=\"btn btn-common\">{{tour['btn']}}</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

    <section id=\"team\">
        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"title text-center wow fadeInDown\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">Meet the Team</h1>
                <p class=\"text-center wow fadeInDown\" data-wow-duration=\"400ms\" data-wow-delay=\"400ms\">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                Ut enim ad minim veniam, quis nostrud </p>
                <div id=\"team-carousel\" class=\"carousel slide wow fadeIn\" data-ride=\"carousel\" data-wow-duration=\"400ms\" data-wow-delay=\"400ms\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators visible-xs\">
                        <li data-target=\"#team-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#team-carousel\" data-slide-to=\"1\"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\">
                        <div class=\"item active\">
                        {% for  row,item in teams %}
                      {% if row <=3 %}
                      
                            <div class=\"col-sm-3 col-xs-6\">
                                <div class=\"team-single-wrapper\">
                                    <div class=\"team-single\">
                                        <div class=\"person-thumb\">
                                            <img src=\"{{item.img}}\" class=\"img-responsive\" alt=\"\">
                                        </div>
                                        <div class=\"social-profile\">
                                            <ul class=\"nav nav-pills\">
                                                <li><a href=\"{{item.field_facebook_link_uri}}\"><i class=\"fa fa-facebook\"></i></a></li>
                                                <li><a href=\"{{item.field_twitter_link_uri}}\"><i class=\"fa fa-twitter\"></i></a></li>
                                                <li><a href=\"{{item.field_google_link_uri}}\"><i class=\"fa fa-google-plus\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"person-info\">
                                        <h2>{{item.title}}</h2>
                                        <p>{{item.field_job_title_value}}</p>
                                    </div>
                                </div>
                            </div>
                            
                            {% endif %}
                            {% endfor %}
                        </div>

                        <div class=\"item\">
                          {% for  row,item in teams %}
                      {% if row >3 %}
                            
                            <div class=\"col-sm-3 col-xs-6\">
                                <div class=\"team-single-wrapper\">
                                    <div class=\"team-single\">
                                        <div class=\"person-thumb\">
                                            <img src=\"{{item.img}}\" class=\"img-responsive\" alt=\"\">
                                        </div>
                                       <div class=\"social-profile\">
                                            <ul class=\"nav nav-pills\">
                                                <li><a href=\"{{item.field_facebook_link_uri}}\"><i class=\"fa fa-facebook\"></i></a></li>
                                                <li><a href=\"{{item.field_twitter_link_uri}}\"><i class=\"fa fa-twitter\"></i></a></li>
                                                <li><a href=\"{{item.field_google_link_uri}}\"><i class=\"fa fa-google-plus\"></i></a></li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                    <div class=\"person-info\">
                                        <h2>{{item.title}}</h2>
                                        <p>{{item.field_job_title_value}}</p>
                                    </div>
                                </div>
                            </div>
                           
                       
                            {% endif %}
                             {% endfor %}

                </div>
                    </div>

                    <!-- Controls -->
                    <a class=\"left team-carousel-control hidden-xs\" href=\"#team-carousel\" data-slide=\"prev\">left</a>
                    <a class=\"right team-carousel-control hidden-xs\" href=\"#team-carousel\" data-slide=\"next\">right</a>
                </div>
            </div>
        </div>
    </section>
    <!--/#team-->
", "modules/custom/integration/templates/about.html.twig", "C:\\xampp\\htdocs\\eve\\modules\\custom\\integration\\templates\\about.html.twig");
    }
}
