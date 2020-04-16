<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_b8c55721a463f0f635caa5d9d5c3c0f8228e32d7bda5daa5b0a5bf570a798c85 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'TitreH1' => [$this, 'block_TitreH1'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascriptsCustom' => [$this, 'block_javascriptsCustom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
        integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\">
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "</head>

<body>
    <div class=\"container-fluid\">
        ";
        // line 15
        $this->displayBlock('TitreH1', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 35
        echo "
        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 77
        echo "    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>


<script>
    \$('input[type=\"file\"]').change(function (e) {
        var fileName = e.target.files[0].name;
        console.log(e.target.files[0]);
        \$('.custom-file-label').html(fileName);
    });
    </script>
 ";
        // line 93
        $this->displayBlock('javascriptsCustom', $context, $blocks);
        // line 95
        echo "
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome! symphony cours Advence";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_TitreH1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "TitreH1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "TitreH1"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 17
        echo "        <div
            class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
            <h5 class=\"my-0 mr-md-auto font-weight-normal\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Awesome Videos</a></h5>

            <form method=\"POST\" class=\"form-inline my-0 mr-md-auto\" action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_results");
        echo "\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"video title\" aria-label=\"Search video\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search video</button>
            </form>

            <nav class=\"my-2 my-md-0 mr-md-3\">
                    ";
        // line 28
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\FrontController::mainCategories"));
        echo "  

            </nav>
            <a class=\"btn btn-outline-primary mr-2\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pricing");
        echo "\">Sign up</a>
            <a class=\"btn btn-outline-primary\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Sign in</a>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "        <footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
            <div class=\"row\">
                <div class=\"col-12 col-md\">
                    <small class=\"d-block mb-3 text-muted\">&copy; 2017-2018</small>
                </div>
                <div class=\"col-6 col-md\">
                    <h5>Features</h5>
                    <ul class=\"list-unstyled text-small\">
                        <li><a class=\"text-muted\" href=\"#\">Live streaming</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Video player</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Monetization</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Hosting</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Analytics</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Speed test</a></li>
                    </ul>
                </div>
                <div class=\"col-6 col-md\">
                    <h5>Resources</h5>
                    <ul class=\"list-unstyled text-small\">
                        <li><a class=\"text-muted\" href=\"#\">Help center</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Blog</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Guidelines</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Developers</a></li>
                    </ul>
                </div>
                <div class=\"col-6 col-md\">
                    <h5>About</h5>
                    <ul class=\"list-unstyled text-small\">
                        <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Contact</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Jobs</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Partners</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_javascriptsCustom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascriptsCustom"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascriptsCustom"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 93,  265 => 38,  255 => 37,  237 => 36,  224 => 32,  220 => 31,  213 => 28,  204 => 21,  199 => 19,  195 => 17,  185 => 16,  167 => 15,  149 => 10,  130 => 6,  117 => 95,  115 => 93,  102 => 83,  98 => 82,  94 => 81,  88 => 77,  85 => 37,  83 => 36,  80 => 35,  77 => 16,  75 => 15,  69 => 11,  67 => 10,  63 => 9,  57 => 6,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome! symphony cours Advence{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
        integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/styles.css')}}\">
    {% block stylesheets %}{% endblock %}
</head>

<body>
    <div class=\"container-fluid\">
        {% block TitreH1 %}{% endblock %}
        {% block menu %}
        <div
            class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
            <h5 class=\"my-0 mr-md-auto font-weight-normal\"><a href=\"{{path('home')}}\">Awesome Videos</a></h5>

            <form method=\"POST\" class=\"form-inline my-0 mr-md-auto\" action=\"{{path('search_results')}}\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"video title\" aria-label=\"Search video\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search video</button>
            </form>

            <nav class=\"my-2 my-md-0 mr-md-3\">
                    {# appeller du partial via le controller #}
                {{render(controller(\"App\\\\Controller\\\\FrontController::mainCategories\"))}}  

            </nav>
            <a class=\"btn btn-outline-primary mr-2\" href=\"{{path('pricing')}}\">Sign up</a>
            <a class=\"btn btn-outline-primary\" href=\"{{path('login')}}\">Sign in</a>
        </div>
        {% endblock %}

        {% block body %}{% endblock %}
        {% block footer %}
        <footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
            <div class=\"row\">
                <div class=\"col-12 col-md\">
                    <small class=\"d-block mb-3 text-muted\">&copy; 2017-2018</small>
                </div>
                <div class=\"col-6 col-md\">
                    <h5>Features</h5>
                    <ul class=\"list-unstyled text-small\">
                        <li><a class=\"text-muted\" href=\"#\">Live streaming</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Video player</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Monetization</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Hosting</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Analytics</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Speed test</a></li>
                    </ul>
                </div>
                <div class=\"col-6 col-md\">
                    <h5>Resources</h5>
                    <ul class=\"list-unstyled text-small\">
                        <li><a class=\"text-muted\" href=\"#\">Help center</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Blog</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Guidelines</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Developers</a></li>
                    </ul>
                </div>
                <div class=\"col-6 col-md\">
                    <h5>About</h5>
                    <ul class=\"list-unstyled text-small\">
                        <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Contact</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Jobs</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Partners</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        {% endblock %}
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"{{asset('assets/js/jquery.js')}}\"></script>
    <script src=\"{{asset('assets/js/popper.js')}}\"></script>
    <script src=\"{{asset('assets/js/bootstrap.js')}}\"></script>


<script>
    \$('input[type=\"file\"]').change(function (e) {
        var fileName = e.target.files[0].name;
        console.log(e.target.files[0]);
        \$('.custom-file-label').html(fileName);
    });
    </script>
 {% block javascriptsCustom %}
{% endblock %}

</body>

</html>", "base.html.twig", "/opt/lampp/htdocs/SymfonyVideoAdvence/templates/base.html.twig");
    }
}
