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

/* extension/export_import/admin/view/template/tool/export_import.twig */
class __TwigTemplate_93a13ea5c2c7f6cc83f19729780e961c extends Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"float-end\">
\t\t\t\t<a href=\"";
        // line 6
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            echo (($__internal_compile_0 = $context["breadcrumb"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_compile_1 = $context["breadcrumb"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["text"] ?? null) : null);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</ol>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\">
\t\t";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "\t\t<div class=\"alert alert-danger export-import-dismissible\">
\t\t\t<i class=\"fa fa-exclamation-circle\"></i> ";
            // line 20
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t";
        }
        // line 24
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 25
            echo "\t\t<div class=\"alert alert-success export-import-dismissible\">
\t\t\t<i class=\"fa fa-check-circle\"></i> ";
            // line 26
            echo ($context["success"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t";
        }
        // line 30
        echo "\t\t";
        if (( !($context["error_warning"] ?? null) &&  !($context["success"] ?? null))) {
            // line 31
            echo "\t\t<div class=\"alert alert-info export-import-dismissible\" id=\"export_import_welcome\">
\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t";
            // line 33
            echo ($context["text_welcome"] ?? null);
            echo "<br /><br />";
            echo ($context["text_used_category_ids"] ?? null);
            echo " ";
            echo ($context["text_used_product_ids"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t";
        }
        // line 37
        echo "\t\t<div class=\"card\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"#tab-export\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 40
        echo ($context["tab_export"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-import\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 41
        echo ($context["tab_import"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-settings\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 42
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-support\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 43
        echo ($context["tab_support"] ?? null);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-export\">
\t\t\t\t\t\t<form action=\"";
        // line 47
        echo ($context["export"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"export\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
        // line 49
        echo ($context["entry_export"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\"><p>";
        // line 52
        echo ($context["entry_export_type"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 57
        if ((($context["export_type"] ?? null) == "c")) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"c\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"c\">
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_category"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 67
        if ((($context["export_type"] ?? null) == "p")) {
            // line 68
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"p\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 70
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"p\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_product"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 77
        if ((($context["export_type"] ?? null) == "o")) {
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"o\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"o\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_option"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 87
        if ((($context["export_type"] ?? null) == "a")) {
            // line 88
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"a\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 90
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"a\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_attribute"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 97
        if ((($context["export_type"] ?? null) == "f")) {
            // line 98
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"f\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"f\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_filter"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 107
        if ((($context["export_type"] ?? null) == "u")) {
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"u\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 110
            echo "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"u\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 112
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        echo ($context["text_export_type_customer"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\" id=\"export_filter\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t";
        // line 119
        echo ($context["entry_category_filter"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 120
        echo ($context["help_category_filter"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 122
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" list=\"list-category\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t<datalist id=\"list-category\"></datalist>
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t<table id=\"import-category\" class=\"table table-sm m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 129
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"import-category-";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 129);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 130
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 130);
            echo "<input type=\"hidden\" name=\"categories[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 130);
            echo "\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t";
        // line 140
        echo ($context["entry_manufacturer_filter"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 141
        echo ($context["help_manufacturer_filter"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"manufacturer\" value=\"\" placeholder=\"";
        // line 143
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" list=\"list-manufacturer\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<datalist id=\"list-manufacturer\"></datalist>
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t<table id=\"import-manufacturer\" class=\"table table-sm m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 150
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"import-manufacturer-";
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 150);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 151
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 151);
            echo "<input type=\"hidden\" name=\"manufacturers[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 151);
            echo "\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\" id=\"range_type\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t";
        // line 163
        echo ($context["entry_range_type"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 164
        echo ($context["help_range_type"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">

\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"range_type\" id=\"range_type_id\" value=\"id\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"range_type_id\">";
        // line 171
        echo ($context["button_export_id"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"range_type\" id=\"range_type_page\" value=\"page\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"range_type_page\">";
        // line 175
        echo ($context["button_export_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<br /><br />
\t\t\t\t\t\t\t\t\t<span class=\"id\">";
        // line 179
        echo ($context["entry_start_id"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"page\">";
        // line 180
        echo ($context["entry_start_index"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"min\" value=\"";
        // line 182
        echo ($context["min"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<span class=\"id\">";
        // line 184
        echo ($context["entry_end_id"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"page\">";
        // line 185
        echo ($context["entry_end_index"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"max\" value=\"";
        // line 187
        echo ($context["max"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a onclick=\"downloadData();\" class=\"btn btn-primary\"><span>";
        // line 192
        echo ($context["button_export"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-import\">
\t\t\t\t\t\t<form action=\"";
        // line 198
        echo ($context["import"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"import\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
        // line 200
        echo ($context["entry_import"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 201
        echo ($context["help_import"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 202
        echo ($context["help_format"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<p>";
        // line 208
        echo ($context["entry_incremental"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">

\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 214
        if (($context["incremental"] ?? null)) {
            // line 215
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"incremental\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 216
            echo ($context["text_yes"] ?? null);
            echo " ";
            echo ($context["help_incremental_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 218
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"incremental\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 219
            echo ($context["text_yes"] ?? null);
            echo " ";
            echo ($context["help_incremental_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 221
        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 225
        if (($context["incremental"] ?? null)) {
            // line 226
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"incremental\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 227
            echo ($context["text_no"] ?? null);
            echo " ";
            echo ($context["help_incremental_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 229
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"incremental\" value=\"0\" checked=\"checked\" />\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 230
            echo ($context["text_no"] ?? null);
            echo " ";
            echo ($context["help_incremental_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 232
        echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t";
        // line 238
        echo ($context["entry_upload"] ?? null);
        echo "<br /><br />
\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"upload\" id=\"upload\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a onclick=\"uploadData();\" class=\"btn btn-primary\"><span>";
        // line 244
        echo ($context["button_import"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-settings\">
\t\t\t\t\t\t<form action=\"";
        // line 252
        echo ($context["settings"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"settings\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 256
        if (($context["settings_use_option_id"] ?? null)) {
            // line 257
            echo "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_option_id\" name=\"export_import_settings_use_option_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 259
            echo "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_option_id\" name=\"export_import_settings_use_option_id\">
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 261
        echo "\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_option_id\">";
        echo ($context["entry_settings_use_option_id"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 264
        if (($context["settings_use_option_value_id"] ?? null)) {
            // line 265
            echo "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_option_value_id\" name=\"export_import_settings_use_option_value_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 267
            echo "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_option_value_id\" name=\"export_import_settings_use_option_value_id\">
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 269
        echo "\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_option_value_id\">";
        echo ($context["entry_settings_use_option_value_id"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 272
        if (($context["settings_use_attribute_group_id"] ?? null)) {
            // line 273
            echo "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_attribute_group_id\" name=\"export_import_settings_use_attribute_group_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 275
            echo "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_attribute_group_id\" name=\"export_import_settings_use_attribute_group_id\">
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 277
        echo "\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_attribute_group_id\">";
        echo ($context["entry_settings_use_attribute_group_id"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 280
        if (($context["settings_use_attribute_id"] ?? null)) {
            // line 281
            echo "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_attribute_id\" name=\"export_import_settings_use_attribute_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 283
            echo "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_attribute_id\" name=\"export_import_settings_use_attribute_id\">
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 285
        echo "\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_attribute_id\">";
        echo ($context["entry_settings_use_attribute_id"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 288
        if (($context["settings_use_filter_group_id"] ?? null)) {
            // line 289
            echo "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_filter_group_id\" name=\"export_import_settings_use_filter_group_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 291
            echo "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_filter_group_id\" name=\"export_import_settings_use_filter_group_id\">
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 293
        echo "\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_filter_group_id\">";
        echo ($context["entry_settings_use_filter_group_id"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 296
        if (($context["settings_use_filter_id"] ?? null)) {
            // line 297
            echo "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_filter_id\" name=\"export_import_settings_use_filter_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 299
            echo "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_filter_id\" name=\"export_import_settings_use_filter_id\">
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 301
        echo "\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_filter_id\">";
        echo ($context["entry_settings_use_filter_id"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a onclick=\"updateSettings();\" class=\"btn btn-primary\"><span>";
        // line 307
        echo ($context["button_settings"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-support\">
\t\t\t\t\t\t<div id=\"export_import_notification\" class=\"alert alert-info export-import-dismissible\">
\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t<div id=\"export_import_loading\"><img src=\"../extension/export_import/admin/view/image/export-import/loading.gif\" />";
        // line 315
        echo ($context["text_loading_notifications"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\">";
        // line 321
        echo ($context["entry_version"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 322
        echo ($context["version_export_import"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\">";
        // line 325
        echo ($context["entry_oc_version"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 326
        echo ($context["version_opencart"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\">";
        // line 329
        echo ($context["entry_php_version"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 330
        echo ($context["version_php"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\" style=\"vertical-align:top;\">";
        // line 333
        echo ($context["entry_license"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-wrap\">";
        // line 334
        echo ($context["text_license"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

<script type=\"text/javascript\"><!--

function getNotifications() {
\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><div id=\"export_import_loading\"><img src=\"../extension/export_import/admin/view/image/export-import/loading.gif\" />";
        // line 347
        echo ($context["text_loading_notifications"] ?? null);
        echo "</div><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\tsetTimeout(
\t\tfunction(){
\t\t\t\$.ajax({
\t\t\t\ttype: 'GET',
\t\t\t\turl: 'index.php?route=extension/export_import/tool/export_import";
        // line 352
        echo ($context["method_separator"] ?? null);
        echo "getNotifications&user_token=";
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i>'+json['error']+' <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        // line 356
        echo ($context["text_retry"] ?? null);
        echo "</span><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\t\t\t\t\t} else if (json['message']) {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i>'+json['message']+'<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i>'+'";
        // line 360
        echo ($context["error_no_news"] ?? null);
        echo "'+'<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tfailure: function(){
\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i>'+'";
        // line 364
        echo ($context["error_notifications"] ?? null);
        echo " <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        echo ($context["text_retry"] ?? null);
        echo "</span><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\t\t\t\t},
\t\t\t\terror: function() {
\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i>'+'";
        // line 367
        echo ($context["error_notifications"] ?? null);
        echo " <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        echo ($context["text_retry"] ?? null);
        echo "</span><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\t\t\t\t}
\t\t\t});
\t\t},
\t\t500
\t);
}

function check_export_filter(export_type) {
\tif (export_type=='p') {
\t\t\$('#export_filter').show();
\t} else {
\t\t\$('#export_filter').hide();
\t}
}

function check_range_type(export_type) {
\tif ((export_type=='p') || (export_type=='c') || (export_type=='u')) {
\t\t\$('#range_type').show();
\t\t\$('#range_type_id').prop('checked',true);
\t\t\$('#range_type_page').prop('checked',false);
\t\t\$('.id').show();
\t\t\$('.page').hide();
\t} else {
\t\t\$('#range_type').hide();
\t}
}

\$(document).ready(function() {

\tcheck_export_filter(\$('input[name=export_type]:checked').val());
\tcheck_range_type(\$('input[name=export_type]:checked').val());

\t\$(\"#range_type_id\").click(function() {
\t\t\$(\".page\").hide();
\t\t\$(\".id\").show();
\t});

\t\$(\"#range_type_page\").click(function() {
\t\t\$(\".id\").hide();
\t\t\$(\".page\").show();
\t});

\t\$('input[name=export_type]').click(function() {
\t\tcheck_export_filter(\$(this).val());
\t\tcheck_range_type(\$(this).val());
\t});

\t\$('span.close').click(function() {
\t\t\$(this).parent().remove();
\t});

\t\$('a[data-bs-toggle=\"tab\"]').click(function() {
\t\t\$('#export_import_welcome').remove();
\t});

\t\$('a[href=\"#tab-support\"').click(function() {
\t\tif (\$(this).parent().attr('class')!='active') {
\t\t\tgetNotifications();
\t\t}
\t});

});

function checkFileSize(id) {
\t// See also http://stackoverflow.com/questions/3717793/javascript-file-upload-size-validation for details
\tvar input, file, file_size;

\tif (!window.FileReader) {
\t\t// The file API isn't yet supported on user's browser
\t\treturn true;
\t}

\tinput = document.getElementById(id);
\tif (!input) {
\t\t// couldn't find the file input element
\t\treturn true;
\t}
\telse if (!input.files) {
\t\t// browser doesn't seem to support the `files` property of file inputs
\t\treturn true;
\t}
\telse if (!input.files[0]) {
\t\t// no file has been selected for the upload
\t\talert( \"";
        // line 451
        echo ($context["error_select_file"] ?? null);
        echo "\" );
\t\treturn false;
\t}
\telse {
\t\tfile = input.files[0];
\t\tfile_size = file.size;
\t\t";
        // line 457
        if ((array_key_exists("post_max_size", $context) && ($context["post_max_size"] ?? null))) {
            // line 458
            echo "\t\t// check against PHP's post_max_size
\t\tpost_max_size = ";
            // line 459
            echo ($context["post_max_size"] ?? null);
            echo ";
\t\tif (file_size > post_max_size) {
\t\t\talert( \"";
            // line 461
            echo ($context["error_post_max_size"] ?? null);
            echo "\" );
\t\t\treturn false;
\t\t}
\t\t";
        }
        // line 465
        echo "\t\t";
        if ((array_key_exists("upload_max_filesize", $context) && ($context["upload_max_filesize"] ?? null))) {
            // line 466
            echo "\t\t// check against PHP's upload_max_filesize
\t\tupload_max_filesize = ";
            // line 467
            echo ($context["upload_max_filesize"] ?? null);
            echo ";
\t\tif (file_size > upload_max_filesize) {
\t\t\talert( \"";
            // line 469
            echo ($context["error_upload_max_filesize"] ?? null);
            echo "\" );
\t\t\treturn false;
\t\t}
\t\t";
        }
        // line 473
        echo "\t\treturn true;
\t}
}

function uploadData() {
\tif (checkFileSize('upload')) {
\t\t\$('#import').submit();
\t}
}

function isNumber(txt){ 
\tvar regExp=/^[\\d]{1,}\$/;
\treturn regExp.test(txt); 
}

count_product = ";
        // line 488
        echo ($context["count_product"] ?? null);
        echo ";

function updateCountProducts() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/export_import/tool/export_import";
        // line 492
        echo ($context["method_separator"] ?? null);
        echo "getCountProduct&user_token=";
        echo ($context["user_token"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"input[name='categories[]'],input[name='manufacturers[]']\").serialize(),
\t\tsuccess: function(json) {
\t\t\tif (json['count']) {
\t\t\t\tcount_product = json['count'];
\t\t\t} else {
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

function validateExportForm(id) {
\tvar export_type = \$('input[name=export_type]:checked').val();
\tif ((export_type!='c') && (export_type!='p') && (export_type!='u')) {
\t\treturn true;
\t}

\tvar val = \$(\"input[name=range_type]:checked\").val();
\tvar min = \$(\"input[name=min]\").val();
\tvar max = \$(\"input[name=max]\").val();

\tif ((min=='') && (max=='')) {
\t\treturn true;
\t}

\tif (!isNumber(min) || !isNumber(max)) {
\t\talert(\"";
        // line 523
        echo ($context["error_param_not_number"] ?? null);
        echo "\");
\t\treturn false;
\t}

\tvar count_item;
\tswitch (export_type) {
\t\tcase 'p': count_item = count_product-1;  break;
\t\tcase 'c': count_item = ";
        // line 530
        echo (($context["count_category"] ?? null) - 1);
        echo "; break;
\t\tdefault:  count_item = ";
        // line 531
        echo (($context["count_customer"] ?? null) - 1);
        echo "; break;
\t}
\tvar batchNo = parseInt(count_item/parseInt(min))+1; // Maximum number of item-batches, namely, item number/min, and then rounded up (that is, integer plus 1)
\tvar minItemId;
\tswitch (export_type) {
\t\tcase 'p': minItemId = parseInt( ";
        // line 536
        echo ($context["min_product_id"] ?? null);
        echo " );  break;
\t\tcase 'c': minItemId = parseInt( ";
        // line 537
        echo ($context["min_category_id"] ?? null);
        echo " ); break;
\t\tdefault:  minItemId = parseInt( ";
        // line 538
        echo ($context["min_customer_id"] ?? null);
        echo " ); break;
\t
\t}
\tvar maxItemId;
\tswitch (export_type) {
\t\tcase 'p': maxItemId = parseInt( ";
        // line 543
        echo ($context["max_product_id"] ?? null);
        echo " );  break;
\t\tcase 'c': maxItemId = parseInt( ";
        // line 544
        echo ($context["max_category_id"] ?? null);
        echo " ); break;
\t\tdefault:  maxItemId = parseInt( ";
        // line 545
        echo ($context["max_customer_id"] ?? null);
        echo " ); break;
\t
\t}

\tif (val==\"page\") {  // Min for the batch size, Max for the batch number
\t\tif (parseInt(max) <= 0) {
\t\t\talert(\"";
        // line 551
        echo ($context["error_batch_number"] ?? null);
        echo "\");
\t\t\treturn false;
\t\t}
\t\tif (parseInt(max) > batchNo) {        
\t\t\talert(\"";
        // line 555
        echo ($context["error_page_no_data"] ?? null);
        echo "\"); 
\t\t\treturn false;
\t\t} else {
\t\t\t\$(\"input[name=max]\").val(parseInt(max)+1);
\t\t}
\t} else {
\t\tif (minItemId <= 0) {
\t\t\talert(\"";
        // line 562
        echo ($context["error_min_item_id"] ?? null);
        echo "\");
\t\t\treturn false;
\t\t}
\t\tif (parseInt(min) > maxItemId || parseInt(max) < minItemId || parseInt(min) > parseInt(max)) {  
\t\t\talert(\"";
        // line 566
        echo ($context["error_id_no_data"] ?? null);
        echo "\"); 
\t\t\treturn false;
\t\t}
\t}
\treturn true;
}

function downloadData() {
\tif (validateExportForm('export')) {
\t\t\$('#export').submit();
\t}
}

function updateSettings() {
\t\$('#settings').submit();
}


// Category
\$('#input-category').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category";
        // line 588
        echo ($context["method_separator"] ?? null);
        echo "autocomplete&user_token=";
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-category').val('');

        \$('#import-category-' + item['value']).remove();

        html = '<tr id=\"import-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"categories[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#import-category tbody').append(html);
\t\tupdateCountProducts();
    }
});

\$('#import-category').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
\tupdateCountProducts();
});



// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer";
        // line 626
        echo ($context["method_separator"] ?? null);
        echo "autocomplete&user_token=";
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-manufacturer').val('');

        \$('#import-manufacturer-' + item['value']).remove();

        html = '<tr id=\"import-manufacturer-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"manufacturers[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#import-manufacturer tbody').append(html);
\t\tupdateCountProducts();
    }
});

\$('#import-manufacturer').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
\tupdateCountProducts();
});

var alert = export_import_alert;
//--></script>

</div>
";
        // line 662
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/export_import/admin/view/template/tool/export_import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1157 => 662,  1116 => 626,  1073 => 588,  1048 => 566,  1041 => 562,  1031 => 555,  1024 => 551,  1015 => 545,  1011 => 544,  1007 => 543,  999 => 538,  995 => 537,  991 => 536,  983 => 531,  979 => 530,  969 => 523,  933 => 492,  926 => 488,  909 => 473,  902 => 469,  897 => 467,  894 => 466,  891 => 465,  884 => 461,  879 => 459,  876 => 458,  874 => 457,  865 => 451,  776 => 367,  768 => 364,  761 => 360,  754 => 356,  745 => 352,  737 => 347,  721 => 334,  717 => 333,  711 => 330,  707 => 329,  701 => 326,  697 => 325,  691 => 322,  687 => 321,  678 => 315,  667 => 307,  657 => 301,  653 => 299,  649 => 297,  647 => 296,  640 => 293,  636 => 291,  632 => 289,  630 => 288,  623 => 285,  619 => 283,  615 => 281,  613 => 280,  606 => 277,  602 => 275,  598 => 273,  596 => 272,  589 => 269,  585 => 267,  581 => 265,  579 => 264,  572 => 261,  568 => 259,  564 => 257,  562 => 256,  555 => 252,  544 => 244,  535 => 238,  527 => 232,  520 => 230,  517 => 229,  510 => 227,  507 => 226,  505 => 225,  499 => 221,  492 => 219,  489 => 218,  482 => 216,  479 => 215,  477 => 214,  468 => 208,  459 => 202,  455 => 201,  451 => 200,  446 => 198,  437 => 192,  429 => 187,  424 => 185,  420 => 184,  415 => 182,  410 => 180,  406 => 179,  399 => 175,  392 => 171,  382 => 164,  378 => 163,  368 => 155,  356 => 151,  351 => 150,  347 => 149,  338 => 143,  333 => 141,  329 => 140,  321 => 134,  309 => 130,  304 => 129,  300 => 128,  291 => 122,  286 => 120,  282 => 119,  271 => 112,  267 => 110,  263 => 108,  261 => 107,  252 => 102,  248 => 100,  244 => 98,  242 => 97,  233 => 92,  229 => 90,  225 => 88,  223 => 87,  214 => 82,  210 => 80,  206 => 78,  204 => 77,  195 => 72,  191 => 70,  187 => 68,  185 => 67,  176 => 62,  172 => 60,  168 => 58,  166 => 57,  158 => 52,  152 => 49,  147 => 47,  140 => 43,  136 => 42,  132 => 41,  128 => 40,  123 => 37,  112 => 33,  108 => 31,  105 => 30,  98 => 26,  95 => 25,  92 => 24,  85 => 20,  82 => 19,  80 => 18,  73 => 13,  62 => 11,  58 => 10,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/export_import/admin/view/template/tool/export_import.twig", "/var/www/html/opencart/upload/extension/export_import/admin/view/template/tool/export_import.twig");
    }
}
