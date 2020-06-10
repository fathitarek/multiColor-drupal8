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

/* themes/custom/multicolor/templates/partials/footer.html.twig */
class __TwigTemplate_5cfcbc6290e7b38d28bc6f35e85ef2d182abd060f384849263fc7c1c5f3f0f25 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 14];
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
        echo " <footer id=\"footer\">
    

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 text-center bottom-separator\">
                    <img src=\"images/home/under.png\" class=\"img-responsive inline\" alt=\"\">
                </div>
                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"testimonial bottom\">
                        <h2>Testimonial</h2>
                        <div class=\"media\">
                            <div class=\"pull-left\">
                                <a href=\"#\"><img src=\"";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer1"] ?? null)), "html", null, true);
        echo "\" alt=\"\"></a>
                            </div>
                            <div class=\"media-body\">
                            <blockquote>";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "qoute1", [], "array")), "html", null, true);
        echo "</blockquote>
                                <h3><a href=\"#\">- ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "name1", [], "array")), "html", null, true);
        echo "</a></h3>
                            </div>
                         </div>
                        <div class=\"media\">
                            <div class=\"pull-left\">
                                <a href=\"#\"><img src=\"";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer2"] ?? null)), "html", null, true);
        echo "\" alt=\"\"></a>
                            </div>
                            <div class=\"media-body\">
                                <blockquote>";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "qoute2", [], "array")), "html", null, true);
        echo "</blockquote>
                                <h3><a href=\"\">- ";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "name2", [], "array")), "html", null, true);
        echo "</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"contact-info bottom\">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href=\"mailto:";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "email", [], "array")), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "email", [], "array")), "html", null, true);
        echo "</a> <br> 
                        Phone: ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "phone", [], "array")), "html", null, true);
        echo " <br> 
                        Fax: ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "fax", [], "array")), "html", null, true);
        echo "<br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        ";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "street", [], "array")), "html", null, true);
        echo " <br> 
                        ";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "city", [], "array")), "html", null, true);
        echo " <br> 
                       ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["crmSettings"] ?? null), "country", [], "array")), "html", null, true);
        echo " <br> 
                        </address>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-12\">
                    <div class=\"contact-form bottom\">
                        <h2>Send a message</h2>
                        
                   
                            ";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "con", [])), "html", null, true);
        echo "
                         

                            
      
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <div class=\"copyright-text text-center\">
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target=\"_blank\" href=\"http://www.themeum.com\">Themeum</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->
</body>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/multicolor/templates/partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 54,  136 => 45,  132 => 44,  128 => 43,  120 => 38,  116 => 37,  110 => 36,  98 => 27,  94 => 26,  88 => 23,  80 => 18,  76 => 17,  70 => 14,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source(" <footer id=\"footer\">
    

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 text-center bottom-separator\">
                    <img src=\"images/home/under.png\" class=\"img-responsive inline\" alt=\"\">
                </div>
                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"testimonial bottom\">
                        <h2>Testimonial</h2>
                        <div class=\"media\">
                            <div class=\"pull-left\">
                                <a href=\"#\"><img src=\"{{footer1}}\" alt=\"\"></a>
                            </div>
                            <div class=\"media-body\">
                            <blockquote>{{crmSettings['qoute1']}}</blockquote>
                                <h3><a href=\"#\">- {{crmSettings['name1']}}</a></h3>
                            </div>
                         </div>
                        <div class=\"media\">
                            <div class=\"pull-left\">
                                <a href=\"#\"><img src=\"{{footer2}}\" alt=\"\"></a>
                            </div>
                            <div class=\"media-body\">
                                <blockquote>{{crmSettings['qoute2']}}</blockquote>
                                <h3><a href=\"\">- {{crmSettings['name2']}}</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"contact-info bottom\">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href=\"mailto:{{crmSettings['email']}}\">{{crmSettings['email']}}</a> <br> 
                        Phone: {{crmSettings['phone']}} <br> 
                        Fax: {{crmSettings['fax']}}<br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        {{crmSettings['street']}} <br> 
                        {{crmSettings['city']}} <br> 
                       {{crmSettings['country']}} <br> 
                        </address>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-12\">
                    <div class=\"contact-form bottom\">
                        <h2>Send a message</h2>
                        
                   
                            {{ page.con }}
                         

                            
      
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <div class=\"copyright-text text-center\">
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target=\"_blank\" href=\"http://www.themeum.com\">Themeum</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->
</body>
", "themes/custom/multicolor/templates/partials/footer.html.twig", "C:\\xampp\\htdocs\\eve\\themes\\custom\\multicolor\\templates\\partials\\footer.html.twig");
    }
}
