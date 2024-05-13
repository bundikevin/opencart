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

/* admin/view/template/mail/forgotten.twig */
class __TwigTemplate_5c45fc1b460d6470c28790b2018bdb04 extends Template
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
        echo ($context["text_greeting"] ?? null);
        echo "<br/>
<br/>
";
        // line 3
        echo ($context["text_change"] ?? null);
        echo "<br/>
<br/>
";
        // line 5
        echo ($context["reset"] ?? null);
        echo "<br/>
<br/>
";
        // line 7
        echo ($context["text_ip"] ?? null);
        echo " <br/>
<br/>
";
        // line 9
        echo ($context["ip"] ?? null);
        echo "<br/>
<br/>
";
        // line 11
        echo ($context["store"] ?? null);
        echo "<br/>
";
        // line 12
        echo ($context["store_url"] ?? null);
    }

    public function getTemplateName()
    {
        return "admin/view/template/mail/forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  62 => 11,  57 => 9,  52 => 7,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/mail/forgotten.twig", "/var/www/html/opencart/upload/admin/view/template/mail/forgotten.twig");
    }
}
