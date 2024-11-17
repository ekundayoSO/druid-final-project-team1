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

/* @MauticForm/Builder/index.html.twig */
class __TwigTemplate_68c3dd8daa0a94defa40b3ddf2b1fcae extends Template
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
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
            'modal' => [$this, 'block_modal'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 17
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticForm/Builder/index.html.twig", 17);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "form";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)) {
            // line 23
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23))]), "html", null, true);
            yield "
  ";
        } else {
            // line 25
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.new"), "html", null, true);
            yield "
  ";
        }
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "  ";
        $context["formId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "sessionId", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "data", [], "any", false, false, false, 30);
        // line 31
        yield "  ";
        $context["inBuilder"] = ((array_key_exists("inBuilder", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 31, $this->source); })()), false)) : (false));
        // line 32
        yield "  ";
        $context["fieldsTabError"] = false;
        // line 33
        yield "  ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "progressiveProfilingLimit", [], "any", false, false, false, 33), 'errors')) {
            // line 34
            yield "    ";
            $context["fieldsTabError"] = true;
            // line 35
            yield "  ";
        }
        // line 36
        yield "
  ";
        // line 37
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_start');
        yield "
  <div class=\"box-layout\">
      <div class=\"col-md-9 height-auto\">
          <div class=\"row\">
              <div class=\"col-xs-12\">

                  <!-- tabs controls -->
                  <ul class=\"nav nav-tabs pr-md pl-md\">
                      <li class=\"active\"><a href=\"#details-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "</a></li>
                      <li id=\"fields-tab\" class=\"text-danger\">
                          <a class=\"";
        // line 47
        if ((isset($context["fieldsTabError"]) || array_key_exists("fieldsTabError", $context) ? $context["fieldsTabError"] : (function () { throw new RuntimeError('Variable "fieldsTabError" does not exist.', 47, $this->source); })())) {
            yield "text-danger";
        }
        yield "\" href=\"#fields-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.tab.fields"), "html", null, true);
        yield "
                            ";
        // line 49
        if ((isset($context["fieldsTabError"]) || array_key_exists("fieldsTabError", $context) ? $context["fieldsTabError"] : (function () { throw new RuntimeError('Variable "fieldsTabError" does not exist.', 49, $this->source); })())) {
            yield "<i class=\"ri-alert-line\"></i>";
        }
        // line 50
        yield "</a>
                      </li>
                      <li id=\"actions-tab\"><a href=\"#actions-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.tab.actions"), "html", null, true);
        yield "</a></li>
                  </ul>
                  <!--/ tabs controls -->

                  <div class=\"tab-content pa-md\">
                      <div class=\"tab-pane fade in active bdr-w-0\" id=\"details-container\">
                          <div class=\"row\">
                              <div class=\"col-md-6\">
                                  ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60), 'row');
        yield "
                                  ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "formAttributes", [], "any", false, false, false, 61), 'row');
        yield "
                                  ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62), 'row');
        yield "
                              </div>
                              <div class=\"col-md-6\">
                                  ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "postAction", [], "any", false, false, false, 65), 'row');
        yield "
                                  ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "postActionProperty", [], "any", false, false, false, 66), 'row');
        yield "
                              </div>
                          </div>
                      </div>
                      <div class=\"tab-pane fade bdr-w-0\" id=\"fields-container\">
                          <div id=\"mauticforms_fields\">
                              <div class=\"row\">
                                  <div class=\"available-fields mb-md col-sm-4\">
                                      <select class=\"chosen form-builder-new-component\" data-placeholder=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.component.fields"), "html", null, true);
        yield "\">
                                          <option value=\"\"></option>
                                          ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["field"] => $context["fieldType"]) {
            // line 77
            yield "                                              <option data-toggle=\"ajaxmodal\"
                                                      data-target=\"#formComponentModal\"
                                                      data-href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_formfield_action", ["objectAction" => "new", "type" => $context["fieldType"], "tmpl" => "field", "formId" => (isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 79, $this->source); })()), "inBuilder" => (isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 79, $this->source); })())]), "html", null, true);
            yield "\">
                                                  ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
            yield "
                                              </option>
                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['field'], $context['fieldType'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "                                      </select>
                                  </div>
                              </div>
                              <div class=\"row\">
                                  <div class=\"col-sm-12 mb-10\">
                                      ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "progressiveProfilingLimit", [], "any", false, false, false, 88), 'label');
        yield "
                                      <div class=\"ml-5 mr-5\" style=\"display:inline-block;\">
                                          ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "progressiveProfilingLimit", [], "any", false, false, false, 90), 'widget');
        yield "
                                      </div>
                                      <div class=\"has-error\" style=\"display:inline-block;\">
                                          ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "progressiveProfilingLimit", [], "any", false, false, false, 93), 'errors');
        yield "
                                      </div>
                                  </div>
                              </div>
                              <div class=\"drop-here\">
                                ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 99
            yield "                                    ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["field"], "parent", [], "any", false, false, false, 99))) {
                // line 100
                yield "                                      ";
                if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 100), (isset($context["deletedFields"]) || array_key_exists("deletedFields", $context) ? $context["deletedFields"] : (function () { throw new RuntimeError('Variable "deletedFields" does not exist.', 100, $this->source); })()))) {
                    // line 101
                    yield "                                          ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isCustom", [], "any", true, true, false, 101) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isCustom", [], "any", false, false, false, 101)))) {
                        // line 102
                        yield "                                              ";
                        $context["params"] = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "customParameters", [], "any", false, false, false, 102);
                        // line 103
                        yield "                                              ";
                        $context["template"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 103, $this->source); })()), "template", [], "any", false, false, false, 103);
                        // line 104
                        yield "                                          ";
                    } else {
                        // line 105
                        yield "                                              ";
                        $context["template"] = (("@MauticForm/Field/" . CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 105)) . ".html.twig");
                        // line 106
                        yield "                                          ";
                    }
                    // line 107
                    yield "                                          ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Builder/_field_wrapper.html.twig", ["template" =>                     // line 108
(isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 108, $this->source); })()), "field" =>                     // line 109
$context["field"], "viewOnlyFields" =>                     // line 110
(isset($context["viewOnlyFields"]) || array_key_exists("viewOnlyFields", $context) ? $context["viewOnlyFields"] : (function () { throw new RuntimeError('Variable "viewOnlyFields" does not exist.', 110, $this->source); })()), "inForm" => true, "id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 112
$context["field"], "id", [], "any", false, false, false, 112), "formId" =>                     // line 113
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 113, $this->source); })()), "formName" => CoreExtension::getAttribute($this->env, $this->source,                     // line 114
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 114, $this->source); })()), "generateFormName", [], "any", false, false, false, 114), "mappedFields" =>                     // line 115
(isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 115, $this->source); })()), "inBuilder" =>                     // line 116
(isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 116, $this->source); })()), "fields" =>                     // line 117
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 117, $this->source); })()), "formFields" =>                     // line 118
(isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 118, $this->source); })())], false);
                    // line 119
                    yield "
                                      ";
                }
                // line 121
                yield "                                    ";
            }
            // line 122
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                              </div>
                              ";
        // line 124
        if ((0 == Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 124, $this->source); })())))) {
            // line 125
            yield "                                <div class=\"alert alert-info\" id=\"form-field-placeholder\">
                                    <p>";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.addfield"), "html", null, true);
            yield "</p>
                                </div>
                              ";
        }
        // line 129
        yield "                          </div>
                      </div>
                      <div class=\"tab-pane fade bdr-w-0\" id=\"actions-container\">
                          <div id=\"mauticforms_actions\">
                              <div class=\"row\">
                                  <div class=\"available-actions mb-md col-sm-4\">
                                      <select class=\"chosen form-builder-new-component\" data-placeholder=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.component.submitactions"), "html", null, true);
        yield "\">
                                          <option value=\"\"></option>
                                          ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 137, $this->source); })()));
        foreach ($context['_seq'] as $context["group"] => $context["groupActions"]) {
            // line 138
            yield "                                                  ";
            $context["campaignActionFound"] = false;
            // line 139
            yield "                                                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["groupActions"]);
            foreach ($context['_seq'] as $context["k"] => $context["e"]) {
                // line 140
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["e"], "allowCampaignForm", [], "any", true, true, false, 140) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "allowCampaignForm", [], "any", false, false, false, 140)))) {
                    // line 141
                    yield "                                                          ";
                    $context["campaignActionFound"] = true;
                    // line 142
                    yield "                                                      ";
                }
                // line 143
                yield "                                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['e'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            yield "                                                  ";
            $context["class"] = ((Twig\Extension\CoreExtension::testEmpty((isset($context["campaignActionFound"]) || array_key_exists("campaignActionFound", $context) ? $context["campaignActionFound"] : (function () { throw new RuntimeError('Variable "campaignActionFound" does not exist.', 144, $this->source); })()))) ? ("action-standalone-only") : (""));
            // line 145
            yield "                                                  ";
            if (( !(isset($context["campaignActionFound"]) || array_key_exists("campaignActionFound", $context) ? $context["campaignActionFound"] : (function () { throw new RuntimeError('Variable "campaignActionFound" does not exist.', 145, $this->source); })()) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 145, $this->source); })()), "isStandalone", [], "any", false, false, false, 145))) {
                // line 146
                yield "                                                      ";
                $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 146, $this->source); })()) . " hide");
                // line 147
                yield "                                                  ";
            }
            // line 148
            yield "                                                  <optgroup class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 148, $this->source); })()), "html", null, true);
            yield "\" label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group"]), "html", null, true);
            yield "\"></optgroup>
                                                  ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["groupActions"]);
            foreach ($context['_seq'] as $context["k"] => $context["e"]) {
                // line 150
                yield "                                                      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Action/_option.html.twig", ["action" =>                 // line 151
$context["e"], "type" =>                 // line 152
$context["k"], "isStandalone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 153
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 153, $this->source); })()), "isStandalone", [], "any", false, false, false, 153), "formId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 154
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "sessionId", [], "array", false, false, false, 154), "vars", [], "any", false, false, false, 154), "data", [], "array", false, false, false, 154)], false);
                // line 155
                yield "
                                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['e'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['group'], $context['groupActions'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "                                      </select>
                                  </div>
                              </div>
                              <div class=\"drop-here\">
                                ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formActions"]) || array_key_exists("formActions", $context) ? $context["formActions"] : (function () { throw new RuntimeError('Variable "formActions" does not exist.', 162, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 163
            yield "                                    ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 163), (isset($context["deletedActions"]) || array_key_exists("deletedActions", $context) ? $context["deletedActions"] : (function () { throw new RuntimeError('Variable "deletedActions" does not exist.', 163, $this->source); })()))) {
                // line 164
                yield "                                        ";
                $context["template"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["actionSettings"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 164), [], "array", false, true, false, 164), "template", [], "any", true, true, false, 164)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["actionSettings"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 164), [], "array", false, true, false, 164), "template", [], "any", false, false, false, 164), "@MauticForm/Action/_generic.html.twig")) : ("@MauticForm/Action/_generic.html.twig"));
                // line 165
                yield "                                        ";
                $context["action"] = Twig\Extension\CoreExtension::merge($context["action"], ["settings" => CoreExtension::getAttribute($this->env, $this->source,                 // line 166
(isset($context["actionSettings"]) || array_key_exists("actionSettings", $context) ? $context["actionSettings"] : (function () { throw new RuntimeError('Variable "actionSettings" does not exist.', 166, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 166), [], "array", false, false, false, 166)]);
                // line 168
                yield "                                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 168, $this->source); })()), ["action" =>                 // line 169
$context["action"], "inForm" => true, "id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 171
$context["action"], "id", [], "any", false, false, false, 171), "formId" =>                 // line 172
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 172, $this->source); })())], false);
                // line 173
                yield "
                                    ";
            }
            // line 175
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        yield "                              </div>
                              ";
        // line 177
        if ((0 == Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["formActions"]) || array_key_exists("formActions", $context) ? $context["formActions"] : (function () { throw new RuntimeError('Variable "formActions" does not exist.', 177, $this->source); })())))) {
            // line 178
            yield "                                <div class=\"alert alert-info\" id=\"form-action-placeholder\">
                                    <p>";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.addaction"), "html", null, true);
            yield "</p>
                                </div>
                              ";
        }
        // line 182
        yield "                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class=\"col-md-3 height-auto bdr-l\">
          <div class=\"pr-lg pl-lg pt-md pb-md\">
              ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "category", [], "any", false, false, false, 190), 'row');
        yield "
              ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "isPublished", [], "any", false, false, false, 191), 'row');
        yield "
              ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "publishUp", [], "any", false, false, false, 192), 'row');
        yield "
              ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "publishDown", [], "any", false, false, false, 193), 'row');
        yield "
              ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "noIndex", [], "any", false, false, false, 194), 'row');
        yield "
              ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "inKioskMode", [], "any", false, false, false, 195), 'row');
        yield "
              ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "renderStyle", [], "any", false, false, false, 196), 'row');
        yield "
              ";
        // line 197
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "template", [], "any", false, false, false, 197), 'row');
        yield "
              ";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "language", [], "any", false, false, false, 198), 'row');
        yield "
          </div>
      </div>
  </div>
  ";
        // line 202
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), 'form_end');
        yield "

  ";
        // line 204
        $context["typeOneDifferences"] = ["mautic.form.type.one.differences.1st", "mautic.form.type.one.differences.2nd", "mautic.form.type.one.differences.3rd"];
        // line 205
        yield "  ";
        $context["typeTwoDifferences"] = ["mautic.form.type.two.differences.1st", "mautic.form.type.two.differences.2nd", "mautic.form.type.two.differences.3rd"];
        // line 206
        yield "
  ";
        // line 207
        if (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 207, $this->source); })()), "formType", [], "any", false, false, false, 207)) || (array_key_exists("forceTypeSelection", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["forceTypeSelection"]) || array_key_exists("forceTypeSelection", $context) ? $context["forceTypeSelection"] : (function () { throw new RuntimeError('Variable "forceTypeSelection" does not exist.', 207, $this->source); })()))))) {
            // line 208
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/form_selecttype.html.twig", ["item" =>             // line 209
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 209, $this->source); })()), "mauticLang" => ["newStandaloneForm" => "mautic.form.type.standalone.header", "newCampaignForm" => "mautic.form.type.campaign.header"], "typePrefix" => "form", "cancelUrl" => "mautic_form_index", "header" => "mautic.form.type.header", "typeOneHeader" => "mautic.form.type.campaign.header", "typeOneIconClass" => "ri-megaphone-fill", "typeOneDifferences" =>             // line 219
(isset($context["typeOneDifferences"]) || array_key_exists("typeOneDifferences", $context) ? $context["typeOneDifferences"] : (function () { throw new RuntimeError('Variable "typeOneDifferences" does not exist.', 219, $this->source); })()), "typeOneOnClick" => "Mautic.selectFormType('campaign');", "typeTwoHeader" => "mautic.form.type.standalone.header", "typeTwoIconClass" => "ri-survey-fill", "typeTwoDifferences" =>             // line 223
(isset($context["typeTwoDifferences"]) || array_key_exists("typeTwoDifferences", $context) ? $context["typeTwoDifferences"] : (function () { throw new RuntimeError('Variable "typeTwoDifferences" does not exist.', 223, $this->source); })()), "typeTwoOnClick" => "Mautic.selectFormType('standalone');"], false);
            // line 225
            yield "
  ";
        }
        yield from [];
    }

    // line 229
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 230
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "formComponentModal", "header" => false, "footerButtons" => true]);
        // line 234
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Builder/index.html.twig";
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
        return array (  531 => 234,  528 => 230,  521 => 229,  514 => 225,  512 => 223,  511 => 219,  510 => 209,  508 => 208,  506 => 207,  503 => 206,  500 => 205,  498 => 204,  493 => 202,  486 => 198,  482 => 197,  478 => 196,  474 => 195,  470 => 194,  466 => 193,  462 => 192,  458 => 191,  454 => 190,  444 => 182,  438 => 179,  435 => 178,  433 => 177,  430 => 176,  424 => 175,  420 => 173,  418 => 172,  417 => 171,  416 => 169,  414 => 168,  412 => 166,  410 => 165,  407 => 164,  404 => 163,  400 => 162,  394 => 158,  388 => 157,  381 => 155,  379 => 154,  378 => 153,  377 => 152,  376 => 151,  374 => 150,  370 => 149,  363 => 148,  360 => 147,  357 => 146,  354 => 145,  351 => 144,  345 => 143,  342 => 142,  339 => 141,  336 => 140,  331 => 139,  328 => 138,  324 => 137,  319 => 135,  311 => 129,  305 => 126,  302 => 125,  300 => 124,  297 => 123,  291 => 122,  288 => 121,  284 => 119,  282 => 118,  281 => 117,  280 => 116,  279 => 115,  278 => 114,  277 => 113,  276 => 112,  275 => 110,  274 => 109,  273 => 108,  271 => 107,  268 => 106,  265 => 105,  262 => 104,  259 => 103,  256 => 102,  253 => 101,  250 => 100,  247 => 99,  243 => 98,  235 => 93,  229 => 90,  224 => 88,  217 => 83,  208 => 80,  204 => 79,  200 => 77,  196 => 76,  191 => 74,  180 => 66,  176 => 65,  170 => 62,  166 => 61,  162 => 60,  151 => 52,  147 => 50,  143 => 49,  139 => 48,  134 => 47,  129 => 45,  118 => 37,  115 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  100 => 31,  97 => 30,  90 => 29,  81 => 25,  75 => 23,  72 => 22,  65 => 21,  54 => 19,  43 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Builder/index.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Builder/index.html.twig");
    }
}
