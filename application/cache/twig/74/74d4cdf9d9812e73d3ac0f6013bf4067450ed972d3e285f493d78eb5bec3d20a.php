<?php

/* beautyShop/beautyForm.twig */
class __TwigTemplate_8984f9b773505b571580b7ca768c72f50c4f941e9c93851897288be762803e30 extends Twig_Template
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
    <title> Beauty Shop </title>
</head>

<body>
    <form action=\"http://localhost/CodeIgniter/index.php/BeautyShop/";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        if ((isset($context["id"]) ? $context["id"] : null)) {
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        }
        echo "\" method=\"post\">

        <label for=\"brand\"> Brand: </label><br/>
        <input type=\"text\" name=\"brand\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "brand", array()), "html", null, true);
        echo "\"><br/><br/>

        <label for=\"kind\"> Kind: </label><br/>
        <input type=\"text\" name=\"kind\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "kind", array()), "html", null, true);
        echo "\"><br/><br/>

        <label for=\"name\"> Name of product: </label><br/>
        <input type=\"text\" name=\"name\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "\"><br/><br/>

        <label for=\"collection\"> Collection: </label><br/>
        <input type=\"text\" name=\"collection\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "collection", array()), "html", null, true);
        echo "\"><br/><br/>

        <label for=\"price\"> Price: </label><br/>
        <input type=\"text\" name=\"price\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array()), "html", null, true);
        echo "\"><br/><br/>

        <label for=\"quantity\"> Quantity: </label><br/>
        <input type=\"number\" name=\"quantity\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity", array()), "html", null, true);
        echo "\"><br/><br/>

        <input type=\"submit\" value=\"Save\">

    </form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "beautyShop/beautyForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  61 => 22,  55 => 19,  49 => 16,  43 => 13,  37 => 10,  27 => 7,  19 => 1,);
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
    <title> Beauty Shop </title>
</head>

<body>
    <form action=\"http://localhost/CodeIgniter/index.php/BeautyShop/{{ action }}{% if id %}/{{ id }}{% endif %}\" method=\"post\">

        <label for=\"brand\"> Brand: </label><br/>
        <input type=\"text\" name=\"brand\" value=\"{{ product.brand }}\"><br/><br/>

        <label for=\"kind\"> Kind: </label><br/>
        <input type=\"text\" name=\"kind\" value=\"{{ product.kind }}\"><br/><br/>

        <label for=\"name\"> Name of product: </label><br/>
        <input type=\"text\" name=\"name\" value=\"{{ product.name }}\"><br/><br/>

        <label for=\"collection\"> Collection: </label><br/>
        <input type=\"text\" name=\"collection\" value=\"{{ product.collection }}\"><br/><br/>

        <label for=\"price\"> Price: </label><br/>
        <input type=\"text\" name=\"price\" value=\"{{ product.price }}\"><br/><br/>

        <label for=\"quantity\"> Quantity: </label><br/>
        <input type=\"number\" name=\"quantity\" value=\"{{ product.quantity }}\"><br/><br/>

        <input type=\"submit\" value=\"Save\">

    </form>
</body>
</html>", "beautyShop/beautyForm.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/beautyShop/beautyForm.twig");
    }
}
