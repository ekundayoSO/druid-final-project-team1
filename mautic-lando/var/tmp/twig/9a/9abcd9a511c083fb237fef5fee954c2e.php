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

/* @MauticDashboard/Dashboard/upcomingemails.html.twig */
class __TwigTemplate_48ad05a66af42a194406983e46096287 extends Template
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
        if ((isset($context["upcomingEmails"]) || array_key_exists("upcomingEmails", $context) ? $context["upcomingEmails"] : (function () { throw new RuntimeError('Variable "upcomingEmails" does not exist.', 1, $this->source); })())) {
            // line 2
            yield "    <ul class=\"list-group mb-0\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcomingEmails"]) || array_key_exists("upcomingEmails", $context) ? $context["upcomingEmails"] : (function () { throw new RuntimeError('Variable "upcomingEmails" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
                // line 4
                yield "            <li class=\"list-group-item bg-light-xs\">
                <div class=\"box-layout\">
                    <div class=\"col-md-1 va-m\">
                        <h3><span class=\"fa ";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), "email", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), "email", [], "any", false, false, false, 7), "")) : ("")), "html", null, true);
                yield " fw-sb text-success\"></span></h3>
                    </div>
                    <div class=\"col-md-4 va-m\">
                        <h5 class=\"fw-sb text-primary\">
                            <a href=\"";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["email"], "campaign_id", [], "any", false, false, false, 11)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                                ";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["email"], "campaign_name", [], "any", false, false, false, 12), "html", null, true);
                yield "
                            </a>
                        </h5>
                        <span class=\"text-white dark-sm\">";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["email"], "event_name", [], "any", false, false, false, 15), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"col-md-4 va-m text-right\">
                        <a class=\"btn btn-sm btn-success\"  href=\"";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["email"], "lead_id", [], "any", false, false, false, 18)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                            <span class=\"fa ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), "lead", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), "lead", [], "any", false, false, false, 19), "")) : ("")), "html", null, true);
                yield "\"></span>
                            ";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["email"], "lead_name", [], "any", false, false, false, 20), "html", null, true);
                yield "
                        </a>
                    </div>
                    <div class=\"col-md-3 va-m text-right\">
                        ";
                // line 24
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["email"], "trigger_date", [], "any", false, false, false, 24));
                yield "
                    </div>
                </div>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['email'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "    </ul>
";
        } else {
            // line 31
            yield "    <div class=\"alert alert-warning\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.note.no.upcoming.emails"), "html", null, true);
            yield "</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticDashboard/Dashboard/upcomingemails.html.twig";
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
        return array (  109 => 31,  105 => 29,  94 => 24,  87 => 20,  83 => 19,  79 => 18,  73 => 15,  67 => 12,  63 => 11,  56 => 7,  51 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDashboard/Dashboard/upcomingemails.html.twig", "/app/docroot/app/bundles/DashboardBundle/Resources/views/Dashboard/upcomingemails.html.twig");
    }
}
