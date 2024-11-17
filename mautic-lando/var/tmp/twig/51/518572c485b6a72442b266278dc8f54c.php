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

/* @MauticDashboard/Dashboard/index.html.twig */
class __TwigTemplate_e6b8d675f19a5c2f13884bda6a9d8c51 extends Template
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

        $this->blocks = [
            'headerTitle' => [$this, 'block_headerTitle'],
            'mauticContent' => [$this, 'block_mauticContent'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticDashboard/Dashboard/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.header.index"), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "dashboard";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["routeBase" => "dashboard", "langVar" => "dashboard", "customButtons" => [["attr" => ["class" => "btn btn-default btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "new"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.add")], "iconClass" => "ri-add-fill", "btnText" => "mautic.dashboard.widget.add", "primary" => true], ["attr" => ["class" => "btn btn-default btn-nospin", "href" => "javascript:void(0)", "onclick" => (("Mautic.saveDashboardLayout('" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.confirmation_layout_name")) . "');"), "data-toggle" => ""], "iconClass" => "ri-save-line", "btnText" => "mautic.dashboard.save_as_predefined"], ["attr" => ["class" => "btn btn-default btn-nospin", "href" => "javascript:void(0)", "onclick" => (((("Mautic.exportDashboardLayout('" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.confirmation_layout_name")) . "', '") . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "export"])) . "');"), "data-toggle" => ""], "iconClass" => "ri-export-line", "btnText" => "mautic.dashboard.export.widgets"], ["attr" => ["class" => "btn btn-default", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "import"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.import")], "iconClass" => "ri-import-line", "btnText" => "mautic.dashboard.widget.import"]]]);
        // line 54
        yield "
";
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "  ";
        if ((true == CoreExtension::getAttribute($this->env, $this->source, (isset($context["phpVersion"]) || array_key_exists("phpVersion", $context) ? $context["phpVersion"] : (function () { throw new RuntimeError('Variable "phpVersion" does not exist.', 58, $this->source); })()), "isOutdated", [], "array", false, false, false, 58))) {
            // line 59
            yield "  <div class=\"pt-md pl-md col-md-12\">
      <div class=\"pt-md pl-md alert alert-warning\">
          <h3>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.phpversionwarning.title"), "html", null, true);
            yield "</h3>
          <p>";
            // line 62
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.phpversionwarning.body", ["%phpversion%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["phpVersion"]) || array_key_exists("phpVersion", $context) ? $context["phpVersion"] : (function () { throw new RuntimeError('Variable "phpVersion" does not exist.', 62, $this->source); })()), "version", [], "array", false, false, false, 62)]));
            yield "</p>
      </div>
  </div>
  ";
        }
        // line 66
        yield "
  <div class=\"row pt-md pl-md\">
      <div class=\"col-sm-6\">
          ";
        // line 69
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 69, $this->source); })())]);
        yield "
      </div>
  </div>

  ";
        // line 73
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new RuntimeError('Variable "widgets" does not exist.', 73, $this->source); })())) > 0)) {
            // line 74
            yield "      <div id=\"dashboard-widgets\" class=\"dashboard-widgets cards\">
          ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new RuntimeError('Variable "widgets" does not exist.', 75, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 76
                yield "              <div class=\"card-flex widget\" data-widget-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 76), "html", null, true);
                yield "\" style=\"width: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "width", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "width", [], "any", false, false, false, 76), 100)) : (100)), "html", null, true);
                yield "%; height: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "height", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "height", [], "any", false, false, false, 76), 300)) : (300)), "html", null, true);
                yield "px\">
                  <div class=\"spinner\"><i class=\"fa fa-spin fa-spinner\"></i></div>
                  ";
                // line 78
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticDashboard/Dashboard/widget.html.twig", ["widget" => $context["widget"]]);
                yield "
              </div>
          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            yield "      </div>
      <div id=\"cloned-widgets\" class=\"dashboard-widgets cards\"></div>
  ";
        } else {
            // line 84
            yield "      <div class=\"well well col-md-6 col-md-offset-3 mt-md\">
          <div class=\"row\">
              <div class=\"mautibot-image col-xs-3 text-center\">
                  <img class=\"img-responsive\" style=\"max-height: 125px; margin-left: auto; margin-right: auto;\" src=\"";
            // line 87
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave");
            yield "\" />
              </div>
              <div class=\"col-xs-9\">
                  <h4><i class=\"fa fa-quote-left\"></i> ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.nowidgets.tip.header"), "html", null, true);
            yield " <i class=\"fa fa-quote-right\"></i></h4>
                  <p class=\"mt-md\">";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.nowidgets.tip"), "html", null, true);
            yield "</p>
                  <a href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "applyDashboardFile", "file" => "default.json"]), "html", null, true);
            yield "\" class=\"btn btn-success\">
                      Apply the default dashboard
                  </a>
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
        return "@MauticDashboard/Dashboard/index.html.twig";
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
        return array (  202 => 92,  198 => 91,  194 => 90,  188 => 87,  183 => 84,  178 => 81,  161 => 78,  151 => 76,  134 => 75,  131 => 74,  129 => 73,  122 => 69,  117 => 66,  110 => 62,  106 => 61,  102 => 59,  99 => 58,  92 => 57,  86 => 54,  83 => 8,  76 => 7,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDashboard/Dashboard/index.html.twig", "/app/docroot/app/bundles/DashboardBundle/Resources/views/Dashboard/index.html.twig");
    }
}
