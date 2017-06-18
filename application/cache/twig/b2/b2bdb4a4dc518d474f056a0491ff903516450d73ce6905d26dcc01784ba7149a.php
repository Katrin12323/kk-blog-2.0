<?php

/* beautyShop/allProducts.twig */
class __TwigTemplate_5d7bb99c42012af8b8311e9ac1d67e50d9aac58ac4e8f9d332b53529cd840227 extends Twig_Template
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
    <title> All Beauty Products </title>
</head>

<body>
    <h2> All beauty products </h2>
    <ol>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["beautyProducts"]) ? $context["beautyProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["allBeautyProducts"]) {
            // line 10
            echo "           <li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "brand", array()), "html", null, true);
            echo " </li>
                ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "kind", array()), "html", null, true);
            echo "
                ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "name", array()), "html", null, true);
            echo "
                ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "collection", array()), "html", null, true);
            echo "
                ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "price", array()), "html", null, true);
            echo "
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "quantity", array()), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allBeautyProducts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    </ol>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "beautyShop/allProducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  33 => 10,  29 => 9,  19 => 1,);
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
    <title> All Beauty Products </title>
</head>

<body>
    <h2> All beauty products </h2>
    <ol>
        {% for allBeautyProducts in beautyProducts %}
           <li> {{ allBeautyProducts.brand }} </li>
                {{ allBeautyProducts.kind }}
                {{ allBeautyProducts.name }}
                {{ allBeautyProducts.collection }}
                {{ allBeautyProducts.price }}
                {{ allBeautyProducts.quantity }}
        {% endfor %}

    </ol>

</body>

</html>", "beautyShop/allProducts.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/beautyShop/allProducts.twig");
    }
}
