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

/* security/login.html.twig */
class __TwigTemplate_427326bc001e1b77acc5e72809ad2fdc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Log in!";
        
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
        yield "    <form method=\"post\">
        ";
        // line 7
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageKey", [], "any", false, false, false, 8), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            yield "</div>
        ";
        }
        // line 10
        yield "
        ";
        // line 11
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "            <!-- Card principale avec informations de l'utilisateur -->
            <div class=\"card mb-4 shadow-sm\">
                <div class=\"card-header bg-primary text-white\">
                    <h3>Bienvenue, ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "prenom", [], "any", false, false, false, 15), "html", null, true);
            yield "</h3>
                </div>
                <div class=\"card-body\">

                    <!-- Card pour les informations personnelles -->
                    <div class=\"card mb-3 shadow-sm\">
                        <div class=\"card-header bg-info text-white\">
                            <h5>Informations personnelles</h5>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Nom:</strong> ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "nom", [], "any", false, false, false, 26), "html", null, true);
            yield "</li>
                                <li><strong>Prénom:</strong> ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "prenom", [], "any", false, false, false, 27), "html", null, true);
            yield "</li>
                                <li><strong>Email:</strong> ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "email", [], "any", false, false, false, 28), "html", null, true);
            yield "</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card pour les rôles -->
                    <div class=\"card mb-3 shadow-sm\">
                        <div class=\"card-header bg-warning text-dark\">
                            <h5>Rôles</h5>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Rôle(s):</strong> ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "roles", [], "any", false, false, false, 40), ", "), "html", null, true);
            yield "</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card pour le bouton de déconnexion -->
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body text-center\">
                            <a href=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn btn-danger btn-lg\">Se déconnecter</a>
                        </div>
                    </div>

                </div>
            </div>
        ";
        } else {
            // line 55
            yield "            <!-- Formulaire de connexion affiché seulement si l'utilisateur n'est pas connecté -->
            <h1 class=\"h3 mb-3 font-weight-normal\">Veuillez vous connecter</h1>
            <label for=\"username\">Email</label>
            <input type=\"email\" value=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 58, $this->source); })()), "html", null, true);
            yield "\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"email\" required autofocus>
            <label for=\"password\">Mot de passe</label>
            <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>
            <input type=\"hidden\" name=\"_csrf_token\" data-controller=\"csrf-protection\" value=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            yield "\">

            ";
            // line 72
            yield "
            <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                Connexion
            </button>
        ";
        }
        // line 77
        yield "    </form>
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
        return "security/login.html.twig";
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
        return array (  204 => 77,  197 => 72,  192 => 61,  186 => 58,  181 => 55,  171 => 48,  160 => 40,  145 => 28,  141 => 27,  137 => 26,  121 => 15,  116 => 12,  114 => 11,  111 => 10,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
    <form method=\"post\">
        {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}

        {% if app.user %}
            <!-- Card principale avec informations de l'utilisateur -->
            <div class=\"card mb-4 shadow-sm\">
                <div class=\"card-header bg-primary text-white\">
                    <h3>Bienvenue, {{ app.user.nom }} {{ app.user.prenom }}</h3>
                </div>
                <div class=\"card-body\">

                    <!-- Card pour les informations personnelles -->
                    <div class=\"card mb-3 shadow-sm\">
                        <div class=\"card-header bg-info text-white\">
                            <h5>Informations personnelles</h5>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Nom:</strong> {{ app.user.nom }}</li>
                                <li><strong>Prénom:</strong> {{ app.user.prenom }}</li>
                                <li><strong>Email:</strong> {{ app.user.email }}</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card pour les rôles -->
                    <div class=\"card mb-3 shadow-sm\">
                        <div class=\"card-header bg-warning text-dark\">
                            <h5>Rôles</h5>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"list-unstyled\">
                                <li><strong>Rôle(s):</strong> {{ app.user.roles | join(', ') }}</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card pour le bouton de déconnexion -->
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body text-center\">
                            <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger btn-lg\">Se déconnecter</a>
                        </div>
                    </div>

                </div>
            </div>
        {% else %}
            <!-- Formulaire de connexion affiché seulement si l'utilisateur n'est pas connecté -->
            <h1 class=\"h3 mb-3 font-weight-normal\">Veuillez vous connecter</h1>
            <label for=\"username\">Email</label>
            <input type=\"email\" value=\"{{ last_username }}\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"email\" required autofocus>
            <label for=\"password\">Mot de passe</label>
            <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>
            <input type=\"hidden\" name=\"_csrf_token\" data-controller=\"csrf-protection\" value=\"{{ csrf_token('authenticate') }}\">

            {#
                Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                See https://symfony.com/doc/current/security/remember_me.html

                <div class=\"checkbox mb-3\">
                    <input type=\"checkbox\" name=\"_remember_me\" id=\"_remember_me\">
                    <label for=\"_remember_me\">Se souvenir de moi</label>
                </div>
            #}

            <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                Connexion
            </button>
        {% endif %}
    </form>
{% endblock %}
", "security/login.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1_S2_2024_2025\\Cours_TD_TP\\R2.09 Initiation au développement Web\\DS\\R209\\templates\\security\\login.html.twig");
    }
}
