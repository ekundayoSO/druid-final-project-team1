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

/* @FMElfinder/Form/elfinder_widget.html.twig */
class __TwigTemplate_1b5efa512447c75c4c63c86a4fc613a7 extends Template
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
            'elfinder_widget' => [$this, 'block_elfinder_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('elfinder_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_elfinder_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "    <input type=\"text\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield " ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 2, $this->source); })()))) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 2, $this->source); })()), "html", null, true);
            yield "\" ";
        }
        yield " data-type=\"elfinder-input-field\" />
    ";
        // line 3
        if (((isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () { throw new RuntimeError('Variable "enable" does not exist.', 3, $this->source); })()) && array_key_exists("instance", $context))) {
            // line 4
            yield "        <script type=\"text/javascript\" charset=\"utf-8\">
            live('click', '[data-type=\"elfinder-input-field\"][id=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "\"]', function (event) {
                console.warn('Test');
                var childWin = window.open(\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("elfinder", ["instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 7, $this->source); })()), "homeFolder" => (isset($context["homeFolder"]) || array_key_exists("homeFolder", $context) ? $context["homeFolder"] : (function () { throw new RuntimeError('Variable "homeFolder" does not exist.', 7, $this->source); })())]), "html", null, true);
            yield "?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()), "html", null, true);
            yield "\", \"popupWindow\", \"height=450, width=900\");
            });
            function live (eventType, elementQuerySelector, cb) {
                document.addEventListener(eventType, function (event) {
                    var qs = document.querySelectorAll(elementQuerySelector);
                    if (qs) {
                        var el = event.target, index = -1;
                        while (el && ((index = Array.prototype.indexOf.call(qs, el)) === -1)) {
                            el = el.parentElement;
                        }
                        if (index > -1) {
                            cb.call(el, event);
                        }
                    }
                })
            }
            function setValue(value, element_id) {
                document.querySelector('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"'+ element_id +'\"]': '')).value = value;
            }
        </script>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@FMElfinder/Form/elfinder_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  75 => 7,  70 => 5,  67 => 4,  65 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@FMElfinder/Form/elfinder_widget.html.twig", "/app/vendor/helios-ag/fm-elfinder-bundle/src/Resources/views/Form/elfinder_widget.html.twig");
    }
}
