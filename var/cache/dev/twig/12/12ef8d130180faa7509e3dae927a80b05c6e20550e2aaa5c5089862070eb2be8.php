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

/* front/videoList.html.twig */
class __TwigTemplate_31e6a4c4f01c3a2df453eb25e02e7996256d53706cfa1583c5b09a763acc4de8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/videoList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/videoList.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/videoList.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $context["sample_videos"] = [0 => 289729765, 1 => 238902809, 2 => 150870038, 3 => 219727723, 4 => 289879647, 5 => 261379936, 6 => 289029793, 7 => 60594348, 8 => 290253648];
        // line 6
        echo "

<main role=\"main\">

    <section class=\"jumbotron text-center\">
        <div class=\"container\">

            <h1 class=\"jumbotron-heading\">Category - Funny</h1>
            <div class=\"btn-group\">
                <div class=\"dropdown ml-2\">
                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        Subcategories
                    </button>
                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <ul class=\"mr-5\">
                            ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "
                        </ul>
                    </div>
                </div>

                <div class=\"form-row align-items-center ml-3\">
                    <form action=\"#\" method=\"POST\">
                        <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\" onchange='this.form.submit();'>
                            <option selected>Sort...</option>
                            <option value=\"1\">Highest rated</option>
                            <option value=\"2\">Title A-Z</option>
                            <option value=\"3\">Title Z-A</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class=\"album py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sample_videos"]) || array_key_exists("sample_videos", $context) ? $context["sample_videos"] : (function () { throw new RuntimeError('Variable "sample_videos" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 46
            echo "                    
                
                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-sm\">
                        <div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">
                            <iframe class=\"\" src=\"https://player.vimeo.com/video/";
            // line 51
            echo twig_escape_filter($this->env, $context["video"], "html", null, true);
            echo ">\" frameborder=\"0\"
                                allowfullscreen></iframe>
                        </div>
                        <div class=\"card-body\">
                            <h3>Video title</h3>
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div class=\"btn-group\">

                                    <i class=\"fa fa-thumbs-up\"><small class=\"text-muted\">(23)</small></i>&nbsp;
                                    <i class=\"fa fa-thumbs-down\"><small class=\"text-muted\">(9)</small></i>
                                    <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Click to like the video\"
                                        type=\"button\" class=\"btn btn-primary btn-outline-success btn-sm ml-1\">
                                        <i class=\"fa fa-thumbs-up\"></i>
                                    </button>
                                    <!-- <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"You like the video. Click to unlike\" type=\"button\" class=\"btn btn-primary btn-outline-success btn-sm mr-2\">
                                    <i class=\"fa fa-thumbs-up\"></i>
                                    </button> -->
                                    <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Click to dislike the video\"
                                        type=\"button\" class=\"btn btn-primary btn-outline-danger btn-sm ml-1 mr-1\">
                                        <i class=\"fa fa-thumbs-down\"></i>
                                    </button>
                                    <!-- <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"You don't like the video. Click to undo\" type=\"button\" class=\"btn btn-primary btn-outline-danger btn-sm mr-2\">
                                    <i class=\"fa fa-thumbs-down\"></i>
                                    </button> -->
                                    <a href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_details");
            echo "#video_comments\">Comments (32)</a>
                                </div>
                                <small class=\"text-muted\">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
                <!-- no members -->
                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-sm\">
                        <div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">
                            <iframe class=\"\" src=\"https://player.vimeo.com/video/113716040\" frameborder=\"0\"
                                allowfullscreen></iframe>
                        </div>
                        <div class=\"card-body\">
                            <h3>Video title</h3>
                            <p class=\"card-text text-danger\">Video for <b>MEMBERS</b> only. <a href=\"pricing.php\">Sign
                                    up</a> for one month for free.</p>
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div class=\"btn-group\">

                                    <i class=\"fa fa-thumbs-up mr-2\"><small class=\"text-muted\">(23)</small></i>
                                    <i class=\"fa fa-thumbs-down mr-2\"><small class=\"text-muted\">(9)</small></i>

                                    <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_details");
        echo "#video_comments\">Comments (32)</a>
                                </div>
                                <small class=\"text-muted\">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- pagination -->
    <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination\">
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">2</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        </ul>
    </nav>


</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/videoList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 101,  169 => 83,  155 => 75,  128 => 51,  121 => 46,  117 => 45,  91 => 22,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

{% set sample_videos = [289729765,238902809,150870038,219727723,289879647,261379936,289029793,60594348,290253648] %}


<main role=\"main\">

    <section class=\"jumbotron text-center\">
        <div class=\"container\">

            <h1 class=\"jumbotron-heading\">Category - Funny</h1>
            <div class=\"btn-group\">
                <div class=\"dropdown ml-2\">
                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        Subcategories
                    </button>
                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <ul class=\"mr-5\">
                            {{subcategories}}
                        </ul>
                    </div>
                </div>

                <div class=\"form-row align-items-center ml-3\">
                    <form action=\"#\" method=\"POST\">
                        <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\" onchange='this.form.submit();'>
                            <option selected>Sort...</option>
                            <option value=\"1\">Highest rated</option>
                            <option value=\"2\">Title A-Z</option>
                            <option value=\"3\">Title Z-A</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class=\"album py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">
                {% for video in sample_videos %}
                    
                
                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-sm\">
                        <div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">
                            <iframe class=\"\" src=\"https://player.vimeo.com/video/{{video}}>\" frameborder=\"0\"
                                allowfullscreen></iframe>
                        </div>
                        <div class=\"card-body\">
                            <h3>Video title</h3>
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div class=\"btn-group\">

                                    <i class=\"fa fa-thumbs-up\"><small class=\"text-muted\">(23)</small></i>&nbsp;
                                    <i class=\"fa fa-thumbs-down\"><small class=\"text-muted\">(9)</small></i>
                                    <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Click to like the video\"
                                        type=\"button\" class=\"btn btn-primary btn-outline-success btn-sm ml-1\">
                                        <i class=\"fa fa-thumbs-up\"></i>
                                    </button>
                                    <!-- <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"You like the video. Click to unlike\" type=\"button\" class=\"btn btn-primary btn-outline-success btn-sm mr-2\">
                                    <i class=\"fa fa-thumbs-up\"></i>
                                    </button> -->
                                    <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Click to dislike the video\"
                                        type=\"button\" class=\"btn btn-primary btn-outline-danger btn-sm ml-1 mr-1\">
                                        <i class=\"fa fa-thumbs-down\"></i>
                                    </button>
                                    <!-- <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"You don't like the video. Click to undo\" type=\"button\" class=\"btn btn-primary btn-outline-danger btn-sm mr-2\">
                                    <i class=\"fa fa-thumbs-down\"></i>
                                    </button> -->
                                    <a href=\"{{path('video_details')}}#video_comments\">Comments (32)</a>
                                </div>
                                <small class=\"text-muted\">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}

                <!-- no members -->
                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-sm\">
                        <div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">
                            <iframe class=\"\" src=\"https://player.vimeo.com/video/113716040\" frameborder=\"0\"
                                allowfullscreen></iframe>
                        </div>
                        <div class=\"card-body\">
                            <h3>Video title</h3>
                            <p class=\"card-text text-danger\">Video for <b>MEMBERS</b> only. <a href=\"pricing.php\">Sign
                                    up</a> for one month for free.</p>
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div class=\"btn-group\">

                                    <i class=\"fa fa-thumbs-up mr-2\"><small class=\"text-muted\">(23)</small></i>
                                    <i class=\"fa fa-thumbs-down mr-2\"><small class=\"text-muted\">(9)</small></i>

                                    <a href=\"{{path('video_details')}}#video_comments\">Comments (32)</a>
                                </div>
                                <small class=\"text-muted\">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- pagination -->
    <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination\">
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">2</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        </ul>
    </nav>


</main>
{% endblock %}", "front/videoList.html.twig", "/opt/lampp/htdocs/SymfonyVideoAdvence/templates/front/videoList.html.twig");
    }
}
