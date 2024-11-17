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

/* @MauticCore/FormTheme/mautic_form_layout.html.twig */
class __TwigTemplate_1833a645529420c5f52ca5535ba84313 extends Template
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
            'button_attributes' => [$this, 'block_button_attributes'],
            'button_group_row' => [$this, 'block_button_group_row'],
            'button_group_widget' => [$this, 'block_button_group_widget'],
            'button_row' => [$this, 'block_button_row'],
            'button_widget' => [$this, 'block_button_widget'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'choice_attributes' => [$this, 'block_choice_attributes'],
            'choice_row' => [$this, 'block_choice_row'],
            'dynamiclist_entry_row' => [$this, 'block_dynamiclist_entry_row'],
            'dynamiclist_row' => [$this, 'block_dynamiclist_row'],
            'form_buttons_row' => [$this, 'block_form_buttons_row'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_label' => [$this, 'block_form_label'],
            'form_row' => [$this, 'block_form_row'],
            'form_start' => [$this, 'block_form_start'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'sortable_value_label_list_widget' => [$this, 'block_sortable_value_label_list_widget'],
            'sortablelist_entry_row' => [$this, 'block_sortablelist_entry_row'],
            'sortablelist_errors' => [$this, 'block_sortablelist_errors'],
            'sortablelist_row' => [$this, 'block_sortablelist_row'],
            'standalone_button_row' => [$this, 'block_standalone_button_row'],
            'standalone_button_widget' => [$this, 'block_standalone_button_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'yesno_button_group_widget' => [$this, 'block_yesno_button_group_widget'],
            'attributes' => [$this, 'block_attributes'],
            'form_help' => [$this, 'block_form_help'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield from $this->unwrap()->yieldBlock('button_attributes', $context, $blocks);
        // line 18
        yield "
";
        // line 20
        yield from $this->unwrap()->yieldBlock('button_group_row', $context, $blocks);
        // line 33
        yield "
";
        // line 35
        yield from $this->unwrap()->yieldBlock('button_group_widget', $context, $blocks);
        // line 48
        yield "
";
        // line 50
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 53
        yield "
";
        // line 55
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 67
        yield "
";
        // line 69
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 84
        yield "
";
        // line 86
        yield from $this->unwrap()->yieldBlock('choice_attributes', $context, $blocks);
        // line 95
        yield "
";
        // line 97
        yield from $this->unwrap()->yieldBlock('choice_row', $context, $blocks);
        // line 123
        yield "
";
        // line 125
        yield from $this->unwrap()->yieldBlock('dynamiclist_entry_row', $context, $blocks);
        // line 131
        yield "
";
        // line 133
        yield from $this->unwrap()->yieldBlock('dynamiclist_row', $context, $blocks);
        // line 159
        yield "
";
        // line 161
        yield from $this->unwrap()->yieldBlock('form_buttons_row', $context, $blocks);
        // line 172
        yield "
";
        // line 174
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 189
        yield "
";
        // line 191
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 209
        yield "
";
        // line 211
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 223
        yield "
";
        // line 225
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 245
        yield "
";
        // line 247
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        // line 258
        yield "
";
        // line 260
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 308
        yield "
";
        // line 310
        yield from $this->unwrap()->yieldBlock('sortable_value_label_list_widget', $context, $blocks);
        // line 340
        yield "
";
        // line 342
        yield from $this->unwrap()->yieldBlock('sortablelist_entry_row', $context, $blocks);
        // line 348
        yield "
";
        // line 350
        yield from $this->unwrap()->yieldBlock('sortablelist_errors', $context, $blocks);
        // line 372
        yield "
";
        // line 374
        yield from $this->unwrap()->yieldBlock('sortablelist_row', $context, $blocks);
        // line 405
        yield "
";
        // line 407
        yield from $this->unwrap()->yieldBlock('standalone_button_row', $context, $blocks);
        // line 414
        yield "
";
        // line 416
        yield from $this->unwrap()->yieldBlock('standalone_button_widget', $context, $blocks);
        // line 428
        yield "
";
        // line 430
        yield from $this->unwrap()->yieldBlock('tel_widget', $context, $blocks);
        // line 434
        yield "
";
        // line 436
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 462
        yield "
";
        // line 464
        yield from $this->unwrap()->yieldBlock('widget_attributes', $context, $blocks);
        // line 487
        yield "
";
        // line 489
        yield from $this->unwrap()->yieldBlock('yesno_button_group_widget', $context, $blocks);
        // line 520
        yield "
";
        // line 521
        yield from $this->unwrap()->yieldBlock('attributes', $context, $blocks);
        // line 536
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()));
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 7, $this->source); })()));
        yield "\" ";
        yield (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 7, $this->source); })())) ? ("disabled=\"disabled\"") : (""));
        yield "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 8, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return !CoreExtension::inFilter($context["k"], ["icon"]); }));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 9
            if (CoreExtension::inFilter($context["v"], ["placeholder", "title"])) {
                // line 10
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["v"], [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 10, $this->source); })()))));
                yield "
";
            } elseif ((            // line 11
$context["v"] === true)) {
                // line 12
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]));
                yield "
";
            } elseif ( !(            // line 13
$context["v"] === false)) {
                // line 14
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_group_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        $context["hasErrors"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "errors", [], "any", false, false, false, 21));
        // line 22
        $context["feedbackClass"] = ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "getMethod", [], "method", false, false, false, 22) === "POST") && ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 22, $this->source); })()) > 0))) ? (" has-error") : (""));
        // line 23
        yield "<div class=\"row\">
    <div class=\"form-group col-xs-12";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 25, $this->source); })())) ? [] : ["label" => $_label_]));
        yield "
        <div class=\"choice-wrapper\">
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'widget');
        yield "
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'errors');
        yield "
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_group_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "attr", [], "any", false, false, false, 37);
        // line 38
        yield "<div class=\"btn-group ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["buttonBlockClass"]) || array_key_exists("buttonBlockClass", $context) ? $context["buttonBlockClass"] : (function () { throw new RuntimeError('Variable "buttonBlockClass" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "\" data-toggle=\"buttons\">
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 40
            yield "        ";
            $context["class"] = ((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 40), "checked", [], "any", false, false, false, 40))) ? (" active") : ("")) . ((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 40), "disabled", [], "any", false, false, false, 40)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "readonly", [], "any", true, true, false, 40) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 40, $this->source); })()), "readonly", [], "any", false, false, false, 40))))) ? (" disabled") : ("")));
            // line 41
            yield "        <label class=\"btn btn-default";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 41, $this->source); })()), "html", null, true);
            yield "\">
            ";
            // line 42
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 42, $this->source); })())]);
            yield "
            ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 43), "label", [], "any", false, false, false, 43)), "html", null, true);
            yield "
        </label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "</div>
";
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'widget');
        yield "
";
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        if ( !(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 56, $this->source); })())) {
            // line 57
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 57, $this->source); })()));
        }
        // line 59
        yield "<button type=\"";
        yield ((array_key_exists("type", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 59, $this->source); })()))) : ("button"));
        yield "\"
    ";
        // line 60
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">
    ";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "attr", [], "any", false, true, false, 61), "icon", [], "any", true, true, false, 61) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "vars", [], "any", false, false, false, 61), "attr", [], "any", false, false, false, 61), "icon", [], "any", false, false, false, 61)))) {
            // line 62
            yield "    <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "vars", [], "any", false, false, false, 62), "attr", [], "any", false, false, false, 62), "icon", [], "any", false, false, false, 62), "html", null, true);
            yield " \"></i>
    ";
        }
        // line 64
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 64, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 64, $this->source); })())));
        yield "
</button>
";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        $context["hasErrors"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "vars", [], "any", false, false, false, 70), "errors", [], "any", false, false, false, 70));
        // line 71
        $context["feedbackClass"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 71, $this->source); })()))) ? (" has-error") : (""));
        // line 72
        yield "<div class=\"row\">
    <div class=\"form-group col-xs-12";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 73, $this->source); })()), "html", null, true);
        yield "\">
        <div class=\"checkbox\">
            <label>
                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'widget');
        yield "
                ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "vars", [], "any", false, false, false, 77), "label", [], "any", false, false, false, 77)), "html", null, true);
        yield "
            </label>
        </div>
        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'errors');
        yield "
    </div>
</div>
";
        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["choice_attr"]) || array_key_exists("choice_attr", $context) ? $context["choice_attr"] : (function () { throw new RuntimeError('Variable "choice_attr" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 88
            if (($context["v"] === true)) {
                // line 89
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]));
                yield "
";
            } elseif ( !(            // line 90
$context["v"] === false)) {
                // line 91
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 98
        $context["hasErrors"] =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "vars", [], "any", false, false, false, 98), "errors", [], "any", false, false, false, 98));
        // line 99
        $context["feedbackClass"] = (((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 99, $this->source); })())) ? (" has-error") : (""));
        // line 101
        $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "vars", [], "any", false, false, false, 101), "attr", [], "any", false, false, false, 101);
        // line 102
        yield "<div class=\"row\">
    <div class=\"form-group col-xs-12 ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 103, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 104, $this->source); })())) ? [] : ["label" => $_label_]));
        yield "
        <div class=\"choice-wrapper\">
            ";
        // line 106
        if (((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 106, $this->source); })()) && (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 106, $this->source); })()))) {
            // line 107
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "children", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 108
                yield "                <div class=\"checkbox\">
                    <label>
                        ";
                // line 110
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 110, $this->source); })())]);
                yield "
                        ";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 111), "label", [], "any", false, false, false, 111)), "html", null, true);
                yield "
                    </label>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "            ";
        } else {
            // line 116
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), 'widget');
            yield "
            ";
        }
        // line 118
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'errors');
        yield "
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dynamiclist_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 126
        yield "<div class=\"sortable\">
    ";
        // line 127
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
    ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'errors');
        yield "
</div>
";
        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dynamiclist_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 134
        $context["list"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "children", [], "any", false, false, false, 134);
        // line 135
        $context["hasErrors"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "vars", [], "any", false, false, false, 135), "errors", [], "any", false, false, false, 135));
        // line 136
        $context["feedbackClass"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 136, $this->source); })()))) ? (" has-error") : (""));
        // line 137
        $context["datePrototype"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["list"] ?? null), "vars", [], "any", false, true, false, 137), "prototype", [], "any", true, true, false, 137)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("<div class=\"sortable\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 137, $this->source); })()), "vars", [], "any", false, false, false, 137), "prototype", [], "any", false, false, false, 137), 'widget')) . "</div>"))) : (""));
        // line 138
        yield "<div class=\"row\">
    <div data-toggle=\"sortablelist\" data-prefix=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "vars", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139), "html", null, true);
        yield "\" class=\"form-group col-xs-12 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 139, $this->source); })()), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "vars", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139), "html", null, true);
        yield "_list\">
        ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 140, $this->source); })())) ? [] : ["label" => $_label_]));
        yield "
        <a  data-prototype=\"";
        // line 141
        yield (isset($context["datePrototype"]) || array_key_exists("datePrototype", $context) ? $context["datePrototype"] : (function () { throw new RuntimeError('Variable "datePrototype" does not exist.', 141, $this->source); })());
        yield "\"
           class=\"btn btn-warning btn-xs btn-add-item\" href=\"#\" id=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "vars", [], "any", false, false, false, 142), "id", [], "any", false, false, false, 142), "html", null, true);
        yield "_additem\">
            ";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.list.additem"), "html", null, true);
        yield "
        </a>
        ";
        // line 145
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 145, $this->source); })())) {
            // line 146
            yield "        <div class=\"list-sortable\">
        ";
        }
        // line 148
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 148, $this->source); })()), "children", [], "any", false, false, false, 148));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 149
            yield "          ";
            yield from             $this->unwrap()->yieldBlock("sortablelist_entry_row", $context, $blocks);
            yield "
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
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "        </div>
        ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 152, $this->source); })()), 'errors');
        yield "
        ";
        // line 153
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 153, $this->source); })())) {
            // line 154
            yield "        <input type=\"hidden\" class=\"sortable-itemcount\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "vars", [], "any", false, false, false, 154), "id", [], "any", false, false, false, 154), "html", null, true);
            yield "_itemcount\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 154, $this->source); })())), "html", null, true);
            yield "\" />
        ";
        }
        // line 156
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_buttons_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 162
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield " class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 162, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 163
        if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "parent", [], "any", false, false, false, 163) && (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 163, $this->source); })()))) {
            // line 164
            yield "        <div class=\"has-error\">
            ";
            // line 165
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), 'errors');
            yield "
        </div>
    ";
        }
        // line 168
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), 'rest');
        yield "
</div>
";
        yield from [];
    }

    // line 174
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 175
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 175, $this->source); })())) > 0)) {
            // line 176
            yield "    <div class=\"help-block\">
    ";
            // line 177
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 177, $this->source); })())) > 1)) {
                // line 178
                yield "        <ul>
            ";
                // line 179
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 179, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 180
                    yield "                <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "getMessage", [], "method", false, false, false, 180));
                    yield "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 182
                yield "        </ul>
    ";
            } else {
                // line 184
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 184, $this->source); })())), "getMessage", [], "method", false, false, false, 184));
                yield "
    ";
            }
            // line 186
            yield "    </div>
";
        }
        yield from [];
    }

    // line 191
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 192
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 192, $this->source); })()) === false)) {
            // line 193
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 193, $this->source); })())) {
                // line 194
                yield "    ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 194, $this->source); })()), ["class" => (Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 194)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 194, $this->source); })()), "class", [], "any", false, false, false, 194)) : (""))) . " required")]);
            }
            // line 196
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 196, $this->source); })())) {
                // line 197
                yield "    ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 197, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 197, $this->source); })())]);
            }
            // line 199
            if ( !(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 199, $this->source); })())) {
                // line 200
                yield "    ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 200, $this->source); })()));
            }
            // line 202
            $context["tooltip"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 202), "attr", [], "any", false, true, false, 202), "tooltip", [], "any", true, true, false, 202) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "vars", [], "any", false, false, false, 202), "attr", [], "any", false, false, false, 202), "tooltip", [], "any", false, false, false, 202)))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "vars", [], "any", false, false, false, 202), "attr", [], "any", false, false, false, 202), "tooltip", [], "any", false, false, false, 202))) : (false));
            // line 203
            yield "<label ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 203, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 204
                yield "    ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            yield (((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 205, $this->source); })())) ? (Twig\Extension\CoreExtension::sprintf("data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"%s\"", (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 205, $this->source); })()))) : (""));
            yield ">
";
            // line 206
            yield (((isset($context["label_html"]) || array_key_exists("label_html", $context) ? $context["label_html"] : (function () { throw new RuntimeError('Variable "label_html" does not exist.', 206, $this->source); })())) ? ($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 206, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 206, $this->source); })())))) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 206, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 206, $this->source); })())))));
            yield (((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 206, $this->source); })())) ? (" <i class=\"ri-question-line\"></i>") : (""));
            yield "</label>
";
        }
        yield from [];
    }

    // line 211
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 212
        $context["hasErrors"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "vars", [], "any", false, false, false, 212), "errors", [], "any", false, false, false, 212));
        // line 213
        $context["feedbackClass"] = ((((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 213, $this->source); })()) > 0)) ? (" has-error") : (""));
        // line 214
        yield "<div class=\"row\">
    <div class=\"form-group col-xs-12";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 215, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 216, $this->source); })())) ? [] : ["label" => $_label_]));
        yield "
        ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), 'widget');
        yield "
        ";
        // line 218
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), 'errors');
        yield "
        ";
        // line 219
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), 'help');
        yield "
    </div>
 </div>
";
        yield from [];
    }

    // line 225
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 226
        $context["method"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 226, $this->source); })()));
        // line 227
        $context["form_method"] = (((((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 227, $this->source); })()) === "GET") || ((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 227, $this->source); })()) === "POST"))) ? ((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 227, $this->source); })())) : ("POST"));
        // line 228
        yield "<form novalidate autocomplete=\"false\" data-toggle=\"ajax\" role=\"form\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "vars", [], "any", false, false, false, 228), "name", [], "any", false, false, false, 228), "html", null, true);
        yield "\" method=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 228, $this->source); })())), "html", null, true);
        yield "\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 228, $this->source); })()), "html", null, true);
        yield "\"";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 228, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 229
            yield "    ";
            yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        yield (((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new RuntimeError('Variable "multipart" does not exist.', 230, $this->source); })())) ? (" enctype=\"multipart/form-data\"") : (""));
        yield ">
";
        // line 231
        if ( !((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new RuntimeError('Variable "form_method" does not exist.', 231, $this->source); })()) === (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 231, $this->source); })()))) {
            // line 232
            yield "    <input type=\"hidden\" name=\"_method\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 232, $this->source); })()));
            yield "\" />
";
        }
        // line 234
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "vars", [], "any", false, false, false, 234), "errors", [], "any", false, false, false, 234)) > 0)) {
            // line 235
            yield "<div class=\"has-error pa-10\">
    ";
            // line 236
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), 'errors');
            yield "
</div>
";
        }
        // line 239
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "vars", [], "any", false, false, false, 239), "help", [], "any", false, false, false, 239)) > 0)) {
            // line 240
            yield "<div class=\"pa-10\">
    ";
            // line 241
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), 'help');
            yield "
</div>
";
        }
        yield from [];
    }

    // line 247
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_compound(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 248
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    ";
        // line 249
        if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), "parent", [], "any", false, false, false, 249) && (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 249, $this->source); })()))) {
            // line 250
            yield "    <div class=\"has-error\">
        ";
            // line 251
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), 'errors');
            yield "
    </div>
    ";
        }
        // line 254
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        yield "
    ";
        // line 255
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), 'rest');
        yield "
</div>
";
        yield from [];
    }

    // line 260
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 261
        $context["preaddonAttr"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon_attr", [], "any", true, true, false, 261)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 261, $this->source); })()), "preaddon_attr", [], "any", false, false, false, 261)) : ([]));
        // line 262
        $context["postaddonAttr"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "postaddon_attr", [], "any", true, true, false, 262)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 262, $this->source); })()), "postaddon_attr", [], "any", false, false, false, 262)) : ([]));
        // line 263
        yield "
";
        // line 264
        if (((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon", [], "any", true, true, false, 264) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 264, $this->source); })()), "preaddon", [], "any", false, false, false, 264))) || (CoreExtension::getAttribute($this->env, $this->source,         // line 265
($context["attr"] ?? null), "postaddon", [], "any", true, true, false, 265) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 265, $this->source); })()), "postaddon", [], "any", false, false, false, 265)))) || (CoreExtension::getAttribute($this->env, $this->source,         // line 266
($context["attr"] ?? null), "preaddon_text", [], "any", true, true, false, 266) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 266, $this->source); })()), "preaddon_text", [], "any", false, false, false, 266)))) || (CoreExtension::getAttribute($this->env, $this->source,         // line 267
($context["attr"] ?? null), "postaddon_text", [], "any", true, true, false, 267) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 267, $this->source); })()), "postaddon_text", [], "any", false, false, false, 267))))) {
            // line 268
            yield "    <div class=\"input-group\">
        ";
            // line 269
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon", [], "any", true, true, false, 269) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 269, $this->source); })()), "preaddon", [], "any", false, false, false, 269)))) {
                // line 270
                yield "        <span class=\"input-group-addon preaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preaddonAttr"]) || array_key_exists("preaddonAttr", $context) ? $context["preaddonAttr"] : (function () { throw new RuntimeError('Variable "preaddonAttr" does not exist.', 270, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 271
                    yield "            ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 272
                yield ">
            <i class=\"";
                // line 273
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 273, $this->source); })()), "preaddon", [], "any", false, false, false, 273), "html", null, true);
                yield "\"></i>
        </span>
        ";
            }
            // line 276
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon_text", [], "any", true, true, false, 276) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 276, $this->source); })()), "preaddon_text", [], "any", false, false, false, 276)))) {
                // line 277
                yield "        <span class=\"input-group-addon preaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preaddonAttr"]) || array_key_exists("preaddonAttr", $context) ? $context["preaddonAttr"] : (function () { throw new RuntimeError('Variable "preaddonAttr" does not exist.', 277, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 278
                    yield "            ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 279
                yield ">
            <span>";
                // line 280
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 280, $this->source); })()), "preaddon_text", [], "any", false, false, false, 280), "html", null, true);
                yield "</span>
        </span>
        ";
            }
            // line 283
            yield "        <input autocomplete=\"false\" type=\"";
            yield ((array_key_exists("type", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 283, $this->source); })()))) : ("text"));
            yield "\"
            ";
            // line 284
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 284, $this->source); })())) || $this->env->getTest('numeric')->getCallable()((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 284, $this->source); })())))) {
                // line 285
                yield "            value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 285, $this->source); })()));
                yield "\"";
            }
            yield " />

        ";
            // line 287
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "postaddon", [], "any", true, true, false, 287) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 287, $this->source); })()), "postaddon", [], "any", false, false, false, 287)))) {
                // line 288
                yield "        <span class=\"input-group-addon postaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postaddonAttr"]) || array_key_exists("postaddonAttr", $context) ? $context["postaddonAttr"] : (function () { throw new RuntimeError('Variable "postaddonAttr" does not exist.', 288, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 289
                    yield "            ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 290
                yield ">
            <i class=\"";
                // line 291
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 291, $this->source); })()), "postaddon", [], "any", false, false, false, 291), "html", null, true);
                yield "\"></i>
        </span>
        ";
            }
            // line 294
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "postaddon_text", [], "any", true, true, false, 294) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 294, $this->source); })()), "postaddon_text", [], "any", false, false, false, 294)))) {
                // line 295
                yield "        <span class=\"input-group-addon postaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postaddonAttr"]) || array_key_exists("postaddonAttr", $context) ? $context["postaddonAttr"] : (function () { throw new RuntimeError('Variable "postaddonAttr" does not exist.', 295, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 296
                    yield "            ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 297
                yield ">
            <span>";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 298, $this->source); })()), "postaddon_text", [], "any", false, false, false, 298), "html", null, true);
                yield "</span>
        </span>
        ";
            }
            // line 301
            yield "    </div>
";
        } else {
            // line 303
            yield "    <input type=\"";
            yield ((array_key_exists("type", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 303, $this->source); })()))) : ("text"));
            yield "\"
        ";
            // line 304
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 304, $this->source); })())) || $this->env->getTest('numeric')->getCallable()((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 304, $this->source); })())))) {
                // line 305
                yield "        value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 305, $this->source); })()));
                yield "\"";
            }
            yield " />
";
        }
        yield from [];
    }

    // line 310
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sortable_value_label_list_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 311
        if (( !is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "label", [], "any", false, false, false, 311), "vars", [], "any", false, false, false, 311), "value", [], "any", false, false, false, 311)) &&  !is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "value", [], "any", false, false, false, 311), "vars", [], "any", false, false, false, 311), "value", [], "any", false, false, false, 311)))) {
            // line 312
            yield "<div class=\"input-group sortable-no-reorder\">
    ";
            // line 313
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["preaddon"]) || array_key_exists("preaddon", $context) ? $context["preaddon"] : (function () { throw new RuntimeError('Variable "preaddon" does not exist.', 313, $this->source); })()))) {
                // line 314
                yield "    <span class=\"input-group-addon preaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preaddonAttr"]) || array_key_exists("preaddonAttr", $context) ? $context["preaddonAttr"] : (function () { throw new RuntimeError('Variable "preaddonAttr" does not exist.', 314, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 315
                    yield "    ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 316
                yield ">
    <i class=\"";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["preaddon"]) || array_key_exists("preaddon", $context) ? $context["preaddon"] : (function () { throw new RuntimeError('Variable "preaddon" does not exist.', 317, $this->source); })()), "html", null, true);
                yield "\"></i>
    </span>
    ";
            }
            // line 320
            yield "    <div>
        <div class=\"row\">
            <div class=\"col-xs-6 mr-0 pr-0 bdr-r-wdh-0\">
            ";
            // line 323
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "label", [], "any", false, false, false, 323), 'widget', ["attr" => ["class" => "form-control sortable-label", "placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "label", [], "any", false, false, false, 323), "vars", [], "any", false, false, false, 323), "label", [], "any", false, false, false, 323)]]);
            yield "
            </div>
            <div class=\"col-xs-6 ml-0 pl-0\">
            ";
            // line 326
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 326, $this->source); })()), "value", [], "any", false, false, false, 326), 'widget', ["attr" => ["class" => "form-control sortable-value", "placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 326, $this->source); })()), "value", [], "any", false, false, false, 326), "vars", [], "any", false, false, false, 326), "label", [], "any", false, false, false, 326)]]);
            yield "
            </div>
        </div>
    </div>
    ";
            // line 330
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["postaddon"]) || array_key_exists("postaddon", $context) ? $context["postaddon"] : (function () { throw new RuntimeError('Variable "postaddon" does not exist.', 330, $this->source); })()))) {
                // line 331
                yield "    <span class=\"input-group-addon postaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postaddonAttr"]) || array_key_exists("postaddonAttr", $context) ? $context["postaddonAttr"] : (function () { throw new RuntimeError('Variable "postaddonAttr" does not exist.', 331, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 332
                    yield "    ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 333
                yield ">
        <i class=\"";
                // line 334
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["postaddon"]) || array_key_exists("postaddon", $context) ? $context["postaddon"] : (function () { throw new RuntimeError('Variable "postaddon" does not exist.', 334, $this->source); })()), "html", null, true);
                yield "\"></i>
    </span>
    ";
            }
            // line 337
            yield "</div>
";
        }
        yield from [];
    }

    // line 342
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sortablelist_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 343
        yield "<div class=\"sortable\">
    ";
        // line 344
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 344, $this->source); })()), 'widget');
        yield "
    ";
        // line 345
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 345, $this->source); })()), 'errors');
        yield "
</div>
";
        yield from [];
    }

    // line 350
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sortablelist_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 351
        $context["errorMessages"] = [];
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 352, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 353
            yield "    ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "getMessage", [], "method", false, false, false, 353), (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 353, $this->source); })()))) {
                // line 354
                yield "        ";
                $context["errorMessages"] = Twig\Extension\CoreExtension::merge((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 354, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["error"], "getMessage", [], "method", false, false, false, 354)]);
                // line 355
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        yield "
";
        // line 358
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 358, $this->source); })())) > 0)) {
            // line 359
            yield "    <div class=\"help-block\">
        ";
            // line 360
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 360, $this->source); })())) > 1)) {
                // line 361
                yield "            <ul>
                ";
                // line 362
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 362, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["errorMessage"]) {
                    // line 363
                    yield "                    <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["errorMessage"]);
                    yield "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['errorMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 365
                yield "            </ul>
        ";
            } else {
                // line 367
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 367, $this->source); })())));
                yield "
        ";
            }
            // line 369
            yield "    </div>
";
        }
        yield from [];
    }

    // line 374
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sortablelist_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 375
        $context["list"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 375, $this->source); })()), "children", [], "any", false, false, false, 375), "list", [], "any", false, false, false, 375);
        // line 376
        if (((($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 376, $this->source); })()), "parent", [], "any", false, false, false, 376), 'errors') && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 376, $this->source); })()), "vars", [], "any", false, false, false, 376), "value", [], "any", false, false, false, 376))) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 376), "children", [], "any", false, true, false, 376), "properties", [], "any", false, true, false, 376), "list", [], "any", true, true, false, 376)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 376, $this->source); })()), "parent", [], "any", false, false, false, 376), "vars", [], "any", false, false, false, 376), "data", [], "any", false, false, false, 376), "getId", [], "method", false, false, false, 376) === null))) {
            // line 377
            yield "    ";
            // line 378
            yield "    ";
            $context["list"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 378, $this->source); })()), "parent", [], "any", false, false, false, 378), "children", [], "any", false, false, false, 378), "properties", [], "any", false, false, false, 378), "list", [], "any", false, false, false, 378);
        }
        // line 380
        $context["feedbackClass"] = (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 380, $this->source); })()), 'errors')) ? (" has-error") : (""));
        // line 381
        $context["datePrototype"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["list"] ?? null), "vars", [], "any", false, true, false, 381), "prototype", [], "any", true, true, false, 381)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("<div class=\"sortable\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 381, $this->source); })()), "vars", [], "any", false, false, false, 381), "prototype", [], "any", false, false, false, 381), 'widget')) . "</div>"))) : (""));
        // line 382
        yield "<div class=\"row\">
    <div data-toggle=\"sortablelist\" data-prefix=\"";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), "vars", [], "any", false, false, false, 383), "id", [], "any", false, false, false, 383), "html", null, true);
        yield "\" class=\"form-group col-xs-12 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 383, $this->source); })()), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), "vars", [], "any", false, false, false, 383), "id", [], "any", false, false, false, 383), "html", null, true);
        yield "_list\" style=\"overflow:auto\">
        ";
        // line 384
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 384, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 384, $this->source); })())) ? [] : ["label" => $_label_]));
        yield "
        <a data-prototype=\"";
        // line 385
        yield (isset($context["datePrototype"]) || array_key_exists("datePrototype", $context) ? $context["datePrototype"] : (function () { throw new RuntimeError('Variable "datePrototype" does not exist.', 385, $this->source); })());
        yield "\"
           class=\"btn btn-warning btn-xs btn-add-item\" href=\"#\" id=\"";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 386, $this->source); })()), "vars", [], "any", false, false, false, 386), "id", [], "any", false, false, false, 386), "html", null, true);
        yield "_additem\">
            ";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["addValueButton"]) || array_key_exists("addValueButton", $context) ? $context["addValueButton"] : (function () { throw new RuntimeError('Variable "addValueButton" does not exist.', 387, $this->source); })())), "html", null, true);
        yield "
        </a>
        ";
        // line 389
        yield from         $this->unwrap()->yieldBlock("sortablelist_errors", $context, $blocks);
        yield "
        ";
        // line 390
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 390, $this->source); })())) {
            // line 391
            yield "        <div id=\"sortable-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "vars", [], "any", false, false, false, 391), "id", [], "any", false, false, false, 391), "html", null, true);
            yield "\" class=\"list-sortable\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 391, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 392
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 393
            yield ">
        ";
        }
        // line 395
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 395, $this->source); })()), "children", [], "any", false, false, false, 395));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 396
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("sortablelist_entry_row", $context, $blocks);
            yield "
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
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 398
        yield "        </div>
        ";
        // line 399
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 399, $this->source); })())) {
            // line 400
            yield "        <input type=\"hidden\" class=\"sortable-itemcount\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 400, $this->source); })()), "vars", [], "any", false, false, false, 400), "id", [], "any", false, false, false, 400), "html", null, true);
            yield "_itemcount\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 400, $this->source); })())), "html", null, true);
            yield "\" />
        ";
        }
        // line 402
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 407
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_standalone_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 408
        yield "<div class=\"row\">
    <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
        ";
        // line 410
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 410, $this->source); })()), 'widget');
        yield "
    </div>
</div>
";
        yield from [];
    }

    // line 416
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_standalone_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 417
        if ( !(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 417, $this->source); })())) {
            // line 418
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 418, $this->source); })()));
        }
        // line 420
        yield "<button type=\"";
        yield ((array_key_exists("type", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 420, $this->source); })()))) : ("button"));
        yield "\"
    ";
        // line 421
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">
    ";
        // line 422
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 422), "attr", [], "any", false, true, false, 422), "icon", [], "any", true, true, false, 422) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 422, $this->source); })()), "vars", [], "any", false, false, false, 422), "attr", [], "any", false, false, false, 422), "icon", [], "any", false, false, false, 422)))) {
            // line 423
            yield "    <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 423, $this->source); })()), "vars", [], "any", false, false, false, 423), "attr", [], "any", false, false, false, 423), "icon", [], "any", false, false, false, 423), "html", null, true);
            yield " \"></i>
    ";
        }
        // line 425
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 425, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 425, $this->source); })())));
        yield "
</button>
";
        yield from [];
    }

    // line 430
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tel_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 432
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 436
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 437
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 437, $this->source); })()) === "single_text")) {
            // line 438
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            yield "
";
        } else {
            // line 440
            yield "    ";
            $context["size"] = 4;
            // line 441
            yield "    ";
            if (( !(isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 441, $this->source); })()) &&  !(isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 441, $this->source); })()))) {
                // line 442
                yield "        ";
                $context["size"] = 12;
                // line 443
                yield "    ";
            } elseif (( !(isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 443, $this->source); })()) ||  !(isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 443, $this->source); })()))) {
                // line 444
                yield "        ";
                $context["size"] = 6;
                // line 445
                yield "    ";
            }
            // line 446
            yield "    ";
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 446, $this->source); })()) === "text")) ? (["attr" => ["size" => 1, "class" => "not-chosen"]]) : (["attr" => ["class" => "not-chosen"]]));
            // line 447
            yield "    <div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
        ";
            // line 450
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 450, $this->source); })()), "hour", [], "any", false, false, false, 450), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 450, $this->source); })()));
            yield "

        ";
            // line 452
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 452, $this->source); })())) {
                // line 453
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((":" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), "minute", [], "any", false, false, false, 453), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 453, $this->source); })()))), "html", null, true);
                yield "
        ";
            }
            // line 455
            yield "
        ";
            // line 456
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 456, $this->source); })())) {
                // line 457
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((":" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 457, $this->source); })()), "second", [], "any", false, false, false, 457), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 457, $this->source); })()))), "html", null, true);
                yield "
        ";
            }
            // line 459
            yield "    </div>
";
        }
        yield from [];
    }

    // line 464
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 465
        yield "id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 465, $this->source); })()));
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 465, $this->source); })()));
        yield "\"
";
        // line 466
        yield ((((array_key_exists("disabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 466, $this->source); })()), false)) : (false))) ? ("disabled=\"disabled\"") : (""));
        yield "
";
        // line 467
        yield ((((array_key_exists("required", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 467, $this->source); })()), false)) : (false))) ? ("required=\"required\"") : (""));
        yield "

";
        // line 469
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 469, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return !CoreExtension::inFilter($context["k"], ["tooltip", "preaddon", "preaddon_attr", "postaddon_attr"]); }));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 470
            yield "    ";
            if (CoreExtension::inFilter($context["k"], ["placeholder", "title"])) {
                // line 471
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["v"], [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 471, $this->source); })()))));
                yield "
    ";
            } elseif (((            // line 472
$context["k"] === "data-order") && $this->env->getTest('string')->getCallable()($context["v"]))) {
                // line 473
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield "=\"";
                yield $context["v"];
                yield "\"
    ";
            } elseif ((            // line 474
$context["v"] === true)) {
                // line 475
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]));
                yield "
    ";
            } elseif (is_iterable(            // line 476
$context["v"])) {
                // line 477
                yield "        ";
                $context["v"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->formatList(Twig\Extension\CoreExtension::constant("Mautic\\FormBundle\\Helper\\FormFieldHelper::FORMAT_BAR"), $context["v"]);
                // line 478
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
    ";
            } elseif ( !(            // line 479
$context["v"] === false)) {
                // line 480
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 483
        yield "
";
        // line 485
        yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "autocomplete", [], "any", true, true, false, 485)) ? ("autocomplete=\"false\" ") : (""));
        yield "
";
        yield from [];
    }

    // line 489
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_yesno_button_group_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 491
        $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 491, $this->source); })()), "vars", [], "any", false, false, false, 491), "attr", [], "any", false, false, false, 491);
        // line 492
        $context["onchange"] = "Mautic.toggleYesNoButtonClass(mQuery(this).attr('id'));";
        // line 493
        yield "
";
        // line 494
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "onchange", [], "any", true, true, false, 494)) {
            // line 495
            yield "    ";
            if ( !(is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 495, $this->source); })()), "onchange", [], "any", false, false, false, 495)) && is_string($__internal_compile_1 = ";") && str_ends_with($__internal_compile_0, $__internal_compile_1))) {
                // line 496
                yield "        ";
                $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 496, $this->source); })()), ["onchange" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 496, $this->source); })()), "onchange", [], "any", false, false, false, 496) . ";")]);
                // line 497
                yield "    ";
            }
            // line 498
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 498, $this->source); })()), ["onchange" => ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 498, $this->source); })()), "onchange", [], "any", false, false, false, 498) . " ") . (isset($context["onchange"]) || array_key_exists("onchange", $context) ? $context["onchange"] : (function () { throw new RuntimeError('Variable "onchange" does not exist.', 498, $this->source); })()))]);
        } else {
            // line 500
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 500, $this->source); })()), ["onchange" => (isset($context["onchange"]) || array_key_exists("onchange", $context) ? $context["onchange"] : (function () { throw new RuntimeError('Variable "onchange" does not exist.', 500, $this->source); })())]);
        }
        // line 502
        yield "
";
        // line 503
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 503, $this->source); })()), ["style" => "width: 1px; height: 1px; top: 0; left: 0; margin-top: 0;"]);
        // line 504
        yield "<div class=\"btn-group btn-block\" data-toggle=\"buttons\">
    ";
        // line 505
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 505, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 506
            yield "        ";
            $context["class"] = (((((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 507
$context["child"], "vars", [], "any", false, false, false, 507), "checked", [], "any", false, false, false, 507))) ? (" active") : ("")) . ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 508
$context["child"], "vars", [], "any", false, true, false, 508), "disabled", [], "any", true, true, false, 508) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 508), "disabled", [], "any", false, false, false, 508))) || (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "readonly", [], "any", true, true, false, 508) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 508, $this->source); })()), "readonly", [], "any", false, false, false, 508))))) ? (" disabled") : (""))) . (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 509
$context["child"], "vars", [], "any", false, false, false, 509), "name", [], "any", false, false, false, 509) == "0")) ? (" btn-no") : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 509), "name", [], "any", false, false, false, 509) == "1")) ? (" btn-yes") : (" btn-extra"))))) . ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 510
$context["child"], "vars", [], "any", false, false, false, 510), "name", [], "any", false, false, false, 510) == "0") &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 510), "checked", [], "any", false, false, false, 510)))) ? (" btn-danger") : (""))) . ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 511
$context["child"], "vars", [], "any", false, false, false, 511), "name", [], "any", false, false, false, 511) == "1") &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 511), "checked", [], "any", false, false, false, 511)))) ? (" btn-success") : ("")));
            // line 513
            yield "        <label class=\"btn btn-default ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 513, $this->source); })()), "html", null, true);
            yield "\">
            ";
            // line 514
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 514, $this->source); })())]);
            yield "
            <span>";
            // line 515
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 515), "label", [], "any", false, false, false, 515)), "html", null, true);
            yield "</span>
        </label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 518
        yield "</div>
";
        yield from [];
    }

    // line 521
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 522
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 522, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 523
            yield " ";
            // line 524
            if (CoreExtension::inFilter($context["attrname"], ["placeholder", "title"])) {
                // line 525
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 525, $this->source); })()) === false) || (null === $context["attrvalue"]))) ? ($context["attrvalue"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"], (isset($context["attr_translation_parameters"]) || array_key_exists("attr_translation_parameters", $context) ? $context["attr_translation_parameters"] : (function () { throw new RuntimeError('Variable "attr_translation_parameters" does not exist.', 525, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 525, $this->source); })())))), "html", null, true);
                yield "\"";
            } elseif (CoreExtension::inFilter(            // line 526
$context["attrname"], ["data-filter-definitions", "data-filter-operators"])) {
                // line 527
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $context["attrvalue"];
                yield "\"";
            } elseif ((            // line 528
$context["attrvalue"] === true)) {
                // line 529
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "\"";
            } elseif ( !(            // line 530
$context["attrvalue"] === false)) {
                // line 531
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 536
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 537
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 537, $this->source); })()))) {
            // line 538
            $context["help_attr"] = Twig\Extension\CoreExtension::merge((isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 538, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 538)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 538), "")) : ("")) . " help-text"))]);
            // line 539
            yield "<p id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 539, $this->source); })()), "html", null, true);
            yield "_help\"";
            $__internal_compile_2 = $context;
            $__internal_compile_3 = ["attr" => (isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 539, $this->source); })())];
            if (!is_iterable($__internal_compile_3)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 539, $this->getSourceContext());
            }
            $__internal_compile_3 = CoreExtension::toArray($__internal_compile_3);
            $context = $__internal_compile_3 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $__internal_compile_2;
            yield ">";
            // line 540
            if (((isset($context["help_html"]) || array_key_exists("help_html", $context) ? $context["help_html"] : (function () { throw new RuntimeError('Variable "help_html" does not exist.', 540, $this->source); })()) === false)) {
                // line 541
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 541, $this->source); })()), (isset($context["help_translation_parameters"]) || array_key_exists("help_translation_parameters", $context) ? $context["help_translation_parameters"] : (function () { throw new RuntimeError('Variable "help_translation_parameters" does not exist.', 541, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 541, $this->source); })())), "html", null, true);
            } else {
                // line 543
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 543, $this->source); })()), (isset($context["help_translation_parameters"]) || array_key_exists("help_translation_parameters", $context) ? $context["help_translation_parameters"] : (function () { throw new RuntimeError('Variable "help_translation_parameters" does not exist.', 543, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 543, $this->source); })())));
            }
            // line 545
            yield "</p>";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/FormTheme/mautic_form_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1802 => 545,  1799 => 543,  1796 => 541,  1794 => 540,  1780 => 539,  1778 => 538,  1776 => 537,  1769 => 536,  1756 => 531,  1754 => 530,  1749 => 529,  1747 => 528,  1742 => 527,  1740 => 526,  1735 => 525,  1733 => 524,  1731 => 523,  1727 => 522,  1720 => 521,  1714 => 518,  1705 => 515,  1701 => 514,  1696 => 513,  1694 => 511,  1693 => 510,  1692 => 509,  1691 => 508,  1690 => 507,  1688 => 506,  1684 => 505,  1681 => 504,  1679 => 503,  1676 => 502,  1672 => 500,  1668 => 498,  1665 => 497,  1662 => 496,  1659 => 495,  1657 => 494,  1654 => 493,  1652 => 492,  1650 => 491,  1643 => 489,  1636 => 485,  1633 => 483,  1623 => 480,  1621 => 479,  1616 => 478,  1613 => 477,  1611 => 476,  1606 => 475,  1604 => 474,  1597 => 473,  1595 => 472,  1590 => 471,  1587 => 470,  1583 => 469,  1578 => 467,  1574 => 466,  1567 => 465,  1560 => 464,  1553 => 459,  1547 => 457,  1545 => 456,  1542 => 455,  1536 => 453,  1534 => 452,  1528 => 450,  1523 => 447,  1520 => 446,  1517 => 445,  1514 => 444,  1511 => 443,  1508 => 442,  1505 => 441,  1502 => 440,  1496 => 438,  1494 => 437,  1487 => 436,  1480 => 432,  1473 => 430,  1464 => 425,  1458 => 423,  1456 => 422,  1452 => 421,  1447 => 420,  1444 => 418,  1442 => 417,  1435 => 416,  1426 => 410,  1422 => 408,  1415 => 407,  1408 => 402,  1400 => 400,  1398 => 399,  1395 => 398,  1378 => 396,  1360 => 395,  1356 => 393,  1347 => 392,  1340 => 391,  1338 => 390,  1334 => 389,  1329 => 387,  1325 => 386,  1321 => 385,  1317 => 384,  1309 => 383,  1306 => 382,  1304 => 381,  1302 => 380,  1298 => 378,  1296 => 377,  1294 => 376,  1292 => 375,  1285 => 374,  1278 => 369,  1272 => 367,  1268 => 365,  1259 => 363,  1255 => 362,  1252 => 361,  1250 => 360,  1247 => 359,  1245 => 358,  1242 => 357,  1235 => 355,  1232 => 354,  1229 => 353,  1225 => 352,  1223 => 351,  1216 => 350,  1208 => 345,  1204 => 344,  1201 => 343,  1194 => 342,  1187 => 337,  1181 => 334,  1178 => 333,  1169 => 332,  1164 => 331,  1162 => 330,  1155 => 326,  1149 => 323,  1144 => 320,  1138 => 317,  1135 => 316,  1126 => 315,  1121 => 314,  1119 => 313,  1116 => 312,  1114 => 311,  1107 => 310,  1096 => 305,  1093 => 304,  1088 => 303,  1084 => 301,  1078 => 298,  1075 => 297,  1066 => 296,  1061 => 295,  1058 => 294,  1052 => 291,  1049 => 290,  1040 => 289,  1035 => 288,  1033 => 287,  1025 => 285,  1022 => 284,  1017 => 283,  1011 => 280,  1008 => 279,  999 => 278,  994 => 277,  991 => 276,  985 => 273,  982 => 272,  973 => 271,  968 => 270,  966 => 269,  963 => 268,  961 => 267,  960 => 266,  959 => 265,  958 => 264,  955 => 263,  953 => 262,  951 => 261,  944 => 260,  936 => 255,  931 => 254,  925 => 251,  922 => 250,  920 => 249,  915 => 248,  908 => 247,  899 => 241,  896 => 240,  894 => 239,  888 => 236,  885 => 235,  883 => 234,  877 => 232,  875 => 231,  871 => 230,  862 => 229,  851 => 228,  849 => 227,  847 => 226,  840 => 225,  831 => 219,  827 => 218,  823 => 217,  819 => 216,  815 => 215,  812 => 214,  810 => 213,  808 => 212,  801 => 211,  792 => 206,  788 => 205,  779 => 204,  774 => 203,  772 => 202,  768 => 200,  766 => 199,  762 => 197,  760 => 196,  756 => 194,  754 => 193,  752 => 192,  745 => 191,  738 => 186,  732 => 184,  728 => 182,  719 => 180,  715 => 179,  712 => 178,  710 => 177,  707 => 176,  705 => 175,  698 => 174,  690 => 169,  688 => 168,  682 => 165,  679 => 164,  677 => 163,  670 => 162,  663 => 161,  656 => 156,  648 => 154,  646 => 153,  642 => 152,  639 => 151,  622 => 149,  604 => 148,  600 => 146,  598 => 145,  593 => 143,  589 => 142,  585 => 141,  581 => 140,  573 => 139,  570 => 138,  568 => 137,  566 => 136,  564 => 135,  562 => 134,  555 => 133,  547 => 128,  543 => 127,  540 => 126,  533 => 125,  522 => 118,  516 => 116,  513 => 115,  503 => 111,  499 => 110,  495 => 108,  490 => 107,  488 => 106,  483 => 104,  479 => 103,  476 => 102,  474 => 101,  472 => 99,  470 => 98,  463 => 97,  451 => 91,  449 => 90,  445 => 89,  443 => 88,  439 => 87,  432 => 86,  423 => 80,  417 => 77,  413 => 76,  407 => 73,  404 => 72,  402 => 71,  400 => 70,  393 => 69,  384 => 64,  378 => 62,  376 => 61,  372 => 60,  367 => 59,  364 => 57,  362 => 56,  355 => 55,  348 => 51,  341 => 50,  335 => 46,  326 => 43,  322 => 42,  317 => 41,  314 => 40,  310 => 39,  305 => 38,  303 => 37,  296 => 35,  286 => 28,  282 => 27,  277 => 25,  273 => 24,  270 => 23,  268 => 22,  266 => 21,  259 => 20,  247 => 14,  245 => 13,  241 => 12,  239 => 11,  235 => 10,  233 => 9,  229 => 8,  220 => 7,  213 => 6,  208 => 536,  206 => 521,  203 => 520,  201 => 489,  198 => 487,  196 => 464,  193 => 462,  191 => 436,  188 => 434,  186 => 430,  183 => 428,  181 => 416,  178 => 414,  176 => 407,  173 => 405,  171 => 374,  168 => 372,  166 => 350,  163 => 348,  161 => 342,  158 => 340,  156 => 310,  153 => 308,  151 => 260,  148 => 258,  146 => 247,  143 => 245,  141 => 225,  138 => 223,  136 => 211,  133 => 209,  131 => 191,  128 => 189,  126 => 174,  123 => 172,  121 => 161,  118 => 159,  116 => 133,  113 => 131,  111 => 125,  108 => 123,  106 => 97,  103 => 95,  101 => 86,  98 => 84,  96 => 69,  93 => 67,  91 => 55,  88 => 53,  86 => 50,  83 => 48,  81 => 35,  78 => 33,  76 => 20,  73 => 18,  71 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/FormTheme/mautic_form_layout.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/FormTheme/mautic_form_layout.html.twig");
    }
}
