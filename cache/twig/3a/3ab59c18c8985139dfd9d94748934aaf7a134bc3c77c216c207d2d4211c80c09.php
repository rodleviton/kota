<?php

/* partials/navigation.html.twig */
class __TwigTemplate_e9d5db19d8ec19d22b11f1377fcc2a4917309ad2157f85cd32914ef47121f913 extends Twig_Template
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
        // line 3
        echo "
<ul class=\"nav justify-content-end\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 6
            echo "        ";
            if ($this->getAttribute($this->getAttribute($context["module"], "header", array()), "visible", array())) {
                // line 7
                echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#";
                // line 8
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a>
            </li>
        ";
            }
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>";
    }

    // line 1
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), array(" " => "-"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 1,  47 => 12,  41 => 11,  33 => 8,  30 => 7,  27 => 6,  23 => 5,  19 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro pageLinkName(text) %}{{- text|lower|replace({' ':'-'}) -}}
{% endmacro %}

<ul class=\"nav justify-content-end\">
    {% for module in page.collection() %}
        {% if module.header.visible %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#{{ _self.pageLinkName(module.menu) }}\">{{ module.menu }}</a>
            </li>
        {% endif %}
    {% endfor %}
</ul>", "partials/navigation.html.twig", "/Users/rodleviton/Development/kota/user/themes/kota/templates/partials/navigation.html.twig");
    }
}
