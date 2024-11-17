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

/* @MauticCore/GlobalSearch/globalsearch.html.twig */
class __TwigTemplate_edea33c61bca5c865c5a090a74a372c1 extends Template
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
        yield "<li class=\"dropdown dropdown-custom\" id=\"globalSearchDropdown\">
    <div class=\"dropdown-menu\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">
                    <h6 class=\"fw-sb\">";
        // line 6
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search.results", [], "messages");
        yield "</h6>
                </div>
            </div>
            <div class=\"pt-0 pb-xs pl-0 pr-0\">
                <div class=\"scroll-content slimscroll\" style=\"height:250px;\" id=\"globalSearchResults\">
                    ";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/GlobalSearch/results.html.twig", ["results" => (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 11, $this->source); })())]);
        yield "
                </div>
            </div>
        </div>
    </div>
</li>
<li>
    <div class=\"search-container\" id=\"globalSearchContainer\">
        <a href=\"javascript: void(0);\" class=\"search-button\">
            <i class=\"ri-search-line ri-xl\"></i>
        </a>
        <input
            type=\"search\"
            value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchString"]) || array_key_exists("searchString", $context) ? $context["searchString"] : (function () { throw new RuntimeError('Variable "searchString" does not exist.', 24, $this->source); })()));
        yield "\"
            class=\"form-control search\"
            id=\"globalSearchInput\"
            name=\"global_search\"
            placeholder=\"";
        // line 28
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search.everything.placeholder", [], "messages");
        yield "\"
            autocomplete=\"false\"
            data-toggle=\"livesearch\"
            data-target=\"#globalSearchResults\"
            data-action=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_core_ajax", ["action" => "globalSearch"]);
        yield "\"
            data-overlay=\"true\"
            data-overlay-text=\"";
        // line 34
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search.livesearch", [], "messages");
        yield "\" />
    </div>
</li>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/GlobalSearch/globalsearch.html.twig";
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
        return array (  92 => 34,  87 => 32,  80 => 28,  73 => 24,  57 => 11,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/GlobalSearch/globalsearch.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/GlobalSearch/globalsearch.html.twig");
    }
}
