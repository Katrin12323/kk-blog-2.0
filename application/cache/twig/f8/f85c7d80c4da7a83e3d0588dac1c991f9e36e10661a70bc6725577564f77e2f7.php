<?php

/* supermarket/searchproduct.twig */
class __TwigTemplate_893a667bc3414b76009336001c12855b18635b1185f2b0322abe9bc314a067fa extends Twig_Template
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
<form action=\"http://localhost/CodeIgniter/index.php/Supermarket/searchProduct\" method=\"post\">

    <label for=\"productName\"> Product name </label><br/>
    <input type=\"text\" name=\"productName\"> <br/><br/>

    <label for=\"barcode\"> Barcode:  </label><br/>
    <input type=\"number\" name=\"barcode\"> <br/> <br/>

    <input type=\"submit\" value=\"Search\">

</form>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "supermarket/searchproduct.twig";
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
<form action=\"http://localhost/CodeIgniter/index.php/Supermarket/searchProduct\" method=\"post\">

    <label for=\"productName\"> Product name </label><br/>
    <input type=\"text\" name=\"productName\"> <br/><br/>

    <label for=\"barcode\"> Barcode:  </label><br/>
    <input type=\"number\" name=\"barcode\"> <br/> <br/>

    <input type=\"submit\" value=\"Search\">

</form>
</body>

</html>", "supermarket/searchproduct.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/supermarket/searchproduct.twig");
    }
}
