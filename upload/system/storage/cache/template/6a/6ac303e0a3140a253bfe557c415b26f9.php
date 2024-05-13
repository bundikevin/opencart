<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* catalog/view/template/product/special.twig */
class __TwigTemplate_df552879b8e234a9aa4498ee810311dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-search\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 11
        if (($context["products"] ?? null)) {
            // line 12
            echo "        <div id=\"display-control\" class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"mb-3\">
              <a href=\"";
            // line 15
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-primary d-block\"><i class=\"fas fa-exchange-alt\"></i> <span class=\"d-inline d-md-none d-lg-inline\">";
            echo ($context["text_compare"] ?? null);
            echo "</span></a>
            </div>
          </div>
          <div class=\"col-md-1 d-none d-md-block\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"button-list\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 20
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fas fa-th-list\"></i></button>
              <button type=\"button\" id=\"button-grid\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 21
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fas fa-th\"></i></button>
            </div>
          </div>
          <div class=\"col-md-4 offset-md-1 col-6\">
            <div class=\"input-group mb-3\">
              <div class=\"input-group\">
                <label for=\"input-sort\" class=\"input-group-text\">";
            // line 27
            echo ($context["text_sort"] ?? null);
            echo "</label> <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                  ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 29
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 29);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 29) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 29);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                </select>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 col-6\">
            <div class=\"input-group mb-3\">
              <div class=\"input-group\">
                <label for=\"input-limit\" class=\"input-group-text\">";
            // line 38
            echo ($context["text_limit"] ?? null);
            echo "</label> <select id=\"input-limit\" class=\"form-select\" onchange=\"location = this.value;\">
                  ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 40
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 40);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 40) == ($context["limit"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 40);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                </select>
              </div>
            </div>
          </div>
        </div>
        <div id=\"product-list\" class=\"row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
          ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 49
                echo "            <div class=\"col\">";
                echo $context["product"];
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">";
            // line 53
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-end\">";
            // line 54
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 57
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
        <div class=\"d-inline-block pt-2 pd-2 w-100\">
          <div class=\"float-end\"><a href=\"";
            // line 59
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 62
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 64
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 67
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 67,  213 => 64,  207 => 62,  199 => 59,  193 => 57,  187 => 54,  183 => 53,  179 => 51,  170 => 49,  166 => 48,  158 => 42,  143 => 40,  139 => 39,  135 => 38,  126 => 31,  111 => 29,  107 => 28,  103 => 27,  94 => 21,  90 => 20,  80 => 15,  75 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/special.twig", "/var/www/html/opencart/upload/catalog/view/template/product/special.twig");
    }
}
