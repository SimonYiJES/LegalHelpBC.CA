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

/* themes/gavias_uxima/templates/page/header-1.html.twig */
class __TwigTemplate_9c663883eb23593692d7a0ba9d6a6a20d1bfcb0579cc4f88e5752a5c673f922e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3, "set" => 32];
        $filters = ["escape" => 10, "t" => 82];
        $functions = ["gva_theme_setting" => 47];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 't'],
                ['gva_theme_setting']
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
        echo "<header id=\"header\" class=\"header-1\">

  ";
        // line 3
        if ($this->getAttribute(($context["page"] ?? null), "topbar", [])) {
            // line 4
            echo "    <div class=\"topbar\">
      <div class=\"topbar-inner\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"topbar-content-inner clearfix\"> 
                <div class=\"topbar-content\">";
            // line 10
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topbar", [])), "html", null, true);
            echo "</div>
                ";
            // line 11
            if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
                // line 12
                echo "                  <div class=\"gva-search-region search-region\">
                    <span class=\"icon\"><i class=\"gv-icon-52\"></i></span>
                    <div class=\"search-content\">  
                      ";
                // line 15
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
                echo "
                    </div>  
                  </div>
                ";
            }
            // line 19
            echo "                ";
            if ($this->getAttribute(($context["page"] ?? null), "quick_side", [])) {
                // line 20
                echo "                  <div class=\"quick-side-icon d-none d-lg-block d-xl-block\">
                    <div class=\"icon\"><a href=\"#\"><span class=\"qicon gv-icon-103\"></span></a></div>
                  </div>
                ";
            }
            // line 24
            echo "              </div>  
            </div>
          </div>   
        </div>
      </div>
    </div>
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        $context["class_sticky"] = "";
        // line 33
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 34
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 35
            echo "  ";
        }
        echo "  

   <div class=\"header-main ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null)), "html", null, true);
        echo "\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12 content-inner\">
                <div class=\"branding\">
                  ";
        // line 43
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 44
            echo "                    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
                  ";
        }
        // line 45
        echo "  
                </div>
                <div class=\"header-inner clearfix ";
        // line 47
        if ($this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->themeSetting("header_button")) {
            echo "has-button";
        }
        echo "\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                          <div class=\"gva-offcanvas-mobile\">
                            <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                            <div class=\"main-menu-inner\">
                              ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 55
            echo "                                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "
                              ";
        }
        // line 57
        echo "                            </div>

                            ";
        // line 59
        if ($this->getAttribute(($context["page"] ?? null), "quick_menu", [])) {
            // line 60
            echo "                              <div class=\"quick-menu\">
                                <div class=\"icon\"><a><span class=\"fas fa-grip-horizontal\"></span></a></div>
                                <div class=\"content-inner\">
                                  ";
            // line 63
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "quick_menu", [])), "html", null, true);
            echo "
                                </div>  
                              </div>
                            ";
        }
        // line 67
        echo "
                            ";
        // line 68
        if ($this->getAttribute(($context["page"] ?? null), "offcanvas", [])) {
            // line 69
            echo "                              <div class=\"after-offcanvas hidden\">
                                ";
            // line 70
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "offcanvas", [])), "html", null, true);
            echo "
                              </div>
                           ";
        }
        // line 73
        echo "                          </div> 
                          <div id=\"menu-bar\" class=\"menu-bar menu-bar-mobile d-lg-none d-xl-none\">
                            <span class=\"one\"></span>
                            <span class=\"two\"></span>
                            <span class=\"three\"></span>
                          </div>

                          ";
        // line 80
        if ($this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->themeSetting("header_button")) {
            // line 81
            echo "                            <div class=\"header-button\">
                              <a class=\"btn-theme\" href=\"";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->themeSetting("header_button"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Get A Quote"));
            echo "</a>
                            </div>
                          ";
        }
        // line 84
        echo "  

                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_uxima/templates/page/header-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 84,  209 => 82,  206 => 81,  204 => 80,  195 => 73,  189 => 70,  186 => 69,  184 => 68,  181 => 67,  174 => 63,  169 => 60,  167 => 59,  163 => 57,  157 => 55,  155 => 54,  143 => 47,  139 => 45,  133 => 44,  131 => 43,  122 => 37,  116 => 35,  113 => 34,  110 => 33,  108 => 32,  105 => 31,  96 => 24,  90 => 20,  87 => 19,  80 => 15,  75 => 12,  73 => 11,  69 => 10,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_uxima/templates/page/header-1.html.twig", "/var/www/html/web/themes/gavias_uxima/templates/page/header-1.html.twig");
    }
}
