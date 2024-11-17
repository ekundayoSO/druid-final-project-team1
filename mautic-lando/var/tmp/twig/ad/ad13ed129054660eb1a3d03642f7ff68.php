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

/* @MauticForm/Builder/_actions.html.twig */
class __TwigTemplate_f6161d279dc8ece3bddd05fb4c9d2139 extends Template
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
        // line 8
        $context["route"] = ((array_key_exists("route", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 8, $this->source); })()), "mautic_formfield_action")) : ("mautic_formfield_action"));
        // line 9
        yield "
<div class=\"form-buttons btn-group\" role=\"group\" aria-label=\"Field options\">
    <button type=\"button\" data-toggle=\"ajaxmodal\" data-target=\"#formComponentModal\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 11, $this->source); })()), ["objectAction" => "edit", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 11, $this->source); })()), "formId" => (isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 11, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn btn-default btn-edit\">
        <i class=\"ri-edit-line text-primary\"></i>
    </button>
    ";
        // line 14
        if (( !array_key_exists("disallowDelete", $context) || (array_key_exists("disallowDelete", $context) && (false == (isset($context["disallowDelete"]) || array_key_exists("disallowDelete", $context) ? $context["disallowDelete"] : (function () { throw new RuntimeError('Variable "disallowDelete" does not exist.', 14, $this->source); })()))))) {
            // line 15
            yield "      <a type=\"button\" data-hide-panel=\"true\" data-toggle=\"ajax\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 15, $this->source); })()), ["objectAction" => "delete", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()), "formId" => (isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 15, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-default\">
          <i class=\"ri-delete-bin-line text-danger\"></i>
      </a>
    ";
        }
        // line 19
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Builder/_actions.html.twig";
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
        return array (  64 => 19,  56 => 15,  54 => 14,  48 => 11,  44 => 9,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Builder/_actions.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Builder/_actions.html.twig");
    }
}
