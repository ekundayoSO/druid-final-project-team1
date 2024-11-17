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

/* @MauticEmail/FormTheme/Config/_config_emailconfig_widget.html.twig */
class __TwigTemplate_bc07564bb44d1d877698669291360524 extends Template
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
            '_config_emailconfig_widget' => [$this, 'block__config_emailconfig_widget'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "
";
        // line 9
        yield from $this->unwrap()->yieldBlock('_config_emailconfig_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__config_emailconfig_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "children", [], "any", false, false, false, 10);
        // line 11
        $context["fieldKeys"] = Twig\Extension\CoreExtension::keys((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 11, $this->source); })()));
        // line 12
        yield "
";
        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), ["@MauticEmail/FormTheme/Config/monitored_email_widget.html.twig", "@MauticEmail/FormTheme/Config/monitored_mailboxes_widget.html.twig"], true);
        // line 17
        yield "
";
        // line 18
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 18, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return CoreExtension::inFilter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 18, $this->source); })()), ["mailer_from_name", "mailer_from_email", "mailer_reply_to_email"]); })) > 0)) {
            // line 19
            yield "    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.config.header.mail"), "html", null, true);
            yield "</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"row\">
                ";
            // line 25
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 25, $this->source); })()), "mailer_from_name"], 25, $context, $this->getSourceContext());
            yield "
                ";
            // line 26
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 26, $this->source); })()), "mailer_from_email"], 26, $context, $this->getSourceContext());
            yield "
            </div>
            <div class=\"row\">
                ";
            // line 29
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 29, $this->source); })()), "mailer_reply_to_email"], 29, $context, $this->getSourceContext());
            yield "
                ";
            // line 30
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 30, $this->source); })()), "mailer_return_path"], 30, $context, $this->getSourceContext());
            yield "
            </div>
            <div class=\"row\">
                ";
            // line 33
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 33, $this->source); })()), "mailer_is_owner"], 33, $context, $this->getSourceContext());
            yield "
                ";
            // line 34
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 34, $this->source); })()), "mailer_custom_headers"], 34, $context, $this->getSourceContext());
            yield "
            </div>
        </div>
    </div>
";
        }
        // line 39
        yield "
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.config.header.dsn"), "html", null, true);
        yield "</h3>
    </div>
    <div class=\"panel-body\">
        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 45, $this->source); })()), "mailer_dsn", [], "any", false, false, false, 45), 'row');
        yield "
    </div>
</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.frequency_rules"), "html", null, true);
        yield "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 56, $this->source); })()), "email_frequency_number", [], "any", false, false, false, 56), 'row');
        yield "
            </div>
            <div class=\"col-md-12\">
                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 59, $this->source); })()), "email_frequency_time", [], "any", false, false, false, 59), 'row');
        yield "
            </div>
        </div>
    </div>
</div>

";
        // line 65
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "monitored_email", [], "any", true, true, false, 65)) {
            // line 66
            yield "    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.config.header.monitored_email"), "html", null, true);
            yield "</h3>
        </div>
        <div class=\"panel-body\">
            ";
            // line 71
            if ($this->env->getTest('function')->getCallable()("imap_open")) {
                // line 72
                yield "                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "monitored_email", [], "any", false, false, false, 72), 'widget');
                yield "
            ";
            } else {
                // line 74
                yield "                <div class=\"alert alert-info\">";
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.imap_extension_missing"));
                yield "</div>
            ";
            }
            // line 76
            yield "        </div>
    </div>
";
        }
        // line 79
        yield "
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.config.header.message"), "html", null, true);
        yield "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            ";
        // line 86
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 86, $this->source); })()), "webview_text"], 86, $context, $this->getSourceContext());
        yield "
            ";
        // line 87
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 87, $this->source); })()), "default_signature_text"], 87, $context, $this->getSourceContext());
        yield "
        </div>
        <div class=\"row\">
            ";
        // line 90
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 90, $this->source); })()), "mailer_append_tracking_pixel"], 90, $context, $this->getSourceContext());
        yield "
            ";
        // line 91
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 91, $this->source); })()), "mailer_convert_embed_images"], 91, $context, $this->getSourceContext());
        yield "
            ";
        // line 92
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 92, $this->source); })()), "disable_trackable_urls"], 92, $context, $this->getSourceContext());
        yield "
            ";
        // line 93
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 93, $this->source); })()), "minify_email_html"], 93, $context, $this->getSourceContext());
        yield "
        </div>
    </div>
</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.config.header.unsubscribe"), "html", null, true);
        yield "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            ";
        // line 104
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 104, $this->source); })()), "unsubscribe_text"], 104, $context, $this->getSourceContext());
        yield "
        </div>
        <div class=\"row\">
            ";
        // line 107
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 107, $this->source); })()), "unsubscribe_message"], 107, $context, $this->getSourceContext());
        yield "
            ";
        // line 108
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 108, $this->source); })()), "resubscribe_message"], 108, $context, $this->getSourceContext());
        yield "
        </div>
        <div class=\"row\">
            ";
        // line 111
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 111, $this->source); })()), "show_contact_preferences"], 111, $context, $this->getSourceContext());
        yield "
            ";
        // line 112
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 112, $this->source); })()), "show_contact_segments"], 112, $context, $this->getSourceContext());
        yield "
        </div>
        <div class=\"row\">
            ";
        // line 115
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 115, $this->source); })()), "show_contact_frequency"], 115, $context, $this->getSourceContext());
        yield "
            ";
        // line 116
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 116, $this->source); })()), "show_contact_pause_dates"], 116, $context, $this->getSourceContext());
        yield "
        </div>
        <div class=\"row\">
            ";
        // line 119
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 119, $this->source); })()), "show_contact_categories"], 119, $context, $this->getSourceContext());
        yield "
            ";
        // line 120
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 120, $this->source); })()), "show_contact_preferred_channels"], 120, $context, $this->getSourceContext());
        yield "
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 1
    public function macro_row_if_exists($__form__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "form" => $__form__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 2, $this->source); })()), [], "array", true, true, false, 2)) {
                // line 3
                yield "    <div class=\"col-md-6\">
      ";
                // line 4
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 4, $this->source); })()), [], "array", false, false, false, 4), 'row');
                yield "
    </div>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/FormTheme/Config/_config_emailconfig_widget.html.twig";
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
        return array (  309 => 4,  306 => 3,  303 => 2,  290 => 1,  280 => 120,  276 => 119,  270 => 116,  266 => 115,  260 => 112,  256 => 111,  250 => 108,  246 => 107,  240 => 104,  233 => 100,  223 => 93,  219 => 92,  215 => 91,  211 => 90,  205 => 87,  201 => 86,  194 => 82,  189 => 79,  184 => 76,  178 => 74,  172 => 72,  170 => 71,  164 => 68,  160 => 66,  158 => 65,  149 => 59,  143 => 56,  135 => 51,  126 => 45,  120 => 42,  115 => 39,  107 => 34,  103 => 33,  97 => 30,  93 => 29,  87 => 26,  83 => 25,  76 => 21,  72 => 19,  70 => 18,  67 => 17,  65 => 13,  62 => 12,  60 => 11,  58 => 10,  47 => 9,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/FormTheme/Config/_config_emailconfig_widget.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/FormTheme/Config/_config_emailconfig_widget.html.twig");
    }
}
