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

/* catalog/view/template/account/return_form.twig */
class __TwigTemplate_521a3189c57d0c6a262b0c8a956d84a8 extends Template
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
<div id=\"account-return\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\"> ";
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
    <div id=\"content\" class=\"col\"> ";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 11
        echo ($context["text_description"] ?? null);
        echo "</p>
      <form id=\"form-return\" action=\"";
        // line 12
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>";
        // line 14
        echo ($context["text_order"] ?? null);
        echo "</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 16
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 18
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 23
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 25
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 30
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 32
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 37
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 39
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
              <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-order-id\" class=\"col-sm-2 col-form-label\">";
        // line 44
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 46
        echo ($context["order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\"/>
              <div id=\"error-order-id\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-date-ordered\" class=\"col-sm-2 col-form-label\">";
        // line 51
        echo ($context["entry_date_ordered"] ?? null);
        echo "</label>
            <div class=\"col-sm-10 col-md-4\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 54
        echo ($context["date_ordered"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_ordered"] ?? null);
        echo "\" id=\"input-date-ordered\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 61
        echo ($context["text_product"] ?? null);
        echo "</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-product\" class=\"col-sm-2 col-form-label\">";
        // line 63
        echo ($context["entry_product"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 65
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_id\" value=\"";
        echo ($context["product_id"] ?? null);
        echo "\"/>
              <div id=\"error-product\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-model\" class=\"col-sm-2 col-form-label\">";
        // line 70
        echo ($context["entry_model"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 72
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
              <div id=\"error-model\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">";
        // line 77
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"quantity\" value=\"1\" placeholder=\"";
        // line 79
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 83
        echo ($context["entry_reason"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div id=\"input-reason\">
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 87
            echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"return_reason_id\" value=\"";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 88);
            echo "\" id=\"input-return-reason-";
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 88);
            echo "\" class=\"form-check-input\"/>
                    <label for=\"input-return-reason-";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 89);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 89);
            echo "</label>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "              </div>
              <div id=\"error-reason\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 97
        echo ($context["entry_opened"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"opened\" value=\"1\" id=\"input-opened-yes\" class=\"form-check-input\" checked/>
                <label for=\"input-opened-yes\" class=\"form-check-label\">";
        // line 101
        echo ($context["text_yes"] ?? null);
        echo "</label>
              </div>
              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"opened\" value=\"0\" id=\"input-opened-no\" class=\"form-check-input\"/>
                <label for=\"input-opened-no\" class=\"form-check-label\">";
        // line 105
        echo ($context["text_no"] ?? null);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 110
        echo ($context["entry_fault_detail"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 112
        echo ($context["entry_fault_detail"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\"></textarea>
            </div>
          </div>
          ";
        // line 115
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"d-inline-block pt-2 pd-2 w-100\">
          <div class=\"float-start\"><a href=\"";
        // line 118
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-light\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
          <div class=\"float-end\">
            ";
        // line 120
        if (($context["text_agree"] ?? null)) {
            // line 121
            echo "              <div class=\"form-check form-check-inline\">
                <label class=\"form-check-label\">";
            // line 122
            echo ($context["text_agree"] ?? null);
            echo "</label> <input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"form-check-input\"/>
                &nbsp;
              </div>
            ";
        }
        // line 126
        echo "            <button type=\"submit\" class=\"btn btn-primary\">";
        echo ($context["button_submit"] ?? null);
        echo "</button>
          </div>
        </div>
      </form>
      ";
        // line 130
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 132
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$(document).ready(function () {
    \$('.date').daterangepicker({
        singleDatePicker: true,
        autoApply: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });

    \$('.time').daterangepicker({
        singleDatePicker: true,
        datePicker: false,
        autoApply: true,
        timePicker: true,
        timePicker24Hour: true,
        locale: {
            format: 'HH:mm'
        }
    }).on('show.daterangepicker', function (ev, picker) {
        picker.container.find('.calendar-table').hide();
    });

    \$('.datetime').daterangepicker({
        singleDatePicker: true,
        autoApply: true,
        timePicker: true,
        timePicker24Hour: true,
        locale: {
            format: 'YYYY-MM-DD HH:mm'
        }
    });
});
//--></script>
";
        // line 169
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/return_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 169,  337 => 132,  332 => 130,  324 => 126,  317 => 122,  314 => 121,  312 => 120,  305 => 118,  299 => 115,  293 => 112,  288 => 110,  280 => 105,  273 => 101,  266 => 97,  259 => 92,  248 => 89,  242 => 88,  239 => 87,  235 => 86,  229 => 83,  222 => 79,  217 => 77,  207 => 72,  202 => 70,  190 => 65,  185 => 63,  180 => 61,  168 => 54,  162 => 51,  152 => 46,  147 => 44,  137 => 39,  132 => 37,  122 => 32,  117 => 30,  107 => 25,  102 => 23,  92 => 18,  87 => 16,  82 => 14,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/return_form.twig", "/var/www/html/opencart/upload/catalog/view/template/account/return_form.twig");
    }
}
