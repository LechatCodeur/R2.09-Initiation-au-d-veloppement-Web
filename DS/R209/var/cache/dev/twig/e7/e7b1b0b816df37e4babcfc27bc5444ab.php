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

/* tag/show.html.twig */
class __TwigTemplate_c8b0e45eed5c1ac6c6a7d16f51e2fb8d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

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

        yield "Fiche du tag";
        
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

            <h1 class=\"text-dark mb-4\">Fiche du tag</h1>

            <div class=\"card shadow-sm border-0\">
                <div class=\"card-body bg-light text-dark\">
                    <table class=\"table table-bordered mb-0\">
                        <tbody>
                            <tr>
                                <th scope=\"row\">ID</th>
                                <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Nom</th>
                                <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"mt-4 d-flex flex-wrap gap-2 align-items-center\">
                <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_index");
        yield "\" 
                   class=\"btn btn-sm btn-secondary d-inline-flex align-items-center\" 
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-arrow-left-circle me-1\"></i> Retour
                </a>

                <a href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        yield "\" 
                   class=\"btn btn-sm btn-primary d-inline-flex align-items-center\" 
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-pencil me-1\"></i> Modifier
                </a>

                <a href=\"#\"
                   onclick=\"event.preventDefault(); if (confirm('Confirmer la suppression ?')) { document.getElementById('delete-tag-form').submit(); }\"
                   class=\"btn btn-sm btn-danger d-inline-flex align-items-center\"
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-trash me-1\"></i> Supprimer
                </a>

                <form id=\"delete-tag-form\"
                      method=\"post\"
                      action=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        yield "\"
                      style=\"display: none;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53))), "html", null, true);
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
        return "tag/show.html.twig";
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
        return array (  164 => 53,  159 => 51,  141 => 36,  132 => 30,  121 => 22,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fiche du tag{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">

            <h1 class=\"text-dark mb-4\">Fiche du tag</h1>

            <div class=\"card shadow-sm border-0\">
                <div class=\"card-body bg-light text-dark\">
                    <table class=\"table table-bordered mb-0\">
                        <tbody>
                            <tr>
                                <th scope=\"row\">ID</th>
                                <td>{{ tag.id }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Nom</th>
                                <td>{{ tag.nom }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"mt-4 d-flex flex-wrap gap-2 align-items-center\">
                <a href=\"{{ path('app_tag_index') }}\" 
                   class=\"btn btn-sm btn-secondary d-inline-flex align-items-center\" 
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-arrow-left-circle me-1\"></i> Retour
                </a>

                <a href=\"{{ path('app_tag_edit', {'id': tag.id}) }}\" 
                   class=\"btn btn-sm btn-primary d-inline-flex align-items-center\" 
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-pencil me-1\"></i> Modifier
                </a>

                <a href=\"#\"
                   onclick=\"event.preventDefault(); if (confirm('Confirmer la suppression ?')) { document.getElementById('delete-tag-form').submit(); }\"
                   class=\"btn btn-sm btn-danger d-inline-flex align-items-center\"
                   style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-trash me-1\"></i> Supprimer
                </a>

                <form id=\"delete-tag-form\"
                      method=\"post\"
                      action=\"{{ path('app_tag_delete', {'id': tag.id}) }}\"
                      style=\"display: none;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ tag.id) }}\">
                </form>
            </div>

        </div>
    </div>
</div>
{% endblock %}
", "tag/show.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1_S2_2024_2025\\Cours_TD_TP\\R2.09 Initiation au développement Web\\DS\\R209\\templates\\tag\\show.html.twig");
    }
}
