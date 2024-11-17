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

/* @MauticMessenger/FormTheme/Config/_config_messengerconfig_widget.html.twig */
class __TwigTemplate_e12c460c999b5f091f25f0e11d11b074 extends Template
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
            '_config_messengerconfig_widget' => [$this, 'block__config_messengerconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_config_messengerconfig_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__config_messengerconfig_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "
<div class=\"alert alert-info\" role=\"alert\">
    ";
        // line 4
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.messenger.config.dsn_help_general", ["%link%" => "https://symfony.com/doc/5.4/messenger.html#transport-configuration"], "messages");
        // line 5
        yield "</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.messenger.config.dsn_email"), "html", null, true);
        yield "</h3>
    </div>
    <div class=\"panel-body\">
        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "messenger_dsn_email", [], "any", false, false, false, 12), 'row');
        yield "
    </div>
</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.messenger.config.dsn_hit"), "html", null, true);
        yield "</h3>
    </div>
    <div class=\"panel-body\">
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "messenger_dsn_hit", [], "any", false, false, false, 21), 'row');
        yield "
    </div>
</div>

<div class=\"alert alert-info\" role=\"alert\">
    ";
        // line 26
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.messenger.config.dsn_help_retry_strategy", ["%link%" => "https://symfony.com/doc/5.4/messenger.html#retries-failures"], "messages");
        // line 27
        yield "</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.messenger.config.retry_strategy"), "html", null, true);
        yield "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "messenger_retry_strategy_max_retries", [], "any", false, false, false, 36), 'row');
        yield "
            </div>
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "messenger_retry_strategy_delay", [], "any", false, false, false, 39), 'row');
        yield "
            </div>
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "messenger_retry_strategy_multiplier", [], "any", false, false, false, 42), 'row');
        yield "
            </div>
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "messenger_retry_strategy_max_delay", [], "any", false, false, false, 45), 'row');
        yield "
            </div>
        </div>
    </div>
</div>

<div class=\"alert alert-info\" role=\"alert\">
    ";
        // line 52
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.messenger.config.dsn_help_failed", ["%link%" => "https://symfony.com/doc/5.4/messenger.html#saving-retrying-failed-messages"], "messages");
        // line 53
        yield "</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.messenger.config.dsn_failed"), "html", null, true);
        yield "</h3>
    </div>
    <div class=\"panel-body\">
        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "messenger_dsn_failed", [], "any", false, false, false, 60), 'row');
        yield "
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
        return "@MauticMessenger/FormTheme/Config/_config_messengerconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  153 => 60,  147 => 57,  141 => 53,  139 => 52,  129 => 45,  123 => 42,  117 => 39,  111 => 36,  103 => 31,  97 => 27,  95 => 26,  87 => 21,  81 => 18,  72 => 12,  66 => 9,  60 => 5,  58 => 4,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticMessenger/FormTheme/Config/_config_messengerconfig_widget.html.twig", "/app/docroot/app/bundles/MessengerBundle/Resources/views/FormTheme/Config/_config_messengerconfig_widget.html.twig");
    }
}
