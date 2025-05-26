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

/* dashboard/note.html.twig */
class __TwigTemplate_c4f208dcd4b54fd6f733b7e3e8121fee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/note.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/note.html.twig"));

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

        yield "Tableau de bord – Notes";
        
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
        yield "
<div class=\"container mt-5\">
    <h1 class=\"mb-4\">📋 Tableau de bord – Notes filtrées avec <code>Criteria</code></h1>

    <div class=\"row g-4\">
        <!-- Notes en cours -->
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm border-0 h-100\">
                <div class=\"card-header bg-primary text-white\">
                    📌 Notes \"En cours\"
                </div>
                <ul class=\"list-group list-group-flush\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notes_en_cours"]) || array_key_exists("notes_en_cours", $context) ? $context["notes_en_cours"] : (function () { throw new RuntimeError('Variable "notes_en_cours" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 19
            yield "                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["note"], "titre", [], "any", false, false, false, 20), "html", null, true);
            yield "
                            <span class=\"badge bg-warning text-dark\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["note"], "etat", [], "any", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true);
            yield "</span>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 23
        if (!$context['_iterated']) {
            // line 24
            yield "                        <li class=\"list-group-item text-muted\">Aucune note en cours</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['note'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "                </ul>
            </div>
        </div>

        <!-- Notes urgentes -->
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm border-0 h-100\">
                <div class=\"card-header bg-danger text-white\">
                    ⚡ Notes urgentes
                </div>
                <ul class=\"list-group list-group-flush\">
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notes_urgentes"]) || array_key_exists("notes_urgentes", $context) ? $context["notes_urgentes"] : (function () { throw new RuntimeError('Variable "notes_urgentes" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 38
            yield "                        <li class=\"list-group-item\">
                            ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["note"], "titre", [], "any", false, false, false, 39), "html", null, true);
            yield "<br>
                            <small class=\"text-muted\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["note"], "etat", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
            yield "</small>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 42
        if (!$context['_iterated']) {
            // line 43
            yield "                        <li class=\"list-group-item text-muted\">Aucune note urgente</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['note'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                </ul>
            </div>
        </div>

        <!-- Notes utilisateur -->
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm border-0 h-100\">
                <div class=\"card-header bg-success text-white\">
                    👤 Toutes vos notes
                </div>
                <ul class=\"list-group list-group-flush\">
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notes_utilisateur"]) || array_key_exists("notes_utilisateur", $context) ? $context["notes_utilisateur"] : (function () { throw new RuntimeError('Variable "notes_utilisateur" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 57
            yield "                        <li class=\"list-group-item\">
                            ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["note"], "titre", [], "any", false, false, false, 58), "html", null, true);
            yield "<br>
                            <small class=\"text-muted\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["note"], "etat", [], "any", false, false, false, 59), "nom", [], "any", false, false, false, 59), "html", null, true);
            yield "</small>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 61
        if (!$context['_iterated']) {
            // line 62
            yield "                        <li class=\"list-group-item text-muted\">Aucune note trouvée</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['note'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                </ul>
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
        return "dashboard/note.html.twig";
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
        return array (  224 => 64,  217 => 62,  215 => 61,  208 => 59,  204 => 58,  201 => 57,  196 => 56,  183 => 45,  176 => 43,  174 => 42,  167 => 40,  163 => 39,  160 => 38,  155 => 37,  142 => 26,  135 => 24,  133 => 23,  126 => 21,  122 => 20,  119 => 19,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord – Notes{% endblock %}

{% block body %}

<div class=\"container mt-5\">
    <h1 class=\"mb-4\">📋 Tableau de bord – Notes filtrées avec <code>Criteria</code></h1>

    <div class=\"row g-4\">
        <!-- Notes en cours -->
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm border-0 h-100\">
                <div class=\"card-header bg-primary text-white\">
                    📌 Notes \"En cours\"
                </div>
                <ul class=\"list-group list-group-flush\">
                    {% for note in notes_en_cours %}
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            {{ note.titre }}
                            <span class=\"badge bg-warning text-dark\">{{ note.etat.nom }}</span>
                        </li>
                    {% else %}
                        <li class=\"list-group-item text-muted\">Aucune note en cours</li>
                    {% endfor %}
                </ul>
            </div>
        </div>

        <!-- Notes urgentes -->
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm border-0 h-100\">
                <div class=\"card-header bg-danger text-white\">
                    ⚡ Notes urgentes
                </div>
                <ul class=\"list-group list-group-flush\">
                    {% for note in notes_urgentes %}
                        <li class=\"list-group-item\">
                            {{ note.titre }}<br>
                            <small class=\"text-muted\">{{ note.etat.nom }}</small>
                        </li>
                    {% else %}
                        <li class=\"list-group-item text-muted\">Aucune note urgente</li>
                    {% endfor %}
                </ul>
            </div>
        </div>

        <!-- Notes utilisateur -->
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm border-0 h-100\">
                <div class=\"card-header bg-success text-white\">
                    👤 Toutes vos notes
                </div>
                <ul class=\"list-group list-group-flush\">
                    {% for note in notes_utilisateur %}
                        <li class=\"list-group-item\">
                            {{ note.titre }}<br>
                            <small class=\"text-muted\">{{ note.etat.nom }}</small>
                        </li>
                    {% else %}
                        <li class=\"list-group-item text-muted\">Aucune note trouvée</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "dashboard/note.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1_S2_2024_2025\\Cours_TD_TP\\R2.09 Initiation au développement Web\\DS\\R209\\templates\\dashboard\\note.html.twig");
    }
}
