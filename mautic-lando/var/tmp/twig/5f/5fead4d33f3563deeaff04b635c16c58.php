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

/* @MauticCore/Helper/list_toolbar.html.twig */
class __TwigTemplate_c19169769b9b507978fd68adaaa78c95 extends Template
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
        $context["wrap"] = true;
        // line 2
        yield "
";
        // line 3
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_TOOLBAR_ACTIONS"), Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::TYPE_GROUP"));
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
        yield "

<div class=\"panel-body\">
    <div class=\"box-layout\">
        <div class=\"col-xs-6 col-lg-8 va-m form-inline\">
            ";
        // line 15
        if (array_key_exists("searchValue", $context)) {
            // line 16
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/search.html.twig", ["searchId" => ((            // line 17
array_key_exists("searchId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchId"]) || array_key_exists("searchId", $context) ? $context["searchId"] : (function () { throw new RuntimeError('Variable "searchId" does not exist.', 17, $this->source); })()), null)) : (null)), "searchValue" =>             // line 18
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 18, $this->source); })()), "action" => ((            // line 19
array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 19, $this->source); })()), "")) : ("")), "searchHelp" => ((            // line 20
array_key_exists("searchHelp", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchHelp"]) || array_key_exists("searchHelp", $context) ? $context["searchHelp"] : (function () { throw new RuntimeError('Variable "searchHelp" does not exist.', 20, $this->source); })()), "")) : ("")), "target" => ((            // line 21
array_key_exists("target", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 21, $this->source); })()), null)) : (null)), "tmpl" => ((            // line 22
array_key_exists("tmpl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 22, $this->source); })()), null)) : (null)), "overlayDisabled" => ((            // line 23
array_key_exists("overlayDisabled", $context)) ? ((isset($context["overlayDisabled"]) || array_key_exists("overlayDisabled", $context) ? $context["overlayDisabled"] : (function () { throw new RuntimeError('Variable "overlayDisabled" does not exist.', 23, $this->source); })())) : (null))]);
        }
        // line 26
        yield "
            ";
        // line 27
        if ((array_key_exists("filters", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 27, $this->source); })())))) {
            // line 28
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_filters.html.twig", ["filters" =>             // line 29
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 29, $this->source); })()), "target" => ((            // line 30
array_key_exists("target", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 30, $this->source); })()), null)) : (null)), "tmpl" => ((            // line 31
array_key_exists("tmpl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 31, $this->source); })()), null)) : (null))]);
        }
        // line 34
        yield "        </div>

        <div class=\"col-xs-6 col-lg-4 va-m text-right\">
            ";
        // line 37
        if ((array_key_exists("buttonHelp", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["buttonHelp"]) || array_key_exists("buttonHelp", $context) ? $context["buttonHelp"] : (function () { throw new RuntimeError('Variable "buttonHelp" does not exist.', 37, $this->source); })())))) {
            // line 38
            yield "                <div class=\"input-group-btn\">
                    <button class=\"btn btn-default btn-nospin\" data-toggle=\"modal\" data-target=\"#";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchId"]) || array_key_exists("searchId", $context) ? $context["searchId"] : (function () { throw new RuntimeError('Variable "searchId" does not exist.', 39, $this->source); })()), "html", null, true);
            yield "-search-help\">
                        <i class=\"ri-question-line\"></i>
                    </button>
                </div>
            ";
        }
        // line 44
        yield "            ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render();
        yield "
        </div>
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
        return "@MauticCore/Helper/list_toolbar.html.twig";
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
        return array (  100 => 44,  92 => 39,  89 => 38,  87 => 37,  82 => 34,  79 => 31,  78 => 30,  77 => 29,  76 => 28,  74 => 27,  71 => 26,  68 => 23,  67 => 22,  66 => 21,  65 => 20,  64 => 19,  63 => 18,  62 => 17,  61 => 16,  59 => 15,  51 => 10,  49 => 8,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/list_toolbar.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/list_toolbar.html.twig");
    }
}
