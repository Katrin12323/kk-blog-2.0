<?php

/* supermarket/show_product.twig */
class __TwigTemplate_2621ac3a5fea7a041ce27e73eb767f52cb865c3901b1f3527245c7cfc5e2f005 extends Twig_Template
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
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "productName", array()), "html", null, true);
        echo " </br>
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array()), "html", null, true);
        echo " </br>
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "barcode", array()), "html", null, true);
        echo " </br>
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity", array()), "html", null, true);
        echo " </br>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "supermarket/show_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
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
    {{ product.productName }} </br>
    {{ product.price }} </br>
    {{ product.barcode }} </br>
    {{ product.quantity }} </br>

</body>
</html>
", "supermarket/show_product.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/supermarket/show_product.twig");
    }
}
