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

/* admin/view/template/sale/order_info.twig */
class __TwigTemplate_b580207b1fb49288134abf9d13e1dbf8 extends Template
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
      <div class=\"float-end\"><a href=\"";
        // line 5
        echo ($context["invoice"] ?? null);
        echo "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info";
        if ( !($context["order_id"] ?? null)) {
            echo " disabled";
        }
        echo "\"><i class=\"fas fa-print\"></i></a> <a href=\"";
        echo ($context["shipping"] ?? null);
        echo "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info";
        if ( !($context["shipping_code"] ?? null)) {
            echo " disabled";
        }
        echo "\"><i class=\"fas fa-truck\"></i></a> <a href=\"";
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fas fa-info-circle\"></i> ";
        // line 16
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">

          <div class=\"col\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 23
        echo ($context["text_invoice"] ?? null);
        echo "</strong>
                  <br/>
                  <span id=\"invoice-value\">";
        // line 25
        echo ($context["invoice_prefix"] ?? null);
        echo ($context["invoice_no"] ?? null);
        echo "</span>
                </div>
              </div>
              ";
        // line 28
        if ( !($context["invoice_no"] ?? null)) {
            // line 29
            echo "                <button type=\"button\" id=\"button-invoice\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_generate"] ?? null);
            echo "\" class=\"btn btn-outline-primary\"><i class=\"fas fa-cog\"></i></button>
              ";
        } else {
            // line 31
            echo "                <button type=\"button\" disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fas fa-cog\"></i></button>
              ";
        }
        // line 33
        echo "            </div>
          </div>

          <div class=\"col\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 39
        echo ($context["text_customer"] ?? null);
        echo "</strong>
                  <br/>
                  ";
        // line 41
        if (($context["customer_id"] ?? null)) {
            // line 42
            echo "                    <div id=\"customer-value\"><a href=\"index.php?route=customer/customer|form&user_token=";
            echo ($context["user_token"] ?? null);
            echo "&customer_id=";
            echo ($context["customer_id"] ?? null);
            echo "\" target=\"_blank\">";
            echo ($context["customer"] ?? null);
            echo "</a></div>
                  ";
        } else {
            // line 44
            echo "                    <div id=\"customer-value\">";
            echo ($context["customer"] ?? null);
            echo "</div>
                  ";
        }
        // line 46
        echo "                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-customer\" class=\"btn btn-outline-primary\"><i class=\"fas fa-cog\"></i></button>
            </div>
          </div>

          <div class=\"col\">
            <div class=\"form-control p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
        // line 54
        echo ($context["text_date_added"] ?? null);
        echo "</strong>
                <br/>
                ";
        // line 56
        echo ($context["date_added"] ?? null);
        echo "
              </div>
            </div>
          </div>
        </div>

        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td class=\"text-start\">";
        // line 65
        echo ($context["column_product"] ?? null);
        echo "</td>
              <td class=\"text-start\">";
        // line 66
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-end\">";
        // line 67
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-end\">";
        // line 68
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-end\">";
        // line 69
        echo ($context["column_total"] ?? null);
        echo "</td>
              <td class=\"text-end\" style=\"width: 1px;\">";
        // line 70
        echo ($context["column_action"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody id=\"order-products\">
            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_product"]) {
            // line 75
            echo "              <tr>
                <td class=\"text-start\"><a href=\"index.php?route=catalog/product|form&user_token=";
            // line 76
            echo ($context["user_token"] ?? null);
            echo "&product_id=";
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "product_id", [], "any", false, false, false, 76);
            echo "\" target=\"_blank\">";
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "name", [], "any", false, false, false, 76);
            echo "</a>

                  ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 78)) {
                // line 79
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 79));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 80
                    echo "                      <br/>
                      <small> - ";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 81);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 81);
                    echo "</small>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "                  ";
            }
            // line 84
            echo "
                  ";
            // line 85
            if (twig_get_attribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 85)) {
                // line 86
                echo "                    <br/>
                    <small> - ";
                // line 87
                echo ($context["text_points"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 87);
                echo "</small>
                  ";
            }
            // line 89
            echo "
                  ";
            // line 90
            if (twig_get_attribute($this->env, $this->source, $context["order_product"], "subscription", [], "any", false, false, false, 90)) {
                // line 91
                echo "                    <br/>
                    <small> - ";
                // line 92
                echo ($context["text_subscription"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, ($context["subscription"] ?? null), "description", [], "any", false, false, false, 92);
                echo "</small>
                  ";
            }
            // line 94
            echo "
                </td>
                <td class=\"text-start\">";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "model", [], "any", false, false, false, 96);
            echo "</td>
                <td class=\"text-end\">";
            // line 97
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 97);
            echo "</td>
                <td class=\"text-end\">";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "price", [], "any", false, false, false, 98);
            echo "</td>
                <td class=\"text-end\">";
            // line 99
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "total", [], "any", false, false, false, 99);
            echo "</td>
                <td class=\"text-end\">
                  <form>
                    <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
            // line 102
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button>
                    <input type=\"hidden\" name=\"key\" value=\"";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "cart_id", [], "any", false, false, false, 103);
            echo "\"/>
                  </form>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "          </tbody>
          <tbody id=\"order-vouchers\">
            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_voucher"]) {
            // line 111
            echo "              <tr>
                <td class=\"text-start\">";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "description", [], "any", false, false, false, 112);
            echo "</td>
                <td></td>
                <td class=\"text-end\">1</td>
                <td class=\"text-end\">";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "amount", [], "any", false, false, false, 115);
            echo "</td>
                <td class=\"text-end\">";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "amount", [], "any", false, false, false, 116);
            echo "</td>
                <td class=\"text-end\">
                  <form>
                    <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
            // line 119
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button>
                    <input type=\"hidden\" name=\"key\" value=\"";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "key", [], "any", false, false, false, 120);
            echo "\"/>
                  </form>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "
            ";
        // line 126
        if (( !($context["order_products"] ?? null) &&  !($context["order_vouchers"] ?? null))) {
            // line 127
            echo "              <tr>
                <td colspan=\"6\" class=\"text-center\">";
            // line 128
            echo ($context["text_no_results"] ?? null);
            echo "</td
              </tr>
            ";
        }
        // line 131
        echo "
          </tbody>
          <tfoot>
            <tr>
              <td colspan=\"5\"></td>
              <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-cart\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
            </tr>
          </tfoot>
        </table>

        <div id=\"collapse-order\" class=\"collapse\">
          <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">

            <div class=\"col\">
              <form id=\"form-store\" class=\"mb-3\">
                <div class=\"form-floating\">
                  <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 149
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 149);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 149) == ($context["store_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 149);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                  </select> <label for=\"input-store\">";
        echo ($context["entry_store"] ?? null);
        echo "</label>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-language\" class=\"mb-3\">
                <div class=\"form-floating\">
                  <select name=\"language\" id=\"input-language\" class=\"form-select\">
                    ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 161
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 161);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 161) == ($context["language_code"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 161);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                  </select> <label for=\"input-language\">";
        echo ($context["entry_language"] ?? null);
        echo "</label>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-currency\" class=\"mb-3\">
                <div class=\"form-floating\">
                  <select name=\"currency\" id=\"input-currency\" class=\"form-select\">
                    ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 173
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 173);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 173) == ($context["currency_code"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 173);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                  </select> <label for=\"input-currency\">";
        echo ($context["entry_currency"] ?? null);
        echo "</label>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-coupon\" class=\"mb-3\">
                <div class=\"input-group form-floating\">
                  <input type=\"text\" name=\"coupon\" value=\"";
        // line 183
        echo ($context["coupon"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_coupon"] ?? null);
        echo "\" id=\"input-coupon\" class=\"form-control\"/> <label for=\"input-coupon\">";
        echo ($context["entry_coupon"] ?? null);
        echo "</label>
                  <button type=\"submit\" id=\"button-coupon\" data-bs-toogle=\"tooltip\" title=\"";
        // line 184
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-outline-primary\"><i class=\"fas fa-check\"></i></button>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-voucher\">
                <div class=\"input-group form-floating\">
                  <input type=\"text\" name=\"voucher\" value=\"";
        // line 192
        echo ($context["voucher"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher"] ?? null);
        echo "\" id=\"input-voucher\" class=\"form-control\"/> <label for=\"input-voucher\">";
        echo ($context["entry_voucher"] ?? null);
        echo "</label>
                  <button type=\"submit\" id=\"button-voucher\" data-bs-toogle=\"tooltip\" title=\"";
        // line 193
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-outline-primary\"><i class=\"fas fa-check\"></i></button>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-reward\" class=\"mb-3\">
                <div class=\"input-group form-floating\">
                  <input type=\"text\" name=\"reward\" value=\"";
        // line 201
        echo ($context["reward"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_reward"] ?? null);
        echo "\" id=\"input-reward\" class=\"form-control\"/> <label for=\"input-reward\">";
        echo ($context["entry_reward"] ?? null);
        echo "</label>
                  <button type=\"submit\" id=\"button-reward\" class=\"btn btn-outline-primary\"><i class=\"fas fa-check\"></i></button>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <div class=\"input-group\">
                <div class=\"form-control border rounded-start\">
                  <div class=\"lead p-0\"><strong>";
        // line 210
        echo ($context["text_reward"] ?? null);
        echo "</strong>
                    <br/>
                    <div id=\"reward-value\">";
        // line 212
        echo ($context["points"] ?? null);
        echo "</div>
                  </div>
                </div>
                ";
        // line 215
        if ( !($context["reward_total"] ?? null)) {
            // line 216
            echo "                  <button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_reward_add"] ?? null);
            echo "\" class=\"btn btn-success\"";
            if (( !($context["customer_id"] ?? null) ||  !($context["points"] ?? null))) {
                echo " disabled";
            }
            echo "><i class=\"fas fa-plus-circle\"></i></button>
                ";
        } else {
            // line 218
            echo "                  <button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_reward_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button>
                ";
        }
        // line 220
        echo "              </div>
            </div>

            <div class=\"col\">
              <div class=\"input-group mb-3\">
                <div class=\"form-control border rounded-start\">
                  <div class=\"lead\"><strong>";
        // line 226
        echo ($context["text_affiliate"] ?? null);
        echo "</strong>
                    <br/>
                    ";
        // line 228
        if (($context["affiliate_id"] ?? null)) {
            // line 229
            echo "                      <div id=\"affiliate-value\"><a href=\"index.php?route=marketing/affiliate|form&user_token=";
            echo ($context["user_token"] ?? null);
            echo "&customer_id=";
            echo ($context["affiliate_id"] ?? null);
            echo "\" target=\"_blank\">";
            echo ($context["affiliate"] ?? null);
            echo "</a></div>
                    ";
        } else {
            // line 231
            echo "                      <div id=\"affiliate-value\">&nbsp;</div>
                    ";
        }
        // line 233
        echo "                  </div>
                </div>
                <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-affiliate\" class=\"btn btn-outline-primary\"><i class=\"fas fa-cog\"></i></button>
              </div>
            </div>

            <div class=\"col\">
              <div class=\"input-group mb-3\">
                <div class=\"form-control border rounded-start\">
                  <div class=\"lead\"><strong>";
        // line 242
        echo ($context["text_commission"] ?? null);
        echo "</strong>
                    <br/>
                    ";
        // line 244
        if (($context["commission"] ?? null)) {
            // line 245
            echo "                      <div id=\"commission-value\">";
            echo ($context["commission"] ?? null);
            echo "</div>
                    ";
        } else {
            // line 247
            echo "                      <div id=\"commission-value\">&nbsp;</div>
                    ";
        }
        // line 249
        echo "                  </div>
                </div>
                ";
        // line 251
        if ( !($context["commission_total"] ?? null)) {
            // line 252
            echo "                  <button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_commission_add"] ?? null);
            echo "\" class=\"btn btn-success\"";
            if ( !($context["affiliate_id"] ?? null)) {
                echo " disabled";
            }
            echo "><i class=\"fas fa-plus-circle\"></i></button>
                ";
        } else {
            // line 254
            echo "                  <button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_commission_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button>
                ";
        }
        // line 256
        echo "              </div>
            </div>

          </div>
        </div>

        <button type=\"button\" id=\"button-collapse\" class=\"btn btn-light btn-lg w-100 mb-3\">";
        // line 262
        echo ($context["text_more"] ?? null);
        echo " <i class=\"fas fa-angle-down\"></i></button>

        <div class=\"row\">
          <div class=\"col-md\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 268
        echo ($context["text_payment_address"] ?? null);
        echo "</strong>
                  <br/>
                  <div id=\"payment-address-value\">
                    ";
        // line 271
        if (($context["payment_firstname"] ?? null)) {
            // line 272
            echo "                      ";
            echo ($context["payment_firstname"] ?? null);
            echo " ";
            echo ($context["payment_lastname"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 275
        echo "
                    ";
        // line 276
        if (($context["payment_company"] ?? null)) {
            // line 277
            echo "                      ";
            echo ($context["payment_company"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 280
        echo "
                    ";
        // line 281
        if (($context["payment_address_1"] ?? null)) {
            // line 282
            echo "                      ";
            echo ($context["payment_address_1"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 285
        echo "
                    ";
        // line 286
        if (($context["payment_address_2"] ?? null)) {
            // line 287
            echo "                      ";
            echo ($context["payment_address_2"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 290
        echo "
                    ";
        // line 291
        if (($context["payment_city"] ?? null)) {
            // line 292
            echo "                      ";
            echo ($context["payment_city"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 295
        echo "
                    ";
        // line 296
        if (($context["payment_postcode"] ?? null)) {
            // line 297
            echo "                      ";
            echo ($context["payment_postcode"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 300
        echo "
                    ";
        // line 301
        if (($context["payment_zone"] ?? null)) {
            // line 302
            echo "                      ";
            echo ($context["payment_zone"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 305
        echo "                    ";
        if (($context["payment_country"] ?? null)) {
            // line 306
            echo "                      ";
            echo ($context["payment_country"] ?? null);
            echo "
                    ";
        }
        // line 308
        echo "                  </div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-payment-address\" class=\"btn btn-outline-primary float-end\"><i class=\"fas fa-cog\"></i></button>
            </div>
          </div>
          <div id=\"shipping-address\" class=\"col";
        // line 314
        if ( !($context["shipping_method"] ?? null)) {
            echo " d-none";
        }
        echo "\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 317
        echo ($context["text_shipping_address"] ?? null);
        echo "</strong>
                  <br/>
                  <div id=\"shipping-address-value\">
                    ";
        // line 320
        if (($context["shipping_firstname"] ?? null)) {
            // line 321
            echo "                      ";
            echo ($context["shipping_firstname"] ?? null);
            echo " ";
            echo ($context["shipping_lastname"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 324
        echo "                    ";
        if (($context["shipping_company"] ?? null)) {
            // line 325
            echo "                      ";
            echo ($context["shipping_company"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 328
        echo "                    ";
        if (($context["shipping_address_1"] ?? null)) {
            // line 329
            echo "                      ";
            echo ($context["shipping_address_1"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 332
        echo "                    ";
        if (($context["shipping_address_2"] ?? null)) {
            // line 333
            echo "                      ";
            echo ($context["shipping_address_2"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 336
        echo "                    ";
        if (($context["shipping_city"] ?? null)) {
            // line 337
            echo "                      ";
            echo ($context["shipping_city"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 340
        echo "                    ";
        if (($context["shipping_postcode"] ?? null)) {
            // line 341
            echo "                      ";
            echo ($context["shipping_postcode"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 344
        echo "                    ";
        if (($context["shipping_zone"] ?? null)) {
            // line 345
            echo "                      ";
            echo ($context["shipping_zone"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 348
        echo "                    ";
        if (($context["shipping_country"] ?? null)) {
            // line 349
            echo "                      ";
            echo ($context["shipping_country"] ?? null);
            echo "
                    ";
        }
        // line 351
        echo "                  </div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-shipping-address\" class=\"btn btn-outline-primary float-end\"><i class=\"fas fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <div class=\"row mb-3\">

          <div id=\"shipping-method\" class=\"col-md";
        // line 360
        if ( !($context["shipping_method"] ?? null)) {
            echo " d-none";
        }
        echo "\">
            <form id=\"form-shipping-method\">
              <div class=\"input-group form-floating\">
                <select name=\"shipping_method\" id=\"input-shipping-method\" class=\"form-select\">
                  <option value=\"\">";
        // line 364
        echo ($context["text_select"] ?? null);
        echo "</option>
                  ";
        // line 365
        if (($context["shipping_code"] ?? null)) {
            // line 366
            echo "                    <option value=\"";
            echo ($context["shipping_code"] ?? null);
            echo "\" selected>";
            echo ($context["shipping_method"] ?? null);
            echo "</option>
                  ";
        }
        // line 368
        echo "                </select> <label for=\"input-shipping-method\">";
        echo ($context["entry_shipping_method"] ?? null);
        echo "</label>
                <button type=\"button\" id=\"button-shipping-method\" class=\"btn btn-outline-primary\"><i class=\"fas fa-sync\"></i></button>
              </div>
            </form>
          </div>

          <div id=\"payment-method\" class=\"col-md\">
            <form id=\"form-payment-method\">
              <div class=\"input-group form-floating\">
                <select name=\"payment_method\" id=\"input-payment-method\" class=\"form-select\">
                  <option value=\"\">";
        // line 378
        echo ($context["text_select"] ?? null);
        echo "</option>
                  ";
        // line 379
        if (($context["payment_code"] ?? null)) {
            // line 380
            echo "                    <option value=\"";
            echo ($context["payment_code"] ?? null);
            echo "\" selected>";
            echo ($context["payment_method"] ?? null);
            echo "</option>
                  ";
        }
        // line 382
        echo "                </select> <label for=\"input-payment-method\">";
        echo ($context["entry_payment_method"] ?? null);
        echo "</label>
                <button type=\"button\" id=\"button-payment-method\" class=\"btn btn-outline-primary\"><i class=\"fas fa-sync\"></i></button>
              </div>
            </form>
          </div>

        </div>

        <div class=\"row\">
          <div class=\"col\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 394
        echo ($context["text_comment"] ?? null);
        echo "</strong>
                  <br/>
                  ";
        // line 396
        if (($context["comment"] ?? null)) {
            // line 397
            echo "                    <span id=\"comment-value\">";
            echo ($context["comment"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 399
            echo "                    <span id=\"comment-value\"></span>
                  ";
        }
        // line 401
        echo "                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-comment\" class=\"btn btn-outline-primary float-end\"><i class=\"fas fa-cog\"></i></button>
            </div>
          </div>
        </div>

        <table class=\"table table-bordered\">
          <tbody id=\"order-totals\">
            ";
        // line 410
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_total"]) {
            // line 411
            echo "              <tr>
                <td class=\"text-end\"><strong>";
            // line 412
            echo twig_get_attribute($this->env, $this->source, $context["order_total"], "title", [], "any", false, false, false, 412);
            echo "</strong></td>
                <td class=\"text-end\" style=\"width: 1px;\">";
            // line 413
            echo twig_get_attribute($this->env, $this->source, $context["order_total"], "text", [], "any", false, false, false, 413);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 416
        echo "          </tbody>
        </table>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"";
        // line 419
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-outline-primary\"><i class=\"fas fa-sync\"></i></button>
          <button type=\"button\" id=\"button-confirm\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i> ";
        // line 420
        echo ($context["button_confirm"] ?? null);
        echo "</button>
        </div>

      </div>


    </div>

    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fas fa-comment\"></i> ";
        // line 429
        echo ($context["text_history"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 432
        echo ($context["tab_history"] ?? null);
        echo "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-additional\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 433
        echo ($context["tab_additional"] ?? null);
        echo "</a></li>
          ";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 435
            echo "            <li class=\"nav-item\"><a href=\"#tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 435);
            echo "\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 435);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 437
        echo "        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-history\" class=\"tab-pane active\">
            <fieldset>
              <legend>";
        // line 441
        echo ($context["text_history"] ?? null);
        echo "</legend>
              <div id=\"history\">";
        // line 442
        echo ($context["history"] ?? null);
        echo "</div>
            </fieldset>
            <form id=\"form-history\">
              <fieldset>
                <legend>";
        // line 446
        echo ($context["text_history_add"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 448
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-select\">
                      ";
        // line 451
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 452
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 452);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 452) == ($context["order_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 452);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 454
        echo "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-override\" class=\"col-sm-2 col-form-label\">";
        // line 458
        echo ($context["entry_override"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"checkbox\" name=\"override\" value=\"1\" id=\"input-override\" class=\"form-check-input\">
                    </div>
                    <div class=\"form-text\">";
        // line 463
        echo ($context["help_override"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-notify\" class=\"col-sm-2 col-form-label\">";
        // line 467
        echo ($context["entry_notify"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\" class=\"form-check-input\"/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 475
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 477
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-history\" class=\"form-control\"></textarea>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"submit\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i> ";
        // line 481
        echo ($context["button_history_add"] ?? null);
        echo "</button>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 484
        echo ($context["order_id"] ?? null);
        echo "\" id=\"input-order-id\"/>
            </form>
          </div>
          <div id=\"tab-additional\" class=\"tab-pane\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
        // line 492
        echo ($context["text_browser"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 497
        echo ($context["text_ip"] ?? null);
        echo "</td>
                    <td>";
        // line 498
        echo ($context["ip"] ?? null);
        echo "</td>
                  </tr>
                  ";
        // line 500
        if (($context["forwarded_ip"] ?? null)) {
            // line 501
            echo "                    <tr>
                      <td>";
            // line 502
            echo ($context["text_forwarded_ip"] ?? null);
            echo "</td>
                      <td>";
            // line 503
            echo ($context["forwarded_ip"] ?? null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 506
        echo "                  <tr>
                    <td>";
        // line 507
        echo ($context["text_user_agent"] ?? null);
        echo "</td>
                    <td>";
        // line 508
        echo ($context["user_agent"] ?? null);
        echo "</td>
                  </tr>
                  <tr>
                    <td>";
        // line 511
        echo ($context["text_accept_language"] ?? null);
        echo "</td>
                    <td>";
        // line 512
        echo ($context["accept_language"] ?? null);
        echo "</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          ";
        // line 518
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 519
            echo "            <div id=\"tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 519);
            echo "\" class=\"tab-pane\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 519);
            echo "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 521
        echo "        </div>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-customer\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 531
        echo ($context["text_customer"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-customer\">
          <div class=\"mb-3\">
            <label for=\"input-customer\" class=\"form-label\">";
        // line 537
        echo ($context["entry_customer"] ?? null);
        echo "</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"customer\" value=\"";
        // line 539
        echo ($context["customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" list=\"list-customer\" class=\"form-control\"/> <a href=\"";
        echo ($context["customer_add"] ?? null);
        echo "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_customer_add"] ?? null);
        echo "\" class=\"btn btn-outline-secondary\"><i class=\"fas fa-user-plus\"></i></a>
            </div>
            <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 541
        echo ($context["customer_id"] ?? null);
        echo "\" id=\"input-customer-id\"/>
            <datalist id=\"list-customer\"></datalist>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-customer-group\" class=\"form-label\">";
        // line 545
        echo ($context["entry_customer_group"] ?? null);
        echo "</label> <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
              ";
        // line 546
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 547
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 547);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 547) == ($context["customer_group_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 547);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 549
        echo "            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-firstname\" class=\"form-label\">";
        // line 552
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
            <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-lastname\" class=\"form-label\">";
        // line 556
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
            <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-email\" class=\"form-label\">";
        // line 560
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 562
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/> <a href=\"mailto:";
        echo ($context["email"] ?? null);
        echo "\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-envelope\"></i></a>
            </div>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3";
        // line 566
        if (($context["config_telephone_required"] ?? null)) {
            echo " required";
        }
        echo "\">
            <label for=\"input-telephone\" class=\"form-label\">";
        // line 567
        echo ($context["entry_telephone"] ?? null);
        echo "</label> <input type=\"text\" name=\"telephone\" value=\"";
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
            <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
          </div>
          ";
        // line 570
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 571
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 571) == "account")) {
                // line 572
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 572) == "select")) {
                    // line 573
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 573);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 574
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 574);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 574);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 574);
                    echo "]\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 574);
                    echo "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 575
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 576
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 576));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 577
                        echo "                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 577);
                        echo "\"";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 577) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577)] ?? null) : null)))) {
                            echo " selected=\"selected\"";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 577);
                        echo "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 579
                    echo "                  </select>
                  <div id=\"error-custom-field-";
                    // line 580
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 580);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 583
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 583) == "radio")) {
                    // line 584
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 584);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 585
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 585);
                    echo "</label>
                  <div id=\"input-custom-field-";
                    // line 586
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 586);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 587
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 587));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 588
                        echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 589
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 589);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 589);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 589) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 589);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 589);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 592
                    echo "                  </div>
                  <div id=\"error-custom-field-";
                    // line 593
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 593);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 596
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 596) == "checkbox")) {
                    // line 597
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 598
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 598);
                    echo "</label>
                  <div id=\"input-custom-field-";
                    // line 599
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 599);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 600
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 600));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 601
                        echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 602
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 602);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 602);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 602), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 602);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 602);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 605
                    echo "                  </div>
                  <div id=\"error-custom-field-";
                    // line 606
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 606);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 609
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 609) == "text")) {
                    // line 610
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 610);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 611
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 611);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611)] ?? null) : null)) ? ((($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 611)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 611);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611);
                    echo "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 612
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 612);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 615
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 615) == "textarea")) {
                    // line 616
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 616);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 617
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 617);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 617);
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 617);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 617);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 617);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 617);
                    echo "</textarea>
                  <div id=\"error-custom-field-";
                    // line 618
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 618);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 621
                echo "
              ";
                // line 622
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 622) == "file")) {
                    // line 623
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 623);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 624
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 624);
                    echo "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-target=\"#input-custom-field-";
                    // line 626
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 626);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fas fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 627
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 627);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 627)] ?? null) : null)) ? ((($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 627)] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 627);
                    echo "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-";
                    // line 628
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 628);
                    echo "\"";
                    if ( !(($__internal_compile_10 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 628)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fas fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 629
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 629);
                    echo "\"";
                    if ( !(($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 629)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fas fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 631
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 631);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 634
                echo "
              ";
                // line 635
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 635) == "date")) {
                    // line 636
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 636);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 637
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 637);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 637);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 639
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 639);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 639)] ?? null) : null)) ? ((($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 639)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 639)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 639);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 639);
                    echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 642
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 642);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 645
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 645) == "time")) {
                    // line 646
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 646);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 647
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 647);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 647);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 649
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 649);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 649)] ?? null) : null)) ? ((($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 649)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 649)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 649);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 649);
                    echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 652
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 652);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 655
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 655) == "datetime")) {
                    // line 656
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 656);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 657
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 657);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 657);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 659
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 659);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 659)] ?? null) : null)) ? ((($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 659)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 659)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 659);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 659);
                    echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 662
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 662);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 665
                echo "            ";
            }
            // line 666
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 667
        echo "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-customer\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i> ";
        // line 668
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-cart\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 679
        echo ($context["text_cart_add"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-product\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 684
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-voucher\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 685
        echo ($context["tab_voucher"] ?? null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-product\" class=\"tab-pane active\">
            <form id=\"form-product-add\">
              <fieldset class=\"mb-0\">
                <legend>";
        // line 691
        echo ($context["text_product_add"] ?? null);
        echo "</legend>
                <div class=\"mb-3\">
                  <label for=\"input-product\" class=\"form-label\">";
        // line 693
        echo ($context["entry_product"] ?? null);
        echo "</label> <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" list=\"list-product\" class=\"form-control\" autocomplete=\"off\"/>
                  <datalist id=\"list-product\"></datalist>
                  <input type=\"hidden\" name=\"product_id\" value=\"\" id=\"input-product-id\"/>
                </div>
                <div class=\"mb-3\">
                  <label for=\"input-quantity\" class=\"form-label\">";
        // line 698
        echo ($context["entry_quantity"] ?? null);
        echo "</label> <input type=\"text\" name=\"quantity\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" value=\"1\" id=\"input-quantity\" class=\"form-control\"/>
                </div>
              </fieldset>
              <div id=\"option\"></div>
              <div id=\"subscription\"></div>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-product-add\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i> ";
        // line 704
        echo ($context["button_save"] ?? null);
        echo "</button>
              </div>
            </form>
          </div>
          <div id=\"tab-voucher\" class=\"tab-pane\">
            <form id=\"form-voucher-add\">
              <fieldset class=\"mb-0\">
                <legend>";
        // line 711
        echo ($context["text_voucher_add"] ?? null);
        echo "</legend>
                <div class=\"mb-3 required\">
                  <label for=\"input-to-name\" class=\"form-label\">";
        // line 713
        echo ($context["entry_to_name"] ?? null);
        echo "</label> <input type=\"text\" name=\"to_name\" value=\"\" placeholder=\"";
        echo ($context["entry_to_name"] ?? null);
        echo "\" id=\"input-to-name\" class=\"form-control\"/>
                  <div id=\"error-to-name\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-to-email\" class=\"form-label\">";
        // line 717
        echo ($context["entry_to_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"to_email\" value=\"\" placeholder=\"";
        echo ($context["entry_to_email"] ?? null);
        echo "\" id=\"input-to-email\" class=\"form-control\"/>
                  <div id=\"error-to-email\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-from-name\" class=\"form-label\">";
        // line 721
        echo ($context["entry_from_name"] ?? null);
        echo "</label> <input type=\"text\" name=\"from_name\" value=\"\" placeholder=\"";
        echo ($context["entry_from_name"] ?? null);
        echo "\" id=\"input-from-name\" class=\"form-control\"/>
                  <div id=\"error-from-name\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-from-email\" class=\"form-label\">";
        // line 725
        echo ($context["entry_from_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"from_email\" value=\"\" placeholder=\"";
        echo ($context["entry_from_email"] ?? null);
        echo "\" id=\"input-from-email\" class=\"form-control\"/>
                  <div id=\"error-from-email\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-theme\" class=\"form-label\">";
        // line 729
        echo ($context["entry_theme"] ?? null);
        echo "</label> <select name=\"voucher_theme_id\" id=\"input-theme\" class=\"form-select\">
                    ";
        // line 730
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 731
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 731);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 731);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 733
        echo "                  </select>
                </div>
                <div class=\"mb-3\">
                  <label for=\"input-message\" class=\"form-label\">";
        // line 736
        echo ($context["entry_message"] ?? null);
        echo "</label> <textarea name=\"message\" rows=\"5\" placeholder=\"";
        echo ($context["entry_message"] ?? null);
        echo "\" id=\"input-message\" class=\"form-control\"></textarea>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-amount\" class=\"form-label\">";
        // line 739
        echo ($context["entry_amount"] ?? null);
        echo "</label> <input type=\"text\" name=\"amount\" value=\"";
        echo ($context["voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\"/>
                  <div id=\"error-amount\" class=\"invalid-feedback\"></div>
                </div>
              </fieldset>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-voucher-add\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i> ";
        // line 744
        echo ($context["button_save"] ?? null);
        echo "</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-affiliate\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 757
        echo ($context["text_affiliate"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-affiliate\">
          <div class=\"mb-3\">
            <input type=\"text\" name=\"affiliate\" value=\"";
        // line 763
        echo ($context["affiliate"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate"] ?? null);
        echo "\" id=\"input-affiliate\" list=\"list-affiliate\" class=\"form-control\"/> <input type=\"hidden\" name=\"affiliate_id\" value=\"";
        echo ($context["affiliate_id"] ?? null);
        echo "\" id=\"input-affiliate-id\"/>
            <datalist id=\"list-affiliate\"></datalist>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-affiliate\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i> ";
        // line 767
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-payment-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 778
        echo ($context["text_payment_address"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-payment-address\">
          <div class=\"mb-3\">
            <label for=\"input-payment-address\" class=\"form-label\">";
        // line 784
        echo ($context["entry_address"] ?? null);
        echo "</label> <select name=\"payment_address\" id=\"input-payment-address\" class=\"form-select\">
              <option value=\"0\" selected=\"selected\">";
        // line 785
        echo ($context["text_none"] ?? null);
        echo "</option>
              ";
        // line 786
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 787
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 787);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 787);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 787);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 787);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 787);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 787);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 789
        echo "            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-firstname\" class=\"form-label\">";
        // line 792
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["payment_firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\"/>
            <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-lastname\" class=\"form-label\">";
        // line 796
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["payment_lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\"/>
            <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-company\" class=\"form-label\">";
        // line 800
        echo ($context["entry_company"] ?? null);
        echo "</label> <input type=\"text\" name=\"company\" value=\"";
        echo ($context["payment_company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-payment-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-address-1\" class=\"form-label\">";
        // line 803
        echo ($context["entry_address_1"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_1\" value=\"";
        echo ($context["payment_address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
            <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-address-2\" class=\"form-label\">";
        // line 807
        echo ($context["entry_address_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_2\" value=\"";
        echo ($context["payment_address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-city\" class=\"form-label\">";
        // line 810
        echo ($context["entry_city"] ?? null);
        echo "</label> <input type=\"text\" name=\"city\" value=\"";
        echo ($context["payment_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-payment-city\" class=\"form-control\"/>
            <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-postcode\" class=\"form-label\">";
        // line 814
        echo ($context["entry_postcode"] ?? null);
        echo "</label> <input type=\"text\" name=\"postcode\" value=\"";
        echo ($context["payment_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
            <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-country\" class=\"form-label\">";
        // line 818
        echo ($context["entry_country"] ?? null);
        echo "</label> <select name=\"country_id\" id=\"input-payment-country\" class=\"form-select\">
              <option value=\"\">";
        // line 819
        echo ($context["text_select"] ?? null);
        echo "</option>
              ";
        // line 820
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 821
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 821);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 821) == ($context["payment_country_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 821);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 823
        echo "            </select>
            <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-zone\" class=\"form-label\">";
        // line 827
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-select\"></select>
            <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
          </div>
          ";
        // line 830
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 831
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 831) == "address")) {
                // line 832
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 832) == "select")) {
                    // line 833
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 833);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 834
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 834);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 834);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 834);
                    echo "]\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 834);
                    echo "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 835
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 836
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 836));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 837
                        echo "                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 837);
                        echo "\"";
                        if (((($__internal_compile_18 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 837)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 837) == (($__internal_compile_19 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 837)] ?? null) : null)))) {
                            echo " selected=\"selected\"";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 837);
                        echo "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 839
                    echo "                  </select>
                  <div id=\"error-payment-custom-field-";
                    // line 840
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 840);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 843
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 843) == "radio")) {
                    // line 844
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 844);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 845
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 845);
                    echo "</label>
                  <div id=\"input-payment-custom-field-";
                    // line 846
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 846);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 847
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 847));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 848
                        echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 849
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 849);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 849);
                        echo "\" id=\"input-payment-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 849);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_20 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 849)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 849) == (($__internal_compile_21 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 849)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-payment-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 849);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 849);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 852
                    echo "                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 853
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 853);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 856
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 856) == "checkbox")) {
                    // line 857
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 857);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 858
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 858);
                    echo "</label>
                  <div id=\"input-payment-custom-field-";
                    // line 859
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 859);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 860
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 860));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 861
                        echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 862
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 862);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 862);
                        echo "\" id=\"input-payment-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 862);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_22 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 862)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 862), (($__internal_compile_23 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 862)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/>
                        <label for=\"input-payment-custom-value-";
                        // line 863
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 863);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 863);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 866
                    echo "                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 867
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 867);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 870
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 870) == "text")) {
                    // line 871
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 871);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 872
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 872);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 872);
                    echo "</label>
                  <input type=\"text\" name=\"custom_field[";
                    // line 873
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 873);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_24 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 873)] ?? null) : null)) ? ((($__internal_compile_25 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 873)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 873)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 873);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 873);
                    echo "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 874
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 874);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 877
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 877) == "textarea")) {
                    // line 878
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 878);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 879
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 879);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 879);
                    echo "</label>
                  <textarea name=\"custom_field[";
                    // line 880
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 880);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 880);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 880);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_26 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 880)] ?? null) : null)) ? ((($__internal_compile_27 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 880)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 880)));
                    echo "</textarea>
                  <div id=\"error-payment-custom-field-";
                    // line 881
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 881);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 884
                echo "
              ";
                // line 885
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 885) == "file")) {
                    // line 886
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 886);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 887
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 887);
                    echo "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-target=\"#input-payment-custom-field-";
                    // line 889
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 889);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fas fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 890
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 890);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_28 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 890)] ?? null) : null)) ? ((($__internal_compile_29 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 890)] ?? null) : null)) : (""));
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 890);
                    echo "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-payment-custom-field-";
                    // line 891
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 891);
                    echo "\"";
                    if ( !(($__internal_compile_30 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 891)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fas fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 892
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 892);
                    echo "\"";
                    if ( !(($__internal_compile_31 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 892)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fas fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 894
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 894);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 897
                echo "
              ";
                // line 898
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 898) == "date")) {
                    // line 899
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 899);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 900
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 900);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 900);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 902
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 902);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_32 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 902)] ?? null) : null)) ? ((($__internal_compile_33 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 902)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 902)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 902);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 902);
                    echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 905
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 905);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 908
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 908) == "time")) {
                    // line 909
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 909);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 910
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 910);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 910);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 912
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 912);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_34 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 912)] ?? null) : null)) ? ((($__internal_compile_35 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 912)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 912)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 912);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 912);
                    echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 915
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 915);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 918
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 918) == "datetime")) {
                    // line 919
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 919);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 920
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 920);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 920);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 922
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 922);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_36 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 922)] ?? null) : null)) ? ((($__internal_compile_37 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 922)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 922)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 922);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 922);
                    echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 925
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 925);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 928
                echo "            ";
            }
            // line 929
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 930
        echo "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i> ";
        // line 931
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-shipping-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 943
        echo ($context["text_shipping_address"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-shipping-address\">

          <div class=\"mb-3\">
            <label for=\"input-shipping-address\" class=\"form-label\">";
        // line 950
        echo ($context["entry_address"] ?? null);
        echo "</label> <select name=\"shipping_address\" id=\"input-shipping-address\" class=\"form-select\">
              <option value=\"0\" selected=\"selected\">";
        // line 951
        echo ($context["text_none"] ?? null);
        echo "</option>
              ";
        // line 952
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 953
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 953);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 953);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 953);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 953);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 953);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 953);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 955
        echo "            </select>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-shipping-firstname\" class=\"form-label\">";
        // line 959
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["shipping_firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
            <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-shipping-lastname\" class=\"form-label\">";
        // line 964
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["shipping_lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
            <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
          </div>

          <div class=\"mb-3\">
            <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 969
        echo ($context["entry_company"] ?? null);
        echo "</label> <input type=\"text\" name=\"company\" value=\"";
        echo ($context["shipping_company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 973
        echo ($context["entry_address_1"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_1\" value=\"";
        echo ($context["shipping_address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
            <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
          </div>

          <div class=\"mb-3\">
            <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 978
        echo ($context["entry_address_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_2\" value=\"";
        echo ($context["shipping_address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 981
        echo ($context["entry_city"] ?? null);
        echo "</label> <input type=\"text\" name=\"city\" value=\"";
        echo ($context["shipping_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
            <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 986
        echo ($context["entry_postcode"] ?? null);
        echo "</label> <input type=\"text\" name=\"postcode\" value=\"";
        echo ($context["shipping_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
            <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 991
        echo ($context["entry_country"] ?? null);
        echo "</label> <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-select\">
              <option value=\"\">";
        // line 992
        echo ($context["text_select"] ?? null);
        echo "</option>
              ";
        // line 993
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 994
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 994);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 994) == ($context["shipping_country_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 994);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 996
        echo "            </select>
            <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 1001
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-select\"></select>
            <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
          </div>

          ";
        // line 1005
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 1006
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 1006) == "address")) {
                // line 1007
                echo "
              ";
                // line 1008
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1008) == "select")) {
                    // line 1009
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1009);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1010
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1010);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1010);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1010);
                    echo "]\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1010);
                    echo "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 1011
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 1012
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1012));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1013
                        echo "                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1013);
                        echo "\"";
                        if (((($__internal_compile_38 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1013)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1013) == (($__internal_compile_39 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1013)] ?? null) : null)))) {
                            echo " selected=\"selected\"";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1013);
                        echo "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1015
                    echo "                  </select>
                  <div id=\"error-shipping-custom-field-";
                    // line 1016
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1016);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1019
                echo "
              ";
                // line 1020
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1020) == "radio")) {
                    // line 1021
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1021);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 1022
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1022);
                    echo "</label>
                  <div id=\"input-shipping-custom-field-";
                    // line 1023
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1023);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">

                    ";
                    // line 1025
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1025));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1026
                        echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 1027
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1027);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1027);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1027);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_40 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1027)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1027) == (($__internal_compile_41 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1027)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1027);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1027);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1030
                    echo "
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1032
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1032);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1035
                echo "
              ";
                // line 1036
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1036) == "checkbox")) {
                    // line 1037
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1037);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 1038
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1038);
                    echo "</label>
                  <div id=\"input-shipping-custom-field-";
                    // line 1039
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1039);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">

                    ";
                    // line 1041
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1041));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1042
                        echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 1043
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1043);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1043);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1043);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_42 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1043)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1043), (($__internal_compile_43 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1043)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1043);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1043);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1046
                    echo "
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1048
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1048);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1051
                echo "
              ";
                // line 1052
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1052) == "text")) {
                    // line 1053
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1053);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1054
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1054);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1054);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1054);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_44 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1054)] ?? null) : null)) ? ((($__internal_compile_45 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1054)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1054)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1054);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1054);
                    echo "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 1055
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1055);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1058
                echo "
              ";
                // line 1059
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1059) == "textarea")) {
                    // line 1060
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1060);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1061
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1061);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1061);
                    echo "</label>
                  <textarea name=\"custom_field[";
                    // line 1062
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1062);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1062);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1062);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1062);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_46 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1062)] ?? null) : null)) ? ((($__internal_compile_47 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1062)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1062)));
                    echo "</textarea>
                  <div id=\"error-shipping-custom-field-";
                    // line 1063
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1063);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1066
                echo "
              ";
                // line 1067
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1067) == "file")) {
                    // line 1068
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1068);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 1069
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1069);
                    echo "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-target=\"#input-shipping-custom-field-";
                    // line 1071
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1071);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fas fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 1072
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1072);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_48 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1072)] ?? null) : null)) ? ((($__internal_compile_49 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1072)] ?? null) : null)) : (""));
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1072);
                    echo "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-shipping-custom-field-";
                    // line 1073
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1073);
                    echo "\"";
                    if ( !(($__internal_compile_50 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1073)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fas fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 1074
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1074);
                    echo "\"";
                    if ( !(($__internal_compile_51 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1074)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fas fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1076
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1076);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1079
                echo "
              ";
                // line 1080
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1080) == "date")) {
                    // line 1081
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1081);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1082
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1082);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1082);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 1084
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1084);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_52 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1084)] ?? null) : null)) ? ((($__internal_compile_53 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1084)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1084)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1084);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1084);
                    echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1087
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1087);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1090
                echo "
              ";
                // line 1091
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1091) == "time")) {
                    // line 1092
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1092);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1093
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1093);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1093);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 1095
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1095);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_54 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1095)] ?? null) : null)) ? ((($__internal_compile_55 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1095)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1095)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1095);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1095);
                    echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1098
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1098);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1101
                echo "
              ";
                // line 1102
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1102) == "datetime")) {
                    // line 1103
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1103);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1104
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1104);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1104);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 1106
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1106);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_56 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1106)] ?? null) : null)) ? ((($__internal_compile_57 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1106)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1106)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1106);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1106);
                    echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1109
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1109);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1112
                echo "
            ";
            }
            // line 1114
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1116
        echo "
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i> ";
        // line 1118
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>

<div id=\"modal-comment\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 1132
        echo ($context["text_comment"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-comment\">
          <div class=\"mb-3\">
            <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 1138
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
          </div>
          <div class=\"text-end\">

            <button type=\"submit\" id=\"button-comment\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i> ";
        // line 1142
        echo ($context["button_save"] ?? null);
        echo "</button>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#button-collapse').on('click', function () {
    var element = this;

    var target = \$('#collapse-order');

    if (!target.is(':hidden')) {
        target.slideUp('400', function () {
            \$(element).html('";
        // line 1159
        echo ($context["text_more"] ?? null);
        echo " <i class=\"fas fa-angle-down\"></i>');
        });
    } else {
        target.slideDown('400', function () {
            \$(element).html('";
        // line 1163
        echo ($context["text_less"] ?? null);
        echo " <i class=\"fas fa-angle-up\"></i>');
        });
    }
});

\$(document).on('click', '#button-invoice', function () {
    \$.ajax({
        url: 'index.php?route=sale/order|createinvoiceno&user_token=";
        // line 1170
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
        dataType: 'json',
        beforeSend: function () {
            \$('#button-invoice').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-invoice').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#invoice-value').html(json['invoice_no']);

                \$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fas fa-cog\"></i></button>');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Customer
\$('#input-customer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer|autocomplete&user_token=";
        // line 1203
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                json.unshift({
                    customer_id: 0,
                    customer_group_id: ";
        // line 1208
        echo ($context["customer_group_id"] ?? null);
        echo ",
                    name: '";
        // line 1209
        echo ($context["text_none"] ?? null);
        echo "',
                    customer_group: '',
                    firstname: '',
                    lastname: '',
                    email: '',
                    telephone: '',
                    custom_field: [],
                    address: []
                });

                response(\$.map(json, function (item) {
                    return {
                        category: item['customer_group'],
                        label: item['name'],
                        value: item['customer_id'],
                        customer_group_id: item['customer_group_id'],
                        firstname: item['firstname'],
                        lastname: item['lastname'],
                        email: item['email'],
                        telephone: item['telephone'],
                        custom_field: item['custom_field'],
                        address: item['address']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        // Reset all custom fields
        \$('#form-customer input[type=\\'text\\'], #form-customer textarea').not('#input-customer, #input-customer-id').val('');
        \$('#form-customer select option').removeAttr('selected');
        \$('#form-customer input[type=\\'checkbox\\'], #form-customer input[type=\\'radio\\']').removeAttr('checked');

        \$('#input-customer-id').val(item['value']);
        \$('#input-customer-group').val(item['customer_group_id']);
        \$('#input-firstname').val(item['firstname']);
        \$('#input-lastname').val(item['lastname']);
        \$('#input-email').val(item['email']);
        \$('#input-telephone').val(item['telephone']);

        for (i in item.custom_field) {
            \$('#input-custom-field-' + i).val(item.custom_field[i]);

            if (item.custom_field[i] instanceof Array) {
                for (j = 0; j < item.custom_field[i].length; j++) {
                    \$('#input-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                }
            }
        }

        \$('#input-customer-group').trigger('change');

        html = '<option value=\"0\">";
        // line 1261
        echo ($context["text_none"] ?? null);
        echo "</option>';

        for (i in item['address']) {
            html += '<option value=\"' + item['address'][i]['address_id'] + '\">' + item['address'][i]['firstname'] + ' ' + item['address'][i]['lastname'] + ', ' + item['address'][i]['address_1'] + ', ' + item['address'][i]['city'] + ', ' + item['address'][i]['country'] + '</option>';
        }

        \$('#input-payment-address').html(html);
        \$('#input-shipping-address').html(html);
    }
});

// Custom Fields
\$('#input-customer-group').on('change', function () {
    \$.ajax({
        url: 'index.php?route=customer/customer|customfield&user_token=";
        // line 1275
        echo ($context["user_token"] ?? null);
        echo "&customer_group_id=' + this.value,
        dataType: 'json',
        success: function (json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

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

\$('#input-customer-group').trigger('change');

// Customer
\$('#form-customer').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1304
        echo ($context["user_token"] ?? null);
        echo "&action=sale/customer',
        type: 'post',
        data: \$('#form-customer').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-customer').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-customer').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-customer').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#customer-value').html('<a href=\"index.php?route=customer/customer|form&user_token=";
        // line 1335
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val() + '\">' + \$('#input-firstname').val() + ' ' + \$('#input-lastname').val() + '</a>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Product
\$('#input-product').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product|autocomplete&user_token=";
        // line 1350
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['product_id'],
                        model: item['model'],
                        option: item['option'],
                        subscription: item['subscription'],
                        price: item['price']
                    }
                }));
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function (item) {
        \$('#input-product-id').val(item['value']);

        if (item['option'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>";
        // line 1374
        echo ($context["entry_option"] ?? null);
        echo "</legend>';

            for (i = 0; i < item['option'].length; i++) {
                option = item['option'][i];

                if (option['type'] == 'select') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1383
        echo ($context["text_select"] ?? null);
        echo "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'radio') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1407
        echo ($context["text_select"] ?? null);
        echo "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <div id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<div class=\"form-check\">';
                        html += '  <input type=\"checkbox\" name=\"option[' + option['product_option_id'] + '][]\" value=\"' + option_value['product_option_value_id'] + '\" id=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-input\"/> ';
                        html += '  <label for=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-label\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '  </label>';
                        html += '</div>';
                    }

                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'image') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1457
        echo ($context["text_select"] ?? null);
        echo "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'text') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'textarea') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <textarea name=\"option[' + option['product_option_id'] + ']\" rows=\"5\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">' + option['value'] + '</textarea>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'file') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div>';
                    html += '    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
        // line 1496
        echo ($context["upload"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
        echo ($context["button_upload"] ?? null);
        echo "</button>';
                    html += '    <a href=\"\" class=\"btn btn-light\"><i class=\"fas fa-download\"></i></a>';
                    html += '    <input type=\"hidden\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option-' + option['product_option_id'] + '\"/>';
                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'date') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div class=\"input-group\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\"  id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'datetime') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div class=\"input-group\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control datetime\"/><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'time') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div class=\"input-group\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control time\"/><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }
            }

            html += '</fieldset>';

            \$('#option').html(html);
        } else {
            \$('#option').html('');
        }

        if (item['subscription'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>";
        // line 1538
        echo ($context["entry_subscription"] ?? null);
        echo "</legend>';
            html += '  <div class=\"mb-3 required\">';
            html += '    <select name=\"subscription_plan_id\" id=\"input-subscription-plan\" class=\"form-select\">';
            html += '      <option value=\"\">";
        // line 1541
        echo ($context["text_select"] ?? null);
        echo "</option>';

            for (i = 0; i < item['subscription'].length; i++) {
                html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
            }

            html += '  </select>';

            for (i = 0; i < item['subscription'].length; i++) {
                html += '  <div id=\"subscription-description-' + item['subscription'][i]['subscription_plan_id'] + '\" class=\"form-text subscription d-none\">' + item['subscription'][i]['description'] + '</div>';
            }

            html += '  <div id=\"error-subscription\" class=\"invalid-feedback\"></div>';
            html += '</div>';
            html += '</fieldset>';

            \$('#subscription').html(html);
        } else {
            \$('#subscription').html('');
        }
    }
});

\$('#form-product-add').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1568
        echo ($context["user_token"] ?? null);
        echo "&action=sale/cart|add',
        type: 'post',
        data: \$('#form-product-add').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-product-add').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-product-add').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-product-add').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Remove product
\$('#order-products').on('submit', 'form', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1615
        echo ($context["user_token"] ?? null);
        echo "&action=sale/cart|remove',
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$(e.target).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(e.target).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            // Check for errors
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Voucher
\$('#form-voucher-add').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1651
        echo ($context["user_token"] ?? null);
        echo "&action=sale/voucher|add',
        type: 'post',
        data: \$('#form-voucher-add').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#button-voucher-add').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-voucher-add').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-voucher-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['error']) {
                    for (key in json['error']) {
                        \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                        \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                    }
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-to-name').val('');
                \$('#input-to-email').val('');
                \$('#input-from-name').val('');
                \$('#input-from-email').val('');
                \$('#input-message').val('');
                \$('#input-amount').val('";
        // line 1687
        echo twig_escape_filter($this->env, ($context["voucher_min"] ?? null), "js");
        echo "');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Remove voucher
\$('#order-vouchers').on('submit', 'form', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1706
        echo ($context["user_token"] ?? null);
        echo "&action=sale/voucher|remove',
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$(e.target).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(e.target).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            // Check for errors
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-store').on('change', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1741
        echo ($context["user_token"] ?? null);
        echo "&action=localisation/store',
        type: 'post',
        data: \$('#form-store').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#input-store').prop('disabled', true);
        },
        complete: function () {
            \$('#input-store').prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-language').on('change', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1774
        echo ($context["user_token"] ?? null);
        echo "&action=localisation/language',
        type: 'post',
        data: \$('#form-language').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#input-language').prop('disabled', true);
        },
        complete: function () {
            \$('#input-language').prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-currency').on('change', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1807
        echo ($context["user_token"] ?? null);
        echo "&action=localisation/currency',
        type: 'post',
        data: \$('#form-currency').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#input-currency').prop('disabled', true);
        },
        complete: function () {
            \$('#input-currency').prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Coupon
\$('#form-coupon').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1841
        echo ($context["user_token"] ?? null);
        echo "&action=sale/coupon',
        type: 'post',
        data: \$('#form-coupon').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#button-coupon').addClass('loading').prop('disabled', true);
        },
        complete: function () {
            \$('#button-coupon').removeClass('loading').prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Voucher
\$('#form-voucher').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1876
        echo ($context["user_token"] ?? null);
        echo "&action=sale/voucher',
        type: 'post',
        data: \$('#form-voucher').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#button-voucher').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-voucher').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Reward
\$('#form-reward').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1911
        echo ($context["user_token"] ?? null);
        echo "&action=sale/reward',
        type: 'post',
        data: \$('#form-reward').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#button-reward').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-reward').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Reward
\$(document).on('click', '#button-reward-add, #button-reward-remove', function (e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order|' + action + 'Reward&user_token=";
        // line 1951
        echo ($context["user_token"] ?? null);
        echo "&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1971
        echo ($context["button_reward_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1975
        echo ($context["button_reward_add"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fas fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Affiliate
\$('#input-affiliate').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer|autocomplete&user_token=";
        // line 1989
        echo ($context["user_token"] ?? null);
        echo "&filter_affiliate=1&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                json.unshift({
                    name: '";
        // line 1993
        echo ($context["text_none"] ?? null);
        echo "',
                    customer_id: 0
                });

                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-affiliate-id').val(item['value']);
    }
});

// Affiliate
\$('#form-affiliate').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2016
        echo ($context["user_token"] ?? null);
        echo "&action=sale/affiliate',
        type: 'post',
        data: \$('#form-affiliate').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#button-affiliate').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-affiliate').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (\$('#input-affiliate-id').val()) {
                    \$('#affiliate-value').html('<a href=\"index.php?route=marketing/affiliate|form&user_token=";
        // line 2037
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-affiliate-id').val() + '\" target=\"_blank\">' + \$('#input-affiliate').val() + '</a>');
                } else {
                    \$('#affiliate-value').html('&nbsp;');
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Commission
\$(document).on('click', '#button-commission-add, #button-commission-remove', function (e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order|' + action + 'Commission&user_token=";
        // line 2060
        echo ($context["user_token"] ?? null);
        echo "&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2080
        echo ($context["button_commission_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2084
        echo ($context["button_commission_add"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fas fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Address
\$('#input-payment-address').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer|address&user_token=";
        // line 2099
        echo ($context["user_token"] ?? null);
        echo "&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-payment-address input[type=\\'text\\'], #form-payment-address textarea').val('');
            \$('#form-payment-address select option').not('#input-payment-address').removeAttr('selected');
            \$('#form-payment-address input[type=\\'checkbox\\'], #form-payment-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-payment-firstname').val(json['firstname']);
            \$('#input-payment-lastname').val(json['lastname']);
            \$('#input-payment-company').val(json['company']);
            \$('#input-payment-address-1').val(json['address_1']);
            \$('#input-payment-address-2').val(json['address_2']);
            \$('#input-payment-city').val(json['city']);
            \$('#input-payment-postcode').val(json['postcode']);
            \$('#input-payment-country').val(json['country_id']);

            payment_zone_id = json['zone_id'];

            \$('#input-payment-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-payment-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-payment-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-payment-address').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2152
        echo ($context["user_token"] ?? null);
        echo "&action=sale/payment_address',
        type: 'post',
        data: \$('#form-payment-address').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#button-payment-address').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-payment-address').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-payment-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-payment-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-payment-firstname').val() + ' ' + \$('#input-payment-lastname').val() + \"<br/>\";

                var company = \$('#input-payment-company').val();

                if (company) {
                    address += \$('#input-payment-company').val() + \"<br/>\";
                }

                address += \$('#input-payment-address-1').val() + \"<br/>\";

                var address_2 = \$('#input-payment-address-2').val();

                if (address_2) {
                    address += \$('#input-payment-address-2').val() + \"<br/>\";
                }

                address += \$('#input-payment-city').val() + \"<br/>\";

                var postcode = \$('#input-payment-postcode').val();

                if (postcode) {
                    address += postcode + \"<br/>\";
                }

                address += \$('#input-payment-zone option:selected').text() + \"<br/>\";
                address += \$('#input-payment-country option:selected').text();

                \$('#payment-address-value').html(address);

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var payment_zone_id = '";
        // line 2220
        echo ($context["payment_zone_id"] ?? null);
        echo "';

\$('#input-payment-country').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country|country&user_token=";
        // line 2226
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            if (json['postcode_required'] == '1') {
                \$('#input-payment-postcode').parent().addClass('required');
            } else {
                \$('#input-payment-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 2241
        echo ($context["text_select"] ?? null);
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == payment_zone_id) {
                        html += ' selected=\"selected\"';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected=\"selected\">";
        // line 2254
        echo ($context["text_none"] ?? null);
        echo "</option>';
            }

            \$('#input-payment-zone').html(html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-payment-country').trigger('change');

// Shipping Address
\$('#input-shipping-address').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer|address&user_token=";
        // line 2272
        echo ($context["user_token"] ?? null);
        echo "&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-shipping-address input[type=\\'text\\'], #form-shipping-address input[type=\\'text\\'], #form-shipping-address textarea').val('');
            \$('#form-shipping-address select option').not('#input-shipping-address').removeAttr('selected');
            \$('#form-shipping-address input[type=\\'checkbox\\'], #form-shipping-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-shipping-firstname').val(json['firstname']);
            \$('#input-shipping-lastname').val(json['lastname']);
            \$('#input-shipping-company').val(json['company']);
            \$('#input-shipping-address-1').val(json['address_1']);
            \$('#input-shipping-address-2').val(json['address_2']);
            \$('#input-shipping-city').val(json['city']);
            \$('#input-shipping-postcode').val(json['postcode']);
            \$('#input-shipping-country').val(json['country_id']);

            shipping_zone_id = json['zone_id'];

            \$('#input-shipping-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-shipping-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-shipping-custom-field-value-' + json['custom_field'][i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-shipping-address').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2325
        echo ($context["user_token"] ?? null);
        echo "&action=sale/shipping_address',
        type: 'post',
        data: \$('#form-shipping-address').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-shipping-address').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-shipping-address').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('#form-shipping-address .alert-dismissible').remove();
            \$('#form-shipping-address .is-invalid').removeClass('is-invalid');
            \$('#form-shipping-address .invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-shipping-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-shipping-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-shipping-firstname').val() + ' ' + \$('#input-shipping-lastname').val() + \"<br/>\";

                var company = \$('#input-shipping-company').val();

                if (company) {
                    address += \$('#input-shipping-company').val() + \"<br/>\";
                }

                address += \$('#input-shipping-address-1').val() + \"<br/>\";

                var address_2 = \$('#input-shipping-address-2').val();

                if (address_2) {
                    address += \$('#input-shipping-address-2').val() + \"<br/>\";
                }

                address += \$('#input-shipping-city').val() + \"<br/>\";

                var postcode = \$('#input-shipping-postcode').val();

                if (postcode) {
                    address += postcode + \"<br/>\";
                }

                address += \$('#input-shipping-zone option:selected').text() + \"<br/>\";
                address += \$('#input-shipping-country option:selected').text();

                \$('#shipping-address-value').html(address);

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var shipping_zone_id = '";
        // line 2395
        echo ($context["shipping_zone_id"] ?? null);
        echo "';

\$('#input-shipping-country').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country|country&user_token=";
        // line 2401
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            if (json['postcode_required'] == '1') {
                \$('#input-shipping-postcode').parent().addClass('required');
            } else {
                \$('#input-shipping-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 2416
        echo ($context["text_select"] ?? null);
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == shipping_zone_id) {
                        html += ' selected=\"selected\"';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected=\"selected\">";
        // line 2429
        echo ($context["text_none"] ?? null);
        echo "</option>';
            }

            \$('#input-shipping-zone').html(html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-shipping-country').trigger('change');

// Payment Method
\$('#button-payment-method').on('click', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2447
        echo ($context["user_token"] ?? null);
        echo "&action=sale/payment_method',
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('#alert .alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            html = '<option value=\"\">";
        // line 2462
        echo ($context["text_select"] ?? null);
        echo "</option>';

            if (json['payment_methods']) {
                for (i in json['payment_methods']) {
                    if (json['payment_methods'][i]['code'] == \$('#input-payment-method').val()) {
                        html += '<option value=\"' + json['payment_methods'][i]['code'] + '\" selected>' + json['payment_methods'][i]['title'] + '</option>';
                    } else {
                        html += '<option value=\"' + json['payment_methods'][i]['code'] + '\">' + json['payment_methods'][i]['title'] + '</option>';
                    }
                }
            }

            \$('#input-payment-method').html(html);

            \$('#button-refresh').trigger('click');
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-payment-method').on('change', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2490
        echo ($context["user_token"] ?? null);
        echo "&action=sale/payment_method|save',
        type: 'post',
        data: \$('#form-payment-method').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Method
\$('#button-shipping-method').on('click', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2525
        echo ($context["user_token"] ?? null);
        echo "&action=sale/shipping_method',
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            html = '<option value=\"\">";
        // line 2540
        echo ($context["text_select"] ?? null);
        echo "</option>';

            if (json['shipping_methods']) {
                for (i in json['shipping_methods']) {
                    html += '<optgroup label=\"' + json['shipping_methods'][i]['title'] + '\">';

                    if (!json['shipping_methods'][i]['error']) {
                        for (j in json['shipping_methods'][i]['quote']) {
                            if (json['shipping_methods'][i]['quote'][j]['code'] == \$('#input-shipping-method').val()) {
                                html += '<option value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" selected>' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';
                            } else {
                                html += '<option value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\">' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';
                            }
                        }
                    } else {
                        html += '<option value=\"\" class=\"text-danger\" disabled>' + json['shipping_methods'][i]['error'] + '</span></li>';
                    }

                    html += '</optgroup>';
                }
            }

            \$('#input-shipping-method').html(html);

            \$('#button-refresh').trigger('click');
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-shipping-method').on('change', function (e) {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2576
        echo ($context["user_token"] ?? null);
        echo "&action=sale/shipping_method|save',
        type: 'post',
        data: \$('#form-shipping-method').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-comment').on('submit', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2612
        echo ($context["user_token"] ?? null);
        echo "&action=sale/order|comment',
        type: 'post',
        data: \$('#form-comment').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-comment').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-comment').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            // Check for errors
            if (json['error']) {
                \$('#form-comment').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-comment').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#comment-value').html(\$('#input-comment').val().replace(/([^>\\r\\n]?)(\\r\\n|\\n\\r|\\r|\\n)/g, '\$1<br/>\$2'));
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Refresh all products, vouchers and totals
\$('#button-refresh').on('click', function () {
    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2646
        echo ($context["user_token"] ?? null);
        echo "&action=sale/cart',
        dataType: 'json',
        beforeSend: function () {
            \$('#button-confirm').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-confirm').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            html = '';

            if (json['products'].length) {
                for (i = 0; i < json['products'].length; i++) {
                    product = json['products'][i];

                    html += '<tr>';
                    html += '  <td class=\"text-start\"><a href=\"index.php?route=catalog/product|form&user_token=";
        // line 2662
        echo ($context["user_token"] ?? null);
        echo "&product_id=' + product['product_id'] + '\" target=\"_blank\">' + product['name'] + '</a>' + (!product['stock'] ? ' <span class=\"text-danger\">***</span>' : '');

                    if (product['option']) {
                        for (j = 0; j < product['option'].length; j++) {
                            option = product['option'][j];

                            html += '<br/>';
                            html += '  - <small>' + option['name'] + ': ' + option['value'] + '</small>';
                        }
                    }

                    if (product['reward']) {
                        html += '<br/>';
                        html += '  - <small>";
        // line 2675
        echo ($context["text_points"] ?? null);
        echo " ' + product['reward'] + '</small>';
                    }

                    if (product['subscription']) {
                        html += '<br/>';
                        html += '  - <small>";
        // line 2680
        echo ($context["text_subscription"] ?? null);
        echo " ' + product['subscription'] + '</small>';
                    }

                    html += '  </td>';
                    html += '  <td class=\"text-start\">' + product['model'] + '</td>';
                    html += '  <td class=\"text-end\">' + product['quantity'] + '</td>';
                    html += '  <td class=\"text-end\">' + product['price'] + '</td>';
                    html += '  <td class=\"text-end\">' + product['total'] + '</td>';
                    html += '  <td class=\"text-end\">';
                    html += '    <form>';
                    html += '      <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2690
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button>';
                    html += '      <input type=\"hidden\" name=\"key\" value=\"' + product['cart_id'] + '\"/>';
                    html += '    </form>';
                    html += '  </td>';
                    html += '</tr>';
                }
            }

            \$('#order-products').html(html);

            html = '';

            if (json['vouchers'].length) {
                for (i in json['vouchers']) {
                    voucher = json['vouchers'][i];

                    html += '<tr>';
                    html += '  <td class=\"text-start\">' + voucher['description'] + '</td>';
                    html += '  <td class=\"text-start\"></td>';
                    html += '  <td class=\"text-end\">1</td>';
                    html += '  <td class=\"text-end\">' + voucher['amount'] + '</td>';
                    html += '  <td class=\"text-end\">' + voucher['amount'] + '</td>';
                    html += '  <td class=\"text-end\">';
                    html += '    <form>';
                    html += '      <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2714
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button>';
                    html += '      <input type=\"hidden\" name=\"key\" value=\"' + voucher['key'] + '\"/>';
                    html += '    </form>';
                    html += '  </td>';
                    html += '</tr>';
                }
            }

            if (!json['products'].length && !json['vouchers'].length) {
                html += '<tr>';
                html += '  <td colspan=\"6\" class=\"text-center\">";
        // line 2724
        echo ($context["text_no_results"] ?? null);
        echo "</td>';
                html += '</tr>';
            }

            \$('#order-vouchers').html(html);

            // Totals
            html = '';

            if (json['totals'].length) {
                for (i in json['totals']) {
                    total = json['totals'][i];

                    html += '<tr>';
                    html += '  <td class=\"text-end\"><strong>' + total['title'] + '</strong></td>';
                    html += '  <td class=\"text-end\" style=\"width: 1px;\">' + total['text'] + '</td>';
                    html += '</tr>';
                }
            }

            \$('#order-totals').html(html);

            if (json['shipping_required']) {
                \$('#shipping-address').removeClass('d-none');
                \$('#shipping-method').removeClass('d-none');
                \$('#button-shipping').prop('disabled', false);
            } else {
                \$('#shipping-address').addClass('d-none');
                \$('#shipping-method').addClass('d-none');
                \$('#button-shipping').prop('disabled', true);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Checkout
\$('#button-confirm').on('click', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2767
        echo ($context["user_token"] ?? null);
        echo "&action=sale/order|confirm',
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                for (i in json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'][i] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['order_id']) {
                    \$('#input-order-id').val(json['order_id']);
                }

                if (json['points']) {
                    \$('#reward-value').html(json['points']);
                    \$('#button-reward-add').prop('disabled', false);
                    \$('#button-reward-remove').prop('disabled', false);
                } else {
                    \$('#reward-value').html(0);
                    \$('#button-reward-add').prop('disabled', true);
                    \$('#button-reward-remove').prop('disabled', true);
                }

                if (json['commission']) {
                    \$('#commission-value').html(json['commission']);
                    \$('#button-commission-add').prop('disabled', false);
                    \$('#button-commission-remove').prop('disabled', false);
                } else {
                    \$('#commission-value').html('&nbsp;');
                    \$('#button-commission-add').prop('disabled', true);
                    \$('#button-commission-remove').prop('disabled', true);
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#form-history').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2828
        echo ($context["user_token"] ?? null);
        echo "&action=sale/order|addHistory&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        data: \$('#form-history').serialize(),
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-history').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-history').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=sale/order|history&user_token=";
        // line 2849
        echo ($context["user_token"] ?? null);
        echo "&order_id=' + \$('#input-order-id').val());

                \$('#input-history').val('');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 2860
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5071 => 2860,  5057 => 2849,  5033 => 2828,  4969 => 2767,  4923 => 2724,  4910 => 2714,  4883 => 2690,  4870 => 2680,  4862 => 2675,  4846 => 2662,  4827 => 2646,  4790 => 2612,  4751 => 2576,  4712 => 2540,  4694 => 2525,  4656 => 2490,  4625 => 2462,  4607 => 2447,  4586 => 2429,  4570 => 2416,  4552 => 2401,  4543 => 2395,  4470 => 2325,  4414 => 2272,  4393 => 2254,  4377 => 2241,  4359 => 2226,  4350 => 2220,  4279 => 2152,  4223 => 2099,  4205 => 2084,  4198 => 2080,  4175 => 2060,  4149 => 2037,  4125 => 2016,  4099 => 1993,  4092 => 1989,  4075 => 1975,  4068 => 1971,  4045 => 1951,  4002 => 1911,  3964 => 1876,  3926 => 1841,  3889 => 1807,  3853 => 1774,  3817 => 1741,  3779 => 1706,  3757 => 1687,  3718 => 1651,  3679 => 1615,  3629 => 1568,  3599 => 1541,  3593 => 1538,  3546 => 1496,  3504 => 1457,  3451 => 1407,  3424 => 1383,  3412 => 1374,  3385 => 1350,  3367 => 1335,  3333 => 1304,  3301 => 1275,  3284 => 1261,  3229 => 1209,  3225 => 1208,  3217 => 1203,  3179 => 1170,  3169 => 1163,  3162 => 1159,  3142 => 1142,  3133 => 1138,  3124 => 1132,  3107 => 1118,  3103 => 1116,  3096 => 1114,  3092 => 1112,  3086 => 1109,  3074 => 1106,  3067 => 1104,  3062 => 1103,  3060 => 1102,  3057 => 1101,  3051 => 1098,  3039 => 1095,  3032 => 1093,  3027 => 1092,  3025 => 1091,  3022 => 1090,  3016 => 1087,  3004 => 1084,  2997 => 1082,  2992 => 1081,  2990 => 1080,  2987 => 1079,  2981 => 1076,  2970 => 1074,  2960 => 1073,  2952 => 1072,  2942 => 1071,  2937 => 1069,  2932 => 1068,  2930 => 1067,  2927 => 1066,  2921 => 1063,  2909 => 1062,  2903 => 1061,  2898 => 1060,  2896 => 1059,  2893 => 1058,  2887 => 1055,  2873 => 1054,  2868 => 1053,  2866 => 1052,  2863 => 1051,  2857 => 1048,  2853 => 1046,  2832 => 1043,  2829 => 1042,  2825 => 1041,  2820 => 1039,  2816 => 1038,  2811 => 1037,  2809 => 1036,  2806 => 1035,  2800 => 1032,  2796 => 1030,  2775 => 1027,  2772 => 1026,  2768 => 1025,  2763 => 1023,  2759 => 1022,  2754 => 1021,  2752 => 1020,  2749 => 1019,  2743 => 1016,  2740 => 1015,  2725 => 1013,  2721 => 1012,  2717 => 1011,  2707 => 1010,  2702 => 1009,  2700 => 1008,  2697 => 1007,  2694 => 1006,  2690 => 1005,  2683 => 1001,  2676 => 996,  2661 => 994,  2657 => 993,  2653 => 992,  2649 => 991,  2637 => 986,  2625 => 981,  2615 => 978,  2603 => 973,  2592 => 969,  2580 => 964,  2568 => 959,  2562 => 955,  2543 => 953,  2539 => 952,  2535 => 951,  2531 => 950,  2521 => 943,  2506 => 931,  2503 => 930,  2497 => 929,  2494 => 928,  2488 => 925,  2476 => 922,  2469 => 920,  2464 => 919,  2461 => 918,  2455 => 915,  2443 => 912,  2436 => 910,  2431 => 909,  2428 => 908,  2422 => 905,  2410 => 902,  2403 => 900,  2398 => 899,  2396 => 898,  2393 => 897,  2387 => 894,  2376 => 892,  2366 => 891,  2358 => 890,  2348 => 889,  2343 => 887,  2338 => 886,  2336 => 885,  2333 => 884,  2327 => 881,  2317 => 880,  2311 => 879,  2306 => 878,  2303 => 877,  2297 => 874,  2287 => 873,  2281 => 872,  2276 => 871,  2273 => 870,  2267 => 867,  2264 => 866,  2253 => 863,  2241 => 862,  2238 => 861,  2234 => 860,  2230 => 859,  2226 => 858,  2221 => 857,  2218 => 856,  2212 => 853,  2209 => 852,  2188 => 849,  2185 => 848,  2181 => 847,  2177 => 846,  2173 => 845,  2168 => 844,  2165 => 843,  2159 => 840,  2156 => 839,  2141 => 837,  2137 => 836,  2133 => 835,  2123 => 834,  2118 => 833,  2115 => 832,  2112 => 831,  2108 => 830,  2102 => 827,  2096 => 823,  2081 => 821,  2077 => 820,  2073 => 819,  2069 => 818,  2058 => 814,  2047 => 810,  2037 => 807,  2026 => 803,  2016 => 800,  2005 => 796,  1994 => 792,  1989 => 789,  1970 => 787,  1966 => 786,  1962 => 785,  1958 => 784,  1949 => 778,  1935 => 767,  1924 => 763,  1915 => 757,  1899 => 744,  1887 => 739,  1879 => 736,  1874 => 733,  1863 => 731,  1859 => 730,  1855 => 729,  1846 => 725,  1837 => 721,  1828 => 717,  1819 => 713,  1814 => 711,  1804 => 704,  1793 => 698,  1783 => 693,  1778 => 691,  1769 => 685,  1765 => 684,  1757 => 679,  1743 => 668,  1740 => 667,  1734 => 666,  1731 => 665,  1725 => 662,  1713 => 659,  1706 => 657,  1701 => 656,  1698 => 655,  1692 => 652,  1680 => 649,  1673 => 647,  1668 => 646,  1665 => 645,  1659 => 642,  1647 => 639,  1640 => 637,  1635 => 636,  1633 => 635,  1630 => 634,  1624 => 631,  1613 => 629,  1603 => 628,  1595 => 627,  1585 => 626,  1580 => 624,  1575 => 623,  1573 => 622,  1570 => 621,  1564 => 618,  1550 => 617,  1545 => 616,  1542 => 615,  1536 => 612,  1522 => 611,  1517 => 610,  1514 => 609,  1508 => 606,  1505 => 605,  1484 => 602,  1481 => 601,  1477 => 600,  1473 => 599,  1469 => 598,  1464 => 597,  1461 => 596,  1455 => 593,  1452 => 592,  1431 => 589,  1428 => 588,  1424 => 587,  1420 => 586,  1416 => 585,  1411 => 584,  1408 => 583,  1402 => 580,  1399 => 579,  1384 => 577,  1380 => 576,  1376 => 575,  1366 => 574,  1361 => 573,  1358 => 572,  1355 => 571,  1351 => 570,  1341 => 567,  1335 => 566,  1324 => 562,  1319 => 560,  1308 => 556,  1297 => 552,  1292 => 549,  1277 => 547,  1273 => 546,  1269 => 545,  1262 => 541,  1251 => 539,  1246 => 537,  1237 => 531,  1225 => 521,  1214 => 519,  1210 => 518,  1201 => 512,  1197 => 511,  1191 => 508,  1187 => 507,  1184 => 506,  1178 => 503,  1174 => 502,  1171 => 501,  1169 => 500,  1164 => 498,  1160 => 497,  1152 => 492,  1141 => 484,  1135 => 481,  1128 => 477,  1123 => 475,  1112 => 467,  1105 => 463,  1097 => 458,  1091 => 454,  1076 => 452,  1072 => 451,  1066 => 448,  1061 => 446,  1054 => 442,  1050 => 441,  1044 => 437,  1033 => 435,  1029 => 434,  1025 => 433,  1021 => 432,  1015 => 429,  1003 => 420,  999 => 419,  994 => 416,  985 => 413,  981 => 412,  978 => 411,  974 => 410,  963 => 401,  959 => 399,  953 => 397,  951 => 396,  946 => 394,  930 => 382,  922 => 380,  920 => 379,  916 => 378,  902 => 368,  894 => 366,  892 => 365,  888 => 364,  879 => 360,  868 => 351,  862 => 349,  859 => 348,  852 => 345,  849 => 344,  842 => 341,  839 => 340,  832 => 337,  829 => 336,  822 => 333,  819 => 332,  812 => 329,  809 => 328,  802 => 325,  799 => 324,  790 => 321,  788 => 320,  782 => 317,  774 => 314,  766 => 308,  760 => 306,  757 => 305,  750 => 302,  748 => 301,  745 => 300,  738 => 297,  736 => 296,  733 => 295,  726 => 292,  724 => 291,  721 => 290,  714 => 287,  712 => 286,  709 => 285,  702 => 282,  700 => 281,  697 => 280,  690 => 277,  688 => 276,  685 => 275,  676 => 272,  674 => 271,  668 => 268,  659 => 262,  651 => 256,  645 => 254,  635 => 252,  633 => 251,  629 => 249,  625 => 247,  619 => 245,  617 => 244,  612 => 242,  601 => 233,  597 => 231,  587 => 229,  585 => 228,  580 => 226,  572 => 220,  566 => 218,  556 => 216,  554 => 215,  548 => 212,  543 => 210,  527 => 201,  516 => 193,  508 => 192,  497 => 184,  489 => 183,  477 => 175,  462 => 173,  458 => 172,  445 => 163,  430 => 161,  426 => 160,  413 => 151,  398 => 149,  394 => 148,  375 => 131,  369 => 128,  366 => 127,  364 => 126,  361 => 125,  350 => 120,  346 => 119,  340 => 116,  336 => 115,  330 => 112,  327 => 111,  323 => 110,  319 => 108,  308 => 103,  304 => 102,  298 => 99,  294 => 98,  290 => 97,  286 => 96,  282 => 94,  275 => 92,  272 => 91,  270 => 90,  267 => 89,  260 => 87,  257 => 86,  255 => 85,  252 => 84,  249 => 83,  239 => 81,  236 => 80,  231 => 79,  229 => 78,  220 => 76,  217 => 75,  213 => 74,  206 => 70,  202 => 69,  198 => 68,  194 => 67,  190 => 66,  186 => 65,  174 => 56,  169 => 54,  159 => 46,  153 => 44,  143 => 42,  141 => 41,  136 => 39,  128 => 33,  124 => 31,  118 => 29,  116 => 28,  109 => 25,  104 => 23,  94 => 16,  87 => 11,  76 => 9,  72 => 8,  67 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/order_info.twig", "/var/www/html/opencart/upload/admin/view/template/sale/order_info.twig");
    }
}
