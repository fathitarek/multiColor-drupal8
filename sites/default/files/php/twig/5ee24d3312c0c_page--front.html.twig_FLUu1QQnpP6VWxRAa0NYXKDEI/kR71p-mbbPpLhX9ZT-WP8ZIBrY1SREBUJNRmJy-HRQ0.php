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

/* themes/custom/multicolor/templates/system/page--front.html.twig */
class __TwigTemplate_65b032f8cb9bf8e2e41465ee5e6bab8e00d48993190d21df6367dc2534176fa5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 23];
        $filters = ["escape" => 31];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Home | Triangle</title>
   

    <!--[if lt IE 9]>
\t    <script src=\"js/html5shiv.js\"></script>
\t    <script src=\"js/respond.min.js\"></script>
    <![endif]-->       
    <link rel=\"shortcut icon\" href=\"images/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"images/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"images/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"images/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"images/ico/apple-touch-icon-57-precomposed.png\">
</head><!--/head-->

<body>
\t";
        // line 23
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/partials/header.html.twig"), "themes/custom/multicolor/templates/system/page--front.html.twig", 23)->display($context);
        // line 24
        echo "    <!--/#header-->

     <section id=\"home-slider\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"main-slider\">
                    <div class=\"slide-text\">
                        <h1>";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["slider_config"] ?? null), "title", [], "array")), "html", null, true);
        echo "</h1>
                        <p>";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["slider_config"] ?? null), "desc", [], "array")), "html", null, true);
        echo "</p>
                        <a href=\"";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["slider_config"] ?? null), "btn_link", [], "array")), "html", null, true);
        echo "\" class=\"btn btn-common\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["slider_config"] ?? null), "btn_text", [], "array")), "html", null, true);
        echo "</a>
                    </div>
                    <img src=\"";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_image1"] ?? null)), "html", null, true);
        echo "\" class=\"slider-hill\" alt=\"slider image\">
                    <img src=\"";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_image2"] ?? null)), "html", null, true);
        echo "\" class=\"slider-house\" alt=\"slider image\">
                    <img src=\"";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_image3"] ?? null)), "html", null, true);
        echo "\" class=\"slider-sun\" alt=\"slider image\">
                    <img src=\"";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_image4"] ?? null)), "html", null, true);
        echo "\" class=\"slider-birds1\" alt=\"slider image\">
                    <img src=\"";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_image5"] ?? null)), "html", null, true);
        echo "\" class=\"slider-birds2\" alt=\"slider image\">
                </div>
            </div>
        </div>
        <!-- <div class=\"preloader\"><i class=\"fa fa-sun-o fa-spin\"></i></div> -->
    </section> 
    <!--/#home-slider-->

";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_service", [])), "html", null, true);
        echo "
    <!-- <section id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4 text-center padding wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                    <div class=\"single-service\">
                        <div class=\"wow scaleIn\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                            <img src=\"images/home/icon1.png\" alt=\"\">
                        </div>
                        <h2>Incredibly Responsive</h2>
                        <p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine. Cow shankle beef sirloin chicken ground round.</p>
                    </div>
                </div>
                <div class=\"col-sm-4 text-center padding wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                    <div class=\"single-service\">
                        <div class=\"wow scaleIn\" data-wow-duration=\"500ms\" data-wow-delay=\"600ms\">
                            <img src=\"images/home/icon2.png\" alt=\"\">
                        </div>
                        <h2>Superior Typography</h2>
                        <p>Hamburger ribeye drumstick turkey, strip steak sausage ground round shank pastrami beef brisket pancetta venison.</p>
                    </div>
                </div>
                <div class=\"col-sm-4 text-center padding wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\">
                    <div class=\"single-service\">
                        <div class=\"wow scaleIn\" data-wow-duration=\"500ms\" data-wow-delay=\"900ms\">
                            <img src=\"images/home/icon3.png\" alt=\"\">
                        </div>
                        <h2>Swift Page Builder</h2>
                        <p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola tenderloin bone pork kevin shankle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--/#services-->

    <section id=\"action\" class=\"responsive\">
        <div class=\"vertical-center\">
             <div class=\"container\">
                <div class=\"row\">
                    <div class=\"action take-tour\">
                        <div class=\"col-sm-7 wow fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                            <h1 class=\"title\">";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tour"] ?? null), "title", [], "array")), "html", null, true);
        echo "</h1>
                            <p>";
        // line 90
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tour"] ?? null), "desc", [], "array")), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-sm-5 text-center wow fadeInRight\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                            <div class=\"tour-button\">
                                <a href=\"";
        // line 94
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
";
        // line 103
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features", [])), "html", null, true);
        echo "
    <!-- <section id=\"features\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"single-features\">
                    <div class=\"col-sm-5 wow fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <img src=\"images/home/image1.png\" class=\"img-responsive\" alt=\"\">
                    </div>
                    <div class=\"col-sm-6 wow fadeInRight\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <h2>Experienced and Enthusiastic</h2>
                        <P>Pork belly leberkas cow short ribs capicola pork loin. Doner fatback frankfurter jerky meatball pastrami bacon tail sausage. Turkey fatback ball tip, tri-tip tenderloin drumstick salami strip steak.</P>
                    </div>
                </div>
                <div class=\"single-features\">
                    <div class=\"col-sm-6 col-sm-offset-1 align-right wow fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <h2>Built for the Responsive Web</h2>
                        <P>Mollit eiusmod id chuck turducken laboris meatloaf pork loin tenderloin swine. Pancetta excepteur fugiat strip steak tri-tip. Swine salami eiusmod sint, ex id venison non. Fugiat ea jowl cillum meatloaf.</P>
                    </div>
                    <div class=\"col-sm-5 wow fadeInRight\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <img src=\"images/home/image2.png\" class=\"img-responsive\" alt=\"\">
                    </div>
                </div>
                <div class=\"single-features\">
                    <div class=\"col-sm-5 wow fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <img src=\"images/home/image3.png\" class=\"img-responsive\" alt=\"\">
                    </div>
                    <div class=\"col-sm-6 wow fadeInRight\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <h2>Experienced and Enthusiastic</h2>
                        <P>Ut officia cupidatat anim excepteur fugiat cillum ea occaecat rump pork chop tempor. Ut tenderloin veniam commodo. Shankle aliquip short ribs, chicken eiusmod exercitation shank landjaeger spare ribs corned beef.</P>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
     <!--/#features-->

     <section id=\"clients\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"clients text-center wow fadeInUp\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <p><img src=\"images/home/clients.png\" class=\"img-responsive\" alt=\"\"></p>
                        <h1 class=\"title\">Happy Clients</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
";
        // line 148
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "happy_clients", [])), "html", null, true);
        echo "
                    </div>
            </div>
        </div>
     </section>

    <!-- <section id=\"clients\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"clients text-center wow fadeInUp\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <p><img src=\"images/home/clients.png\" class=\"img-responsive\" alt=\"\"></p>
                        <h1 class=\"title\">Happy Clients</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class=\"clients-logo wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"col-xs-3 col-sm-2\">
                            <a href=\"#\"><img src=\"images/home/client1.png\" class=\"img-responsive\" alt=\"\"></a>
                        </div>
                        <div class=\"col-xs-3 col-sm-2\">
                            <a href=\"#\"><img src=\"images/home/client2.png\" class=\"img-responsive\" alt=\"\"></a>
                        </div>
                         <div class=\"col-xs-3 col-sm-2\">
                            <a href=\"#\"><img src=\"images/home/client3.png\" class=\"img-responsive\" alt=\"\"></a>
                        </div>
                         <div class=\"col-xs-3 col-sm-2\">
                            <a href=\"#\"><img src=\"images/home/client4.png\" class=\"img-responsive\" alt=\"\"></a>
                        </div>
                         <div class=\"col-xs-3 col-sm-2\">
                            <a href=\"#\"><img src=\"images/home/client5.png\" class=\"img-responsive\" alt=\"\"></a>
                        </div>
                         <div class=\"col-xs-3 col-sm-2\">
                            <a href=\"#\"><img src=\"images/home/client6.png\" class=\"img-responsive\" alt=\"\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section> -->
    <!--/#clients-->

    ";
        // line 189
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/partials/footer.html.twig"), "themes/custom/multicolor/templates/system/page--front.html.twig", 189)->display($context);
        // line 190
        echo "
    <!--/#footer-->

    
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/multicolor/templates/system/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 190,  294 => 189,  250 => 148,  202 => 103,  188 => 94,  181 => 90,  177 => 89,  132 => 47,  121 => 39,  117 => 38,  113 => 37,  109 => 36,  105 => 35,  98 => 33,  94 => 32,  90 => 31,  81 => 24,  79 => 23,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Home | Triangle</title>
   

    <!--[if lt IE 9]>
\t    <script src=\"js/html5shiv.js\"></script>
\t    <script src=\"js/respond.min.js\"></script>
    <![endif]-->       
    <link rel=\"shortcut icon\" href=\"images/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"images/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"images/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"images/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"images/ico/apple-touch-icon-57-precomposed.png\">
</head><!--/head-->

<body>
\t{% include directory ~ '/templates/partials/header.html.twig' %}
    <!--/#header-->

     <section id=\"home-slider\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"main-slider\">
                    <div class=\"slide-text\">
                        <h1>{{slider_config['title']}}</h1>
                        <p>{{slider_config['desc']}}</p>
                        <a href=\"{{slider_config['btn_link']}}\" class=\"btn btn-common\">{{slider_config['btn_text']}}</a>
                    </div>
                    <img src=\"{{slider_image1}}\" class=\"slider-hill\" alt=\"slider image\">
                    <img src=\"{{slider_image2}}\" class=\"slider-house\" alt=\"slider image\">
                    <img src=\"{{slider_image3}}\" class=\"slider-sun\" alt=\"slider image\">
                    <img src=\"{{slider_image4}}\" class=\"slider-birds1\" alt=\"slider image\">
                    <img src=\"{{slider_image5}}\" class=\"slider-birds2\" alt=\"slider image\">
                </div>
            </div>
        </div>
        <!-- <div class=\"preloader\"><i class=\"fa fa-sun-o fa-spin\"></i></div> -->
    </section> 
    <!--/#home-slider-->

{{ page.main_service }}
    <!-- <section id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4 text-center padding wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                    <div class=\"single-service\">
                        <div class=\"wow scaleIn\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                            <img src=\"images/home/icon1.png\" alt=\"\">
                        </div>
                        <h2>Incredibly Responsive</h2>
                        <p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine. Cow shankle beef sirloin chicken ground round.</p>
                    </div>
                </div>
                <div class=\"col-sm-4 text-center padding wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                    <div class=\"single-service\">
                        <div class=\"wow scaleIn\" data-wow-duration=\"500ms\" data-wow-delay=\"600ms\">
                            <img src=\"images/home/icon2.png\" alt=\"\">
                        </div>
                        <h2>Superior Typography</h2>
                        <p>Hamburger ribeye drumstick turkey, strip steak sausage ground round shank pastrami beef brisket pancetta venison.</p>
                    </div>
                </div>
                <div class=\"col-sm-4 text-center padding wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\">
                    <div class=\"single-service\">
                        <div class=\"wow scaleIn\" data-wow-duration=\"500ms\" data-wow-delay=\"900ms\">
                            <img src=\"images/home/icon3.png\" alt=\"\">
                        </div>
                        <h2>Swift Page Builder</h2>
                        <p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola tenderloin bone pork kevin shankle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
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
{{page.features}}
    <!-- <section id=\"features\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"single-features\">
                    <div class=\"col-sm-5 wow fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <img src=\"images/home/image1.png\" class=\"img-responsive\" alt=\"\">
                    </div>
                    <div class=\"col-sm-6 wow fadeInRight\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <h2>Experienced and Enthusiastic</h2>
                        <P>Pork belly leberkas cow short ribs capicola pork loin. Doner fatback frankfurter jerky meatball pastrami bacon tail sausage. Turkey fatback ball tip, tri-tip tenderloin drumstick salami strip steak.</P>
                    </div>
                </div>
                <div class=\"single-features\">
                    <div class=\"col-sm-6 col-sm-offset-1 align-right wow fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <h2>Built for the Responsive Web</h2>
                        <P>Mollit eiusmod id chuck turducken laboris meatloaf pork loin tenderloin swine. Pancetta excepteur fugiat strip steak tri-tip. Swine salami eiusmod sint, ex id venison non. Fugiat ea jowl cillum meatloaf.</P>
                    </div>
                    <div class=\"col-sm-5 wow fadeInRight\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <img src=\"images/home/image2.png\" class=\"img-responsive\" alt=\"\">
                    </div>
                </div>
                <div class=\"single-features\">
                    <div class=\"col-sm-5 wow fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <img src=\"images/home/image3.png\" class=\"img-responsive\" alt=\"\">
                    </div>
                    <div class=\"col-sm-6 wow fadeInRight\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <h2>Experienced and Enthusiastic</h2>
                        <P>Ut officia cupidatat anim excepteur fugiat cillum ea occaecat rump pork chop tempor. Ut tenderloin veniam commodo. Shankle aliquip short ribs, chicken eiusmod exercitation shank landjaeger spare ribs corned beef.</P>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
     <!--/#features-->

     <section id=\"clients\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"clients text-center wow fadeInUp\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <p><img src=\"images/home/clients.png\" class=\"img-responsive\" alt=\"\"></p>
                        <h1 class=\"title\">Happy Clients</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
{{page.happy_clients}}
                    </div>
            </div>
        </div>
     </section>

    <!-- <section id=\"clients\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"clients text-center wow fadeInUp\" data-wow-duration=\"500ms\" data-wow-delay=\"300ms\">
                        <p><img src=\"images/home/clients.png\" class=\"img-responsive\" alt=\"\"></p>
                        <h1 class=\"title\">Happy Clients</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class=\"clients-logo wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"col-xs-3 col-sm-2\">
                            <a href=\"#\"><img src=\"images/home/client1.png\" class=\"img-responsive\" alt=\"\"></a>
                        </div>
                        <div class=\"col-xs-3 col-sm-2\">
                            <a href=\"#\"><img src=\"images/home/client2.png\" class=\"img-responsive\" alt=\"\"></a>
                        </div>
                         <div class=\"col-xs-3 col-sm-2\">
                            <a href=\"#\"><img src=\"images/home/client3.png\" class=\"img-responsive\" alt=\"\"></a>
                        </div>
                         <div class=\"col-xs-3 col-sm-2\">
                            <a href=\"#\"><img src=\"images/home/client4.png\" class=\"img-responsive\" alt=\"\"></a>
                        </div>
                         <div class=\"col-xs-3 col-sm-2\">
                            <a href=\"#\"><img src=\"images/home/client5.png\" class=\"img-responsive\" alt=\"\"></a>
                        </div>
                         <div class=\"col-xs-3 col-sm-2\">
                            <a href=\"#\"><img src=\"images/home/client6.png\" class=\"img-responsive\" alt=\"\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section> -->
    <!--/#clients-->

    {% include directory ~ '/templates/partials/footer.html.twig' %}

    <!--/#footer-->

    
</body>
</html>
", "themes/custom/multicolor/templates/system/page--front.html.twig", "C:\\xampp\\htdocs\\multiColor-drupal8\\themes\\custom\\multicolor\\templates\\system\\page--front.html.twig");
    }
}
