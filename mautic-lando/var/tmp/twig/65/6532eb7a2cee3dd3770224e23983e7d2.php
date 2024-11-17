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

/* @MauticCore/Default/content.html.twig */
class __TwigTemplate_7fdcee892aa8a4e46e7e3684c4fdf9d1 extends Template
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
        $context["request"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1);
        // line 2
        $context["contentOnly"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 2, $this->source); })()), "get", ["contentOnly", false], "method", false, false, false, 2) || (array_key_exists("contentOnly", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["contentOnly"]) || array_key_exists("contentOnly", $context) ? $context["contentOnly"] : (function () { throw new RuntimeError('Variable "contentOnly" does not exist.', 2, $this->source); })()))));
        // line 3
        $context["modalView"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 3, $this->source); })()), "get", ["modal", false], "method", false, false, false, 3) || (array_key_exists("modalView", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["modalView"]) || array_key_exists("modalView", $context) ? $context["modalView"] : (function () { throw new RuntimeError('Variable "modalView" does not exist.', 3, $this->source); })()))));
        // line 5
        $context["template"] = null;
        // line 6
        if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 6, $this->source); })()), "isXmlHttpRequest", [], "method", false, false, false, 6) &&  !(isset($context["modalView"]) || array_key_exists("modalView", $context) ? $context["modalView"] : (function () { throw new RuntimeError('Variable "modalView" does not exist.', 6, $this->source); })()))) {
            // line 7
            yield "    ";
            $context["template"] = (((isset($context["contentOnly"]) || array_key_exists("contentOnly", $context) ? $context["contentOnly"] : (function () { throw new RuntimeError('Variable "contentOnly" does not exist.', 7, $this->source); })())) ? ("@MauticCore/Default/slim.html.twig") : ("@MauticCore/Default/base.html.twig"));
        } elseif ( !        // line 8
(isset($context["modalView"]) || array_key_exists("modalView", $context) ? $context["modalView"] : (function () { throw new RuntimeError('Variable "modalView" does not exist.', 8, $this->source); })())) {
            // line 9
            yield "    ";
            $context["template"] = "@MauticCore/Default/output.html.twig";
        }
        // line 11
        yield "";
        // line 12
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 12, $this->source); })()))) {
            // line 13
            yield Twig\Extension\CoreExtension::include($this->env, $context, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 13, $this->source); })()), ["content" => ((            $this->unwrap()->hasBlock("content", $context, $blocks)) ? (            $this->unwrap()->renderBlock("content", $context, $blocks)) : (((            // line 14
array_key_exists("content", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 14, $this->source); })()), "")) : ("")))), "modal" => ((            $this->unwrap()->hasBlock("modal", $context, $blocks)) ? (            $this->unwrap()->renderBlock("modal", $context, $blocks)) : (((            // line 15
array_key_exists("modal", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 15, $this->source); })()), "")) : ("")))), "headerTitle" =>             $this->unwrap()->renderBlock("headerTitle", $context, $blocks), "pageTitle" => ((            $this->unwrap()->hasBlock("pageTitle", $context, $blocks)) ? (            $this->unwrap()->renderBlock("pageTitle", $context, $blocks)) : (((            // line 17
array_key_exists("pageTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 17, $this->source); })()), "")) : ("")))), "publishStatus" => ((            $this->unwrap()->hasBlock("publishStatus", $context, $blocks)) ? (            $this->unwrap()->renderBlock("publishStatus", $context, $blocks)) : (((            // line 18
array_key_exists("publishStatus", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["publishStatus"]) || array_key_exists("publishStatus", $context) ? $context["publishStatus"] : (function () { throw new RuntimeError('Variable "publishStatus" does not exist.', 18, $this->source); })()), "")) : ("")))), "actions" => ((            $this->unwrap()->hasBlock("actions", $context, $blocks)) ? (            $this->unwrap()->renderBlock("actions", $context, $blocks)) : (((            // line 19
array_key_exists("actions", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 19, $this->source); })()), "")) : ("")))), "toolbar" => ((            $this->unwrap()->hasBlock("toolbar", $context, $blocks)) ? (            $this->unwrap()->renderBlock("toolbar", $context, $blocks)) : (((            // line 20
array_key_exists("toolbar", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["toolbar"]) || array_key_exists("toolbar", $context) ? $context["toolbar"] : (function () { throw new RuntimeError('Variable "toolbar" does not exist.', 20, $this->source); })()), "")) : ("")))), "mauticTemplateVars" => ((            // line 21
array_key_exists("mauticTemplateVars", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 21, $this->source); })()), [])) : ([])), "isXmlHttpRequest" => CoreExtension::getAttribute($this->env, $this->source,             // line 22
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 22, $this->source); })()), "isXmlHttpRequest", [], "any", false, false, false, 22)]);
        } else {
            // line 25
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("content", $context, $blocks);
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Default/content.html.twig";
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
        return array (  76 => 25,  73 => 22,  72 => 21,  71 => 20,  70 => 19,  69 => 18,  68 => 17,  67 => 15,  66 => 14,  65 => 13,  63 => 12,  61 => 11,  57 => 9,  55 => 8,  52 => 7,  50 => 6,  48 => 5,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Default/content.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Default/content.html.twig");
    }
}
