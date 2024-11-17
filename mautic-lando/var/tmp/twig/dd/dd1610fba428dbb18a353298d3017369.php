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

/* @MauticCore/Default/output.html.twig */
class __TwigTemplate_628c2046f3688a823d1bafbc6358f146 extends Template
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
        yield "<div class=\"content-body\">
    ";
        // line 2
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Default/pageheader.html.twig");
        yield "
    ";
        // line 3
        yield ((array_key_exists("content", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 3, $this->source); })()), "")) : (""));
        yield "
</div>
";
        // line 5
        yield ((array_key_exists("modal", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 5, $this->source); })()), "")) : (""));
        yield "
";
        // line 6
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->getContext();
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Default/output.html.twig";
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
        return array (  58 => 6,  54 => 5,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Default/output.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Default/output.html.twig");
    }
}
