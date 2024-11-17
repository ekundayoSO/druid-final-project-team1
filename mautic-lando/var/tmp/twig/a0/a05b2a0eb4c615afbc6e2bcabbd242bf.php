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

/* @MauticDashboard/Widget/detail.html.twig */
class __TwigTemplate_ef382bf38d6e285081ced596eea19caa extends Template
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
        yield "<div class=\"card\" style=\"height: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "height", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "height", [], "any", false, false, false, 1), "310")) : ("310")) - 10), "html", null, true);
        yield "px;\">
    <div class=\"card-header\">
        <h4>";
        // line 3
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3));
        yield "</h4>
        ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)) {
            // line 5
            yield "            <div class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"ri-more-2-fill\"></i>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li>
                        <a  href=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_dashboard_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
            yield "\"
                            data-toggle=\"ajaxmodal\"
                            data-target=\"#MauticSharedModal\"
                            data-header=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.header.edit"), "html", null, true);
            yield "\">
                            <span>
                                <i class=\"ri-edit-line\"></i>
                                ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.edit"), "html", null, true);
            yield "
                            </span>
                        </a>
                    </li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li  class=\"dropdown-header\">
                        ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.load.time", ["%time%" => Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 23, $this->source); })()), "loadTime", [], "any", false, false, false, 23) * 1000), 1)]), "html", null, true);
            yield "
                    </li>
                    <li  class=\"dropdown-header\">
                        ";
            // line 26
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 26, $this->source); })()), "isCached", [], "any", false, false, false, 26)) {
                // line 27
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.data.loaded.from.cache"), "html", null, true);
                yield "
                        ";
            } else {
                // line 29
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.data.loaded.from.database"), "html", null, true);
                yield "
                        ";
            }
            // line 31
            yield "                    </li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li>
                        <a  href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_dashboard_action", ["objectAction" => "delete", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\"
                            data-header=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.header.delete"), "html", null, true);
            yield "\"
                            class=\"remove-widget\">
                            <span>
                                <i class=\"ri-close-line\"></i>
                                ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.remove"), "html", null, true);
            yield "
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        ";
        }
        // line 46
        yield "    </div>
    <div class=\"card-body\">
        ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 48, $this->source); })()), "errorMessage", [], "any", false, false, false, 48)) {
            // line 49
            yield "            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 50, $this->source); })()), "errorMessage", [], "any", false, false, false, 50)), "html", null, true);
            yield "
            </div>
        ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 52
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 52, $this->source); })()), "template", [], "any", false, false, false, 52)) {
            // line 53
            yield "            <!-- start: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 53, $this->source); })()), "template", [], "any", false, false, false, 53), "html", null, true);
            yield " -->
            ";
            // line 54
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 54, $this->source); })()), "template", [], "any", false, false, false, 54), CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 54, $this->source); })()), "templateData", [], "any", false, false, false, 54));
            yield "
            <!-- end: ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 55, $this->source); })()), "template", [], "any", false, false, false, 55), "html", null, true);
            yield " -->
        ";
        }
        // line 57
        yield "    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticDashboard/Widget/detail.html.twig";
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
        return array (  159 => 57,  154 => 55,  150 => 54,  145 => 53,  143 => 52,  138 => 50,  135 => 49,  133 => 48,  129 => 46,  119 => 39,  112 => 35,  108 => 34,  103 => 31,  97 => 29,  91 => 27,  89 => 26,  83 => 23,  74 => 17,  68 => 14,  62 => 11,  54 => 5,  52 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDashboard/Widget/detail.html.twig", "/app/docroot/app/bundles/DashboardBundle/Resources/views/Widget/detail.html.twig");
    }
}
