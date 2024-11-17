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

/* @MauticCore/Notification/flash_messages.html.twig */
class __TwigTemplate_fb6e767f722dcadeda99e7ed1f17eb94 extends Template
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
        $context["dismissable"] = ((array_key_exists("dismissable", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dismissable"]) || array_key_exists("dismissable", $context) ? $context["dismissable"] : (function () { throw new RuntimeError('Variable "dismissable" does not exist.', 1, $this->source); })()), "")) : (""));
        // line 2
        $context["alertType"] = ((array_key_exists("alertType", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["alertType"]) || array_key_exists("alertType", $context) ? $context["alertType"] : (function () { throw new RuntimeError('Variable "alertType" does not exist.', 2, $this->source); })()), "growl")) : ("growl"));
        // line 3
        $context["alertClasses"] = ((((isset($context["alertType"]) || array_key_exists("alertType", $context) ? $context["alertType"] : (function () { throw new RuntimeError('Variable "alertType" does not exist.', 3, $this->source); })()) == "growl")) ? (["notice" => "alert-growl", "warning" => "alert-growl alert-growl--warning", "error" => "alert-growl alert-growl--error"]) : (["notice" => "alert-success", "warning" => "alert-warning", "error" => "alert-danger"]));
        // line 7
        $context["flashes"] = ((array_key_exists("flashes", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["flashes"]) || array_key_exists("flashes", $context) ? $context["flashes"] : (function () { throw new RuntimeError('Variable "flashes" does not exist.', 7, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [], "any", false, false, false, 7))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [], "any", false, false, false, 7)));
        // line 8
        yield "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["flashes"]) || array_key_exists("flashes", $context) ? $context["flashes"] : (function () { throw new RuntimeError('Variable "flashes" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["type"] => $context["item"]) {
            // line 10
            $context["messages"] = (( !is_iterable($context["item"])) ? ([$context["item"]]) : ($context["item"]));
            // line 11
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                yield "        <div class=\"alert ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["alertClasses"]) || array_key_exists("alertClasses", $context) ? $context["alertClasses"] : (function () { throw new RuntimeError('Variable "alertClasses" does not exist.', 12, $this->source); })()), $context["type"], [], "any", false, false, false, 12) . (isset($context["dismissable"]) || array_key_exists("dismissable", $context) ? $context["dismissable"] : (function () { throw new RuntimeError('Variable "dismissable" does not exist.', 12, $this->source); })())), "html", null, true);
                yield " alert-new\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"><i class=\"ri-close-line\"></i></button>
            <span>";
                // line 14
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($context["message"]);
                yield "</span>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Notification/flash_messages.html.twig";
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
        return array (  70 => 14,  64 => 12,  59 => 11,  57 => 10,  53 => 9,  50 => 8,  48 => 7,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Notification/flash_messages.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Notification/flash_messages.html.twig");
    }
}
