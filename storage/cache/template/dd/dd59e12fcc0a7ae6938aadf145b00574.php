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

/* admin/view/template/setting/setting.twig */
class __TwigTemplate_74128f3a8649f1ba50ca78542d6b02d8 extends Template
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
        <button type=\"submit\" form=\"form-setting\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 19
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-setting\" action=\"";
        // line 21
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 23
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 25
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label for=\"input-meta-title\" class=\"col-sm-2 col-form-label\">";
        // line 34
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 36
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\"/>
                  <div id=\"error-meta-title\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-meta-description\" class=\"col-sm-2 col-form-label\">";
        // line 41
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 43
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-meta-keyword\" class=\"col-sm-2 col-form-label\">";
        // line 47
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 49
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">";
        // line 53
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 56
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_logo\" value=\"";
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 58
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 59
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">";
        // line 65
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 69
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 69);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 69) == ($context["config_theme"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 69);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme-thumb\" class=\"img-thumbnail\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">";
        // line 77
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 81
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 81);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 81) == ($context["config_layout_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 81);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-store\" class=\"tab-pane\">
              <div class=\"row mb-3 required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 89
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 91
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  <div id=\"error-name\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">";
        // line 96
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 98
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\"/>
                  <div id=\"error-owner\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 103
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" rows=\"5\" placeholder=\"";
        // line 105
        echo ($context["entry_address"] ?? null);
        echo "\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">";
        // line 109
        echo ($context["entry_geocode"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 111
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 112
        echo ($context["help_geocode"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 116
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 118
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                  <div id=\"error-email\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 123
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 125
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                  <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 130
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 133
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 135
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 136
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-open\" class=\"col-sm-2 col-form-label\">";
        // line 142
        echo ($context["entry_open"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 144
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                  <div class=\"form-text\">";
        // line 145
        echo ($context["help_open"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 149
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 151
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                  <div class=\"form-text\">";
        // line 152
        echo ($context["help_comment"] ?? null);
        echo "</div>
                </div>
              </div>
              ";
        // line 155
        if (($context["locations"] ?? null)) {
            // line 156
            echo "                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
            // line 157
            echo ($context["entry_location"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 161
                echo "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162);
                echo "\" id=\"input-location-";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162);
                echo "\" class=\"form-check-input\"";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162), ($context["config_location"] ?? null))) {
                    echo " checked";
                }
                echo "/> <label for=\"input-location-";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162);
                echo "\" class=\"form-check-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 162);
                echo "</label>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                    </div>
                    <div class=\"form-text\">";
            // line 166
            echo ($context["help_location"] ?? null);
            echo "</div>
                  </div>
                </div>
              ";
        }
        // line 170
        echo "            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 173
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-select\">
                    ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 177
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 177);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 177) == ($context["config_country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 177);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 183
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-select\"></select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">";
        // line 189
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-select\">
                    ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 193
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 193);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 193) == ($context["config_timezone"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 193);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 199
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-select\">
                    ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 203
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 203);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 203) == ($context["config_language"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 203);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-language-admin\" class=\"col-sm-2 col-form-label\">";
        // line 209
        echo ($context["entry_language_admin"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language_admin\" id=\"input-language-admin\" class=\"form-select\">
                    ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 213
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 213);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 213) == ($context["config_language_admin"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 213);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">";
        // line 219
        echo ($context["entry_currency"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-select\">
                    ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 223
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 223);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 223) == ($context["config_currency"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 223);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                  </select>
                  <div class=\"form-text\">";
        // line 226
        echo ($context["help_currency"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">";
        // line 230
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-select\">
                    ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 234
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 234);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 234) == ($context["config_currency_engine"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 234);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-currency-auto\" class=\"col-sm-2 col-form-label\">";
        // line 240
        echo ($context["entry_currency_auto"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"checkbox\" name=\"config_currency_auto\" value=\"1\" id=\"input-currency-auto\" class=\"form-check-input\"";
        // line 243
        if (($context["config_currency_auto"] ?? null)) {
            echo " checked";
        }
        echo "/>
                  </div>
                  <div class=\"form-text\">";
        // line 245
        echo ($context["help_currency_auto"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 249
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-select\">
                    ";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 253
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 253);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 253) == ($context["config_length_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 253);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 259
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                    ";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 263
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 263);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 263) == ($context["config_weight_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 263);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "                  </select>
                </div>
              </div>
            </div>

            <div id=\"tab-option\" class=\"tab-pane\">

              <div class=\"accordion\" id=\"accordion-option\">

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-product\">";
        // line 275
        echo ($context["text_product"] ?? null);
        echo "</button></h2>

                  <div id=\"collapse-product\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mt-2 mb-3 required\">
                        <label for=\"input-product-description-length\" class=\"col-sm-2 col-form-label\">";
        // line 281
        echo ($context["entry_product_description_length"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_product_description_length\" value=\"";
        // line 283
        echo ($context["config_product_description_length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_description_length"] ?? null);
        echo "\" id=\"input-product-description-length\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 284
        echo ($context["help_product_description_length"] ?? null);
        echo "</div>
                          <div id=\"error-product-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-pagination\" class=\"col-sm-2 col-form-label\">";
        // line 289
        echo ($context["entry_pagination"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination\" value=\"";
        // line 291
        echo ($context["config_pagination"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pagination"] ?? null);
        echo "\" id=\"input-pagination\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 292
        echo ($context["help_pagination"] ?? null);
        echo "</div>
                          <div id=\"error-pagination\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 297
        echo ($context["entry_product_count"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_product_count\" value=\"1\" id=\"input-product-count\" class=\"form-check-input\"";
        // line 300
        if (($context["config_product_count"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 302
        echo ($context["help_product_count"] ?? null);
        echo "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3 required\">
                        <label for=\"input-pagination-admin\" class=\"col-sm-2 col-form-label\">";
        // line 307
        echo ($context["entry_pagination_admin"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination_admin\" value=\"";
        // line 309
        echo ($context["config_pagination_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pagination_admin"] ?? null);
        echo "\" id=\"input-pagination-admin\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 310
        echo ($context["help_pagination"] ?? null);
        echo "</div>
                          <div id=\"error-pagination-admin\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>

                      <div class=\"row mb-3 required\">
                        <label for=\"input-product-report\" class=\"col-sm-2 col-form-label\">";
        // line 316
        echo ($context["entry_product_report"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_product_report_status\" value=\"1\" id=\"input-product-report\" class=\"form-check-input\"";
        // line 319
        if (($context["config_product_report_status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 321
        echo ($context["help_product_report"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-review\">";
        // line 329
        echo ($context["text_review"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-review\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 333
        echo ($context["entry_review_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_review_status\" value=\"1\" id=\"input-review-status\" class=\"form-check-input\"";
        // line 336
        if (($context["config_review_status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 338
        echo ($context["help_review"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 342
        echo ($context["entry_review_guest"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_review_guest\" value=\"1\" id=\"input-review-guest\" class=\"form-check-input\"";
        // line 345
        if (($context["config_review_guest"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 347
        echo ($context["help_review_guest"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-voucher\">";
        // line 355
        echo ($context["text_voucher"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-voucher\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3 required\">
                        <label for=\"input-voucher-min\" class=\"col-sm-2 col-form-label\">";
        // line 359
        echo ($context["entry_voucher_min"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 361
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 362
        echo ($context["help_voucher_min"] ?? null);
        echo "</div>
                          <div id=\"error-voucher-min\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-voucher-max\" class=\"col-sm-2 col-form-label\">";
        // line 367
        echo ($context["entry_voucher_max"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 369
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 370
        echo ($context["help_voucher_max"] ?? null);
        echo "</div>
                          <div id=\"error-voucher-max\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-legal\">";
        // line 379
        echo ($context["text_legal"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-legal\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">";
        // line 383
        echo ($context["entry_cookie"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-select\">
                            <option value=\"0\">";
        // line 386
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 387
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 388
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 388);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 388) == ($context["config_cookie_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 388);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 390
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 391
        echo ($context["help_cookie"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">";
        // line 395
        echo ($context["entry_gdpr"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-select\">
                            <option value=\"0\">";
        // line 398
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 400
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 400);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 400) == ($context["config_gdpr_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 400);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 403
        echo ($context["help_gdpr"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">";
        // line 407
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_gdpr_limit\" value=\"";
        // line 409
        echo ($context["config_gdpr_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 410
        echo ($context["help_gdpr_limit"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-tax\">";
        // line 418
        echo ($context["text_tax"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-tax\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 422
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_tax\" value=\"1\" id=\"input-tax\" class=\"form-check-input\"";
        // line 425
        if (($context["config_tax"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">";
        // line 430
        echo ($context["entry_tax_default"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                            <option value=\"\">";
        // line 433
        echo ($context["text_none"] ?? null);
        echo "</option>
                            <option value=\"shipping\"";
        // line 434
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_shipping"] ?? null);
        echo "</option>
                            <option value=\"payment\"";
        // line 435
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_payment"] ?? null);
        echo "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 437
        echo ($context["help_tax_default"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">";
        // line 441
        echo ($context["entry_tax_customer"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                            <option value=\"\">";
        // line 444
        echo ($context["text_none"] ?? null);
        echo "</option>
                            <option value=\"shipping\"";
        // line 445
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_shipping"] ?? null);
        echo "</option>
                            <option value=\"payment\"";
        // line 446
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_payment"] ?? null);
        echo "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 448
        echo ($context["help_tax_customer"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-account\">";
        // line 456
        echo ($context["text_account"] ?? null);
        echo "</button></h2>

                  <div id=\"collapse-account\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">

                    <div class=\"accordion-body\">

                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 463
        echo ($context["entry_customer_online"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_customer_online\" value=\"1\" id=\"input-customer-online\" class=\"form-check-input\"";
        // line 466
        if (($context["config_customer_online"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 468
        echo ($context["help_customer_online"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-online-expire\" class=\"col-sm-2 col-form-label\">";
        // line 472
        echo ($context["entry_customer_online_expire"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"config_customer_online_expire\" value=\"";
        // line 475
        echo ($context["config_customer_online_expire"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer_online_expire"] ?? null);
        echo "\" id=\"input-customer-online-expire\" class=\"form-control\"/> <span class=\"input-group-text\" id=\"basic-addon2\">";
        echo ($context["text_hour"] ?? null);
        echo "</span>
                          </div>
                          <div class=\"form-text\">";
        // line 477
        echo ($context["help_customer_online_expire"] ?? null);
        echo "</div>
                          <div id=\"error-customer-online-expire\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 482
        echo ($context["entry_customer_activity"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_customer_activity\" value=\"1\" id=\"input-customer-activity\" class=\"form-check-input\"";
        // line 485
        if (($context["config_customer_activity"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 487
        echo ($context["help_customer_activity"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 491
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_customer_search\" value=\"1\" id=\"input-customer-search\" class=\"form-check-input\"";
        // line 494
        if (($context["config_customer_search"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 499
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                            ";
        // line 502
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 503
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 503);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 503) == ($context["config_customer_group_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 503);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 505
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 506
        echo ($context["help_customer_group"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 510
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-customer-group-display\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 513
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 514
            echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
            // line 515
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 515);
            echo "\" id=\"input-customer-group-";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 515);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 515), ($context["config_customer_group_display"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-customer-group-";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 515);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 515);
            echo "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 518
        echo "                          </div>
                          <div class=\"form-text\">";
        // line 519
        echo ($context["help_customer_group_display"] ?? null);
        echo "</div>
                          <div id=\"error-customer-group-display\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 524
        echo ($context["entry_customer_price"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_customer_price\" value=\"1\" id=\"input-customer-price\" class=\"form-check-input\"";
        // line 527
        if (($context["config_customer_price"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 529
        echo ($context["help_customer_price"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 533
        echo ($context["entry_telephone_display"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_telephone_display\" value=\"1\" id=\"input-telephone-display\" class=\"form-check-input\"";
        // line 536
        if (($context["config_telephone_display"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 541
        echo ($context["entry_telephone_required"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_telephone_required\" value=\"1\" id=\"input-telephone-required\" class=\"form-check-input\"";
        // line 544
        if (($context["config_telephone_required"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">";
        // line 549
        echo ($context["entry_login_attempts"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 551
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 552
        echo ($context["help_login_attempts"] ?? null);
        echo "</div>
                          <div id=\"error-login-attempts\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-account\" class=\"col-sm-2 col-form-label\">";
        // line 557
        echo ($context["entry_account"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_account_id\" id=\"input-account\" class=\"form-select\">
                            <option value=\"0\">";
        // line 560
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 561
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 562
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 562);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 562) == ($context["config_account_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 562);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 564
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 565
        echo ($context["help_account"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class=\"accordion-item\">

                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-checkout\">";
        // line 575
        echo ($context["text_checkout"] ?? null);
        echo "</button></h2>

                  <div id=\"collapse-checkout\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">";
        // line 580
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 582
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 583
        echo ($context["help_invoice_prefix"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 587
        echo ($context["entry_cart_weight"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_cart_weight\" value=\"1\" id=\"input-cart-weight\" class=\"form-check-input\"";
        // line 590
        if (($context["config_cart_weight"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 592
        echo ($context["help_cart_weight"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 596
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_checkout_guest\" value=\"1\" id=\"input-checkout-guest\" class=\"form-check-input\"";
        // line 599
        if (($context["config_checkout_guest"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 601
        echo ($context["help_checkout_guest"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 605
        echo ($context["entry_checkout_address"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_checkout_address\" value=\"1\" id=\"input-checkout-address\" class=\"form-check-input\"";
        // line 608
        if (($context["config_checkout_address"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 610
        echo ($context["help_checkout_address"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">";
        // line 614
        echo ($context["entry_checkout"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-select\">
                            <option value=\"0\">";
        // line 617
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 618
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 619
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 619);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 619) == ($context["config_checkout_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 619);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 621
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 622
        echo ($context["help_checkout"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 626
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                            ";
        // line 629
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 630
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 630);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 630) == ($context["config_order_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 630);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 632
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 633
        echo ($context["help_order_status"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 637
        echo ($context["entry_processing_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-processing-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 640
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 641
            echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
            // line 642
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 642);
            echo "\" id=\"input-processing-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 642);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 642), ($context["config_processing_status"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-processing-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 642);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 642);
            echo "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 645
        echo "                          </div>
                          <div class=\"form-text\">";
        // line 646
        echo ($context["help_processing_status"] ?? null);
        echo "</div>
                          <div id=\"error-processing-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 651
        echo ($context["entry_complete_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-complete-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 654
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 655
            echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
            // line 656
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 656);
            echo "\" id=\"input-complete-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 656);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 656), ($context["config_complete_status"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-complete-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 656);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 656);
            echo "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 659
        echo "                          </div>
                          <div class=\"form-text\">";
        // line 660
        echo ($context["help_complete_status"] ?? null);
        echo "</div>
                          <div id=\"error-complete-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">";
        // line 665
        echo ($context["entry_fraud_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-select\">
                            ";
        // line 668
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 669
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 669);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 669) == ($context["config_fraud_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 669);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 671
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 672
        echo ($context["help_fraud_status"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-api\" class=\"col-sm-2 col-form-label\">";
        // line 676
        echo ($context["entry_api"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_api_id\" id=\"input-api\" class=\"form-select\">
                            <option value=\"0\">";
        // line 679
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 680
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 681
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 681);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 681) == ($context["config_api_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 681);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 683
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 684
        echo ($context["help_api"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-subscription\">";
        // line 691
        echo ($context["text_subscription"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-subscription\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-status\" class=\"col-sm-2 col-form-label\">";
        // line 696
        echo ($context["entry_subscription_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_status_id\" id=\"input-subscription-status\" class=\"form-select\">
                            ";
        // line 699
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 700
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 700);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 700) == ($context["config_subscription_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 700);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 702
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 703
        echo ($context["help_subscription"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-active-status\" class=\"col-sm-2 col-form-label\">";
        // line 707
        echo ($context["entry_subscription_active_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_active_status_id\" id=\"input-subscription-active-status\" class=\"form-select\">
                            ";
        // line 710
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 711
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 711);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 711) == ($context["config_subscription_active_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 711);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 713
        echo "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-expired-status\" class=\"col-sm-2 col-form-label\">";
        // line 717
        echo ($context["entry_subscription_expired_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_expired_status_id\" id=\"input-subscription-expired-status\" class=\"form-select\">
                            ";
        // line 720
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 721
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 721);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 721) == ($context["config_subscription_expired_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 721);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 723
        echo "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-canceled-status\" class=\"col-sm-2 col-form-label\">";
        // line 727
        echo ($context["entry_subscription_canceled_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_canceled_status_id\" id=\"input-subscription-canceled-status\" class=\"form-select\">
                            ";
        // line 730
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 731
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 731);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 731) == ($context["config_subscription_canceled_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 731);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 733
        echo "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-failed-status\" class=\"col-sm-2 col-form-label\">";
        // line 737
        echo ($context["entry_subscription_failed_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_failed_status_id\" id=\"input-subscription-failed-status\" class=\"form-select\">
                            ";
        // line 740
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 741
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 741);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 741) == ($context["config_subscription_failed_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 741);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 743
        echo "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-denied-status\" class=\"col-sm-2 col-form-label\">";
        // line 747
        echo ($context["entry_subscription_denied_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_denied_status_id\" id=\"input-subscription-denied-status\" class=\"form-select\">
                            ";
        // line 750
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 751
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 751);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 751) == ($context["config_subscription_denied_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 751);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 753
        echo "                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-stock\">";
        // line 760
        echo ($context["text_stock"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-stock\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 764
        echo ($context["entry_stock_display"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_stock_display\" value=\"1\" id=\"input-stock-display\" class=\"form-check-input\"";
        // line 767
        if (($context["config_stock_display"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 769
        echo ($context["help_stock_display"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 773
        echo ($context["entry_stock_warning"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_stock_warning\" value=\"1\" id=\"input-stock-warning\" class=\"form-check-input\"";
        // line 776
        if (($context["config_stock_warning"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 778
        echo ($context["help_stock_warning"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 782
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_stock_checkout\" value=\"1\" id=\"input-stock-checkout\" class=\"form-check-input\"";
        // line 785
        if (($context["config_stock_checkout"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 787
        echo ($context["help_stock_checkout"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-affiliate\">";
        // line 794
        echo ($context["text_affiliate"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-affiliate\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 798
        echo ($context["entry_affiliate_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_affiliate_status\" value=\"1\" id=\"input-affiliate-status\" class=\"form-check-input\"";
        // line 801
        if (($context["config_affiliate_status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 803
        echo ($context["help_affiliate_status"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">";
        // line 807
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-select\">
                            ";
        // line 810
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 811
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 811);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 811) == ($context["config_affiliate_group_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 811);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 813
        echo "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 817
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_affiliate_approval\" value=\"1\" id=\"input-affiliate-approval\" class=\"form-check-input\"";
        // line 820
        if (($context["config_affiliate_approval"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 822
        echo ($context["help_affiliate_approval"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 826
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"checkbox\" name=\"config_affiliate_auto\" value=\"1\" id=\"input-affiliate-auto\" class=\"form-check-input\"";
        // line 829
        if (($context["config_affiliate_auto"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 831
        echo ($context["help_affiliate_auto"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">";
        // line 835
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 837
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 838
        echo ($context["help_affiliate_commission"] ?? null);
        echo "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-expire\" class=\"col-sm-2 col-form-label\">";
        // line 843
        echo ($context["entry_affiliate_expire"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_expire\" value=\"";
        // line 845
        echo ($context["config_affiliate_expire"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_expire"] ?? null);
        echo "\" id=\"input-affiliate-expire\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 846
        echo ($context["help_affiliate_expire"] ?? null);
        echo "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">";
        // line 851
        echo ($context["entry_affiliate"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-select\">
                            <option value=\"0\">";
        // line 854
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 855
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 856
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 856);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 856) == ($context["config_affiliate_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 856);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 858
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 859
        echo ($context["help_affiliate"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-return\">";
        // line 867
        echo ($context["text_return"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-return\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">";
        // line 872
        echo ($context["entry_return_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-select\">
                            ";
        // line 875
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 876
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 876);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 876) == ($context["config_return_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 876);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 878
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 879
        echo ($context["help_return_status"] ?? null);
        echo "</div>
                        </div>
                      </div>

                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-return\" class=\"col-sm-2 col-form-label\">";
        // line 884
        echo ($context["entry_return"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_id\" id=\"input-return\" class=\"form-select\">
                            <option value=\"0\">";
        // line 887
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 888
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 889
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 889);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 889) == ($context["config_return_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 889);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 891
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 892
        echo ($context["help_return"] ?? null);
        echo "</div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-captcha\">";
        // line 901
        echo ($context["text_captcha"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-captcha\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">";
        // line 905
        echo ($context["entry_captcha"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-select\">
                            <option value=\"\">";
        // line 908
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 909
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 910
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 910);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 910) == ($context["config_captcha"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 910);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 912
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 913
        echo ($context["help_captcha"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 917
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 920
        $context["captcha_page_row"] = 0;
        // line 921
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 922
            echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
            // line 923
            echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 923);
            echo "\" id=\"input-captcha-";
            echo ($context["captcha_page_row"] ?? null);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 923), ($context["config_captcha_page"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-captcha-";
            echo ($context["captcha_page_row"] ?? null);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 923);
            echo "</label>
                              </div>
                              ";
            // line 925
            $context["captcha_page_row"] = (($context["captcha_page_row"] ?? null) + 1);
            // line 926
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 927
        echo "                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>


            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 941
        echo ($context["text_image_size"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-category-width\" class=\"col-sm-2 col-form-label\">";
        // line 943
        echo ($context["entry_image_category"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-category\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_width\" value=\"";
        // line 947
        echo ($context["config_image_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_height\" value=\"";
        // line 950
        echo ($context["config_image_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-category-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-category\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-thumb-width\" class=\"col-sm-2 col-form-label\">";
        // line 957
        echo ($context["entry_image_thumb"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-thumb\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_width\" value=\"";
        // line 961
        echo ($context["config_image_thumb_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_height\" value=\"";
        // line 964
        echo ($context["config_image_thumb_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-thumb-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-thumb\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-popup-width\" class=\"col-sm-2 col-form-label\">";
        // line 971
        echo ($context["entry_image_popup"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-popup\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_width\" value=\"";
        // line 975
        echo ($context["config_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_height\" value=\"";
        // line 978
        echo ($context["config_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-popup-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-popup\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-product-width\" class=\"col-sm-2 col-form-label\">";
        // line 985
        echo ($context["entry_image_product"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-product\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_width\" value=\"";
        // line 989
        echo ($context["config_image_product_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_height\" value=\"";
        // line 992
        echo ($context["config_image_product_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-product-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-product\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-additional-width\" class=\"col-sm-2 col-form-label\">";
        // line 999
        echo ($context["entry_image_additional"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-additional\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_width\" value=\"";
        // line 1003
        echo ($context["config_image_additional_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_height\" value=\"";
        // line 1006
        echo ($context["config_image_additional_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-additional-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-additional\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-related-width\" class=\"col-sm-2 col-form-label\">";
        // line 1013
        echo ($context["entry_image_related"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-related\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_width\" value=\"";
        // line 1017
        echo ($context["config_image_related_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-related-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_height\" value=\"";
        // line 1020
        echo ($context["config_image_related_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-related-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-related\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-compare-width\" class=\"col-sm-2 col-form-label\">";
        // line 1027
        echo ($context["entry_image_compare"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-compare\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_width\" value=\"";
        // line 1031
        echo ($context["config_image_compare_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-compare-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_height\" value=\"";
        // line 1034
        echo ($context["config_image_compare_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-compare-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-compare\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-wishlist-width\" class=\"col-sm-2 col-form-label\">";
        // line 1041
        echo ($context["entry_image_wishlist"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-wishlist\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_width\" value=\"";
        // line 1045
        echo ($context["config_image_wishlist_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-wishlist-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_height\" value=\"";
        // line 1048
        echo ($context["config_image_wishlist_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-wishlist-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-wishlist\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-cart-width\" class=\"col-sm-2 col-form-label\">";
        // line 1055
        echo ($context["entry_image_cart"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-cart\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_width\" value=\"";
        // line 1059
        echo ($context["config_image_cart_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-cart-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_height\" value=\"";
        // line 1062
        echo ($context["config_image_cart_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-cart-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-cart\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-location-width\" class=\"col-sm-2 col-form-label\">";
        // line 1069
        echo ($context["entry_image_location"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-location\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_width\" value=\"";
        // line 1073
        echo ($context["config_image_location_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-location-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_height\" value=\"";
        // line 1076
        echo ($context["config_image_location_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-location-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-location\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1086
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">";
        // line 1088
        echo ($context["entry_mail_engine"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-select\">
                      <option value=\"mail\"";
        // line 1091
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_mail"] ?? null);
        echo "</option>
                      <option value=\"smtp\"";
        // line 1092
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_smtp"] ?? null);
        echo "</option>
                    </select>
                    <div class=\"form-text\">";
        // line 1094
        echo ($context["help_mail_engine"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">";
        // line 1098
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1100
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1101
        echo ($context["help_mail_parameter"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>";
        // line 1107
        echo ($context["text_smtp"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">";
        // line 1109
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1111
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1112
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">";
        // line 1116
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1118
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">";
        // line 1122
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1124
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1125
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">";
        // line 1129
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1131
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">";
        // line 1135
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1137
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1142
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1144
        echo ($context["entry_mail_alert"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 1147
        $context["mail_alert_row"] = 0;
        // line 1148
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1149
            echo "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
            // line 1150
            echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1150);
            echo "\" id=\"input-mail-alert-";
            echo ($context["mail_alert_row"] ?? null);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1150), ($context["config_mail_alert"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-mail-alert-";
            echo ($context["mail_alert_row"] ?? null);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1150);
            echo "</label>
                        </div>
                        ";
            // line 1152
            $context["mail_alert_row"] = (($context["mail_alert_row"] ?? null) + 1);
            // line 1153
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1154
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 1155
        echo ($context["help_mail_alert"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">";
        // line 1159
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1161
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-mail-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                    <div class=\"form-text\">";
        // line 1162
        echo ($context["help_mail_alert_email"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1169
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1171
        echo ($context["entry_maintenance"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"checkbox\" name=\"config_maintenance\" value=\"1\" id=\"input-maintenance\" class=\"form-check-input\"";
        // line 1174
        if (($context["config_maintenance"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                    <div class=\"form-text\">";
        // line 1176
        echo ($context["help_maintenance"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-expire\" class=\"col-sm-2 col-form-label\">";
        // line 1180
        echo ($context["entry_session_expire"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_session_expire\" value=\"";
        // line 1182
        echo ($context["config_session_expire"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_session_expire"] ?? null);
        echo "\" id=\"input-session-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1183
        echo ($context["help_session_expire"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1187
        echo ($context["entry_seo_url"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"checkbox\" name=\"config_seo_url\" value=\"1\" id=\"input-seo-url\" class=\"form-check-input\"";
        // line 1190
        if (($context["config_seo_url"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                    <div class=\"form-text\">";
        // line 1192
        echo ($context["help_seo_url"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-robots\" class=\"col-sm-2 col-form-label\">";
        // line 1196
        echo ($context["entry_robots"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1198
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                    <div class=\"form-text\">";
        // line 1199
        echo ($context["help_robots"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-compression\" class=\"col-sm-2 col-form-label\">";
        // line 1203
        echo ($context["entry_compression"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1205
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1206
        echo ($context["help_compression"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1211
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1213
        echo ($context["entry_shared"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"checkbox\" name=\"config_shared\" value=\"1\" id=\"input-shared\" class=\"form-check-input\"";
        // line 1216
        if (($context["config_shared"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                    <div class=\"form-text\">";
        // line 1218
        echo ($context["help_shared"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-encryption\" class=\"col-sm-2 col-form-label\">";
        // line 1222
        echo ($context["entry_encryption"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1224
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    <div class=\"form-text\">";
        // line 1225
        echo ($context["help_encryption"] ?? null);
        echo "</div>
                    <div id=\"error-encryption\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1231
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-file-max-size\" class=\"col-sm-2 col-form-label\">";
        // line 1233
        echo ($context["entry_file_max_size"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1235
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1236
        echo ($context["help_file_max_size"] ?? null);
        echo "</div>
                    <div id=\"error-file-max-size\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-ext-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1241
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1243
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                    <div class=\"form-text\">";
        // line 1244
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "</div>
                    <div id=\"error-file-ext-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-mime-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1249
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1251
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                    <div class=\"form-text\">";
        // line 1252
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "</div>
                    <div id=\"error-file-mime-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1258
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1260
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"checkbox\" name=\"config_error_display\" value=\"1\" id=\"input-error-display\" class=\"form-check-input\"";
        // line 1263
        if (($context["config_error_display"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1268
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"checkbox\" name=\"config_error_log\" value=\"1\" id=\"input-error-log\" class=\"form-check-input\"";
        // line 1271
        if (($context["config_error_log"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-error-filename\" class=\"col-sm-2 col-form-label\">";
        // line 1276
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1278
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\"/>
                    <div id=\"error-error-filename\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-theme').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=setting/setting|theme&user_token=";
        // line 1295
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
        dataType: 'html',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (html) {
            \$('#theme-thumb').attr('src', html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-theme').trigger('change');

\$('#input-country').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country|country&user_token=";
        // line 1318
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
            html = '<option value=\"\">";
        // line 1327
        echo ($context["text_select"] ?? null);
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '";
        // line 1333
        echo ($context["config_zone_id"] ?? null);
        echo "') {
                        html += ' selected=\"selected\"';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected=\"selected\">";
        // line 1340
        echo ($context["text_none"] ?? null);
        echo "</option>';
            }

            \$('#input-zone').html(html);

            \$('#button-save').prop('disabled', false);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-country').trigger('change');
//--></script>
";
        // line 1355
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3255 => 1355,  3237 => 1340,  3227 => 1333,  3218 => 1327,  3206 => 1318,  3180 => 1295,  3158 => 1278,  3153 => 1276,  3143 => 1271,  3137 => 1268,  3127 => 1263,  3121 => 1260,  3116 => 1258,  3107 => 1252,  3101 => 1251,  3096 => 1249,  3088 => 1244,  3082 => 1243,  3077 => 1241,  3069 => 1236,  3063 => 1235,  3058 => 1233,  3053 => 1231,  3044 => 1225,  3038 => 1224,  3033 => 1222,  3026 => 1218,  3019 => 1216,  3013 => 1213,  3008 => 1211,  3000 => 1206,  2994 => 1205,  2989 => 1203,  2982 => 1199,  2976 => 1198,  2971 => 1196,  2964 => 1192,  2957 => 1190,  2951 => 1187,  2944 => 1183,  2938 => 1182,  2933 => 1180,  2926 => 1176,  2919 => 1174,  2913 => 1171,  2908 => 1169,  2898 => 1162,  2892 => 1161,  2887 => 1159,  2880 => 1155,  2877 => 1154,  2871 => 1153,  2869 => 1152,  2854 => 1150,  2851 => 1149,  2846 => 1148,  2844 => 1147,  2838 => 1144,  2833 => 1142,  2823 => 1137,  2818 => 1135,  2809 => 1131,  2804 => 1129,  2797 => 1125,  2791 => 1124,  2786 => 1122,  2777 => 1118,  2772 => 1116,  2765 => 1112,  2759 => 1111,  2754 => 1109,  2749 => 1107,  2740 => 1101,  2734 => 1100,  2729 => 1098,  2722 => 1094,  2713 => 1092,  2705 => 1091,  2699 => 1088,  2694 => 1086,  2679 => 1076,  2671 => 1073,  2664 => 1069,  2652 => 1062,  2644 => 1059,  2637 => 1055,  2625 => 1048,  2617 => 1045,  2610 => 1041,  2598 => 1034,  2590 => 1031,  2583 => 1027,  2571 => 1020,  2563 => 1017,  2556 => 1013,  2544 => 1006,  2536 => 1003,  2529 => 999,  2517 => 992,  2509 => 989,  2502 => 985,  2490 => 978,  2482 => 975,  2475 => 971,  2463 => 964,  2455 => 961,  2448 => 957,  2436 => 950,  2428 => 947,  2421 => 943,  2416 => 941,  2400 => 927,  2394 => 926,  2392 => 925,  2377 => 923,  2374 => 922,  2369 => 921,  2367 => 920,  2361 => 917,  2354 => 913,  2351 => 912,  2336 => 910,  2332 => 909,  2328 => 908,  2322 => 905,  2315 => 901,  2303 => 892,  2300 => 891,  2285 => 889,  2281 => 888,  2277 => 887,  2271 => 884,  2263 => 879,  2260 => 878,  2245 => 876,  2241 => 875,  2235 => 872,  2227 => 867,  2216 => 859,  2213 => 858,  2198 => 856,  2194 => 855,  2190 => 854,  2184 => 851,  2176 => 846,  2170 => 845,  2165 => 843,  2157 => 838,  2151 => 837,  2146 => 835,  2139 => 831,  2132 => 829,  2126 => 826,  2119 => 822,  2112 => 820,  2106 => 817,  2100 => 813,  2085 => 811,  2081 => 810,  2075 => 807,  2068 => 803,  2061 => 801,  2055 => 798,  2048 => 794,  2038 => 787,  2031 => 785,  2025 => 782,  2018 => 778,  2011 => 776,  2005 => 773,  1998 => 769,  1991 => 767,  1985 => 764,  1978 => 760,  1969 => 753,  1954 => 751,  1950 => 750,  1944 => 747,  1938 => 743,  1923 => 741,  1919 => 740,  1913 => 737,  1907 => 733,  1892 => 731,  1888 => 730,  1882 => 727,  1876 => 723,  1861 => 721,  1857 => 720,  1851 => 717,  1845 => 713,  1830 => 711,  1826 => 710,  1820 => 707,  1813 => 703,  1810 => 702,  1795 => 700,  1791 => 699,  1785 => 696,  1777 => 691,  1767 => 684,  1764 => 683,  1749 => 681,  1745 => 680,  1741 => 679,  1735 => 676,  1728 => 672,  1725 => 671,  1710 => 669,  1706 => 668,  1700 => 665,  1692 => 660,  1689 => 659,  1670 => 656,  1667 => 655,  1663 => 654,  1657 => 651,  1649 => 646,  1646 => 645,  1627 => 642,  1624 => 641,  1620 => 640,  1614 => 637,  1607 => 633,  1604 => 632,  1589 => 630,  1585 => 629,  1579 => 626,  1572 => 622,  1569 => 621,  1554 => 619,  1550 => 618,  1546 => 617,  1540 => 614,  1533 => 610,  1526 => 608,  1520 => 605,  1513 => 601,  1506 => 599,  1500 => 596,  1493 => 592,  1486 => 590,  1480 => 587,  1473 => 583,  1467 => 582,  1462 => 580,  1454 => 575,  1441 => 565,  1438 => 564,  1423 => 562,  1419 => 561,  1415 => 560,  1409 => 557,  1401 => 552,  1395 => 551,  1390 => 549,  1380 => 544,  1374 => 541,  1364 => 536,  1358 => 533,  1351 => 529,  1344 => 527,  1338 => 524,  1330 => 519,  1327 => 518,  1308 => 515,  1305 => 514,  1301 => 513,  1295 => 510,  1288 => 506,  1285 => 505,  1270 => 503,  1266 => 502,  1260 => 499,  1250 => 494,  1244 => 491,  1237 => 487,  1230 => 485,  1224 => 482,  1216 => 477,  1207 => 475,  1201 => 472,  1194 => 468,  1187 => 466,  1181 => 463,  1171 => 456,  1160 => 448,  1151 => 446,  1143 => 445,  1139 => 444,  1133 => 441,  1126 => 437,  1117 => 435,  1109 => 434,  1105 => 433,  1099 => 430,  1089 => 425,  1083 => 422,  1076 => 418,  1065 => 410,  1059 => 409,  1054 => 407,  1047 => 403,  1044 => 402,  1029 => 400,  1025 => 399,  1021 => 398,  1015 => 395,  1008 => 391,  1005 => 390,  990 => 388,  986 => 387,  982 => 386,  976 => 383,  969 => 379,  957 => 370,  951 => 369,  946 => 367,  938 => 362,  932 => 361,  927 => 359,  920 => 355,  909 => 347,  902 => 345,  896 => 342,  889 => 338,  882 => 336,  876 => 333,  869 => 329,  858 => 321,  851 => 319,  845 => 316,  836 => 310,  830 => 309,  825 => 307,  817 => 302,  810 => 300,  804 => 297,  796 => 292,  790 => 291,  785 => 289,  777 => 284,  771 => 283,  766 => 281,  757 => 275,  745 => 265,  730 => 263,  726 => 262,  720 => 259,  714 => 255,  699 => 253,  695 => 252,  689 => 249,  682 => 245,  675 => 243,  669 => 240,  663 => 236,  648 => 234,  644 => 233,  638 => 230,  631 => 226,  628 => 225,  613 => 223,  609 => 222,  603 => 219,  597 => 215,  582 => 213,  578 => 212,  572 => 209,  566 => 205,  551 => 203,  547 => 202,  541 => 199,  535 => 195,  520 => 193,  516 => 192,  510 => 189,  501 => 183,  495 => 179,  480 => 177,  476 => 176,  470 => 173,  465 => 170,  458 => 166,  455 => 165,  436 => 162,  433 => 161,  429 => 160,  423 => 157,  420 => 156,  418 => 155,  412 => 152,  406 => 151,  401 => 149,  394 => 145,  388 => 144,  383 => 142,  374 => 136,  370 => 135,  361 => 133,  355 => 130,  345 => 125,  340 => 123,  330 => 118,  325 => 116,  318 => 112,  312 => 111,  307 => 109,  298 => 105,  293 => 103,  283 => 98,  278 => 96,  268 => 91,  263 => 89,  255 => 83,  240 => 81,  236 => 80,  230 => 77,  222 => 71,  207 => 69,  203 => 68,  197 => 65,  188 => 59,  184 => 58,  175 => 56,  169 => 53,  160 => 49,  155 => 47,  146 => 43,  141 => 41,  131 => 36,  126 => 34,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  89 => 21,  84 => 19,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/setting/setting.twig", "/var/www/html/opencart/upload/admin/view/template/setting/setting.twig");
    }
}
