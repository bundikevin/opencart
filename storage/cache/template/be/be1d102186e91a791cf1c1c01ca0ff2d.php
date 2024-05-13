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

/* catalog/view/template/checkout/register.twig */
class __TwigTemplate_96e04f5573f2d9e3731bf8392317a5de extends Template
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
        echo "<form id=\"form-register\">
  <p>";
        // line 2
        echo ($context["text_login"] ?? null);
        echo "</p>
  <fieldset>
    <legend>";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</legend>
    <div class=\"row\">

      ";
        // line 7
        if (($context["config_checkout_guest"] ?? null)) {
            // line 8
            echo "        <div class=\"col mb-3 required\">
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"1\" id=\"input-register\" class=\"form-check-input\"";
            // line 10
            if (($context["account"] ?? null)) {
                echo " checked";
            }
            echo "/> <label for=\"input-register\" class=\"form-check-label\">";
            echo ($context["text_register"] ?? null);
            echo "</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"0\" id=\"input-guest\" class=\"form-check-input\"";
            // line 13
            if ( !($context["account"] ?? null)) {
                echo " checked";
            }
            echo "/> <label for=\"input-guest\" class=\"form-check-label\">";
            echo ($context["text_guest"] ?? null);
            echo "</label>
          </div>
        </div>
      ";
        }
        // line 17
        echo "
      <div class=\"col mb-3";
        // line 18
        echo (((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) <= 1)) ? (" d-none") : (""));
        echo "\">
        <label class=\"form-label\">";
        // line 19
        echo ($context["entry_customer_group"] ?? null);
        echo "</label> <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 21
            echo "            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 21);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 21) == ($context["customer_group_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 21);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </select>
      </div>

    </div>

    <div class=\"row  row-cols-1 row-cols-md-2\">
      <div class=\"col mb-3 required\">
        <label for=\"input-firstname\" class=\"form-label\">";
        // line 30
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
        <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-lastname\" class=\"form-label\">";
        // line 34
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
        <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-email\" class=\"form-label\">";
        // line 38
        echo ($context["entry_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"email\" value=\"";
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
        <div id=\"error-email\" class=\"invalid-feedback\"></div>
      </div>

      ";
        // line 42
        if (($context["config_telephone_display"] ?? null)) {
            // line 43
            echo "        <div class=\"col mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                echo " required";
            }
            echo "\">
          <label for=\"input-telephone\" class=\"form-label\">";
            // line 44
            echo ($context["entry_telephone"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"telephone\" value=\"";
            // line 45
            echo ($context["telephone"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_telephone"] ?? null);
            echo "\" id=\"input-telephone\" class=\"form-control\"/>
          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
        </div>
      ";
        }
        // line 49
        echo "
      ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 51
            echo "
        ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 52) == "account")) {
                // line 53
                echo "
          ";
                // line 54
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 54) == "select")) {
                    // line 55
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 55);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 56
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 56);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 56);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 56);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 56);
                    echo "]\" id=\"input-customer-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 56);
                    echo "\" class=\"form-select\">
                <option value=\"\">";
                    // line 57
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 58));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 59
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 59);
                        echo "\"";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 59)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 59) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 59)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 59);
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "              </select>
              <div id=\"error-custom-field-";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 62);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 65
                echo "
          ";
                // line 66
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 66) == "radio")) {
                    // line 67
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 67);
                    echo "\">
              <label class=\"form-label\">";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 68);
                    echo "</label>
              <div id=\"input-custom-field-";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 69);
                    echo "\">
                ";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 70));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 71
                        echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                        // line 72
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 72);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 72);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 72);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 72) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 72);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 72);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "              </div>
              <div id=\"error-custom-field-";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 79
                echo "
          ";
                // line 80
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 80) == "checkbox")) {
                    // line 81
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                    echo "\">
              <label class=\"form-label\">";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 82);
                    echo "</label>
              <div id=\"input-custom-field-";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83);
                    echo "\">
                ";
                    // line 84
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 84));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 85
                        echo "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 86
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 86);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 86);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo "              </div>
              <div id=\"error-custom-field-";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 93
                echo "
          ";
                // line 94
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 94) == "text")) {
                    // line 95
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 96);
                    echo "</label>
              <input type=\"text\" name=\"custom_field[";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 97);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                    echo "]\" value=\"";
                    if ((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97)] ?? null) : null)) {
                        echo (($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 97);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 97);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                    echo "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 101
                echo "
          ";
                // line 102
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 102) == "textarea")) {
                    // line 103
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 104);
                    echo "</label>
              <textarea name=\"custom_field[";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 105);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 105);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                    echo "\" class=\"form-control\">";
                    if ((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105)] ?? null) : null)) {
                        echo (($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 105);
                    }
                    echo "</textarea>
              <div id=\"error-custom-field-";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 109
                echo "
          ";
                // line 110
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 110) == "file")) {
                    // line 111
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 112
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 112);
                    echo "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 114
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                    echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                <input type=\"hidden\" name=\"custom_field[";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 115);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                    echo "]\" value=\"";
                    if ((($__internal_compile_10 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115)] ?? null) : null)) {
                        echo (($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115)] ?? null) : null);
                    }
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                    echo "\"/>
              </div>
              <div id=\"error-custom-field-";
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
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 121) == "date")) {
                    // line 122
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 125);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                    echo "]\" value=\"";
                    if ((($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125)] ?? null) : null)) {
                        echo (($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 125);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 125);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                    echo "\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-custom-field-";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 131
                echo "
          ";
                // line 132
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 132) == "time")) {
                    // line 133
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 134);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 136
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 136);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136);
                    echo "]\" value=\"";
                    if ((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136)] ?? null) : null)) {
                        echo (($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 136);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 136);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136);
                    echo "\" class=\"form-control time\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-custom-field-";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 142
                echo "
          ";
                // line 143
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 143) == "datetime")) {
                    // line 144
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 145);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 147);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                    echo "]\" value=\"";
                    if ((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147)] ?? null) : null)) {
                        echo (($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 147);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 147);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                    echo "\" class=\"form-control datetime\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-custom-field-";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 153
                echo "
        ";
            }
            // line 155
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "    </div>
  </fieldset>

  ";
        // line 159
        if (($context["config_checkout_address"] ?? null)) {
            // line 160
            echo "    <fieldset>
      <legend>";
            // line 161
            echo ($context["text_payment_address"] ?? null);
            echo "</legend>
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <label for=\"input-payment-company\" class=\"form-label\">";
            // line 164
            echo ($context["entry_company"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"payment_company\" value=\"";
            // line 165
            echo ($context["payment_company"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_company"] ?? null);
            echo "\" id=\"input-payment-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-address-1\" class=\"form-label\">";
            // line 168
            echo ($context["entry_address_1"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"payment_address_1\" value=\"";
            // line 169
            echo ($context["payment_address_1"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_address_1"] ?? null);
            echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
          <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-2\" class=\"form-label\">";
            // line 173
            echo ($context["entry_address_2"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"payment_address_2\" value=\"";
            // line 174
            echo ($context["payment_address_2"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_address_2"] ?? null);
            echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-city\" class=\"form-label\">";
            // line 177
            echo ($context["entry_city"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"payment_city\" value=\"";
            // line 178
            echo ($context["payment_city"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_city"] ?? null);
            echo "\" id=\"input-payment-city\" class=\"form-control\"/>
          <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-postcode\" class=\"form-label\">";
            // line 182
            echo ($context["entry_postcode"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"payment_postcode\" value=\"";
            // line 183
            echo ($context["payment_postcode"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_postcode"] ?? null);
            echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
          <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-country\" class=\"form-label\">";
            // line 187
            echo ($context["entry_country"] ?? null);
            echo "</label>
          <select name=\"payment_country_id\" id=\"input-payment-country\" class=\"form-select\">
            <option value=\"\">";
            // line 189
            echo ($context["text_select"] ?? null);
            echo "</option>
            ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 191
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 191);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 191) == ($context["payment_country_id"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 191);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "          </select>
          <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-zone\" class=\"form-label\">";
            // line 197
            echo ($context["entry_zone"] ?? null);
            echo "</label> <select name=\"payment_zone_id\" id=\"input-payment-zone\" class=\"form-select\" data-oc-value=\"";
            echo ($context["payment_zone_id"] ?? null);
            echo "\"></select>
          <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
        </div>
        ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 201
                echo "
          ";
                // line 202
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 202) == "address")) {
                    // line 203
                    echo "
            ";
                    // line 204
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 204) == "select")) {
                        // line 205
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 205)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 206
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 206);
                        echo "</label> <select name=\"payment_custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 206);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                        echo "]\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                        echo "\" class=\"form-select\">
                  <option value=\"\">";
                        // line 207
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                  ";
                        // line 208
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 208));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 209
                            echo "                    <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 209);
                            echo "\"";
                            if (((($__internal_compile_18 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 209) == (($__internal_compile_19 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209)] ?? null) : null)))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 209);
                            echo "</option>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 211
                        echo "                </select>
                <div id=\"error-payment-custom-field-";
                        // line 212
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 215
                    echo "
            ";
                    // line 216
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 216) == "radio")) {
                        // line 217
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 217)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217);
                        echo "\">
                <label class=\"form-label\">";
                        // line 218
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 218);
                        echo "</label>
                <div id=\"input-payment-custom-field-";
                        // line 219
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219);
                        echo "\">
                  ";
                        // line 220
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 220));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 221
                            echo "                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"payment_custom_field[";
                            // line 222
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 222);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 222);
                            echo "\" id=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 222);
                            echo "\" class=\"form-check-input\"";
                            if (((($__internal_compile_20 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 222) == (($__internal_compile_21 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222)] ?? null) : null)))) {
                                echo " checked";
                            }
                            echo "/>
                      <label for=\"input-payment-custom-value-";
                            // line 223
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 223);
                            echo "\" class=\"form-check-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 223);
                            echo "</label>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 226
                        echo "                </div>
                <div id=\"error-payment-custom-field-";
                        // line 227
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 230
                    echo "
            ";
                    // line 231
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 231) == "checkbox")) {
                        // line 232
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 232)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232);
                        echo "\">
                <label class=\"form-label\">";
                        // line 233
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 233);
                        echo "</label>
                <div id=\"input-payment-custom-field-";
                        // line 234
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                        echo "\">
                  ";
                        // line 235
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 235));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 236
                            echo "                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"payment_custom_field[";
                            // line 237
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 237);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 237);
                            echo "\" id=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 237);
                            echo "\" class=\"form-check-input\"";
                            if (((($__internal_compile_22 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 237), (($__internal_compile_23 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237)] ?? null) : null)))) {
                                echo " checked";
                            }
                            echo "/> <label for=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 237);
                            echo "\" class=\"form-check-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 237);
                            echo "</label>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 240
                        echo "                </div>
                <div id=\"error-payment-custom-field-";
                        // line 241
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 241);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 244
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 244) == "text")) {
                        // line 245
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 245)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 246
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 246);
                        echo "</label>
                <input type=\"text\" name=\"payment_custom_field[";
                        // line 247
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 247);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247);
                        echo "]\" value=\"";
                        if ((($__internal_compile_24 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247)] ?? null) : null)) {
                            echo (($__internal_compile_25 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 247);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 247);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247);
                        echo "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 248
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 251
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 251) == "textarea")) {
                        // line 252
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 252)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 253
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 253);
                        echo "</label> <textarea name=\"payment_custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 253);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 253);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                        echo "\" class=\"form-control\">";
                        if ((($__internal_compile_26 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253)] ?? null) : null)) {
                            echo (($__internal_compile_27 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 253);
                        }
                        echo "</textarea>
                <div id=\"error-payment-custom-field-";
                        // line 254
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 257
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 257) == "file")) {
                        // line 258
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 258)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 258);
                        echo "\">
                <label class=\"form-label\">";
                        // line 259
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 259);
                        echo "</label>
                <div>
                  <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                        // line 261
                        echo ($context["upload"] ?? null);
                        echo "\" data-oc-size-max=\"";
                        echo ($context["config_file_max_size"] ?? null);
                        echo "\" data-oc-size-error=\"";
                        echo ($context["error_upload_size"] ?? null);
                        echo "\" data-oc-target=\"#input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261);
                        echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
                  <input type=\"hidden\" name=\"payment_custom_field[";
                        // line 262
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 262);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 262);
                        echo "]\" value=\"";
                        if ((($__internal_compile_28 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 262)] ?? null) : null)) {
                            echo (($__internal_compile_29 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 262)] ?? null) : null);
                        }
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 262);
                        echo "\"/>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 264
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 267
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 267) == "date")) {
                        // line 268
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 268)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 268);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 269
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 269);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 269);
                        echo "</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"payment_custom_field[";
                        // line 271
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 271);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271);
                        echo "]\" value=\"";
                        if ((($__internal_compile_30 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271)] ?? null) : null)) {
                            echo (($__internal_compile_31 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 271);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 271);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271);
                        echo "\" class=\"form-control date\"/>
                  <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 274
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 274);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 277
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 277) == "time")) {
                        // line 278
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 278)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 278);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 279
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 279);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 279);
                        echo "</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"payment_custom_field[";
                        // line 281
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 281);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 281);
                        echo "]\" value=\"";
                        if ((($__internal_compile_32 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 281)] ?? null) : null)) {
                            echo (($__internal_compile_33 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 281)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 281);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 281);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 281);
                        echo "\" class=\"form-control time\"/>
                  <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 284
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 284);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 287
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 287) == "datetime")) {
                        // line 288
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 288)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 288);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 289
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 289);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 289);
                        echo "</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"payment_custom_field[";
                        // line 291
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 291);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 291);
                        echo "]\" value=\"";
                        if ((($__internal_compile_34 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 291)] ?? null) : null)) {
                            echo (($__internal_compile_35 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 291)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 291);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 291);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 291);
                        echo "\" class=\"form-control datetime\"/>
                  <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 294
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 294);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 297
                    echo "          ";
                }
                // line 298
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            echo "        ";
            if (($context["shipping_required"] ?? null)) {
                // line 300
                echo "          <div class=\"col mb-3\">
            <div class=\"form-check\">
              <input type=\"checkbox\" name=\"address_match\" value=\"1\" id=\"input-address-match\" class=\"form-check-input\" checked/> <label for=\"input-address-match\" class=\"form-check-label\">";
                // line 302
                echo ($context["entry_match"] ?? null);
                echo "</label>
            </div>
          </div>
        ";
            }
            // line 306
            echo "      </div>
    </fieldset>
  ";
        }
        // line 309
        echo "
  <fieldset id=\"shipping-address\" style=\"display: ";
        // line 310
        if ( !($context["config_checkout_address"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <legend>";
        // line 311
        echo ($context["text_shipping_address"] ?? null);
        echo "</legend>
    <div class=\"row row-cols-1 row-cols-md-2\">
      ";
        // line 313
        if (($context["config_checkout_address"] ?? null)) {
            // line 314
            echo "        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">";
            // line 315
            echo ($context["entry_firstname"] ?? null);
            echo "</label> <input type=\"text\" name=\"shipping_firstname\" value=\"";
            echo ($context["shipping_firstname"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_firstname"] ?? null);
            echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">";
            // line 319
            echo ($context["entry_lastname"] ?? null);
            echo "</label> <input type=\"text\" name=\"shipping_lastname\" value=\"";
            echo ($context["shipping_lastname"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_lastname"] ?? null);
            echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>
      ";
        }
        // line 323
        echo "      <div class=\"col mb-3\">
        <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 324
        echo ($context["entry_company"] ?? null);
        echo "</label> <input type=\"text\" name=\"shipping_company\" value=\"";
        echo ($context["shipping_company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 327
        echo ($context["entry_address_1"] ?? null);
        echo "</label> <input type=\"text\" name=\"shipping_address_1\" value=\"";
        echo ($context["shipping_address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
        <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 331
        echo ($context["entry_address_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"shipping_address_2\" value=\"";
        echo ($context["shipping_address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 334
        echo ($context["entry_city"] ?? null);
        echo "</label> <input type=\"text\" name=\"shipping_city\" value=\"";
        echo ($context["shipping_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
        <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 338
        echo ($context["entry_postcode"] ?? null);
        echo "</label> <input type=\"text\" name=\"shipping_postcode\" value=\"";
        echo ($context["shipping_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
        <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 342
        echo ($context["entry_country"] ?? null);
        echo "</label> <select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"form-select\">
          <option value=\"\">";
        // line 343
        echo ($context["text_select"] ?? null);
        echo "</option>
          ";
        // line 344
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 345
            echo "            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 345);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 345) == ($context["shipping_country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 345);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 347
        echo "        </select>
        <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 351
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"form-select\" data-oc-value=\"";
        echo ($context["shipping_zone_id"] ?? null);
        echo "\"></select>
        <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
      </div>
      ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 355
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 355) == "address")) {
                // line 356
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 356) == "select")) {
                    // line 357
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 357)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 357);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 358
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 358);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 358);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 358);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 358);
                    echo "]\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 358);
                    echo "\" class=\"form-select\">
                <option value=\"\">";
                    // line 359
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 360
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 360));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 361
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 361);
                        echo "\"";
                        if (((($__internal_compile_36 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 361)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 361) == (($__internal_compile_37 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 361)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 361);
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 363
                    echo "              </select>
              <div id=\"error-shipping-custom-field-";
                    // line 364
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 364);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 367
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 367) == "radio")) {
                    // line 368
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 368)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 368);
                    echo "\">
              <label class=\"form-label\">";
                    // line 369
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 369);
                    echo "</label>
              <div id=\"input-shipping-custom-field-";
                    // line 370
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 370);
                    echo "\">
                ";
                    // line 371
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 371));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 372
                        echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                        // line 373
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 373);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 373);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 373);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 373);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_38 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 373)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 373), (($__internal_compile_39 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 373)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 373);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 373);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 376
                    echo "              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 377
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 377);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 380
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 380) == "checkbox")) {
                    // line 381
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 381)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 381);
                    echo "\">
              <label class=\"form-label\">";
                    // line 382
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 382);
                    echo "</label>
              <div id=\"input-shipping-custom-field-";
                    // line 383
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 383);
                    echo "\">
                ";
                    // line 384
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 384));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 385
                        echo "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 386
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 386);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 386);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 386);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 386);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_40 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 386)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 386), (($__internal_compile_41 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 386)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 386);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 386);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 389
                    echo "              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 390
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 390);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 393
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 393) == "text")) {
                    // line 394
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 394)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 394);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 395
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 395);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 395);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 395);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 395);
                    echo "]\" value=\"";
                    if ((($__internal_compile_42 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 395)] ?? null) : null)) {
                        echo (($__internal_compile_43 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 395)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 395);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 395);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 395);
                    echo "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 396
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 396);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 399
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 399) == "textarea")) {
                    // line 400
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 400)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 400);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 401
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 401);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 401);
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 401);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 401);
                    echo "]\" rows=\"5\" placeholder=\"";
                    if ((($__internal_compile_44 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 401)] ?? null) : null)) {
                        echo (($__internal_compile_45 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 401)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 401);
                    }
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 401);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 401);
                    echo "</textarea>
              <div id=\"error-shipping-custom-field-";
                    // line 402
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 402);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 405
                echo "
          ";
                // line 406
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 406) == "file")) {
                    // line 407
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 407)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 407);
                    echo "\">
              <label class=\"form-label\">";
                    // line 408
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 408);
                    echo "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 410
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-target=\"#input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 410);
                    echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                <input type=\"hidden\" name=\"custom_field[";
                    // line 411
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 411);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 411);
                    echo "]\" value=\"";
                    if ((($__internal_compile_46 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 411)] ?? null) : null)) {
                        echo (($__internal_compile_47 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 411)] ?? null) : null);
                    }
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 411);
                    echo "\"/>
                <div id=\"error-shipping-custom-field-";
                    // line 412
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 412);
                    echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
                }
                // line 416
                echo "
          ";
                // line 417
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 417) == "date")) {
                    // line 418
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 418)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 418);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 419
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 419);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 419);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 421
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 421);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 421);
                    echo "]\" value=\"";
                    if ((($__internal_compile_48 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 421)] ?? null) : null)) {
                        echo (($__internal_compile_49 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 421)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 421);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 421);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 421);
                    echo "\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 424
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 424);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 427
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 427) == "time")) {
                    // line 428
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 428)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 428);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 429
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 429);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 431
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 431);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 431);
                    echo "]\" value=\"";
                    if ((($__internal_compile_50 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 431)] ?? null) : null)) {
                        echo (($__internal_compile_51 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 431)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 431);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 431);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 431);
                    echo "\" class=\"form-control time\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 434
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 434);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 437
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 437) == "datetime")) {
                    // line 438
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 438)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 438);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 439
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 439);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 439);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 441
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 441);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441);
                    echo "]\" value=\"";
                    if ((($__internal_compile_52 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441)] ?? null) : null)) {
                        echo (($__internal_compile_53 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 441);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 441);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441);
                    echo "\" class=\"form-control datetime\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 444
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 444);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 447
                echo "        ";
            }
            // line 448
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 449
        echo "    </div>
  </fieldset>
  <div id class=\"row row-cols-1 row-cols-md-2\">
    <div id=\"password\" class=\"col mb-3 required\">
      <fieldset>
        <legend>";
        // line 454
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
        <div class=\"row\">
          <div class=\"col mb-3 required\">
            <label for=\"input-password\" class=\"form-label\">";
        // line 457
        echo ($context["entry_password"] ?? null);
        echo "</label> <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
            <div id=\"error-password\" class=\"invalid-feedback\"></div>
          </div>
        </div>
      </fieldset>
    </div>
    <div class=\"col mb-3 required\">";
        // line 463
        echo ($context["captcha"] ?? null);
        echo "</div>
    <div class=\"col mb-3\">
      <div class=\"form-check\">
        <label for=\"input-newsletter\" class=\"form-check-label\">";
        // line 466
        echo ($context["entry_newsletter"] ?? null);
        echo "</label> <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"/>
      </div>
      ";
        // line 468
        if (($context["text_agree"] ?? null)) {
            // line 469
            echo "        <div id=\"agree\" class=\"form-check\">
          <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-register-agree\" class=\"form-check-input\"/> <label class=\"form-check-label\">";
            // line 470
            echo ($context["text_agree"] ?? null);
            echo "</label>
        </div>
      ";
        }
        // line 473
        echo "      <button type=\"submit\" id=\"button-register\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
    </div>
  </div>
</form>
<script type=\"text/javascript\"><!--
// Account
\$('input[name=\\'account\\']').on('click', function () {
    if (\$(this).val() == 1) {
        \$('#password').removeClass('d-none');
    } else {
        // If guest hide password field
        \$('#password').addClass('d-none');
    }

    if (\$(this).val() == 1) {
        \$('#agree').removeClass('d-none');
    } else {
        // If guest hide register agree field
        \$('#agree').addClass('d-none');
    }
});

\$('input[name=\\'account\\']:checked').trigger('click');

// Customer Group
\$('#input-customer-group').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=account/custom_field&language=";
        // line 503
        echo ($context["language"] ?? null);
        echo "&customer_group_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                \$('.custom-field').addClass('d-none');
                \$('.custom-field').removeClass('required');

                for (i = 0; i < json.length; i++) {
                    custom_field = json[i];

                    \$('.custom-field-' + custom_field['custom_field_id']).removeClass('d-none');

                    if (custom_field['required']) {
                        \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                    }
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-customer-group').trigger('change');

\$('#input-address-match').on('change', function () {
    if (\$(this).prop('checked')) {
        \$('#shipping-address').hide();
    } else {
        \$('#shipping-address').show();
    }
});

\$('#form-register').on('submit', function (e) {
    e.preventDefault();

    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/register|save&language=";
        // line 549
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: \$('#form-register').serialize(),
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function () {
                \$(element).prop('disabled', true).addClass('loading');
            },
            complete: function () {
                \$(element).prop('disabled', false).removeClass('loading');
            },
            success: function (json) {
                \$('#form-register').find('.is-invalid').removeClass('is-invalid');
                \$('#form-register').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (key in json['error']) {
                        \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                        \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    if (\$('#input-register').prop('checked')) {
                        \$('input[name=\\'account\\']').prop('disabled', true);
                        \$('#input-customer-group').prop('disabled', true);
                        \$('#input-password').prop('disabled', true);
                        \$('#input-captcha').prop('disabled', true);
                        \$('#input-register-agree').prop('disabled', true);
                    }

                  ";
        // line 590
        if (($context["shipping_required"] ?? null)) {
            // line 591
            echo "                    \$('#button-shipping-method').trigger('click');
                  ";
        } else {
            // line 593
            echo "                    \$('#button-payment-method').trigger('click');
                  ";
        }
        // line 595
        echo "                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('select[name\$=\\'_country_id\\']').on('change', function () {
    var element = this;
    var type = \$(this).attr('name').slice(0, -11);

    console.log(type);

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language=";
        // line 612
        echo ($context["language"] ?? null);
        echo "&country_id=' + \$('#input-' + type + '-country').val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-' + type + '-postcode').parent().addClass('required');
                } else {
                    \$('#input-' + type + '-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">";
        // line 627
        echo ($context["text_select"] ?? null);
        echo "</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == \$('#input-' + type + '-zone').attr('data-oc-value')) {
                            html += ' selected';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>";
        // line 640
        echo ($context["text_none"] ?? null);
        echo "</option>';
                }

                \$('#input-' + type + '-zone').html(html);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('select[name\$=\\'_country_id\\']').trigger('change');

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
        return "catalog/view/template/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2027 => 640,  2011 => 627,  1993 => 612,  1974 => 595,  1970 => 593,  1966 => 591,  1964 => 590,  1920 => 549,  1871 => 503,  1837 => 473,  1831 => 470,  1828 => 469,  1826 => 468,  1821 => 466,  1815 => 463,  1804 => 457,  1798 => 454,  1791 => 449,  1785 => 448,  1782 => 447,  1776 => 444,  1758 => 441,  1751 => 439,  1742 => 438,  1739 => 437,  1733 => 434,  1715 => 431,  1708 => 429,  1699 => 428,  1696 => 427,  1690 => 424,  1672 => 421,  1665 => 419,  1656 => 418,  1654 => 417,  1651 => 416,  1644 => 412,  1632 => 411,  1620 => 410,  1615 => 408,  1606 => 407,  1604 => 406,  1601 => 405,  1595 => 402,  1575 => 401,  1566 => 400,  1563 => 399,  1557 => 396,  1537 => 395,  1528 => 394,  1525 => 393,  1519 => 390,  1516 => 389,  1493 => 386,  1490 => 385,  1486 => 384,  1482 => 383,  1478 => 382,  1469 => 381,  1466 => 380,  1460 => 377,  1457 => 376,  1434 => 373,  1431 => 372,  1427 => 371,  1423 => 370,  1419 => 369,  1410 => 368,  1407 => 367,  1401 => 364,  1398 => 363,  1383 => 361,  1379 => 360,  1375 => 359,  1363 => 358,  1354 => 357,  1351 => 356,  1348 => 355,  1344 => 354,  1336 => 351,  1330 => 347,  1315 => 345,  1311 => 344,  1307 => 343,  1303 => 342,  1292 => 338,  1281 => 334,  1271 => 331,  1260 => 327,  1250 => 324,  1247 => 323,  1236 => 319,  1225 => 315,  1222 => 314,  1220 => 313,  1215 => 311,  1207 => 310,  1204 => 309,  1199 => 306,  1192 => 302,  1188 => 300,  1185 => 299,  1179 => 298,  1176 => 297,  1170 => 294,  1152 => 291,  1145 => 289,  1136 => 288,  1133 => 287,  1127 => 284,  1109 => 281,  1102 => 279,  1093 => 278,  1090 => 277,  1084 => 274,  1066 => 271,  1059 => 269,  1050 => 268,  1047 => 267,  1041 => 264,  1028 => 262,  1016 => 261,  1011 => 259,  1002 => 258,  999 => 257,  993 => 254,  973 => 253,  964 => 252,  961 => 251,  955 => 248,  939 => 247,  933 => 246,  924 => 245,  921 => 244,  915 => 241,  912 => 240,  889 => 237,  886 => 236,  882 => 235,  878 => 234,  874 => 233,  865 => 232,  863 => 231,  860 => 230,  854 => 227,  851 => 226,  840 => 223,  826 => 222,  823 => 221,  819 => 220,  815 => 219,  811 => 218,  802 => 217,  800 => 216,  797 => 215,  791 => 212,  788 => 211,  773 => 209,  769 => 208,  765 => 207,  753 => 206,  744 => 205,  742 => 204,  739 => 203,  737 => 202,  734 => 201,  730 => 200,  722 => 197,  716 => 193,  701 => 191,  697 => 190,  693 => 189,  688 => 187,  679 => 183,  675 => 182,  666 => 178,  662 => 177,  654 => 174,  650 => 173,  641 => 169,  637 => 168,  629 => 165,  625 => 164,  619 => 161,  616 => 160,  614 => 159,  609 => 156,  603 => 155,  599 => 153,  593 => 150,  575 => 147,  568 => 145,  563 => 144,  561 => 143,  558 => 142,  552 => 139,  534 => 136,  527 => 134,  522 => 133,  520 => 132,  517 => 131,  511 => 128,  493 => 125,  486 => 123,  481 => 122,  479 => 121,  476 => 120,  470 => 117,  457 => 115,  445 => 114,  438 => 112,  433 => 111,  431 => 110,  428 => 109,  422 => 106,  406 => 105,  400 => 104,  395 => 103,  393 => 102,  390 => 101,  384 => 98,  368 => 97,  362 => 96,  357 => 95,  355 => 94,  352 => 93,  346 => 90,  343 => 89,  320 => 86,  317 => 85,  313 => 84,  309 => 83,  305 => 82,  300 => 81,  298 => 80,  295 => 79,  289 => 76,  286 => 75,  263 => 72,  260 => 71,  256 => 70,  252 => 69,  248 => 68,  243 => 67,  241 => 66,  238 => 65,  232 => 62,  229 => 61,  214 => 59,  210 => 58,  206 => 57,  194 => 56,  189 => 55,  187 => 54,  184 => 53,  182 => 52,  179 => 51,  175 => 50,  172 => 49,  163 => 45,  159 => 44,  152 => 43,  150 => 42,  139 => 38,  128 => 34,  117 => 30,  108 => 23,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  78 => 17,  67 => 13,  57 => 10,  53 => 8,  51 => 7,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/register.twig", "/var/www/html/opencart/upload/catalog/view/template/checkout/register.twig");
    }
}
