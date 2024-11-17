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

/* @MauticCore/Default/head.html.twig */
class __TwigTemplate_05c35368321d9c43a2d84ea703c95219 extends Template
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
        yield "<head>
    <meta charset=\"UTF-8\" />
    <title>
        ";
        // line 4
        if ((array_key_exists("headerTitle", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 4, $this->source); })())))) {
            // line 5
            yield "            ";
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::replace((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 5, $this->source); })()), ["<" => " <"])));
            yield " |
        ";
        }
        // line 7
        yield "        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("pageTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 7, $this->source); })()), "Mautic")) : ("Mautic")), "html", null, true);
        yield "
    </title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getOverridableUrl("images/favicon.ico");
        yield "\" />
    <link rel=\"icon\" sizes=\"192x192\" href=\"";
        // line 11
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getOverridableUrl("images/favicon.ico");
        yield "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 12
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getOverridableUrl("images/apple-touch-icon.png");
        yield "\" />

    ";
        // line 14
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputSystemStylesheets();
        yield "

    ";
        // line 16
        yield from         $this->loadTemplate("@MauticCore/Default/script.html.twig", "@MauticCore/Default/head.html.twig", 16)->unwrap()->yield($context);
        // line 17
        yield "
    ";
        // line 18
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputHeadDeclarations();
        yield "
</head>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Default/head.html.twig";
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
        return array (  85 => 18,  82 => 17,  80 => 16,  75 => 14,  70 => 12,  66 => 11,  62 => 10,  55 => 7,  49 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Default/head.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Default/head.html.twig");
    }
}
