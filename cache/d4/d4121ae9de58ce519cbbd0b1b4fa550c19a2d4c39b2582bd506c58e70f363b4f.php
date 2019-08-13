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

/* index.html */
class __TwigTemplate_c0739610c51769b4ec99e9e0ea0f00625def8eadc25fb76580ec2fda333f5640 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE HTML>


<!--
\tEscape Velocity by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->


<html>
\t<head>
\t\t<title>Fairplay</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/main.css\" />
\t</head>
\t<body class=\"left-sidebar is-preload\">
\t\t<div id=\"page-wrapper\">

\t\t\t<!-- Header -->
\t\t\t\t<section id=\"header\" class=\"wrapper\">

\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t<h1><a href=\"/\">Fairplay</a></h1>
\t\t\t\t\t\t\t<p>Fundraiser events for companies to promote corporate responsibility or environmental stewardship.</p>
\t\t\t\t\t\t</div>

\t\t\t<!-- Nav bar-->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"#cities\">Cities</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 37
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"index.php?cmd=city&city=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t\t\t\t\t\t</ul>\t\t
\t\t\t\t\t\t\t<li><a href=\"#artists\">Artists</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Band name</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Band name</a></li>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Band name</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#artists\">More</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<li><a href=\"#archives\">Past events</a></li>
\t\t\t\t\t\t\t<li><a href=\"#contact\">Contact</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</section>

\t\t\t<!-- Main -->
\t\t\t\t<section id=\"main\" class=\"wrapper style2\">
\t\t\t\t\t<div class=\"title\">About us</div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row gtr-150\">
\t\t\t\t\t\t\t<div class=\"col-4 col-12-medium\">

\t\t\t\t\t\t\t\t<!-- Sidebar -->
\t\t\t\t\t\t\t\t\t<div id=\"sidebar\">
\t\t\t\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Want to know when our artists are playing?</h2>
\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t<p>If you have interest in the artists we work with, register to our newsletter to never miss 
\t\t\t\t\t\t\t\t\t\t\t\tour events. Do not worry, we will not fill in your mailbox with junk!
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"button style1\">Register</a>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t\t<h2 id=\"archives\">Our latest events</h2>
\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"style2\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<article class=\"box post-excerpt\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"image left\"><img src=\"images/pic08.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><a>Name of university</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Description + date + picture of event held</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<article class=\"box post-excerpt\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"image left\"><img src=\"images/pic09.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><a>Name of univeristy</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Description + date + picture of event held</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<article class=\"box post-excerpt\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"image left\"><img src=\"images/pic10.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><a>Name of university</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Description + date + picture of event held</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#archives\" class=\"button style1\">Past events</a>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8 col-12-medium imp-medium\">

\t\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t\t\t<div id=\"content\">
\t\t\t\t\t\t\t\t\t\t<article class=\"box post\">
\t\t\t\t\t\t\t\t\t\t\t<header class=\"style1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Linking music schools to business schools, pairing the musicians to the students clubs 
\t\t\t\t\t\t\t\t\t\t\t\t\tand associations that host networking cocktails monthly.</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"image featured\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/bbanner.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<p>When applying for college, choosing to pursue a career in music is a real gamble. 
\t\t\t\t\t\t\t\t\t\t\tYou have no guaranteed income stream when you get your diploma, instead constantly having
\t\t\t\t\t\t\t\t\t\t\tto market yourself in order to find enough gigs to make a living, and even if you do score some, 
\t\t\t\t\t\t\t\t\t\t\tit’s often a hassle to get paid promptly. </p>
\t\t\t\t\t\t\t\t\t\t\t<p>Musicians don’t have the time or skills to look for gigs or afford a booking agent.
\t\t\t\t\t\t\t\t\t\t\tCurrently, people looking for musicians use mostly word of mouth and don’t have a great variety of choices of local musicians. 
\t\t\t\t\t\t\t\t\t\t\tToo often, musicians don’t get paid on time and have very little recourse for bad debt.
\t\t\t\t\t\t\t\t\t\t\tThere is a mismatch in supply and demand for orchestra positions and meanwhile orchestras have a hard time filling up seats.
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p> 
\t\t\t\t\t\t\t\t\t\t\tIf only there was a solution that would allow musicians to land more gigs and have more artistic freedom. 
\t\t\t\t\t\t\t\t\t\t\tIf only people looking for musicians had a great variety of available local musicians.
\t\t\t\t\t\t\t\t\t\t\tIf only universities would have access to an efficient tool that would help all their music students not only the top few.</p>
\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t<!-- Highlights -->
\t\t\t\t<section id=\"highlights\" class=\"wrapper style3\">

\t\t\t\t<div class=\"title\" id=\"cities\">Cities</div>\t
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row aln-center\">
\t\t\t\t\t\t\t\t<div class=\"col-4 col-12-small\">
\t\t\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h2>Montreal, QC</h2>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<a class=\"image featured\"><img src=\"images/montreal.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t<p>Name of univerisities or bands available in this city.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#montreal\" class=\"button style1\">See artists</a>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 col-12-small\">
\t\t\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h2>Boston, MA</h2>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<a class=\"image featured\"><img src=\"images/boston.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t<p>Name of univerisities or bands available in this city.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#boston\" class=\"button style1\">See artists</a>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 col-12-small\">
\t\t\t\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t\t<h2>New York, NY</h2>
\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"image featured\"><img src=\"images/newyork.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t<p>Name of univerisities or bands available in this city.</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#newyork\" class=\"button style1\">See artists</a>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 col-12-small\">
\t\t\t\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Scranton, PA</h2>
\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"image featured\"><img src=\"images/scranton.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t<p>Name of univerisities or bands available in this city.</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#scranton\" class=\"button style1\">See artists</a>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-4 col-12-small\">
\t\t\t\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t\t<h2>City</h2>
\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"image featured\"><img src=\"images/blanc.gif\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t<p>Name of univerisities or bands available in this city.</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"button style1\">See artists</a>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-4 col-12-small\">
\t\t\t\t\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>City</h2>
\t\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"image featured\"><img src=\"images/blanc.gif\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Name of univerisities or bands available in this city.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"button style1\">See artists</a>
\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t
\t\t\t\t<section id=\"highlights\" class=\"wrapper style2\">

\t\t\t\t<div class=\"title\" id=\"artists\">Artists</div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row aln-center\">
\t\t\t\t\t\t\t<div class=\"col-4 col-12-medium\">
\t\t\t\t\t\t\t\t<section class=\"highlight\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/bannerr.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Name of artist/band</a></h3>
\t\t\t\t\t\t\t\t\t<p>Brief story about artist/specificity</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button style1\">Learn More</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-4 col-12-medium\">
\t\t\t\t\t\t\t\t<section class=\"highlight\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/bannerr.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Name of artist/band</a></h3>
\t\t\t\t\t\t\t\t\t<p>Brief story about artist/specificity</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button style1\">Learn More</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-4 col-12-medium\">
\t\t\t\t\t\t\t\t<section class=\"highlight\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/bannerr.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Name of artist/band</a></h3>
\t\t\t\t\t\t\t\t\t<p>Brief story about artist/specificity</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button style1\">Learn More</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t<!-- Footer -->
\t\t\t\t<section id=\"footer\" class=\"wrapper\">
\t\t\t\t\t<div class=\"title\" id=\"contact\">Contact</div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<header class=\"style1\">
\t\t\t\t\t\t\t<h2>You have a question?</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tFeel free to send us a message directly from the contact form below, 
\t\t\t\t\t\t\t\twe will answer asap. You can also find us on social media.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-6 col-12-medium\">

\t\t\t\t\t\t\t\t<!-- Contact Form -->
\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row gtr-50\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-12-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"contact-name\" placeholder=\"Name\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-12-small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"contact-email\" placeholder=\"Email\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"contact-message\" placeholder=\"Message\" rows=\"4\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><input type=\"submit\" class=\"style1\" value=\"Send\" /></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><input type=\"reset\" class=\"style2\" value=\"Reset\" /></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-6 col-12-medium\">

\t\t\t\t\t\t\t\t<!-- Contact -->
\t\t\t\t\t\t\t\t\t<section class=\"feature-list small\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-12-small\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"icon solid fa-home\">Mailing Address</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFairplay<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t1234 Somewhere Rd<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\tMontreal, QC
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-12-small\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"icon solid fa-comment\">Social</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://instagram.com/fairplay\" class=\"fab fa-instagram\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/daphne_aug\" class=\"fab fa-twitter\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.facebook.com/daphne.augier\" class=\"fab fa-facebook\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-12-small\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"icon solid fa-envelope\">Email</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">info@fairplay.care</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">help@fairplay.care</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-12-small\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"icon solid fa-phone\">Phone</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t(514) 000-0000
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"copyright\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>&copy; Fairplay, 2019</li><li>Design: <a href=\"http://html5up.net\">HTML5 | Daphné Augier</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t</div>

\t\t<!-- Scripts -->
\t\t\t<script src=\"assets/js/jquery.min.js\"></script>
\t\t\t<script src=\"assets/js/jquery.dropotron.min.js\"></script>
\t\t\t<script src=\"assets/js/browser.min.js\"></script>
\t\t\t<script src=\"assets/js/breakpoints.min.js\"></script>
\t\t\t<script src=\"assets/js/util.js\"></script>
\t\t\t<script src=\"assets/js/main.js\"></script>

\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 39,  78 => 37,  74 => 36,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "/Applications/MAMP/htdocs/fairplay/templates/index.html");
    }
}
