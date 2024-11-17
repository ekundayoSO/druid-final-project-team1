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

/* @MauticCore/RightPanel/index.html.twig */
class __TwigTemplate_df32067c5f9565371e68869ad8982ca9 extends Template
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
        yield "<div class=\"offcanvas-container\" data-toggle=\"offcanvas\" data-options='{\"openerClass\":\"offcanvas-opener\", \"closerClass\":\"offcanvas-closer\"}'>
    <!-- START Wrapper -->
    <div class=\"offcanvas-wrapper\">
       <div class=\"offcanvas-main\" id=\"OffCanvasMain\">
            <!-- start: sidebar header -->
            <div class=\"sidebar-header box-layout\"  id=\"OffCanvasMainHeader\">
                <div class=\"col-xs-12 pt-lg text-center\">
                    <h4>";
        // line 8
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.settings", [], "messages");
        yield "</h4>
                </div>

                <!-- start: loading bar -->
                <div class=\"canvas-loading-bar\">
                    ";
        // line 13
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.loading", [], "messages");
        // line 14
        yield "                </div>
                <!--/ end: loading bar -->
            </div>
            <!--/ end: sidebar header -->

            <!-- start: sidebar content -->
            <div class=\"sidebar-content\">
                <!-- scroll-content -->
                <div class=\"scroll-content slimscroll\" id=\"OffCanvasMainContent\">
                    <nav class=\"nav-sidebar\">
                        ";
        // line 24
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->menuRender("admin");
        yield "
                    </nav>
                </div>
            </div>
            <!--/ end: sidebar content -->
        </div>
    </div>
    <!--/ END Wrapper -->
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/RightPanel/index.html.twig";
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
        return array (  73 => 24,  61 => 14,  59 => 13,  51 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/RightPanel/index.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/RightPanel/index.html.twig");
    }
}
