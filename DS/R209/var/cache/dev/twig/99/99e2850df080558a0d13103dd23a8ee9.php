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

/* user/show.html.twig */
class __TwigTemplate_225359cea5e783f2cd9388bc6a268348 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

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

        yield "Fiche utilisateur";
        
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

            <h1 class=\"text-dark mb-4\">Fiche de l'utilisateur</h1>

            <div class=\"card shadow-sm border-0\">
                <div class=\"card-body bg-light text-dark\">
                    <table class=\"table table-bordered mb-0\">
                        <tbody>
                            <tr>
                                <th scope=\"row\">ID</th>
                                <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Email</th>
                                <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Rôles</th>
                                <td><code class=\"text-dark\">";
        // line 26
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "roles", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "roles", [], "any", false, false, false, 26)), "html", null, true)) : (""));
        yield "</code></td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Mot de passe</th>
                                <td><span class=\"text-muted\">••••••••</span></td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Vérifié</th>
                                <td>
                                    ";
        // line 35
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "isVerified", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "                                        <span class=\"badge bg-success text-light\">Oui</span>
                                    ";
        } else {
            // line 38
            yield "                                        <span class=\"badge bg-danger text-light\">Non</span>
                                    ";
        }
        // line 40
        yield "                                </td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Nom</th>
                                <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "nom", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Prénom</th>
                                <td>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "prenom", [], "any", false, false, false, 48), "html", null, true);
        yield "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"mt-4 d-flex flex-wrap gap-2 align-items-center\">
                <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" 
                class=\"btn btn-sm btn-secondary d-inline-flex align-items-center\" 
                style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-arrow-left-circle me-1\"></i> Retour
                </a>

                <a href=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
        yield "\" 
                class=\"btn btn-sm btn-primary d-inline-flex align-items-center\" 
                style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-pencil me-1\"></i> Modifier
                </a>

                <a href=\"#\"
                onclick=\"event.preventDefault(); if (confirm('Confirmer la suppression ?')) { document.getElementById('delete-user-form').submit(); }\"
                class=\"btn btn-sm btn-danger d-inline-flex align-items-center\"
                style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-trash me-1\"></i> Supprimer
                </a>

                <form id=\"delete-user-form\"
                    method=\"post\"
                    action=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
        yield "\"
                    style=\"display: none;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79))), "html", null, true);
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
        return "user/show.html.twig";
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
        return array (  206 => 79,  201 => 77,  183 => 62,  174 => 56,  163 => 48,  156 => 44,  150 => 40,  146 => 38,  142 => 36,  140 => 35,  128 => 26,  121 => 22,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fiche utilisateur{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10\">

            <h1 class=\"text-dark mb-4\">Fiche de l'utilisateur</h1>

            <div class=\"card shadow-sm border-0\">
                <div class=\"card-body bg-light text-dark\">
                    <table class=\"table table-bordered mb-0\">
                        <tbody>
                            <tr>
                                <th scope=\"row\">ID</th>
                                <td>{{ user.id }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Email</th>
                                <td>{{ user.email }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Rôles</th>
                                <td><code class=\"text-dark\">{{ user.roles ? user.roles|json_encode : '' }}</code></td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Mot de passe</th>
                                <td><span class=\"text-muted\">••••••••</span></td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Vérifié</th>
                                <td>
                                    {% if user.isVerified %}
                                        <span class=\"badge bg-success text-light\">Oui</span>
                                    {% else %}
                                        <span class=\"badge bg-danger text-light\">Non</span>
                                    {% endif %}
                                </td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Nom</th>
                                <td>{{ user.nom }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Prénom</th>
                                <td>{{ user.prenom }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"mt-4 d-flex flex-wrap gap-2 align-items-center\">
                <a href=\"{{ path('app_user_index') }}\" 
                class=\"btn btn-sm btn-secondary d-inline-flex align-items-center\" 
                style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-arrow-left-circle me-1\"></i> Retour
                </a>

                <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" 
                class=\"btn btn-sm btn-primary d-inline-flex align-items-center\" 
                style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-pencil me-1\"></i> Modifier
                </a>

                <a href=\"#\"
                onclick=\"event.preventDefault(); if (confirm('Confirmer la suppression ?')) { document.getElementById('delete-user-form').submit(); }\"
                class=\"btn btn-sm btn-danger d-inline-flex align-items-center\"
                style=\"padding: 0.3rem 0.75rem; font-size: 0.875rem;\">
                    <i class=\"bi bi-trash me-1\"></i> Supprimer
                </a>

                <form id=\"delete-user-form\"
                    method=\"post\"
                    action=\"{{ path('app_user_delete', {'id': user.id}) }}\"
                    style=\"display: none;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "user/show.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1_S2_2024_2025\\Cours_TD_TP\\R2.09 Initiation au développement Web\\DS\\R209\\templates\\user\\show.html.twig");
    }
}
