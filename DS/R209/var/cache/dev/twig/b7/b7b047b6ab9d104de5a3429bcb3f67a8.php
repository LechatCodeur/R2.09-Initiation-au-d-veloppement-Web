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

/* note/show.html.twig */
class __TwigTemplate_b6a985d180a17e481c9e75c9f924f3e8 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Fiche de la note";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10\">

            <h1 class=\"text-dark mb-4\">Fiche de la note</h1>

            <div class=\"card shadow-sm border-0\">
                <div class=\"card-body bg-light text-dark\">
                    <table class=\"table table-bordered mb-0\">
                        <tbody>
                            <tr>
                                <th scope=\"row\">ID</th>
                                <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Titre</th>
                                <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Description</th>
                                <td>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Date de création</th>
                                <td>";
        // line 30
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 30, $this->source); })()), "createdAt", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 30, $this->source); })()), "createdAt", [], "any", false, false, false, 30), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Date de fin</th>
                                <td>";
        // line 34
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 34, $this->source); })()), "endAt", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 34, $this->source); })()), "endAt", [], "any", false, false, false, 34), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Priorité</th>
                                <td>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 38, $this->source); })()), "priorite", [], "any", false, false, false, 38), "html", null, true);
        yield "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"mt-4 d-flex flex-wrap gap-2 align-items-center\">
                <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_note_index");
        yield "\" 
                   class=\"btn btn-sm btn-secondary d-inline-flex align-items-center\" 
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-arrow-left-circle me-1\"></i> Retour
                </a>

                <a href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_note_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
        yield "\" 
                   class=\"btn btn-sm btn-primary d-inline-flex align-items-center\" 
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-pencil me-1\"></i> Modifier
                </a>

                <a href=\"#\"
                   onclick=\"event.preventDefault(); if (confirm('Confirmer la suppression ?')) { document.getElementById('delete-note-form').submit(); }\"
                   class=\"btn btn-sm btn-danger d-inline-flex align-items-center\"
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-trash me-1\"></i> Supprimer
                </a>

                <form id=\"delete-note-form\"
                      method=\"post\"
                      action=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_note_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
        yield "\"
                      style=\"display: none;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69))), "html", null, true);
        yield "\">
                </form>
            </div>

        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "note/show.html.twig";
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
        return array (  192 => 69,  187 => 67,  169 => 52,  160 => 46,  149 => 38,  142 => 34,  135 => 30,  128 => 26,  121 => 22,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fiche de la note{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10\">

            <h1 class=\"text-dark mb-4\">Fiche de la note</h1>

            <div class=\"card shadow-sm border-0\">
                <div class=\"card-body bg-light text-dark\">
                    <table class=\"table table-bordered mb-0\">
                        <tbody>
                            <tr>
                                <th scope=\"row\">ID</th>
                                <td>{{ note.id }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Titre</th>
                                <td>{{ note.titre }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Description</th>
                                <td>{{ note.description }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Date de création</th>
                                <td>{{ note.createdAt ? note.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Date de fin</th>
                                <td>{{ note.endAt ? note.endAt|date('Y-m-d H:i:s') : '' }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Priorité</th>
                                <td>{{ note.priorite }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"mt-4 d-flex flex-wrap gap-2 align-items-center\">
                <a href=\"{{ path('app_note_index') }}\" 
                   class=\"btn btn-sm btn-secondary d-inline-flex align-items-center\" 
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-arrow-left-circle me-1\"></i> Retour
                </a>

                <a href=\"{{ path('app_note_edit', {'id': note.id}) }}\" 
                   class=\"btn btn-sm btn-primary d-inline-flex align-items-center\" 
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-pencil me-1\"></i> Modifier
                </a>

                <a href=\"#\"
                   onclick=\"event.preventDefault(); if (confirm('Confirmer la suppression ?')) { document.getElementById('delete-note-form').submit(); }\"
                   class=\"btn btn-sm btn-danger d-inline-flex align-items-center\"
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-trash me-1\"></i> Supprimer
                </a>

                <form id=\"delete-note-form\"
                      method=\"post\"
                      action=\"{{ path('app_note_delete', {'id': note.id}) }}\"
                      style=\"display: none;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ note.id) }}\">
                </form>
            </div>

        </div>
    </div>
</div>
{% endblock %}
", "note/show.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1_S2_2024_2025\\Cours_TD_TP\\R2.09 Initiation au développement Web\\DS\\R209\\templates\\note\\show.html.twig");
    }
}
