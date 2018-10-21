<?php

/* modular/hero.html.twig */
class __TwigTemplate_b7f7ead4001a53bc38caf1b302e0740be51fe69fc39ca8a0980922783a0c9fcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["hero_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 2
        echo "
<div id=\"hero-wrapper\">
    <div id=\"hero\" class=\"jumbotron jumbotron-fluid\" ";
        // line 4
        if (($context["hero_image"] ?? null)) {
            echo " style=\"background-image: url(";
            echo $this->getAttribute(($context["hero_image"] ?? null), "url", array());
            echo ");\" ";
        }
        echo ">
        <div class=\"container\">
            ";
        // line 6
        echo ($context["content"] ?? null);
        echo "
        </div>
    </div>
    <div id=\"clouds\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set hero_image = page.media.images | first %}

<div id=\"hero-wrapper\">
    <div id=\"hero\" class=\"jumbotron jumbotron-fluid\" {% if hero_image %} style=\"background-image: url({{ hero_image.url }});\" {% endif %}>
        <div class=\"container\">
            {{ content }}
        </div>
    </div>
    <div id=\"clouds\"></div>
</div>", "modular/hero.html.twig", "/Users/rodleviton/Development/kota/user/themes/kota/templates/modular/hero.html.twig");
    }
}
