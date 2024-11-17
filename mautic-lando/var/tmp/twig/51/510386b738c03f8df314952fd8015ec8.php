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

/* @MauticCore/Default/slim.html.twig */
class __TwigTemplate_ffcbf72ca7fdb76966bd02389036d01f extends Template
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
            '_content' => [$this, 'block__content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
    ";
        // line 3
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Default/head.html.twig", ["headerTitle" => ((        $this->unwrap()->hasBlock("headerTitle", $context, $blocks)) ? (        $this->unwrap()->renderBlock("headerTitle", $context, $blocks)) : (((        // line 4
array_key_exists("headerTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 4, $this->source); })()), "")) : ("")))), "pageTitle" => ((        $this->unwrap()->hasBlock("pageTitle", $context, $blocks)) ? (        $this->unwrap()->renderBlock("pageTitle", $context, $blocks)) : ("Mautic"))]);
        // line 7
        yield "
    <body>
        ";
        // line 9
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyOpen");
        yield "

        <section id=\"app-content\" class=\"container content-only\">
            ";
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Notification/flashes.html.twig", ["alertType" => "standard"]);
        // line 14
        yield "

            ";
        // line 16
        yield from $this->unwrap()->yieldBlock('_content', $context, $blocks);
        // line 24
        yield "        </section>
        ";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "MauticSharedModal", "footerButtons" => true]);
        // line 28
        yield "
        ";
        // line 29
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyClose");
        yield "
        <script>
            Mautic.onPageLoad('body');
        </script>
    </body>
</html>
";
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Default/output.html.twig", ["headerTitle" => ((        $this->unwrap()->hasBlock("headerTitle", $context, $blocks)) ? (        $this->unwrap()->renderBlock("headerTitle", $context, $blocks)) : (((        // line 18
array_key_exists("headerTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 18, $this->source); })()), "")) : ("")))), "publishStatus" => ((        $this->unwrap()->hasBlock("publishStatus", $context, $blocks)) ? (        $this->unwrap()->renderBlock("publishStatus", $context, $blocks)) : (((        // line 19
array_key_exists("publishStatus", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["publishStatus"]) || array_key_exists("publishStatus", $context) ? $context["publishStatus"] : (function () { throw new RuntimeError('Variable "publishStatus" does not exist.', 19, $this->source); })()), "")) : ("")))), "actions" => ((        $this->unwrap()->hasBlock("actions", $context, $blocks)) ? (        $this->unwrap()->renderBlock("actions", $context, $blocks)) : (((        // line 20
array_key_exists("actions", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 20, $this->source); })()), "")) : ("")))), "toolbar" => ((        $this->unwrap()->hasBlock("toolbar", $context, $blocks)) ? (        $this->unwrap()->renderBlock("toolbar", $context, $blocks)) : (((        // line 21
array_key_exists("toolbar", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["toolbar"]) || array_key_exists("toolbar", $context) ? $context["toolbar"] : (function () { throw new RuntimeError('Variable "toolbar" does not exist.', 21, $this->source); })()), "")) : (""))))]);
        // line 22
        yield "
            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Default/slim.html.twig";
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
        return array (  102 => 22,  100 => 21,  99 => 20,  98 => 19,  97 => 18,  95 => 17,  88 => 16,  76 => 29,  73 => 28,  71 => 25,  68 => 24,  66 => 16,  62 => 14,  60 => 12,  54 => 9,  50 => 7,  48 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Default/slim.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Default/slim.html.twig");
    }
}
