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
class __TwigTemplate_d9877dd0e39f1521ed25d99cd653a789ad8ce762d5b34cf60fe62d78287c101d extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
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
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Amin Template\">
    <meta name=\"keywords\" content=\"Amin, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Google Font -->
    ";
        // line 13
        $this->displayBlock('css', $context, $blocks);
        // line 29
        echo "</head>

<body>
<!-- Page Preloder -->
<div id=\"preloder\">
    <div class=\"loader\"></div>
</div>

<!-- Humberger Menu Begin -->
<div class=\"humberger-menu-overlay\"></div>
<div class=\"humberger-menu-wrapper\">
    <div class=\"hw-logo\">
        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/f-logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
    </div>
    <div class=\"hw-menu mobile-menu\">
        <ul>
            <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./test.html.twig"), "html", null, true);
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Pages <i class=\"fa fa-angle-down\"></i></a>
                <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./categories_list.html.twig"), "html", null, true);
        echo "\">Categories</a></li>
                    <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./categories-grid.html"), "html", null, true);
        echo "\">Categories grid</a></li>
                    <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./typography.html"), "html", null, true);
        echo "\">Typography</a></li>
                    <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./details-post-default.html"), "html", null, true);
        echo "\">Post default</a></li>
                    <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./details-post-gallery.html"), "html", null, true);
        echo "\">Post gallery</a></li>
                    <li><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./details-post-review.html"), "html", null, true);
        echo "\">Post review</a></li>
                    <li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./contact.html"), "html", null, true);
        echo "\">Contact</a></li>
                </ul>
            </li>
            <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Reviews <i class=\"fa fa-angle-down\"></i></a>
                <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Playstation</a></li>
                    <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Windows</a></li>
                    <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Mobile</a></li>
                    <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Xbox</a></li>
                </ul>
            </li>
            <li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Windows <i class=\"fa fa-angle-down\"></i></a>
                <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Playstation</a></li>
                    <li><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Windows</a></li>
                    <li><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Mobile</a></li>
                    <li><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Xbox</a></li>
                </ul>
            </li>
            <li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Videos <i class=\"fa fa-angle-down\"></i></a>
                <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Playstation</a></li>
                    <li><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Windows</a></li>
                    <li><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Mobile</a></li>
                    <li><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Xbox</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div id=\"mobile-menu-wrap\"></div>
    <div class=\"hw-copyright\">
        Copyright © 2019 Colorlib Inc. All rights reserved
    </div>
    <div class=\"hw-social\">
        <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-facebook\"></i></a>
        <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i></a>
        <a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-youtube-play\"></i></a>
        <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-instagram\"></i></a>
    </div>
    <div class=\"hw-insta-media\">
        <div class=\"section-title\">
            <h5>Instagram</h5>
        </div>
        <div class=\"insta-pic\">
            <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/ip-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/ip-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/ip-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/ip-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </div>
    </div>
</div>
<!-- Humberger Menu End -->

<!-- Header Section Begin -->
<header class=\"header-section\">
    <div class=\"ht-options\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-8\">
                    <div class=\"ht-widget\">
                        <ul>
                            <li><i class=\"fa fa-sun-o\"></i> <span>20<sup>c</sup></span> London</li>
                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                            <li class=\"signup-switch signup-open\"><i class=\"fa fa-sign-out\"></i> Login / Sign up
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-4\">
                    <div class=\"ht-social\">
                        <a href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-youtube-play\"></i></a>
                        <a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-envelope-o\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"logo\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./index.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"nav-options\">
        <div class=\"container\">
            <div class=\"humberger-menu humberger-open\">
                <i class=\"fa fa-bars\"></i>
            </div>
            <div class=\"nav-search search-switch\">
                <i class=\"fa fa-search\"></i>
            </div>
            <div class=\"nav-menu\">
                <ul>
                    <li class=\"active\"><a href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./index.html"), "html", null, true);
        echo "\"><span>Home</span></a></li>
                    <li class=\"mega-menu\"><a href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Platform <i class=\"fa fa-angle-down\"></i></span></a>
                        <div class=\"megamenu-wrapper\">
                            <ul class=\"mw-nav\">
                                <li><a href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Playstation</span></a></li>
                                <li><a href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Windows</span></a></li>
                                <li><a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Mobile</span></a></li>
                                <li><a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Xbox</span></a></li>
                            </ul>
                            <div class=\"mw-post\">
                                <div class=\"mw-post-item\">
                                    <div class=\"mw-pic\">
                                        <img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/megamenu/mm-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"mw-text\">
                                        <h6><a href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">A Monster Prom poster got hijacked for a Papa Roach
                                                concert...</a></h6>
                                        <ul>
                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                            <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"mw-post-item\">
                                    <div class=\"mw-pic\">
                                        <img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/megamenu/mm-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"mw-text\">
                                        <h6><a href=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">A new Borderlands 3 trailer introduces Moze and her...</a>
                                        </h6>
                                        <ul>
                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                            <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"mw-post-item\">
                                    <div class=\"mw-pic\">
                                        <img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/megamenu/mm-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"mw-text\">
                                        <h6><a href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Teamfight Tactics is in chaos after today's patch...</a>
                                        </h6>
                                        <ul>
                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                            <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"mw-post-item\">
                                    <div class=\"mw-pic\">
                                        <img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/megamenu/mm-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"mw-text\">
                                        <h6><a href=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Borderlands 2 dev explains why there's mysterious
                                                boxes...</a></h6>
                                        <ul>
                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                            <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"mw-post-item\">
                                    <div class=\"mw-pic\">
                                        <img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/megamenu/mm-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"mw-text\">
                                        <h6><a href=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Capcom asks select fans to test new Resident Evil game</a>
                                        </h6>
                                        <ul>
                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                            <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Pages <i class=\"fa fa-angle-down\"></i></span></a>
                        <ul class=\"dropdown\">
                            <li><a href=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./categories_list.html.twig"), "html", null, true);
        echo "\">Categories</a></li>
                            <li><a href=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./categories-grid.html"), "html", null, true);
        echo "\">Categories grid</a></li>
                            <li><a href=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./typography.html"), "html", null, true);
        echo "\">Typography</a></li>
                            <li><a href=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./details-post-default.html"), "html", null, true);
        echo "\">Post default</a></li>
                            <li><a href=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./details-post-gallery.html"), "html", null, true);
        echo "\">Post gallery</a></li>
                            <li><a href=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./details-post-review.html"), "html", null, true);
        echo "\">Post review</a></li>
                            <li><a href=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./contact.html"), "html", null, true);
        echo "\">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Reviews <i class=\"fa fa-angle-down\"></i></span></a></li>
                    <li><a href=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Windows <i class=\"fa fa-angle-down\"></i></span></a></li>
                    <li><a href=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Videos <i class=\"fa fa-angle-down\"></i></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Hero Section Begin -->
<section class=\"hero-section\">
    ";
        // line 255
        $this->displayBlock('body', $context, $blocks);
        // line 1929
        echo "</section>

<!-- Instagram Post Section End -->

<!-- Footer Section Begin -->
<footer class=\"footer-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"footer-about\">
                    <div class=\"fa-logo\">
                        <a href=\"";
        // line 1940
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/f-logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua lacus vel facilisis.</p>
                    <div class=\"fa-social\">
                        <a href=\"";
        // line 1945
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"";
        // line 1946
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"";
        // line 1947
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-youtube-play\"></i></a>
                        <a href=\"";
        // line 1948
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"editor-choice\">
                    <div class=\"section-title\">
                        <h5>Editor's Choice</h5>
                    </div>
                    <div class=\"ec-item\">
                        <div class=\"ec-pic\">
                            <img src=\"";
        // line 1959
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/editor-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"ec-text\">
                            <h6><a href=\"";
        // line 1962
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">A Monster Prom poster got hijacked for a Papa Roach concert...</a>
                            </h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"ec-item\">
                        <div class=\"ec-pic\">
                            <img src=\"";
        // line 1972
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/editor-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"ec-text\">
                            <h6><a href=\"";
        // line 1975
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Facebook wants to read your thoughts with its augmented...</a>
                            </h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"tags-cloud\">
                    <div class=\"section-title\">
                        <h5>Tags Cloud</h5>
                    </div>
                    <div class=\"tag-list\">
                        <a href=\"";
        // line 1991
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Gaming</span></a>
                        <a href=\"";
        // line 1992
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Platform</span></a>
                        <a href=\"";
        // line 1993
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Playstation</span></a>
                        <a href=\"";
        // line 1994
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Hardware</span></a>
                        <a href=\"";
        // line 1995
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Reviews</span></a>
                        <a href=\"";
        // line 1996
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Simulation</span></a>
                        <a href=\"";
        // line 1997
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Strategy</span></a>
                        <a href=\"";
        // line 1998
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Scientific</span></a>
                        <a href=\"";
        // line 1999
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>References</span></a>
                        <a href=\"";
        // line 2000
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Role-playing</span></a>
                        <a href=\"";
        // line 2001
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Adventurea</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright-area\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"ca-text\"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"";
        // line 2010
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://colorlib.com"), "html", null, true);
        echo "\" target=\"_blank\">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"ca-links\">
                        <a href=\"";
        // line 2015
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">About</a>
                        <a href=\"";
        // line 2016
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Subscribe</a>
                        <a href=\"";
        // line 2017
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Contact</a>
                        <a href=\"";
        // line 2018
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--- Footer Section End -->

<!-- Sign Up Section Begin -->
<div class=\"signup-section\">
    <div class=\"signup-close\"><i class=\"fa fa-close\"></i></div>
    <div class=\"signup-text\">
        <div class=\"container\">
            <div class=\"signup-title\">
                <h2>Sign up</h2>
                <p>Fill out the form below to recieve a free and confidential</p>
            </div>
            <form action=\"#\" class=\"signup-form\">
                <div class=\"sf-input-list\">
                    <input type=\"text\" class=\"input-value\" placeholder=\"User Name*\">
                    <input type=\"text\" class=\"input-value\" placeholder=\"Password\">
                    <input type=\"text\" class=\"input-value\" placeholder=\"Confirm Password\">
                    <input type=\"text\" class=\"input-value\" placeholder=\"Email Address\">
                    <input type=\"text\" class=\"input-value\" placeholder=\"Full Name\">
                </div>
                <div class=\"radio-check\">
                    <label for=\"rc-agree\">I agree with the term & conditions
                        <input type=\"checkbox\" id=\"rc-agree\">
                        <span class=\"checkbox\"></span>
                    </label>
                </div>
                <button type=\"submit\"><span>REGISTER NOW</span></button>
            </form>
        </div>
    </div>
</div>
<!-- Sign Up Section End -->

<!-- Search model Begin -->
<div class=\"search-model\">
    <div class=\"h-100 d-flex align-items-center justify-content-center\">
        <div class=\"search-close-switch\">+</div>
        <form class=\"search-model-form\">
            <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
";
        // line 2069
        $this->displayBlock('js', $context, $blocks);
        // line 2080
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Amin | Template";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 14
        echo "
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"), "html", null, true);
        echo "\"
              rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Cinzel:400,700,900&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Css Styles -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/elegant-icons.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/barfiller.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slicknav.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 255
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 256
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"hs-text\">
                    <div class=\"label\"><span>Playstation</span></div>
                    <h3>Downwell and Space Hulk: Tactics are coming to Xbox Game Pass for PC</h3>
                    <div class=\"ht-meta\">
                        <img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero/meta-pic.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <ul>
                            <li>by Marcin Jankowski</li>
                            <li>Aug 01, 2019</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-lg-5 col-md-6 offset-lg-1 offset-xl-2\">
                <div class=\"trending-post\">
                    <div class=\"section-title\">
                        <h5>Treding posts</h5>
                    </div>
                    <div class=\"trending-slider owl-carousel\">
                        <div class=\"single-trending-item\">
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Jalopy developer is making a game where you 'build stuff...</a>
                                    </h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Valve updates Steam's new Interactive Reco- mmender, teases
                                            a...</a></h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Jalopy developer is making a game where you 'build stuff...</a>
                                    </h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Jalopy developer is making a game where you 'build stuff...</a>
                                    </h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-trending-item\">
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Jalopy developer is making a game where you 'build stuff...</a>
                                    </h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Valve updates Steam's new Interactive Reco- mmender, teases
                                            a...</a></h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Jalopy developer is making a game where you 'build stuff...</a>
                                    </h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Jalopy developer is making a game where you 'build stuff...</a>
                                    </h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"hero-slider owl-carousel\">
        <div class=\"hs-item set-bg\" data-setbg=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero/hero-1.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"hs-item set-bg\" data-setbg=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero/hero-2.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"hs-item set-bg\" data-setbg=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero/hero-3.jpg"), "html", null, true);
        echo "\"></div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Latest Preview Section Begin -->
<section class=\"latest-preview-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <h5>Latest Preview</h5>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"lp-slider owl-carousel\">
                <div class=\"col-lg-3\">
                    <div class=\"lp-item\">
                        <div class=\"lp-pic set-bg\" data-setbg=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/latest-preview/lp-1.jpg"), "html", null, true);
        echo "\">
                            <div class=\"review-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress\" data-cpid=\"id\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lp-text\">
                            <h6><a href=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Teamfight Tactics is in chaos after patch...</a></h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"lp-item\">
                        <div class=\"lp-pic set-bg\" data-setbg=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/latest-preview/lp-2.jpg"), "html", null, true);
        echo "\">
                            <div class=\"review-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress\" data-cpid=\"id\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lp-text\">
                            <h6><a href=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Lenovo’s y540 gaming laptop with an rtx 2060...</a></h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"lp-item\">
                        <div class=\"lp-pic set-bg\" data-setbg=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/latest-preview/lp-3.jpg"), "html", null, true);
        echo "\">
                            <div class=\"review-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress\" data-cpid=\"id\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lp-text\">
                            <h6><a href=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">A monter prom poster got hijacked for a...</a></h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"lp-item\">
                        <div class=\"lp-pic set-bg\" data-setbg=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/latest-preview/lp-4.jpg"), "html", null, true);
        echo "\">
                            <div class=\"review-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress\" data-cpid=\"id\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lp-text\">
                            <h6><a href=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Facebook wants to read your thoughts with...</a></h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"lp-item\">
                        <div class=\"lp-pic set-bg\" data-setbg=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/latest-preview/lp-4.jpg"), "html", null, true);
        echo "\">
                            <div class=\"review-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress\" data-cpid=\"id\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lp-text\">
                            <h6><a href=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Facebook wants to read your thoughts with...</a></h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"lp-item\">
                        <div class=\"lp-pic set-bg\" data-setbg=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/latest-preview/lp-4.jpg"), "html", null, true);
        echo "\">
                            <div class=\"review-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress\" data-cpid=\"id\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lp-text\">
                            <h6><a href=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Facebook wants to read your thoughts with...</a></h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"lp-item\">
                        <div class=\"lp-pic set-bg\" data-setbg=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/latest-preview/lp-4.jpg"), "html", null, true);
        echo "\">
                            <div class=\"review-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress\" data-cpid=\"id\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lp-text\">
                            <h6><a href=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Facebook wants to read your thoughts with...</a></h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Preview Section End -->

<!-- Update News Section Begin -->
<section class=\"update-news-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"section-title\">
                    <h5><span>News & update</span></h5>
                </div>
                <div class=\"tab-elem\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#tabs-1"), "html", null, true);
        echo "\" role=\"tab\">All</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"";
        // line 584
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#tabs-2"), "html", null, true);
        echo "\" role=\"tab\">Platform</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"";
        // line 587
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#tabs-3"), "html", null, true);
        echo "\" role=\"tab\">Hardware</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#tabs-4"), "html", null, true);
        echo "\" role=\"tab\">Reviews</a>
                        </li>
                    </ul><!-- Tab panes -->
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade show active\" id=\"tabs-1\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"un-slider owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-1.jpg"), "html", null, true);
        echo "\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-3.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-4.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-2.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-1.jpg"), "html", null, true);
        echo "\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-3.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 689
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-4.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 693
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 704
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-2.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 708
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tabs-2\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"un-slider owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"";
        // line 726
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-1.jpg"), "html", null, true);
        echo "\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-3.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 756
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-4.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 760
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 771
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-2.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 775
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"";
        // line 787
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-1.jpg"), "html", null, true);
        echo "\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"";
        // line 790
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 802
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-3.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 806
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 817
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-4.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 821
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 832
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-2.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 836
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tabs-3\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"un-slider owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"";
        // line 854
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-1.jpg"), "html", null, true);
        echo "\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"";
        // line 857
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 869
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-3.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 873
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 884
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-4.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 888
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 899
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-2.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 903
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"";
        // line 915
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-1.jpg"), "html", null, true);
        echo "\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"";
        // line 918
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 930
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-3.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 934
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 945
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-4.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 949
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 960
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-2.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 964
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tabs-4\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"un-slider owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"";
        // line 982
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-1.jpg"), "html", null, true);
        echo "\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"";
        // line 985
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 997
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-3.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 1001
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 1012
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-4.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 1016
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 1027
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-2.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 1031
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"";
        // line 1043
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-1.jpg"), "html", null, true);
        echo "\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"";
        // line 1046
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 1058
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-3.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 1062
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 1073
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-4.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 1077
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"";
        // line 1088
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news/news-2.jpg"), "html", null, true);
        echo "\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"";
        // line 1092
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"sidebar-option\">
                    <div class=\"social-media\">
                        <div class=\"section-title\">
                            <h5>Social media</h5>
                        </div>
                        <ul>
                            <li>
                                <div class=\"sm-icon\"><i class=\"fa fa-facebook\"></i></div>
                                <span>Facebook</span>
                                <div class=\"follow\">1,2k Follow</div>
                            </li>
                            <li>
                                <div class=\"sm-icon\"><i class=\"fa fa-twitter\"></i></div>
                                <span>Twitter</span>
                                <div class=\"follow\">1,2k Follow</div>
                            </li>
                            <li>
                                <div class=\"sm-icon\"><i class=\"fa fa-youtube-play\"></i></div>
                                <span>Youtube</span>
                                <div class=\"follow\">2,3k Subs</div>
                            </li>
                            <li>
                                <div class=\"sm-icon\"><i class=\"fa fa-instagram\"></i></div>
                                <span>Instagram</span>
                                <div class=\"follow\">2,6k Follow</div>
                            </li>
                        </ul>
                    </div>
                    <div class=\"hardware-guides\">
                        <div class=\"section-title\">
                            <h5>Hardware guides</h5>
                        </div>
                        <div class=\"trending-item\">
                            <div class=\"ti-pic\">
                                <img src=\"";
        // line 1144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"ti-text\">
                                <h6><a href=\"";
        // line 1147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">A Monster Prom poster got hijacked for a Papa Roach concert...</a>
                                </h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"trending-item\">
                            <div class=\"ti-pic\">
                                <img src=\"";
        // line 1157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"ti-text\">
                                <h6><a href=\"";
        // line 1160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Facebook wants to read your thoughts with its augmented...</a></h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"trending-item\">
                            <div class=\"ti-pic\">
                                <img src=\"";
        // line 1169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"ti-text\">
                                <h6><a href=\"";
        // line 1172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">This gaming laptop with a GTX 1660 Ti and 32GB of RAM is down...</a>
                                </h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"trending-item\">
                            <div class=\"ti-pic\">
                                <img src=\"";
        // line 1182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"ti-text\">
                                <h6><a href=\"";
        // line 1185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Jalopy developer is making a game where you 'build stuff...</a></h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Update News Section End -->

<!-- Videos Guide Section Begin -->
<section class=\"video-guide-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <h5>Videos guide</h5>
                </div>
            </div>
        </div>
        <div class=\"tab-elem\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" data-toggle=\"tab\" href=\"";
        // line 1213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#tabs-5"), "html", null, true);
        echo "\" role=\"tab\">All</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"";
        // line 1216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#tabs-6"), "html", null, true);
        echo "\" role=\"tab\">Platform</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"";
        // line 1219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#tabs-7"), "html", null, true);
        echo "\" role=\"tab\">Hardware</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"";
        // line 1222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#tabs-8"), "html", null, true);
        echo "\" role=\"tab\">Reviews</a>
                </li>
            </ul><!-- Tab panes -->
            <div class=\"tab-content\">
                <div class=\"tab-pane fade show active\" id=\"tabs-5\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"vg-slider owl-carousel\">
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-1.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-2.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-3.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-4.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-5.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-1.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-2.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-3.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-4.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-5.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane fade\" id=\"tabs-6\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"vg-slider owl-carousel\">
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-1.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-2.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-3.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-4.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-5.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-1.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-2.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1451
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-3.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-4.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1461
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-5.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1470
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane fade\" id=\"tabs-7\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"vg-slider owl-carousel\">
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1488
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-1.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-2.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1503
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1518
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-3.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1519
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-4.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1528
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1536
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-5.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1537
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1549
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-1.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1550
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1563
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-2.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1564
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1579
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-3.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1580
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1588
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-4.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1589
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1597
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-5.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1598
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane fade\" id=\"tabs-8\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"vg-slider owl-carousel\">
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1616
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-1.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1617
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1630
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-2.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1631
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-3.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1647
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1655
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-4.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1656
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1664
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-5.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1665
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1677
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-1.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1678
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"";
        // line 1691
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-2.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1692
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1707
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-3.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1708
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1716
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-4.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1717
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"";
        // line 1725
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/videos/videos-5.jpg"), "html", null, true);
        echo "\">
                                            <a href=\"";
        // line 1726
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=EzKkl64rRbM"), "html", null, true);
        echo "\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Videos Guide Section End -->

<!-- Instagram Post Section Begin -->
<section class=\"instagram-post-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"section-title\">
                    <h5>Instagram</h5>
                </div>
                <div class=\"ip-item\">
                    <div class=\"ip-pic\">
                        <img src=\"";
        // line 1754
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/insta-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"ip-text\">
                        <div class=\"label\"><span>Reviews</span></div>
                        <h5><a href=\"";
        // line 1758
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Here's an hour of side-quests from The Outer Worlds...</a></h5>
                        <ul>
                            <li>by <span>Admin</span></li>
                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                    </div>
                </div>
                <div class=\"ip-item\">
                    <div class=\"ip-pic\">
                        <img src=\"";
        // line 1770
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/insta-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"ip-text\">
                        <div class=\"label\"><span>Windows</span></div>
                        <h5><a href=\"";
        // line 1774
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Infinity Ward's focus isn't on battle royale, Call of...</a></h5>
                        <ul>
                            <li>by <span>Admin</span></li>
                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                    </div>
                </div>
                <div class=\"ip-item\">
                    <div class=\"ip-pic\">
                        <img src=\"";
        // line 1786
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/insta-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"ip-text\">
                        <div class=\"label\"><span>Hardware</span></div>
                        <h5><a href=\"";
        // line 1790
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Capcom asks select fans to test new Resident Evil game</a></h5>
                        <ul>
                            <li>by <span>Admin</span></li>
                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                    </div>
                </div>
                <div class=\"ip-item\">
                    <div class=\"ip-pic\">
                        <img src=\"";
        // line 1802
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/insta-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"ip-text\">
                        <div class=\"label\"><span>Playstation</span></div>
                        <h5><a href=\"";
        // line 1806
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Teamfight Tactics is in chaos after today's patch...</a></h5>
                        <ul>
                            <li>by <span>Admin</span></li>
                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                    </div>
                </div>
                <div class=\"pagination-item\">
                    <a href=\"";
        // line 1817
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>1</span></a>
                    <a href=\"";
        // line 1818
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>2</span></a>
                    <a href=\"";
        // line 1819
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>3</span></a>
                    <a href=\"";
        // line 1820
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Next</span></a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-7\">
                <div class=\"sidebar-option\">
                    <div class=\"insta-media\">
                        <div class=\"section-title\">
                            <h5>Instagram</h5>
                        </div>
                        <div class=\"insta-pic\">
                            <img src=\"";
        // line 1830
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/ip-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <img src=\"";
        // line 1831
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/ip-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <img src=\"";
        // line 1832
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/ip-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <img src=\"";
        // line 1833
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/ip-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"best-of-post\">
                        <div class=\"section-title\">
                            <h5>Best of</h5>
                        </div>
                        <div class=\"bp-item\">
                            <div class=\"bp-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress-1\" data-cpid=\"id-1\" data-cpvalue=\"95\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">9.5</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bp-text\">
                                <h6><a href=\"";
        // line 1851
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">This gaming laptop with a GTX 1660...</a></h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"bp-item\">
                            <div class=\"bp-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress-1\" data-cpid=\"id-2\" data-cpvalue=\"85\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">8.5</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bp-text\">
                                <h6><a href=\"";
        // line 1869
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">This gaming laptop with a GTX 1660...</a></h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"bp-item\">
                            <div class=\"bp-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress-1\" data-cpid=\"id-3\" data-cpvalue=\"80\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">8.0</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bp-text\">
                                <h6><a href=\"";
        // line 1887
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">This gaming laptop with a GTX 1660...</a></h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"bp-item\">
                            <div class=\"bp-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress-1\" data-cpid=\"id-4\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bp-text\">
                                <h6><a href=\"";
        // line 1905
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">This gaming laptop with a GTX 1660...</a></h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"subscribe-option\">
                        <div class=\"section-title\">
                            <h5>Subscribe</h5>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor.</p>
                        <form action=\"#\">
                            <input type=\"text\" placeholder=\"Name\">
                            <input type=\"text\" placeholder=\"Email\">
                            <button type=\"submit\"><span>Subscribe</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2069
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 2070
        echo "
    <script src=\"";
        // line 2071
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2072
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2073
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2074
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/circle-progress.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2075
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.barfiller.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2076
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2077
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2078
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
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
        return array (  3189 => 2078,  3185 => 2077,  3181 => 2076,  3177 => 2075,  3173 => 2074,  3169 => 2073,  3165 => 2072,  3161 => 2071,  3158 => 2070,  3148 => 2069,  3114 => 1905,  3093 => 1887,  3072 => 1869,  3051 => 1851,  3030 => 1833,  3026 => 1832,  3022 => 1831,  3018 => 1830,  3005 => 1820,  3001 => 1819,  2997 => 1818,  2993 => 1817,  2979 => 1806,  2972 => 1802,  2957 => 1790,  2950 => 1786,  2935 => 1774,  2928 => 1770,  2913 => 1758,  2906 => 1754,  2875 => 1726,  2871 => 1725,  2860 => 1717,  2856 => 1716,  2845 => 1708,  2841 => 1707,  2823 => 1692,  2819 => 1691,  2803 => 1678,  2799 => 1677,  2784 => 1665,  2780 => 1664,  2769 => 1656,  2765 => 1655,  2754 => 1647,  2750 => 1646,  2732 => 1631,  2728 => 1630,  2712 => 1617,  2708 => 1616,  2687 => 1598,  2683 => 1597,  2672 => 1589,  2668 => 1588,  2657 => 1580,  2653 => 1579,  2635 => 1564,  2631 => 1563,  2615 => 1550,  2611 => 1549,  2596 => 1537,  2592 => 1536,  2581 => 1528,  2577 => 1527,  2566 => 1519,  2562 => 1518,  2544 => 1503,  2540 => 1502,  2524 => 1489,  2520 => 1488,  2499 => 1470,  2495 => 1469,  2484 => 1461,  2480 => 1460,  2469 => 1452,  2465 => 1451,  2447 => 1436,  2443 => 1435,  2427 => 1422,  2423 => 1421,  2408 => 1409,  2404 => 1408,  2393 => 1400,  2389 => 1399,  2378 => 1391,  2374 => 1390,  2356 => 1375,  2352 => 1374,  2336 => 1361,  2332 => 1360,  2311 => 1342,  2307 => 1341,  2296 => 1333,  2292 => 1332,  2281 => 1324,  2277 => 1323,  2259 => 1308,  2255 => 1307,  2239 => 1294,  2235 => 1293,  2220 => 1281,  2216 => 1280,  2205 => 1272,  2201 => 1271,  2190 => 1263,  2186 => 1262,  2168 => 1247,  2164 => 1246,  2148 => 1233,  2144 => 1232,  2131 => 1222,  2125 => 1219,  2119 => 1216,  2113 => 1213,  2082 => 1185,  2076 => 1182,  2063 => 1172,  2057 => 1169,  2045 => 1160,  2039 => 1157,  2026 => 1147,  2020 => 1144,  1965 => 1092,  1958 => 1088,  1944 => 1077,  1937 => 1073,  1923 => 1062,  1916 => 1058,  1901 => 1046,  1895 => 1043,  1880 => 1031,  1873 => 1027,  1859 => 1016,  1852 => 1012,  1838 => 1001,  1831 => 997,  1816 => 985,  1810 => 982,  1789 => 964,  1782 => 960,  1768 => 949,  1761 => 945,  1747 => 934,  1740 => 930,  1725 => 918,  1719 => 915,  1704 => 903,  1697 => 899,  1683 => 888,  1676 => 884,  1662 => 873,  1655 => 869,  1640 => 857,  1634 => 854,  1613 => 836,  1606 => 832,  1592 => 821,  1585 => 817,  1571 => 806,  1564 => 802,  1549 => 790,  1543 => 787,  1528 => 775,  1521 => 771,  1507 => 760,  1500 => 756,  1486 => 745,  1479 => 741,  1464 => 729,  1458 => 726,  1437 => 708,  1430 => 704,  1416 => 693,  1409 => 689,  1395 => 678,  1388 => 674,  1373 => 662,  1367 => 659,  1352 => 647,  1345 => 643,  1331 => 632,  1324 => 628,  1310 => 617,  1303 => 613,  1288 => 601,  1282 => 598,  1271 => 590,  1265 => 587,  1259 => 584,  1253 => 581,  1225 => 556,  1210 => 544,  1197 => 534,  1182 => 522,  1169 => 512,  1154 => 500,  1141 => 490,  1126 => 478,  1113 => 468,  1098 => 456,  1085 => 446,  1070 => 434,  1057 => 424,  1042 => 412,  1020 => 393,  1016 => 392,  1012 => 391,  994 => 376,  988 => 373,  975 => 363,  969 => 360,  956 => 350,  950 => 347,  937 => 337,  931 => 334,  916 => 322,  910 => 319,  897 => 309,  891 => 306,  878 => 296,  872 => 293,  859 => 283,  853 => 280,  833 => 263,  824 => 256,  814 => 255,  802 => 27,  798 => 26,  794 => 25,  790 => 24,  786 => 23,  782 => 22,  778 => 21,  774 => 20,  768 => 17,  763 => 15,  760 => 14,  750 => 13,  731 => 10,  719 => 2080,  717 => 2069,  663 => 2018,  659 => 2017,  655 => 2016,  651 => 2015,  643 => 2010,  631 => 2001,  627 => 2000,  623 => 1999,  619 => 1998,  615 => 1997,  611 => 1996,  607 => 1995,  603 => 1994,  599 => 1993,  595 => 1992,  591 => 1991,  572 => 1975,  566 => 1972,  553 => 1962,  547 => 1959,  533 => 1948,  529 => 1947,  525 => 1946,  521 => 1945,  511 => 1940,  498 => 1929,  496 => 255,  483 => 245,  479 => 244,  475 => 243,  469 => 240,  465 => 239,  461 => 238,  457 => 237,  453 => 236,  449 => 235,  445 => 234,  440 => 232,  425 => 220,  419 => 217,  406 => 207,  400 => 204,  387 => 194,  381 => 191,  368 => 181,  362 => 178,  349 => 168,  343 => 165,  335 => 160,  331 => 159,  327 => 158,  323 => 157,  317 => 154,  313 => 153,  293 => 138,  280 => 128,  276 => 127,  272 => 126,  268 => 125,  264 => 124,  238 => 101,  234 => 100,  230 => 99,  226 => 98,  216 => 91,  212 => 90,  208 => 89,  204 => 88,  191 => 78,  187 => 77,  183 => 76,  179 => 75,  174 => 73,  168 => 70,  164 => 69,  160 => 68,  156 => 67,  151 => 65,  145 => 62,  141 => 61,  137 => 60,  133 => 59,  128 => 57,  122 => 54,  118 => 53,  114 => 52,  110 => 51,  106 => 50,  102 => 49,  98 => 48,  93 => 46,  89 => 45,  80 => 41,  66 => 29,  64 => 13,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Amin Template\">
    <meta name=\"keywords\" content=\"Amin, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>{% block title %}Amin | Template{% endblock %}</title>

    <!-- Google Font -->
    {% block css%}

        <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap') }}\"
              rel=\"stylesheet\">
        <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Cinzel:400,700,900&display=swap') }}\" rel=\"stylesheet\">

        <!-- Css Styles -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/elegant-icons.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/barfiller.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/slicknav.min.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" type=\"text/css\">
    {% endblock %}
</head>

<body>
<!-- Page Preloder -->
<div id=\"preloder\">
    <div class=\"loader\"></div>
</div>

<!-- Humberger Menu Begin -->
<div class=\"humberger-menu-overlay\"></div>
<div class=\"humberger-menu-wrapper\">
    <div class=\"hw-logo\">
        <a href=\"{{ asset('#') }}\"><img src=\"{{ asset('img/f-logo.png') }}\" alt=\"\"></a>
    </div>
    <div class=\"hw-menu mobile-menu\">
        <ul>
            <li><a href=\"{{ asset('./test.html.twig') }}\">Home</a></li>
            <li><a href=\"{{ asset('#') }}\">Pages <i class=\"fa fa-angle-down\"></i></a>
                <ul class=\"dropdown\">
                    <li><a href=\"{{ asset('./categories_list.html.twig') }}\">Categories</a></li>
                    <li><a href=\"{{ asset('./categories-grid.html') }}\">Categories grid</a></li>
                    <li><a href=\"{{ asset('./typography.html') }}\">Typography</a></li>
                    <li><a href=\"{{ asset('./details-post-default.html') }}\">Post default</a></li>
                    <li><a href=\"{{ asset('./details-post-gallery.html') }}\">Post gallery</a></li>
                    <li><a href=\"{{ asset('./details-post-review.html') }}\">Post review</a></li>
                    <li><a href=\"{{ asset('./contact.html') }}\">Contact</a></li>
                </ul>
            </li>
            <li><a href=\"{{ asset('#') }}\">Reviews <i class=\"fa fa-angle-down\"></i></a>
                <ul class=\"dropdown\">
                    <li><a href=\"{{ asset('#') }}\">Playstation</a></li>
                    <li><a href=\"{{ asset('#') }}\">Windows</a></li>
                    <li><a href=\"{{ asset('#') }}\">Mobile</a></li>
                    <li><a href=\"{{ asset('#') }}\">Xbox</a></li>
                </ul>
            </li>
            <li><a href=\"{{ asset('#') }}\">Windows <i class=\"fa fa-angle-down\"></i></a>
                <ul class=\"dropdown\">
                    <li><a href=\"{{ asset('#') }}\">Playstation</a></li>
                    <li><a href=\"{{ asset('#') }}\">Windows</a></li>
                    <li><a href=\"{{ asset('#') }}\">Mobile</a></li>
                    <li><a href=\"{{ asset('#') }}\">Xbox</a></li>
                </ul>
            </li>
            <li><a href=\"{{ asset('#') }}\">Videos <i class=\"fa fa-angle-down\"></i></a>
                <ul class=\"dropdown\">
                    <li><a href=\"{{ asset('#') }}\">Playstation</a></li>
                    <li><a href=\"{{ asset('#') }}\">Windows</a></li>
                    <li><a href=\"{{ asset('#') }}\">Mobile</a></li>
                    <li><a href=\"{{ asset('#') }}\">Xbox</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div id=\"mobile-menu-wrap\"></div>
    <div class=\"hw-copyright\">
        Copyright © 2019 Colorlib Inc. All rights reserved
    </div>
    <div class=\"hw-social\">
        <a href=\"{{ asset('#') }}\"><i class=\"fa fa-facebook\"></i></a>
        <a href=\"{{ asset('#') }}\"><i class=\"fa fa-twitter\"></i></a>
        <a href=\"{{ asset('#') }}\"><i class=\"fa fa-youtube-play\"></i></a>
        <a href=\"{{ asset('#') }}\"><i class=\"fa fa-instagram\"></i></a>
    </div>
    <div class=\"hw-insta-media\">
        <div class=\"section-title\">
            <h5>Instagram</h5>
        </div>
        <div class=\"insta-pic\">
            <img src=\"{{ asset('img/instagram/ip-1.jpg') }}\" alt=\"\">
            <img src=\"{{ asset('img/instagram/ip-2.jpg') }}\" alt=\"\">
            <img src=\"{{ asset('img/instagram/ip-3.jpg') }}\" alt=\"\">
            <img src=\"{{ asset('img/instagram/ip-4.jpg') }}\" alt=\"\">
        </div>
    </div>
</div>
<!-- Humberger Menu End -->

<!-- Header Section Begin -->
<header class=\"header-section\">
    <div class=\"ht-options\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-8\">
                    <div class=\"ht-widget\">
                        <ul>
                            <li><i class=\"fa fa-sun-o\"></i> <span>20<sup>c</sup></span> London</li>
                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                            <li class=\"signup-switch signup-open\"><i class=\"fa fa-sign-out\"></i> Login / Sign up
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-4\">
                    <div class=\"ht-social\">
                        <a href=\"{{ asset('#') }}\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"{{ asset('#') }}\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"{{ asset('#') }}\"><i class=\"fa fa-youtube-play\"></i></a>
                        <a href=\"{{ asset('#') }}\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"{{ asset('#') }}\"><i class=\"fa fa-envelope-o\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"logo\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <a href=\"{{ asset('./index.html') }}\"><img src=\"{{ asset('img/logo.png') }}\" alt=\"\"></a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"nav-options\">
        <div class=\"container\">
            <div class=\"humberger-menu humberger-open\">
                <i class=\"fa fa-bars\"></i>
            </div>
            <div class=\"nav-search search-switch\">
                <i class=\"fa fa-search\"></i>
            </div>
            <div class=\"nav-menu\">
                <ul>
                    <li class=\"active\"><a href=\"{{ asset('./index.html') }}\"><span>Home</span></a></li>
                    <li class=\"mega-menu\"><a href=\"{{ asset('#') }}\"><span>Platform <i class=\"fa fa-angle-down\"></i></span></a>
                        <div class=\"megamenu-wrapper\">
                            <ul class=\"mw-nav\">
                                <li><a href=\"{{ asset('#') }}\"><span>Playstation</span></a></li>
                                <li><a href=\"{{ asset('#') }}\"><span>Windows</span></a></li>
                                <li><a href=\"{{ asset('#') }}\"><span>Mobile</span></a></li>
                                <li><a href=\"{{ asset('#') }}\"><span>Xbox</span></a></li>
                            </ul>
                            <div class=\"mw-post\">
                                <div class=\"mw-post-item\">
                                    <div class=\"mw-pic\">
                                        <img src=\"{{ asset('img/megamenu/mm-1.jpg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"mw-text\">
                                        <h6><a href=\"{{ asset('#') }}\">A Monster Prom poster got hijacked for a Papa Roach
                                                concert...</a></h6>
                                        <ul>
                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                            <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"mw-post-item\">
                                    <div class=\"mw-pic\">
                                        <img src=\"{{ asset('img/megamenu/mm-2.jpg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"mw-text\">
                                        <h6><a href=\"{{ asset('#') }}\">A new Borderlands 3 trailer introduces Moze and her...</a>
                                        </h6>
                                        <ul>
                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                            <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"mw-post-item\">
                                    <div class=\"mw-pic\">
                                        <img src=\"{{ asset('img/megamenu/mm-3.jpg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"mw-text\">
                                        <h6><a href=\"{{ asset('#') }}\">Teamfight Tactics is in chaos after today's patch...</a>
                                        </h6>
                                        <ul>
                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                            <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"mw-post-item\">
                                    <div class=\"mw-pic\">
                                        <img src=\"{{ asset('img/megamenu/mm-4.jpg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"mw-text\">
                                        <h6><a href=\"{{ asset('#') }}\">Borderlands 2 dev explains why there's mysterious
                                                boxes...</a></h6>
                                        <ul>
                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                            <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"mw-post-item\">
                                    <div class=\"mw-pic\">
                                        <img src=\"{{ asset('img/megamenu/mm-5.jpg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"mw-text\">
                                        <h6><a href=\"{{ asset('#') }}\">Capcom asks select fans to test new Resident Evil game</a>
                                        </h6>
                                        <ul>
                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                            <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href=\"{{ asset('#') }}\"><span>Pages <i class=\"fa fa-angle-down\"></i></span></a>
                        <ul class=\"dropdown\">
                            <li><a href=\"{{ asset('./categories_list.html.twig') }}\">Categories</a></li>
                            <li><a href=\"{{ asset('./categories-grid.html') }}\">Categories grid</a></li>
                            <li><a href=\"{{ asset('./typography.html') }}\">Typography</a></li>
                            <li><a href=\"{{ asset('./details-post-default.html') }}\">Post default</a></li>
                            <li><a href=\"{{ asset('./details-post-gallery.html') }}\">Post gallery</a></li>
                            <li><a href=\"{{ asset('./details-post-review.html') }}\">Post review</a></li>
                            <li><a href=\"{{ asset('./contact.html') }}\">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href=\"{{ asset('#') }}\"><span>Reviews <i class=\"fa fa-angle-down\"></i></span></a></li>
                    <li><a href=\"{{ asset('#') }}\"><span>Windows <i class=\"fa fa-angle-down\"></i></span></a></li>
                    <li><a href=\"{{ asset('#') }}\"><span>Videos <i class=\"fa fa-angle-down\"></i></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Hero Section Begin -->
<section class=\"hero-section\">
    {% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"hs-text\">
                    <div class=\"label\"><span>Playstation</span></div>
                    <h3>Downwell and Space Hulk: Tactics are coming to Xbox Game Pass for PC</h3>
                    <div class=\"ht-meta\">
                        <img src=\"{{ asset('img/hero/meta-pic.jpg') }}\" alt=\"\">
                        <ul>
                            <li>by Marcin Jankowski</li>
                            <li>Aug 01, 2019</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-lg-5 col-md-6 offset-lg-1 offset-xl-2\">
                <div class=\"trending-post\">
                    <div class=\"section-title\">
                        <h5>Treding posts</h5>
                    </div>
                    <div class=\"trending-slider owl-carousel\">
                        <div class=\"single-trending-item\">
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"{{ asset('img/trending/trending-1.jpg') }}\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"{{ asset('#') }}\">Jalopy developer is making a game where you 'build stuff...</a>
                                    </h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"{{ asset('img/trending/trending-2.jpg') }}\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"{{ asset('#') }}\">Valve updates Steam's new Interactive Reco- mmender, teases
                                            a...</a></h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"{{ asset('img/trending/trending-3.jpg') }}\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"{{ asset('#') }}\">Jalopy developer is making a game where you 'build stuff...</a>
                                    </h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"{{ asset('img/trending/trending-4.jpg') }}\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"{{ asset('#') }}\">Jalopy developer is making a game where you 'build stuff...</a>
                                    </h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-trending-item\">
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"{{ asset('img/trending/trending-5.jpg') }}\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"{{ asset('#') }}\">Jalopy developer is making a game where you 'build stuff...</a>
                                    </h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"{{ asset('img/trending/trending-6.jpg') }}\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"{{ asset('#') }}\">Valve updates Steam's new Interactive Reco- mmender, teases
                                            a...</a></h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"{{ asset('img/trending/trending-7.jpg') }}\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"{{ asset('#') }}\">Jalopy developer is making a game where you 'build stuff...</a>
                                    </h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"trending-item\">
                                <div class=\"ti-pic\">
                                    <img src=\"{{ asset('img/trending/trending-8.jpg') }}\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"{{ asset('#') }}\">Jalopy developer is making a game where you 'build stuff...</a>
                                    </h6>
                                    <ul>
                                        <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                        <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"hero-slider owl-carousel\">
        <div class=\"hs-item set-bg\" data-setbg=\"{{ asset('img/hero/hero-1.jpg') }}\"></div>
        <div class=\"hs-item set-bg\" data-setbg=\"{{ asset('img/hero/hero-2.jpg') }}\"></div>
        <div class=\"hs-item set-bg\" data-setbg=\"{{ asset('img/hero/hero-3.jpg') }}\"></div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Latest Preview Section Begin -->
<section class=\"latest-preview-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <h5>Latest Preview</h5>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"lp-slider owl-carousel\">
                <div class=\"col-lg-3\">
                    <div class=\"lp-item\">
                        <div class=\"lp-pic set-bg\" data-setbg=\"{{ asset('img/latest-preview/lp-1.jpg') }}\">
                            <div class=\"review-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress\" data-cpid=\"id\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lp-text\">
                            <h6><a href=\"{{ asset('#') }}\">Teamfight Tactics is in chaos after patch...</a></h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"lp-item\">
                        <div class=\"lp-pic set-bg\" data-setbg=\"{{ asset('img/latest-preview/lp-2.jpg') }}\">
                            <div class=\"review-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress\" data-cpid=\"id\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lp-text\">
                            <h6><a href=\"{{ asset('#') }}\">Lenovo’s y540 gaming laptop with an rtx 2060...</a></h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"lp-item\">
                        <div class=\"lp-pic set-bg\" data-setbg=\"{{ asset('img/latest-preview/lp-3.jpg') }}\">
                            <div class=\"review-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress\" data-cpid=\"id\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lp-text\">
                            <h6><a href=\"{{ asset('#') }}\">A monter prom poster got hijacked for a...</a></h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"lp-item\">
                        <div class=\"lp-pic set-bg\" data-setbg=\"{{ asset('img/latest-preview/lp-4.jpg') }}\">
                            <div class=\"review-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress\" data-cpid=\"id\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lp-text\">
                            <h6><a href=\"{{ asset('#') }}\">Facebook wants to read your thoughts with...</a></h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"lp-item\">
                        <div class=\"lp-pic set-bg\" data-setbg=\"{{ asset('img/latest-preview/lp-4.jpg') }}\">
                            <div class=\"review-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress\" data-cpid=\"id\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lp-text\">
                            <h6><a href=\"{{ asset('#') }}\">Facebook wants to read your thoughts with...</a></h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"lp-item\">
                        <div class=\"lp-pic set-bg\" data-setbg=\"{{ asset('img/latest-preview/lp-4.jpg') }}\">
                            <div class=\"review-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress\" data-cpid=\"id\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lp-text\">
                            <h6><a href=\"{{ asset('#') }}\">Facebook wants to read your thoughts with...</a></h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"lp-item\">
                        <div class=\"lp-pic set-bg\" data-setbg=\"{{ asset('img/latest-preview/lp-4.jpg') }}\">
                            <div class=\"review-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress\" data-cpid=\"id\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"lp-text\">
                            <h6><a href=\"{{ asset('#') }}\">Facebook wants to read your thoughts with...</a></h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Preview Section End -->

<!-- Update News Section Begin -->
<section class=\"update-news-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"section-title\">
                    <h5><span>News & update</span></h5>
                </div>
                <div class=\"tab-elem\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"{{ asset('#tabs-1') }}\" role=\"tab\">All</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"{{ asset('#tabs-2') }}\" role=\"tab\">Platform</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"{{ asset('#tabs-3') }}\" role=\"tab\">Hardware</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"{{ asset('#tabs-4') }}\" role=\"tab\">Reviews</a>
                        </li>
                    </ul><!-- Tab panes -->
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade show active\" id=\"tabs-1\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"un-slider owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"{{ asset('img/news/news-1.jpg') }}\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"{{ asset('#') }}\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-3.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-4.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-2.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"{{ asset('img/news/news-1.jpg') }}\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"{{ asset('#') }}\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-3.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-4.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-2.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tabs-2\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"un-slider owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"{{ asset('img/news/news-1.jpg') }}\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"{{ asset('#') }}\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-3.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-4.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-2.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"{{ asset('img/news/news-1.jpg') }}\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"{{ asset('#') }}\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-3.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-4.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-2.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tabs-3\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"un-slider owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"{{ asset('img/news/news-1.jpg') }}\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"{{ asset('#') }}\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-3.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-4.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-2.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"{{ asset('img/news/news-1.jpg') }}\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"{{ asset('#') }}\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-3.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-4.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-2.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tabs-4\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"un-slider owl-carousel\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"{{ asset('img/news/news-1.jpg') }}\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"{{ asset('#') }}\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-3.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-4.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-2.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"un-big-item set-bg\" data-setbg=\"{{ asset('img/news/news-1.jpg') }}\">
                                            <div class=\"ub-text\">
                                                <div class=\"label\"><span>Reviews</span></div>
                                                <h5><a href=\"{{ asset('#') }}\">Get one of our favorite nvme ssds, the 2tb samsung
                                                        970 evo, for \$120 less than nomal</a></h5>
                                                <ul>
                                                    <li>by <span>Admin</span></li>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-3.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-4.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"un-item\">
                                                    <div class=\"un_pic set-bg\" data-setbg=\"{{ asset('img/news/news-2.jpg') }}\">
                                                        <div class=\"label\"><span>Reviews</span></div>
                                                    </div>
                                                    <div class=\"un_text\">
                                                        <h6><a href=\"{{ asset('#') }}\">Downwell and space hulk: tactics are coming
                                                                to...</a></h6>
                                                        <ul>
                                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"sidebar-option\">
                    <div class=\"social-media\">
                        <div class=\"section-title\">
                            <h5>Social media</h5>
                        </div>
                        <ul>
                            <li>
                                <div class=\"sm-icon\"><i class=\"fa fa-facebook\"></i></div>
                                <span>Facebook</span>
                                <div class=\"follow\">1,2k Follow</div>
                            </li>
                            <li>
                                <div class=\"sm-icon\"><i class=\"fa fa-twitter\"></i></div>
                                <span>Twitter</span>
                                <div class=\"follow\">1,2k Follow</div>
                            </li>
                            <li>
                                <div class=\"sm-icon\"><i class=\"fa fa-youtube-play\"></i></div>
                                <span>Youtube</span>
                                <div class=\"follow\">2,3k Subs</div>
                            </li>
                            <li>
                                <div class=\"sm-icon\"><i class=\"fa fa-instagram\"></i></div>
                                <span>Instagram</span>
                                <div class=\"follow\">2,6k Follow</div>
                            </li>
                        </ul>
                    </div>
                    <div class=\"hardware-guides\">
                        <div class=\"section-title\">
                            <h5>Hardware guides</h5>
                        </div>
                        <div class=\"trending-item\">
                            <div class=\"ti-pic\">
                                <img src=\"{{ asset('img/trending/trending-5.jpg') }}\" alt=\"\">
                            </div>
                            <div class=\"ti-text\">
                                <h6><a href=\"{{ asset('#') }}\">A Monster Prom poster got hijacked for a Papa Roach concert...</a>
                                </h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"trending-item\">
                            <div class=\"ti-pic\">
                                <img src=\"{{ asset('img/trending/trending-6.jpg') }}\" alt=\"\">
                            </div>
                            <div class=\"ti-text\">
                                <h6><a href=\"{{ asset('#') }}\">Facebook wants to read your thoughts with its augmented...</a></h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"trending-item\">
                            <div class=\"ti-pic\">
                                <img src=\"{{ asset('img/trending/trending-7.jpg') }}\" alt=\"\">
                            </div>
                            <div class=\"ti-text\">
                                <h6><a href=\"{{ asset('#') }}\">This gaming laptop with a GTX 1660 Ti and 32GB of RAM is down...</a>
                                </h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"trending-item\">
                            <div class=\"ti-pic\">
                                <img src=\"{{ asset('img/trending/trending-8.jpg') }}\" alt=\"\">
                            </div>
                            <div class=\"ti-text\">
                                <h6><a href=\"{{ asset('#') }}\">Jalopy developer is making a game where you 'build stuff...</a></h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Update News Section End -->

<!-- Videos Guide Section Begin -->
<section class=\"video-guide-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <h5>Videos guide</h5>
                </div>
            </div>
        </div>
        <div class=\"tab-elem\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" data-toggle=\"tab\" href=\"{{ asset('#tabs-5') }}\" role=\"tab\">All</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"{{ asset('#tabs-6') }}\" role=\"tab\">Platform</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"{{ asset('#tabs-7') }}\" role=\"tab\">Hardware</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"{{ asset('#tabs-8') }}\" role=\"tab\">Reviews</a>
                </li>
            </ul><!-- Tab panes -->
            <div class=\"tab-content\">
                <div class=\"tab-pane fade show active\" id=\"tabs-5\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"vg-slider owl-carousel\">
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-1.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-2.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-3.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-4.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-5.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-1.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-2.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-3.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-4.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-5.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane fade\" id=\"tabs-6\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"vg-slider owl-carousel\">
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-1.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-2.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-3.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-4.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-5.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-1.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-2.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-3.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-4.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-5.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane fade\" id=\"tabs-7\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"vg-slider owl-carousel\">
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-1.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-2.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-3.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-4.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-5.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-1.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-2.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-3.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-4.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-5.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane fade\" id=\"tabs-8\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"vg-slider owl-carousel\">
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-1.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-2.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-3.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-4.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-5.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-1.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"vg-item large-vg set-bg\" data-setbg=\"{{ asset('img/videos/videos-2.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                    PLATFORMS...</h5>
                                                <ul>
                                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                                    <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-3.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-4.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"vg-item set-bg\" data-setbg=\"{{ asset('img/videos/videos-5.jpg') }}\">
                                            <a href=\"{{ asset('https://www.youtube.com/watch?v=EzKkl64rRbM') }}\"
                                               class=\"play-btn video-popup\"><i class=\"fa fa-play\"></i></a>
                                            <div class=\"vg-text\">
                                                <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Videos Guide Section End -->

<!-- Instagram Post Section Begin -->
<section class=\"instagram-post-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"section-title\">
                    <h5>Instagram</h5>
                </div>
                <div class=\"ip-item\">
                    <div class=\"ip-pic\">
                        <img src=\"{{ asset('img/instagram/insta-1.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"ip-text\">
                        <div class=\"label\"><span>Reviews</span></div>
                        <h5><a href=\"{{ asset('#') }}\">Here's an hour of side-quests from The Outer Worlds...</a></h5>
                        <ul>
                            <li>by <span>Admin</span></li>
                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                    </div>
                </div>
                <div class=\"ip-item\">
                    <div class=\"ip-pic\">
                        <img src=\"{{ asset('img/instagram/insta-2.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"ip-text\">
                        <div class=\"label\"><span>Windows</span></div>
                        <h5><a href=\"{{ asset('#') }}\">Infinity Ward's focus isn't on battle royale, Call of...</a></h5>
                        <ul>
                            <li>by <span>Admin</span></li>
                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                    </div>
                </div>
                <div class=\"ip-item\">
                    <div class=\"ip-pic\">
                        <img src=\"{{ asset('img/instagram/insta-3.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"ip-text\">
                        <div class=\"label\"><span>Hardware</span></div>
                        <h5><a href=\"{{ asset('#') }}\">Capcom asks select fans to test new Resident Evil game</a></h5>
                        <ul>
                            <li>by <span>Admin</span></li>
                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                    </div>
                </div>
                <div class=\"ip-item\">
                    <div class=\"ip-pic\">
                        <img src=\"{{ asset('img/instagram/insta-4.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"ip-text\">
                        <div class=\"label\"><span>Playstation</span></div>
                        <h5><a href=\"{{ asset('#') }}\">Teamfight Tactics is in chaos after today's patch...</a></h5>
                        <ul>
                            <li>by <span>Admin</span></li>
                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                            <li><i class=\"fa fa-comment-o\"></i> 20</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices...</p>
                    </div>
                </div>
                <div class=\"pagination-item\">
                    <a href=\"{{ asset('#') }}\"><span>1</span></a>
                    <a href=\"{{ asset('#') }}\"><span>2</span></a>
                    <a href=\"{{ asset('#') }}\"><span>3</span></a>
                    <a href=\"{{ asset('#') }}\"><span>Next</span></a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-7\">
                <div class=\"sidebar-option\">
                    <div class=\"insta-media\">
                        <div class=\"section-title\">
                            <h5>Instagram</h5>
                        </div>
                        <div class=\"insta-pic\">
                            <img src=\"{{ asset('img/instagram/ip-1.jpg') }}\" alt=\"\">
                            <img src=\"{{ asset('img/instagram/ip-2.jpg') }}\" alt=\"\">
                            <img src=\"{{ asset('img/instagram/ip-3.jpg') }}\" alt=\"\">
                            <img src=\"{{ asset('img/instagram/ip-4.jpg') }}\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"best-of-post\">
                        <div class=\"section-title\">
                            <h5>Best of</h5>
                        </div>
                        <div class=\"bp-item\">
                            <div class=\"bp-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress-1\" data-cpid=\"id-1\" data-cpvalue=\"95\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">9.5</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bp-text\">
                                <h6><a href=\"{{ asset('#') }}\">This gaming laptop with a GTX 1660...</a></h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"bp-item\">
                            <div class=\"bp-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress-1\" data-cpid=\"id-2\" data-cpvalue=\"85\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">8.5</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bp-text\">
                                <h6><a href=\"{{ asset('#') }}\">This gaming laptop with a GTX 1660...</a></h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"bp-item\">
                            <div class=\"bp-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress-1\" data-cpid=\"id-3\" data-cpvalue=\"80\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">8.0</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bp-text\">
                                <h6><a href=\"{{ asset('#') }}\">This gaming laptop with a GTX 1660...</a></h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"bp-item\">
                            <div class=\"bp-loader\">
                                <div class=\"loader-circle-wrap\">
                                    <div class=\"loader-circle\">
                                            <span class=\"circle-progress-1\" data-cpid=\"id-4\" data-cpvalue=\"75\"
                                                  data-cpcolor=\"#c20000\"></span>
                                        <div class=\"review-point\">7.5</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bp-text\">
                                <h6><a href=\"{{ asset('#') }}\">This gaming laptop with a GTX 1660...</a></h6>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                    <li><i class=\"fa fa-comment-o\"></i> 20</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"subscribe-option\">
                        <div class=\"section-title\">
                            <h5>Subscribe</h5>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor.</p>
                        <form action=\"#\">
                            <input type=\"text\" placeholder=\"Name\">
                            <input type=\"text\" placeholder=\"Email\">
                            <button type=\"submit\"><span>Subscribe</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endblock %}
</section>

<!-- Instagram Post Section End -->

<!-- Footer Section Begin -->
<footer class=\"footer-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"footer-about\">
                    <div class=\"fa-logo\">
                        <a href=\"{{ asset('#') }}\"><img src=\"{{ asset('img/f-logo.png') }}\" alt=\"\"></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua lacus vel facilisis.</p>
                    <div class=\"fa-social\">
                        <a href=\"{{ asset('#') }}\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"{{ asset('#') }}\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"{{ asset('#') }}\"><i class=\"fa fa-youtube-play\"></i></a>
                        <a href=\"{{ asset('#') }}\"><i class=\"fa fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"editor-choice\">
                    <div class=\"section-title\">
                        <h5>Editor's Choice</h5>
                    </div>
                    <div class=\"ec-item\">
                        <div class=\"ec-pic\">
                            <img src=\"{{ asset('img/trending/editor-1.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"ec-text\">
                            <h6><a href=\"{{ asset('#') }}\">A Monster Prom poster got hijacked for a Papa Roach concert...</a>
                            </h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"ec-item\">
                        <div class=\"ec-pic\">
                            <img src=\"{{ asset('img/trending/editor-2.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"ec-text\">
                            <h6><a href=\"{{ asset('#') }}\">Facebook wants to read your thoughts with its augmented...</a>
                            </h6>
                            <ul>
                                <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                <li><i class=\"fa fa-comment-o\"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"tags-cloud\">
                    <div class=\"section-title\">
                        <h5>Tags Cloud</h5>
                    </div>
                    <div class=\"tag-list\">
                        <a href=\"{{ asset('#') }}\"><span>Gaming</span></a>
                        <a href=\"{{ asset('#') }}\"><span>Platform</span></a>
                        <a href=\"{{ asset('#') }}\"><span>Playstation</span></a>
                        <a href=\"{{ asset('#') }}\"><span>Hardware</span></a>
                        <a href=\"{{ asset('#') }}\"><span>Reviews</span></a>
                        <a href=\"{{ asset('#') }}\"><span>Simulation</span></a>
                        <a href=\"{{ asset('#') }}\"><span>Strategy</span></a>
                        <a href=\"{{ asset('#') }}\"><span>Scientific</span></a>
                        <a href=\"{{ asset('#') }}\"><span>References</span></a>
                        <a href=\"{{ asset('#') }}\"><span>Role-playing</span></a>
                        <a href=\"{{ asset('#') }}\"><span>Adventurea</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright-area\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"ca-text\"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"{{ asset('https://colorlib.com') }}\" target=\"_blank\">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"ca-links\">
                        <a href=\"{{ asset('#') }}\">About</a>
                        <a href=\"{{ asset('#') }}\">Subscribe</a>
                        <a href=\"{{ asset('#') }}\">Contact</a>
                        <a href=\"{{ asset('#') }}\">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--- Footer Section End -->

<!-- Sign Up Section Begin -->
<div class=\"signup-section\">
    <div class=\"signup-close\"><i class=\"fa fa-close\"></i></div>
    <div class=\"signup-text\">
        <div class=\"container\">
            <div class=\"signup-title\">
                <h2>Sign up</h2>
                <p>Fill out the form below to recieve a free and confidential</p>
            </div>
            <form action=\"#\" class=\"signup-form\">
                <div class=\"sf-input-list\">
                    <input type=\"text\" class=\"input-value\" placeholder=\"User Name*\">
                    <input type=\"text\" class=\"input-value\" placeholder=\"Password\">
                    <input type=\"text\" class=\"input-value\" placeholder=\"Confirm Password\">
                    <input type=\"text\" class=\"input-value\" placeholder=\"Email Address\">
                    <input type=\"text\" class=\"input-value\" placeholder=\"Full Name\">
                </div>
                <div class=\"radio-check\">
                    <label for=\"rc-agree\">I agree with the term & conditions
                        <input type=\"checkbox\" id=\"rc-agree\">
                        <span class=\"checkbox\"></span>
                    </label>
                </div>
                <button type=\"submit\"><span>REGISTER NOW</span></button>
            </form>
        </div>
    </div>
</div>
<!-- Sign Up Section End -->

<!-- Search model Begin -->
<div class=\"search-model\">
    <div class=\"h-100 d-flex align-items-center justify-content-center\">
        <div class=\"search-close-switch\">+</div>
        <form class=\"search-model-form\">
            <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
{% block js %}

    <script src=\"{{ asset('js/jquery-3.3.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('js/circle-progress.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.barfiller.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.slicknav.js') }}\"></script>
    <script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>
{% endblock %}
</body>

</html>", "base.html.twig", "C:\\wamp64\\www\\PIDEV\\Gclaim\\templates\\base.html.twig");
    }
}
