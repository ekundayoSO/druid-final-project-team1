<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MauticCore/Helper/form_selecttype.html.twig */
class __TwigTemplate_cbea2bee6da6e5440d4c9287ee02712d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<script>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["mauticLang"]) || array_key_exists("mauticLang", $context) ? $context["mauticLang"] : (function () { throw new RuntimeError('Variable "mauticLang" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["string"]) {
            // line 3
            yield "    mauticLang.";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield " = \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["string"]), "html", null, true);
            yield "\";
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['string'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        yield "</script>
<div class=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typePrefix"]) || array_key_exists("typePrefix", $context) ? $context["typePrefix"] : (function () { throw new RuntimeError('Variable "typePrefix" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "-type-modal-backdrop\" style=\"width: 100%; height: 100%; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: #000000; opacity: 0.9; z-index: 9000\"></div>

<div class=\"modal fade in ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typePrefix"]) || array_key_exists("typePrefix", $context) ? $context["typePrefix"] : (function () { throw new RuntimeError('Variable "typePrefix" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "-type-modal\" style=\"display: block; z-index: 9999;\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <a href=\"javascript: void(0);\" onclick=\"Mautic.closeModalAndRedirect('.";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typePrefix"]) || array_key_exists("typePrefix", $context) ? $context["typePrefix"] : (function () { throw new RuntimeError('Variable "typePrefix" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "-type-modal', '";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["cancelUrl"]) || array_key_exists("cancelUrl", $context) ? $context["cancelUrl"] : (function () { throw new RuntimeError('Variable "cancelUrl" does not exist.', 12, $this->source); })()));
        yield "');\" class=\"close\">
                    <span aria-hidden=\"true\">&times;</span>
                </a>
                <h4 class=\"modal-title\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 15, $this->source); })())), "html", null, true);
        yield "</h4>
                <div class=\"modal-loading-bar\"></div>
            </div>
            <div class=\"modal-body form-select-modal\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"panel panel-success\">
                            <div class=\"panel-heading\">
                                <div class=\"col-xs-8 col-sm-10 np\">
                                    <h3 class=\"panel-title\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["typeOneHeader"]) || array_key_exists("typeOneHeader", $context) ? $context["typeOneHeader"] : (function () { throw new RuntimeError('Variable "typeOneHeader" does not exist.', 24, $this->source); })())), "html", null, true);
        yield "</h3>
                                </div>
                                <div class=\"col-xs-4 col-sm-2 pl-0 pr-0 pt-10 pb-10 text-right\">
                                    <i class=\"hidden-xs fa ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typeOneIconClass"]) || array_key_exists("typeOneIconClass", $context) ? $context["typeOneIconClass"] : (function () { throw new RuntimeError('Variable "typeOneIconClass" does not exist.', 27, $this->source); })()), "html", null, true);
        yield " fa-lg\"></i>
                                    <button class=\"visible-xs pull-right btn btn-sm btn-default btn-nospin text-primary\" onclick=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typeOneOnClick"]) || array_key_exists("typeOneOnClick", $context) ? $context["typeOneOnClick"] : (function () { throw new RuntimeError('Variable "typeOneOnClick" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\">
                                        ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.select"), "html", null, true);
        yield "
                                    </button>
                                </div>
                            </div>
                            <div class=\"panel-body\">
                                ";
        // line 34
        if ((array_key_exists("typeOneDescription", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["typeOneDescription"]) || array_key_exists("typeOneDescription", $context) ? $context["typeOneDescription"] : (function () { throw new RuntimeError('Variable "typeOneDescription" does not exist.', 34, $this->source); })())))) {
            // line 35
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["typeOneDescription"]) || array_key_exists("typeOneDescription", $context) ? $context["typeOneDescription"] : (function () { throw new RuntimeError('Variable "typeOneDescription" does not exist.', 35, $this->source); })())), "html", null, true);
            yield "
                                ";
        }
        // line 37
        yield "                                <ul class=\"ds-list-group ds-list-check\">
                                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["typeOneDifferences"]) || array_key_exists("typeOneDifferences", $context) ? $context["typeOneDifferences"] : (function () { throw new RuntimeError('Variable "typeOneDifferences" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["difference"]) {
            // line 39
            yield "                                        <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["difference"]), "html", null, true);
            yield "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['difference'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                                </ul>
                            </div>
                            <div class=\"hidden-xs panel-footer text-center\">
                                <button class=\"btn btn-lg btn-default btn-nospin text-success\" onclick=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typeOneOnClick"]) || array_key_exists("typeOneOnClick", $context) ? $context["typeOneOnClick"] : (function () { throw new RuntimeError('Variable "typeOneOnClick" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "\">
                                    ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.select"), "html", null, true);
        yield "
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\">
                                <div class=\"col-xs-8 col-sm-10 np\">
                                    <h3 class=\"panel-title\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["typeTwoHeader"]) || array_key_exists("typeTwoHeader", $context) ? $context["typeTwoHeader"] : (function () { throw new RuntimeError('Variable "typeTwoHeader" does not exist.', 54, $this->source); })())), "html", null, true);
        yield "</h3>
                                </div>
                                <div class=\"col-xs-4 col-sm-2 pl-0 pr-0 pt-10 pb-10 text-right\">
                                    <i class=\"hidden-xs fa ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typeTwoIconClass"]) || array_key_exists("typeTwoIconClass", $context) ? $context["typeTwoIconClass"] : (function () { throw new RuntimeError('Variable "typeTwoIconClass" does not exist.', 57, $this->source); })()), "html", null, true);
        yield " fa-lg\"></i>
                                    <button class=\"visible-xs pull-right btn btn-sm btn-default btn-nospin text-primary\" onclick=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typeTwoOnClick"]) || array_key_exists("typeTwoOnClick", $context) ? $context["typeTwoOnClick"] : (function () { throw new RuntimeError('Variable "typeTwoOnClick" does not exist.', 58, $this->source); })()), "html", null, true);
        yield "\">
                                        ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.select"), "html", null, true);
        yield "
                                    </button>
                                </div>
                            </div>
                            <div class=\"panel-body\">
                                ";
        // line 64
        if ((array_key_exists("typeTwoDescription", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["typeTwoDescription"]) || array_key_exists("typeTwoDescription", $context) ? $context["typeTwoDescription"] : (function () { throw new RuntimeError('Variable "typeTwoDescription" does not exist.', 64, $this->source); })())))) {
            // line 65
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["typeTwoDescription"]) || array_key_exists("typeTwoDescription", $context) ? $context["typeTwoDescription"] : (function () { throw new RuntimeError('Variable "typeTwoDescription" does not exist.', 65, $this->source); })())), "html", null, true);
            yield "
                                ";
        }
        // line 67
        yield "                                <ul class=\"ds-list-group ds-list-check\">
                                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["typeTwoDifferences"]) || array_key_exists("typeTwoDifferences", $context) ? $context["typeTwoDifferences"] : (function () { throw new RuntimeError('Variable "typeTwoDifferences" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["difference"]) {
            // line 69
            yield "                                        <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["difference"]), "html", null, true);
            yield "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['difference'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "                                </ul>
                            </div>
                            <div class=\"hidden-xs panel-footer text-center\">
                                <button class=\"btn btn-lg btn-default btn-nospin text-primary\" onclick=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typeTwoOnClick"]) || array_key_exists("typeTwoOnClick", $context) ? $context["typeTwoOnClick"] : (function () { throw new RuntimeError('Variable "typeTwoOnClick" does not exist.', 74, $this->source); })()), "html", null, true);
        yield "\">
                                    ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.select"), "html", null, true);
        yield "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/form_selecttype.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  217 => 75,  213 => 74,  208 => 71,  199 => 69,  195 => 68,  192 => 67,  186 => 65,  184 => 64,  176 => 59,  172 => 58,  168 => 57,  162 => 54,  150 => 45,  146 => 44,  141 => 41,  132 => 39,  128 => 38,  125 => 37,  119 => 35,  117 => 34,  109 => 29,  105 => 28,  101 => 27,  95 => 24,  83 => 15,  75 => 12,  68 => 8,  63 => 6,  60 => 5,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/form_selecttype.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/form_selecttype.html.twig");
    }
}
