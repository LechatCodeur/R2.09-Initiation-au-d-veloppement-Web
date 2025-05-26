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

/* etat/edit.html.twig */
class __TwigTemplate_b5ad6eeff6b033692eabada21948962b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/edit.html.twig"));

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

        yield "Modifier un etat";
        
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
        <div class=\"col-md-8\">

            <h1 class=\"mb-4 text-dark\">Modifier l'etat</h1>

            <div class=\"card shadow-sm border-0\">
                <div class=\"card-body bg-light text-dark\">
                    ";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "etat/_form.html.twig", ["button_label" => "Mettre à jour"]);
        yield "
                </div>
            </div>

            <div class=\"mt-4 d-flex flex-wrap gap-2 align-items-center\">
                <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etat_index");
        yield "\"
                   class=\"btn btn-sm btn-secondary d-inline-flex align-items-center\"
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-arrow-left-circle me-1\"></i> Retour à la liste
                </a>

                <a href=\"#\"
                   onclick=\"event.preventDefault(); if (confirm('Confirmer la suppression ?')) { document.getElementById('delete-tag-form').submit(); }\"
                   class=\"btn btn-sm btn-danger d-inline-flex align-items-center\"
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-trash me-1\"></i> Supprimer
                </a>

                <form id=\"delete-etat-form\"
                      method=\"post\"
                      action=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etat_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        yield "\"
                      style=\"display: none;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36))), "html", null, true);
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
        return "etat/edit.html.twig";
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
        return array (  141 => 36,  136 => 34,  118 => 19,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier un etat{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">

            <h1 class=\"mb-4 text-dark\">Modifier l'etat</h1>

            <div class=\"card shadow-sm border-0\">
                <div class=\"card-body bg-light text-dark\">
                    {{ include('etat/_form.html.twig', {'button_label': 'Mettre à jour'}) }}
                </div>
            </div>

            <div class=\"mt-4 d-flex flex-wrap gap-2 align-items-center\">
                <a href=\"{{ path('app_etat_index') }}\"
                   class=\"btn btn-sm btn-secondary d-inline-flex align-items-center\"
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-arrow-left-circle me-1\"></i> Retour à la liste
                </a>

                <a href=\"#\"
                   onclick=\"event.preventDefault(); if (confirm('Confirmer la suppression ?')) { document.getElementById('delete-tag-form').submit(); }\"
                   class=\"btn btn-sm btn-danger d-inline-flex align-items-center\"
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-trash me-1\"></i> Supprimer
                </a>

                <form id=\"delete-etat-form\"
                      method=\"post\"
                      action=\"{{ path('app_etat_delete', {'id': etat.id}) }}\"
                      style=\"display: none;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ etat.id) }}\">
                </form>
            </div>

        </div>
    </div>
</div>
{% endblock %}
", "etat/edit.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1_S2_2024_2025\\Cours_TD_TP\\R2.09 Initiation au développement Web\\DS\\R209\\templates\\etat\\edit.html.twig");
    }
}
