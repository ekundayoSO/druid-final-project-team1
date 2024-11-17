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

/* @MauticForm/Builder/_field_wrapper.html.twig */
class __TwigTemplate_a01c00e32fd2c5448ff3e0be52d4b90c extends Template
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
        // line 17
        $context["inBuilder"] = ((array_key_exists("inBuilder", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 17, $this->source); })()), false)) : (false));
        // line 18
        yield "<div class=\"";
        if (( !array_key_exists("isConditional", $context) || (array_key_exists("isConditional", $context) && (false == (isset($context["isConditional"]) || array_key_exists("isConditional", $context) ? $context["isConditional"] : (function () { throw new RuntimeError('Variable "isConditional" does not exist.', 18, $this->source); })()))))) {
            yield "panel";
        } else {
            yield "panel2";
        }
        yield " form-field-wrapper\" data-sortable-id=\"mauticform_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "\">
        ";
        // line 19
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Builder/_actions.html.twig", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "formId" =>         // line 21
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 21, $this->source); })()), "formName" => "", "disallowDelete" => ("button" == CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 23, $this->source); })()), "type", [], "any", false, false, false, 23))], false);
        // line 24
        yield "
        <div class=\"row ml-0 mr-0\">
            ";
        // line 27
        yield "            <!-- start: \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "\" -->";
        // line 28
        yield Twig\Extension\CoreExtension::include($this->env, $context, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 28, $this->source); })()), ["field" =>         // line 29
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 29, $this->source); })()), "inForm" => true, "id" => CoreExtension::getAttribute($this->env, $this->source,         // line 31
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "formId" =>         // line 32
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 32, $this->source); })()), "mappedFields" =>         // line 33
(isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 33, $this->source); })()), "inBuilder" =>         // line 34
(isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 34, $this->source); })())], false);
        // line 36
        yield "<!-- end: \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "\" -->
        </div>

        ";
        // line 39
        if ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "showWhenValueExists", [], "any", true, true, false, 39) && (false === CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 39, $this->source); })()), "showWhenValueExists", [], "any", false, false, false, 39))) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 39, $this->source); })()), "showAfterXSubmissions", [], "any", false, false, false, 39))) || (true === ((CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["field"] ?? null), "alwaysDisplay", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "alwaysDisplay", [], "any", false, false, false, 40), null)) : (null)))) ||  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["field"] ?? null), "mappedField", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "mappedField", [], "any", false, false, false, 41), null)) : (null)))) ||  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source,         // line 42
($context["field"] ?? null), "conditions", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "conditions", [], "any", false, false, false, 42), null)) : (null))))) {
            // line 44
            yield "            <div class=\"panel-footer\">
                ";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "conditions", [], "any", false, true, false, 45), "expr", [], "any", true, true, false, 45) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 45, $this->source); })()), "conditions", [], "any", false, false, false, 45), "expr", [], "any", false, false, false, 45)))) {
                // line 46
                yield "                    <span class=\"inline-spacer\">
                      <span style=\"text-transform: none\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.form.condition.show.on"), "html", null, true);
                yield "</span>
                      <strong>";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 48, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 48, $this->source); })()), "parent", [], "array", false, false, false, 48), [], "array", false, false, false, 48), "label", [], "array", false, false, false, 48), "html", null, true);
                yield "</strong>
                      <span style=\"text-transform: none\">
                          ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.core.operator." . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 50, $this->source); })()), "conditions", [], "array", false, false, false, 50), "expr", [], "array", false, false, false, 50)))), "html", null, true);
                yield "
                          ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.form.condition.select.value"), "html", null, true);
                yield "
                      </span>
                      <strong>
                          ";
                // line 54
                if ((("in" === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 54, $this->source); })()), "conditions", [], "any", false, false, false, 54), "expr", [], "any", false, false, false, 54)) && ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 54, $this->source); })()), "conditions", [], "any", false, false, false, 54), "any", [], "any", false, false, false, 54)) &&  !(0 === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 54, $this->source); })()), "conditions", [], "any", false, false, false, 54), "any", [], "any", false, false, false, 54))))) {
                    // line 55
                    yield "                              *
                          ";
                } else {
                    // line 57
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 57, $this->source); })()), "conditions", [], "any", false, false, false, 57), "values", [], "any", false, false, false, 57), ", "), "html", null, true);
                    yield "
                          ";
                }
                // line 59
                yield "                      </strong>
                    </span>
                    <br>
                ";
            }
            // line 63
            yield "
                ";
            // line 64
            if ((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 64, $this->source); })()), "mappedObject", [], "any", false, false, false, 64)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 64, $this->source); })()), "mappedField", [], "any", false, false, false, 64))) && CoreExtension::getAttribute($this->env, $this->source, ($context["mappedFields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 64, $this->source); })()), "mappedObject", [], "any", false, false, false, 64), [], "array", true, true, false, 64))) {
                // line 65
                yield "                    ";
                $context["icon"] = "compress";
                // line 66
                yield "                    ";
                $context["icon"] = ((("company" === CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 66, $this->source); })()), "mappedObject", [], "any", false, false, false, 66))) ? ("building") : ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 66, $this->source); })())));
                // line 67
                yield "                    ";
                $context["icon"] = ((("contact" === CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 67, $this->source); })()), "mappedObject", [], "any", false, false, false, 67))) ? ("user") : ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 67, $this->source); })())));
                // line 68
                yield "                    <i class=\"fa fa-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 68, $this->source); })()), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
                    <span class=\"inline-spacer\">
                        ";
                // line 70
                $context["fieldCollection"] = CoreExtension::getAttribute($this->env, $this->source, ($context["mappedFields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 70, $this->source); })()), "mappedObject", [], "any", false, false, false, 70), [], "array", true, true, false, 70);
                // line 71
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 71, $this->source); })()), "mappedObject", [], "any", false, false, false, 71), "html", null, true);
                yield ": ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["fieldCollection"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 71, $this->source); })()), "mappedField", [], "any", false, false, false, 71), [], "array", true, true, false, 71)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 71, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 71, $this->source); })()), "mappedField", [], "any", false, false, false, 71), [], "array", false, false, false, 71), "name", [], "any", false, false, false, 71), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 71, $this->source); })()), "mappedField", [], "any", false, false, false, 71)), "html", null, true);
                }
                // line 72
                yield "                    </span>
                ";
            }
            // line 74
            yield "
                ";
            // line 75
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "alwaysDisplay", [], "any", true, true, false, 75) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 75, $this->source); })()), "alwaysDisplay", [], "any", false, false, false, 75))) {
                // line 76
                yield "                  <i class=\"ri-eye-line\" aria-hidden=\"true\"></i>
                  <span class=\"inline-spacer\">";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.form.always_display"), "html", null, true);
                yield "</span>
                ";
            } else {
                // line 79
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "showWhenValueExists", [], "any", true, true, false, 79) && (false === CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 79, $this->source); })()), "showWhenValueExists", [], "any", false, false, false, 79)))) {
                    // line 80
                    yield "                    <i class=\"ri-eye-line-slash\" aria-hidden=\"true\"></i>
                    <span class=\"inline-spacer\">";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.hide.if.value"), "html", null, true);
                    yield "</span>
                  ";
                }
                // line 83
                yield "
                  ";
                // line 84
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "showAfterXSubmissions", [], "any", true, true, false, 84) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 84, $this->source); })()), "showAfterXSubmissions", [], "any", false, false, false, 84)))) {
                    // line 85
                    yield "                    <i class=\"ri-refresh-line\" aria-hidden=\"true\"></i>
                    <span class=\"inline-spacer\">";
                    // line 86
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.hide.if.submission.count", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 86, $this->source); })()), "showAfterXSubmissions", [], "any", false, false, false, 86)]), "html", null, true);
                    yield "</span>
                  ";
                }
                // line 88
                yield "                ";
            }
            // line 89
            yield "            </div>
        ";
        }
        // line 91
        yield "
        ";
        // line 92
        if (((( !array_key_exists("isConditional", $context) || (array_key_exists("isConditional", $context) && ((isset($context["isConditional"]) || array_key_exists("isConditional", $context) ? $context["isConditional"] : (function () { throw new RuntimeError('Variable "isConditional" does not exist.', 92, $this->source); })()) === false))) && array_key_exists("fields", $context)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 92, $this->source); })()), "type", [], "any", false, false, false, 92), Mautic\FormBundle\Enum\ConditionalFieldEnum::getConditionalFieldTypes()))) {
            // line 93
            yield "            <div class=\"row ml-15 mr-0 pb-15\">
                <div class=\"pull-left mt-15\">
                  <a class=\"add-new-conditional-field\" href=\"\"><i class=\"ri-add-line\"></i> ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.component.fields.conditional"), "html", null, true);
            yield "</a>
                </div>
                <div class=\"mt-10 col-sm-4 col-xs-12\" style=\"display:none\">
                    <select class=\"chosen form-builder-new-component\" data-placeholder=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.component.fields"), "html", null, true);
            yield "\">
                        <option value=\"\"></option>
                        ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 100, $this->source); })()));
            foreach ($context['_seq'] as $context["conditionalField"] => $context["conditionalFieldType"]) {
                // line 101
                yield "                            ";
                if (!CoreExtension::inFilter($context["conditionalFieldType"], (isset($context["viewOnlyFields"]) || array_key_exists("viewOnlyFields", $context) ? $context["viewOnlyFields"] : (function () { throw new RuntimeError('Variable "viewOnlyFields" does not exist.', 101, $this->source); })()))) {
                    // line 102
                    yield "                                <option data-toggle=\"ajaxmodal\"
                                        data-target=\"#formComponentModal\"
                                        data-href=\"";
                    // line 104
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_formfield_action", ["objectAction" => "new", "type" => $context["conditionalFieldType"], "tmpl" => "field", "formId" => (isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 104, $this->source); })()), "inBuilder" => (isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 104, $this->source); })()), "parent" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
                    yield "\">
                                  ";
                    // line 105
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["conditionalField"], "html", null, true);
                    yield "
                                </option>
                            ";
                }
                // line 108
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['conditionalField'], $context['conditionalFieldType'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            yield "                    </select>
                </div>
            </div>
        ";
        }
        // line 113
        yield "
        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 114, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field2"]) {
            // line 115
            yield "            ";
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["field2"], "parent", [], "any", false, false, false, 115)) && (CoreExtension::getAttribute($this->env, $this->source, $context["field2"], "parent", [], "any", false, false, false, 115) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115)))) {
                // line 116
                yield "              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["field2"], "isCustom", [], "any", true, true, false, 116) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["field2"], "isCustom", [], "any", false, false, false, 116)))) {
                    // line 117
                    yield "                  ";
                    $context["params"] = CoreExtension::getAttribute($this->env, $this->source, $context["field2"], "customParameters", [], "any", false, false, false, 117);
                    // line 118
                    yield "                  ";
                    $context["template"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 118, $this->source); })()), "template", [], "any", false, false, false, 118);
                    // line 119
                    yield "              ";
                } else {
                    // line 120
                    yield "                  ";
                    $context["template"] = (("@MauticForm/Field/" . CoreExtension::getAttribute($this->env, $this->source, $context["field2"], "type", [], "any", false, false, false, 120)) . ".html.twig");
                    // line 121
                    yield "              ";
                }
                // line 122
                yield "              ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Builder/_field_wrapper.html.twig", ["isConditional" => true, "template" =>                 // line 124
(isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 124, $this->source); })()), "field" =>                 // line 125
$context["field2"], "viewOnlyFields" =>                 // line 126
(isset($context["viewOnlyFields"]) || array_key_exists("viewOnlyFields", $context) ? $context["viewOnlyFields"] : (function () { throw new RuntimeError('Variable "viewOnlyFields" does not exist.', 126, $this->source); })()), "inForm" => true, "id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 128
$context["field2"], "id", [], "any", false, false, false, 128), "formId" =>                 // line 129
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 129, $this->source); })()), "mappedFields" =>                 // line 130
(isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 130, $this->source); })()), "inBuilder" =>                 // line 131
(isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 131, $this->source); })()), "fields" =>                 // line 132
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 132, $this->source); })()), "formFields" =>                 // line 133
(isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 133, $this->source); })())]);
                // line 134
                yield "
            ";
            }
            // line 136
            yield "        ";
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
        unset($context['_seq'], $context['_key'], $context['field2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Builder/_field_wrapper.html.twig";
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
        return array (  335 => 137,  321 => 136,  317 => 134,  315 => 133,  314 => 132,  313 => 131,  312 => 130,  311 => 129,  310 => 128,  309 => 126,  308 => 125,  307 => 124,  305 => 122,  302 => 121,  299 => 120,  296 => 119,  293 => 118,  290 => 117,  287 => 116,  284 => 115,  267 => 114,  264 => 113,  258 => 109,  252 => 108,  246 => 105,  242 => 104,  238 => 102,  235 => 101,  231 => 100,  226 => 98,  220 => 95,  216 => 93,  214 => 92,  211 => 91,  207 => 89,  204 => 88,  199 => 86,  196 => 85,  194 => 84,  191 => 83,  186 => 81,  183 => 80,  180 => 79,  175 => 77,  172 => 76,  170 => 75,  167 => 74,  163 => 72,  154 => 71,  152 => 70,  146 => 68,  143 => 67,  140 => 66,  137 => 65,  135 => 64,  132 => 63,  126 => 59,  120 => 57,  116 => 55,  114 => 54,  108 => 51,  104 => 50,  99 => 48,  95 => 47,  92 => 46,  90 => 45,  87 => 44,  85 => 42,  84 => 41,  83 => 40,  82 => 39,  75 => 36,  73 => 34,  72 => 33,  71 => 32,  70 => 31,  69 => 29,  68 => 28,  64 => 27,  60 => 24,  58 => 23,  57 => 21,  56 => 20,  55 => 19,  44 => 18,  42 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Builder/_field_wrapper.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Builder/_field_wrapper.html.twig");
    }
}
