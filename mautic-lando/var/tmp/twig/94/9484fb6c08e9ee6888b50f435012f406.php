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

/* @MauticInstall/Install/navbar.html.twig */
class __TwigTemplate_a7e28c35efaacaf7f893c4baf6ffb6d2 extends Template
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
        // line 7
        yield "
";
        // line 8
        $context["start"] = 1;
        // line 9
        yield "<div id=\"stepNavigation\" class=\"hidden-xs\">
    <ul class=\"horizontal-step\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 11, $this->source); })()) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["start"]) {
            // line 12
            yield "        <li";
            yield ((($context["start"] == (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 12, $this->source); })()))) ? (" class=\"active\"") : (""));
            yield ">
            ";
            // line 13
            $context["url"] = ((((($context["start"] == (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 13, $this->source); })())) || CoreExtension::inFilter($context["start"], (isset($context["completedSteps"]) || array_key_exists("completedSteps", $context) ? $context["completedSteps"] : (function () { throw new RuntimeError('Variable "completedSteps" does not exist.', 13, $this->source); })()))) || CoreExtension::inFilter(($context["start"] - 1), (isset($context["completedSteps"]) || array_key_exists("completedSteps", $context) ? $context["completedSteps"] : (function () { throw new RuntimeError('Variable "completedSteps" does not exist.', 13, $this->source); })())))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_installer_step", ["index" => $context["start"]])) : ("#"));
            // line 14
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "\" class=\"steps";
            yield ((("#" == (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 14, $this->source); })()))) ? (" disabled") : (""));
            yield "\">
                <span class=\"steps-figure\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.install.step." . $context["start"])), "html", null, true);
            yield "</span>
            </a>
        </li>
        ";
            // line 18
            $context["start"] = ($context["start"] + 1);
            // line 19
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['start'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "    </ul>
    <div class=\"clearfix\"></div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticInstall/Install/navbar.html.twig";
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
        return array (  83 => 20,  77 => 19,  75 => 18,  69 => 15,  62 => 14,  60 => 13,  55 => 12,  51 => 11,  47 => 9,  45 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticInstall/Install/navbar.html.twig", "/app/docroot/app/bundles/InstallBundle/Resources/views/Install/navbar.html.twig");
    }
}
