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

/* @MauticCore/Menu/extra.html.twig */
class __TwigTemplate_b8f5567916104220602f09e3d732771e extends Template
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
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })()), "hasChildren", [], "method", false, false, false, 1) &&  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), "depth", [], "any", false, false, false, 1) === 0)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })()), "getDisplayChildren", [], "method", false, false, false, 1))) {
            // line 2
            yield "
    ";
            // line 4
            yield "    ";
            $context["ulAttributes"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "getChildrenAttributes", [], "method", false, false, false, 4);
            // line 5
            yield "    ";
            // line 6
            yield "    ";
            $context["ulClasses"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ulAttributes"] ?? null), "class", [], "any", true, true, false, 6)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ulAttributes"]) || array_key_exists("ulAttributes", $context) ? $context["ulAttributes"] : (function () { throw new RuntimeError('Variable "ulAttributes" does not exist.', 6, $this->source); })()), "class", [], "any", false, false, false, 6) . " dropdown-menu")) : ("dropdown-menu"));
            // line 7
            yield "    ";
            // line 8
            yield "    ";
            $context["ulAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["ulAttributes"]) || array_key_exists("ulAttributes", $context) ? $context["ulAttributes"] : (function () { throw new RuntimeError('Variable "ulAttributes" does not exist.', 8, $this->source); })()), ["class" => (isset($context["ulClasses"]) || array_key_exists("ulClasses", $context) ? $context["ulClasses"] : (function () { throw new RuntimeError('Variable "ulClasses" does not exist.', 8, $this->source); })())]);
            // line 9
            yield "
    <ul";
            // line 10
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["ulAttributes"]) || array_key_exists("ulAttributes", $context) ? $context["ulAttributes"] : (function () { throw new RuntimeError('Variable "ulAttributes" does not exist.', 10, $this->source); })()));
            yield ">

        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "getChildren", [], "method", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 13
                yield "
            ";
                // line 14
                if (CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isDisplayed", [], "method", false, false, false, 14)) {
                    // line 15
                    yield "
                ";
                    // line 16
                    $context["showChildren"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "hasChildren", [], "method", false, false, false, 16) && CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getDisplayChildren", [], "method", false, false, false, 16))) ? (true) : (false));
                    // line 17
                    yield "                ";
                    $context["liAttributes"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getAttributes", [], "method", false, false, false, 17);
                    // line 18
                    yield "                ";
                    $context["isAncestor"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 18, $this->source); })()), "isAncestor", [$context["child"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 18, $this->source); })()), "matchingDepth", [], "array", false, false, false, 18)], "method", false, false, false, 18);
                    // line 19
                    yield "                ";
                    $context["extras"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getExtras", [], "method", false, false, false, 19);
                    // line 20
                    yield "
                ";
                    // line 21
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extras"] ?? null), "divider", [], "any", true, true, false, 21) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 21, $this->source); })()), "divider", [], "any", false, false, false, 21)))) {
                        // line 22
                        yield "                    <li role=\"separator\" class=\"divider\"></li>
                ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 23
($context["extras"] ?? null), "header", [], "any", true, true, false, 23) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 23, $this->source); })()), "header", [], "any", false, false, false, 23)))) {
                        // line 24
                        yield "                    <li class=\"dropdown-header\">";
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 24, $this->source); })()), "header", [], "any", false, false, false, 24)));
                        yield "</li>
                ";
                    } else {
                        // line 26
                        yield "                    ";
                        // line 27
                        yield "                    ";
                        $context["liClasses"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["liAttributes"] ?? null), "class", [], "any", true, true, false, 27)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 27, $this->source); })()), "class", [], "any", false, false, false, 27)) : (""));
                        // line 28
                        yield "                
                    ";
                        // line 30
                        yield "                    ";
                        $context["liAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 30, $this->source); })()), $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->buildMenuClasses($context["child"], (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 30, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 30, $this->source); })()), (isset($context["liClasses"]) || array_key_exists("liClasses", $context) ? $context["liClasses"] : (function () { throw new RuntimeError('Variable "liClasses" does not exist.', 30, $this->source); })())));
                        // line 31
                        yield "
                    <li";
                        // line 32
                        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 32, $this->source); })()));
                        yield ">

                        ";
                        // line 34
                        $context["url"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getUri", [], "method", false, false, false, 34);
                        // line 35
                        yield "                        ";
                        $context["linkAttributes"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getLinkAttributes", [], "method", false, false, false, 35);
                        // line 36
                        yield "                        ";
                        $context["url"] = ((Twig\Extension\CoreExtension::testEmpty((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 36, $this->source); })()))) ? ("javascript:void(0);") : ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 36, $this->source); })())));
                        // line 37
                        yield "                        ";
                        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["linkAttributes"] ?? null), "target", [], "any", true, true, false, 37) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 37, $this->source); })()), "target", [], "any", false, false, false, 37)))) {
                            // line 38
                            yield "                            ";
                            $context["linkAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 38, $this->source); })()), ["data-toggle" => "ajax"]);
                            // line 39
                            yield "                        ";
                        }
                        // line 40
                        yield "                        <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 40, $this->source); })()), "html", null, true);
                        yield "\"";
                        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 40, $this->source); })()));
                        yield ">
                            ";
                        // line 41
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extras"] ?? null), "iconClass", [], "any", true, true, false, 41) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 41, $this->source); })()), "iconClass", [], "any", false, false, false, 41)))) {
                            // line 42
                            yield "                            <span style=\"margin-top: 4px;\" class=\"icon pull-left fa ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 42, $this->source); })()), "iconClass", [], "any", false, false, false, 42), "html", null, true);
                            yield "\"></span>
                            ";
                        }
                        // line 44
                        yield "
                            ";
                        // line 45
                        $context["labelAttributes"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getLabelAttributes", [], "method", false, false, false, 45);
                        // line 46
                        yield "                        
                            ";
                        // line 47
                        $context["labelClasses"] = (( !CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 47)) ? ("text") : ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 47, $this->source); })()), "class", [], "any", false, false, false, 47) . " text")));
                        // line 48
                        yield "                            ";
                        $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 48, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((isset($context["labelClasses"]) || array_key_exists("labelClasses", $context) ? $context["labelClasses"] : (function () { throw new RuntimeError('Variable "labelClasses" does not exist.', 48, $this->source); })()))]);
                        // line 49
                        yield "
                            <span";
                        // line 50
                        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 50, $this->source); })()));
                        yield ">";
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getLabel", [], "method", false, false, false, 50)));
                        yield "</span>
                        </a>
                    </li>

                ";
                    }
                    // line 55
                    yield "
            ";
                }
                // line 57
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "
    </ul>

";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Menu/extra.html.twig";
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
        return array (  195 => 59,  188 => 57,  184 => 55,  174 => 50,  171 => 49,  168 => 48,  166 => 47,  163 => 46,  161 => 45,  158 => 44,  152 => 42,  150 => 41,  143 => 40,  140 => 39,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  126 => 34,  121 => 32,  118 => 31,  115 => 30,  112 => 28,  109 => 27,  107 => 26,  101 => 24,  99 => 23,  96 => 22,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  80 => 16,  77 => 15,  75 => 14,  72 => 13,  68 => 12,  63 => 10,  60 => 9,  57 => 8,  55 => 7,  52 => 6,  50 => 5,  47 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Menu/extra.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Menu/extra.html.twig");
    }
}
