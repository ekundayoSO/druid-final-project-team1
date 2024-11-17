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

/* @MauticForm/Form/_list.html.twig */
class __TwigTemplate_66233f4bc9f56d5ea5cfb2075e5af3c3 extends Template
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
        // line 12
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 12, $this->source); })())) > 0)) {
            // line 13
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"formTable\">
            <thead>
            <tr>
                ";
            // line 17
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#formTable", "routeBase" => "form", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 22
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "form:forms:deleteown", [], "array", false, false, false, 22) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "form:forms:deleteother", [], "array", false, false, false, 22))], "customButtons" => [["confirm" => ["message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.confirm_batch_rebuild"), "confirmText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.rebuild"), "confirmAction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "batchRebuildHtml"]), "iconClass" => "fa fa-fw fa-refresh", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.rebuild"), "precheck" => "batchActionPrecheck", "confirmCallback" => "executeBatchAction"], "primary" => true]]]);
            // line 38
            yield "

                ";
            // line 40
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "f.name", "text" => "mautic.core.name", "class" => "col-form-name"]);
            // line 45
            yield "

                ";
            // line 47
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-form-category"]);
            // line 52
            yield "

                ";
            // line 54
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "submission_count", "text" => "mautic.form.form.results", "class" => "visible-md visible-lg col-form-submissions"]);
            // line 59
            yield "

                ";
            // line 61
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "f.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-md visible-lg col-form-dateAdded"]);
            // line 66
            yield "

                ";
            // line 68
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "f.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-md visible-lg col-form-dateModified", "default" => true]);
            // line 74
            yield "

                ";
            // line 76
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "f.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-md visible-lg col-form-createdby"]);
            // line 81
            yield "

                ";
            // line 83
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "f.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-form-id"]);
            // line 88
            yield "
            </tr>
            </thead>
            <tbody>
            ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 92, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 93
                yield "                ";
                $context["item"] = CoreExtension::getAttribute($this->env, $this->source, $context["i"], 0, [], "array", false, false, false, 93);
                // line 94
                yield "                <tr>
                    <td>
                        ";
                // line 96
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 97
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 97, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 99
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 99, $this->source); })()), "form:forms:editown", [], "array", false, false, false, 99), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 99, $this->source); })()), "form:forms:editother", [], "array", false, false, false, 99), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 99, $this->source); })()), "createdBy", [], "any", false, false, false, 99)), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 100
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 100, $this->source); })()), "form:forms:create", [], "array", false, false, false, 100), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 101
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 101, $this->source); })()), "form:forms:deleteown", [], "array", false, false, false, 101), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 101, $this->source); })()), "form:forms:deleteother", [], "array", false, false, false, 101), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 101, $this->source); })()), "createdBy", [], "any", false, false, false, 101))], "routeBase" => "form", "customButtons" => [["attr" => ["data-toggle" => "", "target" => "_blank", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "preview", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 109
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)])], "iconClass" => "ri-eye-line", "btnText" => "mautic.form.form.preview"], ["attr" => ["data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "results", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 117
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 117, $this->source); })()), "id", [], "any", false, false, false, 117)])], "iconClass" => "ri-list-view", "btnText" => "mautic.form.form.results"]]]);
                // line 123
                yield "
                    </td>
                    <td>
                        <div>
                            ";
                // line 127
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 127, $this->source); })()), "model" => "form.form"]);
                yield "
                            <a href=\"";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128)]), "html", null, true);
                yield "\" data-toggle=\"ajax\" data-menu-link=\"mautic_form_index\">
                                ";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 129, $this->source); })()), "name", [], "any", false, false, false, 129), "html", null, true);
                yield "
                                ";
                // line 130
                if (("campaign" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 130, $this->source); })()), "formType", [], "any", false, false, false, 130))) {
                    // line 131
                    yield "                                    <span data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.icon_tooltip.campaign_form"), "html", null, true);
                    yield "\"><i class=\"fa fa-fw fa-cube\"></i></span>
                                ";
                }
                // line 133
                yield "                            </a>
                        </div>
                        ";
                // line 135
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 135, $this->source); })()), "description", [], "any", false, false, false, 135)) {
                    // line 136
                    yield "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 137
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 137, $this->source); })()), "description", [], "any", false, false, false, 137));
                    yield "</small>
                            </div>
                        ";
                }
                // line 140
                yield "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 142
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 142, $this->source); })()), "category", [], "any", false, false, false, 142);
                // line 143
                yield "                        ";
                $context["catName"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 143, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 143, $this->source); })()), "title", [], "any", false, false, false, 143)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 144
                yield "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 144, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 144, $this->source); })()), "color", [], "any", false, false, false, 144))) : ("inherit"));
                // line 145
                yield "                        <span style=\"white-space: nowrap;\">
                          <span class=\"label label-default pa-4\" style=\"border:1px solid #d5d5d5;background:";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 146, $this->source); })()), "html", null, true);
                yield ";\"></span>
                          <span>";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 147, $this->source); })()), "html", null, true);
                yield "</span>
                        </span>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        <a href=\"";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "results", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 151, $this->source); })()), "id", [], "any", false, false, false, 151)]), "html", null, true);
                yield "\" data-toggle=\"ajax\" data-menu-link=\"mautic_form_index\" class=\"btn btn-primary btn-xs\" ";
                if ((0 == CoreExtension::getAttribute($this->env, $this->source, $context["i"], "submission_count", [], "any", false, false, false, 151))) {
                    yield "disabled=\"disabled\"";
                }
                yield ">";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.viewresults", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "submission_count", [], "array", false, false, false, 152)]), "html", null, true);
                // line 153
                yield "</a>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 155
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 155, $this->source); })()), "dateAdded", [], "any", false, false, false, 155)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 155, $this->source); })()), "dateAdded", [], "any", false, false, false, 155));
                }
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 156
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 156, $this->source); })()), "dateModified", [], "any", false, false, false, 156)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 156, $this->source); })()), "dateModified", [], "any", false, false, false, 156));
                }
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 157, $this->source); })()), "createdByUser", [], "any", false, false, false, 157), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 158, $this->source); })()), "id", [], "any", false, false, false, 158), "html", null, true);
                yield "</td>
                </tr>
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
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            yield "            </tbody>
        </table>
        <div class=\"panel-footer\">
            ";
            // line 164
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 165
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 165, $this->source); })()), "page" =>             // line 166
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 166, $this->source); })()), "limit" =>             // line 167
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 167, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_index"), "sessionVar" => "form"]);
            // line 170
            yield "
        </div>
    </div>
";
        } else {
            // line 174
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.form.noresults.tip"]);
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
        return "@MauticForm/Form/_list.html.twig";
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
        return array (  262 => 174,  256 => 170,  254 => 167,  253 => 166,  252 => 165,  251 => 164,  246 => 161,  229 => 158,  225 => 157,  219 => 156,  213 => 155,  209 => 153,  207 => 152,  200 => 151,  193 => 147,  189 => 146,  186 => 145,  183 => 144,  180 => 143,  178 => 142,  174 => 140,  168 => 137,  165 => 136,  163 => 135,  159 => 133,  153 => 131,  151 => 130,  147 => 129,  143 => 128,  139 => 127,  133 => 123,  131 => 117,  130 => 109,  129 => 101,  128 => 100,  127 => 99,  126 => 97,  125 => 96,  121 => 94,  118 => 93,  101 => 92,  95 => 88,  93 => 83,  89 => 81,  87 => 76,  83 => 74,  81 => 68,  77 => 66,  75 => 61,  71 => 59,  69 => 54,  65 => 52,  63 => 47,  59 => 45,  57 => 40,  53 => 38,  51 => 22,  50 => 17,  44 => 13,  42 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Form/_list.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Form/_list.html.twig");
    }
}
