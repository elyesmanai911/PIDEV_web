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

/* profil/_form.html.twig */
class __TwigTemplate_09bdcc3575f23f1d010b934ac81c9749ac033698fdeaad927e0272cd8a198778 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/_form.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "

";
        
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
        <section class=\"contact-section spad\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"contact-text\">
                            <div class=\"contact-title\">
                                <h3>Contact us</h3>
                                <p>My experience with Realy is absolutely positive. The themes are beautifully<br />
                                    designed and well documented. Realy theme provides quick support.</p>
                            </div>
                            <div class=\"contact-form\">
                                <div class=\"dt-leave-comment\">
                                    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
                                        <div class=\"input-list\">
                                            <input type=\"text\" placeholder=\"Name\">
                                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "username", [], "any", false, false, false, 20), 'widget', ["attr" => ["placeholder" => "Username", "style" => "border-color: #c24400;background:transparent;width:30%;height: 46px;font-size: 14px;color: #c4c4c4;-webkit-transform: skewX(-15deg);-ms-transform: skewX(-15deg);margin-bottom: 30px;border-radius: 2px;
\ttransform: skewX(-15deg);"]]);
        // line 21
        echo "
                                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "game", [], "any", false, false, false, 22), 'widget', ["attr" => ["placeholder" => "Game", "style" => "border-color: #c24400;background:transparent;width:30%;height: 46px;font-size: 14px;color: #c4c4c4;-webkit-transform: skewX(-15deg);-ms-transform: skewX(-15deg);margin-bottom: 30px;border-radius: 2px;
\ttransform: skewX(-15deg);"]]);
        // line 23
        echo "

                                        </div>
                                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), 'widget', ["attr" => ["placeholder" => "Description", "style" => "border-color: #c24400;background:transparent;width:100%;height: 100px;font-size: 14px;color: #c4c4c4;-webkit-transform: skewX(-15deg);-ms-transform: skewX(-15deg);margin-bottom: 30px;border-radius: 2px;
\ttransform: skewX(-15deg);"]]);
        // line 27
        echo "
                                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "Submit", [], "any", false, false, false, 28), 'widget', ["attr" => ["style" => "border-color: #c24400;background:#c24400;width:30%;height: 46px;font-size: 14px;color: #c4c4c4;-webkit-transform: skewX(-15deg);-ms-transform: skewX(-15deg);margin-bottom: 30px;border-radius: 2px;
\ttransform: skewX(-15deg);"]]);
        // line 29
        echo "

                                    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>









    </div>



     <!-- Sign Up Section End -->
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 31,  116 => 29,  113 => 28,  110 => 27,  107 => 26,  102 => 23,  99 => 22,  96 => 21,  93 => 20,  87 => 17,  72 => 4,  62 => 3,  50 => 54,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block body %}

        <section class=\"contact-section spad\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"contact-text\">
                            <div class=\"contact-title\">
                                <h3>Contact us</h3>
                                <p>My experience with Realy is absolutely positive. The themes are beautifully<br />
                                    designed and well documented. Realy theme provides quick support.</p>
                            </div>
                            <div class=\"contact-form\">
                                <div class=\"dt-leave-comment\">
                                    {{ form_start(form) }}
                                        <div class=\"input-list\">
                                            <input type=\"text\" placeholder=\"Name\">
                                            {{ form_widget(form.username,{'attr':{'placeholder':'Username','style':'border-color: #c24400;background:transparent;width:30%;height: 46px;font-size: 14px;color: #c4c4c4;-webkit-transform: skewX(-15deg);-ms-transform: skewX(-15deg);margin-bottom: 30px;border-radius: 2px;
\ttransform: skewX(-15deg);'}}) }}
                                            {{ form_widget(form.game,{'attr':{'placeholder':'Game','style':'border-color: #c24400;background:transparent;width:30%;height: 46px;font-size: 14px;color: #c4c4c4;-webkit-transform: skewX(-15deg);-ms-transform: skewX(-15deg);margin-bottom: 30px;border-radius: 2px;
\ttransform: skewX(-15deg);'}}) }}

                                        </div>
                                        {{ form_widget(form.description,{'attr':{'placeholder':'Description','style':'border-color: #c24400;background:transparent;width:100%;height: 100px;font-size: 14px;color: #c4c4c4;-webkit-transform: skewX(-15deg);-ms-transform: skewX(-15deg);margin-bottom: 30px;border-radius: 2px;
\ttransform: skewX(-15deg);'}}) }}
                                        {{ form_widget(form.Submit,{'attr':{'style':'border-color: #c24400;background:#c24400;width:30%;height: 46px;font-size: 14px;color: #c4c4c4;-webkit-transform: skewX(-15deg);-ms-transform: skewX(-15deg);margin-bottom: 30px;border-radius: 2px;
\ttransform: skewX(-15deg);'}}) }}

                                    {{ form_end(form) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>









    </div>



     <!-- Sign Up Section End -->
 {% endblock %}


", "profil/_form.html.twig", "C:\\wamp64\\www\\PIDEV\\Gclaim\\templates\\profil\\_form.html.twig");
    }
}
