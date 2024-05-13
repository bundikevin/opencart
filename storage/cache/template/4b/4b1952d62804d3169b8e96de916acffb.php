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

/* admin/view/template/sale/order.twig */
class __TwigTemplate_40e0a9e8980cea4cf8c382c40f37e0fd extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-order').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fas fa-filter\"></i></button>
        <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 7
        echo ($context["invoice"] ?? null);
        echo "\" formtarget=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fas fa-print\"></i></button>
        <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 8
        echo ($context["shipping"] ?? null);
        echo "\" formtarget=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fas fa-truck\"></i></button>
        <a href=\"";
        // line 9
        echo ($context["add"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
        <button type=\"button\" id=\"button-delete\" data-bs-toggle=\"tooltip\" title=\"";
        // line 10
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
      </div>
      <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-order\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-filter\"></i> ";
        // line 24
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label for=\"input-order-id\" class=\"form-label\">";
        // line 27
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 28
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\"/>
            </div>
            <div class=\"mb-3\">
              <label class=\"form-label\">";
        // line 31
        echo ($context["entry_customer"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 32
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" list=\"list-customer\" class=\"form-control\"/>
              <datalist id=\"list-customer\"></datalist>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-store\" class=\"form-label\">";
        // line 36
        echo ($context["entry_store"] ?? null);
        echo "</label>
              <select name=\"filter_store_id\" id=\"input-store\" class=\"form-select\">
                <option value=\"\"></option>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 40
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 40);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 40) == ($context["filter_store_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 40);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "              </select>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-order-status\" class=\"form-label\">";
        // line 45
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
              <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                <option value=\"\"></option>
                <option value=\"0\"";
        // line 48
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_missing"] ?? null);
        echo "</option>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 50
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 50);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 50) == ($context["filter_order_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 50);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "              </select>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-total\" class=\"form-label\">";
        // line 55
        echo ($context["entry_total"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_total\" value=\"";
        // line 56
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-date-added\" class=\"form-label\">";
        // line 59
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 61
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" id=\"input-date-added\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-date-modified\" class=\"form-label\">";
        // line 66
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 68
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" id=\"input-date-modified\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
            </div>
            <div class=\"text-end\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fas fa-filter\"></i> ";
        // line 73
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 80
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div id=\"order\" class=\"card-body\">";
        // line 81
        echo ($context["list"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#order').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#order').load(this.href);
});

\$('#button-filter').on('click', function() {
    url = '';

    var filter_order_id = \$('#input-order-id').val();

    if (filter_order_id) {
        url += '&filter_order_id=' + filter_order_id;
    }

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_store_id = \$('#input-store').val();

    if (filter_store_id !== '') {
        url += '&filter_store_id=' + filter_store_id;
    }

    var filter_order_status_id = \$('#input-order-status').val();

    if (filter_order_status_id !== '') {
        url += '&filter_order_status_id=' + filter_order_status_id;
    }

    var filter_total = \$('#input-total').val();

    if (filter_total) {
        url += '&filter_total=' + encodeURIComponent(filter_total);
    }

    var filter_date_added = \$('#input-date-added').val();

    if (filter_date_added) {
        url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }

    var filter_date_modified = \$('#input-date-modified').val();

    if (filter_date_modified) {
        url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
    }

    \$('#order').load('index.php?route=sale/order|list&user_token=";
        // line 139
        echo ($context["user_token"] ?? null);
        echo "' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer|autocomplete&user_token=";
        // line 145
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {}
});

\$('input[name^=\\'selected\\']').on('change', function() {
    \$('#button-shipping, #button-invoice').prop('disabled', true);

    var selected = \$('input[name^=\\'selected\\']:checked');

    if (selected.length) {
        \$('#button-invoice').prop('disabled', false);
    }

    for (i = 0; i < selected.length; i++) {
        if (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {
            \$('#button-shipping').prop('disabled', false);

            break;
        }
    }
});

\$('#button-shipping, #button-invoice').prop('disabled', true);

\$('#button-delete').on('click', function(e) {
    e.preventDefault();

    var element = this;

    if (confirm('";
        // line 185
        echo ($context["text_confirm"] ?? null);
        echo "')) {
        \$.ajax({
            url: 'index.php?route=sale/order|call&user_token=";
        // line 187
        echo ($context["user_token"] ?? null);
        echo "&action=sale/order|delete',
            type: 'post',
            data: \$('#form-order').serialize(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true).addClass('loading');
            },
            complete: function() {
                \$(element).prop('disabled', false).removeClass('loading');
            },
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#order').load(\$('#form-order').attr('data-load'));
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
});
//--></script>
";
        // line 217
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 217,  375 => 187,  370 => 185,  327 => 145,  318 => 139,  257 => 81,  253 => 80,  243 => 73,  233 => 68,  228 => 66,  218 => 61,  213 => 59,  205 => 56,  201 => 55,  196 => 52,  181 => 50,  177 => 49,  169 => 48,  163 => 45,  158 => 42,  143 => 40,  139 => 39,  133 => 36,  124 => 32,  120 => 31,  112 => 28,  108 => 27,  102 => 24,  93 => 17,  82 => 15,  78 => 14,  73 => 12,  68 => 10,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/order.twig", "/var/www/html/opencart/upload/admin/view/template/sale/order.twig");
    }
}
