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

/* base.html.twig */
class __TwigTemplate_0e1707a57575f4cb17aced7e3fa9b64c extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Bootswatch Zephyr (clair) -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/zephyr/bootstrap.min.css\" rel=\"stylesheet\" />

    <!-- Bootstrap Icons -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\" rel=\"stylesheet\" />

    <style>
        form {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 25px;
    border-radius: 8px;
    backdrop-filter: blur(6px);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
    margin-top: 20px;
    }

    form .form-group {
        margin-bottom: 20px;
    }

    form label {
        color: #f8f9fa;
        font-weight: 500;
        margin-bottom: 8px;
        display: block;
    }

    form .form-control,
    form .form-select {
        background-color: rgba(255, 255, 255, 0.9);
        color: #212529;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        padding: 10px;
        width: 100%;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    form .form-control:focus,
    form .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
        background-color: white;
    }

    form .form-text {
        color: #ced4da;
        font-size: 0.9rem;
    }

    form button,
    form .btn {
        background-color: #0d6efd;
        color: white;
        font-weight: 600;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        margin-top: 10px;
        transition: background-color 0.3s ease;
    }

    form button:hover,
    form .btn:hover {
        background-color: #084cdf;
    }


        /* Fond étoilé animé (canvas) */
        #starfield {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            z-index: -1;
            background-color: #000011;
        }

        /* Navbar sombre fixe en haut */
        .navbar {
            background-color: #1a1f2a !important;
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 1030;
            box-shadow: 0 2px 8px rgba(0,0,0,0.5);
        }
        .navbar .navbar-brand,
        .navbar .nav-link {
            color: #f8f9fa !important;
            font-weight: 500;
            display: flex;
            align-items: center;
        }
        .navbar .nav-link:hover {
            color: #adb5bd !important;
        }
        .nav-link .bi {
            margin-right: 6px;
            font-size: 1.2rem;
        }

        /* Body & container principal */
        body {
            padding-top: 56px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: #f8f9fa;
            font-family: \"Segoe UI\", Tahoma, Geneva, Verdana, sans-serif;
            background-color: transparent;
        }
        .container {
            flex: 1 0 auto;
            padding: 20px;
            max-width: 1200px;
            margin: 20px auto;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
            color: #212529; /* texte sombre dans container clair */
            backdrop-filter: blur(10px);
        }

        h1, h2, h3, h4, h5, h6 {
            color: #f8f9fa !important; /* Blanc cassé */
            text-shadow: 0 0 6px rgba(0,0,0,0.7);

        /* Tables */
        table.table {
            background-color: rgba(255, 255, 255, 0.9) !important; /* Fond blanc translucide */
            color: #212529 !important; /* Texte sombre */
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        thead th {
            background-color: rgba(0,0,0,0.6);
            color: #f1f1f1 !important;
            padding: 12px 15px;
            border-bottom: 2px solid rgba(255,255,255,0.3);
            text-align: left;
        }
        tbody td {
            padding: 12px 15px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        tbody tr:hover {
            background-color: rgba(13, 110, 253, 0.1);
        }

        /* Liens dans tableaux */
        tbody a {
            color: #0d6efd;
            font-weight: 600;
            text-decoration: none;
            margin-right: 10px;
        }
        tbody a:hover {
            text-decoration: underline;
        }

        /* Boutons / liens \"Create new\" */
        .btn-create-new {
            display: inline-block;
            margin-top: 1rem;
            padding: 10px 20px;
            background-color: #0d6efd;
            color: white;
            font-weight: 600;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn-create-new:hover {
            background-color: #084cdf;
        }

        /* Footer */
        footer {
            background-color: #1a1f2a;
            color: #f8f9fa;
            text-align: center;
            padding: 15px 0;
            border-top: 1px solid #343a40;
            font-size: 14px;
            flex-shrink: 0;
            box-shadow: 0 -2px 8px rgba(0,0,0,0.5);
        }

        /* Alert spacing */
        .alert {
            margin-top: 20px;
        }
    </style>

    ";
        // line 200
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 201
        yield "</head>
<body>
    <canvas id=\"starfield\"></canvas>

    <nav class=\"navbar navbar-expand-lg navbar-dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                <i class=\"bi bi-journal-text\"></i> 📝 R209
            </a>
            <button
                class=\"navbar-toggler\"
                type=\"button\"
                data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarNav\"
                aria-controls=\"navbarNav\"
                aria-expanded=\"false\"
                aria-label=\"Toggle navigation\"
            >
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 224
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                            <i class=\"bi bi-speedometer2\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a
                            class=\"nav-link dropdown-toggle\"
                            href=\"#\"
                            id=\"connexionDropdown\"
                            role=\"button\"
                            data-bs-toggle=\"dropdown\"
                            aria-expanded=\"false\"
                        >
                            <i class=\"bi bi-box-arrow-in-right\"></i> Connexion
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"connexionDropdown\">
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 241
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                                    <i class=\"bi bi-person-circle\"></i> Login
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 246
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                                    <i class=\"bi bi-pencil-square\"></i> Register
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container\">
        ";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 258, $this->source); })()), "flashes", ["success"], "method", false, false, false, 258));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 259
            yield "            <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        yield "
        ";
        // line 262
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 263
        yield "    </div>

    <footer>
        © ";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " R209 - Sanchez Durante Hugo 🚀
    </footer>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>

    <script>
        (() => {
            const canvas = document.getElementById('starfield');
            const ctx = canvas.getContext('2d');
            let width, height, stars;

            function init() {
                resize();
                stars = [];
                for (let i = 0; i < 150; i++) {
                    stars.push({
                        x: Math.random() * width,
                        y: Math.random() * height,
                        radius: Math.random() * 1.2 + 0.3,
                        vx: (Math.random() - 0.5) * 0.15,
                        vy: (Math.random() - 0.5) * 0.15,
                        alpha: Math.random(),
                        alphaChange: Math.random() * 0.02 + 0.005,
                    });
                }
                requestAnimationFrame(animate);
            }

            function resize() {
                width = window.innerWidth;
                height = window.innerHeight;
                canvas.width = width;
                canvas.height = height;
            }

            window.addEventListener('resize', () => {
                resize();
            });

            function animate() {
                ctx.clearRect(0, 0, width, height);

                for (let star of stars) {
                    star.x += star.vx;
                    star.y += star.vy;

                    if (star.x < 0 || star.x > width) star.vx = -star.vx;
                    if (star.y < 0 || star.y > height) star.vy = -star.vy;

                    star.alpha += star.alphaChange;
                    if (star.alpha <= 0) {
                        star.alpha = 0;
                        star.alphaChange = -star.alphaChange;
                    } else if (star.alpha >= 1) {
                        star.alpha = 1;
                        star.alphaChange = -star.alphaChange;
                    }

                    ctx.beginPath();
                    ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
                    ctx.fillStyle = `rgba(255, 255, 255, \${star.alpha})`;
                    ctx.shadowColor = 'white';
                    ctx.shadowBlur = 4;
                    ctx.fill();
                }

                requestAnimationFrame(animate);
            }

            init();
        })();
    </script>

    ";
        // line 339
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 340
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Mon Application Symfony";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 200
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 262
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 339
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  510 => 339,  488 => 262,  466 => 200,  443 => 5,  430 => 340,  428 => 339,  352 => 266,  347 => 263,  345 => 262,  342 => 261,  333 => 259,  329 => 258,  314 => 246,  306 => 241,  286 => 224,  266 => 207,  258 => 201,  256 => 200,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Mon Application Symfony{% endblock %}</title>

    <!-- Bootswatch Zephyr (clair) -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/zephyr/bootstrap.min.css\" rel=\"stylesheet\" />

    <!-- Bootstrap Icons -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\" rel=\"stylesheet\" />

    <style>
        form {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 25px;
    border-radius: 8px;
    backdrop-filter: blur(6px);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
    margin-top: 20px;
    }

    form .form-group {
        margin-bottom: 20px;
    }

    form label {
        color: #f8f9fa;
        font-weight: 500;
        margin-bottom: 8px;
        display: block;
    }

    form .form-control,
    form .form-select {
        background-color: rgba(255, 255, 255, 0.9);
        color: #212529;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        padding: 10px;
        width: 100%;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    form .form-control:focus,
    form .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
        background-color: white;
    }

    form .form-text {
        color: #ced4da;
        font-size: 0.9rem;
    }

    form button,
    form .btn {
        background-color: #0d6efd;
        color: white;
        font-weight: 600;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        margin-top: 10px;
        transition: background-color 0.3s ease;
    }

    form button:hover,
    form .btn:hover {
        background-color: #084cdf;
    }


        /* Fond étoilé animé (canvas) */
        #starfield {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            z-index: -1;
            background-color: #000011;
        }

        /* Navbar sombre fixe en haut */
        .navbar {
            background-color: #1a1f2a !important;
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 1030;
            box-shadow: 0 2px 8px rgba(0,0,0,0.5);
        }
        .navbar .navbar-brand,
        .navbar .nav-link {
            color: #f8f9fa !important;
            font-weight: 500;
            display: flex;
            align-items: center;
        }
        .navbar .nav-link:hover {
            color: #adb5bd !important;
        }
        .nav-link .bi {
            margin-right: 6px;
            font-size: 1.2rem;
        }

        /* Body & container principal */
        body {
            padding-top: 56px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: #f8f9fa;
            font-family: \"Segoe UI\", Tahoma, Geneva, Verdana, sans-serif;
            background-color: transparent;
        }
        .container {
            flex: 1 0 auto;
            padding: 20px;
            max-width: 1200px;
            margin: 20px auto;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
            color: #212529; /* texte sombre dans container clair */
            backdrop-filter: blur(10px);
        }

        h1, h2, h3, h4, h5, h6 {
            color: #f8f9fa !important; /* Blanc cassé */
            text-shadow: 0 0 6px rgba(0,0,0,0.7);

        /* Tables */
        table.table {
            background-color: rgba(255, 255, 255, 0.9) !important; /* Fond blanc translucide */
            color: #212529 !important; /* Texte sombre */
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        thead th {
            background-color: rgba(0,0,0,0.6);
            color: #f1f1f1 !important;
            padding: 12px 15px;
            border-bottom: 2px solid rgba(255,255,255,0.3);
            text-align: left;
        }
        tbody td {
            padding: 12px 15px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        tbody tr:hover {
            background-color: rgba(13, 110, 253, 0.1);
        }

        /* Liens dans tableaux */
        tbody a {
            color: #0d6efd;
            font-weight: 600;
            text-decoration: none;
            margin-right: 10px;
        }
        tbody a:hover {
            text-decoration: underline;
        }

        /* Boutons / liens \"Create new\" */
        .btn-create-new {
            display: inline-block;
            margin-top: 1rem;
            padding: 10px 20px;
            background-color: #0d6efd;
            color: white;
            font-weight: 600;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn-create-new:hover {
            background-color: #084cdf;
        }

        /* Footer */
        footer {
            background-color: #1a1f2a;
            color: #f8f9fa;
            text-align: center;
            padding: 15px 0;
            border-top: 1px solid #343a40;
            font-size: 14px;
            flex-shrink: 0;
            box-shadow: 0 -2px 8px rgba(0,0,0,0.5);
        }

        /* Alert spacing */
        .alert {
            margin-top: 20px;
        }
    </style>

    {% block stylesheets %}{% endblock %}
</head>
<body>
    <canvas id=\"starfield\"></canvas>

    <nav class=\"navbar navbar-expand-lg navbar-dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{ path('app_dashboard') }}\">
                <i class=\"bi bi-journal-text\"></i> 📝 R209
            </a>
            <button
                class=\"navbar-toggler\"
                type=\"button\"
                data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarNav\"
                aria-controls=\"navbarNav\"
                aria-expanded=\"false\"
                aria-label=\"Toggle navigation\"
            >
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_dashboard') }}\">
                            <i class=\"bi bi-speedometer2\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a
                            class=\"nav-link dropdown-toggle\"
                            href=\"#\"
                            id=\"connexionDropdown\"
                            role=\"button\"
                            data-bs-toggle=\"dropdown\"
                            aria-expanded=\"false\"
                        >
                            <i class=\"bi bi-box-arrow-in-right\"></i> Connexion
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"connexionDropdown\">
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_login') }}\">
                                    <i class=\"bi bi-person-circle\"></i> Login
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_register') }}\">
                                    <i class=\"bi bi-pencil-square\"></i> Register
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container\">
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {% endfor %}

        {% block body %}{% endblock %}
    </div>

    <footer>
        © {{ \"now\"|date(\"Y\") }} R209 - Sanchez Durante Hugo 🚀
    </footer>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>

    <script>
        (() => {
            const canvas = document.getElementById('starfield');
            const ctx = canvas.getContext('2d');
            let width, height, stars;

            function init() {
                resize();
                stars = [];
                for (let i = 0; i < 150; i++) {
                    stars.push({
                        x: Math.random() * width,
                        y: Math.random() * height,
                        radius: Math.random() * 1.2 + 0.3,
                        vx: (Math.random() - 0.5) * 0.15,
                        vy: (Math.random() - 0.5) * 0.15,
                        alpha: Math.random(),
                        alphaChange: Math.random() * 0.02 + 0.005,
                    });
                }
                requestAnimationFrame(animate);
            }

            function resize() {
                width = window.innerWidth;
                height = window.innerHeight;
                canvas.width = width;
                canvas.height = height;
            }

            window.addEventListener('resize', () => {
                resize();
            });

            function animate() {
                ctx.clearRect(0, 0, width, height);

                for (let star of stars) {
                    star.x += star.vx;
                    star.y += star.vy;

                    if (star.x < 0 || star.x > width) star.vx = -star.vx;
                    if (star.y < 0 || star.y > height) star.vy = -star.vy;

                    star.alpha += star.alphaChange;
                    if (star.alpha <= 0) {
                        star.alpha = 0;
                        star.alphaChange = -star.alphaChange;
                    } else if (star.alpha >= 1) {
                        star.alpha = 1;
                        star.alphaChange = -star.alphaChange;
                    }

                    ctx.beginPath();
                    ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
                    ctx.fillStyle = `rgba(255, 255, 255, \${star.alpha})`;
                    ctx.shadowColor = 'white';
                    ctx.shadowBlur = 4;
                    ctx.fill();
                }

                requestAnimationFrame(animate);
            }

            init();
        })();
    </script>

    {% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\RT1_S2_2024_2025\\Cours_TD_TP\\R2.09 Initiation au développement Web\\DS\\R209\\templates\\base.html.twig");
    }
}
