<?php

/* beautyShop/searchedByBrand.twig */
class __TwigTemplate_a7ee4e9596f658f0356548669ece9cd3e67081a6f57e0478971654e8afb3ca25 extends Twig_Template
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
        echo "<html>
<head>
    <title> </title>
</head>

<body>
    <ol>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productsByBrand"]) ? $context["productsByBrand"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["searchedProductByBrand"]) {
            // line 9
            echo "        <li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["searchedProductByBrand"], "brand", array()), "html", null, true);
            echo "
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["searchedProductByBrand"], "kind", array()), "html", null, true);
            echo ",
            ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["searchedProductByBrand"], "name", array()), "html", null, true);
            echo "
            Collection: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["searchedProductByBrand"], "collection", array()), "html", null, true);
            echo "
            Price: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["searchedProductByBrand"], "price", array()), "html", null, true);
            echo "
            Quantity: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["searchedProductByBrand"], "quantity", array()), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchedProductByBrand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo " <br/> <br/>
    </ol>

</body>

</html>

";
    }

    public function getTemplateName()
    {
        return "beautyShop/searchedByBrand.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <title> </title>
</head>

<body>
    <ol>
    {% for searchedProductByBrand in productsByBrand %}
        <li> {{ searchedProductByBrand.brand }}
            {{ searchedProductByBrand.kind }},
            {{ searchedProductByBrand.name }}
            Collection: {{ searchedProductByBrand.collection }}
            Price: {{ searchedProductByBrand.price }}
            Quantity: {{ searchedProductByBrand.quantity }}
        </li>
    {% endfor %} <br/> <br/>
    </ol>

</body>

</html>

", "beautyShop/searchedByBrand.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/beautyShop/searchedByBrand.twig");
    }
}
