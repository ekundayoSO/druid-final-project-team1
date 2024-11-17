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

/* @MauticCore/Default/navbar.html.twig */
class __TwigTemplate_ffcd0b519f16076e600eb2e5cf2be0c4 extends Template
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
        yield "<div class=\"loading-bar\">
    ";
        // line 2
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.loading", [], "messages");
        // line 3
        yield "</div>

<div class=\"navbar-nocollapse\">
    <!-- start: left nav -->
    <ul class=\"nav navbar-nav navbar-left\">
        <li class=\"visible-xs\">
            <a href=\"javascript: void(0);\" data-toggle=\"sidebar\" data-direction=\"ltr\">
                <i class=\"fa fa-navicon fs-16\"></i>
            </a>
        </li>
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Mautic\\CoreBundle\\Controller\\DefaultController::globalSearchAction"));
        yield "
    </ul>
    <!--/ end: left nav -->

    <!-- start: right nav -->
    <ul class=\"nav navbar-nav navbar-right\">
        
        ";
        // line 20
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Menu/profile.html.twig");
        yield "
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Mautic\\CoreBundle\\Controller\\DefaultController::notificationsAction"));
        yield "
        <li>
            <a href=\"javascript: void(0);\" data-toggle=\"sidebar\" data-direction=\"rtl\">
                <i class=\"ri-settings-5-line ri-xl\"></i>
            </a>
        </li>
    </ul>
    <div class=\"navbar-toolbar pull-right mt-15 mr-10\">
    ";
        // line 29
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_NAVBAR"));
        yield "
    ";
        // line 30
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render();
        yield "
    </div>

    <!--/ end: right nav -->
</div>
<!--/ end: navbar nocollapse -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Default/navbar.html.twig";
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
        return array (  88 => 30,  84 => 29,  73 => 21,  69 => 20,  59 => 13,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Default/navbar.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Default/navbar.html.twig");
    }
}
