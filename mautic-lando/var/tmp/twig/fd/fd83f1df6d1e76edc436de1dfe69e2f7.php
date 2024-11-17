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

/* @MauticConfig/FormTheme/dsn_row.html.twig */
class __TwigTemplate_f75e59887d3cff56afce286a4c370bf0 extends Template
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
            'dsn_row' => [$this, 'block_dsn_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('dsn_row', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dsn_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "    <div class=\"config-dsn-container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "scheme", [], "any", false, false, false, 5), 'row');
        yield "
            </div>
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "host", [], "any", false, false, false, 8), 'row', ["attr" => ["preaddon_text" => "://"]]);
        yield "
            </div>
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "port", [], "any", false, false, false, 11), 'row', ["attr" => ["preaddon_text" => ":"]]);
        yield "
            </div>
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "path", [], "any", false, false, false, 14), 'row', ["attr" => ["preaddon_text" => "/"]]);
        yield "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), 'row');
        yield "
                    </div>
                    <div class=\"col-lg-6\">
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "password", [], "any", false, false, false, 24), 'row', ["attr" => ["preaddon_text" => ":"]]);
        yield "
                    </div>
                </div>
                <div class=\"config-dsn-test-container\">
                    <div class=\"form-inline\">
                        <div class=\"form-group\">
                            ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "test_button", [], "any", true, true, false, 30)) {
            // line 31
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "test_button", [], "any", false, false, false, 31), 'widget');
            yield "
                            ";
        }
        // line 33
        yield "                        </div>
                        <div class=\"form-group\">
                            <div class=\"form-control-static ml-10\">
                                <span class=\"text-muted\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.dsn.using_current_dsn"), "html", null, true);
        yield ":</span>
                                <code>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 37), "currentDsn", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 37), "currentDsn", [], "any", false, false, false, 37), "n/a")) : ("n/a")), "html", null, true);
        yield "</code>
                            </div>
                        </div>
                    </div>
                    ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "test_button", [], "any", true, true, false, 41)) {
            // line 42
            yield "                        <div class=\"help-block\">
                            <span class=\"fa fa-spinner fa-spin hide pull-left\"></span>
                            <div class=\"status-msg\"></div>
                            <div class=\"save-config-msg hide text-danger\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.dsn.save_to_test"), "html", null, true);
            yield "</div>
                        </div>
                    ";
        }
        // line 48
        yield "                </div>
            </div>
            <div class=\"col-md-6\">
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "options", [], "any", false, false, false, 51), 'row');
        yield "
            </div>
        </div>
        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'rest');
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
        return "@MauticConfig/FormTheme/dsn_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  150 => 54,  144 => 51,  139 => 48,  133 => 45,  128 => 42,  126 => 41,  119 => 37,  115 => 36,  110 => 33,  104 => 31,  102 => 30,  93 => 24,  87 => 21,  77 => 14,  71 => 11,  65 => 8,  59 => 5,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticConfig/FormTheme/dsn_row.html.twig", "/app/docroot/app/bundles/ConfigBundle/Resources/views/FormTheme/dsn_row.html.twig");
    }
}
