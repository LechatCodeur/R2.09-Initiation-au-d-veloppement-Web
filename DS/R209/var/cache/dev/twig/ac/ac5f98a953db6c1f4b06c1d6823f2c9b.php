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

/* etat/index.html.twig */
class __TwigTemplate_24d47f06b2b630a41c7a7b7f03292a9b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/index.html.twig"));

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

        yield "Liste des États";
        
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
        yield "    <h1 class=\"mb-4\">Liste des États</h1>

    <table class=\"table table-bordered table-striped shadow-sm\">
        <thead class=\"table-dark\">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Couleur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["etats"]) || array_key_exists("etats", $context) ? $context["etats"] : (function () { throw new RuntimeError('Variable "etats" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
            // line 19
            yield "            <tr>
                <td class=\"align-middle\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etat"], "id", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                <td class=\"align-middle\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etat"], "nom", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                <td class=\"align-middle\">
                    <span class=\"d-inline-block rounded-circle\"
                          style=\"width: 20px; height: 20px; background-color: ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etat"], "couleur", [], "any", false, false, false, 24), "html", null, true);
            yield "; border: 1px solid #000;\"
                          title=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etat"], "couleur", [], "any", false, false, false, 25), "html", null, true);
            yield "\">
                    </span>
                    <small class=\"ms-2 text-muted\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etat"], "couleur", [], "any", false, false, false, 27), "html", null, true);
            yield "</small>
                </td>
                <td>
                    <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etat_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["etat"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\"
                       class=\"btn btn-sm btn-outline-primary me-1\" title=\"Afficher\">
                        <i class=\"bi bi-eye\"></i>
                    </a>
                    <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etat_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["etat"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\"
                       class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                        <i class=\"bi bi-pencil\"></i>
                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 40
        if (!$context['_iterated']) {
            // line 41
            yield "            <tr>
                <td colspan=\"4\" class=\"text-center text-muted\">Aucun état trouvé.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['etat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etat_new");
        yield "\"
       class=\"btn btn-success mt-3 px-4 py-2 fw-bold shadow-sm\">
        <i class=\"bi bi-plus-circle\"></i> Créer un nouvelle etat
    </a>
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
        return "etat/index.html.twig";
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
        return array (  181 => 48,  176 => 45,  167 => 41,  165 => 40,  154 => 34,  147 => 30,  141 => 27,  136 => 25,  132 => 24,  126 => 21,  122 => 20,  119 => 19,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des États{% endblock %}

{% block body %}
    <h1 class=\"mb-4\">Liste des États</h1>

    <table class=\"table table-bordered table-striped shadow-sm\">
        <thead class=\"table-dark\">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Couleur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for etat in etats %}
            <tr>
                <td class=\"align-middle\">{{ etat.id }}</td>
                <td class=\"align-middle\">{{ etat.nom }}</td>
                <td class=\"align-middle\">
                    <span class=\"d-inline-block rounded-circle\"
                          style=\"width: 20px; height: 20px; background-color: {{ etat.couleur }}; border: 1px solid #000;\"
                          title=\"{{ etat.couleur }}\">
                    </span>
                    <small class=\"ms-2 text-muted\">{{ etat.couleur }}</small>
                </td>
                <td>
                    <a href=\"{{ path('app_etat_show', {'id': etat.id}) }}\"
                       class=\"btn btn-sm btn-outline-primary me-1\" title=\"Afficher\">
                        <i class=\"bi bi-eye\"></i>
                    </a>
                    <a href=\"{{ path('app_etat_edit', {'id': etat.id}) }}\"
                       class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                        <i class=\"bi bi-pencil\"></i>
                    </a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\" class=\"text-center text-muted\">Aucun état trouvé.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_etat_new') }}\"
       class=\"btn btn-success mt-3 px-4 py-2 fw-bold shadow-sm\">
        <i class=\"bi bi-plus-circle\"></i> Créer un nouvelle etat
    </a>
{% endblock %}
", "etat/index.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1_S2_2024_2025\\Cours_TD_TP\\R2.09 Initiation au développement Web\\DS\\R209\\templates\\etat\\index.html.twig");
    }
}
