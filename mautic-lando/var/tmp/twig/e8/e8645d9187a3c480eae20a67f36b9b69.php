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

/* @MauticPage/FormTheme/Config/_config_trackingconfig_widget.html.twig */
class __TwigTemplate_9c599026ecb58c17091a1d6a49d6b52c extends Template
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
            '_config_trackingconfig_widget' => [$this, 'block__config_trackingconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_config_trackingconfig_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__config_trackingconfig_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.pagetracking"), "html", null, true);
        yield "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"form-group\">
            <p>";
        // line 8
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.pagetracking.info"));
        yield "</p>
            <pre>&lt;script&gt;
    (function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
        w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
        m=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
    })(window,document,'script','";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_js");
        yield "','mt');

    mt('send', 'pageview');
&lt;/script&gt;</pre>
        </div>
        <div class=\"row\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "children", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["name"] => $context["f"]) {
            // line 20
            yield "                ";
            if (CoreExtension::inFilter($context["name"], ["anonymize_ip", "track_contact_by_ip", "track_by_tracking_url", "do_not_track_404_anonymous"])) {
                // line 21
                yield "                    <div class=\"col-md-6\">
                        ";
                // line 22
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                yield "
                        ";
                // line 23
                if (($context["name"] == "anonymize_ip")) {
                    // line 24
                    yield "                            <div class=\"anonymize_ip_address hide text-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.config.form.anonymize_ip.warning"), "html", null, true);
                    yield "</div>
                        ";
                }
                // line 26
                yield "                    </div>
                ";
            }
            // line 28
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['f'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "        </div>
    </div>
</div>
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.tracking.facebook.pixel"), "html", null, true);
        yield "</h3>
    </div>
    <div class=\"panel-body\">
        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "facebook_pixel_id", [], "any", false, false, false, 37), 'row');
        yield "
        <div class=\"row\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "children", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["name"] => $context["f"]) {
            // line 40
            yield "                ";
            if (CoreExtension::inFilter($context["name"], ["facebook_pixel_trackingpage_enabled", "facebook_pixel_landingpage_enabled"])) {
                // line 41
                yield "                    <div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                yield "</div>
                ";
            }
            // line 43
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['f'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "        </div>
    </div>
</div>
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.tracking.google.analytics"), "html", null, true);
        yield "</h3>
    </div>
    <div class=\"panel-body\">
        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "google_analytics_id", [], "any", false, false, false, 52), 'row');
        yield "
        <div class=\"row\">
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "children", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["name"] => $context["f"]) {
            // line 55
            yield "                ";
            if (CoreExtension::inFilter($context["name"], ["google_analytics_trackingpage_enabled", "google_analytics_landingpage_enabled", "google_analytics_anonymize_ip"])) {
                // line 56
                yield "                    <div class=\"col-md-6\">
                        ";
                // line 57
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                yield "
                    </div>
                ";
            }
            // line 60
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['f'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPage/FormTheme/Config/_config_trackingconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  191 => 61,  185 => 60,  179 => 57,  176 => 56,  173 => 55,  169 => 54,  164 => 52,  158 => 49,  151 => 44,  145 => 43,  139 => 41,  136 => 40,  132 => 39,  127 => 37,  121 => 34,  114 => 29,  108 => 28,  104 => 26,  98 => 24,  96 => 23,  92 => 22,  89 => 21,  86 => 20,  82 => 19,  73 => 13,  65 => 8,  58 => 4,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/FormTheme/Config/_config_trackingconfig_widget.html.twig", "/app/docroot/app/bundles/PageBundle/Resources/views/FormTheme/Config/_config_trackingconfig_widget.html.twig");
    }
}
