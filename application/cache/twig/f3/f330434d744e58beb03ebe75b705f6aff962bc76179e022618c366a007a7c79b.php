<?php

/* shoesShop/shoeForm.twig */
class __TwigTemplate_71d9fec8152494dd8286f77e13b2f2c68cc11b514bb6a1a08db76df0385fbc11 extends Twig_Template
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
    <title>Shoes Shop </title>
</head>
<body>
    <form action=\"http://localhost/CodeIgniter/index.php/ShoesShop/";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        if ((isset($context["id"]) ? $context["id"] : null)) {
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        }
        echo "\" method=\"post\">

        <label for=\"brand\">Brand </label><br/>
        <input type=\"text\" name=\"brand\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shoes"]) ? $context["shoes"] : null), "brand", array()), "html", null, true);
        echo "\"><br/><br/>

        <label for=\"type\">Type </label><br/>
        <input type=\"text\" name=\"type\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shoes"]) ? $context["shoes"] : null), "type", array()), "html", null, true);
        echo "\"><br/><br/>

        <label for=\"size\">Size </label><br/>
        <input type=\"number\" name=\"size\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shoes"]) ? $context["shoes"] : null), "size", array()), "html", null, true);
        echo "\"><br/><br/>

        <label for=\"color\">Color </label><br/>
        <input type=\"text\" name=\"color\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shoes"]) ? $context["shoes"] : null), "color", array()), "html", null, true);
        echo "\"><br/><br/>

        <label for=\"price\">Price </label><br/>
        <input type=\"text\" name=\"price\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shoes"]) ? $context["shoes"] : null), "price", array()), "html", null, true);
        echo "\"><br/><br/>

        <label for=\"quantity\">Quantity </label><br/>
        <input type=\"text\" name=\"quantity\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shoes"]) ? $context["shoes"] : null), "quantity", array()), "html", null, true);
        echo "\"><br/><br/>

        <input type=\"submit\" value=\"Save\">



    </form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "shoesShop/shoeForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  60 => 21,  54 => 18,  48 => 15,  42 => 12,  36 => 9,  26 => 6,  19 => 1,);
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
    <title>Shoes Shop </title>
</head>
<body>
    <form action=\"http://localhost/CodeIgniter/index.php/ShoesShop/{{ action }}{% if id %}/{{ id }}{% endif %}\" method=\"post\">

        <label for=\"brand\">Brand </label><br/>
        <input type=\"text\" name=\"brand\" value=\"{{ shoes.brand }}\"><br/><br/>

        <label for=\"type\">Type </label><br/>
        <input type=\"text\" name=\"type\" value=\"{{ shoes.type }}\"><br/><br/>

        <label for=\"size\">Size </label><br/>
        <input type=\"number\" name=\"size\" value=\"{{ shoes.size }}\"><br/><br/>

        <label for=\"color\">Color </label><br/>
        <input type=\"text\" name=\"color\" value=\"{{ shoes.color }}\"><br/><br/>

        <label for=\"price\">Price </label><br/>
        <input type=\"text\" name=\"price\" value=\"{{ shoes.price }}\"><br/><br/>

        <label for=\"quantity\">Quantity </label><br/>
        <input type=\"text\" name=\"quantity\" value=\"{{ shoes.quantity }}\"><br/><br/>

        <input type=\"submit\" value=\"Save\">



    </form>
</body>
</html>", "shoesShop/shoeForm.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/shoesShop/shoeForm.twig");
    }
}
