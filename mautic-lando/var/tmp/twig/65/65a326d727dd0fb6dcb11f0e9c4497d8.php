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

/* @MauticInstall/Install/check.html.twig */
class __TwigTemplate_610270137969386b3585fd11135e3763 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 11
        return "@MauticInstall/Install/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        if (("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 10, $this->source); })()))) {
        }
        // line 11
        $this->parent = $this->loadTemplate("@MauticInstall/Install/content.html.twig", "@MauticInstall/Install/check.html.twig", 11);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "<div class=\"panel-heading\">
    <h2 class=\"panel-title\">
        ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.check.environment"), "html", null, true);
        yield "
    </h2>
</div>
";
        // line 21
        yield "<div class=\"panel-body\">
    ";
        // line 22
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new RuntimeError('Variable "majors" does not exist.', 22, $this->source); })()))) {
            // line 23
            yield "    <div class=\"panel-group\" id=\"minors\">
        <div class=\"panel panel-danger\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\" style=\"font-size: 1em;\">
                    ";
            // line 27
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.major.problems");
            yield "
                </h3>
            </div>
            <div class=\"panel-body alert-warning\">
                ";
            // line 31
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.sentence.major.problems", ["%majors%" => Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new RuntimeError('Variable "majors" does not exist.', 31, $this->source); })()))]);
            yield "
            </div>
            <ul class=\"list-group\">
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new RuntimeError('Variable "majors" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 35
                yield "                    ";
                if (($context["message"] == "mautic.install.cache.unwritable")) {
                    // line 36
                    yield "                        <li class=\"list-group-item\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.directory.unwritable", ["%path%" => (isset($context["cacheDir"]) || array_key_exists("cacheDir", $context) ? $context["cacheDir"] : (function () { throw new RuntimeError('Variable "cacheDir" does not exist.', 36, $this->source); })())]);
                    yield "</li>
                    ";
                } elseif ((                // line 37
$context["message"] == "mautic.install.config.unwritable")) {
                    // line 38
                    yield "                        <li class=\"list-group-item\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], ["%path%" => (isset($context["configFile"]) || array_key_exists("configFile", $context) ? $context["configFile"] : (function () { throw new RuntimeError('Variable "configFile" does not exist.', 38, $this->source); })())]);
                    yield "</li>
                    ";
                } elseif ((                // line 39
$context["message"] == "mautic.install.logs.unwritable")) {
                    // line 40
                    yield "                        <li class=\"list-group-item\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.directory.unwritable", ["%path%" => (isset($context["logDir"]) || array_key_exists("logDir", $context) ? $context["logDir"] : (function () { throw new RuntimeError('Variable "logDir" does not exist.', 40, $this->source); })())]);
                    yield "</li>
                    ";
                } elseif ((                // line 41
$context["message"] == "mautic.install.apc.version")) {
                    // line 42
                    yield "                        ";
                    $context["minAPCverison"] = (((Twig\Extension\CoreExtension::constant("PHP_VERSION") >= "5.4.0")) ? ("3.1.13") : ("3.0.17"));
                    // line 43
                    yield "                        <li class=\"list-group-item\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], ["%minapc%" => (isset($context["minAPCverison"]) || array_key_exists("minAPCverison", $context) ? $context["minAPCverison"] : (function () { throw new RuntimeError('Variable "minAPCverison" does not exist.', 43, $this->source); })()), "%currentapc%" => $this->extensions['Mautic\InstallBundle\Twig\TwigExtension']->phpversion("apc")]);
                    yield "</li>
                    ";
                } else {
                    // line 45
                    yield "                        <li class=\"list-group-item\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]);
                    yield "</li>
                    ";
                }
                // line 47
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "            </ul>
        </div>
    </div>
    ";
        }
        // line 52
        yield "
    ";
        // line 53
        if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new RuntimeError('Variable "majors" does not exist.', 53, $this->source); })()))) {
            // line 54
            yield "        <div class=\"alert alert-success\">
            <h4><i class=\"ri-check-line\"></i> ";
            // line 55
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.ready");
            yield "</h4>
            <p>";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.sentence.ready");
            yield "</p>
        </div>
    ";
        }
        // line 59
        yield "
    ";
        // line 60
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["minors"]) || array_key_exists("minors", $context) ? $context["minors"] : (function () { throw new RuntimeError('Variable "minors" does not exist.', 60, $this->source); })()))) {
            // line 61
            yield "    <div class=\"panel-group\" id=\"minors\">
        <div class=\"panel panel-warning\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\" style=\"font-size: 1em;\">
                    <a data-toggle=\"collapse\" style=\"display: block; \" href=\"#minorDetails\"><i class=\"fa fa-chevron-down\"></i> ";
            // line 65
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.minor.problems");
            yield "</a>
                </h3>
            </div>
            <div id=\"minorDetails\" class=\"panel-collapse collapse\">
                <div class=\"panel-body alert-warning\">
                    <p>";
            // line 70
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.sentence.minor.problems");
            yield "</p>
                </div>
                 <ul class=\"list-group\">
                     ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["minors"]) || array_key_exists("minors", $context) ? $context["minors"] : (function () { throw new RuntimeError('Variable "minors" does not exist.', 73, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 74
                yield "                         ";
                if (($context["message"] == "mautic.install.pcre.version")) {
                    // line 75
                    yield "                            <li class=\"list-group-item\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], ["%pcreversion%" => Twig\Extension\CoreExtension::constant("PCRE_VERSION")]);
                    yield "</li>
                         ";
                } elseif ((                // line 76
$context["message"] == "mautic.install.php.version.not.supported")) {
                    // line 77
                    yield "                             <li class=\"list-group-item\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], ["%phpversion%" => Twig\Extension\CoreExtension::constant("PHP_VERSION")]);
                    yield "</li>
                         ";
                } elseif ((                // line 78
$context["message"] == "mautic.install.php.version.has.only.security.support")) {
                    // line 79
                    yield "                             <li class=\"list-group-item\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], ["%phpversion%" => Twig\Extension\CoreExtension::constant("PHP_VERSION")]);
                    yield "</li>
                         ";
                } elseif ((                // line 80
$context["message"] == "mautic.install.memory.limit")) {
                    // line 81
                    yield "                             <li class=\"list-group-item\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], ["%min_memory_limit%" => Twig\Extension\CoreExtension::constant("Mautic\\InstallBundle\\Configurator\\Step\\CheckStep::RECOMMENDED_MEMORY_LIMIT")]);
                    yield "</li>
                         ";
                } else {
                    // line 83
                    yield "                             <li class=\"list-group-item\">";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]);
                    yield "</li>
                         ";
                }
                // line 85
                yield "                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "                </ul>
            </div>
        </div>
    </div>
    ";
        }
        // line 91
        yield "
    ";
        // line 92
        if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new RuntimeError('Variable "majors" does not exist.', 92, $this->source); })()))) {
            // line 93
            yield "    ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_start');
            yield "

        <div class=\"row mt-20\">
            <div class=\"col-sm-12\">
                ";
            // line 97
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "buttons", [], "any", false, false, false, 97), 'row');
            yield "
            </div>
        </div>
    ";
            // line 100
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
            yield "
    ";
        }
        // line 102
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticInstall/Install/check.html.twig";
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
        return array (  271 => 102,  266 => 100,  260 => 97,  252 => 93,  250 => 92,  247 => 91,  240 => 86,  234 => 85,  228 => 83,  222 => 81,  220 => 80,  215 => 79,  213 => 78,  208 => 77,  206 => 76,  201 => 75,  198 => 74,  194 => 73,  188 => 70,  180 => 65,  174 => 61,  172 => 60,  169 => 59,  163 => 56,  159 => 55,  156 => 54,  154 => 53,  151 => 52,  145 => 48,  139 => 47,  133 => 45,  127 => 43,  124 => 42,  122 => 41,  117 => 40,  115 => 39,  110 => 38,  108 => 37,  103 => 36,  100 => 35,  96 => 34,  90 => 31,  83 => 27,  77 => 23,  75 => 22,  72 => 21,  66 => 17,  62 => 15,  55 => 14,  50 => 11,  47 => 10,  40 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticInstall/Install/check.html.twig", "/app/docroot/app/bundles/InstallBundle/Resources/views/Install/check.html.twig");
    }
}
