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

/* @MauticDashboard/Dashboard/recentactivity.html.twig */
class __TwigTemplate_b96d87665f17e407ffd730c4cb6bead4 extends Template
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
        if ((array_key_exists("logs", $context) && is_iterable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 1, $this->source); })())))) {
            // line 2
            yield "    <div class=\"pt-md pr-md pb-md pl-md\">
        <ul class=\"media-list media-list-feed\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 5
                yield "                <li class=\"media\">
                    <div class=\"media-object pull-left\">
                        <span class=\"figure featured ";
                // line 7
                if (("create" == CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 7))) {
                    yield "bg-success";
                }
                yield "\">
                            <span class=\"fa ";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "bundle", [], "any", false, false, false, 8), [], "array", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "bundle", [], "any", false, false, false, 8), [], "array", false, false, false, 8), "")) : ("")), "html", null, true);
                yield "\"></span>
                        </span>
                    </div>
                    <div class=\"media-body\">
                        ";
                // line 12
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userId", [], "any", true, true, false, 12) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userId", [], "any", false, false, false, 12)))) {
                    // line 13
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userId", [], "any", false, false, false, 13)]), "html", null, true);
                    yield "\" data-toggle=\"ajax\">
                                ";
                    // line 14
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userName", [], "any", false, false, false, 14), "html", null, true);
                    yield "
                            </a>
                        ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 16
$context["log"], "userName", [], "any", false, false, false, 16)) {
                    // line 17
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userName", [], "any", false, false, false, 17), "html", null, true);
                    yield "
                        ";
                } else {
                    // line 19
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.system"), "html", null, true);
                    yield "
                        ";
                }
                // line 21
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("mautic.dashboard." . CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 21)) . ".past.tense")), "html", null, true);
                yield "

                        ";
                // line 23
                if (CoreExtension::getAttribute($this->env, $this->source, $context["log"], "route", [], "any", true, true, false, 23)) {
                    // line 24
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "route", [], "any", false, false, false, 24), "html", null, true);
                    yield "\" data-toggle=\"ajax\">
                                ";
                    // line 25
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "objectName", [], "any", false, false, false, 25), "html", null, true);
                    yield "
                            </a>
                        ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 27
$context["log"], "objectName", [], "any", true, true, false, 27)) {
                    // line 28
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "objectName", [], "any", false, false, false, 28), "html", null, true);
                    yield "
                        ";
                }
                // line 30
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "object", [], "any", false, false, false, 30), "html", null, true);
                yield "
                        <p class=\"fs-12 dark-sm\"><small> ";
                // line 31
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "dateAdded", [], "any", false, false, false, 31));
                yield "</small></p>
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['log'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "        </ul>
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
        return "@MauticDashboard/Dashboard/recentactivity.html.twig";
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
        return array (  136 => 35,  126 => 31,  121 => 30,  115 => 28,  113 => 27,  108 => 25,  103 => 24,  101 => 23,  95 => 21,  89 => 19,  83 => 17,  81 => 16,  76 => 14,  71 => 13,  69 => 12,  62 => 8,  56 => 7,  52 => 5,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDashboard/Dashboard/recentactivity.html.twig", "/app/docroot/app/bundles/DashboardBundle/Resources/views/Dashboard/recentactivity.html.twig");
    }
}
