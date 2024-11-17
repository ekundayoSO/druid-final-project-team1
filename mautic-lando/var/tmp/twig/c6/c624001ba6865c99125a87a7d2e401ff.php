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

/* @MauticCore/Helper/modal.html.twig */
class __TwigTemplate_c6c4e45290a048abb8434a913396366f extends Template
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
        $context["containerClass"] = ((array_key_exists("containerClass", $context)) ? ((" " . (isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 1, $this->source); })()))) : (""));
        // line 2
        $context["containerAttr"] = ((array_key_exists("containerAttr", $context)) ? ((" " . (isset($context["containerAttr"]) || array_key_exists("containerAttr", $context) ? $context["containerAttr"] : (function () { throw new RuntimeError('Variable "containerAttr" does not exist.', 2, $this->source); })()))) : (""));
        // line 3
        $context["size"] = ((array_key_exists("size", $context)) ? ((" modal-" . (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 3, $this->source); })()))) : (""));
        // line 4
        $context["class"] = (((array_key_exists("class", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 4, $this->source); })())))) ? ((" " . (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 4, $this->source); })()))) : (""));
        // line 5
        $context["body"] = ((array_key_exists("body", $context)) ? ((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 5, $this->source); })())) : (""));
        // line 6
        $context["footer"] = ((array_key_exists("footer", $context)) ? ((isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 6, $this->source); })())) : (""));
        // line 7
        $context["hidePlaceholder"] = (((array_key_exists("body", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 7, $this->source); })())))) ? (" hide") : (""));
        // line 8
        $context["header"] = ((array_key_exists("header", $context)) ? ((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 8, $this->source); })())) : (""));
        // line 9
        $context["padding"] = ((array_key_exists("padding", $context)) ? ((isset($context["padding"]) || array_key_exists("padding", $context) ? $context["padding"] : (function () { throw new RuntimeError('Variable "padding" does not exist.', 9, $this->source); })())) : (""));
        // line 10
        $context["footerButtonClass"] = ((array_key_exists("footerButtonClass", $context)) ? ((isset($context["footerButtonClass"]) || array_key_exists("footerButtonClass", $context) ? $context["footerButtonClass"] : (function () { throw new RuntimeError('Variable "footerButtonClass" does not exist.', 10, $this->source); })())) : ("modal-form-buttons"));
        // line 11
        $context["dismissable"] = ((array_key_exists("dismissable", $context)) ? ((isset($context["dismissable"]) || array_key_exists("dismissable", $context) ? $context["dismissable"] : (function () { throw new RuntimeError('Variable "dismissable" does not exist.', 11, $this->source); })())) : (true));
        // line 12
        yield "
<div class=\"modal fade";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\" data-backdrop=\"static\" role=\"dialog\" aria-labelledby=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "-label\" aria-hidden=\"true\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["containerAttr"]) || array_key_exists("containerAttr", $context) ? $context["containerAttr"] : (function () { throw new RuntimeError('Variable "containerAttr" does not exist.', 13, $this->source); })()), "html", null, true);
        yield ">
    <div class=\"modal-dialog";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\">
        <div class=\"modal-content";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "\">
            ";
        // line 16
        if ( !((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 16, $this->source); })()) === false)) {
            // line 17
            yield "            <div class=\"modal-header\">
                ";
            // line 18
            if ((isset($context["dismissable"]) || array_key_exists("dismissable", $context) ? $context["dismissable"] : (function () { throw new RuntimeError('Variable "dismissable" does not exist.', 18, $this->source); })())) {
                // line 19
                yield "                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span aria-hidden=\"true\">&times;</span></button>
                ";
            }
            // line 21
            yield "
                <h4 class=\"modal-title\" id=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 22, $this->source); })()), "html", null, true);
            yield "-label\">
                    ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 23, $this->source); })()), "html", null, true);
            yield "
                </h4>

                <!-- start: loading bar -->
                <div class=\"modal-loading-bar\">
                    ";
            // line 28
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.loading", [], "messages");
            // line 29
            yield "                </div>
                <!--/ end: loading bar -->

            </div>
            ";
        }
        // line 34
        yield "            <div class=\"modal-body ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["padding"]) || array_key_exists("padding", $context) ? $context["padding"] : (function () { throw new RuntimeError('Variable "padding" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "\">
                <div class=\"loading-placeholder";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hidePlaceholder"]) || array_key_exists("hidePlaceholder", $context) ? $context["hidePlaceholder"] : (function () { throw new RuntimeError('Variable "hidePlaceholder" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "\">
                    ";
        // line 36
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.loading", [], "messages");
        // line 37
        yield "                </div>
                <div class=\"modal-body-content\">
                    ";
        // line 39
        yield (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 39, $this->source); })());
        yield "
                </div>
            </div>
            ";
        // line 42
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 42, $this->source); })())) || (array_key_exists("footerButtons", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["footerButtons"]) || array_key_exists("footerButtons", $context) ? $context["footerButtons"] : (function () { throw new RuntimeError('Variable "footerButtons" does not exist.', 42, $this->source); })()))))) {
            // line 43
            yield "            <div class=\"modal-footer\">
                ";
            // line 44
            if ((array_key_exists("footerButtons", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["footerButtons"]) || array_key_exists("footerButtons", $context) ? $context["footerButtons"] : (function () { throw new RuntimeError('Variable "footerButtons" does not exist.', 44, $this->source); })())))) {
                // line 45
                yield "                <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["footerButtonClass"]) || array_key_exists("footerButtonClass", $context) ? $context["footerButtonClass"] : (function () { throw new RuntimeError('Variable "footerButtonClass" does not exist.', 45, $this->source); })()), "html", null, true);
                yield "\">
                    ";
                // line 46
                if (is_iterable((isset($context["footerButtons"]) || array_key_exists("footerButtons", $context) ? $context["footerButtons"] : (function () { throw new RuntimeError('Variable "footerButtons" does not exist.', 46, $this->source); })()))) {
                    // line 47
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["footerButtons"]) || array_key_exists("footerButtons", $context) ? $context["footerButtons"] : (function () { throw new RuntimeError('Variable "footerButtons" does not exist.', 47, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                        // line 48
                        yield "                        <button type=\"button\"
                                class=\"btn ";
                        // line 49
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "class", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "class", [], "any", false, false, false, 49), "btn-default")) : ("btn-default")), "html", null, true);
                        yield "\"
                                ";
                        // line 50
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "attr", [], "any", true, true, false, 50) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "attr", [], "any", false, false, false, 50)))) {
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "attr", [], "any", false, false, false, 50), "html", null, true);
                            yield " ";
                        }
                        yield ">
                            ";
                        // line 51
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "textIcon", [], "any", true, true, false, 51) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "textIcon", [], "any", false, false, false, 51)))) {
                            yield "<i class=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "textIcon", [], "any", false, false, false, 51), "html", null, true);
                            yield "\"></i>";
                        }
                        // line 52
                        yield "                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "label", [], "any", false, false, false, 52), "html", null, true);
                        yield "
                        </button>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['button'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    yield "                    ";
                }
                // line 56
                yield "                </div>
                ";
            } else {
                // line 58
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 58, $this->source); })()), "html", null, true);
                yield "
                ";
            }
            // line 60
            yield "            </div>
            ";
        }
        // line 62
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
        return "@MauticCore/Helper/modal.html.twig";
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
        return array (  208 => 62,  204 => 60,  198 => 58,  194 => 56,  191 => 55,  181 => 52,  175 => 51,  167 => 50,  163 => 49,  160 => 48,  155 => 47,  153 => 46,  148 => 45,  146 => 44,  143 => 43,  141 => 42,  135 => 39,  131 => 37,  129 => 36,  125 => 35,  120 => 34,  113 => 29,  111 => 28,  103 => 23,  99 => 22,  96 => 21,  92 => 19,  90 => 18,  87 => 17,  85 => 16,  81 => 15,  77 => 14,  67 => 13,  64 => 12,  62 => 11,  60 => 10,  58 => 9,  56 => 8,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/modal.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/modal.html.twig");
    }
}
