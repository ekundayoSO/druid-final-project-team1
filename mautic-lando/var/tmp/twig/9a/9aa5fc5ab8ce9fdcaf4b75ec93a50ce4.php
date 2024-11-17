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

/* @MauticUser/Security/login.html.twig */
class __TwigTemplate_8c47a4ffb684ca375c70c8948ec0035d extends Template
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
            'header' => [$this, 'block_header'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("@MauticCore/Default/content.html.twig") : ("@MauticUser/Security/base.html.twig")), "@MauticUser/Security/login.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.header", [], "messages");
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.expired.header", [], "messages");
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "xmlHttpRequest", [], "any", false, false, false, 6)) {
            // line 7
            yield "        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-8 col-md-6 inline-login\">
                ";
            // line 9
            yield from             $this->unwrap()->yieldBlock("mainContent", $context, $blocks);
            yield "
            </div>
        </div>
    ";
        } else {
            // line 13
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("mainContent", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mainContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "\t<form class=\"form-group login-form\" name=\"login\" data-toggle=\"ajax\" role=\"form\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_logincheck");
        yield "\" method=\"post\">
\t\t<div class=\"input-group mb-md\">

\t\t\t<span class=\"input-group-addon\">
\t\t\t\t<i class=\"ri-user-6-fill\"></i>
\t\t\t</span>
\t\t\t<label for=\"username\" class=\"sr-only\">";
        // line 24
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.form.loginusername", [], "messages");
        yield "</label>
\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control input-lg\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 25, $this->source); })()));
        yield "\" required autofocus placeholder=\"";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.form.loginusername", [], "messages");
        yield "\"/>
\t\t</div>
\t\t<div class=\"input-group mb-md\">
\t\t\t<span class=\"input-group-addon\">
\t\t\t\t<i class=\"fa fa-key\"></i>
\t\t\t</span>
\t\t\t<label for=\"password\" class=\"sr-only\">";
        // line 31
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.password", [], "messages");
        yield ":</label>
\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control input-lg\" required placeholder=\"";
        // line 32
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.password", [], "messages");
        yield "\"/>
\t\t</div>

\t\t<div class=\"checkbox-inline custom-primary pull-left mb-md\">
\t\t\t<label for=\"remember_me\">
\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"/>
\t\t\t\t<span></span>
\t\t\t\t";
        // line 39
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.form.rememberme", [], "messages");
        // line 40
        yield "\t\t\t</label>
\t\t</div>

\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"));
        yield "\"/>
\t\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">";
        // line 44
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.form.loginbtn", [], "messages");
        yield "</button>

\t\t<div class=\"mt-sm text-right\">
\t\t\t<a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_passwordreset");
        yield "\">";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.user.passwordreset.link", [], "messages");
        yield "</a>
\t\t</div>
\t</form>
\t";
        // line 50
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 50, $this->source); })()))) {
            // line 51
            yield "\t\t<ul class=\"list-group\">
\t\t\t";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sso"]) {
                // line 53
                yield "\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_sso_login", ["integration" => CoreExtension::getAttribute($this->env, $this->source, $context["sso"], "getName", [], "method", false, false, false, 53)]), "html", null, true);
                yield "\" class=\"list-group-item\">
\t\t\t\t\t<img class=\"pull-left mr-xs\" style=\"height: 16px;\" src=\"";
                // line 54
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["sso"], "getIcon", [], "method", false, false, false, 54));
                yield "\">
\t\t\t\t\t<p class=\"list-group-item-text\">";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.integration.sso." . CoreExtension::getAttribute($this->env, $this->source, $context["sso"], "getName", [], "method", false, false, false, 55))), "html", null, true);
                yield "</p>
\t\t\t\t</a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sso'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "\t\t</ul>
\t";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticUser/Security/login.html.twig";
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
        return array (  203 => 58,  194 => 55,  190 => 54,  185 => 53,  181 => 52,  178 => 51,  176 => 50,  168 => 47,  162 => 44,  158 => 43,  153 => 40,  151 => 39,  141 => 32,  137 => 31,  126 => 25,  122 => 24,  112 => 18,  105 => 17,  96 => 13,  89 => 9,  85 => 7,  82 => 6,  75 => 5,  64 => 3,  53 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticUser/Security/login.html.twig", "/app/docroot/app/bundles/UserBundle/Resources/views/Security/login.html.twig");
    }
}
