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

/* admin/view/template/marketplace/api.twig */
class __TwigTemplate_36eb7cf9903bccfbb7d947e3ca71022d extends Template
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
        echo "<div id=\"modal-opencart\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fas fa-cog\"></i> ";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"alert alert-info\"><i class=\"fas fa-info-circle\"></i> ";
        // line 9
        echo ($context["text_signup"] ?? null);
        echo "</div>
        <div class=\"mb-3\">
          <label for=\"input-username\" class=\"form-label\">";
        // line 11
        echo ($context["entry_username"] ?? null);
        echo "</label> <input type=\"text\" name=\"opencart_username\" value=\"\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
          <div id=\"error-username\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-secret\" class=\"form-label\">";
        // line 15
        echo ($context["entry_secret"] ?? null);
        echo "</label> <textarea name=\"opencart_secret\" placeholder=\"";
        echo ($context["entry_secret"] ?? null);
        echo "\" rows=\"8\" id=\"input-secret\" class=\"form-control\"></textarea>
          <div id=\"error-secret\" class=\"invalid-feedback\"></div>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" id=\"button-save\" class=\"btn btn-primary\">";
        // line 20
        echo ($context["button_save"] ?? null);
        echo "</button>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-save').on('click', function(e) {
    \$.ajax({
        url: 'index.php?route=marketplace/api|save&user_token=";
        // line 28
        echo ($context["user_token"] ?? null);
        echo "',
        type: 'post',
        dataType: 'json',
        data: \$('#modal-opencart :input'),
        beforeSend: function() {
            \$('#button-save').prop('disabled', true).addClass('loading');
        },
        complete: function() {
            \$('#button-save').prop('disabled', false).removeClass('loading');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#modal-opencart .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    for (key in json['error']) {
                        oc.error(key, json['error'][key]);
                    }
                }
            }

            if (json['success']) {
                \$('#modal-  opencart .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                window.location.reload();
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script> ";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketplace/api.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  74 => 20,  64 => 15,  55 => 11,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketplace/api.twig", "/var/www/html/opencart/upload/admin/view/template/marketplace/api.twig");
    }
}
