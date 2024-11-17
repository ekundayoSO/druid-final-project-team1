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

/* @MauticCore/Helper/noresults.html.twig */
class __TwigTemplate_5822070aae4d0ba584393224a6c756bb extends Template
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
        $context["header"] = ((array_key_exists("header", $context)) ? ((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 1, $this->source); })())) : ("mautic.core.noresults.header"));
        // line 2
        $context["message"] = ((array_key_exists("message", $context)) ? ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 2, $this->source); })())) : ("mautic.core.noresults"));
        // line 3
        yield "<div class=\"alert alert-warning col-md-6 col-md-offset-3 mt-md\" style=\"white-space: normal;\">
    <h4>";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 4, $this->source); })())), "html", null, true);
        yield "</h4>
    <p>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 5, $this->source); })())), "html", null, true);
        yield "</p>
</div>

";
        // line 8
        if (array_key_exists("tip", $context)) {
            // line 9
            yield "    <div class=\"well well col-md-6 col-md-offset-3\">
        <div class=\"row\">
            <div class=\"mautibot-image col-xs-3 text-center\">
                <img class=\"img-responsive\" style=\"max-height: 125px; margin-left: auto; margin-right: auto;\" src=\"";
            // line 12
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave");
            yield "\" />
            </div>
            <div class=\"col-xs-9\">
                <h4><i class=\"fa fa-quote-left\"></i> ";
            // line 15
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.noresults.tip", [], "messages");
            yield " <i class=\"fa fa-quote-right\"></i></h4>
                <p class=\"mt-md\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["tip"]) || array_key_exists("tip", $context) ? $context["tip"] : (function () { throw new RuntimeError('Variable "tip" does not exist.', 16, $this->source); })())), "html", null, true);
            yield "</p>
            </div>
        </div>
    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/noresults.html.twig";
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
        return array (  76 => 16,  72 => 15,  66 => 12,  61 => 9,  59 => 8,  53 => 5,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/noresults.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/noresults.html.twig");
    }
}
