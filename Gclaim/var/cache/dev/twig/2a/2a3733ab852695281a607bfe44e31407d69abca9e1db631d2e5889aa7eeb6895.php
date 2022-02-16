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

/* test.html.twig */
class __TwigTemplate_2870f55dd863c4819d09a4344df09c3d1ea2cd33f297fc9536d14c6482380782 extends Template
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
            'tournois' => [$this, 'block_tournois'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./index.html"), "html", null, true);
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Pages <i class=\"fa fa-angle-down\"></i></a>
                <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./categories-list.html"), "html", null, true);
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
                            <a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addUtilisateur");
        echo "\"><li> <i class=\"fa fa-sign-out\"> Login / Sign up </i>
                            </a>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Accueil</span></a></li>
                    <li class=\"mega-menu\"><a href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Tournois <i class=\"fa fa-angle-down\"></i></span></a>
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
        echo "\">Tournois1</a></h6>
                                        <ul>
                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                            <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"mw-post-item\">
                                    <div class=\"mw-pic\">
                                        <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/megamenu/mm-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"mw-text\">
                                        <h6><a href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Tournois2</a>
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
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/megamenu/mm-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"mw-text\">
                                        <h6><a href=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Tournois3</a>
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
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/megamenu/mm-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"mw-text\">
                                        <h6><a href=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Tournois4</a></h6>
                                        <ul>
                                            <li><i class=\"fa fa-clock-o\"></i> Aug 01, 2019</li>
                                            <li><i class=\"fa fa-comment-o\"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"mw-post-item\">
                                    <div class=\"mw-pic\">
                                        <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/megamenu/mm-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"mw-text\">
                                        <h6><a href=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Tournois5</a>
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

                    <li><a href=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Actualités <i class=\"active\"></i></span></a></li>
                    <li><a href=\"";
        // line 231
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_index");
        echo "\"><span>Entraineurs <i class=\"active\"></i></span></a></li>
                    <li>
                        <a href=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Produits <i class=\"fa fa-angle-down\"></i></span></a>
                        <ul class=\"dropdown\">
                            <li><a href=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./categories-list.html"), "html", null, true);
        echo "\">Categories</a></li>
                            <li><a href=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./categories-grid.html"), "html", null, true);
        echo "\">Categories grid</a></li>
                            <li><a href=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./typography.html"), "html", null, true);
        echo "\">Typography</a></li>
                            <li><a href=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./details-post-default.html"), "html", null, true);
        echo "\">Post default</a></li>
                            <li><a href=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./details-post-gallery.html"), "html", null, true);
        echo "\">Post gallery</a></li>
                            <li><a href=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./details-post-review.html"), "html", null, true);
        echo "\">Post review</a></li>
                            <li><a href=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./contact.html"), "html", null, true);
        echo "\">Contact</a></li>
                        </ul>
                    <li><a href=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span> Paniers<i class=\"active\"></i></span></a></li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Hero Section Begin -->
<section class=\"hero-section\">
    ";
        // line 254
        $this->displayBlock('body', $context, $blocks);
        // line 1932
        echo "

<!-- Instagram Post Section End -->

<!-- Footer Section Begin -->
<footer class=\"footer-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"footer-about\">
                    <div class=\"fa-logo\">
                        <a href=\"";
        // line 1943
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/f-logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua lacus vel facilisis.</p>
                    <div class=\"fa-social\">
                        <a href=\"";
        // line 1948
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"";
        // line 1949
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"";
        // line 1950
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-youtube-play\"></i></a>
                        <a href=\"";
        // line 1951
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
        // line 1962
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/editor-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"ec-text\">
                            <h6><a href=\"";
        // line 1965
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
        // line 1975
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/editor-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"ec-text\">
                            <h6><a href=\"";
        // line 1978
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
        // line 1994
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Gaming</span></a>
                        <a href=\"";
        // line 1995
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Platform</span></a>
                        <a href=\"";
        // line 1996
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Playstation</span></a>
                        <a href=\"";
        // line 1997
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Hardware</span></a>
                        <a href=\"";
        // line 1998
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Reviews</span></a>
                        <a href=\"";
        // line 1999
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Simulation</span></a>
                        <a href=\"";
        // line 2000
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Strategy</span></a>
                        <a href=\"";
        // line 2001
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Scientific</span></a>
                        <a href=\"";
        // line 2002
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>References</span></a>
                        <a href=\"";
        // line 2003
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Role-playing</span></a>
                        <a href=\"";
        // line 2004
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
        // line 2013
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://colorlib.com"), "html", null, true);
        echo "\" target=\"_blank\">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"ca-links\">
                        <a href=\"";
        // line 2018
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">About</a>
                        <a href=\"";
        // line 2019
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Subscribe</a>
                        <a href=\"";
        // line 2020
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Contact</a>
                        <a href=\"";
        // line 2021
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--- Footer Section End -->
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
        // line 2041
        $this->displayBlock('js', $context, $blocks);
        // line 2052
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

    // line 254
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 255
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"hs-text\">
                    <div class=\"label\"><span>Playstation</span></div>
                    <h3>Downwell and Space Hulk: Tactics are coming to Xbox Game Pass for PC</h3>
                    <div class=\"ht-meta\">
                        <img src=\"";
        // line 262
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
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 282
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
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 295
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
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 308
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
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 321
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
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 336
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
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 349
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
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 362
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
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trending/trending-8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"ti-text\">
                                    <h6><a href=\"";
        // line 375
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
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero/hero-1.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"hs-item set-bg\" data-setbg=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero/hero-2.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"hs-item set-bg\" data-setbg=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero/hero-3.jpg"), "html", null, true);
        echo "\"></div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Latest Preview Section Begin -->
<section class=\"latest-preview-section\">
    ";
        // line 399
        $this->displayBlock('tournois', $context, $blocks);
        // line 1931
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 399
    public function block_tournois($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tournois"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tournois"));

        // line 400
        echo "    <div class=\"container\">
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
";
        // line 1743
        echo "<!-- Videos Guide Section End -->
";
        // line 1930
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2041
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 2042
        echo "
    <script src=\"";
        // line 2043
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2044
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2045
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2046
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/circle-progress.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2047
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.barfiller.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2048
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2049
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2050
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2149 => 2050,  2145 => 2049,  2141 => 2048,  2137 => 2047,  2133 => 2046,  2129 => 2045,  2125 => 2044,  2121 => 2043,  2118 => 2042,  2108 => 2041,  2098 => 1930,  2095 => 1743,  2078 => 1185,  2072 => 1182,  2059 => 1172,  2053 => 1169,  2041 => 1160,  2035 => 1157,  2022 => 1147,  2016 => 1144,  1961 => 1092,  1954 => 1088,  1940 => 1077,  1933 => 1073,  1919 => 1062,  1912 => 1058,  1897 => 1046,  1891 => 1043,  1876 => 1031,  1869 => 1027,  1855 => 1016,  1848 => 1012,  1834 => 1001,  1827 => 997,  1812 => 985,  1806 => 982,  1785 => 964,  1778 => 960,  1764 => 949,  1757 => 945,  1743 => 934,  1736 => 930,  1721 => 918,  1715 => 915,  1700 => 903,  1693 => 899,  1679 => 888,  1672 => 884,  1658 => 873,  1651 => 869,  1636 => 857,  1630 => 854,  1609 => 836,  1602 => 832,  1588 => 821,  1581 => 817,  1567 => 806,  1560 => 802,  1545 => 790,  1539 => 787,  1524 => 775,  1517 => 771,  1503 => 760,  1496 => 756,  1482 => 745,  1475 => 741,  1460 => 729,  1454 => 726,  1433 => 708,  1426 => 704,  1412 => 693,  1405 => 689,  1391 => 678,  1384 => 674,  1369 => 662,  1363 => 659,  1348 => 647,  1341 => 643,  1327 => 632,  1320 => 628,  1306 => 617,  1299 => 613,  1284 => 601,  1278 => 598,  1267 => 590,  1261 => 587,  1255 => 584,  1249 => 581,  1221 => 556,  1206 => 544,  1193 => 534,  1178 => 522,  1165 => 512,  1150 => 500,  1137 => 490,  1122 => 478,  1109 => 468,  1094 => 456,  1081 => 446,  1066 => 434,  1053 => 424,  1038 => 412,  1024 => 400,  1014 => 399,  1004 => 1931,  1002 => 399,  992 => 392,  988 => 391,  984 => 390,  966 => 375,  960 => 372,  947 => 362,  941 => 359,  928 => 349,  922 => 346,  909 => 336,  903 => 333,  888 => 321,  882 => 318,  869 => 308,  863 => 305,  850 => 295,  844 => 292,  831 => 282,  825 => 279,  805 => 262,  796 => 255,  786 => 254,  774 => 27,  770 => 26,  766 => 25,  762 => 24,  758 => 23,  754 => 22,  750 => 21,  746 => 20,  740 => 17,  735 => 15,  732 => 14,  722 => 13,  703 => 10,  691 => 2052,  689 => 2041,  666 => 2021,  662 => 2020,  658 => 2019,  654 => 2018,  646 => 2013,  634 => 2004,  630 => 2003,  626 => 2002,  622 => 2001,  618 => 2000,  614 => 1999,  610 => 1998,  606 => 1997,  602 => 1996,  598 => 1995,  594 => 1994,  575 => 1978,  569 => 1975,  556 => 1965,  550 => 1962,  536 => 1951,  532 => 1950,  528 => 1949,  524 => 1948,  514 => 1943,  501 => 1932,  499 => 254,  485 => 243,  480 => 241,  476 => 240,  472 => 239,  468 => 238,  464 => 237,  460 => 236,  456 => 235,  451 => 233,  446 => 231,  442 => 230,  427 => 218,  421 => 215,  409 => 206,  403 => 203,  390 => 193,  384 => 190,  371 => 180,  365 => 177,  353 => 168,  347 => 165,  339 => 160,  335 => 159,  331 => 158,  327 => 157,  321 => 154,  317 => 153,  297 => 138,  284 => 128,  280 => 127,  276 => 126,  272 => 125,  268 => 124,  258 => 117,  239 => 101,  235 => 100,  231 => 99,  227 => 98,  217 => 91,  213 => 90,  209 => 89,  205 => 88,  192 => 78,  188 => 77,  184 => 76,  180 => 75,  175 => 73,  169 => 70,  165 => 69,  161 => 68,  157 => 67,  152 => 65,  146 => 62,  142 => 61,  138 => 60,  134 => 59,  129 => 57,  123 => 54,  119 => 53,  115 => 52,  111 => 51,  107 => 50,  103 => 49,  99 => 48,  94 => 46,  90 => 45,  81 => 41,  67 => 29,  65 => 13,  59 => 10,  48 => 1,);
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
            <li><a href=\"{{ asset('./index.html') }}\">Home</a></li>
            <li><a href=\"{{ asset('#') }}\">Pages <i class=\"fa fa-angle-down\"></i></a>
                <ul class=\"dropdown\">
                    <li><a href=\"{{ asset('./categories-list.html') }}\">Categories</a></li>
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
                            <a href=\"{{ path('addUtilisateur') }}\"><li> <i class=\"fa fa-sign-out\"> Login / Sign up </i>
                            </a>
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
                    <li class=\"active\"><a href=\"{{ asset('#') }}\"><span>Accueil</span></a></li>
                    <li class=\"mega-menu\"><a href=\"{{ asset('#') }}\"><span>Tournois <i class=\"fa fa-angle-down\"></i></span></a>
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
                                        <h6><a href=\"{{ asset('#') }}\">Tournois1</a></h6>
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
                                        <h6><a href=\"{{ asset('#') }}\">Tournois2</a>
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
                                        <h6><a href=\"{{ asset('#') }}\">Tournois3</a>
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
                                        <h6><a href=\"{{ asset('#') }}\">Tournois4</a></h6>
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
                                        <h6><a href=\"{{ asset('#') }}\">Tournois5</a>
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

                    <li><a href=\"{{ asset('#') }}\"><span>Actualités <i class=\"active\"></i></span></a></li>
                    <li><a href=\"{{ path('profil_index') }}\"><span>Entraineurs <i class=\"active\"></i></span></a></li>
                    <li>
                        <a href=\"{{ asset('#') }}\"><span>Produits <i class=\"fa fa-angle-down\"></i></span></a>
                        <ul class=\"dropdown\">
                            <li><a href=\"{{ asset('./categories-list.html') }}\">Categories</a></li>
                            <li><a href=\"{{ asset('./categories-grid.html') }}\">Categories grid</a></li>
                            <li><a href=\"{{ asset('./typography.html') }}\">Typography</a></li>
                            <li><a href=\"{{ asset('./details-post-default.html') }}\">Post default</a></li>
                            <li><a href=\"{{ asset('./details-post-gallery.html') }}\">Post gallery</a></li>
                            <li><a href=\"{{ asset('./details-post-review.html') }}\">Post review</a></li>
                            <li><a href=\"{{ asset('./contact.html') }}\">Contact</a></li>
                        </ul>
                    <li><a href=\"{{ asset('#') }}\"><span> Paniers<i class=\"active\"></i></span></a></li>
                    </li>
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
    {% block tournois %}
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
{#
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
#}
<!-- Videos Guide Section End -->
{#
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
</section> #}
    {% endblock%}
    {% endblock %}


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

</html>", "test.html.twig", "C:\\wamp64\\www\\PIDEV\\Gclaim\\templates\\test.html.twig");
    }
}
