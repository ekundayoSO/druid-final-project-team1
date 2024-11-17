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

/* @MauticCore/Error/base.html.twig */
class __TwigTemplate_8e8b9126bacc8b01e8bb3151b21691dc extends Template
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
            'pageTitle' => [$this, 'block_pageTitle'],
            '_content' => [$this, 'block__content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 21
        return $this->loadTemplate((isset($context["baseTemplate"]) || array_key_exists("baseTemplate", $context) ? $context["baseTemplate"] : (function () { throw new RuntimeError('Variable "baseTemplate" does not exist.', 21, $this->source); })()), "@MauticCore/Error/base.html.twig", 21);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        $context["isInline"] = (($context["inline"]) ?? (false));
        // line 13
        $context["isAjax"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 13), "isxmlhttprequest", [], "any", true, true, false, 13) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 13), "isxmlhttprequest", [], "any", false, false, false, 13)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 13), "isxmlhttprequest", [], "any", false, false, false, 13)) : (false));
        // line 14
        $context["src"] = ((array_key_exists("src", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 14, $this->source); })()), $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave"))) : ($this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave")));
        // line 15
        $context["message"] = ((array_key_exists("message", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 15, $this->source); })()), "mautic.core.error.generic")) : ("mautic.core.error.generic"));
        // line 16
        $context["status_code"] = ((array_key_exists("status_code", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 16, $this->source); })()), "")) : (""));
        // line 18
        $context["pageTitle"] = ((array_key_exists("pageTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 18, $this->source); })()), "")) : (""));
        // line 20
        if (((isset($context["isAjax"]) || array_key_exists("isAjax", $context) ? $context["isAjax"] : (function () { throw new RuntimeError('Variable "isAjax" does not exist.', 20, $this->source); })()) == false)) {
            // line 23
            $context["pageTitle"] = ((((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 23, $this->source); })()) == false)) ? ((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 23, $this->source); })())) : (((array_key_exists("pageTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 23, $this->source); })()), "")) : (""))));
        }
        // line 21
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 26, $this->source); })()), "html", null, true);
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "    <div class=\"pa-20 mautibot-error";
        if ((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 29, $this->source); })())) {
            yield " inline well";
        }
        yield "\">
        <div class=\"row mt-lg pa-md\">
            ";
        // line 31
        if ((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 31, $this->source); })())) {
            // line 32
            yield "                <div class=\"mautibot-content col-xs-12\">
                    <h1><i class=\"ri-alert-line fa-fw text-danger\"></i>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 33, $this->source); })()), ["%code%" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 33, $this->source); })())]), "html", null, true);
            yield "</h1>
                    <h4 class=\"mt-5\"><strong>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 34, $this->source); })()), "html", null, true);
            yield "</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 34, $this->source); })()), "html", null, true);
            yield "</h4>
                </div>
            ";
        } else {
            // line 37
            yield "
            <div class=\"mautibot-image col-xs-4 col-md-3\">
                <img class=\"img-responsive\" src=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 39, $this->source); })()), "html", null, true);
            yield "\" />
            </div>
            <div class=\"mautibot-content col-xs-8 col-md-9\">
                <blockquote class=\"np break-word\">
                    <h1><i class=\"fa fa-quote-left\"></i> ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 43, $this->source); })()), ["%code%" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 43, $this->source); })())]), "html", null, true);
            yield " <i class=\"fa fa-quote-right\"></i></h1>
                    <h4 class=\"mt-5\"><strong>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 44, $this->source); })()), "html", null, true);
            yield "</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 44, $this->source); })()), "html", null, true);
            yield "</h4>

                    <footer class=\"text-right\">Mautibot</footer>
                </blockquote>
                <div class=\"pull-right\">
                    <a class=\"text-muted\" href=\"http://mau.tc/report-issue\" target=\"_new\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.report_issue"), "html", null, true);
            yield "</a>
                </div>
            </div>
            ";
        }
        // line 53
        yield "        </div>
    </div>
    <div class=\"clearfix\"></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Error/base.html.twig";
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
        return array (  144 => 53,  137 => 49,  127 => 44,  123 => 43,  116 => 39,  112 => 37,  104 => 34,  100 => 33,  97 => 32,  95 => 31,  87 => 29,  80 => 28,  69 => 26,  65 => 21,  62 => 23,  60 => 20,  58 => 18,  56 => 16,  54 => 15,  52 => 14,  50 => 13,  48 => 12,  41 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Error/base.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Error/base.html.twig");
    }
}
