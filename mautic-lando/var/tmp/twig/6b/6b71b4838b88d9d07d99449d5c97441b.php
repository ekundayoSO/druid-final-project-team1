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

/* @MauticInstall/Install/base.html.twig */
class __TwigTemplate_3995057c8f4ae3f4a6002e591cc149f5 extends Template
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
        $context["headerTitle"] = "Install";
        // line 2
        yield "
<!DOCTYPE html>
<html lang=\"en\">
    ";
        // line 5
        $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->addScript("app/bundles/InstallBundle/Assets/install/install.js");
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Default/head.html.twig");
        // line 7
        yield "<body>
        <!-- start: app-wrapper -->
        <section id=\"app-wrapper\">
            <div class=\"container\">
                <div class=\"row mt-20\">
                    <div class=\"text-center\">
                        <img src=\"";
        // line 13
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getOverridableUrl("images/mautic_logo_lb200.png");
        yield "\" height=\"50px\" alt=\"Mautic\" />
                        <h5 class=\"semibold text-muted mt-5\">";
        // line 14
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\SlotExtension']->getSlot("header", "");
        yield "</h5>
                    </div>

                    <div class=\"mt-20 col-lg-6 col-lg-offset-3\">
                        <div id=\"app-content\" class=\"panel panel-default\">";
        // line 19
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Notification/flashes.html.twig");
        // line 20
        yield from         $this->unwrap()->yieldBlock("content", $context, $blocks);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ end: app-content -->
    </body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticInstall/Install/base.html.twig";
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
        return array (  74 => 20,  72 => 19,  65 => 14,  61 => 13,  53 => 7,  51 => 6,  49 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticInstall/Install/base.html.twig", "/app/docroot/app/bundles/InstallBundle/Resources/views/Install/base.html.twig");
    }
}
