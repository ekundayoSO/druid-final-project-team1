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

/* @MauticForm/Action/_option.html.twig */
class __TwigTemplate_a3e0a6d946eb65a887ed2f67857708f3 extends Template
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
        // line 8
        $context["class"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "allowCampaignForm", [], "any", true, true, false, 8) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "allowCampaignForm", [], "any", false, false, false, 8)))) ? ("action-standalone-only") : (""));
        // line 9
        if ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "allowCampaignForm", [], "any", true, true, false, 9) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "allowCampaignForm", [], "any", false, false, false, 9))) &&  !(isset($context["isStandalone"]) || array_key_exists("isStandalone", $context) ? $context["isStandalone"] : (function () { throw new RuntimeError('Variable "isStandalone" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "    ";
            $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 10, $this->source); })()) . " hide");
        }
        // line 12
        yield "<option id=\"action_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\"
        class=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\"
        data-toggle=\"ajaxmodal\"
        data-target=\"#formComponentModal\"
        data-href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_formaction_action", ["objectAction" => "new", "type" =>         // line 18
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 18, $this->source); })()), "tmpl" => "action", "formId" =>         // line 20
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 20, $this->source); })())]), "html", null, true);
        // line 21
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 21, $this->source); })()), "label", [], "array", false, false, false, 21)), "html", null, true);
        yield "</option>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Action/_option.html.twig";
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
        return array (  65 => 21,  63 => 20,  62 => 18,  61 => 16,  55 => 13,  50 => 12,  46 => 10,  44 => 9,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Action/_option.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Action/_option.html.twig");
    }
}
