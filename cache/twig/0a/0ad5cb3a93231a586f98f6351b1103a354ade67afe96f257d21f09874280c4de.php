<?php

/* modular/default.html.twig */
class __TwigTemplate_d8ef083f680828199135215664d21a6c78f7d06695cc85a29191ab48d0f233b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"container\">
        ";
        // line 3
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "modular/default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block content %}
    <div class=\"container\">
        {{ page.content }}
    </div>
{% endblock %}", "modular/default.html.twig", "/Users/rodleviton/Development/kota/user/themes/kota/templates/modular/default.html.twig");
    }
}
