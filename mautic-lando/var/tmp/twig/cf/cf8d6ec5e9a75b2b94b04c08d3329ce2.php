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

/* @MauticCore/FormTheme/Config/_config_coreconfig_widget.html.twig */
class __TwigTemplate_0425e3e583fcc3556c8f6ee0f4a7598a extends Template
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
            '_config_coreconfig_widget' => [$this, 'block__config_coreconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_config_coreconfig_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__config_coreconfig_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "children", [], "any", false, false, false, 2);
        // line 3
        $context["fieldKeys"] = Twig\Extension\CoreExtension::keys((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 3, $this->source); })()));
        // line 4
        yield "
";
        // line 5
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 5, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return CoreExtension::inFilter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 5, $this->source); })()), ["site_url", "webroot", "404_page", "cache_path", "log_path", "theme", "image_path", "last_shown_tab"]); })) > 0)) {
            // line 6
            yield "  <div class=\"panel panel-primary\">
      <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.general"), "html", null, true);
            yield "</h3>
      </div>
      <div class=\"panel-body\">
          <div class=\"row\">";
            // line 12
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "site_url", [], "any", true, true, false, 12)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "site_url", [], "any", false, false, false, 12), 'row');
                yield "</div>";
            }
            // line 13
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "webroot", [], "any", true, true, false, 13)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "webroot", [], "any", false, false, false, 13), 'row');
                yield "</div>";
            }
            // line 14
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "404_page", [], "array", true, true, false, 14)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "404_page", [], "array", false, false, false, 14), 'row');
                yield "</div>";
            }
            // line 15
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cache_path", [], "any", true, true, false, 15)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "cache_path", [], "any", false, false, false, 15), 'row');
                yield "</div>";
            }
            // line 16
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "log_path", [], "any", true, true, false, 16)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "log_path", [], "any", false, false, false, 16), 'row');
                yield "</div>";
            }
            // line 17
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "theme", [], "any", true, true, false, 17)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "theme", [], "any", false, false, false, 17), 'row');
                yield "</div>";
            }
            // line 18
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image_path", [], "any", true, true, false, 18)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "image_path", [], "any", false, false, false, 18), 'row');
                yield "</div>";
            }
            // line 19
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "last_shown_tab", [], "any", true, true, false, 19)) {
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "last_shown_tab", [], "any", false, false, false, 19), 'row');
            }
            // line 20
            yield "          </div>
      </div>
  </div>
";
        }
        // line 24
        yield "
";
        // line 25
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 25, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return CoreExtension::inFilter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 25, $this->source); })()), ["default_pagelist", "timezone", "locale", "date_format_full", "date_format_short", "date_format_dateonly", "date_format_timeonly"]); })) > 0)) {
            // line 26
            yield "  <div class=\"panel panel-primary\">
      <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.defaults"), "html", null, true);
            yield "</h3>
      </div>
      <div class=\"panel-body\">
          <div class=\"row\">";
            // line 32
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "default_pagelimit", [], "any", true, true, false, 32)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "default_pagelimit", [], "any", false, false, false, 32), 'row');
                yield "</div>";
            }
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "default_timezone", [], "any", true, true, false, 33)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "default_timezone", [], "any", false, false, false, 33), 'row');
                yield "</div>";
            }
            // line 34
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "locale", [], "any", true, true, false, 34)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "locale", [], "any", false, false, false, 34), 'row');
                yield "</div>";
            }
            // line 35
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cached_data_timeout", [], "any", true, true, false, 35)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "cached_data_timeout", [], "any", false, false, false, 35), 'row');
                yield "</div>";
            }
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "default_daterange_filter", [], "any", true, true, false, 36)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "default_daterange_filter", [], "any", false, false, false, 36), 'row');
                yield "</div>";
            }
            // line 37
            yield "          </div>

          <hr class=\"text-muted\" />

          <div class=\"row\">";
            // line 42
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date_format_full", [], "any", true, true, false, 42)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "date_format_full", [], "any", false, false, false, 42), 'row');
                yield "</div>";
            }
            // line 43
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date_format_short", [], "any", true, true, false, 43)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "date_format_short", [], "any", false, false, false, 43), 'row');
                yield "</div>";
            }
            // line 44
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date_format_dateonly", [], "any", true, true, false, 44)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "date_format_dateonly", [], "any", false, false, false, 44), 'row');
                yield "</div>";
            }
            // line 45
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date_format_timeonly", [], "any", true, true, false, 45)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "date_format_timeonly", [], "any", false, false, false, 45), 'row');
                yield "</div>";
            }
            // line 46
            yield "          </div>
      </div>
  </div>
";
        }
        // line 50
        yield "
";
        // line 51
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 51, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return CoreExtension::inFilter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 51, $this->source); })()), ["cors_restrict_domains"]); })) > 0)) {
            // line 52
            yield "  <div class=\"panel panel-primary\">
      <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.cors"), "html", null, true);
            yield "</h3>
      </div>
      <div class=\"panel-body\">
          <div class=\"row\">";
            // line 58
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cors_restrict_domains", [], "any", true, true, false, 58)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "cors_restrict_domains", [], "any", false, false, false, 58), 'row');
                yield "</div>";
            }
            // line 59
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cors_valid_domains", [], "any", true, true, false, 59)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "cors_valid_domains", [], "any", false, false, false, 59), 'row');
                yield "</div>";
            }
            // line 60
            yield "          </div>
      </div>
  </div>
";
        }
        // line 64
        yield "
";
        // line 65
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 65, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return CoreExtension::inFilter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 65, $this->source); })()), ["trusted_hosts", "trusted_proxies", "ip_lookup_service", "do_not_track_ips", "do_not_track_bots", "transliterate_page_title"]); })) > 0)) {
            // line 66
            yield "  <div class=\"panel panel-primary\">
      <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.misc"), "html", null, true);
            yield "</h3>
      </div>
      <div class=\"panel-body\">
          <div class=\"row\">";
            // line 72
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "trusted_hosts", [], "any", true, true, false, 72)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "trusted_hosts", [], "any", false, false, false, 72), 'row');
                yield "</div>";
            }
            // line 73
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "trusted_proxies", [], "any", true, true, false, 73)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "trusted_proxies", [], "any", false, false, false, 73), 'row');
                yield "</div>";
            }
            // line 74
            yield "          </div>

          ";
            // line 76
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "trusted_hosts", [], "any", true, true, false, 76)) {
                yield "<hr class=\"text-muted\" />";
            }
            // line 77
            yield "
          <div class=\"row\">";
            // line 79
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "ip_lookup_service", [], "any", true, true, false, 79)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "ip_lookup_service", [], "any", false, false, false, 79), 'row');
                yield "</div>";
            }
            // line 80
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "ip_lookup_auth", [], "any", true, true, false, 80)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "ip_lookup_auth", [], "any", false, false, false, 80), 'row');
                yield "</div>";
            }
            // line 81
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "ip_lookup_create_organization", [], "any", true, true, false, 81)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "ip_lookup_create_organization", [], "any", false, false, false, 81), 'row');
                yield "</div>";
            }
            // line 82
            yield "              <div id=\"ip_lookup_config_container\">";
            // line 83
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "ip_lookup_config", [], "any", true, true, false, 83)) {
                yield "<div class=\"col-md-12\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "ip_lookup_config", [], "any", false, false, false, 83), 'row');
                yield "</div>";
            }
            // line 84
            yield "              </div>
          </div>
          <div class=\"row\">
              <div class=\"col-sm-12\">
                  <div class=\"small text-center\" id=\"ip_lookup_attribution\">";
            // line 88
            yield (isset($context["ipLookupAttribution"]) || array_key_exists("ipLookupAttribution", $context) ? $context["ipLookupAttribution"] : (function () { throw new RuntimeError('Variable "ipLookupAttribution" does not exist.', 88, $this->source); })());
            yield "</div>
              </div>
          </div>

          ";
            // line 92
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "do_not_track_ips", [], "any", true, true, false, 92) || CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "do_not_track_bots", [], "any", true, true, false, 92))) {
                // line 93
                yield "              <hr class=\"text-muted\" />
              <div class=\"row\">";
                // line 95
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "do_not_track_ips", [], "any", true, true, false, 95)) {
                    yield "<div class=\"col-md-6\">";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "do_not_track_ips", [], "any", false, false, false, 95), 'row');
                    yield "</div>";
                }
                // line 96
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "do_not_track_bots", [], "any", true, true, false, 96)) {
                    yield "<div class=\"col-md-6\">";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "do_not_track_bots", [], "any", false, false, false, 96), 'row');
                    yield "</div>";
                }
                // line 97
                yield "              </div>
          ";
            }
            // line 99
            yield "
          ";
            // line 100
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "max_entity_lock_time", [], "any", true, true, false, 100)) {
                // line 101
                yield "            <hr class=\"text-muted\" />
            <div class=\"row\">";
                // line 103
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "max_entity_lock_time", [], "any", true, true, false, 103)) {
                    yield "<div class=\"col-md-6\">";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "max_entity_lock_time", [], "any", false, false, false, 103), 'row');
                    yield "</div>";
                }
                // line 104
                yield "            </div>
          ";
            }
            // line 107
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shortener_service", [], "any", true, true, false, 107)) {
                // line 108
                yield "              <hr class=\"text-muted\" />
              <div class=\"row\">
                  <div class=\"col-md-6\">
                      ";
                // line 111
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "shortener_service", [], "any", false, false, false, 111), 'label');
                yield "
                      ";
                // line 112
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "shortener_service", [], "any", false, false, false, 112), "vars", [], "any", false, false, false, 112), "choices", [], "any", false, false, false, 112)) > 0)) {
                    // line 113
                    yield "                          ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "shortener_service", [], "any", false, false, false, 113), 'widget');
                    yield "
                      ";
                } else {
                    // line 115
                    yield "                          <div class=\"row\">
                              <div class=\"col-xs-12\">
                                  ";
                    // line 117
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.form.shortener.empty"), "html", null, true);
                    yield "
                              </div>
                          </div>
                      ";
                }
                // line 121
                yield "                  </div>
                  ";
                // line 122
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "shortener_service", [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "choices", [], "any", false, false, false, 122)) > 0)) {
                    // line 123
                    yield "                      <div class=\"col-md-3\">";
                    // line 124
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shortener_email_enable", [], "any", true, true, false, 124)) {
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "shortener_email_enable", [], "any", false, false, false, 124), 'row');
                    }
                    // line 125
                    yield "                      </div>
                      <div class=\"col-md-3\">";
                    // line 127
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shortener_sms_enable", [], "any", true, true, false, 127)) {
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "shortener_sms_enable", [], "any", false, false, false, 127), 'row');
                    }
                    // line 128
                    yield "                      </div>
                  ";
                }
                // line 130
                yield "              </div>
          ";
            }
            // line 132
            yield "
          ";
            // line 133
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 133, $this->source); })()), "transliterate_page_title", [], "any", false, false, false, 133) || CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "load_froala_assets", [], "any", true, true, false, 133))) {
                // line 134
                yield "            <hr class=\"text-muted\" />
            <div class=\"row\">";
                // line 136
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "transliterate_page_title", [], "any", true, true, false, 136)) {
                    yield "<div class=\"col-md-6\">";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "transliterate_page_title", [], "any", false, false, false, 136), 'row');
                    yield "</div>";
                }
                // line 137
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "load_froala_assets", [], "any", true, true, false, 137)) {
                    // line 138
                    yield "                    <div class=\"col-md-6\">
                        ";
                    // line 139
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "load_froala_assets", [], "any", false, false, false, 139), 'row');
                    yield "
                        <div class=\"alert alert-danger\" role=\"alert\">";
                    // line 140
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.load.froala.assets.warning"), "html", null, true);
                    yield "</div>
                    </div>
                ";
                }
                // line 143
                yield "            </div>
          ";
            }
            // line 145
            yield "      </div>
  </div>
";
        }
        // line 148
        yield "
";
        // line 149
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 149, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return CoreExtension::inFilter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 149, $this->source); })()), ["headers_sts"]); })) > 0)) {
            // line 150
            yield "    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.response.headers"), "html", null, true);
            yield "</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"row\">";
            // line 156
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "headers_sts", [], "any", true, true, false, 156)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "headers_sts", [], "any", false, false, false, 156), 'row');
                yield "</div>";
            }
            // line 157
            yield "            </div>
            <div class=\"row\">";
            // line 159
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "headers_sts_subdomains", [], "any", true, true, false, 159)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "headers_sts_subdomains", [], "any", false, false, false, 159), 'row');
                yield "</div>";
            }
            // line 160
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "headers_sts_preload", [], "any", true, true, false, 160)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "headers_sts_preload", [], "any", false, false, false, 160), 'row');
                yield "</div>";
            }
            // line 161
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "headers_sts_expire_time", [], "any", true, true, false, 161)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "headers_sts_expire_time", [], "any", false, false, false, 161), 'row');
                yield "</div>";
            }
            // line 162
            yield "            </div>
        </div>
    </div>
";
        }
        // line 166
        yield "
";
        // line 167
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 167, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return CoreExtension::inFilter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 167, $this->source); })()), ["update_stability", "composer_updates"]); })) > 0)) {
            // line 168
            yield "  <div class=\"panel panel-primary\">
      <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.update"), "html", null, true);
            yield "</h3>
      </div>
      <div class=\"panel-body\">
          <div class=\"row\">";
            // line 174
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "update_stability", [], "any", true, true, false, 174)) {
                yield "<div class=\"col-md-6\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "update_stability", [], "any", false, false, false, 174), 'row');
                yield "</div>";
            }
            // line 175
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "composer_updates", [], "any", true, true, false, 175)) {
                // line 176
                yield "                <div class=\"col-md-6\">
                    ";
                // line 177
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "composer_updates", [], "any", false, false, false, 177), 'row');
                yield "
                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
                // line 179
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.form.update.composer.warning", ["%url_start%" => "<a href=\"https://mau.tc/switch-to-composer\" target=\"_blank\" style=\"color: red; text-decoration: underline\">", "%url_end%" => "</a>"]);
                // line 182
                yield "
                    </div>
                </div>
              ";
            }
            // line 186
            yield "          </div>
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
        return "@MauticCore/FormTheme/Config/_config_coreconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  536 => 186,  530 => 182,  528 => 179,  523 => 177,  520 => 176,  518 => 175,  512 => 174,  506 => 170,  502 => 168,  500 => 167,  497 => 166,  491 => 162,  485 => 161,  479 => 160,  473 => 159,  470 => 157,  464 => 156,  458 => 152,  454 => 150,  452 => 149,  449 => 148,  444 => 145,  440 => 143,  434 => 140,  430 => 139,  427 => 138,  425 => 137,  419 => 136,  416 => 134,  414 => 133,  411 => 132,  407 => 130,  403 => 128,  399 => 127,  396 => 125,  392 => 124,  390 => 123,  388 => 122,  385 => 121,  378 => 117,  374 => 115,  368 => 113,  366 => 112,  362 => 111,  357 => 108,  355 => 107,  351 => 104,  345 => 103,  342 => 101,  340 => 100,  337 => 99,  333 => 97,  327 => 96,  321 => 95,  318 => 93,  316 => 92,  309 => 88,  303 => 84,  297 => 83,  295 => 82,  289 => 81,  283 => 80,  277 => 79,  274 => 77,  270 => 76,  266 => 74,  260 => 73,  254 => 72,  248 => 68,  244 => 66,  242 => 65,  239 => 64,  233 => 60,  227 => 59,  221 => 58,  215 => 54,  211 => 52,  209 => 51,  206 => 50,  200 => 46,  194 => 45,  188 => 44,  182 => 43,  176 => 42,  170 => 37,  164 => 36,  158 => 35,  152 => 34,  146 => 33,  140 => 32,  134 => 28,  130 => 26,  128 => 25,  125 => 24,  119 => 20,  115 => 19,  109 => 18,  103 => 17,  97 => 16,  91 => 15,  85 => 14,  79 => 13,  73 => 12,  67 => 8,  63 => 6,  61 => 5,  58 => 4,  56 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/FormTheme/Config/_config_coreconfig_widget.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/FormTheme/Config/_config_coreconfig_widget.html.twig");
    }
}
