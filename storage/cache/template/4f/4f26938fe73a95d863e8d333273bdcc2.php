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

/* extension/opencart/catalog/view/template/payment/cod.twig */
class __TwigTemplate_814cb3038cbe0b142dac550c4a532393 extends Template
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
        echo "<div class=\"d-inline-block pt-2 pd-2 w-100 text-end\">
  <button type=\"button\" id=\"button-confirm\" class=\"btn btn-primary\">";
        // line 2
        echo ($context["button_confirm"] ?? null);
        echo "</button>
</div>
<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=extension/opencart/payment/cod|confirm',
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function() {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function(json) {
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['redirect']) {
                location = json['redirect'];
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/payment/cod.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/payment/cod.twig", "/var/www/html/opencart/upload/extension/opencart/catalog/view/template/payment/cod.twig");
    }
}
