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

/* @MauticCore/Default/pageheader.html.twig */
class __TwigTemplate_37d5dca1c56b1235546cffd3e851a32f extends Template
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
        yield "<div class=\"page-header\">
\t<div class=\"box-layout\">
\t\t<div class=\"col-xs-5 col-sm-6 col-md-5 va-m\">
\t\t\t<h1 class=\"pull-left page-header-title\">";
        // line 4
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 4, $this->source); })()));
        yield "</h1>
\t\t\t<div class=\"ml-sm pull-left\">
\t\t\t\t\t";
        // line 6
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["publishStatus"]) || array_key_exists("publishStatus", $context) ? $context["publishStatus"] : (function () { throw new RuntimeError('Variable "publishStatus" does not exist.', 6, $this->source); })()));
        yield "
\t\t\t</div>
\t\t\t";
        // line 8
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("page.header.left", $context);
        yield "
\t\t</div>
\t\t<div class=\"col-xs-7 col-sm-6 col-md-7 va-m\">
\t\t\t<div class=\"toolbar text-right\" id=\"toolbar\">
\t\t\t\t";
        // line 14
        yield "\t\t\t\t";
        yield (( !is_iterable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 14, $this->source); })()))) ? ((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 14, $this->source); })())) : (""));
        yield "

\t\t\t\t<div class=\"toolbar-bundle-buttons pull-left\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["toolbar"]) || array_key_exists("toolbar", $context) ? $context["toolbar"] : (function () { throw new RuntimeError('Variable "toolbar" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "</div>
\t\t\t\t<div class=\"toolbar-form-buttons hide pull-right\">
\t\t\t\t\t<div class=\"btn-group toolbar-standard hidden-xs hidden-sm \"></div>
\t\t\t\t\t<div class=\"btn-group toolbar-dropdown hidden-md hidden-lg\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-main\"></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-nospin  dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\"></ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 27
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("page.header.right", $context);
        yield "
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Default/pageheader.html.twig";
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
        return array (  84 => 27,  70 => 16,  64 => 14,  57 => 8,  52 => 6,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Default/pageheader.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Default/pageheader.html.twig");
    }
}
