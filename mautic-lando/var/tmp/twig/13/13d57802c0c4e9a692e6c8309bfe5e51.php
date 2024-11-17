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

/* @MauticCore/Menu/profile_inline.html.twig */
class __TwigTemplate_f373fe10b09f8cfc4090b7b6e08e27f1 extends Template
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
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "getChildren", [], "method", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 4
                yield "
        ";
                // line 5
                if (CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isDisplayed", [], "method", false, false, false, 5)) {
                    // line 6
                    yield "
            ";
                    // line 7
                    $context["showChildren"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "hasChildren", [], "method", false, false, false, 7) && CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getDisplayChildren", [], "method", false, false, false, 7))) ? (true) : (false));
                    // line 8
                    yield "            ";
                    $context["liAttributes"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getAttributes", [], "method", false, false, false, 8);
                    // line 9
                    yield "            ";
                    $context["isAncestor"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 9, $this->source); })()), "isAncestor", [$context["child"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 9, $this->source); })()), "matchingDepth", [], "array", false, false, false, 9)], "method", false, false, false, 9);
                    // line 10
                    yield "            ";
                    $context["extras"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getExtras", [], "method", false, false, false, 10);
                    // line 11
                    yield "
            ";
                    // line 12
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extras"] ?? null), "divider", [], "any", true, true, false, 12) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 12, $this->source); })()), "divider", [], "any", false, false, false, 12)))) {
                        // line 13
                        yield "                <li role=\"separator\" class=\"divider\"></li>
            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 14
($context["extras"] ?? null), "header", [], "any", true, true, false, 14) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 14, $this->source); })()), "header", [], "any", false, false, false, 14)))) {
                        // line 15
                        yield "                <li class=\"dropdown-header\">";
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 15, $this->source); })()), "header", [], "any", false, false, false, 15)));
                        yield "</li>
            ";
                    } else {
                        // line 17
                        yield "
                ";
                        // line 19
                        yield "                ";
                        $context["liClasses"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["liAttributes"] ?? null), "class", [], "any", true, true, false, 19)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 19, $this->source); })()), "class", [], "any", false, false, false, 19) . " nav-group")) : ("nav-group"));
                        // line 20
                        yield "                
                ";
                        // line 22
                        yield "                ";
                        $context["liAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 22, $this->source); })()), $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->buildMenuClasses($context["child"], (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 22, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 22, $this->source); })()), (isset($context["liClasses"]) || array_key_exists("liClasses", $context) ? $context["liClasses"] : (function () { throw new RuntimeError('Variable "liClasses" does not exist.', 22, $this->source); })())));
                        // line 23
                        yield "
                ";
                        // line 25
                        yield "                <li";
                        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 25, $this->source); })()));
                        yield ">

                    ";
                        // line 27
                        $context["url"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getUri", [], "method", false, false, false, 27);
                        // line 28
                        yield "                    ";
                        $context["linkAttributes"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getLinkAttributes", [], "method", false, false, false, 28);
                        // line 29
                        yield "                    ";
                        $context["url"] = ((Twig\Extension\CoreExtension::testEmpty((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 29, $this->source); })()))) ? ("javascript:void(0);") : ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 29, $this->source); })())));
                        // line 30
                        yield "                    ";
                        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["linkAttributes"] ?? null), "target", [], "any", true, true, false, 30) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 30, $this->source); })()), "target", [], "any", false, false, false, 30)))) {
                            // line 31
                            yield "                        ";
                            $context["linkAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 31, $this->source); })()), ["data-toggle" => "ajax"]);
                            // line 32
                            yield "                    ";
                        }
                        // line 33
                        yield "                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 33, $this->source); })()), "html", null, true);
                        yield "\"";
                        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 33, $this->source); })()));
                        yield ">
                        ";
                        // line 34
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extras"] ?? null), "iconClass", [], "any", true, true, false, 34) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 34, $this->source); })()), "iconClass", [], "any", false, false, false, 34)))) {
                            // line 35
                            yield "                        <span style=\"margin-top: 4px;\" class=\"fs-14 fa ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 35, $this->source); })()), "iconClass", [], "any", false, false, false, 35), "html", null, true);
                            yield "\"></span>
                        ";
                        }
                        // line 37
                        yield "
                        ";
                        // line 38
                        $context["labelAttributes"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getLabelAttributes", [], "method", false, false, false, 38);
                        // line 39
                        yield "                        
                        ";
                        // line 40
                        $context["labelClasses"] = (( !CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 40)) ? ("text") : ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 40, $this->source); })()), "class", [], "any", false, false, false, 40) . " text")));
                        // line 41
                        yield "                        ";
                        $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 41, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((isset($context["labelClasses"]) || array_key_exists("labelClasses", $context) ? $context["labelClasses"] : (function () { throw new RuntimeError('Variable "labelClasses" does not exist.', 41, $this->source); })()))]);
                        // line 42
                        yield "
                        <span";
                        // line 43
                        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 43, $this->source); })()));
                        yield ">";
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getLabel", [], "method", false, false, false, 43)));
                        yield "</span>

                    </a>

                </li>

            ";
                    }
                    // line 50
                    yield "
        ";
                }
                // line 52
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Menu/profile_inline.html.twig";
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
        return array (  178 => 54,  171 => 52,  167 => 50,  155 => 43,  152 => 42,  149 => 41,  147 => 40,  144 => 39,  142 => 38,  139 => 37,  133 => 35,  131 => 34,  124 => 33,  121 => 32,  118 => 31,  115 => 30,  112 => 29,  109 => 28,  107 => 27,  101 => 25,  98 => 23,  95 => 22,  92 => 20,  89 => 19,  86 => 17,  80 => 15,  78 => 14,  75 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 8,  59 => 7,  56 => 6,  54 => 5,  51 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Menu/profile_inline.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Menu/profile_inline.html.twig");
    }
}
