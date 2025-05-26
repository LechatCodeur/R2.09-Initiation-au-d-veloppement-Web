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

/* etat/_form.html.twig */
class __TwigTemplate_42a5d14ef47efb0d4b0e8364618b4c81 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "bg-light p-4 rounded shadow-sm"]]);
        yield "

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 4
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4) != "_token")) {
                // line 5
                yield "        <div class=\"mb-3\">
            ";
                // line 6
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "form-label text-dark"]]);
                yield "

            ";
                // line 9
                yield "            ";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 9), "block_prefixes", [], "any", true, true, false, 9) && CoreExtension::inFilter("checkbox", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 9), "block_prefixes", [], "any", false, false, false, 9))) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9) != "roles"))) {
                    // line 10
                    yield "                <div class=\"form-check\">
                    ";
                    // line 11
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-check-input"]]);
                    yield "
                    ";
                    // line 12
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "form-check-label text-dark"]]);
                    yield "
                </div>

            ";
                    // line 16
                    yield "            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16) == "roles")) {
                    // line 17
                    yield "                <div class=\"form-check-group\">
                    ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["field"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                        // line 19
                        yield "                        <div class=\"form-check\">
                            ";
                        // line 20
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'widget', ["attr" => ["class" => "form-check-input"]]);
                        yield "
                            ";
                        // line 21
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'label', ["label_attr" => ["class" => "form-check-label text-dark"]]);
                        yield "
                        </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    yield "                </div>

            ";
                    // line 27
                    yield "            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 27), "block_prefixes", [], "any", true, true, false, 27) && CoreExtension::inFilter("color", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 27), "block_prefixes", [], "any", false, false, false, 27)))) {
                    // line 28
                    yield "                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control-color", "style" => "width: 60px; height: 38px; padding: 4px; border: 1px solid #ccc; background: #fff;"]]);
                    // line 33
                    yield "

            ";
                    // line 36
                    yield "            ";
                } else {
                    // line 37
                    yield "                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control bg-white text-dark"]]);
                    yield "
            ";
                }
                // line 39
                yield "
            ";
                // line 40
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
                yield "
        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "
<button type=\"submit\" class=\"btn btn-dark mt-3 px-4 py-2 fw-bold shadow-sm\">
    ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 46, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
</button>

";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        yield "
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
        return "etat/_form.html.twig";
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
        return array (  156 => 49,  150 => 46,  146 => 44,  136 => 40,  133 => 39,  127 => 37,  124 => 36,  120 => 33,  117 => 28,  114 => 27,  110 => 24,  101 => 21,  97 => 20,  94 => 19,  90 => 18,  87 => 17,  84 => 16,  78 => 12,  74 => 11,  71 => 10,  68 => 9,  63 => 6,  60 => 5,  57 => 4,  53 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'bg-light p-4 rounded shadow-sm'}}) }}

{% for field in form %}
    {% if field.vars.name != '_token' %}
        <div class=\"mb-3\">
            {{ form_label(field, null, {'label_attr': {'class': 'form-label text-dark'}}) }}

            {# Champ booléen (checkbox) #}
            {% if field.vars.block_prefixes is defined and 'checkbox' in field.vars.block_prefixes and field.vars.name != 'roles' %}
                <div class=\"form-check\">
                    {{ form_widget(field, {'attr': {'class': 'form-check-input'}}) }}
                    {{ form_label(field, null, {'label_attr': {'class': 'form-check-label text-dark'}}) }}
                </div>

            {# Champ rôles (checkbox multiples) #}
            {% elseif field.vars.name == 'roles' %}
                <div class=\"form-check-group\">
                    {% for choice in field %}
                        <div class=\"form-check\">
                            {{ form_widget(choice, {'attr': {'class': 'form-check-input'}}) }}
                            {{ form_label(choice, null, {'label_attr': {'class': 'form-check-label text-dark'}}) }}
                        </div>
                    {% endfor %}
                </div>

            {# Champ couleur (color picker) #}
            {% elseif field.vars.block_prefixes is defined and 'color' in field.vars.block_prefixes %}
                {{ form_widget(field, {
                    'attr': {
                        'class': 'form-control-color',
                        'style': 'width: 60px; height: 38px; padding: 4px; border: 1px solid #ccc; background: #fff;'
                    }
                }) }}

            {# Champ classique (text, email, password, etc.) #}
            {% else %}
                {{ form_widget(field, {'attr': {'class': 'form-control bg-white text-dark'}}) }}
            {% endif %}

            {{ form_errors(field) }}
        </div>
    {% endif %}
{% endfor %}

<button type=\"submit\" class=\"btn btn-dark mt-3 px-4 py-2 fw-bold shadow-sm\">
    {{ button_label|default('Enregistrer') }}
</button>

{{ form_end(form) }}
", "etat/_form.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1_S2_2024_2025\\Cours_TD_TP\\R2.09 Initiation au développement Web\\DS\\R209\\templates\\etat\\_form.html.twig");
    }
}
