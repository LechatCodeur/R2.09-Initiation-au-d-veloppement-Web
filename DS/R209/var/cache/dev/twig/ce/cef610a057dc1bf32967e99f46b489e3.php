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

/* dashboard/index.html.twig */
class __TwigTemplate_1ae823e6cb105ac73f8c649075e38a83 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

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

        yield "Dashboard";
        
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
        yield "<style>
    .dashboard-wrapper {
        margin: 2em auto;
        max-width: 900px;
        width: 95%;
        font: 18px/1.6 \"Segoe UI\", sans-serif;
    }
    .dashboard-section {
        margin-bottom: 40px;
    }
    .dashboard-section h2 {
        color: #f8f9fa;
        margin-bottom: 20px;
        font-size: 1.8rem;
        border-bottom: 2px solid rgba(255, 255, 255, 0.2);
        padding-bottom: 8px;
    }
    .dashboard-links {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
    }
    .dashboard-link {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(6px);
        border-radius: 8px;
        padding: 20px;
        text-align: center;
        color: #f8f9fa;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 0 12px rgba(0,0,0,0.3);
    }
    .dashboard-link:hover {
        background-color: rgba(13, 110, 253, 0.2);
        transform: translateY(-3px);
        box-shadow: 0 4px 20px rgba(13, 110, 253, 0.3);
    }
    .dashboard-link i {
        font-size: 2rem;
        display: block;
        margin-bottom: 10px;
    }

    .empty-placeholder {
        color: #adb5bd;
        font-size: 1rem;
        padding-left: 10px;
    }
</style>

<div class=\"dashboard-wrapper\">
    <h1>Bienvenue sur le Dashboard 👋</h1>

    <div class=\"dashboard-section\">
        <h2>Gestion des bases de données ⚙️</h2>
        <div class=\"dashboard-links\">
            <a href=\"/note\" class=\"dashboard-link\">
                <i class=\"bi bi-stickies\"></i>
                Gérer les Notes
            </a>
            <a href=\"/tag\" class=\"dashboard-link\">
                <i class=\"bi bi-tags\"></i>
                Gérer les Tags
            </a>
            <a href=\"/etat\" class=\"dashboard-link\">
                <i class=\"bi bi-journal-bookmark\"></i>
                Gérer les États
            </a>
            <a href=\"/vie/note\" class=\"dashboard-link\">
                <i class=\"bi bi-heart\"></i>
                VieNote
            </a>
        </div>
    </div>

    <div class=\"dashboard-section\">
        <h2>Gestion des utilisateurs 👥</h2>
        <div class=\"dashboard-links\">
            <a href=\"/user\" class=\"dashboard-link\">
                \t<i class=\"bi bi-people\"></i>
                Gestion des utilisateurs
            </a>
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
        return "dashboard/index.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}
<style>
    .dashboard-wrapper {
        margin: 2em auto;
        max-width: 900px;
        width: 95%;
        font: 18px/1.6 \"Segoe UI\", sans-serif;
    }
    .dashboard-section {
        margin-bottom: 40px;
    }
    .dashboard-section h2 {
        color: #f8f9fa;
        margin-bottom: 20px;
        font-size: 1.8rem;
        border-bottom: 2px solid rgba(255, 255, 255, 0.2);
        padding-bottom: 8px;
    }
    .dashboard-links {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
    }
    .dashboard-link {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(6px);
        border-radius: 8px;
        padding: 20px;
        text-align: center;
        color: #f8f9fa;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 0 12px rgba(0,0,0,0.3);
    }
    .dashboard-link:hover {
        background-color: rgba(13, 110, 253, 0.2);
        transform: translateY(-3px);
        box-shadow: 0 4px 20px rgba(13, 110, 253, 0.3);
    }
    .dashboard-link i {
        font-size: 2rem;
        display: block;
        margin-bottom: 10px;
    }

    .empty-placeholder {
        color: #adb5bd;
        font-size: 1rem;
        padding-left: 10px;
    }
</style>

<div class=\"dashboard-wrapper\">
    <h1>Bienvenue sur le Dashboard 👋</h1>

    <div class=\"dashboard-section\">
        <h2>Gestion des bases de données ⚙️</h2>
        <div class=\"dashboard-links\">
            <a href=\"/note\" class=\"dashboard-link\">
                <i class=\"bi bi-stickies\"></i>
                Gérer les Notes
            </a>
            <a href=\"/tag\" class=\"dashboard-link\">
                <i class=\"bi bi-tags\"></i>
                Gérer les Tags
            </a>
            <a href=\"/etat\" class=\"dashboard-link\">
                <i class=\"bi bi-journal-bookmark\"></i>
                Gérer les États
            </a>
            <a href=\"/vie/note\" class=\"dashboard-link\">
                <i class=\"bi bi-heart\"></i>
                VieNote
            </a>
        </div>
    </div>

    <div class=\"dashboard-section\">
        <h2>Gestion des utilisateurs 👥</h2>
        <div class=\"dashboard-links\">
            <a href=\"/user\" class=\"dashboard-link\">
                \t<i class=\"bi bi-people\"></i>
                Gestion des utilisateurs
            </a>
        </div>
    </div>
</div>
{% endblock %}
", "dashboard/index.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1_S2_2024_2025\\Cours_TD_TP\\R2.09 Initiation au développement Web\\DS\\R209\\templates\\dashboard\\index.html.twig");
    }
}
