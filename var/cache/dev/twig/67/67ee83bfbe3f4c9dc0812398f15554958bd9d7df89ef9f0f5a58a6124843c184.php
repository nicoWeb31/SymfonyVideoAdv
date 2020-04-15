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

/* admin/edit_category.html.twig */
class __TwigTemplate_58dcb03f1f335bcdb4d5d046fd1bde687c0c778014118934c1677fd94ca9531e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mainAdmin' => [$this, 'block_mainAdmin'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit_category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit_category.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/edit_category.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_mainAdmin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainAdmin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainAdmin"));

        // line 4
        echo "
<h2>Editing category</h2>

<form action=\"#\" method=\"POST\">
    <input type=\"text\" class=\"form-control is-invalid\" id=\"validationServer01\" placeholder=\"Category name\" value=\"Funny\"
        required>
    <br>
    <label for=\"inlineFormCustomSelect\">Parent:</label>
    <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\">
        <option value=\"1\">Funny</option>
        <option value=\"1\">--For kids</option>
        <option value=\"1\">--For adults</option>
        <option value=\"1\">----For 60+</option>
        <option value=\"2\">Scary</option>
        <option value=\"3\">Motivating</option>
    </select>
    <div class=\"invalid-feedback\">
        Category already exists!
    </div>
    <button class=\"btn btn-primary mt-3\" type=\"submit\">Save</button>

</form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}

{% block mainAdmin %}

<h2>Editing category</h2>

<form action=\"#\" method=\"POST\">
    <input type=\"text\" class=\"form-control is-invalid\" id=\"validationServer01\" placeholder=\"Category name\" value=\"Funny\"
        required>
    <br>
    <label for=\"inlineFormCustomSelect\">Parent:</label>
    <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\">
        <option value=\"1\">Funny</option>
        <option value=\"1\">--For kids</option>
        <option value=\"1\">--For adults</option>
        <option value=\"1\">----For 60+</option>
        <option value=\"2\">Scary</option>
        <option value=\"3\">Motivating</option>
    </select>
    <div class=\"invalid-feedback\">
        Category already exists!
    </div>
    <button class=\"btn btn-primary mt-3\" type=\"submit\">Save</button>

</form>

{% endblock %}
", "admin/edit_category.html.twig", "/opt/lampp/htdocs/SymfonyVideoAdvence/templates/admin/edit_category.html.twig");
    }
}
