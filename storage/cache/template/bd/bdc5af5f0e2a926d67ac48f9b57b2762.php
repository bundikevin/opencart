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

/* extension/opencart/admin/view/template/report/customer_transaction.twig */
class __TwigTemplate_80ef5d8c90ab36dee63c4212d949d7ae extends Template
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
        echo "<div class=\"row\">
\t<div id=\"filter-report\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fas fa-filter\"></i> ";
        // line 4
        echo ($context["text_filter"] ?? null);
        echo "</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"input-customer\" class=\"form-label\">";
        // line 7
        echo ($context["entry_customer"] ?? null);
        echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"filter_customer\" value=\"";
        // line 8
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" list=\"list-customer\" class=\"form-control\"/>
\t\t\t\t\t<datalist id=\"list-customer\"></datalist>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"input-date-start\" class=\"form-label\">";
        // line 12
        echo ($context["entry_date_start"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_date_start\" value=\"";
        // line 14
        echo ($context["filter_date_start"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_start"] ?? null);
        echo "\" id=\"input-date-start\" class=\"form-control date\"/>
\t\t\t\t\t\t<div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"input-date-end\" class=\"form-label\">";
        // line 19
        echo ($context["entry_date_end"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_date_end\" value=\"";
        // line 21
        echo ($context["filter_date_end"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_end"] ?? null);
        echo "\" id=\"input-date-end\" class=\"form-control date\"/>
\t\t\t\t\t\t<div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fas fa-filter\"></i> ";
        // line 26
        echo ($context["button_filter"] ?? null);
        echo "</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col col-lg-9 col-md-12\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fas fa-chart-bar\"></i> ";
        // line 33
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
        // line 39
        echo ($context["column_customer"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
        // line 40
        echo ($context["column_email"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
        // line 41
        echo ($context["column_customer_group"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
        // line 42
        echo ($context["column_status"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-end\">";
        // line 43
        echo ($context["column_total"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-end\">";
        // line 44
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 48
        if (($context["customers"] ?? null)) {
            // line 49
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 50
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer", [], "any", false, false, false, 51);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 52);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_group", [], "any", false, false, false, 53);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "status", [], "any", false, false, false, 54);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "total", [], "any", false, false, false, 55);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\"><a href=\"";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 56);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"6\">";
            // line 61
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-start\">";
        // line 68
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-end\">";
        // line 69
        echo ($context["results"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
    var url = '';

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_date_start = \$('#input-date-start').val();

    if (filter_date_start) {
        url += '&filter_date_start=' + encodeURIComponent(filter_date_start);
    }

    var filter_date_end = \$('#input-date-end').val();

    if (filter_date_end) {
        url += '&filter_date_end=' + encodeURIComponent(filter_date_end);
    }

\t\t\$('#report').load('index.php?route=extension/opencart/report/customer_transaction|report&user_token=";
        // line 97
        echo ($context["user_token"] ?? null);
        echo "' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer|autocomplete&user_token=";
        // line 103
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
    'select': function(item) {
        \$('#input-customer').val(item['label']);
    }
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/report/customer_transaction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 103,  231 => 97,  200 => 69,  196 => 68,  190 => 64,  184 => 61,  181 => 60,  178 => 59,  167 => 56,  163 => 55,  159 => 54,  155 => 53,  151 => 52,  147 => 51,  144 => 50,  139 => 49,  137 => 48,  130 => 44,  126 => 43,  122 => 42,  118 => 41,  114 => 40,  110 => 39,  101 => 33,  91 => 26,  81 => 21,  76 => 19,  66 => 14,  61 => 12,  52 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/report/customer_transaction.twig", "/var/www/html/opencart/upload/extension/opencart/admin/view/template/report/customer_transaction.twig");
    }
}
