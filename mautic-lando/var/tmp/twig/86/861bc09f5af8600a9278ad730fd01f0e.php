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

/* @MauticCore/Notification/flashes.html.twig */
class __TwigTemplate_dff041a16f88d94ba6303ae6d2cebf29 extends Template
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
        $context["alertType"] = ((array_key_exists("alertType", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["alertType"]) || array_key_exists("alertType", $context) ? $context["alertType"] : (function () { throw new RuntimeError('Variable "alertType" does not exist.', 1, $this->source); })()), "growl")) : ("growl"));
        // line 2
        yield "<div id=\"flashes\"";
        if (((isset($context["alertType"]) || array_key_exists("alertType", $context) ? $context["alertType"] : (function () { throw new RuntimeError('Variable "alertType" does not exist.', 2, $this->source); })()) == "growl")) {
            yield " class=\"alert-growl-container\"";
        }
        yield ">
    ";
        // line 3
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Notification/flash_messages.html.twig", ["dismissable" => (((((        // line 4
array_key_exists("notDismissable", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["notDismissable"]) || array_key_exists("notDismissable", $context) ? $context["notDismissable"] : (function () { throw new RuntimeError('Variable "notDismissable" does not exist.', 4, $this->source); })()), false)) : (false)) == false)) ? (" alert-dismissable") : ("")), "alertType" =>         // line 5
(isset($context["alertType"]) || array_key_exists("alertType", $context) ? $context["alertType"] : (function () { throw new RuntimeError('Variable "alertType" does not exist.', 5, $this->source); })())]);
        // line 6
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Notification/flashes.html.twig";
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
        return array (  55 => 6,  53 => 5,  52 => 4,  51 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Notification/flashes.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Notification/flashes.html.twig");
    }
}
