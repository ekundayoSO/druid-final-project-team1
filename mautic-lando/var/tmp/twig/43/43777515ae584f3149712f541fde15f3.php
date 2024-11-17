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

/* @MauticCore/Menu/profile.html.twig */
class __TwigTemplate_d6e4ef73ff04b325f5b90438892464d1 extends Template
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
        $context["inline"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->menuRender("profile");
        // line 2
        yield "<li class=\"dropdown\">
    <a class=\"dropdown-toggle user\" data-toggle=\"dropdown\" href=\"#\">
        <span class=\"img-wrapper\"><img src=\"";
        // line 4
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\GravatarExtension']->getImage(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "getUser", [], "method", false, false, false, 4), "getEmail", [], "method", false, false, false, 4));
        yield "\"></span>
        <span class=\"flex-column-inline info\">
            <span class=\"text fw-sb ml-xs hidden-xs\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "getUser", [], "method", false, false, false, 6), "getName", [], "method", false, false, false, 6), "html", null, true);
        yield "</span>
            <span class=\"text ml-xs small hidden-xs position\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "getUser", [], "method", false, false, false, 7), "getPosition", [], "method", false, false, false, 7), "html", null, true);
        yield "</span>
        </span>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-right\">
        <li>
            <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_account");
        yield "\" data-toggle=\"ajax\">
                <i class=\"ri-user-smile-line ri-lg\"></i><span>";
        // line 13
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.account.settings", [], "messages");
        yield "</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_logout");
        yield "\">
                <i class=\"ri-logout-circle-r-line ri-lg\"></i><span>";
        // line 18
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.logout", [], "messages");
        yield "</span>
            </a>
        </li>

        ";
        // line 22
        if ((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 22, $this->source); })())) {
            // line 23
            yield "        <li role=\"separator\" class=\"divider\"></li>
        ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 24, $this->source); })()), "html", null, true);
            yield "
        ";
        }
        // line 26
        yield "    </ul>
</li>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Menu/profile.html.twig";
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
        return array (  97 => 26,  92 => 24,  89 => 23,  87 => 22,  80 => 18,  76 => 17,  69 => 13,  65 => 12,  57 => 7,  53 => 6,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Menu/profile.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Menu/profile.html.twig");
    }
}
