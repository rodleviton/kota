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
        <main id=\"main\" class=\"container-fluid\">
            ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "        </main>

        ";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "
        ";
        // line 64
        $this->displayBlock('bottom', $context, $blocks);
        // line 67
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

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "            ";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        // line 59
        echo "            <footer>
                Footer
            </footer>
        ";
    }

    // line 64
    public function block_bottom($context, array $blocks = array())
    {
        // line 65
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
        return array (  219 => 65,  216 => 64,  209 => 59,  206 => 58,  201 => 54,  197 => 55,  194 => 54,  191 => 53,  187 => 48,  184 => 47,  181 => 46,  176 => 49,  174 => 46,  167 => 44,  164 => 43,  161 => 42,  157 => 35,  155 => 34,  153 => 33,  151 => 32,  149 => 31,  147 => 30,  145 => 29,  143 => 28,  141 => 27,  138 => 26,  134 => 23,  131 => 22,  128 => 21,  120 => 36,  118 => 26,  112 => 24,  110 => 21,  103 => 17,  99 => 16,  96 => 15,  94 => 14,  87 => 10,  80 => 8,  76 => 6,  73 => 5,  67 => 67,  65 => 64,  62 => 63,  60 => 58,  56 => 56,  54 => 53,  50 => 51,  48 => 42,  43 => 40,  40 => 39,  38 => 5,  33 => 3,  30 => 2,  28 => 1,);
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
