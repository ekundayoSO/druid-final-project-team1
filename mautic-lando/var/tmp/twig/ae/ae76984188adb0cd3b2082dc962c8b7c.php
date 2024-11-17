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

/* @MauticCore/Default/script.html.twig */
class __TwigTemplate_4f62c2b30997d67d133f1d556463f374 extends Template
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
        $context["mautic_content"] = ((array_key_exists("mauticContent", $context)) ? ((isset($context["mauticContent"]) || array_key_exists("mauticContent", $context) ? $context["mauticContent"] : (function () { throw new RuntimeError('Variable "mauticContent" does not exist.', 1, $this->source); })())) : (""));
        // line 2
        yield "
";
        // line 3
        $context["editor_fonts"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->sortEditorFonts($this->extensions['Mautic\CoreBundle\Twig\Extension\ConfigExtension']->get("editor_fonts"));
        // line 4
        yield "
<script>
    var mauticBasePath                  = '";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "getBasePath", [], "method", false, false, false, 6), "html", null, true);
        yield "';
    var mauticBaseUrl                   = \"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_base_index");
        yield "\";
    var mauticAjaxUrl                   = \"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_core_ajax");
        yield "\";
    var mauticAjaxCsrf                  = '";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->getCsrfToken("mautic_ajax_post"), "html", null, true);
        yield "';
    var mauticSessionLifetime           = \"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('ini_get')->getCallable()("session.gc_maxlifetime"), "html", null, true);
        yield "\";
    var mauticImagesPath                = '";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getImagesPath(), "html", null, true);
        yield "';
    var mauticAssetPrefix               = '";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetPrefix(true), "html", null, true);
        yield "';
    var mauticContent                   = '";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mautic_content"]) || array_key_exists("mautic_content", $context) ? $context["mautic_content"] : (function () { throw new RuntimeError('Variable "mautic_content" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "';
    var mauticEnv                       = '";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "environment", [], "any", false, false, false, 14), "html", null, true);
        yield "';
    var mauticLang                      = ";
        // line 15
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->getJsLang();
        yield ";
    var mauticLocale                    = '";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "getLocale", [], "method", false, false, false, 16), "html", null, true);
        yield "';
    var mauticEditorFonts               = ";
        // line 17
        yield json_encode((isset($context["editor_fonts"]) || array_key_exists("editor_fonts", $context) ? $context["editor_fonts"] : (function () { throw new RuntimeError('Variable "editor_fonts" does not exist.', 17, $this->source); })()));
        yield ";
    var mauticContactExportInBackground = ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber($this->extensions['Mautic\CoreBundle\Twig\Extension\ConfigExtension']->get("contact_export_in_background")), "html", null, true);
        yield ";
    var mauticFroalaEnabled = ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber($this->extensions['Mautic\CoreBundle\Twig\Extension\ConfigExtension']->get("load_froala_assets")), "html", null, true);
        yield ";
</script>
";
        // line 21
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputSystemScripts(true);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Default/script.html.twig";
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
        return array (  110 => 21,  105 => 19,  101 => 18,  97 => 17,  93 => 16,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Default/script.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Default/script.html.twig");
    }
}
