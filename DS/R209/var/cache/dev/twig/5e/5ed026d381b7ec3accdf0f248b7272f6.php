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

/* user/index.html.twig */
class __TwigTemplate_6d9bfba3efdfa4b3824e0c78427f71f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

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

        yield "Liste des utilisateurs";
        
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
        yield "<div class=\"container mt-4\">
    <h1 class=\"mb-4\">Liste des utilisateurs</h1>

    <table class=\"table table-bordered table-striped shadow-sm\">
        <thead class=\"table-dark\">
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Rôles</th>
                <th>Mot de passe</th>
                <th>Vérifié</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            yield "            <tr>
                <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 28
            if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 28))) {
                // line 29
                yield "                        <ul class=\"mb-0 ps-3 text-dark\">
                            ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 31
                    yield "                                <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                    yield "</li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                yield "                        </ul>
                    ";
            } else {
                // line 35
                yield "                        <span class=\"text-muted\">Aucun</span>
                    ";
            }
            // line 37
            yield "                </td>
                <td><span class=\"text-muted\">••••••••</span></td>
                <td>
                    ";
            // line 40
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "                        <span class=\"badge bg-success\">Oui</span>
                    ";
            } else {
                // line 43
                yield "                        <span class=\"badge bg-danger\">Non</span>
                    ";
            }
            // line 45
            yield "                </td>
                <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\"
                       class=\"btn btn-sm btn-outline-primary me-1\"
                       title=\"Afficher\">
                        <i class=\"bi bi-eye\"></i>
                    </a>
                    <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\"
                       class=\"btn btn-sm btn-outline-warning\"
                       title=\"Modifier\">
                        <i class=\"bi bi-pencil\"></i>
                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 61
        if (!$context['_iterated']) {
            // line 62
            yield "            <tr>
                <td colspan=\"8\" class=\"text-center text-muted\">Aucun utilisateur trouvé.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\"
       class=\"btn btn-success mt-3 px-4 py-2 fw-bold shadow-sm\">
        <i class=\"bi bi-plus-circle\"></i> Créer un nouvel utilisateur
    </a>
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
        return "user/index.html.twig";
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
        return array (  225 => 69,  220 => 66,  211 => 62,  209 => 61,  197 => 54,  189 => 49,  184 => 47,  180 => 46,  177 => 45,  173 => 43,  169 => 41,  167 => 40,  162 => 37,  158 => 35,  154 => 33,  145 => 31,  141 => 30,  138 => 29,  136 => 28,  131 => 26,  127 => 25,  124 => 24,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des utilisateurs{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <h1 class=\"mb-4\">Liste des utilisateurs</h1>

    <table class=\"table table-bordered table-striped shadow-sm\">
        <thead class=\"table-dark\">
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Rôles</th>
                <th>Mot de passe</th>
                <th>Vérifié</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.email }}</td>
                <td>
                    {% if user.roles is iterable %}
                        <ul class=\"mb-0 ps-3 text-dark\">
                            {% for role in user.roles %}
                                <li>{{ role }}</li>
                            {% endfor %}
                        </ul>
                    {% else %}
                        <span class=\"text-muted\">Aucun</span>
                    {% endif %}
                </td>
                <td><span class=\"text-muted\">••••••••</span></td>
                <td>
                    {% if user.isVerified %}
                        <span class=\"badge bg-success\">Oui</span>
                    {% else %}
                        <span class=\"badge bg-danger\">Non</span>
                    {% endif %}
                </td>
                <td>{{ user.nom }}</td>
                <td>{{ user.prenom }}</td>
                <td>
                    <a href=\"{{ path('app_user_show', {'id': user.id}) }}\"
                       class=\"btn btn-sm btn-outline-primary me-1\"
                       title=\"Afficher\">
                        <i class=\"bi bi-eye\"></i>
                    </a>
                    <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\"
                       class=\"btn btn-sm btn-outline-warning\"
                       title=\"Modifier\">
                        <i class=\"bi bi-pencil\"></i>
                    </a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\" class=\"text-center text-muted\">Aucun utilisateur trouvé.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_user_new') }}\"
       class=\"btn btn-success mt-3 px-4 py-2 fw-bold shadow-sm\">
        <i class=\"bi bi-plus-circle\"></i> Créer un nouvel utilisateur
    </a>
</div>
{% endblock %}
", "user/index.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1_S2_2024_2025\\Cours_TD_TP\\R2.09 Initiation au développement Web\\DS\\R209\\templates\\user\\index.html.twig");
    }
}
