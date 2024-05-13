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

/* admin/view/template/marketplace/marketplace_extension.twig */
class __TwigTemplate_93d6c9957a2d43909fce6305320d79d8 extends Template
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
        echo "<table class=\"table table-bordered\">
\t<thead>
\t\t<td>";
        // line 3
        echo ($context["text_name"] ?? null);
        echo "</td>
\t\t<td>";
        // line 4
        echo ($context["text_date_added"] ?? null);
        echo "</td>
\t\t<td class=\"text-end\">";
        // line 5
        echo ($context["text_action"] ?? null);
        echo "</td>
\t</thead>
\t<tbody>
\t\t";
        // line 8
        if (($context["downloads"] ?? null)) {
            // line 9
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["downloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                // line 10
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["download"], "name", [], "any", false, false, false, 11);
                echo "</td>
\t\t\t\t\t<td>";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["download"], "date_added", [], "any", false, false, false, 12);
                echo "</td>
\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" value=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["download"], "download", [], "any", false, false, false, 16);
                echo "\" class=\"btn btn-primary\"";
                if ( !twig_get_attribute($this->env, $this->source, $context["download"], "download", [], "any", false, false, false, 16)) {
                    echo " disabled";
                }
                echo "><i class=\"fas fa-download\"></i> ";
                echo ($context["button_download"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t<button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-outline-dark dropdown-toggle dropdown-toggle-split\"><i class=\"fas fa-caret-down\"></i></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["download"], "install", [], "any", false, false, false, 19);
                echo "\" class=\"dropdown-item";
                if ( !twig_get_attribute($this->env, $this->source, $context["download"], "install", [], "any", false, false, false, 19)) {
                    echo " disabled";
                }
                echo "\"><i class=\"fa fa-plus-circle fa-fw\"></i> ";
                echo ($context["text_install"] ?? null);
                echo "</a> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["download"], "uninstall", [], "any", false, false, false, 19);
                echo "\" class=\"dropdown-item";
                if ( !twig_get_attribute($this->env, $this->source, $context["download"], "uninstall", [], "any", false, false, false, 19)) {
                    echo " disabled";
                }
                echo "\"><i class=\"fa fa-minus-circle fa-fw\"></i> ";
                echo ($context["text_uninstall"] ?? null);
                echo "</a> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["download"], "delete", [], "any", false, false, false, 19);
                echo "\" class=\"dropdown-item";
                if ( !twig_get_attribute($this->env, $this->source, $context["download"], "delete", [], "any", false, false, false, 19)) {
                    echo " disabled";
                }
                echo "\"><i class=\"far fa-trash-alt fa-fw\"></i> ";
                echo ($context["text_delete"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['download'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t";
        } else {
            // line 27
            echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"3\" class=\"text-center\">";
            // line 28
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t</tr>
\t\t";
        }
        // line 31
        echo "\t</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketplace/marketplace_extension.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 31,  129 => 28,  126 => 27,  123 => 26,  88 => 19,  76 => 16,  69 => 12,  65 => 11,  62 => 10,  57 => 9,  55 => 8,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketplace/marketplace_extension.twig", "/var/www/html/opencart/upload/admin/view/template/marketplace/marketplace_extension.twig");
    }
}
