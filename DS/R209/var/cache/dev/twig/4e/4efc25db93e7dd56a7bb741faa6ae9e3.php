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

/* user/_delete_form.html.twig */
class __TwigTemplate_2c269407685a328bdad913953c5502c7 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_delete_form.html.twig"));

        // line 1
        yield "<form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        yield "\" 
      onsubmit=\"return confirm('Confirmer la suppression ?');\" 
      style=\"display: inline; margin: 0; padding: 0; background: none; border: none;\">
    
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5))), "html", null, true);
        yield "\">

    <button type=\"submit\"
            class=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_class"]) || array_key_exists("button_class", $context) ? $context["button_class"] : (function () { throw new RuntimeError('Variable "button_class" does not exist.', 8, $this->source); })()), "btn btn-sm btn-danger d-inline-flex align-items-center")) : ("btn btn-sm btn-danger d-inline-flex align-items-center")), "html", null, true);
        yield "\"
            style=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_style", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_style"]) || array_key_exists("button_style", $context) ? $context["button_style"] : (function () { throw new RuntimeError('Variable "button_style" does not exist.', 9, $this->source); })()), "padding: 0.3rem 0.75rem; font-size: 0.875rem;")) : ("padding: 0.3rem 0.75rem; font-size: 0.875rem;")), "html", null, true);
        yield "\">
        <i class=\"bi bi-trash me-1\"></i> Supprimer
    </button>
</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/_delete_form.html.twig";
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
        return array (  66 => 9,  62 => 8,  56 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\" action=\"{{ path('app_user_delete', {'id': user.id}) }}\" 
      onsubmit=\"return confirm('Confirmer la suppression ?');\" 
      style=\"display: inline; margin: 0; padding: 0; background: none; border: none;\">
    
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">

    <button type=\"submit\"
            class=\"{{ button_class|default('btn btn-sm btn-danger d-inline-flex align-items-center') }}\"
            style=\"{{ button_style|default('padding: 0.3rem 0.75rem; font-size: 0.875rem;') }}\">
        <i class=\"bi bi-trash me-1\"></i> Supprimer
    </button>
</form>
", "user/_delete_form.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1_S2_2024_2025\\Cours_TD_TP\\R2.09 Initiation au développement Web\\DS\\R209\\templates\\user\\_delete_form.html.twig");
    }
}
