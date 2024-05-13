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

/* catalog/view/template/information/contact.twig */
class __TwigTemplate_54c6c68f7b7f790a9be8b3682a4186d9 extends Template
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
<div id=\"information-contact\" class=\"container\">
\t<ul class=\"breadcrumb\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t</ul>
\t<div class=\"row\">
\t\t";
        // line 9
        echo ($context["column_left"] ?? null);
        echo "
\t\t<div id=\"content\" class=\"col\">";
        // line 10
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<h3>";
        // line 12
        echo ($context["text_location"] ?? null);
        echo "</h3>
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 16
        if (($context["image"] ?? null)) {
            // line 17
            echo "\t\t\t\t\t\t\t<div class=\"col-sm-3\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\"/></div>
\t\t\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t\t\t<div class=\"col-sm-3\"><strong>";
        echo ($context["store"] ?? null);
        echo "</strong>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t";
        // line 22
        echo ($context["address"] ?? null);
        echo "
\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t";
        // line 24
        if (($context["geocode"] ?? null)) {
            // line 25
            echo "\t\t\t\t\t\t\t\t<a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fas fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-3\"><strong>";
        // line 28
        echo ($context["text_telephone"] ?? null);
        echo "</strong>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t";
        // line 30
        echo ($context["telephone"] ?? null);
        echo "
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t";
        // line 35
        if (($context["open"] ?? null)) {
            // line 36
            echo "\t\t\t\t\t\t\t\t<strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t";
            // line 38
            echo ($context["open"] ?? null);
            echo "
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t\t";
        if (($context["comment"] ?? null)) {
            // line 43
            echo "\t\t\t\t\t\t\t\t<strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t";
            // line 45
            echo ($context["comment"] ?? null);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 51
        if (($context["locations"] ?? null)) {
            // line 52
            echo "\t\t\t\t<h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
\t\t\t\t<div id=\"accordion\" class=\"card-group\">
\t\t\t\t\t";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 55
                echo "\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title pt-2\"><a href=\"#collapse-location-";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 57);
                echo "\" class=\"accordion-toggle\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 57);
                echo " <i class=\"fas fa-caret-down\"></i></a></h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-collapse collapse\" id=\"collapse-location-";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 59);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t";
                // line 62
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 62)) {
                    // line 63
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 63);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 63);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 63);
                    echo "\" class=\"img-thumbnail\"/></div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 65);
                echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 68);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 70
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 70)) {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 71));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fas fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\"><strong>";
                // line 74
                echo ($context["text_telephone"] ?? null);
                echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 76);
                echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 81
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 84);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 88
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 91);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 93
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 101
        echo "\t\t\t<form id=\"form-contact\" action=\"";
        echo ($context["send"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
\t\t\t\t<fieldset>
\t\t\t\t\t<legend>";
        // line 103
        echo ($context["text_contact"] ?? null);
        echo "</legend>
\t\t\t\t\t<div class=\"row mb-3 required\">
\t\t\t\t\t\t<label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 105
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 107
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
\t\t\t\t\t\t\t<div id=\"error-name\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3 required\">
\t\t\t\t\t\t<label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 112
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 114
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
\t\t\t\t\t\t\t<div id=\"error-email\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3 required\">
\t\t\t\t\t\t<label for=\"input-enquiry\" class=\"col-sm-2 col-form-label\">";
        // line 119
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t<div id=\"error-enquiry\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 125
        echo ($context["captcha"] ?? null);
        echo "
\t\t\t\t</fieldset>
\t\t\t\t<div class=\"d-inline-block pt-2 pd-2 w-100\">
\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 129
        echo ($context["button_submit"] ?? null);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t";
        // line 133
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t\t";
        // line 134
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 136
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 136,  357 => 134,  353 => 133,  346 => 129,  339 => 125,  330 => 119,  322 => 114,  317 => 112,  309 => 107,  304 => 105,  299 => 103,  293 => 101,  289 => 99,  278 => 93,  273 => 91,  267 => 89,  264 => 88,  257 => 84,  251 => 82,  249 => 81,  241 => 76,  236 => 74,  233 => 73,  223 => 71,  221 => 70,  216 => 68,  209 => 65,  199 => 63,  197 => 62,  191 => 59,  184 => 57,  180 => 55,  176 => 54,  170 => 52,  168 => 51,  162 => 47,  157 => 45,  151 => 43,  148 => 42,  141 => 38,  135 => 36,  133 => 35,  125 => 30,  120 => 28,  117 => 27,  107 => 25,  105 => 24,  100 => 22,  93 => 19,  83 => 17,  81 => 16,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/information/contact.twig", "/var/www/html/opencart/upload/catalog/view/template/information/contact.twig");
    }
}
