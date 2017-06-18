<?php

/* supermarket/showSearchedProducts.twig */
class __TwigTemplate_c49b028f23fda1f16f5d27af2eb754cfb4da5f5f3d61d9ea371d4fd8da28f4c5 extends Twig_Template
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
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "        <li> Product: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productName", array()), "html", null, true);
            echo "</li>
             Price: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo " <br />
             Quantity: ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array()), "html", null, true);
            echo " <br />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </ol>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "supermarket/showSearchedProducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  40 => 10,  36 => 9,  31 => 8,  27 => 7,  19 => 1,);
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
        {% for product in products  %}
        <li> Product: {{ product.productName }}</li>
             Price: {{ product.price }} <br />
             Quantity: {{ product.quantity }} <br />
        {% endfor %}
    </ol>

</body>
</html>", "supermarket/showSearchedProducts.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/supermarket/showSearchedProducts.twig");
    }
}
