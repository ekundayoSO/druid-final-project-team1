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

/* @MauticEmail/FormTheme/Config/monitored_mailboxes_widget.html.twig */
class __TwigTemplate_5dd23f00bcd6790152918fd200fc0c6e extends Template
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
            'monitored_mailboxes_widget' => [$this, 'block_monitored_mailboxes_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('monitored_mailboxes_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_monitored_mailboxes_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "  <div class=\"row\">
      ";
        // line 3
        if (("general" != (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 3, $this->source); })()))) {
            // line 4
            yield "        <div class=\"col-md-6\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "folder", [], "any", false, false, false, 4), 'row');
            yield "</div>
        <div class=\"col-md-6\">";
            // line 5
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "override_settings", [], "any", false, false, false, 5), 'row');
            yield "</div>
      ";
        } else {
            // line 7
            yield "        <div class=\"col-md-6\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "address", [], "any", false, false, false, 7), 'row');
            yield "</div>
        <div class=\"col-md-6 pt-lg\" id=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 8, $this->source); })()), "html", null, true);
            yield "TestButtonContainer\">
            <div class=\"button_container\">
                ";
            // line 10
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "test_connection_button", [], "any", false, false, false, 10), 'widget');
            yield "
                <span class=\"fa fa-spinner fa-spin hide\"></span>
            </div>
            <div class=\"help-block\"></div>
        </div>
      ";
        }
        // line 16
        yield "  </div>

  ";
        // line 18
        if (("general" != (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 18, $this->source); })()))) {
            // line 19
            yield "    <div class=\"row\">
        <div class=\"col-md-6\">";
            // line 20
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "address", [], "any", false, false, false, 20), 'row');
            yield "</div>
        <div class=\"col-md-6 pt-lg\" id=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 21, $this->source); })()), "html", null, true);
            yield "TestButtonContainer\" data-show-on='{\"config_emailconfig_monitored_email_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 21, $this->source); })()), "html", null, true);
            yield "_override_settings_1\": \"checked\"}'>
            <div class=\"button_container\">
                ";
            // line 23
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "test_connection_button", [], "any", false, false, false, 23), 'widget');
            yield "
                <span class=\"fa fa-spinner fa-spin hide\"></span>
            </div>
            <div class=\"help-block\"></div>
        </div>
    </div>
  ";
        }
        // line 30
        yield "
  <div class=\"row\">
      <div class=\"col-sm-12 col-md-6\">
          ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "host", [], "any", false, false, false, 33), 'row');
        yield "
      </div>
      <div class=\"col-sm-4 col-md-2\">
          ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "port", [], "any", false, false, false, 36), 'row');
        yield "
      </div>
      ";
        // line 38
        if ($this->env->getFunction('is_extension_loaded')->getCallable()("openssl")) {
            // line 39
            yield "        <div class=\"col-sm-8 col-md-4\">
            ";
            // line 40
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "encryption", [], "any", false, false, false, 40), 'row');
            yield "
        </div>
      ";
        }
        // line 43
        yield "  </div>

  <div class=\"row\">
      <div class=\"col-md-6\">
          ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), 'row');
        yield "
      </div>
      <div class=\"col-md-6\">
          ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "password", [], "any", false, false, false, 50), 'row');
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
        return "@MauticEmail/FormTheme/Config/monitored_mailboxes_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  157 => 50,  151 => 47,  145 => 43,  139 => 40,  136 => 39,  134 => 38,  129 => 36,  123 => 33,  118 => 30,  108 => 23,  101 => 21,  97 => 20,  94 => 19,  92 => 18,  88 => 16,  79 => 10,  74 => 8,  69 => 7,  64 => 5,  59 => 4,  57 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/FormTheme/Config/monitored_mailboxes_widget.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/FormTheme/Config/monitored_mailboxes_widget.html.twig");
    }
}
