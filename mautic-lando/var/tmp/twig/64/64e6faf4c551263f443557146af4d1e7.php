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

/* @MauticCore/Helper/chart.html.twig */
class __TwigTemplate_a809c3fa0825cfe4d740f85dc4e53413 extends Template
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
        yield "<div class=\"chart-wrapper\">
    <div class=\"pt-sd pr-md pb-md pl-md\">
        <div ";
        // line 3
        if (array_key_exists("chartHeight", $context)) {
            yield " style=\"height:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chartHeight"]) || array_key_exists("chartHeight", $context) ? $context["chartHeight"] : (function () { throw new RuntimeError('Variable "chartHeight" does not exist.', 3, $this->source); })()), "html", null, true);
            yield "px\" ";
        }
        yield ">
            ";
        // line 4
        if (array_key_exists("chartType", $context)) {
            // line 5
            yield "                <canvas class=\"chart ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chartType"]) || array_key_exists("chartType", $context) ? $context["chartType"] : (function () { throw new RuntimeError('Variable "chartType" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "-chart\" ";
            yield ((array_key_exists("disableLegend", $context)) ? ("data-disable-legend") : (""));
            yield ">
                    ";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 6, $this->source); })())), "html", null, true);
            yield "
                </canvas>
            ";
        }
        // line 9
        yield "        </div>
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
        return "@MauticCore/Helper/chart.html.twig";
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
        return array (  69 => 9,  63 => 6,  56 => 5,  54 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/chart.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/chart.html.twig");
    }
}
