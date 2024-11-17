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

/* @MauticCore/Menu/main.html.twig */
class __TwigTemplate_545db4f6a4ab0a15cc76b2eea50c7e76 extends Template
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
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "isRoot", [], "method", false, false, false, 4)) {
                // line 5
                yield "        <ul class=\"nav mt-10\" data-toggle=\"menu\">
    ";
            } else {
                // line 7
                yield "        ";
                // line 8
                yield "        ";
                $context["ulAttributes"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "getChildrenAttributes", [], "method", false, false, false, 8);
                // line 9
                yield "        ";
                $context["ulAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["ulAttributes"]) || array_key_exists("ulAttributes", $context) ? $context["ulAttributes"] : (function () { throw new RuntimeError('Variable "ulAttributes" does not exist.', 9, $this->source); })()), ((array_key_exists("itemAttributes", $context)) ? ((isset($context["itemAttributes"]) || array_key_exists("itemAttributes", $context) ? $context["itemAttributes"] : (function () { throw new RuntimeError('Variable "itemAttributes" does not exist.', 9, $this->source); })())) : ([])));
                // line 10
                yield "
        <ul";
                // line 11
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["ulAttributes"]) || array_key_exists("ulAttributes", $context) ? $context["ulAttributes"] : (function () { throw new RuntimeError('Variable "ulAttributes" does not exist.', 11, $this->source); })()));
                yield ">
    ";
            }
            // line 13
            yield "
    ";
            // line 15
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "getChildren", [], "method", false, false, false, 15));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 16
                yield "
        ";
                // line 17
                if (CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isDisplayed", [], "method", false, false, false, 17)) {
                    // line 18
                    yield "            
            ";
                    // line 19
                    $context["showChildren"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "hasChildren", [], "method", false, false, false, 19) && CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getDisplayChildren", [], "method", false, false, false, 19))) ? (true) : (false));
                    // line 20
                    yield "            ";
                    $context["liAttributes"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getAttributes", [], "method", false, false, false, 20);
                    // line 21
                    yield "            ";
                    $context["isAncestor"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 21, $this->source); })()), "isAncestor", [$context["child"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 21, $this->source); })()), "matchingDepth", [], "array", false, false, false, 21)], "method", false, false, false, 21);
                    // line 22
                    yield "
            ";
                    // line 24
                    yield "            ";
                    $context["liClasses"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["liAttributes"] ?? null), "class", [], "any", true, true, false, 24)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 24, $this->source); })()), "class", [], "any", false, false, false, 24) . " nav-group")) : ("nav-group"));
                    // line 25
                    yield "           
            ";
                    // line 27
                    yield "            ";
                    $context["liAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 27, $this->source); })()), $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->buildMenuClasses($context["child"], (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 27, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 27, $this->source); })()), (isset($context["liClasses"]) || array_key_exists("liClasses", $context) ? $context["liClasses"] : (function () { throw new RuntimeError('Variable "liClasses" does not exist.', 27, $this->source); })())));
                    // line 28
                    yield "
            ";
                    // line 30
                    yield "            <li";
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 30, $this->source); })()));
                    yield ">

                ";
                    // line 32
                    $context["linkAttributes"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getLinkAttributes", [], "method", false, false, false, 32);
                    // line 33
                    yield "                ";
                    $context["extras"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getExtras", [], "method", false, false, false, 33);
                    // line 34
                    yield "
                ";
                    // line 36
                    yield "
                ";
                    // line 37
                    if ((isset($context["showChildren"]) || array_key_exists("showChildren", $context) ? $context["showChildren"] : (function () { throw new RuntimeError('Variable "showChildren" does not exist.', 37, $this->source); })())) {
                        // line 38
                        yield "                    ";
                        // line 39
                        yield "                    <a href=\"javascript:void(0);\" data-target=\"#";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 39, $this->source); })()), "id", [], "array", false, false, false, 39), "html", null, true);
                        yield "_child\" data-toggle=\"submenu\" data-parent=\".nav\" ";
                        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 39, $this->source); })()));
                        yield "\">
                        <span class=\"arrow pull-right text-right\"></span>
                ";
                    } else {
                        // line 42
                        yield "                    ";
                        // line 43
                        yield "                    ";
                        $context["url"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getUri", [], "method", false, false, false, 43);
                        // line 44
                        yield "                    ";
                        $context["url"] = ((Twig\Extension\CoreExtension::testEmpty((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 44, $this->source); })()))) ? ("javascript:void(0);") : ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 44, $this->source); })())));
                        // line 45
                        yield "                    ";
                        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["linkAttributes"] ?? null), "target", [], "any", true, true, false, 45) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 45, $this->source); })()), "target", [], "any", false, false, false, 45)))) {
                            // line 46
                            yield "                        ";
                            $context["linkAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 46, $this->source); })()), ["data-toggle" => "ajax"]);
                            // line 47
                            yield "                    ";
                        }
                        // line 48
                        yield "                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 48, $this->source); })()), "html", null, true);
                        yield "\"";
                        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 48, $this->source); })()));
                        yield ">
                ";
                    }
                    // line 50
                    yield "
                ";
                    // line 51
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extras"] ?? null), "iconClass", [], "any", true, true, false, 51) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 51, $this->source); })()), "iconClass", [], "any", false, false, false, 51)))) {
                        // line 52
                        yield "                    <span class=\"icon pull-left fa ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 52, $this->source); })()), "iconClass", [], "any", false, false, false, 52), "html", null, true);
                        yield "\"></span>
                ";
                    }
                    // line 54
                    yield "
                    ";
                    // line 55
                    $context["labelAttributes"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getLabelAttributes", [], "method", false, false, false, 55);
                    // line 56
                    yield "                    ";
                    $context["labelClasses"] = (( !CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 56)) ? ("nav-item-name") : ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 56, $this->source); })()), "class", [], "any", false, false, false, 56) . " nav-item-name")));
                    // line 57
                    yield "                    ";
                    $context["labelPull"] = ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 57, $this->source); })()), "depth", [], "any", false, false, false, 57))) ? (" pull-left") : (""));
                    // line 58
                    yield "
                    ";
                    // line 59
                    $context["labelClasses"] = (((isset($context["labelClasses"]) || array_key_exists("labelClasses", $context) ? $context["labelClasses"] : (function () { throw new RuntimeError('Variable "labelClasses" does not exist.', 59, $this->source); })()) . " text") . (isset($context["labelPull"]) || array_key_exists("labelPull", $context) ? $context["labelPull"] : (function () { throw new RuntimeError('Variable "labelPull" does not exist.', 59, $this->source); })()));
                    // line 60
                    yield "                    ";
                    $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 60, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((isset($context["labelClasses"]) || array_key_exists("labelClasses", $context) ? $context["labelClasses"] : (function () { throw new RuntimeError('Variable "labelClasses" does not exist.', 60, $this->source); })()))]);
                    // line 61
                    yield "                    
                        <span";
                    // line 62
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 62, $this->source); })()));
                    yield ">";
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getLabel", [], "method", false, false, false, 62)));
                    yield "</span>

                    </a>
                ";
                    // line 66
                    yield "                
                ";
                    // line 68
                    yield "                ";
                    if ((isset($context["showChildren"]) || array_key_exists("showChildren", $context) ? $context["showChildren"] : (function () { throw new RuntimeError('Variable "showChildren" does not exist.', 68, $this->source); })())) {
                        // line 69
                        yield "                    ";
                        $context["optionsDepth"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "array", true, true, false, 69) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 69, $this->source); })()), "depth", [], "array", false, false, false, 69)))) ? ( - -CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 69, $this->source); })()), "depth", [], "array", false, false, false, 69)) : (null));
                        // line 70
                        yield "                    ";
                        $context["optionsMatchingDepth"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", [], "array", true, true, false, 70) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 70, $this->source); })()), "matchingDepth", [], "array", false, false, false, 70)))) ? ( - -CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 70, $this->source); })()), "matchingDepth", [], "array", false, false, false, 70)) : (null));
                        // line 71
                        yield "                    ";
                        $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 71, $this->source); })()), ["depth" =>                         // line 72
(isset($context["optionsDepth"]) || array_key_exists("optionsDepth", $context) ? $context["optionsDepth"] : (function () { throw new RuntimeError('Variable "optionsDepth" does not exist.', 72, $this->source); })()), "matchingDepth" =>                         // line 73
(isset($context["optionsMatchingDepth"]) || array_key_exists("optionsMatchingDepth", $context) ? $context["optionsMatchingDepth"] : (function () { throw new RuntimeError('Variable "optionsMatchingDepth" does not exist.', 73, $this->source); })())]);
                        // line 75
                        yield "
                    ";
                        // line 76
                        $context["levelClass"] = (((isset($context["isAncestor"]) || array_key_exists("isAncestor", $context) ? $context["isAncestor"] : (function () { throw new RuntimeError('Variable "isAncestor" does not exist.', 76, $this->source); })())) ? ("nav-submenu collapse in") : ("nav-submenu collapse"));
                        // line 77
                        yield "                    
                    ";
                        // line 79
                        yield "
                    ";
                        // line 80
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Menu/main.html.twig", ["item" =>                         // line 81
$context["child"], "itemAttributes" => ["class" =>                         // line 83
(isset($context["levelClass"]) || array_key_exists("levelClass", $context) ? $context["levelClass"] : (function () { throw new RuntimeError('Variable "levelClass" does not exist.', 83, $this->source); })()), "id" => (CoreExtension::getAttribute($this->env, $this->source,                         // line 84
(isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 84, $this->source); })()), "id", [], "array", false, false, false, 84) . "_child")], "options" =>                         // line 86
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 86, $this->source); })()), "matcher" =>                         // line 87
(isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 87, $this->source); })())]);
                        // line 88
                        yield "
                
                ";
                    }
                    // line 91
                    yield "
                ";
                    // line 93
                    yield "                
            ";
                    // line 95
                    yield "            </li>

        ";
                }
                // line 98
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
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "    ";
            // line 101
            yield "
    ";
            // line 103
            yield "    </ul>
    
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Menu/main.html.twig";
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
        return array (  289 => 103,  286 => 101,  284 => 100,  269 => 98,  264 => 95,  261 => 93,  258 => 91,  253 => 88,  251 => 87,  250 => 86,  249 => 84,  248 => 83,  247 => 81,  246 => 80,  243 => 79,  240 => 77,  238 => 76,  235 => 75,  233 => 73,  232 => 72,  230 => 71,  227 => 70,  224 => 69,  221 => 68,  218 => 66,  210 => 62,  207 => 61,  204 => 60,  202 => 59,  199 => 58,  196 => 57,  193 => 56,  191 => 55,  188 => 54,  182 => 52,  180 => 51,  177 => 50,  169 => 48,  166 => 47,  163 => 46,  160 => 45,  157 => 44,  154 => 43,  152 => 42,  143 => 39,  141 => 38,  139 => 37,  136 => 36,  133 => 34,  130 => 33,  128 => 32,  122 => 30,  119 => 28,  116 => 27,  113 => 25,  110 => 24,  107 => 22,  104 => 21,  101 => 20,  99 => 19,  96 => 18,  94 => 17,  91 => 16,  73 => 15,  70 => 13,  65 => 11,  62 => 10,  59 => 9,  56 => 8,  54 => 7,  50 => 5,  47 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Menu/main.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Menu/main.html.twig");
    }
}
