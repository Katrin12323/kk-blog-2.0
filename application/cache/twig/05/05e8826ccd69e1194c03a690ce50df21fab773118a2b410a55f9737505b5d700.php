<?php

/* supermarket/productForm.twig */
class __TwigTemplate_e20928cdd8f6695a2d89973150c7eac01b36a4c243bd02464454a6a0974c9287 extends Twig_Template
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
        echo "<html xmlns=\"http://www.w3.org/1999/html\">

<head>
    <title> products </title>
</head>

<body>
<form action=\"http://localhost/CodeIgniter/index.php/Supermarket/saveProduct\" method=\"post\">

    <label for=\"productName\"> Product name </label><br/>
    <input type=\"text\" name=\"productName\"> <br/><br/>

    <label for=\"price\"> Price:  </label><br/>
    <input type=\"number\" name=\"price\"> <br/> <br/>

    <label for=\"barcode\"> Barcode:  </label><br/>
    <input type=\"number\" name=\"barcode\"> <br/> <br/>

    <label for=\"quantity\"> Quantity:  </label><br/>
    <input type=\"number\" name=\"quantity\"> <br/> <br/>

    <input type=\"submit\" value=\"Save\">

</form>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "supermarket/productForm.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html xmlns=\"http://www.w3.org/1999/html\">

<head>
    <title> products </title>
</head>

<body>
<form action=\"http://localhost/CodeIgniter/index.php/Supermarket/saveProduct\" method=\"post\">

    <label for=\"productName\"> Product name </label><br/>
    <input type=\"text\" name=\"productName\"> <br/><br/>

    <label for=\"price\"> Price:  </label><br/>
    <input type=\"number\" name=\"price\"> <br/> <br/>

    <label for=\"barcode\"> Barcode:  </label><br/>
    <input type=\"number\" name=\"barcode\"> <br/> <br/>

    <label for=\"quantity\"> Quantity:  </label><br/>
    <input type=\"number\" name=\"quantity\"> <br/> <br/>

    <input type=\"submit\" value=\"Save\">

</form>
</body>

</html>", "supermarket/productForm.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/supermarket/productForm.twig");
    }
}
