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

/* @MauticCore/Helper/search.html.twig */
class __TwigTemplate_00967cbe12a9a5ac16b84d8ff25b54af extends Template
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
        $context["searchValue"] = ((array_key_exists("searchValue", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 1, $this->source); })()), "")) : (""));
        // line 2
        $context["target"] = ((array_key_exists("target", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 2, $this->source); })()), ".page-list")) : (".page-list"));
        // line 3
        $context["overlayTarget"] = ((array_key_exists("overlayTarget", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["overlayTarget"]) || array_key_exists("overlayTarget", $context) ? $context["overlayTarget"] : (function () { throw new RuntimeError('Variable "overlayTarget" does not exist.', 3, $this->source); })()), (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 3, $this->source); })()))) : ((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 3, $this->source); })())));
        // line 4
        $context["overlayEnabled"] = (((array_key_exists("overlayDisabled", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["overlayDisabled"]) || array_key_exists("overlayDisabled", $context) ? $context["overlayDisabled"] : (function () { throw new RuntimeError('Variable "overlayDisabled" does not exist.', 4, $this->source); })())))) ? ("false") : ("true"));
        // line 5
        $context["id"] = ((array_key_exists("searchId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchId"]) || array_key_exists("searchId", $context) ? $context["searchId"] : (function () { throw new RuntimeError('Variable "searchId" does not exist.', 5, $this->source); })()), "list-search")) : ("list-search"));
        // line 6
        $context["tmpl"] = ((array_key_exists("tmpl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 6, $this->source); })()), "list")) : ("list"));
        // line 7
        yield "
<div class=\"input-group\">
    ";
        // line 9
        if ((array_key_exists("searchHelp", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["searchHelp"]) || array_key_exists("searchHelp", $context) ? $context["searchHelp"] : (function () { throw new RuntimeError('Variable "searchHelp" does not exist.', 9, $this->source); })())))) {
            // line 10
            yield "    <div class=\"input-group-btn\">
        <button class=\"btn btn-default btn-nospin\" data-toggle=\"modal\" data-target=\"#";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchId"]) || array_key_exists("searchId", $context) ? $context["searchId"] : (function () { throw new RuntimeError('Variable "searchId" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "-search-help\">
            <i class=\"ri-question-line\"></i>
        </button>
    </div>
    ";
        }
        // line 16
        yield "
    <input type=\"search\" class=\"form-control search\" id=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\" name=\"search\" placeholder=\"";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search.placeholder", [], "messages");
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 17, $this->source); })()));
        yield "\" autocomplete=\"false\" data-toggle=\"livesearch\" data-target=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\" data-tmpl=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\" data-action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\" data-overlay=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["overlayEnabled"]) || array_key_exists("overlayEnabled", $context) ? $context["overlayEnabled"] : (function () { throw new RuntimeError('Variable "overlayEnabled" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\" data-overlay-text=\"";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search.livesearch", [], "messages");
        yield "\" data-overlay-target=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["overlayTarget"]) || array_key_exists("overlayTarget", $context) ? $context["overlayTarget"] : (function () { throw new RuntimeError('Variable "overlayTarget" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\" />
    <div class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default btn-search btn-nospin\" id=\"btn-filter\" data-livesearch-parent=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\">
            <i class=\"ri-search-line\"></i>
        </button>
    </div>
</div>

";
        // line 25
        if ((isset($context["searchHelp"]) || array_key_exists("searchHelp", $context) ? $context["searchHelp"] : (function () { throw new RuntimeError('Variable "searchHelp" does not exist.', 25, $this->source); })())) {
            // line 26
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => (            // line 27
(isset($context["searchId"]) || array_key_exists("searchId", $context) ? $context["searchId"] : (function () { throw new RuntimeError('Variable "searchId" does not exist.', 27, $this->source); })()) . "-search-help"), "header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.header"), "body" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.help") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 29
(isset($context["searchHelp"]) || array_key_exists("searchHelp", $context) ? $context["searchHelp"] : (function () { throw new RuntimeError('Variable "searchHelp" does not exist.', 29, $this->source); })())))]);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/search.html.twig";
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
        return array (  108 => 29,  107 => 27,  106 => 26,  104 => 25,  95 => 19,  74 => 17,  71 => 16,  63 => 11,  60 => 10,  58 => 9,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/search.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/search.html.twig");
    }
}
