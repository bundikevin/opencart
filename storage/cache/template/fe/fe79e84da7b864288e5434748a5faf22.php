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

/* admin/view/template/tool/upload.twig */
class __TwigTemplate_13f95988739abe950ba48100ee922835 extends Template
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
\t\t\t\t<button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-upload').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fas fa-filter\"></i></button>
\t\t\t\t<button type=\"submit\" form=\"form-upload\" formaction=\"";
        // line 7
        echo ($context["delete"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" onclick=\"return confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "');\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
\t\t\t</div>
\t\t\t<h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</ol>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div id=\"filter-upload\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header\"><i class=\"fas fa-filter\"></i> ";
        // line 21
        echo ($context["text_filter"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"input-name\" class=\"form-label\">";
        // line 24
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_name\" value=\"";
        // line 25
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"input-date-added\" class=\"form-label\">";
        // line 28
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 30
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" id=\"input-date-added\" class=\"form-control date\"/>
\t\t\t\t\t\t\t\t<div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fas fa-filter\"></i> ";
        // line 35
        echo ($context["button_filter"] ?? null);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-9 col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 42
        echo ($context["text_list"] ?? null);
        echo "</div>
\t\t\t\t\t<div id=\"upload\" class=\"card-body\">";
        // line 43
        echo ($context["list"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('#upload').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#upload').load(this.href);
});

\$('#button-filter').on('click', function() {
    url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_filename = \$('#input-filename').val();

    if (filter_filename) {
        url += '&filter_filename=' + encodeURIComponent(filter_filename);
    }

    var filter_date_added = \$('#input-date-added').val();

    if (filter_date_added) {
        url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }

    \$('#upload').load('index.php?route=tool/upload|list&user_token=";
        // line 77
        echo ($context["user_token"] ?? null);
        echo "' + url);
});
//--></script>
";
        // line 80
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "admin/view/template/tool/upload.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 80,  172 => 77,  135 => 43,  131 => 42,  121 => 35,  111 => 30,  106 => 28,  98 => 25,  94 => 24,  88 => 21,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/tool/upload.twig", "/var/www/html/opencart/upload/admin/view/template/tool/upload.twig");
    }
}
