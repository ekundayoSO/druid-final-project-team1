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

/* @MauticCore/Helper/page_actions.html.twig */
class __TwigTemplate_4c1f424639e114c453f0e53afbb9cd9a extends Template
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
        $context["item"] = ((array_key_exists("item", $context)) ? ((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })())) : (null));
        // line 2
        $context["tooltip"] = ((array_key_exists("tooltip", $context)) ? ((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 2, $this->source); })())) : (null));
        // line 3
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_PAGE_ACTIONS"), Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::TYPE_BUTTON_DROPDOWN"),         // line 6
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()));
        // line 7
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
        yield "
";
        // line 11
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 11, $this->source); })()))) {
            // line 12
            yield "    ";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButtonsFromTemplate(            // line 13
(isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 13, $this->source); })()),             // line 14
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 14, $this->source); })()),             // line 15
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 15, $this->source); })()),             // line 16
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 16, $this->source); })()),             // line 17
(isset($context["langVar"]) || array_key_exists("langVar", $context) ? $context["langVar"] : (function () { throw new RuntimeError('Variable "langVar" does not exist.', 17, $this->source); })()),             // line 18
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 18, $this->source); })()),             // line 19
(isset($context["editAttr"]) || array_key_exists("editAttr", $context) ? $context["editAttr"] : (function () { throw new RuntimeError('Variable "editAttr" does not exist.', 19, $this->source); })()),             // line 20
(isset($context["routeVars"]) || array_key_exists("routeVars", $context) ? $context["routeVars"] : (function () { throw new RuntimeError('Variable "routeVars" does not exist.', 20, $this->source); })()),             // line 21
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()),             // line 22
(isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 22, $this->source); })()));
            // line 23
            yield "
";
        }
        // line 25
        yield "
<div class=\"std-toolbar btn-group\">

    ";
        // line 28
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render(("<button type=\"button\" class=\"btn btn-default btn-nospin dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"ri-arrow-down-s-line\"></i></button>
" . "<ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">"), "</ul>");
        // line 34
        yield "
</div>

";
        // line 37
        yield (isset($context["extraHtml"]) || array_key_exists("extraHtml", $context) ? $context["extraHtml"] : (function () { throw new RuntimeError('Variable "extraHtml" does not exist.', 37, $this->source); })());
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/page_actions.html.twig";
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
        return array (  87 => 37,  82 => 34,  79 => 28,  74 => 25,  70 => 23,  68 => 22,  67 => 21,  66 => 20,  65 => 19,  64 => 18,  63 => 17,  62 => 16,  61 => 15,  60 => 14,  59 => 13,  57 => 12,  55 => 11,  51 => 10,  49 => 7,  47 => 6,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/page_actions.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/page_actions.html.twig");
    }
}
