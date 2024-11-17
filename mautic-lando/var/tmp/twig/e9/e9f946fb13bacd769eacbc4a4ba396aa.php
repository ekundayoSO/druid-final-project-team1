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

/* @MauticConfig/FormTheme/_config_file_row.html.twig */
class __TwigTemplate_7ee3d1d36a34bd30d7bcf63d1c3cbf89 extends Template
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
        $context["hasErrors"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), "vars", [], "any", false, false, false, 1), "errors", [], "any", false, false, false, 1));
        // line 2
        $context["feedbackClass"] = ((((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 2, $this->source); })()) > 0)) ? ("has-error") : (""));
        // line 3
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3);
        // line 4
        $context["hide"] = ((( !array_key_exists("fieldValue", $context) || (array_key_exists("fieldValue", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 4, $this->source); })()))))) ? ("hide") : (""));
        // line 5
        $context["filename"] = Mautic\CoreBundle\Helper\InputHelper::alphanum($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "label", [], "any", false, false, false, 5)), true, "_");
        // line 6
        $context["downloadUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_config_action", ["objectAction" => "download", "objectId" => (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "filename" => (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 6, $this->source); })())]);
        // line 7
        $context["removeUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_config_action", ["objectAction" => "remove", "objectId" => (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })())]);
        // line 8
        yield "<div class=\"row\">
    <div class=\"form-group col-xs-12 ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "label", [], "any", false, false, false, 10)) ? [] : ["label" => $_label_]));
        yield "
        <span class=\"small pull-right ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hide"]) || array_key_exists("hide", $context) ? $context["hide"] : (function () { throw new RuntimeError('Variable "hide" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\">
            <a
               data-toggle=\"confirmation\"
               href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["removeUrl"]) || array_key_exists("removeUrl", $context) ? $context["removeUrl"] : (function () { throw new RuntimeError('Variable "removeUrl" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\"
               data-message=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.remove_file_contents"));
        yield "\"
               data-confirm-text=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.remove"));
        yield "\"
               data-confirm-callback=\"removeConfigValue\"
               data-cancel-text=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"));
        yield "\">
                ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.remove"), "html", null, true);
        yield "
            </a>
            <span> | </span>
            <a href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["downloadUrl"]) || array_key_exists("downloadUrl", $context) ? $context["downloadUrl"] : (function () { throw new RuntimeError('Variable "downloadUrl" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.download"), "html", null, true);
        yield "</a>
        </span>
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'widget');
        yield "
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'errors');
        yield "
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
        return "@MauticConfig/FormTheme/_config_file_row.html.twig";
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
        return array (  107 => 25,  103 => 24,  96 => 22,  90 => 19,  86 => 18,  81 => 16,  77 => 15,  73 => 14,  67 => 11,  63 => 10,  59 => 9,  56 => 8,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticConfig/FormTheme/_config_file_row.html.twig", "/app/docroot/app/bundles/ConfigBundle/Resources/views/FormTheme/_config_file_row.html.twig");
    }
}
