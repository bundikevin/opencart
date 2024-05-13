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

/* catalog/view/template/checkout/payment_method.twig */
class __TwigTemplate_d59f9a98f503ed59d83908ab50ccaf59 extends Template
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
        echo "<form id=\"form-payment-method\">
  <fieldset>
    <legend>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</legend>
    <div class=\"input-group\">
      <select name=\"payment_method\" id=\"input-payment-method\" class=\"form-select\"";
        // line 5
        if ( !($context["payment_methods"] ?? null)) {
            echo " disabled";
        }
        echo ">
        <option value=\"\">";
        // line 6
        echo ($context["text_select"] ?? null);
        echo "</option>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
            // line 8
            echo "          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 8);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 8) == ($context["code"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 8);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
        <optgroup label=\"";
        // line 11
        echo ($context["text_stored"] ?? null);
        echo "\">
          ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 13
            echo "            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "code", [], "any", false, false, false, 13);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "code", [], "any", false, false, false, 13) == ($context["code"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 13);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </optgroup>

      </select>
      <button type=\"button\" id=\"button-payment-method\" class=\"btn btn-light\"><i class=\"fas fa-sync\"></i></button>
    </div>
  </fieldset>
</form>
<br/>
<div class=\"mb-2\">
  <label for=\"input-comment\" class=\"form-label\"><strong>";
        // line 24
        echo ($context["text_comments"] ?? null);
        echo "</strong></label> <textarea name=\"comment\" rows=\"3\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
</div>
";
        // line 26
        if (($context["text_agree"] ?? null)) {
            // line 27
            echo "  <div class=\"mb-2\">
    <div class=\"text-end\">";
            // line 28
            echo ($context["text_agree"] ?? null);
            echo " <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-agree\" class=\"form-check-input\"";
            if (($context["agree"] ?? null)) {
                echo " checked";
            }
            echo "/></div>
  </div>
";
        }
        // line 31
        echo "<script type=\"text/javascript\"><!--
// Payment Methods
\$('#button-payment-method').on('click', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method|getMethods&language=";
        // line 38
        echo ($context["language"] ?? null);
        echo "',
            dataType: 'json',
            beforeSend: function () {
                \$('#input-payment-method').prop('disabled', true);
            },
            success: function (json) {
                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-shipping-method').prop('disabled', true);
                }

                html = '<option value=\"\">";
        // line 56
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

                    \$('#input-payment-method').prop('disabled', false);
                }

                \$('#input-payment-method').html(html);

                \$('#checkout-confirm').load('index.php?route=checkout/confirm|confirm&language=";
        // line 75
        echo ($context["language"] ?? null);
        echo "');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// Payment Method
\$('#input-payment-method').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method|save&language=";
        // line 90
        echo ($context["language"] ?? null);
        echo "',
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
                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm|confirm&language=";
        // line 113
        echo ($context["language"] ?? null);
        echo "');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// Payment Method
\$('#input-comment').on('focusout', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method|comment&language=";
        // line 129
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: \$('#input-comment').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-agree').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method|agree&language=";
        // line 165
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: \$('#input-agree').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                \$('#checkout-confirm').load('index.php?route=checkout/confirm|confirm&language=";
        // line 177
        echo ($context["language"] ?? null);
        echo "');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 177,  288 => 165,  249 => 129,  230 => 113,  204 => 90,  186 => 75,  164 => 56,  143 => 38,  134 => 31,  124 => 28,  121 => 27,  119 => 26,  112 => 24,  101 => 15,  86 => 13,  82 => 12,  78 => 11,  75 => 10,  60 => 8,  56 => 7,  52 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/payment_method.twig", "/var/www/html/opencart/upload/catalog/view/template/checkout/payment_method.twig");
    }
}
