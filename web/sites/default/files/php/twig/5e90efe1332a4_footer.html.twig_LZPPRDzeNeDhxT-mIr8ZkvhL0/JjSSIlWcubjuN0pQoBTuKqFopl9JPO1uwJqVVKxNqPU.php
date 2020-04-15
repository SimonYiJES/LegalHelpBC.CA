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

/* @gavias_uxima/page/footer.html.twig */
class __TwigTemplate_6d56bc287b8274fee5a7d8d3e108d201b07522e9ec11c9eca4a8307608344a6d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5];
        $filters = ["escape" => 11];
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
        echo "
<footer id=\"footer\" class=\"footer\">
  <div class=\"footer-inner\">

    ";
        // line 5
        if ($this->getAttribute(($context["page"] ?? null), "before_footer", [])) {
            // line 6
            echo "     <div class=\"footer-top\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
              <div class=\"before-footer clearfix area\">
                  ";
            // line 11
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_footer", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
      </div>
     ";
        }
        // line 18
        echo "
     <div class=\"footer-center\">
        <div class=\"container\">
           <div class=\"row\">
              ";
        // line 22
        if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
            // line 23
            echo "                <div class=\"footer-first col-xl-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null)), "html", null, true);
            echo " col-lg-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null)), "html", null, true);
            echo " col-md-12 col-sm-12 col-xs-12 footer-column\">
                  ";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 27
        echo "
              ";
        // line 28
        if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
            // line 29
            echo "               <div class=\"footer-second col-xl-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null)), "html", null, true);
            echo " col-lg-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_size"] ?? null)), "html", null, true);
            echo " col-md-12 col-sm-12 col-xs-12 footer-column\">
                  ";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 33
        echo "
              ";
        // line 34
        if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
            // line 35
            echo "                <div class=\"footer-third col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 footer-column\">
                  ";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 39
        echo "
              ";
        // line 40
        if ($this->getAttribute(($context["page"] ?? null), "footer_four", [])) {
            // line 41
            echo "                 <div class=\"footer-four col-xl-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null)), "html", null, true);
            echo " col-lg-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_four_size"] ?? null)), "html", null, true);
            echo " col-md-12 col-sm-12 col-xs-12 footer-column\">
                  ";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_four", [])), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 45
        echo "           </div>
        </div>
    </div>
  </div>

  ";
        // line 50
        if ($this->getAttribute(($context["page"] ?? null), "copyright", [])) {
            // line 51
            echo "    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"copyright-inner\">
            ";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "copyright", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 59
        echo "
</footer>
";
    }

    public function getTemplateName()
    {
        return "@gavias_uxima/page/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 59,  165 => 54,  160 => 51,  158 => 50,  151 => 45,  145 => 42,  138 => 41,  136 => 40,  133 => 39,  127 => 36,  124 => 35,  122 => 34,  119 => 33,  113 => 30,  106 => 29,  104 => 28,  101 => 27,  95 => 24,  88 => 23,  86 => 22,  80 => 18,  70 => 11,  63 => 6,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gavias_uxima/page/footer.html.twig", "/var/www/html/web/themes/gavias_uxima/templates/page/footer.html.twig");
    }
}
