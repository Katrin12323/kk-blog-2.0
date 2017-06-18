<?php

/* beautyShop/allProd.twig */
class __TwigTemplate_6c40f3d848ed12302c9f706e3974fdc15b2fe90163d4234841b7c65ba3f5ab01 extends Twig_Template
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

<form action=\"http://localhost/CodeIgniter/index.php/BeautyShop/searchProduct\" method=\"post\">

    <label for=\"brand\">Search product by brand:  </label><br/>
    <input type=\"text\" name=\"brand\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["brand"]) ? $context["brand"] : null), "html", null, true);
        echo "\">

    <input type=\"submit\" value=\"Search\">
</form> <br/>

<ol>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["beautyProducts"]) ? $context["beautyProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["allBeautyProducts"]) {
            // line 19
            echo "        <li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "brand", array()), "html", null, true);
            echo "
            ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "kind", array()), "html", null, true);
            echo ",
            ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "name", array()), "html", null, true);
            echo "
            Collection: ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "collection", array()), "html", null, true);
            echo "
            Price: ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "price", array()), "html", null, true);
            echo "
            Quantity: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "quantity", array()), "html", null, true);
            echo "
        </li>

        ---> <a href=\"http://localhost/CodeIgniter/index.php/BeautyShop/deleteBeautyProducts/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "id", array()), "html", null, true);
            echo "\"> Delete this product </a> <br/><br/>
        ---> <a href=\"http://localhost/CodeIgniter/index.php/BeautyShop/updateForm/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "id", array()), "html", null, true);
            echo "\"> Update this product </a> <br/><br/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allBeautyProducts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo " <br/> <br/>
</ol>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "beautyShop/allProd.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  76 => 28,  72 => 27,  66 => 24,  62 => 23,  58 => 22,  54 => 21,  50 => 20,  45 => 19,  41 => 18,  32 => 12,  19 => 1,);
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

<form action=\"http://localhost/CodeIgniter/index.php/BeautyShop/searchProduct\" method=\"post\">

    <label for=\"brand\">Search product by brand:  </label><br/>
    <input type=\"text\" name=\"brand\" value=\"{{ brand }}\">

    <input type=\"submit\" value=\"Search\">
</form> <br/>

<ol>
    {% for allBeautyProducts in beautyProducts %}
        <li> {{ allBeautyProducts.brand }}
            {{ allBeautyProducts.kind }},
            {{ allBeautyProducts.name }}
            Collection: {{ allBeautyProducts.collection }}
            Price: {{ allBeautyProducts.price }}
            Quantity: {{ allBeautyProducts.quantity }}
        </li>

        ---> <a href=\"http://localhost/CodeIgniter/index.php/BeautyShop/deleteBeautyProducts/{{ allBeautyProducts.id }}\"> Delete this product </a> <br/><br/>
        ---> <a href=\"http://localhost/CodeIgniter/index.php/BeautyShop/updateForm/{{ allBeautyProducts.id }}\"> Update this product </a> <br/><br/>
    {% endfor %} <br/> <br/>
</ol>

</body>

</html>", "beautyShop/allProd.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/beautyShop/allProd.twig");
    }
}
