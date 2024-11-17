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

/* @MauticCore/FormTheme/Config/config_layout.html.twig */
class __TwigTemplate_9418cf1e52c50a9832c5d3ccfc1f1a1c extends Template
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

        // line 1
        $_trait_0 = $this->loadTemplate("@MauticCore/FormTheme/Config/_config_coreconfig_ip_lookup_config_widget.html.twig", "@MauticCore/FormTheme/Config/config_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@MauticCore/FormTheme/Config/_config_coreconfig_ip_lookup_config_widget.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        // line 2
        $_trait_1 = $this->loadTemplate("@MauticCore/FormTheme/Config/_config_coreconfig_widget.html.twig", "@MauticCore/FormTheme/Config/config_layout.html.twig", 2);
        if (!$_trait_1->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@MauticCore/FormTheme/Config/_config_coreconfig_widget.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_1_blocks = $_trait_1->unwrap()->getBlocks();

        // line 3
        $_trait_2 = $this->loadTemplate("@MauticCore/FormTheme/Config/_config_themeconfig_widget.html.twig", "@MauticCore/FormTheme/Config/config_layout.html.twig", 3);
        if (!$_trait_2->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@MauticCore/FormTheme/Config/_config_themeconfig_widget.html.twig".'" cannot be used as a trait.', 3, $this->source);
        }
        $_trait_2_blocks = $_trait_2->unwrap()->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/FormTheme/Config/config_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  49 => 3,  42 => 2,  35 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/FormTheme/Config/config_layout.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/FormTheme/Config/config_layout.html.twig");
    }
}
