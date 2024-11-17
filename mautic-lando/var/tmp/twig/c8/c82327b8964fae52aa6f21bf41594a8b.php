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

/* @MauticInstall/Install/doctrine.html.twig */
class __TwigTemplate_1d5a1816118708d9de6b994d2e2b4934 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 9
        return "@MauticInstall/Install/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        if (("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 8, $this->source); })()))) {
        }
        // line 9
        $this->parent = $this->loadTemplate("@MauticInstall/Install/content.html.twig", "@MauticInstall/Install/doctrine.html.twig", 9);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "<div class=\"panel-heading\">
    <h2 class=\"panel-title\">
        ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.database.configuration"), "html", null, true);
        yield "
    </h2>
</div>
<div class=\"panel-body\">
    ";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        yield "
    <div class=\"alert alert-mautic\">
        <h6>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.database.introtext"), "html", null, true);
        yield "</h6>
    </div>

    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "driver", [], "any", false, false, false, 24), 'row');
        yield "

    ";
        // line 26
        $context["driver"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "driver", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "data", [], "any", false, false, false, 26);
        // line 27
        yield "
    <div id=\"DatabaseSettings\"";
        // line 28
        if (("pdo_sqlite" == (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 28, $this->source); })()))) {
            yield " class=\"hide\"";
        }
        yield ">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "host", [], "any", false, false, false, 31), 'row');
        yield "
            </div>
            <div class=\"col-sm-6\">
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "port", [], "any", false, false, false, 34), 'row');
        yield "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-6\">
                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), 'row');
        yield "
            </div>
            <div class=\"col-sm-6\">
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "table_prefix", [], "any", false, false, false, 43), 'row');
        yield "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-6\">
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), 'row');
        yield "
            </div>
            <div class=\"col-sm-6\">
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "password", [], "any", false, false, false, 52), 'row');
        yield "
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "backup_tables", [], "any", false, false, false, 59), 'row');
        yield "
        </div>
        ";
        // line 61
        $context["hide"] = (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "backup_tables", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "data", [], "any", false, false, false, 61)) ? (" hide") : (""));
        // line 62
        yield "        <div class=\"col-sm-6";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hide"]) || array_key_exists("hide", $context) ? $context["hide"] : (function () { throw new RuntimeError('Variable "hide" does not exist.', 62, $this->source); })()), "html", null, true);
        yield "\" id=\"backupPrefix\">
            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "backup_prefix", [], "any", false, false, false, 63), 'row');
        yield "
        </div>
    </div>

    <div class=\"row mt-20\">
        <div class=\"col-sm-9\">
            <div class=\"hide\" id=\"waitMessage\">
                <div class=\"alert alert-info\">
                    <strong>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.database.installing"), "html", null, true);
        yield "</strong>
                </div>
            </div>";
        // line 74
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticInstall/Install/navbar.html.twig", ["step" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 74, $this->source); })()), "count" => (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 74, $this->source); })()), "completedSteps" => (isset($context["completedSteps"]) || array_key_exists("completedSteps", $context) ? $context["completedSteps"] : (function () { throw new RuntimeError('Variable "completedSteps" does not exist.', 74, $this->source); })())]);
        // line 75
        yield "</div>
        <div class=\"col-sm-3\">
            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "buttons", [], "any", false, false, false, 77), 'row');
        yield "
        </div>
    </div>
    ";
        // line 80
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
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
        return "@MauticInstall/Install/doctrine.html.twig";
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
        return array (  188 => 80,  182 => 77,  178 => 75,  176 => 74,  171 => 71,  160 => 63,  155 => 62,  153 => 61,  148 => 59,  138 => 52,  132 => 49,  123 => 43,  117 => 40,  108 => 34,  102 => 31,  94 => 28,  91 => 27,  89 => 26,  84 => 24,  78 => 21,  73 => 19,  66 => 15,  62 => 13,  55 => 12,  50 => 9,  47 => 8,  40 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticInstall/Install/doctrine.html.twig", "/app/docroot/app/bundles/InstallBundle/Resources/views/Install/doctrine.html.twig");
    }
}
