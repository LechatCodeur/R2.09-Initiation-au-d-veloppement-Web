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
            'javascripts' => [$this, 'block_javascripts'],
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
        yield "<div class=\"container mt-5\">
    <h1 class=\"mb-4\">📋 Tableau de bord – Notes filtrées avec <code>Criteria</code></h1>

    <div class=\"row g-4\">
        <!-- Notes en cours -->
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm border-0 h-100\" id=\"en_cours\">
                <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                    📌 Notes \"En cours\"
                    <span class=\"badge bg-light text-dark\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notes_en_cours"]) || array_key_exists("notes_en_cours", $context) ? $context["notes_en_cours"] : (function () { throw new RuntimeError('Variable "notes_en_cours" does not exist.', 15, $this->source); })())), "html", null, true);
        yield "</span>
                </div>
                <ul class=\"list-group list-group-flush\" id=\"list_en_cours\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notes_en_cours"]) || array_key_exists("notes_en_cours", $context) ? $context["notes_en_cours"] : (function () { throw new RuntimeError('Variable "notes_en_cours" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 19
            yield "                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\" class=\"text-decoration-none text-primary\">
                                ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["note"], "titre", [], "any", false, false, false, 21), "html", null, true);
            yield "
                            </a>
                            <span class=\"badge bg-warning text-dark\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["note"], "etat", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
            yield "</span>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 25
        if (!$context['_iterated']) {
            // line 26
            yield "                        <li class=\"list-group-item text-muted\">Aucune note en cours</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['note'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "                </ul>
            </div>
        </div>

        <!-- Notes urgentes -->
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm border-0 h-100\" id=\"urgentes\">
                <div class=\"card-header bg-danger text-white d-flex justify-content-between align-items-center\">
                    ⚡ Notes urgentes
                    <span class=\"badge bg-light text-dark\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notes_urgentes"]) || array_key_exists("notes_urgentes", $context) ? $context["notes_urgentes"] : (function () { throw new RuntimeError('Variable "notes_urgentes" does not exist.', 37, $this->source); })())), "html", null, true);
        yield "</span>
                </div>
                <ul class=\"list-group list-group-flush\" id=\"list_urgentes\">
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notes_urgentes"]) || array_key_exists("notes_urgentes", $context) ? $context["notes_urgentes"] : (function () { throw new RuntimeError('Variable "notes_urgentes" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 41
            yield "                        <li class=\"list-group-item\">
                            <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"text-decoration-none text-danger\">
                                ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["note"], "titre", [], "any", false, false, false, 43), "html", null, true);
            yield "
                            </a><br>
                            <small class=\"text-muted\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["note"], "etat", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
            yield "</small>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 47
        if (!$context['_iterated']) {
            // line 48
            yield "                        <li class=\"list-group-item text-muted\">Aucune note urgente</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['note'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "                </ul>
            </div>
        </div>

        <!-- Notes utilisateur -->
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm border-0 h-100\" id=\"utilisateur\">
                <div class=\"card-header bg-success text-white d-flex justify-content-between align-items-center\">
                    👤 Toutes vos notes
                    <span class=\"badge bg-light text-dark\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notes_utilisateur"]) || array_key_exists("notes_utilisateur", $context) ? $context["notes_utilisateur"] : (function () { throw new RuntimeError('Variable "notes_utilisateur" does not exist.', 59, $this->source); })())), "html", null, true);
        yield "</span>
                </div>
                <ul class=\"list-group list-group-flush\" id=\"list_utilisateur\">
                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notes_utilisateur"]) || array_key_exists("notes_utilisateur", $context) ? $context["notes_utilisateur"] : (function () { throw new RuntimeError('Variable "notes_utilisateur" does not exist.', 62, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 63
            yield "                        <li class=\"list-group-item\">
                            <a href=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            yield "\" class=\"text-decoration-none text-success\">
                                ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["note"], "titre", [], "any", false, false, false, 65), "html", null, true);
            yield "
                            </a><br>
                            <small class=\"text-muted\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["note"], "etat", [], "any", false, false, false, 67), "nom", [], "any", false, false, false, 67), "html", null, true);
            yield "</small>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 69
        if (!$context['_iterated']) {
            // line 70
            yield "                        <li class=\"list-group-item text-muted\">Aucune note trouvée</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['note'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                </ul>
            </div>
        </div>
    </div>

    <!-- Sélecteur de tri sous les cartes -->
    <div class=\"d-flex justify-content-end mb-4\">
        <div>
            <label for=\"sort\" class=\"form-label\">Trier par titre :</label>
            <select id=\"sort\" class=\"form-select\" aria-label=\"Trier les notes\">
                <option value=\"titre_asc\">Titre (A-Z)</option>
                <option value=\"titre_desc\">Titre (Z-A)</option>
            </select>
        </div>
    </div>
</div>

";
        // line 89
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 126
        yield "
<style>
    /* Ajout d'une barre de défilement pour les cartes */
    .card {
        max-height: 600px;
        overflow-y: auto;
    }

    @media (max-width: 600px) {
        .card {
            max-height: 300px;
            overflow-y: auto;
        }
    }

    /* Ajouter un style pour l'effet sur les liens cliquables */
    .text-decoration-none:hover {
        text-decoration: underline;
    }
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            const sortSelect = document.getElementById(\"sort\");
            
            // Fonction pour appliquer le tri
            sortSelect.addEventListener(\"change\", function() {
                const sortValue = sortSelect.value;
                const cards = Array.from(document.querySelectorAll(\".card\"));

                cards.forEach(card => {
                    const list = card.querySelector(\"ul\");
                    const items = Array.from(list.querySelectorAll(\"li\"));
                    
                    // Trier les éléments de la liste en fonction de l'option choisie
                    items.sort((a, b) => {
                        const textA = a.textContent.trim().toLowerCase();
                        const textB = b.textContent.trim().toLowerCase();

                        if (sortValue === \"titre_asc\") {
                            return textA.localeCompare(textB);
                        } else if (sortValue === \"titre_desc\") {
                            return textB.localeCompare(textA);
                        }
                    });

                    // Réorganiser les éléments dans l'UI après le tri
                    items.forEach(item => list.appendChild(item));
                });
            });

            // Appliquer le tri initial
            sortSelect.dispatchEvent(new Event(\"change\"));
        });
    </script>
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
        return array (  317 => 90,  304 => 89,  272 => 126,  270 => 89,  251 => 72,  244 => 70,  242 => 69,  235 => 67,  230 => 65,  226 => 64,  223 => 63,  218 => 62,  212 => 59,  201 => 50,  194 => 48,  192 => 47,  185 => 45,  180 => 43,  176 => 42,  173 => 41,  168 => 40,  162 => 37,  151 => 28,  144 => 26,  142 => 25,  135 => 23,  130 => 21,  126 => 20,  123 => 19,  118 => 18,  112 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
            <div class=\"card shadow-sm border-0 h-100\" id=\"en_cours\">
                <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                    📌 Notes \"En cours\"
                    <span class=\"badge bg-light text-dark\">{{ notes_en_cours|length }}</span>
                </div>
                <ul class=\"list-group list-group-flush\" id=\"list_en_cours\">
                    {% for note in notes_en_cours %}
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            <a href=\"{{ path('app_note_show', {id: note.id}) }}\" class=\"text-decoration-none text-primary\">
                                {{ note.titre }}
                            </a>
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
            <div class=\"card shadow-sm border-0 h-100\" id=\"urgentes\">
                <div class=\"card-header bg-danger text-white d-flex justify-content-between align-items-center\">
                    ⚡ Notes urgentes
                    <span class=\"badge bg-light text-dark\">{{ notes_urgentes|length }}</span>
                </div>
                <ul class=\"list-group list-group-flush\" id=\"list_urgentes\">
                    {% for note in notes_urgentes %}
                        <li class=\"list-group-item\">
                            <a href=\"{{ path('app_note_show', {id: note.id}) }}\" class=\"text-decoration-none text-danger\">
                                {{ note.titre }}
                            </a><br>
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
            <div class=\"card shadow-sm border-0 h-100\" id=\"utilisateur\">
                <div class=\"card-header bg-success text-white d-flex justify-content-between align-items-center\">
                    👤 Toutes vos notes
                    <span class=\"badge bg-light text-dark\">{{ notes_utilisateur|length }}</span>
                </div>
                <ul class=\"list-group list-group-flush\" id=\"list_utilisateur\">
                    {% for note in notes_utilisateur %}
                        <li class=\"list-group-item\">
                            <a href=\"{{ path('app_note_show', {id: note.id}) }}\" class=\"text-decoration-none text-success\">
                                {{ note.titre }}
                            </a><br>
                            <small class=\"text-muted\">{{ note.etat.nom }}</small>
                        </li>
                    {% else %}
                        <li class=\"list-group-item text-muted\">Aucune note trouvée</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>

    <!-- Sélecteur de tri sous les cartes -->
    <div class=\"d-flex justify-content-end mb-4\">
        <div>
            <label for=\"sort\" class=\"form-label\">Trier par titre :</label>
            <select id=\"sort\" class=\"form-select\" aria-label=\"Trier les notes\">
                <option value=\"titre_asc\">Titre (A-Z)</option>
                <option value=\"titre_desc\">Titre (Z-A)</option>
            </select>
        </div>
    </div>
</div>

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            const sortSelect = document.getElementById(\"sort\");
            
            // Fonction pour appliquer le tri
            sortSelect.addEventListener(\"change\", function() {
                const sortValue = sortSelect.value;
                const cards = Array.from(document.querySelectorAll(\".card\"));

                cards.forEach(card => {
                    const list = card.querySelector(\"ul\");
                    const items = Array.from(list.querySelectorAll(\"li\"));
                    
                    // Trier les éléments de la liste en fonction de l'option choisie
                    items.sort((a, b) => {
                        const textA = a.textContent.trim().toLowerCase();
                        const textB = b.textContent.trim().toLowerCase();

                        if (sortValue === \"titre_asc\") {
                            return textA.localeCompare(textB);
                        } else if (sortValue === \"titre_desc\") {
                            return textB.localeCompare(textA);
                        }
                    });

                    // Réorganiser les éléments dans l'UI après le tri
                    items.forEach(item => list.appendChild(item));
                });
            });

            // Appliquer le tri initial
            sortSelect.dispatchEvent(new Event(\"change\"));
        });
    </script>
{% endblock %}

<style>
    /* Ajout d'une barre de défilement pour les cartes */
    .card {
        max-height: 600px;
        overflow-y: auto;
    }

    @media (max-width: 600px) {
        .card {
            max-height: 300px;
            overflow-y: auto;
        }
    }

    /* Ajouter un style pour l'effet sur les liens cliquables */
    .text-decoration-none:hover {
        text-decoration: underline;
    }
</style>

{% endblock %}
", "dashboard/note.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1_S2_2024_2025\\Cours_TD_TP\\R2.09 Initiation au développement Web\\DS\\R209\\templates\\dashboard\\note.html.twig");
    }
}
