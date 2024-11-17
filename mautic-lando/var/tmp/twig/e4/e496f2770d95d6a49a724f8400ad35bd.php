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

/* @MauticCore/Notification/notifications.html.twig */
class __TwigTemplate_2961de72cbff1a171c196c75774a42a7 extends Template
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
        yield "<li class=\"dropdown dropdown-custom\" id=\"notificationsDropdown\">
    <a href=\"javascript: void(0);\" onclick=\"Mautic.showNotifications();\" class=\"dropdown-toggle dropdown-notification\" data-toggle=\"dropdown\">
        ";
        // line 3
        $context["hideClass"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["updateMessage"]) || array_key_exists("updateMessage", $context) ? $context["updateMessage"] : (function () { throw new RuntimeError('Variable "updateMessage" does not exist.', 3, $this->source); })()), "isNew", [], "any", false, false, false, 3) || (isset($context["showNewIndicator"]) || array_key_exists("showNewIndicator", $context) ? $context["showNewIndicator"] : (function () { throw new RuntimeError('Variable "showNewIndicator" does not exist.', 3, $this->source); })()))) ? ("") : (" hide"));
        // line 4
        yield "        <span class=\"label label-danger";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hideClass"]) || array_key_exists("hideClass", $context) ? $context["hideClass"] : (function () { throw new RuntimeError('Variable "hideClass" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\" id=\"newNotificationIndicator\"><i class=\"fa fa-asterisk\"></i></span>
        <span class=\"ri-notification-3-line ri-xl\"></span>
    </a>
    <div class=\"dropdown-menu\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <div class=\"panel-title notification notification-title\">
                    <h6 class=\"fw-sb\">";
        // line 11
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.notifications", [], "messages");
        // line 12
        yield "                        <a href=\"javascript:void(0);\" class=\"btn-link btn-xs btn-nospin pull-right\" onclick=\"Mautic.clearNotification(0);\">";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.notifications.clearall", [], "messages");
        yield "</a>
                    </h6>
                </div>
            </div>
            <div class=\"pt-0 pb-xs pl-0 pr-0\">
                <div class=\"scroll-content slimscroll\" id=\"notifications\">
                    ";
        // line 18
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Notification/notification_messages.html.twig", ["notifications" =>         // line 19
(isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 19, $this->source); })()), "updateMessage" =>         // line 20
(isset($context["updateMessage"]) || array_key_exists("updateMessage", $context) ? $context["updateMessage"] : (function () { throw new RuntimeError('Variable "updateMessage" does not exist.', 20, $this->source); })())]);
        // line 21
        yield "
                    ";
        // line 22
        $context["class"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 22, $this->source); })()))) ? (" hide") : (""));
        // line 23
        yield "                    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 23, $this->source); })()), "html", null, true);
        yield " mautibot-image notification-empty\" id=\"notificationMautibot\">
                        <img class=\"img img-responsive\" src=\"";
        // line 24
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave");
        yield "\" />
                    </div>
                </div>
            </div>
            ";
        // line 28
        $context["lastNotification"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 28, $this->source); })()));
        // line 29
        yield "            <input id=\"mauticLastNotificationId\" type=\"hidden\" value=\"";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["lastNotification"] ?? null), "id", [], "any", true, true, false, 29)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastNotification"]) || array_key_exists("lastNotification", $context) ? $context["lastNotification"] : (function () { throw new RuntimeError('Variable "lastNotification" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29))) : (""));
        yield "\" />
        </div>
    </div>
</li>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Notification/notifications.html.twig";
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
        return array (  94 => 29,  92 => 28,  85 => 24,  80 => 23,  78 => 22,  75 => 21,  73 => 20,  72 => 19,  71 => 18,  61 => 12,  59 => 11,  48 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Notification/notifications.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Notification/notifications.html.twig");
    }
}
