<?php

/* partials/base.html.twig */
class __TwigTemplate_20181f141153d9e68998ad3ed6aca23ec4d13bab54676d548918ed8cd9f022d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'hero' => array($this, 'block_hero'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!doctype html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 39
        echo "    </head>
    <body id=\"top\" class=\"";
        // line 40
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\" data-spy=\"scroll\" data-offset=\"60\" data-target=\"#navbar\">

        ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 51
        echo "
        ";
        // line 52
        $this->displayBlock('hero', $context, $blocks);
        // line 53
        echo "
        <main id=\"main\" class=\"container-fluid\">
            ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "        </main>

        ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('bottom', $context, $blocks);
        // line 69
        echo "
    </body>
</html>";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "            <meta charset=\"utf-8\"/>
            <title>
                ";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo "
                    |
                ";
        }
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            ";
        // line 14
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 14)->display($context);
        // line 15
        echo "
            <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\"/>
            <link rel=\"canonical\" href=\"";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\"/>

            <link href=\"https://fonts.googleapis.com/css?family=Coming+Soon|Open+Sans:400,400i,700,700i\" rel=\"stylesheet\">

            ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

            ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

        ";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/theme.min.css"), "method");
        // line 23
        echo "            ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "                ";
        $this->getAttribute(        // line 28
($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 29
        echo "                ";
        $this->getAttribute(        // line 30
($context["assets"] ?? null), "addJs", array(0 => "theme://js/bootstrap.bundle.min.js", 1 => array("group" => "bottom")), "method");
        // line 31
        echo "                ";
        $this->getAttribute(        // line 32
($context["assets"] ?? null), "addJs", array(0 => "theme://js/smooth-scroll.js", 1 => array("group" => "bottom")), "method");
        // line 33
        echo "                ";
        $this->getAttribute(        // line 34
($context["assets"] ?? null), "addJs", array(0 => "theme://js/script.js", 1 => array("group" => "bottom")), "method");
        // line 35
        echo "            ";
    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        // line 43
        echo "            <nav id=\"navbar\" class=\"navbar fixed-top navbar-light bg-light\">
                <a class=\"navbar-brand\" href=\"";
        // line 44
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "</a>

                ";
        // line 46
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 49
        echo "            </nav>
        ";
    }

    // line 46
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 47
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 47)->display($context);
        // line 48
        echo "                ";
    }

    // line 52
    public function block_hero($context, array $blocks = array())
    {
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "            ";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "            <footer>
                Footer
            </footer>
        ";
    }

    // line 66
    public function block_bottom($context, array $blocks = array())
    {
        // line 67
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 67,  227 => 66,  220 => 61,  217 => 60,  212 => 56,  208 => 57,  205 => 56,  202 => 55,  197 => 52,  193 => 48,  190 => 47,  187 => 46,  182 => 49,  180 => 46,  173 => 44,  170 => 43,  167 => 42,  163 => 35,  161 => 34,  159 => 33,  157 => 32,  155 => 31,  153 => 30,  151 => 29,  149 => 28,  147 => 27,  144 => 26,  140 => 23,  137 => 22,  134 => 21,  126 => 36,  124 => 26,  118 => 24,  116 => 21,  109 => 17,  105 => 16,  102 => 15,  100 => 14,  93 => 10,  86 => 8,  82 => 6,  79 => 5,  73 => 69,  71 => 66,  68 => 65,  66 => 60,  62 => 58,  60 => 55,  56 => 53,  54 => 52,  51 => 51,  49 => 42,  44 => 40,  41 => 39,  39 => 5,  34 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!doctype html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
    <head>
        {% block head %}
            <meta charset=\"utf-8\"/>
            <title>
                {% if header.title %}{{ header.title|e('html') }}
                    |
                {% endif %}{{ site.title|e('html') }}</title>

            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            {% include 'partials/metadata.html.twig' %}

            <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\"/>
            <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>

            <link href=\"https://fonts.googleapis.com/css?family=Coming+Soon|Open+Sans:400,400i,700,700i\" rel=\"stylesheet\">

            {% block stylesheets %}
                {% do assets.addCss('theme://css-compiled/theme.min.css') %}
            {% endblock %}
            {{ assets.css() }}

            {% block javascripts %}
                {% do 
                    assets.addJs('jquery', 100) %}
                {% do 
                    assets.addJs('theme://js/bootstrap.bundle.min.js', {group: 'bottom'}) %}
                {% do 
                    assets.addJs('theme://js/smooth-scroll.js', {group: 'bottom'}) %}
                {% do 
                    assets.addJs('theme://js/script.js', {group: 'bottom'}) %}
            {% endblock %}
            {{ assets.js() }}

        {% endblock head%}
    </head>
    <body id=\"top\" class=\"{{ page.header.body_classes }}\" data-spy=\"scroll\" data-offset=\"60\" data-target=\"#navbar\">

        {% block header %}
            <nav id=\"navbar\" class=\"navbar fixed-top navbar-light bg-light\">
                <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">{{ config.site.title }}</a>

                {% block header_navigation %}
                    {% include 'partials/navigation.html.twig' %}
                {% endblock %}
            </nav>
        {% endblock %}

        {% block hero %}{% endblock %}

        <main id=\"main\" class=\"container-fluid\">
            {% block body %}
                {% block content %}{% endblock %}
            {% endblock %}
        </main>

        {% block footer %}
            <footer>
                Footer
            </footer>
        {% endblock %}

        {% block bottom %}
            {{ assets.js('bottom') }}
        {% endblock %}

    </body>
</html>", "partials/base.html.twig", "/Users/rodleviton/Development/kota/user/themes/kota/templates/partials/base.html.twig");
    }
}
