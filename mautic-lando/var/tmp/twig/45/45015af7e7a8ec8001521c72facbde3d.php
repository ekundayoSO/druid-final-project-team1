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

/* @MauticCore/GlobalSearch/results.html.twig */
class __TwigTemplate_e15c90a351fd37d421f9da8352bef0be extends Template
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
        yield "<div class=\"panel-group\" id=\"globalSearchPanel\">";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["header"] => $context["result"]) {
            // line 3
            yield "    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                ";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["header"], "html", null, true);
            yield "
                ";
            // line 7
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["result"], "count", [], "any", true, true, false, 7) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "count", [], "any", false, false, false, 7)))) {
                // line 8
                yield "                <span class=\"badge pull-right gs-count-badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "count", [], "any", false, false, false, 8), "html", null, true);
                yield "</span>
                ";
            }
            // line 10
            yield "            </h4>
        </div>
        <div class=\"panel-body np\">
            <ul class=\"list-group\">
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["result"]);
            foreach ($context['_seq'] as $context["k"] => $context["r"]) {
                // line 15
                yield "                  ";
                if ( !("count" === $context["k"])) {
                    // line 16
                    yield "                    <li class=\"list-group-item\">
                        ";
                    // line 17
                    yield $context["r"];
                    yield "
                    </li>
                  ";
                }
                // line 20
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['r'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "            </ul>
        </div>
    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['header'], $context['result'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/GlobalSearch/results.html.twig";
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
        return array (  101 => 25,  93 => 21,  87 => 20,  81 => 17,  78 => 16,  75 => 15,  71 => 14,  65 => 10,  59 => 8,  57 => 7,  53 => 6,  48 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/GlobalSearch/results.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/GlobalSearch/results.html.twig");
    }
}
