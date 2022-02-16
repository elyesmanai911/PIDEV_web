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

/* profil/index.html.twig */
class __TwigTemplate_5984259f1d3a301e4d11745f50fabad37ae019d617813004adc06ec8388d2cba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "test.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $this->parent = $this->loadTemplate("test.html.twig", "profil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ProfilcoachController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg spad\" data-setbg=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/breadcrumb-bg.jpg"), "html", null, true);
        echo "\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h3>Categories: <span>hardware</span></h3>
                        <div class=\"bt-option\">
                            <a href=\"#\">Home</a>
                            <a href=\"#\">Latest posts</a>
                            <span>Hardware</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class=\"categories-grid-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 p-0\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"cg-item\">
                                <div class=\"cg-pic set-bg\" data-setbg=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/categories-grid/plus.jpg"), "html", null, true);
        echo "\">

                                </div>
                                <div class=\"cg-text\">
                                    <h5><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_new");
        echo "\">Become a coach!</a></h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua suspendisse ultrices...</p>
                                </div>
                            </div>
                        </div>
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profils"]) || array_key_exists("profils", $context) ? $context["profils"] : (function () { throw new RuntimeError('Variable "profils" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 44
            echo "                        <div class=\"col-lg-6\">
                            <div class=\"cg-item\">
                                <div class=\"cg-pic set-bg\" data-setbg=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/categories-grid/cg-2.jpg"), "html", null, true);
            echo "\">

                                </div>
                                <div class=\"cg-text\">
                                    <h5><a href=\"#\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "username", [], "any", false, false, false, 50), "html", null, true);
            echo "</a></h5>
                                    <p>Game:";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "game", [], "any", false, false, false, 51), "html", null, true);
            echo "</p>
                                    <br>
                                    <p>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 53), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                            <div class=\"bottom-area d-flex\" style=\"justify-content: space-evenly;align-items: center\">
                                <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" class=\"cmn-btn\" >Update</a>
                                <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" class=\"cmn-btn\">Delete</a>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "<br>
                    <div class=\"pagination-item\">
                        <a href=\"#\"><span>1</span></a>
                        <a href=\"#\"><span>2</span></a>
                        <a href=\"#\"><span>3</span></a>
                        <a href=\"#\"><span>Next</span></a>
                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Grid Section End -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 62,  171 => 58,  167 => 57,  160 => 53,  155 => 51,  151 => 50,  144 => 46,  140 => 44,  136 => 43,  126 => 36,  119 => 32,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'test.html.twig' %}

{% block title %}Hello ProfilcoachController!{% endblock %}

{% block body %}
    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg spad\" data-setbg=\"{{ asset('img/breadcrumb-bg.jpg') }}\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h3>Categories: <span>hardware</span></h3>
                        <div class=\"bt-option\">
                            <a href=\"#\">Home</a>
                            <a href=\"#\">Latest posts</a>
                            <span>Hardware</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class=\"categories-grid-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 p-0\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"cg-item\">
                                <div class=\"cg-pic set-bg\" data-setbg=\"{{ asset('img/categories-grid/plus.jpg') }}\">

                                </div>
                                <div class=\"cg-text\">
                                    <h5><a href=\"{{ path('profil_new') }}\">Become a coach!</a></h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua suspendisse ultrices...</p>
                                </div>
                            </div>
                        </div>
                        {% for p in profils %}
                        <div class=\"col-lg-6\">
                            <div class=\"cg-item\">
                                <div class=\"cg-pic set-bg\" data-setbg=\"{{ asset('img/categories-grid/cg-2.jpg') }}\">

                                </div>
                                <div class=\"cg-text\">
                                    <h5><a href=\"#\">{{ p.username }}</a></h5>
                                    <p>Game:{{ p.game }}</p>
                                    <br>
                                    <p>{{ p.description }}</p>
                                </div>
                            </div>
                            <div class=\"bottom-area d-flex\" style=\"justify-content: space-evenly;align-items: center\">
                                <a href=\"{{ path('profil_edit',{'id':p.id}) }}\" class=\"cmn-btn\" >Update</a>
                                <a href=\"{{ path('profil_delete',{'id':p.id}) }}\" class=\"cmn-btn\">Delete</a>
                            </div>
                        </div>
                        {% endfor %}
<br>
                    <div class=\"pagination-item\">
                        <a href=\"#\"><span>1</span></a>
                        <a href=\"#\"><span>2</span></a>
                        <a href=\"#\"><span>3</span></a>
                        <a href=\"#\"><span>Next</span></a>
                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Grid Section End -->

{% endblock %}
", "profil/index.html.twig", "C:\\wamp64\\www\\PIDEV\\Gclaim\\templates\\profil\\index.html.twig");
    }
}
