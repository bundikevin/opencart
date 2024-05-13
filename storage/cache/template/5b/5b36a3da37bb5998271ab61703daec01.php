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

/* catalog/view/template/checkout/shipping_address.twig */
class __TwigTemplate_bc038e7f7e446c4cd05e3ad4fa620b45 extends Template
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
        echo "<fieldset>
  <legend>";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</legend>
  <div id=\"shipping-addresses\" style=\"display: ";
        // line 3
        if (($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <div class=\"form-check\">
      <input type=\"radio\" name=\"shipping_existing\" value=\"1\" id=\"input-shipping-existing\" class=\"form-check-input\"";
        // line 5
        if (($context["addresses"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-shipping-existing\" class=\"form-check-label\">";
        echo ($context["text_address_existing"] ?? null);
        echo "</label>
    </div>
    <div class=\"form-check\">
      <input type=\"radio\" name=\"shipping_existing\" value=\"0\" id=\"input-shipping-new\" class=\"form-check-input\"";
        // line 8
        if ( !($context["addresses"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-shipping-new\" class=\"form-check-label\">";
        echo ($context["text_address_new"] ?? null);
        echo "</label>
    </div>
  </div>
  <div id=\"shipping-existing\" style=\"display: ";
        // line 11
        if (($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <select name=\"address_id\" id=\"input-shipping-address\" class=\"form-select\">
     <option>";
        // line 13
        echo ($context["text_select"] ?? null);
        echo "</option>
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 15
            echo "        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 15);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 15) == ($context["address_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 15);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 15);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 15);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 15);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 15);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 15);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </select>
  </div>
  <br/>
  <div id=\"shipping-new\" style=\"display: ";
        // line 20
        if ( !($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <form id=\"form-shipping-address\">
      <div class=\"row row-cols-1 row-cols-md-2\">

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">";
        // line 25
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">";
        // line 30
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3\">
          <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 35
        echo ($context["entry_company"] ?? null);
        echo "</label> <input type=\"text\" name=\"company\" value=\"";
        echo ($context["company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 39
        echo ($context["entry_address_1"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_1\" value=\"";
        echo ($context["address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
          <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3\">
          <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 44
        echo ($context["entry_address_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_2\" value=\"";
        echo ($context["address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 48
        echo ($context["entry_city"] ?? null);
        echo "</label> <input type=\"text\" name=\"city\" value=\"";
        echo ($context["city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
          <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 53
        echo ($context["entry_postcode"] ?? null);
        echo "</label> <input type=\"text\" name=\"postcode\" value=\"";
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
          <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 58
        echo ($context["entry_country"] ?? null);
        echo "</label> <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-select\">
            <option value=\"\">";
        // line 59
        echo ($context["text_select"] ?? null);
        echo "</option>
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 61
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 61);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 61) == ($context["country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 61);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "          </select>
          <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 68
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-select\"></select>
          <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
        </div>

        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 73
            echo "
          ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 74) == "select")) {
                // line 75
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 75)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 75);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 76);
                echo "</label> <select name=\"custom_field[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 76);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                echo "]\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                echo "\" class=\"form-select\">
                <option value=\"\">";
                // line 77
                echo ($context["text_select"] ?? null);
                echo "</option>
                ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 78));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 79
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 79);
                    echo "\"";
                    if (((($__internal_compile_0 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 79)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 79) == (($__internal_compile_1 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 79)] ?? null) : null)))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 79);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "              </select>
              <div id=\"error-shipping-custom-field-";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 85
            echo "
          ";
            // line 86
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 86) == "radio")) {
                // line 87
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 87)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87);
                echo "\">
              <label class=\"form-label\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 88);
                echo "</label>
              <div id=\"input-shipping-custom-field-";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 89);
                echo "\">
                ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 90));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 91
                    echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 92);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 92);
                    echo "\" id=\"input-shipping-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 92);
                    echo "\" class=\"form-check-input\"";
                    if (((($__internal_compile_2 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 92), (($__internal_compile_3 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92)] ?? null) : null)))) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-shipping-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 92);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 92);
                    echo "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "              </div>
              <div id=\"error-shipping-custom-field-";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 99
            echo "
          ";
            // line 100
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 100) == "checkbox")) {
                // line 101
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 101)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                echo "\">
              <label class=\"form-label\">";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 102);
                echo "</label>
              <div id=\"input-shipping-custom-field-";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                echo "\">
                ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 104));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 105
                    echo "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 106);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 106);
                    echo "\" id=\"input-shipping-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 106);
                    echo "\" class=\"form-check-input\"";
                    if (((($__internal_compile_4 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 106), (($__internal_compile_5 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106)] ?? null) : null)))) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-shipping-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 106);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 106);
                    echo "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "              </div>
              <div id=\"error-shipping-custom-field-";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 113
            echo "
          ";
            // line 114
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 114) == "text")) {
                // line 115
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 115)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 116);
                echo "</label> <input type=\"text\" name=\"custom_field[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 116);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                echo "]\" value=\"";
                if ((($__internal_compile_6 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116)] ?? null) : null)) {
                    echo (($__internal_compile_7 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 116);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 116);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                echo "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 120
            echo "
          ";
            // line 121
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 121) == "textarea")) {
                // line 122
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 122)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                echo "</label> <textarea name=\"custom_field[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 123);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "]\" rows=\"5\" placeholder=\"";
                if ((($__internal_compile_8 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null)) {
                    echo (($__internal_compile_9 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 123);
                }
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 123);
                echo "</textarea>
              <div id=\"error-shipping-custom-field-";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 127
            echo "
          ";
            // line 128
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 128) == "file")) {
                // line 129
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 129)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                echo "\">
              <label class=\"form-label\">";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 130);
                echo "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 132
                echo ($context["upload"] ?? null);
                echo "\" data-oc-size-max=\"";
                echo ($context["config_file_max_size"] ?? null);
                echo "\" data-oc-size-error=\"";
                echo ($context["error_upload_size"] ?? null);
                echo "\" data-oc-target=\"#input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
                <input type=\"hidden\" name=\"custom_field[";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 133);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                echo "]\" value=\"";
                if ((($__internal_compile_10 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null)) {
                    echo (($__internal_compile_11 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null);
                }
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                echo "\"/>
                <div id=\"error-shipping-custom-field-";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
            }
            // line 138
            echo "
          ";
            // line 139
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 139) == "date")) {
                // line 140
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 140)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 141);
                echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 143);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                echo "]\" value=\"";
                if ((($__internal_compile_12 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143)] ?? null) : null)) {
                    echo (($__internal_compile_13 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 143);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 143);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                echo "\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                // line 146
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 149
            echo "
          ";
            // line 150
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 150) == "time")) {
                // line 151
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 151)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 152);
                echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 154);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                echo "]\" value=\"";
                if ((($__internal_compile_14 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null)) {
                    echo (($__internal_compile_15 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 154);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 154);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                echo "\" class=\"form-control time\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 160
            echo "
          ";
            // line 161
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 161) == "datetime")) {
                // line 162
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 162)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 163);
                echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 165);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                echo "]\" value=\"";
                if ((($__internal_compile_16 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165)] ?? null) : null)) {
                    echo (($__internal_compile_17 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 165);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 165);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                echo "\" class=\"form-control datetime\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                // line 168
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 171
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "
      </div>
      <div class=\"text-end mb-3\">
        <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\">";
        // line 176
        echo ($context["button_continue"] ?? null);
        echo "</button>
      </div>
    </form>
  </div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('input[name=\\'shipping_existing\\']').on('change', function() {
    if (\$(this).val() == 1) {
        \$('#shipping-existing').show();
        \$('#shipping-new').hide();
    } else {
        \$('#shipping-existing').hide();
        \$('#shipping-new').show();
    }
});

// Existing Shipping Address
\$('#input-shipping-address').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_address|address&language=";
        // line 198
        echo ($context["language"] ?? null);
        echo "&address_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#button-shipping-method').trigger('click');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// New Shipping Address
\$('#form-shipping-address').on('submit', function(e) {
    e.preventDefault();

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_address|save&language=";
        // line 234
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: \$('#form-shipping-address').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-shipping-address').prop('disabled', true).addClass('loading');
            },
            complete: function() {
                \$('#button-shipping-address').prop('disabled', false).removeClass('loading');
            },
            success: function(json) {
                \$('#form-shipping-address').find('.is-invalid').removeClass('is-invalid');
                \$('#form-shipping-address').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (i in json['error']) {
                        for (key in json['error']) {
                            \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                            \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                        }
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    var addresses = [];

                    // Shipping addresses
                    if (json['addresses']) {
                        for (i in json['addresses']) {
                            addresses[i] = {
                                text: json['addresses'][i]['firstname'] + ' ' + json['addresses'][i]['lastname'] + ', ' + json['addresses'][i]['address_1'] + ', ' + json['addresses'][i]['city'] + ', ' + json['addresses'][i]['zone'] + ', ' + json['addresses'][i]['country'],
                                value: json['addresses'][i]['address_id']
                            };
                        }
                    }

                  ";
        // line 281
        if (($context["config_checkout_address"] ?? null)) {
            // line 282
            echo "                    html = '';

                    for (i in addresses) {
                        if (addresses[i]['value'] == \$('#input-payment-address').val()) {
                            html += '<option value=\"' + addresses[i]['value'] + '\" selected>' + addresses[i]['text'] + '</option>';
                        } else {
                            html += '<option value=\"' + addresses[i]['value'] + '\">' + addresses[i]['text'] + '</option>';
                        }
                    }

                    \$('#input-payment-address').html(html);

                    \$('#payment-addresses').css({display: 'block'});

                    \$('#input-payment-existing').trigger('click');
                  ";
        }
        // line 298
        echo "
                    // Shipping method
                    html = '';

                    for (i in addresses) {
                        if (addresses[i]['value'] == json['address_id']) {
                            html += '<option value=\"' + addresses[i]['value'] + '\" selected>' + addresses[i]['text'] + '</option>';
                        } else {
                            html += '<option value=\"' + addresses[i]['value'] + '\">' + addresses[i]['text'] + '</option>';
                        }
                    }

                    \$('#input-shipping-address').html(html);

                    \$('#shipping-addresses').css({display: 'block'});

                    \$('#input-shipping-existing').trigger('click');

                    \$('#form-shipping-address')[0].reset();

                    \$('#button-shipping-method').trigger('click');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-shipping-country').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language=";
        // line 333
        echo ($context["language"] ?? null);
        echo "&country_id=' + \$('#input-shipping-country').val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-shipping-postcode').parent().addClass('required');
                } else {
                    \$('#input-shipping-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">";
        // line 348
        echo ($context["text_select"] ?? null);
        echo "</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == '";
        // line 354
        echo ($context["zone_id"] ?? null);
        echo "') {
                            html += ' selected';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>";
        // line 361
        echo ($context["text_none"] ?? null);
        echo "</option>';
                }

                \$('#input-shipping-zone').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-shipping-country').trigger('change');

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
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  924 => 361,  914 => 354,  905 => 348,  887 => 333,  850 => 298,  832 => 282,  830 => 281,  780 => 234,  741 => 198,  716 => 176,  711 => 173,  704 => 171,  698 => 168,  680 => 165,  673 => 163,  664 => 162,  662 => 161,  659 => 160,  653 => 157,  635 => 154,  628 => 152,  619 => 151,  617 => 150,  614 => 149,  608 => 146,  590 => 143,  583 => 141,  574 => 140,  572 => 139,  569 => 138,  562 => 134,  550 => 133,  538 => 132,  533 => 130,  524 => 129,  522 => 128,  519 => 127,  513 => 124,  493 => 123,  484 => 122,  482 => 121,  479 => 120,  473 => 117,  453 => 116,  444 => 115,  442 => 114,  439 => 113,  433 => 110,  430 => 109,  407 => 106,  404 => 105,  400 => 104,  396 => 103,  392 => 102,  383 => 101,  381 => 100,  378 => 99,  372 => 96,  369 => 95,  346 => 92,  343 => 91,  339 => 90,  335 => 89,  331 => 88,  322 => 87,  320 => 86,  317 => 85,  311 => 82,  308 => 81,  293 => 79,  289 => 78,  285 => 77,  273 => 76,  264 => 75,  262 => 74,  259 => 73,  255 => 72,  248 => 68,  241 => 63,  226 => 61,  222 => 60,  218 => 59,  214 => 58,  202 => 53,  190 => 48,  179 => 44,  167 => 39,  156 => 35,  144 => 30,  132 => 25,  120 => 20,  115 => 17,  90 => 15,  86 => 14,  82 => 13,  73 => 11,  63 => 8,  53 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/shipping_address.twig", "/var/www/html/opencart/upload/catalog/view/template/checkout/shipping_address.twig");
    }
}
