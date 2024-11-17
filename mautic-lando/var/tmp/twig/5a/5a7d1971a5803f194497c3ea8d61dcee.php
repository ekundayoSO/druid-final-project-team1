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

/* @GrapesJsBuilder/Setting/vars.html.twig */
class __TwigTemplate_535e15fa88a99ef91dc2182f8de5c546 extends Template
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
        yield "<div id=\"grapesjsbuilder_assets\" class=\"hide\" data-assets=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dataAssets"]) || array_key_exists("dataAssets", $context) ? $context["dataAssets"] : (function () { throw new RuntimeError('Variable "dataAssets" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\" data-upload=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dataUpload"]) || array_key_exists("dataUpload", $context) ? $context["dataUpload"] : (function () { throw new RuntimeError('Variable "dataUpload" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\" data-delete=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dataDelete"]) || array_key_exists("dataDelete", $context) ? $context["dataDelete"] : (function () { throw new RuntimeError('Variable "dataDelete" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\"></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@GrapesJsBuilder/Setting/vars.html.twig";
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
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@GrapesJsBuilder/Setting/vars.html.twig", "/app/docroot/plugins/GrapesJsBuilderBundle/Resources/views/Setting/vars.html.twig");
    }
}
