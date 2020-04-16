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

/* admin/videos.html.twig */
class __TwigTemplate_11f0d945304f184e41dbe0bee932674c87790dc63da7369b3343a38f45e37c79 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mainAdmin' => [$this, 'block_mainAdmin'],
            'javascriptsCustom' => [$this, 'block_javascriptsCustom'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/videos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/videos.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/videos.html.twig", 1);
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
<h2>Videos / My liked videos</h2>

<div class=\"table-responsive\">
  <table class=\"table table-striped table-sm\">
    <thead>
      <tr>
        <th>#</th>
        <th>Video name</th>
        <th>Link</th>
        <th>Category</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 20
            echo "          
      <tr>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
        <td>Video name</td>
        <td><a target=\"_blank\" href=\"http://vimeo.com\">go to video</a></td>
        <td>
            <form action=\"#\" method=\"POST\">
                <select onchange=\"this.form.submit();\">
                <option selected>Parent...</option>
                <option value=\"1\">Funny</option>
                <option value=\"1\">--For kids</option>
                <option value=\"1\">----For adults</option>
                <option value=\"2\">Scary</option>
                <option value=\"3\">Motivating</option>
                </select>
            </form>
        </td>
        <td><a href=\"#\" onclick=\"delete_video(event,2);\"><i class=\"fas fa-trash\"></i></a></td>
      </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "  </table>
</div>
";
        // line 42
        $this->displayBlock('javascriptsCustom', $context, $blocks);
        // line 58
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_javascriptsCustom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascriptsCustom"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascriptsCustom"));

        // line 43
        $this->displayParentBlock("javascriptsCustom", $context, $blocks);
        echo "

<script>
    function delete_video(e,video_id)
    {
        e.preventDefault();
        if(confirm('Are you sure?')) 
        {
            console.log(id);
            // delete video from vimeo
            // window.location.href = 'clear database record with Symfony';
        }
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  135 => 42,  124 => 58,  122 => 42,  118 => 40,  94 => 22,  90 => 20,  86 => 19,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}

{% block mainAdmin %}

<h2>Videos / My liked videos</h2>

<div class=\"table-responsive\">
  <table class=\"table table-striped table-sm\">
    <thead>
      <tr>
        <th>#</th>
        <th>Video name</th>
        <th>Link</th>
        <th>Category</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        {% for i  in 1..10 %}
          
      <tr>
        <td>{{i}}</td>
        <td>Video name</td>
        <td><a target=\"_blank\" href=\"http://vimeo.com\">go to video</a></td>
        <td>
            <form action=\"#\" method=\"POST\">
                <select onchange=\"this.form.submit();\">
                <option selected>Parent...</option>
                <option value=\"1\">Funny</option>
                <option value=\"1\">--For kids</option>
                <option value=\"1\">----For adults</option>
                <option value=\"2\">Scary</option>
                <option value=\"3\">Motivating</option>
                </select>
            </form>
        </td>
        <td><a href=\"#\" onclick=\"delete_video(event,2);\"><i class=\"fas fa-trash\"></i></a></td>
      </tr>
        {% endfor %}
  </table>
</div>
{% block javascriptsCustom %}
{{parent()}}

<script>
    function delete_video(e,video_id)
    {
        e.preventDefault();
        if(confirm('Are you sure?')) 
        {
            console.log(id);
            // delete video from vimeo
            // window.location.href = 'clear database record with Symfony';
        }
    }
</script>
{% endblock %}

{% endblock %}
", "admin/videos.html.twig", "/opt/lampp/htdocs/SymfonyVideoAdvence/templates/admin/videos.html.twig");
    }
}
