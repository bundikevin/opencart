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

/* catalog/view/template/checkout/checkout.twig */
class __TwigTemplate_4b6da8ba15ba19ff113b257f92062aa3 extends Template
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
<div id=\"checkout-checkout\" class=\"container\">
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
  <div class=\"row\">
    ";
        // line 9
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">
      ";
        // line 11
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"row\">
        <div class=\"col-md-7 mb-3\">

          ";
        // line 16
        if (($context["register"] ?? null)) {
            // line 17
            echo "            <div id=\"checkout-register\">";
            echo ($context["register"] ?? null);
            echo "</div>
          ";
        }
        // line 19
        echo "
          ";
        // line 20
        if (($context["payment_address"] ?? null)) {
            // line 21
            echo "            <div id=\"checkout-payment-address\">";
            echo ($context["payment_address"] ?? null);
            echo "</div>
          ";
        }
        // line 23
        echo "
          ";
        // line 24
        if (($context["shipping_address"] ?? null)) {
            // line 25
            echo "            <div id=\"checkout-shipping-address\">";
            echo ($context["shipping_address"] ?? null);
            echo "</div>
          ";
        }
        // line 27
        echo "
        </div>
        <div class=\"col-md-5\">
          ";
        // line 30
        if (($context["shipping_method"] ?? null)) {
            // line 31
            echo "            <div id=\"checkout-shipping-method\" class=\"mb-3\">";
            echo ($context["shipping_method"] ?? null);
            echo "</div>
          ";
        }
        // line 33
        echo "          <div id=\"checkout-payment-method\" class=\"mb-4\">";
        echo ($context["payment_method"] ?? null);
        echo "</div>

          <div id=\"checkout-confirm\">";
        // line 35
        echo ($context["confirm"] ?? null);
        echo "</div>

        </div>
      </div>
    </div>
    ";
        // line 40
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
  ";
        // line 42
        echo ($context["column_right"] ?? null);
        echo "
</div>
";
        // line 44
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 44,  140 => 42,  135 => 40,  127 => 35,  121 => 33,  115 => 31,  113 => 30,  108 => 27,  102 => 25,  100 => 24,  97 => 23,  91 => 21,  89 => 20,  86 => 19,  80 => 17,  78 => 16,  71 => 12,  67 => 11,  62 => 9,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/checkout.twig", "/var/www/html/opencart/upload/catalog/view/template/checkout/checkout.twig");
    }
}
